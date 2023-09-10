<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quotesItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'quote_id',
        'name',
        'description',
        'quantity',
        'unitPrice',
        'total',
        'optional',
        'discount',
    ];

    public function Quotes()
    {
        return $this->belongsTo(quotes::class);
    }
}
