
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
.active{
  border: 1px solid #ce304f !important;
}


.my-input {
    padding: 10px;
    
    border: 1px solid #0a993c;
  }





.StripeElement {
    box-sizing: border-box;
    
    height: 40px;
    
    padding: 10px 12px;
    
   
    border-radius: 4px;
    

    

    box-shadow: 0 1px 3px 0 #e6ebf1;
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
}
 
.StripeElement--focus {
    box-shadow: 0 1px 3px 0 #cfd7df;
}
 
.StripeElement--invalid {
    border-color: #fa755a;
}
 
.StripeElement--webkit-autofill {
    background-color: #fefde5 !important;
}

.InputContainer .InputElement {
    border: 1px solid #000 !important;

}

.StripeElement--base{

    margin-top: 10px;
  font-size: .9375rem;
  color: #666;
  background-color: #fafafa;
  border: 1px solid #009b0a !important;
  width: 100%;
  padding: 10px;
  border-radius: 5px;

}


.ElementsApp input{
    border:'1px solid black';
}

.StripeElement--complete{
  background-color:transparent;
  border:1px solid black !important;
  display:block;
  font-family:sans-serif;
  font-size:1em;
  height:1.2em;
  line-height:1.2em;
  margin:0;
  padding:0;
  width:100%
}

.StripeElement input {
  background-color:transparent;
  border:solid !important;
  display:block;
  font-family:sans-serif;
  font-size:1em;
  height:1.2em;
  line-height:1.2em;
  margin:0;
  padding:0;
  width:100%
}

.CardField{
    border:'1px solid black' !important;

}

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
                                <li>3 Jumada AI-Akhirah 1445</li>
                            </ul>
                            
                        </div>
                        <div class="prayer-timing">
                          

                            <ul class="time-list2 d-flex flex-wrap w-100 mb-0 list-unstyled">
                               
                               
                                
                                <li><span>Begins</span>Jama’ah</li>
                                <li><span>6.16</span>6.36</li>
                                <li><span>12.11</span>12.45</li>
                                <li><span>1.36</span>2.30</li>
                                <li><span>3.55</span>4.02</li>
                                <li><span>5.32</span>7.30</li>
                                
                            </ul>

                            <ul class="pray-list">
                                <li><a href="#">FAJR</a></li>
                                <li><a href="#">ZUHR</a></li>
                                <li><a href="#">ASAR</a></li>
                                <li><a href="#">MAGHRIB</a></li>  
                                <li><a href="#">ISHA</a></li>
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
                                <li><a href="#banner" title="">Home</a>
                                  
                                </li>
                                <li ><a href="#about" title="">About</a>
                                   
                                </li>


                                <li><a href="#service" title="">Service</a>  </li>

                                <li><a href="#articles" title="">Articles</a>  </li>
 
                                <li ><a href="#News" title="">News & Event</a> </li>

                                <li ><a href="#madrasah" title="">Madrasah</a>   </li>
        
                                </li>
                                
                             
                            </ul>
                        </div>
                        <div class="header-right">
                            <a class="thm-btn bg-color1" href="#footer" title="">Make Donation<span></span><span></span><span></span><span></span></a>
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
                                    
                                    <li><a href="#banner" title="">Home</a>   </li>
                                    <li ><a href="#about" title="">About</a>    </li>
    
    
                                    <li><a href="#service" title="">Service</a>  </li>
    
                                    <li><a href="#articles" title="">Articles</a>  </li>
     
                                    <li ><a href="#News" title="">News & Event</a> </li>
                                      
                                    <li ><a href="#madrasah" title="">Madrasah</a>   </li>
            
                                 
                                </ul>
                            </div>
                        </nav>
                        <div class="header-right">

                            <a class="thm-btn bg-color1" href="#footer" title="">Make Donation<span></span><span></span><span></span><span></span></a>
                        </div>
                    </div>
                    
                </div>
            </div><!-- Sticky Menu -->
            <div class="rspn-hdr">
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
                                <li><span>Begins</span>Jama’ah</li>
                                <li><span>6.16</span>6.36</li>
                                <li><span>12.11</span>12.45</li>
                                <li><span>1.36</span>2.30</li>
                                <li><span>3.55</span>4.02</li>
                                <li><span>5.32</span>7.30</li>
                                
                            </ul>

                            <ul class="pray-list">
                                <li><a href="#">FAJR</a></li>
                                <li><a href="#">ZUHR</a></li>
                                <li><a href="#">ASAR</a></li>
                                <li><a href="#">MAGHRIB</a></li>  
                                <li><a href="#">ISHA</a></li>
                            </ul>
                        </div>
                    </div>
                   </div>
                   
                    <form class="rspn-srch">
                        <input type="text" placeholder="Enter Your Keyword">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
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
                        <li><a href="#banner" title="">Home</a>   </li>
                        <li ><a href="#about" title="">About</a>    </li>


                        <li><a href="#service" title="">Service</a>  </li>

                        <li><a href="#articles" title="">Articles</a>  </li>

                        <li ><a href="#News" title="">News & Event</a> </li>
                          
                        <li ><a href="#madrasah" title="">Madrasah</a>   </li>

                   
                       
                    </ul>
                </div><!-- Responsive Menu -->
            </div><!-- Responsive Header -->
         
            
            <section>
                <div class="w-100 position-relative" id="banner">
                    <div class="feat-wrap v2 position-relative w-100">

                    <div class='text-center'> 

<?php if ( isset($_SESSION['payment_id']) ) { ?>
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
<?php } ?> </div>

                        <div class="feat-caro">
                            <div class="feat-item v2">
                                <div class="feat-img position-absolute" style="background-image: url(assets/images/images/slider.png);"></div>
                                <div class="feat-cap-wrap position-absolute d-inline-block d-flex">
	                                <div class="feat-cap left-icon d-inline-block">
	                                  
	                                    <h2 class="mb-0">Connect with the Divine, Contribute to the Mosque.
                                          
                                            </h2>
	                                    <p class="mb-0">Donate Today and Be a Part of Something Meaningful!</p>
	                                    <a class="thm-btn thm-bg" href="#" title="">Donate<span></span><span></span><span></span><span></span></a>
	                                </div>

                                    <div class="d-inline-block form-sec">
                                        <form class="checkout-form w-100"  action="charge.php" method="post" id="payment-form">
                                            <h2>How much you want to Donate?</h2>
                                            <div class="d-flex w-100">
                                                <a href="#" class="btn btn-active banner-form-btn">One - Off</a>
                                                <a href="#" class="btn banner-form-btn">Custom amount</a>
                                            </div>
                                            <div class="amount-area d-flex">
                                                <div class="input-icon">
                                                    <i>£</i>
                                                    <input type="number" id="myNumber" value="5" class='txt'>
                                                  </div>

                                                  <div class="input-icon">
                                                    <i>£</i>
                                                    <input type="number" id="myNumber" value="10" class='txt'>
                                                  </div>

                                                  <div class="input-icon">
                                                    <i>£</i>
                                                    <input type="number" id="myNumber" value="12" class='txt'>
                                                  </div>

                                                  <div class="input-icon">
                                                    <i>£</i>
                                                    <input type="number" id="myNumber" value="25" class='txt'>
                                                  </div>
                                               
                                            </div>

                                            <input type="text" id="finalpriceold" name='finalpriceold' value=""  style="display:none;"  >

<input type="hidden" name="amount" placeholder="Enter Amount"  id="finalprice" style="display:none;" />
                                            <h2 id="someSectionToJumpTo1">Personal Information</h2>
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

                                            <div class="row mt-20" >
                                                
                                                <!--div class="col-12">
                                                    <div class="form__div ">
                                                        <input type="text" class="form-control" placeholder="Card Number ">
                                                    
                                                    </div>
                                                </div>
    
                                                <div class="col-4">
                                                    <div class="form__div">
                                                        <input type="text" class="form-control" placeholder="Month ">
                                                       
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form__div">
                                                        <input type="text" class="form-control" placeholder="Year">
                                                       
                                                    </div>
                                                </div>
    
                                                <div class="col-4">
                                                    <div class="form__div">
                                                        <input type="password" class="form-control" placeholder=" cvv code">
                                                     
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form__div">
                                                        <input type="text" class="form-control" placeholder="name on the card ">
                                                     
                                                    </div>
                                                </div-->
                                             
                                            </div>

                                            
                                            <div  class="my-input" id="card-element">
        <!-- A Stripe Element will be inserted here. -->
        </div>

                                            <div class="payment-method w-100">
                                              
                                                
                                                <button class="thm-btn thm-bg" type="submit">Donate NOW<span></span><span></span><span></span><span></span></button> 
                                                <div><br>Payment Done </div>                                           
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
        

                <section >
                  
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

                                           



                                                <!-- <div class="time-box d-flex flex-wrap align-items-center justify-content-between">
                                                    <p>School Calendar</p>
                                                    <p>Fall Semester</p>
                                                    <p>Spring Semester</p>
                                                </div>
                                                <ul class="time-list mb-0 list-unstyled">
                                                   
                                                    
                                                  
                                                    <li>
                                                        <div class="time-box d-flex flex-wrap align-items-center justify-content-between">
                                                           
                                                            <span>First day</span>
                                                            <span>9.3.2021</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="time-box d-flex flex-wrap align-items-center justify-content-between">
                                                            <span>Last day</span>
                                                            <span>9.3.2021</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="time-box d-flex flex-wrap align-items-center justify-content-between">
                                                            <span> Registration</span>
                                                            <span>9.3.2021</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="time-list mb-0 list-unstyled">
                                                    <li>
                                                        <div class="time-box d-flex flex-wrap align-items-center justify-content-between">
                                                          
                                                            <span>9.3.2021</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="time-box d-flex flex-wrap align-items-center justify-content-between">
                                                            <span>9.3.2021</span>
                                                         
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="time-box d-flex flex-wrap align-items-center justify-content-between">
                                                           
                                                            <span>9.3.2021</span>
                                                        </div>
                                                    </li>
                                                </ul> -->

                                                <div class="view-more mt-20 d-inline-block text-center w-100">
                                                    <a class="thm-btn thm-bg"  title="" href="javascript:void(0)" title=""  data-toggle="modal" data-target="#exampleModal">Enquiry Now<span></span><span></span><span></span><span></span></a>
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
                                                <h3 class="mb-0"><a href="#" title="">Unveiling the Essence: Exploring Timeless Islamic Teachings for Today's World.</a></h3>
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

            <section >
               
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
                                            <a href="#" class="btn banner-form-btn">Custom amount</a>
                                        </div>
                                        <div class="amount-area d-flex">
                                            <div class="input-icon">
                                                <i>£</i>
                                                <input type="number" id="myNumber" value="5" class='txt1'>
                                              </div>

                                              <div class="input-icon">
                                                <i>£</i>
                                                <input type="number" id="myNumber" value="10" class='txt1'>
                                              </div>

                                              <div class="input-icon">
                                                <i>£</i>
                                                <input type="number" id="myNumber" value="12" class='txt1'>
                                              </div>

                                              <div class="input-icon">
                                                <i>£</i>
                                                <input type="number" id="myNumber" value="25" class='txt1'>
                                              </div>
                                           
                                        </div>
                                        <input type="hidden" id="finalprice1" name='amount' value=""  style="display:none;"  >
                                        <h2 id="someSectionToJumpTo">Personal Information</h2>
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
                                           
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <textarea placeholder="Comment" name="message1"></textarea>
                                            </div>
                                        </div>

                                        <h2 >Payment Method</h2>

                                        <ul class="method-list mb-0 list-unstyled w-100 d-flex" >
                                            <li><input type="radio" name="method" id="radio11"> <label for="radio11"><img src="assets/images/images/master-card.png"/></label></li>
                                            <li><input type="radio" name="method" id="radio22"> <label for="radio22"><img src="assets/images/images/visa-card.png"/></label></li>
                                                    </ul>

                                                    <div class="row mt-20">
                                                        <!--div class="col-12">
                                                            <div class="form__div ">
                                                                <input type="text" class="form-control" placeholder="Card Number ">
                                                               
                                                            </div>
                                                        </div>
            
                                                        <div class="col-4">
                                                            <div class="form__div">
                                                                <input type="text" class="form-control" placeholder="Month ">
                                                               
                                                            </div>
                                                        </div>
        
                                                        <div class="col-4 ">
                                                            <div class="form__div">
                                                                <input type="text" class="form-control" placeholder="Year">
                                                               
                                                            </div>
                                                        </div>
            
                                                        <div class="col-4">
                                                            <div class="form__div">
                                                                <input type="password" class="form-control" placeholder=" cvv code">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form__div">
                                                                <input type="text" class="form-control" placeholder="name on the card ">
                                                               
                                                            </div>
                                                        </div-->
                                                     
                                                    </div>
                                                    <div class='my-input' id="card-element1">
        
        </div>


                                        <div class="payment-method w-100 mt-20" >
                                          
                                            
                                            <button  class="thm-btn thm-bg" type="submit">Donate NOW<span></span><span></span><span></span><span></span></button>   
                                            <div><br>Payment Done </div>                                        
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12" >
                               
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

            <section >
                
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

            <footer >
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
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <h4 class="widget-title">Learn More</h4>
                                                    <div class="widget w-100">
                                                        <ul class="mb-0 list-unstyled w-100">
                                                        <li><a  href="javascript:void(0)" data-toggle="popover" title="Terms & condition" data-content="A Terms and Conditions agreement acts as a legal contract between you (the company) and the user. It's where you maintain your rights to exclude users from your app in the event that they abuse your website/app, set out the rules for using your service and note other important details and disclaimers." title="">Terms & condition</a></li>
                                                            <li><a href="javascript:void(0)" data-toggle="popover1" title="Privacy & Policy" data-content="We scoured the web for the best privacy policy examples to show you how they can help bolster your brand.

And these are the best of the lot — great data privacy statement samples from leading brands and eCommerce businesses to serve as your personal swipe file and inspire you to build your own privacy policy agreement.

The examples help shed light on how you collect personal information, whether you use location data, and what privacy laws you comply with. They're a great way to inform users of their rights, too.">Privacy & Policy</a></li>
                                                            <li><a href="javascript:void(0)" data-toggle="popover2" title="Cookies & Policy" data-content="We scoured the web for the best privacy policy examples to show you how they can help bolster your brand.

And these are the best of the lot — great data privacy statement samples from leading brands and eCommerce businesses to serve as your personal swipe file and inspire you to build your own privacy policy agreement.

The examples help shed light on how you collect personal information, whether you use location data, and what privacy laws you comply with. They're a great way to inform users of their rights, too.">Cookies & Policy</a></li>
                                                           
                                                           
                                                        </ul>
                                                    </div>
                                                   
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <div class="widget w-100">
                                                        <h4 class="widget-title">Follow Us</h4>
                                                        <div class="social-links d-inline-flex">
                                                            <a href="#" title="Twtiiter" target="_blank"><i class="fab fa-twitter"></i></a>
                                                            <a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                            <a  href="#" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                                            <a  href="#" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                            <a  href="#" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                                        </div>

                                                       
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


            <!--div class="modal" tabindex="-1" role="dialog"  id="exampleModal">





<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Enquiries111</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
     


      <form class="row" method="post" id="frmcontact"  action="contactenquiryprocesspopup.php">
              <div class="row">
                  <div class="col-md-6">
                      <div class="input-group">

                          <input type="text" id="fname" name="fname" class="form-control txt3" placeholder="FIRST NAME" aria-label="Username" aria-describedby="basic-addon1" >
                                      <label id="fname-error" class="error errpopup" for="fname" style='padding-top:0px;position:absolute;'></label>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="input-group">
                      <input type="text" id="lname" name="lname" class="form-control txt3" placeholder="LAST Name" aria-label="Username" aria-describedby="basic-addon1">
                                      <label id="lname-error" class="error errpopup" for="lname" style='padding-top:0px;position:absolute;'></label>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <div class="input-group">
                      <input type="email" id="email1" name="email1" class="form-control txt3 em1" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" >
                                      <label id="email1-error" class="error errpopup" for="email1" style='padding-bottom:0px;position:absolute;'></label>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="input-group">
                      <input type="text" id="phone1"  maxlength="12" name="phone1" class="form-control phone txt3" placeholder="Phone" aria-label="Username" aria-describedby="basic-addon1" >
                                      <label id="phone1-error" class="error errpopup" for="phone1" style='padding-bottom:0px;position:absolute;'
></label>
                      </div>
                  </div>
              </div>
              
             

              <div class="row">
                  
                  <div class="col-md-12">
                      <div class="input-group">
                      <textarea class="form-control txtarea" rows="4" cols="50" placeholder="Comment..." id="message" name="message" ></textarea>
                                      <label id="message-error" class="error errpopup" for="message" style='padding-bottom:0px;position:absolute;'></label>
                         
                      </div>
                  </div>
                
              </div>





              <div class="row">
              <div class="col-md-6">
                
           
              
             
              </div>
              </div>
             
     

    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" style="background-color: #009b0a;
border-color:#009b0a" >Save changes</button>
<div id='enqmsgpopup'></div>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </form>


  </div>
</div>
</div-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>

<script>






$('form[id="frmcontact"]').validate({  
  rules: {  
    fname: 'required',  
    lname: 'required',
    phone1:'required',  
    email1: {  
      required: true,  
      email: true,  
    }, 
   
    message:"required",
  
  },  
  messages: {  
    fname: 'First Name is required',  
    lname: 'Last Name is required',  
    phone1: 'Enter a valid Phone',
    email1: 'Enter a valid Email',
   
    message:'Please enter Message' 
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
  
  $("#em1").val('');
  $("#message").val('');
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
  $('input').removeClass('ElementsApp');


});


$(document).ready(function(){

//$(".InputElement").addClass("intro");

// Build your CSS. 
//$('[data-toggle="popover"]').popover(); 
$('[data-toggle="popover1"]').popover(); 
$('[data-toggle="popover2"]').popover();
$("[data-toggle='popover']").popover(); 
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
$(".txt").removeClass("active");
// $(".tab").addClass("active"); // instead of this do the below 
$(this).addClass("active");   
});



$(".txt1").click(function () {
$(".txt1").removeClass("active");
// $(".tab").addClass("active"); // instead of this do the below 
$(this).addClass("active");   
});

$(".txt").bind('keyup mouseup', function () {
//alert("changed"); 
var val= $(this).val();
$('#finalprice').val(val);           
});



$(".txt1").bind('keyup mouseup', function () {
var val= $(this).val();
$('#finalprice1').val(val);      
//alert("changed");            
});


$(document).ready(function(){

//$(".InputElement").addClass("intro");

// Build your CSS. 
//$('[data-toggle="popover"]').popover(); 
$('[data-toggle="popover1"]').popover(); 
$('[data-toggle="popover2"]').popover();
$("[data-toggle='popover']").popover(); 
$('input').removeClass('ElementsApp');


});

$('#btn').click(function() {
$('#myModal').modal('show');
});

















</script>
















      




    </body>	
</html>