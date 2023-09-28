<?php

namespace App\Http\Controllers;



use App\Models\Estudiante;
use App\Models\Taller;
use Illuminate\Http\Request;
use Illuminate\View\View;


class TalleresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View{
        $talleres = Taller::orderBy('taller','ASC')->get();
        return view('imprimir.talleres')
            ->with(compact('talleres'));
    }

    public function listado(Request $request)
    {
        $taller_info = $request->taller;
        if($taller_info==1){
            $nombres=Estudiante::select('appat','apmat','nombre','tec','pago','control')
                ->orderBy('appat','asc')
                ->orderBy('apmat','asc')
                ->orderBy('nombre','asc')
                ->with('tecnologicos')
                ->where('taller','=',1)
                ->get();
            $titulo="SIN REGISTRO";
            $pdf = \PDF::loadView('imprimir.talleres2',compact('nombres','titulo'));
            return $pdf->stream('listado_talleres.pdf');
        }else{
            $nombres=Estudiante::with('tecnologicos')
                ->where('pago','=',1)
                ->where('taller','=',$taller_info)
                ->orderBy('appat','asc')
                ->orderBy('apmat','asc')
                ->orderBy('nombre','asc')
                ->get();
            $taller=Taller::find($request->taller);
            $titulo=$taller->taller;
            $pdf = \PDF::loadView('imprimir.talleres3',compact('nombres','titulo'));
            return $pdf->stream('listado_talleres.pdf');
        }

    }
}
