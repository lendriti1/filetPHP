<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>

.b-main {
	border: 1px solid black;
	height: auto;
	width: 100%;
	background-color: whitesmoke;
}

.b-part {
	border: 4px solid blue;
	height: 50%;
	width: 100%;
	background-image: url("../images/b1.jpg");
	background-repeat: no-repeat;
	background-size: contain;
}

.b-part1 {
	border: 1px solid red;
	height: 100%;
	width: 100%;
}

.b-part2 {
	border: 1px solid aqua;
	height: 50%;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
}

.b-part2 p {
	font-size: 45px;
}

.b-p3 {
	display: flex;
	justify-content: end;
}

.bp3 {
	border: 1px solid rebeccapurple;
	display: flex;
	justify-content: center;
	width: 80%;
}

.b-part3 {
	border: 1px solid darkgreen;
	height: 80%;
	width: 60%;
}

.b-part3 p {
	font-size: 25px;
	font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.bs-part1 {
	border: 5px solid yellow;
	height: auto;
	width: 100%;
	display: flex;
	justify-content: center;
}

.bs-p1 {
	border: 5px solid yellowgreen;
	height: auto;
	width: 95%;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
}

.bs-p2 {
	
	height: 320px;
	width: 400px;
	float: left;
	display: flex;
	justify-content: center;
	align-items: center;
	margin:10px 0px 5px 0px;
}

.bs-p2 p {
	position: absolute;
	font-size: 30px;
	font-weight: bold;
	color: white;
	background-color: rgba(0, 0, 0, 0.6);
	border-radius: 5px;
}

.bs-p2 img {
	width: 90%;
	height: 95%;
	border-radius: 4px;
}

@media screen and (max-width:500px) {
    
	.bs-p2 {
		height: 180px;
		width: 47%;
	}

	.bs-p2 p {
		font-size: 12px;
	
		
	}

	.bs-p2 img {
		width: 94%;
		height: 95%;
	}

	.bp3 {
		width: 100%;
	}

	.b-part3 {
		width: 100%;
	}
}

@media screen and (min-width:501px) and (max-width:918px) {
    
	.bs-p2 {
		height: 300px;
		width: 50%;
	}

	.bp3 {
		width: 80%;
	}

	.b-part3 {
		width: 70%;
	}
}
  </style>  
</head>

<body>
  <div class="b-main">
  <div class="b-part">
<div class="b-part1">
  <div class="b-part2">
<p>Bizneset ne Therandë</p>
  </div>

  <div class="b-p3">
    <div class="bp3">
  <div class="b-part3">
  
<p>Gjeni të gjitha informacionet thelbësore të çdo biznesi në Therandë.
Ku ndodhen, cilat janë shërbimet e tyre dhe detajet kontaktuese gjithashtu
</p>
  </div>
  </div>
    </div>
</div>
</div>

<div class="bs-part1">
	
  <div class="bs-p1">
<?php
     $con =mysqli_connect('localhost','root','','login');     
	 mysqli_select_db($con,'login');
         
     $select = "SELECT * FROM business1;";
                
      $query = mysqli_query($con, $select);
                
       while($row = mysqli_fetch_array($query))
        {
          $fileName = $row['Teksti'];
           $Foto = $row['FotoSrc'];
            ?>

    <div class="bs-p2">
		
  <p>	<a href="https://www.google.com" style="text-decoration:none;color:white"><?php echo $fileName; ?></p>
		 	</a>
      <img src="../images/<?php echo $Foto; ?>" alt="">
	 
    </div>	

     <?php  } ?>
 
  </div>

</div>

  </div>
</body>

</html>
<!-- fix: te bs-ps 	ose me zgovelu font sizen ose me hek in theranda -->