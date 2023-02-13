<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="t.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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