<?php

namespace App\Http\Controllers;

use App\Models\Taller;
use App\Models\Visita;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Carbon\Carbon;
use App\Models\Tecnologico;
use App\Models\Estudiante;

class EstudiantesController extends Controller
{


    public function index(): View
    {
        $tecs = Tecnologico::select('id','tec')
        ->orderBy('tec')->get();
        return view('estudiantes')->with(compact('tecs'));
    }

    public function registro(Request $request): View {
        $request->validate(
            [
                'nombre'=>'required',
                'appat'=>'required',
                'control'=>'required|min:8|max:9|unique:estudiantes',
                'correo'=>'required|email'
            ],
            [
                'nombre.required'=>'Por favor, indique su nombre',
                'appat.required'=>'Por favor, indique su primer apellido',
                'control.required'=>'Debe indicar su número de control',
                'control.min'=>'El número de control consta de al menos 8 caracteres',
                'control.max'=>'El número de control es de máximo 9 caracteres',
                'control.unique'=>'Ya existe un registro con ese número de control',
                'correo.required'=>'Por favor, señale algún correo electrónico de contacto',
                'correo.email'=>'El correo debe tener un formato válido'
            ]
        );
        $hoy = Carbon::now();
        $limite = Carbon::createFromFormat('Y-m-d','2023-09-08');
        $en_tiempo= $hoy->gt($limite);
        $monto = $en_tiempo ? "750" : "650";
        $estudiante = new Estudiante();
        $estudiante->nombre = $request->nombre;
        $estudiante->appat = $request->appat;
        $estudiante->apmat = $request->apmat;
        $estudiante->control = $request->control;
        $estudiante->tec = $request->tec;
        $estudiante->correo = $request->correo;
        $estudiante->monto = $monto;
        $estudiante->pago = 0;
        $estudiante->taller = 1;
        $estudiante->visita = 1;
        $estudiante->folio = $request->folio;
        $estudiante->registrado = 0;
        $estudiante->save();
        return view('gracias');
    }

    public function informar(){
        return view('registrar');
    }

    public function buscar(Request $request){
        $request->validate(
            [
                'correo'=>'required|email'
            ],
            [
                'correo.required'=>'Por favor, indique el correo electrónico cpn que se registró',
                'correo.email'=>'El correo debe tener un formato válido'
            ]
        );
        if(Estudiante::where('correo',$request->correo)->where('pago','=',0)->count()>0){
            return view('sinpago');
        }elseif (Estudiante::where('correo',$request->correo)->where('pago','=',1)->count()>0){
            if(Estudiante::where('correo',$request->correo)->where('pago','=',1)->where('registrado','=',1)->count()>0){
                return view('realizado');
            }else{
                $datos=Estudiante::where('correo',$request->correo)->first();
                $talleres = Taller::where('capacidad','>',0)->get();
                $visitas = Visita::where('capacidad','>',0)->get();
                return view('seleccionar')->with(compact('datos',
                    'talleres','visitas'));
            }
        }else{
            return view('sinregistro');
        }
    }

    public function actualizar(Request $request){
        $id=base64_decode($request->control);
        Estudiante::where('id',$id)->update(
            [
                'taller'=>$request->taller,
                'visita'=>$request->visita,
                'registrado'=>1
            ]
        );
        $taller=Taller::find($request->taller);
        $cant=$taller->capacidad<=1 ? 0 : $taller->capacidad - 1 ;
        $taller->update([
            'capacidad'=>$cant
        ]);
        $taller->save();
        $visita = Visita::find($request->visita);
        $ncant = $visita->capacidad<=1 ? 0 : $visita->capacidad - 1;
        $visita->update([
            'capacidad'=>$ncant
        ]);
        $visita->save();
        return view('gracias2');
    }
}
