@extends('layouts.inicio')

@section('content')
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <a class="custom-btn btn custom-link mt-3" href="/estudiantes">Registro estudiantes</a>
                </div>
                <div class="col-lg-6 col-12">
                    <a class="custom-btn btn custom-link mt-3" href="/docentes">Registro docentes</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="/registrar" class="custom-btn btn custom-link mt-3">Registrar visita y taller</a>
                </div>
            </div>
        </div>
    </section>
@endsection
