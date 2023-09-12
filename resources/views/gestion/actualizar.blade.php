@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('alumnos.update',$estudiante->id)}}" class="form-horizontal" role="form" method="post">
            @method('PUT')
            @csrf
            <fieldset>
                <legend>Registro de pago para congreso Argos 2023</legend>
                <div class="card">
                    <div class="card-header">Importante</div>
                    <div class="card-body">
                        Al momento de registrar el pago, se le indicarán los talleres y visitas
                        disponibles en cuanto a la capacidad.
                        <ul>
                            <li>De no contar con talleres disponibles, habrán actividades
                            recreativas, ya sea en el turno matutino o el vespertino</li>
                            <li>En el caso de visitas, por el momento no se cuenta
                                con mayor información disponible</li>
                        </ul>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">Nombre</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name"
                               id="name" readonly
                               value="{{$estudiante->nombre.' '.$estudiante->appat.' '.$estudiante->apmat}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 mt-3 control-label" for="tec">Tecnológico</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tec"
                               id="tec" readonly
                               value="{{$tec->tec}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 mt-3 control-label" for="contro">Número de control</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="control"
                               id="control" readonly
                               value="{{$estudiante->control}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 mt-3 control-label" for="monto">Monto a pagar</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="monto"
                               id="monto" readonly
                               value="{{"$".number_format($estudiante->monto,2,'.',',')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 mt-3 control-label" for="folio">Folio asignado</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="folio" id="folio">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 mt-3 control-label" for="pagado">Pagado</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-xs-3">
                                <select name="pagado" id="pagado" class="form-control col-sm-2">
                                    <option value="0" {{$estudiante->pago==0?" selected":""}}>No</option>
                                    <option value="1" {{$estudiante->pago==1?" selected":""}}>Si</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 mt-3 control-label" for="taller">Talleres</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-xs-3">
                                <select name="taller" id="taller" class="form-control col-sm-2">
                                    @foreach($talleres as $taller)
                                        @php
                                            $txt = $estudiante->taller == $taller->id ? "selected": "";
                                        @endphp
                                        <option value="{{$taller->id}}" {{$txt}}>{{$taller->taller}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 mt-3 control-label" for="visita">Visitas</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-xs-3">
                                <select name="visita" id="visita" class="form-control col-sm-2">
                                    @foreach($visitas as $visita)
                                        @php
                                            $txt = $estudiante->visita == $visita->id ? "selected": "";
                                        @endphp
                                        <option value="{{$visita->id}}" {{$txt}}>{{$visita->visita}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9 mt-3">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-file-invoice-dollar"></i> Validar pago
                        </button>
                    </div>
                </div>
            </fieldset>
        </form>
        <br>
    </div>
@endsection
