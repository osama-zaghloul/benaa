 <?php
    include "Header.php";
    ?>

 <form method="post">

     <div class="col-lg-12">
         <div class="tab-content">

             <div id="inbox" class="tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
                  <td><a href="addsup.php" class="btn btn-custon-rounded-four btn-primary">Add supplier</a></td>

                 <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true">

                     <thead>
                         <tr>

                             <th data-field="id">Sup Id</th>
                             <th data-field="name">Sup Name</th>
                             <th data-field="email">Sup Type</th>
                             <th data-field="phone">Sup City</th>
                             <th data-field="company">Sup Area</th>
                             <th data-field="b">Sup Street</th>
                             <th data-field="img">sup Image</th>
                             <th data-field="up">Update</th>
                             <th data-field="de">Delete</th>



                         </tr>
                     </thead>
                     <tbody>

                         <?Php
                            include_once "../supplier.php";
                            $supplier = new  supplier();
                            $r = $supplier->Search();

                            while ($rs = mysqli_fetch_assoc($r)) {

                                ?>

                             <tr class="new-email">

                                 <td> <label name="txtsup<?php echo ($rs['supId']); ?>"> <?php echo ($rs['supId']); ?> </label> </td>
                                 <td><?php echo ($rs['supName']); ?></td>
                                 <td><?php echo ($rs['supType']); ?></td>
                                 <td><?php echo ($rs['supCity']); ?></td>

                                 <td><?php echo ($rs['supArea']); ?></td>
                                 <td><?php echo ($rs['supStreet']); ?></td>
                                 <td><img width="50px" height="50px" src="../images/supimages/<?php echo ($rs['supId']); ?>.jpg"></td>
                                 <td><a href="updatesup.php?supId=<?php echo ($rs['supId']); ?>" class="btn btn-custon-rounded-four btn-primary">Update</a></td>
                                 <td><a href="deletesup.php?supId=<?php echo ($rs['supId']); ?>" class="btn btn-custon-rounded-four btn-danger">Delete</a></td>

                             </tr>

                         <?php
                            } ?>




                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </form>



 <?php
    include "Footer.php";

    ?>








 </body>

 </html>