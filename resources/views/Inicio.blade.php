<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="{{asset ('css/inicio.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <a href="#" class="logo"></a>
        <video autoplay loop muted plays-inline class="back-video" width="100%" height="100%">
            <source src="../public/img/Diseño sin título.mp4" type="video/mp4">
        </video>

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
            <div class="V">
                <video autoplay loop muted plays-inline class="back-video" width="100%" height="100%">
                <source src="img/Diseño sin título.mp4" type="video/mp4">
            </div>

            </video>
        </nav>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script>
            $(".hide").on('click', function () {
                $("nav ul").toggle('slow');
            })
        </script>
            </div>



        </div>

    
        </header>

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