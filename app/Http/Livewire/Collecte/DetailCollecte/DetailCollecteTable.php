<?php

namespace App\Http\Livewire\Collecte\DetailCollecte;

use App\Models\DetailCollecte;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class DetailCollecteTable extends DataTableComponent
{
    public $viewRoute;
    protected $model = DetailCollecte::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->hideIf(true),
            Column::make("Nom paysan", "paysan.nom")
                ->searchable(),
            Column::make("Prenom paysan", "paysan.prenom")
                ->searchable(),
            Column::make("Champ", "champ.localite.libelle")
                ->searchable(),
            Column::make("Quantite", "quantite")
                ->searchable(),
            Column::make("Unite mesure", "uniteMesure.libelle")
                ->searchable(),
            Column::make("Commentaire", "commentaire")
                ->searchable(),
            ButtonGroupColumn::make('Actions')
                ->attributes(function ($row) {
                    return [
                        'class' => 'space-x-5',
                    ];
                })
                ->buttons([
                    LinkColumn::make('')
                        ->title(fn($row) => '...' . $row->name)
                        ->location(fn($row) => route('detail-collecte.edit', $row))
                        ->attributes(function ($row) {
                            return [
                                'title' => 'modifier la ligne de collecte',
                                'class' => 'btn btn-sm btn-soft-info waves-effect waves-light',
                            ];
                        }),
                ]),
        ];
    }

    public function builder(): EloquentBuilder
    {
        $collecteId = session('collecteId');
        return DetailCollecte::query()
            ->with('paysan')
            ->with('champ')
            ->with('uniteMesure')
            ->when($collecteId, function ($query, $collecteId) {
                return $query->where('collecte_id', $collecteId);
            });
    }

}
