@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Listado de estudiantes</div>
            <div class="card-body">
                <h4>Impresión</h4>
                <p>
                    Emplee el siguiente módulo para realizar una impresión de los estudiantes; para
                    ello, indique los siguientes campos:</p>
                <div class="container">
                    <form action="{{route('imprimir_estudiantes')}}" method="post" class="form-horizontal" role="form">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 mt-3 control-label" for="tec">Tecnológico</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <select name="tec" id="tec" class="form-control col-sm-2">
                                            @if($bandera)
                                                @foreach($tecnologicos as $tecnologico)
                                                    <option value="{{$tecnologico->id}}">{{$tecnologico->tec}}</option>
                                                @endforeach
                                            @else
                                                <option value="{{$tecnologicos->id}}" selected>{{$tecnologicos->tec}}</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 mt-3 control-label" for="listado">Tipo de impresión</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <select name="listado" id="listado" class="form-control col-sm-2" required>
                                            <option value="" selected>--Seleccione--</option>
                                            <option value="1">Estudiantes que ya pagaron</option>
                                            <option value="2">Estudiantes que no han pagado</option>
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
