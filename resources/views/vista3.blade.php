<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuartos Disponibles</title>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="{{asset('css/cuarto.css')}}">


</head>

<body>
    <nav>
        <div class="Brra">
            <ul>
                <li>
                    <center>
                    <img src="img/house-solid (1).svg"  height="33" width="28">
                    <a href="{{route('Home')}}"><br>Inicio</a>
                </center>
                </li>
                

                <li>
                    <center>
                    <img src="img/users-line-solid.svg" height="33" width="28">
                    <a href="{{route('Noso')}}"><br>Nosotros</a>
                    </center>

                    
                </li>
                

                <li> 
                    <center>

                    <img src="img/house-circle-check-solid.svg" height="33" width="28">
                    <a href="{{route('CuartoD')}}"><br>Cuartos disponibles</a>
                    </center>
                </li>


                <li>
                    <center>
                    <img src="img/clipboard-user-solid.svg" height="33" width="28">
                    <a href="{{route('Re')}}"><br>Requerimientos</a>
                </center>
                </li>



                <li >
                    <center>
                    <img src="img/phone-volume-solid.svg" height="33" width="28">
                    <a href="{{route('Conta')}}"><br>Contacto</a>
                </center>
                </li>
                
            </ul>


        <div class="hide">
            <i class="fa fa-bars" aria-hidden="true"></i> Menu
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(".hide").on('click', function () {
            $("nav ul").toggle('slow');
        })
    </script>
        </div>


    </header>

    <body>


        <section class="products" id="products">
            </tr>
            </div>
            <h1 class="heading"> <span></span> </h1>
            <br>

            <div class="contenedor">
                @if(!empty($empleados))
                @foreach($empleados as $empleado)


                <a href="{{url('Cuar',$empleado->id)}} " >
                    <div class="Contenedor">
                        <img class="imagenC" src="{{asset('storage') .'/'.$empleado->Foto}}" >
                    </div>
                <div class="contenedorD">
                    <h2 >Descripcion </h2> <h4>{{ $empleado->Descripcion}}</h4></h2>
                    <h2>Precio</h2> <h4>{{ $empleado->Precio}}</h4>
                </a>
                </div>

                @endforeach
                @endif
            </div>
        </section>

       
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
            <a href="https://api.whatsapp.com/send?phone=2491172381">09
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