<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndonesiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['kata_ind' => 'saya'],
            ['kata_ind' => 'bermain'],    
            ['kata_ind' => 'tidak'],
            ['kata_ind' => 'bukan']
        ];
        DB::table('bahasa_indonesias')->insert($data);
    }
}
