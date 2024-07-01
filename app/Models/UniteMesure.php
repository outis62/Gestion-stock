<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniteMesure extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'libelle',
        'type',
        'symbole',
        'base',
        'conversion',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'base' => 'boolean',
    ];

    public function commercialisations()
    {
        return $this->hasMany(Commercialisation::class);
    }
    public function collecte()
    {
        return $this->hasMany(Collecte::class);
    }
    public function detailCollectes()
    {
        return $this->hasMany(DetailCollecte::class);
    }
}
