<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppointmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->insert([
            'name' => 'Ayudante de primera',
            'code' => 'AYP',
        ]);

        DB::table('appointments')->insert([
            'name' => 'Ayudante de segunda',
            'code' => 'AYS',
        ]);

        DB::table('appointments')->insert([
            'name' => 'Graduado en formación docente',
            'code' => 'GFD',
        ]);

        DB::table('appointments')->insert([
            'name' => 'Jefe de trabajos prácticos',
            'code' => 'JTP',
        ]);

        DB::table('appointments')->insert([
            'name' => 'Profesor adjunto',
            'code' => 'PAD',
        ]);

        DB::table('appointments')->insert([
            'name' => 'Profesor asociado',
            'code' => 'PAS',
        ]);

        DB::table('appointments')->insert([
            'name' => 'Profesor titular',
            'code' => 'PTR',
        ]);
    }
}
