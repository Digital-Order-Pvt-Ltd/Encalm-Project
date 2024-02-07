<?php
//echo $activePage = basename($_SERVER['PHP_SELF'], ".php");
  $activePage = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(2))); 
?>
<section id="number" class="number">
  <div class="container" data-aos="fade-up">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-lg-2 text-center">
        <h1 class="m-0">01</h1>
        <p class="<?= ($activePage == 'search') ? 'active':''; ?>">Services</p>
      </div>
      <div class="col-lg-2 text-center">
        <h1 class="m-0">02</h1>
        <p class="<?= ($activePage == 'addons') ? 'active':''; ?>">Add-Ons</p>
      </div>
      <div class="col-lg-2 text-center">
        <h1 class="m-0">03</h1>
        <p class="<?= ($activePage == 'confirm') ? 'active':''; ?>">Confirmation</p>
      </div>
      <div class="col-lg-2 text-center">
        <h1 class="m-0">04</h1>
        <p class="<?= ($activePage == 'checkout') ? 'active':''; ?>">Checkout</p>
      </div>
    </div>
  </div>
</section>
