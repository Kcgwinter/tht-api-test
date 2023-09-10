<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    protected $fillable = [
        'oneTimeJob',
        'startDate',
        'endDate',
        'subtotal',
        'total'
    ];

    public function Items()
    {
        return $this->hasMany(JobsItems::class);
    }

    public function Visits()
    {
        return $this->hasMany(JobsVisits::class);
    }
}
