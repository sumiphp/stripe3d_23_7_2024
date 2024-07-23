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
                <span id="sermsg"></span><br>
                            <div class="inner-page-sec">
                              <div class="description-sec">
                                <h2>Edit About Us</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="editaboutus" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                         <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">About Us Title:</label>
                                                              <input type="text" class="form-control" id="maintitle" name="maintitle" required placeholder="Enter About Us Title" value="<?php echo $result->title;?>" maxlength="25">
                                          
                                                          </div>
                                                          <div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">About Us Banner :</label>
                                                          <input type="file" class="form-control" id="aboutusbanner" name="aboutusbanner">
                                                              <img src="<?php echo base_url().'uploads/aboutus/'.$result->aboutusbanner;?>" width="50" height="50" />                                                             
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="company-logo" class="form-label text-primary">Mission Logo:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1">
                                                              <img src="<?php echo base_url().'uploads/aboutus/'.$result->missionlogo;?>" width="50" height="50" />


                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Vission Logo:</label>
                                                              <input type="file" class="form-control" id="image2" name="image2">
                                                              <img src="<?php echo base_url().'uploads/aboutus/'.$result->visionlogo;?>" width="50" height="50" />
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
                                                     
                                                      
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">About Company:</label>
                                                          <textarea class="form-control" id="aboutcompany" name="aboutcompany" rows="3" placeholder="About Company" required maxlength="400"><?php echo $result->aboutcompany;?></textarea>
                                                      </div>
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Enter Mission:</label>
                                                          <textarea class="form-control" id="mission" name="mission" rows="3" placeholder="About Mission" required maxlength="400"><?php echo $result->mission;?></textarea>
                                                      </div>
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Enter Vision:</label>
                                                          <textarea class="form-control" id="vision" name="vision" rows="3" placeholder="About Vision" required maxlength="400"><?php echo $result->vision;?></textarea>
                                                      </div>

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">About Company Short Description:</label>
                                                          <textarea class="form-control" id="shortdesc" name="shortdesc" rows="3" placeholder="About Company Short Description" maxlength="130" required><?php echo $result->aboutusshortdesc;?></textarea>
                                                      </div>



                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="company-logo" class="form-label text-primary">Enter Years of Experience :</label>
                                                             

                                                              <input type="text" class="form-control" id="yearsexperience" name="yearsexperience" placeholder="Enter Years of Experience" value="<?php echo $result->yearsexperience;?>" >
                                                              <!--<img src="<?php //echo base_url().'uploads/'.$result->missionlogo;?>" width="50" height="50" />-->


                                                          </div>
                                                          <div class="col-md-6">
                                                          <label for="company-logo" class="form-label text-primary">Enter Happy Clients :</label>
                                                             

                                                              <input type="text" class="form-control" id="happyclients" name="happyclients" placeholder="Enter Happy Clients"  value="<?php echo $result->happyclients;?>">
                                                              <!--<img src="<?php //echo base_url().'uploads/'.$result->missionlogo;?>" width="50" height="50" />-->


                                                          </div>
                                                      </div>


                                                      

                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="company-logo" class="form-label text-primary"> 	Projects Done :</label>
                                                             

                                                              <input type="text" class="form-control" id="projectsdone" name="projectsdone" placeholder="Enter Years of Experience"  value="<?php echo $result->projectsdone;?>">
                                                              <!--<img src="<?php //echo base_url().'uploads/'.$result->missionlogo;?>" width="50" height="50" />-->


                                                          </div>
                                                          <div class="col-md-6">
                                                          <label for="company-logo" class="form-label text-primary"> 	Expert Members :</label>
                                                             

                                                              <input type="text" class="form-control" id="expertmembers" name="expertmembers" placeholder="Enter Expert Members" value="<?php echo $result->expertmembers;?>">
                                                              <!--<img src="<?php //echo base_url().'uploads/'.$result->missionlogo;?>" width="50" height="50" />-->


                                                          </div>
                                                      </div>
                                                     
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag:</label>
                                                          <textarea class="form-control" id="metatag" name="metatag" rows="20" placeholder="Enter Meta Tage"><?php echo $result->metatag;?></textarea>
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
                                                      
                                                      <!--<a class="btn btn-primary me-3" href="<?php //echo base_url().'Welcome/listcategory';?>" data-bs-original-title="" title="">View/Edit  </a>-->
                                                      
                                                      <button type="submit" class="btn btn-primary" id="uploadser" >Update</button>
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
$('#editaboutus').on('submit', function (e) {
    e.preventDefault();
   //alert("enter");
        var file_data1 = $('#image1').prop('files')[0];
        var file_data2 = $('#image2').prop('files')[0];
        var file_data3 = $('#aboutusbanner').prop('files')[0];
        var maintitle=$('#maintitle').val();
       var aboutcompany=$("#aboutcompany").val();
        var mission=$("#mission").val();
        var vision=$("#vision").val();
        var yearsexperience=$("#yearsexperience").val();
        var happyclients=$("#happyclients").val();
        var expertmembers=$("#expertmembers").val(); 
        var aboutusshortdesc=$("#shortdesc").val();
        var projectsdone=$("#projectsdone").val();
        var metatag=$("#metatag").val();
        var alttagimg1=$("#alttagimg1").val();
        var alttagimg2=$("#alttagimg2").val();
        //var alttagimg3=$("#alttagimg3").val();
        
        var form_data = new FormData();
      form_data.append('image1', file_data1);
        form_data.append('image2', file_data2);
        form_data.append('maintitle',maintitle);
        form_data.append('aboutcompany',aboutcompany);
        form_data.append('mission',mission);
        form_data.append('vision', vision);
        form_data.append('yearsexperience',yearsexperience);
        form_data.append('happyclients',happyclients);
        form_data.append('expertmembers',expertmembers);
        form_data.append('aboutusshortdesc',aboutusshortdesc);
        form_data.append('projectsdone',projectsdone);
        form_data.append('image3',file_data3);
        form_data.append('metatag',metatag);
        form_data.append('alttag1',alttagimg1);
        form_data.append('alttag2',alttagimg2);
        //form_data.append('alttag3',alttagimg3);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/editaboutusprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
                $('#image2').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
                //$('#sermsg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/listaboutus';?>";
            },
            error: function (response) {
               // $('#sermsg').html(response); // display error response from the server
               window.location.href ="<?php echo base_url().'Welcome/listaboutus';?>";
            }
        });
    });






</script>

    