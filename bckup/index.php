
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
        <title>Clacton Mosque</title>

        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="assets/css/jquery.bootstrap-touchspin.min.css">
        <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/color.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i">

        <?php
require_once 'config.php';
?>

<script src="https://js.stripe.com/v3/"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 

<style>

</style>

    </head>
    <body>
        <main>
          
            <header class="stick style2 w-100">
                <div class="container">
                <div class="logo-menu-wrap v2 d-flex flex-wrap align-items-center justify-content-between pat-bg thm-layer opc65 back-blend-multiply thm-bg">
                    <div class="logo"><h1 class="mb-0"><a href="index.php" title="Home"><img class="img-fluid" src="assets/images/logo3.png" alt="Logo" ></a></h1></div><!-- Logo -->
                 
                  
                    <div class="right-callender d-flex text-right">
                        <div class="main-date text-right">
                            <div class="post-date2">

                           
                                <span class="d-block">

                                <?php 
$dt=Date('Y-m-d');
$date=explode("-",$dt);
                            //echo $mon=$date[1];
                            $mon = date('M', strtotime($dt));
                            //$monfull=Date('M',$mon);
                            $dt=$date[2];
                            $year=$date[0];
                            echo $mon.' '.$dt;
                            ?>


                                </span>
                                <span class="d-block"><?php echo $year;?> </span>
                              
                            </div>
                          </div>
                    <div class="post-date-details">
                        <div class="Calendar-area">
                            <ul>
                                <li class="text-green "><i class='far fa-calendar'></i> FULL TIMETABLE & CALANDER</li>
                                <li><?php 
                                  require 'vendorar/autoload.php'; 
                                date_default_timezone_set('GMT');
$time = time();


require 'Arabic.php';
    $Arabic = new \ArPHP\I18N\Arabic();
    $correction = $Arabic->dateCorrection ($time);
                                
    $Arabic->setDateMode(8);
    //echo $Arabic->date('l j F Y h:i:s A', $time, $correction);
    echo $Arabic->date('l j F Y', $time, $correction);
   
    ?>
</li>
                            </ul>
                            
                        </div>
                        <div class="prayer-timing">

<ul class="time-list2 d-flex flex-wrap w-100 mb-0 list-unstyled">
<li class="pray-time"><a href="#"></a></li>
<li class="pray-time"><a href="#">FAJR</a></li>
<li class="pray-time"><a href="#">ZUHR</a></li>
<li class="pray-time"><a href="#">ASAR</a></li>
<li class="pray-time"><a href="#">MAGHRIB</a></li>
<li class="pray-time"><a href="#">ISHA</a></li>
<li><span>Begins</span>Jama’ah</li>
<li><span>6.16</span>6.36</li>
<li><span>12.11</span>12.45</li>
<li><span>1.36</span>2.30</li>
<li><span>3.55</span>4.02</li>
<li><span>5.32</span>7.30</li>
</ul>
</div>
                    </div>
                   </div>
                </div><!-- Logo Menu Wrap -->
                </div>
            </header><!-- Header -->
            <div class="topbar w-100">
                <div class="container">
                    <nav class="d-flex flex-wrap align-items-center justify-content-between">
                        <div >
                        <ul class="mb-0 list-unstyled d-inline-flex">
                                <li class="menucl active" id='ban'><a href="#banner" title="" onclick="makeactive('ban')" >Home</a>
                                  
                                </li>
                                <li class="menucl" id='ab' ><a href="#about" title="" onclick="makeactive('ab')">About</a>
                                   
                                </li>


                                <li class="menucl" id='ser' ><a href="#service" title="" onclick="makeactive('ser')">Service</a>  </li>

                                <li class="menucl" id='art' ><a href="#articles" title=""  onclick="makeactive('art')">Articles</a>  </li>
 
                                <li class="menucl" id='new' ><a href="#News" title=""  onclick="makeactive('new')">News & Event</a> </li>

                                <li class="menucl" id='mad'><a href="#madrasah" title=""  onclick="makeactive('mad')">Madrasah</a>   </li>
        
                                </li>
                                
                             
                            </ul>
                     
                        </div>
                        <div class="header-right">
                            <a class="thm-btn bg-color1" href="#pay1" title="">Make Donation<span></span><span></span><span></span><span></span></a>
                        </div>
                    </nav>
                </div>
              
            </div>
         
            <div class="sticky-menu">
                <div class="container">
                    <div class="sticky-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                        <div class="logo"><h1 class="mb-0"><a href="index.php" title="Home"><img class="img-fluid" src="assets/images/logo3.png" alt="Logo" ></a></h1></div><!-- Logo -->
                        <nav class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="header-left">
                            <ul class="mb-0 list-unstyled d-inline-flex">
                                    
                                    <li class="menucl" id='ban1' ><a href="#banner" title="" onclick="makeactive('ban1')" >Home</a>   </li>
                                    <li class="menucl" id='ab1'><a href="#about" title="" onclick="makeactive('ab1')">About</a>    </li>
    
    
                                    <li class="menucl" id='ser1'><a href="#service" title="" onclick="makeactive('ser1')">Service</a>  </li>
    
                                    <li class="menucl" id='art1'><a href="#articles" title="" onclick="makeactive('art1')">Articles</a>  </li>
     
                                    <li class="menucl" id='new1' ><a href="#News" title="" onclick="makeactive('new1')">News & Event</a> </li>
                                      
                                    <li class="menucl" id='mad1'><a href="#madrasah" title=""  onclick="makeactive('mad1')">Madrasah</a>   </li>
            
                                 
                                </ul>
                            </div>
                        </nav>
                        <div class="header-right">

                            <a class="thm-btn bg-color1" href="#pay1" title="">Make Donation<span></span><span></span><span></span><span></span></a>
                        </div>
                    </div>
                    
                </div>
            </div><!-- Sticky Menu -->
            <div class="rspn-hdr">
               
                <div class="lg-mn">
                    <div class="logo"><a href="#" title="Home"><img src="assets/images/logo-3.png" alt="Logo"></a></div>
                    <!-- <div class="rspn-cnt">
                        <span><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);" title="">info@youremailid.com</a></span>
                        <span><i class="thm-clr fas fa-phone-alt"></i>+96 125 554 24 5</span>
                    </div> -->
                    <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
                </div>
                <div class="rsnp-mnu">
                    <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                    <ul class="mb-0 list-unstyled w-100">
                        <li ><a href="#banner" title="">Home</a>   </li>
                        <li ><a href="#about" title="">About</a>    </li>


                        <li><a href="#service" title="">Service</a>  </li>

                        <li><a href="#articles" title="">Articles</a>  </li>

                        <li ><a href="#News" title="">News & Event</a> </li>
                          
                        <li ><a href="#madrasah" title="">Madrasah</a>   </li>

                   
                       
                    </ul>
                </div><!-- Responsive Menu -->

                <div class="rspn-mdbr">
                    <div class="right-callender d-flex text-center">
                       
                    <div class="post-date-details">
                        <div class="Calendar-area">
                            <ul>
                                <li class="text-green "><i class='far fa-calendar'></i> FULL TIMETABLE & CALANDER</li>
                                <li>3 Jumada AI-Akhirah 1445</li>
                            </ul>
                            
                        </div>
                        <div class="prayer-timing">

<ul class="time-list2 d-flex flex-wrap w-100 mb-0 list-unstyled">
<li class="pray-time"><a href="#"></a></li>
<li class="pray-time"><a href="#">FAJR</a></li>
<li class="pray-time"><a href="#">ZUHR</a></li>
<li class="pray-time"><a href="#">ASAR</a></li>
<li class="pray-time"><a href="#">MAGHRIB</a></li>
<li class="pray-time"><a href="#">ISHA</a></li>
<li><span>Begins</span>Jama’ah</li>
<li><span>6.16</span>6.36</li>
<li><span>12.11</span>12.45</li>
<li><span>1.36</span>2.30</li>
<li><span>3.55</span>4.02</li>
<li><span>5.32</span>7.30</li>
</ul>
</div>
                    </div>
                   </div>
                   
                 
                </div>
            </div><!-- Responsive Header -->
         
            
            <section>
                <div class="w-100 position-relative" id="banner">
                    <div class="feat-wrap v2 position-relative w-100">

       

                        <div class="feat-caro">
                            <div class="feat-item v2">
                                <div class="feat-img position-absolute" style="background-image: url(assets/images/images/slider.png);"></div>
                                <div class="feat-cap-wrap position-absolute d-inline-block d-flex">
	                                <div class="feat-cap left-icon d-inline-block">
	                                  
	                                    <h2 class="mb-0">Connect with the Divine, Contribute to the Mosque.
                                          
                                            </h2>
	                                    <p class="mb-0">Donate Today and Be a Part of Something Meaningful!</p>
	                                    <a class="thm-btn thm-bg" href="#pay1" title="">Donate<span></span><span></span><span></span><span></span></a>
	                                </div>

                                    <div class="d-inline-block form-sec">
                                        <form class="checkout-form w-100"  action="charge.php" method="post" id="payment-form">
                                            <h2>How much you want to Donate?</h2>
                                            <div class="d-flex w-100">
                                                <a href="#" class="btn btn-active banner-form-btn">One - Off</a>
                                                <!--a href="#" class="btn banner-form-btn">Custom amount</a-->

                                                <input class="custom-field" type="text" id="customamount"  Placeholder='Custom amount'  class='txt' />

                                            </div>
                                            <div class="amount-area d-flex">
                                                <div class="input-icon">
                                                    <i>£</i>
                                                    <input type="number" id="myNumber" value="5" class='txt' readonly>
                                                  </div>

                                                  <div class="input-icon">
                                                    <i>£</i>
                                                    <input type="number" id="myNumber" value="10" class='txt' readonly>
                                                  </div>

                                                  <div class="input-icon">
                                                    <i>£</i>
                                                    <input type="number" id="myNumber" value="12" class='txt' readonly>
                                                  </div>

                                                  <div class="input-icon">
                                                    <i>£</i>
                                                    <input type="number" id="myNumber" value="25" class='txt' readonly>
                                                  </div>
                                               
                                            </div>

                                            <input type="text" id="finalpriceold" name='finalpriceold' value=""  style="display:none;"  >
                                           <input type="hidden" name="amount" placeholder="Enter Amount"  id="finalprice" style="display:block;" />
                                            <h2 id="pay">Personal Information</h2>
                                            <div class="row mrg10">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <input type="text" placeholder="First Name" name="name" id="name">
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <input type="email" placeholder="Email Address" name="email" id="email">
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <input type="tel" placeholder="Phone Number" name="phone" maxlength=12 minlength=12>
                                                </div>
                                               
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <textarea placeholder="Comment"></textarea>
                                                </div>
                                            </div>

                                            <h2>Payment Method</h2>
                                            <ul class="method-list mb-0 list-unstyled w-100 d-flex">
                                                <li><input type="radio" name="method" id="radio1"> <label for="radio1"><img src="assets/images/images/master-card.png"></label></li>
                                                <li><input type="radio" name="method" id="radio2"> <label for="radio2"><img src="assets/images/images/visa-card.png"></label></li>
                                                </ul>


                                                

                                            <div class="row mt-20">
                                              
                                             
                                            </div>

                                            
                                            <div  class="my-input" id="card-element">
        <!-- A Stripe Element will be inserted here. -->
        </div>

                                            <div class="payment-method w-100">
                                              
                                                
                                                <button class="thm-btn thm-bg" type="submit">Donate NOW<span></span><span></span><span></span><span></span></button>
                                                <div><br><?php if ( isset($_SESSION['payment_id']) ) { ?>
<div class="success">
<strong style='color:green'><h5 style='color:green'><?php echo 'Payment is successful';
// Payment ID is :'. $_SESSION['payment_id']; 

?></h5></strong>
</div>
<?php unset($_SESSION['payment_id']); ?>
<?php } elseif ( isset($_SESSION['payment_error']) ) { ?>
<div class="error">
<strong><?php echo $_SESSION['payment_error']; ?></strong>
</div>
<?php unset($_SESSION['payment_error']); ?>
<?php } ?></div>                                                  
                                            </div>
                                        </form>
	                                 </div>
                                </div>
                            </div>

                       


                        
                            
                        
                        </div>
                    </div><!-- Featured Area Wrap -->
                </div>
            </section>

            <!-- About Area Wrap -->

          
                <section class="position-relative" id="about">
                    <div class="w-100 ptb-80 about-sec">
                        <div class="container">
                            <div class="about-wrap4 w-100">
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <div class="about-img  w-100">
                                            <img class="img-fluid w-100" src="assets/images/images/about.png" alt="About Image">
                                        </div>
                                        <div class="round-shape-one">
                                            <img src="assets/images/round-shape (1).png" alt="shape">
                                        </div> 
                                    </div>
                                    <div class="col-md-6 col-lg-6  col-sm-12">
                                        <div class="about-inner4 w-100">
                                          
                                            <h2 class="mb-0">About Us</h2>

                                            <p class="mb-0">At Clecton Mosque, we believe in fostering spiritual growth, community connection, and positive change. Our mosque serves as a haven for worship, education, and community engagement. With a rich history and a commitment to inclusivity, we are dedicated to creating an environment that uplifts the spirit and strengthens the bonds of our community.</p>
                                            <p class="mb-0">Our mission is to provide a place of worship that creates an atmosphere of unity and mutual respect. Beyond religious services, we actively engage in community outreach, educational programs, and charitable initiatives to contribute positively to the society we serve.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- About Wrap 4 -->
                        </div>
                    </div>
                </section>

                <section>
                    <div class="w-100 ptb-80 position-relative" id="service">
                        <div class="container">
                            <div class="sec-title text-center w-100">
                                <div class="sec-title-inner d-inline-block">
                                 
                                    <h2 class="mb-0">Services We Offer</h2>
                                    <p class="mb-0">Elevating Lives, Enriching Souls: Our Sacred Commitment.</p>
                                </div>
                            </div><!-- Sec Title -->

                            <div class="serv-wrap">
                                <div class="row ">
                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="serv-box text-center pat-bg gray-layer opc8 position-relative back-blend-multiply gray-bg w-100">
                                            <img src="assets/images/images/quick-leaning.png" class="mb-20" alt="Quran-Translation"/>
                                            <h3 class="mb-0">Quran Learning</h3>
                                            <p class="mb-0">Deepen your spiritual connection through transformative Quran learning, guiding you on a sacred journey of enlightenment.</p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="serv-box text-center pat-bg gray-layer opc8 position-relative back-blend-multiply gray-bg w-100">
                                            <img src="assets/images/images/f-service.png" class="mb-20" alt="Quran-Translation"/>
                                            <h3 class="mb-0">Funeral Services</h3>
                                            <p class="mb-0">Compassionate funeral services honoring departed souls, providing solace and dignified support during difficult times.</p>
                                          
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="serv-box text-center pat-bg gray-layer opc8 position-relative back-blend-multiply gray-bg w-100" >
                                            <img src="assets/images/images/development.png" class="mb-20" alt="Quran-Translation"/>
                                            <h3 class="mb-0">Hadith Learning</h3>
                                            <p class="mb-0"> Explore profound insights with Hadith learning, unlocking the wisdom of prophetic sayings for personal and communal growth.</p>
                                           
                                        </div>
                                    </div>
                                   
                                   
                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="serv-box text-center pat-bg gray-layer opc8 position-relative back-blend-multiply gray-bg w-100" >
                                            <img src="assets/images/images/icon-1.png" class="mb-20" alt="Quran-Translation"/>
                                            <h3 class="mb-0">Counseling</h3>
                                            <p class="mb-0">Personal, familial, and spiritual support in a confidential space, guiding you through life's challenges with care.</p>
                                         
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="serv-box text-center pat-bg gray-layer opc8 position-relative back-blend-multiply gray-bg w-100" >
                                            <img src="assets/images/images/scholarshif.png" class="mb-20" alt="Quran-Translation"/>
                                            <h3 class="mb-0">Community Guidance</h3>
                                            <p class="mb-0">Nurturing community bonds, our guidance services create a harmonious environment for collective growth and support.</p>
                                          
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="serv-box text-center pat-bg gray-layer opc8 position-relative back-blend-multiply gray-bg w-100">
                                            <img src="assets/images/images/school.png" class="mb-20" alt="Quran-Translation"/>
                                            <h3 class="mb-0">Mosque Development</h3>
                                            <p class="mb-0">Contribute to a vibrant future; support mosque development initiatives, shaping a sacred space for generations.</p>
                                            <!-- <a href="#" title="">Read More</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="our-second-service">
                                <div class="row">
                                    <div class="sec-title text-center w-100">
                                        <div class="sec-title-inner d-inline-block">
                                            <h2 class="mb-0">How Your Donations Help?</h2>
                                            <p>Your generous contributions go directly towards:</p>
                                        </div>
                                    </div><!-- Sec Title --> 
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="team-box text-center w-100">
                                            <div class="team-img overflow-hidden position-relative w-100">
                                                <img class="img-fluid w-100" src="assets/images/images/post1.png" alt="Team Image 2">
                                                
                                            </div>
                                            <div class="team-info">
                                                <span class="d-block thm-clr"> 0000 | 00</span>
                                                    <p class="mb-0"><a href="#" title="">Donators | Day Left</a></p>
                                        
                                            </div>
                                        </div>

                                        <div class="serv-content-box">
                                            <div class="gola-points-area d-flex w-100 mb-20">
                                                <span class="donate-goal d-inline-block thm-clr w-50"><h6 class="d-inline-block">Raised:</h6>  £ 30,000</span>
                                                <span class="donate-goal d-inline-block thm-clr text-right"><h6 class="d-inline-block">Goal:</h6>   £ 30,000</span>
                                            </div>

                                            <h3>Educational Programs </h3>
                                            <p>Supporting initiatives that promote learning, growth, and understanding.</p>
                                          
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="team-box text-center w-100">
                                            <div class="team-img overflow-hidden position-relative w-100">
                                                <img class="img-fluid w-100" src="assets/images/images/post2.png" alt="Team Image 2">
                                                
                                            </div>
                                            <div class="team-info">
                                                <span class="d-block thm-clr"> 0000 | 00</span>
                                                <p class="mb-0"><a href="#" title="">Donators | Day Left</a></p>
                                        
                                            </div>
                                        </div>
                                        <div class="serv-content-box">
                                            <div class="gola-points-area d-flex w-100 mb-20">
                                                <span class="donate-goal d-inline-block thm-clr w-50"><h6 class="d-inline-block">Raised:</h6>  £ 30,000</span>
                                                <span class="donate-goal d-inline-block thm-clr text-right"><h6 class="d-inline-block">Goal:</h6>   £ 30,000</span>
                                            </div>

                                            <h3>Community Outreach </h3>
                                            <p>Extending a helping hand to those in need through charitable activities and outreach programs.</p>
                                          
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="team-box text-center w-100">
                                            <div class="team-img overflow-hidden position-relative w-100">
                                                <img class="img-fluid w-100" src="assets/images/images/post3.png" alt="Team Image 2">
                                                
                                            </div>
                                            <div class="team-info">
                                               
                                                    <span class="d-block thm-clr"> 0000 | 00</span>
                                                    <p class="mb-0"><a href="#" title="">Donators | Day Left</a></p>
                                              
                                            </div>
                                        </div>

                                        <div class="serv-content-box">
                                            <div class="gola-points-area d-flex w-100 mb-20">
                                                <span class="donate-goal d-inline-block thm-clr w-50"><h6 class="d-inline-block">Raised:</h6>  £ 30,000</span>
                                                <span class="donate-goal d-inline-block thm-clr text-right"><h6 class="d-inline-block">Goal:</h6>   £ 30,000</span>
                                            </div>

                                            <h3>Facility Upgrades </h3>
                                            <p>Enhancing our infrastructure to serve the needs of our growing community better.</p>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                           
                        </div>
                    </div>
                </section>
        

                <section>
                    <div class="w-100 position-relative" id="madrasah">
                        <div class="fixed-bg" style="background-image: url(assets/images/images/bg-school.png);"></div>

                        <div class="time-course-wrap w-100">
                            <div class="row mrg">
                                <div class="col-md-12 col-sm-12 col-lg-6">
                                    <div class="time-wrap d-flex flex-wrap align-items-center justify-content-end thm-layer opc95 position-relative w-100">
                                        <div class="time-inner w-100">
                                            <div class="sec-title w-100">
                                                <div class="sec-title-inner d-inline-block">
                                                    <h2 class="mb-0">Islamic Madrassah</h2>
                                                    <p class="mb-0">Discover a nurturing environment at our Islamic madrassah, where young minds embark on a journey of spiritual growth guided by dedicated educators, fostering knowledge, character, and lifelong values..</p>
                                                </div>
                                            </div><!-- Sec Title -->
                                            <div class="time-list-wrap d-flex flex-wrap w-100">
                                                <div class="time-box d-flex flex-wrap align-items-center justify-content-between">
                                                    <table class="time-list">
                                                        <tr>
                                                            <th>
                                                                School Calendar 
                                                            </th>
                                                            <th>
                                                                Fall Semester
                                                            </th>
                                                            <th>
                                                                Spring Semester
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="spacer10"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                First day
                                                            </td>
                                                            <td>
                                                                9.3.2021
                                                            </td>
                                                            <td>
                                                                9.3.2021
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="spacer10"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                First day
                                                            </td>
                                                            <td>
                                                                9.3.2021
                                                            </td>
                                                            <td>
                                                                9.3.2021
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="spacer10"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                First day
                                                            </td>
                                                            <td>
                                                                9.3.2021
                                                            </td>
                                                            <td>
                                                                9.3.2021
                                                            </td>
                                                        </tr>
                                                      
                                                        <tr>
                                                            <td colspan="3" class="spacer10"></td>
                                                        </tr>
                                                    </table>
                                                </div>

                                           



                                               

                                                <div class="view-more mt-20 d-inline-block text-center w-100">

                                             


                                                    <a class="thm-btn thm-bg" id="btn1" href="javascript:void(0)" title=""  data-toggle="modal" data-target="#exampleModal">Enquiry Now<span></span><span></span><span></span><span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Time Wrap -->
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-6">
                                    <div class="round-shape hidden-xs">
                                        <img src="assets/images/round-shape.png" alt="shape">
                                    </div> 
                                </div>
                            </div>
                        </div><!-- Time & Course Wrap -->
                    </div>
                </section>

                <section>
                    <div class="w-100 pt-90 position-relative" id="articles">
                        <div class="container">
                            <div class="sec-title text-center w-100">
                                <div class="sec-title-inner d-inline-block">
                                   
                                    <h2 class="mb-0">Our Recent Articles</h2>
                                    <p class="mb-0">Empowering Minds, Inspiring Hearts: Read, Reflect, Transform.</p>
                                </div>
                            </div><!-- Sec Title -->
                            <div class="blog-wrap res-row w-100">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="post-box w-100">
                                            <div class="post-img overflow-hidden position-relative w-100">
                                                <a href="#" title=""><img class="img-fluid w-100" src="assets/images/images/news/news-1.png" alt="Blog Image 1"></a>
                                            </div>
                                            <div class="post-info position-relative w-100">
                                                
                                                <span class="post-date thm-clr">July 30, 2020</span>
                                                <h3 class="mb-0"><a href="#" title="">Unveiling the Essence: Exploring Timeless Islamic Teachings .</a></h3>
                                                <ul class="post-meta d-flex flex-wrap mb-0 list-unstyled">
                                                    <li><i class="fas fa-user-alt"></i>Post By: <a href="javascript:void(0);" title=""> Admin</a></li>
                                                    <li><i class="fas fa-comment-alt"></i>1 Comments</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="post-box w-100">
                                            <div class="post-img overflow-hidden position-relative w-100">
                                                <a href="#" title=""><img class="img-fluid w-100" src="assets/images/images/news/news-2.png" alt="Blog Image 2"></a>
                                            </div>
                                            <div class="post-info position-relative w-100">
                                                
                                                <span class="post-date thm-clr">June 28, 2020</span>
                                                <h3 class="mb-0"><a href="#" title="">Navigating Life's Seas: Wisdom from Quranic Verses on Resilience</a></h3>
                                                <ul class="post-meta d-flex flex-wrap mb-0 list-unstyled">
                                                    <li><i class="fas fa-user-alt"></i>Post By: <a href="javascript:void(0);" title=""> Admin</a></li>
                                                    <li><i class="fas fa-comment-alt"></i>5 Comments</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="post-box w-100">
                                            <div class="post-img overflow-hidden position-relative w-100">
                                                <a href="#" title=""><img class="img-fluid w-100" src="assets/images/images/news/news-3.png" alt="Blog Image 3"></a>
                                            </div>
                                            <div class="post-info position-relative w-100">
                                               
                                                <span class="post-date thm-clr">April 25, 2020</span>
                                                <h3 class="mb-0"><a href="#" title="">In the Tapestry of Faith: Connecting Threads of Unity.</a></h3>
                                                <ul class="post-meta d-flex flex-wrap mb-0 list-unstyled">
                                                    <li><i class="fas fa-user-alt"></i>Post By:  <a href="javascript:void(0);" title="">Admin
                                                    </a></li>
                                                    <li><i class="fas fa-comment-alt"></i>15 Comments</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="post-box w-100">
                                            <div class="post-img overflow-hidden position-relative w-100">
                                                <a href="#" title=""><img class="img-fluid w-100" src="assets/images/images/news/news-4.png" alt="Blog Image 3"></a>
                                            </div>
                                            <div class="post-info position-relative w-100">
                                               
                                                <span class="post-date thm-clr">April 25, 2020</span>
                                                <h3 class="mb-0"><a href="#" title="">Rays of Hope: Illuminating Lessons from Prophet Muhammad's Life.</a></h3>
                                                <ul class="post-meta d-flex flex-wrap mb-0 list-unstyled">
                                                    <li><i class="fas fa-user-alt"></i>Post By:  <a href="javascript:void(0);" title="">Admin
                                                    </a></li>
                                                    <li><i class="fas fa-comment-alt"></i>15 Comments</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="post-box w-100">
                                            <div class="post-img overflow-hidden position-relative w-100">
                                                <a href="#" title=""><img class="img-fluid w-100" src="assets/images/images/news/news-5.png" alt="Blog Image 3"></a>
                                            </div>
                                            <div class="post-info position-relative w-100">
                                               
                                                <span class="post-date thm-clr">April 25, 2020</span>
                                                <h3 class="mb-0"><a href="#" title="">Beyond Words: Understanding the Power of Dua in Daily Life</a></h3>
                                                <ul class="post-meta d-flex flex-wrap mb-0 list-unstyled">
                                                    <li><i class="fas fa-user-alt"></i>Post By:  <a href="javascript:void(0);" title="">Admin
                                                    </a></li>
                                                    <li><i class="fas fa-comment-alt"></i>15 Comments</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-lg-4">
                                        <div class="post-box w-100">
                                            <div class="post-img overflow-hidden position-relative w-100">
                                                <a href="#" title=""><img class="img-fluid w-100" src="assets/images/images/news/news-6.png" alt="Blog Image 3"></a>
                                            </div>
                                            <div class="post-info position-relative w-100">
                                               
                                                <span class="post-date thm-clr">April 25, 2020</span>
                                                <h3 class="mb-0"><a href="#" title="">Harmony in Diversity: Embracing Islamic Values in Modern Society</a></h3>
                                                <ul class="post-meta d-flex flex-wrap mb-0 list-unstyled">
                                                    <li><i class="fas fa-user-alt"></i>Post By:  <a href="javascript:void(0);" title="">Admin
                                                    </a></li>
                                                    <li><i class="fas fa-comment-alt"></i>15 Comments</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Blog Wrap -->
                           
                        </div>
                    </div>
                </section>
            <!-- About Area Wrap -->

            <section>
                <div class="w-100 ptb-80 position-relative" id="News">
                    <div class="fixed-bg" style="background-image: url(assets/images/images/bg-news.png);"></div>

                    <div class="container">
                        <div class="sec-title text-center w-100">
                            <div class="sec-title-inner d-inline-block">
                                <h2 class="mb-0">Our News and Events</h2>
                            </div>
                        </div><!-- Sec Title --> 
                        <div class="blog-wrap res-row w-100">
                            <div class="post-detail-wrap w-100">
                                <div class="row">
                                    <div class="col-md-12 col-lg-8 col-sm-12">
                                        <div class="post-details-area">
                                            <div class="post-detail-img w-100">
                                                <img class="img-fluid w-100" src="assets/images/images/main-post.png" alt="Blog Detail Image 1">
                                            </div>
                                            <div class="post-detail-info position-relative w-100">
                                                <ul class="post-meta2 d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
                                                    <li class="thm-clr bold-txt">Sep 11, 2023</li>
                                                </ul>
                                                <h2 class="mb-0">Clecton Mosque Celebrates Record Attendance at Jumu'ah</h2>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-4 col-sm-12">
                                        <div class="left-sidebar">
                                            <div class="widget2 w-100">
                                                <h3 class="widget-title2">RECENT POSTS</h3>
                                                <div class="mini-posts-wrap w-100">
                                                    <div class="mini-post-box d-flex flex-wrap w-100">
                                                        <a href="#" title=""><img class="img-fluid w-100" src="assets/images/images/mini-post-1.png" alt="Mini Post Image 1"></a>
                                                        <div class="mini-post-info">
                                                            <span class="d-block thm-clr">Mar 20, 2020</span>
                                                            <h4 class="mb-0"><a href="#" title="">Innovative Quran Learning Program Launched at Clecton</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="mini-post-box d-flex flex-wrap w-100">
                                                        <a href="#" title=""><img class="img-fluid w-100" src="assets/images/images/mini-post-2.png" alt="Mini Post Image 2"></a>
                                                        <div class="mini-post-info">
                                                            <span class="d-block thm-clr">Jun 18, 2020</span>
                                                            <h4 class="mb-0"><a href="#" title="">Clecton Mosque Initiates Community Outreach Campaign</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="mini-post-box d-flex flex-wrap w-100">
                                                        <a href="#" title=""><img class="img-fluid w-100" src="assets/images/images/mini-post-3.png" alt="Mini Post Image 3"></a>
                                                        <div class="mini-post-info">
                                                            <span class="d-block thm-clr">Jul 25, 2020</span>
                                                            <h4 class="mb-0"><a href="#" title="">The Successful Launch Of Community Outreach Program</a></h4>
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

            <section>
                <div class="w-100 ptb-80 position-relative form-footer-area" id="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-form">
                                    <form class="checkout-form w-100"  action="charge1.php" method="post" id="payment-form1">
                                        <h2 class="mb-0">Make a Difference, Donate Today!</h2>
                                        <p>Your support is crucial in enabling us to continue our mission and enhance our services. We've made it easy for you to contribute through our secure online donation platform.</p>
                                        <div class="d-flex w-100">
                                            <a href="#" class="btn btn-active banner-form-btn">One - Off</a>
                                            <!--a href="#" class="btn banner-form-btn">Custom amount</a-->

                                            <!--input class="" type="text" id="customamount1"  Placeholder='Custom amount'  class='txt' /-->

                                            <input  type="text" id="customamount1"  Placeholder='Custom amount'  class="custom-field" >
                                        </div>
                                        <div class="amount-area d-flex">
                                            <div class="input-icon">
                                                <i>£</i>
                                                <input type="number" id="myNumber" value="5" class='txt1' readonly>
                                              </div>

                                              <div class="input-icon">
                                                <i>£</i>
                                                <input type="number" id="myNumber" value="10" class='txt1' readonly>
                                              </div>

                                              <div class="input-icon">
                                                <i>£</i>
                                                <input type="number" id="myNumber" value="12" class='txt1' readonly>
                                              </div>

                                              <div class="input-icon">
                                                <i>£</i>
                                                <input type="number" id="myNumber" value="25" class='txt1' readonly>
                                              </div>
                                           
                                        </div>
                                        <input type="hidden" id="finalprice1" name='amount' value=""  style="display:none;"  >
                                        <h2 >Personal Information</h2>
                                        <div class="row mrg10">
                                            <div class="col-md-4 col-sm-4 col-lg-4">
                                                <input type="text" placeholder="First Name" name="name1" id="name1">
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-lg-4">
                                                <input type="email" placeholder="Email Address" name="email1" id="email1">
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-lg-4">
                                                <input type="tel" placeholder="Phone Number" name="phone1"  maxlength=12 minlength=12>
                                            </div>
                                           
                                            <div class="col-md-12 col-sm-12 col-lg-12" id="pay1">
                                                <textarea placeholder="Comment" name="message1"></textarea>
                                            </div>
                                        </div>

                                        <h2>Payment Method</h2>

                                        <ul class="method-list mb-0 list-unstyled w-100 d-flex">
                                            <li><input type="radio" name="method" id="radio11"> <label for="radio11"><img src="assets/images/images/master-card.png"/></label></li>
                                            <li><input type="radio" name="method" id="radio22"> <label for="radio22"><img src="assets/images/images/visa-card.png"/></label></li>
                                                    </ul>

                                                    <div class="row mt-20">
                                                      
                                                     
                                                    </div>
                                                    <div class='my-input' id="card-element1">
        
        </div>


                                        <div class="payment-method w-100 mt-20">
                                          
                                            
                                            <button class="thm-btn thm-bg" type="submit">Donate NOW<span></span><span></span><span></span><span></span></button>                                            
                                        </div>


                                        <?php if ( isset($_SESSION['payment_id1']) ) { ?>
<div class="success ">
<strong style='color:green'><h5 style='color:green'><?php echo 'Payment is successful';
// Payment ID is :'. $_SESSION['payment_id']; 

?></h5></strong>
</div>
<?php unset($_SESSION['payment_id1']); ?>
<?php } elseif ( isset($_SESSION['payment_error1']) ) { ?>
<div class="error">
<strong><?php echo $_SESSION['payment_error1']; ?></strong>
</div>
<?php unset($_SESSION['payment_error1']); ?>
<?php } ?>





                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-img">
                                    <img src="assets/images/images/make-donate.png"/>
                                </div>
                                <div class="round-shape">
                                    <img src="assets/images/round-shape (1).png" alt="shape">
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="w-100 pt-70 dark-layer opc85 position-relative green-bg">
                    <div class="container">
                        <div class="footer-top">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="widget w-100">
                                        <h4 class="widget-title mb-0">Get Involved, Stay Connected</h4>
                                      <p class="pt-10">Stay informed about upcoming events, religious services, and community activities by subscribing to our newsletter. Connect with us on social media to join our online community.</p>
                                    </div>
                                  
                                </div>
                           
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="widget w-100">
                                    
                                    <form class="newsletter-form w-100">
                                        <i class="far fa-envelope thm-clr"></i>
                                        <form action='mail.php' method="post" class="subscribe-form" id="frmemail">
                                        <input type="email" placeholder="Enter your email address here" name="emailidnews" id="emailidnews">
                                        <button class="thm-btn thm-bg" type="submit" onclick="return go1();">SUBMIT<span></span><span></span><span></span><span></span></button>
                                    </form>
                                    <span class="dis" id='errsmsg' style='color:#f0f0f0;font-weight:bold;margin-top:10px'></span>
						  <span class="dis" id='newsmsg' style='color:#f0f0f0;font-weight:bold;margin-top:10px'></span>
                                </div>
                              
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer>
                <div class="w-100 pt-70 dark-layer opc85 position-relative ">
                    <div class="fixed-bg patern-bg back-blend-multiply dark-bg" style="background-image: url(assets/images/pattern-bg.jpg);"></div>
                    <div class="container">
                        
                        <div class="footer-data w-100">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-3">
                                    <div class="widget w-100">
                                        <div class="logo"><h1 class="mb-0"><a href="index.php" title="Home"><img class="img-fluid" src="assets/images/logo3.png" alt="Logo" srcset="assets/images/logo3.png"></a></h1></div>
                                        <p class="mb-0">Contact us to explore how you can be involved in the positive impact we are making.</p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-9">
                                    <div class="row justify-content-between">
                                           
                                                <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <div class="widget w-100">
                                                        <h4 class="widget-title">Quick Link</h4>
                                                        <ul class="mb-0 list-unstyled w-100">
                                                            <li><a href="#about" title="">About</a></li>
                                                            <li><a href="#service" title="">Service</a></li>
                                                            <li><a href="#articles" title="">Our articles</a></li>
                                                            <li><a href="#News" title="">Our Events</a></li>
                                                            <li><a   href="javascript:void(0)" title=""  data-toggle="modal" data-target="#terms" title="">Terms & condition</a></li>
                                                            <li><a href="javascript:void(0)" title=""  data-toggle="modal" data-target="#policy1" title="">Privacy & Policy</a></li>
                                                            <li><a href="javascript:void(0)" title=""  data-toggle="modal" data-target="#policy" title="">Cookies & Policy</a></li>
                                                        </ul>
                                                    </div>
                                                </div>




                                                <div class="col-md-4 col-sm-6 col-lg-4 address-block">
                                                    <h4 class="widget-title">Contact Us</h4>

                                                    <h5 class="sub-title">Location</h5>
                                                    <ul class="mb-0 list-unstyled w-100">
                                                    <li><a href="#"> 94 Pier Avenue, Clacton-On_sea, 
CO15 1NJ</a> </li>                              </li>
                                                    </ul>

                                                    
                                                    <h5 class="sub-title">Phone</h5>
                                                    <ul class="mb-0 list-unstyled w-100">
                                                    <li><a href="tel:+47974701829">+447974701829</a> </li>      
                                                    <li><a href="tel:+447572338818">+447572338818</a> </li>                               </li>
                                                    </ul>
                                                    <h5 class="sub-title">Email Id</h5>
                                                    <ul class="mb-0 list-unstyled w-100">
                                                    <li><a href="#">info@clactonmosque.com </a> </li>                                 </li>
                                                    </ul>
                                                 
                                                   

                                                 
                                                   
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-lg-4 noPad">
                                                <div class="widget w-100 footer-para">
                                                        <h4 class="widget-title">Follow Us</h4>
                                                        <div class="social-links d-inline-flex mb-25">
                                                            <a href="#" title="Twtiiter" target="_blank"><i class="fab fa-twitter"></i></a>
                                                            <a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                            <a href="#" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                                            <a href="#" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                            <a href="#" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                                        </div>

                                                        <p class=""> <b>  TENDRING DEEN AND EDUCATION TRUST </b><br> <b> Charity Number: 1157137 </b> </p>


                                                </div>
                                          
                                      
                                     
                                    </div>
                                </div>
                            </div>
                        </div><!-- Footer Data -->


                        <div class="copyright-wrap">
                            <div class="container">
                            <div class="row justify-content-between align-items-center">
                            <div class="col-lg-12 col-md-12 col-md-auto text-center">
                            <p class="copyright-text">Copyright @ 2023 <a href="index.php">Clacton Mosque</a>. All Rights Reserved . Created with <img src="assets/images/images/heart.png"> by <a href="https://pocketfriendlyweb.com/" target="_blank">PocketFriendlyWeb.</a></p>
                            </div>
                           
                            </div>
                            </div>
                            </div>
                    </div>
                </div>
            </footer>


 <div class="modal" tabindex="-1" role="dialog"  id="exampleModal">

  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content">
          <div class="modal-header">
                <h5 class="modal-title">Enquiries</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                       </button>
           </div>
           
           <form method="post" id="frmcontact"  action="contactenquiryprocesspopup.php">
           <div class="modal-body">
            
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="input-group">
                        <input type="text" id="fname" class="form-control" placeholder="First Name" name="fname" style="margin-bottom:35px !important;"  >
                            <!-- <input type="text"   class="form-control txt3" placeholder="FIRST NAME" aria-label="Username" aria-describedby="basic-addon1" > -->
                            <label id="fname-error" class="error errpopup" for="fname" style='padding-top:36px;position:absolute;margin-top:5px;'></label>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="input-group">
                        <input type="text" id="lname" name="lname" class="form-control txt3" placeholder="Last Name" style="margin-bottom:35px !important;" >
                        <label id="lname-error" class="error errpopup" for="lname" style='padding-top:36px;position:absolute;margin-top:5px;'></label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="input-group">
                        <input type="email" id="email3" name="email3" class="form-control txt3 " placeholder="Email" style="margin-bottom:35px !important;"  >
                                        <label id="email3-error" class="error errpopup" for="email3" style='padding-top:36px;position:absolute;margin-top:5px;'></label>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="input-group">
                        <input type="text" id="phone3"  maxlength="12" name="phone3" class="form-control phone txt3" placeholder="Phone"  style="margin-bottom:35px !important;">
                        <label id="phone3-error" class="error errpopup" for="phone3" style='padding-top:36px;position:absolute;margin-top:5px;'></label>
                        </div>
                    </div>
                </div>
                
               

                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="input-group">
                                        <textarea class="form-control txtarea" rows="4" cols="50" placeholder="Comment..." id="message3" name="message3" style="margin-bottom:200px"></textarea>
                                        <label id="message3-error" class="error errpopup" for="message3" style='padding-top:56px;position:absolute;margin-top:60px;'></label>
                           </div>
                      </div>
                  
                  </div>
               
      </div>
             
      
                <div class="modal-footer">
              
                <div id='enqmsgpopup'></div>
                <button type="submit" class="btn btn-primary bg-color-green">Save changes</button>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
    </div>
    </form>
   
  </div>
</div>



<div id="policy" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cookies & Policy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                       </button>
                </div>
                <div class="modal-body">
             <p>   This website utilizes cookies for personalization, ad display, social media integration, and traffic analysis. We share data with our social media, advertising, and analytics partners. Cookies enhance website efficiency by storing small text files on your device. </p>

              <p>    According to the law, we can store necessary cookies without permission. However, your consent is required for other cookie types. Our site employs various cookies, including those from third-party services. </p>

                <p> You have the option to change or withdraw your cookie consent at any time. Further details about us, contact information, and data processing are available in our Privacy Policy.</p>

                 <p> When contacting us about your consent, please provide your consent ID and date. This consent applies to the domain <b> clactonmosque.com.</b> </p>
               <h5>  Necessary </h5>
          <p> Necessary cookies help make a website usable by enabling basic functions like page navigation and access to secure areas of the website. The website cannot function properly without these cookies. </p>
  <div class="table-responsive">
          <table class="table-cookies">
            <tr>
                <th>Name</th>
                <th>Provider</th>
                <th>Purpose</th>
                <th>Expiry</th>
                <th>Type</th>
             </tr>
           <tr>
            <td>__cflb</td>
            <td>api2.hcaptcha.com</td>
            <td>Registers which server-cluster is serving the visitor. This is used in context with load balancing, in order to optimize user experience.</td>
            <td>1 day</td>
            <td>HTTP Cookie</td>
            </tr>

            <tr>
            <td>__stripe_mid</td>
            <td>Stripe</td>
            <td>This cookie is necessary for making credit card transactions on the website. The service is provided by Stripe.com which allows online transactions without storing any credit card information..</td>
            <td>1 year</td>
            <td>HTTP Cookie</td>
            </tr>

            <tr>
            <td>__stripe_sid</td>
            <td>Stripe</td>
            <td>This cookie is necessary for making credit card transactions on the website. The service is provided by Stripe.com </td>
            <td>1 day</td>
            <td>HTTP Cookie</td>
            </tr>

            <tr>
            <td>-</td>
            <td> -</td>
            <td>which allows online transactions without storing any credit card information. </td>
            <td>-</td>
            <td>-</td>
            </tr>

            <tr>
            <td>_ab</td>
            <td> Stripe </td>
            <td>This cookie is necessary for making credit card transactions on the website. The service is provided by Stripe.com which allows online transactions without storing any credit card information.</td>
            <td>Session</td>
            <td>HTML Local Storage</td>
            </tr>

            <tr>
            <td>_mf</td>
            <td> Stripe </td>
            <td>This cookie is necessary for making credit card transactions on the website. The service is provided by Stripe.com which allows online transactions without storing any credit card information.</td>
            <td>Session</td>
            <td>HTML Local Storage</td>
            </tr>

            <tr>
            <td>_wpfuuid</td>
            <td> centralmosque.co.uk </td>
            <td>Registers a unique ID for the visitor in order for the website to recognize the visitor upon re-entry.</td>
            <td>11 years</td>
            <td>HTTP Cookie</td>
            </tr>

            <tr>
            <td>CONSENT</td>
            <td> YouTube </td>
            <td>Used to detect if the visitor has accepted the marketing category in the cookie banner. This cookie is necessary for GDPR-compliance of the website.</td>
            <td>2 years</td>
            <td>HTTP Cookie</td>
            </tr>

            <tr>
            <td>iconify-count</td>
            <td> clactonmosque.com </td>
            <td>Used by the website's content management system (CMS) to determine how the website's menu-tabs should be displayed.</td>
            <td>Persistent</td>
            <td>HTML Local Storage</td>
            </tr>


            <tr>
            <td>iconify-version</td>
            <td> clactonmosque.com </td>
            <td>Used by the website's content management system (CMS) to determine how the website's menu-tabs should be displayed.</td>
            <td>Persistent</td>
            <td>HTML Local Storage</td>
            </tr>

            <tr>
            <td>id</td>
            <td> Stripe </td>
            <td>Pending</td>
            <td>Session</td>
            <td>HTML Local Storage</td>
            </tr>


            <tr>
            <td>m</td>
            <td>Stripe </td>
            <td>Determines the device used to access the website. This allows the website to be formatted accordingly.</td>
            <td>400 days</td>
            <td>HTTP Cookie</td>
            </tr>

            <tr>
            <td>VISITOR_PRIVACY_METADATA</td>
            <td>YouTube </td>
            <td>Stores the user's cookie consent state for the current domain</td>
            <td>180 days</td>
            <td>HTTP Cookie</td>
            </tr>

            <tr>
            <td>wpEmojiSettingsSupports</td>
            <td>clactonmosque.com </td>
            <td>This cookie is part of a bundle of cookies which serve the purpose of content delivery and presentation. The cookies keep the correct state of font, blog/picture sliders, color themes and other website settings.</td>
            <td>Session</td>
            <td>HTML Local Storage</td>
            </tr>
        </table>

</div>

          <h5 class="pt-30">Statistics</h5>
          <p> Statistic cookies help website owners to understand how visitors interact with websites by collecting and reporting information anonymously. </p>
          <div class="table-responsive">
          <table class="table-cookies">
            <tr>
                <th>Name</th>
                <th>Provider</th>
                <th>Purpose</th>
                <th>Expiry</th>
                <th>Type</th>
             </tr>
           <tr>
            <td>1</td>
            <td>Stripe</td>
            <td>Registers data on visitors' website-behaviour. This is used for internal analysis and website optimization.</td>
            <td>Session</td>
            <td>HTML Local Storage</td>
            </tr>

            <tr>
            <td>td</td>
            <td>Google</td>
            <td>Registers statistical data on users' behaviour on the website. Used for internal analytics by the website operator.</td>
            <td>Session</td>
            <td>Pixel Tracker</td>
            </tr>

        </table>
        </div>
       
        <h5 class="pt-30">  Marketing  </h5>
          <p> Marketing cookies are used to track visitors across websites. The intention is to display ads that are relevant and engaging for the individual user and thereby more valuable for publishers and third party advertisers. </p>
          <div class="table-responsive">
          <table class="table-cookies">
            <tr>
                <th>Name</th>
                <th>Provider</th>
                <th>Purpose</th>
                <th>Expiry</th>
                <th>Type</th>
             </tr>
           <tr>
            <td>_ga [x2]</td>
            <td>Google</td>
            <td>Used to send data to Google Analytics about the visitor's device and behavior. Tracks the visitor across devices and marketing channels..</td>
            <td>2 years</td>
            <td>HTTP Cookie</td>
            </tr>

            <tr>
            <td>_ga_# [x2]</td>
            <td>Google</td>
            <td>Used to send data to Google Analytics about the visitor's device and behavior. Tracks the visitor across devices and marketing channels.</td>
            <td>2 years</td>
            <td>HTTP Cookie</td>
            </tr>

            <tr>
            <td>ads/ga-audiences</td>
            <td>Google</td>
            <td>Used by Google AdWords to re-engage visitors that are likely to convert to customers  </td>
            <td>Session</td>
            <td>Pixel Tracker</td>
            </tr>

            <tr>
            <td></td>
            <td> </td>
            <td>based on the visitor's online behaviour across websites. </td>
            <td></td>
            <td></td>
            </tr>

            <tr>
            <td>LAST_RESULT_ENTRY_KEY</td>
            <td> YouTube </td>
            <td>Used to track user’s interaction with embedded content..</td>
            <td>Session</td>
            <td>HTTP Cookie</td>
            </tr>

            <tr>
            <td>remote_sid</td>
            <td> YouTube </td>
            <td>Necessary for the implementation and functionality of YouTube video-content on the website.</td>
            <td>Session</td>
            <td>HTML Local Storage</td>
            </tr>

            <tr>
            <td>TESTCOOKIESENABLED</td>
            <td> YouTube </td>
            <td>Used to track user’s interaction with embedded content.</td>
            <td>1 day</td>
            <td>HTTP Cookie</td>
            </tr>

            <tr>
            <td>VISITOR_INFO1_LIVE</td>
            <td> YouTube </td>
            <td>Pending.</td>
            <td>180 days</td>
            <td>HTTP Cookie</td>
            </tr>

            <tr>
            <td>YSC</td>
            <td> YouTube </td>
            <td>Pending</td>
            <td>Session</td>
            <td>HTTP Cookie</td>
            </tr>


            <tr>
            <td>YtIdbMeta#databases</td>
            <td> YouTube </td>
            <td>Used to track user’s interaction with embedded content.</td>
            <td>Persistent</td>
            <td>IndexedDB</td>
            </tr>

            <tr>
            <td>yt-remote-cast-available</td>
            <td> YouTube </td>
            <td>Stores the user's video player preferences using embedded YouTube video </td>
            <td>Session</td>
            <td>HTML Local Storage</td>
            </tr>


            <tr>
            <td>m</td>
            <td>Stripe </td>
            <td>Determines the device used to access the website. This allows the website to be formatted accordingly.</td>
            <td>400 days</td>
            <td>HTTP Cookie</td>
            </tr>

            <tr>
            <td>VISITOR_PRIVACY_METADATA</td>
            <td>YouTube </td>
            <td>Stores the user's cookie consent state for the current domain</td>
            <td>180 days</td>
            <td>HTTP Cookie</td>
            </tr>

            <tr>
            <td>wpEmojiSettingsSupports</td>
            <td>clactonmosque.com </td>
            <td>This cookie is part of a bundle of cookies which serve the purpose of content delivery and presentation. The cookies keep the correct state of font, blog/picture sliders, color themes and other website settings.</td>
            <td>Session</td>
            <td>HTML Local Storage</td>
            </tr>

            <tr>
            <td>yt-remote-cast-installed</td>
            <td>YouTube </td>
            <td>Stores the user's video player preferences using embedded YouTube video</td>
            <td>Session</td>
            <td>HTML Local Storage</td>
            </tr>

            <tr>
            <td>yt-remote-connected-devices</td>
            <td>YouTube </td>
            <td>Stores the user's video player preferences using embedded YouTube video</td>
            <td>Persistent</td>
            <td>HTML Local Storage</td>
            </tr>

            <tr>
            <td>yt-remote-device-id</td>
            <td>YouTube </td>
            <td>Stores the user's video player preferences using embedded YouTube video</td>
            <td>Persistent</td>
            <td>HTML Local Storage</td>
            </tr>

            <tr>
            <td>yt-remote-fast-check-period</td>
            <td>YouTube </td>
            <td>Stores the user's video player preferences using embedded YouTube video</td>
            <td>Session</td>
            <td>HTML Local Storage</td>
            </tr>

            <tr>
            <td>yt-remote-session-app</td>
            <td>YouTube </td>
            <td>Stores the user's video player preferences using embedded YouTube video </td>
            <td>Session</td>
            <td>HTML Local Storage</td>
            </tr>

            <tr>
            <td>yt-remote-session-name</td>
            <td>YouTube </td>
            <td>Stores the user's video player preferences using embedded YouTube video </td>
            <td>Session</td>
            <td>HTML Local Storage</td>
            </tr>

        </table>
        </div>


     </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <!--button type="button" class="btn btn-primary">OK</button-->
                </div>
            </div>
        </div>
    </div>


    
<div id="policy1" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Privacy & Policy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                       </button>
                </div>
                <div class="modal-body">
                    <p><b>1.What is this document and why should you read it? </b> <p>
                      <p> This privacy notice explains how and why clactonmosque.com Global Limited (also referred to as “clactonmosque.com”, “we”, “our” and “us”) uses personal data about individual users of our website www. Clectonmosque.com (the “Website”) and those that access our services through APIs and through third-parties, including website users, buyers and/or professionals (whether prospective, current or past) (together, “you”).
                  You should read this notice so that you know what we are doing with your personal data. </p>
                  <p><b>2.Our data protection responsibilities </b> <p>
                    <p>“Personal data” is any information that relates to an identifiable natural person. Your name, address and contact details are examples of your personal data, if they identify you.
                         The term “process” means any activity relating to personal data, including collection, storage, use and transmission.
                         Whether you are a professional or just a website user (or a combination of those) Clecton is a “controller” of your personal data. This means that we make decisions about how and why we process your personal data and are responsible for making sure it is used in accordance with data protection laws.</p>
                         <p><b>3.What types of personal data do we collect and where do we get it from? </b> <p>
                         <p>If you are reviewing this then you will fall into at least one of the following categories of individuals about whom we process personal data:

(a) prospective, current or past users who register an account
(b) and/ the individuals that access our Website (“Website Users”).

Accordingly, we will collect and process different types of personal data about you depending on which of these categories are relevant to you. The different types of personal data that we collect and the sources we collect it from are summarised below.
</p>   
<p><b>4.Personal Data Categories</b></p>
<p>Depending on how you use our Website and services, we will collect different types of personal data about you. For example, this might include things like your name, contact details, details about your business, our correspondence with you, records of your transactions with us, and how you use our services. We need these details to provide our services to you. We have set out more specific details on the categories of personal data we collect and process on Buyers, Professionals and Website Users here.

We obtain this personal data from a number of different sources. For example, this could be from you, our Website, your business website as well as third party sources such as social media. More details of the sources from which we obtain personal data about Buyers, Professionals and Website Users can be found here
</p>
<p><b>5.How we use personal data and why?</b></p>
<p>We process your personal data for particular purposes, which are relevant to your relationship and engagement with us. We are required by law to always have a “lawful basis” for processing your personal data.

We use the personal data we collect for a number of different reasons, including to provide our services to you or with you, to communicate with you, to verify your identity, to make sure our website and services are functioning properly and provide the best services for you, to keep accurate records and for legal reasons.

We rely on a number of different lawful grounds or ‘bases’ in order to process your personal data. These include that we have your consent to the processing, we need to process your personal data to enter into or perform a contract with you, we need to process your personal data to comply with our legal obligations, and/or the processing is necessary for our legitimate interests (or the legitimate interests of a third party).

More details on the purposes for which we process personal data on Buyers, Professionals and Website Users, and the lawful bases we rely on, can be found here.

We may also convert your personal data into statistical or aggregated form to better protect your privacy, or so that you are not identified or identifiable from it. Anonymised data cannot be linked back to you. We may use it to conduct research and analysis, including to produce statistical research and reports. For example, to help us understand and improve the use of our Website.
</p>

<p><b>6.Who do we share your personal data with and why?</b></p>
<p>We may use certain trusted third party companies and individuals to help us provide, analyse, and improve our services (including but not limited to Buyer/Professional verification, data storage, maintenance services, database management, web analytics, payment processing, and improvement of our services). These third parties will process your personal data on our behalf (as our processor). We will disclose your personal data to these parties so that they can perform those necessary functions.

We may also share your information with third parties, who then use your personal data for their own purposes. For example, to process payments from you or where you choose to access our services through such an application. These organisations will also use your personal data for their own, separate purposes (also as a “controller”) – they will have their own privacy notices which you should read, and they have their own responsibilities to comply with applicable data protection laws.

In certain circumstances, where necessary for the purposes set out here, we will also disclose your personal data to:

(a) consultants and professional advisors including legal advisors, auditors and accountants;

(b) business partners and joint ventures;

(c) a prospective seller or buyer of our business and their advisors;

(d) insurers;

(e) courts, court-appointed persons/entities, receivers and liquidators;

(f) third parties where necessary to comply with a legal obligation, to enforce a contract or to protect the rights, property or safety of our employees, customers or others; and

(g) to governmental departments, local government, statutory and regulatory bodies including (in the UK) the Information Commissioner’s Office, the police and Her Majesty’s Revenue and Customs.
</p>

<p><b>7.Where is your personal data transferred to?</b>
<p>When we share personal data about you, as set out above, this may include a transfer of your personal data to recipients outside the UK. If any disclosures of personal data mean that your personal data will be transferred outside the European Economic Area, we will only make that transfer in accordance with our obligations under applicable data protection laws.
</p>

<p><b>8.How long do we keep your personal data for?</b></p>
<p>We will only retain your personal data for a limited period of time and for no longer than is necessary for the purposes for which we are processing it for (including as necessary to comply with our legal or regulatory obligations, resolve disputes, and enforce our agreements).
</p>
<p><b>9.What are your rights in relation to your personal data and how can you exercise them?</b></p>
<p>You have certain legal rights in relation to any personal data about you which we hold. If you have any concerns or queries about this notice or how we process your personal data please contact us using the details below. Each of these are subject to certain conditions.
</p>
<p><b>10.General</b></p>
<p>We may update this notice from time to time to reflect changes to the type of personal data that we process and/or the way in which it is processed. We also encourage you to check this notice on a regular basis.

</p>

<p>
If you want more information about any of the subjects covered in this privacy notice or if you would like to discuss any issues or concerns with us, you can contact at the email provided in contact us section.</p>
</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <!--button type="button" class="btn btn-primary">OK</button-->
                </div>
            </div>
        </div>
    </div>






    <div id="terms" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Term and Conditions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                       </button>
                </div>
                <div class="modal-body">
                    <h5> Welcome to the Clacton Mosque website, your source for news, event updates, and prayer times.</h5>
           <p><b> Use of the website is subject to the following terms and conditions:</b></p>

    <p> 1.Your use signifies acceptance of these terms from your first site visit. Clacton Mosque reserves the right to modify terms by posting changes online, with continued use constituting acceptance.

    <p>2.Use the site for lawful, non-infringing purposes. Clacton is not liable for damages arising from site use, and we don't guarantee uninterrupted, error-free functions or virus-free content.</p>

    <p>3.Commercial use of displayed items without Clacton's authorization is strictly prohibited. Copyrighted material may be copied for personal use only, respecting copyright and source indications.</p>

    <p>4.We are not responsible for external site content linked here, as they are third-party-operated. Any communication or material posted on the site is treated as non-confidential.</p>

    <p>5.In case of conflicts, explicit material rules prevail. These terms are governed by English and Welsh law, with disputes under the exclusive jurisdiction of English and Welsh Courts. Non-acceptance requires immediate site termination.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <!--button type="button" class="btn btn-primary">OK</button-->
                </div>
            </div>
        </div>
    </div>













        
        
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>

            <script>






$('form[id="frmcontact"]').validate({  
    rules: {  
      fname: 'required',  
      lname: 'required',
      phone3:'required',  
      email3: {  
        required: true,  
        email: true,  
      }, 
     
      message3:"required",
    
    },  
    messages: {  
      fname: 'First Name is required',  
      lname: 'Last Name is required',  
      phone3: 'Enter a valid Phone',
      email3: 'Enter a valid Email',
     
      message3:'Please enter Message' 
    },  
    submitHandler: function(form) { 
     

            $.ajax({
	url: form.action,
	type: form.method,
	data: $(form).serialize(),
	success: function(response) {
        $('input[type=text]').each(function() {
        $(this).val('');
    });
    
    $("#email3").val('');
    $("#message3").val('');
    //$("#package1").val('');
    
		$('#enqmsgpopup').html(response);
	}            
      });		
}





      //form.submit();  
   // }  
  }); 



















 </script>

            
          




              




 
        </main><!-- Main Wrapper -->


        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/counterup.min.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/jquery.bootstrap-touchspin.min.js"></script>
        <script src="assets/js/perfect-scrollbar.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <!-- <script src="assets/js/particle-int.js"></script> -->
        <script src="assets/js/musicplayer-min.js"></script>
        <script src="assets/js/circle-progress.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="assets/js/custom-scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>



      


        <script>

$(document).ready(function(){

    //$(".InputElement").addClass("intro");

  // Build your CSS. 
  //$('[data-toggle="popover"]').popover(); 
  /*$('[data-toggle="popover1"]').popup(); 
  $('[data-toggle="popover2"]').popup();
  $("[data-toggle='popover']").popup();*/ 
  $('input').removeClass('ElementsApp');


});








$('form[id="payment-form"]').validate({ 
ignore: "",
rules: {  
name: 'required',  
//address: 'required',

email: {  
required: true,  
email: true,  
}, 
phone: {  
required: true,  
number:true,
maxlength:12,
    minlength:12,  
}, 
/*card_number:{
required: true,  
number:true,
maxlength:16,
minlength:16,



},

card_exp_month:{
required: true,  
number:true,
maxlength:2,
minlength:2,



},
card_exp_year:{
required: true,  
number:true,
maxlength:4,
minlength:4,



},
card_cvc:{
required: true,  
number:true,
maxlength:3,
minlength:3,



},*/
amount:{
required: true,
},  



},  
messages: {  
name: 'Name is required',
//address: 'Address is required',
phone: 'Enter a valid Phone',
//phone: {required: 'Enter a valid Phone',number:'Enter a valid Phone'}    

email: 'Enter a valid Email', 


/*card_number:'Please enter a Valid Visa card',
card_exp_month:"Please enter a Valid Expiry Month",
card_exp_year:"Please enter a Valid Expiry Year",
card_cvc:"Please enter a Valid CVC" ,*/
amount:"Please Select price"  
},  
submitHandler: function(form) { 





}

});  




$('form[id="payment-form1"]').validate({ 
ignore: "",
rules: {  
name1: 'required',  
//address: 'required',

email1: {  
required: true,  
email: true,  
}, 
phone1: {  
required: true,  
number:true,
maxlength:12,
    minlength:12,  
}, 
/*card_number:{
required: true,  
number:true,
maxlength:16,
minlength:16,



},

card_exp_month:{
required: true,  
number:true,
maxlength:2,
minlength:2,



},
card_exp_year:{
required: true,  
number:true,
maxlength:4,
minlength:4,



},
card_cvc:{
required: true,  
number:true,
maxlength:3,
minlength:3,



},*/
amount:{
required: true,
},  



},  
messages: {  
name1: 'Name is required',
//address: 'Address is required',
phone1: 'Enter a valid Phone',
//phone: {required: 'Enter a valid Phone',number:'Enter a valid Phone'}    

email1: 'Enter a valid Email', 



amount:"Please Select price"  
},  
submitHandler: function(form) { 





}

});  


</script>

<script>
function makeactive(id){
    //alert(id);
    $(".menucl").removeClass("active");
    $('#'+id).addClass("active"); 
    $('#'+id+'1').addClass("active");   


}
</script>


<script>
var publishable_key = '<?php echo STRIPE_PUBLISHABLE_KEY; ?>';
</script>
<script src="card.js"></script>
<script src="card1.js"></script>
<script>

function go1(){
//alert("enter");
var id=$('#emailidnews').val();
var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
if ($('#emailidnews').val()==''){
$('#errsmsg').html('Please enter the Email Id');
$('#newsmsg').html('');
return false;

}
else if (testEmail.test(id)){

$('#errsmsg').html('');
$.ajax({

url:'mail.php',
type:'post',
data:{emailidnews:id}

,
success: function(response) {
$('input[type=text]').each(function() {
$(this).val('');
});

$('#emailidnews').val('');

$('#newsmsg').html(response);
}            
});		
return false;

}

else
{
$('#errsmsg').html('Please enter a valid Email Id');
$('#newsmsg').html('');
return false;

}
}


$(".txt").click(function () {
$(".txt").removeClass("activetxt");
// $(".tab").addClass("active"); // instead of this do the below 
$('.finalprice-error').html('');
$(this).addClass("activetxt");   
});



$(".txt1").click(function () {
$(".txt1").removeClass("activetxt");
// $(".tab").addClass("active"); // instead of this do the below 
$('#finalprice1-error').html('');
$(this).addClass("activetxt");   
});

$(".txt").bind('keyup mouseup', function () {
//alert("changed"); 
var val= $(this).val();
$('#finalprice').val(val); 
$('#finalprice-error').html('');          
});



$(".txt1").bind('keyup mouseup', function () {
var val= $(this).val();
$('#finalprice1').val(val);      
//alert("changed");            
});



    $('#customamount').keyup(function() {
    $('#finalprice').val($(this).val());
    $('#finalprice-error').html('');
  });


  $('#customamount1').keyup(function() {
    $('#finalprice1').val($(this).val());
    $('#finalprice1-error').html('');
  })


</script>
















      




    </body>	
</html>