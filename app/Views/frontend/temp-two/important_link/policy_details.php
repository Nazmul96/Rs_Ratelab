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
                            <h1><?php echo $policypage['title'];?></h1>
                        </div>
                        <div class="page-breadcrumb wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="2500ms">
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><?php echo $policypage['title'];?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.section-internal -->
    </div> <!-- /.container -->
</section> <!-- /.breadcrumb-area -->
<!-- home end -->

<!-- services start -->
<section class="">
    <div class="container mt-3 mb-3">
       <div class="row">

            <?php echo $policypage['details'];?>

        </div>
    </div>
    <!-- end container-fluid -->
</section>

<style>

    input{

        display:none;
    }
</style>
 
<?= $this->include('frontend/temp-two/include/footer'); ?>

