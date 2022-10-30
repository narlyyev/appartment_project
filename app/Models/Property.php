<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];


    public function location()
    {
        return $this->belongsTo(Location::class);
    }


    public function owner_type()
    {
        return $this->belongsTo(OwnerType::class);
    }


    public function property_type()
    {
        return $this->belongsTo(PropertyType::class);
    }


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
