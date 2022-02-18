<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ResumeSeeder::class,
            AboutSeeder::class,
            ContactSeeder::class,
            JobSeeder::class,
            NavigationSeeder::class,
            PortfolioSeeder::class,
            RealisationSeeder::class,
            SocialSeeder::class,
            StudySeeder::class,
            TechnologySeeder::class,
            UserSeeder::class,
            RealisationTechnologySeeder::class
        ]);
    }
}
