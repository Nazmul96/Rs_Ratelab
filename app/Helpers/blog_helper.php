<?php

if (!function_exists("blog_section")) {
    function blog_section($blog_section, $blog, $value="")
    { ?>
       
       <?php if($value == ''){?>
        <section class="section bg-light" id="contact">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center mb-5">
                            <h5 class="text-warning small-title"><?php echo $blog_section[1]['settings_value']; ?></h5>
                            <h1><?php echo $blog_section[0]['settings_value']; ?></h1>

                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="testimonial-slider-new">
                        <?php foreach ($blog as $blogs) {
                        ?>
                            <div class="single-slide">
                                <div class="testimonial-card">

                                    <div class="col-md-4 w-30">

                                        <!-- Simple card -->
                                        <div class="card">
                                            <a href="<?php echo base_url(); ?>/blog_details/<?php echo $blogs['id']; ?>">
                                                <img class="card-img-top img-fluid" src="<?php echo base_url() ?>/admin/uploads/blog_section/<?php echo $blogs['image']; ?>" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title"><?php echo $blogs['title']; ?></h4>
                                            </a>
                                            <p class="card-text"><?php
                                                                    echo substr_replace($blogs['description'], "...", 100); ?></p>
                                            <a href="<?php echo base_url(); ?>/blog_details/<?php echo $blogs['id']; ?>" class="text-warning">Read More <i class="mdi mdi-arrow-right"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>
                <?php } ?>
                </div>
            </div>

            <!-- end container-fluid -->
        </section>
      <?php } else {?>
          <!--====== Start Blog & News Area ======-->
            <section class="blog-and-news-area pt-120 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title mb-120 section-title-mirage">
                                <div class="section-heading-tag">
                                    <span class="single-heading-tag"><?php echo $blog_section[1]['settings_value']; ?></span>
                                </div>
                                <h2><?php echo $blog_section[0]['settings_value']; ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php foreach ($blog as $blogs) {
                                    ?> 
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item blog-post-item-v2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="post-thumbnail">
                                    <a href="<?php echo base_url(); ?>/blog_details/<?php echo $blogs['id']; ?>">
                                        <img src="<?php echo base_url() ?>/admin/uploads/blog_section/<?php echo $blogs['image']; ?>" alt="blog thumbnail one">
                                    </a>
                                </div>
                                <div class="blog-post-entry-content">
                                    <div class="post-meta-wrapper">
                                        <ul>
                                            <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i><?php $show_date = date('Y M d', strtotime($blogs['created_at'])); 
                                                        echo $show_date;?></a></li>
                                        </ul>
                                    </div>
                                    <h4 class="post-title"><a href="<?php echo base_url(); ?>/blog_details/<?php echo $blogs['id']; ?>"><?php echo $blogs['title']; ?></a></h4>
                                
                                </div>
                            </div>
                        </div>
                    <?php } ?> 
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </section> <!-- /.blog-and-news-area -->
            <!--====== End Blog & News Area ======-->  
      <?php } ?>  

<?php }
}
