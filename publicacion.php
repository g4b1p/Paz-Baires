<!DOCTYPE html>
<html lang="en">

<?php require_once "includes/head.php"; ?>

<style>
    /*-----publicacion info-----*/
    .publicacion-container {
        display: flex;
    }

    .info-publicacion {
        margin-left: 30px;
    }

    .color-options {
        display: flex;
    }

    .color-option {
        margin: 0 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .color-box {
        width: 30px;
        height: 30px;
        cursor: pointer;
    }

    .color-option.selected {
        border: 2px solid #333; /* Cambia el borde para indicar la selección */
    }

    input[type="cuadrado"] {
        display: none;
    }

    .info-publicacion p, span, button {
        font-size: 15px;
    }

    .stock-section {
        display: flex;
    }

    #cantidad-input {
        width: 50px;
        text-align: center;
        margin: 0 10px;
    }

    #agregar-carrito-btn {
        padding: 10px;
        cursor: pointer;
        background-color: #8ca853;
        color: #fff;
        border: none;
        border-radius: 15px;
    }
</style>

<body>

    <?php require_once "includes/header.php"; ?>
    <?php require_once "includes/styles/header-style.php"; ?>

    <?php require_once "includes/styles/container-principal-style.php"; ?>

    <div class="container-principal">
        <div class="publicacion-container">
            <img id="producto-imagen" src="images/phot1.jpg" style="max-width: 50%; height: auto;">
            <div class="info-publicacion">
                <h1>Razo mediano</h1>
                <hr>
                <br>
                <h2>$ 4.000</h2>
                <br>
                <p>Tela: morley</p>
                <br>
                <p>Color: <span id="color-seleccionado"></span></p>
                <br>
                <div class="color-options">
                    <label class="color-option" id="rojo-option">
                        <input type="cuadrado" name="color" value="rojo" onclick="cambiarColor('rojo', '#FF5733');">
                        <div class="color-box" style="background-color: #FF5733;"></div>
                        <!-- Rojo -->
                    </label>
                    <label class="color-option" id="celeste-option">
                        <input type="cuadrado" name="color" value="celeste" onclick="cambiarColor('celeste', '#3498db');">
                        <div class="color-box" style="background-color: #3498db;"></div>
                        <!-- Azul -->
                    </label>
                </div>
                <br>
                <div class="stock-section">
                    <span>Stock disponible: <span id="stock-disponible">0</span></>
                    <br><br>
                    <div>
                        <label for="cantidad-input">Cantidad:</label>
                        <button onclick="restarCantidad()">-</button>
                        <input id="cantidad-input" value="1" min="1">
                        <button onclick="sumarCantidad()">+</button>
                    </div>
                    <br>
                    <button id="agregar-carrito-btn" onclick="agregarAlCarrito()">Añadir al carrito</button>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>
    <?php require_once "includes/styles/footer-style.php"; ?>

    <script>

        function cambiarColor(color, backgroundColor) {
            // Crea el nombre de la nueva imagen según el color seleccionado
            var nuevaImagen = "images/phot" + (color === 'rojo' ? '1' : '2') + ".jpg"; // condicion ? expresion_if_true : expresion_if_false;

            // Cambia la fuente de la imagen del producto con la nueva imagen
            document.getElementById("producto-imagen").src = nuevaImagen;

            // Actualiza el texto del color seleccionado
            document.getElementById("color-seleccionado").textContent = color;

            // Agrega/quita la clase 'selected' al color seleccionado (css)
            document.getElementById("rojo-option").classList.toggle("selected", color === 'rojo');
            document.getElementById("celeste-option").classList.toggle("selected", color === 'celeste');

            // Actualiza el stock disponible para el color seleccionado (puedes implementar la lógica real aquí)
            stockActual = color === 'rojo' ? 8 : 10;
            
            //otra funcion
            actualizarStock(); 
        }

        function actualizarStock() {
            //actualiza el texto (cantidad) del stock
            document.getElementById("stock-disponible").textContent = stockActual;
        }

        function sumarCantidad() {
            var cantidadInput = document.getElementById("cantidad-input");
            
            // Obtiene el valor actual de la cantidad y lo convierte a un número entero
            var cantidad = parseInt(cantidadInput.value);

            // Verifica si la cantidad actual es menor que el stock actual
            if (cantidad < stockActual) {
                cantidadInput.value = cantidad + 1;
            }
        }

        function restarCantidad() {
            var cantidadInput = document.getElementById("cantidad-input");

            // Obtiene el valor actual de la cantidad y lo convierte a un número entero
            var cantidad = parseInt(cantidadInput.value);

            // Verifica si la cantidad actual es mayor que 1
            if (cantidad > 1) {
                cantidadInput.value = cantidad - 1;
            }
        }
    </script>

</body>

</html>
