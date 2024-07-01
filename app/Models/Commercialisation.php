<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commercialisation extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'quantite',
        'unite_mesure_id',
        'prix',
        'collecte_id',
        'statut',
        'date_debut',
        'date_fin',
    ];
    public function collecte()
    {
        return $this->belongsTo(Collecte::class, 'collecte_id', 'id');
    }
    public function uniteMesure()
    {
        return $this->belongsTo(UniteMesure::class);
    }
    public function relationCommerciales()
    {
        return $this->hasMany(RelationCommerciale::class);
    }
}
