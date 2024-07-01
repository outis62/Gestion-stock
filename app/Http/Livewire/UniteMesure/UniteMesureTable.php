<?php

namespace App\Http\Livewire;

use App\Models\UniteMesure;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class UniteMesureTable extends DataTableComponent
{
    public $viewRoute;
    public $unite;
    protected $model = UniteMesure::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSearchStatus(true);
        $this->setSearchEnabled();
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->hideIf(true),
            Column::make("Intitulé", "libelle")
                ->sortable()
                ->searchable(),
            Column::make('Action')
                ->label(
                    fn($row, Column $column) => view('partials.unite-mesure-table-action')

                )->html(),
        ];
    }

}
