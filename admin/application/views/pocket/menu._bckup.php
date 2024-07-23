<nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="index.php">
                            <img src="<?php echo base_url().'pockets/assets/img/logo.png';?>" alt="Logo">
                        </a>
                        <a class="navbar-brand-sticky" href="index.php">
                            <img src="<?php echo base_url().'pockets/assets/img/logo.png';?>" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="display: block;">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>" class="nav-link active">
                                        Home 
                                        <!--<i class="bx bxs-chevron-right"></i>-->
                                    </a>
                               
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url().'Pocket/about';?>" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url().'Pocket/service';?>" class="nav-link ">
                                        Services 
                                        <i class="bx bxs-chevron-right"></i>
                                    </a>
                                   
                                </li>
                            
                                <li class="nav-item">
                                    <a href="<?php echo base_url().'Pocket/blog';?>" class="nav-link">
                                        Blog 
                                        <i class="bx bxs-chevron-right"></i>
                                    </a>
                                </li>
                               
                                
                                <li class="nav-item">
                                    <a href="<?php echo base_url().'Pocket/contact';?>" class="nav-link">
                                        Contact
                                    </a>
                                </li>
                            </ul>

                            <div class="menu-btn">
                                <a href="#" class="seo-btn mr-25"><i class='bx bx-search'></i> Search</a>
                            </div>
                            <div class="menu-btn">
                                <a href="tel:+<?php echo $contactus->phoneno;?>" target="_blank" class="seo-btn"><i class='bx bx-phone'></i> +<?php echo $contactus->phoneno;?></a>
                            </div>
                        </div>
                    </nav>