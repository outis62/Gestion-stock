<?php

namespace App\Http\Livewire\Institut;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\InstitutFinancementPartenaire;

class InstitutTable extends DataTableComponent
{
    public $viewRoute;
    protected $model = InstitutFinancementPartenaire::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
            ->hideIf(true),
            Column::make("Intitule", "intitule")
                ->searchable(),
            Column::make("Generalite", "generalite")
                ->searchable(),
            Column::make("Sigle", "sigle")
                ->searchable(),
            Column::make("Adresse", "adresse")
                ->searchable(),
           
                
                Column::make('Action')
                ->label(
                    fn ($row, Column $column) => view('partials.table-action')
                        ->with(['viewLink' => route($this->viewRoute['link'], $row)])
                )->html(),
        ];
    }
}