<?php

namespace App\Http\Livewire\MoyenStockage;

use App\Models\MoyenStockage;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class MoyenStockageTable extends DataTableComponent
{
    protected $model = MoyenStockage::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'asc');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->hideIf(true),
            Column::make("Libelle", "libelle")
                ->searchable()
                ->sortable(),
            Column::make("Capacite", "capacite")
                ->searchable()
                ->sortable(),
            Column::make("Etat observation", "etat_observation")
                ->searchable()
                ->sortable(),
            Column::make("Annee acquisition", "annee_acquisition")
                ->searchable()
                ->sortable(),
            Column::make("Mode acquisition id", "mode_acquisition_id")
                ->searchable()
                ->sortable(),
            Column::make('Action')
                ->label(
                    fn($row, Column $column) => view('partials.table-action')
                        ->with(['viewLink' => route($this->viewRoute['link'], $row)])
                )->html(),
        ];
    }
}
