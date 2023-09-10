<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'details'
    ];

    public function appointmentDays()
    {
        return $this->hasOne(appointmentDays::class);
    }

    public function appointmentTimes()
    {
        return $this->hasOne(appointmentTimes::class);
    }
    public function onSiteAssessments()
    {
        return $this->hasMany(onSiteAssessments::class);
    }
}
