<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationPaysane extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'libelle',
        'niveau',
        'date_creation',
        'numero_recipisse',
        'rccm_ninea',
        'statut_juridique',
        'siege',
        'filiere_agricole',
        'nombre_membre',
        'nombre_base',
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function collecte()
    {
        return $this->hasMany(Collecte::class);
    }
    public function localites()
    {
        return $this->belongsTo(Localite::class, 'localite_id', 'id');
    }
    public function financements()
    {
        return $this->hasMany(Financement::class);
    }
    public function speculations()
    {
        return $this->belongsToMany(Speculation::class, 'operation_speculations', 'operation_paysane_id', 'speculation_id');
    }
}
