@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-bordered data-table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
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
                ajax: "{{route('docentes.index')}}",
                columns: [
                    {data: 'nombre_completo', name: 'nombre'},
                    {data: 'correo', name: 'correo'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>
@endsection


