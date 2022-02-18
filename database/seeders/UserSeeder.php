<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "admin",
            'email' => 'admin@admin.fr',
            'password' => '$2y$10$O3wwlo2cWn7Kgwoa7UfEwe9K1I3wmX2HtgIO4dIg0ZNefP5ATTgy2',
        ]);
    }
}
