<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RealisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('realisations')->insert([
            "name" => "Projet 1",
            "slug" => "projet-1",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet est quis facilisis egestas. Aenean semper, orci eget sagittis tempor, risus est sollicitudin felis, quis ullamcorper felis ipsum ut nulla. Donec id felis urna. 

            Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi dui ligula, condimentum ac felis ut, rutrum dapibus erat. Etiam luctus convallis sodales. 
            
            Phasellus ultricies leo arcu, nec tempor sapien placerat fermentum. Donec ligula justo, finibus vitae lorem vitae, mollis pulvinar velit. Proin hendrerit hendrerit erat, nec ullamcorper sem venenatis eu. ",
            "short_description" => "Ceci est une description courte pour expliquer mon projet 1",
            "date" => "2022-01-01"
        ]);
    }
}
