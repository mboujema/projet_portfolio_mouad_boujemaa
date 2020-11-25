<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            "number1" => "458",
            "description1" => "Salam frere",
            "number2" => "48",
            "description2" => "ouais la rue",
            "number3" => "1864",
            "description3" => "myeuk oslm",
            "number4" => "47",
            "description4" => "represente la street",
        ]);

    }
}
