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
                            <h1>My Companies</h1>
                        </div>
                        <div class="page-breadcrumb wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="2500ms">
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">My Companies</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.section-internal -->
    </div> <!-- /.container -->
</section> <!-- /.breadcrumb-area -->

<section class="pt-50 pb-40">
    <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">S.N.</th>
              <th scope="col">NAME</th>
              <th scope="col">ADDRESS</th>
              <th scope="col">RATING</th>
              <th scope="col">STATUS</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($all_company as $key=>$companies){?>
            <tr>
              <td scope="row"><?php echo $key+1;?></td>
              <td><a href="#"><?php echo $companies->company_name;?></a></td>
              <td><?php echo $companies->company_address;?></td>
              <td>
                <div>
                    <i class="fal fa-star"></i><i class="fal fa-star"></i><i class="fal fa-star"></i><i class="fal fa-star"></i><i class="fal fa-star"></i> <span class="text-dark"> (0)</span>
                </div>
              </td>
              <td>
                 
                  <?php if($companies->status == 0){?>           
                    <span class="badge rounded-pill bg-light text-warning">Pending</span>

                    <?php } else if($companies->status == 1){?>

                    <span class="badge rounded-pill bg-light text-success">Approve</span>

                    <?php } else {?>
                    <span class="badge rounded-pill bg-light text-danger">Rejected</span>
                    <?php } ?> 
             </td>
              <td>
                  <a href="<?= base_url() ?>/user/company/edit/<?php echo $companies->id;?>" class="filled-btn bg-mandy button-radius"><i class="fal fa-edit"></i></a>
              </td>
            </tr> 
         <?php } ?>     
          </tbody>
        </table>
    </div>
</section>

<?= $this->include('frontend/temp-two/include/footer'); ?>