<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studies')->insert([
            'name' => "DUT, Métier du Multimédia et de l'Internet",
            'school' => 'IUT Toulon',
            'description' => "Formation qui couvre tous les champs du digital, de la réalisation de sites internet à l’animation de communautés, de la création vidéo à la conception de contenus.",
            'start_date' => "2017-09-01",
            "end_date" => "2019-09-01",
            "job_id" => 1,
            "resume_id" => 1
        ]);
    }
}
