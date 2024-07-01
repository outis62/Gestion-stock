<?php

namespace App\Http\Controllers;

use App\Models\InstitutFinancementPartenaire;
use App\Http\Requests\StoreInstitutFinancementPartenaireRequest;
use App\Http\Requests\UpdateInstitutFinancementPartenaireRequest;

class InstitutFinancementPartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back-office.pages.institut.index');
        // dd('InstitutFinancementPartenaireController index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(InstitutFinancementPartenaire $institutFinancementPartenaire)
    {
       return view("back-office.pages.institut.create",compact('institutFinancementPartenaire'));
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInstitutFinancementPartenaireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInstitutFinancementPartenaireRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstitutFinancementPartenaire  $institutFinancementPartenaire
     * @return \Illuminate\Http\Response
     */
    public function show(InstitutFinancementPartenaire $institutFinancementPartenaire)
    {
        return view("back-office.pages.institut.show",compact('institutFinancementPartenaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstitutFinancementPartenaire  $institutFinancementPartenaire
     * @return \Illuminate\Http\Response
     */
    public function edit(InstitutFinancementPartenaire $institutFinancementPartenaire)
    {
        return view("back-office.pages.institut-microfinance.edit", compact("institutFinancementPartenaire"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstitutFinancementPartenaireRequest  $request
     * @param  \App\Models\InstitutFinancementPartenaire  $institutFinancementPartenaire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInstitutFinancementPartenaireRequest $request, InstitutFinancementPartenaire $institutFinancementPartenaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstitutFinancementPartenaire  $institutFinancementPartenaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstitutFinancementPartenaire $institutFinancementPartenaire)
    {
        //
    }
}