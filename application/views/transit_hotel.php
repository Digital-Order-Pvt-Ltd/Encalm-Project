<?php
include('header.php'); ?>

<style>
  <blade font|-face%20%7B%0D>font-family: Brandon;
  src: url(<?= base_url() ?>assets/fonts/Brandon_reg.otf);

  }

  <blade font|-face%20%7B%0D>font-family: Brandon-bld;
  src: url(<?= base_url() ?>assets/fonts/Brandon_bld.otf);

  }

  /*@font-face{font-family:Gill-Sans-Nova-Medium;*/
  /*    src:url(/fonts/Monotype_-_Gill_Sans_Nova_Medium.woff);*/
  /*}*/
  body {
    font-family: Brandon !important;
    font-size: 18px;
    height: auto !important;
  }
  .datepicker{
    text-transform: uppercase;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p {
    font-family: Brandon !important;
  }

  .section-title p {
    font-family: Brandon !important;
    font-weight: 700 !important;
    font-size: 2.5rem !important;
  }

  .site-navigation a {
    font-weight: 700 !important;
    font-size: 18px;
  }

  .social-icon {
    font-size: 32px;
    padding: 0px 5px;
  }

  .bg-blue {
    background-image: url("<?= base_url() ?>assets/image/footer.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    padding: 60px 0px;
  }

  .bg-main-news {
    color: #ffffff;
  }

  hr {
    color: #ffffff !important;
  }

  .back-to-top:hover {
    background: #ffffff00 !important;
  }

  .text-primarys {
    color: #cda45e !important;
    font-family: Brandon !important;
    font-weight: 400 !important;
  }

  footer h6 {
    font-family: Brandon !important;
  }

  footer {
    font-family: Brandon !important;
  }

  .foo-book {
    position: fixed;
    width: 12% !important;
    top: 96px;

    z-index: 9999;
  }

  .footer-info h6 {
    font-family: Brandon !important;
    font-weight: 400 !important;
  }

  .back-to-top {
    position: relative !important;
    right: 0 !important;
    bottom: 0 !important;
    border: 0px !important;
  }

  .flip-card {
    background-color: transparent;
    width: 400px;
    height: 400px;
    perspective: 1000px;
    cursor: pointer;
    margin-bottom: 25px;
  }

  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  }

  .flip-card-back p {
    color: #ffffff !important;
  }

  .flip-card-back h2 {
    color: #152248 !important;
    font-family: Brandon !important;
    font-weight: 600 !important;
  }

  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }

  .flip-card-front,
  .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
  }

  .flip-card-front {
    background-color: #ffffff;
    color: #000000;
  }

  .custom-form {
    border: none;

  }

  .flip-card-back {
    background-color: #c18b30;
    color: #ffffff;
    transform: rotateY(180deg);
    padding: 30px 20px;
  }

  .text-justify {
    text-align: justify;
  }

  section {
    padding: 30px 0 !important;
  }

  .section-title {
    padding-bottom: 10px !important;
  }

  .btn-main {
    width: 100%;
    background-color: #cda45e;
    border: solid 1px #cda45e;
    border-radius: 5px;
    padding: 7px 25px;
  }

  .f-36 {
    font-size: 2.5rem;
    font-weight: 700;
  }

  .txt-location {
    font-size: 28px;
    padding: 15px;
  }

  #counter {
    text-align: center;
    font-size: 2.5rem;
    color: #000000;
  }

  .icon-serve {
    position: relative;
    bottom: 0px;
    padding-left: 90px;
    line-height: 36px;
  }

  .box-icon {
    width: 14.5%;
    padding: 4px;
    float: left;

    margin-right: 12px;
    height: 130px;
  }

  /*--------------------logo------------------------------*/
  .txt-rgt {
    text-align: right;
  }

  .section-padding {
    padding: 10px 0;
  }

  .brand-carousel {}

  .owl-dots {
    text-align: center;
    margin-top: 4%;
  }

  .owl-dot {
    display: inline-block;
    height: 15px !important;
    width: 15px !important;
    background-color: #878787 !important;
    opacity: 0.8;
    border-radius: 50%;
    margin: 0 5px;
  }

  .owl-dot.active {
    background-color: #cda45e !important;
  }

  .bg-greyer {
    background-color: #eeeeee;
  }

  .blacks-box {
    background: #000000de;
    position: fixed;
    top: 133px;
    width: 236px;
    z-index: 9999;
    border-radius: 10px;
  }

  .blacks-box img {
    width: 100%;
  }

  p.rate {
    background: #000000 !important;
    padding: 8px;
    color: #ffffff !important;
    text-align: center;
  }

  .ful {
    padding: 15px;
  }

  .ful .wid-50 {
    width: 50%;
    text-align: center;
    float: left;
    padding: 18px;

  }

  .submit-button {
    width: 25%;
    border-radius: 20px;
  }

  .foots li {
    padding: 3px 0px !important;
  }

  .books {
    background-color: #cda45e;
    width: 100%;
    border: 0px;
    padding: 8px 25px;
    text-align: center;
    color: #ffffff;
    font-size: 20px;
    border-radius: 10px;
  }

  #hero {
    background-image: url('image/header.jpg') !important;
  }

  /* .fixed{background: #ffffff!important;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 99999999;}*/
  /*.sticky{transition:all 0.5s ease-in;}*/
  .site-navbar-wrap {
    padding-top: 20px;
  }

  /*header a{color:#000000!important;}*/
  /*.fixed .site-navbar-wrap{background-color:#ffffff; padding-top:10px;}*/


  .clear {
    clear: both;
  }

  .color-blue {
    color: #152248 !important;
  }

  .team h6 {
    font-size: 24px;
  }

  .team-social {
    text-align: center;
  }

  .team p {
    text-align: justify;
    text-align-last: center;
    padding: 8px 15px;
    color: #000000;
    margin-bottom: 0px !important;
  }

  .testi .color-yellow {
    color: #ffb100;
    font-size: 26px;
  }

  .testi h3 {
    color: #162449 !important;
    font-size: 36px !important;
  }

  .testi strong {
    font-weight: 700 !important;
  }

  .testi sup {
    font-size: 50px !important;
    top: 10px !important;
    color: #cda45e !important;
  }

  /*--------------------------Tabs--------------------------------------*/
  .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
  }

  .color-main {
    color: #cda45e;
  }

  /* Style the buttons inside the tab */
  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
  }

  /* Change background color of buttons on hover */
  .tab button:hover {
    background-color: #ddd;
  }

  /* Create an active/current tablink class */
  .tab button.active {
    background-color: #cda45e;
  }

  /* Style the tab content */
  .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    height: 170px;
    animation: fadeEffect 1.5s;
    /* Fading effect takes 1 second */
  }

  .tabcontent p {
    color: #000000 !important;
  }

  /* Go from zero to full opacity */
  <blade keyframes|%20fadeEffect%20%7B%0D>from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
  }

  /*------------------------------End Tabs----------------------------*/
  .f-36 {
    font-size: 36px;
  }

  .img img {
    width: 200px;
    padding: 25px;
  }

  .border-left {
    border-right: 1px solid #dedede;
  }

  .color-black {
    color: #000000 !important;
  }

  .facebook {
    color: #cda45e !important;
  }

  .twitter {
    color: #cda45e !important;
  }

  .pinterest {
    color: #cda45e !important;
  }

  .instagram {
    color: #cda45e !important;
  }

  /*header {font-size: 16px; background: #333; position: relative; z-index:999999; -webkit-transition: all 0.5s ease; -moz-transition: all 0.5s ease; transition: all 0.5s ease;}
    header.sticky { position: fixed; font-size: 24px; height: 132px; width: 100%; background: #ffffff;box-shadow: 2px 0px 2px #404040;}
    header ul .active a{color:#000000!important;}
    header .site-menu li a{color:#000000!important;}*/
  #hero:before {
    background: rgba(0, 0, 0, 0) !important;
  }

  .foots {
    list-style: none !important;
    padding: 0px;
    margin: 0px;
  }

  .text-secondary {
    color: #000000 !important;
  }

  .text-title {
    background: #cda45edb;
    padding: 20px 15px;
    position: absolute;
    width: 87%;
    top: 44%;
    margin: 0px 25px;
  }

  .back-to-top i {
    font-size: 40px !important;
    color: #cda45e !important;
    line-height: 0;
    background: #000000 !important;
    padding: 10px !important;
    border-radius: 100px !important;
  }

  #navArea {
    display: flex;
    justify-content: space-between;
    padding: 0px 10%;
    position: fixed;
    width: 100%;
    top: 0px;
    background: #fff;
    transition: background 0.5s;
    z-index: 99999;
  }


  #navArea .logo img {
    width: 100%;
    height: 100px;
    transition: height 0.5s;
  }

  #navArea ul li {
    position: relative;
    display: inline-block;
  }

  #navArea>ul>li {
    float: left;
  }

  #navArea a {
    display: inline-block;
    padding: 1rem 1rem;
    line-height: 1.2rem;
    color: #000 !important;
    transition: .2s ease-out;
  }

  #navArea a:hover,
  li.active {
    color: #000000;
  }


  ul.subMenu {
    box-sizing: border-box;
    position: absolute;
    top: 100%;
    left: 0;
    width: 170%;
  }

  ul.subMenu li {
    width: 100%;
    background: #ffffff;
  }

  #navArea ul.subMenu li a {
    width: 100%;
    padding: 1rem 1rem;
    border-bottom: 1px solid rgba(0, 0, 0, .05);
    border-top: 1px solid rgba(255, 255, 255, .1);
    color: #000000 !important;
  }

  #navArea ul.subMenu li a:hover,
  #navArea ul.subMenu li.active>a {
    background: #ffffff;
    padding-left: 1.1rem;
  }

  ul.subMenu ul.subMenu {
    position: absolute;
    top: 0;
    left: 100%;
    width: 100%;
  }

  .mr-top-136 {
    margin-top: 136px !important;
  }

  #navArea ul {
    list-style: none;
    display: flex;
    align-items: center;
    width: 500px;
    justify-content: space-around;
  }

  #navArea ul li>ul {
    list-style: none;
    display: block;
    align-items: center;
    width: 280px;
    justify-content: space-around;
    margin-left: -32px;
  }

  #navArea ul li a {
    text-decoration: none;

    font-weight: 600;
    transition: color 0.5s;
    font-size: 22px !important;
  }

  #navArea.is-sticky ul li a {
    color: #000000 !important;
  }

  #navArea.is-sticky {
    background: #fff;
  }

  #navArea.is-sticky a {
    color: #000;
  }

  .icon-serve2 {
    position: relative;
    bottom: 0px;
    line-height: 36px;
    display: flex;
    justify-content: center;
  }

  .icon-serve2 img {
    width: 100%;
  }

  .custom-form2 {
    border: none;
    box-shadow: 1px 1px 3px #cbcbcb !important;
    width: 100%;
    height: 41px;
  }

  .label2 {
    font-size: 15px !important;
    color: #706f6f !important;
  }

  #navArea.is-sticky .logo img {
    width: 100%;
    height: 65px;
  }

  .blacks-bg {
    background-color: #000000 !important;
    padding: 20px 0px;
  }

  .bor-rgt {
    border-right: 2px solid #cda45e;
  }

  .video-position {
    padding: 0px 0px !important;
  }

  .two-logo {
    position: absolute;
    width: 100%;
    top: 8%;
  }

  .dis-hide {
    display: none !important;
  }

  .hamburger {
    display: none;
  }

  .hamburger button {
    background: #00000000;
    color: #152349;
    border: 0px;
    font-size: 30px;
    position: absolute;
    right: 15px;
    top: 20px;
  }

  .close-menu {
    display: none !important;
  }

  .social-media {
    position: absolute;
    margin-top: 71px;
  }

  /*----------------Service Box-------------------*/

  .box-location {
    padding: 20px 25px;
    box-shadow: 5px 5px 5px #dedede;
    border: 1px solid #eeeeee;
    margin: 30px 0px;
    background-color: #ffffff;
  }

  .box-center {
    text-align: center;
    border-right: 1px solid #dedede;
  }

  .box-image {
    width: 225px;
  }

  .f-28 {
    font-size: 28px;
    border-bottom: 1px solid #dedede;
    padding-bottom: 8px;
  }

  .icon-serve img {
    width: 80px;
  }

  /*----------------Service Box-------------------*/
  @media screen and (min-width: 937px) and (max-width: 1000px){
    #navArea>ul {
    position: absolute;
    background: #152349;
    width: 100%;
    display: block;
    padding-left: 0px;
    left: -100%;
    transition: all 0.5s;
    height: 900px;
  }

  #navArea>ul li ul {
    padding-left: 0px;
  }

  #navArea ul li {
    display: block;
    float: none !important;
  }

  #navArea ul li>ul {
    position: relative;
    width: 100% !important;
    margin-left: 0px !important;
  }

  #navArea ul.subMenu li a {
    width: 100%;
    padding: 1rem 1rem;
    border-bottom: 1px solid #dedede;

    color: #000000 !important;
  }

  #navArea.is-sticky>ul>li>a {
    color: #ffffff !important;
  }

  #navArea .logo img {
    width: 7%;
    height: 42px;
    position: absolute;
    left: 20px;
  }

  .two-logo {
    position: relative;
    width: 100%;
    top: 0;
  }

  .section-title p {
    font-size: 1.8rem !important;
  }

  section {
    padding: 15px 0 !important;
  }

  #navArea.is-sticky .logo img {
    width: 10%;
    height: 65px;
  }

  #navArea.is-sticky {
    height: 90px;
  }

  .hamburger {
    display: block;
  }

  .foo-book {
    position: relative;
    width: 100% !important;

  }

  .flip-card {
    width: 100%;
  }

  .social-media {
    position: relative;
    margin-top: 15px;
  }

  .close-menu {
    display: block !important;
  }

  .close-menu button {
    position: relative;
    right: 0;
    width: 100%;
    text-align: right;
    background: #0000;
    border: 0px;
    color: #ffffff;
    padding: 10px 15px 0px;
    font-size: 20px;
  }

  .text-primarys {
    padding: 15px 0px !important;
  }
  }

  <blade media|%20screen%20and%20(min-width%3A%20481px)%20and%20(max-width%3A%20936px)%20%7B%0D>.border-left {
    border: 0px;
  }

  .f-36 {
    font-size: 20px;
  }

  .tabcontent {
    height: 320px
  }

  #navArea>ul {
    position: absolute;
    background: #152349;
    width: 100%;
    display: block;
    padding-left: 0px;
    left: -100%;
    transition: all 0.5s;
    height: 900px;
  }

  #navArea>ul li ul {
    padding-left: 0px;
  }

  #navArea ul li {
    display: block;
    float: none !important;
  }

  #navArea ul li>ul {
    position: relative;
    width: 100% !important;
    margin-left: 0px !important;
  }

  #navArea ul.subMenu li a {
    width: 100%;
    padding: 1rem 1rem;
    border-bottom: 1px solid #dedede;

    color: #000000 !important;
  }

  #navArea.is-sticky>ul>li>a {
    color: #ffffff !important;
  }

  #navArea .logo img {
    width: 7%;
    height: 42px;
    position: absolute;
    left: 20px;
  }

  .two-logo {
    position: relative;
    width: 100%;
    top: 0;
  }

  .section-title p {
    font-size: 1.8rem !important;
  }

  section {
    padding: 15px 0 !important;
  }

  #navArea.is-sticky .logo img {
    width: 10%;
    height: 65px;
  }

  #navArea.is-sticky {
    height: 90px;
  }

  .hamburger {
    display: block;
  }

  .foo-book {
    position: relative;
    width: 100% !important;

  }

  .flip-card {
    width: 100%;
  }

  .social-media {
    position: relative;
    margin-top: 15px;
  }

  .close-menu {
    display: block !important;
  }

  .close-menu button {
    position: relative;
    right: 0;
    width: 100%;
    text-align: right;
    background: #0000;
    border: 0px;
    color: #ffffff;
    padding: 10px 15px 0px;
    font-size: 20px;
  }

  .text-primarys {
    padding: 15px 0px !important;
  }
  }

  <blade media|%20screen%20and%20(min-width%3A%20320px)%20and%20(max-width%3A%20480px)%20%7B%0D>.blacks-box {
    background: #000000de;
    position: fixed;
    top: 20px;
    width: 166px;
    z-index: 999999;
    left: 32%;
  }

  .box-icon {
    width: 45.9%;
    padding: 4px;
    float: left;

    margin-right: 12px;
    height: 130px;
    margin-bottom: 15px;
  }

  .icon-serve {
    padding-left: 15px;
  }

  #navArea {
    height: 90px;
  }

  .mr-top-136 {
    margin-top: 70px !important;
  }

  .f-36 {
    font-size: 20px;
  }

  .border-left {
    border: 0px;
  }

  .tabcontent {
    height: 320px
  }

  #navArea>ul {
    position: absolute;
    background: #152349;
    width: 100%;
    display: block;
    padding-left: 0px;
    left: -100%;
    transition: all 0.5s;
    height: 900px;
  }

  #navArea>ul li ul {
    padding-left: 0px;
  }

  #navArea ul li {
    display: block;
    float: none !important;
  }

  #navArea ul li>ul {
    position: relative;
    width: 100% !important;
    margin-left: 0px !important;
  }

  #navArea ul.subMenu li a {
    width: 100%;
    padding: 1rem 1rem;
    border-bottom: 1px solid #dedede;

    color: #000000 !important;
  }

  #navArea>ul>li>a {
    color: #ffffff !important;
  }

  #navArea.is-sticky>ul>li>a {
    color: #ffffff !important;
  }

  #navArea .logo img {
    width: 20%;
    height: 65px;
    position: absolute;
    left: 20px;
  }

  .two-logo {
    position: relative;
    width: 100%;
    top: 0;
  }

  .section-title p {
    font-size: 1.8rem !important;
  }

  section {
    padding: 15px 0 !important;
  }

  #navArea.is-sticky .logo img {
    width: 20%;
    height: 65px;
  }

  #navArea.is-sticky {
    height: 90px;
  }

  .hamburger {
    display: block;
  }

  .foo-book {
    position: relative;
    width: 100% !important;
    top: 0px;

    z-index: 9999;
  }

  .flip-card {
    width: 350px;
  }

  .social-media {
    position: relative;
    margin-top: 15px;
  }

  .close-menu {
    display: block !important;
  }

  .close-menu button {
    position: relative;
    right: 0;
    width: 100%;
    text-align: right;
    background: #0000;
    border: 0px;
    color: #ffffff;
    padding: 10px 15px 0px;
    font-size: 20px;
  }

  .text-primarys {
    padding: 15px 0px !important;
  }
  }

  .error {
    display: block;
  }
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src=https://www.googletagmanager.com/gtag/js?id=G-MLXLN4EQZ5></script>


<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }

  gtag('js', new Date());



  gtag('config', 'G-MLXLN4EQZ5');
</script>

<!-- <script  src=https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.17/build/js/intlTelInput.js></script> -->







<!--  -->
</head>

<body>

  <?php include('navigation.php'); ?>
  <!-- ======= Hero Section ======= -->

  <!-- End Hero -->
  <!--<video width="320" height="240" controls autoplay>-->
  <!--  <source src="Intro.mp4" type="video/mp4">-->

  <!--</video>-->
  <!--<section class="video-position">-->
  <!--   <img src="image/inter-header.jpg" alt="encalm" width="100%;"/>-->
  <!--</section>-->
  <!-----------------logo---------------------->
  <section class="two-logo">
    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <!--    <div class="section-title text-center">            
			   <?php if (!empty($this->session->flashdata('success'))) { ?>            
				<h3 class="btn btn-success"> <center><?= $this->session->flashdata('success') ?></center></h3> 
			  <?php } ?>
			   <?php if (!empty($this->session->flashdata('error'))) { ?>            
				<h3 class="btn btn-danger"> <center><?= $this->session->flashdata('error') ?></center></h3>         
			  <?php } ?>		  
					</div> -->

        </div>
        <div class="col-lg-2">
          <div class="blacks-box text-center" id="srol">
            <!--<p class="rate">Rates from $ 289.00</p>-->
            <!--<div class="ful">-->

            <!--  <div class="wid-100">-->
            <!--    <img src="image/logolounge.png" alt="atithya">-->
            <!--  </div>-->
            <!--  <div class="clear"></div>-->
            <!--</div>-->
            <button class="books" id="book_now">Book Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!------------------About Us----------------->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12  pt-lg-0 content color-black">
          <div class="section-title text-center">
            <!--<h2>About</h2>
            <p class="mr-top-136"><img src="<?= base_url() ?>assets/image/businesscentre.jpg" alt="Business Centre" title="Business Centre" style="max-width: 100%;"></p>-->
            <p class="mr-top-136"><img src="<?= base_url() ?>assets/image/encalm_transit.png"
                style="max-width: 90%; width: 200px;"></p><br /><br />
            <!--p class="my-5"><img src="<?= base_url() ?>assets/image/transit_header.jpg" style="max-width: 90%;"></p-->
          </div>
          <!--           <div class="row">-->
          <!--  <div class="col-lg-12">-->
          <!--    <div class="section-title text-center">-->
          <!--<h2>About</h2>-->
          <!--        <p>About Encalm Lounge</p>-->
          <!--      </div>-->
          <!--  </div>-->
          <!--</div>-->
          <h3 class="text-center">Your transit just got a whole lot better.</h3>
          <p class="text-center text-secondary mt-4">Welcome to Transit by Encalm where we redefine airport stays,
            offering a fusion of style,<br>

            convenience, and hospitality in every moment of your journey.</p>
          <p class="color-black">Located at Hyderabad&#39;s Rajiv Gandhi International Airport (RGIA) in Shamshabad,
            Transit by Encalm
            promises not just a place to rest but and experience to cherish. Our latest venture into airport
            hospitality offers unparalleled accessibility and comfort for travellers seeking a relaxing stay during
            their
            transit.</p>
          <p class="mt-3 mb-0">At Transit by Encalm, we offer:</p>
          <p class="color-black"><strong>Premier Accommodation:</strong> Choose from our curated selection of 70 rooms
            across various categories,
            each crafted to cater to the diverse needs of our guests. From Deluxe and Premier King Rooms to
            Executive Suites and specially abled accommodations, your comfort is our priority.</p>
          <p class="color-black"><strong>Encalm Spa:</strong> Our Encalm Spa awaits, featuring three therapy rooms
            dedicated to providing relaxation
            through tailored treatments, including Back, Neck &amp; Shoulder Massages and Foot Massages.</p>
          <p class="color-black"><strong>Enroute Café:</strong> With a capacity for 72 covers and operating 24 hours,
            our café tantalises your taste buds
            with a blend of Western, Indian, and Oriental cuisines, ensuring a delightful culinary journey throughout
            your stay, no matter the time of the day.</p>
          <p class="color-black"><strong>Impeccable In-Room Facilities:</strong> Whether it&#39;s the convenience of
            guest laundry, fitness centre access, or
            the comfort of walk-in showers, every amenity has been thoughtfully included in our rooms to make
            your stay effortless.</p>
          <!-- <p class="mt-3 mb-0 color-black">Here is the list of in-room facilities: (to be showcased as icons)</p>
            <ol>
                <li>Enroute Café- All-Day Dining Restaurant</li>
                <li>Encalm Spa</li>
                <li>Guest Laundry</li>
                <li>Gymnasium</li>
                <li>Iron and Ironing Board</li>
                <li>Concierge Desk</li>
                <li>Coffee Maker</li>
                <li>Wi-Fi</li>
                <li>Doctor on Call</li>
                <li>In-Room Dining (Available in suites)</li>
            </ol> -->
        </div>
      </div>
    </div>
  </section>
  <!----------------------About Us---------------------->
  <!----------------------Services----------------------------->
  <section class="pt-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- <div class="section-title text-center">
              <h2>Our</h2> 
              <p>Center Services</p>
            </div> -->
          <br />

        </div>

        <div class="icon-serve icon-serve2">
          <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/emergency-call.png"
              alt="Emergency Call">
            <p class="color-main text-center">Emergency Call</p>
          </div>
          <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/coffee-maker.png"
              alt="Coffee Maker">
            <p class="color-main text-center">Coffee Maker</p>
          </div>
          <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/laundry.png" alt="Laundry">
            <p class="color-main text-center">Laundry</p>
          </div>
          <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/ironing.png" alt="Ironing">
            <p class="color-main text-center">Ironing</p>
          </div>
          <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/Wi-Fi.png" alt="Wi-fi">
            <p class="color-main text-center">Wi-fi</p>
          </div>
          <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/dining_area.png" alt="spa">
            <p class="color-main text-center">Dining area</p>
          </div>
          <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/Spa.png" alt="spa">
            <p class="color-main text-center">Spa</p>
          </div>
          <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/dumbbell.png" alt="spa">
            <p class="color-main text-center">Dumbbell</p>
          </div>
          <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/Concierge-Services.png"
              alt="Concierge Services">
            <p class="color-main text-center">Concierge Services</p>
          </div>

        </div>

      </div>
      <!--------------------Services---------------------------->

      <!-------------------------------End Services------------------------------>
    </div>
  </section>
  <!-------------------Location-------------------------->
  <section class="mt-1 mb-5">
    <div class="container">
      <div class="row mb-3">
        <div class="col-md-12">
          <h5 class="color-main text-center f-36">Location and Accessibility:</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="">

            <h5 class="color-main text-center">Shamshabad</h5>
            <p class="text-center color-black mb-1"><i class="fa fa-map-marker" aria-hidden="true"></i> Level D Arrivals
              beside Café Nilofer, RGIA, Shamshabad</p>
            <p class="text-center color-black mt-1 mb-0">Distance from key locations:</p>
            <p class="text-center color-black mb-1"><strong>Charminar:</strong> 15 km (approx. 40 minutes)</p>
            <p class="text-center color-black mb-1"><strong>Secunderabad Railway Station:</strong> 35 km (approx. 1
              hour)</p>
            <p class="text-center color-black mb-1"><strong>Mahatma Gandhi Bus Stand:</strong> 25 km (approx. 45
              minutes)</p>
            <p class="text-center color-black mb-1"><i class="fa fa-envelope color-blue" aria-hidden="true"></i>
              reservations@transitbyencalm.com </p>
            <p class="text-center color-black mb-1"><i class="fa fa-phone color-blue" aria-hidden="true"></i> <a
                class="color-black" href="tel:+919289472139">+91 9289366950</a></p>
          </div>
        </div>
      </div>
      <!-- <p class="text-center">Whether you are in transit or seeking a comfortable stay at the airport, Transit by Encalm offers a range
of amenities and services to make your stay seamless and relaxing.</p> -->
    </div>
  </section>
  <!-------------------Booking Form-------------------------->
  <section class="mt-1 mb-5">
    <div class="container shadow bg-white p-5">
      <div class="row mb-3">
        <div class="col-md-12">
          <h5 class="color-main text-center f-36">Book Now</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 m-auto">
          <form id="bookform" name="" method="post" action="<?= base_url() ?>services/businesscentre/booking">
            <input type="hidden" name="bookingform" value="Booking">
            <input type="hidden" name="category" value="The Business Centre">
            <input type="hidden" name="name" id="name" value="">
            <div class="row">
              <div class="form-group col-md-6 mt-2">
                <label class="floating-label values mb-1 label2">Room Category</label>
                <select name="contact_name" id="contact_name"
                  class="form-control form-select custom-form custom-form2 shadow" required>
                  <option value="">DELUXE KING ROOM</option>
                  <option value="3">PREMIER KING ROOM</option>
                  <option value="6">PREMIER TWIN ROOM</option>
                  <option value="9">EXECUTIVE SUITE</option>
                  <option value="12">EXECUTIVE SUITE EXTRA BED</option>
                  <option value="15">SPECIALLY ABLEDROOM</option>
                </select>
              </div>
              <div class="form-group col-md-6 mt-2">
                <label class="floating-label values mb-1 label2">No. of Hours</label>
                <select name="no_of_hrs" id="no_of_hrs" class="form-control form-select custom-form custom-form2 shadow"
                  required>
                  <option value="">Select</option>
                  <option value="3">3 Hour</option>
                  <option value="6">6 Hours</option>
                  <option value="9">9 Hours</option>
                  <option value="24">1 Night</option>
                </select>
              </div>
              <div class="form-group col-md-6 mt-2">
                <label class="floating-label values mb-1 label2">Date of Visit</label>

                <div class="row w-150">
                  <div class="form-group col-md-6 mt-2 dtpicker">
                    <label class="floating-label values mb-1 label2">From</label>

                    <input type="text" class="form-control  custom-form custom-form2 shadow datepicker" id="from_date"
                      name="booking_from_date" placeholder="" data-gtm-form-interact-field-id="0" required>
                  </div>
                  <div class="form-group col-md-6 mt-2 dtpicker">
                    <label class="floating-label values mb-1 label2">To</label>
                    <input type="text" class="form-control custom-form custom-form2 shadow datepicker" id="to_date"
                      name="booking_to_date" placeholder="" data-gtm-form-interact-field-id="0" required>
                  </div>
                </div>
              </div>

              <div class="form-group col-md-6 mt-2">
                <label class="floating-label values mb-1 label2">No. of Guests</label>
                <div class="row w-150">

                  <div class="form-group col-md-4 mt-2">
                    <label class="floating-label values mb-1 label2">Adult</label>
                    <select name="adult" id="adult" class="form-control form-select shadow custom-form custom-form2"
                      required>
                      <option value="">Select</option>
                      <option value="1">1</option>
                      <option value="2">2</option>

                    </select>
                  </div>
                  <div class="form-group col-md-4 mt-2">
                    <label class="floating-label values mb-1 label2">Child</label>
                    <select name="child" id="child" class="form-control form-select shadow custom-form custom-form2">
                      <option value="">Select</option>
                      <option value="1">1</option>
                      <option value="2" id="child_option" style="display: none;">2</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4 mt-2">
                    <label class="floating-label values mb-1 label2">Infant</label>
                    <select name="infant" id="infant" class="form-control form-select shadow custom-form custom-form2">
                      <option value="">Select</option>
                      <option value="1">1</option>
                      <option value="2" id="infant_option" style="display: none;">2</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group col-md-6 mt-2">
                <label class="floating-label values mb-1 label2">First Name (Guest)</label>
                <input type="text" class="form-control shadow custom-form custom-form2" id="contact_first_name"
                  name="contact_first_name" placeholder="" data-gtm-form-interact-field-id="0" required>
              </div>
              <div class="form-group col-md-6 mt-2">
                <label class="floating-label values mb-1 label2">Last Name (Guest)</label>
                <input type="text" class="form-control shadow custom-form custom-form2" id="contact_last_name"
                  name="contact_last_name" placeholder="" data-gtm-form-interact-field-id="0" required>
              </div>
              <div class="form-group col-md-6 mt-2">
                <label class="floating-label values mb-1 label2">Passport No</label>
                <input type="text" class="form-select shadow custom-form custom-form2" id="passport" name="passport"
                  placeholder="" data-gtm-form-interact-field-id="0" required>
              </div>
              <div class="form-group col-md-2 mt-2">
                <label class="floating-label values mb-1 label2">Country Code</label>

                <select name="country" id="country-code"
                  class="form-control shadow form-select custom-form custom-form2">
                  <option data-countryCode="IN" value="91">India (+91)</option>
                  <option data-countryCode="US" value="1">UK (+44)</option>
                  <optgroup label="Other countries">
                    <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                    <option data-countryCode="AD" value="376">Andorra (+376)</option>
                    <option data-countryCode="AO" value="244">Angola (+244)</option>
                    <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                    <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                    <option data-countryCode="AR" value="54">Argentina (+54)</option>
                    <option data-countryCode="AM" value="374">Armenia (+374)</option>
                    <option data-countryCode="AW" value="297">Aruba (+297)</option>
                    <option data-countryCode="AU" value="61">Australia (+61)</option>
                    <option data-countryCode="AT" value="43">Austria (+43)</option>
                    <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                    <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                    <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                    <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                    <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                    <option data-countryCode="BY" value="375">Belarus (+375)</option>
                    <option data-countryCode="BE" value="32">Belgium (+32)</option>
                    <option data-countryCode="BZ" value="501">Belize (+501)</option>
                    <option data-countryCode="BJ" value="229">Benin (+229)</option>
                    <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                    <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                    <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                    <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                    <option data-countryCode="BW" value="267">Botswana (+267)</option>
                    <option data-countryCode="BR" value="55">Brazil (+55)</option>
                    <option data-countryCode="BN" value="673">Brunei (+673)</option>
                    <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                    <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                    <option data-countryCode="BI" value="257">Burundi (+257)</option>
                    <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                    <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                    <option data-countryCode="CA" value="1">Canada (+1)</option>
                    <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                    <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                    <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                    <option data-countryCode="CL" value="56">Chile (+56)</option>
                    <option data-countryCode="CN" value="86">China (+86)</option>
                    <option data-countryCode="CO" value="57">Colombia (+57)</option>
                    <option data-countryCode="KM" value="269">Comoros (+269)</option>
                    <option data-countryCode="CG" value="242">Congo (+242)</option>
                    <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                    <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                    <option data-countryCode="HR" value="385">Croatia (+385)</option>
                    <option data-countryCode="CU" value="53">Cuba (+53)</option>
                    <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                    <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                    <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                    <option data-countryCode="DK" value="45">Denmark (+45)</option>
                    <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                    <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                    <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                    <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                    <option data-countryCode="EG" value="20">Egypt (+20)</option>
                    <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                    <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                    <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                    <option data-countryCode="EE" value="372">Estonia (+372)</option>
                    <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                    <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                    <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                    <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                    <option data-countryCode="FI" value="358">Finland (+358)</option>
                    <option data-countryCode="FR" value="33">France (+33)</option>
                    <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                    <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                    <option data-countryCode="GA" value="241">Gabon (+241)</option>
                    <option data-countryCode="GM" value="220">Gambia (+220)</option>
                    <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                    <option data-countryCode="DE" value="49">Germany (+49)</option>
                    <option data-countryCode="GH" value="233">Ghana (+233)</option>
                    <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                    <option data-countryCode="GR" value="30">Greece (+30)</option>
                    <option data-countryCode="GL" value="299">Greenland (+299)</option>
                    <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                    <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                    <option data-countryCode="GU" value="671">Guam (+671)</option>
                    <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                    <option data-countryCode="GN" value="224">Guinea (+224)</option>
                    <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                    <option data-countryCode="GY" value="592">Guyana (+592)</option>
                    <option data-countryCode="HT" value="509">Haiti (+509)</option>
                    <option data-countryCode="HN" value="504">Honduras (+504)</option>
                    <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                    <option data-countryCode="HU" value="36">Hungary (+36)</option>
                    <option data-countryCode="IS" value="354">Iceland (+354)</option>
                    <option data-countryCode="IN" value="91">India (+91)</option>
                    <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                    <option data-countryCode="IR" value="98">Iran (+98)</option>
                    <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                    <option data-countryCode="IE" value="353">Ireland (+353)</option>
                    <option data-countryCode="IL" value="972">Israel (+972)</option>
                    <option data-countryCode="IT" value="39">Italy (+39)</option>
                    <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                    <option data-countryCode="JP" value="81">Japan (+81)</option>
                    <option data-countryCode="JO" value="962">Jordan (+962)</option>
                    <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                    <option data-countryCode="KE" value="254">Kenya (+254)</option>
                    <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                    <option data-countryCode="KP" value="850">Korea North (+850)</option>
                    <option data-countryCode="KR" value="82">Korea South (+82)</option>
                    <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                    <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                    <option data-countryCode="LA" value="856">Laos (+856)</option>
                    <option data-countryCode="LV" value="371">Latvia (+371)</option>
                    <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                    <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                    <option data-countryCode="LR" value="231">Liberia (+231)</option>
                    <option data-countryCode="LY" value="218">Libya (+218)</option>
                    <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                    <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                    <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                    <option data-countryCode="MO" value="853">Macao (+853)</option>
                    <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                    <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                    <option data-countryCode="MW" value="265">Malawi (+265)</option>
                    <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                    <option data-countryCode="MV" value="960">Maldives (+960)</option>
                    <option data-countryCode="ML" value="223">Mali (+223)</option>
                    <option data-countryCode="MT" value="356">Malta (+356)</option>
                    <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                    <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                    <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                    <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                    <option data-countryCode="MX" value="52">Mexico (+52)</option>
                    <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                    <option data-countryCode="MD" value="373">Moldova (+373)</option>
                    <option data-countryCode="MC" value="377">Monaco (+377)</option>
                    <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                    <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                    <option data-countryCode="MA" value="212">Morocco (+212)</option>
                    <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                    <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                    <option data-countryCode="NA" value="264">Namibia (+264)</option>
                    <option data-countryCode="NR" value="674">Nauru (+674)</option>
                    <option data-countryCode="NP" value="977">Nepal (+977)</option>
                    <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                    <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                    <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                    <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                    <option data-countryCode="NE" value="227">Niger (+227)</option>
                    <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                    <option data-countryCode="NU" value="683">Niue (+683)</option>
                    <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                    <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                    <option data-countryCode="NO" value="47">Norway (+47)</option>
                    <option data-countryCode="OM" value="968">Oman (+968)</option>
                    <option data-countryCode="PW" value="680">Palau (+680)</option>
                    <option data-countryCode="PA" value="507">Panama (+507)</option>
                    <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                    <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                    <option data-countryCode="PE" value="51">Peru (+51)</option>
                    <option data-countryCode="PH" value="63">Philippines (+63)</option>
                    <option data-countryCode="PL" value="48">Poland (+48)</option>
                    <option data-countryCode="PT" value="351">Portugal (+351)</option>
                    <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                    <option data-countryCode="QA" value="974">Qatar (+974)</option>
                    <option data-countryCode="RE" value="262">Reunion (+262)</option>
                    <option data-countryCode="RO" value="40">Romania (+40)</option>
                    <option data-countryCode="RU" value="7">Russia (+7)</option>
                    <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                    <option data-countryCode="SM" value="378">San Marino (+378)</option>
                    <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                    <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                    <option data-countryCode="SN" value="221">Senegal (+221)</option>
                    <option data-countryCode="CS" value="381">Serbia (+381)</option>
                    <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                    <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                    <option data-countryCode="SG" value="65">Singapore (+65)</option>
                    <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                    <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                    <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                    <option data-countryCode="SO" value="252">Somalia (+252)</option>
                    <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                    <option data-countryCode="ES" value="34">Spain (+34)</option>
                    <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                    <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                    <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                    <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                    <option data-countryCode="SD" value="249">Sudan (+249)</option>
                    <option data-countryCode="SR" value="597">Suriname (+597)</option>
                    <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                    <option data-countryCode="SE" value="46">Sweden (+46)</option>
                    <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                    <option data-countryCode="SI" value="963">Syria (+963)</option>
                    <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                    <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                    <option data-countryCode="TH" value="66">Thailand (+66)</option>
                    <option data-countryCode="TG" value="228">Togo (+228)</option>
                    <option data-countryCode="TO" value="676">Tonga (+676)</option>
                    <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                    <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                    <option data-countryCode="TR" value="90">Turkey (+90)</option>
                    <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                    <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                    <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                    <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                    <option data-countryCode="UG" value="256">Uganda (+256)</option>
                    <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                    <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                    <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                    <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                    <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                    <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                    <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                    <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                    <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                    <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                    <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                    <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                    <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                    <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                    <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                    <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                    <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                  </optgroup>
                </select>

              </div>
              <div class="form-group col-md-4 mt-2">
                <label class="floating-label values mb-1 label2">Contact Number</label>
                <input type="text" class="form-control shadow custom-form custom-form2 phone" id="mobile" name="mobile"
                  placeholder="" data-gtm-form-interact-field-id="0" required>



              </div>
              <div class="form-group col-md-6 mt-2">
                <label class="floating-label values mb-1 label2">Email ID</label>
                <input type="text" class="form-control shadow custom-form custom-form2" id="email_from"
                  name="email_from" placeholder="" data-gtm-form-interact-field-id="0" required>
              </div>



              <div class="form-group col-md-6 mt-2">
                <label class="floating-label values mb-1 label2">Country</label>
                <select name="infant" id="country" class="form-control shadow form-select custom-form custom-form2">
                  <option value="">Select</option>
                  <option value="1">India</option>
                  <option value="2">USA</option>
                </select>
              </div>
              <div class="form-group col-md-6 mt-2">
                <label class="floating-label values mb-1 label2">State</label>
                <select name="state" id="state" class="form-control form-select shadow custom-form custom-form2">
                  <option value="">Select</option>
                </select>
              </div>

              <div class="form-group col-md-6 mt-2">
                <label class="floating-label values mb-1 label2">City</label>
                <select name="city" id="city" class="form-control form-select shadow custom-form custom-form2">
                  <option value="">Select</option>
                </select>
              </div>
              <div class="form-group col-md-6 mt-2">
                <label class="floating-label values mb-1 label2">Pincode</label>
                <input type="text" class="form-control shadow custom-form custom-form2" id="email_from"
                  name="email_from" placeholder="" data-gtm-form-interact-field-id="0" required>
              </div>
              <div class="form-group col-md-6 mt-2">
                <label class="floating-label values mb-1 label2">Billing Address</label>
                <textarea rows="2" class="form-control shadow custom-form custom-form2" id="address" name="address"
                  placeholder="" data-gtm-form-interact-field-id="0" required></textarea>
              </div>
              <div class="form-group col-md-12">
                <br />
                <button type="submit" id="submitbookform" name="submit" class="submit-button btn btn-primary mt-2"> Book
                  Now</button>
              </div>

              <!-- <div class="form-group col-md-12">
                <p class="mt-3 mb-0 color-black"><b>Note:</b></p>
                <p class="mt-1 mb-0 color-black">*** The age group would be as follows:</p>
                <ul>
                  <li>Infant: Under 6 years: Comp</li>
                  <li>Child: 6-11 years: Child Rate at 30% of Adult Rate</li>
                  <li>Adult: 12 years and above</li>
                </ul>
                <p class="mt-3 mb-0 color-black">*** The maximum number of individuals in a room can be 2</p>
                <p class="mt-3 mb-0 color-black">*** Breakfast is included only in 1 night plan</p>
              </div> -->
              <div class="form-group col-md-12">
                <div class="col-md-12">
                  <h5 class="color-main text-center f-36">Terms and Conditions</h5>
                </div>
                <ul>
                  <li>We have a 24 hour check-in/ check-out time .</li>
                  <li>Transit by Encalm provides accommodation and additional lounge services for passengers
                    arriving/departing/transiting from Rajiv Gandhi International Airport, Hyderabad.</li>
                  <li>Accurate Card Details are mandatory, for confirmation of services.</li>
                  <li>Passengers can access the Transit lounge with their luggage after scanning procedures as per
                    airport security rules & regulations.</li>
                  <li>Guests can exit and re-enter the facility after check-in to the transit lounge. Valid passport /
                    ID proof with Lounge’s confirmation card is required.</li>
                  <li>For Foreign nationals a valid Indian Visa is required to access the transit lounge.</li>
                  <li>Maximum 1 child up to 11 years can stay with two adults when sharing existing bedding with
                    applicable tariff for infant and children.</li>
                  <li>Extra bedding for more than 3 total guests (adult+ child) upto 4 guests can be accommodated only
                    in Suite category room.</li>
                  <li>Breakfast is included in 1 night plan only.</li>
                  <li>Restricted & prohibited goods as per airport security norms will not be allowed in the transit
                    lounge.</li>
                  <li>All areas within the transit lounge have been identified as Non-smoking areas. If a smoking
                    violation occurs in the room and premises, the guest will be charged INR 5000/- per violation as a
                    sanitization fee.</li>
                  <li>All the guests checking-in are requested to produce a valid Govt. approved photo ID at check-in.
                    For Resident Indians: Driver’s License, Voters ID, Aadhaar Card or Passport (As per Govt.
                    regulations we do not accept PAN card as an ID proof) For Foreigners and Non-Resident Indians:
                    Passport & Visa/PIO Card/ OCI Card (Mandatory).</li>
                  <li>Pets are not allowed</li>
                  <li>Special requests, flight information, amendments, cancellation in reservations shall be directed
                    to our Reservations Office.</li>
                  <li>You can contact us on +91 9289366950 / XXXXXX, E-mail: reservations@transitbyencalm.com</li>
                  <p class="mt-3 mb-0 color-black"><b>Cancellation Policy/ Rescheduling Policy:</b></p>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Reschedule of Service</th>
                        <th>Charges</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>More than 24 hours prior to service time</td>
                        <td>No rescheduling charges (One time free)</td>
                      </tr>
                      <tr>
                        <td>Within 12- 24 hours to service time</td>
                        <td>INR 650 (AI) per booking</td>
                      </tr>
                      <tr>
                        <td>Within 0-12 hours of service time</td>
                        <td>100% of the booking amount</td>
                      </tr>


                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Cancellation of Service</th>
                        <th>Charges</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Less than 24 hours prior to the service time</td>
                        <td>100% of the Booking Amount</td>
                      </tr>
                      <tr>
                        <td>Between 24 to 48 hours prior to the service time</td>
                        <td>30% of the Booking Amount</td>
                      </tr>


                    </tbody>
                  </table>
                  <li>For the purpose of calculating cancellation charges, Booking Amount shall mean the total amount
                    (Including taxes) paid by the Agent.</li>
                  <li>Bank charges would be applicable for all cancellation requests received 48 hours prior to service
                    time.</li>
                  <li>Encalm shall endeavor to process a refund if applicable, within 15 days from the date of
                    cancellation and receipt of bank/credit card details</li>
                  <li>All rescheduling requests need to be received at least 12 hours prior to service time for it to be
                    considered as a valid request. All rescheduling requests shall be subject to availability.</li>
                  <li>No refund will be made in case of the following</li>
                </ul>

                <p class="mt-3 mb-0 color-black">-Wrong information about travel details of Guest(s) during the Booking
                  Process.</p>
                <p class="mt-3 mb-0 color-black">-No Shows- If the passenger does not arrive at the meeting point within
                  30 minutes from the agreed arrival time.</p>
                <p class="mt-3 mb-0 color-black">-In case of any misconduct or any unlawful or prohibited activity by
                  the Agent/Guest(s);</p>
                <p class="mt-3 mb-0 color-black">-In case Agent has availed promotions offer or discounts or cash back
                  etc. during booking.</p>
              </div>


              <div class="clearfix"></div>
              <div class="col-md-12">
                <p class="mt-3 mb-0 color-black"><b>Kindly incorporate the below age group under Adult, Child,
                    Infant</b></p>
                <p class="mt-3 mb-0 color-black">The age group would be as follows:</p>
                <p class="mt-3 mb-0 color-black">Infant: Under 6 years : <span>Comp</span></p>
                <p class="mt-3 mb-0 color-black">Child: 6-11 years : <span>Child Rate at 30% of Adult Rate</span></p>
                <p class="mt-3 mb-0 color-black">Adult: <span> 11 years and above</span> </p>
              </div>
              <div class="clearfix"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!------------------------Services--------------------------->
  <div id="fb-root"></div>



  <!-- Your Chat plugin code -->

  <div id="fb-customer-chat" class="fb-customerchat">

  </div>
  <?php include('footer.php'); ?>
  <script type="text/javascript">
    $(window).scroll(function () {
      var sticky = $('#book_now'),
        scroll = $(window).scrollTop();

      if (scroll >= 50) {
        sticky.addClass('foo-book');
      } else {
        sticky.removeClass('foo-book');
      }
    });
  </script>
  <script type="text/javascript">
    $(".subMenu").hide();

    // Shows SubMenu when it's parent is hovered.
    $(".subMenu").parent("li").hover(function () {
      $(this).find(">.subMenu").not(':animated').slideDown(300);
      $(this).toggleClass("active ");
    });

    // Hides SubMenu when mouse leaves the zone.
    $(".subMenu").parent("li").mouseleave(function () {
      $(this).find(">.subMenu").slideUp(150);
    });

    // Prevents scroll to top when clicking on <a href="#"> 
    $("a[href=\"#\"]").click(function () {
      return false;
    });
  </script>
  <script type="text/javascript">
    $('.brand-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
  </script>
  <script type="text/javascript">
    $('.brand-carousel-1').owlCarousel({
      loop: true,
      margin: 10,
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>
  <script type="text/javascript">
    jQuery("#submit").click(function () {
      var name = jQuery.trim(jQuery("#name").val());
      var email = jQuery.trim(jQuery("#email").val());
      var subject = jQuery.trim(jQuery("#subject").val());
      var message = jQuery.trim(jQuery("#message").val());
      var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

      var error = false;
      if (name == "") {
        jQuery("#nameLabel").show();
        error = true;
      }
      if (subject == "") {
        jQuery("#subjectLabel").show();
        error = true;
      }
      if (email == "") {
        jQuery("#emailLabel").show();
        error = true;
      } else if (!regEmail.test(email)) {
        jQuery("#emailLabel").show();
        jQuery("#emailLabel").html("Email must be valid.");
        error = true;
        return false;
      }

      if (error == true) return false;

      var Data = "&frmname=" + name + "&frmemail=" + email + "&frmsubject=" + subject + "&frmmessage=" + message;

      jQuery.ajax({
        type: "POST",
        url: "mail.php",
        data: Data,
        dataType: 'json',
        cache: false,
        success: function (msg) {
          if (msg == "Invalid verification code.") {
            jQuery("#msgSuccessNew").show();
            jQuery("#msgSuccessNew").html("Sorry Mail server is busy. Please send after some time.");
          } else {
            jQuery("#name").val("");
            jQuery("#email").val("");
            jQuery("#subject").val("");
            jQuery("#message").val("");
            jQuery("#msgSuccessNew").show();
            jQuery("#msgSuccessNew").html(msg.masge);
          }
        }
      });
      return false;
    });

    function checkValue(th, id) {
      if (th != "") {
        jQuery("#" + id).hide();
      }
    }
  </script>
  <script type="text/javascript">
    $(document).ready(function () {
      $('#menu').click(function () {
        $('#navArea ul').css("left", "0");
      });
      $('#close-nav > i').click(function () {
        $('#navArea ul').css("left", "-100%");
      });
    });
  </script>
  <script>
    var chatbox = document.getElementById('fb-customer-chat');

    chatbox.setAttribute("page_id", "112085217948507");

    chatbox.setAttribute("attribution", "biz_inbox");
  </script>



  <!-- Your SDK code -->

  <script>
    window.fbAsyncInit = function () {

      FB.init({

        xfbml: true,

        version: 'v13.0'

      });

    };



    (function (d, s, id) {

      var js, fjs = d.getElementsByTagName(s)[0];

      if (d.getElementById(id)) return;

      js = d.createElement(s);
      js.id = id;

      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';

      fjs.parentNode.insertBefore(js, fjs);

    }(document, 'script', 'facebook-jssdk'));
  </script>

  <script>
    $(document).ready(function () {
      $('#book_now').click(function () {
        $('html, body').animate({
          scrollTop: ($("#bookform").offset().top - 200)
        }, 100);
      });
      $('#bookform').validate({
        rules: {
          mobile: {
            required: true,
            number: true
          },
          email_from: {
            required: true,
            email: true
          }
        },
        messages: {
          mobile: {
            required: "Please Enter Your Mobile Number",
            number: "Please enter valid mobile number"
          }
        }
      });
      $('#contact_name, #product, #no_of_hrs').change(function () {
        console.log('hello');
        $('#name').val($('#product').val() + ' (' + $('#no_of_hrs').val() + ' Hrs) ' + $('#contact_name')
      .val());
      });
      $('#contact_name').change(function () {
        console.log('hello');
        var value = $('#contact_name').val();
        var child_option = document.getElementById("child_option");
        var infant_option = document.getElementById("infant_option");
        if (value == 12) {
          child_option.style.display = "block";
          infant_option.style.display = "block";
        }else{
          child_option.style.display = "none";
          infant_option.style.display = "none";
        }
        // $('#name').val($('#product').val() +'(' + $('#no_of_hrs').val() +'Hrs)'+ $('#contact_name').val());
      });
      $('.datepicker').datetimepicker({
        controlType: 'select',
        dateFormat: 'dd-mm-yy',
        oneLine: true,
        timeFormat: 'hh:mm tt'
      });
    });
  </script>

  <script>
    $(document).ready(function () {
      var countryData = {
        1: {
          states: ["Maharashtra", "Karnataka", "Delhi", "Uttar Pradesh", "Madhya Pradesh"],
          cities: {
            Maharashtra: ["Mumbai"],
            Karnataka: ["Bangalore"],
            Delhi: ["Delhi"],
            "Uttar Pradesh": ["Lucknow"],
            "Madhya Pradesh": ["Indore"]
          }
        },
        2: {
          states: ["Georgia", "Alaska", "California"],
          cities: {
            Georgia: ["Atlanta"],
            Alaska: ["Tallahassee"],
            California: ["Sacramento"]
          }
        }
      };

      function updateStates(countryId) {
        var states = countryData[countryId].states;
        var stateDropdown = $("#state");

        stateDropdown.empty().append('<option value="">Select</option>');

        $.each(states, function (index, state) {
          stateDropdown.append('<option value="' + state + '">' + state + '</option>');
        });
      }

      function updateCities(countryId, state) {
        var cities = countryData[countryId].cities[state];
        var cityDropdown = $("#city");

        cityDropdown.empty().append('<option value="">Select</option>');

        $.each(cities, function (index, city) {
          cityDropdown.append('<option value="' + city + '">' + city + '</option>');
        });
      }

      $("#country").on("change", function () {
        var selectedCountry = $(this).val();
        updateStates(selectedCountry);
      });

      $("#state").on("change", function () {
        var selectedCountry = $("#country").val();
        var selectedState = $(this).val();
        updateCities(selectedCountry, selectedState);
      });
    });
  </script>


  <script>
    $(document).ready(function () {
      $(".datepicker").datetimepicker({
        dateFormat: 'yy-mm-dd',
        oneLine: true,
        timeFormat: 'hh:mm tt',
        onSelect: function (dateText) {
          updateToTime();
        }
      });

      $("#from_date").change(function () {
        updateToTime();
      });
      $("#no_of_hrs").change(function () {
        updateToTime();
      });
    });

    function updateToTime() {
      // Get selected hours
      var selectedHours = parseInt($("#no_of_hrs").val());

      // Get selected date
      var selectedDate = $("#from_date").datepicker('getDate');

      if (selectedDate !== null && !isNaN(selectedHours)) {
        // Calculate to date and time
        var toDate = new Date(selectedDate.getTime() + selectedHours * 60 * 60 * 1000);

        // Format to date and time as a string
        var toDateTimeString = toDate.getFullYear() + '-' + (toDate.getMonth() + 1) + '-' + toDate.getDate() +
          ' ' + ('0' + toDate.getHours()).slice(-2) + ':' + ('0' + toDate.getMinutes()).slice(-2);

        // Update the to date and time input
        $("#to_date").val(toDateTimeString);
      }
    }
  </script>