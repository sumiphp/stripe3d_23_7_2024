
<?php //include_once("header.php");
echo $result->metatag;

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
<style>
	
    .blog-title 

{

font-size:20px;


}

</style>

    <body> <?php echo $gcdt->googletagssnippet;?>
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
        <div class="inner-blog-sec">
            <div class="container">
                <?php //echo $resulttopcontentcount;
                if (($resulttopcontentcount)!=0){
                
                ?>
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="blog-person">
                            <!--<img src="<?php //echo base_url().'pockets/assets/img/blog/blog-img.png';?>">-->
                            <img src="<?php echo base_url().'uploads/blog/'.$resulttopcontent->autorimage;?>" alt="<?php echo $resulttopcontent->alttagimg1;?>"/>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10">
                        <div class="blog-sec">
                            <h3><?php echo $resulttopcontent->authorname;?></h3>
                            <p><?php echo $resulttopcontent->companyname ;?></p>
                            <p><?php echo $resulttopcontent->description ;?></p>
                        </div>
                        <div class="icon-sec">
                            <img src="<?php echo base_url().'pockets/assets/img/blog/facebook.png';?>">
                            <img src="<?php echo base_url().'pockets/assets/img/blog/twitter.png';?>">
                            <img src="<?php echo base_url().'pockets/assets/img/blog/linked-in.png';?>">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="content">
                            <p><?php echo $resulttopcontent->description ;?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
              
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="artical-content">
                        <h2 class="text-center "><?php echo $result->blogtitle ;?></h2>
                            <p><?php echo $result->blogdescription ;?></p>
                           
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>-->

                        </div>
                    </div>
                </div>

                <div class="blog-aritical-sec">
                    <div class="row">
                        <?php foreach($resultcontents as $con){?>
                        <div class="col-lg-6 col-md-6">
                        
                            <div class="blog-img">
                                <img src="<?php echo base_url().'uploads/blog/'.$con['contentimage'];?>"  alt="<?php echo $con['alttagimg2'];?>">
                               
                            </div>
                            <div class="blog-content-inner">
                                <div class="blog-author-img">
                                    <img src="<?php echo base_url().'uploads/blog/'.$con['autorimage'];?>" alt="<?php echo $con['alttagimg1'];?>"/>

                                </div>
                                <div class="blog-details">
                                <h2 class="text-left blog-title"><?php echo $con['title'] ;?></h2>
                            <p><?php echo $con['description'];?> </p>
                            <p class="date"><?php $date=explode("-",$con['date']);
                            //echo $mon=$date[1];
                            $mon = date('F', strtotime($con['date']));
                            //$monfull=Date('M',$mon);
                            $dt=$date[2];
                            $year=$date[0];
                            echo $mon.' '.$dt.','.$year;
                            ?></p>
                                </div>

                            </div>

                        </div>
                        <?php } ?>
                       
                        </div>
                       
                    </div>
                    
                </div>
            </div>
        </div>
       

        
	
		<!-- End home Area -->


        <?php include_once("footer.php");?>