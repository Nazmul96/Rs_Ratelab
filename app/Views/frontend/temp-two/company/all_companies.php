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
                                    <h1>All Companies</h1>
                                </div>
                                <div class="page-breadcrumb wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                                    <ul class="breadcrumb">
                                        <li><a href="index.html">Home</a></li>
                                        <li class="active">All Companies</li>
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
                        <div class="posts-sidebar">
                            <div class="widget search-widget wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1200ms">
                                <h4>Search Here</h4>
                                <form class="search-form-inline" action="<?php echo base_url(); ?>/user/company/search" method="post" id="search_company_submit">
                                    <div class="form-group">
                                        <input type="search" class="form-control" placeholder="Search" id="top-search" name="search_company">
                                        <button class="search-btn" type="button" id="search_company"><i class="far fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="widget category-widget wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1200ms">
                                <h4 class="sidebar-widget-title">By Categories</h4>
                                <ul class="category-link">
                                    <li><a href="">All (<?php echo count($all_copany); ?>)</a></li>
                                    <?php foreach ($all_category as $key => $all_cetegories) { ?>
                                      <li><a href="#" class="category_company_search" data-id="<?php echo $all_cetegories->id; ?>"><?php echo $all_cetegories->category_name; ?> (<?php echo $number_of_categories[$key]; ?>)</a></li>
                                    <?php } ?>  
                                </ul>
                            </div>
                            <div class="widget category-widget wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1200ms">
                                <h4 class="sidebar-widget-title">By Rating</h4>
                                <div class="action-widget__body" style="">
                                   <div class="form-check custom--radio d-flex justify-content-between align-items-center">
                                      <div class="left">
                 
                                         <input class="form-check-input text-warning take_rating" checked type="radio" name="all"  value="all" id="ratings-0">
                                         <label class="form-check-label fw-bold" for="ratings-0">
                                         All                                        </label>
                                      </div>
                                   </div>
                                   <div class="form-check custom--radio d-flex justify-content-between align-items-center">
                                      <div class="left">
                                        <input class="form-check-input text-warning take_rating" type="radio" name="all" value="5" id="ratings-5"> 
                                         <label class="form-check-label" for="ratings-5">
                                         5 <span class="text--base">
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         </span>
                                         </label>
                                      </div>
                                   </div>
                                   <div class="form-check custom--radio d-flex justify-content-between align-items-center">
                                      <div class="left">
                                        <input class="form-check-input text-warning take_rating" type="radio" name="all"  value="4">
                                         <label class="form-check-label" for="ratings-4">
                                         4 <span class="text--base">
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         </span>
                                         </label>
                                      </div>
                                   </div>
                                   <div class="form-check custom--radio d-flex justify-content-between align-items-center">
                                      <div class="left">
                                      <input class="form-check-input text-warning take_rating" type="radio" name="all" value="3">
                                         <label class="form-check-label" for="ratings-3">
                                         3 <span class="text--base">
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         </span>
                                         </label>
                                      </div>
                                   </div>
                                   <div class="form-check custom--radio d-flex justify-content-between align-items-center">
                                      <div class="left">
                                      <input class="form-check-input text-warning take_rating" type="radio" name="all" value="2">
                                         <label class="form-check-label" for="ratings-2">
                                         2 <span class="text--base">
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         </span>
                                         </label>
                                      </div>
                                   </div>
                                   <div class="form-check custom--radio d-flex justify-content-between align-items-center">
                                      <div class="left">
                                      <input class="form-check-input text-warning take_rating" type="radio" name="all" value="1">
                                         <label class="form-check-label" for="ratings-1">
                                         1 <span class="text--base">
                                         <i class="fa fa-star"></i>
                                         </span>
                                         </label>
                                      </div>
                                   </div>
                                </div>
                            </div>
                            <div class="widget category-widget wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1200ms">
                                <h4 class="sidebar-widget-title">By Review Time</h4>
                                <div class="action-widget__body">
                                   <div class="form-check custom--radio d-flex justify-content-between align-items-center">
                                      <div class="left">
                                         <input class="form-check-input review_time" type="radio" name="review_time" value="all" id="reviews-0" checked="">
                                         <label class="form-check-label fw-bold" for="reviews-0">All</label>
                                      </div>
                                   </div>
                                   <div class="form-check custom--radio d-flex justify-content-between align-items-center">
                                      <div class="left">
                                         <input class="form-check-input review_time" type="radio" name="review_time" value="last_1" id="reviews-1">
                                         <label class="form-check-label" for="reviews-1">
                                         Last month  </label>
                                      </div>
                                   </div>
                                   <div class="form-check custom--radio d-flex justify-content-between align-items-center">
                                      <div class="left">
                                         <input class="form-check-input review_time" type="radio" name="review_time" value="last_2" id="radio-2">
                                         <label class="form-check-label" for="radio-2">
                                         Last 2 months </label>
                                      </div>
                                   </div>
                                   <div class="form-check custom--radio d-flex justify-content-between align-items-center">
                                      <div class="left">
                                         <input class="form-check-input review_time" type="radio" name="review_time" value="last_3" id="radio-3">
                                         <label class="form-check-label" for="radio-3">
                                         Last 3 months </label>
                                      </div>
                                   </div>
                                   <div class="form-check custom--radio d-flex justify-content-between align-items-center">
                                      <div class="left">
                                         <input class="form-check-input review_time" type="radio" name="review_time" value="last_6" id="radio-4">
                                         <label class="form-check-label" for="radio-4">
                                         Last 6 months </label>
                                      </div>
                                   </div>
                                   <div class="form-check custom--radio d-flex justify-content-between align-items-center">
                                      <div class="left">
                                         <input class="form-check-input review_time" type="radio" name="review_time" value="last_year" id="radio-5">
                                         <label class="form-check-label" for="radio-5">
                                         Last year </label>
                                      </div>
                                   </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h5><?php echo count($all_copany);?> items found</h5>
                        <hr/>

                        <div class="row show_all_company" id="show_no_data">
                        <?php 
                        $i = 1;
                        foreach ($all_copany as $all_copanies) { ?>
                            <div class="col-md-6 mb-4">
                                <div class="card comment_list_item">
                                    <div class="card-body">
                                        <div class="top_comment"> 
                                               <a href="<?php echo base_url(); ?>/user/company/review/<?php echo $all_copanies->id ?>"> <img src="<?php echo base_url('/frontend/images/company/'.$all_copanies->image) ?>" alt="company logo"></a> 
                                            <div class="mt-2">
                                                <div class="d-flex flex-wrap justify-content-between">
                                                    <div>
                                                        <h6>
                                                            <a href="<?php echo base_url(); ?>/user/company/review/<?php echo $all_copanies->id ?>"><?php echo $all_copanies->company_name;?></a>
                                                        </h6>
                                                        <p class="cate-name fs-12"><i class="far fa-file-certificate"></i> <?php echo $all_copanies->category_name; ?></p>
                                                    </div>
                                                    <div class="text-right text--base">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>  
                                                        <p class="fs-12 text-muted"> &nbsp; 5 (9 ratings)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-muted fs-12"><i class="far fa-map-marker"></i>  <?php echo $all_copanies->company_address;?></span>
                                            <hr/>
                                            <p class="m-0"><small>Registered On : <?php echo $all_copanies->created_at; ?></small></p>
                                            <div class="fs-12"><i class="far fa-tags"></i>  <?php echo $all_copanies->tags; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                          <?php if($i % 2 == 0) { 
                              $x = 1;
                              for($j = 0; $j < count($ads); $j++) { 
                                if($j == $x) { ?>
                                <div class="__add text-center mb-3" data-id="">
                                  
                                  <?php impression($ads[$j]->id); ?>

                                  <a href="<?= $ads[$j]->redirect.'/'.$ads[$j]->id; ?>" target="_blank">
                                    <img src="<?= base_url() ?>/admin/uploads/<?= $ads[$j]->image; ?>" alt="Ads">
                                  </a>
                                  
                                </div>
                              <?php }
                                }
                              $x++;
                            } ?>


                          <?php $i++; } ?>           
                        </div>
                        <nav class="posts-navigation mt-2" aria-label="posts">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <i class="fas fa-angle-left"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
<script>
    $(document).on("click", "#search_company", function(e) {
        //alert('hii');
        e.preventDefault();

        var url = $('#search_company_submit').attr('action');

        var request = $('#search_company_submit').serialize();

        $.ajax({
          url: url,
          type: 'post',
          async: false,
          data: request,
          dataType: 'JSON',
          success: function(data) {


            //$('.hide_all_company').hide();

            var i = 0;
            var html = '';

            for (i = 0; i < data.length; i++) {

              var img_url = '<?php echo base_url() ?>/frontend/images/company/' + data[i].image +'';


              html +='<div class="col-md-6 mb-4"><div class="card comment_list_item"><div class="card-body"><div class="top_comment"><a href="<?php echo base_url(); ?>/user/company/review/' + data[i].id + '"> <img src="' + img_url + '" alt="company logo"></a> <div class="mt-2"><div class="d-flex flex-wrap justify-content-between"><div><h6><a href="<?php echo base_url(); ?>/user/company/review/' + data[i].id + '">' + data[i].company_name + '</a></h6><p class="cate-name fs-12"><i class="far fa-file-certificate"></i>' + data[i].category_name + '</p></div><div class="text-right text--base"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><p class="fs-12 text-muted"> &nbsp; 5 (9 ratings)</p></div></div></div><span class="text-muted fs-12"><i class="far fa-map-marker"></i>' + data[i].company_address + '</span><hr/><p class="m-0"><small>Registered On : ' + data[i].created_at + '</small></p><div class="fs-12"><i class="far fa-tags"></i>'+data[i].tags+'</div></div></div></div></div>';
            }

            $('.show_all_company').html(html);

          }

        });
        });


      $(document).on("click", ".category_company_search", function(e) {
        e.preventDefault();
        var cat_id = $(this).attr('data-id');
        var url = '<?php echo base_url(); ?>/user/category_company_search';

        $.ajax({
          url: url,
          type: 'get',
          async: false,
          data: {
            cat_id: cat_id
          },
          dataType: 'JSON',
          success: function(data) {

            var i = 0;
            var html = '';

            for (i = 0; i < data.length; i++) {
              //console.log(data[i].category_name);
              var img_url = '<?php echo base_url() ?>/frontend/images/company/' + data[i].image + '';
              html +='<div class="col-md-6 mb-4"><div class="card comment_list_item"><div class="card-body"><div class="top_comment"><a href="<?php echo base_url(); ?>/user/company/review/' + data[i].id + '"> <img src="' + img_url + '" alt="company logo"></a> <div class="mt-2"><div class="d-flex flex-wrap justify-content-between"><div><h6><a href="<?php echo base_url(); ?>/user/company/review/' + data[i].id + '">' + data[i].company_name + '</a></h6><p class="cate-name fs-12"><i class="far fa-file-certificate"></i>' + data[i].category_name + '</p></div><div class="text-right text--base"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><p class="fs-12 text-muted"> &nbsp; 5 (9 ratings)</p></div></div></div><span class="text-muted fs-12"><i class="far fa-map-marker"></i>' + data[i].company_address + '</span><hr/><p class="m-0"><small>Registered On : ' + data[i].created_at + '</small></p><div class="fs-12"><i class="far fa-tags"></i>'+data[i].tags+'</div></div></div></div></div>';
            }

            $('.show_all_company').html(html);


            if (data.length == 0) {
          
              $('#show_no_data').empty();
              $('#show_no_data').append('<h4 clas="mt-3" align="center">No Data found</h4>');

            }


          }

        });
        });

        $(document).on("click", ".take_rating", function() {
        //e.preventDefault();
        var num_review = $(this).val();

        var url = '<?php echo base_url(); ?>/user/review_search';

        $.ajax({
          url: url,
          type: 'get',
          async: false,
          data: {
            review_id: num_review
          },
          dataType: 'JSON',
          success: function(data) {
            //console.log(data.length); 
            var i = 0;
            var html = '';

            for (i = 0; i < data.length; i++) {
              var img_url = '<?php echo base_url() ?>/frontend/images/company/' + data[i].image + '';

              html +='<div class="col-md-6 mb-4"><div class="card comment_list_item"><div class="card-body"><div class="top_comment"><a href="<?php echo base_url(); ?>/user/company/review/' + data[i].id + '"> <img src="' + img_url + '" alt="company logo"></a> <div class="mt-2"><div class="d-flex flex-wrap justify-content-between"><div><h6><a href="<?php echo base_url(); ?>/user/company/review/' + data[i].id + '">' + data[i].company_name + '</a></h6><p class="cate-name fs-12"><i class="far fa-file-certificate"></i>' + data[i].category_name + '</p></div><div class="text-right text--base"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><p class="fs-12 text-muted"> &nbsp; 5 (9 ratings)</p></div></div></div><span class="text-muted fs-12"><i class="far fa-map-marker"></i>' + data[i].company_address + '</span><hr/><p class="m-0"><small>Registered On : ' + data[i].created_at + '</small></p><div class="fs-12"><i class="far fa-tags"></i>'+data[i].tags+'</div></div></div></div></div>';

            }
            $('.show_all_company').html(html);

            if (data.length == 0) {
              $('#show_no_data').empty();
              $('#show_no_data').append('<h4 clas="mt-3" align="center">No Data found</h4>');

            }

          }

        });
        });

     $(document).on("click", ".review_time", function() {

          var review_month = $(this).val();

          var url = '<?php echo base_url(); ?>/user/review_by_time';

          $.ajax({
            url: url,
            type: 'get',
            async: false,
            data: {
              review_month: review_month
            },
            dataType: 'JSON',
            success: function(data) {

              var i = 0;
              var html = '';

              for (i = 0; i < data.length; i++) {
                var img_url = '<?php echo base_url() ?>/frontend/images/company/' + data[i].image + '';
               html +='<div class="col-md-6 mb-4"><div class="card comment_list_item"><div class="card-body"><div class="top_comment"><a href="<?php echo base_url(); ?>/user/company/review/' + data[i].id + '"> <img src="' + img_url + '" alt="company logo"></a> <div class="mt-2"><div class="d-flex flex-wrap justify-content-between"><div><h6><a href="<?php echo base_url(); ?>/user/company/review/' + data[i].id + '">' + data[i].company_name + '</a></h6><p class="cate-name fs-12"><i class="far fa-file-certificate"></i>' + data[i].category_name + '</p></div><div class="text-right text--base"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><p class="fs-12 text-muted"> &nbsp; 5 (9 ratings)</p></div></div></div><span class="text-muted fs-12"><i class="far fa-map-marker"></i>' + data[i].company_address + '</span><hr/><p class="m-0"><small>Registered On : ' + data[i].created_at + '</small></p><div class="fs-12"><i class="far fa-tags"></i>'+data[i].tags+'</div></div></div></div></div>';

              }
              $('.show_all_company').html(html);

              if (data.length == 0) {
                $('#show_no_data').empty();
                $('#show_no_data').append('<h4 clas="mt-3" align="center">No Data found</h4>');

              }
            }
          });

          });

</script>   
<!--====== End Subscribe Newsletter Area ======-->
 <?= $this->include('frontend/temp-two/include/footer'); ?>