<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDetailCollecteRequest;
use App\Http\Requests\UpdateDetailCollecteRequest;
use App\Models\DetailCollecte;

class DetailCollecteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(session('detailcollecte')->id);
        return view('front-office.pages.collecte.detail-collecte.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(session('collecteId')->id);
        $detailCollecte = new DetailCollecte();
        return view('front-office.pages.collecte.detail-collecte.create', compact('detailCollecte'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDetailCollecteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetailCollecteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailCollecte  $detailCollecte
     * @return \Illuminate\Http\Response
     */
    public function show(DetailCollecte $detailCollecte)
    {
        return view('front-office.pages.collecte.detail-collecte.show', compact('detailCollecte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailCollecte  $detailCollecte
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailCollecte $detailCollecte)
    {
        // dd($detailCollecte->id);
        return view('front-office.pages.collecte.detail-collecte.edit', compact('detailCollecte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetailCollecteRequest  $request
     * @param  \App\Models\DetailCollecte  $detailCollecte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailCollecteRequest $request, DetailCollecte $detailCollecte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailCollecte  $detailCollecte
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailCollecte $detailCollecte)
    {
        //
    }
}
