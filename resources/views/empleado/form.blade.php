<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/Crear.css')}}">
    <link rel="icon" href="img/logo.png">
    <title>Crear cuarto</title>
</head>
<body>
    <form >
        <h2><center>{{$modo}} Cuarto </center></h2>
        <label for="Nombre">Cuarto</label>
        <input type="text" name ="Cuarto" value="{{ isset ($empleado->Nombre) ? $empleado ->Cuarto:'' }}"  id="Cuarto">
        <br>
        <label for="ApellidoPaterno">Descripcion</label>
        <input type="text" name= "Descripcion"  value="{{ isset($empleado ->Descripcion)?  $empleado ->Descripcion:''}}"id= "Descripcion">
        <br>
        <label for="ApellidoMaterno">Informacion</label>
        <input type="text" name= "Informacion"  value="{{ isset($empleado ->Informacion) ? $empleado ->Informacion: ''}}"id= "Informacion">
        <br>
        <label for="Correo">Precio</label>
        <input type="text" name= "Precio" value="{{ isset($empleado ->Precio)? $empleado ->Precio:''}}"  id= "Precio">
        <br>
        <div class="file">
            <h3 id="nombre"></h3>
            <label for="Foto">Imagen</label>
            @if (isset($empleado->Foto))
            
            @endif 
            <input type="file" name="Foto" value="" id="Foto">
            <br>
        </div>
        

        <input class="css-button-shadow-border-sliding--black" type="submit" value="{{ $modo }} datos">
        <br>
    </form>

    <a class="css-button-shadow-border-sliding--black2" style="text-decoration: none" href="{{url('empleado')}}">&larr; Regresar </a>
    
    <script type="text/javascript">
    let Foto = document.querySelector('#Foto');
    Foto.addEventListener('change',() => {
        document.querySelector('#nombre').innerText =
        Foto.files[0].name;
    });
    </script>

</body>
</html>
