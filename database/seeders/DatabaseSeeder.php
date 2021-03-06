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
        // \App\Models\Restaurants::factory(10)->create();
        $this->call(RestaurantTableSeeder::class);
        $this->call(MenuCategorySeeder::class);
        $this->call(MenuSeeder::class);
    }
}
