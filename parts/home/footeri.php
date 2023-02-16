<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="f.css" />
    <style>
        body {
            padding: 0%;
            margin: 0%;
        }

        .footer1 {
            border: 3px solid none;
            width: 100%;
            height: auto;
            background-color: #330000;
        }

        .footerP1 {
            border: 3px solid;
            width: 100%;
            height: 100px;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        .footerP11 {
            width: 100%;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Roboto;
            letter-spacing: 1px;
            margin: 65px 0px 40px 0px;
            font-size: 26px;
            color: rgb(255, 255, 255);
            font-weight: bold;
        }

        .framee {
            width: 85%;
            height: 420px;
            border-radius: 10px;
        }

        .a1 {
            border: 3px solid none;
            width: 100%;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: left;
            padding-left: 10px;
            font-size: 18px;
            color: rgb(225, 225, 225);
            font-family: Roboto;
            margin: -6px 0px 0px 0px;
            line-height: 22px;
        }

        .footerP11z {
            width: 84%;
            height: 70px;
        }

        .frame1 {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
        }

        .frame2 {
            width: 90%;
            height: auto;
            display: flex;
            justify-content: center;
        }

        .footerP11a {
            border: 3px solid norne;
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            font-size: 25px;
            color: white;
            margin: 30px 0 px 0px 0px;
        }

        .footerP11b {
            border: 3px solid norne;
            width: 75%;
            height: 70px;
        }

        .a2 {
            border: 1px solid none;
            width: 50%;
            height: 100%;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: left;
        }

        .footerP2 {
            border: 3px solid none;
            width: 100%;
            height: 600px;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }

        .footerP22 {
            width: 25%;
            height: 650px;
        }

        .footerP22 img {
            width: 80%;
            height: 420px;
        }

        .footerP3 {
            width: 100%;
            height: 50px;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .footerP33 {
            border: 3px solid s;
            width: 10%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer-logo {
            color: white;
            font-size: 36px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer-logo img {
            height: 30%;
            width: 40%;
        }

        .footerP4 {
            border: 3px solid none;
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-top: 30px;
        }

        .footerP44 {
            border-top: 3px solid #ff9934;
            width: 90%;
            height: auto;
            text-align: center;
            display: flex;
            flex-direction: column;
        }

        .footerP44a {
            display: flex;
            height: 120px;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .f44a1 {
            font-size: 18px;
            width: 100%;
            height: auto;
            color: #dcd7c8;
            margin: 5px;
        }

        .main321 {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
        }

        .main322 {
            width: 80%;
            height: auto;
        }

        .divi-kryesor {
            border: 1px solid none;
            width: 100%;
            height: auto;
            margin-bottom: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            justify-content: center;
        }

        .divi-kryesor1 {
            width: 100%;
            height: auto;
            background: transparent;
            display: flex;
            flex-direction: row;
            align-items: flex-end;
            text-align: center;
            justify-content: center;
        }

        .svg-wrapper {
            position: relative;

            margin: 20px;
            width: 320px;

            margin-bottom: -1%;
        }

        .divi-text {
            width: 100%;
            height: 70px;
            display: flex;
            align-items: end;
            justify-content: center;
        }

        .shape {
            stroke-dasharray: 107 540;
            stroke-dashoffset: -490;
            stroke-width: 8px;
            fill: transparent;
            stroke: #19f6e8;
            border-bottom: 5px solid black;
            transition: stroke-width 1s, stroke-dashoffset 1s, stroke-dasharray 1s;
        }

        .text {
            font-family: "Times New Roman", Times, serif;
            font-size: 24px;
            line-height: 32px;
            letter-spacing: 2px;
            font-weight: 400;
            color: #fff;
            top: -48px;
            position: relative;
        }

        .text1 {
            font-family: "Times New Roman", Times, serif;
            font-size: 19px;
            color: #fff;
            letter-spacing: 1 px;
        }

        .svg-wrapper:hover .shape {
            stroke-width: 2px;
            stroke-dashoffset: 0;
            stroke-dasharray: 760;
        }

        .footer-logo img {
            height: 38px;
            width: 38px;
        }

        .text-none {
            text-decoration: none;
        }

        @media (max-width: 800px) {
            .divi-kryesor1 {
                height: auto;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .svg-wrapper {
                margin: 10;
            }
        }

        @media screen and (max-width: 1100px) {
            .footerP22 {
                width: 100%;
                height: auto;
            }

            .footerP11z {
                width: 76%;
                height: 70px;
            }

            .footerP2 {
                height: auto;
            }

            .footerP33 {
                width: 12%;
            }

            .footerP3 {
                justify-content: center;
            }

            .frame2 {
                width: 100%;
            }

            .footerP33 img {
                width: 38px;
                height: 38px;
            }

            .footerP4 {
                height: auto;
            }

            .footerP22 img {
                width: 80%;
                height: 420px;
            }

            .a1 {
                font-size: 15px;
            }

            .framee {
                width: 77%;
            }
        }

        @media screen and (min-width: 300px) and (max-width: 570px) {
            .footerP33 img {
                width: 40px;
                height: 40px;
            }

            .footerP22 img {
                width: 80%;
                height: 520px;
            }

            .footerP11z {
                display: flex;
            }

            .main322 {
                width: 40%;
                height: auto;
            }

            .footerP22 {
                display: flex;
                justify-content: center;
                flex-direction: column;
            }

            .footerP11z {
                width: 77%;
                height: 70px;
            }

            .main322 {
                width: 80%;
                height: auto;
            }

            .footerP22 img {
                width: 85%;
                height: 420px;
            }

            .footerP33 {
                width: 20%;
            }
        }

        @media screen and (min-width: 571px) and (max-width: 1000px) {

            .footerP22 {
                width: 100%;
            }

            .footerP22 img {
                width: 420px;
                height: 420px;
            }

            .frame2 {
                width: 100%;
            }

            .main322 {
                width: 67%;
                height: auto;
            }

            .footerP11z {
                width: 65%;
            }

            .framee {
                width: 66%;
            }

            .footerP33 {
                width: 17%;
            }
        }

        @media screen and (min-width: 1000px) and (max-width: 2000px) {


            .footerP22 {
                width: 30%;
            }

            .main322 {
                width: 90%;
            }

            .frame2 img {
                height: 420px;
                width: 90%;
            }

            .frame1 {
                width: 95%;
            }

            .framee {
                width: 83%;
            }

            .footerP11 {
                font-size: 26px;
            }
        }

        @media screen and (min-width: 200px) and (max-width: 300px) {
            .f44a1 {
                font-size: 18px;
            }

            .footer-logo {
                font-size: 25px;
            }

            .text1 {
                font-size: 20px;
            }

            .text {
                font-size: 18px;
            }

            .footerP33 {
                width: 18%;
            }

            .footerP33 img {
                width: 25px;
                height: 25px;
            }
        }
    </style>
</head>

<body>
    <section class="footer">
        <div class="footer1">
            <div class="footerP2">
                <div class="footerP22">
                    <div class="footerP11">
                        <div class="footerP11z">
                            <p>Numra të rëndesishem</p>
                        </div>
                    </div>

                    <div class="main321">
                        <div class="main322">
                            <div class="a1">Komuna</div>
                            <div class="a1" style="padding-bottom: 5px">
                                (Zyra për marrëdhënie me publikun) <br />

                                038 - 200 - 45 - 017 / 029 - 271 - 282
                            </div>
                            <div class="a1" style="padding-top: 5px">
                                (Zyra e kryetarit)<br />
                                029 - 271 - 035 / 038 - 200 - 45 - 000
                            </div>

                            <div class="a1" style="padding-top: 5px">
                                Shtëpia e shëndetit 029 - 271 -031
                            </div>

                            <div class="a1">Zjarrfiksat 029 - 271 - 119</div>

                            <div class="a1">Policia 029 - 271 - 024</div>

                            <div class="a1">Stacioni i autobusave 029 - 271 - 160</div>
                            <div class="a1">Kryqi i kuq 029 - 271 - 273</div>
                            <div class="a1">Higjiena 029 - 271 - 688</div>
                            <div class="a1">Kek-u 029 - 271 - 083</div>
                        </div>
                    </div>
                </div>
                <div class="footerP22">
                    <div class="footerP11">
                        <div class="footerP11z">
                            <p>Lokacioni</p>
                        </div>
                    </div>
                    <div class="frame1">
                        <iframe class="framee" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23585.355932013223!2d20.813767710661015!3d42.3602270179426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13539bca62bb5eef%3A0x7a1353e4207aded7!2zVGhlcmFuZMOr!5e0!3m2!1ssq!2s!4v1674685449902!5m2!1ssq!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="footerP22">
                    <div class="footerP11">
                        <div class="footerP11z">
                            <p style="margin-right: 50px">Harta e qytetit</p>
                        </div>
                    </div>
                    <div class="frame2">
                        <img src="../images/harta.png" style="border-radius: 10px" />
                    </div>
                </div>
            </div>

            <div class="footerP4">
                <div class="footerP44">
                    <div class="footerP44a">
                        <div class="f44a1">Copyright &copy; I love Theranda 2023</div>
                        <div class="f44a1">Te gjitha te drejtat te rezevuara</div>
                    </div>

                    <div class="footerP3">
                        <div class="footerP33">
                            <a href="https://kk.rks-gov.net/suhareke/" target="_blank">
                                <div class="footer-logo">

                                    <img src="../images/suhareka1.jpg" alt="" />
                            </a>
                        </div>
                    </div>

                    <div class="footerP33">
                        <a href="https://www.facebook.com/people/I-Love-Theranda/100089923895921/" target="_blank" class="text-none">
                            <i class="fa-brands fa-facebook-f footer-logo"></i>
                        </a>
                    </div>

                    <div class="footerP33"> <a href="https://www.instagram.com/i_love_theranda/" target="_blank" class="text-none">
                            <i class="fa-brands fa-instagram footer-logo"></i>
                        </a> </div>
                    <div class="footerP33">

                        <a href="#" target="_blank" class="text-none">
                            <i class="fa-brands fa-youtube footer-logo"></i>
                        </a>
                    </div>

                    <div class="footerP33">
                        <a href="mailto:ilovetheranda@gmail.com" target="_blank" class="text-none">
                            <i class="fa-regular fa-envelope footer-logo">
                            </i>
                        </a>
                    </div>
                </div>

                <div class="divi-kryesor">
                    <div class="divi-text">
                        <p class="text1">Zhvilluar, dizajnuar dhe koduar nga:</p>
                    </div>

                    <div class="divi-kryesor1">
                        <a href="https://www.instagram.com/qamil_beqiraj/" style="text-decoration: none" target="_blank">
                            <div class="svg-wrapper">
                                <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="shape" height="60" width="320" />
                                    <div class="text">Qamil Beqiraj</div>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="text-none" target="_blank">
                            <div class="svg-wrapper">
                                <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="shape" height="60" width="320" />
                                    <div class="text">Lendrit Kolgeci</div>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script>

    </script>
</body>

</html>