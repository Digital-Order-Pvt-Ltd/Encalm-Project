<?php include 'head.php';?>
<!-- ======= Header ======= -->
 
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
  
<!-- End Header -->
<main id="hero" class="bg-white">
  <div class="bg-light pt-5">
    <div class="section-title text-center">
            <p>Change Password</p>
      
             <?php if(!empty($this->session->flashdata('success'))) {?>
        
        <h3> <center><?=$this->session->flashdata('success')?></center></h3>
        
      <?php }?>

          </div>
  </div>
  <section class="mamber-card">
    <div class="container search-box">
      <div class="row">
        <div class="col-lg-12">
          
          <form id="" name="" method="post" action="" class="custom-search-from" enctype="application/x-www-form-urlencoded">
  <div class="row">
    <?php 
	if(form_error('old_password')) 
		echo "<div class='form-group col-md-4 pd-10 focus' >";
	else     
		echo "<div class='form-group col-md-4 pd-10' >";
                        ?>
      <label class="w-100 mb-2">Current Password</label>
      <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Current Password" value="">
	  <label class="w-100 mb-2 "><?php echo form_error('old_password'); ?></label>
    </div>
     <?php 
	if(form_error('new_password')) 
		echo "<div class='form-group col-md-4 pd-10 focus' >";
	else     
		echo "<div class='form-group col-md-4 pd-10' >";
                        ?>
      <label class="w-100 mb-2">New Password</label>
      <input type="text" class="form-control" id="new_password" name="new_password" placeholder="New Password">
	  
	  <label class="w-100 mb-2 "><?php echo form_error('new_password'); ?></label>
    </div>
    <?php 
	if(form_error('re_password')) 
		echo "<div class='form-group col-md-4 pd-10 focus' >";
	else     
		echo "<div class='form-group col-md-4 pd-10' >";
                        ?>
      <label class="w-100 mb-2">Confirm Password</label>
      <input type="text" class="form-control" id="re_password" name="re_password" placeholder="Confirm Password">
	  
	  <label class="w-100 mb-2 "><?php echo form_error('re_password'); ?></label>
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