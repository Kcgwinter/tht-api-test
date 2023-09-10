<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointmentDays extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'request_id',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday'
    ];

    public function Request()
    {
        return $this->belongsTo(Request::class);
    }

}
