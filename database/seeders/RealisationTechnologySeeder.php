<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class RealisationTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('realisation_technology')->insert(array (
            0 => array (
                'realisation_id' => 1,
                'technology_id' => 1
            ),
            1 => array (
                'realisation_id' => 1,
                'technology_id' => 2
            ),
        )
    );
     
    }
}
