<?= $this->extend('frontend/temp-one/master'); ?>
<?= $this->section('content'); ?>

<!-- home start -->
<section class="bg-home bg-gradient bg_new" id="home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container-fluid">
                <div class="row align-items-center">
                      <h2 align="center" class="text-white mt-5"><?php echo $policypage['title'];?></h2>
                </div>
                <!-- end row -->
                
            </div>
            <!-- end container-fluid -->
        </div>
    </div>
</section>
<!-- home end -->

<!-- services start -->
<section class="">
    <div class="container-fluid mt-3 mb-3">
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
 
<?= $this->endSection() ?>

