<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('herotexts')->insert([
            'welcome' => "Bienvenue !",
            'first_phrase' => 'Vous êtes ici sur mon CV, vous y retrouverez toutes les informations nécessaires pour apprendre à me connaitre.',
            'second_phrase' => "Si vous êtes pressé ou que vous préférez le format classique, n'hésitez pas à télécharger directement mon CV."
        ]);
    }
}
