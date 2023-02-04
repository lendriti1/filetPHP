<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
  </script>
    <style>
      
.day-night{
    border:1px solid black;
    width: 100%;
    height:600px;
    display:flex;
    justify-content:center;
    /* align-items:center; */
    flex-direction: column;

}
.day-foto{

    width: 100%;
    height: 80%;
     display:flex;
    justify-content:center;
    align-items: center;
}
.day-foto img{
  
    width: 50%;
    height: 450px;
    border-radius: 30px; 
}
.button-day{
 
    width: 100%;
    height: 20%;
    display: flex;
    justify-content: space-evenly;
    align-items:center;

}
.button-day1{

    width: 70%;
    height: 100%;
    
    display: flex;
    justify-content: space-evenly;
    align-items:center;

}
.change1{
    background-color: brown;
    color:white;
}
.change2{
    background-color: #FF9433;
   color:white;
}
.change3{
    background-color: #FF9433;
   color:white;
}
.change4{
    background-color: #FF9433;
       color:white;     
}
.button1{

    width: 20%;
    height:70%;
    display: flex;
    justify-content: space-evenly;
    align-items:center;
    font-size:30px;

    border-radius: 20px;
    font-weight: bold;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

@media screen and (max-width:800px) {
    .day-foto img{
     
    width: 90%;
    height: 95%;
}
.button-day1{
    width: 100%;
}

.button-day{
    width: 100%;
    height: 50%;
}
.button-day1{

    width: 100%;
    height: 100%;
    flex-wrap: wrap;
}
.button1{

    width: 150px;
    height:80px;
     font-size: 20px;
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
          $(".fotojaPerNdrrim").attr('src','../images/ylli.png');
           $(".change1").css({
                   'color':'white',
                   'background':'brown',
                   'transition':'1s'
				});
          $(".change2").css({
                   'color':'white',
                   'background':'#FF9433',
                     'transition':'1s'
				});
        $(".change3").css({
                   'color':'white',
                   'background':'#FF9433',
                     'transition':'1s'
				});
        $(".change4").css({
                   'color':'white',
                   'background':'#FF9433',
                     'transition':'1s'
				});
        
           });

              $('.change2').click(function() {
              $(".fotojaPerNdrrim").attr('src', "../images/Suhareka.jpg");

                 $(".change2").css({
                   'color':'white',
                   'background':'brown',
                   'transition':'1s'
				});
          $(".change1").css({
                   'color':'white',
                   'background':'#FF9433',
                     'transition':'1s'
				});
        $(".change4").css({
                   'color':'white',
                   'background':'#FF9433',
                     'transition':'1s'
				});
        $(".change3").css({
                   'color':'white',
                   'background':'#FF9433',
                     'transition':'1s'
				});
              
              
              
            });

              $('.change3').click(function() {
              $(".fotojaPerNdrrim").attr('src', "../images/suhareka1.jpg");

                $(".change3").css({
                   'color':'white',
                   'background':'brown',
                   'transition':'1s'
				});
            $(".change1").css({
                   'color':'white',
                   'background':'#FF9433',
                     'transition':'1s'
				});
        $(".change2").css({
                   'color':'white',
                   'background':'#FF9433',
                     'transition':'1s'
				});
        $(".change4").css({
                   'color':'white',
                   'background':'#FF9433',
                     'transition':'1s'
				});
            });

              $('.change4').click(function() {
              $(".fotojaPerNdrrim").attr('src', "../images/suhareka2.jpg");
              $(".change4").css({
                   'color':'white',
                   'background':'brown',
                   'transition':'1s'
				});

                  $(".change1").css({
                   'color':'white',
                   'background':'#FF9433',
                     'transition':'1s'
				});
        $(".change2").css({
                   'color':'white',
                   'background':'#FF9433',
                     'transition':'1s'
				});
        $(".change3").css({
                   'color':'white',
                   'background':'#FF9433',
                     'transition':'1s'
				});
            });
           


          });
        </script>
</body>
</html>