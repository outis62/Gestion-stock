<?php

namespace App\Http\Livewire\Collecte;

use App\Models\Collecte;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CollecteTable extends DataTableComponent
{
    public $viewRoute;
    protected $model = Collecte::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->hideIf(true),
            Column::make("Date debut", "date_debut")
                ->searchable()
                ->format(function ($value) {
                    return formatDate($value);
                }),
            Column::make("Date fin", "date_fin")
                ->searchable()
                ->format(function ($value) {
                    return formatDate($value);
                }),
            Column::make("Quantite", "quantite")
                ->searchable()
                ->format(function ($value) {
                    return formatMontant($value);
                }),
            Column::make("Rendement", "rendement_production")
                ->searchable(),
            Column::make("Superficie", "superficie")
                ->searchable(),
            Column::make("Speculation", "speculation.nom")
                ->searchable(),
            Column::make('Action')
                ->label(
                    fn($row, Column $column) => view('partials.collection-table-action')
                        ->with(['viewLink' => route($this->viewRoute['link'], $row)])
                )->html(),
        ];
    }

    public function builder(): EloquentBuilder
    {
        $userConnect = Auth::user();
        return Collecte::query()
            ->with('speculation')
            ->where('operation_paysane_id', $userConnect->operation_paysane_id);
    }
}
