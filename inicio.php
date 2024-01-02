<!DOCTYPE html>
<html lang="en">

<?php require_once "includes/head.php"; ?>

<?php require_once "includes/styles/header-style.php"; ?>

<style>
    /*-----container principal-----*/
    .container-principal {
        width: 100%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 0;
        margin-bottom: 0;
        max-width: 1200px;
    }



    /*-----nuevos ingresos-----*/
    .carousel-cont {
        margin-top: 30px;
        width: 100%;
        overflow: hidden;
        /*el carrusel se desplace más allá del borde de la ventana del navegador*/
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
        font-size: 20px;
        display: flex;
        justify-content: center;
        /*centra horizontalmente el conten*/
        align-items: center;
        /*centra verticalmente el conten*/
        color: rgb(255, 255, 255);
        background-color: #8ca853;
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

    .articulos-container {
        display: flex;
    }

    .articulo {
        margin: 10px;
        font-size: 15px;
    }

    .imagen-container {
        position: relative;
    }

    .imagen-container button {
        font-size: 16px;
        padding: 5px;
        width: 200px;
        height: auto;
        background-color: #8ca853;
        border: #8ca853;
        color: #ffffff;
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0;
        transition: opacity 0.2s ease-in-out;
    }

    .imagen-container:hover button {
        opacity: 1;
    }

    .favorite-icon {
        position: absolute;
        right: 10px;
        font-size: 35px;
        cursor: pointer;
        transition: color 0.3s ease-in-out;
    }

    .favorite-icon.active {
        color: #9976e0;
    }



    /*-----informacion-----*/
    .info-container {
        padding-bottom: 40px;
        background-color: #8ca853;
        color: #ffffff;
        overflow: hidden;
        font-size: 15px;
    }

    .mini-info {
        padding: 15px;
    }

    .mini-info h3 {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .fila-info {
        display: inline-block;
    }

    .colum-info {
        display: flex;
        justify-content: center;
    }

    .redes {
        padding-top: 15px;
    }
</style>

<body>

    <?php require_once "includes/header.php"; ?>
    <?php require_once "includes/styles/header-style.php"; ?>

    <div class="container-principal">
        <div>
            <center>
                <img src="verano24.png" style="height: auto; width: 100%;">
            </center>
        </div>

        <div class="nuevos-ingresos">
            <div class="carousel-cont">
                <div class="carousel">
                    <div class="carousel-item">
                        <h4>NUEVOS INGRESOS!!! NUEVA TEMPORADA VERANO 2023!!!</h4>
                    </div>
                    <div class="carousel-item">
                        <h4>NUEVOS INGRESOS!!! NUEVA TEMPORADA VERANO 2023!!!</h4>
                    </div>
                    <div class="carousel-item">
                        <h4>NUEVOS INGRESOS!!! NUEVA TEMPORADA VERANO 2023!!!</h4>
                    </div>
                    <div class="carousel-item">
                        <h4>NUEVOS INGRESOS!!! NUEVA TEMPORADA VERANO 2023!!!</h4>
                    </div>
                </div>
            </div>
            <div class="articulos-container">
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                        <span class="favorite-icon" onclick="addToFavorites('phot1.jpg')">&#9825;</span>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                        <span class="favorite-icon" onclick="addToFavorites('phot1.jpg')">&#9825;</span>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                        <span class="favorite-icon" onclick="addToFavorites('phot1.jpg')">&#9825;</span>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
            </div>
        </div>

        <div class="info-container">
            <center>
                <h1 style="padding: 25px;">INFORMACIÓN</h1>
            </center>
            <div class="colum-info">
                <div style="display: block;">
                    <div class="fila-info">
                        <div class="mini-info">
                            <h2>UBICACIÓN</h2>
                            <h3>Campana 560 local 23 y 25. <br> Flores, Argentina.</h3>
                        </div>
                        <div class="mini-info">
                            <h2>HORARIOS</h2>
                            <h3>Lunes a Viernes de 8 a 15hs. <br> Sabados de 9 a 13hs.</h3>
                        </div>
                    </div>
                    <div class="fila-info">
                        <div class="mini-info">
                            <h2>SEGUINOS</h2>
                            <div class="redes">
                                <a href="https://www.instagram.com/pb__accesorios/" target="_blank"><img
                                        src="https://cdn.icon-icons.com/icons2/2066/PNG/512/instagram_icon_125245.png"
                                        style="height: 27x; width: 29px;"></a>
                                <a href="https://www.facebook.com/pazbaires?locale=es_LA" target="_blank"><img
                                        src="https://cdn-icons-png.flaticon.com/256/59/59439.png"
                                        style="height: 27x; width: 29px;"></a>
                            </div>
                        </div>
                        <div class="mini-info">
                            <h2>CONTACTO</h2>
                            <h3>Email: pazbaires.adm@gmail.com <br> Celular: +54 11 3156-2087 </h3>
                        </div>
                    </div>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325.728595110654!2d-58.477778751894064!3d-34.62595821670545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc993267983a1%3A0x953bd5fab119147!2sPASEO%20DE%20COMPRAS%20MUNDO%20TEXTIL!5e0!3m2!1ses!2sar!4v1695609342084!5m2!1ses!2sar"
                    width="600" height="300" style="border:0; border-radius: 50px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/styles/footer-style.php"; ?>

</body>

</html>