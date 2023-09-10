<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class onSiteAssessments extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'needed',
        'text',
        'date'
    ];


    public function Request()
    {
        return $this->belongsTo(Request::class);
    }
}
