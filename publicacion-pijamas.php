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
    $sqlProducto = $con->prepare("SELECT ID, producto, precio, talle, stock, categoria FROM productos WHERE activo = 1 AND ID = :id");
    $sqlProducto->bindParam(':id', $id, PDO::PARAM_INT);
    $sqlProducto->execute();
    $producto = $sqlProducto->fetch(PDO::FETCH_ASSOC);

    // Consulta para obtener los colores según la categoría del producto
    $sqlColores = $con->prepare("SELECT colores.id, colores.nombre
                                FROM colores
                                JOIN productos_colores ON colores.id = productos_colores.id_color
                                WHERE productos_colores.id_producto = :id");
    $sqlColores->bindParam(':id', $id, PDO::PARAM_INT);
    $sqlColores->execute();
    $colores = $sqlColores->fetchAll(PDO::FETCH_ASSOC);
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

    .add-to-cart label {
        font-size: 17px;
        line-height: 40px;
    }

    .add-to-cart button {
        margin-top: 10px;
        padding: 10px;
        background: #906ADB;
        border: 0;
        color: #fff;
        font-size: 17px;
        cursor: pointer;
    }

    .add-to-cart select {
        padding: 1px;
        font-size: 17px;
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
            $imagen = "images/coleccion-pijamas/{$producto['ID']}/principal.png?timestamp=" . time();
            ?>
            <img src="<?php echo $imagen; ?>">
            <div class="articulo-detalle">
                <h1><?php echo $producto['producto']; ?></h1>
                <h2 style="color: #906ADB;">$ <?php echo $producto['precio']; ?></h2>
                <div class="add-to-cart">
                    <label for="color-select">Seleccione el color:</label>
                    <select id="color-select">
                        <?php
                        foreach ($colores as $color) {
                            echo "<option value='{$color['nombre']}'>{$color['nombre']}</option>";
                        }
                        ?>
                    </select>
                    <br>
                    <label for="talle-select">Seleccione la talle:</label>
                    <select id="talle-select">
                        <?php
                        for ($i = 1; $i <= $producto['talle']; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    <br>
                    <label for="stock-select">Selecciona cantidad:</label>
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
            var colorSelect = document.getElementById('color-select');
            var selectedColor = colorSelect.options[colorSelect.selectedIndex].value;

            // Aquí puedes agregar la lógica para añadir el producto al carrito con el color seleccionado
            alert('Producto añadido al carrito con color: ' + selectedColor);
        }
    </script>

</body>

</html>