<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_category extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name'];

    public function items(){
        return $this->hasMany(Inventory::class);
    }
}
