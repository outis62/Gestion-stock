<?php

namespace App\Http\Controllers;

use App\Models\Prospection;
use App\Http\Requests\StoreProspectionRequest;
use App\Http\Requests\UpdateProspectionRequest;

class ProspectionController extends Controller
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
     * @param  \App\Http\Requests\StoreProspectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProspectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Http\Response
     */
    public function show(Prospection $prospection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Http\Response
     */
    public function edit(Prospection $prospection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProspectionRequest  $request
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProspectionRequest $request, Prospection $prospection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prospection $prospection)
    {
        //
    }
}
