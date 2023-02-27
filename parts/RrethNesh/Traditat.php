<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="traditet.css" />
    <style>
        .traditat {
            border: solid 1px none;
            width: 100%;
            height: 250px;
            background-image: url("../images/suhareka3.jpg");
            background-attachment: fixed;
            background-size: cover;
        }

        .traditat-div {
            display: flex;
            justify-content: center;
            width: 100%;
            border: solid 1px none;
        }

        .traditat-div1 {
            border: solid 1px none;
            display: flex;
            justify-content: flex-c;
            width: 70%;
            height: 100px;
            flex-direction: column;
        }

        .traditat-border {
            border: solid 2px black;
            width: 100%;
            height: 2px;
            margin-top: -0.3%;
            background-color: #4d2d0c;

        }

        .traditat-p1 {
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
            font-size: 30px;
            color: #ff9934;
            margin-top: 2.3%;
        }

        @media (max-width: 1000px) {
            .traditat-border {
                margin-top: 1%;
            }

            .traditat-p1 {
                margin-top: 4%;
            }
        }

        @media (max-width: 600px) {
            .traditat-border {
                margin-top: 2%;
            }

            .traditat-p1 {
                margin-top: 7%;
            }
        }

        @media (max-width: 400px) {
            .traditat-border {
                margin-top: 1%;
            }

            .traditat-p1 {
                margin-top: 10%;
            }

            .traditat-p1 {
                font-size: 28px;
            }
        }

        /* pershkrimi */

        .traditat-div2 {
            width: 100%;
            height: auto;
            border: solid 1px none;
            display: flex;
            flex-direction: column;
            align-items: center;
        }


        .traditat-border1 {
            border: solid 1px none;
            width: 100%;
            height: 4px;
            background-color: #4d2d0c;
            margin-top: 18px;
        }

        .traditat-div4 {
            border: solid 1px none;
            display: flex;
            justify-content: flex-start;
            width: 70%;
            height: auto;
        }

        .traditat-p2 {
            color: #330000;
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
            font-size: 18px;
        }

        /* test */

        .testo {
            border: solid 1px none;
            width: 100%;
            height: 20px;
        }

        /* background */

        .traditat1 {
            border: solid 1px none;
            width: 100%;
            height: 250px;
            background-image: url("../images/suhareka3.jpg");
            background-attachment: fixed;
            background-size: cover;
        }

        /* produktet tradiconale */

        .traditat2 {
            border: solid 1px none;
            width: 100%;
            height: 250px;
            background-image: url("../images/suhareka3.jpg");
            background-attachment: fixed;
            background-size: cover;
        }

        .traditat8 {
            border: solid 1px none;
            width: 100%;
            height: 30px;
        }
    </style>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>

<body>

    <?php
    include("../../parts/home/navbar.php"); // pjesa e nav-barit
    ?>
    <div class="traditat-div">
        <div class="traditat-div1">
            <p class="traditat-p1">TRADITAT</p>
            <p class="traditat-border"></p>
        </div>
    </div>

    <!-- background -->

    <div class="traditat"></div>

    <!-- rrushi -->

    <div class="traditat-div2">
        <div>
            <p class="traditat-border1"></p>
        </div>

        <div class="traditat-div4">
            <p class="traditat-p2">
                Historikisht Theranda është njohur edhe nga autorët antik historian si
                vend i rrushit. Në Therandë banorët kanë filluar kultivimin e hardhisë
                së rrushit që nga kohërat e lashta. Ndërsa plantacionet e vreshtave
                datojnë që nga vitet e 60-ta të shekullit të kaluar. Aktualisht në
                komunën e Therandës janë të mbjellura rreth 650 hektar vreshtë që
                japin një produkt me cilësi tepër kualitative dhe me përbërje të lartë
                të sheqerit në rrushin e prodhuar në to.
            </p>
        </div>
    </div>

    <div class="testo"></div>

    <!-- background -->

    <div class="traditat1"></div>

    <!-- vera -->

    <div class="traditat-div2">
        <div>
            <p class="traditat-border1"></p>
        </div>

        <div class="traditat-div4">
            <p class="traditat-p2">
                Kjo ka bërë që rajoni i Suharekës të jetë vendprodhim i verërave
                cilësore gjë që kanë qenë të njohur për dy lloj verash, verën e
                rrushit dhe verën e prodhuar nga mjalti që në shkrimet e autorëve
                antik njihet me emrin “Sabaja”, ndërsa vetkultivimi i rrushit është
                një zanat tradiconal i qindra bujqëve të kësaj treve. Shijimi i
                verërëve dhe rakisë së prodhesve vendas është një kënaqësi e veqantë
                dhe kjo falë kualitetit të tij dhe llojllojshmërisë së prodhimit të
                rrushit në vreshtat e këtueshme.
            </p>
        </div>
    </div>

    <div class="testo"></div>

    <!-- produktet tradiconale -->

    <div class="traditat2"></div>

    <div class="traditat-div2">
        <div>
            <p class="traditat-border1"></p>
        </div>

        <div class="traditat-div4">
            <p class="traditat-p2">
                Komuna e Therandës specifikohet edhe me produktet tradicionale
                bujqësore. Në këtë mes zë vënd të vegant rajoni i fshatrave të
                Krushices dhe Budakoves të Nishorit dhe të Semetishtit për prodhimin e
                dardhave që janë për nga lloji unikate në Kosovë. Produkti i tyre ka
                dhënë edhe fruta me një aromë të vegant sikurse edhe tipi i pjeshkave
                që merr aromë bazuar në llojin e dheut ku është kultivuar. Amviset që
                nga koha e lashtë kanë nxjerrë produkte nga këto pemë si pekmez e
                reqlna të llojeve të ndryshme. Një karakteristikë tjetër për komunen e
                Therandës ka qenë edhe perimet sidomos në rojonet me toka të plleshme
                siq janë Studenqani, Reshtani Leshani e Terrnja, në veqnasti me lakrat
                dhe speca e domate. Këto produkte janë tani më të njohura në tërë
                Kosovën me veqantit e tyre aromizuese.
            </p>
        </div>
    </div>

    <div class="traditat8"></div>

    <div class="Fshatrat">
        <!-- component -->
    </div>

    <?php
    include("../../parts/home/carouseli1.php"); // pjesa e nav-barit
    ?>
    <?php
    include("../../parts/home/footeri.php"); // pjesa e nav-barit
    ?>

</body>

</html>