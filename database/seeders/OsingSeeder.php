<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OsingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['kata_os' => 'isun'],
            ['kata_os' => 'ison'],
            ['kata_os' => 'memengan'],    
            ['kata_os' => 'osing']
        ];
        DB::table('bahasa_osings')->insert($data);
    }
}
