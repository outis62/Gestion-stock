<?php

namespace App\Http\Controllers;

use App\Models\Paysan;
use App\Http\Requests\StorePaysanRequest;
use App\Http\Requests\UpdatePaysanRequest;

class PaysanController extends Controller
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
     * @param  \App\Http\Requests\StorePaysanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaysanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paysan  $paysan
     * @return \Illuminate\Http\Response
     */
    public function show(Paysan $paysan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paysan  $paysan
     * @return \Illuminate\Http\Response
     */
    public function edit(Paysan $paysan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaysanRequest  $request
     * @param  \App\Models\Paysan  $paysan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaysanRequest $request, Paysan $paysan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paysan  $paysan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paysan $paysan)
    {
        //
    }
}
