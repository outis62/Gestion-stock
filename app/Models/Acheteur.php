<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acheteur extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ['libelle', 'telephone', 'adresse'];
    public function relationCommerciales()
    {
        return $this->hasMany(RelationCommerciale::class);
    }
}
