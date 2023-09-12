<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Tecnologico;
use App\Models\Taller;
use App\Models\Visita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Yajra\DataTables\DataTables;

class PagosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tec_asignado = auth()->user()->tec;
        if($request->ajax()){
            if($tec_asignado==1){
                $info = Estudiante::select(
                    'id',
                    'nombre',
                    'appat',
                    'apmat',
                    'control'
                )->orderBy('appat','asc')
                    ->orderBy('apmat','asc')
                    ->orderBy('nombre','asc');
            }else{
                $info = Estudiante::select(
                    'id',
                    'nombre',
                    'appat',
                    'apmat',
                    'control'
                )->where('tec',$tec_asignado)
                    ->orderBy('appat','asc')
                    ->orderBy('apmat','asc')
                    ->orderBy('nombre','asc');
            }
            $data = $info;
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row){
                   $destino=route("alumnos.show",$row['id']);
                   $btn = "<a class='edit btn btn-primary' href='$destino'>Seleccionar</a>";
                   return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('gestion.inicio');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estudiante=Estudiante::find($id);
        $tec=Tecnologico::find($estudiante->tec);
        return view('gestion.informacion')->with(compact('estudiante','tec'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $estudiante=Estudiante::find($request->alumno);
        $tec=Tecnologico::find($estudiante->tec);
        $talleres = Taller::where('capacidad','>',0)->get();
        $visitas = Visita::where('capacidad','>',0)->get();
        return view('gestion.actualizar')
            ->with(compact('estudiante','talleres','visitas','tec'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudiante $alumno)
    {
        Estudiante::where('id',$alumno->id)->update([
            'folio'=>$request->folio,
            'pago'=>$request->pagado,
            'taller'=>$request->taller,
            'visita'=>$request->visita
        ]);
        if($request->taller != 1){
            $taller=Taller::where('id',$request->taller)->first();
            $capacidad=$taller->capacidad;
            $capacidad-=1;
            Taller::find($request->taller)->update([
               'capacidad'=>$capacidad
            ]);
        }
        if($request->visita != 1){
            $visita=Visita::find($request->visita);
            $capacidad=$visita->capacidad;
            $capacidad-=1;
            Visita::find($request->visita)->update([
                'capacidad'=>$capacidad
            ]);
        }
        return view('gestion.gracias');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
