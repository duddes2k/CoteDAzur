<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use MaddHatter\LaravelFullcalendar\Facades\Calendar;

use App\Booking;
use App\Client;
use App\Service;

use URL, Redirect;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::with(['client','service'])
                    ->latest('departure_date')
                    ->get();

        return view('admin.bookings', compact('bookings'))->with('menu','bookings');
    }

    /**
     * Display specific rental
     * 
     * @return \Illuminate\Http\Response
     */
    public function rentals($type)
    {
        $rental_type = $type;

        $bookings = Booking::whereHas('service', $filter = function($query) use ($rental_type){
                        $query->where('type','=', $rental_type);
                    })->with(['client','service' => $filter])
                    ->latest('departure_date')->get();

        return view('admin.bookings', compact('bookings'))->with('menu','bookings');
    }

    /**
     * Get booking details
     * 
     * @return \Illuminate\Http\Respose
     */
    public function details(Request $request)
    {
        $booking = Booking::with(['client','service'])
                    ->where('id', $request->booking_id)
                    ->first();

        if($booking)
        {
            return response()->json([
                'status' => '200',
                'message' => 'success',
                'data' => $booking
            ]);
        } else {
            return response()->json([
                'status' => '400',
                'message' => 'failed',
                'data' => []
            ]);
        }
    }

    /**
     * Display Booking Calendar
     * 
     * @return \Illuminate\Http\Response
     */
    public function calendar()
    {
        $events = [];

        $bookings = Booking::with(['client','service'])
                    ->latest('departure_date')
                    ->get();

        if($bookings->count()) {

            foreach ($bookings as $key => $booking) {

                $color = 'gray';

                switch ($booking->service->type)
                {
                    case 'car': 
                                $color = 'blue'; 
                                $rental = 'CAR RENTAL';
                                break;
                    case 'yacht': 
                                $color = 'green'; 
                                $rental = 'YACHT CHARTER';
                                break;
                    case 'speedboat': 
                                $color = 'yellow'; 
                                $rental = 'SPEEDBOAT CHARTER';
                                break;
                }

                $events[] = Calendar::event(
                    $rental.' - '.strtoupper($booking->client->first_name. ' ' .$booking->client->last_name),
                    true,
                    new \DateTime($booking->departure_date),
                    new \DateTime($booking->return_date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => $color,
                        'url' => route('admin.bookings'),
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('admin.calendar', compact('calendar'))->with('menu', 'calendar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
