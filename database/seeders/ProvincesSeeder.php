<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            'name' => 'Río Negro',
            'province_id' => 1
        ]);
    }
}
