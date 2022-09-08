<?= $this->include('frontend/temp-two/include/header'); ?>
 
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
                            <h1>Add New Company</h1>
                        </div>
                        <div class="page-breadcrumb wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="2500ms">
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Add New Company</li>
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Provide Your Company Information</div>
                    <div class="card-body contact-form-area">
                        <div class="contact-respond" >
                        <form action="<?php echo base_url();?>/user/company/create" class="signin-form" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <label for="iamgeadd">Image </label>
                                <div class="form-group col-md-12" style="height: 36%;">
                                    <img class="" id="picture" alt="Cinque Terre" src="<?php echo base_url('/frontend/images/400x300.jpg') ?>" alt="" height="150px" width="150px" style="float:left;margin-right:50px;">   
                                    <input id="fileinput" type="file" name="company_image" class="d-none"/>
                                    <small style="color:red;" class="text-danger">
                                      <?php if (isset($validation)) {
                                                  
                                                echo $validation->getError('company_image');
                                                } ?>
                                      </small> 
                                 </div>
                            </div>
                             <div class="input-group">
                                <input type="text" class="form-control" id="companyname" placeholder="Company Name" name="company_name">
                                <label for="companyname"> Name</label>
                                <small style="color:red;" class="text-danger">
                                      <?php if (isset($validation)) {
                                                  
                                                echo $validation->getError('company_name');
                                         } ?>
                                </small> 
                            </div>
                             <div class="input-group form-select">
                                <select class="form-control" id="selectcatagory" name="categroy_id">
                                    <option value="" disabled="" selected="">Select One</option> 
                                    <?php foreach($category as $categories){?>
                                    <option value="<?php echo $categories->id;?>"><?php echo $categories->category_name;?></option> 
                                    <?php } ?>
                                </select>
                                <small style="color:red;" class="text-danger">
                                      <?php if (isset($validation)) {
                                                  
                                         echo $validation->getError('categroy_id');
                                        } ?>
                                </small> 
                                <label for="selectcatagory">Category </label>
                            </div>
                             <div class="input-group">
                                <input type="url" class="form-control" id="url" placeholder="URL" name="company_url">
                                <label for="url">URL </label>
                                <small style="color:red;" class="text-danger">
                                     <?php if (isset($validation)) {
                                            
                                        echo $validation->getError('company_url');
                                        } ?>
                                </small>
                            </div>
                             <div class="input-group">
                                <input type="text" class="form-control" id="email" placeholder="Email " name="company_email">
                                <label for="email">Email </label>
                                <small style="color:red;" class="text-danger">
                                    <?php if (isset($validation)) {
                                            
                                        echo $validation->getError('company_email');
                                        } ?>
                                </small>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" id="address" placeholder="Address" name="company_address">
                                <label for="address">Address </label>
                                <small style="color:red;" class="text-danger">
                                <?php if (isset($validation)) {
                                            
                                        echo $validation->getError('company_address');
                                        } ?>
                                </small> 
                            </div>
                            <div class="input-group">
                                    <input type="text" name="tags" id="tags" class="form-control" placeholder="Tags" value="">
                                    <label for="tags">Tags</label>
                                    <small style="color:red;" class="text-danger">
                                      <?php if (isset($validation)) {
                                                  
                                                echo $validation->getError('tags');
                                                } ?>
                                      </small> 
                            </div><br> 
                            <div class="input-group form-textarea">
                                <textarea class="form-control" id="message" placeholder="Message" name="description"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <div class="input-group">
                                <button type="submit" class="filled-btn"> Submit <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$( document ).ready(function() {
     $('#picture').on('click', function() {
            $('#fileinput').trigger('click');
            // $('#image_update').trigger('submit');
    });

       //for image show-----
       window.addEventListener('load', function() {
          document.querySelector('#fileinput').addEventListener('change', function() { 
          if (this.files && this.files[0]) {
                    var img = document.querySelector('#picture');       
                    img.src = URL.createObjectURL(this.files[0]);

                 
          }
          });
          
      });

});   
</script>
<?= $this->include('frontend/temp-two/include/footer'); ?>