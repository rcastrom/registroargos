@extends('layouts.inicio')


@section('content')
    <section class="speakers section-padding">
        <div class="mask d-flex align-items-center h-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8 col-lg-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="card-body p-5">
                                <h3 class="mb-5 text-center">Formato de registro de taller y visita industrial</h3>
                                <h4>{{$datos->nombre.' '.$datos->appat.' '.$datos->apmat}}</h4>
                                <form action="{{route('actualizar.visitas')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-sm-3 mt-3 control-label" for="taller">Talleres</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <select name="taller" id="taller" class="form-control col-sm-2" required>
                                                        @foreach($talleres as $taller)
                                                            @php
                                                                $txt = $datos->taller == $taller->id ? "selected": "";
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
                                                    <select name="visita" id="visita" class="form-control col-sm-2" required>
                                                        @foreach($visitas as $visita)
                                                            @php
                                                                $txt = $datos->visita == $visita->id ? "selected": "";
                                                            @endphp
                                                            <option value="{{$visita->id}}" {{$txt}}>{{$visita->visita}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="control" value="{{base64_encode($datos->id)}}">
                                    <button type="submit" class="btn btn-primary btn-rounded btn-block">Continuar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
