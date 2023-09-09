<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('objectives')->insert([
            'description' => 'To provide a safe and loving home environment for children from disadvantaged backgrounds.',
           ]);
         DB::table('objectives')->insert([
            'description' => 'To ensure the physical, emotional, and educational needs of the children are met.',
           ]);
         DB::table('objectives')->insert([
            'description' => 'To promote holistic development by offering educational opportunities, healthcare, and emotional support.',
           ]);
         DB::table('objectives')->insert([
            'description' => 'To empower the children with vocational training and life skills for their future success.',
           ]);
        
    }
}
