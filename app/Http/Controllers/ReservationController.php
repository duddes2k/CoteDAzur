<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\BookingMailable;
use App\Mail\InquiryMailable;

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
                    $menu = 'yacht';
                    $rate = 45000;
                    $rate2 = 43000;
                    $rate_per_day = $rate / 7;
                    
                    $total = $days * (float)$rate_per_day;
                    if ($days >= 7)
                    {
                        $total = $days * (float)$rate_per_day;
                    }
                    
                    break;
            case 3:
                    $rental = "Rolls-Royce Phantom Drophead";
                    $menu = 'car';
                    $rate_per_day = 2950;
                    $total = $days * (float)$rate_per_day;
                    break;
            case 2:
                    $rental = "VanDutch 40 Superfast Luxury Speedboat";
                    $menu = 'speedboat';
                    $rate_per_day = 2950;
                    $total = $days * (float)$rate_per_day;
                    break;
        }

        return view('reservation')
                        ->with('pickdate', $request->pickdate)
                        ->with('returndate', $request->returndate)
                        ->with('rental', $rental)
                        ->with('service_id', $request->rental)
                        ->with('duration', $days)
                        ->with('total', $total)
                        ->with('rate', $rate_per_day)
                        ->with('menu', $menu);
    }

    /**
     * Email Notification
     * Sending email notificationt to owner and client upon submitting booking request
     * 
     * @return void
     */
    public function mailBooking( Request $request)
    {
        $email_content = [
            'service_id' => $request->service_id,
            'rental' => $request->rental,
            'pickdate' => $request->pickdate,
            'returndate' => $request->returndate,
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

        Mail::to('jean-paul.reinaud@wanadoo.fr')
            ->cc('aernout@pldtdsl.net')
            ->bcc('duddesatwork@gmail.com')
            ->send(new BookingMailable($email_content));
        
        return redirect('/thankyou');
    }

    /**
     * Send Inquiry
     * 
     * @return void
     */
    public function mailInquiry( Request $request )
    {
        $email_content = [
            'name' => $request->fullname,
            'email' => $request->emailadd,
            'message' => $request->message
        ];

         Mail::to('jean-paul.reinaud@wanadoo.fr')
            ->cc('aernout@pldtdsl.net')
            ->bcc('duddesatwork@gmail.com')
            ->send(new InquiryMailable($email_content));
        
        return redirect('/thankyou');
    }

    public function thankyou()
    {
        return view('thankyou')->with('menu','home');
    }
}
