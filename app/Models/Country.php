<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'name',
        'iso',
        'iso3',
        'currency_code',
    ];

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
