<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localite extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ['libelle', 'localite_id', 'type'];
    public function operationPaysanes()
    {
        return $this->hasMany(OperationPaysane::class);
    }
    public function localite()
    {
        return $this->belongsTo(Localite::class);
    }
    public function champs()
    {
        return $this->hasMany(Champ::class);
    }
}
