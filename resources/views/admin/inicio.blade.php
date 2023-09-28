@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Listado de estudiantes</div>
            <div class="card-body">
                <h4>Consulta</h4>
                <ul>
                    <li><a href="/administracion/correos">Envío de correos</a></li>
                    <li><a href="/administracion/pagados">Consulta de población pagada</a></li>
                    <li><a href="/administracion/talleres">Consulta de talleres</a></li>
                    <li><a href="/administracion/visitas">Consulta de visitas</a></li>
                    <li><a href="/administracion/enviados">Situación de correos enviados</a></li>
                    <li><a href="/administracion/balanceo">Balanceo</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
