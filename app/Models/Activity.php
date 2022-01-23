<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'location_id',
    ];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function prices(): HasMany
    {
        return $this->hasMany(Price::class);
    }

    public function calculatePrices(): array
    {
        $prices = $this->prices()->get();
        $sum = 0;
        $count = 0;
        $return = [
            'lowest' => 0,
            'average' => 0,
            'highest' => 0,
        ];

        foreach($prices as $price)
        {
            if ($return['lowest'] > $price->value) {
                $return['lowest'] = $price->value;
            } elseif ($return['highest'] < $price->value) {
                $return['highest'] = $price->value;
            }

            $sum += $price->value;
            $count++;
        }

        if (!empty($prices)) {
            $return['average'] = $sum / $count;
        }

        return $return;
    }
}
