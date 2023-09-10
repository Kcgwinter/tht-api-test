<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsVisits extends Model
{
    use HasFactory;

    protected $fillable = [
        'startTime',
        'endTime',
        'note',
        'jobs_id',
        'employee_id'
    ];

    public function Job()
    {
        return $this->belongsTo(Jobs::class);
    }
}
