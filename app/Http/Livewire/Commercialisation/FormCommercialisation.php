<?php

namespace App\Http\Livewire\Commercialisation;

use App\Models\Collecte;
use App\Models\Commercialisation;
use App\Models\UniteMesure;
use Livewire\Component;

class FormCommercialisation extends Component
{
    public $listRoute;
    public $addRoute;
    public $showRoute;
    public $commercialisation;
    public $uniteMesures;
    public $uniteMesure;
    public $collectes;
    public $collecte;
    public $quantite;
    public $prix;
    public $statut;
    public $unite_mesure_id;
    public $collecte_id;
    public $date_debut;
    public $date_fin;

    public function mount()
    {
        $this->statut = 1;

        if ($this->commercialisation->id) {
            $this->quantite = $this->commercialisation->quantite ? $this->commercialisation->quantite : '';
            $this->prix = $this->commercialisation->prix ? $this->commercialisation->prix : '';
            $this->collecte_id = $this->commercialisation->collecte_id ? $this->commercialisation->collecte_id : '';
            $this->unite_mesure_id = $this->commercialisation->unite_mesure_id ? $this->commercialisation->unite_mesure_id : '';
            $this->date_debut = $this->commercialisation->date_debut ? $this->commercialisation->date_debut : '';
            $this->date_fin = $this->commercialisation->date_fin ? $this->commercialisation->date_fin : '';
            $this->statut = $this->commercialisation->statut;

            if ($this->commercialisation->date_fin && now()->greaterThanOrEqualTo($this->commercialisation->date_fin)) {
                $this->commercialisation->update(['statut' => 0]);
                $this->statut = 0;
            }
        }
    }

    public function render()
    {

        $user = auth()->user();
        $operationPaysaneId = $user->operation_paysane_id;
        $this->collectes = Collecte::where('operation_paysane_id', $operationPaysaneId)
            ->whereDoesntHave('commercialisations')
            ->get();
        $this->uniteMesures = UniteMesure::where('type', 'masse')->get();
        return view('livewire.commercialisation.form-commercialisation');
    }

    public function onSubmitFormCommerce()
    {
        // dd('test');
        $validatedData = $this->validate([
            'quantite' => 'required',
            'prix' => 'required',
            'collecte_id' => 'required',
            'unite_mesure_id' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required|after:date_debut',
            'statut' => 'nullable',
        ]);
        // dd($validatedData);
        if ($this->commercialisation->id) {
            $this->updatedForm($validatedData);
        } else {
            $this->storedForm($validatedData);

        }
    }
    public function storedForm($dataInput)
    {
        try {
            Commercialisation::create($dataInput);

            return redirect()->route($this->listRoute['link'])->with('success', "Commercialisation enregistrée avec succès !");
        } catch (\Exception $e) {
            return redirect()->route($this->listRoute['link'])->with('danger', "La Commercialisation n'a pas pu être enregistrée. Erreur : " . $e->getMessage());
        }
    }

    public function updatedForm($dataInput)
    {
        $this->commercialisation->update($dataInput);

        try {
            return redirect()->route($this->showRoute['link'], $this->commercialisation)
                ->with('success', "La commercialisation a été mise à jour avec succès !!!");
        } catch (\Throwable $th) {
            return redirect()->route($this->showRoute['link'], $this->commercialisation)
                ->with('warning', "La commercialisation n'a pas pu être mise à jour : " . $th->getMessage());
        }
    }
}
