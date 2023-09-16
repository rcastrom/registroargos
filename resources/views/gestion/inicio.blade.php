@extends('layouts.app')

@section('content')
    <div class="container">
        <p>La fila marcada en color verde, son estudiantes a quienes ya se les
        registró el pago.
        </p>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Control</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(function (){
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route('alumnos.index')}}",
                columns: [
                    {data: 'nombre', name: 'nombre'},
                    {data: 'appat', name: 'appat'},
                    {data: 'apmat', name: 'apmat'},
                    {data: 'control', name: 'control'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>
@endsection

