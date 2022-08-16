<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci inventore culpa quae ex iure tempora totam, excepturi consequuntur quidem officia, accusamus architecto quisquam eum cumque veritatis! Exercitationem fuga officia in.',
            'details' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni veniam, a iste ut quia corporis quae inventore dolore eaque illo, recusandae deserunt alias maiores, eius ratione expedita doloremque molestias sit?',
            'birthday' => '2000-01-01',
            'diploma' => 'Master 2',
            'phone' => '06 12 34 56 78',
            'hobbies' => '🎮 / 👨‍💻 / 🏄‍♂️',
            'email' => 'john.doe@mail.fr',
        ]);
    }
}
