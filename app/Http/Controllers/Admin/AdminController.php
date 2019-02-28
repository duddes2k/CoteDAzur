<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Booking;
use App\Client;
use App\Service;

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

        return view('admin.bookings', compact('bookings'));
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

        return view('admin.bookings', compact('bookings'));
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
