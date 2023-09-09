<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(VisionSeeder::class);
        $this->call( ContactSeeder::class);
        $this->call( ObjectiveSeeder::class);
        $this->call( MissionSeeder::class);
        $this->call( TestimonialSeeder::class);
        $this->call( UserSeeder::class);

    }
}
