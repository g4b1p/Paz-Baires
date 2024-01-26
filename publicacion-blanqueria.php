<?php
require_once "includes/config.php";
require_once "includes/conexion.php";
$db = new database();
$con = $db->conectar();

// Verifica si se proporciona un ID en la URL
if (isset($_GET['id']) && isset($_GET['token'])) {
    $id = $_GET['id'];
    $token = $_GET['token'];

    // Verifica la autenticidad del token
    $validToken = hash_hmac('sha1', $id, KEY_TOKEN);
    if ($token !== $validToken) {
        // Redirecciona a una página de error si el token no es válido
        header("Location: error.php");
        exit();
    }

    // Realiza la consulta para obtener la información del producto específico
    $sqlProducto = $con->prepare("SELECT ID, producto, precio, tamaño, marca, stock FROM productos WHERE activo = 1 AND ID = :id");
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

    .card img {
        max-width: 50%;
        height: auto;
        margin: 0 25px;
    }

    .articulo-detalle {
        margin-left: 15px;
    }

    .add-to-cart {
        flex-direction: column;
        align-items: center;
    }

    .add-to-cart label {
        font-size: 18px;
        line-height: 60px;
    }

    .add-to-cart button {
        margin-top: 10px;
        padding: 10px;
        background: #906ADB;
        border: 0;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
    }

    .add-to-cart select {
        margin-top: 10px;
        padding: 5px;
        font-size: 18px;
    }

    @media (width < 860px) {
        .card {
            flex-direction: column;
        }

        .card img {
            max-width: 90%;
            height: auto;
            margin: 25px;
        }

        .articulo-detalle {
            margin: 0 25px;
        }

        button {
            margin: 30px 0;
        }
    }

    @media (width < 600px) {
        .card {
            flex-direction: column;
        }

        .card img {
            max-width: 90%;
            height: auto;
            margin: 25px;
        }

        .articulo-detalle {
            margin: 0 25px;
        }

        button {
            margin: 30px 0;
        }
    }
</style>

<body>

    <?php require_once "includes/header.php"; ?>

    <?php require_once "includes/styles/container-principal-style.php"; ?>

    <div class="container-principal">

        <div class="card shadow">
            <?php
            $imagen = "images/coleccion-blanqueria/{$producto['ID']}/principal.png?timestamp=" . time();
            ?>
            <img src="<?php echo $imagen; ?>">
            <div class="articulo-detalle">
                <h1><?php echo $producto['producto']; ?></h1>
                <br>
                <h2 style="color: #906ADB;">$ <?php echo $producto['precio']; ?></h2>
                <br>
                <h3><u>Detalles del producto</u></h3>
                <br>
                <h3>Tamaño: <?php echo $producto['tamaño']; ?></h3>
                <br>
                <h3>Marca: <?php echo $producto['marca']; ?></h3>
                <div class="add-to-cart">
                    <label for="color-select">Selecciona el color:</label>
                    <select id="color-select">
                        <option value="rojo">Rojo</option>
                        <option value="azul">Azul</option>
                        <option value="verde">Verde</option>
                        <!-- Agrega más opciones de color según sea necesario -->
                    </select>
                    <br>
                    <label for="stock-select">Selecciona el stock:</label>
                    <select id="stock-select">
                        <?php
                        for ($i = 1; $i <= $producto['stock']; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    <br>
                    <button onclick="addToCart()">Añadir al carrito</button>
                </div>
            </div>
        </div>

    </div>

    <?php require_once "includes/footer.php"; ?>

    <script>
        function addToCart() {
            // Aquí puedes agregar la lógica para añadir el producto al carrito
            alert('Producto añadido al carrito');
        }
    </script>

</body>

</html>