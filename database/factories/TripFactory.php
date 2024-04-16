<?php
// TripFactory.php

namespace Database\Factories;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\Factory;

class TripFactory extends Factory
{
    protected $model = Trip::class;

    public function definition()
    {
        return [
            'location' => $this->faker->city,
            'trip_type' => $this->faker->randomElement(['type1', 'type2', 'type3']),
            'trip_date' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
            'ext_date' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
            'year' => $this->faker->year,
            'client_id' => \App\Models\Client::factory(),
            'leader_id' => \App\Models\Leader::factory(),
        ];
    }
}