<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Tecnologico;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ImprimirController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View{
        $tec_asignado = auth()->user()->tec;
        if($tec_asignado==1){
            $tecnologicos = Tecnologico::select('id','tec')->orderBy('tec')->get();
            $bandera=1;
        }else{
            $tecnologicos = Tecnologico::find($tec_asignado);
            $bandera=0;
        }
        return view('imprimir.inicio')
            ->with(compact('tecnologicos','bandera'));
    }

    public function listado(Request $request){
        $tec=Tecnologico::find($request->tec);
        if($request->listado==1){
            $nombres=Estudiante::where('tec',$request->tec)
                ->where('pago',1)
                ->orderBy('appat','asc')
                ->orderBy('apmat','asc')
                ->orderBy('nombre','asc')
                ->get();
            $titulo="Estudiantes que ya realizaron el pago";
        }else{
            $nombres=Estudiante::where('tec',$request->tec)
                ->where('pago',0)
                ->orderBy('appat','asc')
                ->orderBy('apmat','asc')
                ->orderBy('nombre','asc')
                ->get();
            $titulo="Estudiantes registrados sin pago registrado";
        }
        $pdf = \PDF::loadView('imprimir.estudiantes',compact('tec','nombres','titulo'));
        return $pdf->stream('listado_estudiantes.pdf');
    }
}
