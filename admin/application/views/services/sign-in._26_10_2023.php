<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/bootstrap.min.css';?>"> 
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/owl.theme.default.min.css';?>">
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/owl.carousel.min.css'?>">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/magnific-popup.min.css'?>">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/animate.min.css'?>">
        <!-- Boxicons CSS --> 
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/boxicons.min.css'?>">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/fonts/flaticon.css'?>">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/meanmenu.min.css'?>">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/style.css'?>">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/responsive.css'?>">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/theme-dark.css'?>">

        <!-- Title -->
        <title>Pocket Frindly </title>

        <!-- Favicon -->
        <!-- <link rel="icon" type="image/png" href="assets/img/favicon.png"> -->
    </head>

    <body>
        <!-- Start Preloader -->
        <!--<div class="preloader">
            <div class="preloader-wave"></div>
        </div>-->
        <!-- End Preloader -->

      

      

        <!-- Start Sign In Area -->
		<section class="sign-in-area ptb-50">
			<div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
				<div class="contact-wrap-form log-in-width">
                    <h6><?php echo $this->session->flashdata('flash_msg');?></h6>
					<form method="post" action="<?php echo base_url().'index.php/welcome/loginprocess';?>">
                        <h2>Login</p>
						<div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <label for="register-form-name">Email Address</label>
							</div>

                            <div class="col-lg-6 col-sm-6">
								<a class="forget" href="#">SignUp</a>
							</div>
							<div class="col-12">
								<div class="form-group">
                                  
									<input class="form-control" type="text" name="username" placeholder="Username or Email">
								</div>
							</div>

                            <div class="col-lg-6 col-sm-6">
                                <label for="register-form-name">Password</label>
							</div>

                            <div class="col-lg-6 col-sm-6">
								<a class="forget" href="#">Forgot password?</a>
							</div>

                          
							<div class="col-12">
								<div class="form-group">
                                  
									<input class="form-control" type="password" name="password" placeholder="Password">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6 form-condition">
								<div class="agree-label">
									<input type="checkbox" id="chb1">
									<label for="chb1">
										Remember Me
									</label>
								</div>
							</div>

						

							<div class="col-12 text-center">
								<button class="default-btn btn-two" type="submit">
									Login
								</button>
							</div>

							<!--<div class="col-12">
                                <div class="content">
                                    <p class="or">or Login</p>
                                  </div>
								 <p class="account-desc">
									Not a member?
									<a href="#">Sign Up</a>
								</p> 
							</div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <button class="login-social-btn" type="submit">
                                    <i class='bx bxl-google'></i>
                                    <p>Google</p>  
                                </button>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <button class="login-social-btn" type="submit">
                                    <i class='bx bxl-facebook-circle'></i>
                                    <p>Facebook</p> 
                                </button>
                            </div>-->
						</div>
					</form>
				</div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="login-img">
                    <img src="<?php echo base_url().'assets/img/login-img.png';?>">
                </div>
            </div>

           
        </div>

			</div>
		</section>
		<!-- End Sign In Area -->

        <!-- Footer Area -->
         <!-- Footer Area -->
         <?php //include('footer1.php');?>
        <footer id="footer" class="footer-area-bg">
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
                                        <img src="<?php echo base_url().'assets/img/footer-1.png';?>">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="<?php echo base_url().'assets/img/footer-2.png';?>">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="<?php echo base_url().'assets/img/footer-3.png';?>">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="<?php echo base_url().'assets/img/footer-4.png';?>">
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
                                        <img src="<?php echo base_url().'assets/img/footer-logo.png';?>" alt="Logo">
                                    </a>
                                    <div class="share-icon">
                                        <img src="<?php echo base_url().'assets/img/share-icon.png';?>">
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
                                Copyrightbypocketfriendlywebxxxxx | <script>document.write(new Date().getFullYear())</script>  
                             
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
                            <img src="<?php echo base_url().'assets/img/location.png';?>" />
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
       
        <script src="<?php echo base_url().'assets/js/jquery.min.js';?>"></script>
       
        <script src="<?php echo base_url().'assets/js/bootstrap.bundle.min.js';?>"></script>
     
        <script src="<?php echo base_url().'assets/js/meanmenu.min.js';?>"></script>
        
        <script src="<?php echo base_url().'assets/js/owl.carousel.min.js';?>"></script>
       
        <script src="<?php echo base_url().'assets/js/jquery.magnific-popup.min.js';?>"></script>
       
        <script src="<?php echo base_url().'assets/js/wow.min.js';?>"></script>
       
        <script src="<?php echo base_url().'assets/js/jquery.ajaxchimp.min.js';?>"></script>
       
        <script src="<?php echo base_url().'assets/js/form-validator.min.js';?>"></script>
       
        <script src="<?php echo base_url().'assets/js/contact-form-script.js';?>"></script>
       
        <script src="<?php echo base_url().'assets/js/custom.js';?>"></script>


        
    </body>
</html>