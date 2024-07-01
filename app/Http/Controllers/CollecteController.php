<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCollecteRequest;
use App\Http\Requests\UpdateCollecteRequest;
use App\Models\Collecte;

class CollecteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front-office.pages.collecte.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collecte = new Collecte();
        return view('front-office.pages.collecte.create', compact('collecte'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCollecteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCollecteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collecte  $collecte
     * @return \Illuminate\Http\Response
     */
    public function show(Collecte $collecte)
    {
        session(['collecteId' => $collecte->id]);
        return view('front-office.pages.collecte.show', compact('collecte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collecte  $collecte
     * @return \Illuminate\Http\Response
     */
    public function edit(Collecte $collecte)
    {
        return view('front-office.pages.collecte.edit', compact('collecte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCollecteRequest  $request
     * @param  \App\Models\Collecte  $collecte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCollecteRequest $request, Collecte $collecte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collecte  $collecte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collecte $collecte)
    {
        //
    }
    public function importExcel()
    {
        return view('front-office.pages.collecte.importExcel');
    }
}
