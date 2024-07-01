<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreModeAcquisitionRequest;
use App\Http\Requests\UpdateModeAcquisitionRequest;
use App\Models\ModeAcquisition;
use Illuminate\Http\Request;

class ModeAcquisitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modeAcquisitions = ModeAcquisition::all();
        return view('pages.mode_acquisition.index', compact('modeAcquisitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.mode_acquisition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreModeAcquisitionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModeAcquisitionRequest $request)
    {
        $inputs = $request->validated();

        ModeAcquisition::create($inputs);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModeAcquisition  $modeAcquisition
     * @return \Illuminate\Http\Response
     */
    public function show(ModeAcquisition $modeAcquisition)
    {
        return view('pages.mode_acquisition.show', compact('modeAcquisition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModeAcquisition  $modeAcquisition
     * @return \Illuminate\Http\Response
     */
    public function edit(ModeAcquisition $modeAcquisition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModeAcquisitionRequest  $request
     * @param  \App\Models\ModeAcquisition  $modeAcquisition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModeAcquisition $modeAcquisition)
    {
        $validatedData = $request->validate([
            'libelle' => 'required|string|max:255',
            'auteur' => 'required|string|max:255',
        ]);

        $modeAcquisition->update($validatedData);

        return redirect()->route('mode-acquisition.index')
            ->with('success', 'Mode d\'acquisition mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModeAcquisition  $modeAcquisition
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModeAcquisition $modeAcquisition)
    {
        $modeAcquisition->delete();
        return redirect()->route('mode_acquisition.index')->with('success', 'Mode d\'acquisition supprimé avec succès.');
    }
}
