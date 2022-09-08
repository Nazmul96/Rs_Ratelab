<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landio - Chatbot Landing Page </title>
        <!--====== Bootstrap ======-->
        <link rel="stylesheet" href="<?php echo base_url();?>/frontend/template1/assets/css/bootstrap.min.css">
        <!--====== Font Awesome ======-->
        <link rel="stylesheet" href="<?php echo base_url();?>/frontend/template1/assets/fonts/fontawesome/css/all.min.css">
        <!--====== Flaticon ======-->
        <link rel="stylesheet" href="<?php echo base_url();?>/frontend/template1/assets/fonts/flaticon/flaticon.css">
        <!--====== Animate CSS ======-->
        <link rel="stylesheet" href="<?php echo base_url();?>/frontend/template1/assets/css/animate.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>/frontend/template1/assets/css/magnific-popup.min.css">
        <!--====== Slick Slider ======-->
        <link rel="stylesheet" href="<?php echo base_url();?>/frontend/template1/assets/css/slick.css">
        <!--====== Nice Select  ======-->
        <link rel="stylesheet" href="<?php echo base_url();?>/frontend/template1/assets/css/nice-select.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="<?php echo base_url();?>/frontend/template1/assets/css/default.css">
        <!--====== Main Stylesheet ======-->
        <link rel="stylesheet" href="<?php echo base_url();?>/frontend/template1/assets/css/style.css">
        <!--====== Responsive Stylesheet ======-->
        <link rel="stylesheet" href="<?php echo base_url();?>/frontend/template1/assets/css/responsive.css">
        <!-- Place favicon in the root directory -->
        <link rel="icon" type="image/png" href="<?php echo base_url();?>/frontend/template1/assets/img/favicon.png">
        <!--====== Optional Javascript ======-->
        <script src="<?php echo base_url();?>/frontend/template1/assets/js/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <!--======= Start Preloader =======-->
        <div class="preloader">
            <img class="preloader-image" width="60" src="<?php echo base_url();?>/frontend/template1/assets/img/preloader-logo.png" alt="preloader"/>
        </div> <!-- /.preloader -->
        <!--======= End Preloader =======-->
        <!--====== Start Search From ======-->
        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <div class="form_group">
                            <input type="text" class="form_control" placeholder="Search here...">
                            <button class="search_btn"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div> <!-- /.modal-content -->
            </div> <!-- /.modal-dialog -->
        </div> <!-- /#search-modal -->
        <!--======= End Search Form =======-->
        <!--====== Start Header Area ======-->
        <header class="header-area header-v4">
            <div class="header-navigation">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Brand Logo -->
                        <div class="col-xl-4 col-md-6 col-8">
                            <div class="site-branding-and-language-selection">
                                <div class="brand-logo">
                                    <a href="index.php">
                                        <img src="<?php echo base_url();?>/frontend/template1/assets/img/logo-red.png" alt="logo">
                                    </a>
                                </div>
                                <div class="language-selection">
                                    <select class="nice-select" name="language">
                                        <option value="en">English</option>
                                        <option value="bn">Bangla</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Desktop and Mobile Menu -->
                        <div class="col-xl-8 col-md-6 col-4 text-center">
                            <div class="primary-menu d-flex justify-content-end align-items-center">
                                <div class="nav-menu">
                                    <!-- Navbar Close Icon -->
                                    <div class="navbar-close">
                                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                    </div>
                                    <nav class="main-menu">
                                        <ul>
                                            <li class="menu-item">
                                                <a href="<?php echo base_url();?>" class="nav-link active">Home</a>
                                          
                                            </li>
                                            <li class="menu-item">
                                                <a href="<?php echo base_url();?>/companies/all" class="nav-link">Companies</a> 
                                            </li>
                                         
                                            <li class="menu-item ">
                                                <a href="<?php echo base_url();?>/blog" class="nav-link">Blog</a>
                                                
                                            </li>

                                            <?php 
                                                $this->session = \Config\Services::session();
                                                $session_data= $this->session->get('login_info');
                                                // echo '<pre>';
                                                // print_r($session_data);
                                                // die();
                                            ?> 
                                            <?php if(empty($session_data)){?>
                                                <li class="nav-item">
                                                    <a href="<?php echo base_url();?>/contact" class="nav-link">Contact</a>
                                                </li>
                                            <?php } ?>
                                            
                                            <?php if($session_data){?>
                                            
                                                <li class="menu-item menu-item-has-children">
                                                  <a href="#" class="nav-link">My Company</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="<?php echo base_url();?>/user/company/list">Company List</a></li>
                                                        <li><a href="<?php echo base_url();?>/user/company/create">Add Company</a></li>
                                                    </ul>
                                                </li>
                                                
                                                       
                                                <li class="menu-item menu-item-has-children">
                                                <a href="#" class="nav-link"> <?php echo $session_data['username']; ?></a>
                                                <ul class="sub-menu">
                                                    <li><a href="profile-setting.php">My Profile</a></li>
                                                    <li><a href="change_password.php">Change Password</a></li>
                                                    <li><a href="<?php echo base_url();?>/support/ticket">My Support Tickets</a></li>
                                                    <li><a href="<?php echo base_url();?>/support/ticket/new">Open New Ticket</a></li>
                                                    <li><a href="<?php echo base_url();?>/user/user_logout">Logout</a></li>
                                                </ul>
                                                </li>
                                                    
                                                </ul>
                                             </nav>
                                            </div>
                                            <div class="header-right">
                                                    <ul>
                                                        <li class="get-started-wrapper">
                                                            <a href="profile-setting.php" class="filled-btn bg-mandy button-radius">
                                                                Dashboard <i class="fal fa-user"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="menu-toggle">
                                                                <div class="menu-overlay"></div>
                                                                <!-- Navbar Toggler -->
                                                                <div class="nav-toggle">
                                                                    <div class="navbar-toggler float-end">
                                                                        <span></span>
                                                                        <span></span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            <?php } else { ?> 
                                                </nav>
                                            </div>
                                                <div class="header-right">
                                                    <ul>
                                                        <li class="get-started-wrapper">
                                                            <a href="<?php echo base_url();?>/user/login" class="filled-btn bg-mandy button-radius">
                                                                Get Started <i class="fas fa-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="menu-toggle">
                                                                <div class="menu-overlay"></div>
                                                                <!-- Navbar Toggler -->
                                                                <div class="nav-toggle">
                                                                    <div class="navbar-toggler float-end">
                                                                        <span></span>
                                                                        <span></span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            <?php } ?>    
                                       
                                </div>
                         
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.header-navigation -->
        </header> <!-- /.header-area -->
        <!--====== End Header Area ======-->
        <!--====== Start Hero Area ======-->