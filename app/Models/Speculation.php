<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speculation extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'nom',
        'variete',
        'description',
        'image',
    ];
    public function cultures()
    {
        return $this->hasMany(Culture::class);
    }
    public function OperationPaysanes()
    {
        return $this->belongsToMany(OperationPaysane::class, 'operation_speculation', 'operation_paysane_id', 'speculation_id');
    }
    public function collecte()
    {
        return $this->hasMany(Collecte::class);
    }

}
