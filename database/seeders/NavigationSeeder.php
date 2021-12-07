<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navigations')->insert(array (
            0 => array (
                'name' => 'Accueil',
                'icon' => '<i class="fas fa-home"></i>',
                'anchor' => 'hero'
            ),
            1 => array (
                'name' => 'A propos',
                'icon' => '<i class="fas fa-user-alt"></i>',
                'anchor' => 'about'
            ),
            2 => array (
                'name' => 'Parcours',
                'icon' => '<i class="fas fa-id-card"></i>',
                'anchor' => 'resume'
            ),
            3 => array (
                'name' => 'Réalisations',
                'icon' => '<i class="fas fa-paint-brush"></i>',
                'anchor' => 'portfolio'
            ),
            4 => array (
                'name' => 'Contact',
                'icon' => '<i class="fas fa-envelope"></i>',
                'anchor' => 'contact'
            ),
        )
        );
    }
}
