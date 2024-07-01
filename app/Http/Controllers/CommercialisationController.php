<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommercialisationRequest;
use App\Http\Requests\UpdateCommercialisationRequest;
use App\Models\Commercialisation;

class CommercialisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front-office.pages.commercialisation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $commercialisation = new Commercialisation();
        return view('front-office.pages.commercialisation.create', compact('commercialisation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommercialisationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommercialisationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commercialisation  $commercialisation
     * @return \Illuminate\Http\Response
     */
    public function show(Commercialisation $commercialisation)
    {
        return view('front-office.pages.commercialisation.show', compact('commercialisation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commercialisation  $commercialisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Commercialisation $commercialisation)
    {
        return view('front-office.pages.commercialisation.edit', compact('commercialisation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommercialisationRequest  $request
     * @param  \App\Models\Commercialisation  $commercialisation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommercialisationRequest $request, Commercialisation $commercialisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commercialisation  $commercialisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commercialisation $commercialisation)
    {
        //
    }
}
