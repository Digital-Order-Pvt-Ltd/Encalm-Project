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
<?php include 'footer.php';?>
<script type="text/javascript">    
 
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