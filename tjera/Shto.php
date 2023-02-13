  <?php session_start(); ?>
  <!DOCTYPE html>
  <html>

  <head>
    <title> Insertimi i produkteve</title>
  </head>

  <body>
    <form method="post" action="insertimi.php" enctype="multipart/form-data">

      Emri: <input type="text" name="fileName"><br><br>
      Teksi: <input type="text" name="fileName2"><br><br>

      Zgjedhni foton <br><br><input type="file" name="fileUpload"><br><br>


      <input type="submit" name="upload" value="Shtoni">
      <br>

      <input type="reset" name="cancel" value="Cancel">
    </form>

    <a href='insert.php'>Home</a>
  </body>

  </html>

  <?php
  $con = mysqli_connect('localhost', 'root', '', 'login');
  mysqli_select_db($con, 'login');

  if (isset($_POST['upload'])); {
    $fileName = $_POST['fileName'];
    $fileName2 = $_POST['fileName2'];
    $fileUpload = $_FILES['fileUpload']['name'];
    $fileUpload_tmp = $_FILES['fileUpload']['tmp_name'];

    if ($fileName == '' || $fileName2 == '' || $fileUpload == '') {
      echo "<script> alert('Ndonje input form eshte e zbrazet') </script>;";
    } else {

      $insert = "Select * from bussiness where Text = '$fileName2' or 
        Image = '$fileUpload' LIMIT 1";
      $query = mysqli_query($con, $insert);
      $exist = mysqli_fetch_assoc($query);

      if ($exist) {
        if ($exist['fileName'] === $fileName) { // me ba me if else nese asht ky file ne databaz
          echo "<script> alert('Ky file ekziston  ne databaze') </script>";
        }
      } else {
        move_uploaded_file($fileUpload_tmp, "file/$fileUpload");

        $uploadFile = "insert into bussiness (Name,Text,Image) 
               values('$fileName','$fileName2','$fileUpload');";

        if (mysqli_query($con, $uploadFile)) {
          echo "<script> alert('U shtua me sukses') ;</script>";
        } else {
          echo "<script> alert('Gabim, file nuk u shtua') ;</script>";
        }
      }
    }
  }
  ?>