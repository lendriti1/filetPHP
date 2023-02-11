<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Insert to WEB</title>
    </head>
    <body>
    <div>
        <?php               
        $connect=mysqli_connect("localhost","root","","login");
        mysqli_select_db($connect,"login");

        $select = "SELECT * FROM upload order by rand() LIMIT 0,3";

        $query = mysqli_query($connect, $select);

        while($row=mysqli_fetch_array($query))
        {
	
	       $fileId = $row['id'];
            $fileName = $row['fileName'];
            $fileUpload = $row['fileUpload'];
            $description = substr($row['fileDescription'],0,100);
        ?>
        <h2>
            <a href="produkti.php?id=<?php echo $fileId;?>">
                <?php echo $fileName; ?>
            </a>
        </h2>
        <img src="file/<?php echo $fileUpload; ?>">
        <p>
            <?php echo $description; ?>
        </p>
        <?php } ?>
        </div>
    </body>
</html>