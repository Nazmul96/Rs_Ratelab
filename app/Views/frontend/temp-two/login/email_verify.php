<?= $this->extend('frontend/temp-one/master'); ?>
<?= $this->section('content'); ?>

<!-- home start -->
<section class="bg-home bg-gradient bg_new" id="home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <h2 align="center" class="text-white mt-5">Verify your account</h2>
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
                            <h4 class="text-uppercase mt-0">Verify your account</h4>
                        </div>

                        <?php
                        if (isset($error)) {
                            echo $error;
                        }

                        if (isset($success)) {
                            echo $success;
                        }

                        // echo '<pre>';
                        // print_r($result);
                        // die();
                        $time=$result->created_at;
                        $time_str=strtotime($time);

                        $cuurent_time=time();

                        $new_time=$cuurent_time - $time_str;
                      
                        $min=$new_time/60;
                        $new_min=number_format((float)$min, 0, '.', '');

                        //echo $new_min;die();

                        ?>

                        <?php if($new_min > 5){?>
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Resend a new Code</label><br>
                                <a href="<?php echo base_url()?>/user/resend_verify_code/<?php echo $result->tbl_user_id;?>" class="btn btn-outline-primary">Resend Code</a>
                            </div>
                        <?php } else {?> 
                            <form method="post" action="<?= base_url() ?>/user/email_verify/<?php echo $result->email_verification_token;?>">
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Verification Code</label>
                                <input class="form-control" type="text" id="emailaddress" placeholder="Enter your code" name="verify_code">
                                <small style="color:red;" class="text-danger"><?php if (isset($validation)) {
                                                                                                                echo $validation->getError('verify_code');
                                                                                                                } ?>
                                </small>
                                <small>After 5 min your code is expired</small>                                                    
                            </div>    
                                                                                                                              
                            <div class="mb-3 d-grid text-center">
                                <button class="btn btn-primary" type="submit"> Verify Code</button>
                            </div>
                        </form>
                        <?php } ?>
                    </div> <!-- end card-body -->
                </div>
             </div>

            <div class="col-md-6" style="background-image: url(<?php echo base_url()?>/admin/uploads/verification_code/<?php echo $verification_code[2]['settings_value'];?>);">
                <div class="new-image">
                        <h3 class="text-white"><?php echo $verification_code[0]['settings_value'];?></h3>
                        <h6 class="text-warning"><?php echo $verification_code[1]['settings_value'];?></h6>
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