<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $excelData = Excel::toArray([],public_path('accounts5.xlsx'));
        foreach ($excelData[0] as $row) {
            $nombre = $row[0];
            $password= $row[1];
            print_r($row);
        }
    }
}
