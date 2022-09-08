<?= $this->include('frontend/temp-two/include/header'); ?>
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
                                    <h1>Blog Details</h1>
                                </div>
                                <div class="page-breadcrumb wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                                    <ul class="breadcrumb">
                                        <li><a href="index.html">Home</a></li>
                                        <li class="active">Blog Details</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.section-internal -->
            </div> <!-- /.container -->
        </section> <!-- /.breadcrumb-area -->
        <!--====== End Breadcrumb Area ======-->
        <!--====== Start Blog Details Area ======-->
        <section class="blog-details-wrapper pt-130 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details-content">
                            <div class="blog-post-item">
                                <div class="post-thumbnail">
                                    <img src="<?php echo base_url()?>/admin/uploads/blog_section/<?php echo $single_blog['image'];?>" alt="blog thumbnail">
                                </div>
                                <div class="entry-content">
                                    <div class="post-meta-wrapper">
                                        <ul>                       
                                            <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i><?php $show_date = date('Y M d', strtotime($single_blog['created_at'])); 
                                             echo $show_date;?></a></li>
                                        </ul>
                                    </div>
                                    <h4><?php echo $single_blog['title'];?></h4>
                                    <p><?php echo $single_blog['description'];?></p>
                              
                                </div>
                            </div>
                       
                      
                      
                        </div> <!-- /.blog-details-content -->
                    </div>
                    <div class="col-lg-4">
                        <div class="posts-sidebar">
                         
                      
                            <div class="widget latest-post-widget wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1200ms">
                                <h4 class="sidebar-widget-title">Latest News</h4>
                                <div class="popular-posts-wrapper">
                                <?php foreach($blog as $blogs){?>   
                                    <div class="popular-posts-item">
                                        <div class="popular-posts-thumbnail">
                                            <a href="<?php echo base_url();?>/blog_details/<?php echo $blogs->id;?>">
                                                <img src="<?php echo base_url()?>/admin/uploads/blog_section/<?php echo $blogs->image;?>" alt="latest post one">
                                            </a>
                                        </div>
                                        <div class="popular-posts-item-content">
                                            <h5 class="popular-posts-title"><a href="<?php echo base_url();?>/blog_details/<?php echo $blogs->id;?>"><?php echo $blogs->title;?></a></h5>
                                            <a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> <?php $show_date = date('Y M d', strtotime($single_blog['created_at'])); 
                                             echo $show_date;?></a>
                                        </div>
                                    </div> <!-- /.popular-posts-item -->
                                 <?php } ?>
                            
                                </div>
                            </div>
                       
                        
                        </div> <!-- /.posts-sidebar -->
                    </div>
                </div> <!-- /row -->
            </div> <!-- .container -->
        </section> <!-- /.blog-details-wrapper -->
        <!--====== End Blog Details Area ======-->
        <!--====== Start Subscribe Newsletter Area ======-->
        <section class="subscribe-newsletter-area bg-white-lilac pt-130 pb-123" style="background-image: url(<?php echo base_url();?>/frontend/template1/assets/img/particle/newsletter-bg.png);">
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