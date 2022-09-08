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
                            <h1>Support Tickets</h1>
                        </div>
                        <div class="page-breadcrumb wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="2500ms">
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Support Tickets</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.section-internal -->
    </div> <!-- /.container -->
</section> 
<!-- /.breadcrumb-area -->
<?php 
    $this->session = \Config\Services::session();
    $session_data= $this->session->get('login_info');
    
?>
<section class="pt-50 pb-40">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My Support Tickets</div>
                    <div class="card-body">
                    <form action="<?php echo base_url();?>/support/ticket/new" class="signin-form" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-4 col-md-6">
                                     <label>Full Name</label>
                                     <div class="input-group flex-nowrap">
                                      <span class="input-group-text"> <i class="fal fa-user"></i></span>
                                      <input type="text" class="form-control" name="full_name" value="<?php echo $session_data['name']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="mb-4 col-md-6">
                                     <label>Email Address</label>
                                     <div class="input-group flex-nowrap">
                                      <span class="input-group-text"> <i class="fal fa-envelope"></i> </span>
                                      <input type="email" class="form-control" name="email_address" value="<?php echo $session_data['email'];?>" readonly>
                                    </div>
                                </div>
                                <div class="mb-4 col-md-6">
                                     <label>Priority</label>
                                     <div class="input-group flex-nowrap">
                                      <span class="input-group-text"> <i class="fal fa-balance-scale-left"></i></span>
                                      <select name="priority" id="" class="form-control">
                                        <option value="">choose----</option>
                                        <option value="high">High</option>
                                        <option value="medium">Medium</option>
                                        <option value="low">Low</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="mb-4 col-md-6">
                                     <label>Subject</label>
                                     <div class="input-group flex-nowrap">
                                      <span class="input-group-text"> <i class="fal fa-notes-medical"></i> </span>
                                      <input type="text" name="subject" class="form-control" placeholder="write subject">
                                    </div>
                                    <small style="color:red;" class="text-danger">
                                      <?php if (isset($validation)) {
                                                  
                                                echo $validation->getError('subject');
                                                } ?>
                                    </small> 
                                </div>
                                <div class="mb-4 col-md-12">
                                     <label>Message</label>
                                     <div class="input-group flex-nowrap">
                                      <span class="input-group-text"> <i class="fal fa-comment-alt-dots"></i> </span>
                                       <textarea class="form-control" name="message" placeholder="write message"></textarea>
                                    </div>
                                  <small style="color:red;" class="text-danger">
                                    <?php if (isset($validation)) {
                                            
                                            echo $validation->getError('message');
                                            } ?>
                                    </small> 
                                </div>
                                 <div class="col-lg-12 mb-4">
                                    <label>Attachments</label>
                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected col-md-12">
                                            <input type="file" class="form-control" name="attachments[]"><span class="input-group-btn input-group-append"><button class="btn btn-warning bootstrap-touchspin-up addFile" type="button">+</button></span>
                                     </div>
                                     <small style="color:red;" class="text-danger">
                                    <?php if (isset($validation)) {
                                                
                                            echo $validation->getError('attachments');
                                            } ?>
                                    </small>

                                <div class="col-lg-12 mt-3" id="appendContainer"></div>
                                    <p><small>Allowed File Extensions: .jpg, .jpeg, .png, .pdf, .doc, .docx</small></p>
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
        </div>
    </div>
</section>
<script>

        $('.addFile').on('click', function(e) {
            e.preventDefault();
            $("#appendContainer").append(`
            <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected col-md-12">
            <input type="file" class="form-control" name="attachments[]"><span class="input-group-btn input-group-prepend"><button class="btn btn-danger bootstrap-touchspin-down remove-btn" type="button">-</button></span></div><br>`);
        });
        $(document).on('click', '.remove-btn', function() {
            $(this).closest('.input-group').remove();
        });

</script>
<?= $this->include('frontend/temp-two/include/footer'); ?>