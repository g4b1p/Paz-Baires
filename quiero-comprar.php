<!DOCTYPE html>
<html lang="en">

<?php require_once "includes/head.php"; ?>

<style>
    /*-----acordeon-----*/
    .contenedor-acordeon {
        margin: 10px;
        margin-bottom: 30px;
    }

    .acordeon {
        background: #fff;
    }

    .acordeon label {
        display: block;
        padding: 15px;
        font-size: 20px;
        background: #906ADB;
        color: #fff;
        cursor: pointer;
        margin-bottom: 2px;
        transition: all 300ms ease;
    }

    .acordeon label:hover {
        background: #7B5ABB;
    }

    .acordeon .contenido-acordeon {
        padding: 0px;
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
</style>

<body>

    <?php require_once "includes/header.php"; ?>

    <?php require_once "includes/styles/container-principal-style.php"; ?>

    <div class="container-principal">
        <div class="contenedor-acordeon">
            <div class="acordeon">
                <input type="radio" name="acordeon" id="btn-acordeon1" class="btn-acordeon">
                <label for="btn-acordeon1">
                    ¿CÓMO COMPRAR?
                </label>
                <div class="contenido-acordeon">
                    <p>
                        1) Debes entrar a la sección <a href="tienda.php" style="text-decoration: none; color: #906ADB;">TIENDA</a>.
                        Aquí podrás llenar el carrito con las prendas que desees comprar, eligiendo la cantidad y color
                        de cada modelo.
                        <br>
                        2) Para finalizar tu pedido ingresa a tu <a href="carrito.php" style="text-decoration: none; color: #906ADB;">CARRITO</a> y haz clic en “FINALIZAR COMPRA”.
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