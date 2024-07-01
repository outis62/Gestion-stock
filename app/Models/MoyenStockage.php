<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoyenStockage extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'libelle',
        'capacite',
        'etat_observation',
        'annee_acquisition',
        'mode_acquisition_id',
        'operation_paysane_id',
    ];
    public function modeAcquisitions()
    {
        return $this->belongsTo(ModeAcquisition::class, 'mode_acquisition_id', 'id');
    }
    public function collecte()
    {
        return $this->hasMany(Collecte::class);
    }
    public function operationPaysane()
    {
        return $this->belongsTo(OperationPaysane::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($moyenStockage) {
            if ($moyenStockage->collectes()->count() > 0) {
                return false;
            }
        });
    }
}
