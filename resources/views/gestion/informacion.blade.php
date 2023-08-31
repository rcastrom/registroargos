@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="form-horizontal" role="form">
            <fieldset>
                <legend>Datos del estudiante</legend>
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
                    <label class="col-sm-3 mt-3 control-label" for="control">Número de control</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="control"
                               id="control" readonly
                               value="{{$estudiante->control}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 mt-3 control-label" for="correo">Correo electrónico</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="correo"
                               id="correo" readonly
                               value="{{$estudiante->correo}}">
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
                    <label class="col-sm-3 mt-3 control-label" for="pagado">¿Pagado?</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="pagado"
                               id="pagado" readonly
                               value="{{$estudiante->pago==0?"No":"Si"}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9 mt-3">
                        <a class="btn btn-success" href="{{route('alumnos.edit',[$estudiante])}}">
                            <i class="fa fa-edit"></i> Validar pago</a>
                    </div>
                </div>
            </fieldset>
        </form>
        <br>
        <form action="{{route('alumnos.destroy',[$estudiante])}}" method="post">
            <fieldset>
                @method("delete")
                @csrf
                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash"></i> Eliminar registro
                </button>
            </fieldset>
        </form>
    </div>
@endsection
