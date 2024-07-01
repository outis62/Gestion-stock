<?php

namespace App\Http\Controllers;

use App\Models\Localite;
use App\Http\Requests\StoreLocaliteRequest;
use App\Http\Requests\UpdateLocaliteRequest;

class LocaliteController extends Controller
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
     * @param  \App\Http\Requests\StoreLocaliteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocaliteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Localite  $localite
     * @return \Illuminate\Http\Response
     */
    public function show(Localite $localite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Localite  $localite
     * @return \Illuminate\Http\Response
     */
    public function edit(Localite $localite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLocaliteRequest  $request
     * @param  \App\Models\Localite  $localite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocaliteRequest $request, Localite $localite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Localite  $localite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Localite $localite)
    {
        //
    }
}
