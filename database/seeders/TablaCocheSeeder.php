<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaCocheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coche')->insert([
            'matricula'=>'3515BRR',
            'marca'=>'Opel',
            'modelo'=>'Vectra',
        ]);
    }
}
