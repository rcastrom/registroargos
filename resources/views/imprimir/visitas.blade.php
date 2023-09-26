@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Asistencia a visitas</div>
            <div class="card-body">
                <h4>Impresión</h4>
                <p>
                    Emplee el siguiente módulo para realizar una impresión de los estudiantes
                    inscritos a alguna visita industrial</p>
                <div class="container">
                    <form action="{{route('imprimir_visitas')}}" method="post" class="form-horizontal" role="form">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 mt-3 control-label" for="taller">Visita</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <select name="visita" id="visita" required class="form-control col-sm-2">
                                            <option value="" selected>--Seleccione--</option>
                                            @foreach($visitas as $visita)
                                                <option value="{{$visita->id}}">{{$visita->visita}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9 mt-3">
                                <button type="submit" class="btn btn-primary">
                                    Generar listado
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


