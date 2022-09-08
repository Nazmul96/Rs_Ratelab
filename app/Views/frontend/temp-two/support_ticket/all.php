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
                            <h1>My Support Tickets</h1>
                        </div>
                        <div class="page-breadcrumb wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="2500ms">
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">My Support Tickets</li>
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
              <th scope="col">SUBJECT</th>
              <th scope="col">STATUS</th>
              <th scope="col">PRIORITY</th>
              <th scope="col">LAST REPLY</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($all_ticket as $all_tickets){
                                    
            $date=$all_tickets->created_at;

            $date_string=strtotime($date);
            
            $current_time=time();

            $new_time=$current_time - $date_string;


            $min=$new_time/60;
            $new_min=number_format((float)$min, 0, '.', '');
            $days=$new_time/86400;
            $new_days=number_format((float)$days, 0, '.', '');
            $hour=$new_time/3600;
            $new_hour=number_format((float)$hour, 0, '.', '');

            // $time = Time::parse($all_tickets->created_at, 'America/Chicago');
            // echo $time->toLocalizedString('MMM d, yyyy')
            ?>   
            <tr> 
              <td> <?php echo '[Ticket#'.$all_tickets->ticket_id.']'.' '.$all_tickets->subject;?></td>
              <td>
                  <?php 
                    if($all_tickets->status == 0){    
                        echo '<span class="badge bg-success">Open</span>';
                    }
                    else if($all_tickets->status == 1)
                    {
                        echo '<span class="badge bg-dark text-white">closed</span>'; 
                    }
                    else if($all_tickets->status == 2)
                    {
                        echo '<span class="badge bg-warning text-white">Customer Reply</span>'; 
                    }
                    ?>
              </td> 
              <td>
                  <?php 
                    if($all_tickets->priority == 'high')
                    {
                        echo ' <span class="badge bg-info">High</span>';
                    }
                    else if($all_tickets->priority == 'medium')
                    {
                        echo ' <span class="badge bg-secondary">Medium</span>';
                    }
                    else
                    {
                        echo ' <span class="badge bg-danger">Low</span>'; 
                    }
                ?>
             </td>
              <td>
              <?php 
                if($new_days > 0)
                {
                    if($new_days == 1){
                        echo '<br>'.$new_days.' '.'day ago';
                    }
                    else
                    {
                            echo '<br>'.$new_days.' '.'days ago';
                    }
                }
                else if($min<60)
                {
                    if($min==1){
                        echo '<br>'.$new_min.' '.'minute ago';
                    }
                    else
                    {
                        echo '<br>'.$new_min.' '.'minutes ago';
                    }
                    
                } 
                else if($min>60)
                {
                    if($new_hour == 1){
                        echo '<br>'.$new_hour.' '.'hour ago';
                    }
                    else
                    {
                        echo '<br>'.$new_hour.' '.'hours ago';
                    }
                }
            
                ?>
              </td>
              <td>
                  <a href="<?= base_url() ?>/support/ticket/view/<?php echo $all_tickets->ticket_id;?>" class="filled-btn bg-mandy button-radius"><i class="fal fa-edit"></i></a>
              </td>
            </tr> 
          <?php } ?>
           
             
          </tbody>
        </table>
    </div>
</section>

<?= $this->include('frontend/temp-two/include/footer'); ?>