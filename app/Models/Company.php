<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'mobile',
        'email',
        'address',
        'city',
        'state',
        'postalCode'
    ];


    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function media()
    {
        return $this->belongsToMany(
            Media::class,
            'company__media',
            'media_id',
            'company_id'
        );
    }
}
