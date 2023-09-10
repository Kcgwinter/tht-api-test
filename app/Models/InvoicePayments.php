<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePayments extends Model
{
    use HasFactory;

    protected $fillable = [
        'method',
        'invoice_id',
        'amount',
        'transaction_date',
        'details'
    ];

    public function Invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
