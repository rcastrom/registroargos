@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Listado de estudiantes</div>
            <div class="card-body">
                <h4>Envío de correos</h4>
                <table class="table table-bordered">
                    <thead>
                        <th>Correos enviados</th>
                        <th>Pendientes por enviar</th>
                        <th>Alumnos pagados total</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$enviados}}</td>
                            <td>{{$faltan}}</td>
                            <td>{{$total}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


