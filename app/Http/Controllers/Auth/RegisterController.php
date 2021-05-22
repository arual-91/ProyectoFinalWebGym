<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;


class RegisterController extends Controller
{  

    use RegistersUsers;

    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'dni' => ['required', 'string', 'min:9', 'max:9'],
            'address' => ['required', 'string', 'max:255'],
            'cuota' => ['required', 'string'],
            'cccCountry' => ['required', 'string'],
            'ccc1' => ['required', 'string'],
            'ccc2' => ['required', 'string'],
            'ccc3' => ['required', 'string'],
            'ccc4' => ['required', 'string'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'dni' => $data['dni'],
            'address' => $data['address'],
            'rol' => "user",
            'cuota' => $data['cuota'],
            'password' => Hash::make($data['password']),
            'IBAN' => Crypt::encryptString($data['cccCountry'].$data['ccc1'].$data['ccc2'].$data['ccc3'].$data['ccc4']),
        ]);
    }
}
