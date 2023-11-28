<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trip; //add trip Model - Data is coming from the database via Model.

class tripController extends Controller
{

    public function index()
    {
        $trip = trip::all();
        return view ('trip.index')->with('trip', $trip);
    }
    public function dashboard()
    {
        $trip = trip::all();
        return view ('trip.dashboard')->with('trip', $trip);
    }

    


    public function create()
    {
        return view('trip.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
            $destinationPath = public_path('img');
            $file->move($destinationPath, $filename);
            $input['image'] = $filename;
        }
        trip::create($input);
        return redirect('trip')->with('flash_message', 'trip Addedd!');
    }


    public function show(string $id)
    {
        $trip = trip::find($id);
        return view('trip.show')->with('trip', $trip);
    }


    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit($id)
    {
        $trip = trip::find($id);
        return view('trip.edit')->with('trip', $trip);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        $trip = trip::find($id);
        $input = $request->all();
        $trip->update($input);
        return redirect('trip')->with('flash_message', 'trip Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy($id)
    {
        trip::destroy($id);
        return redirect('trip')->with('flash_message', 'trip deleted!');
    }
}
