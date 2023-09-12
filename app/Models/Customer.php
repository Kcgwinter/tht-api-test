<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'email',
        'address',
        'city',
        'state',
        'postalCode',
        'phone',
        'mobile',
        'birthdate',
        'textok'
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function cases()
    {
        return $this->hasMany(Cases::class);
    }


    public function media()
    {
        return $this->belongsToMany(
            Media::class,
            'customer__media',
            'media_id',
            'customer_id'
        );
    }
}
