<!DOCTYPE html>
<html lang="en">

<?php require_once "includes/head.php"; ?>

<style>
    .tienda-header {
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
        background-color: #906ADB;
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
        background-color: #906ADB;
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
</style>

<body>

    <?php require_once "includes/header.php"; ?>
    <?php require_once "includes/styles/header-style.php"; ?>

    <?php require_once "includes/styles/container-principal-style.php"; ?>

    <div class="container-principal">
        <div class="tienda-header">
            <h4>Nuevos ingresos!!!<h4>
        </div>

        <div class="articulos-container">
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="images/phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="images/phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="images/phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
            </div>
            <div class="articulos-container">
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="images/phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="images/phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="images/phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
            </div>
            <div class="articulos-container">
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="images/phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="images/phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
                <div class="articulo">
                    <div class="imagen-container">
                        <img src="images/phot1.jpg" style="max-width: 100%; height: auto;">
                        <a href=""><button>seleccionar opciones</button></a>
                    </div>
                    <h3>razo mediano (morley)</h3>
                    <h4>$4.000</h4>
                </div>
            </div>
    </div>

    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/styles/footer-style.php"; ?>

</body>

</html>