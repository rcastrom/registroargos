<?php

namespace App\Http\Controllers;

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
        $estudiante->save();
        return view('gracias');
    }
}
