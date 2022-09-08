<?= $this->extend('admin/master'); ?>
 <?= $this->section('content'); ?>

 <style>
    .image-upload .thumb .profilePicUpload {
        opacity: 0;
    }

    .image-upload .thumb .profilePicPreview {
        width: 100%;
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
        width: 100%;
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
 

  

        	<h4 class="d-flex">Collaboration  Section</h4>
        
                <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif;?>

            <div class="col-lg-12 col-md-12 mb-30">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url() ?>/admin/frontend/collaboration-section" method="POST">
                             
                            <div class="row">

                                   <div class="form-group mb-2 ml-1">
                                        <label class="form-control-label font-weight-bold"><b>Heading</b></label>

                                        <input type="text" class="form-control" name="heading" value="<?php echo $collaboration_section[0]['settings_value']?>">
                                    </div><br>

                                    <div class="form-group ml-1">
                                        <label class="form-control-label  font-weight-bold"><b>Subheading</b></label>
                                        <textarea class="form-control" name="sub_heading" id="" cols="30" rows="5"><?php echo $collaboration_section[1]['settings_value']?></textarea>
                                    </div>

                                <div class="form-group">
                                        <button type="submit" class="btn btn-primary w-100 mt-4 bg-dark">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>







<script>
    $(document).ready(function() {


        $(document).on('change', '.profilePicUpload', function(e) {
            //console.log(this);
            readUrl(this);
        });

        $('.remove-image').on('click', function(e) {
            $(this).parents('.profilePicPreview').css('background-image', 'none');
            $(this).parents('.profilePicPreview').removeClass('has-image');
            $(this).parents('.thumb').find('input[type=file]').val('');
        });

    });


    function readUrl(input) {


        if (input.files && input.files[0]) {
            // console.log('hello');
            var reader = new FileReader();
            reader.onload = function(e) {

                var preview = $(input).parents('.thumb').find('.profilePicPreview');
                var check = $(preview).css('background-image', 'url(' + e.target.result + ')');

                $(preview).addClass('has-image');
            }
            reader.readAsDataURL(input.files[0]);
        }


    }
</script>
 <?= $this->endSection() ?>

