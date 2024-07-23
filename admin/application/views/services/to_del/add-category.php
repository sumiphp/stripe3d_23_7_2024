<?php include('header.php');?>

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
                                <h2>Category / Sub-Category Information </h2>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <span id="catmsg"></span><br>
                                                <div class="product-info">
                                                    <h5>Add Category</h5>
                                                    <form id="frm" method="post" enctype="multipart/form-data" action="#" >
                                                    <!--<form id="frm" method="post" enctype="multipart/form-data" action="<?php //echo base_url().'Welcome/categoryaddprocess';?>" >-->
                                                        <div class="product-group">
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Product Category Name</label>
                                                                <input class="form-control" placeholder="Product Category Name" type="text" id="productcategory"  maxlength="40" name="productcategory" data-bs-original-title="" title="" required ><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Product Description</label>
                                                                <!--<input class="form-control" placeholder="Enter Product Description" id="productdescription" type="text" name="productdescription"  data-bs-original-title="" title="" required><span class="text-danger"></span>-->
                                                                <textarea class="form-control" id="productdescription" name="productdescription" rows="4" placeholder="Enter Category description" maxlength="175"></textarea>

                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Select Product Category Image</label>
                                                                <input class="form-control" placeholder="Enter Product Description" name="file" type="file"  id="file"  name="file"  data-bs-original-title="" title="" required><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                              <label for="company-name" class="form-label text-primary">Alt Tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php //echo $result->alttagimg1;?>">
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                              <label for="status" class="form-label text-primary">Status:</label>
                                                              
                                                              <select class="form-control" placeholder="Select Status" name="status" id="status"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1">Active </option>
                                                                <option value="0">Inactive </option>
</select>

</div>

                                                          </div>
                                                      </div>


                                                      <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                              <label for="address" class="form-label text-primary">Meta Tag:</label>
                                                          <textarea class="form-control" id="metatag" name="metatag" rows="4" placeholder="Enter Meta Tag"><?php //echo $result->metatag;?></textarea>

                                                              </div>
                                                            </div>
                                                          </div>





                                                          <div class="row">
                                                         
                                                            <div class="col-sm-12 text-end"><a class="btn btn-primary me-3" href="<?php echo base_url().'Welcome/listcategory';?>" data-bs-original-title="" title="">View/Edit  </a> <button class="btn btn-secondary"  id="upload">Save</button><!--<button class="btn btn-secondary" data-bs-original-title="" title="">Save</button>--></div>
                                                          </div>
                                                        </div>
                                                       
                                                      </form>
                                                      

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                  <h5>Add Sub-Category</h5>
                                                  <span id="catsubmsg"></span><br>
                                                    <form id="subfrm" method="post" action="<?php echo base_url().'Welcome/subcategoryaddprocess';?>">
                                                        <div class="product-group">
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Product Category</label>
                                                                <select class="form-control" placeholder="Product Category Name" name="prdcat" id="prdcat"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Category</option>
                                                                
                                                                <?php                                              
                                                                                                     
                                                    foreach($result as $res){?>
                                                    <option value="<?php echo $res['categoryid'];?>"><?php echo $res['categoryname'];?></option>

                                                    <?php } ?>
                                                                    
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
                                                                <input class="form-control" placeholder="Product Sub-Category" name="prdsubcat" id="prdsubcat" maxlength="40" type="text" data-bs-original-title="" title=""><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Price:</label>
                                                                <input class="form-control numericvalidate" placeholder="Price" name="price" id="price" type="text" data-bs-original-title="" title=""><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Short Description:</label>
                                                                <textarea class="form-control" id="prdsubshortdesc" name="prdsubshortdesc" rows="4" maxlength="150" placeholder="Enter Sub Category Short description"></textarea>

                                                                <!--<input class="form-control" placeholder="Description" name="prdsubdesc" id="prdsubdesc" type="text" data-bs-original-title="" title=""><span class="text-danger"></span>-->
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Description:</label>
                                                                <textarea class="form-control" id="prdsubdesc" name="prdsubdesc" rows="6"  maxlength="190" placeholder="Enter Sub Category description"></textarea>

                                                                <!--<input class="form-control" placeholder="Description" name="prdsubdesc" id="prdsubdesc" type="text" data-bs-original-title="" title=""><span class="text-danger"></span>-->
                                                              </div>
                                                            </div>
                                                          </div>

                                                          

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label"> Product Sub-Category Image</label>
                                                                <input class="form-control" placeholder="Enter Product Description" name="file" type="file"  id="filesub"  name="filesub"  data-bs-original-title="" title="" required><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                              <label for="company-name" class="form-label text-primary">Alt Tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1sub" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php //echo $result->alttagimg1;?>">
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label"> Product Sub-Category Banner Image</label>
                                                                <input class="form-control" placeholder="Enter Product Sub-Category Banner Image" name="fileimg" type="file"  id="filesubimg"  name="filesubimg"  data-bs-original-title="" title="" required><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                              <label for="company-name" class="form-label text-primary">Alt Tag Image2:</label>
                                                              <input type="text" class="form-control" id="alttagimg2" name="alttagimg2" required placeholder="Enter Alt attribute" value="<?php //echo $result->alttagimg1;?>">
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                              <label for="status" class="form-label text-primary">Status:</label>
                                                              
                                                              <select class="form-control" placeholder="Select Status" name="status" id="status1"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1">Active </option>
                                                                <option value="0">Inactive </option>
</select>

</div>

                                                          </div>
                                                      </div>


                                                      <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                              <label for="address" class="form-label text-primary">Meta Tag:</label>
                                                          <textarea class="form-control" id="metatag1" name="metatag" rows="4" placeholder="Enter Meta Tag"><?php //echo $result->metatag;?></textarea>

                                                              </div>
                                                            </div>
                                                          </div>                                                 


                                                          <div class="row">
                                                            <div class="col-sm-12 text-end"><a class="btn btn-primary me-3" href="<?php echo base_url().'index.php/Welcome/listsubcategory';?>" data-bs-original-title="" title="">View and Edit </a><button class="btn btn-secondary" id="uploadsub" data-bs-original-title="" title="">Save</button></div>
                                                          </div>
                                                        </div>
                                                      </form>

                                                </div>
                                            </div>
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
        <?php //include('footer1.php');?>
        <?php include('footer.php');?>
    </body>
</html>


<script>
   $(function() {
        $("#frm_err").on('submit', function(e) {
            e.preventDefault();
            var Form = $(this);
            $.ajax({
                url: Form.attr('action'),
                type: 'post',
                data: Form.serialize(),
                processData: false,
        contentType: false,
        cache:false,
        async:false,
                success: function(response){                   
     $('input[type=text]').each(function() {
        $(this).val('');
    });   
      $("#catmsg").html(response);                

                }
            });
        });
    });



    $(function() {
        $("#subfrm_err").on('submit', function(e) {
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
<script type="text/javascript">
//$(document).ready(function(e){
    $('#frm').on('submit', function (e) {
      e.preventDefault();
        var file_data = $('#file').prop('files')[0];
        var productcategory=$('#productcategory').val();
        var productdescription=$('#productdescription').val();
        var alttagimg1=$("#alttagimg1").val();
        var alttagimg2=$("#alttagimg2").val();
        var status=$("#status").val();
        var metatag=$("#metatag").val();
        var form_data = new FormData();
        form_data.append('file', file_data);
        form_data.append('productcategory',productcategory);
        form_data.append('productdescription',productdescription);
        form_data.append('alttag1',alttagimg1);
        form_data.append('alttag2',alttagimg2);
        form_data.append('status',status);
        form_data.append('metatag',metatag);
        $.ajax({
            url: "<?php echo base_url().'Welcome/upload_file';?>", // point to server-side controller method
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
                $('#catmsg').html(response); // display success response from the server
            },
            error: function (response) {
                $('#catmsg').html(response); // display error response from the server
            }
        });
    });


    $('#subfrm').on('submit', function (e) {
      e.preventDefault();
        var file_data = $('#filesub').prop('files')[0];
        var file_databanner = $('#filesubimg').prop('files')[0];
        var prdcat=$('#prdcat').val();
        var prdsubcat=$("#prdsubcat").val();
        var prdsubdesc=$("#prdsubdesc").val();
        var prdsubshortdesc=$('#prdsubshortdesc').val();
        var price=$('#price').val();
        var alttagimg1=$("#alttagimg1sub").val();
        var alttagimg2=$("#alttagimg2").val();
        var status=$("#status1").val();
        var metatag=$("#metatag1").val();
        var form_data = new FormData();
        form_data.append('filesub', file_data);
        form_data.append('prdsubcat',prdsubcat);
        form_data.append('prdcat',prdcat);
        form_data.append('prdsubdesc',prdsubdesc);
        form_data.append('prdsubshortdesc',prdsubshortdesc);
        form_data.append('filesubimg',file_databanner);
        form_data.append('price',price);
        form_data.append('metatag',metatag);
        form_data.append('alttag1',alttagimg1);
        form_data.append('alttag2',alttagimg2);
        form_data.append('status',status);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/upload_filesub';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#filesub').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });

   $('#filesub').val('');
       $('#filesubimg').val('')
       $('#prdcat').val('');
       $("#prdsubcat").val('');
        $("#prdsubdesc").val('');
        $('#prdsubshortdesc').val('');
       $('#price').val('');




                $('#catsubmsg').html(response); // display success response from the server
            },
            error: function (response) {
                $('#catsubmsg').html(response); // display error response from the server
            }
        });
    });







//});
</script>

