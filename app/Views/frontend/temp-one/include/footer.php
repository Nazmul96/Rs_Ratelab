<!-- footer start -->
        <footer class="footer bg-dark">
            <div class="container-fluid">
                <div class="row p-2">
            <?php if($cookie[2]->settings_value == '1'){?>  
                <div class="eupopup eupopup-bottomleft">

                </div>
           <?php } ?>     
                    <div class="col-md-4">
                        <a class="site-logo site-title" href="https://script.viserlab.com/ratelab">
                            <img src="https://script.viserlab.com/ratelab/assets/images/logoIcon/logo.png" alt="RateLab">
                        </a>
                        <h6 class="text-white p-4"><?php echo $footer_section[1]['settings_value'];?></h6>
                    </div>

                    <div class="col-md-2">
                        <h4 class="text-white">Quick Menu</h4><hr>
                            <ul class="list-inline footer-list">
                                <li><a href="<?php echo base_url();?>/user/login">Login as User</a></li>
                                <li><a href="<?php echo base_url();?>/user/user_registration">Crate an Account</a></li>
                                <li><a href="<?php echo base_url();?>/user/login">Support</a></li> 
                            </ul>     
                    </div>

                    <div class="col-md-3">
                        <h4 class="text-white">Important Link</h4><hr>
                        <ul class="list-inline footer-list">
                            <?php foreach($policy_pages as $all_policy){?>
                                <li class="list-inline-item  pb-2"><a href="<?= base_url()?>/frontend/policy_details/<?php echo $all_policy['id'];?>"><?php echo $all_policy['title'];?></a></li>
                            <?php } ?>    
                        </ul> 
                    </div>

                    <div class="col-md-3">
                        <h4 class="text-white">Site Links</h4><hr> 

                        <ul class="list-inline footer-list">
                            <li class="list-inline-item  pb-2"><a href="<?php echo base_url();?>">Home</a></li>
                            <li class="list-inline-item  pb-2"><a href="<?php echo base_url();?>/contact">Contact</a></li>
                            <li class="list-inline-item  pb-2"><a href="<?php echo base_url();?>/blog">Blog</a></li>
                        </ul> 
                    </div>

                
                </div>

            </div><hr>
            <div class="container-fluid">
                <div class="row p-2">
                    <div class="col-md-3">
                        <p class="text-white">Copyright © 2022 <a href="<?php echo base_url();?>" class="text-warning">Rs RateLab</a> All Right Reserved</p>
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-3">
                        <?php foreach($social_icon as $social_icons){?>
                            <a href="<?php echo $social_icons['url'];?>" class="p-2"><i class="<?php echo $social_icons['social_icon'];?>"></i></a>
                        <?php } ?>    
                    </div>
                </div> 
            </div>      
        </footer>
        <!-- footer end -->

        <style>
                .bg_new
                {
                background:url(<?php echo base_url();?>/admin/uploads/breadcrumb/<?php echo $breadcrumb[0]['settings_value']?>)!important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
                padding: 82px 0px 240px !important;
                }

                .eupopup-container-bottomleft {
                    position: fixed;
                    bottom: 10px;
                    left: 10px;
                    width: 562px;
                }

                .eupopup-container {
                    background-color: rgba(25, 25, 25, 0.9);
                    color: #efefef;
                    padding: 5px 20px;
                    font-size: 12px;
                    line-height: 3.2em;
                    text-align: center;
                    display: none;
                    z-index: 9999999;
                }
        </style>
        <!-- Back to top -->    
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>
        
        <!-- javascript -->
        <script src="<?php echo base_url();?>/frontend/js/bootstrap.bundle.min.js"></script>
        <!-- counter js -->
        <script src="<?php echo base_url();?>/frontend/js/counter.int.js"></script>
        <!-- Font-awesome js -->
        <script src="<?= base_url() ?>/frontend/fontawesome/js/all.js"></script>
        <!-- custom js -->
        <script src="<?php echo base_url();?>/frontend/js/app.js"></script>
        <script src="<?php echo base_url();?>/frontend/js/jquery-eu-cookie-law-popup.js"></script> 

        <script>
            $(document).ready( function(){
                var description='<?php echo $cookie[1]->settings_value;?>';
                console.log(description);
                if ($(".eupopup").length > 0) {
                    $(document).euCookieLawPopup().init({
                        'info' : 'YOU_CAN_ADD_MORE_SETTINGS_HERE',
                        'popupTitle' : 'This website is using cookies',
                        'popupText' : 'something is wrong',
                        'buttonContinueTitle' : 'Accept all cookies',
                        'agreementExpiresInDays' : 60,
                    });
                }
            });
        </script>       
     </body>

</html>       