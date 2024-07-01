<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Champ extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'localite_id',
        'paysan_id',
        'surface',
    ];
    public function localite()
    {
        return $this->belongsTo(Localite::class);
    }
    public function paysan()
    {
        return $this->belongsTo(Paysan::class);
    }
    public function detailCollectes()
    {
        return $this->hasMany(DetailCollecte::class);
    }
}
