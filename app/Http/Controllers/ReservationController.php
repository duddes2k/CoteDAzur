<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

use Redirect, URL;

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
                    $rate = 5000;
                    $total = $days * (float)$rate;
                    break;
            case 2:
                    $rental = "Rolls-Royce Phantom Drophead II";
                    $rate = 1350;
                    $total = $days * (float)$rate;
                    break;
            case 3:
                    $rental = "VanDutch 40 Luxury Boat";
                    $rate = 2654.68;
                    $total = $days * (float)$rate;
                    break;
        }

        return view('reservation')
                        ->with('pickdate', $request->pickdate)
                        ->with('returndate', $request->returndate)
                        ->with('rental', $rental)
                        ->with('duration', $days)
                        ->with('total', $total);
    }

    /**
     * Send Email
     */
    public function mailInquery( Request $request)
    {
        $email_content = [
            'rental' => $request->rental,
            'pickdate' => $request->pickdate,
            'returndate' => $request->retundate,
            'duration' => $request->duration,
            'total' => $request->total,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'info' => $request->info
        ];

        Mail::to('duddesatwork@gmail.com')->send(new SendMailable($email_content));
        
        return redirect('/thankyou');
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
