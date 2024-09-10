<?php

namespace App\Http\Controllers;

use App\Models\ClientLogos;
use Illuminate\Http\Request;

class ClientLogosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientLogos = ClientLogos::all();

        return view('page.home.index', compact('clientLogos'));
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
    public function show(ClientLogos $clientLogos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientLogos $clientLogos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClientLogos $clientLogos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientLogos $clientLogos)
    {
        //
    }
}
