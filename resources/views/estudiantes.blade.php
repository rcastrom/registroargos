@extends('layouts.inicio')


@section('content')
    <section class="speakers section-padding">
        <div class="mask d-flex align-items-center h-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8 col-lg-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="card-body p-5">
                                <h3 class="mb-5 text-center">Formato de pre registro</h3>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{route('registro.estudiantes')}}" method="post">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="nombre">
                                            <i class="fas fa-user"></i> Nombre </label>
                                        <input type="text" id="nombre" name="nombre" required
                                               onblur="this.value=this.value.toUpperCase();" class="form-control" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="appat">
                                            <i class="fas fa-user"></i> Primer apellido </label>
                                        <input type="text" id="appat" name="appat" required
                                               onblur="this.value=this.value.toUpperCase();" class="form-control" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="apmat">
                                            <i class="fas fa-user"></i> Segundo apellido </label>
                                        <input type="text" id="apmat" name="apmat"
                                               onblur="this.value=this.value.toUpperCase();" class="form-control" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="control">
                                            <i class="fas fa-id-card"></i> Número de control </label>
                                        <input type="text" id="control" name="control" required maxlength="9"
                                               onblur="this.value=this.value.toUpperCase();" class="form-control" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="tec">
                                            <i class="fas fa-university"></i> Instituto Tecnológico de procedencia </label>
                                        <select name="tec" id="tec" required class="form-control">
                                            <option value="" selected>--Seleccione --</option>
                                            @foreach($tecs as $tec)
                                                <option value="{{$tec->id}}">{{$tec->tec}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="correo">
                                            <i class="fas fa-envelope"></i> Correo electrónico </label>
                                        <input type="email" id="correo" name="correo" required
                                               onblur="this.value=this.value.toLowerCase();" class="form-control" />
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-rounded btn-block">Registrarse</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
