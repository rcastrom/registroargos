<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Mooli', sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2>{{ $content['persona'] }}</h2>
        </div>
        <div class="card-body">
            <p>
                ¡Bienvenido!
            </p>
            <p>Congreso Argos 2023 te da la más cordial bienvenida; este correo es para indicarte
                que tu pago ha sido registrado.
            </p>
            <p>Ahora, te pedimos que termines tu registro indicando que taller y visita industrial
                vas a realizar. <br>
                Para ello, por favor ingresa a
                <a href="https://registro.congresoargos.com/registrar" target="_blank">Registro de visitas industriales
                    y talleres</a>
            </p>
            <p>
                Te indicamos que ambos están bajo disponibilidad limitada.
            </p>
            <p>
                <strong><u>Revisar la información concerniente a las visitas industriales</u></strong>, misma
                que se encuentra en la página <a href="https://congresoargos.com/visitas-industriales/" target="_blank">
                    https://congresoargos.com/visitas-industriales/</a>
            </p>
            <p>
                Es posible que para algunas actividades, se te solicite un código QR; por favor, descárgalo
                del siguiente enlace
                <br>
                <a href="https://registro.congresoargos.com/obtener/{{$content['quien']}}">Generar QR</a>

            </p>

            <p>
                Este correo electrónico fue generado de forma automatizada, por lo que nadie estará al
                pendiente de la información.
            </p>
        </div>
    </div>
</div>
</body>
</html>
