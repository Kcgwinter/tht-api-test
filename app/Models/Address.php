<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'customer_id',
        'street',
        'street2',
        'city',
        'state',
        'postalCode',
        'country',
        'active'
    ];


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
