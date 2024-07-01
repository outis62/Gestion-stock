<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Besoin extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ['quantite', 'prospection_id', 'speculation_id'];
    public function prospections()
    {
        return $this->belongsTo(Prospection::class, 'prospection_id', 'id');
    }
    public function speculations()
    {
        return $this->belongsTo(Speculation::class, 'speculation_id', 'id');
    }
}
