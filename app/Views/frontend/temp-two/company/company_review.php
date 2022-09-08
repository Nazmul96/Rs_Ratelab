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
                                <div class="page-title wow fadeInDown" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                    <h1><?php echo $single_copany->company_name;?></h1>
                                    <p><i class="fal fa-external-link"></i> https://www.clementsfuel.com/</p>
                                    <p><i class="fal fa-map-marker-alt"></i><?php echo $single_copany->company_address;?></p>
                                </div>
                                <div class="page-breadcrumb wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                                    <ul class="breadcrumb">
                                        <li><a href="index.html">Home</a></li>
                                        <li class="active"><?php echo $single_copany->company_name;?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.section-internal -->
            </div> <!-- /.container -->
        </section> <!-- /.breadcrumb-area -->
        <!--====== End Breadcrumb Area ======-->
        
        <!--====== End Our Services Area ======-->
        <section class="companies_list pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                       <div class="sticky-top">
                           <div class="card p-3"> 
                                <img src="<?php echo base_url('/frontend/images/company/'.$single_copany->image) ?>" class="img-fluid">
                                <div class="text-center">
                                    <h1 class="rating-num">
                                        4.0</h1>
                                    <div class="rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                    </div>
                                    <div>
                                        <span class="glyphicon glyphicon-user"></span>1,050,008 total
                                    </div>
                                </div>
                   
                                <div class="row rating-desc">
                                    <div class="col-xs-3 col-md-3 text-right">
                                        <i class="fas fa-star"></i>5
                                    </div>
                                    <div class="col-xs-8 col-md-9">
                                       <div class="progress">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!-- end 5 -->
                                    <div class="col-xs-3 col-md-3 text-right">
                                        <i class="fas fa-star"></i>4
                                    </div>
                                    <div class="col-xs-8 col-md-9">
                                        <div class="progress">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!-- end 4 -->
                                    <div class="col-xs-3 col-md-3 text-right">
                                        <i class="fas fa-star"></i>3
                                    </div>
                                    <div class="col-xs-8 col-md-9">
                                        <div class="progress">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!-- end 3 -->
                                    <div class="col-xs-3 col-md-3 text-right">
                                        <i class="fas fa-star"></i>2
                                    </div>
                                    <div class="col-xs-8 col-md-9">
                                        <div class="progress">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!-- end 2 -->
                                    <div class="col-xs-3 col-md-3 text-right">
                                        <i class="fas fa-star"></i>1
                                    </div>
                                    <div class="col-xs-8 col-md-9">
                                        <div class="progress">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!-- end 1 -->
                                </div>
                                <!-- end row --> 
                    
                           </div>
                           <div class="card mt-2">
                               <div class="card-header">About <?php echo $single_copany->company_name;?></div>
                               <div class="card-body">
                                   <p> <?php echo $single_copany->description;?> </p>
                               </div>
                           </div>
                            <div class="card mt-2">
                               <div class="card-header">Tags</div>
                               <div class="card-body">
                               <?php echo $single_copany->tags;?>
                               </div>
                           </div>
                           <div class="card mt-2">
                               <div class="card-header">Contact Info</div>
                               <div class="card-body">
                                    <p><i class="fal fa-external-link"></i> <?php echo $single_copany->url;?></p>
                                    <p><i class="fal fa-map-marker-alt"></i> <?php echo $single_copany->company_address;?> </p>
                                    <p><i class="fal fa-envelope"></i> <?php echo $single_copany->email_address;?></p>
                               </div>
                           </div>
                       </div>
                    </div>
                    
                    
            <div class="col-md-8">
       

             <?php if((empty($user_reviews[0])) && (!empty($session_data))){?>   
                <div class="review_submit">
                  
                     <div class="card  bg-white">

                            <div class="card-body">
                             <form action="<?php echo base_url();?>/user/company/review/<?php echo $single_copany->id?>" class="signin-form" method="post" enctype="multipart/form-data">

                              <input type="hidden" name="user_id" value="<?php echo $single_copany->user_id;?>">  

                               <div class="row">
                                  <div class="col-md-6">
                                    <img src="https://script.viserlab.com/ratelab/assets/images/avatar.jpg" height="50px" width="50" class="rounded-circle"> <b><?php echo $name;?></b>
                                  </div>

                                   <div class="col-md-6 give-rating" align="right">
                                             <span>
                                                <input id='str1' name='rating' type='radio'
                                                    value='1' class="hidden">
                                                <label for='str1'><i class="mdi mdi-star mdi-24px" id="star1"></i></label>
                                            </span>
                                             <span>
                                                <input id='str2' name='rating' type='radio'
                                                    value='2' class="hidden">
                                                <label for='str2'><i class="mdi mdi-star mdi-24px" id="star2"></i></label>
                                            </span>
                                            <span>
                                                <input id='str3' name='rating' type='radio'
                                                    value='3' class="hidden">
                                                <label for='str3'><i class="mdi mdi-star mdi-24px" id="star3"></i></label>
                                            </span>
                                            <span>
                                                <input id='str4' name='rating' type='radio'
                                                    value='4' class="hidden">
                                                <label for='str4'><i class="mdi mdi-star mdi-24px" id="star4"></i></label>
                                            </span>
                                            <span>
                                                <input id='str5' name='rating' type='radio'
                                                    value='5' class="hidden">
                                                <label for='str5'><i class="mdi mdi-star mdi-24px" id="star5"></i></label>
                                            </span>
                                        <small style="color:red;" class="text-danger">
                                          <?php if (isset($validation)) {
                                                      
                                                    echo $validation->getError('rating');
                                                    } ?>
                                          </small>      
                                   </div>
                                 
                               </div><br>
                               <label> Write review</label>
                               <textarea class="form-control" row="5" name="reveiw">
                                
                               </textarea>
                                <small style="color:red;" class="text-danger">
                                    <?php if (isset($validation)) {
                                                
                                              echo $validation->getError('reveiw');
                                              } ?>
                                    </small> 

                               <br><button class="btn btn-warning" type="submit" style="float:right;">
                                 Submit
                               </button>

                             </form>

                             </div>  
                    </div>        
                </div>
           <?php } ?> 

            
                <div class="show_allreview">
                   <?php foreach($all_review as $all_reviews){

               $name=$all_reviews->first_name.' '.$all_reviews->last_name;

            ?> 
 
              <div class="card  bg-white">

                            <div class="card-body">
                                <div class="row">
                                  <div class="col-md-3">
                                    <img src="https://script.viserlab.com/ratelab/assets/images/avatar.jpg" height="50px" width="50" class="rounded-circle">
                                  </div>

                                   <div class="col-md-9" style="background: #f2f2f5">
                                       <div class="row">
                                            <div class="col-md-3">
                                                <h5><?php echo $name;?></h5>
                                                <p><?php echo $all_reviews->user_address;?></p>
                                            </div>

                                            <div class="col-md-9 text-warning" align="right">
                                               <?php 
                                               if($all_reviews->company_rating == 1)
                                               {
                                                 echo '<i class="mdi mdi-star mdi-24px"></i>';
                                               }
                                               else if($all_reviews->company_rating == 2)
                                               {
                                                   echo '<i class="mdi mdi-star mdi-24px"></i>
                                                     <i class="mdi mdi-star mdi-24px"></i> 
                                                   ';
                                               }
                                               else if($all_reviews->company_rating ==3)
                                               {


                                                    echo '<i class="mdi mdi-star mdi-24px"></i>
                                                     <i class="mdi mdi-star mdi-24px"></i>
                                                     <i class="mdi mdi-star mdi-24px"></i>
                                                   ';
                                               }
                                               else if($all_reviews->company_rating == 4)
                                               {

                                                 echo '<i class="mdi mdi-star mdi-24px"></i>
                                                     <i class="mdi mdi-star mdi-24px"></i>
                                                     <i class="mdi mdi-star mdi-24px"></i>
                                                     <i class="mdi mdi-star mdi-24px"></i> 
                                                   ';
                                               }
                                               else if ($all_reviews->company_rating == 5)
                                               {

                                                 echo '<i class="mdi mdi-star mdi-24px"></i>
                                                     <i class="mdi mdi-star mdi-24px"></i>
                                                     <i class="mdi mdi-star mdi-24px"></i>
                                                     <i class="mdi mdi-star mdi-24px"></i>
                                                     <i class="mdi mdi-star mdi-24px"></i>  
                                                   ';   
                                               }
                                               ?>
                                           </div>
                                         
                                       </div>
                                    <hr>
                                    <p><?php echo $all_reviews->company_review;?></p>
                                  <?php if(isset($user_reviews[0]->user_id)&&($user_reviews[0]->user_id == $all_reviews->user_id)){?> 
                                    <hr>
                                    <div class="row">
                                      <div class="col-md-6">
                                       <a class="p-2 reviews_edit" data-id="<?php echo $all_reviews->id ?>"><i class="mdi mdi-square-edit-outline  mdi-18px"></i> Edits Review</a>
                                      </div>
                                        <div class="col-md-6" align="right">
                                        <a data-bs-target="#delete_modal" data-bs-toggle="modal" class="p-2" onclick="delete_review(<?= $all_reviews->id; ?>)"><i class="mdi mdi-delete-outline mdi-18px"></i> 
                                         Delete</a>

                                      </div>
                                    </div>
                                  <?php } ?>  
                                  </div>
                                </div>  

                              </div>

                      </div>
                 <?php } ?>  

                </div>
            

            </div>
                </div>
            </div>
        </section>
<!--====== End Subscribe Newsletter Area ======-->
 <?= $this->include('frontend/temp-two/include/footer'); ?>