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


                     
            <?php include_once("sidebar.php");?>     

 

                <div class="dashboard-innerbox">
                
                            <div class="inner-page-sec">
                            <span id="blogmsg"></span><br>
                              <div class="description-sec">
                                <h2>Edit Blog Contents</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="editblogcontents" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Blog Content Title:</label>
                                                              <input type="text" class="form-control" id="blogtitle" name="blogtitle" placeholder="Blog Content Title" maxlength="50" required value="<?php echo $result->title;?>" >
                                          
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Author Image:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1" >
                                                              <img src="<?php echo base_url().'uploads/blog/'.$result->autorimage;?>"  width="50" height="50" />
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Top Article:</label>
                                                              <!--<input type="text" class="form-control" id="toparticle" name="toparticle" placeholder="Enter Top Article">-->
                                                              <select class="form-control" id="toparticle" name="toparticle" required>
                                                                <option value=''>Select</option>
                                                                <option value='Yes' <?php if ($result->toparticle=='Yes'){?> Selected <?php } ?>>Yes</option>
                                                              <option value='No' <?php if ($result->toparticle=='No'){?> Selected <?php } ?>>No</option>
                                                            </select>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Date Posted:</label>
                                                              <input type="date" class="form-control" id="date" name="date" required value="<?php echo $result->date;?>">
                                                              <input type="hidden" class="form-control" id="blogid" name="blogid" required value="<?php echo $result->contentid;?>">
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Name:</label>
                                                              <input type="text" class="form-control" id="name" name="name" required value="<?php echo $result->authorname;?>">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Place:</label>
                                                              <input type="text" class="form-control" id="place" name="place" placeholder="Enter Place" required value="<?php echo $result->place;?>">
                                                          </div>
                                                          
                                                      </div>

                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Author Company Name:</label>
                                                              <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Company Name" required value="<?php echo $result->companyname;?>">
                                          
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Article Image:</label>
                                                              <input type="file" class="form-control" id="image2" name="image2" >
                                                              <img src="<?php echo base_url().'uploads/blog/'.$result->contentimage;?>" width="100" height="100" />
                                                          </div>
                                                      </div>

                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Alt Tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg1;?>">
                                          
                                                          </div>
                                                          <div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">Alt Tag Image2:</label>
                                                              <input type="text" class="form-control" id="alttagimg2" name="alttagimg2" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg2;?>">


                                                             
                                                          </div>
                                                      </div>




                                                      <div class="col-md-6">
                                                          <label for="status" class="form-label text-primary">Status:</label>   
                                                          <select class="form-control" placeholder="Select Status" name="status" id="status"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1" <?php if ($result->active=='1'){?> selected <?php }?>>Active </option>
                                                                <option value="0" <?php if ($result->active=='0'){?> selected <?php }?>>Inactive </option>
</select>

                                                          </div>
                                                      </div>

                                                      
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Blog description:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="10" placeholder="Enter Blog description" required maxlength="1330"><?php echo $result->description;?></textarea>
                                                      </div>
                                                      
                                                      
                                                      <!--<a class="btn btn-primary me-3" href="<?php //echo base_url().'Welcome/listblogcontents';?>" data-bs-original-title="" title="">View/Edit  </a>-->
                                                      
                                                      <button type="submit" class="btn btn-primary" id="uploadsub" >Submit</button>
                                                  </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                           
                                
                          
              
                   
              </div>
              </div>
			</div>
		</section>
		
        


            


           
        <!---<script src="<?php //echo base_url().'assets/js/jquery.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/bootstrap.bundle.min.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/meanmenu.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/owl.carousel.min.js';?>"></script>
     
        <script src="<?php //echo base_url().'assets/js/jquery.magnific-popup.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/wow.min.js';?>"></script>
    
        <script src="<?php //echo base_url().'assets/js/jquery.ajaxchimp.min.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/form-validator.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/contact-form-script.js';?>"></script>
       
        <script src="<?php //echo base_url().'assets/js/custom.js';?>"></script>-->
        </body>
    <?php include_once("footer.php");?>
        <script>
$('#editblogcontents').on('submit', function (e) {
    e.preventDefault();
    //alert("enter");
        var file_data1 = $('#image1').prop('files')[0];
        var file_data2 = $('#image2').prop('files')[0];
        var blogtitle=$('#blogtitle').val();
        var toparticle=$("#toparticle").val();
        var description=$("#description").val();
        var name=$("#name").val();
        var place=$("#place").val();
        var date=$("#date").val();
        var companyname=$("#companyname").val();
        var blogid=$("#blogid").val();
        var alttagimg1=$("#alttagimg1").val();
        var alttagimg2=$("#alttagimg2").val();
        var status=$("#status").val();
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('image2', file_data2);
        form_data.append('blogtitle',blogtitle);
        form_data.append('toparticle',toparticle);
        form_data.append('description',description);
        form_data.append('name',name);
        form_data.append('place',place);
        form_data.append('date',date);
        form_data.append('companyname',companyname);
        form_data.append('blogid',blogid);
        form_data.append('alttag1',alttagimg1);
        form_data.append('alttag2',alttagimg2);
        form_data.append('status',status);
        $.ajax({
            url: "<?php echo base_url().'Welcome/editblogcontentsprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
                $('#image2').val('');
                $('#blogtitle').val('');
                $('#toparticle').val('');
                $('#date').val('');
                $('#name').val('');
                $('#place').val('');
                $('#description').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
                //$('#blogmsg').html(response); // display success response from the server
                
                window.location.href ="<?php echo base_url().'Welcome/listblogcontents';?>";
            },
            error: function (response) {
                //$('#blogmsg').html(response); // display error response from the server
                
                window.location.href ="<?php echo base_url().'Welcome/listblogcontents';?>";
            }
        });
    });






</script>

    