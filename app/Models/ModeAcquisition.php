<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeAcquisition extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ['libelle', 'auteur'];
    public function moyenStockages()
    {
        return $this->hasMany(MoyenStockage::class);
    }
}
