<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'customer_id',
        'address_id',
        'request_id',
        'quote_id',
        'job_id',
        'invoice_id',
    ];

    public function Notes()
    {
        return $this->hasMany(CaseNotes::class);
    }

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function Address()
    {
        return $this->belongsTo(Address::class);
    }

    public function Request()
    {
        return $this->hasOne(Request::class, 'id', 'request_id');
    }

    public function Quote()
    {
        return $this->hasOne(quotes::class, 'id', 'quote_id');
    }
    public function Job()
    {
        return $this->hasOne(Jobs::class, 'id', 'job_id');
    }

    public function Invoice()
    {
        return $this->hasOne(Invoice::class, 'id', 'invoice_id');
    }


    public function media()
    {
        return $this->belongsToMany(
            Media::class,
            'case__media',
            'media_id',
            'case_id'
        );
    }
}
