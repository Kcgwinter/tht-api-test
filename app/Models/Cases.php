<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'customer_id',
        'address_id',
        'request_id',
        'quote_id',
        'job_id',
        'invoice_id',
    ];


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
