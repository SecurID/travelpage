<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

class PriceFactory extends Factory
{
    public function definition(): array
    {
        $activity = Activity::inRandomOrder()->limit(1)->get();

        return [
            'value' => $this->faker->randomFloat(2, 0, 300),
            'activity_id' => $activity[0]['id'],
        ];
    }
}
