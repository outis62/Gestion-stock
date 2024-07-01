<?php

namespace App\Http\Livewire\Commercialisation;

use App\Models\Commercialisation;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CommercialisationTable extends DataTableComponent
{
    public $viewRoute;
    protected $model = Commercialisation::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->hideIf(true),
            Column::make("Quantité", "quantite")
                ->searchable(),
            Column::make("Prix", "prix")
                ->searchable()
                ->format(function ($value) {
                    return formatMontant($value);
                }),
            Column::make("Date début", "date_debut")
                ->searchable()
                ->format(function ($value) {
                    return formatDate($value);
                }),
            Column::make("Date fin", "date_fin")
                ->searchable()
                ->format(function ($value) {
                    return formatDate($value);
                }),
            Column::make("Statut", "statut")
                ->format(function ($value) {
                    return $value ?
                    '<span class="badge badge-soft-success">Valide</span>' :
                    '<span class="badge badge-soft-danger">Invalide</span>';
                })
                ->html(),
            Column::make('Action')
                ->label(
                    fn($row, Column $column) => view('partials.commercialisation-table-action')
                        ->with(['viewLink' => route($this->viewRoute['link'], $row)])
                )->html(),
        ];
    }

    public function builder(): EloquentBuilder
    {
        $userConnect = Auth::user();
        $operationPaysaneId = $userConnect->operation_paysane_id;
        return Commercialisation::query()
            ->join('collectes', 'collectes.id', '=', 'commercialisations.collecte_id')
            ->where('collectes.operation_paysane_id', $operationPaysaneId);
    }

}
