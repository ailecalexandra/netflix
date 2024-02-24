<?php

namespace Database\Seeders;


use App\Models\TypeUser;
use Illuminate\Database\Seeder;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = ['cliente','vendedor'];
        foreach($status as $item){
            $usertype = new TypeUser();
            $usertype->name=$item;
            $usertype->save();


        }
    }
}
