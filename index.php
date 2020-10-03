<?php include_once "supplier.php";
      include_once "headerbefore.php";
?>



<div class="site-blocks-cover overlay" style="background-image: url(images/oo.gif);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">

      <div class="col-md-12">


        <div class="row justify-content-center mb-4">
          <div class="col-md-8 text-center">
            <h1 class="" data-aos="fade-up">Welcome To BENAA</h1>
            <p data-aos="fade-up" data-aos-delay="100">Order any building materials or equipments </p>
          </div>
        </div>

        <div class="form-search-wrap mb-3" data-aos="fade-up" data-aos-delay="200" id="sel">
          <form method="post">
            <div class="row align-items-center">

              <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                <div class="select-wrap">
                  <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                  <select class="form-control rounded" name="" id="">
                    <option value="">Choose Materials Category</option>

                    <?php
                    include_once "categoryclass.php";
                    $category = new  category();
                    $r = $category->Search();

                    while ($rows = mysqli_fetch_assoc($r)) {

                      ?>

                      <option value="<?php echo $rows['categories_Name'] ?>"><?php echo $rows['categories_Name'] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                <div class="select-wrap">
                  <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                  <select class="form-control rounded" name="" id="">
                    <option value="">Choose City</option>
                    <?Php

                    $supplier = new  supplier();
                    $r = $supplier->checksupmaterial();

                    while ($rows = mysqli_fetch_assoc($r)) {

                      ?>
                      <option value="<?php echo ($rows['supCity']) ?>"><?php echo ($rows['supCity']) ?></option>
                    <?php

                    }
                    ?>

                  </select>
                </div>
              </div>
              <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                <div class="select-wrap">
                  <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                  <select class="form-control rounded" name="" id="">
                    <option value="">Choose Area</option>
                    <?Php

                    $supplier = new  supplier();
                    $r = $supplier->checksupmaterial();

                    while ($rows = mysqli_fetch_assoc($r)) {

                      ?>
                      <option value="<?php echo ($rows['supArea']) ?>"><?php echo ($rows['supArea']) ?></option>
                    <?php

                    }
                    ?>

                  </select>
                </div>
              </div>
              <div class="col-lg-12 col-xl-2 ml-auto text-right">
                <input type="submit" class="btn btn-primary btn-block rounded" value="Search" name="btnsub_1">
              </div>

            </div>
          </form>
        </div>
        <div class="form-search-wrap mb-3" data-aos="fade-up" data-aos-delay="200" id="sell" style="display:none">
          <form method="post">
            <div class="row align-items-center">
              <!-- <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                    <input type="text" class="form-control rounded" placeholder="What are you looking for?">
                  </div>
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <div class="wrap-icon">
                      <span class="icon icon-room"></span>
                      <input type="text" class="form-control rounded" placeholder="Location">
                    </div>

                  </div> -->
              <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4" id="sel">
                <div class="select-wrap">
                  <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                  <select class="form-control rounded" name="" id="">

                    <option value="">Choose Equipment Category </option>
                    <?php
                    include_once "eqcategoryclass.php";
                    $equipcategory = new  equipcategory();
                    $r = $equipcategory->Search();

                    while ($rows = mysqli_fetch_assoc($r)) {

                      ?>

                      <option value="<?php echo $rows['eqcategories_Name'] ?>"><?php echo $rows['eqcategories_Name'] ?></option>
                    <?php
                    }
                    ?>

                  </select>
                </div>
              </div>
              <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3" id="sell">
                <div class="select-wrap">
                  <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                  <select class="form-control rounded" name="" id="">
                    <option value="">Choose City</option>
                    <?Php

                    $supplier = new  supplier();
                    $r = $supplier->checksupequipment();

                    while ($rows = mysqli_fetch_assoc($r)) {

                      ?>
                      <option value="<?php echo ($rows['supCity']) ?>"><?php echo ($rows['supCity']) ?></option>
                    <?php

                    }
                    ?>

                  </select>
                </div>
              </div>
              <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                <div class="select-wrap">
                  <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                  <select class="form-control rounded" name="" id="">
                    <option value="">Choose Area</option>
                    <?Php

                    $supplier = new  supplier();
                    $r = $supplier->checksupequipment();

                    while ($rows = mysqli_fetch_assoc($r)) {

                      ?>
                      <option value="<?php echo ($rows['supArea']) ?>"><?php echo ($rows['supArea']) ?></option>
                    <?php

                    }
                    ?>

                  </select>
                </div>
              </div>
              <div class="col-lg-12 col-xl-2 ml-auto text-right">
                <input type="submit" class="btn btn-primary btn-block rounded" value="Search" name="btnsub_2">
              </div>

            </div>
          </form>
        </div>

        <div class="row text-left trending-search" data-aos="fade-up" data-aos-delay="300">
          <div class="col-12">
            <h2 class="d-inline-block" style="font-size:20px">Choose your search:</h2>
            <button class="btn btn-primary" id="btn">Materials</button>
            <button class="btn btn-primary" id="btnn">Equipments</button>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light">
  <div class="container">


    <div class="row">
      <div class="col-12">
        <h2 class="h5 mb-4 text-black">Featured Ads</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12  block-13">
        <div class="owl-carousel nonloop-block-13">
          <?Php

          $supplier = new supplier();
          $r = $supplier->checkmaterial();

          while ($rows = mysqli_fetch_assoc($r)) {

            ?>

            <div class="d-block d-md-flex listing vertical">
              <a href="supdetails.php?supId=<?php echo $rows['supId'] ?>" class="img d-block" style="background-image: url('images/supimages/<?php echo $rows['supId']; ?>.jpg')"></a>
              <div class="lh-content">
                <span class="category"><?php echo $rows['supType'] ?></span>
                <h3><a href="supdetails.php?supId=<?php echo $rows['supId'] ?>"><?php echo $rows['supName'] ?></a></h3>
                <address><?php echo ($rows['supCity'] . "," . $rows['supArea'] . " ," . $rows['supStreet']); ?></address>

              </div>
            </div>
          <?php
          }
          ?>



        </div>
      </div>


    </div>
  </div>
</div>



<div class="site-section" data-aos="fade">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary">Popular Categories</h2>
        <p class="color-black-opacity-5">Lorem Ipsum Dolor Sit Amet</p>
      </div>
    </div>
    <div class="overlap-category mb-5">
      <div class="row align-items-stretch no-gutters">
        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
          <a href="#" class="popular-category h-100">
            <span class="icon"><span class="flaticon-car"></span></span>
            <span class="caption mb-2 d-block">Cars &amp; Vehicles</span>
            <span class="number">1,921</span>
          </a>
        </div>

        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
          <a href="#" class="popular-category h-100">
            <span class="icon"><span class="flaticon-closet"></span></span>
            <span class="caption mb-2 d-block">Furniture</span>
            <span class="number">2,339</span>
          </a>
        </div>

        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
          <a href="#" class="popular-category h-100">
            <span class="icon"><span class="flaticon-home"></span></span>
            <span class="caption mb-2 d-block">Real Estate</span>
            <span class="number">4,398</span>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
          <a href="#" class="popular-category h-100">
            <span class="icon"><span class="flaticon-open-book"></span></span>
            <span class="caption mb-2 d-block">Books &amp; Magazines</span>
            <span class="number">3,298</span>
          </a>
        </div>

        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
          <a href="#" class="popular-category h-100">
            <span class="icon"><span class="flaticon-tv"></span></span>
            <span class="caption mb-2 d-block">Electronics</span>
            <span class="number">`2,932</span>
          </a>
        </div>

        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
          <a href="#" class="popular-category h-100">
            <span class="icon"><span class="flaticon-pizza"></span></span>
            <span class="caption mb-2 d-block">Other</span>
            <span class="number">183</span>
          </a>
        </div>
      </div>
    </div>


  </div>
</div>


<div class="site-section bg-light">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-7 text-left border-primary">
        <h2 class="font-weight-light text-primary">Trending Suppliers</h2>
      </div>
    </div>
    <div class="row mt-6">
      <?Php

      $supplier = new supplier();
      $r = $supplier->checkequipment();

      while ($rows = mysqli_fetch_assoc($r)) {

        ?>

        <div class="col-lg-6">


          <div class="d-block d-md-flex listing">
            <a href="listings-single.html" class="img d-block" style="background-image: url('images/supeqimages/<?php echo $rows['supId']; ?>.jpg')"></a>
            <div class="lh-content">
              <span class="category"><?php echo $rows['supType'] ?></span>
              <a href="" class="bookmark"><span class="icon-building"></span></a>
              <h3><a href="listings-single.html"><?php echo $rows['supName'] ?></a></h3>
              <address><?php echo ($rows['supCity'] . "," . $rows['supArea'] . " ," . $rows['supStreet']); ?></address>

            </div>

          </div>


        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>

<div class="site-section bg-white">
  <div class="container">

    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary">Clients Opinion</h2>
      </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">

      <?Php
      include_once "client.php";


      $client = new client();
      $r = $client->checkcomment();

      while ($rows = mysqli_fetch_assoc($r)) {

        ?>
        <div>
          <div class="testimonial">
            <figure class="mb-4">
              <img src="images/comimags/<?php echo $rows['commentId'] ?>.jpg" alt="Image" class="img-fluid mb-3">
              <p><?php echo $rows['userName'] ?></p>
            </figure>
            <blockquote>
              <p>&ldquo; <?php echo $rows['commentContent'] ?>&rdquo;</p>
            </blockquote>
          </div>
        </div>

      <?php
      }
      ?>

    </div>
  </div>
</div>



<div class="site-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary">News</h2>
        <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
      </div>
    </div>
    <div class="row mb-3 align-items-stretch">

      <?Php
      include "news.php";
      $news = new news();
      $r = $news->Search();

      while ($rows = mysqli_fetch_assoc($r)) {

        ?>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="h-entry">
            <img src="images/newsimages/<?php echo $rows['newsId']; ?>.jpg" alt="Image" class="img-fluid rounded">
            <h2 class="font-size-regular"><a href="#" class="text-black"><?php echo $rows['newsTitle'] ?></a></h2>
            <div class="meta mb-3"><?php echo $rows['reference'] ?><span class="mx-1">&bullet;</span><?php echo $rows['newsDate'] ?><span class="mx-1">&bullet;</span> <a href="#">News</a></div>
            <p><?php echo $rows['newsContent'] ?></p>
          </div>
        </div>

      <?php
      }
      ?>
      <div class="col-12 text-center mt-4">
        <a href="#" class="btn btn-primary rounded py-2 px-4 text-white">View All Posts</a>
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
<script src="js/search.js"></script>

<script src="js/rangeslider.min.js"></script>

<script src="js/main.js"></script>

</body>

</html>