
<?php include_once("header.php");?>
    <body>
        <!-- Start Preloader -->
        <!--<div class="preloader">
            <div class="preloader-wave"></div>
        </div>-->
        <!-- End Preloader -->

        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
             <div class="mobile-nav">
                <a href="index.html" class="logo">
                <img src="<?php echo base_url().'assets/img/logo.png';?>" class="logo-one" alt="Logo">
                    <img src="<?php echo base_url().'assets/img/logo.png';?>" class="logo-two" alt="Logo">
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
                                                <input type="text" class="form-control" name="firstname" placeholder="First Name"  required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="phone" name="phone" maxlength="12" placeholder="Phone" required="">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <label class="label-box">WHAT IS THE NATURE OF YOUR BUSINESS ?*</label>
                                            <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="natureofbusiness" required="">
                                        </div>
                                    </div>
                                        
                                        <div class="col-md-12">
                                                <label class="label-box">HOW QUICKLY WOULD YOU LIKE TO SET UP YOUR BUSINESS WEBSITE ?*</label>
                                                <div class="input-group mb-3">
                                                <input type="text" class="form-control" required="" name="businesswebsiteduration" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-box">CHOOSE YOUR PACKAGE</label>
                                            <div class="input-group mb-3">
                                            <select name="package" id="package" required>
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
                                  
    
                                    <!--<div class="col-md-12 consent-sec">
                                        <label class="label-box">CONSENT</label>
                                        <p>By checking the box, you consent to POCKET FRIENDLY sending you emails about its news updates, running offers, and promotional material</p>
                                    </div>

                                    <div class="col-md-12 col-lg-12  form-btn">
                                        <button type="button" class="btn-submit">Submit</button>
                                    </div>-->
    
                                  
    
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
                               <p>At PocketFriendlyWeb, we provide comprehensive solutions to elevate your business's online presence. From branding and social media management to SEO, content marketing, advertising, and viral campaigns, we are your one-stop destination for effective and impactful online strategies. Our expertise extends to website development, ensuring your digital journey is engaging and successful.</p>
                            
                            <h2>Distinguishing Qualities that Set Us Apart</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 about-list-sec">
                                    <p><i class='bx bxs-chevrons-right'></i> Excellence</p>
                                    <p><i class='bx bxs-chevrons-right'></i> Innovation</p>
                                    <p><i class='bx bxs-chevrons-right'></i> Affordability</p>
                                    <p><i class='bx bxs-chevrons-right'></i> Expertise </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 about-list-sec">
                                    <p><i class='bx bxs-chevrons-right'></i> Effectiveness</p>
                                    <p><i class='bx bxs-chevrons-right'></i> Reliability </p>
                                    <p><i class='bx bxs-chevrons-right'></i> Professionalism</p>
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
                                <img src="<?php echo base_url().'uploads/subcategory/'.$res['subcategoryimage'];?>">
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
                        





                        <!--<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="assets/img/icon/icon1.png">
                            </div>
                            <div class="content-area">
                                <h3>Digital Consutation</h3>
                                <p>Elevate your online presence with our digital consultation services. Experience personalized strategies, expert guidance, and enhanced brand visibility for your business growth.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="assets/img/icon/icon-2.png">
                            </div>
                            <div class="content-area">
                                <h3>Web Development</h3>
                                <p>Our web development services create impressive, user-focused websites that combine stunning design with seamless functionality, ensuring your online success.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="assets/img/icon/icon3.png">
                            </div>
                            <div class="content-area">
                                <h3>Web Design</h3>
                                <p>Pocketfriendlyweb's Web Design services offer captivating websites that engage users and drive results, enhancing your online presence and business growth.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="assets/img/icon/icon4.png">
                            </div>
                            <div class="content-area">
                                <h3>Web Ranking</h3>
                                <p>Boost website visibility and rankings with our Web Ranking services. Drive more organic traffic, enhance online presence, and outperform competitors.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>-->
                    </div>
                    <!--<div class="row row-padding">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="assets/img/icon/icon-5.png">
                            </div>
                            <div class="content-area">
                                <h3>Content Writing</h3>
                                <p>Elevate your brand's voice with highly professional Content Writing services. Engaging content that resonates, captivates, and drives results for your business.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="assets/img/icon/icon-6.png">
                            </div>
                            <div class="content-area">
                                <h3>Branding</h3>
                                <p>Elevate your brand with expert branding services. Stand out, connect with your audience, and achieve lasting business success.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="assets/img/icon/icon-7.png">
                            </div>
                            <div class="content-area">
                                <h3>Digital Marketing</h3>
                                <p>Our digital marketing services drive growth through targeted strategies, enhancing online visibility, engaging audiences, and boosting conversions effectively and affordably.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="assets/img/icon/icon-8.png">
                            </div>
                            <div class="content-area">
                                <h3>Motion video creation</h3>
                                <p>Elevate engagement and storytelling with our motion video creation services. Enhance brand impact and captivate audiences with dynamic visuals.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>
                    </div>-->
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
                                             
                      
                        <!--<div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="assets/img/hos-icon/icon-2.png" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">Domain</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Secure your digital identity with a domain that reflects your brand and captivates your audience.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="assets/img/hos-icon/icon-3.png" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">Responsive Design</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Crafted for every device, our designs adapt seamlessly, ensuring a consistent and engaging user experience across platforms.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>-->

                    </div>

                    <!--<div class="row row-padding">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="assets/img/hos-icon/icon-4.png" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">SEO Integration</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">We build with SEO in mind, enhancing your website's visibility and helping it rank higher in search results.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="assets/img/hos-icon/icon-5.png" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">Search Engine Optimization</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Boost your online visibility with strategic SEO techniques that improve your website's ranking and drive organic traffic.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="assets/img/hos-icon/icon-6.png" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">Social Media</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Engage your audience on platforms like Facebook, Instagram, and Twitter, using targeted content to build brand loyalty and drive conversions.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>

                    </div>-->

                    <!--<div class="row row-padding">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="assets/img/hos-icon/icon-7.png" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">Fast server</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">We provide lightning-fast servers for all your web development needs, ensuring seamless performance and optimal hosting solutions for your domains.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="assets/img/hos-icon/icon-8.png" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">Email Campaigns</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Nurture your customer relationships through well-crafted email campaigns that deliver value and drive action.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="assets/img/hos-icon/icon-9.png" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">Animated page</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Elevate your website with captivating animated pages that engage and delight your visitors instantly.

                                                </p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>

                    </div>-->
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
                                            <img src="<?php echo base_url().'uploads/testimonial/'.$test['image'];?>"  alt="Testimonial Images">
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

    
                                    <!--<div class="testimonial-item">
                                        <div class="testimonial-item-img">
                                            <img src="assets/img/testimonials/testimonial-1.png" alt="Testimonial Images">
                                        </div>
                                        <div class="testimonail-content">
                                            <p>
                                                "The team at PocketFriendlyWeb exceeded our expectations with their branding expertise. Their attention to detail and creativity in designing our brand identity truly set us apart in a competitive market." 
                                             </p>
                                       
                                             <div class="testimonal-info">
                                                <ul class="start-icon">
                                                    <li>
                                                        <img src="assets/img/testimonials/star.png">
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/testimonials/star.png">
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/testimonials/star.png">
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/testimonials/star.png">
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/testimonials/star.png">
                                                    </li>
                                                </ul>
                                                <h3>Michael R</h3>
                                                <p>Nintendo</p>
                                             
                                            </div>
                                        </div>


                                       
                                    </div>
    
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-img">
                                            <img src="assets/img/testimonials/testimonial-1.png" alt="Testimonial Images">
                                        </div>
                                        <div class="testimonail-content">
                                            <p>
                                                "PocketFriendlyWeb's social media management services transformed our engagement levels. Their strategic approach and consistent content delivery increased our followers and brought our brand closer to our audience." 
                                             </p>
                                       
                                             <div class="testimonal-info">
                                                <ul class="start-icon">
                                                    <li>
                                                        <img src="assets/img/testimonials/star.png">
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/testimonials/star.png">
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/testimonials/star.png">
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/testimonials/star.png">
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/testimonials/star.png">
                                                    </li>
                                                </ul>
                                                <h3>Emily S</h3>
                                                <p>Nintendo</p>
                                               
                                            </div>
                                        </div>


                                       
                                    </div>-->
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


        <!-- Footer Area -->
        <!--<footer id="footer" class="footer-area-bg">
            <div class="footer-newletter-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="subscribe-area">
                                <h2>News Letter</h2>
                                <p>Join our newsletter to stay in the loop about the latest trends in digital marketing, branding, and business growth. Receive exclusive insights, tips, and offers directly to your inbox. Take advantage of the opportunity to elevate your online presence and unlock new possibilities for your brand. Sign up today and be a part of the PocketFriendlyWeb community!</p>
                            </div>
                            <div class="newsletter-area">
                                <form class="newsletter-form" data-toggle="validator">
                                    <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
                                    <button class="subscribe-btn" type="submit">
                                        Subscribe
                                    </button>
                                    <div id="validator-newsletter" class="form-result"></div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="feature-updates-sec">
                            <h2>Feature Update</h2>
                            <div class="footer-service-icon">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="assets/img/footer-1.png">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="assets/img/footer-2.png">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="assets/img/footer-3.png">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="assets/img/footer-4.png">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="footer-area-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-single">
                                <div class="footer-single-content">
                                    <a href="#">
                                        <img src="assets/img/footer-logo.png" alt="Logo">
                                    </a>
                                    <div class="share-icon">
                                        <ul class="social-icon-part">
                                            <li><a href="#"><img src="assets/img/whatsapp.png"></a></li>
                                            <li><a href="https://www.linkedin.com/in/pocketfriendly-web/" target="_blank"><img src="assets/img/linked-in.png"></a></li>
                                            <li><a href="https://www.youtube.com/@pocketfriendlyweb" target="_blank"><img src="assets/img/youtube-icon.png"></a></li>
                                        </ul>
                                        <ul class="social-icon-part">
                                            <li><a href="https://www.facebook.com/pocketfriendlywebfze/" target="_blank"><img src="assets/img/facebook-icon.png"></a></li>
                                            <li><a href="https://instagram.com/pocketfriendlyweb?igshid=MmU2YjMzNjRlOQ==" target="_blank"><img src="assets/img/insta-icon.png"></a></li>
                                            <li><a href="https://twitter.com/Pocketfrie99946" target="_blank"><img src="assets/img/twitter.png"></a></li>
                                        </ul>
                                    </div>
                                   
                                </div>

                              
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-list ml-50">
                                <h3>About Us</h3>
                                <p>At PocketFriendlyWeb, we're not just a digital marketing and branding agency; we're your strategic partners in success.</p>

                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <div class="footer-list">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
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
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-list ml-20">
                                <h3>Contact Us</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                          Dubai,UAE
                                    </li>
                                    <li>
                                        <i class='bx bxs-phone'></i>
                                        <a href="tel:+971 585893348">+971 585893348</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-envelope'></i>
                                        <a href="mailto:info@ifixcomapnyonline">info@pocketfriendlyweb.com</a>
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
        
        <script src="<?php //echo base_url().'assets/js/jquery.min.js';?>"></script>
       
        <script src="<?php //echo base_url().'assets/js/bootstrap.bundle.min.js';?>"></script>
       
        <script src="<?php //echo base_url().'assets/js/meanmenu.min.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/owl.carousel.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/jquery.magnific-popup.min.js';?>"></script>
       
        <script src="<?php //echo base_url().'assets/js/wow.min.js';?>"></script>
       
        <script src="<?php //echo base_url().'assets/js/jquery.ajaxchimp.min.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/form-validator.min.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/contact-form-script.js';?>"></script>
       
        <script src="<?php //echo base_url().'assets/js/custom.js';?>"></script>
    </body>
</html>-->


<script>
    $(function() {
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
    });


    $("#phone").keypress(function(event){
        var keycode = event.which;
        if (!(keycode >= 48 && keycode <= 57)) {
            event.preventDefault();
        }
    });





</script>