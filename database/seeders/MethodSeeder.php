<?php

namespace Database\Seeders;

use App\Models\Method;
use Illuminate\Database\Seeder;

class MethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status=['pago movil','efectivo','bancolombia','nequi','binance','zelle'];
        foreach ($status as $item){
            $method = new Method();
            $method->name=$item;
            $method->save();
        }


    }
}
