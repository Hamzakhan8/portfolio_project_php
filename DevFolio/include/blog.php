<section id="blog" class="blog-mf sect-pt4 route" >

      <div class="container">

        <div class="row">

          <div class="col-sm-12">

            <div class="title-box text-center">

              <h3 class="title-a">
                Blog
              </h3>

              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>

              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <?php
                          $conn=mysqli_connect('localhost','root','','portfolio','3308');
                          $result=mysqli_query($conn," SELECT * from blog  ");
                          

                          if ($result ) {
                            # code...
                          
                          while ($row=mysqli_fetch_array($result)) {
                            # code...
                         
                        ?>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.php"><img src="../AdminLTE-master/<?php echo $row['img']; ?>" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Travel</h6>
                  </div>
                </div>
                  
                <h3 class="card-title"><?php echo $row['paragraph2']; ?></p></a></h3>
                <p class="card-description">
                 <?php echo $row['paragraph1']; ?>
                </p>
                 
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="../AdminLTE-master/<?php echo $row['img2']; ?>" alt="" class="avatar rounded-circle">
                    <span class="author">M<?php echo $row['name'];?></span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
              </div>

            </div>
            
          </div>
           <?php }};?>
          </div>

        </div>

      </div>

                
    </section>