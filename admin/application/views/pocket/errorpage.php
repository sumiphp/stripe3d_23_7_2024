<?php include_once("header.php");?>
    <body>
       
        <!--<div class="preloader">
            <div class="preloader-wave"></div>
        </div>-->
       

        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
             <div class="mobile-nav">
             <a href="<?php echo base_url().'Pockets/index';?>" class="logo">
                    <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" class="logo-one" alt="Logo">
                    <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" class="logo-two" alt="Logo">
                </a>


               
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav top-nav">
                <div class="container">
                <?php include('menu.php');?>
                </div>
            </div>
        </div>

      

        <!-- Start Sign In Area -->
		<section>
            <div class="inner-page">
			<div class="container">
              <div class="inner-bgarea">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                        <div class="error-img">
                            <img src="<?php echo base_url().'pockets/assets/img/404.png';?>">
                    </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                        <div class="error-text">
                            <h2><span class="smallText">Oops !</span> 404 </h2>
                            <P>We couldn’t find that Page</P>
                            <div class="second-btn">
                                <a href="#" class="secondary-btn default-btn">Go Back Here</a>
                            </div>
                        </div>
                      
                    </div>
                </div>
               
              </div>
			</div>
        </div>
		</section>
        <?php include('footer.php');?>
		<!-- End Sign In Area -->

        <!-- Footer Area -->
        <!--<footer id="footer" class="footer-area-bg">
            <div class="footer-newletter-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="subscribe-area">
                                <h2>News Letter</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
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
                                        <img src="assets/img/share-icon.png">
                                    </div>
                                   
                                </div>

                              
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-list ml-50">
                                <h3>About Us</h3>
                              <p>POCKET FRIENDLY delivers comprehensive, professional one-page websites for businesses of all sizes at an affordable cost.</p>
                              <p class="pt-30 ">POCKET FRIENDLY delivers comprehensive, professional one-page websites for businesses of all sizes at an affordable cost.</p>

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
                                        <a href="mailto:info@ifixcomapnyonline">info@ifixcomapnyonline</a>
                                    </li>
                                  
                                    
                                </ul>

                                
                            </div>
                        </div>
                        <div class="copyright-text">
                            <p>
                                Copyrightbypocketfriendlyweb | <script>document.write(new Date().getFullYear())</script>  
                             
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
                            <img src="assets/img/location.png">
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
       


       
        <script src="assets/js/jquery.min.js"></script>
        
        <script src="assets/js/bootstrap.bundle.min.js"></script>
       
        <script src="assets/js/meanmenu.min.js"></script>
       
        <script src="assets/js/owl.carousel.min.js"></script>
       
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
       
        <script src="assets/js/wow.min.js"></script>
        
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
       
        <script src="assets/js/form-validator.min.js"></script>
       
        <script src="assets/js/contact-form-script.js"></script>
      
        <script src="assets/js/custom.js"></script>
    </body>
</html>-->