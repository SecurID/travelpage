<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $location = Location::inRandomOrder()->limit(1)->get();

        return [
            'name' => $this->faker->word(),
            'location_id' => $location[0]['id'],
        ];
    }
}
