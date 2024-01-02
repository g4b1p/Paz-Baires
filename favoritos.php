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
                <a href="inicio.php">INICIO</a>
                <a href="quiero-comprar.php">QUIERO COMPRAR</a>
                <a href="tienda.php">TIENDA</a>
                <a href="carrito.php">CARRITO</a>
            </nav>
            <nav>
                <a href="favoritos.php"><img
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
    </div>

    <?php require_once "includes/footer.php"; ?>

</body>

</html>