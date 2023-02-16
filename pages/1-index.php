<html>

<head>
    <title> I LOVE THERANDA</title>
    <style>
        body {
            background-color: whitesmoke;
        }

        html {
            scroll-behavior: smooth;
        }

        .to-top {
            background: #ff9433;
            position: fixed;
            bottom: 16px;
            right: 12px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: white;
            text-decoration: none;
            opacity: 0;
            pointer-events: none;
            transition: all 0.4s;
        }

        .to-top.active {
            bottom: 32px;
            pointer-events: auto;
            opacity: 1;
        }

        .to-top:hover {
            width: 70px;
            height: 70px;

        }
    </style>
</head>

<body>
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    <?php
    include("../parts/home/navbar.php"); // pjesa e nav-barit
    ?>


    <?php
    include("../parts/home/home-caruosel.php");   // home carousel
    ?>
    <?php
    include("../parts/home/teksti.php");  // teksti ne " "
    ?>

    <?php
    include("../parts/home/teksti1.php");  // teksti ne " "
    ?>


    <?php
    include("../parts/home/ekipet1.php"); // pjesa e ekipeve te suharekes
    ?>

    <?php
    include("../parts/home/xhebrailat.php"); // xhebrailat
    ?>

    <?php
    include("../parts/home/vizioni.php"); // misioni - vizioni
    ?>
    <?php
    include("../parts/home/teksti2.php");
    ?>
    <?php
    //include("foto.php"); // day night 
    ?>

    <?php
    include("../parts/home/kontakti.php"); // facebook, email, webmail
    ?>

    <?php
    include("../parts/home/carouseli1.php"); // galeria
    ?>

    <?php
    //include("harta.php"); // numra te rensishem, lokacioni... 
    ?>

    <?php

    include("../parts/home/footeri.php"); // footeri
    ?>

    <script>
        const toTop = document.querySelector(".to-top");

        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 100) {
                toTop.classList.add("active");
            } else {
                toTop.classList.remove("active");
            }
        });
    </script>
</body>

</html>