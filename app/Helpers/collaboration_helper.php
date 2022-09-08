<?php

if (!function_exists("collaboration_section")) {
    function collaboration_section($collaboration_section,$value=""){ ?>

 <?php if($value == '1'){?>       
        <!--====== Start Collaboration Area ======-->
    <section class="collaboration-area collaboration-area-v1 pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="app-preview-image oval-gradient content-right-spacer">
                        <div class="app-feature-preview-relative animate-float-bob-y wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <img src="<?php echo base_url();?>/frontend/template1/assets/img/app/live-chat-activity.jpg" alt="chat activity">
                        </div>
                        <div class="app-feature-preview-main wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <img src="<?php echo base_url();?>/frontend/template1/assets/img/app/live-chat-preview.png" alt="live collaboration">
                        </div>
                        <div class="app-feature-preview-backward animate-float-bob-y wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="<?php echo base_url();?>/frontend/template1/assets/img/app/live-chat-mobile-view.png" alt="mobile view">
                        </div>
                        <div class="app-feature-preview-absolute animate-float-bob-x wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <img src="<?php echo base_url();?>/frontend/template1/assets/img/app/live-chat-onboard-clients.jpg" alt="chat onboard">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-title section-title-mirage">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">Collaboration With Chat</span>
                        </div>
                        <h2><?php echo $collaboration_section[0]['settings_value']?></h2>
                        <div class="section-title-description">
                            <p><?php echo $collaboration_section[1]['settings_value']?></p>
                        </div>
                        <div class="section-button-wrapper">
                            <a href="<?= base_url(); ?>/contact" class="filled-btn bg-mandy button-radius">
                                Get Stared Now <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.collaboration-area -->
 <?php } ?>   
<?php }
}
