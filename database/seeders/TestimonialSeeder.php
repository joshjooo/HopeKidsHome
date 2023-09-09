<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('testimonials')->insert([
            
            'name' => 'James John',
            'description' => 'Thank you for giving me the opportunity to be part of this extraordinary journey of compassion and transformation. This website has changed my life, and I am forever grateful.',
            'avatar' => 'client-img.png',
            
           ]);

          DB::table('testimonials')->insert([
            
            'name' => 'Omary Hassan',
            'description' => 'I cannot emphasize enough the profound joy and fulfillment I experienced through this charity website. It has allowed me to be part of something much larger than myself, providing a sense of purpose and hope that transcends the challenges of everyday life.',
            'avatar' => 'client-img.png',
            
           ]);
    }
}
