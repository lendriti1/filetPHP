<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
<style>
  .xhebrailat-part{
    border: 3px solid none;
    width: 100%;
    height: 450px;
    display: flex;
    
    
}
.xhebrailat-p1{
    border:5px solid none;
    width: 30%;
    height: 100%;
    display:flex;
    justify-content:center;
    align-items:center;
    background-color: #FF9433;
}
.xhebrailat-p1 img{
    width: 80%;
    height: 80%;
}
.xhebrailat-p2{
        background-color: rgb(250, 242, 234);
    width: 0;
height: 0;
border-style: solid;
border-width: 450px 300px 0px 0px ;
border-color: #ff9433 transparent  transparent transparent;
}
.xhebrailat-p3{
    border:5px solid none;
    background-color: rgb(250, 242, 234);
    width: 50%;
    height: 100%;
}
.xhebralilat-p33{
    width: 100%;
    border: 2px solid none;
    height: 20%;
    text-align: center;
    font-size: 40px;
    font-family: 'Mochiy Pop One', sans-serif;
}
.xhebralilat-p34{
    width: 100%;
    border: 2px solid blue;
    height: 60%;
    font-size: 20px;   
    display: flex;
    justify-content: center;

}
.xhebralilat-p345{
    width: 80%;
    border: 2px solid purple;
    height: 80%;
     
}
.btn-more{
    border: 2px solid red;
     width: 100%;
      height: 20%;
      display: flex;
      justify-content: end;
      align-items:flex-end;
      font-size: 18px;
     
}
.btn-more1{
    border: 2px solid bluse;
    color:black;
     width: 31%;
      height: 70%;
 
       transition: 0.5s;
       margin:0px 10px 10px 0px;
}
.btn-more1:hover{

    
      transition: 0.5s;
    
}
@media screen and (max-width:900px) {
    
    .xhebrailat-p2{
        display: none;
    }
    .xhebrailat-part{
        display: flex;
        flex-direction: column;
        height: auto;
    }
     .xhebrailat-p1{
        width: 100%;
    }
    .xhebrailat-p3{
        width: 100%;
    }
    .xhebralilat-p33{

    font-size: 20px;
    }
    .xhebralilat-p34{
 display: flex;
    justify-content: center;
    font-size: 20px;
    }
    .btn-more{
      width: 100%;
      font-size:18px;
 
    }
    .btn-more1{
      width: 35%;
           height:50%;
           margin:10px 10px 10px 0px;
          
    }
}
</style>
  </head>
<body>
  <div class="xhebrailat-part">
    <div class="xhebrailat-p1">
<img src="../images/xhebrailat1.png" alt="">
    </div>
    <div class="xhebrailat-p2">

    </div>
    <div class="xhebrailat-p3">
<div class="xhebralilat-p33">
  <p>XHEBRAILAT</p>
</div>
<div class="xhebralilat-p34">
  <div class="xhebralilat-p345">
  <p>Klubi fan XHEBRAILAT përfaqësöjnë të gjitha sportet e qytetit tone duke bërë tifo me gjithë energjinë që  kanë cdo here në cdo ndeshje. Ata janë krenaria e Therandes.</p>
  </div>
  </div>
<div class='btn-more'>
  <button class="btn-more1">MË SHUMË</button>
  
</div>
    </div>
  </div>
  
</body>
</html>