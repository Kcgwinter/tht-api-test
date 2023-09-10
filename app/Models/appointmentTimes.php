<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointmentTimes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'AnyTime',
        'Morning',
        'Afternoon',
        'Evening'
    ];

    public function Request()
    {
        return $this->belongsTo(Request::class);
    }
}
