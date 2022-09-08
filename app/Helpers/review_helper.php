<?php

if (!function_exists("review_section")) {
    function review_section($review_heading, $all_reviews, $value='')
    { ?>
       <?php if($value == ''){?> 
        <section class="section" id="clients">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center mb-4">
                            <h4 class="text-white"><?php echo $review_heading[0]['settings_value']; ?></h4>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <marquee scrollamount="12">
                    <div class="row">
                        <?php foreach ($all_reviews as $all) {

                            $name = $all->first_name . ' ' . $all->last_name;
                        ?>
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?php echo base_url() ?>/frontend/images/users/<?php echo $all->user_image; ?>" class="rounded-circle" alt="not found" height="60px" width="60px">

                                        </div>
                                        <div class="col-md-8">
                                            <h4><?php echo $all->company_name ?></h4>
                                            <p>Reviewed by <?php echo $name; ?></p>
                                        </div>
                                        <span class="text-warning">
                                            <?php
                                            if ($all->company_rating == 1) {
                                                echo '<i class="mdi mdi-star mdi-24px"></i>
                                    <i class="mdi mdi-star-outline mdi-24px"></i>
                                    <i class="mdi mdi-star-outline mdi-24px"></i>
                                    <i class="mdi mdi-star-outline mdi-24px"></i>
                                    <i class="mdi mdi-star-outline mdi-24px"></i>
                                ';
                                            } else if ($all->company_rating == 2) {
                                                echo '<i class="mdi mdi-star mdi-24px"></i>
                                    <i class="mdi mdi-star mdi-24px"></i>
                                    <i class="mdi mdi-star-outline mdi-24px"></i>
                                    <i class="mdi mdi-star-outline mdi-24px"></i>
                                    <i class="mdi mdi-star-outline mdi-24px"></i> 
                                ';
                                            } else if ($all->company_rating == 3) {


                                                echo '<i class="mdi mdi-star mdi-24px"></i>
                                    <i class="mdi mdi-star mdi-24px"></i>
                                    <i class="mdi mdi-star mdi-24px"></i>
                                    <i class="mdi mdi-star-outline mdi-24px"></i>
                                    <i class="mdi mdi-star-outline mdi-24px"></i> 
                                ';
                                            } else if ($all->company_rating == 4) {

                                                echo '<i class="mdi mdi-star mdi-24px"></i>
                                    <i class="mdi mdi-star mdi-24px"></i>
                                    <i class="mdi mdi-star mdi-24px"></i>
                                    <i class="mdi mdi-star mdi-24px"></i>
                                    <i class="mdi mdi-star-outline mdi-24px"></i>  
                                ';
                                            } else if ($all->company_rating == 5) {

                                                echo '<i class="mdi mdi-star-outline mdi-24px"></i>
                                <i class="mdi mdi-star-outline mdi-24px"></i>
                                <i class="mdi mdi-star-outline mdi-24px"></i>
                                <i class="mdi mdi-star-outline mdi-24px"></i>
                                <i class="mdi mdi-star-outline mdi-24px"></i>  
                                ';
                                            }
                                            ?>
                                        </span>
                                        <p><?php echo $all->company_review; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </marquee>
                <!-- end row -->

                <div class="row mt-5 pt-5">
                    <div class="col-lg-3 col-sm-6">
                        <div class="client-images">
                            <img src="<?php echo base_url(); ?>/frontend/images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="client-images">
                            <img src="<?php echo base_url(); ?>/frontend/images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="client-images">
                            <img src="<?php echo base_url(); ?>/frontend/images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="client-images">
                            <img src="<?php echo base_url(); ?>/frontend/images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container-fluid -->
        </section>
     <?php } else {?> 
                
        
        <!--====== Start Testimonial Area review======-->
        <section class="testimonial-area pt-120 pb-100 bg-dark-black">
            <div class="container">
                <div class="section-title text-center mb-100 section-title-white section-title-white-v2">
                    <div class="section-heading-tag">
                        <span class="single-heading-tag bordered-tag text-white"><?php echo $review_heading[0]['settings_value'];?></span>
                    </div>
                    <h2>What Our Clients Say <br class="d-none d-md-block"> About <span>Rate Lab</span></h2>
                </div>
                <div class="testimonial-slider">
                    <div class="row">
                    <?php foreach ($all_reviews as $all) {

                        $name = $all->first_name . ' ' . $all->last_name;
                        ?>  
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-80 single-testimonial-v3 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="single-testimonial-body">
                                    <div class="author-rating">
                                        <ul class="rating-review">
                                            <li>
                                                <div class="all-rating star-5">
                                                    <div class="main-rating">
                                                        
                                                        <?php
                                                    if ($all->company_rating == 1) {
                                                        echo '<i class="fa fa-star"></i>
                                                    ';
                                                    } else if ($all->company_rating == 2) {
                                                        echo '<i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        
                                                    ';
                                                    } else if ($all->company_rating == 3) {


                                                        echo '<i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    ';
                                                    } else if ($all->company_rating == 4) {

                                                        echo '<i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        ';
                                                    } else if ($all->company_rating == 5) {

                                                        echo '<i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>';
                                                    }
                                                    ?>
                                                    </div>
                                                
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="testimonial-brand">
                                            <img src="<?php echo base_url();?>/frontend/template1/assets/img/testimonial/testimonial-brand-1.png" alt="testimonial brand one">
                                        </div>
                                    </div>
                                    <p class="author-comments"><?php echo $all->company_review; ?></p>
                                </div>
                                <div class="testimonial-author">
                                    <img src="<?php echo base_url() ?>/frontend/images/users/<?php echo $all->user_image; ?>" alt="testimonial author">
                                    <h6><?php echo $all->company_name ?><span>Reviewed by <?php echo $name; ?></span></h6>
                                </div>
                            </div>
                        
                        </div>
                    <?php } ?>   
                        
                    </div>
                </div> <!-- /.testimonial-slider -->
            </div> <!-- /.container -->
        </section> <!-- /.testimonial-area -->
        <!--====== End Testimonial Area ======-->

     <?php } ?>                                         
<?php }
}
