<?php
session_start();
include_once "supplier.php";
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
    <link rel="stylesheet" href="css/card.css">
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
                    <h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">DirectoryAds</a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="listings.html">Ads</a></li>
                            <li class="has-children">
                                <a href="about.html">About</a>
                                <ul class="dropdown">
                                    <li><a href="#">The Company</a></li>
                                    <li><a href="#">The Leadership</a></li>
                                    <li><a href="#">Philosophy</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li class="mr-5"><a href="contact.html">Contact</a></li>

                            <li class="ml-xl-3 login"><a href="login.html"><span class="border-left pl-xl-4"></span>Log In</a></li>

                            <li><a href="register.html" class="cta"><span class="bg-primary text-white rounded">Register</span></a></li>
                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
                    <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
                </div>

            </div>
            <!-- </div> -->

        </header>


        <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                        <div class="row justify-content-center mt-5">
                            <div class="col-md-8 text-center">
                                <h1>Contact Us</h1>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>

    <header id="site-header">
        <div class="container">
            <h1> <strong> Products </strong>[ <em><a href="indexa.php" target="_blank">Go To Home Page</a></em> ]</h1>
        </div>
    </header>

    <div class="container">

        <section id="cart">
            <?Php

            $supplier = new  supplier();
            $r = $supplier->checksupequipments($_GET['supId']);

            while ($rows = mysqli_fetch_assoc($r)) {
                
                ?>
                <article class="product">
                    <header>
                        <a class="remove">
                            <img src="images/products/<?php echo $rows['equipId'] ?>.jpg" alt="">

                            <h3><?php echo $rows['eqcategories_Name'] ?></h3>
                        </a>
                    </header>
                    <form method="post">

                        <div class="content">

                            <h1 style="color:#2d7ec5"><?php echo $rows['equipName'] ?></h1>

                            <?php echo $rows['equipDescription'] ?>

                            <div title="You have selected this product to be shipped in the color yellow." style="top: 0" class="color yellow"></div>
                            <!-- //<input type="submit" style="top: 43px; background:blue; color:white; width:120px; height:50; font-size:16px; cursor:pointer " class="type small "   value="Add to card" name="btnadd"  >  -->

                        </div>


                        <footer class="content">


                            <input type="number" class="qt" min="0" style="width:100px; height:40px; text-align:center; " name="qnt">



                            <h2 class="full-price" style="background:#2d7ec5">
                                00.00
                            </h2>

                            <h2 class="price">
                                <?php echo $rows['equipPrice'] ?> / <?php echo $rows['equipUnit'] ?>
                            </h2>
                        </footer>

                </article>

            <?php

            }
            ?>
            <?Php

            // $supplier = new  supplier();
            // $r = $supplier->checksupmaterials($_GET['supId']);

            // if ($rows = mysqli_fetch_assoc($r)) {
            //     $proId = $rows['product_Id'];
            //     $userName=$_SESSION['users'];
            //     $supId=$_GET['supId'];
            //     $quantity=$_POST['qnt'];
            //     if(isset($_POST['btnadd'])){
            //         include_once "ordertempclass.php";
            //         $ordertemp= new orderTemp();
            //         $ordertemp->Addordertemp($proId,$userName,$supId,$quantity);
            //     }}
            ?>
        </section>

    </div>

    <footer id="site-footer">
        <div class="container clearfix">

            <div class="left">
                <h2 class="subtotal"></h2><span>Subtotal: </span>€

                <!-- <h3 class="shipping">Shipping: <span>0.00</span>€</h3> -->
            </div>

            <div class="right">
                <h1 class="total"> <span>0.00</span>€</h1>
                <h1>Total: €</h1>


                <input type="submit" name="btncheck" value="Checkout" class="btn " style="background:#2d7ec5; ">
                </form>
                <?php
                
                
                if (isset($_POST['btncheck'])) {
                    // $_SESSION['quantity']=$_POST['qnt'];
                    // $_SESSION['proId']=$_POST['qnt'];

                    $supplier = new  supplier();
                    $r = $supplier->checksupequipments($_GET['supId']);

                    while ($rows = mysqli_fetch_assoc($r)) {
                        $proId = $rows['equipId'];
                        $userName = $_SESSION['users'];
                        $supId = $_GET['supId'];
                        $quantity = $_POST['qnt'];
                        include_once "ordertempclass.php";
                        $ordertemp = new orderTemp();
                        $ordertemp->Addordertemp($proId, $userName, $supId, $quantity);
                    }
                }






                ?>
            </div>

        </div>
    </footer>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Frequently Ask Question</h2>
                    <p class="color-black-opacity-5">Lorem Ipsum Dolor Sit Amet</p>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="border p-3 rounded mb-2">
                        <a data-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapse-1" class="accordion-item h5 d-block mb-0">How to list my item?</a>

                        <div class="collapse" id="collapse-1">
                            <div class="pt-2">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti esse voluptates deleniti, ratione, suscipit quam cumque beatae, enim mollitia voluptatum velit excepturi possimus odio dolore molestiae officiis aspernatur provident praesentium.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border p-3 rounded mb-2">
                        <a data-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false" aria-controls="collapse-4" class="accordion-item h5 d-block mb-0">Is this available in my country?</a>

                        <div class="collapse" id="collapse-4">
                            <div class="pt-2">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti esse voluptates deleniti, ratione, suscipit quam cumque beatae, enim mollitia voluptatum velit excepturi possimus odio dolore molestiae officiis aspernatur provident praesentium.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border p-3 rounded mb-2">
                        <a data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2" class="accordion-item h5 d-block mb-0">Is it free?</a>

                        <div class="collapse" id="collapse-2">
                            <div class="pt-2">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti esse voluptates deleniti, ratione, suscipit quam cumque beatae, enim mollitia voluptatum velit excepturi possimus odio dolore molestiae officiis aspernatur provident praesentium.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border p-3 rounded mb-2">
                        <a data-toggle="collapse" href="#collapse-3" role="button" aria-expanded="false" aria-controls="collapse-3" class="accordion-item h5 d-block mb-0">How the system works?</a>

                        <div class="collapse" id="collapse-3">
                            <div class="pt-2">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti esse voluptates deleniti, ratione, suscipit quam cumque beatae, enim mollitia voluptatum velit excepturi possimus odio dolore molestiae officiis aspernatur provident praesentium.</p>
                            </div>
                        </div>
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
    <script src="card2.js"></script>
    <script src="js/main.js"></script>

</body>

</html>