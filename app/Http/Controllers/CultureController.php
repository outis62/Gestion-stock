<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use App\Http\Requests\StoreCultureRequest;
use App\Http\Requests\UpdateCultureRequest;

class CultureController extends Controller
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
     * @param  \App\Http\Requests\StoreCultureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCultureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Culture  $culture
     * @return \Illuminate\Http\Response
     */
    public function show(Culture $culture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Culture  $culture
     * @return \Illuminate\Http\Response
     */
    public function edit(Culture $culture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCultureRequest  $request
     * @param  \App\Models\Culture  $culture
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCultureRequest $request, Culture $culture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Culture  $culture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Culture $culture)
    {
        //
    }
}
