<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Tecnologico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class PagosMaestrosController extends Controller
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
                $info = Docente::select(
                    DB::raw("CONCAT(nombre,' ',appat,' ',apmat)AS nombre_completo"),
                    'id',
                    'correo'
                )->orderBy('appat','asc')
                    ->orderBy('apmat','asc')
                    ->orderBy('nombre','asc');
            }else{
                $info = Docente::select(
                    DB::raw("CONCAT(nombre,' ',appat,' ',apmat)AS nombre_completo"),
                    'id',
                    'correo'
                )->where('tec',$tec_asignado)
                    ->orderBy('appat','asc')
                    ->orderBy('apmat','asc')
                    ->orderBy('nombre','asc');
            }
            $data = $info;
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row){
                    $destino=route("docentes.show",$row['id']);
                    $btn = "<a class='edit btn btn-primary' href='$destino'>Seleccionar</a>";
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('personal.inicio');
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
    public function show(Docente $docente)
    {
        $tec=Tecnologico::find($docente->tec);
        return view('personal.informacion')->with(compact('docente','tec'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        $tec=Tecnologico::find($docente->tec);
        return view('personal.actualizar')
            ->with(compact('docente','tec'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docente $docente)
    {
        Docente::where('id',$docente->id)->update([
            'pago'=>$request->pagado
        ]);
        return view('personal.gracias');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docente $docente)
    {
        $docente->delete();
        return redirect()->route('docentes.index');
    }
}
