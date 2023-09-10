<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'name',
        'description',
        'quantity',
        'unitPrice',
        'total',
        'optional',
        'discount'
    ];

    public function Invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
