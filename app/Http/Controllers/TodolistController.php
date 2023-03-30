<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $todolists = Todolist::all();
    //     return view('Admin.pages.admin.dashboard', compact('todolists'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'content' => 'required',
    //     ]);
    //     Todolist::create($data);
    //     return back();
    // }

    /**
     * Display the specified resource.
     */
    // public function show(Todolist $todolist)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Todolist $todolist)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Todolist $todolist)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Todolist $todolist)
    // // {
    // //     $todolist->delete();
    // //     return back();
    // // }
}