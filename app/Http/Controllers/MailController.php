<?php

namespace App\Http\Controllers;

use App\Mail\EmailMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request){

      $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Actividades","Contacto");


        $validated = $request->validate([
            'email' => 'required',
            'cuerpo' => 'required',
        ]);

        $body = $request->input("cuerpo");
        $email = $request->input("email");

        $correo = new EmailMailable($body,  $email);
        Mail::to("gyms.fitness.club@gmail.com")->send($correo);  
    
        return view('confirmail')
        -> with('navs',  $menus );
        
      //  return 'Mensaje enviado <a href="/contacto" > Volver </a>';

    }}
