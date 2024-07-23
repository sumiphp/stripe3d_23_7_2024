
<?php include_once("header.php");
//echo $resulthome->metatag;

?>
<?php $this->db->select('*');
    $this->db->from('siteinformation');
    $query = $this->db->get();
    $favdt=$query->row();
   $favicon=$favdt->faviconimg;
    ?>
        
        <link rel="icon" type="image/png" href="<?php echo base_url().'uploads/logo/'.$favicon;?>" />

<style>
label.error {
  position: absolute;

  bottom: 0;
}
.input-group input{
margin-bottom:30px;
}
.input-group textarea{
margin-bottom:30px;
}
.input-group select{
margin-bottom:30px;
}
.error{
    text-color:#fff !important;
}

label.errpopup{
font-size:14px;
color:red;
bottom:4px;

}
</style>

    <body>
        <!-- Start Preloader -->
       <!--<div class="preloader">
            <div class="preloader-wave"></div>
        </div>-->
        <!-- End Preloader -->

        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
             <div class="mobile-nav">
             <a href="<?php echo base_url().'Pocket/index';?>" class="logo">
                    <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" class="logo-one" alt="<?php echo $siteinf->alttagimg1;?>">
                    <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" class="logo-two" alt="<?php echo $siteinf->alttagimg1;?>">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav top-nav">
                <div class="container">
                <?php include('menu.php');?>
                    
                </div>
            </div>
        </div>

      

        <!-- Start home page Area -->
        <section>
            <div class="heading-sec">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2><?php echo $result->servicedttitle;?></h2>
                        </div>
                       
                    </div>
            </div>
            </div>
             <!--<div class="service-detail-banner">
         <div class="service-detail-banner" style="background:url(<?php //echo base_url().'uploads/'.$lowestpackage->subcatbannerimage;?>) !important;background-repeat: no-repeat;background-size: cover; background-position: center;height:100vh;">-->
         <?php //print_r($lowestpackage);
                                if ($lowestpackagecount>0){
                               
                                ?>
           <div class="service-detail-banner" style="background:url(<?php echo base_url().'uploads/subcategory/'.$lowestpackage->subcatbannerimage?>)!important;background-repeat:no-repeat!important;background-position:center !important;background-size:cover !important;height:100vh;">
           <?php } else {?>
            <div class="service-detail-banner" style="background:url(<?php echo base_url().'uploads/subcategory/service-detail-banner.png'?>)!important;background-repeat:no-repeat!important;background-position:center !important;background-size:cover !important;height:100vh;">
            <?php } ?>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-mg-5 col-sm-5">
                            <div class="right-banner-content">
                                <?php //print_r($lowestpackage);
                                if ($lowestpackagecount>0){
                               
                                ?>
                                <h2><?php echo $lowestpackage->subcategoryname;?></h2>
                                <p><?php echo $lowestpackage->subcatshortdesc;?></p>
                                <h3 class="small_gradient_Text">Starts From <?php echo $lowestpackage->price;?> <?php echo $lowestpackage->currency;?> </h2>
                                <?php } else {?>
                                    <h2><?php echo "No Packages available under this category";?></h2>
                                    <?php } ?>

                            </div>
                        </div>
                        <div class="col-lg-6 col-mg-6 col-sm-6">

                        </div>
                     
                    </div>
            </div>
            </div>
        </section>
		
		<!-- End home Area -->

        
        <section>
            <div class="service-details-page">
                <div class="container">
                   <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="side-bar-sec">
                            <!-- SIDEBAR MENU -->
                            <div class="simlebar-sc" data-simplebar>
                              <ul class="sidebar-menu tf">
                                <li class="sidebar-submenu active">
                                    <!--<a href="#" class="sidebar-menu-dropdown">
                                        <span class="small_gradient_Text">Category</span>
                                        <div class="dropdown-icon">
                                            <i class='bx bxs-down-arrow'></i>
                                        </div>
                                    </a>-->
                                 
                                    <ul class="sidebar-menu-dropdown-content">
                                        <?php 
                                        
                                        //print_r($servicedetails);
                                        
                                        foreach($categories as $sd){ ?>
                                            <li>
                                            <a href="<?php echo base_url().'Pocket/servicedetails/'.$sd['categoryid'];?>">
                                               <?php echo $sd['categoryname'];?>
                                            </a>
                                        </li>


                                       <?php } ?>
                                      


                                    </ul>
                                </li>
                               </ul>
                                 </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="package-details">
                            <div class="row">
                                 <?php 
                                        
                                        //print_r($servicedetails);
                                        
                                        foreach($servicedetails as $sd){ ?>
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
                                <?php } ?>
                                
                            </div>

                           
                        </div>
                    </div>
                   </div>

                  

                 
                </div>
            </div>
        </section>

        <section>
            <div class="bottom-slider-sec">
                <div class="container">
                    <div class="row">
                        <div class="main-title text-left">
                            <h2><?php echo $result->servicedtsolution;?></h2>
                        </div>
                    </div>
                    
                    <div class="row align-items-center">
                   
                        <div class="col-md-12 col-lg-12 col-xxl-12 ">
                            <div class="service-details">
                                <div class="portfolio-slider owl-carousel owl-theme">
                                <?php foreach($easeyourproblems as $easeprob){?>
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-img">
                                            <img src="<?php echo base_url().'uploads/problems/'.$easeprob['picture'];?>" alt="<?php echo $easeprob['alttagimg1'];?>">
                                        </div>
                                        <div class="testimonail-content">
                                            <h4><?php echo $easeprob['title'];?></h4>
                                            <p>
                                            <?php echo $easeprob['description'];?>
                                             </p>
                                        <div class="btn-block bg-btn">
                                            <a href="<?php echo $easeprob['link'];?>" class="default-btn" target=_blank>View More</a>
                                        </div>
                                        </div>
                                    </div>
                                    <?php } ?>
    
                                  
                                </div>
                            </div>
                        </div>
                       
                      
                    </div>
                </div>
            </div>
        </section>     

        <div class="modal" id="myModal">

<style>
/*.error {
position: absolute;

bottom: 0;
}
.input-group1 input{
margin-bottom:55px;
}
.input-group1 textarea{
margin-bottom:45px;
}*/
</style>
<div class="modal-dialog modal-lg">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
  <h4 class="modal-title">Send Enquiries </h4>
  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<!-- Modal body -->
<div class="modal-body">
<span id="enqmsgpopup" style="font-color:#000;font-weight:bold;"></span>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-field-section get-touch-form">
        <form class="row" method="post" id="frmcontact"  action="<?php echo base_url().'Pocket/contactenquiryprocesspopup';?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <!--<input type="text" class="form-control" placeholder="NAME" aria-label="Username" aria-describedby="basic-addon1" required="">-->
                            <input type="text" id="name" name="name" class="form-control" placeholder="NAME" aria-label="Username" aria-describedby="basic-addon1" >
                                        <label id="name-error" class="error errpopup" for="name" style='padding-top:0px'></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                        <input type="text" id="companyname" name="companyname" class="form-control" placeholder="Company Name" aria-label="Username" aria-describedby="basic-addon1">
                                        <label id="companyname-error" class="error errpopup" for="companyname" style='padding-top:0px'></label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                        <input type="email" id="email1" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" >
                                        <label id="email-error" class="error errpopup" for="email" style='padding-bottom:0px'></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                        <input type="text" id="phone"  maxlength="12" name="phone" class="form-control phone" placeholder="Phone" aria-label="Username" aria-describedby="basic-addon1" >
                                        <label id="phone-error" class="error errpopup" for="phone" style='padding-bottom:0px'></label>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <label class="label-box">YOUR BUSINESS ?*</label>
                        <div class="input-group">
                        <input type="text" id="business" name="business" class="form-control" required="">
                        <label id="business-error" class="error errpopup" for="business" style='padding-bottom:0px'></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="label-box">CHOOSE YOUR PACKAGE</label>
                    <div class="input-group">
                    <select name="package" id="package1" class="form-control">
                    <option value="">Please select</option>
                    <?php foreach($resultsub as $res){?>
                                      <option value="<?php echo $res['subcategoryid'];?>"><?php echo $res['subcategoryname'];?></option>
                                      <?php } ?>
                    </select>
                    <label id="package-error" class="error errpopup" for="package" style='padding-bottom:0px'></label>
                </div>
            </div>
                </div>

                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="input-group">
                        <textarea class="form-control" rows="4" cols="50" placeholder="Message..." id="message" name="message" ></textarea>
                                        <label id="message-error" class="error errpopup" for="message" style='padding-bottom:0px'></label>
                           
                        </div>
                    </div>
                  
                </div>

                <div class="btn-sec text-center">
                        <button type="submit" class="default-btn submit-btn ">
                            Send
                        </button>
                </div>
               
            </form>

        </div>
    </div>
</div>

<!-- Modal footer -->
<!-- <div class="modal-footer">
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
</div> -->

</div>
</div>
</div>


        <?php include_once("footer.php");?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>



        <script>

function setval(id){
        //var id=10;
    //$("#package1").get(0).selectedIndex=id;
    $("#package1 option[value="+id+"]").attr("selected","selected");

    }

        $('form[id="frmcontact"]').validate({  
    rules: {  
      name: 'required',  
      companyname: 'required',
      phone:'required',  
      email: {  
        required: true,  
        email: true,  
      }, 
      business:"required", 
      message:"required",
      package:"required", 
      /*psword: {  
        required: true,  
        minlength: 8,  
      }*/  
    },  
    messages: {  
      name: 'Name is required',  
      companyname: 'Company Name is required',  
      phone: 'Enter a valid Phone',
      email: 'Enter a valid Email',
      business: 'Enter Your nature of business',
      package:"Please select package",   
      /*psword: {  
        minlength: 'Password must be at least 8 characters long'  
      } */
      message:'Please enter Message' 
    },  
    submitHandler: function(form) { 
       // form.preventDefault();
       /* $.ajax({
                url: contactForm1.attr('action'),
                type: 'post',
                data: contactForm1.serialize(),
                success: function(response){
                    
                    
                    $('input[type=text]').each(function() {
        $(this).val('');
    });
    
    $("#email").val('');
                    $("#msg").html(response);
                   

                }
            });*/

            $.ajax({
	url: form.action,
	type: form.method,
	data: $(form).serialize(),
	success: function(response) {
        $('input[type=text]').each(function() {
        $(this).val('');
    });
    
    $("#email1").val('');
    $("#message").val('');
    $("#package1").val('');
    
		$('#enqmsgpopup').html(response);
	}            
      });		
}





      //form.submit();  
   // }  
  });  

</script>