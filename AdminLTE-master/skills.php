<?php
$conn=mysqli_connect("localhost","root","","portfolio","3308");


if (isset($_POST['submit'])) {

    $HTML=$_POST['lol'];
    $CSS=$_POST['CSS'];
    $PHP=$_POST['PHP'];
    $BOOTSTRAP=$_POST['BOOTSTRAP'];
    $JAVASCRIPT=$_POST['JAVASCRIPT'];

    $result=mysqli_query($conn,"INSERT INTO skill (html,css,php,bootstrap,javascript) VALUES ('$HTML','$CSS','$PHP','$BOOTSTRAP','$JAVASCRIPT')");
 

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
          <div class="row  justify-content-center align-items-center" >
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" style="width: 50%;" action="" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                       <div class="form-group">
                 
                    <div class="form-group">
                      <label >HTML</label>
                      <input type="number" name="lol" class="form-control"  placeholder="HTML">
                    </div>
                   <div class="form-group">
                      <label >CSS</label>
                      <input type="number" name="CSS" class="form-control"  placeholder="CSS">
                    </div>
                    <div class="form-group">
                      <label >PHP</label>
                      <input type="number" name="PHP" class="form-control"  placeholder="PHP">
                    </div>
                    <div class="form-group">
                      <label >BOOTSTRAP</label>
                      <input type="number" name="BOOTSTRAP" class="form-control"  placeholder="BOOTSTRAP">
                    </div>
                    <div class="form-group">
                      <label >JAVA SCRIPT</label>
                      <input type="number" name="JAVASCRIPT" class="form-control"  placeholder="JAVASCRIPT">
                    </div>
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <input type="submit" value="submit" name="submit" class=" px-4 btn btn-primary">
                  </div>
                </form>
              </div>

                <section class="content">
          <div class="row" >
            <div class="col-xs-12">
              <div class="box" style="width: 100% !important;">
                <div class="box-header">
                  <h3 class="box-title">Hover Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>HTML</th>
                        <th>CSS</th>
                        <th>PHP</th>
                        <th>BOOTSTRAP</th>
                        <th>JAVASCRIPT</th>
                      

                        <th>Delete</th>
                        <th>Update</th>


                        



                      </tr>
                    </thead>
                    <tbody>
                       <?php
                          include"include/connection.php";
                          $result=mysqli_query($conn," SELECT * from skill ");
                          while ($row=mysqli_fetch_array($result)) {
                            # code...
                         
                        ?>
                      <tr>

                       
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['html']; ?></td>
                        <td><?php echo $row['css']; ?></td>
                        <td> <?php echo $row['php']; ?></td>
                        <td><?php echo $row['bootstrap']; ?></td>
                        <td><?php echo $row['javascript']; ?></td>

                       <div class="tools">
                       
                        
                      
                           <td><a class="btn btn-danger" href="delete.php?delete=<?php echo $row['ID'];?>&table=skill&filename=skills.php"><i class="fa fa-trash-o ">Delete</i></a>

                            </td>
                            <td>
                            <a class="btn btn-success" href="skills_update.php?update=<?php echo $row['ID'] ?>"><i class="fa fa-edit "> Update</i></a></td>

                       
                          <?php }; ?>
                          </div>
                      </tr>
                    
                      <tr>
                        <th>ID</th>
                        <th>HTML</th>
                        <th>CSS</th>
                        <th>PHP</th>
                        <th>BOOTSTRAP</th>
                        <th>JAVASCRIPT</th>
                      
                        <th>Delete</th>
                        <th>Update</th>

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
