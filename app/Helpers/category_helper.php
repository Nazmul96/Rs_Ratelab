<?php

if (!function_exists("category_section")) {
    function category_section($category, $categorymodel,$value=""){ ?>

        <?php if($value == ''){?>     
            <section class="category-section pt-100 pb-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="section-header text-center mb-4">
                                            <h2 class="section-title style--two"><?= $category[0]['settings_value']; ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="category-list d-flex">
                                            <?php foreach ($categorymodel as $category) : ?>
                                                <a href="<?= base_url() ?>/admin/companies/category/<?= $category->id; ?>" class="category-list__single">
                                                    <i class="<?= $category->category_icon; ?>"></i> <span><?= $category->category_name; ?></span>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           <?php } else {?>
                <!--====== Start Design Feature Area category======-->
            <section class="design-feature-area overflow-hidden bg-alice-blue pt-130 pb-130">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 order-2 order-lg-1">
                            <div class="section-title section-title-mirage">
                                <div class="section-heading-tag">
                                    <span class="single-heading-tag">Easy Links</span>
                                </div>
                                <h2><?= $category[0]['settings_value']; ?></h2>
                                <div class="section-title-description">
                                    <p>But I must explain to you how all this mistaken denouncing pleasure and praising pain was born give you a complete account.</p>
                                </div>
                                <div class="section-list-style list-style-v2">
                                    <ul> 
                                        <?php foreach ($categorymodel as $category) : ?>
                                                
                                            <li><?= $category->category_name;?></li>   
                                                    
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="section-button-wrapper">
                                    <a href="about.php" class="filled-btn bg-purple button-radius">
                                        Learn More <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 order-1 order-lg-2">
                            <div class="app-preview-image text-center text-lg-right content-left-spacer oval-gradient">
                                <div class="app-feature-preview-main animate-float-bob-y wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <img src="<?php echo base_url();?>/frontend/template1/assets/img/app/connect-with-team-1.jpg" alt="connect team one">
                                </div>
                                <div class="app-feature-preview-absolute animate-float-bob-x wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <img src="<?php echo base_url();?>/frontend/template1/assets/img/app/connect-with-team-2.jpg" alt="connect team two">
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </section> <!-- /.design-feature-area -->
            <!--====== End Design Feature Area ======-->

           <?php } ?>                                     
    <?php }
}
