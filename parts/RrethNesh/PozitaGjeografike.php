<html>

<head>
    <title> I LOVE THERANDA</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }


        .bg {
            border: solid 1px red;
            width: 100%;
            height: 640px;
            background-image: url("../images/suhareka3.jpg");
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50%;
        }



        .pgj-div {
            display: flex;
            justify-content: center;
            width: 100%;
            border: solid 1px none;
        }

        .pgj-div1 {
            border: solid 1px none;
            display: flex;
            justify-content: flex-c;
            width: 70%;
            height: 100px;
            flex-direction: column;
        }

        .pgj-border {
            border: solid 2px black;
            width: 100%;
            height: 2px;
            margin-top: 0%;
            background-color: #4d2d0c;
            margin-top: -0.2%;
        }

        .pgj-p1 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 30px;
            color: #ff9934;
            margin-top: 2.3%;
        }

        @media (max-width:1000px) {
            .pgj-border {
                margin-top: -3%;
            }

            .pgj-p1 {
                margin-top: 4%;
            }

        }

        @media (max-width:600px) {
            .pgj-border {
                margin-top: -5%;
            }

            .pgj-p1 {
                margin-top: 7%;
            }

        }

        @media (max-width:400px) {
            .pgj-border {
                margin-top: -7%;
            }

            .pgj-p1 {
                margin-top: 10%;
            }

            .pgj-p1 {
                font-size: 24px;
            }

        }

        /* pershkrimi */

        .pgj-div2 {
            display: flex;
            justify-content: center;
            width: 100%;
            height: auto;
            border: solid 1px none;
        }

        .pgj-div3 {
            border: solid 1px none;
            margin-top: -2%;
            display: flex;
            justify-content: flex-start;
            width: 70%;
            height: auto;
        }


        .pgj-p2 {
            color: #330000;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 18px;
            margin-top: 30px;

        }

        .historiku-div {
            display: flex;
            justify-content: center;
            width: 100%;
            border: solid 1px none;
            background-color: whitesmoke;
            margin-top: 30px;
        }

        .historiku-div1 {
            border: solid 1px none;
            display: flex;
            justify-content: flex-c;
            width: 70%;
            height: 100px;
            flex-direction: column;
        }

        .historiku-border {
            border: solid 2px black;
            width: 100%;
            height: 2px;
            margin-top: 0.5%;
            background-color: whitesmoke;
        }

        .historiku-p1 {
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
            font-size: 30px;
            color: #ff9934;
            margin-top: 2.3%;
        }

        @media (max-width: 1000px) {
            .historiku-border {
                margin-top: 1%;
            }

            .historiku-p1 {
                margin-top: 4%;
            }

            .pgj-p2 {
                margin-top: 20px;
            }
        }

        @media (max-width: 600px) {

            .historiku-border {
                margin-top: 1%;
            }

            .historiku-p1 {
                margin-top: 7%;
            }

            .pgj-p2 {
                margin-top: 0px;
            }
        }

        @media (max-width: 400px) {
            .historiku-border {
                margin-top: -1%;
            }

            .historiku-p1 {
                margin-top: 10%;
            }

            .pgj-p2 {
                margin-top: 10px;
            }
        }

        /* pershkrimi */

        .historiku-div2 {
            display: flex;
            justify-content: center;
            width: 100%;
            height: auto;
            border: solid 1px none;
            background-color: whitesmoke;
        }

        .historiku-div3 {
            border: solid 1px none;
            margin-top: -1%;
            display: flex;
            justify-content: flex-start;
            width: 70%;
            height: auto;
        }

        .historiku-p2 {
            color: #330000;
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
            font-size: 18px;
            margin-bottom: 50px;
        }

        .FotojaPerLuft {
            width: 100%;
            height: 400px;
            background-image: url("../images/suhareka3.jpg");
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50%;
        }
    </style>

</head>

<body>



    <?php
    include("../../parts/home/navbar.php"); // pjesa e nav-barit
    ?>

    <!-- background -->

    <div class="bg">
    </div>




    <div class="historiku-div">
        <div class="historiku-div1">
            <p class="historiku-p1" style="letter-spacing:1px">LUFTËRAT</p>
            <p class="historiku-border"></p>
        </div>
    </div>



    <div class="pgj-div2">
        <div class="pgj-div3">
            <p class="pgj-p2"> Komuna e Therandës shtrihet në pjesën veri-lindore të Prizrenit dhe ka një siperfaqe prej 431 km2. Lartesia mbidetare e saj është 420 metra.
                Popullesia është e shpërndarë në
                42 fshatra dhe arrinë numrin e rreth 80.000 banorëve. Pozita geografike dhe kushtet e favorshme klimatike kanë bëre që në këtë rajon të zhvillohen ecereale të ndryshme bujqësore, ku në veçanti vlenë të theksohet se që në antikitet është zhvilluar vreshtaria si degë e bujqësisë që e specifikon Therandën edhe sot.
                Kjo komunë aktualisht kufizohet me atë të Prizrenit, Shterpces, Ferizajit, Lipjanit, Malishevës dhe Rahovecit, ndërsa vet qyteti është qendra administrative, por edhe e zhvillimit ekonomik e kulturor.
                Theranda posedonë një florë dhe faunë të begatëshme ndërsa masivi i Sharrit që prekë këtë rajon është atraksion i vërtet i botës bimore dhe shtazore.


            </p>
        </div>
    </div>



    <?php
    include("../../parts/home/carouseli1.php"); // pjesa e nav-barit
    ?>
    <?php
    include("../../parts/home/footeri.php"); // pjesa e nav-barit
    ?>





</body>

</html>