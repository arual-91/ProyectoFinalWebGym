<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\BookingSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\ScheduleSeeder;
use Database\Seeders\ActivitiesSeeder;
//use Database\Seeders\SalesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductSeeder::class); 
        $this->call(UserSeeder::class); 
        $this->call(ActivitiesSeeder::class); 
        $this->call(SalesSeeder::class); 
        $this->call(ScheduleSeeder::class); 
        $this->call(BookingSeeder::class); 

    }
}
