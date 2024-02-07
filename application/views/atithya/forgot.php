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
            <p>Forgot Password</p>
			
			<?php   if(!empty($this->session->flashdata('success'))) {?>
				
				<h3> <?=$this->session->flashdata('success')?></h3>
				
			<?php }?>
          </div>
              <div class="row">
                <div class="col-md-6">
                  <form id="" name="" method="post" action="" class="custom-search-from formfloats">
                    <input type="hidden"  name="loginfrom" value="Login" />
                    <div class="row">
                      <div class="form-group col-md-12">
                        <input type="email" class="form-control" id="username" name="emailid" placeholder="" required />
                        <label class="floating-label">Email ID</label>
                      </div>
                      <div class="form-group col-md-12">
                        <button type="submit" id="submit" name="submit" class="btn btn-red"  role="button" aria-disabled="false"> Submit</button>
                      </div>
                       
                      <div class="clearfix"></div>
                      <div class="form-group col-lg-12 text-center mt-3">
                      </div>
                      <div class=clearfix></div>
                    </div>
                  </form>
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