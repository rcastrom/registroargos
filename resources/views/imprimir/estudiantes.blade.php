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
    <h2>Tecnológico {{$tec->tec}}</h2>
    <h3>{{$titulo}}</h3>
    <table>
        <thead>
            <th>No</th>
            <th>Nombre</th>
            <th>Monto</th>
            <th>Folio</th>
        </thead>
        <tbody>
            @php
                $i=1;
                $suma=0;
            @endphp
            @foreach($nombres as $nombre)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$nombre->appat}} {{$nombre->apmat}} {{$nombre->nombre}}</td>
                    <td>{{"$".number_format($nombre->monto,2,'.',',')}}</td>
                    <td>{{$nombre->folio}}</td>
                </tr>
                @php
                    $i++;
                    $suma+=$nombre->monto
                @endphp
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td>Total</td>
                <td>{{"$".number_format($suma,2,'.',',')}}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
