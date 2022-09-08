<?= $this->extend('frontend/temp-one/master'); ?>
<?= $this->section('content'); ?>
 <link rel="stylesheet" href="<?= base_url() ?>/frontend/slick/slick.css">
 <link rel="stylesheet" href="<?= base_url() ?>/frontend/slick/slick-theme.css">


 <!-- banner start -->
 <section class="bg-home bg_img" id="home" style="background-image: url('<?php echo base_url(); ?>/admin/uploads/banner_section/<?= $banner['image']; ?>');!important">
     <div class="home-center">
         <div class="home-desc-center">
             <div class="container-fluid">
                 <div class="row align-items-center">
                     <div class="col-lg-6 col-sm-6">
                         <div class="home-title">
                             <h2 class="mb-4 hero__title"><?= $banner['heading']; ?></h2>
                             <p class="hero__description"><?= $banner['subheading']; ?></p>
                         </div>
                     </div>
                 </div>
                 <!-- end row -->

             </div>
             <!-- end container-fluid -->
         </div>
     </div>
 </section>
 <!-- banner end -->


 <?php
    $explode = explode(',', $section['selected_section']);

    for ($i = 0; $i < count($explode); $i++) {

        // echo $explode[$i];
        switch ($explode[$i]) {
            
            case "Category Section":
                category_section($category, $categorymodel,);
                break; 
            case "Why Choose Us":
                whychooseus_section($chooseushead, $chooseuscontent);
                break;
            case "Review":
                review_section($review_heading, $all_reviews);
                break;
            case "CTA Section":
                cta_section($ctasectionhead, $ctacontents);
                break;
            case "Testimonial":
                testimonial_section($titemhead, $titemcontents);
                break;
            case "collaboration": 
                collaboration_section($collaboration_section);
                break;    
            case "Blog Section":
                blog_section($blog_section, $blog);
                break;
            default:
                echo "wrong";
        }
    }

    ?>

<style>
    .slick-prev, .slick-next {
        background: black;
    }
</style>
 <script src="<?= base_url(); ?>/frontend/slick/slick.min.js"></script>
 <script>
     $(document).ready(function() {
         $('.testimonial-slider').slick({
             autoplay: true,
             autoplaySpeed: 2000,
             prevArrow: '<div class="slick-prev"><i class="fas fa-long-arrow-alt-left"></i></div>',
             nextArrow: '<div class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></div>',
         });
     });
 </script>

<script>
     $(document).ready(function() {
         $('.testimonial-slider-new').slick({
             autoplay: false,
             autoplaySpeed: 2000,
             prevArrow: '<div class="slick-prev"><i class="fas fa-long-arrow-alt-left"></i></div>',
             nextArrow: '<div class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></div>',
         });
     });
 </script>

<?= $this->endSection() ?>