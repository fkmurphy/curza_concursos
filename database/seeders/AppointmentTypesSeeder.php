<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppointmentTypesSeeder extends Seeder
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
            \DB::table('appointment_types')->insert([
                'name' => $appointmentType,
                'code' => \Str::slug($appointmentType, '-'),
            ]);
        }
    }
}
