@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('docentes.update',$docente->id)}}" class="form-horizontal" role="form" method="post">
            @method('PUT')
            @csrf
            <fieldset>
                <legend>Registro de pago para congreso Argos 2023</legend>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">Nombre</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name"
                               id="name" readonly
                               value="{{$docente->nombre.' '.$docente->appat.' '.$docente->apmat}}">
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
                    <label class="col-sm-3 mt-3 control-label" for="monto">Monto a pagar</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="monto"
                               id="monto" readonly
                               value="{{"$".number_format($docente->monto,2,'.',',')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 mt-3 control-label" for="pagado">Pagado</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-xs-3">
                                <select name="pagado" id="pagado" class="form-control col-sm-2">
                                    <option value="0" {{$docente->pago=="0"?"selected":""}}>No</option>
                                    <option value="1" {{$docente->pago=="1"?"selected":""}}>Si</option>
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
