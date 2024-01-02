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



    /*-----acordeon-----*/
    .contenedor-acordeon {
        margin-top: 40px;
        padding-left: 8%;
        padding-right: 8%;
    }

    .acordeon {
        background: #fff;

    }

    .acordeon label {
        display: block;
        padding: 20px;
        font-size: 20px;
        background: #9976e0;
        color: #fff;
        cursor: pointer;
        margin-bottom: 2px;
        transition: all 300ms ease;
    }

    .acordeon label:hover {
        background: #6847aa;
    }

    .acordeon .contenido-acordeon {
        padding: 0px;
        margin: 0px 20px;
        max-height: 0px;
        overflow: hidden;
        transition: all 300ms ease;
        line-height: 35px;
    }

    .btn-acordeon:checked~.contenido-acordeon {
        max-height: 600px;
        padding: 15px 0px;
    }

    .btn-acordeon {
        display: none;
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
                <a href="info-compra.html" class="active-link">QUIERO COMPRAR</a>
                <a href="tienda.html">TIENDA</a>
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
        <div class="contenedor-acordeon">
            <div class="acordeon">
                <input type="radio" name="acordeon" id="btn-acordeon1" class="btn-acordeon">
                <label for="btn-acordeon1">
                    ¿CÓMO COMPRAR?
                </label>
                <div class="contenido-acordeon">
                    <p>
                        1) Debes entrar a la sección <a href=""
                            style="text-decoration: none; color: #9976e0;">TIENDA</a>.
                        Aquí podrás llenar el carrito con las prendas que desees comprar, eligiendo la cantidad y color
                        de cada modelo.
                        <br>
                        2) Para finalizar tu pedido ingresa a tu <a href=""
                            style="text-decoration: none; color: #9976e0;">CARRITO</a> y haz clic en “FINALIZAR COMPRA”.
                        <br>
                        3) Por último necesitamos que llenes el formulario de "FACTURACIÓN Y ENVÍO" para poder
                        contactarnos con vos mediante WhatsApp y corroborar todo el stock de tu pedido.
                        <br>
                        4) Aboná tu pedido dentro de las 48hs hábiles dependiendo del método de pago que hayas elegido,
                        ésto se acordará mediante WhatsApp.
                        <br>
                        5) Retirá tu pedido en el local o recibe el transporte que hayas elegido.
                    </p>
                </div>
            </div>
            <div class="acordeon">
                <input type="radio" name="acordeon" id="btn-acordeon2" class="btn-acordeon">
                <label for="btn-acordeon2">
                    COMPRA MÍNIMA
                </label>
                <div class="contenido-acordeon">
                    <li>La compra mínima en la tienda online es de $20.000.</li>
                    <li>La compra mínima en el local es de 3 artículos iguales o surtidos.</li>
                </div>
            </div>
            <div class="acordeon">
                <input type="radio" name="acordeon" id="btn-acordeon3" class="btn-acordeon">
                <label for="btn-acordeon3">
                    ENVÍOS
                </label>
                <div class="contenido-acordeon">
                    <p>
                        El costo y demora del envío corre por cuenta del comprador. Los métodos de envío son los
                        siguientes:
                        <li><u>Transporte o Expreso</u> (a elección del cliente). El traslado desde nuestro local hasta
                            el
                            transporte elegido tiene un recargo de $700 para pagarle al cadete que despacha. El costo
                            del envío depende del transporte y se abona al recibir el pedido. Podemos sugerir enviar por
                            Buspack, Crucero Express, Via Cargo, Integral Pack, SendBox, MD Cargas.
                        </li>
                        <li>
                            <u>Moto.</u> (consultar precio según la dirección).
                        </li>
                        <li>
                            También tiene la opción de pagar y retirar en el <u>local</u>, si se maneja con
                            comisionista.
                        </li>
                        <i>(No enviamos por Andreani, Correo argentino y OCA).</i>
                    </p>

                </div>
            </div>
            <div class="acordeon">
                <input type="radio" name="acordeon" id="btn-acordeon4" class="btn-acordeon">
                <label for="btn-acordeon4">
                    MÉTODOS DE PAGO
                </label>
                <div class="contenido-acordeon">
                    <li><u>Depósito o Transferencia bancario:</u> Te enviamos los datos de nuestra cuenta bancaria por
                        whatsapp una vez que hayamos confirmado tu pedido.</li>
                    <li><u>Efectivo</u> en el local.</li>
                    <li><u>MercadoPago:</u> Te pasaremos CVU/Alias de cuenta para poder transferir en dinero.</li>
                    <li><u>PagoFacil, RapiPago (13%):</u> Te enviaremos la solicitud de pago de Mercadopago o Uala por
                        whatsapp una vez que hayamos confirmado tu pedido.</li>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>

</body>

</html>