<?php

namespace App\Http\Controllers;

use App\Models\Speculation;
use App\Http\Requests\StoreSpeculationRequest;
use App\Http\Requests\UpdateSpeculationRequest;
use Illuminate\Support\Facades\Storage;

class SpeculationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speculations = Speculation::orderBy("created_at", "desc")->get();

        return view("back-office.pages.speculation.index", compact("speculations"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Speculation $speculation)
    {
        return view("back-office.pages.speculation.create", ['speculation' => $speculation, 'idspeculation' => null]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSpeculationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpeculationRequest $request)
    {
        
        if ($request->hasFile('image')) {
        $path= $request->file('image')->store('images','public');
        }
        else{
            $path= '';
        }
        // Speculation::create($request->all());
        Speculation::create([
            'nom'=> $request->nom,
            'variete'=> $request->variete,
            'description'=> $request->description,
            'image'=> $path,

        ]);
        return redirect()->route('speculation.index')->with('success','creer avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Speculation  $speculation
     * @return \Illuminate\Http\Response
     */
    public function show(Speculation $speculation)
    {
        return view('back-office.pages.speculation.create', ['speculation' => $speculation, 'idspeculation' => $speculation->id]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Speculation  $speculation
     * @return \Illuminate\Http\Response
     */
    public function edit(Speculation $speculation)
    {
        return view('back-office.pages.speculation.edit', ['speculation'=> $speculation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSpeculationRequest  $request
     * @param  \App\Models\Speculation  $speculation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpeculationRequest $request, Speculation $speculation)
    {
        if ($request->hasFile('image')) {
            
            $path = $request->file('image')->store('images','public');
        }
        $speculation->update([
            'nom' => $request->nom,
            'variete'=> $request->variete,
            'description'=> $request->description,
            'image'=> isset($path) ? $path : $speculation->image,
       ] );
        return redirect()->route('speculation.index')->with('success','modifier avec succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Speculation  $speculation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speculation $speculation)
    {
        Storage::disk('public')->delete($speculation->image);
       Speculation::destroy($speculation->id);
       return redirect()->route('speculation.index')->with('error','supprimer avec succes');
       
    }
}