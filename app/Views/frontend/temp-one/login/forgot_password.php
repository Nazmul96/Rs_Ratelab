<?= $this->extend('frontend/temp-one/master'); ?>
<?= $this->section('content'); ?>

<!-- home start -->
<section class="bg-home bg-gradient bg_new" id="home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <h2 align="center" class="text-white mt-5">Reset Password</h2>
                </div>
                <!-- end row -->

            </div>
            <!-- end container-fluid -->
        </div>
    </div>
</section>
<!-- home end -->

<!-- services start -->
<section class="bg-light">
    <div class="container-fluid mt-3 mb-3">
        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center mb-4">
                            <h4 class="text-uppercase mt-0">Forgot Your Password</h4>
                        </div>

                        <?php
                        if (isset($error)) {
                            echo $error;
                        }

                        if (isset($success)) {
                            echo $success;
                        }
                        ?>

                        <form method="post" action="<?= base_url() ?>/user/forgot_password">
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" placeholder="Enter your email" name="admin_email">
                                <small style="color:red;" class="text-danger"><?php if (isset($validation)) {
                                                                                                                echo $validation->getError('admin_email');
                                                                                                            } ?>
                                </small>
                            </div>

                            <div class="mb-3 d-grid text-center">
                                <button class="btn btn-primary" type="submit"> Send Email </button>
                            </div>
                        </form>

                    </div> <!-- end card-body -->
                </div>
             </div>
                <div class="col-md-6" style="background-image: url(<?php echo base_url()?>/admin/uploads/forget_password/<?php echo $forgot_password[2]['settings_value'];?>);">

                        <div class="new-image">
                                <h3 class="text-white"><?php echo $forgot_password[0]['settings_value'];?></h3>
                                <h6 class="text-warning"><?php echo $forgot_password[1]['settings_value'];?></h6>
                        </div> 
                     
                </div>


            </div>
        </div>
        <!-- end container-fluid -->
</section>

<style>
    .new-image {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-120px, -50px);
    }

    .img1{
        position: relative;
        opacity: 2.5;
        width: 60%;
    }
</style>

<?= $this->endSection() ?>