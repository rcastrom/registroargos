<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*DB::table('visitas')->insert([
            'visita'=>'SIN REGISTRO',
            'capacidad'=>10000
        ]); */
        DB::table('visitas')->insert([
            'visita'=>'NAVICO ELECTRÓNICA LOWRANCE DE MÉXICO 9 AM',
            'capacidad'=>30
        ]);
        DB::table('visitas')->insert([
            'visita'=>'DIALIGHT 9 AM',
            'capacidad'=>30
        ]);
        DB::table('visitas')->insert([
            'visita'=>'ALLEGION 9 AM',
            'capacidad'=>30
        ]);
        DB::table('visitas')->insert([
            'visita'=>'INSTRUMENTOS MUSICALES FENDER 8 AM',
            'capacidad'=>15
        ]);
        DB::table('visitas')->insert([
            'visita'=>'INSTRUMENTOS MUSICALES FENDER 1 PM',
            'capacidad'=>15
        ]);
        DB::table('visitas')->insert([
            'visita'=>'PLENIMEX',
            'capacidad'=>30
        ]);
        DB::table('visitas')->insert([
            'visita'=>'CROWN HOLDINGS',
            'capacidad'=>30
        ]);
        DB::table('visitas')->insert([
            'visita'=>'AUGEN OPTICOS AM',
            'capacidad'=>12
        ]);
        DB::table('visitas')->insert([
            'visita'=>'AUGEN OPTICOS PM',
            'capacidad'=>12
        ]);
        DB::table('visitas')->insert([
            'visita'=>'DIVINTO VINICOLA DESTINO AM',
            'capacidad'=>100
        ]);
        DB::table('visitas')->insert([
            'visita'=>'HUTSHINSON AEROESPACIAL 9 AM',
            'capacidad'=>15
        ]);
        DB::table('visitas')->insert([
            'visita'=>'HUTSHINSON AEROESPACIAL 2:30 PM',
            'capacidad'=>15
        ]);
        DB::table('visitas')->insert([
            'visita'=>'BAJA TACKLE 10 AM',
            'capacidad'=>30
        ]);
        DB::table('visitas')->insert([
            'visita'=>'BAJA TACKLE 13 PM',
            'capacidad'=>30
        ]);
        DB::table('visitas')->insert([
            'visita'=>'BIBAYOF 9 AM',
            'capacidad'=>50
        ]);
    }
}
