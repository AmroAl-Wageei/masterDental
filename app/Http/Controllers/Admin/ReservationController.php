<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $reservations = Reservation::all();

        $data = [];
        foreach ($reservations as $reservation) {
            $data[] = [
                'first_name' => $reservation->first_name,
                'last_name' => $reservation->last_name,
                'email' => $reservation->email,
                'phoneNumber' => $reservation->phoneNumber,
                'comment' => $reservation->comment,
                'res_date' => $reservation->res_date,
                'status' => $reservation->status,
                'service_name' => isset($reservation->service) ? $reservation->service->name : "",


            ];
        }
        return view('Admin.pages.admin.reservationTable.show',['reservations'=>$reservations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Reservation::findOrfail($id);
        return view('Admin.pages.admin.reservationTable.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $data = Reservation::findOrfail($id);

        $data->status = $request->status;


        $data->save();
        //-------------------------------

        return redirect()->route('admin.reservation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}