<!DOCTYPE html>
<html lang="en">

<?php require_once "includes/head.php"; ?>

<style>
    .header-compras {
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
</style>

<body>

    <?php require_once "includes/header.php"; ?>
    <?php require_once "includes/styles/header-style.php"; ?>

    <?php require_once "includes/styles/container-principal-style.php"; ?>

    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/styles/footer-style.php"; ?>

</body>

</html>