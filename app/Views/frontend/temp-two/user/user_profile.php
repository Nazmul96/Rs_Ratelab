<?= $this->include('frontend/temp-two/include/header'); ?>
 
<!--====== Start Breadcrumb Area ======-->
<?php

	$date = date_create($users[0]->created_at);
	$name = $users[0]->first_name . ' ' . $users[0]->last_name;

?>
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
                            <h1>Profile</h1>
                        </div>
                        <div class="page-breadcrumb wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="2500ms">
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.section-internal -->
    </div> <!-- /.container -->
</section> 
<!-- /.breadcrumb-area -->

<section class="pt-50 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
               <div class="sticky-top">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <div class="profile_thumble">
                               <?php if($users[0]->user_image){?>
                                    <img src="<?= base_url() ?>/frontend/images/users/<?php echo $users[0]->user_image;?>" alt="post author">
                                <?php } else {?> 
                                    <img src="<?php echo base_url();?>/frontend/template1/assets/img/blog/post-author-thumbnail.jpg" alt="post author">
                                <?php } ?>    
                            </div>
                            <h3><?php echo $name; ?></h3>
                            <p><i class="fal fa-map-marker-alt"></i> <?php echo $users[0]->user_address;?></p>
                            <p>software, developer , in bangladesh</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p><i class="fal fa-user"></i> Member since <?php echo date_format($date, "Y"); ?></p>
                            <p><i class="fal fa-envelope"></i> <?php echo $users[0]->email_address; ?></p>
                            <p><i class="fal fa-star"></i> Total Reviews <span>0</span></p>
                        </div>
                    </div>
               </div>
            </div>
            <div class="col-md-8">
                <form action="<?php echo base_url(); ?>/user/user-profile/<?php echo $users[0]->tbl_user_id ?>" class="signin-form" method="post" enctype="multipart/form-data" id="profile">
                <input type="hidden" name="old_image" value="<?php echo $users[0]->user_image;?>">
                    <div class="image_upload_profile"> 
                        <div class="holder">
                        <?php if($users[0]->user_image){?> 
                            <img id="imgPreview" src="<?= base_url() ?>/frontend/images/users/<?php echo $users[0]->user_image;?>" alt="pic" />
                        <?php } else {?> 
                            <img id="imgPreview" src="<?php echo base_url();?>/frontend/template1/assets/img/noimg.png" alt="pic" />
                        <?php } ?>	
                        </div>
                        <div class="camaraicon">
                            <i class="fal fa-camera"></i>
                            <input type="file" name="image" id="photo" accept="image/png, image/jpeg" />
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="mb-4 col-md-6">
                             <label>First Name</label>
                             <div class="input-group flex-nowrap">
                              <span class="input-group-text"> <i class="fal fa-user"></i></span>
                              <input type="text" class="form-control" name="first_name" value="<?php echo $users[0]->first_name; ?>">
                                <small style="color:red;" class="text-danger">
                                    <?php if (isset($validation)) {

                                            echo $validation->getError('first_name');
                                        } ?>
                                </small>
                            </div>
                        </div>
                        <div class="mb-4 col-md-6">
                             <label>Last Name</label>
                             <div class="input-group flex-nowrap">
                              <span class="input-group-text"> <i class="fal fa-user"></i></span>
                              <input type="text" class="form-control" name="last_name" value="<?php echo $users[0]->last_name;?>">
                                <small style="color:red;" class="text-danger">
                                    <?php if (isset($validation)) {

                                            echo $validation->getError('last_name');
                                        } ?>
                                </small>
                            </div>
                        </div>
                        <div class="mb-4 col-md-6">
                             <label>Email</label>
                             <div class="input-group flex-nowrap">
                              <span class="input-group-text"> <i class="fal fa-envelope"></i></span>
                              <input type="email" name="email" class="form-control" placeholder="" value="<?php echo $users[0]->email_address;?>">
                            </div>
                        </div>
                        <div class="mb-4 col-md-6">
                             <label>Mobile Number</label>
                             <div class="input-group flex-nowrap">
                              <span class="input-group-text"> <i class="fal fa-phone-volume"></i> </span>
                              <input type="tel" class="form-control" name="phone_number" value="<?php echo $users[0]->phone_number;?>">
                            </div>
                        </div>
                        <div class="mb-4 col-md-6">
                             <label>Address</label>
                             <div class="input-group flex-nowrap">
                              <span class="input-group-text"> <i class="fal fa-map-marker-alt"></i></span>
                              <input type="text" class="form-control" name="address" placeholder="" value="<?php echo $users[0]->user_address;?>">
                            </div>
                        </div>
                        <div class="mb-4 col-md-6">
                             <label>Country</label>
                             <div class="input-group flex-nowrap">
                              <span class="input-group-text"> <i class="fal fa-globe-asia"></i></span>
                              <input type="text" class="form-control" name="country" value="<?php echo $users[0]->user_country; ?>">
                            </div>
                        </div>
                        <div class="mb-4 col-md-6">
                             <label>State</label>
                             <div class="input-group flex-nowrap">
                              <span class="input-group-text"> <i class="fal fa-map-signs"></i></span>
                              <input type="text" class="form-control" placeholder="" name="state" value="<?php echo $users[0]->user_state;?>">
                            </div>
                        </div>
                        <div class="mb-4 col-md-6">
                             <label>City</label>
                             <div class="input-group flex-nowrap">
                              <span class="input-group-text"> <i class="fal fa-map-pin"></i></span>
                              <input type="text" class="form-control" name="city" value="<?php echo $users[0]->user_city; ?>">
                            </div>
                        </div>
                        <div class="mb-4 col-md-12">
                             <label>Zip Code</label>
                             <div class="input-group flex-nowrap">
                              <span class="input-group-text"> <i class="fal fa-location-arrow"></i></span>
                              <input type="text" class="form-control" name="zip_code"  value="<?php echo $users[0]->zip_code; ?>">
                            </div>
                        </div>
                        <div class="mb-4 col-md-12">
                             <label>About Me</label>
                             <div class="input-group flex-nowrap">
                              <span class="input-group-text"> <i class="fal fa-address-card"></i></span>
                             <textarea name="user_about" class="form-control" placeholder="Write about...."><?php echo $users[0]->user_about; ?></textarea>
                            </div>
                        </div> 
                        <div class="mb-4 col-md-12">
                            <div class="input-group">
                                <button type="submit" class="filled-btn"> Submit <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                         
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->include('frontend/temp-two/include/footer'); ?>