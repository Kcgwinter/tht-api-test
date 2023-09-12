<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'media_type',
        'name',
        'file_name',
        'mime_type',
        'path',
        'disk',
        'collection',
        'size'
    ];


    public function company()
    {
        return $this->belongsToMany(
            Media::class,
            'employees__media',
            'media_id',
            'employee_id'
        );
    }

}
