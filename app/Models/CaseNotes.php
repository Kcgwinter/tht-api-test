<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseNotes extends Model
{
    use HasFactory;


    protected $fillable = [
        'text',
        'case_id'
    ];

    public function notes()
    {
        return $this->belongsTo(Cases::class);
    }
}
