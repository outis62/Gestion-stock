<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospection extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'nom_structure',
        'rccm_ninea',
        'statut_juridique',
        'adresse_structure',
        'siege',
        'user_id',
    ];
    public function besoins()
    {
        return $this->hasMany(Besoin::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function relationCommerciales()
    {
        return $this->hasMany(RelationCommerciale::class);
    }
}
