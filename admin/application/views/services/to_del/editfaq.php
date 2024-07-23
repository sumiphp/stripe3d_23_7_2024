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
                            <span id="faqmsg" style="color:green"></span><br>
                              <div class="description-sec">
                                <h2>Edit Faq</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="faqfrm" class="rounded-form" method="post"  action="<?php echo base_url().'Welcome/editfaqprocess';?>" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Faq Title:</label>
                                                              <input type="text" class="form-control" id="faqtitle" maxlength="50" name="faqtitle" placeholder="Enter Faq Title" value="<?php echo $result->faqtitle;?>" required>
                                                              <input type="hidden" class="form-control" id="faqid" name="faqid" placeholder="Enter Faq Id" value="<?php echo $result->faqid;?>" required>
                                          
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
                                                          
                                                      <!--<div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Subtitle:</label>
                                                              <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter Sub Title">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Image2:</label>
                                                              <input type="file" class="form-control" id="image2" name="image2">
                                                          </div>
                                                      </div>-->
                                                      
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Faq Description:</label>
                                                          <textarea maxlength="400" class="form-control" id="description" name="description" rows="3" placeholder="Enter Description" required><?php echo $result->faqdescription;?></textarea>
                                                      </div>
                                                      <!---<div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Email:</label>
                                                              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Website:</label>
                                                              <input type="url" class="form-control" id="website" name="website" placeholder="Enter website">
                                                          </div>
                                                      </div>--->
                                                      
                                                      <a class="btn btn-primary me-3" href="<?php echo base_url().'Welcome/listfaq';?>" data-bs-original-title="" title="">View/Edit  </a>
                                                      
                                                      <button type="submit" class="btn btn-primary" id="uploadfaq" >Submit</button>
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
$('#faqfrm').on('submit', function (e) {
    e.preventDefault();
   //alert("enter");
        //var file_data1 = $('#image1').prop('files')[0];
        //var file_data2 = $('#image2').prop('files')[0];
        var faqtitle=$('#faqtitle').val();
        var faqid=$("#faqid").val();
        var description=$("#description").val();
        var status=$("#status").val();
        var form_data = new FormData();
        //form_data.append('image1', file_data1);
        form_data.append('status',status);
        form_data.append('faqtitle',faqtitle);
        form_data.append('faqid',faqid);
        form_data.append('description',description);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/editfaqprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                //$('#image1').val('');
                //$('#image2').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
    $("#description").val('');
                //$('#faqmsg').html(response); // display success response from the server
             
                window.location.href ="<?php echo base_url().'Welcome/listfaq';?>";
            },
            error: function (response) {
                window.location.href ="<?php echo base_url().'Welcome/listfaq';?>";
            }
        });
    });






</script>

 