<nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="<?php echo base_url().'/Pocket/index';?>">
                            <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" alt="Logo">
                        </a>
                        <a class="navbar-brand-sticky" href="<?php echo base_url().'/Pocket/index';?>">
                            <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="display: block;">
                            <ul class="navbar-nav m-auto">
                            <?php foreach($menus as $mn){
                                
                                $this->db->where('parentmenuid',$mn['menuid']);    
                                $this->db->where('menutype',2);
                                $this->db->where('status',1);
                                $this->db->select('*');
                                $this->db->from('menus');
                                $query = $this->db->get();
                                $rowcount = $query->num_rows();
                                
                                
                                
                                ?>
                                <?php if ($rowcount==0){?>
                                <li class="nav-item">
                                    <a href="<?php echo base_url().$mn['url'];?>" class="nav-link active">
                                    <?php echo $mn['menuname'];?>
                                  
                                    </a>
                               
                                </li>
                                <?php } ?>
                             <?php if ($rowcount!=0){?>
                              


                                <li class="nav-item dropdown show hidden-xs hidden-md" id="service">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false"><?php echo $mn['menuname'];?> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu mega_menuDropdown productMenu-dropdown">
                                        <div class="row">

                                            <div class="col-lg-3 col-md-3 col-sm-3 sm-hidden md-hidden text-center firs-menu-box">
                                                <div class="col-megamenu">
                                                    <h3 class="megamenu_title"><span> <?php echo $mn['menuname'];?></span></h3>
                                                
                                                    <picture>
                                                        <a href="<?php echo base_url().$mn['url'];?>"><img src="<?php echo base_url().'uploads/menu/'.$mn['menuimg'];?>" class="img-fluid mRight mTop70" alt="TruckLogics Products" loading="lazy" width="300" height="191" /></a>
                                                    </picture>
                                                </div>
                                               
                                            </div>

                                            <?php 
    $this->db->where('parentmenuid',$mn['menuid']);                                        
    $this->db->where('menutype',2);
    $this->db->where('status',1);
    $this->db->select('*');
    $this->db->from('menus');
    $query = $this->db->get();
    $submenulist=$query->result_array();?>

                                            <div class="col-lg-9 col-md-9 col-sm-9 menu-Submenu-list secnd-menu-box">
                                                <div class="col-megamenu">
                                                    <ul class="megamenu-list">
                                                    <?php foreach($submenulist as $sm){?>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                            <a href="<?php echo base_url().$sm['url'];?>" class="menu-image-title-after menu-image-not-hovered">
                                                                <img width="40" height="40" src="<?php echo base_url().'uploads/menu/'.$sm['menuimg'];?>" class="menu-image menu-image-title-after" alt="<?php echo $sm['alttagimg1'];?>" decoding="async" />
                                                                <span class="menu-image-title-after menu-image-title" style='color:red'>  <?php echo $sm['menuname'];?> </span>
                                                            </a>
                                                        </li>
                                                        <?php } ?>
                                                      
                                                     

                                                        </ul>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </ul>
                                  
                                </li>

                                <li class="nav-item hidden-lg">
                                    <a href="#" class="nav-link">
                                    <?php echo $mn['menuname'];?>
                                        <i class='bx bxs-chevron-right'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                    <?php foreach($submenulist as $sm){?>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url().$sm['url'];?>" class="nav-link">
                                            <?php echo $sm['menuname'];?>
                                            </a>
                                        </li>
                                        <?php } ?>
                                        <!--<li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Service Details3 
                                            </a>
                                        </li>-->
                                    </ul>
                                </li>

                                <?php } } ?>


                                <!--<li class="nav-item dropdown show hidden-xs hidden-md" id="service">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Services <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu mega_menuDropdown productMenu-dropdown">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-4 sm-hidden md-hidden text-center firs-menu-box">
                                                <h3 class="megamenu_title"><span>Services</span></h3>
                                                
                                                <picture>
                                                    <img src="./assets/img/service-img.png" class="img-fluid mRight mTop70" alt="TruckLogics Products" loading="lazy" width="300" height="191" />
                                                </picture>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 menu-Submenu-list secnd-menu-box">
                                                <ul class="megamenu-list">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/submenu-icon-3.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> Branding & Creative Design </span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/submenu-icon-4.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> Mobile App Development</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/submenu-icon-5.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> Search Engine Optimization – SEO</span>
                                                        </a>
                                                    </li>
                                                 
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 menu-Submenu-list">
                                                <ul class="megamenu-list">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/submenu-icon-6.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> Website Development</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/submenu-icon-3.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> eCommerce Web Development</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/submenu-icon-4.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> New Media Solution</span>
                                                        </a>
                                                    </li>
                                                 
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 menu-Submenu-list">
                                                <ul class="megamenu-list">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/submenu-icon-6.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> Website Development</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/ecommerce-icon.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> eCommerce Web Development</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/submenu-icon-4.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> New Media Solution</span>
                                                        </a>
                                                    </li>
                                                 
                                                </ul>
                                            </div>
                                        </div>
                                    </ul>
                                    </li>--->
                            </ul>

                            <div class="menu-btn mr-25">
                            <a href="tel:+<?php echo $contactus->lanno;?>" target="_blank" class="seo-btn"><i class='bx bx-phone'></i> +<?php echo $contactus->lanno;?></a>
                            </div>
                            <div class="menu-btn">
                                <a href="tel:+<?php echo $contactus->phoneno;?>" target="_blank" class="seo-btn"><i class='bx bx-phone'></i> +<?php echo $contactus->phoneno;?></a>
                            </div>
                        </div>
                    </nav>