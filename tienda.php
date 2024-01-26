<!DOCTYPE html>
<html lang="en">

<?php require_once "includes/head.php"; ?>

<style>
    .colecciones {
        display: flex;
    }

    .colecciones img {
        height: auto;
        width: 90%;
    }

    .colecciones>div {
        position: relative;
        text-align: center;
    }

    .coleccion-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 10px 35px;
        font-size: 25px;
        background-color: #906ADB;
        border: 1px solid #906ADB;
        color: #fff;
    }

    .coleccion-button:hover {
        background-color: #7B5ABB;
        cursor: pointer;
    }

    .coleccion img:hover {
        opacity: 0.9;
    }

    @media (width < 860px) {
        .colecciones {
            flex-direction: column;
        }

        .colecciones img {
            height: auto;
            width: 85%;
        }

        .coleccion {
            margin-bottom: 50px;
        }

        .coleccion-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 10px 35px;
            font-size: 40px;
            background-color: #906ADB;
            border: 1px solid #906ADB;
            color: #fff;
        }
    }

    @media (width < 600px) {
        .coleccion-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 10px 35px;
            font-size: 30px;
            background-color: #906ADB;
            border: 1px solid #906ADB;
            color: #fff;
        }
    }
</style>

<body>

    <?php require_once "includes/header.php"; ?>

    <?php require_once "includes/styles/container-principal-style.php"; ?>

    <div class="container-principal">
        <div class="colecciones">
            <div class="coleccion">
                <a href="blanqueria.php">
                    <img src="images/blanqueria.png">
                    <button class="coleccion-button">Blanqueria</button>
                </a>
            </div>
            <div class="coleccion">
                <a href="pijamas.php">
                    <img src="images/pijamas.png">
                    <button class="coleccion-button">Pijamas</button>
                </a>
            </div>
            <div class="coleccion">
                <a href="accesorios.php">
                    <img src="images/accesorios.png">
                    <button class="coleccion-button">Accesorios</button>
                </a>
            </div>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>

</body>

</html>