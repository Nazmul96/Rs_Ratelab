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
                        <div class="page-title wow fadeInDown" data-wow-delay="0.1s" data-wow-duration="1500ms">
                            <h1>Blog Standard</h1>
                        </div>
                        <div class="page-breadcrumb wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Blog Standard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.section-internal -->
    </div> <!-- /.container -->
</section> <!-- /.breadcrumb-area -->
<!--====== End Breadcrumb Area ======-->
<!--====== Start Blog List Area ======-->
<section class="blog-list-wrapper pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-list-content">
                <?php foreach($blog as $blogs){
                     //echo $blogs['created_at'];die();
                    ?> 
                    <div class="blog-post-item blog-post-item-v3">
                        <div class="post-thumbnail">
                            <a href="<?php echo base_url();?>/blog_details/<?php echo $blogs['id'];?>">
                                <img src="<?php echo base_url()?>/admin/uploads/blog_section/<?php echo $blogs['image'];?>" alt="blog thumbnail one">
                            </a>
                        </div>
                        <div class="blog-post-entry-content">
                            <div class="post-meta-wrapper">
                                <ul>                                  
                                    <li><a href="<?php echo base_url();?>/blog_details/<?php echo $blogs['id'];?>" class="post-meta"><i class="far fa-calendar-alt"></i><?php echo $blogs['created_at'];?></a></li>
                                </ul>
                            </div>
                            <h4 class="post-title"><a href="<?php echo base_url();?>/blog_details/<?php echo $blogs['id'];?>"><h4 class="card-title"><?php echo $blogs['title'];?></h4></a></h4>
                            <div class="post-excerpt">
                                <p><?php 
                            echo substr_replace($blogs['description'], "...", 100);?></p>
                            </div>
                            <div class="post-read-more">
                                <a href="<?php echo base_url();?>/blog_details/<?php echo $blogs['id'];?>" class="filled-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> <!-- /.blog-post-item -->
                    <?php } ?>
                           
                    <!-- Posts Navigation -->
                    <nav class="posts-navigation" aria-label="posts">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="fas fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> <!-- /.blog-list-content -->
            </div>
            <div class="col-lg-4">
                <div class="posts-sidebar">
                   
                  
                    <div class="widget latest-post-widget wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1200ms">
                        <h4 class="sidebar-widget-title">Latest News</h4>
                        <div class="popular-posts-wrapper">
                        <?php foreach($blog as $blogs){
                            ?>  
                            <div class="popular-posts-item">
                                <div class="popular-posts-thumbnail">
                                    <a href="<?php echo base_url();?>/blog_details/<?php echo $blogs['id'];?>">
                                        <img src="<?php echo base_url()?>/admin/uploads/blog_section/<?php echo $blogs['image'];?>" alt="latest post one">
                                    </a>
                                </div>
                                <div class="popular-posts-item-content">
                                    <h5 class="popular-posts-title"><a href="<?php echo base_url();?>/blog_details/<?php echo $blogs['id'];?>"><?php echo $blogs['title'];?></a></h5>
                                    <a href="#" class="posts-date"><i class="far fa-calendar-alt"></i><?php echo $blogs['created_at'];?></a>
                                </div>
                            </div> <!-- /.popular-posts-item -->
                         <?php } ?>
                           
                        </div>
                    </div>
 
                </div> <!-- /.posts-sidebar -->
            </div>
        </div> <!-- /row -->
    </div> <!-- .container -->
</section> <!-- /.blog-list-wrapper -->
<!--====== End Blog List Area ======-->
<!--====== Start Subscribe Newsletter Area ======-->
<section class="subscribe-newsletter-area bg-white-lilac pt-130 pb-123" style="background-image: url(assets/img/particle/newsletter-bg.png);">
    <div class="container">
        <div class="section-internal">
            <div class="section-particle-effect d-none d-md-block section-particle-effect-v4">
                <img class="particle-1 animate-rotate-me" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-2.png" alt="particle One">
                <img class="particle-2 animate-rotate-me" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/gradient-curve-shape-2.png" alt="particle Two">
                <img class="particle-3 animate-zoominout" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-4.png" alt="particle Three">
                <img class="particle-4 animate-float-bob-y" src="<?php echo base_url();?>/frontend/template1/assets/img/particle/particle-5.png" alt="particle Five">
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="subscribe-newsletter-content">
                        <div class="section-title mb-35">
                            <div class="section-heading-tag wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                <span class="single-heading-tag">Our Newsletter</span>
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">Subscribe Our Newsletter <br class="d-none d-md-block">To Get More Update</h2>
                        </div>
                        <div class="newsletter-form newsletter-form-v2 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                            <form>
                                <div class="form-group">
                                    <input type="email" name="email" id="emailAddress" class="form-control" placeholder="Enter Your Email Address">
                                    <button type="submit" name="submit" value="Go" class="filled-btn">Subscribe Now <i class="fas fa-arrow-right"></i></button>
                                </div>
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
<!--====== End Subscribe Newsletter Area ======-->
<?= $this->include('frontend/temp-two/include/footer'); ?>