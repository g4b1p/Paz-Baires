<style>
    @import url('https://fonts.googleapis.com/css2?family=Urbanist:wght@600&display=swap');

    * {
        font-family: 'Urbanist', sans-serif;
        margin: 0;
    }

    .info {
        background-color: #8ca853;
        color: rgb(255, 255, 255);
        padding: 2px;
    }



    /*-----header-----*/
    header {
        background-color: rgb(255, 255, 255);
        padding: 5px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    nav a {
        font-size: 15px;
        text-decoration: none;
        margin-right: 25px;
        color: rgb(0, 0, 0);
    }

    nav a:hover {
        color: #9976e0;
    }

    .active-link {
        color: #9976e0;
    }

    nav img {
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    nav img:hover {
        transform: scale(1.3);
    }
</style>