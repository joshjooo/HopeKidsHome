<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('misions')->insert([
            'description' => 'Our mission is to create hope and change the lives of children in need. We strive to provide a loving home, education, and opportunities that will empower them to reach their full potential and become contributing members of society.',
           ]);
    }
}
