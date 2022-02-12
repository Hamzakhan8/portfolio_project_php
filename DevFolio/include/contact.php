 <?php
$conn=mysqli_connect("localhost","root","","portfolio","3308");

if (isset($_POST['submit'])) {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $massage=$_POST['message'];

    $result= mysqli_query($conn,"INSERT into contact_1 (name,email,subject,massage) values ('$name','$email','$subject','$massage') ");
    if ($result) {

      echo "<script>alert('your data is successfully added');</script>"; 
       }

else {
 echo "<script>alert('your data is not entered ');</script>"; 

}
}

?>



<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)" >
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <div>
                   <form action="" method="POST" role="form"   class="needs-validation"  >
                         <div class="row">
                          <div class="col-md-12 mb-1">
                            <div class="form-group">
                                  <input type="text" placeholder="username" name="name" class="form-control">
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                    <div class="valid-feedback">Valid.</div>
                                    
                         
                            </div>
                          </div>
                          <div class="col-md-12 mb-1">
                            <div class="form-group">
                                  <input type="email" placeholder="email" name="email" class="form-control"><br>
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                    <div class="valid-feedback">Valid.</div>
                         
                            </div>
                          </div>
                           <div class="col-md-12 mb-1">
                            <div class="form-group">
                                  <input type="text" placeholder="subject" name="subject" class="form-control"><br>
                                  <div class="invalid-feedback">Please fill out this field.</div>
                                    <div class="valid-feedback">Valid.</div>
                         
                            </div>
                          </div>
                          <div class="col-md-12 mb-1" >
                            <div class="form-group">
                              <textarea class="form-control" style="  height: 150px !important;" name="message" placeholder="Message"></textarea>
                              <div class="invalid-feedback">Please fill out this field.</div>
                                    <div class="valid-feedback">Valid.</div>
                           
                            </div>
                          </div>
                     
                          <div class="col-md-12 text-center">
                            <input  type="submit" value="submit" name="submit" class="button button-a button-big button-rouded">
                          </div>
                        </div>
                      </form>




                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                     <?php
                        $conn=mysqli_connect("localhost","root","","portfolio","3308");
                          $result=mysqli_query($conn," SELECT * from contact_2 ");
                          while ($row=mysqli_fetch_array($result)) {
                            # code...
                         
                        ?>
                    <div class="more-info">
                      <p class="lead">
                      <?php echo $row['para1']; ?>
                      </p>
                      <p class="lead">
                        <?php echo $row['para2']; ?>                      </p>
                      <ul class="list-ico">
                        <li><span class="ion-ios-location"></span> <?php echo $row['location']; ?></li>
                        <li><span class="ion-ios-telephone"></span><?php echo $row['phone']; ?></li>
                        <li><span class="ion-email"></span> <?php echo $row['email']; ?></li>
                      </ul>
                    </div>

                  <?php }; ?>
                    <div class="socials">


                      <ul>

                        <?php
                          $conn=mysqli_connect("localhost","root","","portfolio","3308");
                         $result=mysqli_query($conn," SELECT * from social_url ");
                          while ($row=mysqli_fetch_array($result)) {
                            
                        ?>
                        <li><a href="<?php echo $row['facebook_url']; ?>"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                        <li><a href="<?php echo $row['insta_url']; ?>"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                        <li><a href="<?php echo $row['twitter_url']; ?>"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                        <?php }; ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

    <script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>