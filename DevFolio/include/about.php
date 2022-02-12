
<section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row" >
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                                               <?php
                          $conn=mysqli_connect('localhost','root','','portfolio','3308');
                          $result=mysqli_query($conn," SELECT * from skill , about ");
                          

                          if ($result ) {
                            # code...
                          
                          while ($row=mysqli_fetch_array($result)) {
                            # code...
                         
                        ?>
                        
                        <img src="../AdminLTE-master/<?php echo $row['img']; ?>" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        
                     

                       
                        

                       
                         
                       
                         
                        <p><span class="title-s">Name: </span> <span><?php echo $row['name']; ?></span></p>
                        <p><span class="title-s">Profile: </span> <span><?php echo $row['profile']; ?></span></p>
                        <p><span class="title-s">Email: </span> <span><?php echo $row['email']; ?></span></p>
                        <p><span class="title-s">Phone: </span> <span><?php echo $row['phone']; ?></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    <span>HTML</span> <span class="pull-right"><?php echo $row['html']; ?>%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: <?php echo $row['html']; ?>%;" aria-valuenow="<?php echo $row['html']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>CSS3</span> <span class="pull-right"><?php echo $row['css']; ?>%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: <?php echo $row['css']; ?>%" aria-valuenow="<?php echo $row['css']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>PHP</span> <span class="pull-right"> <td> <?php echo $row['php']; ?></td>%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width:<?php echo $row['php']; ?>%" aria-valuenow=" <?php echo $row['php']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span> BOOTSTRAP</span> <span class="pull-right"><?php echo $row['bootstrap']; ?>%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: <?php echo $row['bootstrap']; ?>%" aria-valuenow="<?php echo $row['bootstrap']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>JAVASCRIPT</span> <span class="pull-right"><?php echo $row['javascript']; ?>%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: <?php echo $row['javascript']; ?>%" aria-valuenow="<?php echo $row['javascript']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                    <?php echo $row['para1']; ?>
                    </p>
                    <p class="lead">
                   <?php echo $row['para2']; ?>
                    </p>
                    <p class="lead">
                      <?php echo $row['para3']; ?>
                    </p>

                     <?php }}; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>