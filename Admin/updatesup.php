<?php



include "../supplier.php";


if (isset($_POST['btnupdate'])) {

    $supplier = new supplier();

    $supplier->setsupName($_POST['utxtname']);
    $supplier->setsupType($_POST['utxttype']);
    $supplier->setsupCity($_POST['utxtcity']);
    $supplier->setsupArea($_POST['utxtarea']);
    $supplier->setsupStreet($_POST['utxtstreet']);
    $supId = $_GET['supId'];
    $msg = $supplier->Updatesup($supId);
    $dir = "../images/supimages/";
    $image = $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name'];
    $img = $_GET['supId'];
    if ($image != "") {
        $fdir = $dir . $img . ".jpg";
        move_uploaded_file($temp_name, $fdir);
    }
    header('location:index.php');
    
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
                                    <h2 class="mb-5 text-black">Update Supplier</h2>
                                </div>

                                <form action="#" class="p-5 bg-white" method="post" name="vform" enctype="multipart/form-data">


<?php


            $supplier = new  supplier();
            $r = $supplier-> Searchsup($_GET['supId']);

            while ($rs = mysqli_fetch_assoc($r)) {
                
                

?>




                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="text-black" for="subject">Supplier Name</label>
                                            <input type="text" value="<?php echo ($rs['supName']); ?>"  id="subject" class="form-control" name="utxtname">
                                            <div id="userName_error" class="val_error"></div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="text-black" for="subject">Supplier Type</label>
                                            <input type="text"  value="<?php echo ($rs['supType']); ?>"  id="subject" class="form-control" name="utxttype">
                                            <div id="userName_error" class="val_error"></div>

                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="text-black" for="subject"> City</label>
                                            <input type="text" value="<?php echo ($rs['supCity']); ?>"  id="subject" class="form-control" name="utxtcity">
                                            <div id="password_error" class="val_error"></div>

                                        </div>

                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="text-black" for="subject">Area</label>
                                            <input type="text" value="<?php echo ($rs['supArea']); ?>"  id="subject" class="form-control" name="utxtarea">
                                            <div id="confirmPassword_error" class="val_error"></div>

                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="text-black" for="subject">Street</label>
                                            <input type="text"  value="<?php echo ($rs['supStreet']); ?>"  id="subject" class="form-control" name="utxtstreet">
                                            <div id="confirmPassword_error" class="val_error"></div>

                                        </div>

                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label class="text-black" for="subject">Upload photo</label>

                                            <input type="file" id="subject" class="form-control" name="file">

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
                                            <input type="submit" value="Update" class="btn btn-primary py-2 px-4 text-white" id="btn" name="btnupdate">
                                        </div>
                                    </div>

<?php
            }
?>
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