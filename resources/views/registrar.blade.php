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
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{route('buscar.registro')}}" method="post">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="correo">
                                            <i class="fas fa-envelope"></i> Indique por favor el correo
                                        electrónico con el que se registró al Congreso</label>
                                        <input type="email" id="correo" name="correo" required
                                               onblur="this.value=this.value.toLowerCase();" class="form-control" />
                                    </div>
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

