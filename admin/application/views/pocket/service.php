
<?php //include_once("header.php");
echo $service->metatag;

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
    <?php echo $gcdt->googletagssnippet;?>
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
            <div class="heading-sec">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2><?php echo $service->maintitle;?></h2>
                        </div>
                       
                    </div>
            </div>
            </div>

            <div class="inner-service-banner" style="background:url(<?php echo base_url().'uploads/services/'.$service->Image1?>)!important;background-repeat:no-repeat!important;background-position:center !important;background-size:cover !important">
            <!--<div class="inner-service-banner">-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-mg-6 col-sm-6">

                        </div>
                        <div class="col-lg-5 col-mg-5 col-sm-5">
                            <div class="left-banner-content">
                                <h2><?php echo $service->subtitle;?></h2>
                                <p><?php echo $service->description;?></p>
                            </div>
                        </div>
                        <!--<div class="share-sec-position">
                            <a href="#" class="whatsapp-icon"><img src="<?php //echo base_url().'pockets/assets/img/about/call-icon.png';?>"></a>
                            <a href="#" class="whatsapp-icon"><img src="<?php //echo base_url().'pockets/assets/img/about/whataspp-icon.png';?>"></a>
                        </div>-->
                    </div>
            </div>
            </div>
        </section>
		
		<!-- End home Area -->

        
        <section>
            <div class="hosting-services-sec">
                <div class="container">
                    <div class="row">

                    <?php foreach($result as $res){?>
                        <div class="col-lg-6 col-md-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="<?php echo base_url().'Pocket/servicedetails/'.$res['categoryid'];?>">
                                                    <img src="<?php echo base_url().'uploads/'.$res['categoryimage'];?>" class="attachment-full size-full wp-image-7930" alt="<?php echo $res['alttagimg1'];?>" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title secondary-title"><a href="<?php echo base_url().'Pocket/servicedetails/'.$res['categoryid'];?>"><?php echo $res['categoryname'];?></a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description"><?php echo $res['categorydescription'];?></p>
                                            </div>
                                        </div>
                                        <a href="<?php echo base_url().'Pocket/servicedetails/'.$res['categoryid'];?>" class="plan-btn Mtop-20">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                        <?php } ?>


                       
                </div>
            </div>
        </section>

        <section>
            <div class="our-services-area">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="our-service-block-img">
                                <img src="<?php echo base_url().'uploads/services/'.$service->Image2;?>" alt="<?php echo $service->alttagimg2;?>">
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </section>

        <section>
            <div class="three-plan-sec bg-section pt-100 pb-70">
                <div class="container">
                    <div class="row">
                    <?php foreach($steps as $st){?>
                        <div class="col-lg-4 col-md-4">
                            <div class="inner-block">
                                <div class="icon-block">
                                    <img src="<?php echo base_url().'uploads/servicessteps/'.$st['picture'];?>">
                                </div>
                                <div class="content-block">
                                    <h4><?php echo $st['title'];?></h4>
                                    <p><?php echo $st['description'];?></p>
                                </div>

                            </div>
                        </div>
                        <?php } ?>
                       <!--  <div class="col-lg-4 col-md-4">
                            <div class="inner-block">
                                <div class="icon-block">
                                    <img src="<?php //echo base_url().'pockets/assets/img/service/design-icon.png';?>">
                                </div>
                                <div class="content-block">
                                    <h4><?php //echo $service->box2title;?></h4>
                                    <p><?php //echo $service->box2description;?></p>
                                </div>

                            </div>
                        </div>
                       <div class="col-lg-4 col-md-4">
                            <div class="inner-block">
                                <div class="icon-block">
                                    <img src="<?php //echo base_url().'pockets/assets/img/service/delivary-icon.png';?>">
                                </div>
                                <div class="content-block">
                                    <h4><?php //echo $service->box3title;?></h4>
                                    <p><?php //echo $service->box3description;?></p>
                                </div>

                            </div>
                        </div>-->
                        
                    </div>
                </div>
            </div>
        </section>
       

        

        <?php include_once("footer.php");?>