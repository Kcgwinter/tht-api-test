<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'type',
        'location',
        'inventory_category_id',
        'receipt_id',
        'quantity',
        'price_per_unit',
        'price',
        'buy_date',
        'url',
        'serialNumber',
        'stock',
        'last_check_date',
        'warranty_end',
        'customField1',
        'customField1name',
        'customField2',
        'customField2name',
        'customField3',
        'customField3name',
        'minimum_quantity',
        'maximum_quantity'
    ];

    public function category()
    {
        return $this->belongsTo(Inventory_category::class);
    }
    public function location()
    {
        return $this->belongsTo(Inventory_location::class);
    }

    public function receipt()
    {
        return $this->hasOne(Media::class, 'receipt_id');
    }

    public function media()
    {
        return $this->belongsToMany(
            Media::class,
            'inventory__media',
            'inventory_id',
            'media_id'
        );
    }


}
