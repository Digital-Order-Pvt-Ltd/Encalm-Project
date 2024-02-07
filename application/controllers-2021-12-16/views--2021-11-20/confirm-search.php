 <?php include 'head.php';?>
<!-- ======= Header ======= -->
 
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
   
<!-- End Header --> 

<!-- ======= Hero Section ======= -->
<?php include 'purchase-history.php';?>
<!-- End Hero -->

<main id="main"> 
  <!-- ======= number Section ======= -->
  <?php include 'number.php';?>
  <section class="mamber-card">
    <div class="container search-box">
      <div class="row">
        <div class="col-lg-8">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-sync-alt"></i>&nbsp;Book As Guest</a></li>
            <li class="nav-item"> <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-sync-alt"></i>&nbsp;Existing Customer</a></li>
          </ul>
          <div class="tab-content py-5" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <form id="" name="" method="post" action="<?=base_url('home/checkout')?>" class="custom-search-from" enctype="application/x-www-form-urlencoded">
  <div class="row">
    <div class="form-group col-md-6">
      <label class="d-none">First Name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label class="d-none">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
    </div>
    <div class="form-group col-md-6">
      <label class="d-none">Email</label>
      <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label class="d-none">Country</label>
      <span class="caret"></span>
      <select id="country" name="country" class="form-control">
        <option value="">Country</option>
        <option value="IND" data-id="IND" selected="selected">India</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label class="d-none">Mobile</label>
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
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
      <input type="text" id="dob" name="dob" class="form-control datepicker" placeholder="Date of Birth" />
    </div>
    <div class="form-group col-md-12">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status" value="Active">
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
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <?php include 'existing.php';?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 search-box">
          <div class="card mb-3">
            <div class="card-header text-center"> Order Summary </div>
            <div class="charges table-responsive">
               <?php include "ajax_table.php";?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- ======= Footer ======= -->
 

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
<!-- End Modal --> 
 <?php include 'footer.php';?>
<script type="text/javascript">    
jQuery('#couponBtn').on('click', function (e) {
    $('#exampleModalCenter').modal('show');
});
jQuery('.close').on('click', function (e) {
    $('#exampleModalCenter').modal('hide');
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
</script>
</body>
</html>