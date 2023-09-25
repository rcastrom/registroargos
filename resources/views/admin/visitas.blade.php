@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Registro de visitas industriales</div>
            <div class="card-body">
                <table>
                    <thead>
                    <th>Visitas</th>
                    <th>Inscritos</th>
                    </thead>
                    <tbody>
                    @foreach($conteos as $conteo)
                        <tr>
                            <td>{{$conteo->visita}}</td>
                            <td>{{$conteo->total}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
