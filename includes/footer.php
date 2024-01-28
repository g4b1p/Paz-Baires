<style>
    /*-----footer-----*/
    footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 50px;
    }

    .div-fot {
        padding: 5px;
        display: flex;
        align-items: center;
    }

    .images {
        cursor: pointer;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .images:hover {
        transform: scale(1.2);
    }

    html {
        scroll-behavior: smooth;
    }
</style>

<footer>
    <div class="div-fot">
        <img src="images/ICONA.png" style="height: 70px; width: auto; padding-right: 10px;">
        <div>
            <h4>PAZ BAIRES © Copyright 2023</h4>
            <h4>Todos los derechos reservados.</h4>
        </div>
    </div>
    <div class="div-fot">
        <a href="https://api.whatsapp.com/send?phone=%2B541128506874&text=Hola!%20Quisiera%20hacer%20una%20consulta" class="whatsapp">
            <img src="https://cdn-icons-png.flaticon.com/512/3670/3670051.png" class="images" style="width: 70px; height: auto; margin: 10px; position: fixed; bottom: 15px; right: 15px;">
        </a>
    </div>
</footer>