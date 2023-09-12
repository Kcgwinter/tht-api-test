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

}
