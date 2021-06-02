<?php

namespace Database\Seeders;

use App\Models\Activities;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities');

        Activities::create([
            'name' => 'ABDOMEN',
            'image' => 'abdomen.jpg',
            'description' =>'Ejercicios centrados en trabajar todo tu abdomen de forma global para conseguir un vientre tonificado.',
            'intensity' =>'Baja / Media',
            'calories' =>'Bajo',
        ]);

        Activities::create([
            'name' => 'BODY COMBAT',
            'image' => 'bodycombat.jpg',
            'description' =>'Actividad cardiovascular donde se aplican movimientos de técnicas de combate. Trabajo aeróbico, coreografías y movimientos a base de puños y patadas. Trabajarás tu fuerza, coordinación, flexibilidad y resistencia, y liberarás estrés.',
            'intensity' =>'Media / Alta',
            'calories' =>'Alto',
        ]);
        Activities::create([
            'name' => 'PILATES',
            'image' => 'pilates.jpg',
            'description' =>'Método de entrenamiento basado en distintos movimientos y posturas que mejorará la salud de tu espalda y te producirá un bienestar global',
            'intensity' =>'Baja / Media',
            'calories' =>'Bajo / Medio',
        ]);
        Activities::create([
            'name' => 'CICLO',
            'image' => 'bodycombat.jpg',
            'description' =>'Actividad cardiovascular realizada sobre una bicicleta estática ajustable y adaptada al nivel de cada persona. Ejercicio intenso y muy ameno.',
            'intensity' =>' Media / Alta',
            'calories' =>'Alto',
        ]);
        Activities::create([
            'name' => 'YOGA',
            'image' => 'yoga.jpg',
            'description' =>'El yoga es una disciplina, más que un deporte, porque no trata solo de cultivar el cuerpo, sino también la mente, y el alma.',
            'intensity' =>'Baja',
            'calories' =>'Bajo',
        ]);
        Activities::create([
            'name' => 'ZUMBA',
            'image' => 'zumba.jpg',
            'description' =>'Zumba es un método de entrenamiento para todo el mundo que te ayudará a mantener un óptimo estado de forma. Una actividad muy divertida y saludable que combina ritmos y coreografías de diferentes partes del mundo.',
            'intensity' =>'Media',
            'calories' =>'Medio',
        ]);
    }
}
