<?php

namespace Database\Seeders;

use App\Models\Santri;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            WaliSantriSeeder::class,
        ]);

        Santri::factory(20)->create();
    }
}
