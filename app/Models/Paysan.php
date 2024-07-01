<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paysan extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'nom',
        'prenom',
        'localite_id',
        'telephone',
        'operation_paysane_id',
    ];
    public function operationPaysane()
    {
        return $this->belongsTo(OperationPaysane::class);
    }
    public function localite()
    {
        return $this->belongsTo(Localite::class);
    }
    public function detailCollectes()
    {
        return $this->hasMany(DetailCollecte::class);
    }
}
