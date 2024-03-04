<header id="header" class="fixed-top d-flex align-items-cente">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    <h1 class="logo me-auto me-lg-0"><a href="<?=base_url('')?>" class="logo me-auto me-lg-0"><img src="<?=base_url('atithya_assets/')?>assets/img/logo.png" alt="" class="img-fluid"></a></h1>
    <!-- Uncomment below if you prefer to use an image logo --> 
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?=base_url('atithya_assets/')?>assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
    
<nav id="navbar" class="navbar order-last order-lg-0">
  <ul>
    <li><a class="nav-link" href="<?=base_url('')?>" <?php echo ($this->uri->segment(1)=='')?' class="active"':''; ?>>Home</a></li>
    <?php /*<li><a class="nav-link scrollto" href="/#about">About Us</a></li>
    <li><a class="nav-link scrollto" href="/#our-vision">Vision</a></li>
    <li><a class="nav-link scrollto" href="/#values">Values</a></li>
    <li><a class="nav-link scrollto d-none" href="/#projects">Projects</a></li>
    <li class="dropdown"><a class="nav-link hassubmenu" href="#">Services</a>
      <ul class="submenu">*/ ?>
        <li><a href="<?=base_url('atithya/services/arrival')?>" <?php echo ($this->uri->segment(2)=='arrival')?' class="active"':''; ?>>Arrival</a></li>
        <li><a href="<?=base_url('atithya/services/departure')?>" <?php echo ($this->uri->segment(2)=='departure')?' class="active"':''; ?>>Departure</a></li>
        <li><a href="<?=base_url('atithya/services/transit')?>" <?php echo ($this->uri->segment(2)=='transit')?' class="active"':''; ?>>Transit</a></li>
       <!--li><a href="<?=base_url('atithya/services/lounge')?>" <?php //echo ($this->uri->segment(2)=='lounge')?' class="active"':''; ?>>Lounge</a></li-->
    <li><a class="nav-link scrollto" href="<?=base_url('contact')?>">Contact Us</a></li>
      <?php /*</ul>
    </li>
    <li class="top-social ps-3">
      <div class="social-links"> <!-- <a href="https://www.linkedin.com/company/encalm/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a> --> </div>
    </li>*/ ?>
  <?php 

  $session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
  if(!empty($session_customer_data['customer_id'])) {?>
    <li class="top-social ps-3 nav-item dropdown">
      <div class="social-links"><span class="text-dark" style="font-size: 22px; padding-left:5px; cursor: pointer; font-weight: 600;"><?php echo "Hi&nbsp;".$session_customer_data['first_name']; ?></span> <a href="javascript:void(0)" class="linkedin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bx bxs-user"></i></a> </div>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?=base_url('atithya/user/myprofile')?>">My Profile</a>
          <a class="dropdown-item" href="<?=base_url('atithya/user/mybooking')?>">My Booking</a>
          <a class="dropdown-item" href="<?=base_url('atithya/user/myguest')?>">My Guest List</a>
          <a class="dropdown-item" href="<?=base_url('atithya/user/changepassword')?>">Change Password</a>
          <a class="dropdown-item" href="<?=base_url('atithya/user/logout')?>">Logout</a> </div>
    </li>
    <!-- <li><a class="nav-link" href="#hero">Hi <?php echo $session_customer_data['first_name']; ?></a></li> -->
  <?php } else {?>
  <li class="top-social nav-item dropdown">
      <div class="social-links"> <a href="javascript:void(0)" class="linkedin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bx bxs-user"></i></a> </div>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="<?=base_url('atithya/user/login')?>">Sign in</a> 
      
    </li>
  <?php }?>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i> </nav>

    <!-- .navbar --> 
  </div>
</header>