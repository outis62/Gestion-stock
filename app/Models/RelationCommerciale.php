<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationCommerciale extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ['nature', 'acheteur_id', 'prospection_id', 'commercialisation_id', 'quantite_achete'];
    public function acheteur()
    {
        return $this->belongsTo(Acheteur::class);
    }
    public function prospection()
    {
        return $this->belongsTo(Prospection::class);
    }
    public function commercialisation()
    {
        return $this->belongsTo(Commercialisation::class);
    }
}
