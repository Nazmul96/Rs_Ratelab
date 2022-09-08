<?= $this->extend('frontend/temp-two/master'); ?>
<?= $this->section('content'); ?>

 <section class="hero-area hero-v4" style="background-image: url(<?php echo base_url();?>/frontend/template1/assets/img/hero/hero-curve-bg.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="section-particle-effect d-none d-lg-block">
                        <img class="particle-1 animate-rotate-me" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-2.png" alt="particle One">
                        <img class="particle-2 animate-float-bob-y" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-3.png" alt="particle Two">
                        <img class="particle-3 animate-zoominout" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-4.png" alt="particle Three">
                        <img class="particle-4 animate-float-bob-y" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-5.png" alt="particle Four">
                    </div>
                    <div class="section-title section-title-mandy">
                        <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms"><?= $banner['heading']; ?></h1>
                        <div class="section-button-wrapper section-dual-button wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                            <a href="services.php" class="filled-btn bg-mandy button-radius">
                                Get Free Trial <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="about.php" class="filled-btn bg-purple button-radius">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
             
                </div>
            </div>
            <div class="col-lg-6">
                <div class="chartboard-image-wrapper">
                    <img src="<?php echo base_url() ?>/admin/uploads/theme_two_image/<?php echo $theme_two_additional_image[0]['settings_value'];?>" alt="chartboard image one" class="chartboard-image chartboard-image-main wow fadeInDown animate-float-bob-x" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="chartboard-app-preview">
                        <img src="<?php echo base_url() ?>/admin/uploads/theme_two_image/<?php echo $theme_two_additional_image[1]['settings_value'];?>" alt="app preview one" class="chartboard-image chartboard-app-preview-1 wow fadeInDown" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <img src="<?php echo base_url() ?>/admin/uploads/theme_two_image/<?php echo $theme_two_additional_image[2]['settings_value'];?>" alt="app preview two" class="chartboard-image chartboard-app-preview-2 wow fadeInDown" data-wow-delay="700ms" data-wow-duration="1500ms">
                        <img src="<?php echo base_url() ?>/admin/uploads/theme_two_image/<?php echo $theme_two_additional_image[3]['settings_value'];?>" alt="app preview three" class="chartboard-image chartboard-app-preview-3 wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                    </div>
                    <img src="<?php echo base_url() ?>/admin/uploads/theme_two_image/<?php echo $theme_two_additional_image[4]['settings_value'];?>" alt="chartboard image two" class="chartboard-image chartboard-image-secondary wow fadeInRight animate-float-bob-y" data-wow-delay="900ms" data-wow-duration="1500ms">
                </div> <!-- /.chart-board-image-wrapper -->
            </div>
        </div> <!-- /.row -->
    </div> <!-- .container -->
</section> <!-- /.hero-area -->
<!--====== End Hero Area ======-->
<!--====== Start Feature Area why choose us======-->

<?php
    $explode = explode(',', $section['selected_section']);

    for ($i = 0; $i < count($explode); $i++) {
        $value=1;

        switch ($explode[$i]) {
            
            case "Category Section":
                category_section($category, $categorymodel,$value);
                break; 
            case "Why Choose Us":
                whychooseus_section($chooseushead, $chooseuscontent,$value);
                break;
            case "Review":
                review_section($review_heading, $all_reviews,$value);
                break;
            case "CTA Section":
                cta_section($ctasectionhead, $ctacontents,$value);
                break;
            case "Testimonial":
                testimonial_section($titemhead, $titemcontents, $value);
                break;    
            case "collaboration": 
                collaboration_section($collaboration_section,$value);
                break;
            case "Blog Section":
                blog_section($blog_section, $blog, $value);
                break;
            default:
                echo "wrong";
        }
    

    }

    ?>
<!--====== End Feature Area ======-->

<!--====== End Collaboration Area ======-->



<!--====== Start Subscribe Newsletter Area ======-->
<section class="subscribe-newsletter-area pt-120 pb-120" style="background-image: url(assets/img/particle/newsletter-bg.png);">
    <div class="container">
        <div class="section-internal">
            <div class="section-particle-effect d-none d-md-block section-particle-effect-v4">
                <img class="particle-1 animate-rotate-me" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-2.png" alt="particle One">
                <img class="particle-2 animate-rotate-me" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/gradient-curve-shape-2.png" alt="particle Two">
                <img class="particle-3 animate-zoominout" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-4.png" alt="particle Three">
                <img class="particle-4 animate-float-bob-y" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-5.png" alt="particle Five">
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="subscribe-newsletter-content">
                        <div class="section-title mb-80 section-title-mirage">
                            <div class="section-heading-tag wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                <span class="single-heading-tag">Newsletter Subscribe</span>
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">Subscribe Our Newsletter To <br class="d-none d-md-block"> <span>Get More Update</span></h2>
                        </div>
                        <div class="newsletter-form wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                            <form action="<?php echo base_url();?>/subscribe_submit" method="post" class="subscribe_submit">
                                <div class="form-group">
                                    <input type="email" name="email_address" id="emailAddress" class="form-control" placeholder="Enter Your Email Address">
                                    <button type="submit" class="filled-btn bg-mandy button-radius">Subscribe Now <i class="fas fa-arrow-right"></i></button>
                                </div>
                                <span id="mgs" style="color:red;"></span>
                                <span id="mgs_success" style="color:green;"></span>
                            </form>
                            <div class="newsletter-notice">
                                <p>On the other hand, we denounce with righteous</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.section-internal -->
    </div> <!-- /.container -->
</section> <!-- /.subscribe-newsletter-area -->
<style>
    .slick-prev, .slick-next {
        background: black;
    }
</style>
 <script src="<?= base_url(); ?>/frontend/slick/slick.min.js"></script>
 <script>
      //subscription form----------
      $('.subscribe_submit').submit(function(e) {
                  e.preventDefault();  
                  var url = $(this).attr('action');
                  var request = $(this).serialize();
                  $.ajax({
                    url: url,
                    type: 'post',
                    async: false,
                    data: request,
                    dataType: 'JSON',
                    success: function(data) {
                      console.log(data);
                      if (data.success == true) {
                        $('#mgs').html('');
                        $('.subscribe_submit')[0].reset();
                        if (data.message != '') {
                            $('#mgs_success').html(data.message);
                            }
                        else {
                            $('#mgs_success').html('');
                          }   
                      }
                       if (data.success == false) {
                        if (data.msg != '') {
                            $('#mgs_success').html('');
                            $('#mgs').html('');
                            $('#mgs').html(data.msg);
                            }   
                        else {
                            $('#mgs').html('');
                          }    
                        }
                      }  
                  });
              });
 </script>



<?= $this->endSection() ?>