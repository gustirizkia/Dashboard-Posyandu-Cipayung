<?php

namespace Database\Seeders;

use App\Models\Kematian;
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
        \App\Models\User::factory(10)->create();
        \App\Models\Balita::factory(100)->create();
        \App\Models\Kematian::factory(30)->create();
        \App\Models\IbuHamil::factory(50)->create();
    }
}
