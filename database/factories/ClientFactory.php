<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'email' => $this->faker->unique()->safeEmail,
            'shirt_size' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
            'birthday' => $this->faker->date(),
            'whatsapp' => $this->faker->phoneNumber,
            'nationality' => $this->faker->country,
            'interests' => $this->faker->sentence,
            'dietary_reqs' => $this->faker->sentence,
            'status' => $this->faker->randomElement([0, 1]), // 0 for potential, 1 for confirmed
        ];
    }
}