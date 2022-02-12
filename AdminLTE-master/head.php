<?php
$conn=mysqli_connect("localhost","root","","portfolio","3308");


if (isset($_POST['submit'])) {

    $logo="uploaded_image/".time().$_FILES['input_logo']['name'];
    $bgimage="uploaded_image/".time().$_FILES['input_image']['name'];
    $title=$_POST['title'];
    $title2=$_POST['title2'];
    
  if(move_uploaded_file($_FILES['input_logo']['tmp_name'],$logo) && move_uploaded_file($_FILES['input_image']['tmp_name'], $bgimage)){
    
   
  $result=mysqli_query($conn,"INSERT INTO header(logo,bg_image,h1,h2) VALUES('$logo','$bgimage','$title','$title2')");
  
echo "<script>alert('inserted data successfully')</script>";

 }else

 {
  echo "<script>alert('cannot insert data')</script>";
 }


}



?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | General Form Elements</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

     <?php
      include "include/header.php";

     ?>


     <?php

      include "include/slider.php";
     ?>
      <!-- Left side column. contains the logo and sidebar -->
   

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            General Form Elements
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="" enctype="multipart/form-data" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label >logo file</label>
                      <input type="file"  class="form-control"  name="input_logo" value="Enter logo">
                    </div>
                    <div class="form-group">
                      <label >background image</label>
                      <input type="file"   class="form-control"  name="input_image" value="Enter your image">
                    </div>
                    <div class="form-group">
                      <label >enter title</label>
                      <input type="text" class="form-control" name="title"  placeholder="Enter your title">
                    </div>
                    <div class="form-group">
                      <label >enter title 2</label>
                      <input type="text" name="title2" class="form-control" placeholder="Enter title2">
                    </div>
                  
                   
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <input type="submit" value="submit" name="submit" class=" px-4 btn btn-primary">
                  </div>
                </form>
              </div>

               <section class="content">
          <div class="row">
            <div class="col-xs-12">
              
              <div class="box" >
                <div class="box-header">
                  <h3 class="box-title">Hover Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body ">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>logo</th>
                        <th>bg_image</th>
                        <th>title</th>
                        <th>title2</th>
                   
                        <th>action</th>

                      </tr>
                    </thead>
                    <tbody>
                       <?php
                          include"include/connection.php";
                          $result=mysqli_query($conn," SELECT * from header ");
                          while ($row=mysqli_fetch_array($result)) {
                            # code...
                         
                        ?>
                      <tr>

                       
                        <td><?php echo $row['ID']; ?></td>
                      
                        <td><img style="height: 100px;width: 80px;" src="<?php echo $row['logo']; ?>"></td>
                        <td><img style="height: 100px;width: 80px;" src="<?php echo $row['bg_image']; ?>"></td>

                        <td> <?php echo $row['h1']; ?></td>
                        <td><?php echo $row['h2']; ?></td>
                      

                       
                           <td><a href="delete.php?delete=<?php echo $row['ID']?>&table=header&filename=head.php">Delete</a>
                            <a href="delete.php?update=<?php echo $row['ID'];?>">update</a>
                           </td>
                       
                          <?php }; ?>
                      </tr>
                    
                      <tr>
                       <th>ID</th>
                        <th>logo</th>
                        <th>bg_image</th>
                        <th>title</th>
                        <th>title2</th>
                   
                        <th>action</th>

                      
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.box -->

              <!-- Form Element sizes -->
               <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php
      include"include/footer.php";
     ?>

  <!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
  </body>
</html>
