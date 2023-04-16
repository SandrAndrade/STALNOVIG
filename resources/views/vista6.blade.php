<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuartos</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/cuartos.css')}}">
    

    

   <header>
    <body>
    <nav>
            <div class="Brra">
                <ul>
                    <li>
                        <center>
                        <img src="../img/house-solid (1).svg"  height="33" width="28">
                        <a href="{{route('Home')}}"><br>Inicio</a>
                    </center>
                    </li>
                    

                    <li>
                        <center>
                        <img src="../img/users-line-solid.svg" height="33" width="28">
                        <a href="{{route('Noso')}}"><br>Nosotros</a>
                        </center>

                        
                    </li>
                    

                    <li> 
                        <center>

                        <img src="../img/house-circle-check-solid.svg" height="33" width="28">
                        <a href="{{route('CuartoD')}}"><br>Cuartos disponibles</a>
                        </center>
                    </li>


                    <li>
                        <center>
                        <img src="../img/clipboard-user-solid.svg" height="33" width="28">
                        <a href="{{route('Re')}}"><br>Requerimientos</a>
                    </center>
                    </li>



                    <li >
                        <center>
                        <img src="../img/phone-volume-solid.svg" height="33" width="28">
                        <a href="{{route('Conta')}}"><br>Contacto</a>
                    </center>
                    </li>
                    
                </ul>
                


            <div class="hide">
                <i class="fa fa-bars" aria-hidden="true"></i> Menu
            </div>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
            <script>
                $(".hide").on('click', function () {
                    $("nav ul").toggle('slow');
                })
            </script>

        </nav>

            </header>
            

            
<br>





<body>
    <div class="ImagenC">
        <img class="imagenC" src="{{asset('storage') .'/'.$empleado->Foto}}">
    </div>
    
    {{-- <h2>{{ $empleado->Cuarto}}</h2>
    <h3> {{ $empleado->Descripcion}}</h3>
    <h3> {{ $empleado->Informacion}}</h3>
    <h3> {{ $empleado->Precio}}</h3> --}}

        <div class="textos">
            <h2>{{ $empleado->Cuarto}}</h2>
            <h3>{{ $empleado->Informacion}}</h3>
            <h1>${{ $empleado->Precio}} al mes</h1> 
        </div> 






        <head>
    <div class="contenedorB">
        <a href="https://api.whatsapp.com/send?phone=2491172381"><button class="btn btn--2" >
        RESERVAR
        </button></a>
    
    </div>
    <head>
    </body>


    <footer >
    <ul>
        <li >
            <center>
            
            <a href="https://m.facebook.com/profile.php?id=100023937440680" >
            <img src="img/fa.png" height="33" width="28" >
            </a>
            </center>
        </li>

        <li >
            <center>
            <a href="https://api.whatsapp.com/send?phone=2491172381">
            <img src="img/whasap.png" height="33" width="28">
            </a>
            </center>
        </li>

        <li >
            <center>
            <a href= "https://instagram.com/marrerosyeseniamartinez?igshid=ZDdkNTZiNTM=">
            <img src="img/insta.png" height="33" width="28">
            </a>
            </center>
        </li>

    </ul>  
</footer>



















        
        

        
    </html>