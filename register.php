
<?php
include_once "headerbefore.php";

?>


    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/bb.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>Sign Up</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5" data-aos="fade">

            <h2 class="mb-5 text-black">Register</h2>

            <form action="#" class="p-5 bg-white" method="post" name="vform">

              <div class="row form-group">

                <div class="col-md-6">
                  <label class="text-black" for="email">First Name</label>
                  <input type="text" id="text" class="form-control" name="txtfirname">
                  <div id="firstName_error" class="val_error"></div>

                </div>

                <div class="col-md-6">
                  <label class="text-black" for="email">Last Name</label>
                  <input type="text" id="text" class="form-control" name="txtlasname">
                  <div id="lastName_error" class="val_error"></div>

                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Phone</label>
                  <input type="phone" id="subject" class="form-control" name="numphone">
                  <div id="phone_error" class="val_error"></div>
                </div>
              </div>



              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">User Name</label>
                  <input type="text" id="subject" class="form-control" name="txtusername">
                  <div id="userName_error" class="val_error"></div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Email</label>
                  <input type="email" id="subject" class="form-control" name="txtemail">
                  <div id="Email_error" class="val_error"></div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject"> Password</label>
                  <input type="password" id="subject" class="form-control" name="numpassword">
                  <div id="password_error" class="val_error"></div>

                </div>

              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Confirm Password</label>
                  <input type="password" id="subject" class="form-control" name="confpassword">
                  <div id="confirmPassword_error" class="val_error"></div>

                </div>

              </div>

              <div class="row form-group">
                <div class="col-12">
                  <p>Have an account? <a href="login.php">Log In</a></p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Sign In" class="btn btn-primary py-2 px-4 text-white" id="btn" name="btnregister">
                </div>
              </div>


            </form>

            <?php



            include "client.php";


            if (isset($_POST['btnregister'])) {

              $client = new client();

              $client->setfirstName($_POST['txtfirname']);
              $client->setlastName($_POST['txtlasname']);
              $client->setuserName($_POST['txtusername']);
              $client->setEmail($_POST['txtemail']);
              $client->setpassword($_POST['numpassword']);
              $client->setclientPhone($_POST['numphone']);

              $msg = $client->Add();
              if (strpos($msg, 'Email'))
                echo "<h4 style='color:red;text-align:center;'>This email is exist</h4>";
              else if (strpos($msg, 'Phone'))
                echo "<h4 style='color:red;text-align:center;'>this Phone is exist</h4>";
              else if (strpos($msg, 'userName'))
                echo "<h4 style='color:red;text-align:center;'>this userName is exist</h4>";
              else
                echo $msg;
            }

            ?>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="newsletter bg-primary py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h2>Newsletter</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col-md-6">

          <form class="d-flex">
            <input type="text" class="form-control" placeholder="Email">
            <input type="submit" value="Subscribe" class="btn btn-white">
          </form>
        </div>
      </div>
    </div>
  </div>


  <?php
  include_once "footer.php";
  ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>

  <script src="js/main.js"></script>
  <script src="js/validation.js"></script>

</body>

</html>