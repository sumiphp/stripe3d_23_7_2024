<?php include_once("header.php");?>   

    <body>
        <!-- Start Preloader -->
          <!--<div class="preloader">
            <div class="preloader-wave"></div>
        </div>-->
        <!-- End Preloader -->


      

        <!-- Start Sign In Area -->
		<section class="sign-in-area ptb-50">
			<div class="container">
              <div class="dashboard-bgarea">
                     
                 <!-- ======= Sidebar ======= -->
   <div class="other-side">

    <div class="modal-menu">
        <a href="#" data-bs-toggle="modal" data-bs-target="#myModal2">
            <i class="flaticon-menu"></i>
        </a>
    </div>
</div>

 <!-- Start Sidebar Modal -->
 <div class="sidebar-modal">  
    <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                    <h2 class="modal-title" id="myModalLabel2">
                    <a href="<?php echo base_url().'Welcome/dashboard';?>">
                            <!--<img src="<?php //echo base_url().'Pocket/assets/img/logo.png';?>" class="modal-logo1" alt="Logo">-->

                            <img src="<?php echo base_url().'uploads/logo/logo3.png'?>" width="100px" height="100px" class="modal-logo1" alt="<?php echo $siteinf->alttagimg1;?>">
                        </a>
                    </h2>
                </div>
                
                <div class="modal-body" id="navbarSupportedContent">
                    <nav class="sidebar card py-2 mb-4">
                    <?php include('sidebarmenu.php');?>
                        </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Modal -->

                <div class="dashboard-innerbox">
                            <div class="inner-page-sec">
                              <div class="description-sec">
                                <h2> View Contact Enquiries  </h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                              <div class="table-responsive theme-scrollbar">
                                              <span id="msg"></span><br>
                                                <div id="data-source-1_wrapper" class="dataTables_wrapper">

                                                    <table class="display dataTable" id="data-source-1" style="width: 100%;" role="grid" aria-describedby="data-source-1_info">
                                                  <thead>
                                                    <tr role="row">
                                                      <th class="sorting_asc" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 116px;">Name</th>
                              

                                                                              <th class="sorting" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:132px;">Email</th>
                                                                              <th class="sorting" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 142px;">Phone</th>
                                                                              <th class="sorting" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 142px;">Message</th>

                                                           <th class="sorting taC" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 151px;">Action</th></tr>
                                                  </thead>
                                                  <tbody>
                                                    <?php 
                                                    
                                                    
                                                    
                                                    foreach($result as $res){?>
                                                  <tr role="row" class="odd" id="<?php echo $res['enquiryid'];?>" >
                                                      
                                                      <!--<td>Indoor Lamps</td>-->
                                                      <td><?php echo $res['name'];?></td>
                                                      <!--td><?php //echo $res['companyname'];?></td-->
                                                      <td><?php echo $res['email'];?></td>
                                                      <td><?php echo $res['phone'];?></td>
                                                      <td><?php echo $res['message'];?></td>
                                                     
                                                      <td> 
                                                        <ul class="action"> 
                                                          <!--<li class="edit"> <a href="#" data-bs-original-title="" title=""><i class='bx bx-edit'></i></a></li>--->
                                                          <li class="delete"><a href="#" onclick="delenquiries(<?php echo $res['enquiryid'];?>)" data-bs-original-title="" title=""><i class='bx bx-trash'></i></a></li>
                                                          <!--<li class="View"><a href="#" data-bs-original-title="" title=""><i class='bx bx-low-vision'></i></a></li>-->
                                                        </ul>
                                                      </td>
                                                    </tr>
                                                    <?php } ?>
                                                   
                                                  
                                                </tbody>
                                                
                                                </table>
                                            </div>

                                            <div class="pagination mb-4"><?php echo $links;?> </div>
                                        </div>
                                    </div>
                                   

                                </div>
                            </div>
                           
                                <div class="row bg-row">
                                    <div class="col-md-5 col-lg-5 pocket-help">
                                        <h2>Ask pocket Friendly for Help 24/7</h2>
                                        <h6>Get In Touch : </h6>
                                      
                                        <div class="number-block"> <a href="tel:+ +<?php echo $contactus->phoneno;?>"> +<?php echo $contactus->phoneno;?> </a>  
                                           </div>
                                        </div>
                                </div>
                                </div>
                          
              
                   
              </div>
              </div>
			</div>
		</section>
		<!-- End Sign In Area -->

        <!-- Footer Area -->
        <?php //include('footer1.php');?>
        <?php include('footer.php');?>
    </body>
</html>


<script>
function delenquiries(id){
$.ajax({
            type: 'GET',
            url: "<?php echo base_url().'index.php/Welcome/deletecontactenquiries';?>",
            data:{id:id},
            success:function(data){
                $("#"+id).remove();
                $("#msg").html(data);
            }
        });

}
    
</script>






