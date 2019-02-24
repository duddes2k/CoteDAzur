<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rates')->insert([
            'service_id' => 1,
            'season' => 'high season',
            'month' => 'march,april,may',
            'rate' => 45000
        ]);

        DB::table('rates')->insert([
            'service_id' => 1,
            'season' => 'low season',
            'month' => 'january,february,june,july,august,september,october,november,december',
            'rate' => 43000
        ]);

        DB::table('rates')->insert([
            'service_id' => 2,
            'season' => 'all season',
            'month' => 'january,february,march,april,may,june,july,august,september,october,november,december',
            'rate' => 2950
        ]);

        DB::table('rates')->insert([
            'service_id' => 3,
            'season' => 'all season',
            'month' => 'january,february,march,april,may,june,july,august,september,october,november,december',
            'rate' => 2950
        ]);
    }
}
