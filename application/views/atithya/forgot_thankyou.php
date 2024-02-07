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
            <p>Thank You</p>
			
			<?php   if(!empty($this->session->flashdata('success'))) {?>
				
				<h3> <?=$this->session->flashdata('success')?></h3>
				
			<?php }?>
          </div>
              <div class="row">
                <div class="col-md-12">
                  <p>Your password has been reset successfully, please check your mail for new password.</p>
                  <p><a href="<?=base_url('atithya/user/login')?>">Click here</a> to login</p>
                </div>
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