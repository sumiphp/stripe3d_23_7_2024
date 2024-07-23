<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <style type="text/css">
    a {
      padding-left: 5px;
      padding-right: 5px;
      margin-left: 5px;
      margin-right: 5px;
    }
    </style>
  </head> 
  <body>
 
   <!-- Posts List -->
   <table border='1' width='100%' style='border-collapse: collapse;' id='postsList1'>
     <thead>
      <tr>
        <th>S.no</th>
        <th>Title</th>
        <th>Content</th>
      </tr>
     </thead>
     <tbody></tbody>
   </table>

<div id='postsList'></div>
   <div class="col-lg-6 col-md-12">
                                    <div class="bg-box">
                                        <div class="icon-block">
                                            <img src="<?php echo base_url().'uploads/subcategory/'.$sd['subcategoryimage'];?>" alt="<?php echo $sd['alttagimg1'];?>" />
                                        </div>
                                        <div class="content-block">
                                            <h4><?php echo $sd['subcategoryname'];?></h4>
                                            <p><?php echo $sd['subcatdesc'];?></p>
                                            <!--<p>Enhance your website with our professional single-page package</p>
                                            <p>Enhance your website with our professional single-page package</p>-->
                                            <span class="smallText">For just </span>
                                            <h6><?php echo $sd['price'];?> <?php echo $sd['currency'];?></h6>
                                        </div>
                                        <div class="btn-block bg-btn">
                                            <!--<a href="<?php //echo base_url().'Pocket/contact';?>" class="default-btn enquiry-btn">Enquiry</a>-->

                                            <a href="#" onclick=setval(<?php echo $sd['subcategoryid'];?>) class="default-btn enquiry-btn" data-bs-toggle="modal" data-bs-target="#myModal">Enquiry</a>
                                        </div>
                                    </div>
                                </div>





 
   <!-- Paginate -->
   <div style='margin-top: 10px;' id='pagination'>nnnnn</div>

   <!-- Script -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script type='text/javascript'>
   $(document).ready(function(){

     // Detect pagination click
     $('#pagination').on('click','a',function(e){
       e.preventDefault(); 
       var pageno = $(this).attr('data-ci-pagination-page');
       loadPagination(pageno);
     });

     loadPagination(0);

     // Load pagination
     function loadPagination(pagno){
       $.ajax({
         url: '<?=base_url()?>/Pocket/loadRecorddiv/'+pagno,
         type: 'get',
         dataType: 'json',
         success: function(response){
            $('#pagination').html(response.pagination);
            createTable(response.result,response.row);
         }
       });
     }

     // Create table list
     function createTable(result,sno){
       sno = Number(sno);
       $('#postsList tbody').empty();
       for(index in result){
          var id = result[index].subcategoryid;
          var title = result[index].subcategoryname;
          var content = result[index].subcatdesc;
          //content = content.substr(0, 60) + " ...";
         var link = result[index].currency;
          sno+=1;

          /*var tr = "<tr>";
          tr += "<td>"+ sno +"</td>";
         tr += "<td><a href='"+ link +"' target='_blank' >"+ title +"</a></td>";
          tr += "<td>"+ content +"</td>";
          tr += "</tr>";*/
          var div='<div class="col-lg-6 col-md-12"><div class="bg-box"><div class="icon-block">';
          div+= 'Image</div><div class="content-block">';
          div+= '<h4><?php echo $sd['subcategoryname'];?></h4>';
                                        

         
                                            <h4><?php echo $sd['subcategoryname'];?></h4>
                                            <p><?php echo $sd['subcatdesc'];?></p>
                                            <!--<p>Enhance your website with our professional single-page package</p>
                                            <p>Enhance your website with our professional single-page package</p>-->
                                            <span class="smallText">For just </span>
                                            <h6><?php echo $sd['price'];?> <?php echo $sd['currency'];?></h6>
                                        </div>
                                        <div class="btn-block bg-btn">
                                            <!--<a href="<?php //echo base_url().'Pocket/contact';?>" class="default-btn enquiry-btn">Enquiry</a>-->

                                            <a href="#" onclick=setval(<?php echo $sd['subcategoryid'];?>) class="default-btn enquiry-btn" data-bs-toggle="modal" data-bs-target="#myModal">Enquiry</a>
                                        </div>
                                    </div>
                                </div>
                                       
                                        
                                   
          $('#postsList tbody').append(tr);
 
        }
      }
    });
    </script>
  </body>
</html>