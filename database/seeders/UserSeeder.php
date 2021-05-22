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
        DB::table('users')->truncate();

        User::create([
            'name' => "Laura",
            'last_name'=> "Andrades",
            'dni'=>"25568446A",
            'address'=>"Calle Toles, 12, 1A",
            'cuota'=>"Anual",
            'rol'=>1,
            'IBAN'=>Crypt::encryptString("ES6621000418401234567891"),
            'email' =>"admin@gmail.com",
            'password' => Hash::make("12345678"),
        ]);

        User::create([
            'name' => "Fran",
            'last_name'=> "Campos",
            'dni'=>"33458556N",
            'address'=>"Calle Locura, 16, 5A",
            'cuota'=>"Trimestral",
            'rol'=>2,
            'IBAN'=>Crypt::encryptString("ES9000246912501234567891"),
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
            'IBAN'=>Crypt::encryptString("ES1000492352082414205416"),
            'email' =>"teren@gmail.com",
            'password' => Hash::make("12345678"),
        ]);
    }
}
