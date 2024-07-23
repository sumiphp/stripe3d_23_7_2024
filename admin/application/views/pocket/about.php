
<?php //include_once("header.php");
echo $about->metatag;

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
    <body>
        <!-- Start Preloader -->
        <!--<div class="preloader">
            <div class="preloader-wave"></div>
        </div>-->
        <!-- End Preloader -->
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
            <div class="heading-sec">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2><?php echo $about->title;?></h2>
                        </div>
                       
                    </div>
            </div>
            </div>
            <?php //print_r($about);?>
            <div class="inner-banner-sec">
            <div class="inner-banner-sec" style="background:url(<?php echo base_url().'uploads/aboutus/'.$about->aboutusbanner?>)!important;background-repeat:no-repeat!important;background-position:center !important;">
                <div class="container">
            </div>
            </div>
        </section>
		
		<!-- End home Area -->

        <!--about-us-sec-->
        <section>
            <div class="about-sec-inner">
                <div class="container">
                  
                    <div class="row">
                        <div class="main-title text-left">
                            <h2><?php echo $about->title;?></h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="about-content">
                               <p><?php echo $about->aboutcompany;?></p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-mg-6 colsm-6">
                            <div class="our-mission-block">
                            <div class="main-title text-left">
                                <h2>Our Mission <span class="icon-box"><img src="<?php echo base_url().'uploads/aboutus/'.$about->missionlogo;?>" alt="<?php echo $about->alttagimg1;?>"> </span>  </h2>
                            </div>
                            <div class="our-mission">
                                <p><?php echo $about->mission;?></p>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6 col-mg-6 colsm-6">
                            <div class="our-mission-block">
                            <div class="main-title text-left">
                                <h2>Our Vision <span class="icon-box"><img src="<?php echo base_url().'uploads/aboutus/'.$about->visionlogo;?>" alt="<?php echo $about->alttagimg2;?>"></span> </h2>
                            </div>
                            <div class="our-mission">
                                <p><?php echo $about->vision;?></p>
                            </div>
                        </div>
                        </div>

                       

                    </div>
                </div>
            </div>
        </section>

       

        

        <section>
        <div class="bg-section counter-area pt-100 pb-70">
            <div class="container">
                <div class="row border-style">
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class="flaticon-success"></i>
                            <h3><span class="counter"><?php echo $about->yearsexperience;?></span>+</h3>
                            <p>Years Experience</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class="flaticon-launch"></i>
                            <h3><span class="counter"><?php echo $about->projectsdone;?></span>+</h3>
                            <p>Projects Done</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class="flaticon-customer"></i>
                            <h3><span class="counter"><?php echo $about->happyclients;?></span>+</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class="flaticon-team-building"></i>
                            <h3><span class="counter"><?php echo $about->expertmembers;?></span>+</h3>
                            <p>Expert Members</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  

    <?php include_once("footer.php");?>