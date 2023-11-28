<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\User;

use Illuminate\Support\Facades\Auth;


class SampleController extends Controller
{
    function index()
    {
        return view('login');
    }

    function Registration()
    {
        return view('Registration');
    }

    function validate_registration(Request $request)
    {
        $request->validate      ([
            'name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:6',
            'phone' => 'required|min:11',
            'national'     =>'required |min:14 ',
            'city' => 'required',
        ]);

        $data = $request->all();

        User::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data ['phone'],
            'national' => $data['national'],
            'city' => $data ['city'],
            'role' => 'user',
        ]);

        return redirect('login')->with('success', 'Registration Completed, now you can login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect('trip');
            } else {
                return redirect('trips');
            }        }

        return redirect('login')->with('success', 'Login details are not valid');
    }

    function dashboard()
    {
        if(Auth::check())
        {
            if (Auth::user()->role == 'admin') {
                return view('trips');
            } else {
                return redirect('trip');
            }        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }
    public function profile()
    {
        if (auth()->check()) {
            $user = Auth::user();

            // Get the user's data from the database.
            $data = User::find($user->id);

            // Return the view of the user's profile, passing the user's data to the view.
            return view('userProfile', compact('data'));
        } else {
            return redirect('login');
        }
    }

    function logout()
    {
        Session::flush() ;

        Auth::logout();

        return Redirect('login');
    }
}





