<?= $this->include('frontend/temp-two/include/header'); ?>
<style type="text/css">
	header,footer{
		display: none;
	}
</style>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-sm-5 text-black">

        <div class="px-5 ms-xl-4 mt-4 mb-4 pb-3">
           <a href="index.php"><img src="<?php echo base_url();?>/frontend/template1/assets/img/logo-red.png"></a>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-3 pt-2 pt-xl-0  ">

          <form class="w-100" action="<?php echo base_url();?>/user/login" method="post">

             
            <div class="form-outline mb-2">
			<label class="form-label" for="form2Example18">Username or Email</label>	
              <input type="test" id="form2Example18" class="form-control form-control-lg"  placeholder="Email" name="email">
				<small style="color:red;" class="text-danger">
					<?php if (isset($validation)) {
						echo $validation->getError('email');
						} ?>
				</small>
            </div>

            <div class="form-outline mb-2">
			<label class="form-label" for="form2Example28">Password</label>			
              <input type="password" id="form2Example28" class="form-control form-control-lg" placeholder="Password" name="password">
				<small style="color:red;" class="text-danger">
					<?php if (isset($validation)) {
						echo $validation->getError('password');
						} ?>
				</small> 
            </div>

            <div class="pt-1 mb-2">
              <button class="filled-btn bg-mandy btn-block" type="submit">Login</button>
            </div>

            <p class="small mb-3 pb-lg-2"><a class="text-muted" href="forgot_password.php">Forgot password?</a></p>
            

          </form>

        </div>

      </div>
      <div class="col-sm-7 px-0 d-none d-sm-block">
        <img src="<?php echo base_url();?>/frontend/template1/assets/img/loginbg.jpg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>

<?= $this->include('frontend/temp-two/include/footer'); ?>