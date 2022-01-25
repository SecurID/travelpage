<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Country extends Model
{
    use HasFactory, SearchableTrait;

    public $timestamps = false;

    protected $searchable = [
        'columns' => [
            'countries.name' => 10,
        ],
    ];

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
