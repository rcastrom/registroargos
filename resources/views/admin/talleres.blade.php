@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Registro de talleres</div>
            <div class="card-body">
                <table>
                    <thead>
                        <th>Taller</th>
                        <th>Inscritos</th>
                    </thead>
                    <tbody>
                        @foreach($conteos as $conteo)
                            <tr>
                                <td>{{$conteo->taller}}</td>
                                <td>{{$conteo->total}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

