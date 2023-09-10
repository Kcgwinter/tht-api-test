<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'issueDate',
        'paymentDue',
        'billingAddress_id',
        'totalAmount',
        'balanceAmount'
    ];

    public function Items()
    {
        return $this->hasMany(InvoiceItems::class);
    }

    public function Payments()
    {
        return $this->hasMany(InvoicePayments::class);
    }
}
