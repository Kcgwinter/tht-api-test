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
        'size',
        'url'
    ];



    public function company()
    {
        return $this->belongsToMany(
            Media::class,
            'company__media',
            'media_id',
            'company_id'
        );
    }


    public function employee()
    {
        return $this->belongsToMany(
            Media::class,
            'employees__media',
            'media_id',
            'employee_id'
        );
    }

    public function case()
    {
        return $this->belongsToMany(
            Media::class,
            'case__media',
            'media_id',
            'case_id'
        );
    }

    public function customer()
    {
        return $this->belongsToMany(
            Media::class,
            'customer__media',
            'media_id',
            'customer_id'
        );
    }


    public function inventory()
    {
        return $this->belongsToMany(
            Media::class,
            'inventory__media',
            'media_id',
            'inventory_id'
        );
    }

    public function receipt()
    {
        return $this->belongsTo(Inventory::class);
    }
}
