<?php

$conn=mysqli_connect("localhost","root","","portfolio","3308");

$data=$_REQUEST['update'];
 

        

if (isset($_POST['submit'])) {

  $html=$_POST['lol'];
  $css=$_POST['CSS'];
  $php=$_POST['PHP'];
  $bootstrap=$_POST['BOOTSTRAP'];
  $javascript=$_POST['JAVASCRIPT'];


  $result=mysqli_query($conn,"UPDATE skill SET html='$html', css='$css' ,php='$php',bootstrap='$bootstrap',javascript='$javascript' WHERE ID=$data");

  if ($result) {


header('location:skills.php');

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
                 
                    <div class="form-group">
                      <label >HTML</label>
                      <input type="number" name="lol" value="<?php echo $row['html']; ?>" class="form-control"  placeholder="HTML">
                    </div>
                   <div class="form-group">
                      <label >CSS</label>
                      <input type="number" name="CSS" value="<?php echo $row['css']; ?>" class="form-control"  placeholder="CSS">
                    </div>
                    <div class="form-group">
                      <label >PHP</label>
                      <input type="number" name="PHP" value="<?php echo $row['php']; ?>" class="form-control"  placeholder="PHP">
                    </div>
                    <div class="form-group">
                      <label >BOOTSTRAP</label>
                      <input type="number" name="BOOTSTRAP" value="<?php echo $row['bootstrap']; ?>" class="form-control"  placeholder="BOOTSTRAP">
                    </div>
                    <div class="form-group">
                      <label >JAVA SCRIPT</label>
                      <input type="number" name="JAVASCRIPT" value="<?php echo $row['javascript']; ?>" class="form-control"  placeholder="JAVASCRIPT">
                    </div>
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <input type="submit" value="update" name="submit" class=" px-4 btn btn-primary">
                  </div>
                </form>
            <?php }; ?>
</body>
</html>