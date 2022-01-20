<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $country = Country::inRandomOrder()->limit(1)->get();

        return [
            'name' => $this->faker->city(),
            'country_id' => $country[0]['id'],
        ];
    }
}
