<?php
$conn=mysqli_connect("localhost","root","","portfolio","3308");


if (isset($_POST['submit'])) {

    $insta_url=$_POST['instagram_url'];
    $facebook_url=$_POST['facebook_url'];
    $twitter_url=$_POST['twitter_url'];
   

    $result=mysqli_query($conn,"INSERT INTO social_url (insta_url,facebook_url,twitter_url) VALUES ('$insta_url','$facebook_url','$twitter_url')");
 

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
                      <label >instagram_url</label>
                      <input type="text"  class="form-control"  name="instagram_url" placeholder="Enter instagram_url">
                    </div>
                    <div class="form-group">
                      <label >twitter_url</label>
                      <input type="text"   class="form-control"  name="twitter_url" placeholder="Enter twitter_url">
                    </div>
                    <div class="form-group">
                      <label >facebook_url</label>
                      <input type="text" class="form-control" name="facebook_url"  placeholder="Enter facebook_url">
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
                       
                        <th>instagram_url</th>
                        <th>facebook_url</th>
                        <th>twitter_url</th>
                        <th>action</th>
                        

                      </tr>
                    </thead>
                    <tbody>
                       <?php
                          include"include/connection.php";
                          $result=mysqli_query($conn," SELECT * from social_url ");
                          while ($row=mysqli_fetch_array($result)) {
                            # code...
                         
                        ?>
                      <tr>

                       
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['insta_url']; ?></td>
                        <td><?php echo $row['twitter_url']; ?></td>
                        <td> <?php echo $row['facebook_url']; ?></td>
                       

                       
                           <td><a href="delete.php?delete=<?php echo $row['ID'];?>">Delete</a></td>
                       
                          <?php }; ?>
                      </tr>
                    
                      <tr>
                          <th>ID</th>
                       
                        <th>instagram_url</th>
                        <th>facebook_url</th>
                        <th>twitter_url</th>
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
