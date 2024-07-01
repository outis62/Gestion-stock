<?php

namespace App\Http\Controllers;

use App\Models\Besoin;
use App\Http\Requests\StoreBesoinRequest;
use App\Http\Requests\UpdateBesoinRequest;

class BesoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBesoinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBesoinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Besoin  $besoin
     * @return \Illuminate\Http\Response
     */
    public function show(Besoin $besoin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Besoin  $besoin
     * @return \Illuminate\Http\Response
     */
    public function edit(Besoin $besoin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBesoinRequest  $request
     * @param  \App\Models\Besoin  $besoin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBesoinRequest $request, Besoin $besoin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Besoin  $besoin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Besoin $besoin)
    {
        //
    }
}
