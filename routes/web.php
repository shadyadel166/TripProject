<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\tripController; //add the ControllerNameSpace
use App\Models\Trip;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});
Route::controller(SampleController::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('Registration', 'Registration')->name('Registration');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    Route::get('/dashboard', 'dashboard')->name('dashboard');



});




Route::resource("/trip", tripController::class);
Route::get('/trip/{id}',  'App/Http/Controllers/tripController@show')->name('trip.show');




    Route::get('/dashboard', function () {
        // $user = User::all() ;




        // // Get the most recent trips.
        // $trips = Trip::orderBy('created_at')->limit(10)->get();

        // // Define the $trip variable.
        // $trip = $trips;

        // Return the view of the most recent trips.
        // return view('trip\dashboard', compact('trip','user'));
        return view('trip.dashboard',[
            'trip'=> Trip::orderBy('created_at')->limit(10)->get()
            ,'users'=> User::orderBy('created_at')->limit(10)->get()
        ]);

    });


    // Route::get('/showTrip/{id}', function () {
    //     return view('showTrip' ,[

    //        , 'trip' = Trip::find($id),

    //     ]);
    // });





Route::get('/customerDashborad', function () {
    return view('customerDash',[
        'users'=> User::orderBy('created_at')->limit(10)->get()
    ]);
});

Route::get('/addUser', function () {
    return view('addUser');
});
Route::get('userprofile', function () {
    // Get the user's data from the database.
    $data = User::find(Auth::user()->id);

    // Return the view of the user's profile, passing the $data variable.
    return view('userprofile', compact('data'));
});

Route::get('/contactUs', function () {
    return view('contactUs');
});
Route::get('/aboutUs', function () {
    return view('aboutUs');
});
Route::get('/trips', function () {
    return view('trips', [
        'trips'=> Trip::orderBy('created_at')->limit(10)->get()
    ]);
});



// Route::resource("/trip", tripController::class);


Route::get('wel', function () {
    return view('welcome');
});
