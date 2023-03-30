<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('CheckLogin');
     }
    public function index()
    {
        $services = Service::all();

        return view('front.book',['services'=>$services]);
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
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phoneNumber' => ['required', 'max:10', 'min:10'],
            'res_date' => ['required'],
        ]);

        $data = Service::findOrfail($request->services_id);
        $price = $data->price;

// dd($request->services_id);
        $user = $request->user_id;
        Reservation::create([

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phoneNumber' => $request->phoneNumber,
            'email' => $request->email,
            'user_id' => $user,
            'services_id' => $request->services_id,
            'status' => 'Pending',
            'comment' => $request->comment,
            'res_date' => $request->res_date,
            'price' => $price,

        ]);
        return redirect()->route('home')->with('success', 'Reservation Successful,thank you for booking.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}