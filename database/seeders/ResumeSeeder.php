<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resumes')->insert([
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet est quis facilisis egestas. Aenean semper, orci eget sagittis tempor, risus est sollicitudin felis, quis ullamcorper felis ipsum ut nulla. Donec id felis urna. 

            Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi dui ligula, condimentum ac felis ut, rutrum dapibus erat. Etiam luctus convallis sodales. 
            
            Phasellus ultricies leo arcu, nec tempor sapien placerat fermentum. Donec ligula justo."
        ]);
    }
}
