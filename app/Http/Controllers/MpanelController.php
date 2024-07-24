<?php

namespace App\Http\Controllers;

use App\Models\Mpanel;
use Illuminate\Http\Request;

class MpanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.login');
    }

    public function login()
    {
        return view('user.homePanel');
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
    public function show(Mpanel $mpanel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mpanel $mpanel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mpanel $mpanel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mpanel $mpanel)
    {
        //
    }
}
