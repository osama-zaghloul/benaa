<?php



include "../supplier.php";


if (isset($_POST['btn'])) {

  $supplier = new supplier();

  $supplier->setsupName($_POST['txtname']);
  $supplier->setsupType($_POST['txttype']);
  $supplier->setsupCity($_POST['txtcity']);
  $supplier->setsupArea($_POST['txtarea']);
  $supplier->setsupStreet($_POST['txtstreet']);
  
  $msg = $supplier->Add();
  $dir ="../images/supimages/";
  $image=$_FILES['file']['name'];
  $temp_name=$_FILES['file']['tmp_name'];
  $img = $_POST['txtId'];
  if($image!=""){
      $fdir=$dir.$img.".jpg";
      move_uploaded_file($temp_name,$fdir);
  }
    // echo ("<script>window.open('index.php')</script>");
    header('location:index.php');
    // echo "<script>window.location.raplace('index.php')</script>";
    // echo $msg;
    // echo "<script>window.location.href = index.php </script>";
}

?>
<?php
include "Header.php";
?>




    <div class="col-lg-12">
        <div class="tab-content">

            <div id="inbox" class="tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">

                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true">

                    <div class="site-section bg-light">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-7 mb-5" data-aos="fade">

                                    <div>
                                        <h2 class="mb-5 text-black">Add Supplier</h2>
                                    </div>

                                    <form action="#" class="p-5 bg-white" method="post" name="vform" enctype="multipart/form-data">



                                       



                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label class="text-black" for="subject">Supplier Name</label>
                                                <input type="text" id="subject" class="form-control" name="txtname">
                                                <div id="userName_error" class="val_error"></div>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label class="text-black" for="subject">Supplier Type</label>
                                                <input type="text" id="subject" class="form-control" name="txttype">
                                                                                                <div id="userName_error" class="val_error"></div>

                                        </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="subject"> City</label>
                                        <input type="text" id="subject" class="form-control" name="txtcity">
                                        <div id="password_error" class="val_error"></div>

                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="subject">Area</label>
                                        <input type="text" id="subject" class="form-control" name="txtarea">
                                        <div id="confirmPassword_error" class="val_error"></div>

                                    </div>

                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="subject">Street</label>
                                        <input type="text" id="subject" class="form-control" name="txtstreet">
                                        <div id="confirmPassword_error" class="val_error"></div>

                                    </div>

                                </div>

                                 <div class="row form-group">
                                    <div class="col-md-6">
                                        <label class="text-black" for="subject">Upload photo</label>
                                        
                                        <input type="file" id="subject" class="form-control" name="file">
                                        
                                        <div id="confirmPassword_error" class="val_error"></div>

                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-black" for="subject">Sup Id</label>
                                        
                                        
                                        <input type="text" id="subjectt" class="form-control" name="txtId">
                                        
                                        <div id="confirmPassword_error" class="val_error"></div>

                                    </div>


                                </div>
                                 <!-- <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="subject">Supplier Id</label>
                                        <input type="text" id="subject" class="form-control" name="txtId">
                                        <div id="confirmPassword_error" class="val_error"></div>

                                    </div>

                                </div> -->




                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="submit" value="Submit" class="btn btn-primary py-2 px-4 text-white" id="btn" name="btn">
                                    </div>
                                </div>


</form>


</div>
</div>

</div>
</div>
</table>
</div>
</div>
</div>




<?php
include "Footer.php";

?>








</body>

</html>