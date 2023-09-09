<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('contacts')->insert([
            'Address' => 'Kerege, along Bagamoyo Road, Dar es Salaam',
            'phone' => '+255 647 477 478',
            'email' => 'info@gmail.com',
            'facebook' => 'hopekidshome',
            'linkedin' => 'hopekidshome',
            'instagram' => 'hopekidshome',
            'twitter' => 'hopekidshome',
            
           ]);
    }
    
}
