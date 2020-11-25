<?php

namespace Database\Seeders;

use App\Models\Skils;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersSeeder::class);
        $this->call(FactsSeeder::class);
        $this->call(SkilsSeeder::class);

    }
}
