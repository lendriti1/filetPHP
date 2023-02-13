<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
  </script>
  <style>
    .day-night {
      border: 1px solid black;
      width: 100%;
      height: 600px;
      display: flex;
      justify-content: center;
      /* align-items:center; */
      flex-direction: column;

    }

    .day-foto {

      width: 100%;
      height: 80%;
      display: flex;
      justify-content: center;
      align-items: center;

    }

    .day-foto img {
      box-shadow: 0px 0px 10px black;
      width: 50%;
      height: 450px;
      border-radius: 20px;
      transition: 0.5s;

    }

    .button-day {
      border: 1px solid black;
      width: 100%;
      height: 20%;
      display: flex;
      justify-content: space-evenly;
      align-items: center;

    }

    .button-day1 {

      width: 55%;
      height: 100%;
      display: flex;
      justify-content: space-evenly;
      align-items: center;


    }

    .change1 {

      color: #3c3d4e;
      background-color: #FF9433;


    }

    .change2 {

      color: #3c3d4e;
    }

    .change3 {

      color: #3c3d4e;
    }

    .change4 {

      color: #3c3d4e;
    }

    button {
      --b: 3px;
      /* border thickness */
      --s: .15em;
      /* size of the corner */
      --c: #FF9433;

      padding: calc(.05em + var(--s)) calc(.3em + var(--s));
      color: var(--c);
      --_p: var(--s);
      background:
        conic-gradient(from 90deg at var(--b) var(--b), #0000 90deg, var(--c) 0) var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
      transition: .3s linear, color 0s, background-color 0s;
      outline: var(--b) solid #0000;
      outline-offset: .2em;
      transition: 0.5s;
    }

    button:hover,
    button:focus-visible {
      --_p: 0px;
      outline-color: var(--c);
      outline-offset: .05em;
    }

    button:active {
      background: #FF9433;
      color: #fff;
      transition: 0.5s
    }


    .button1 {
      width: 15%;
      height: 50%;
      font-family: system-ui, sans-serif;
      font-weight: bold;
      font-size: 18px;
      cursor: pointer;
      border: none;
      margin: .1em;

    }


    @media screen and (max-width:700px) {
      .day-foto img {

        width: 90%;
        height: 95%;
      }

      .button-day1 {
        width: 100%;
      }

      .button-day {
        width: 100%;
        height: 50%;
      }

      .button-day1 {

        width: 100%;
        height: 100%;
        flex-wrap: wrap;
      }

      .button1 {

        width: 37%;
        height: 27%;
        font-size: 20px;

      }
    }

    @media screen and (min-width:701px) and (max-width:1201px) {




      .button-day1 {

        width: 80%;
        height: 100%;
        flex-wrap: wrap;
      }

      .button1 {
        width: 15%;
        height: 44%;
        font-size: 16px;
      }

    }
  </style>
</head>

<body>
  <div class="day-night">
    <div class="day-foto">
      <img class="fotojaPerNdrrim" src="../images/Suhareka.jpg" alt="">
    </div>
    <div class="button-day">
      <div class="button-day1">
        <button class="button1 change1">
          <p>SPRING</p>
        </button>
        <button class="button1 change2">
          <p>SUMMER</p>
        </button>
        <button class="button1 change3">
          <p>AUTUMN</p>
        </button>
        <button class="button1 change4">
          <p>WINTER</p>
        </button>

      </div>

    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.change1').click(function() {

        $(".fotojaPerNdrrim").attr({
          'src': '../images/Suhareka.jpg'
        });
        $(".change1").css({

          'background-color': '#FF9433'
        });
        $(".change2").css({
          'background-color': 'transparent',

          'transition': '1s'
        });
        $(".change3").css({

          'background-color': 'transparent',
          'transition': '1s'
        });
        $(".change4").css({
          'background-color': 'transparent',

          'transition': '1s'
        });

      });

      $('.change2').click(function() {


        $(".fotojaPerNdrrim").attr('src', "../images/ylli.png");
        $(".change2").css({
          'background-color': '#FF9433',

          'transition': '1s'
        });
        $(".change1").css({
          'background-color': 'transparent',

          'transition': '1s'
        });
        $(".change4").css({
          'background-color': 'transparent',

          'transition': '1s'
        });
        $(".change3").css({
          'background-color': 'transparent',

          'transition': '1s'
        });



      });

      $('.change3').click(function() {
        $(".fotojaPerNdrrim").attr('src', "../images/suhareka1.jpg");

        $(".change3").css({

          'background-color': '#FF9433',
          'transition': '1s'
        });
        $(".change1").css({
          'background-color': 'transparent',

          'transition': '1s'
        });
        $(".change2").css({
          'background-color': 'transparent',

          'transition': '1s'
        });
        $(".change4").css({
          'background-color': 'transparent',

          'transition': '1s'
        });
      });

      $('.change4').click(function() {
        $(".fotojaPerNdrrim").attr('src', "../images/suhareka2.jpg");
        $(".change4").css({

          'background-color': '#FF9433',
          'transition': '1s'
        });

        $(".change1").css({

          'background-color': 'transparent',
          'transition': '1s'
        });
        $(".change2").css({

          'background-color': 'transparent',
          'transition': '1s'
        });
        $(".change3").css({
          'background-color': 'transparent',

          'transition': '1s'
        });
      });



    });
  </script>
</body>

</html>