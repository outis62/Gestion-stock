<?php

namespace App\Http\Livewire\Commercialisation;

use Livewire\Component;

class Show extends Component
{
    public $listRoute;
    public $addRoute;
    public $editRoute;
    public $viewRoute;
    public $commercialisation;
    public $commercialisations;
    public $commercialisationId;

    protected $listeners = [
        'confirmedSetCommerceState',
    ];
    public function render()
    {
        return view('livewire.commercialisation.show');
    }
    public function setCommerceState()
    {
        $this->confirm(
            'Êtes-vous sûr de bien vouloir ' . ($this->commercialisation->statut ? 'Valider' : 'Invalider') . ' la commercialisation du <strong>' . $this->commercialisation->date_debut . ' ' . $this->commercialisation->date_fin . '</strong> ?', [
                'allowOutsideClick' => false,
                'confirmButtonColor' => $this->commercialisation->statut ? '#ffc84b' : 'green',
                'confirmButtonText' => $this->commercialisation->statut ? 'Valider' : 'Invalider',
                'cancelButtonText' => 'Annuler',
                'onConfirmed' => 'confirmedSetCommerceState',
            ]);
    }
    public function confirmedSetCommerceState()
    {
        $commercialisation = $this->commercialisation->toArray();
        $commercialisation['statut'] = $this->commercialisation->statut ? 0 : 1;
        $this->commercialisation->update($commercialisation);
        return redirect()->route($this->viewRoute['link'], $this->commercialisation)
            ->with('success', 'Commercialisation du ' . $this->commercialisation->date_debut . ' ' . $this->commercialisation->date_fin . 'a été ' . ($this->commercialisation->statut ? 'Invalider' : 'Valider') . ' avec succès.');
    }
}
