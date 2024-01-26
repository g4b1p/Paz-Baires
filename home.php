<!DOCTYPE html>
<html lang="en">

<?php require_once "includes/head.php"; ?>

<style>
    /*-----nuevos ingresos-----*/
    .carousel-cont {
        margin-top: 20px;
        width: 100%;
        overflow: hidden;
        z-index: 1;
        /* Ajusta el z-index del carrusel para que esté por debajo del menú */
    }

    .carousel {
        display: flex;
        animation: scroll 10s linear infinite;
        /*La animacion se ejecutara durante 10s con una interpolacion lineal (transición suave en lugar de un movimiento brusco) y se repetira infinitamente*/
    }

    .carousel-item {
        padding: 2px;
        flex: 0 0 100%;
        /*para q los elementos no crezcan ni se encoja (flex-grow y flex-shrink son ambos 0), q tengan un ancho del 100%*/
        width: 100%;
        height: 50px;
        display: flex;
        justify-content: center;
        /*centra horizontalmente el conten*/
        align-items: center;
        /*centra verticalmente el conten*/
        color: rgb(255, 255, 255);
        background-color: #906ADB;
    }

    @keyframes scroll {

        /*conjunto de reglas de animación (notación --> @keyframes)*/
        0% {
            /*estado inicial*/
            transform: translateX(0);
            /*el elemento no tiene ningún desplazamiento horizontal*/
        }

        100% {
            /*estado final*/
            transform: translateX(-100%);
            /*Fuera de la vista hacia la izq*/
        }
    }

    .articulos {
        margin: 10px;
        font-size: 15px;
        display: flex;
    }

    .articulos a {
        text-decoration: none;
    }

    /*-----informacion-----*/
    .information {
        background-color: #906ADB;
        color: #fff;
        padding: 30px;
        margin: 0 auto;
    }

    .content {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .columna {
        margin: 30px;
    }

    @media (width < 860px) {
        #menu_toggle {
            display: block;
        }

        .nav {
            padding: 0 20px;
            display: flex;
            background-color: #fff;
        }

        .menu_items {
            position: fixed;
            top: 0;
            width: 260px;
            background-color: #fff;
            justify-content: flex-start;
            height: 100%;
            left: -100%;
            padding: 50px 30px 30px;
            flex-direction: column;
            transition: all 0.5s ease;
        }

        .showMenu .menu_items {
            left: 0;
        }

        a {
            color: #333;
        }

        #menu_toggle {
            width: 20px;
            cursor: pointer;
        }

        .menu_items #menu_toggle {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .information {
            width: 90%;
            padding: 30px;
            margin: 0 auto;
        }

        .information iframe {
            width: 90%;
            padding: 30px;
        }

        .content {
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .columna {
            margin: 0 40px;
            display: flex;
        }
    }

    @media (width < 600px) {
        .information {
            width: 87%;
            padding: 30px;
            margin: 0 auto;
        }

        .information iframe {
            width: 95%;
            padding: 30px;
        }

        .columna {
            gap: 10px;
            flex-direction: column;
            justify-content: center;
        }
    }
</style>

<body>

    <?php require_once "includes/header.php"; ?>

    <?php require_once "includes/styles/container-principal-style.php"; ?>

    <div class="container-principal">

        <img src="images/verano24.png" style="height: auto; width: 100%; margin: 10px 0;">

        <div class="nuevos-ingresos">
            <div class="carousel-cont">
                <div class="carousel">
                    <div class="carousel-item">
                        <h2>NUEVOS INGRESOS!!! NUEVA TEMPORADA VERANO 2023!!!</h2>
                    </div>
                    <div class="carousel-item">
                        <h2>NUEVOS INGRESOS!!! NUEVA TEMPORADA VERANO 2023!!!</h2>
                    </div>
                </div>
            </div>
            <div class="articulos">
                <div class="imagen-container">
                    <a href="publicacion.php">
                        <img src="images/phot1.jpg" style="max-width: 100%; height: auto;">
                        <h3>razo mediano (morley)</h3>
                        <h4>$4.000</h4>
                    </a>
                </div>
                <div class="imagen-container">
                    <a href="publicacion.php">
                        <img src="images/phot1.jpg" style="max-width: 100%; height: auto;">
                        <h3>razo mediano (morley)</h3>
                        <h4>$4.000</h4>
                    </a>
                </div>
                <div class="imagen-container">
                    <a href="publicacion.php">
                        <img src="images/phot1.jpg" style="max-width: 100%; height: auto;">
                        <h3>razo mediano (morley)</h3>
                        <h4>$4.000</h4>
                    </a>
                </div>
            </div>
        </div>

        <div class="information">
            <center>
                <h2>INFORMACIÓN</h2>
                <br />
            </center>
            <div class="content">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325.728595110654!2d-58.477778751894064!3d-34.62595821670545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc993267983a1%3A0x953bd5fab119147!2sPASEO%20DE%20COMPRAS%20MUNDO%20TEXTIL!5e0!3m2!1ses!2sar" width="700" height="400" style="border:0; border-radius: 50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="columna">
                    <div>
                        <h3>UBICACIÓN</h3>
                        <p>Campana 560 local 23 y 25. <br> Flores, Argentina.</p>
                    </div>
                    <br />
                    <div>
                        <h3>HORARIOS DE ATENCIÓN</h3>
                        <p>Lunes a Viernes de 8 a 15hs. <br> Sábados de 9 a 13hs.</p>
                    </div>
                    <br />
                    <div>
                        <h3>CONTACTO</h3>
                        <p>Email: pazbaires.adm@gmail.com <br> Celular: +54 11 3156-2087 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>

</body>

</html>