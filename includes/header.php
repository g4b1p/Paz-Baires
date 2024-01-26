<style>
    @import url('https://fonts.googleapis.com/css2?family=Urbanist:wght@600&display=swap');

    * {
        font-family: 'Urbanist', sans-serif;
        margin: 0;
        padding: 0;
    }

    .info {
        background-color: #906ADB;
        color: rgb(255, 255, 255);
        padding: 2px;
    }

    header {
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        height: auto;
        background: #fff;
    }

    #menu_toggle {
        display: block;
    }

    .nav {
        padding: 0 20px;
        display: flex;
        background-color: #fff;
        display: flex;
        justify-content: space-between;
    }

    .nav_logo {
        padding: 10px 0;
    }

    .menu_items {
        display: flex;
        list-style: none;
        gap: 40px;
        position: fixed;
        top: 0;
        width: 200px;
        background-color: #fff;
        justify-content: flex-start;
        height: 100%;
        left: -100%;
        padding: 50px 30px 30px;
        flex-direction: column;
        transition: all 0.5s ease;
    }

    .showMenu .menu_items {
        left: 0;
    }

    a {
        color: #333;
        text-decoration: none;
    }

    #menu_toggle {
        width: 30px;
        cursor: pointer;
    }

    .menu_items #menu_toggle {
        position: absolute;
        top: 25px;
        right: 25px;
    }
</style>

<div class="every-header">
    <div class="info">
        <center>
            <h4>COMPRA MÍNIMA PARA ENVIOS A PARTIR DE $20.000</h4>
        </center>
    </div>

    <header>
        <nav class="nav container">
            <div></div>
            <a href="home.php"><img src="images/logo.png" height="80" margin="10"></a>
            <ul class="menu_items">
                <img src="images/times.svg" alt="timesicon" id="menu_toggle" />
                <li><a href="home.php" class="nav_link">Inicio</a></li>
                <li><a href="quiero-comprar.php" class="nav_link">quiero comprar</a></li>
                <li><a href="tienda.php" class="nav_link">tienda</a></li>
                <li><a href="carrito.php" class="nav_link">carrito</a></li>
                <li>
                    <a href="" class="nav_link" target="_blank"><img src="https://cdn.icon-icons.com/icons2/2066/PNG/512/instagram_icon_125245.png" style="height: 27x; width: 29px; margin-right: 10px;"></a>
                    <a href="" class="nav_link" target="_blank"><img src="https://cdn-icons-png.flaticon.com/256/59/59439.png" style="height: 27x; width: 29px;"></a>
                </li>
            </ul>
            <img src="images/bars.svg" alt="timesicon" id="menu_toggle" />
        </nav>

        <center>
            <hr style="width: 90%">
            <br />
        </center>
    </header>

    <script>
        const header = document.querySelector("header");
        const menuToggler = document.querySelectorAll("#menu_toggle");

        menuToggler.forEach(toggler => {
            toggler.addEventListener("click", () => header.classList.toggle("showMenu"));
        });
    </script>

    <div>