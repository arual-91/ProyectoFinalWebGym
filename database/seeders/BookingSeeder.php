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


        Booking::create([
            'id_schedules' => 22,
            'user_id' => 5,
        ]);

        Booking::create([
            'id_schedules' => 22,
            'user_id' => 4,
        ]);

        Booking::create([
            'id_schedules' => 22,
            'user_id' => 3,
        ]);

        Booking::create([
            'id_schedules' => 22,
            'user_id' => 1,
        ]);

        Booking::create([
            'id_schedules' => 22,
            'user_id' => 2,
        ]);




        Booking::create([
            'id_schedules' => 23,
            'user_id' => 5,
        ]);

        Booking::create([
            'id_schedules' => 24,
            'user_id' => 4,
        ]);

        Booking::create([
            'id_schedules' => 24,
            'user_id' => 3,
        ]);

        Booking::create([
            'id_schedules' => 24,
            'user_id' => 1,
        ]);

        Booking::create([
            'id_schedules' => 27,
            'user_id' => 2,
        ]);


        Booking::create([
            'id_schedules' => 29,
            'user_id' => 3,
        ]);

        Booking::create([
            'id_schedules' => 29,
            'user_id' => 2,
        ]);

        Booking::create([
            'id_schedules' => 28,
            'user_id' => 4,
        ]);

        Booking::create([
            'id_schedules' => 28,
            'user_id' => 5,
        ]);

    }
}
