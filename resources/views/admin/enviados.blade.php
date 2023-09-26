@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Listado de estudiantes</div>
            <div class="card-body">
                <h4>Correo enviados</h4>
                <p>Se enviaron {{$i}} correos</p>
            </div>
        </div>
    </div>
@endsection

