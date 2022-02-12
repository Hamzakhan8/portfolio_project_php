<?php
$conn=mysqli_connect("localhost","root","","portfolio","3308");


if (isset($_POST['submit'])) {

    $paragraph1=$_POST['para1'];
    $paragraph2=$_POST['para2'];
    $location=$_POST['location'];
    $phone=$_POST['number'];
    $email=$_POST['email'];

    $result=mysqli_query($conn,"INSERT INTO contact_2 (para1,para2,location,phone,email) VALUES ('$paragraph1','$paragraph2','$location','$phone','$email')");
 

if($result)
{

  echo"<script>alert('successfully inserted');</script>";
}
else{
echo"<script>alert('not inserted');</script>";

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
      <!-- Left side column. contains the logo and sidebar -->
     <?php
      include"include/slider.php";

     ?>

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
                <form role="form" action="" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label >paragraph 1</label>
                      <input type="text" style="height: 150px;" class="form-control"  name="para1" placeholder="Enter paragraph1">
                    </div>
                    <div class="form-group">
                      <label >paragraph 2</label>
                      <input type="text" style="height: 150px;"  class="form-control"  name="para2" placeholder="Enter paragraph2">
                    </div>
                    <div class="form-group">
                      <label >location</label>
                      <input type="text" class="form-control" name="location"  placeholder="Enter location">
                    </div>
                    <div class="form-group">
                      <label >phone number</label>
                      <input type="text" name="number" class="form-control" placeholder="Enter phone number">
                    </div>
                    <div class="form-group">
                      <label >Email address</label>
                      <input type="email" name="email" class="form-control"  placeholder="Enter email">
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
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Hover Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>para1</th>
                        <th>para2</th>
                        <th>location</th>
                        <th>phone</th>
                        <th>email</th>
                        <th>action</th>

                      </tr>
                    </thead>
                    <tbody>
                       <?php
                          include"include/connection.php";
                          $result=mysqli_query($conn," SELECT * from contact_2 ");
                          while ($row=mysqli_fetch_array($result)) {
                            # code...
                         
                        ?>
                      <tr>

                       
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['para1']; ?></td>
                        <td><?php echo $row['para2']; ?></td>
                        <td> <?php echo $row['location']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['email']; ?></td>

                       
                           <td><a href="delete.php?delete=<?php echo $row['ID'];?>">Delete</a></td>
                       
                          <?php }; ?>
                      </tr>
                    
                      <tr>
                       <th>ID</th>
                        <th>para1</th>
                        <th>para2</th>
                        <th>location</th>
                        <th>phone</th>
                        <th>email</th>
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
