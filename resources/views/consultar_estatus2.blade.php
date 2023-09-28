@extends('layouts.inicio')


@section('content')
    <section class="speakers section-padding">
        <div class="mask d-flex align-items-center h-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8 col-lg-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="card-body p-5">
                                <h3 class="mb-5 text-center">Consulta de estatus Congreso Argos 2023</h3>
                                <h4>{{$datos->nombre.' '.$datos->appat}}</h4>
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Pago</th>
                                            <th scope="col">Taller seleccionado</th>
                                            <th scope="col">Visita seleccionada</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$datos->pago==1?"Si":"No"}}</td>
                                            <td>{{$taller}}</td>
                                            <td>{{$visita}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
