<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Visita;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VisitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View{
        $visitas = Visita::orderBy('visita','ASC')->get();
        return view('imprimir.visitas')
            ->with(compact('visitas'));
    }

    public function listado(Request $request)
    {
        $visita_info = $request->visita;
        if($visita_info==1){
            $nombres=Estudiante::select('appat','apmat','nombre','tec','pago','control')
                ->orderBy('appat','asc')
                ->orderBy('apmat','asc')
                ->orderBy('nombre','asc')
                ->with('tecnologicos')
                ->where('visita','=',1)
                ->get();
            $titulo="SIN REGISTRO";
            $pdf = \PDF::loadView('imprimir.visitas2',compact('nombres','titulo'));
            return $pdf->stream('listado_visitas.pdf');
        }else{
            $nombres=Estudiante::with('tecnologicos')
                ->where('pago','=',1)
                ->where('visita','=',$visita_info)
                ->orderBy('appat','asc')
                ->orderBy('apmat','asc')
                ->orderBy('nombre','asc')
                ->get();
            $visita=Visita::find($request->visita);
            $titulo=$visita->visita;
            $pdf = \PDF::loadView('imprimir.visitas3',compact('nombres','titulo'));
            return $pdf->stream('listado_visitas.pdf');
        }

    }
}
