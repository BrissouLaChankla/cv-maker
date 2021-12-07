<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'description' => "J'ai pu réaliser bon nombres de projets durant mes dernières années. J'ai volontairement choisi 6 d'entre eux à mettre en avant ici, comme ça vous avez un aperçu assez concret de ce que je suis en mesure de réaliser."
        ]);
    }
}
