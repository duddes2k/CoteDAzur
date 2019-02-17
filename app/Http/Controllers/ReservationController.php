<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index( Request $request)
    {
        $datetime1 = strtotime($request->pickdate);
        $datetime2 = strtotime($request->returndate);
        $interval = $datetime2 - $datetime1;
        $days = floor($interval / (60*60*24) );
 
        switch ($request->rental)
        {
            case 1:
                    $rental = "Humming Bird SuperYacht";
                    break;
            case 2:
                    $rental = "Rolls-Royce Phantom Drophead II";
                    break;
            case 3:
                    $rental = "VanDutch 40 Luxury Boat";
                    break;
        }

        return view('reservation')
                        ->with('pickdate', $request->pickdate)
                        ->with('returndate', $request->returndate)
                        ->with('rental', $rental)
                        ->with('days', $days);
    }
}
