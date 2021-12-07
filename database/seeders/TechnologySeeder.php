<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('technologies')->insert(array (
            0 => array (
                'name' => "Bootstrap",
                'logo_icon' => '<i class="fab fa-bootstrap"></i>',
                'description'=> "Bootstrap est un framework CSS gratuit et open source destiné au développement Front-end, réactif et mobile. Il contient des modèles de conception CSS et JavaScript pour la typographie, les formulaires, les boutons, la navigation et d'autres composants d'interface.",
                "color"=> "#573d7e",
                "type"=> "Front-end",
                "mastery" => 80,
                "resume_id" => 1
            ),
            1 => array (
                'name' => "BDD SQL",
                'logo_icon' => '<i class="fas fa-database"></i>',
                'description'=> "Une base de données est une collection d’informations organisées afin d’être facilement consultables, gérables et mises à jour. Au sein d’une database, les données sont organisées en lignes, colonnes et tableaux. Elles sont indexées afin de pouvoir facilement trouver les informations recherchées à l’aide d’un logiciel informatique. Chaque fois que de nouvelles informations sont ajoutées, les données sont mises à jour, et éventuellement supprimées.",
                "color"=> "#3399db",
                "type"=> "Back-end",
                "mastery" => 50,
                "resume_id" => 1
            ),
        )
    );
    }
}
