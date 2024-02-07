<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Encalm Hospitality Pvt. Ltd. (Encalm)</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="<?=base_url()?>assets/img/favicon.png" rel="icon">
<link href="<?=base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="<?=base_url()?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/all.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/bootstrap-datetimepicker/daterangepicker.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/select2/css/core.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="<?=base_url()?>assets/css/style-search.css" rel="stylesheet">
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-cente">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    <h1 class="logo me-auto me-lg-0"><a href="<?=base_url('home/index')?>" class="logo me-auto me-lg-0"><img src="<?=base_url()?>assets/img/logo.png" alt="" class="img-fluid"></a></h1>
    <!-- Uncomment below if you prefer to use an image logo --> 
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?=base_url()?>assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
  </div>
</header>
<!-- End Header --> 

<!-- ======= Hero Section ======= -->
<?php include 'purchase-history.php';?>
<!-- End Hero -->

<main id="main"> 
  <!-- ======= number Section ======= -->
  <?php include 'number.php';?>
  <section class="mamber-card-checkout">
    <div class="container search-box">
      <div class="row">
        <div class="col-md-8 search-box">
          <div class="section-title">
            <p>Guest Details<a href="javascript:void(0)" class="small float-end" id="guestlist"><span class="small"><span class="small"><u>My Guest List</u></span></span></a></p>
          </div>
          <div class="table-responsive overflow-hidden">
            <?php include 'userentry.php';?>
          </div>
          <hr>
          <div class="section-title">
            <p>Placard Details</p>
          </div>
          <div class="table-responsive overflow-hidden">
            <?php include 'placard.php';?>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <div class="card-header"> Order Summary </div>
            <div class="charges table-responsive">
              <table width="100%" border="0" cellspacing="0" cellpadding="10" class="table table-hover m-0">
                <tbody>
                  <tr>
                    <td>Order Id:</td>
                    <td align="right">T85934068231</td>
                  </tr>
                  <tr>
                    <td>Booking Date:</td>
                    <td align="right">22/10/2021</td>
                  </tr>
                  <tr>
                    <td>Booking Time:</td>
                    <td align="right">05:26:08</td>
                  </tr>
                  <tr>
                    <td>Nobility (1 Adult)</td>
                    <td align="right">&#8377;6,500</td>
                  </tr>
                  <tr>
                    <td>Flower Bouquet</td>
                    <td align="right">&#8377;500</td>
                  </tr>
                  <tr>
                    <td class="bg-light">Net Amount</td>
                    <td align="right" class="bg-light">&#8377;7,000</td>
                  </tr>
                  <tr>
                    <td>Discount<br>
                      <span class="small"><span class="small">(DIWALI &#8377;100) </span></span> <a href="javascript:void(0)" type="button" id="couponBtn" data-toggle="modal" data-target="#exampleModalCenter">Apply Coupon</a></td>
                    <td align="right">&#8377;100</td>
                  </tr>
                  <tr>
                    <td class="bg-light">Final Amount</td>
                    <td align="right" class="bg-light">&#8377;6,900</td>
                  </tr>
                  <tr>
                    <td>CGST (9.0%)</td>
                    <td align="right">&#8377;621</td>
                  </tr>
                  <tr>
                    <td>SGST (9.0%)</td>
                    <td align="right">&#8377;621</td>
                  </tr>
                  <tr>
                    <td class="bg-light">Total Price</td>
                    <td align="right" class="bg-light">&#8377;8,142</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <button type="submit" id="submit" name="submit" class="btn btn-primary w-100"  role="button" aria-disabled="false">Pay Now</button>
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

<!-- ======= Modal ======= -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body search-box">
        <div class="p-3">
          <h5>DIWALI<a href="javascript:void(0)" class="btn btn-primary float-end small close"><i class="fas fa-ticket-alt"></i> Select</a></h5>
          <p><strong>Get 40% OFF up to ₹100</strong></p>
          <p class="small">Valid on orders with items worth ₹5000</p>
          <div class="clearfix"></div>
          <hr>
          <h5>NEW YEAR<a href="javascript:void(0)" class="btn btn-primary float-end small close"><i class="fas fa-ticket-alt"></i> Select</a></h5>
          <p><strong>Get 40% OFF up to ₹100</strong></p>
          <p class="small">Valid on orders with items worth ₹5000</p>
          <div class="clearfix"></div>
          <hr>
          <form id="" name="" method="post" action="checkout-search.php" class="custom-search-from" enctype="application/x-www-form-urlencoded">
            <div class="row">
              <div class="form-group col-md-9">
                <label class="d-none">First Name</label>
                <input type="text" class="form-control" id="" name="" placeholder="Discount Coupon">
              </div>
              <div class="form-group col-lg-3 text-center">
                <button type="submit" id="submit" name="submit" class="btn btn-red btn-sm px-3"  role="button" aria-disabled="false">Apply</button>
              </div>
              <div class=clearfix></div>
            </div>
          </form>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body search-box px-4">
        <h3 class="modal-title" id="exampleModalLabel">Guest List</h3>
        <form id="" name="" method="post" action="guest_user.php" class="custom-search-from pt-3" enctype="application/x-www-form-urlencoded">
          <div class="row">
            <div class="form-group col-md-2">
              <label for="" class="d-none">Title*</label>
              <span class="caret"></span>
              <select id="" name="" class="form-control d-inline-block w-75 float-end">
                <option value="" selected="selected">Title*</option>
                <option value="">Mr.</option>
                <option value="">Mrs.</option>
                <option value="">Ms.</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">First Name</label>
              <input type="text" class="form-control" id="" name="" placeholder="First Name">
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Last Name</label>
              <input type="text" class="form-control" id="" name="" placeholder="Last Name">
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Age</label>
              <input type="text" class="form-control" id="" name="" placeholder="Age">
            </div>
            <div class="form-group col-md-3">
              <label for="" class="d-none">Passport/Govt</label>
              <input type="text" class="form-control" id="" name="" placeholder="Passport/Govt ID">
            </div>
            <div class="form-group col-lg-1 text-center">
              <button type="submit" id="submit" name="submit" class="btn btn-primary btn-sm small closeBTN float-end px-3"  role="button" aria-disabled="false">+ ADD</button>
            </div>
            <div class="clearfix mb-3"></div>
            <div class="form-group col-md-2">
              <div class="form-check d-inline-block p-0">
                <input type="checkbox" class="form-check-input mx-auto mt-2" id="exampleCheck1">
                <label class="form-check-label d-none" for="exampleCheck1">I am Guest</label>
              </div>
              <label for="" class="d-none">Title*</label>
              <span class="caret"></span>
              <select id="" name="" class="form-control d-inline-block w-75 float-end" disabled>
                <option value="">Title*</option>
                <option value="mr" selected="selected">Mr.</option>
                <option value="mrs">Mrs.</option>
                <option value="ms">Ms.</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">First Name</label>
              <input type="text" class="form-control" id="" name="" placeholder="First Name" value="Rohit" readonly>
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Last Name</label>
              <input type="text" class="form-control" id="" name="" placeholder="Last Name" value="Sharma" readonly>
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Age</label>
              <input type="text" class="form-control" id="" name="" placeholder="Age" value="30" readonly>
            </div>
            <div class="form-group col-md-3">
              <label for="" class="d-none">Passport/Govt</label>
              <input type="text" class="form-control" id="" name="" placeholder="Passport/Govt ID" value="IN2562356" readonly>
            </div>
            <div class="form-group col-lg-1 text-center">
              <button type="submit" id="submit" name="submit" class="btn btn-primary btn-sm small closeBTN float-end px-3"  role="button" aria-disabled="false">+ EDIT</button>
            </div>
            <div class="clearfix mb-3"></div>
            <div class="form-group col-md-2">
              <div class="form-check d-inline-block p-0">
                <input type="checkbox" class="form-check-input mx-auto mt-2" id="exampleCheck1">
                <label class="form-check-label d-none" for="exampleCheck1">I am Guest</label>
              </div>
              <label for="" class="d-none">Title*</label>
              <span class="caret"></span>
              <select id="" name="" class="form-control d-inline-block w-75 float-end" disabled>
                <option value="">Title*</option>
                <option value="mr">Mr.</option>
                <option value="mrs" selected="selected">Mrs.</option>
                <option value="ms">Ms.</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">First Name</label>
              <input type="text" class="form-control" id="" name="" placeholder="First Name" value="Sameena" readonly>
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Last Name</label>
              <input type="text" class="form-control" id="" name="" placeholder="Last Name" value="Sharma" readonly>
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Age</label>
              <input type="text" class="form-control" id="" name="" placeholder="Age" value="25" readonly>
            </div>
            <div class="form-group col-md-3">
              <label for="" class="d-none">Passport/Govt</label>
              <input type="text" class="form-control" id="" name="" placeholder="Passport/Govt ID" value="IN2562745" readonly>
            </div>
            <div class="form-group col-lg-1 text-center">
              <button type="submit" id="submit" name="submit" class="btn btn-primary btn-sm small closeBTN float-end px-3"  role="button" aria-disabled="false">+ EDIT</button>
            </div>
            <div class="clearfix mb-3"></div>
            <div class="form-group col-lg-12 text-center mt-3">
              <button type="submit" id="submit" name="submit" class="btn btn-primary small closeBTN float-end"  role="button" aria-disabled="false">Select</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal --> 

<!-- Vendor JS Files --> 
<script src="<?=base_url()?>assets/js/jquery-2.2.4.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/aos/aos.js"></script> 
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/bootstrap-datetimepicker/moment.js"></script> 
<script src="<?=base_url()?>assets/vendor/bootstrap-datetimepicker/daterangepicker.js"></script> 
<script src="<?=base_url()?>assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 
<script src="<?=base_url()?>assets/vendor/select2/select2.min.js"></script> 

<!-- Template Main JS File --> 
<script src="<?=base_url()?>assets/js/main.js"></script> 
<script type="text/javascript">
jQuery('#couponBtn').on('click', function (e) {
    $('#exampleModalCenter').modal('show');
});
jQuery('.close').on('click', function (e) {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModal').modal('hide');
});
jQuery('#guestlist').on('click', function (e) {
    $('#exampleModal').modal('show');
});
jQuery(".closeBTN").on('click', function (e) {
    $('#exampleModal').modal('hide');
});
jQuery('#myTab a').on('click', function (e) {
  e.preventDefault()
  jQuery(this).tab('show')
});
jQuery(function () {   
   jQuery('.datepicker').datetimepicker({
       format: 'DD-MMM-YYYY',
       autoclose: true,
       minView: 2
    });
     // Init Select2 - Basic Single
    jQuery(".select2-single").select2();
});
if ($('input.checkbox_check').attr('checked')) {
    
    jQuery(".gstsection").removeClass("gstsection");
}
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