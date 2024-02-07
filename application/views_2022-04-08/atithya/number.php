<?php
//echo $activePage = basename($_SERVER['PHP_SELF'], ".php");
  $activePage = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(2))); 
?>
<section id="number" class="number">
  <div class="container" data-aos="fade-up">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-lg-2 text-center <?= ($activePage == 'search') ? ' d-md-block d-block':' d-md-block d-none'; ?>">
        <h1 class="m-0">01</h1>
        <p class="<?= ($activePage == 'search') ? 'active':''; ?>">Services</p>
      </div>
      <div class="col-lg-2 text-center <?= ($activePage == 'addons') ? ' d-md-block d-block':' d-md-block d-none'; ?>">
        <h1 class="m-0">02</h1>
        <p class="<?= ($activePage == 'addons') ? 'active':''; ?>">Add-Ons</p>
      </div>
      <div class="col-lg-2 text-center <?= ($activePage == 'confirm') ? ' d-md-block d-block':' d-md-block d-none'; ?>">
        <h1 class="m-0">03</h1>
        <p class="<?= ($activePage == 'confirm') ? 'active':''; ?>">Guest Details</p>
      </div>
      <div class="col-lg-3 text-center <?= ($activePage == 'checkout') ? ' d-md-block d-block':' d-md-block d-none'; ?>">
        <h1 class="m-0">04</h1>
        <p class="<?= ($activePage == 'checkout') ? 'active':''; ?>">Confirm & Checkout</p>
      </div>
    </div>
  </div>
</section>
