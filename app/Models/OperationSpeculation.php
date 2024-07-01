<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationSpeculation extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ['operation_paysane_id', 'speculation_id'];
    public function operationPaysane()
    {
        return $this->belongsTo(OperationPaysane::class);
    }

    public function speculation()
    {
        return $this->belongsTo(Speculation::class);
    }
}
