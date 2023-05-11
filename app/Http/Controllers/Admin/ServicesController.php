<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Service::all();

        return view('Admin.pages.admin.servicesTable.show',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.admin.servicesTable.create'); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'max:255'],
            'image' => ['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
        ]);

        $photoName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $photoName);
        
        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $photoName,
        ]);

        return redirect()->route('admin.services.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $singleData = Service::Where('id',$id)->first();
        // return view('admin.services.detailsServices', compact('singleData'));
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