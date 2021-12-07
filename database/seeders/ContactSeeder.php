<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'description' => "Si vous avez une proposition d'emploi, de mission ou tout simplement une question à propos de mon parcours ou autre, alors n'hésitez pas à me contacter. Je me ferai un plaisir de vous répondre dans les plus brefs délais !"
        ]);
    }
}
