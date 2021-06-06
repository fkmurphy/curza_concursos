<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WorkingDayTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('working_day_types')->insert([
            'name' => 'Parcial',
        ]);

        \DB::table('working_day_types')->insert([
            'name' => 'Exclusiva',
        ]);

        \DB::table('working_day_types')->insert([
            'name' => 'Simple',
        ]);
    }
}
