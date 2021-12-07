<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'name' => "Développeur Web",
            'company' => 'Entreprise 2 rêve',
            'description' => "Développement de pleins de choses à l'aide de différents langages de programmations tous plus géniaux les uns que les autres ! J'ai aussi fais les cafés.",
            'start_date' => "2017-09-01",
            "end_date" => "2019-09-01",
            "resume_id" => 1
        ]);
    }
}
