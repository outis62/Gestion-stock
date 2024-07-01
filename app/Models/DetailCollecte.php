<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCollecte extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'paysan_id',
        'collecte_id',
        'champ_id',
        'quantite',
        'unite_mesure_id',
        'commentaire',
    ];
    public function paysan()
    {
        return $this->belongsTo(Paysan::class);
    }
    public function champ()
    {
        return $this->belongsTo(Champ::class);
    }
    public function uniteMesure()
    {
        return $this->belongsTo(UniteMesure::class);
    }
    public function collecte()
    {
        return $this->belongsTo(Collecte::class);
    }
}
