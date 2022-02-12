<?php

$conn=mysqli_connect("localhost","root","","portfolio","3308");

$data=$_REQUEST['update'];
 

        

if (isset($_POST['submit'])) {

   $img=$_POST['img'];
    $paragraph1=$_POST['paragraph1'];
    $paragraph2=$_POST['paragraph2'];
    $img2=$_POST['img2'];


  $result=mysqli_query($conn,"UPDATE blog SET img='$img', paragraph1='$paragraph1' ,paragraph2='$paragraph2',img2='$img2', WHERE ID=$data");

  if ($result) {


header('location:blog.php');

}
}                  
                            
                         
                       
     

    
?>

                     

<!DOCTYPE html>
<html>
<head>

  <title></title>
   <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

</head>
<body>
 
<form role="form" style="width: 50%;" action="" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                       <div class="form-group">
                          <?php
                                
$conn=mysqli_connect("localhost","root","","portfolio","3308");




      
                          $result=mysqli_query($conn," SELECT * from skill ");
                          while ($row=mysqli_fetch_array($result)) {
                            # code...
                         
                        ?>
                 
                <form role="form" style="width: 50%;" action="" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                       <div class="form-group">
                 
                    <div class="form-group">
                      <label >MAIN_IMAGE</label>
                      <input type="file" name="img" class="form-control"  placeholder="MAIN_IMAGE">
                    </div>
                   <div class="form-group">
                      <label >PARA1</label>
                      <input type="text" name="paragraph1" class="form-control"  placeholder="PARA1">
                    </div>
                    <div class="form-group">
                      <label >PARA2</label>
                      <input type="text" name="paragraph2" class="form-control"  placeholder="PARA2">
                    </div>
                    <div class="form-group">
                      <label >LOGO</label>
                      <input type="file" name="img2" class="form-control"  placeholder="LOGO">
                    </div>
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <input type="submit" value="submit" name="submit" class=" px-4 btn btn-primary">
                  </div>
                </form>
              </div>
                    
               <!-- /.box-body -->

                 
                </form>
            <?php }; ?>
</body>
</html>