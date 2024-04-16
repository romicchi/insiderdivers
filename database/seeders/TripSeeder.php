<?php

// TripSeeder.php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    public function run()
    {
        Trip::factory()
            ->count(10)
            ->create();
    }
}
