<?php 

require_once "includes/config.php";
require_once "includes/conexion.php"; 
$db = new database();
$con = $db -> conectar();

$sql = $con->prepare("SELECT ID, producto, precio FROM productos WHERE activo = 1 AND categoria = 'blanqueria'");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once "includes/head.php"; ?>

<style>
    .articulos-container {
        display: flex;
        flex-wrap: wrap; /* Permite que los elementos se envuelvan en la siguiente fila */
    }

    .imagen-container {
        position: relative;
        margin: 10px;
    }

    .imagen-container a {
        text-decoration: none;
        color: #000;
    }

    .imagen-container h4{
        color: #906ADB;
    }

    /* Añadido para controlar el tamaño de las tarjetas */
    .col {
        flex-basis: calc(33.33% - 20px); /* Calcula el ancho con margen entre columnas */
    }

    /* Añadido para asegurar que las tarjetas tengan el mismo tamaño */
    .card {
        flex: 1;
    }
</style>

<body>

    <?php require_once "includes/header.php"; ?>
    <?php require_once "includes/styles/header-style.php"; ?>

    <?php require_once "includes/styles/container-principal-style.php"; ?>

    <div class="container-principal">
        <div class="articulos-container">
            <?php foreach ($resultado as $row) { ?>    
            <div class="col">
                <div class="card shadow">
                    <?php
                    $id = $row['ID'];
                    $imagen = "images/coleccion-blanqueria/$id/principal.png?timestamp=" . time();
                    ?>
                    <div class="imagen-container">
                        <a href="publicacion-blanqueria.php?id=<?php echo $row['ID']; ?>&token=<?php echo hash_hmac('sha1', $row['ID'], KEY_TOKEN); ?>">
                            <img src="<?php echo $imagen; ?>" style="max-width: 100%; height: auto;">
                            <h3><?php echo $row['producto']; ?></h3>
                            <h4>$ <?php echo $row['precio']; ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/styles/footer-style.php"; ?>

</body>

</html>
