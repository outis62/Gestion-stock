<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMoyenStockageRequest;
use App\Http\Requests\UpdateMoyenStockageRequest;
use App\Models\ModeAcquisition;
use App\Models\MoyenStockage;
use Illuminate\Http\Request;

class MoyenStockageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $operationPaysaneId = $user->operation_paysane_id;
        $moyenStockages = MoyenStockage::where('operation_paysane_id', $operationPaysaneId)->get();
        return view('pages.moyen_stockage.index', compact('moyenStockages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modeAcquisitions = ModeAcquisition::all();
        return view('pages.moyen_stockage.create', compact('modeAcquisitions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMoyenStockageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMoyenStockageRequest $request)
    {
        $inputs = $request->validated();
        MoyenStockage::create($inputs);
        return redirect()->route('moyen-stockage.index')->with('success', 'Moyen de stockage ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MoyenStockage  $moyenStockage
     * @return \Illuminate\Http\Response
     */
    public function show(MoyenStockage $moyenStockage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MoyenStockage  $moyenStockage
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $moyenStockage = MoyenStockage::find($id);
        $modeAcquisitions = ModeAcquisition::all();
        return view('pages.moyen_stockage.edit', compact('moyenStockage', 'modeAcquisitions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMoyenStockageRequest  $request
     * @param  \App\Models\MoyenStockage  $moyenStockage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMoyenStockageRequest $request, MoyenStockage $moyenStockage)
    {
        $moyenStockage->update($request->only([
            'libelle',
            'capacite',
            'etat_observation',
            'annee_acquisition',
            'mode_acquisition_id',
        ]));

        return redirect()->route('moyen-stockage.index')->with('success', 'Moyen de stockage mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MoyenStockage  $moyenStockage
     * @return \Illuminate\Http\Response
     */
    public function destroy(MoyenStockage $moyenStockage)
    {
        try {
            $moyenStockage->delete();
            return redirect()->route('moyen_stockage.index')
                ->with('success', 'Moyen de stockage supprimé avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Impossible de supprimer ce moyen de stockage car il est lié à une collecte.']);
        }
    }

}
