<?php include 'head.php';?>
<!-- ======= Header ======= -->
 
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
  
<!-- End Header -->
<main id="hero" class="bg-white">
  <section class="mamber-card">
    <div class="container search-box">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <p>Sign In Customer</p>
			
			<?php   if(!empty($this->session->flashdata('success'))) {?>
				
				<h3> <?=$this->session->flashdata('success')?></h3>
				
			<?php }?>
          </div>
              <div class="row">
                <div class="col-md-6">
                  <form id="" name="" method="post" action="<?=base_url('atithya/user/login')?>" class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded">
                    <input type="hidden"  name="loginfrom" value="Login" />
                    <div class="row">
                      <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="username" name="username" placeholder="">
                        <label class="floating-label">Email ID</label>
                      </div>
                      <div class="form-group col-md-12">
                       <input type="password" class="form-control" id="pwd" name="password" placeholder="">
                        <label class="floating-label"> Password</label>
                      </div>
                      <div class="form-group col-md-12">
                        <button type="submit" id="submit" name="submit" class="btn btn-red"  role="button" aria-disabled="false"> Login</button>
                      </div>
                       
                      <div class="clearfix"></div>
                      <div class="form-group col-lg-12 text-center mt-3">
                      </div>
                      <div class=clearfix></div>
                    </div>
                  </form>
                  <a class="text-dark" href="<?=base_url("atithya/user/forgot");?>">  <i class="text-warning bx bxs-info-circle" ></i> Forgot Password</a> 
                  <hr/>
                  <p class="text-dark"> 
                    <a class="text-primary" href="<?=base_url("atithya/user/signup");?>"> Create Your Account </a>
                  </p>
                </div>
                <!--<i class="bx bxs-hand-right" aria-hidden="true"></i> <div class="col-md-6 text-center">
                  <a href="#" class="mt-3"><img src="<?=base_url('atithya_assets/assets/')?>img/facebook.png" alt="login with Facebook" width="300px"/></a><br/>
                  <a href="#" class="mt-3"><img src="<?=base_url('atithya_assets/assets/')?>img/google.png" alt="login with Google" width="300px"/></a>
                  <br/>
                  <br/>
                  <a class="text-primary" href="#"> <i class="text-warning bx bxs-info-circle" ></i> Forgot Password</a> |  <a class="text-primary" href="<?=base_url("atithya/user/signup");?>"> Sign Up </a> 
                </div>-->
            </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- ======= Footer ======= -->
<?php include 'footer.php';?>
</body>
</html>