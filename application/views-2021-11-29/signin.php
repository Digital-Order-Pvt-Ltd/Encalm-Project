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
            <p>Signin Customer</p>
			
			<?php   if(!empty($this->session->flashdata('success'))) {?>
				
				<h3> <?=$this->session->flashdata('success')?></h3>
				
			<?php }?>
          </div>
          <form id="" name="" method="post" action="<?=base_url('user/login')?>" class="custom-search-from" enctype="application/x-www-form-urlencoded">
		   <input type="hidden"  name="loginfrom" value="Login" />
  <div class="row">
    <div class="form-group col-md-4">
      <label class="w-100 mb-2">Email or Mobile</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Email or Mobile">
    </div>
    <div class="form-group col-md-4">
      <label class="w-100 mb-2"> Password</label>
     <input type="password" class="form-control" id="pwd" name="password" placeholder="Password">
    </div>
     
    <div class="clearfix"></div>
    <div class="form-group col-lg-12 text-center mt-3">
      <button type="submit" id="submit" name="submit" class="btn btn-red btn-sm"  role="button" aria-disabled="false">Submit</button>
    </div>
    <div class=clearfix></div>
  </div>
</form>

        </div>
      </div>
    </div>
  </section>
</main>

<!-- ======= Footer ======= -->
<?php include 'footer.php';?>
</body>
</html>