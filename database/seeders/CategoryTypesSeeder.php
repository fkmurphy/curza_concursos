<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listAppointmentTypes = [
            'Suplente',
            'Interinos',
            'Regulares',
        ];

        foreach($listAppointmentTypes as $appointmentType) {
            \DB::table('category_types')->insert([
                'name' => $appointmentType,
                'code' => slug($appointmentType, '-'),
            ]);
        }
    }
}
