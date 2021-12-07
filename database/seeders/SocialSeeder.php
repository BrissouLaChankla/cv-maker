<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert(array (
            0 => array (
                'name' => 'Facebook',
                'icon' => '<i class="fab fa-facebook-f"></i>'
            ),
            1 => array (
                'name' => 'Instagram',
                'icon' => '<i class="fab fa-instagram"></i>'
            ),
            2 => array (
                'name' => 'Twitter',
            'icon' => '<i class="fab fa-twitter"></i>'
            ),
            3 => array (
                'name' => 'LinkedIn',
                'icon' => '<i class="fab fa-linkedin-in"></i>'
            ),
            4 => array (
                'name' => 'Github',
                'icon' => '<i class="fab fa-github"></i>'
            ),
        )
    );
    }
}
