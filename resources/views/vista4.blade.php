<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requisitos</title>
    <link rel="stylesheet" href="{{asset('css/requisitos1.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 </head>
 <header>
    <a href="#" class="logo"></a>
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
    <div class="ContenedorT">
        <h1 id="titulo">Como puedes adquirir tu propio Cuarto? </h1>
        <p id="como">Puedes hacerlo fácilmente. Nosotros te ofrezemos acesoria. <br>
            Nosotros te ofrecemos acesoría para obtener tu propio cuarto de tus sueños  al mejor <br>
            precio, ubicación y de acuerdo con tus necesidades.Te llevamos la información atraves  <br>
            de los siguientes pasos</p>
    </div>
    <!-- pasos para pedir cuarto -->
    <div class="Pasos">
        <div id="Pa1">
            <img src="img/icons8-1-en-círculo-48.png">
            <p id="texto">Define la opcion de pago o de credito</p>
            <p id="desc">Lo primero que debes hacer es elegir
                la opción de pago que más te conviene,
                y para esto uno de nuestros expertos te
                puede ayudar sin compromisos.<br> Tambien
                es importante saber si por tu trabajo cuentas
                con alguna prestación para la renta
                de una vivienda.</p>
        </div>
        <div id="Pa1">
            <img src="img/icons8-2-en-círculo-50.png">
            <p id="texto">Elige el cuarto tu mismo</p>
            <p id="desc">Una vez conociendo el presupuesto y la 
                forma de pago que más te conviene
                es momento de elegir la casa o 
                departamento que se ajuste a tus
                necesidades de precio y de ubicación.</p>
        </div>
        <div id="Pa1">
            <img src="img/icons8-3-en-círculo-50.png">
            <p id="texto">Entrega tu documentación y realiza el pago de tu apartado</p>
            <p id="desc">Ahora es cuando armamos tu expediente. <br>
                Debes de entregar a tu asesor:<br>
                1.Acta de nacimiento (original) <br>
                2.IFE o INE vigente<br>
                3.CURP<br>
                4.NSS<br>
                5.RFC<br>
                6.Comprobante domiciliario <br>
                (con fecha no mayor a 3 meses)<br></p>
                
        </div>

            <div id="Pa1">
                <img src="img/icons8-4-en-círculo-50.png">
                <p id="texto">Recibe tus llaves</p>
                <p id="desc">Prepárate para recibir tus llaves,
                    una vez ingresado tu expediente 
                    recibirás la notificación de 
                    aprobación de crédito.</p> 
            </div>
    </div> 

    <footer >
        <ul>
            <li >
                <center>
                <img src="img/fa.png" height="33" width="28">
                
                </center>
            </li>
    
            <li >
                <center>
                <img src="img/whasap.png" height="33" width="28">
                
                </center>
            </li>
    
            <li >
                <center>
                <img src="img/insta.png" height="33" width="28">
                
                </center>
            </li>
    
        </ul>  
    </footer>   
</html>