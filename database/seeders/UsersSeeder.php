<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "birthday" => "25 avril 1999",
            "website" => "www.youtube.com",
            "phone" => "0484731217",
            "city" => "Bruxelles",
            "age" => "21 ans",
            "degree" => "master",
            "email" => "mouaad99@hotmail.fr",
            "freelance" => "available",
        ]);

    }
}
