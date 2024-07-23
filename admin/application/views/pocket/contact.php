<link rel="icon" type="image/png" href="http://localhost/Pocketfriendly_cms/pockets/assets/img/favicon.ico"/>

<?php //include_once("header.php");
echo $contactus->metatag;

?>
<?php $this->db->select('*');
    $this->db->from('siteinformation');
    $query = $this->db->get();
    $favdt=$query->row();
   $favicon=$favdt->faviconimg;
    ?>
         <link rel="icon" type="image/png" href="<?php echo base_url().'uploads/logo/'.$favicon;?>" />
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Q1GCL7WC8"></script>
<?php $this->db->select('*');
    $this->db->from('googleanalyticscode');
    $query = $this->db->get();
    $gcdt=$query->row();?>


<script>
  
  <?php echo $gcdt->googleanalytics;?>
  <?php echo $gcdt->googletags;?>
</script>
<style>
.error {
  position: absolute;

  bottom: 0;
}
.input-group input{
margin-bottom:35px;
}
.input-group textarea{
margin-bottom:35px;
}
</style>
    <body> <?php echo $gcdt->googletagssnippet;?>
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
           
            <div class="contact-banner-sec" style="background:url(<?php echo base_url().'uploads/contactus/'.$contactus->contactusimg;?>);background-repeat:no-repeat;background-size:cover;">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-field-section get-touch-form">
                          
                            <form class="row" method="post" id="frmcontact"  action="<?php echo base_url().'Pocket/contactenquiryprocess';?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                        
                                            <div class="input-group">
                                            
                                                <input type="text" id="name" name="name" class="form-control" placeholder="NAME" aria-label="Username" aria-describedby="basic-addon1" >
                                                <label id="name-error" class="error" for="name" style='padding-top:0px'></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        
                                            <div class="input-group ">
                                                <input type="text" id="companyname" name="companyname" class="form-control" placeholder="Company Name" aria-label="Username" aria-describedby="basic-addon1">
                                                <label id="companyname-error" class="error" for="companyname" style='padding-top:0px'></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                        
                                            <div class="input-group">
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" >
                                                <label id="email-error" class="error" for="email" style='padding-bottom:0px'></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        
                                            <div class="input-group ">
                                                <input type="text" id="phone"  maxlength="12" name="phone" class="form-control" placeholder="Phone" aria-label="Username" aria-describedby="basic-addon1" >
                                                <label id="phone-error1" class="error" for="phone" style='padding-bottom:0px'></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                       
                                            <div class="input-group mb-3">
                                                <textarea class="form-control" rows="4" cols="50" placeholder="Message..." id="message" name="message" ></textarea>
                                                <label id="message-error" class="error" for="message" style='padding-bottom:0px'></label>
                                            </div>
                                        </div>
                                        <span id="msg" style="font-color:green;font-weight:bold;text-align:center;padding-top:15px"></span>
                                    </div>
                                    
                                    <div class="btn-sec text-center">
                                            <button type="submit" class="default-btn submit-btn ">
                                                Send
                                            </button>
                                    </div>
                                   
                                   
                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="address-sec">
                                
                                    <h4><a href="#"><img src="<?php echo base_url().'pockets/assets/img/map-icon.png';?>">  <?php echo $contactus->city;?>, <?php echo $contactus->country;?></a></h4>

                                    <h4><a href="#"><img src="<?php echo base_url().'pockets/assets/img/mail-icon.png';?>"> <?php echo $contactus->emailid;?></a> </h4>
                                    <h4><a href="#"><img src="<?php echo base_url().'pockets/assets/img/call-icon.png';?>"> +<?php echo $contactus->phoneno;?></a></h4>

                               
                            </div>
                        </div>
                      
                       
                    </div>
            </div>
            </div>
        </section>
		
		<!-- End home Area -->
        <?php include_once("footer.php");?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
        <script>
           
    /*$(function() {
        $("#frmcontact").on('submit', function(e) {
            e.preventDefault();

            var contactForm1 = $(this);
            

            $.ajax({
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
            });
        });
    });*/


    $("#phone").keypress(function(event){
        var keycode = event.which;
        if (!(keycode >= 48 && keycode <= 57)) {
            event.preventDefault();
        }
    });






    $('form[id="frmcontact"]').validate({  
    rules: {  
      name: 'required',  
      companyname: 'required',
      phone:'required',  
      email: {  
        required: true,  
        email: true,  
      }, 
      message:"required", 
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
    
    $("#email").val('');
    $("#message").val('');
    
		$('#msg').html(response);
	}            
      });		
}





      //form.submit();  
   // }  
  });  

























</script>