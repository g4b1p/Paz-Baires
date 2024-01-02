<!DOCTYPE html>
<html lang="en">

<?php require_once "includes/head.php"; ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Urbanist:wght@600&display=swap');

    * {
        font-family: 'Urbanist', sans-serif;
        margin: 0;
    }

    .info {
        background-color: #8ca853;
        color: rgb(255, 255, 255);
        padding: 2px;
    }



    /*-----header-----*/
    header {
        background-color: rgb(255, 255, 255);
        padding: 5px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    nav a {
        font-size: 15px;
        text-decoration: none;
        margin-right: 25px;
        color: rgb(0, 0, 0);
    }

    nav a:hover {
        color: #9976e0;
    }

    .active-link {
        color: #9976e0;
    }

    nav img {
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    nav img:hover {
        transform: scale(1.3);
    }



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




    /*-----footer-----*/
    .container-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .div-fot {
        padding: 5px;
        display: flex;
        align-items: center;
    }

    .images {
        cursor: pointer;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .images:hover {
        transform: scale(1.2);
    }

    html {
        scroll-behavior: smooth;
    }
</style>

<body>
    <div class="every-header">
        <div class="info">
            <center>
                <h4>COMPRA MÍNIMA PARA ENVIOS A PARTIR DE $10.000</h4>
            </center>
        </div>

        <header>
            <img src="logo.png" style="height: 65px; width: auto;">
            <nav>
                <a href="inicio.html">INICIO</a>
                <a href="info-compra.html">QUIERO COMPRAR</a>
                <a href="tienda.html" class="active-link">TIENDA</a>
                <a href="carrito.html">CARRITO</a>
            </nav>
            <nav>
                <a href="favoritos.html"><img
                        src="https://static.vecteezy.com/system/resources/previews/001/187/989/original/heart-png.png"
                        style="height: 27x; width: 29px;"></a>
                <a href="https://www.instagram.com/pb__accesorios/" target="_blank"><img
                        src="https://cdn.icon-icons.com/icons2/2066/PNG/512/instagram_icon_125245.png"
                        style="height: 27x; width: 29px;"></a>
                <a href="https://www.facebook.com/pazbaires?locale=es_LA" target="_blank"><img
                        src="https://cdn-icons-png.flaticon.com/256/59/59439.png" style="height: 27x; width: 29px;"></a>
            </nav>
        </header>
    </div>

    <div class="container-principal">
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
    </div>

    <?php require_once "includes/footer.php"; ?>

</body>

</html>