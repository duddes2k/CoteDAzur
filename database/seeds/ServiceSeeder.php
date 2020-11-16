<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'MEGA LUXURY YACHT',
            'type' => 'Yacht Charter',
            'description' => 'Luxury SuperYacht',
            'status' => 'active'
        ]);
        
        DB::table('services')->insert([
            'name' => 'VANDUTCH 40 SUPERFAST LUXURY SPEEDBOAT',
            'type' => 'Speedboat Charter',
            'description' => 'Superfast luxury speedboat',
            'status' => 'active'
        ]);

        DB::table('services')->insert([
            'name' => 'ROLLS ROYCE PHANTOM DROPHEAD',
            'type' => 'Car Rental',
            'description' => 'Luxury Sports Car',
            'status' => 'active'
        ]);

    }
}
