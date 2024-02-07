<header id="header" class="fixed-top d-flex align-items-cente">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    <h1 class="logo me-auto me-lg-0"><a href="<?=base_url()?>" class="logo me-auto me-lg-0"><img src="<?=base_url()?>assets/img/logo.png" alt="" class="img-fluid"></a></h1>
    <!-- Uncomment below if you prefer to use an image logo --> 
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?=base_url()?>assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
    
<nav id="navbar" class="navbar order-last order-lg-0">
  <ul>
    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
    <li><a class="nav-link scrollto" href="#our-vision">Vision</a></li>
    <li><a class="nav-link scrollto" href="#values">Values</a></li>
    <li><a class="nav-link scrollto d-none" href="#projects">Projects</a></li>
    <li><a class="nav-link scrollto" href="#services">Services</a></li>
    <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
    <li class="top-social ps-3">
      <div class="social-links"> <a href="https://www.linkedin.com/company/encalm/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a> </div>
    </li>
	<?php 

	$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
	if(!empty($session_customer_data['customer_id'])) {?>
    <li class="top-social ps-3 nav-item dropdown">
      <div class="social-links"> <a href="javascript:void(0)" class="linkedin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bx bxs-user"></i></a> </div>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?=base_url('user/myprofile')?>">My Profile</a>
          <a class="dropdown-item" href="<?=base_url('user/mybooking')?>">My Booking</a>
          <a class="dropdown-item" href="<?=base_url('user/myguest')?>">My Guest List</a>
          <a class="dropdown-item" href="<?=base_url('user/changepassword')?>">Change Password</a>
          <a class="dropdown-item" href="<?=base_url('user/logout')?>">Logout</a> </div>
    </li>
	<?php } else {?>
	<li class="top-social ps-3 nav-item dropdown">
      <div class="social-links"> <a href="javascript:void(0)" class="linkedin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bx bxs-user"></i></a> </div>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	  <a class="dropdown-item" href="<?=base_url('user/login')?>">Signin</a> 
      
    </li>
	<?php }?>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i> </nav>

    <!-- .navbar --> 
  </div>
</header>