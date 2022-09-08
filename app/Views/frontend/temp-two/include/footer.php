  <!--====== Start Footer Area ======-->
        <footer class="footer-area footer-area-v3">
            <div class="container">
                <div class="footer-area-internal border-bottom-purple">
                    <div class="row">
                        <!-- Single Footer Widget -->
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="single-footer-widget footer-text-widget">
                                <h5 class="widget-title">About Rsratelab</h5>
                                <p><?php echo $footer_section[1]['settings_value'];?></p>
                                <div class="footer-social-links">
                                    <ul>
                                        <?php foreach($social_icon as $social_icons){?>
                                            <li><a href="<?php echo $social_icons['url'];?>" class="p-2"><i class="<?php echo $social_icons['social_icon'];?>"></i></a></li>
                                        <?php } ?>  
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Widget -->
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="single-footer-widget">
                                <h5 class="widget-title">Quick Menu</h5>
                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url();?>/user/login">Login as User</a></li>
                                        <li><a href="<?php echo base_url();?>/user/user_registration">Crate an Account</a></li>
                                        <li><a href="<?php echo base_url();?>/user/login">Support</a></li> 
                                    </ul>
                                </div>
                            </div> 
                        </div>
                        <!-- Single Footer Widget -->
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="single-footer-widget">
                                <h5 class="widget-title">Important Link</h5>
                                <div class="footer-widget-menu">
                                    <ul>
                                        <?php foreach($policy_pages as $all_policy){?>
                                            <li class="list-inline-item  pb-2"><a href="<?= base_url()?>/frontend/policy_details/<?php echo $all_policy['id'];?>"><?php echo $all_policy['title'];?></a></li>
                                        <?php } ?> 
                                    </ul>
                                </div>
                            </div> 
                        </div>
                        <!-- Single Footer Widget -->
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="single-footer-widget">
                                <h5 class="widget-title">Site Links</h5>
                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url();?>">Home</a></li>
                                        <li><a href="<?php echo base_url();?>/contact">Contact</a></li> 
                                        <li><a href="<?php echo base_url();?>/blog">Blog</a></li> 
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div> <!-- /.row -->
                </div><!-- /.footer-area-internal -->
            </div> <!-- /.container -->
            <div class="footer-copyright-area wow fadeInDown" data-wow-delay="0.8s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-sm-4">
                            <div class="footer-logo">
                                <img src="<?php echo base_url();?>/frontend/template1/assets/img/logo-red.png" alt="footer logo">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-8">
                            <div class="footer-copyright">
                                <p>© <?php echo date("Y"); ?> <a href="#">Rsratelab.</a> All Rights Reserved</p>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.footer-copyright-area -->
        </footer> <!-- /.footer-area -->
        <!--====== End Footer Area ======-->
        <!--======= Scroll To Top =======-->
        <a href="#" data-target="html" class="scroll-to-target scroll-to-top bg-red"><i class="fa fa-angle-up"></i></a>

        <!--====== Popper JS ======-->
        <script src="<?php echo base_url();?>/frontend/template1/assets/js/popper.min.js"></script>
        <!--====== Bootstrap JS ======-->
        <script src="<?php echo base_url();?>/frontend/template1/assets/js/bootstrap.min.js"></script>
        <!--====== Slick Slider JS ======-->
        <script src="<?php echo base_url();?>/frontend/template1/assets/js/slick.min.js"></script>
        <!--====== Wow JS ======-->
        <script src="<?php echo base_url();?>/frontend/template1/assets/js/wow.js"></script>
        <!--====== Nice Select ======-->
        <script src="<?php echo base_url();?>/frontend/template1/assets/js/jquery.nice-select.min.js"></script>
        <!--====== Counter Up JS ======-->
        <script src="<?php echo base_url();?>/frontend/template1/assets/js/jquery.counterup.min.js"></script>
        <!--====== Magnific Popup JS ======-->
        <script src="<?php echo base_url();?>/frontend/template1/assets/js/jquery.magnific-popup.min.js"></script>
        <!--====== Waypoint JS ======-->
        <script src="<?php echo base_url();?>/frontend/template1/assets/js/jquery.waypoints.js"></script>
        <!--====== Main Script ======-->
        <script src="<?php echo base_url();?>/frontend/template1/assets/js/main.js"></script>
    </body>
</html>