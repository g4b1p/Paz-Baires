<!DOCTYPE html>
<html lang="en">

<?php require_once "includes/head.php"; ?>

<style>
    .colecciones {
        display: flex;
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
        padding: 10px 40px;
        font-size: 25px;
        background-color: #906ADB;
        border: 1px solid #906ADB;
        color: #fff;
    }

    .coleccion-button:hover {
        background-color: #7B5ABB;
        cursor: pointer;
    }
</style>

<body>

    <?php require_once "includes/header.php"; ?>

    <?php require_once "includes/styles/container-principal-style.php"; ?>

    <div class="container-principal">
        <div class="colecciones">
            <div class="blanqueria">
                <a href="blanqueria.php">
                    <img src="images/blanqueria.png" style="height: auto; width: 95%;">
                    <button class="coleccion-button">Blanqueria</button>
                </a>
            </div>
            <div class="pijamas">
                <a href="pijamas.php">
                    <img src="images/pijamas.png" style="height: auto; width: 95%;">
                    <button class="coleccion-button">Pijamas</button>
                </a>
            </div>
            <div class="accesorios">
                <a href="accesorios.php">
                    <img src="images/accesorios.png" style="height: auto; width: 95%;">
                    <button class="coleccion-button">Accesorios</button>
                </a>
            </div>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>

</body>

</html>