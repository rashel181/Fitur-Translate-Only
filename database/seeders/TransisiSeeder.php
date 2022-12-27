<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $data = [
                ['id_ind' => 1, 'id_os' => 1,],
                ['id_ind' => 1, 'id_os' => 2,],
                ['id_ind' => 2, 'id_os' => 3,],   
                ['id_ind' => 3, 'id_os' => 4,],
                ['id_ind' => 4, 'id_os' => 4,],
            ];
            DB::table('transisis')->insert($data);
    }
}
