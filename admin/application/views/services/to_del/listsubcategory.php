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

                           <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" class="modal-logo1" alt="<?php echo $siteinf->alttagimg1;?>">
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
                                <h2> View Sub Category  </h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                              <div class="table-responsive theme-scrollbar">
                                              <span id="catmsg"> <?php echo $this->session->flashdata('flash_msg');?></span><br>
                                                <div id="data-source-1_wrapper" class="dataTables_wrapper">

                                                    <table class="display dataTable" id="data-source-1" style="width: 100%;" role="grid" aria-describedby="data-source-1_info">
                                                  <thead>
                                                    <tr role="row">
                                                      <th class="sorting_asc" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" >Sub Category Name</th>
                                                      <th class="sorting" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Category Name</th>
                                                      <th class="sorting" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width:520px;">Sub Category Description</th>
                                                      <th class="sorting" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Sub Category short Description</th>
                                                      <th class="sorting" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Price</th>
                                                      <th class="sorting" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Subcategory Image</th>
                                                      <th class="sorting" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Subcategory Banner Image</th>
                                                      <th class="sorting" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 142px;">Status</th>
                                                           <th class="sorting taC" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" >Action</th></tr>
                                                  </thead>
                                                  <tbody>
                                                    <?php 
                                                    
                                                    
                                                    
                                                    foreach($result as $res){?>
                                                  <tr role="row" class="odd" id="<?php echo $res['subcategoryid'];?>" >
                                                      <td class="sorting_1"><?php echo $res['subcategoryname'];?></td>
                                                      <td class="sorting_1"><?php 
                                                      $catid=$res['categoryid'];
                                                      $this->db->where('categoryid',$catid);
                                                      $this->db->from('category');
                                                      $query = $this->db->get();
                                                      $catdt=$query->row();                                                     
                                                      
                                                      echo $catdt->categoryname;?></td>
                                                      <!--<td>Indoor Lamps</td>-->
                                                      <td><?php echo $res['subcatdesc'];?></td>
                                                      <td><?php echo $res['subcatshortdesc'];?></td>
                                                      <td><?php echo $res['price'];?> <?php echo $res['currency'];?></td>
                                                      <td ><span style="background-color:#ccc;"><img src=<?php echo base_url().'uploads/subcategory/'.$res['subcategoryimage']?> width="80" height="80" /></span></td>
                                                      <td><img src=<?php echo base_url().'uploads/subcategory/'.$res['subcatbannerimage']?> width="50" height="50" /></td>
                                                      <td> <?php if ($res['active']==1){ echo "Active"; } else { echo "Inactive";}?>
                                                    </td>
                                                      <td> 
                                                        <ul class="action"> 
                                                          <li class="edit"> <a href="<?php echo base_url().'Welcome/editsubcategory/'.$res['subcategoryid'];?>"   data-bs-original-title="" title=""><i class='bx bx-edit'></i></a></li>
                                                          <li class="delete"><a href="#" onclick="delsubcategoryrow(<?php echo $res['subcategoryid'];?>)" data-bs-original-title="" title=""><i class='bx bx-trash'></i></a></li>
                                                          <!--<li class="View"><a href="#" data-bs-original-title="" title=""><i class='bx bx-low-vision'></i></a></li>-->
                                                        </ul>
                                                      </td>
                                                    </tr>
                                                    <?php } ?>
                                                   
                                                  
                                                </tbody>
                                                
                                                </table>
                                            </div>

                                            <!--<div class="pagination mb-4">
                                                <a href="#">«</a>
                                                <a class="active" href="#">1</a>
                                                <a href="#">2</a>
                                                <a href="#">3</a>
                                                <a href="#">4</a>
                                                <a href="#">5</a>
                                                <a href="#">»</a>
                                                </div>
                                        </div>--->
                                        <div class="pagination mb-4"><?php echo $links;?> </div>
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
function delcategoryrow(catid){
$.ajax({
            type: 'GET',
            url: "<?php echo base_url().'index.php/Welcome/deletecategory';?>",
            data:{catid:catid},
            success:function(data){
                $("#"+catid).remove();
                $("#catmsg").html(data);
            }
        });

}
    
</script>


<script>
function delsubcategoryrow(subcatid){
$.ajax({
            type: 'GET',
            url: "<?php echo base_url().'index.php/Welcome/deletesubcategory';?>",
            data:{subcatid:subcatid},
            success:function(data){
                $("#"+subcatid).remove();
                $("#catmsg").html(data);
            }
        });

}
    
</script>



