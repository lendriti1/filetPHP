<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Insertimi i produkteve</title>
    </head>
    
    <body>
        <!--enctype="multipart/form-data"-është një lloj kodimi që lejon që filet të dërgohen përmes një metode POST. Thjesht, pa këtë kodim file nuk mund të dërgohen përmes metodes POST. Nëse dëshironi të lejoni një përdorues të ngarkojë një file përmes një forme, duhet ta përdorni këtë enctype.-->
        <form method="post" action="insertimi.php" enctype="multipart/form-data">
           Pershkrimi: <input type="text" name="fileName"><br><br>
             Teksti ne mes <input type="text" name="fileName2"><br><br>
            Fotoja:<input type="file" name="fileUpload"><br><br>
            href: <input type="text" name="fileName3"><br><br>
         
            <input type="submit" name="upload" value="Insert">
            <input type="reset" name="cancel" value="Cancel">
        </form>
        
        <a href='insert.php'>Home</a>
    </body>
</html>
<?php
    $con=mysqli_connect('localhost','root','','login');
        mysqli_select_db($con,'login');
    
    if(isset($_POST['upload']))
    {
        $fileName=$_POST['fileName'];
        $fileName2=$_POST['fileName2'];
        $fileName3=$_POST['fileName3'];
        $fileUpload=$_FILES['fileUpload']['name'];
        $fileUpload_tmp=$_FILES['fileUpload']['tmp_name'];
        
        
        
        //$ _FILES ["file"] ["tmp_name"] përmban kopjen aktuale të përmbajtjes së file tuaj në server ndërsa. $ _FILES ["file"] ["name"] përmban emrin e file që keni ngarkuar nga kompjuteri.
        
        if($fileName=='' || $fileName2=='' || $fileUpload=='' || $fileName3=='' )
        {
            echo"<script>alert('Plotesoni te gjitha fushat');</script>";
        }
        else
        {   
          //Per te mos u ruajtur file i njejt dy ose me shume here.
          $insert="SELECT * FROM bussiness WHERE Text='$fileName2' OR Image='$fileUpload' 
          LIMIT 1";
            $query=mysqli_query($con,$insert);
            
            $exist=mysqli_fetch_assoc($query);
            
            if($exist)
            {
                if($exist['fileUpload']===$fileUpload)
                {
                    echo "<script>alert('Ky file ekziston ne databaze')</script>";
                }
            }
            else
            {
           move_uploaded_file($fileUpload_tmp,"file/$fileUpload");
            
            $uploadFile="INSERT INTO bussiness(Pershkrimi,Teksti,FotojaSrc,hrefLinku)
        VALUES('$fileName','$fileName2','$fileUpload','$fileName3');";
            
                if(mysqli_query($con,$uploadFile))      
                {
                    echo "<script>alert('File is Upload');</script>";
                }
            }
        }
    }
        
        
    
?>