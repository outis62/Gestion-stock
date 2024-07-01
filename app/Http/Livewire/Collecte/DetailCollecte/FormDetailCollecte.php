<?php

namespace App\Http\Livewire\Collecte\DetailCollecte;

use App\Models\Champ;
use App\Models\DetailCollecte;
use App\Models\Paysan;
use App\Models\UniteMesure;
use Livewire\Component;

class FormDetailCollecte extends Component
{
    public $collectes;
    public $collecte;
    public $detailCollecte;
    public $listRoute;
    public $listRouteExcel;
    public $addRoute;
    public $showRoute;
    public $detaillistRoute;
    public $uniteMesures;
    public $uniteMesure;
    public $paysans;
    public $paysan;
    public $champs;
    public $champ;
    public $quantite;
    public $commentaire;
    public $paysan_id;
    public $champ_id;
    public $collecte_id;
    public $unite_mesure_id;
    public $localite;

    public function mount()
    {
        $this->collecte_id = session('collecteId');
        $this->paysans = Paysan::all();
        $this->champs = collect();

        if ($this->detailCollecte->id) {
            $this->paysan_id = $this->detailCollecte->paysan_id ? $this->detailCollecte->paysan_id : '';
            $this->champ_id = $this->detailCollecte->champ_id ? $this->detailCollecte->champ_id : '';
            $this->unite_mesure_id = $this->detailCollecte->unite_mesure_id ? $this->detailCollecte->unite_mesure_id : '';
            $this->quantite = $this->detailCollecte->quantite ? $this->detailCollecte->quantite : '';
            $this->commentaire = $this->detailCollecte->commentaire ? $this->detailCollecte->commentaire : '';
        }
    }

    public function render()
    {
        $user = auth()->user();
        $operationPaysaneId = $user->operation_paysane_id;
        $this->paysans = Paysan::where('operation_paysane_id', $operationPaysaneId)->get();
        $this->uniteMesures = UniteMesure::where('type', 'masse')->get();
        return view('livewire.collecte.detail-collecte.form-detail-collecte');
    }

    public function onSubmitForm()
    {
        $validatedData = $this->validate([
            'collecte_id' => 'required',
            'paysan_id' => 'required',
            'champ_id' => 'required',
            'quantite' => 'required',
            'unite_mesure_id' => 'required',
            'commentaire' => 'nullable',
        ]);
        // dd($validatedData);
        if ($this->detailCollecte->id) {
            $this->updatedForm($validatedData);
        } else {
            $this->storedForm($validatedData);

        }
    }
    public function storedForm($dataInput)
    {
        try {
            DetailCollecte::create($dataInput);

            return redirect()->route($this->showRoute['link'], session('collecteId'))->with('success', "Ligne de collecte enregistrée avec succès !");
        } catch (\Exception $e) {
            return redirect()->route($this->showRoute['link'], session('collecteId'))->with('danger', "La ligne de collecte n'a pas pu être enregistrée. Erreur : " . $e->getMessage());
        }
    }

    public function updatedForm($dataInput)
    {
        $this->detailCollecte->update($dataInput);

        try {
            return redirect()->route($this->showRoute['link'], session('collecteId'))->with('success', "Ligne de collecte mise a jour avec succès !");
        } catch (\Exception $e) {
            return redirect()->route($this->showRoute['link'], session('collecteId'))->with('danger', "La ligne de collecte n'a pas pu être mise a jour. Erreur : " . $e->getMessage());
        }
    }
    public function updatedPaysanId()
    {
        if ($this->paysan_id) {
            $this->champs = Champ::where('paysan_id', $this->paysan_id)->with('localite')->get();
        } else {
            $this->champs = collect();
        }
    }

}
