<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACTANOS</title>
    <link rel="stylesheet" href="{{asset('css/contactanos.css')}}">
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

    </div>
    </header>


    <div class="container-form">
        <div class="info-form">
            <h2 id="Vis">Visitanos</h2>
             <p id="Tum">¡Somos tu mejor opción!</p>
            <a id="Tum" href="https://maps.app.goo.gl/NSoETUAFrCMeLaAr7" target="_blank">5 Pte. C.1104 </a>
            <br>
            <a  id="Tum"href="https://wa.me/qr/QT5NDFAXSQWQK1" target="_blank"><i class="fa fa-phone"></i>Tel. (249) 422 6764</a>
            <br>
            </a>
            <p id="Tum">Correo electronico: yalidai2110@gmail.com</p>
            
            <div id="map"></div>
            <script >
                function iniciarMap(){
                    var coord = {lat:18.8849649 ,lng: -97.7370692};
                    var map = new google.maps.Map(document.getElementById('map'),{
                        zoom: 10,
                        center: coord
                        });
                    var marker = new google.maps.Marker({
                        position: coord,
                        map: map
                        });
            }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
            </div>
        </div>
    </div>
    

</body>
<footer>
                <ul>
                    <li>
                        <center>
                            <img src="img/fa.png" height="33" width="28">

                        </center>
                    </li>

                    <li>
                        <center>
                            <img src="img/whasap.png" height="33" width="28">

                        </center>
                    </li>

                    <li>
                        <center>
                            <img src="img/insta.png" height="33" width="28">

                        </center>
                    </li>

                </ul>
            </footer>

</html>