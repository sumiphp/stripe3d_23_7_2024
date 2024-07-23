<!-- Footer Area -->
<style>
label.error.errpopupmsg {
    position: absolute;
    bottom: -35px;
    color: #f61c0d;
    font-style: italic;
    font-weight: 600;
}

</style>

<footer id="footer" class="footer-area-bg">
            <div class="footer-newletter-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="subscribe-area">
                                <h2>News Letter</h2>
                                <p><?php echo $newsletter->newsletterdescription;?></p>
                            </div>
                            <div class="newsletter-area">
                                <span id="newsmsg" style='bottom:51px;color:red;font-weight:bold;'></span>
                                <form class="newsletter-form-email" name="frmemail" id="frmemail" action="<?php echo base_url().'Pocket/newslettersubscribe';?>" method="post">
                                    <input type="email" class="form-control" placeholder="Enter Your Email" name="emailidnews"  id="emailnews" required />
                                    <label id="emailnews-error" class="error errpopupmsg" for="emailnews" ></label>
                                    <button class="subscribe-btn" type="submit">
                                        Subscribe
                                    </button>
                                    
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="feature-updates-sec">
                            <h2>Feature Update</h2>
                            <div class="footer-service-icon">
                                <div class="row">
                                    <?php foreach($featureupdate as $res){?>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="<?php echo base_url().'uploads/featureicon/'.$res['featureicon'];?>">
                                    </div>
                                    <?php } ?>
                                    
                                </div>
                                
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>

            <?php $this->db->select('*');
    $this->db->from('socialmedialinks');
    $query = $this->db->get();
    $footerdt=$query->row();?>
            <div class="footer-area-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-single">
                                <div class="footer-single-content">
                                    <a href="#">
                                        <img src="<?php echo base_url().'pockets/assets/img/footer-logo-arabic.png';?>" alt="Logo">

                                        <!--<img src="<?php //echo base_url().'uploads/logo/'.$siteinf->logoimg;?>"  alt="<?php //echo $siteinf->alttagimg1;?>">-->
                                    </a>
                                    <div class="share-icon">
                                        <ul class="social-icon-part">
                                            <li><a href="<?php echo $footerdt->whatsuplink;?>" target="_blank"><img src="<?php echo base_url().'pockets/assets/img/whatsapp.png';?>"></a></li>
                                            <li><a href="<?php echo $footerdt->linkldn;?>" target="_blank"><img src="<?php echo base_url().'pockets/assets/img/linked-in.png';?>"></a></li>
                                            <li><a href="<?php echo $footerdt->youtube;?>" target="_blank"><img src="<?php echo base_url().'pockets/assets/img/youtube-icon.png';?>"></a></li>
                                        </ul>
                                        <ul class="social-icon-part">
                                            <li><a href="<?php echo $footerdt->facebook;?>" target="_blank"><img src="<?php echo base_url().'pockets/assets/img/facebook-icon.png';?>"></a></li>
                                            <li><a href="<?php echo $footerdt->instagram;?>" target="_blank"><img src="<?php echo base_url().'pockets/assets/img/insta-icon.png';?>"></a></li>
                                            <li><a href="<?php echo $footerdt->twitter;?>" target="_blank"><img src="<?php echo base_url().'pockets/assets/img/twitter.png';?>"></a></li>
                                        </ul>
                                    </div>
                                   
                                </div>

                              
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-list ml-50">
                                <h3><?php echo $about->title;?></h3>
                                <p><?php echo $about->aboutusshortdesc;?></p>

                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <div class="footer-list">
                                <h3>Quick Links</h3>
                                <ul>
                                <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="<?php echo base_url().'sitemap/index';?>">Sitemap</a>
                                    </li>

 
                                    <?php $sql="Select * from category where  active=1";    
    $query = $this->db->query($sql);
    $resultser = $query->result_array();
    //return $query->result_array();

                                $arr=array();
                                foreach($resultser as $res){
                                   if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ 
                                    $arr[]=$res['categoryname'];
                                    $url[]=base_url().$res['urlkey'].'/en';
                                   }else{
                                    $arr[]=$res['categoryar'];
                                    $url[]=base_url().$res['urlkey'].'/ar';
                                   }
                                }?>
                                    

                                    <?php 
                                    //print_r($arr);
                                    error_reporting(0);
                                    for($i=0;$i<5;$i++){?>                                      
                                        <li>  <i class='bx bxs-chevron-right'></i><a href="<?php echo $url[$i];?>"><?php echo $arr[$i];?></a></li>
                                        <?php } ?>


                                    <!--li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">SEO</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Terms & Condition</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Privacy & Policy</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Careers</a>
                                    </li-->
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-list ml-20">
                                <h3>Contact Us</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                          <?php echo $contactus->city;?>,<?php echo $contactus->country;?>
                                    </li>
                                    <li>
                                        <i class='bx bxs-phone'></i>
                                        <a href="tel:+<?php echo $contactus->phoneno;?>">+<?php echo $contactus->phoneno;?></a>
                                    </li>
                                    <li>
                                        <i class='bx bx-envelope'></i>
                                        <a href="mailto:<?php echo $contactus->emailid;?>"><?php echo $contactus->emailid;?></a>
                                    </li>
                                  
                                    
                                </ul>

                                
                            </div>
                        </div>
                        <div class="copyright-text">
                            <p>
                                CopyrightbyPocketFriendlyWeb | <script>document.write(new Date().getFullYear())</script>  
                             
                            </p>
                        </div>
                     
                    </div>
                </div>
            </div>
            <div class="button__cover">
            <a href="<?php echo $footerdt->calllnk;?>" target="_blank"><i class="bx bxl-whatsapp"></i></a>
            <a href="<?php echo $footerdt->locationlink;?>" target="_blank"><i class="bx bxs-map"></i> </a>
        </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                           <div class="location-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1861009.5379097238!2d53.9485752!3d24.3540069!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x844654cd217aedcf%3A0x3f8604d12a1923c0!2spocketfriendlyweb.com!5e0!3m2!1sen!2sin!4v1691653678031!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->


         <!-- Jquery Min JS -->
         <script src="<?php echo base_url().'assets/js/jquery.min.js';?>"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="<?php echo base_url().'assets/js/bootstrap.bundle.min.js';?>"></script>
        <!-- Meanmenu JS -->
        <script src="<?php echo base_url().'assets/js/meanmenu.min.js';?>"></script>
        <!-- Owl Carousel JS -->
        <script src="<?php echo base_url().'assets/js/owl.carousel.min.js';?>"></script>
        <!-- Magnific Popup JS -->
        <script src="<?php echo base_url().'assets/js/jquery.magnific-popup.min.js';?>"></script>
        <!-- Wow JS -->
        <script src="<?php echo base_url().'assets/js/wow.min.js';?>"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="<?php echo base_url().'assets/js/jquery.ajaxchimp.min.js';?>"></script>
        <!-- Form Validator Min JS -->
        <script src="<?php echo base_url().'assets/js/form-validator.min.js';?>"></script>
        <!-- Contact Form JS -->
        <script src="<?php echo base_url().'assets/js/contact-form-script.js';?>"></script>
        <!-- Custom JS -->
        <script src="<?php echo base_url().'assets/js/custom.js';?>"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>



    </body>
</html>




<script>
   //$(function() {
        $("#frmemail1").on('submit', function(e) {
            //alert("enter");
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
     $('input[type=email]').each(function() {
        $(this).val('');
    });   
      $("#newsmsg").html(response);                

                }
            });
        });
    //});

    $('#frmemail2').on('submit', function (e) {
    e.preventDefault();
    
        var emailnews=$("#emailnews").val();
        
        var form_data = new FormData();
       
        form_data.append('emailidnews',emailnews);
       
       
        $.ajax({
            url: "<?php echo base_url().'Pocket/newslettersubscribe';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                
                $('#emailnews').val('');
                $('input[type=email]').each(function() {
        $(this).val('');
    });   
      $("#newsmsg").html(response);  
            },
            error: function (response) {
                
                $("#newsmsg").html(response);  
            }
        });
    });



    $('form[id="frmemail"]').validate({  
    rules: {  
        emailidnews: 'required',  
      /* companyname: 'required',
      phone:'required',  
      email: {  
        required: true,  
        email: true,  
      }, 
      business:"required", 
      message:"required",
      package:"required", 
     psword: {  
        required: true,  
        minlength: 8,  
      }*/  
    },  
    messages: {  
        emailidnews: 'Please enter your emailid',  
      /*companyname: 'Company Name is required',  
      phone: 'Enter a valid Phone',
      email: 'Enter a valid Email',
      business: 'Enter Your nature of business',
      package:"Please select package",   
      psword: {  
        minlength: 'Password must be at least 8 characters long'  
      } */
      //message:'Please enter Message' 
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
    
    $('#emailnews').val('');
    
		$('#newsmsg').html(response);
	}            
      });		
}





      //form.submit();  
   // }  
  });  






















    </script>