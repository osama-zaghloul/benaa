<?php



include "../phoneclass.php";


if (isset($_POST['btn'])) {

    $phone = new phone();


    $phone->setsupId($_POST['txtid']);

    $phone->setsupPhone($_POST['txtphone']);



    $msg = $phone->Updatephone($_GET['supId']);
    header('location:supphone.php');
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
                                    <h2 class="mb-5 text-black">Add Sup phone</h2>
                                </div>

                                <form action="#" class="p-5 bg-white" method="post" name="vform" enctype="multipart/form-data">




                                    <?php
                                    include_once "../phoneclass.php";
                                    $phone = new  phone();
                                    $r = $phone->Search();

                                    if ($rs = mysqli_fetch_assoc($r)) {

                                        ?>






                                        <div class="row form-group">
                                            
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label class="text-black" for="subject">Supplier Phone</label>
                                                <input type="text" value="<?php echo ($rs['supPhone']); ?>" id="subject" class="form-control" name="txtphone">
                                                <div id="userName_error" class="val_error"></div>

                                            </div>
                                        </div>

                                    <?Php
                                    }
                                    ?>


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