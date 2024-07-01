<?php

namespace App\Http\Controllers;

use App\Models\Financement;
use App\Http\Requests\StoreFinancementRequest;
use App\Http\Requests\UpdateFinancementRequest;

class FinancementController extends Controller
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
     * @param  \App\Http\Requests\StoreFinancementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFinancementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Financement  $financement
     * @return \Illuminate\Http\Response
     */
    public function show(Financement $financement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Financement  $financement
     * @return \Illuminate\Http\Response
     */
    public function edit(Financement $financement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFinancementRequest  $request
     * @param  \App\Models\Financement  $financement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFinancementRequest $request, Financement $financement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Financement  $financement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Financement $financement)
    {
        //
    }
}
