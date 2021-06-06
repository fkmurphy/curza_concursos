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
        $listWorkingDayTypes = [
            'Parcial',
            'Exclusiva',
            'Simple',
        ];

        foreach($listWorkingDayTypes as $workingDay) {
            \DB::table('working_day_types')->insert([
                'name' => $workingDay,
                'code' => \Str::slug($workingDay, '-'),
            ]);
        }
    }
}
