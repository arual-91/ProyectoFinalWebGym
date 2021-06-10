<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users');

        User::create([
            'name' => "Laura",
            'last_name'=> "Andrades",
            'dni'=>"25568446A",
            'address'=>"Calle Toles, 12, 1A",
            'cuota'=>"Anual",
            'rol'=>1,
            'phone'=>677055268,
            'IBAN'=>Crypt::encryptString("ES-1464-0004-18-4012345678"),
            'email' =>"admin@gmail.com",
            'password' => Hash::make("12345678"),
        ]);

        User::create([
            'name' => "Maite",
            'last_name'=> "Toledo",
            'dni'=>"22368446A",
            'address'=>"Calle Toles, 12, 1A",
            'cuota'=>"Anual",
            'rol'=>1,
            'phone'=>677055268,
            'IBAN'=>Crypt::encryptString("ES-1464-0004-18-4012345678"),
            'email' =>"maite@gmail.com",
            'password' => Hash::make("12345678"),
        ]);

        User::create([
            'name' => "jaime",
            'last_name'=> "Moreno",
            'dni'=>"42368446A",
            'address'=>"Calle Toles, 12, 1A",
            'cuota'=>"Anual",
            'rol'=>1,
            'phone'=>677055268,
            'IBAN'=>Crypt::encryptString("ES-1464-0004-18-4012345678"),
            'email' =>"jaime@gmail.com",
            'password' => Hash::make("12345678"),
        ]);

        User::create([
            'name' => "Fran",
            'last_name'=> "Campos",
            'dni'=>"33458556N",
            'address'=>"Calle Locura, 16, 5A",
            'cuota'=>"Trimestral",
            'rol'=>2,
            'phone'=>655705525,
            'IBAN'=>Crypt::encryptString("ES-1364-2469-12-5012345678"),
            'email' =>"fran@gmail.com",
            'password' => Hash::make("12345678"),
        ]);

        User::create([
            'name' => "Tere",
            'last_name'=> "Robles",
            'dni'=>"12454666G",
            'address'=>"Calle Amargura, 12, 4A",
            'cuota'=>"Trimestral",
            'rol'=>2,
            'phone'=>697055248,
            'IBAN'=>Crypt::encryptString("ES-1465-4923-52-0824142054"),
            'email' =>"teren@gmail.com",
            'password' => Hash::make("12345678"),
        ]);
    }
}
