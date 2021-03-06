<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountriesSeeder::class,
            ProvincesSeeder::class,
            CitiesSeeder::class,
        ]);
        $this->call(WorkingDayTypesSeeder::class);
        $this->call(CategoryTypesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(RemunerationTypesSeeder::class);

    }
}
