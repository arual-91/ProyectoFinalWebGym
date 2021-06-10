<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings');

        Booking::create([
            'id_schedules' => 3,
            'user_id' => 3,
        ]);

        Booking::create([
            'id_schedules' => 1,
            'user_id' => 3,
        ]);

        Booking::create([
            'id_schedules' => 6,
            'user_id' => 1,
        ]);

        Booking::create([
            'id_schedules' => 7,
            'user_id' => 1,
        ]);

        Booking::create([
            'id_schedules' => 12,
            'user_id' => 1,
        ]);

        Booking::create([
            'id_schedules' => 20,
            'user_id' => 2,
        ]);

    }
}
