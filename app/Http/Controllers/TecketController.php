<?php

namespace App\Http\Controllers;

use App\Models\Tecket;
use App\Models\trip;
use Illuminate\Http\Request;

class TecketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showTrip(string $id)
    {
        $trip = trip::find($id);
        return view('showTrip.show')->with('trip', $trip);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function makeTecket(string $id)
    {
        $trip = trip::find($id);
        $trip_id = Tecket::$teckets->trip_id;
        $teckets = request('all');
        if ($trip->seats_availble > 0){

            $seats = $trip->seats_availble;
             $seats = $teckets - $seats ;
           $trip_id = $trip->id;
        };


        $trip->update($trip);
        $teckets->create($teckets);
        return redirect('trip')->with('flash_message', 'trip Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function showTeckets(trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(trip $trip)
    {
        //
    }
}
