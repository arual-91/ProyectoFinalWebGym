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
            'date' => '2021-06-21',
            'hour' => "10:00",
            'places' => 10,
            'occupation' => 1,
            'id_Activity' =>1,
        ]);

        Schedule::create([
            'date' => "2021-06-21",
            'hour' => "12:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>2,
        ]);

        Schedule::create([
            'date' => "2021-06-21",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 1,
            'id_Activity' =>3,
        ]);

        Schedule::create([
            'date' => "2021-06-21",
            'hour' => "18:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);
        Schedule::create([
            'date' => "2021-06-21",
            'hour' => "20:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-22",
            'hour' => "10:00",
            'places' =>5,
            'occupation' => 1,
            'id_Activity' =>2,
        ]);

        Schedule::create([
            'date' => "2021-06-22",
            'hour' => "12:00",
            'places' =>5,
            'occupation' => 1,
            'id_Activity' =>6,
        ]);

        Schedule::create([
            'date' => "2021-06-22",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>4,
        ]);

        Schedule::create([
            'date' => "2021-06-22",
            'hour' => "18:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);
        Schedule::create([
            'date' => "2021-06-22",
            'hour' => "20:00",
            'places' =>5,
            'occupation' => 0,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-23",
            'hour' => "10:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>3,
        ]);

        Schedule::create([
            'date' => "2021-06-23",
            'hour' => "12:00",
            'places' =>5,
            'occupation' => 1,
            'id_Activity' =>2,
        ]);

        Schedule::create([
            'date' => "2021-06-23",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-23",
            'hour' => "18:00",
            'places' =>5,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);
        Schedule::create([
            'date' => "2021-06-23",
            'hour' => "20:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-24",
            'hour' => "10:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>3,
        ]);

        Schedule::create([
            'date' => "2021-06-24",
            'hour' => "12:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-24",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-24",
            'hour' => "18:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);
        Schedule::create([
            'date' => "2021-06-24",
            'hour' => "20:00",
            'places' =>5,
            'occupation' => 1,
            'id_Activity' =>3,
        ]);

        Schedule::create([
            'date' => "2021-06-25",
            'hour' => "10:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-25",
            'hour' => "12:00",
            'places' =>5,
            'occupation' => 5,
            'id_Activity' =>2,
        ]);

        Schedule::create([
            'date' => "2021-06-25",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 1,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-25",
            'hour' => "18:00",
            'places' =>4,
            'occupation' => 3,
            'id_Activity' =>3,
        ]);
        Schedule::create([
            'date' => "2021-06-25",
            'hour' => "20:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-26",
            'hour' => "10:00",
            'places' =>5,
            'occupation' => 0,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-26",
            'hour' => "12:00",
            'places' =>5,
            'occupation' => 1,
            'id_Activity' =>4,
        ]);

        Schedule::create([
            'date' => "2021-06-26",
            'hour' => "16:00",
            'places' =>5,
            'occupation' => 2,
            'id_Activity' =>6,
        ]);

        
        Schedule::create([
            'date' => "2021-06-26",
            'hour' => "18:00",
            'places' =>5,
            'occupation' => 2,
            'id_Activity' =>3,
        ]);
        Schedule::create([
            'date' => "2021-06-26",
            'hour' => "20:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);


    }
}
