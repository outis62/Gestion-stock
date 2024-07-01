<?php

namespace App\Http\Livewire\Collecte;

use App\Models\Collecte;
use App\Models\MoyenStockage;
use App\Models\Speculation;
use App\Models\UniteMesure;
use Livewire\Component;

class FormCollecte extends Component
{
    public $collecte;
    public $listRoute;
    public $listRouteExcel;
    public $addRoute;
    public $showRoute;
    public $moyenStockages;
    public $speculations;
    public $uniteMesures;
    public $date_debut;
    public $date_fin;
    public $quantite;
    public $superficie;
    public $rendement_production;
    public $speculation_id;
    public $moyen_stockage_id;
    public $unite_mesure_id;
    public $operationPaysaneId;
    public $operation_paysane_id;
    public $qualite;

    public function mount()
    {
        if ($this->collecte->id) {
            $this->date_debut = $this->collecte->date_debut ? $this->collecte->date_debut : '';
            $this->date_fin = $this->collecte->date_fin ? $this->collecte->date_fin : '';
            $this->quantite = $this->collecte->quantite ? $this->collecte->quantite : '';
            $this->qualite = $this->collecte->qualite ? $this->collecte->qualite : '';
            $this->superficie = $this->collecte->superficie ? $this->collecte->superficie : '';
            $this->speculation_id = $this->collecte->speculation_id ? $this->collecte->speculation_id : '';
            $this->rendement_production = $this->collecte->rendement_production ? $this->collecte->rendement_production : '';
            $this->moyen_stockage_id = $this->collecte->moyen_stockage_id ? $this->collecte->moyen_stockage_id : '';
            $this->unite_mesure_id = $this->collecte->unite_mesure_id ? $this->collecte->unite_mesure_id : '';
        }
    }

    public function render()
    {
        $user = auth()->user();
        $operationPaysaneId = $user->operation_paysane_id;
        $this->speculations = Speculation::all();
        $this->moyenStockages = MoyenStockage::where('operation_paysane_id', $operationPaysaneId)->get();
        $this->uniteMesures = UniteMesure::where('type', 'masse')->get();
        return view('livewire.collecte.form-collecte');
    }

    public function onSubmitFormCollecte()
    {
        $operationPaysaneId = auth()->user()->operation_paysane_id;
        $validatedData = $this->validate([
            'date_debut' => 'required',
            'date_fin' => 'required|after:date_debut',
            'quantite' => 'required|numeric',
            'qualite' => 'required',
            'superficie' => 'required|numeric',
            'rendement_production' => 'required|numeric',
            'speculation_id' => 'required',
            'moyen_stockage_id' => 'required',
            'unite_mesure_id' => 'required',
        ]);
        // 1 tonne = 1000 kilogramme
        $unite_mesure_libelle = UniteMesure::find($this->unite_mesure_id)->libelle;
        if ($unite_mesure_libelle === 'tonne') {
            $validatedData['quantite'] *= 1000;
        }

        $validatedData['operation_paysane_id'] = $operationPaysaneId;

        if ($this->collecte->id) {
            $this->updatedForm($validatedData);
        } else {
            $this->storedForm($validatedData);
        }
    }

    public function storedForm($dataInput)
    {
        try {
            Collecte::create($dataInput);
            return redirect()->route($this->listRoute['link'])->with('success', "Collecte enregistrée avec succès !");
        } catch (\Exception $e) {
            return redirect()->route($this->listRoute['link'])->with('danger', "La collecte n'a pas pu être enregistrée. Erreur : " . $e->getMessage());
        }
    }

    public function updatedForm($dataInput)
    {
        $this->collecte->update($dataInput);

        try {
            return redirect()->route($this->showRoute['link'], $this->collecte)
                ->with('success', "La collecte a été mise à jour avec succès !");
        } catch (\Throwable $th) {
            return redirect()->route($this->showRoute['link'], $this->collecte)
                ->with('warning', "La collecte n'a pas pu être mise à jour : " . $th->getMessage());
        }
    }
}
