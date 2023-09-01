<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TallerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('talleres')->insert([
            'taller' => "SIN REGISTRO",
            'capacidad' => 10000
        ]);
        DB::table('talleres')->insert([
            'taller' => "Análisis de ciclo de vida y su importancia en el diseño de productos sostenibles. (De 11 a 14 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Análisis de ciclo de vida y su importancia en el diseño de productos sostenibles. (De 16 a 19 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Análisis de materiales mediante simulación con Solidworks. (De 11 a 14 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Análisis de materiales mediante simulación con Solidworks. (De 16 a 19 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Análisis de sustentabilidad con Solidworks. (De 11 a 14 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Análisis de sustentabilidad con Solidworks (De 16 a 19 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Aplicación de Metodología para el diseño integral de nuevos productos (DINP). (De 11 a 14 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Aplicación de Metodología para el diseño integral de nuevos productos (DINP)(De 16 a 19 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Automatización con PLC. (De 11 a 14 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Automatización con PLC (De 16 a 19 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Biotecnología sustentable. (De 11 a 14 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Biotecnología sustentable (De 16 a 19 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Cad – Sketchup. (De 11 a 14 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Cad – Sketchup (De 16 a 19 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Conceptos generales sobre la Nanotecnología en la Industria (De 11 a 14 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Conceptos generales sobre la Nanotecnología en la Industria (De 16 a 19 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Habilidades blandas para la sostenibilidad (De 11 a 14 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Habilidades blandas para la sostenibilidad (De 16 a 19 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Manufactura aditiva impresión 3D (De 11 a 14 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Manufactura aditiva impresión 3D (De 16 a 19 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Método TRIZ para la innovación (De 11 a 14 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Método TRIZ para la innovación (De 16 a 19 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Propiedad Industrial (De 11 a 14 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Propiedad Industrial (De 16 a 19 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Transformación de procesos en el contexto de la economía digital (De 11 a 14 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Transformación de procesos en el contexto de la economía digital (De 16 a 19 horas)",
            'capacidad' => 20
        ]);
        DB::table('talleres')->insert([
            'taller' => "Evento Social (De 11 a 14 horas)",
            'capacidad' => 100
        ]);
        DB::table('talleres')->insert([
            'taller' => "Evento Social (De 16 a 19 horas)",
            'capacidad' => 100
        ]);
    }
}
