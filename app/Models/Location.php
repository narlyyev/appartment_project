<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
