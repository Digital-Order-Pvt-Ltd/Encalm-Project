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
            <p><a href="<?=base_url('home/index')?>">Home</a> </p>
			
			<br>			<h3>Thank you</h3><br>
			 <?php if(!empty($this->session->flashdata('success'))) {?>
				
				<h3> <center><?=$this->session->flashdata('success')?></center></h3>
				
			<?php }?>
			
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