<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RemunerationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listRemunerationTypes = [
            'Ad-honorem',
            'Rentado',
        ];

        foreach($listRemunerationTypes as $remunerationTypes) {
            \DB::table('remuneration_types')->insert([
                'name' => $remunerationTypes,
                'code' => slug($remunerationTypes, '-'),
            ]);
        }
    }
}
