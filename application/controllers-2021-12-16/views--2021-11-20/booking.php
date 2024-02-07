 <?php include 'head.php';?>
<body>
<!-- ======= Header ======= -->
 
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
  
<!-- End Header -->
<main id="hero" class="bg-white">
  
  <section class="mamber-card">
    <div class="container search-box">
      <div class="row">
          <div class="col-lg-8">
          <div class="section-title">
            <p>My Booking</p>
          </div>
         <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-plane-arrival"></i>&nbsp;Selected Service</span>
    <h6 class="badge badge-primary badge-pill text-dark">Arrival (Domestic) Terminal (T2)</h6>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-ticket-alt"></i>&nbsp;Flight Details</span>
    <h6 class="badge badge-primary badge-pill text-dark">IndiGo Airlines 6E-171 (Delhi)</h6>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-calendar-day"></i>&nbsp;Flight Date &amp; Time</span>
    <h6 class="badge badge-primary badge-pill text-dark">Fri, 29 Oct 2021 04:35hrs (IST)</h6>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-users"></i>&nbsp;Number of guests</span>
    <h6 class="badge badge-primary badge-pill text-dark">1 Adult</h6>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Service Date &amp; Time</span>
    <h6 class="badge badge-primary badge-pill text-dark">Fri, 29 Oct 2021 04:35hrs (IST)</h6>
  </li>
</ul>
<div class="clearfix"></div>
<hr>
<table class="table table-striped table-bordered" cellpadding="0" cellspacing="0" width="100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Title</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Class</th>
      <th scope="col">PNR No/Passport/Govt ID</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Adult 1</td>
      <td>Mr.</td>
      <td>Tarun</td>
      <td>Gupta</td>
      <td>18-May-1965</td>
      <td>Economy</td>
      <td>IN2523565</td>
    </tr>
    <tr>
      <td>Adult 2</td>
      <td>Mr</td>
      <td>Rohit</td>
      <td>Sharma</td>
      <td>25-Nov-1983</td>
      <td>Businees</td>
      <td>IN2562356</td>
    </tr>
    <tr>
      <td>Adult 3</td>
      <td>Mrs.</td>
      <td>Sameena</td>
      <td>Sharma</td>
      <td>25-Nov-1988</td>
      <td>Business</td>
      <td>IN2562745</td>
    </tr>
  </tbody>
</table>
<div class="clearfix"></div>
<hr>
<div class="card">
  <div class="card-header">Placard Details</div>
  <div class="card-body">
    <h3 class="card-title">Mr. Ravi Kumar Gupta<span class="card-text small float-end">+91 98452 25642</span></h3>
  </div>
</div>
<div class="clearfix"></div>
<hr>
<div class="card">
  <div class="card-header">GSTIN Details</div>
  <div class="card-body">
    <table class="table table-striped table-bordered table-sm m-0" cellpadding="0" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th scope="col">GST No.</th>
          <th scope="col">Name</th>
          <th scope="col">Address</th>
          <th scope="col">City</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">18AABCU9603R1ZM</th>
          <td>Tarun Gupta</td>
          <td>D-52/A Jangpura</td>
          <td>New Delhi</td>
        </tr>
      </tbody>
    </table>
    <table class="table table-striped table-bordered table-sm m-0" cellpadding="0" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th scope="col">State</th>
          <th scope="col">Pincode</th>
          <th scope="col">Mobile</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Delhi</th>
          <td>110062</td>
          <td>+91 98562 45125</td>
          <td>tarun@gmail.com</td>
        </tr>
      </tbody>
    </table>
  </div>
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