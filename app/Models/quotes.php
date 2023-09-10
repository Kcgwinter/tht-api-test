<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quotes extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'opportunity',
        'message',
        'subtotal',
        'discount',
        'tax',
        'total',
        'requiredDeposit',
        'deposit'
    ];

    public function Items()
    {
        return $this->belongsTo(quotesItems::class);
    }
}
