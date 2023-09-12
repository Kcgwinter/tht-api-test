<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'firstname',
        'lastname',
        'phone',
        'mobile',
        'email',
        'birthdate'
    ];

    public function Company()
    {
        return $this->belongsTo(Company::class);
    }


    public function media()
    {
        return $this->belongsToMany(
            Media::class,
            'employee__media',
            'media_id',
            'employee_id'
        );
    }
}
