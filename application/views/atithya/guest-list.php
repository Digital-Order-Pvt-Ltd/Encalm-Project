<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Encalm Hospitality Pvt. Ltd. (Encalm)</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="<?=base_url('atithya_assets/')?>assets/img/favicon.png" rel="icon">
<link href="<?=base_url('atithya_assets/')?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="<?=base_url('atithya_assets/')?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="<?=base_url('atithya_assets/')?>assets/css/all.min.css" rel="stylesheet">
<link href="<?=base_url('atithya_assets/')?>assets/vendor/aos/aos.css" rel="stylesheet">
<link href="<?=base_url('atithya_assets/')?>assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="<?=base_url('atithya_assets/')?>assets/vendor/bootstrap-datetimepicker/daterangepicker.css" rel="stylesheet">
<link href="<?=base_url('atithya_assets/')?>assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
<link href="<?=base_url('atithya_assets/')?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="<?=base_url('atithya_assets/')?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="<?=base_url('atithya_assets/')?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="<?=base_url('atithya_assets/')?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="<?=base_url('atithya_assets/')?>assets/vendor/select2/css/core.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="<?=base_url('atithya_assets/')?>assets/css/style-search.css" rel="stylesheet">
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-cente">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    <h1 class="logo me-auto me-lg-0"><a href="index.php" class="logo me-auto me-lg-0"><img src="<?=base_url('atithya_assets/')?>assets/img/logo.png" alt="" class="img-fluid"></a></h1>
    <!-- Uncomment below if you prefer to use an image logo --> 
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?=base_url('atithya_assets/')?>assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
  </div>
</header>
<!-- End Header -->
<main id="hero" class="bg-white">
  
  <section class="mamber-card">
    <div class="container search-box">
      <div class="row">
          <div class="col-lg-12">
          <div class="section-title">
            <p>My Guest List</p>
          </div>
         <form id="" name="" method="post" action="checkout-search.php" class="custom-search-from" enctype="application/x-www-form-urlencoded">
  <div class="row">
    <div class="form-group col-md-6">
      <label class="d-none">First Name</label>
      <input type="text" class="form-control" id="" name="" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label class="d-none">Last Name</label>
      <input type="text" class="form-control" id="" name="" placeholder="Last Name">
    </div>
    <div class="form-group col-md-6">
      <label class="d-none">Email</label>
      <input type="email" class="form-control" id="" name="" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label class="d-none">Country</label>
      <span class="caret"></span>
      <select id="" name="" class="form-control">
        <option value="">Country</option>
        <option value="IND" data-id="IND" selected="selected">India</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label class="d-none">Mobile</label>
      <input type="text" class="form-control" id="" name="" placeholder="Mobile">
    </div>
    <div class="form-group col-md-3 pt-2">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
        <label class="form-check-label" for="male"> Male </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
        <label class="form-check-label" for="female"> Female </label>
      </div>
    </div>
    <div class="form-group col-md-3">
      <label class="d-none">Date of Birth</label>
      <i class="fas fa-calendar-alt"></i>
      <input type="text" class="form-control datepicker" placeholder="Date of Birth" />
    </div>
    <div class="form-group col-md-12">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Create My Account</label>
        </div>
    </div>
    <div class=clearfix></div>
    <div class="form-group col-lg-12 text-center">
      <button type="submit" id="submit" name="submit" class="btn btn-red btn-sm"  role="button" aria-disabled="false">Submit &amp; Proceed</button>
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
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 text-center">
          <div class="footer-info">
            <h3>Encalm Hospitality Private Limited</h3>
            <p>Plot No 89 LGF, Sector 44, Gurgaon 122003, Haryana, India<br>
              <span class="me-2"><i class="bi bi-envelope"></i></span> info@encalmhospitality.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright"> &copy; Copyright <strong><span>Encalm Hospitality Pvt. Ltd.</span></strong> All Rights Reserved </div>
  </div>
</footer>
<!-- End Footer -->
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 

<!-- Vendor JS Files --> 
<script src="<?=base_url('atithya_assets/')?>assets/js/jquery-2.2.4.min.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/aos/aos.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/bootstrap/js/bootstrap.min.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/glightbox/js/glightbox.min.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/swiper/swiper-bundle.min.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/bootstrap-datetimepicker/moment.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/bootstrap-datetimepicker/daterangepicker.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/select2/select2.min.js"></script> 

<!-- Template Main JS File --> 
<script src="<?=base_url('atithya_assets/')?>assets/js/main.js"></script> 
<script type="text/javascript">    
jQuery(function () {   
   jQuery('.datepicker').datetimepicker({
       format: 'DD-MMM-YYYY',
       autoclose: true,
       minView: 2
    });
     // Init Select2 - Basic Single
    jQuery(".select2-single").select2();
});
 function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("gstsection");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "flex";
  } else {
    text.style.display = "none";
  }
} 
</script>
</body>
</html>