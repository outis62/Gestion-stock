<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financement extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'nature',
        'detail',
        'operation_paysan_id',
        'institut_financement_partenaire_id',
        'date_debut',
    ];
    public function operationPaysanes()
    {
        return $this->belongsTo(OperationPaysane::class);
    }
    public function InstitutFinancementPartenaires()
    {
        return $this->belongsTo(InstitutFinancementPartenaire::class);
    }
}
