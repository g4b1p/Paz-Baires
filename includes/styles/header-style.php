<style>
    @import url('https://fonts.googleapis.com/css2?family=Urbanist:wght@600&display=swap');

    * {
        font-family: 'Urbanist', sans-serif;
        margin: 0;
    }

    .info {
        background-color: #9965FF;
        color: rgb(255, 255, 255);
        padding: 2px;
    }

    header {
        background-color: rgb(255, 255, 255);
        padding: 5px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    nav a {
        margin-right: 25px;
    }

    nav img {
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    nav img:hover {
        transform: scale(1.3);
    }

    hr {
        width: 95%;
        opacity: 0.5;
    }



    /*-----hamburguesa-----*/
    #menuToggle {
        display: block;
        position: absolute;
        top: 50px;
        left: 50px;
        z-index: 1;
        -webkit-user-select: none;
        user-select: none;
    }

    #menuToggle a {
        text-decoration: none;
        color: #000000;
        transition: color 0.3s ease;
    }

    #menuToggle a:hover {
        color: #9965FF;
    }

    #menuToggle input {
        display: block;
        width: 40px;
        height: 32px;
        position: absolute;
        top: -7px;
        left: -5px;
        cursor: pointer;
        opacity: 0; /* hide this */
        z-index: 2; /* and place it over the hamburger */
        -webkit-touch-callout: none;
    }

    #menuToggle span {
        display: block;
        width: 33px;
        height: 4px;
        margin-bottom: 5px;
        position: relative;
        background: #9965FF;
        border-radius: 3px;
        z-index: 1;
        transform-origin: 4px 0px;
        transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0), background 0.5s cubic-bezier(0.77,0.2,0.05,1.0), opacity 0.55s ease;
    }

    #menuToggle span:first-child {
        transform-origin: 0% 0%;
    }

    #menuToggle span:nth-last-child(2) {
        transform-origin: 0% 100%;
    }

    #menuToggle input:checked ~ span {
        opacity: 1;
        transform: rotate(45deg) translate(-2px, -1px);
        background: #9965FF;
    }

    #menuToggle input:checked ~ span:nth-last-child(3) {
        opacity: 0;
        transform: rotate(0deg) scale(0.2, 0.2);
    }

    #menuToggle input:checked ~ span:nth-last-child(2) {
        transform: rotate(-45deg) translate(0, -1px);
    }

    #menu {
        position: absolute;
        width: 260px;
        height: 100%;
        margin: -95px 0 0 -50px;
        padding: 10px;
        padding-top: 150px;
        background: #fff;
        list-style-type: none;
        -webkit-font-smoothing: antialiased;           
        transform-origin: 0% 0%;
        transform: translate(-100%, 0);
        transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
        overflow-x: hidden;
        overflow-y: auto;
        position: fixed;
    }

    #menu li {
        padding: 15px;
        font-size: 18px;
    }

    #menuToggle input:checked ~ ul {
        transform: none;
    }
</style>