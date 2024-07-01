<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUniteMesureRequest;
use App\Http\Requests\UpdateUniteMesureRequest;
use App\Models\UniteMesure;
use Illuminate\Http\Request;

class UniteMesureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unites = UniteMesure::all();
        return view('pages.unite_mesure.index', compact('unites'));
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
     * @param  \App\Http\Requests\StoreUniteMesureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUniteMesureRequest $request)
    {
        $inputs = $request->validated();

        UniteMesure::create($inputs);
        return redirect()->back()->with('success', 'Unité de mesure ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UniteMesure  $uniteMesure
     * @return \Illuminate\Http\Response
     */
    public function show(UniteMesure $uniteMesure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UniteMesure  $uniteMesure
     * @return \Illuminate\Http\Response
     */
    public function edit(UniteMesure $uniteMesure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUniteMesureRequest  $request
     * @param  \App\Models\UniteMesure  $uniteMesure
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUniteMesureRequest $request, UniteMesure $uniteMesure)
    {
        $input = $request->all();
        $uniteMesure->update($input);

        return redirect()->route('unite-mesure.index')
            ->with('success', 'Unité de mesure mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UniteMesure  $uniteMesure
     * @return \Illuminate\Http\Response
     */
    public function destroy(UniteMesure $uniteMesure)
    {
        $uniteMesure->delete();
        return redirect()->route('unite-mesure.index')->with('success', 'Unité de mesure supprimée avec succès.');
    }

}
