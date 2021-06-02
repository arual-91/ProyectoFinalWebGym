<?php

namespace Database\Seeders;

use App\Models\Sales;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('sales');

        Sales::create([
            'product_id' => 1,
            'user_id' => 1,
            'shipping_address' =>'calle olmeca, 106, 07004 Baleares',
        ]);

        Sales::create([
            'product_id' => 1,
            'user_id' => 2,
            'shipping_address' =>'calle olmos, 1, 07704 Baleares',
        ]);

        Sales::create([
            'product_id' => 2,
            'user_id' =>  1,
            'shipping_address' =>'calle contenta, 44, 07054 Baleares',
        ]);
    }
}
