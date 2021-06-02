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
            'date' => '2021-05-31',
            'hour' => "10:00",
            'places' => 10,
            'occupation' => 0,
            'id_Activity' =>1,
        ]);

        Schedule::create([
            'date' => "2021-05-31",
            'hour' => "12:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>2,
        ]);

        Schedule::create([
            'date' => "2021-05-31",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>3,
        ]);

        Schedule::create([
            'date' => "2021-05-31",
            'hour' => "18:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);
        Schedule::create([
            'date' => "2021-05-31",
            'hour' => "20:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-01",
            'hour' => "10:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>2,
        ]);

        Schedule::create([
            'date' => "2021-06-01",
            'hour' => "12:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>6,
        ]);

        Schedule::create([
            'date' => "2021-06-01",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>4,
        ]);

        Schedule::create([
            'date' => "2021-06-01",
            'hour' => "18:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);
        Schedule::create([
            'date' => "2021-06-01",
            'hour' => "20:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-02",
            'hour' => "10:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>3,
        ]);

        Schedule::create([
            'date' => "2021-06-02",
            'hour' => "12:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>2,
        ]);

        Schedule::create([
            'date' => "2021-06-02",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-02",
            'hour' => "18:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);
        Schedule::create([
            'date' => "2021-06-02",
            'hour' => "20:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-03",
            'hour' => "10:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>3,
        ]);

        Schedule::create([
            'date' => "2021-06-03",
            'hour' => "12:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-03",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-03",
            'hour' => "18:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);
        Schedule::create([
            'date' => "2021-06-03",
            'hour' => "20:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>3,
        ]);

        Schedule::create([
            'date' => "2021-06-04",
            'hour' => "10:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-04",
            'hour' => "12:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>2,
        ]);

        Schedule::create([
            'date' => "2021-06-04",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-04",
            'hour' => "18:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>3,
        ]);
        Schedule::create([
            'date' => "2021-06-04",
            'hour' => "20:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);

        Schedule::create([
            'date' => "2021-06-05",
            'hour' => "10:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>5,
        ]);

        Schedule::create([
            'date' => "2021-06-05",
            'hour' => "12:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>4,
        ]);

        Schedule::create([
            'date' => "2021-06-05",
            'hour' => "16:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>6,
        ]);

        
        Schedule::create([
            'date' => "2021-06-05",
            'hour' => "18:00",
            'places' =>10,
            'occupation' => 0,
            'id_Activity' =>3,
        ]);
        Schedule::create([
            'date' => "2021-06-05",
            'hour' => "20:00",
            'places' =>0,
            'occupation' => 0,
            'id_Activity' =>null,
        ]);


    }
}
