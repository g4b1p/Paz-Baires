<?php
require_once "includes/config.php";
require_once "includes/conexion.php"; 
$db = new database();
$con = $db->conectar();

// Verifica si se proporciona un ID en la URL
if(isset($_GET['id']) && isset($_GET['token'])) {
    $id = $_GET['id'];
    $token = $_GET['token'];

    // Verifica la autenticidad del token
    $validToken = hash_hmac('sha1', $id, KEY_TOKEN);
    if($token !== $validToken) {
        // Redirecciona a una página de error si el token no es válido
        header("Location: error.php");
        exit();
    }

    // Realiza la consulta para obtener la información del producto específico
    $sqlProducto = $con->prepare("SELECT ID, producto, precio, talle, stock FROM productos WHERE activo = 1 AND ID = :id");
    $sqlProducto->bindParam(':id', $id, PDO::PARAM_INT);
    $sqlProducto->execute();
    $producto = $sqlProducto->fetch(PDO::FETCH_ASSOC);
} else {
    // Redirecciona a una página de error si no se proporciona un ID o token
    header("Location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once "includes/head.php"; ?>

<style>
    .card {
        display: flex;
    }

    .articulo-detalle {
        margin-left: 15px;
    }

</style>

<body>

    <?php require_once "includes/header.php"; ?>
    <?php require_once "includes/styles/header-style.php"; ?>

    <?php require_once "includes/styles/container-principal-style.php"; ?>

    <div class="container-principal">

        <div>
            <div class="card shadow">
                <?php
                $imagen = "images/coleccion-pijamas/{$producto['ID']}/principal.png?timestamp=" . time();
                ?>
                <img src="<?php echo $imagen; ?>" style="max-width: 50%; height: auto;">
                <div class="articulo-detalle">
                    <h1><?php echo $producto['producto']; ?></h1>
                    <h2>$ <?php echo $producto['precio']; ?></h2>
                    <h3>Talle: <?php echo $producto['talle']; ?></h3>
                    <h3>Stock: <?php echo $producto['stock']; ?></h3>
                </div>
                
            </div>
        </div>

    </div>

    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/styles/footer-style.php"; ?>

</body>

</html>
