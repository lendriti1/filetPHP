<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="about.css" />


    <title>Kryetarët</title>


    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            margin: 0;
            padding: 0;

        }

        /* about */

        .start1 {
            width: 100%;
            height: auto;
            background-image: url("../images/suhareka2.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .aboutClass {
            text-shadow: 0 0 7px rgba(255, 255, 255, 0.3),
                0 0 3px rgba(255, 255, 255, 0.3);
        }

        .container1 {
            color: #330000;
            font-size: 2.26rem;
            text-transform: uppercase;
            height: 10vh;
            display: flex;
            align-items: center;
            justify-content: start;
            margin-top: -5px;
            margin-left: 10%;
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
        }

        .animation {
            height: 50px;
            overflow: hidden;
            margin-left: 1rem;
        }

        .animation>div>div {
            padding: 0.12rem 0.75rem;
            height: 2.81rem;
            margin-bottom: 2.81rem;
            display: inline;
        }

        .animation div:first-child {
            animation: text-animation 12s infinite;
        }

        .animation div {
            color: white;
        }

        .first div {
            background-color: #330000;
        }

        .second div {
            background-color: #ff9934;
        }

        .third div {
            background-color: #921a1b;
        }

        .four div {
            background-color: #006699;
        }

        @keyframes text-animation {
            0% {
                margin-top: 0;
            }

            8% {
                margin-top: 0;
            }

            16% {
                margin-top: -14%;
            }

            24% {
                margin-top: -14%;
            }

            32% {
                margin-top: -29%;
            }

            40% {
                margin-top: -29%;
            }

            48% {
                margin-top: -44%;
            }

            56% {
                margin-top: -44%;
            }

            64% {
                margin-top: -14%;
            }

            72% {
                margin-top: -14%;
            }

            80% {
                margin-top: 0;
            }

            100% {
                margin-top: 0;
            }
        }

        @media (max-width: 700px) {
            @keyframes text-animation {
                0% {
                    margin-top: 0;
                }

                8% {
                    margin-top: 0;
                }

                16% {
                    margin-top: -14%;
                }

                24% {
                    margin-top: -14%;
                }

                32% {
                    margin-top: -27%;
                }

                40% {
                    margin-top: -27%;
                }

                48% {
                    margin-top: -42%;
                }

                56% {
                    margin-top: -42%;
                }

                64% {
                    margin-top: -14%;
                }

                72% {
                    margin-top: -14%;
                }

                80% {
                    margin-top: 0;
                }

                100% {
                    margin-top: 0;
                }
            }

            .container1 {
                font-size: 1.26rem;
                margin-top: -7px;
            }

            .animation {
                height: 30px;
            }

            .start1 {
                height: 60px;
            }

            .start3 {
                display: flex;
                flex-direction: column;
            }
        }

        /* background  */

        .start2 {
            border: solid 1px none;
            width: 100%;
            height: 340px;
            background-image: url("../images/suhareka2.jpg");
            background-attachment: fixed;
            background-size: cover;
        }

        /* historiku pgj traditat */

        .start3 {
            border: solid 1px none;
            width: 100%;
            height: 280px;
            background-color: #330000;
            display: flex;
            flex-direction: row;
        }

        .start-div {
            width: 25%;
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            justify-content: baseline;
        }

        .start-img {
            width: 60px;
            height: 60px;
        }

        .start-p {
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
            font-size: 20px;
            color: white;
            margin-top: 5.5%;
            margin-bottom: 5%;
        }

        /* buton  */
        .button1 {
            --offset: 6px;
            --border-size: 2px;
            display: block;
            position: relative;
            padding: 0.5em 0.5em;
            appearance: none;
            border: 0;
            background: transparent;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 0.25em;
            outline: none;
            cursor: pointer;
            font-weight: bold;
            border-radius: 0;
            font-size: 10px;
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
            box-shadow: inset 0 0 0 var(--border-size) currentcolor;
            transition: background 0.8s ease;
        }

        .button1__horizontal,
        .button1__vertical {
            position: absolute;
            top: var(--horizontal-offset, 0);
            right: var(--vertical-offset, 0);
            bottom: var(--horizontal-offset, 0);
            left: var(--vertical-offset, 0);
            transition: transform 0.8s ease;
            will-change: transform;
        }

        .button1__horizontal::before,
        .button1__vertical::before {
            content: "";
            position: absolute;
            border: inherit;
        }

        .button1__horizontal {
            --vertical-offset: calc(var(--offset) * -1);
            border-top: var(--border-size) solid currentcolor;
            border-bottom: var(--border-size) solid currentcolor;
        }

        .button1__horizontal::before {
            top: calc(var(--vertical-offset) - var(--border-size));
            bottom: calc(var(--vertical-offset) - var(--border-size));
            left: calc(var(--vertical-offset) * -1);
            right: calc(var(--vertical-offset) * -1);
        }

        .button1:hover .button1__horizontal {
            transform: scaleX(0);
        }

        .button1__vertical {
            --horizontal-offset: calc(var(--offset) * -1);
            border-left: var(--border-size) solid currentcolor;
            border-right: var(--border-size) solid currentcolor;
        }

        .button1__vertical::before {
            top: calc(var(--horizontal-offset) * -1);
            bottom: calc(var(--horizontal-offset) * -1);
            left: calc(var(--horizontal-offset) - var(--border-size));
            right: calc(var(--horizontal-offset) - var(--border-size));
        }

        .button1:hover .button1__vertical {
            transform: scaleY(0);
        }

        @media (max-width: 700px) {
            .start3 {
                display: flex;
                flex-direction: column;
                height: 930px;
            }

            .start-div {
                margin-top: 3%;
                width: 100%;
            }
        }

        /* background */

        .start4 {
            border: solid 1px none;
            width: 100%;
            height: 340px;
            background-image: url("../images/suhareka2.jpg");
            background-attachment: fixed;
            background-size: cover;
        }

        /* parafundi */
        .div-hs {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150px;
            width: 100%;
            font-size: 30px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bold;
        }



        .start5 {
            border: solid 1px none;
            width: 100%;
            height: 550px;
            display: flex;
            flex-direction: row;
        }

        .start55 {
            border: solid 1px none;
            width: 25%;
            height: 500px;
            margin-left: 6.5%;
        }

        .card-custom {
            overflow: hidden;
            min-height: 450px;
            box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
        }

        .card-custom-img {
            height: 200px;
            min-height: 200px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border-color: inherit;
        }

        /* First border-left-width setting is a fallback */
        .card-custom-img::after {
            position: absolute;
            content: "";
            top: 161px;
            left: 0;
            width: 0;
            height: 0;
            border-style: solid;
            border-top-width: 40px;
            border-right-width: 0;
            border-bottom-width: 0;
            border-left-width: 545px;
            border-left-width: calc(575px - 5vw);
            border-top-color: transparent;
            border-right-color: transparent;
            border-bottom-color: transparent;
            border-left-color: inherit;
        }

        .card-custom-avatar img {
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
            position: absolute;
            top: 100px;
            left: 1.25rem;
            width: 100px;
            height: 100px;
        }

        @media (max-width: 961px) {
            .start5 {
                height: 1550px;
                display: flex;
                flex-direction: column;
            }

            .start55 {
                width: 85%;
                margin-bottom: 5%;
            }
        }

        @media (max-width: 500px) {
            .div-hs {
                font-size: 20px;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-weight: bold;
                height: 56px;
                align-items: end;
            }

        }

        /* parafundi */

        .start6 {
            border: solid 1px none;
            width: 100%;
            height: 200px;
            display: flex;
            flex-direction: row;
            background-color: #e6d8d8;
        }

        .div1 {
            width: 50%;
            height: 220px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            justify-content: space-around;
        }

        .div2 {
            width: 50%;
            height: 220px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            justify-content: space-around;
        }

        .people-img {
            width: 40px;
            height: 40px;
        }

        .people-p {
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
            font-size: 15px;
            color: #330000;
            text-align: center;
        }

        @media (max-width: 700px) {
            .div1 {
                width: 100%;
            }

            .div2 {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="start1">
        <div class="container1">
            <span class="aboutClass">About</span>
            <section class="animation">
                <div class="first">
                    <div>Historiku</div>
                </div>
                <div class="second">
                    <div>Pozita Gjeografike</div>
                </div>
                <div class="third">
                    <div>Traditat</div>
                </div>
                <div class="four">
                    <div>Kryetarët</div>
                </div>
            </section>
        </div>
    </div>

    <!-- background   -->

    <div class="start2"></div>

    <!-- historiku pgj traditat   -->

    <div class="start3">
        <div class="start-div">
            <img class="start-img" src="../images/history.png" />
            <p class="start-p">Historiku</p>

            <a href="historiku.php" class="button1">
                Më shumë
                <div class="button1__horizontal"></div>
                <div class="button1__vertical"></div>
            </a>
        </div>

        <div class="start-div">
            <img class="start-img" src="../images/world.png" />
            <p class="start-p">Pozita Gjeografike</p>
            <a href="PozitaGjeografike.php" class="button1">
                Më shumë
                <div class="button1__horizontal"></div>
                <div class="button1__vertical"></div>
            </a>
        </div>

        <div class="start-div">
            <img class="start-img" src="../images/tradita.png" />
            <p class="start-p">Traditat</p>
            <a href="Traditat.php" class="button1">
                Më shumë
                <div class="button1__horizontal"></div>
                <div class="button1__vertical"></div>
            </a>
        </div>

        <div class="start-div">
            <img class="start-img" src="../images/president.png" />
            <p class="start-p">Kryetarët</p>
            <a href="Kryetaret.php" class="button1">
                Më shumë
                <div class="button1__horizontal"></div>
                <div class="button1__vertical"></div>
            </a>
        </div>
    </div>

    <!-- background -->

    <div class="start4"></div>

    <!-- hapzir e sponzorizuar -->

    <div class="div-hs">
        Hapësirë e Sponzorizuar
    </div>
    <div class="randomClass2" style="height:auto;width:100%">
        <section class="text-gray-400  body-font">
            <div class="container px-5 mb-10 mx-auto">
                <div class="flex flex-wrap ">
                    <div class="p-4 md:w-1/3">
                        <div class="h-full   shadow-lg shadow-gray-500 rounded-lg overflow-hidden">
                            <img class="lg:h-72 md:h-36 w-full object-cover object-center" src="../images/suhareka2.jpg" alt="blog">
                            <div class="p-6">
                                <h2 class=" text-3xl title-font font-large text-blue-900 ">GOLDEN EAGLE</h2>
                                <h1 class="title-font text-lg font-medium text-white mb-3">The Catalyzer</h1>
                                <p class="leading-relaxed mb-3  text-blue-900 text-xl">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing shadow-lg shadow-gray-500.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0
                                    ">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full shadow-lg shadow-gray-500 rounded-lg overflow-hidden">
                            <img class="lg:h-72 md:h-36 w-full object-cover object-center" src="../images/suhareka3.jpg" alt="blog">
                            <div class="p-6">
                                <h2 class=" text-3xl title-font font-large text-blue-900 ">GOLDEN EAGLE</h2>
                                <h1 class="title-font text-lg font-medium text-white mb-3">The Catalyzer</h1>
                                <p class="leading-relaxed mb-3  text-blue-900 text-xl">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing shadow-lg shadow-gray-500.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0
                                    ">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full   shadow-lg shadow-gray-500 rounded-lg overflow-hidden">
                            <img class="lg:h-72 md:h-36 w-full object-cover object-center" src="../images/suhareka4.jpg" alt="blog">
                            <div class="p-6">
                                <h2 class=" text-3xl title-font font-large text-blue-900 ">GOLDEN EAGLE</h2>
                                <h1 class="title-font text-lg font-medium text-white mb-3">The Catalyzer</h1>
                                <p class="leading-relaxed mb-3  text-blue-900 text-xl">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing shadow-lg shadow-gray-500.</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0
                                    ">Learn More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- parafundi -->

    <div class="start6">
        <div class="div1">
            <div class="people-div">
                <img class="people-img" src="../images/3.png" />
                <p id="timer1" class="people-p">1000</p>
            </div>

            <div class="people-div">
                <img class="people-img" src="../images/2.png" />
                <p id="timer2" class="people-p">344</p>
            </div>
        </div>

        <div class="div2">
            <div class="people-div">
                <img class="people-img" src="../images/1.png" />
                <p id="timer3" class="people-p">431</p>
            </div>

            <div class="people-div">
                <img class="people-img" src="../images/4.png" />
                <p id="timer4" class="people-p">420</p>
            </div>
        </div>
    </div>

    <!-- <script>
        window.addEventListener("scroll", () => {
            const scrollable =
                document.documentElement.scrollHeight - window.innerHeight;
            const scrolled = window.scrollY;
            if (Math.ceil(scrolled) === scrollable) {
                alert("HeljO");
                console.log("scrolled");
            }
        });
    </script> -->
</body>

</html>