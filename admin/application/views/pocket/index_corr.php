
<?php //include_once("header.php");
echo $resulthome->metatag;

?>
    <body>
       

        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
             <div class="mobile-nav">
             <a href="<?php echo base_url().'Pockets/index';?>" class="logo">
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
            <div class="home-banner-sec bg-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 ">
                            <div class="start-business">
                            <h2><?php echo $resulthome->title1;?></h2>
                                <p><?php echo $resulthome->title2;?></p>
                                <img src="<?php echo base_url().'uploads/homepage/'.$resulthome->homepageimg1;?>">

                            </div>
                         </div>
                         <div class="col-md-6 col-lg-6 ">
                            <div class="business-form">
                            <span id="enqmsg" style="font-color:#fff;font-weight:bold;"></span>
                                <div class="form-field-section">
                                <form class="row" method="post" id="frm"  action="<?php echo base_url().'Pocket/enquiryprocess';?>">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="firstname" placeholder="First Name"  >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="phone" name="phone" maxlength="12" placeholder="Phone" >
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <label class="label-box">WHAT IS THE NATURE OF YOUR BUSINESS ?*</label>
                                            <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="natureofbusiness" >
                                        </div>
                                    </div>
                                        
                                        <div class="col-md-12">
                                                <label class="label-box">HOW QUICKLY WOULD YOU LIKE TO SET UP YOUR BUSINESS WEBSITE ?*</label>
                                                <div class="input-group mb-3">
                                                <input type="text" class="form-control" " name="businesswebsiteduration" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-box">CHOOSE YOUR PACKAGE</label>
                                            <div class="input-group mb-3">
                                            <select name="package" id="package" >
                                                <option value="">Select</option>
                                                <?php foreach($resultsub as $res){?>
                                              <option value="<?php echo $res['subcategoryid'];?>"><?php echo $res['subcategoryname'];?></option>
                                              <?php } ?>
                                             
                                            </select>
                                        </div>
                                    </div>
                                       
                                       
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <textarea class="textarea" id="note" name="note" rows="4" cols="50" placeholder="Note"></textarea>
                                            </div>
                                        </div>
                                      
                                  
    
                                    <!--<div class="col-md-12 consent-sec">
                                        <label class="label-box">CONSENT</label>
                                        <p>By checking the box, you consent to POCKET FRIENDLY sending you emails about its news updates, running offers, and promotional material</p>
                                    </div>-->

                                    <div class="col-md-12 col-lg-12  form-btn">
                                        <button type="submit" class="btn-submit">Submit</button>
                                    </div>
                                    </form>
                                  
    
                                    
    
                                  
    
                                </div>
                            </div>
                         </div>

                </div>
            </div>
            </div>
        </section>
		
		<!-- End home Area -->

        <!--about-us-sec-->
        <section>
            <div class="about-sec">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2>About Us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="about-img-sec">
                            <img src="<?php echo base_url().'uploads/homepage/'.$resulthome->homepageimg2;?>" class="w-100">
                            </div>
                            <div class="about-img-sec taC">
                            <img src="<?php echo base_url().'pockets/assets/img/about-img2.png';?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="about-content">
                               <p><?php echo $about->aboutcompany;?></p>
                            
                            <h2><?php echo $resulthome->qualitytitle;?></h2>
                            <div class="row">

                            <?php $count=count($qualities);
                            $half=$count/2;
                            
                            
                            ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 about-list-sec">
                                    <?php 
                                    $i=0;
                                    foreach($qualities as $quali){
                                        if ($i <=$half){
                                        
                                        ?> 
                                    <p><i class='bx bxs-chevrons-right'></i><?php echo $quali['quality'];?></p>
                                    <?php } 
                                $i++;
                                } ?>
                                    <!--<p><i class='bx bxs-chevrons-right'></i> Innovation</p>
                                    <p><i class='bx bxs-chevrons-right'></i> Affordability</p>
                                    <p><i class='bx bxs-chevrons-right'></i> Expertise </p>-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 about-list-sec">
                                <?php 
                                $i=$half;
                                $i=0;
                                foreach($qualities as $quali){
                                      if ($i >$half){
                                    
                                    ?> 
                                    <p><i class='bx bxs-chevrons-right'></i><?php echo $quali['quality'];?></p>
                                    <?php } 
                                           $i++;
                                
                                } ?>
                                    <!--<p><i class='bx bxs-chevrons-right'></i> Effectiveness</p>
                                    <p><i class='bx bxs-chevrons-right'></i> Reliability </p>
                                    <p><i class='bx bxs-chevrons-right'></i> Professionalism</p>-->
                                </div>
                            </div>
                          
                            <div class="primary-btn mt-3">
                                <a href="#" class="default-btn">More</a>
                            </div>
                          
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--Service-us-sec-->
        <section>
            <div class="service-area">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2>Service</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="service-content">
                            <h2><?php echo $resulthome->servicetitle1;?></h2>
                                <h3 class="small_gradient_Text"><?php echo $resulthome->servicetitle2;?></h3>
                                <h1 class="gradient_Text"><?php echo $resulthome->servicetitle3;?></h1>
                                
                            </div>
                           
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="service-img taC">
                            <img src="<?php echo base_url().'uploads/homepage/'.$resulthome->serviceimg;?>" >
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="bg-section icon-services">
                <div class="container">
                    <div class="row">
                    <?php foreach($resultsub as $res){?>
                        
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="<?php echo base_url().'uploads/subcategory/'.$res['subcategoryimage'];?>" alt="<?php echo $res['alttagimg1'];?>">
                            </div>
                            <div class="content-area">
                                <h3><?php echo $res['subcategoryname'];?></h3>
                                <p><?php echo $res['subcatdesc'];?></p>
                            </div>
                            <div class="bg-btn">
                                <a href="<?php echo base_url().'Pocket/contact';?>" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                            </div>
                        </div>
                        <?php } ?>
                        





                        
                    </div>
                   
                </div>
            </div>
        </section>

        <section>
            <div class="hosting-services-sec">
                <div class="container">
                    <div class="row">
                    <?php foreach($result as $res){?>
                                              

                                              <div class="col-lg-4 col-md-12 col-sm-12">
                                                  <div class="elementor-element">
                                                      <div class="elementor-widget-container">
                                                          <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                                              <div class="gt3-core-imagebox-content">
                                                                  <div class="gt3-core-imagebox-title">
                                                                  <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                                      <a href="#">
                                                                          <img src="<?php echo base_url().'uploads/'.$res['categoryimage'];?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                                          </a>
                                                                      </figure>
                                                                          <h3 class="gt3-core-imagebox-title"><a href="#"><?php echo $res['categoryname'];?></a></h3>
                                                                      </div>
                                                                      <p class="gt3-core-imagebox-description"><?php echo $res['categorydescription'];?></p>
                                                                  </div>
                                                              </div>
                                                              <a href="<?php echo base_url().'Pocket/servicedetails/'.$res['categoryid'];?>" class="plan-btn">View Plan</a>		
                                                                  </div>
                                                  </div>
                                                
                                              </div>
                                              <?php } ?>
                                             
                      
                       

                    </div>

                   
                </div>
            </div>
        </section>


        <!--<section>
            <div class="blog-area">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2>Our Blog</h2>
                        </div>
                    </div>
                    <div class="row blog-section">
                        <div class="col-md-4">
                            <div class="blog-img">
                                <img src="assets/img/blog/blog-1.png">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="blog-content">
                                <p>In today's fast-paced digital landscape, capturing and retaining the audience's attention is challenging. Motion video creation services offer a dynamic solution. Through compelling visuals, animations, and captivating narratives, businesses can convey complex messages concisely and engagingly. From brand storytelling to product demonstrations, motion videos transcend language barriers and connect with audiences emotionally. Explore how integrating motion videos into your marketing strategy can elevate your brand presence and drive meaningful engagement.</p>
                                <div class="primary-btn mt-3">
                                    <a href="#" class="default-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="blog-person">
                                <img src="assets/img/blog/blog-img.png">
                            </div>
                            <div class="social-icon">
                                <img src="assets/img/blog/facebook.png">
                                <img src="assets/img/blog/twitter.png">
                                <img src="assets/img/blog/linked-in.png">
                            </div>
                        </div>
                    </div>
                     <div class="row blog-section mt-5">
                        <div class="col-md-4">
                            <div class="blog-img">
                                <img src="assets/img/blog/blog-2.png">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="blog-content">
                                <p>Behind every impactful motion video lies a well-crafted storyboard and script. These fundamental components form the backbone of the creative process. Storyboarding visually outlines the sequence of scenes, ensuring a cohesive flow of ideas. On the other hand, scriptwriting condenses complex messages into concise and engaging narratives. By combining these two things, businesses can create motion videos that inform and resonate with audiences on a deeper level, leaving a lasting impression.</p>
                                <div class="primary-btn mt-3">
                                    <a href="#" class="default-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="blog-person">
                                <img src="assets/img/blog/blog-img2.png">
                            </div>
                            <div class="social-icon">
                                <img src="assets/img/blog/facebook.png">
                                <img src="assets/img/blog/twitter.png">
                                <img src="assets/img/blog/linked-in.png">
                            </div>
                        </div>
                    </div>
                    <div class="row blog-section mt-5">
                        <div class="col-md-4">
                            <div class="blog-img">
                                <img src="assets/img/blog/blog-3.png">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="blog-content">
                                <p>A critical factor in the success of motion videos is the audio component. Professional voiceovers and sound design convey the intended message and evoke emotions. A carefully selected voice can establish brand personality, while well-executed sound effects and music enhance the viewing experience. From establishing authority to creating an immersive atmosphere, the correct audio elements in motion videos can amplify brand communication and leave a memorable impact.</p>
                                <div class="primary-btn mt-3">
                                    <a href="#" class="default-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="blog-person">
                                <img src="assets/img/blog/blog-img3.png">
                            </div>
                            <div class="social-icon">
                                <img src="assets/img/blog/facebook.png">
                                <img src="assets/img/blog/twitter.png">
                                <img src="assets/img/blog/linked-in.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->


        <section>
            <div class="testimonial-area">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2>Our Testimonials</h2>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-12 col-xxl-12 ">
                            <div class="testimonial-slider">
                                <div class="testimonial-item-slider owl-carousel owl-theme">
                                <?php foreach($resulttest as $test){?>
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-img">
                                            <img src="<?php echo base_url().'uploads/testimonial/'.$test['image'];?>"  alt="<?php echo $test['alttagimg1'];?>">
                                        </div>
                                        <div class="testimonail-content">
                                            <p>
                                               <?php echo $test['testimonial'];?>
                                             </p>
                                       
                                             <div class="testimonal-info">
                                                <ul class="start-icon">
                                                    <?php if ($test['rating']==5){?>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <?php } ?>
                                                    <?php if ($test['rating']==4){?>
                                                    
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <?php } ?>
                                                    <?php if ($test['rating']==3){?>
                                                    
                                                   
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <?php } ?>
                                                    <?php if ($test['rating']==2){?>
                                                    
                                                   
                                                   
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <?php } ?>
                                                    <?php if ($test['rating']==1){?>                              
                                                   
                                                   
                                                    
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                                <h3><?php echo $test['name'];?></h3>
                                                <p><?php echo $test['place'];?></p>
                                          
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
            <div class="faq-area">
                <div class="container">
                   
                    <div class="faq-sec">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="main-title">
                                        <h2>FAQ</h2>
                                    </div>
                                </div>
                                    <div class="faq-accordion faq-accordion-width">
                                        <ul class="accordion">
                                        <?php foreach($resultfaq as $faq){?>
                                            <li class="accordion-item">
                                                <a class="accordion-title" href="javascript:void(0)">
                                                    <i class='bx bx-chevron-down'></i>
                                                    <?php echo $faq['faqtitle'];?>
                                                </a>
                
                                                <div class="accordion-content">
                                                    <p> 
                                                    <?php echo $faq['faqdescription'];?>
                                                    </p>
                                                </div>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="bgimg-part">
                                    <div class="model-content">
                                    <h5>How To Contact us</h5>
                                    <p><?php echo $contactus->contactusdescription;?></p>

                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php include_once("footer.php");?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>


<script>
   /* $(function() {
        $("#frm").on('submit', function(e) {
            e.preventDefault();

            var contactForm = $(this);

            $.ajax({
                url: contactForm.attr('action'),
                type: 'post',
                data: contactForm.serialize(),
                success: function(response){
                    
                    
                    $('input[type=text]').each(function() {
        $(this).val('');
    });
    $("#note").val('');
    $("#package").val('');
    $("#email").val('');
                    $("#enqmsg").html(response);
                   

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






    $('form[id="frm"]').validate({  
    rules: {  
      firstname: 'required',  
      lastname: 'required',
      phone:'required',  
      email: {  
        required: true,  
        email: true,  
      }, 
      natureofbusiness:"required", 
      /*psword: {  
        required: true,  
        minlength: 8,  
      }*/ 
      businesswebsiteduration:"required",
      package:"required", 
      note:"required",   
    },  
    messages: {  
      name: 'First Name is required',  
      lastname: 'Last Name is required',  
      phone: 'Enter a valid Phone',
      email: 'Enter a valid Email',  
      /*psword: {  
        minlength: 'Password must be at least 8 characters long'  
      } */
      natureofbusiness:'Please enter Nature of business', 
      businesswebsiteduration:"Please enter businesswebsiteduration",
      package:"Please select package", 
      note:"Please enter note",  
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
		//$('#msg').html(response);

        $("#note").val('');
    $("#package").val('');
    $("#email").val('');
 $("#enqmsg").html(response);


	}            
      });		
}





      //form.submit();  
   // }  
  });  




















</script>