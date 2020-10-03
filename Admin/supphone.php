<?php
    include "Header.php";
    ?>

 <form method="post">

     <div class="col-lg-12">
         <div class="tab-content">

             <div id="inbox" class="tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
                  <td><a href="addphone.php" class="btn btn-custon-rounded-four btn-primary">Add sup phone </a></td>

                 <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true">

                     <thead>
                         <tr>

                             <th data-field="id">Sup Id</th>
                             <th data-field="name">Sup Phone</th>
                             
                             <th data-field="up">Update</th>
                             <th data-field="de">Delete</th>



                         </tr>
                     </thead>
                     <tbody>

                         <?Php
                            include_once "../phoneclass.php";
                            $phone = new  phone();
                            $r = $phone->Search();

                            while ($rs = mysqli_fetch_assoc($r)) {

                                ?>

                             <tr class="new-email">

                                 <td> <label name="txtsup<?php echo ($rs['supId_fk']); ?>"> <?php echo ($rs['supId_fk']); ?> </label> </td>
                                 <td><?php echo ($rs['supPhone']); ?></td>
                                 
                                 <td><a href="updatephone.php?supId=<?php echo ($rs['supId_fk']); ?>" class="btn btn-custon-rounded-four btn-primary">Update</a></td>
                                 <td><a href="phonedelete.php?supId=<?php echo ($rs['supId_fk']); ?>" class="btn btn-custon-rounded-four btn-danger">Delete</a></td>

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