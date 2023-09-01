<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Tecnologico;
use App\Models\Docente;

class DocentesController extends Controller
{

    public function index(): View
    {
        $tecs = Tecnologico::select('id','tec')
            ->orderBy('tec')->get();
        return view('maestros')->with(compact('tecs'));
    }

    public function registro(Request $request): View
    {
        $request->validate(
            [
                'nombre'=>'required',
                'appat'=>'required',
                'correo'=>'required|email|unique:docentes'
            ],
            [
                'nombre.required'=>'Por favor, indique su nombre',
                'appat.required'=>'Por favor, indique su primer apellido',
                'correo.required'=>'Por favor, señale algún correo electrónico de contacto',
                'correo.email'=>'El correo debe tener un formato válido',
                'correo.unique'=>'Ya existe un registro con ese correo'
            ]
        );
        $maestro = new Docente();
        $maestro->nombre = $request->nombre;
        $maestro->appat = $request->appat;
        $maestro->apmat = $request->apmat;
        $maestro->tec = $request->tec;
        $maestro->correo = $request->correo;
        $maestro->monto = 1000;
        $maestro->pago = 0;
        $maestro->ponente = $request->ponente;
        $maestro->save();
        return view('gracias');
    }

}
