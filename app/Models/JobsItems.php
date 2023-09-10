<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'jobs_id',
        'name',
        'description',
        'quantity',
        'unitPrice',
        'total',
        'optional',
        'discount',
    ];

    public function Job()
    {
        return $this->belongsTo(Jobs::class);
    }
}
