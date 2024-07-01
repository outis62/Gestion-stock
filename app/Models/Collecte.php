<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collecte extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'date_debut',
        'date_fin',
        'quantite',
        'rendement_production',
        'superficie',
        'operation_paysane_id',
        'moyen_stockage_id',
        'speculation_id',
        'unite_mesure_id',
        'qualite',
    ];
    public function operationPaysanes()
    {
        return $this->belongsTo(OperationPaysane::class, 'operation_paysane_id', 'id');
    }
    public function moyenStockage()
    {
        return $this->belongsTo(MoyenStockage::class, 'moyen_stockage_id', 'id');
    }
    public function commercialisations()
    {
        return $this->hasMany(Commercialisation::class);
    }
    public function speculation()
    {
        return $this->belongsTo(Speculation::class);
    }
    public function uniteMesure()
    {
        return $this->belongsTo(UniteMesure::class);
    }
    public function detailsCollectes()
    {
        return $this->hasMany(DetailCollecte::class);
    }
}
