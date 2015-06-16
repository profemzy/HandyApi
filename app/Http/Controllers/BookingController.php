<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateBookingRequest;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $bookings = Booking::all();
        return response()->json(['data' => $bookings], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(CreateBookingRequest $request )
    {
        $values = $request->only(['service','details','member_id']);

        Booking::create($values);

        return response()->json(['message' => 'Booking Created Successfully'], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
