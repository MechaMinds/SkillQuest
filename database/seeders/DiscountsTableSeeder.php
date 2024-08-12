<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert([
            'code' => 'SEMANGATBELAJAR',
            'amount' => 15.00, // 15% potongan
        ]);
    }
}

