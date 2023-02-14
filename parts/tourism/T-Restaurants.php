<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="t.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .cls1 {
            height: 100%;
        }

        .imgcrs {
            border: 5px solid read;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .imgcrs1 {
            border: 5px solid blacka;
            height: 100%;
        }

        .imgcrs1 img {
            border: 5px solid bluea;
            height: 100%;
        }

        .t-res {
            border: 2px solid red;
            width: 100%;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .t-res1 {
            border: 5px solid reda;
            width: 65%;
            height: 80%;
            display: flex;
            flex-direction: row;
            background-color: rgb(101, 71, 71);
        }

        .t-resp1 {
            border: 5px solid bluea;
            width: 55%;
            height: 100%;
        }

        .t-resp2 {
            border: 5px solid reda;
            width: 45%;
            height: 100%;
        }

        .t-res-title {
            border: 2px solid apurple;
            width: 100%;
            /* width: 60%;  per me lan pak me padding left*/
            height: 20%;
            display: flex;
            align-items: center;
            font-size: 38px;
            justify-content: end;
            color: rgb(254, 190, 152);
        }

        .t-res-title1 {
            width: 94.5%;
        }

        .info-res {
            border: 2px solid purplea;
            width: 100%;
            height: 15%;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .info-res1 {
            border: 2px solid blacka;
            width: 10%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .font-logo1 {
            font-size: 20px;
            color: rgb(254, 190, 152);
        }

        .info-res2 {
            border: 2px solid blacka;
            width: 85%;
            height: 100%;
            display: flex;
            justify-content: start;
            align-items: center;
            font-size: 20px;
            color: rgb(254, 190, 152);
        }

        .t-res-more {
            border: 2px solid yellowgareen;
            width: 37%;
            height: 20%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-more-res {
            border: 2px solid blaack;
            background-color: rgb(254, 190, 152);
            width: 70%;
            height: 60%;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            font-weight: bold;
        }

        @media screen and (min-width: 875px) and (max-width: 1200px) {
            .t-res1 {
                width: 80%;
            }

            .btn-more-res {
                width: 30%;
            }

            .info-res2 {
                font-size: 16px;
            }

            .info-res1 {
                width: 20%;
            }

            .t-res-title {
                font-size: 30px;
            }

            .t-res-more {
                width: 46%;
            }

            .btn-more-res {
                width: 71%;
            }
        }

        @media screen and (min-width: 701px) and (max-width: 875px) {
            .t-res1 {
                width: 80%;
            }

            .btn-more-res {
                width: 72%;
            }

            .info-res2 {
                font-size: 15px;
            }

            .info-res1 {
                width: 20%;
            }

            .t-res-title {
                font-size: 30px;
            }

            .t-res-more {
                width: 52%;
            }
        }

        @media screen and (min-width: 351px) and (max-width: 700px) {
            body {
                background-color: aqua;
            }

            .t-res {
                flex-direction: column;
                height: 700px;
            }

            .t-res1 {
                flex-direction: column;
                width: 92%;
            }

            .t-res-title {
                font-size: 32px;
            }

            .t-resp2 {
                width: 100%;
            }

            .t-resp1 {
                width: 100%;
            }

            .btn-more-res {
                width: 78%;
                height: 60%;
            }

            .info-res1 {
                width: 15%;
            }

            .info-res2 {
                font-size: 17px;
            }

            .t-res-more {
                justify-content: center;
            }

            .t-res1 {
                height: 95%;
            }

            .t-res-more {
                width: 45%;
            }
        }

        @media screen and (min-width: 201px) and (max-width: 350px) {
            .t-res {
                flex-direction: column;
                height: 600px;
            }

            .t-res1 {
                flex-direction: column;
                width: 100%;
            }

            .t-resp2 {
                width: 100%;
            }

            .t-resp1 {
                width: 100%;
            }

            .btn-more-res {
                width: 60%;
                height: 70%;
            }

            .info-res1 {
                width: 15%;
            }

            .t-res-more {
                justify-content: center;
            }

            .t-res1 {
                height: 95%;
            }

            .t-res-title {
                font-size: 22px;
            }

            .info-res2 {
                font-size: 15px;
            }

            .btn-more-res {
                font-size: 10px;
            }
        }
    </style>
</head>

<body>
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'login');
    mysqli_select_db($con, 'login');
    $select = "SELECT * FROM upload1;";

    $query = mysqli_query($con, $select);
    while ($row = mysqli_fetch_array($query)) {
        $ID = $row['ID'];
        $Emri = $row['Emri'];
        $Adresa = $row['Adresa'];
        $NrTel = $row['NrTel'];
        $Email = $row['Email'];
        $Website = $row['Website'];

    ?>

        <div class="t-res">
            <div class="t-res1">
                <div class="t-resp1">
                    <div class="t-res-title">
                        <span class="t-res-title1"><?php echo $Emri; ?></span>
                    </div>
                    <div class="info-res">
                        <div class="info-res1">
                            <i class="fa-solid fa-location-dot font-logo1"></i>
                        </div>
                        <div class="info-res2"><?php echo $Adresa; ?></div>
                    </div>
                    <div class="info-res">
                        <div class="info-res1">
                            <i class="fa-solid fa-phone font-logo1"></i>
                        </div>
                        <div class="info-res2">0<?php echo $NrTel; ?></div>
                    </div>
                    <div class="info-res">
                        <div class="info-res1">
                            <i class="fa-regular fa-envelope font-logo1"></i>
                        </div>
                        <div class="info-res2"><?php echo $Email; ?></div>
                    </div>
                    <div class="info-res">
                        <div class="info-res1">
                            <i class="fa-solid fa-globe font-logo1"></i>
                        </div>
                        <div class="info-res2"><?php echo $Website; ?></div>
                    </div>

                    <div class="t-res-more">
                        <a href="" class="btn-more-res">
                            <div>MË SHUMË</div>
                        </a>
                    </div>
                <?php  } ?>
                </div>
                <div class="t-resp2">
                    <div id="default-carousel" class="relative cls1" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative overflow-hidden imgcrs">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out imgcrs1" data-carousel-item>
                                <img src="../images/sheshi.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out imgcrs1" data-carousel-item>
                                <img src="../images/suhareka2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                            </div>
                            <div class="hidden duration-700 ease-in-out imgcrs1" data-carousel-item>
                                <img src="../images/suhareka2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                            </div>
                            <div class="hidden duration-700 ease-in-out imgcrs1" data-carousel-item>
                                <img src="../images/suhareka2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out imgcrs1" data-carousel-item>
                                <img src="../images/suhareka3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to=" 21"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>

</html>