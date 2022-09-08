<?php

if (!function_exists("whychooseus_section")) {
    function whychooseus_section($chooseushead, $chooseuscontent,$value="")
    { ?>
       <?php if($value == ''){?> 
        <section class="glass-overlay pt-100 pb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="section-header text-center">
                                    <div class="col-md-8 m-auto">
                                        <div class="section-subtitle border-left-right text--base">
                                            <?= $chooseushead['subheading']; ?>
                                        </div>
                                        <h2 class="section-title style--two"><?= $chooseushead['heading']; ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="row mt-5">

                                        <?php foreach ($chooseuscontent as $choose) : ?>
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-body box-shadow">
                                                        <div class="cta-card__icon">
                                                            <i class="<?= $choose['icon']; ?> fa-3x"></i>
                                                        </div>
                                                        <div class="cta-card__content">
                                                            <div class="choose-card__title">
                                                                <h2><?= $choose['title']; ?></h2>
                                                            </div>
                                                            <div class="choose-card__description">
                                                                <p><?= $choose['description']; ?></p>
                                                            </div>
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
        <!-- Theme two why choose us section -->
        <section class="features-area">
            <div class="container">
                <div class="section-internal pt-120 pb-75 border-bottom-purple">
                    <div class="section-title mb-126 text-center section-title-mirage">
                        <div class="section-heading-tag">
                            <h2 class="single-heading-tag"><?= $chooseushead['heading']; ?></h2>
                        </div>
                        <span><?= $chooseushead['subheading']; ?></span>
                    </div>
                    <div class="icon-boxes-wrapper">
                        <div class="row">
                        <?php foreach ($chooseuscontent as $choose) { ?>  
                            <div class="col-lg-3 col-md-6">
                                <div class="single-iconic-box iconic-box-v3 exclusive-iconic-box-1 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="cta-card__icon">
                                        <i class="<?= $choose['icon']; ?> fa-3x"></i>
                                    </div>
                                    <div class="iconic-box-body">
                                        <h5 class="iconic-box-title"><?= $choose['title']; ?></h5>
                                        <p class="iconic-box-content">
                                            <?= $choose['description']; ?>
                                        </p>
                                        <div class="iconic-box-btn">
                                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>   
                        </div> <!-- /.row -->
                    </div> <!-- /.icon-boxes-wrapper -->
                </div> <!-- /.section-internal -->
            </div> <!-- /.container -->
        </section> <!-- /.features-area -->
        <?php } ?>
<?php }
}
