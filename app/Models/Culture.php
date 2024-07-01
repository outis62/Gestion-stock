<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'surface',
        'speculation_id',
        'champ_id',
    ];
    public function champ()
    {
        return $this->belongsTo(Champ::class);
    }
    public function speculation()
    {
        return $this->belongsTo(Speculation::class);
    }

}
