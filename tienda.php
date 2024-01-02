<!DOCTYPE html>
<html lang="en">

<?php require_once "includes/head.php"; ?>

<style>
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
</style>

<body>

    <?php require_once "includes/header.php"; ?>
    <?php require_once "includes/styles/header-style.php"; ?>

    <?php require_once "includes/styles/container-principal-style.php"; ?>

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
                        <span class="favorite-icon">&#9825;</span>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                        <span class="favorite-icon">&#9825;</span>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                        <span class="favorite-icon">&#9825;</span>
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
                        <span class="favorite-icon">&#9825;</span>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                        <span class="favorite-icon">&#9825;</span>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                        <span class="favorite-icon">&#9825;</span>
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
                        <span class="favorite-icon">&#9825;</span>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                        <span class="favorite-icon">&#9825;</span>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                        <span class="favorite-icon">&#9825;</span>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/styles/footer-style.php"; ?>

</body>

</html>