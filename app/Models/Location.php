<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Nicolaslopezj\Searchable\SearchableTrait;

class Location extends Model
{
    use HasFactory, SearchableTrait;

    public $fillable = [
        'name',
        'country_id',
    ];

    protected $searchable = [
        'columns' => [
            'locations.name' => 10,
            'countries.name' => 5
        ],
        'joins' => [
            'countries' => ['locations.country_id', 'countries.id'],
        ]
    ];


    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }
}
