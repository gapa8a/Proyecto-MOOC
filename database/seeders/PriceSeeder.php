<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Price;
use GuzzleHttp\Handler\Proxy;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::create([
            'name'=> 'Gratis',
            'value'=> 0 
        ]);
/* 
        Price::create([
            'name'=> '4.99 US$ (nivel 1)',
            'value'=> 4.99
        ]);

        Price::create([
            'name'=> '9.99 US$ (nivel 2)',
            'value'=> 9.99
        ]);

        Price::create([
            'name'=> '11.99 US$ (nivel 2)',
            'value'=> 11.99
        ]); */
    }
}
