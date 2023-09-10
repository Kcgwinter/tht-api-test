<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointmentDays extends Model
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


    public function belongsTo()
    {
        return $this->belongsTo(requests::class);
    }

}
