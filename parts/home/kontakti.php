<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- linqet per google fonts te "web,fb,email tkomunes"   -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300&family=Kanit&display=swap" rel="stylesheet">
  <style>
    .kont1 {
      width: 100%;
      height: auto;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 40px 0px 40px 0px;
    }

    .kontakti {

      width: 90%;
      height: 50%;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-evenly;
    }

    .kontakti1 {
      border: 3px solid none;
      width: 33%;
      height: 100%;

    }

    .kontakti11 {
      border: 5px solid none;
      width: 100%;
      height: 40%;
      display: flex;
      flex-direction: row;
    }

    .kontakti12 {
      border: 5px solid none;
      width: 80%;
      height: 100%;

    }

    .kontakti13 {
      border: 5px solid none;
      width: 20%;
      height: 105px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .kontakti13 img {
      width: 80%;
      height: 60%;
      margin: 0px 0px 10px 0px;

    }

    .kontakti132 {
      border: 5px solid none;
      width: 20%;
      height: 105px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .kontakti132 img {
      width: 65%;
      height: 60%;
      margin-top: 4px;

    }

    .kontakti122 {
      border: 1px solid none;
      width: 100%;
      height: 50px;
      display: flex;
      justify-content: end;

    }

    .kontakti122 p {
      font-size: 25px;
      color: #FF9433;
      font-family: Verdana, Geneva, Tahoma, sans-serif;



    }

    .kontakti123 {
      border: 1px solid none;
      width: 100%;
      height: 50%;
      display: flex;
      justify-content: end;

    }

    .kontakti123 p {
      font-size: 14px;
      color: rgb(143, 143, 143);
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      margin-left: 10px;
    }

    @media screen and (max-width:600px) {

      .kontakti {
        flex-direction: column;
        width: 100%;
      }

      .kontakti1 {
        width: 100%;
      }

      .kontakti13 {
        height: 105px;
        width: 30%;
      }

      .kontakti12 {
        width: 70%;
      }

      .kontakti122 {
        height: 50px;
        font-size: 22px;
        padding-top: 10px;
      }

      .kontakti123 p {
        text-align: right;
        font-size: 12px;
      }

      .kontakti13 img {
        height: 56%;
        width: 56%;
      }

      .img1 {
        height: 100px;
        width: 80px;
        margin-right: 20px;
      }

      .kontakti132 {
        height: 105px;
        width: 30%;
      }

      .kontakti122 p {
        margin-right: 20px;
      }

      .kontakti132 img {
        height: 50%;
        width: 50%;
        margin-top: 20px;
      }
    }

    @media screen and (min-width:601px) and (max-width:1110px) {
      .kontakti13 img {
        height: 66%;
        width: 100%;
        margin-bottom: 10px;
      }

      .kontakti122 p {
        margin-right: 20px;
      }

      .kontakti {
        flex-direction: column;
        width: 100%;
      }

      .kontakti1 {
        width: 50%;

      }
    }
  </style>
</head>

<body>
  <div class="kont1">
    <div class="kontakti">
      <div class="kontakti1">

        <div class="kontakti11">
          <div class="kontakti12">
            <div class="kontakti122">
              <p>WEB-FAQJA</p>
            </div>
            <div class="kontakti123">
              <p>Faqja zyrtare e Komunes së Therandës</p>
            </div>
          </div>
          <div class="kontakti13">
            <img src="../images/wweb.png" alt="">
          </div>
        </div>
      </div>

      <div class="kontakti1">

        <div class="kontakti11">
          <div class="kontakti12">
            <div class="kontakti122">
              <p>FACEBOOK</p>
            </div>
            <div class="kontakti123">
              <p>Facebooki zyrtar i komunes së Therandës</p>
            </div>
          </div>

          <div class="kontakti13">
            <img src="../images/facebook-icon.png" alt="">

          </div>
        </div>
      </div>

      <div class="kontakti1">

        <div class="kontakti11">
          <div class="kontakti12">
            <div class="kontakti122">
              <p>E-MAIL</p>
            </div>
            <div class="kontakti123">
              <p>Emaili zyrtar i komunes së Therandës</p>
            </div>
          </div>
          <div class="kontakti13">

            <img src="../images/apple.png">

          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>