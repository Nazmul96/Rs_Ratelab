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
                            <h1>Support Ticket</h1>
                        </div>
                        <div class="page-breadcrumb wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="2500ms">
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">View Support Ticket</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.section-internal -->
    </div> <!-- /.container -->
</section> <!-- /.breadcrumb-area -->



<!-- services start -->
<section class="contact-area pt-130 pb-130t bg-light">
    <div class="container">
   
        <div class="row">
            <?php 
                  $this->session = \Config\Services::session();
                  $session_data= $this->session->get('login_info');
                   
                //   echo '<pre>';
                //   print_r($ticket);
                //   die();
            ?>
            <div class="col-md-12">
                     <div class="services-box p-4 bg-white mt-4">
                    <div class="card-header bg-dark">
                        <h5 class="text-white">
                            <?php 
                            if($ticket[0]->status == 0)
                            {
                                echo '<span class="badge bg-success">Open</span>'.' ';
                            }
                            else if($ticket[0]->status == 2)
                            {
                                echo '<span class="badge bg-warning">Replied</span>'.' ';
                            }
                            
                            echo '[Ticket#'.$ticket[0]->ticket_id.']'.' '.$ticket[0]->subject;
                            ?>


                            <a href="<?= base_url() ?>/support/ticket/close/<?php echo $ticket[0]->ticket_id;?>" class="btn btn-danger waves-effect waves-light mb-2" style="float:right;"><i class="fa fa-times"></i></a>
                        
                        </h5>
                        
                    </div><br>
                    <form action="<?php echo base_url();?>/support/ticket/view/<?php echo $ticket[0]->ticket_id;?>" class="signin-form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="ticket_reply" id="" value="reply">
                    <div class="overflow-hidden">

                          <div class="form-group col-md-12">
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" placeholder="Your Reply"></textarea>
                              <small style="color:red;" class="text-danger">
                                <?php if (isset($validation)) {
                                            
                                        echo $validation->getError('message');
                                        } ?>
                                </small> 
                         </div><br>

                         <label for="" class="form-label">Attachments </label><br>
                         <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected col-md-8">
                             <input type="file" class="form-control" name="attachments[]"><span class="input-group-btn input-group-append"><button class="btn btn-warning bootstrap-touchspin-up addFile" type="button">+</button></span>
                        </div>
                        <small style="color:red;" class="text-danger">
                        <?php if (isset($validation)) {
                                    
                                echo $validation->getError('attachments');
                                } ?>
                        </small> 
                        <div class="mt-3" id="appendContainer"></div>
                        <span class="ticket-attachments-message text-muted">
                        Allowed File Extensions: .jpg,
                        .jpeg, .png, .pdf,
                        .doc, .docx                                                    </span>
                         <br><br>
                          <div class="form-group col-md-12">
                                <button class="btn btn-warning waves-effect waves-light w-100" type="submit">Reply</button>
                          </div>
                    </div>

                     </form>
                
                    </div>
            </div>
        </div>
        <div class="col-md-12">
          <?php foreach($ticket as $tickets){?>  
           <div class="services-box p-4 mt-4  mb-4" style="border:2px solid;margin-bottom:4px;">
                        <div class="row" style="border-style: 1px; border-color: #0d6efd!important;">
                            <div class="col-md-4">
                                <?php 
                                    $session_data= $this->session->get('login_info');
                                ?>
                                <h4><?php echo $tickets->full_name;?></h4>
                            </div>
                            <div class="col-md-8">
                               <p>Posted on <?php echo $tickets->created_at;?></p>
                               <p><?php echo $tickets->message?></p>
                               <p>

                                  <?php 
                                  if($tickets->attachments){
                                  $abc=explode(",",$tickets->attachments);
                                  foreach($abc as $key=>$attachment){?>
                                    <a class="text-warning" href='<?php echo base_url('/frontend/images/ticket/'.$attachment)?>'> <i class="mdi mdi-file"></i> Download CV <?php echo $key+1;?></a>
                                 <?php  }  }?> 
                                </p>
                            </div>
                        </div>        
           </div>
           <?php } ?>
        </div>                        

      
    </div>
    <!-- end container-fluid -->
</section>
<!-- services end -->

<script>
  $( document ).ready(function() {
            $('.addFile').on('click', function(e) {
                e.preventDefault();
                $("#appendContainer").append(`
                <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected col-md-8">
                <input type="file" class="form-control" name="attachments[]"><span class="input-group-btn input-group-prepend"><button class="btn btn-danger bootstrap-touchspin-down remove-btn" type="button">-</button></span></div><br>`);
            });
            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.input-group').remove();
            });
 });        
</script>
<?= $this->include('frontend/temp-two/include/footer'); ?>

