<?= $this->extend('admin/master'); ?>
<?= $this->section('content'); ?>

<!-- Plugins css -->
<link href="<?= base_url() ?>/admin/assets/select2/select2.min.css" rel="stylesheet" type="text/css">


<style>
    .image-upload .thumb .profilePicUpload {
        opacity: 0;
    }

    .image-upload .thumb .profilePicPreview {
        width: 50%;
        height: 310px;
        display: block;
        border: 3px solid #f1f1f1;
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        background-size: cover !important;
        background-position: top;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
    }

    .image-upload .thumb .profilePicPreview .remove-image {
        position: absolute;
        top: -9px;
        right: -9px;
        text-align: center;
        width: 55px;
        height: 55px;
        font-size: 24px;
        border-radius: 50%;
        background-color: #df1c1c;
        color: #fff;
        display: none;
    }

    .image-upload .thumb .profilePicPreview.has-image .remove-image {
        display: block;
    }

    .image-upload .thumb .select-logo,
    .select_favicon {
        display: block;
        width: 50%;
        background-color: #624bdf;
        padding: 12px;
        border-radius: 5px;
        color: #fff;
        text-align: center;
        font-weight: 200;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #7367f0;
        border-color: #7367f0;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__display, .select2-container--default .select2-selection--multiple .select2-selection__choice__remove span {
        color: #ffffff;
        font-size: 12px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
        background-color: #5e50ee;
    }


</style>

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <h4 class="d-flex">Theme two additional image</h4>

            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('success') ?>
                </div>

            <?php endif;?>


            <div class="col-lg-12 col-md-12 mb-30">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url() ?>/admin/frontend/theme_two_image" method="POST" enctype="multipart/form-data">
                           
                            <div class="row">

                            
                                    <?php $i=1;foreach($theme_two_additional_image as $key=>$additional_image){ ;?>
                                     <input type="hidden" name="old_image<?php echo $i;?>" value="<?php echo $additional_image['settings_value'];?>">   
                                    <div class="col-xl-4">
                                    <div class="form-group">
                                        <div class="image-upload">
                                            <div class="thumb thumb_new<?php echo $i;?>">
                                                <div class="avatar-preview">
                                                    <div class="profilePicPreview profilePicPreview_new<?php echo $i;?>" style="background-image: url(<?= base_url() ?>/admin/uploads/theme_two_image/<?php echo $additional_image['settings_value'];?>)">
                                                        <button type="button" class="remove-image remove-image_new<?php echo $i;?>"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="avatar-edit">
                                                    <input type="file" class="profilePicUpload profilePicUpload_new<?php echo $i;?>" name="image_input<?php echo $i;?>" id="profilePicUpload<?php echo $i;?>" accept=".png, .jpg, .jpeg" require="">
                                                    <label for="profilePicUpload<?php echo $i;?>" class="select-logo">Upload Image</label>
                                                    <small class="mt-2 text-facebook">Supported files: <b>jpeg, jpg, png</b>. Image will be resized into  1920x840 px.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php $i++; } ?>    

                                <div class="form-group">
                                        <button type="submit" class="btn btn-primary w-100 mt-4">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div> <!-- container-fluid -->

    </div> <!-- content -->
</div>


<script>
    $(document).ready(function() {
   
        $(document).on('change', '.profilePicUpload_new1', function(e) {
           
            readUrl1(this);
        });
        $(document).on('change', '.profilePicUpload_new2', function(e) {
            
            readUrl2(this);
        });

        $(document).on('change', '.profilePicUpload_new3', function(e) {
           
           readUrl3(this);
       });
       $(document).on('change', '.profilePicUpload_new4', function(e) {
           
           readUrl4(this);
       });
       $(document).on('change', '.profilePicUpload_new5', function(e) {
           readUrl5(this);
       });
    //    var i;
    //    for(i=1; i<=5; i++)
    //    {
    //      $('.remove-image_new1').on('click', function(e) {
            
    //         $(this).parents('.profilePicPreview_new').css('background-image', 'none');
    //         $(this).parents('.profilePicPreview_new').removeClass('has-image');
    //         $(this).parents('.thumb_new').find('input[type=file]').val('');
    //      });
    //    }
      

    });

  
    function readUrl1(input) {
      
        if (input.files && input.files[0]) {
            // console.log('hello');
            var reader = new FileReader();
            reader.onload = function(e) {

                var preview = $(input).parents('.thumb_new1').find('.profilePicPreview_new1');
                var check = $(preview).css('background-image', 'url(' + e.target.result + ')');

                //$(preview).addClass('has-image');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readUrl2(input) {
      if (input.files && input.files[0]) {
          
          var reader = new FileReader();
          reader.onload = function(e) {

              var preview = $(input).parents('.thumb_new2').find('.profilePicPreview_new2');
              var check = $(preview).css('background-image', 'url(' + e.target.result + ')');

              $(preview).addClass('has-image2');
          }
          reader.readAsDataURL(input.files[0]);
      }
  }

  function readUrl3(input) {
      
      if (input.files && input.files[0]) {
          
          var reader = new FileReader();
          reader.onload = function(e) {

              var preview = $(input).parents('.thumb_new3').find('.profilePicPreview_new3');
              var check = $(preview).css('background-image', 'url(' + e.target.result + ')');

              $(preview).addClass('has-image3');
          }
          reader.readAsDataURL(input.files[0]);
      }
  }

  function readUrl4(input) {

      if (input.files && input.files[0]) {
          
          var reader = new FileReader();
          reader.onload = function(e) {

              var preview = $(input).parents('.thumb_new4').find('.profilePicPreview_new4');
              var check = $(preview).css('background-image', 'url(' + e.target.result + ')');

              $(preview).addClass('has-image4');
          }
          reader.readAsDataURL(input.files[0]);
      }
  }

  function readUrl5(input) {
       
      if (input.files && input.files[0]) {
          
          var reader = new FileReader();
          reader.onload = function(e) {

              var preview = $(input).parents('.thumb_new5').find('.profilePicPreview_new5');
              var check = $(preview).css('background-image', 'url(' + e.target.result + ')');

              $(preview).addClass('has-image5');
          }
          reader.readAsDataURL(input.files[0]);
      }
  }


</script>


<?= $this->endSection() ?>