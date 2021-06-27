<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    @if ($tramite->estado === NULL)
        <h2>Se ha enviado la informacion con éxito</h2>
        <p>El numero de trámite para su seguimiento es: {{$tramite->id}}</p>
    @elseif ($tramite->estado == 3)
        <p>Su Trámite con número {{$tramite->id}}, Tiene observaciones</p>    
    @elseif ($tramite->estado == 4)
        <h2>Se ha enviado la informacion con éxito</h2>
        <p>Su Trámite con número {{$tramite->id}}, fue pasado con éxito a la AACN</p>
    @elseif ($tramite->estado == 7)
        <p>Su Trámite con número {{$tramite->id}}, Tiene observaciones</p> 
    @elseif ($tramite->estado == 8)
        <h2>El trámite con número {{$tramite->id}} ha concluido exitosamente</h2>
    @elseif ($tramite->estado == 9)
        <h2>El trámite con número {{$tramite->id}} fue rechazado</h2>

    @endif

    Atte, SILA gracias por usar el sistema.

    
</body>
</html>