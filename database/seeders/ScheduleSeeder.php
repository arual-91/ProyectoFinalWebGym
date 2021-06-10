<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedule');

        Schedule::create([
            'date' => '2021-06-07',
            'hour' => "10:00",
            'places' => 10,
            'occupation' => 1,
            'id_Activity' =>1,
        ]);

        Schedule::create([
            'date' => "2021-06-07",
            'hour' => "12:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>2,
        ]);

        Schedule::create([
            'date' => "2021-06-07",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 1,
            'id_Activity' =>3,
        ]);

        Schedule::create([
            'date' => "2021-06-07",
            'hour' => "18:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);
        Schedule::create([
            'date' => "2021-06-07",
            'hour' => "20:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-08",
            'hour' => "10:00",
            'places' =>10,
            'occupation' => 1,
            'id_Activity' =>2,
        ]);

        Schedule::create([
            'date' => "2021-06-08",
            'hour' => "12:00",
            'places' =>10,
            'occupation' => 1,
            'id_Activity' =>6,
        ]);

        Schedule::create([
            'date' => "2021-06-08",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>4,
        ]);

        Schedule::create([
            'date' => "2021-06-08",
            'hour' => "18:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);
        Schedule::create([
            'date' => "2021-06-08",
            'hour' => "20:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-09",
            'hour' => "10:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>3,
        ]);

        Schedule::create([
            'date' => "2021-06-09",
            'hour' => "12:00",
            'places' =>10,
            'occupation' => 1,
            'id_Activity' =>2,
        ]);

        Schedule::create([
            'date' => "2021-06-09",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-09",
            'hour' => "18:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);
        Schedule::create([
            'date' => "2021-06-09",
            'hour' => "20:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-10",
            'hour' => "10:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>3,
        ]);

        Schedule::create([
            'date' => "2021-06-10",
            'hour' => "12:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-10",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-10",
            'hour' => "18:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);
        Schedule::create([
            'date' => "2021-06-10",
            'hour' => "20:00",
            'places' =>10,
            'occupation' => 1,
            'id_Activity' =>3,
        ]);

        Schedule::create([
            'date' => "2021-06-11",
            'hour' => "10:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-11",
            'hour' => "12:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>2,
        ]);

        Schedule::create([
            'date' => "2021-06-11",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-11",
            'hour' => "18:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>3,
        ]);
        Schedule::create([
            'date' => "2021-06-11",
            'hour' => "20:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-12",
            'hour' => "10:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-12",
            'hour' => "12:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>4,
        ]);

        Schedule::create([
            'date' => "2021-06-12",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>6,
        ]);

        
        Schedule::create([
            'date' => "2021-06-12",
            'hour' => "18:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>3,
        ]);
        Schedule::create([
            'date' => "2021-06-12",
            'hour' => "20:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);


    }
}
