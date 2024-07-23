
<?php //include_once("header.php");
echo $resulthome->metatag;

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
</script>

<?php echo $gcdt->googletags;?>

<style>
/*.modal-dialog {
    width: auto;
}*/

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
    <?php echo $gcdt->googletagssnippet;?>

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
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="firstname" placeholder="First Name"  >
                                                <label id="firstname-error" class="error" for="firstname" style='padding-top:0px;color:#fff'></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="">
                                                <label id="lastname-error" class="error" for="lastname" style='padding-top:0px;color:#fff'></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                                                <label id="email-error" class="error" for="email" style='padding-top:0px;color:#fff'></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="phone" name="phone" maxlength="12" placeholder="Phone" required="">
                                                <label id="phone-error" class="error" for="phone" style='padding-top:0px;color:#fff'></label>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <label class="label-box">WHAT IS THE NATURE OF YOUR BUSINESS ?*</label>
                                            <div class="input-group">
                                            <input type="text" class="form-control" name="natureofbusiness" required="">
                                            <label id="natureofbusiness-error" class="error" for="natureofbusiness" style='padding-top:0px;color:#fff'></label>
                                        </div>
                                    </div>
                                        
                                        <div class="col-md-12">
                                                <label class="label-box">HOW QUICKLY WOULD YOU LIKE TO SET UP YOUR BUSINESS WEBSITE ?*</label>
                                                <div class="input-group mb-3">
                                                <input type="text" class="form-control" required="" name="businesswebsiteduration" >
                                                <label id="businesswebsiteduration-error" class="error" for="businesswebsiteduration" style='padding-top:0px;color:#fff'></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-box">CHOOSE YOUR PACKAGE</label>
                                            <div class="input-group mb-3">
                                            <select name="package" id="package" required>
                                                <option value="">Select</option>
                                                <?php foreach($resultsuball as $res){?>
                                              <option value="<?php echo $res['subcategoryid'];?>"><?php echo $res['subcategoryname'];?></option>
                                              <?php } ?>
                                             
                                            </select>
                                            <label id="package-error" class="error" for="package" style='padding-top:0px;color:#fff'></label>
                                        </div>
                                    </div>
                                       
                                       
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <textarea class="textarea" id="note" name="note" rows="4" cols="50" placeholder="Note"></textarea>
                                                <label id="note-error" class="error" for="note" style='padding-top:0px'></label>
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
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-img-sec">
                            <img src="<?php echo base_url().'uploads/homepage/'.$resulthome->homepageimg2;?>" class="w-100"  alt="<?php echo $resulthome->alttagimg2;?>" >
                            </div>
                            <div class="about-img-sec taC">
                            <!--<img src="<?php //echo base_url().'pockets/assets/img/about-img2.png';?>">-->
                            <img src="<?php echo base_url().'uploads/homepage/'.$resulthome->homepageimg4;?>" class="w-100"  alt="<?php echo $resulthome->alttagimg4;?>" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
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
                                        if ($i <$half){
                                        
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
                                      if ($i >=$half){
                                    
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
                                <a href="<?php echo base_url().'Pocket/service';?>" class="default-btn">More</a>
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
                            <h2><?php echo $resulthome->servicetitle;?></h2>
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
                            <img src="<?php echo base_url().'uploads/homepage/'.$resulthome->serviceimg;?>" alt="<?php echo $resulthome->alttagimg3;?>" >
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
                        
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="<?php echo base_url().'uploads/subcategory/'.$res['subcategoryimage'];?>" alt="<?php echo $res['alttagimg1'];?>">
                            </div>
                            <div class="content-area">
                                <h3><?php echo $res['subcategoryname'];?></h3>
                                <p><?php echo $res['subcatdesc'];?></p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" onclick=setval(<?php echo $res['subcategoryid'];?>); class="default-btn enquiry-btn" data-bs-toggle="modal" data-bs-target="#myModal">Enquiry</a>
                            </div>

                            <!--<a type="button" class="default-btn enquiry-btn" data-bs-toggle="modal" data-bs-target="#myModal">
                                Enquiry
                    </a>-->
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
                                              

                                              <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                                                  <div class="elementor-element">
                                                      <div class="elementor-widget-container">
                                                          <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                                              <div class="gt3-core-imagebox-content">
                                                                  <div class="gt3-core-imagebox-title">
                                                                  <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                                      <a href="<?php echo base_url().''.$res['urlkey'];?>">
                                                                          <img src="<?php echo base_url().'uploads/'.$res['categoryimage'];?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                                          </a>
                                                                      </figure>
                                                                          <h3 class="gt3-core-imagebox-title"><a href="<?php echo base_url().''.$res['urlkey'];?>"><?php echo $res['categoryname'];?></a></h3>
                                                                      </div>
                                                                      <p class="gt3-core-imagebox-description"><?php echo $res['categorydescription'];?></p>
                                                                  </div>
                                                              </div>
                                                              <a href="<?php echo base_url().''.$res['urlkey'];?>" class="plan-btn">View Plan</a>		
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
                            <?php foreach($resultsuball as $res){?>
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
       



<script>

    function setval(id){
        //var id=10;
    //$("#package1").get(0).selectedIndex=id;
    $("#package1 option[value="+id+"]").attr("selected","selected");

    }
   $(function() {

    //var id = $('#HdnOrganizationId').val()
    
       /* $("#frm").on('submit', function(e) {
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
        });*/
    });


    $("#phone").keypress(function(event){
        var keycode = event.which;
        if (!(keycode >= 48 && keycode <= 57)) {
            event.preventDefault();
        }
    });

    $(".phone").keypress(function(event){
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
      //note:"required",   
    },  
    messages: {  
      firstname: 'First Name is required',  
      lastname: 'Last Name is required',  
      phone: 'Enter a valid Phone',
      email: 'Enter a valid Email',  
      /*psword: {  
        minlength: 'Password must be at least 8 characters long'  
      } */
      natureofbusiness:'Please enter Nature of business', 
      businesswebsiteduration:"Please enter Business Website Duration",
      package:"Please select package", 
      //note:"Please enter note",  
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
<script>
$("#phone1").keypress(function(event){
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
