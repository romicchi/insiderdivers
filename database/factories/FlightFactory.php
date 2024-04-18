<?php

namespace Database\Factories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    protected $model = Flight::class;

    public function definition()
    {
        return [
            'flight_num' => $this->faker->randomNumber(5),
            'airline' => $this->faker->company,
            'departure' => $this->faker->date,
            'arrival' => $this->faker->date,
            'client_id' => \App\Models\Client::factory(),
        ];
    }
}
