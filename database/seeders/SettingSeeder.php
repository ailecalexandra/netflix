<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = ['1','1.5','2','4','9'];
        foreach ($status as $item){
            $setting = new Setting();
            $setting->amount=$item;
            $setting->save();
        }
    }
}
