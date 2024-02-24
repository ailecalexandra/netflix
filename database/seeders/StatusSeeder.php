<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aux = ['disponible','vencida','vencehoy','vencemanana'];
        foreach ($aux as $item) {
            $status = new Status();
            $status->name=$item;
            $status->save();

        }
    }
}
