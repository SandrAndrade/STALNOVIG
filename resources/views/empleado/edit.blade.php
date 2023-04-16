<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png">
    <title>Editar cuarto</title>
</head>
<body>

    <h1><center>Edicion de cuarto</center></h1>

<form action="{{url('/empleado/'.$empleado->id )}}" method="post">
@csrf
{{method_field('PATCH')}}
@include('empleado.form',['modo'=>'Editar']);

</form>
    
</body>
</html>

