<?php
    include "Header.php";
    ?>

 <form method="post">

     <div class="col-lg-12">
         <div class="tab-content">

             <div id="inbox" class="tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
                  <td><a href="addnews.php" class="btn btn-custon-rounded-four btn-primary">Add News</a></td>

                 <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true">

                     <thead>
                         <tr>

                             <th data-field="id">News Id</th>
                             <th data-field="name">News Title</th>
                             <th data-field="email">News content</th>
                             <th data-field="phone">Reference</th>
                             <th data-field="company">News date</th>
                             <th data-field="img">News Image</th>
                             <th data-field="up">Update</th>
                             <th data-field="de">Delete</th>



                         </tr>
                     </thead>
                     <tbody>

                         <?Php
                            include_once "../news.php";
                            $news = new  news();
                            $r = $news->Searchnews();

                            while ($rs = mysqli_fetch_assoc($r)) {

                                ?>

                             <tr class="new-email">

                                 <td> <label name="txtsup<?php echo ($rs['newsId']); ?>"> <?php echo ($rs['newsId']); ?> </label> </td>
                                 <td><?php echo ($rs['newsTitle']); ?></td>
                                 <td><?php echo ($rs['newsContent']); ?></td>
                                 <td><?php echo ($rs['reference']); ?></td>
                                 <td><?php echo ($rs['newsDate']); ?></td>

                                 
                                 <td><img width="50px" height="50px" src="../images/newsimages/<?php echo ($rs['newsId']); ?>.jpg"></td>
                                 <td><a href="updatenews.php?supId=<?php echo ($rs['supId']); ?>" class="btn btn-custon-rounded-four btn-primary">Update</a></td>
                                 <td><a href="deletenews.php?supId=<?php echo ($rs['supId']); ?>" class="btn btn-custon-rounded-four btn-danger">Delete</a></td>

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