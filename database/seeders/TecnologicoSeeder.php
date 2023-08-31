<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TecnologicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tecnologicos')->insert([
            'tec'=>'Ensenada'
        ]);
        DB::table('tecnologicos')->insert([
            'tec'=>'Mexicali'
        ]);
        DB::table('tecnologicos')->insert([
            'tec'=>'Mulegé'
        ]);
        DB::table('tecnologicos')->insert([
            'tec'=>'Tijuana'
        ]);
    }
}
