<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de estudiantes</title>
</head>
<body>
<h1>Congreso Argos 2023</h1>
<h2>Talleres</h2>
<h3>{{$titulo}}</h3>
<table>
    <thead>
    <th>No</th>
    <th>Nombre</th>
    <th>Control</th>
    <th>Tecnológico</th>
    <th>¿Pagado?</th>
    </thead>
    <tbody>
    @php
        $i=1;
    @endphp
    @foreach($nombres as $nombre)
        <tr>
            <td>{{$i}}</td>
            <td>{{$nombre->appat}} {{$nombre->apmat}} {{$nombre->nombre}}</td>
            <td>{{$nombre->control}}</td>
            <td>{{$nombre->tecnologicos->tec}}</td>
            <td>{{$nombre->pago==1?"SI":"NO"}}</td>
        </tr>
        @php
            $i++;
        @endphp
    @endforeach
    </tbody>
</table>
</body>
</html>

