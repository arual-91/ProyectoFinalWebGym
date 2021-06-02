<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product');

        Product::create([
            'name' => 'TOALLA MICROFIBRA GRIS OSCURO TALLA M 65 X 90 CM',
            'image' => '1.jpg',
            'description' =>'Nuestros equipos de diseño han desarrollado esta toalla de baño para nadadores y otros deportistas que desean secarse eficazmente. Ultrapráctica, la llevarás a todas partes. Toalla de baño de microfibra M 65 x 90 cm.',
            'price' =>4.99,
        ]);

        Product::create([
            'name' => 'BIDÓN BOTELLA FITNESS 550 ML NEGRO',
            'image' => '2.jpg',
            'description' =>'Ideal para todas las actividades de fitness. Se lleva fácilmente en la bolsa/mochila. BIDÓN NEGRO Y ERGONÓMICO PARA BEBER FÁCILMENTE.',
            'price' =>4.50,
        ]);

        Product::create([
            'name' => 'SHAKER NEGRO/AMARILLO 500 ML',
            'image' => '3.jpg',
            'description' =>'El SHAKER 500 ml ha sido concebido por nuestro equipo de musculación para MEZCLAR fácilmente y de forma homogénea todos los polvos de proteínas. Su recipiente con fondo redondo facilita el lavado. El tapón está unido al mezclador, lo que limita el riesgo de pérdida. Tapón con fijación para mayor comodidad. ',
            'price' =>5.09,
        ]);

        Product::create([
            'name' => 'CAMISETA MANGA CORTA HOMBRE 100% ALGODÓN FITNESS SPORTEE NEGRO',
            'image' => '4.jpg',
            'description' =>'Nuestro equipo de diseño ha diseñado esta camiseta de running transpirable para hombre para mantenerte seco mientras corres con tiempo cálido. El tejido de esta camiseta de running para hombre, fabricado con poliéster reciclado, absorbe y evacúa el sudor para reducir la sensación de humedad. Se seca más rápido que una camiseta de algodón.',
            'price' =>10.99,
        ]);

        
        Product::create([
            'name' => 'CAMISETA MUJER MANGA CORTA 100% ALGODÓN FITNESS SPORTEE NEGRA',
            'image' => '5.jpg',
            'description' =>'Camiseta de manga corta con corte amplio y cordón de ajuste en la cintura para ajustarla como más te guste. Corte amplio para aportar máxima comodidad y libertad de movimientos, cordón para ajustar la camiseta como más te guste, tejido ligero y transpirable... ¡una prenda indispensable!.',
            'price' =>10.99,
        ]);


        

    }
}
