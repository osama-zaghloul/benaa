<?php


include "client.php";
include "ViaNettSMS.php";
require_once "src/PHPMailer.php";
require_once "src/Exception.php";
require_once "src/SMTP.php";
require_once "vendor/autoload.php";
session_start();



if (isset($_POST['btnforget'])) {
    $client = new client();

    $client->setuserName($_POST['txtemailuser']);
    $client->setEmail($_POST['txtemailuser']);
    $us = $_POST['txtemailuser'];

    $r = $client->checkuser();

    if ($rows = mysqli_fetch_assoc($r)) {
        $phone = $rows['clientPhone'];
        $Email = $rows['Email'];
        $name = $rows['userName'];
        $type = $_POST['forget'];

        if ( $type== "sms") {

            $cod = rand(11111, 99999);
           $_SESSION['code']=$cod;
           $_SESSION['phone']=$rows['clientPhone'];
           include_once "../sms/sms.php";
           header('location:confirm.php');
        } else if ($type == "Email") {
            $mail = new  PHPMailer\PHPMailer\PHPMailer();

            $mail->IsSMTP();
            //$mail->SMTPDebug = 1;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587
            $mail->IsHTML(true);

            $mail->Username = "yourmobileapp2017@gmail.com";
            $mail->Password = "okok2017";

            $mail->setFrom('yourmobileapp2017@gmail.com', 'NTI');
            $mail->addAddress($Email, $name);


            $mail->Subject = 'Forget Password Cairo UNV';
            $mail->Body = 'visit this link http://http://localhost/benaaweb/updatepw.php?user=' . $us;

            if (!$mail->send()) {
                echo "Opps! For some technical reasons we couldn't able to sent you an email. We will shortly get back to you with download details.";
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                header('location:updatepw.php');

                echo "Message has been sent";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>DirectoryAds &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar container py-0 " role="banner">

            <!-- <div class="container"> -->
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="index.php" class="text-white mb-0"> Benaa </a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="listings.php">Ads</a></li>
                            <li class="has-children">
                                <a href="about.php">About</a>
                                <ul class="dropdown">
                                    <li><a href="#">The Company</a></li>
                                    <li><a href="#">The Leadership</a></li>
                                    <li><a href="#">Philosophy</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li class="mr-5"><a href="contact.html">Contact</a></li>

                            <li class="ml-xl-3 login"><a href="login.php"><span class="border-left pl-xl-4"></span>Log In</a></li>

                            <li><a href="register.php" class="cta"><span class="bg-primary text-white rounded">Register</span></a></li>
                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
                    <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
                </div>

            </div>
            <!-- </div> -->

        </header>


        <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/cc.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                        <div class="row justify-content-center mt-5">
                            <div class="col-md-8 text-center">
                                <h1>Forget password</h1>
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

                        <h2 class="mb-5 text-black">Forget password</h2>

                        <form action="#" class="p-5 bg-white" method="post" name="vform">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox1" value="sms" name="forget">
                                <label class="form-check-label" for="inlineCheckbox1">SMS</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox2" value="Email" name="forget">
                                <label class="form-check-label" for="inlineCheckbox2">Email</label>
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="email">Email or User Name</label>
                                <input type="text" id="email" class="form-control" name="txtemailuser">

                            </div>
                            <div class="col-12">
                                <div> </div>
                            </div>



                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Send" class="btn btn-primary py-2 px-4 text-white" name="btnforget" id="btnl">


                                </div>
                            </div>


                        </form>

                    </div>

                </div>
            </div>
        </div>



        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="footer-heading mb-4">About</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rerum unde possimus molestias dolorem fuga, illo quis fugiat!</p>
                            </div>

                            <div class="col-md-3">
                                <h2 class="footer-heading mb-4">Navigations</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h2 class="footer-heading mb-4">Follow Us</h2>
                                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <form action="#" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Search products..." aria-label="Enter Email" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
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
    <script src="loginvalidation.js"></script>



</body>

</html>