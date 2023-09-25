<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Taller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdministracionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $tec_asignado = auth()->user()->tec;
        if($tec_asignado==1){
            return view('admin.inicio');
        }else{
            return view('admin.no');
        }
    }

    public function barchart(){
        $Ensenada = Estudiante::where('tec',1)->where('pago',1)->get();
        $Mexicali = Estudiante::where('tec',2)->where('pago',1)->get();
        $Mulege = Estudiante::where('tec',3)->where('pago',1)->get();
        $Tijuana  = Estudiante::where('tec',4)->where('pago',1)->get();
        $Otro = Estudiante::where('tec',5)->where('pago',1)->get();
        $conteo_ensenada = isset($Ensenada)? count($Ensenada): 0;
        $conteo_mexicali = isset($Mexicali)? count($Mexicali): 0;
        $conteo_mulege = isset($Mulege)? count($Mulege): 0;
        $conteo_tijuana = isset($Tijuana)?count($Tijuana):0;
        $conteo_otro = isset($Otro)?count($Otro):0;
        return view('admin.pagados')->with(compact('conteo_ensenada',
            'conteo_mexicali', 'conteo_mulege', 'conteo_tijuana', 'conteo_otro'));
    }

    public function talleres(){
        $conteos = Estudiante::query()->leftJoin(
            'talleres','talleres.id','=','estudiantes.taller')
            ->where('pago','=',1)
            ->select('talleres.taller',DB::raw('count(*) as total'))
            ->groupBy('talleres.taller')
            ->get();
        return view('admin.talleres')->with(compact('conteos'));
    }

    public function visitas(){
        $conteos = Estudiante::query()->leftJoin(
            'visitas','visitas.id','=','estudiantes.visita')
            ->where('pago','=',1)
            ->select('visitas.visita',DB::raw('count(*) as total'))
            ->groupBy('visitas.visita')
            ->get();
        return view('admin.visitas')->with(compact('conteos'));
    }

}
