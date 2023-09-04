<?php

namespace Database\Seeders;

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
        $this->call([
            CategorySeeder::class,
            CustomerSeeder::class,
            UserSeeder::class,
            ProviderSeeder::class,
            SaleSeeder::class,
            ProductSeeder::class
        ]);
    }
}
