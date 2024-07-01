<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutFinancementPartenaire extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ['intitule', 'generalite', 'sigle', 'adresse'];
    public function ficancements()
    {
        return $this->hasMany(Financement::class);
    }
}
