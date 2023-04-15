<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cuarto</title>
</head>
<body>
    <h1><center>Formulario para crear un cuarto</center></h1>
<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
@csrf
@include('empleado.form',['modo'=>'Crear']);
</form>
</body>
</html>


