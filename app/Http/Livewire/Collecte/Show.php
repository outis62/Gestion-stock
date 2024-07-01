<?php
namespace App\Http\Livewire\Collecte;

use App\Models\Collecte;
use Livewire\Component;

class Show extends Component
{

    public $listRoute;
    public $addRoute;
    public $editRoute;
    public $viewRoute;
    public $collecte;
    public $collectes;
    public $collecteId;
    public $detailRoute;
    protected $listeners = [
        'deleteCollecte' => 'deleteCollecte',
    ];

    public function render()
    {
        return view('livewire.collecte.show');
    }

    public function confirmDelete($id)
    {
        $this->collecteId = $id;
        $this->confirm(
            "Êtes-vous sûr de bien vouloir supprimer cette collecte ?", [
                'allowOutsideClick' => false,
                'confirmButtonColor' => '#dc3545',
                'confirmButtonText' => 'Supprimer',
                'cancelButtonText' => 'Annuler',
                'onConfirmed' => 'deleteCollecte',
            ]);
    }

    public function deleteCollecte()
    {
        $collecte = Collecte::find($this->collecteId);
        if (!$collecte) {
            $this->dispatchBrowserEvent('error', 'Collecte non trouvée.');
            return;
        }
        $collecte->delete();
        $this->dispatchBrowserEvent('success', 'Collecte supprimée avec succès !!.');
    }
}
