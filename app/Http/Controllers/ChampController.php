<?php

namespace App\Http\Controllers;

use App\Models\Champ;
use App\Http\Requests\StoreChampRequest;
use App\Http\Requests\UpdateChampRequest;

class ChampController extends Controller
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
     * @param  \App\Http\Requests\StoreChampRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChampRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Champ  $champ
     * @return \Illuminate\Http\Response
     */
    public function show(Champ $champ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Champ  $champ
     * @return \Illuminate\Http\Response
     */
    public function edit(Champ $champ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChampRequest  $request
     * @param  \App\Models\Champ  $champ
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChampRequest $request, Champ $champ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Champ  $champ
     * @return \Illuminate\Http\Response
     */
    public function destroy(Champ $champ)
    {
        //
    }
}
