<?php

namespace Database\Factories;

use App\Models\Leader;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeaderFactory extends Factory
{
    protected $model = Leader::class;

    public function definition()
    {
        return [
            'leader_name' => $this->faker->name,
            'leader_nationality' => $this->faker->country,
            'official_position' => $this->faker->jobTitle,
        ];
    }
}
