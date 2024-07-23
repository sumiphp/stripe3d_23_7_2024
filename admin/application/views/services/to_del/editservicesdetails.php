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
                            <span id="qlmsg" style="color:green"></span><br>
                              <div class="description-sec">
                                <h2>Edit Service Details Page</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="sdfrm" class="rounded-form" method="post"  action="<?php echo base_url().'Welcome/editservicesdetailsprocess';?>" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Service Title:</label>
                                                              <input type="text" class="form-control " id="title" name="title" placeholder="Enter Service Title" maxlength=25 required value="<?php echo $result->servicedttitle;?>" >
                                          
                                                          </div>
                                                         <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Service Solution Title-:</label>
                                                              <input type="text" class="form-control" id="solution" name="solution" placeholder="Enter Solution Title" required maxlength=50 value="<?php echo $result->servicedtsolution;?>">
                                                              <input type="hidden" class="form-control numericvalidate" id="serviceidid" name="serviceid"  required value="<?php echo $result->servicedtid;?>">
                                                          </div>
                                                      </div>
                                                     
                                                      
                                                      <!--<a class="btn btn-primary me-3" href="<?php //echo base_url().'Welcome/listquality';?>" data-bs-original-title="" title="">View/Edit  </a>-->
                                                      
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
		
        

        </body>
    <?php include_once("footer.php");?>
            


            
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
        <script>
$('#qlfrm').on('submit', function (e) {
    e.preventDefault();
   //alert("enter");
        //var file_data1 = $('#image1').prop('files')[0];
        //var file_data2 = $('#image2').prop('files')[0];
        var title=$('#title').val();
       var qualityid=$("#qualityid").val();
        var orderno=$("#orderno").val();
        
        var form_data = new FormData();
        //form_data.append('image1', file_data1);
        //form_data.append('image2', file_data2);
        form_data.append('title',title);
       form_data.append('qualityid',qualityid);
        form_data.append('orderno',orderno);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/editqualityprocess';?>", // point to server-side controller method
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
    window.location.href ="<?php echo base_url().'Welcome/listquality';?>";
            },
            error: function (response) {
                window.location.href ="<?php echo base_url().'Welcome/listquality';?>";
            }
        });
    });






</script>

  