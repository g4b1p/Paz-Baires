<?php 

require_once "includes/config.php";
require_once "includes/conexion.php"; 
$db = new database();
$con = $db -> conectar();

$sql = $con->prepare("SELECT ID, producto, precio FROM productos WHERE activo = 1 AND categoria = 'accesorios'");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once "includes/head.php"; ?>

<style>

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
                    $imagen = "images/coleccion-pijamas/$id/principal.jpg?timestamp=" . time();
                    ?>
                    <div class="imagen-container">
                        <a href="publicacion.php?id=<?php echo $row['ID']; ?>&token=<?php echo hash_hmac('sha1', $row['ID'], KEY_TOKEN); ?>">
                            <img src="<?php echo $imagen; ?>" style="max-width: 100%; height: auto;">
                            <h3><?php echo $row['producto']; ?></h3>
                            <h4>$ <?php echo $row['precio']; ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <center><h2>Proximamente disponible.</h2></center>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/styles/footer-style.php"; ?>

</body>

</html>