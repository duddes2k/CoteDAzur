<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

use App\Booking;
use App\Service;
use App\Rate;
use App\Client;

use Carbon\Carbon;

use Redirect, URL;

class ReservationController extends Controller
{
    public function index( Request $request)
    {
        // Convert to number of days
        $datetime1 = strtotime($request->pickdate);
        $datetime2 = strtotime($request->returndate);
        $interval = $datetime2 - $datetime1;
        $days = floor($interval / (60*60*24) );
        


        switch ($request->rental)
        {
            case 1:
                    $rental = "Luxury Mega Yacht";
                    $rate = 45000;
                    $rate2 = 43000;
                    
                    $total = $days * (float)$rate;
                    if ($days >= 7)
                    {
                        $total = $days * (float)$rate2;
                    }
                    
                    break;
            case 3:
                    $rental = "Rolls-Royce Phantom Drophead";
                    $rate = 2950;
                    $total = $days * (float)$rate;
                    break;
            case 2:
                    $rental = "VanDutch 40 Superfast Luxury Speedboat";
                    $rate = 2950;
                    $total = $days * (float)$rate;
                    break;
        }

        return view('reservation')
                        ->with('pickdate', $request->pickdate)
                        ->with('returndate', $request->returndate)
                        ->with('rental', $rental)
                        ->with('service_id', $request->rental)
                        ->with('duration', $days)
                        ->with('total', $total);
    }

    /**
     * Email Notification
     * Sending email notificationt to owner and client upon submitting booking request
     * 
     * @return void
     */
    public function mailInquery( Request $request)
    {
        $email_content = [
            'service_id' => $request->service_id,
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

        $new_booking_id = Booking::create([
                            'code'           => 'BK-' . Carbon::now()->format('YmdHis') .'-'. mt_rand(4,100),
                            'service_id'     => $request->service_id,
                            'departure_date' => Carbon::parse($request->pickdate)->format('Y-m-d'),
                            'departure_time' => '00:00:00',
                            'return_date'    => Carbon::parse($request->returndate)->format('Y-m-d'),
                            'return_time'    => '00:00:00',
                            'duration'       => $request->duration,
                            'total'          => $request->total,
                            'status'         => 'INQUIRY'
                        ]);
        
        $new_client = Client::create([
                        'booking_id' => $new_booking_id->id,
                        'first_name' => $request->firstname,
                        'last_name'  => $request->lastname,
                        'phone'      => $request->phone,
                        'email'      => $request->email,
                        'other_info' => $request->info
                    ]); 

        Mail::to('duddesatwork@gmail.com')->send(new SendMailable($email_content));
        
        return redirect('/thankyou');
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
