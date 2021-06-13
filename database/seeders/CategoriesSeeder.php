<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            'name' => 'Ayudante de primera',
            'code' => 'AYP',
        ]);

        \DB::table('categories')->insert([
            'name' => 'Ayudante de segunda',
            'code' => 'AYS',
        ]);

        \DB::table('categories')->insert([
            'name' => 'Graduado en formación docente',
            'code' => 'GFD',
        ]);

        \DB::table('categories')->insert([
            'name' => 'Jefe de trabajos prácticos',
            'code' => 'JTP',
        ]);

        \DB::table('categories')->insert([
            'name' => 'Profesor adjunto',
            'code' => 'PAD',
        ]);

        \DB::table('categories')->insert([
            'name' => 'Profesor asociado',
            'code' => 'PAS',
        ]);

        \DB::table('categories')->insert([
            'name' => 'Profesor titular',
            'code' => 'PTR',
        ]);
    }
}
