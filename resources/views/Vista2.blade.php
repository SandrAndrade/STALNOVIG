<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOSOTROS</title>
    <link rel="stylesheet" href="{{asset('css/nosotros.css')}}">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="icon" href="img/logo.png">
</head>

<body>
    <header>
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
    
    
    
        </div>
    
    
        </header>
    </div>

</body>


<div class="slider">
    <ul>
        <li><img src="img/slider1.png" alt=""></li>
        <li><img src="img/slider2.jpg" alt=""></li>
        <li><img src="img/silder3.jpeg" alt=""></li>
        <li><img src="img/slider2.jpg" alt=""></li>
    </ul>
</div>

<div class="titulos">
    <h1 id="titulo">El sueño de tener tu propio espacio...</h1>
    <br>
    <br>
</div>

<div class="cuerpo">
    <P class="text" style="line-height: initial;">Nuestra estrategia es desarrollar conjuntos habitacionales
    <br> dentro de la ciudad, cerca de todos los servicios en generral.
    </P>
    <br>
    <b class="negrita">
        <p class="text">Diseñamos en función de cada desarrollo para lograr una amplia <br>
            gama de precios y ubicaciobes únicas.
    </b>Nuestros proyectos son parte de <br>
    la infraestructura de las ciudades y contribuyen a un crecimiento constante. <br>
    Con esta estrategia, en Lodging no solo rentamos cuartos para los jovenes <br> si no<b class="negrita"> ofrecemos
        que tengan buenos beneficios y una seguridad buena <br>
        como si estuvieran en sus casas</b>
    <br>
    <br>
    Nos enorgullece contar con un excelente equipo de trabajo que se esfuerza <br>
    al máximo para ofrecer a nuestros clientes las viviendas y entornos ideales <br>
    para formar hogares o invertir en un patrimonio.</p>
</div>



<div class="dividir">
    
    <ul>
        
        <li class="img1">
            <img src="img/lock2.png" class="icon"><br>
            <b>
                <P>Buena ubicacion</P>
            </b>
        </li>
            <li class="img2">
            <img src="img/hands2.png" class="icon"><br>
            <b>
                <p>Precios accesibles</p>
            </b>
        </li>
                <li class="img3">
            <img src="img/money2.png" class="icon"><br>
            <b>
                <p>Mayor ahorro</p>
            </b>
        </li>
        <li class="img4">
            <img src="img/location.png" class="icon"><br>
            <b>
                <p>Buena  seguridad</p>
            </b>
        </li> 

</div>
<!-- <button class="boton">Contacte un asesor</button>  

</div> -->


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