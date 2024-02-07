<?php include('header.php'); ?>
<style>
  @font-face {
    font-family: Brandon;
    src: url(<?= base_url() ?>assets/fonts/Brandon_reg.otf);

  }

  @font-face {
    font-family: Brandon-bld;
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
    right: 16%;
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

  .box-icon {
    width: 14.5%;
    padding: 4px;
    float: left;

    margin-right: 12px;
    height: 130px;
  }

  .box-icon p {
    margin-bottom: 0px !important;
    font-size: 14px;
  }

  /*-------------------------Location----------------------------------*/
  .color-main {
    color: #cda45e;
  }

  .color-black {
    color: #000000;
  }

  .f-28 {
    font-size: 28px;
    border-bottom: 1px solid #dedede;
    padding-bottom: 8px;
  }

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
    width: 295px;
  }

  .bor-bot {
    padding-top: 8px;
  }

  .icon-serve img {
    width: 100%;
  }

  .icon-serve {
    position: relative;
    bottom: 0px;
  }

  .f-22 {
    font-size: 20px;
  }

  .color-blue {
    color: #152248 !important;
  }

  /*----------------------End Location--------------------------------*/
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
    width: 100%;
    background: #000000de;
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
  }

  #hero {
    background-image: url('<?= base_url() ?>assets/image/header.jpg') !important;
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

  .header-heading-title {
    position: absolute;
    width: 100%;
    top: 150px;
    background: #0000008c;
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
    top: 20%;
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

  .mails a {
    color: #152349 !important;
  }

  @media screen and (min-width: 937px) and (max-width: 1000px) {
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

  @media screen and (min-width: 481px) and (max-width: 936px) {
    .box-location h3 {
      margin-top: 15px;
      text-align: center;
    }

    .box-location h5 {
      text-align: center;
    }

    .box-center {
      border-right: 0px;
    }

    .icon-serve img {
      width: 65px;
    }

    .icon-serve {
      bottom: 0;
      text-align: center;
    }

    .f-22 {
      font-size: 18px;
    }

    .box-image {
      width: 160px;
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

  @media screen and (min-width: 320px) and (max-width: 480px) {
    #navArea>ul>li>a {
      color: #ffffff !important;
    }

    .box-icon {
      width: 28.6%;
      padding: 4px;
      float: left;

      margin-right: 12px;
      height: 130px;
      margin-bottom: 15px;
    }

    .video-position {
      margin-top: 85px;
    }

    #navArea {
      height: 90px;
    }

    .box-image {
      width: 160px;
    }

    .box-location h3 {
      margin-top: 15px;
      text-align: center;
    }

    .box-location h5 {
      text-align: center;
    }

    .box-center {
      border-right: 0px;
    }

    .icon-serve img {
      width: 65px;
    }

    .icon-serve {
      bottom: 0;
      text-align: center;
    }

    .f-22 {
      font-size: 18px;
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
      width: 40% !important;
      top: 21px;
      right: 29%;
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

    .mails a {
      color: #152349 !important;
      display: block;
      text-align: center;
    }
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
</head>

<body>

  <?php include('navigation.php'); ?>
  <!-- ======= Hero Section ======= -->

  <!-- End Hero -->
  <!--<video width="320" height="240" controls autoplay>-->
  <!--  <source src="Intro.mp4" type="video/mp4">-->

  <!--</video>-->
  <section class="video-position">
    <img src="<?= base_url() ?>assets/image/inter-header.jpg" alt="Atithya Meet and Greet, Atithya Welcome and Assist, Meet and Greet at airport, Airport Meet and Greet services" width="100%;" />
  </section>

  <!------------------About Us----------------->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <!--<h2>About</h2>-->
            <p>Delhi</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 pt-4 pt-lg-0 content">

          <div class="box-location">
            <div class="row">
              <div class="col-lg-4">
                <div class="box-center">
                  <img class="box-image" src="<?= base_url() ?>assets/image/logo/encalm-lounge.jpg" alt="Encalm Lounge, Atithya Meet and Greet, Meet and Greet services, Airport Meet and Greet Services" />
                </div>
              </div>
              <div class="col-lg-8">
                <h3 class="color-main f-28">Encalm Lounge</h3>
                <h5 class="color-blue f-22"><i class="fa fa-map-marker" aria-hidden="true"></i> Mezzanine level, domestic departures, Terminal 3, IGI Airport, New Delhi 110037</h5>
                <p class="color-black mails"><a href="mailto:d49.del@encalm.com"><i class="fa fa-envelope color-blue" aria-hidden="true"></i> d49.del@encalm.com</a> <a href="tel:+919319595864"><i class="fa fa-phone color-blue" aria-hidden="true"></i> +91 9319595864</a></p>

                <h5 class="color-blue f-22 bor-bot">Services Available</h5>
                <div class="icon-serve">
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Bar.png" alt="Encalm" />
                    <p class="color-main text-center">Bar</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/F&B.png" alt="Encalm" />
                    <p class="color-main text-center">F&B</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Flight-Information.png" alt="Encalm" />
                    <p class="color-main text-center">Flight Information</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Lounge-Bay.png" alt="Encalm" />
                    <p class="color-main text-center">Lounge Bay</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Newspaper-and-Magazine.png" alt="Encalm" />
                    <p class="color-main text-center">Newspaper And Magazine</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Wi-Fi.png" alt="Encalm" />
                    <p class="color-main text-center">Wi Fi</p>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="box-location">
            <div class="row">
              <div class="col-lg-4">
                <div class="box-center">
                  <img class="box-image" src="<?= base_url() ?>assets/image/logo/encalm-lounge.jpg" alt="Encalm Lounge, Atithya Meet and Greet, Meet and Greet services, Airport Meet and Greet Services" />
                </div>
              </div>
              <div class="col-lg-8">
                <h3 class="color-main f-28">Encalm Lounge</h3>
                <h5 class="color-blue f-22"><i class="fa fa-map-marker" aria-hidden="true"></i> 2nd floor, SHA Area, Domestic Departures, Near Food Court, Terminal 2, IGI Delhi Airport, New Delhi- 110037</h5>
                <p class="color-black mails"><a href="mailto:del.t2dom@encalm.com"><i class="fa fa-envelope color-blue" aria-hidden="true"></i> del.t2dom@encalm.com</a> <a href="tel:+911149630619"><i class="fa fa-phone color-blue" aria-hidden="true"></i> +91 1149630619</a></p>

                <h5 class="color-blue f-22 bor-bot">Services Available</h5>
                <div class="icon-serve">
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Bar.png" alt="Encalm" />
                    <p class="color-main text-center">Bar</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/F&B.png" alt="Encalm" />
                    <p class="color-main text-center">F&B</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Flight-Information.png" alt="Encalm" />
                    <p class="color-main text-center">Flight Information</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Lounge-Bay.png" alt="Encalm" />
                    <p class="color-main text-center">Lounge Bay</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Newspaper-and-Magazine.png" alt="Encalm" />
                    <p class="color-main text-center">Newspaper And Magazine</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Wi-Fi.png" alt="Encalm" />
                    <p class="color-main text-center">Wi Fi</p>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="box-location">
            <div class="row">
              <div class="col-lg-4">
                <div class="box-center">
                  <img class="box-image" src="<?= base_url() ?>assets/image/logo/encalm-lounge.jpg" alt="Encalm Lounge, Atithya Meet and Greet, Meet and Greet services, Airport Meet and Greet Services" />
                </div>
              </div>
              <div class="col-lg-8">
                <h3 class="color-main f-28">Encalm Lounge</h3>
                <h5 class="color-blue f-22"><i class="fa fa-map-marker" aria-hidden="true"></i> Mezzanine level, T1D Departures, IGI Airport, New Delhi -110037</h5>
                <p class="color-black mails"><a href="mailto:t1d.lounge@encalm.com"><i class="fa fa-envelope color-blue" aria-hidden="true"></i> t1d.lounge@encalm.com</a> <a href="tel:+911149654282"><i class="fa fa-phone color-blue" aria-hidden="true"></i> +91 1149654232</a></p>

                <h5 class="color-blue f-22 bor-bot">Services Available</h5>
                <div class="icon-serve">
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Bar.png" alt="Encalm" />
                    <p class="color-main text-center">Bar</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/F&B.png" alt="Encalm" />
                    <p class="color-main text-center">F&B</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Flight-Information.png" alt="Encalm" />
                    <p class="color-main text-center">Flight Information</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Lounge-Bay.png" alt="Encalm" />
                    <p class="color-main text-center">Lounge Bay</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Newspaper-and-Magazine.png" alt="Encalm" />
                    <p class="color-main text-center">Newspaper And Magazine</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Wi-Fi.png" alt="Encalm" />
                    <p class="color-main text-center">Wi Fi</p>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="box-location">
            <div class="row">
              <div class="col-lg-4">
                <div class="box-center">
                  <img class="box-image" src="<?= base_url() ?>assets/image/logo/encalm-lounge.jpg" alt="Encalm Lounge, Atithya Meet and Greet, Meet and Greet services, Airport Meet and Greet Services" />
                </div>
              </div>
              <div class="col-lg-8">
                <h3 class="color-main f-28">Encalm Lounge</h3>
                <h5 class="color-blue f-22"><i class="fa fa-map-marker" aria-hidden="true"></i> Mezzanine level, T3 International Departures, IGI Airport, New Delhi- 110037</h5>
                <p class="color-black mails"><a href="mailto:t1d.lounge@encalm.com"><i class="fa fa-envelope color-blue" aria-hidden="true"></i> inl5-6.del@encalm.com</a> <a href="tel:+911149654282"><i class="fa fa-phone color-blue" aria-hidden="true"></i> +91 1149633207</a></p>

                <h5 class="color-blue f-22 bor-bot">Services Available</h5>
                <div class="icon-serve">
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Bar.png" alt="Encalm" />
                    <p class="color-main text-center">Bar</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/F&B.png" alt="Encalm" />
                    <p class="color-main text-center">F&B</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Flight-Information.png" alt="Encalm" />
                    <p class="color-main text-center">Flight Information</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Lounge-Bay.png" alt="Encalm" />
                    <p class="color-main text-center">Lounge Bay</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Newspaper-and-Magazine.png" alt="Encalm" />
                    <p class="color-main text-center">Newspaper And Magazine</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Wi-Fi.png" alt="Encalm" />
                    <p class="color-main text-center">Wi Fi</p>
                  </div>

                </div>
              </div>

            </div>
          </div>

          <div class="box-location">
            <div class="row">
              <div class="col-lg-4">
                <div class="box-center">
                  <img class="box-image" src="<?= base_url() ?>assets/image/logo/atithya-location.jpg" alt="Atithya services, Welcome and Assist, Meet and Greet, Delhi Airport" />
                </div>
              </div>
              <div class="col-lg-8">
                <h3 class="color-main f-28">Atithya</h3>
                <h5 class="color-blue f-22"><i class="fa fa-map-marker" aria-hidden="true"></i> IGI Airport, New Delhi</h5>

                <p class="color-black mails"><a href="mailto:guest.services@encalm.com"><i class="fa fa-envelope color-blue" aria-hidden="true"></i> guest.services@encalm.com</a> <a href="tel:+919289366950"><i class="fa fa-phone color-blue" aria-hidden="true"></i> +91 9289366950</a></p>

                <h5 class="color-blue f-22 bor-bot">Services Available</h5>
                <div class="icon-serve">
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/atithya/Airport-assistance.png" alt="Encalm" />
                    <p class="color-main text-center">Airport Assistance</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/atithya/Buggy.png" alt="Encalm" />
                    <p class="color-main text-center">Buggy</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/atithya/Concierge-Services.png" alt="Encalm" />
                    <p class="color-main text-center">Concierge Services</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/atithya/Greeting-services.png" alt="Encalm" />
                    <p class="color-main text-center">Greeting Services</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/atithya/Porter.png" alt="Encalm" />
                    <p class="color-main text-center">Porter</p>
                  </div>
                  <!--<div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/atithya/Wheel-Chair.png" alt="Encalm"/> <p class="color-main text-center">Wheel Chair</p></div>-->

                </div>
              </div>
            </div>
          </div>

          <div class="box-location">
            <div class="row">
              <div class="col-lg-4">
                <div class="box-center">
                  <img class="box-image" src="<?= base_url() ?>assets/image/logo/prive_location_banner.jpg" alt="Encalm Privé" />
                </div>
              </div>
              <div class="col-lg-8">
                <h3 class="color-main f-28">Encalm Privé</h3>
                <h5 class="color-blue f-22"><i class="fa fa-map-marker" aria-hidden="true"></i> Level 3, International Departures, Terminal 3, IGI Airport, New Delhi 110037</h5>

                <p class="color-black mails"><a href="mailto:guest.services@encalm.com"><i class="fa fa-envelope color-blue" aria-hidden="true"></i> prive.del@encalm.com</a> <a href="tel:+917428633004"><i class="fa fa-phone color-blue" aria-hidden="true"></i> +91 7428633004</a></p>

                <h5 class="color-blue f-22 bor-bot">Services Available</h5>
                <div class="icon-serve">
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Bar.png" alt="Bar at lounge" />
                    <p class="color-main text-center">Bar</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/F&amp;B.png" alt="F&B" />
                    <p class="color-main text-center">F&B</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Flight-Information.png" alt="Flight Information" />
                    <p class="color-main text-center">Flight Information</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Lounge-Bay.png" alt="Lounge Bay" />
                    <p class="color-main text-center">Lounge Bay</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Newspaper-and-Magazine.png" alt="Newspaper And Magazine" />
                    <p class="color-main text-center">Newspaper And Magazine</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/louge/Wi-Fi.png" alt="Wi Fi">
                    <p class="color-main text-center">Wi Fi</p>
                  </div>

                  <!-- <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/live_cooking.png" alt="Live Cooking">
                    <p class="color-main text-center">Live Cooking</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/library.png" alt="Business Centre">
                    <p class="color-main text-center">Business Centre</p>
                  </div>
                  <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/library.png" alt="Library">
                    <p class="color-main text-center">Library</p>
                  </div> -->
                  <!--<div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/atithya/Wheel-Chair.png" alt="Encalm"/> <p class="color-main text-center">Wheel Chair</p></div>-->

                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-1"></div>
      </div>
    </div>
  </section>
  <!----------------------About Us---------------------->
  <!----------------------Services----------------------------->



  <!------------------------Services--------------------------->
  <!------------------------Services--------------------------->
  <?php include('footer.php'); ?>
  <script type="text/javascript">
    window.addEventListener("scroll", function() {
      let navArea = document.getElementById("navArea");

      if (window.pageYOffset > 200) {
        navArea.classList.add("is-sticky");
        document.getElementById("white_logo").classList.add("dis-hide");
        document.getElementById("blue_logo").classList.remove("dis-hide");
        document.getElementById("book_now").classList.add("foo-book");
        document.getElementById("menu").style.color = "#000000";
      } else {
        navArea.classList.remove("is-sticky");
        document.getElementById("white_logo").classList.remove("dis-hide");
        document.getElementById("blue_logo").classList.add("dis-hide");
        document.getElementById("book_now").classList.remove("foo-book");
        document.getElementById("menu").style.color = "#ffffff";
      }
    });
  </script>
  <script type="text/javascript">
    $(".subMenu").hide();

    // Shows SubMenu when it's parent is hovered.
    $(".subMenu").parent("li").hover(function() {
      $(this).find(">.subMenu").not(':animated').slideDown(300);
      $(this).toggleClass("active ");
    });

    // Hides SubMenu when mouse leaves the zone.
    $(".subMenu").parent("li").mouseleave(function() {
      $(this).find(">.subMenu").slideUp(150);
    });

    // Prevents scroll to top when clicking on <a href="#"> 
    $("a[href=\"#\"]").click(function() {
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
          items: 5
        }
      }
    })
  </script>
  <script type="text/javascript">
    jQuery("#submit").click(function() {
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
        success: function(msg) {
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
    $(document).ready(function() {
      $('#menu').click(function() {
        $('#navArea ul').css("left", "0");
      });
      $('#close-nav > i').click(function() {
        $('#navArea ul').css("left", "-100%");
      });
    });
  </script>
</body>

</html>