
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
                                <h2>Category </h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <span id="catmsg"></span><br>
                                                <div class="product-info">
                                                    <h5>Edit Category</h5>
                                                    <form id="frmedit" method="post" action="<?php echo base_url().'Welcome/categoryeditprocess';?>" >
                                                        <div class="product-group">
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Product Category</label>
                                                                <input class="form-control" placeholder="Enter Product Name"  type="text" maxlength="40" id="productcategory" name="productcategory" value="<?php echo $result->categoryname;?>" data-bs-original-title="" title="" required ><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Edit Product Category</label>
                                                                <textarea class="form-control" placeholder="Enter Product Description"  id="productdescription"  name="productdescription" rows="5" value="" maxlength="175" data-bs-original-title="" title="" required><?php echo $result->categorydescription;?></textarea><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <input type="hidden" name="productcategoryid" id="productcategoryid" value="<?php echo $result->categoryid;?>" />

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Select Product Category Image</label>
                                                               
                                                                <input class="form-control" placeholder="Enter Product Description" name="file" type="file"  id="file"  name="file"  data-bs-original-title="" title="" ><span class="text-danger"></span>
                                                                <img src="<?php echo base_url().'uploads/'.$result->categoryimage;?>" width="100" height="100" />
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Enter image1 Alt Tag</label>
                                                                <input class="form-control" placeholder="Enter image1 Alt Tag" type="text" id="alttagimg1" name="alttagimg2" value="<?php echo $result->alttagimg1;?>" data-bs-original-title="" title="" required ><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                          <label for="status" class="form-label text-primary">Status:</label>
                                                              
                                                              <select class="form-control" placeholder="Select Status" name="status" id="status"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1" <?php if ($result->active=='1'){?> selected <?php }?>>Active </option>
                                                                <option value="0" <?php if ($result->active=='0'){?> selected <?php }?>>Inactive </option>
</select>
                                                                </div>
                                                            </div>
                                                          </div> 



                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                              <label for="address" class="form-label text-primary">Meta Tag:</label>
                                                          <textarea class="form-control" id="metatag" name="metatag" rows="4" placeholder="Enter Meta Tag"><?php echo $result->metatag;?></textarea>

                                                              </div>
                                                            </div>
                                                          </div> 



                                                          <div class="row">
                                                            <div class="col-sm-12 text-end"><!--<a class="btn btn-primary me-3" href="<?php //echo base_url().'index.php/Welcome/listcategory';?>" data-bs-original-title="" title="">View/Edit  </a>--><button class="btn btn-secondary" data-bs-original-title="" title="">Save</button></div>
                                                          </div>
                                                        </div>
                                                      </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                  <h5>Edit Sub-Category</h5>
                                                    <form id="subfrm" method="post" action="<?php //echo base_url().'index.php/Welcome/subcategoryaddprocess';?>">
                                                        <div class="product-group">
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Product Category</label>
                                                                <select class="form-control" placeholder="Product Category Name" name="prdcat" id="prdcat"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Category</option>
                                                                
                                                                <?php                                              
                                                                                                     
                                                   // foreach($result as $res){?>
                                                    <option value="<?php //echo $res['categoryid'];?>"><?php //echo $res['categoryname'];?></option>

                                                    <?php //} ?>
                                                                    
</select>
                                                                
                                                                <span class="text-danger">


</select>
                                                                </span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Product Sub-Category:</label>
                                                                <input class="form-control" placeholder="Product Sub-Category" name="prdsubcat" id="prdsubcat" type="text" data-bs-original-title="" title=""><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Description:</label>
                                                                <input class="form-control" placeholder="Description" name="prdsubdesc" id="prdsubdesc" type="text" data-bs-original-title="" title=""><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row">
                                                            <div class="col-sm-12 text-end"><a class="btn btn-primary me-3" href="<?php echo base_url().'index.php/Welcome/listsubcategory';?>" data-bs-original-title="" title="">View and Edit </a><button class="btn btn-secondary" data-bs-original-title="" title="">Save</button></div>
                                                          </div>
                                                        </div>
                                                      </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>-->

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
   


    $('#frmedit').on('submit', function (e) {
      e.preventDefault();
        var file_data = $('#file').prop('files')[0];
        var productcategory=$('#productcategory').val();
        var productdescription=$('#productdescription').val();
        var productcategoryid=$('#productcategoryid').val();
        var alttagimg1=$("#alttagimg1").val();
        var alttagimg2=$("#alttagimg2").val();
        var status=$("#status").val();
        var metatag=$("#metatag").val();
        var form_data = new FormData();
        form_data.append('file', file_data);
        form_data.append('productcategory',productcategory);
        form_data.append('productdescription',productdescription);
        form_data.append('productcategoryid',productcategoryid);
        form_data.append('alttag1',alttagimg1);
        form_data.append('alttag2',alttagimg2);
        form_data.append('status',status);
        form_data.append('metatag',metatag);
 //form_data.append('alttag1',alttagimg1);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/upload_filecatedit';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#file').val('');
                $('#productdescription').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
                //$('#catmsg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/listcategory';?>";
            },
            error: function (response) {
                //$('#catmsg').html(response); // display error response from the server
                window.location.href ="<?php echo base_url().'Welcome/listcategory';?>";
            }
        });
    });


    $(function() {
        $("#subfrm").on('submit', function(e) {
            e.preventDefault();

            var Form = $(this);

            $.ajax({
                url: Form.attr('action'),
                type: 'post',
                data: Form.serialize(),
                success: function(response){
                    
                    
                    $('input[type=text]').each(function() {
        $(this).val('');
    });
   
                    $("#catmsg").html(response);
                   

                }
            });
        });
    });












</script>