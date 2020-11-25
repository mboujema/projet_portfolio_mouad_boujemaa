<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skils')->insert([
            "lang1" => "HTML",
            "pourcent1" => "100",
            "lang2" => "CSS",
            "pourcent2" => "100",
            "lang3" => "JS",
            "pourcent3" => "65",
            "lang4" => "PHP",
            "pourcent4" => "85",
            "lang5" => "LARAVEL",
            "pourcent5" => "45",
            "lang6" => "SASS",
            "pourcent6" => "100",
        ]);
    }
}
