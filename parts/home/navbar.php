<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Projekti</title>
  <link rel="stylesheet" href="test1.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />





  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300&family=Kanit&display=swap" rel="stylesheet">


  <style>
    .icon1 {
      border: 5px solid none;
      height: 100px;
      display: flex;
      justify-content: left;
      align-items: center;
      padding-left: 100px;

    }

    .icon1 img {
      border: 5px solid none;
      height: 90px;
      display: flex;
      justify-content: left;


    }


    .btn1 {
      width: 120px;
      height: 40px;
      background: pink;
      border-radius: 20px;
      font-size: 18px;
      font-weight: bold;
      margin-top: 5px;
    }

    .home {
      border: 5px solid red;
      width: 100%;
      height: 800px;
    }


    .nav-font {
      text-decoration: none;
      color: white;
      font-family: 'Crimson Pro', serif;
      font-family: 'Kanit', sans-serif;

      letter-spacing: 0.1px;

    }

    .nav-font2 {
      text-decoration: none;
      color: white;
      font-family: 'Crimson Pro', serif;
      font-family: 'Kanit', sans-serif;

      letter-spacing: 0.1px;


    }

    @media screen and (max-width:600px) {
      .icon1 {
        padding-left: 10px;
      }

      .icon1 img {
        padding-left: 0px;
      }

      .nav-font2 {

        font-size: 20px;
        letter-spacing: 0.1px;

      }
    }
  </style>
</head>

<body>
  <section class="nav-bar">

    <nav class="relative flex justify-between items-center  " style="height:90px;background-color: #FF9934;">
      <a class="text-3xl font-bold leading-none" href="#" style="text-decoration:none">
        <div class="icon1">
          <img src="../images/logo.jpg" style="height:70px;width:160px">
        </div>
      </a>
      <div class="lg:hidden">
        <div class="navbar-burger flex items-center  p-3 pr-6" style="font-size:30px;cursor:pointer">
          <i class="fa-solid fa-bars" style="color:black"></i>
        </div>

      </div>

      <ul class="hidden relative top-1/2  left-1/3 transform -translate-y-1/2
      -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6  " style="height:90px">
        <li><a class="text-2xl nav-font" href="../pages/1-index.php">Ballina</a></li>
        <li><a class="text-2xl nav-font" href="../pages/RrethNesh.php">Rreth Nesh</a></li>
        <li><a class="text-2xl nav-font" href="../pages/Fshatrat.php">Fshatrat</a></li>
        <li><a class="text-2xl nav-font" href="../pages/tourism.php">Turizmi</a></li>
        <li><a class="text-2xl nav-font" href="../pages/business.php">Bizneset</a></li>

        <li>
          <a href="../pages/Linjat.php">
            <img src="../images/bus.png" alt="" style="width: 70px;height:30px;margin-top: 5px;">
          </a>
        </li>




      </ul>
    </nav>
    <div class="navbar-menu relative z-50 hidden">
      <div class="navbar-backdrop fixed inset-0 bg-gray-900 opacity-50"></div>
      <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-3/4 max-w-sm py-6 px-6  border-r overflow-y-auto" style="background-color: #FF9934; ">
        <div class="flex items-center mb-8">
          <a class="mr-auto text-3xl font-bold leading-none" href="#">
          </a>
          <div class="navbar-close" style='color:black;'>
            <svg class="h-6 w-6 text-black-900 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="font-size:40px">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </div>
        </div>
        <div>
          <ul>
            <li class="mb-1">
              <a class="block p-4 text-3xl font-semibold nav-font2" href="../pages/1-index.php">Ballina</a>
            </li>
            <li class="mb-1">
              <a class="block p-4 text-3xl font-semibold nav-font2" href="../pages/RrethNesh.php">Rreth Nesh</a>
            </li>
            <li class="mb-1">
              <a class="block p-4 text-3xl font-semibold nav-font2" href="../pages/Fshatrat.php">Fshatrat</a>
            </li>
            <li class="mb-1">
              <a class="block p-4 text-3xl font-semibold nav-font2" href="../pages/tourism.php">Turizmi</a>
            </li>
            <li class="mb-1">
              <a class="block p-4 text-3xl font-semibold nav-font2" href="../pages/business.php">Bizneset</a>
            </li>



            <li class="mb-1">
              <a class="block p-4 text-4xl font-semibold  " href="../pages/Linjat.php" style="text-decoration:none;font-family: 'Racing Sans One';
           color:white;font-size:25px">
                <img src="../images/bus.png" alt="" style="width: 70px;height:30px;margin-top: 5px;">
              </a>

            </li>

          </ul>
        </div>
        <div>

        </div>
      </nav>
    </div>

  </section>
  <script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
      // open
      const burger = document.querySelectorAll('.navbar-burger');
      const menu = document.querySelectorAll('.navbar-menu');

      if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
          burger[i].addEventListener('click', function() {
            for (var j = 0; j < menu.length; j++) {
              menu[j].classList.toggle('hidden');
            }
          });
        }
      }

      // close
      const close = document.querySelectorAll('.navbar-close');
      const backdrop = document.querySelectorAll('.navbar-backdrop');

      if (close.length) {
        for (var i = 0; i < close.length; i++) {
          close[i].addEventListener('click', function() {
            for (var j = 0; j < menu.length; j++) {
              menu[j].classList.toggle('hidden');
            }
          });
        }
      }

      if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
          backdrop[i].addEventListener('click', function() {
            for (var j = 0; j < menu.length; j++) {
              menu[j].classList.toggle('hidden');
            }
          });
        }
      }
    });
  </script>


</body>

</html>