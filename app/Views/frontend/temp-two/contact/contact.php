<?= $this->include('frontend/temp-two/include/header'); ?>
    
        <!--====== End Header Area ======-->
        <!--====== Start Breadcrumb Area ======-->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="section-internal">  
                    <div class="section-particle-effect d-none d-md-block section-particle-effect-v3">
                        <img class="particle-1 animate-zoom-fade" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-1.png" alt="particle One">
                        <img class="particle-2 animate-rotate-me" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-2.png" alt="particle Two">
                        <img class="particle-3 animate-float-bob-x" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-3.png" alt="particle Three">
                        <img class="particle-4 animate-float-bob-y" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-4.png" alt="particle Four">
                        <img class="particle-5 animate-float-bob-y" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-5.png" alt="particle Five">
                    </div>
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <div class="page-title wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="2500ms">
                                    <h1>Contact Us</h1>
                                </div>
                                <div class="page-breadcrumb wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="2500ms">
                                    <ul class="breadcrumb">
                                        <li><a href="index.html">Home</a></li>
                                        <li class="active">Contact Us</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.section-internal -->
            </div> <!-- /.container -->
        </section> <!-- /.breadcrumb-area -->
        <!--====== End Breadcrumb Area ======-->
        <!--====== Start Contact Area ======-->
        <section class="contact-area pt-130 pb-130">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="contact-area-content content-right-spacer">
                            <div class="info-iconic-boxes">
                                <div class="info-iconic-box wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                    <div class="info-icon info-icon-gradient-1">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info-body">
                                        <h5>Our Location</h5>
                                        <p><?php echo $all_contact[0]['content'];?></p>
                                    </div>
                                </div>
                                <div class="info-iconic-box wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                                    <div class="info-icon info-icon-gradient-2">
                                        <i class="fal fa-envelope-open-text"></i>
                                    </div>
                                    <div class="info-body">
                                        <h5>Email Address</h5>
                                        <p><a href="mailto:<?php echo $all_contact[2]['content'];?>"><?php echo $all_contact[2]['content'];?></a></p>
                                        
                                    </div>
                                </div>
                                <div class="info-iconic-box wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                                    <div class="info-icon info-icon-gradient-3">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="info-body">
                                        <h5>Urgent Call</h5>
                                        <p><a href="tel:<?php echo $all_contact[1]['content'];?>"><?php echo $all_contact[1]['content'];?></a></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form-area content-right-spacer">
                            <div class="section-title mb-40">
                                <div class="section-heading-tag">
                                    <span class="single-heading-tag">Send Us Message</span>
                                </div>
                                <h2>Have Any Questions ? <br class="d-none d-md-block"> Let’s Start to Talk</h2>
                            </div>
                            <div class="contact-respond">
                            <form action="<?php echo base_url();?>/contact" class="signin-form" method="post" enctype="multipart/form-data">
                             <input type="hidden" name="contact" value="contact">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="fullName" placeholder="Full Name" name="full_name">
                                        
                                        <small style="color:red;" class="text-danger">
                                            <?php if (isset($validation)) {                                            
                                            echo $validation->getError('full_name');
                                            } ?>
                                       </small>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="emailAddress" placeholder="Email Address" name="email_address">
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                    
                                                    echo $validation->getError('email_address');
                                                    } ?>
                                        </small> 
                                    </div>

                                                                       
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="write subject">
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                    
                                                    echo $validation->getError('subject');
                                                    } ?>
                                        </small> 
                                        
                                    </div>

                                    <div class="form-group form-textarea">
                                        <textarea class="form-control" id="message" placeholder="Message" name="message"></textarea>
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                    
                                                echo $validation->getError('message');
                                                } ?>
                                        </small>  
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="filled-btn">Send Message <i class="fas fa-arrow-right"></i></button>
                                    </div>
                                </form>
                            </div> <!-- /.contact-respond -->
                        </div> <!-- /.contact-form-area -->
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </section> <!-- /.contact-area -->
        <!--====== End Contact Area ======-->
        <!--====== Start Map Area ======-->
        <div class="map-area wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="map-box">
                <iframe src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
            </div> <!-- /.map-box -->
        </div> <!-- /.map-area -->
        <!--====== End Map Area ======-->
<?= $this->include('frontend/temp-two/include/footer'); ?>