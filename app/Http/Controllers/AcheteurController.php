<?php

namespace App\Http\Controllers;

use App\Models\Acheteur;
use App\Http\Requests\StoreAcheteurRequest;
use App\Http\Requests\UpdateAcheteurRequest;

class AcheteurController extends Controller
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
     * @param  \App\Http\Requests\StoreAcheteurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAcheteurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acheteur  $acheteur
     * @return \Illuminate\Http\Response
     */
    public function show(Acheteur $acheteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acheteur  $acheteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Acheteur $acheteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAcheteurRequest  $request
     * @param  \App\Models\Acheteur  $acheteur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAcheteurRequest $request, Acheteur $acheteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acheteur  $acheteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acheteur $acheteur)
    {
        //
    }
}
