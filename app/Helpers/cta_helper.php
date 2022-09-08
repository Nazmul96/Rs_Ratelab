<?php

if (!function_exists("cta_section")) {
    function cta_section($ctasectionhead, $ctacontents, $value="")
    { ?>

      <?php if($value == ''){?>  
        <section class="cta-section pt-100 pb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="section-header">
                                    <div class="col-md-8">
                                        <h2 class="section-title style--two"><?= $ctasectionhead['heading']; ?></h2>
                                        <p class="mt-3 section-subtitle">
                                            <?= $ctasectionhead['subheading']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="row mt-5">

                                        <?php foreach ($ctacontents as $ctacontent) : ?>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-body box-shadow">
                                                        <div class="cta-card__icon">
                                                            <i class="<?= $ctacontent['icon']; ?> fa-3x"></i>
                                                        </div>
                                                        <div class="cta-card__content">
                                                            <div class="choose-card__title">
                                                                <h2><?= $ctacontent['title']; ?></h2>
                                                            </div>
                                                            <div class="choose-card__description">
                                                                <p><?= $ctacontent['description']; ?></p>
                                                            </div>

                                                            <a href="<?= base_url(); ?>/user/<?= $ctacontent['url']; ?>" class="btn btn--base mt-4"><?= $ctacontent['button_name']; ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
        
                <!--====== Start Our Services Area cta section======-->
        <section class="our-services pt-120 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center mb-120 section-title-mirage">
                            <div class="section-heading-tag">
                                <span class="single-heading-tag"><?= $ctasectionhead['heading']; ?></span>
                            </div>
                            <h2><?= $ctasectionhead['subheading']; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="row">
                            <?php foreach ($ctacontents as $ctacontent) : ?>
                                <div class="col-lg-6">
                                    <div class="single-feature-box single-feature-box-v2 single-feature-box-v2-color-1 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="feature-box-icon">
                                            <i class="<?= $ctacontent['icon']; ?>"></i>
                                        </div>
                                        <div class="feature-box-content">
                                            <h4><?= $ctacontent['title']; ?></h4>
                                            <p><?= $ctacontent['description']; ?></p>
                                        </div> 
                                        <div class="iconic-box-btn">
                                                <a href="<?= base_url(); ?>/user/<?= $ctacontent['url']; ?>" class="fas fa-arrow-right"> <?= $ctacontent['button_name']; ?></a>
                                        </div>       
                                    </div>    
                                </div> 
                            <?php endforeach; ?>                              
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </section> <!-- /.our-services -->
        <!--====== End Our Services Area ======-->
      <?php } ?>
<?php }
}
