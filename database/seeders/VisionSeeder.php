<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('visions')->insert([
            'description' => 'Our vision is to build a better future for the children under our care by ensuring their physical, emotional, and educational needs are met. We envision a society where every child has equal access to opportunities, regardless of their background, and where they are empowered to break free from the cycle of poverty.',
           ]);
    }
}
