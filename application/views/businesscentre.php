<?php
// $meta_title = 'Encalm Lounge at New Delhi Airport | Airport Lounge Access';
// $meta_description = 'At Encalm lounge, you can relax, eat or catch up with work while you wait for your flight.';
// $meta_website_description = 'Keeping in mind our guests\' comfort, Encalm has a dedicated airport lounge for travellers to relax. Crafted with expert precision, the Encalm lounge provides relief from the continuous bustle of the airport. Sit back and bask in luxury at the Encalm lounge.';
include('header.php'); ?>
 
<style>
  @font-face {
  font-family:Brandon;
  src: url(<?=base_url()?>assets/fonts/Brandon_reg.otf); 
  
}
  @font-face {
  font-family:Brandon-bld;
  src: url(<?=base_url()?>assets/fonts/Brandon_bld.otf); 
  
}
/*@font-face{font-family:Gill-Sans-Nova-Medium;*/
/*    src:url(/fonts/Monotype_-_Gill_Sans_Nova_Medium.woff);*/
/*}*/
body{font-family:Brandon!important; font-size: 18px; height:auto!important;}
h1, h2, h3, h4, h5, h6, p{font-family:Brandon!important;}
  .section-title p{font-family:Brandon!important; font-weight:700!important; font-size: 2.5rem!important;}
  .site-navigation a{font-weight: 700!important; font-size:18px;}
  .social-icon{font-size: 32px; padding:0px 5px;}
  .bg-blue{background-image:url("<?=base_url()?>assets/image/footer.jpg"); background-repeat: no-repeat; background-size: cover; background-position: center; padding:60px 0px;}
  .bg-main-news{color:#ffffff;}
  hr{color:#ffffff!important;}
  .back-to-top:hover {
    background: #ffffff00!important;}
  .text-primarys{color:#cda45e!important; font-family:Brandon!important; font-weight:400!important;}
  footer h6{font-family:Brandon!important;}
  footer{font-family:Brandon!important;}
  .foo-book{position: fixed;
    width: 12%!important;
    top: 96px;
    
    z-index: 9999;}
  .footer-info h6{font-family:Brandon!important; font-weight:400!important;}
  .back-to-top{position: relative!important; right: 0!important; bottom:0!important; border:0px!important;}
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
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  }
.flip-card-back p{color:#ffffff!important;}
.flip-card-back h2{color:#152248!important; font-family:Brandon!important; font-weight:600!important;}
  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }

  .flip-card-front, .flip-card-back {
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
   padding:30px 20px;
  }
  .text-justify{text-align: justify;}
  section{padding: 30px 0!important;}
  .section-title{padding-bottom: 10px!important;}
  .btn-main{width: 100%; background-color:#cda45e; border: solid 1px #cda45e; border-radius: 5px; padding: 7px 25px;}
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
  .txt-rgt{text-align: right;}
  .section-padding{
      padding:10px 0;
      }
      .brand-carousel {
      
      }
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

      .bg-greyer{background-color: #eeeeee;}
      .blacks-box{    background: #000000de;
    position: fixed;
    top: 133px;
    width: 236px;
    z-index: 9999; border-radius:10px;}
    .blacks-box img{width: 100%;}
    p.rate{background: #000000!important; padding: 8px; color:#ffffff!important; text-align: center;}
    .ful{padding:15px;}
    .ful .wid-50{width: 50%;
    text-align: center;
    float: left;
    padding: 18px;
    
    }
    .foots li{padding:3px 0px!important;}
    .books{background-color:#cda45e; width: 100%; border:0px; padding:8px 25px; text-align: center; color:#ffffff; font-size:20px; border-radius:10px;}
    #hero{background-image: url('image/header.jpg')!important;}
   /* .fixed{background: #ffffff!important;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 99999999;}*/
    /*.sticky{transition:all 0.5s ease-in;}*/
    .site-navbar-wrap{padding-top:20px;}
    /*header a{color:#000000!important;}*/
    /*.fixed .site-navbar-wrap{background-color:#ffffff; padding-top:10px;}*/
    
   
    .clear{clear:both;}
    .color-blue{color:#152248!important;}
    .team h6{font-size: 24px;}
    .team-social{text-align: center;}
    .team p{text-align: justify; text-align-last: center; padding:8px 15px; color:#000000; margin-bottom:0px!important;}
        .testi .color-yellow{
    color: #ffb100;
    font-size: 26px;
}
.testi h3{color: #162449!important;
    font-size: 36px!important;}
.testi strong{font-weight:700!important;}
.testi sup{font-size: 50px!important;
    top: 10px!important; color:#cda45e!important;}
    /*--------------------------Tabs--------------------------------------*/
    .tab {
          overflow: hidden;
          border: 1px solid #ccc;
          background-color: #f1f1f1;
        }
        .color-main{color: #cda45e;}
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
          height:170px;
          animation: fadeEffect 1.5s; /* Fading effect takes 1 second */
        }
        .tabcontent p{color:#000000!important;}
        /* Go from zero to full opacity */
        @keyframes fadeEffect {
          from {opacity: 0;}
          to {opacity: 1;}
        }
    /*------------------------------End Tabs----------------------------*/
    .f-36{font-size: 36px;}
    .img img{width: 200px; padding: 25px;}
    .border-left{border-right: 1px solid #dedede;}
    .color-black{color:#000000!important;}
    .facebook{color: #cda45e!important;}
    .twitter{color: #cda45e!important;}
    .pinterest{color: #cda45e!important;}
    .instagram{color:#cda45e!important;}
    /*header {font-size: 16px; background: #333; position: relative; z-index:999999; -webkit-transition: all 0.5s ease; -moz-transition: all 0.5s ease; transition: all 0.5s ease;}
    header.sticky { position: fixed; font-size: 24px; height: 132px; width: 100%; background: #ffffff;box-shadow: 2px 0px 2px #404040;}
    header ul .active a{color:#000000!important;}
    header .site-menu li a{color:#000000!important;}*/
     #hero:before{background: rgba(0, 0, 0, 0)!important;}
    .foots{list-style: none!important; padding: 0px; margin: 0px;}
    .text-secondary{color:#000000!important;}
    .text-title{background: #cda45edb;
    padding: 20px 15px;
    position: absolute;
    width: 87%;
    top: 44%;
    margin: 0px 25px;}

    .back-to-top i {
            font-size: 40px!important;
            color: #cda45e!important;
            line-height: 0;
            background: #000000!important;
            padding: 10px!important;
            border-radius: 100px!important;
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
z-index:99999;
}


#navArea .logo img {
  width: 100%;
height: 100px;
transition: height 0.5s;
}
#navArea ul li{
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
  color: #000!important;
  transition: .2s ease-out;
}

#navArea a:hover, li.active{
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
  border-bottom: 1px solid rgba(0,0,0,.05);
  border-top: 1px solid rgba(255,255,255,.1);
  color:#000000!important;
}

#navArea ul.subMenu li a:hover, #navArea ul.subMenu li.active>a {
  background: #ffffff;
  padding-left: 1.1rem;
}

ul.subMenu ul.subMenu{
  position: absolute;
  top: 0;
  left: 100%;
  width: 100%;
}
.mr-top-136{margin-top: 136px!important;}
#navArea ul {
list-style: none;
display: flex;
align-items: center;
width: 500px;
justify-content: space-around;
}

#navArea ul li > ul {
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
font-size: 22px!important;
}
#navArea.is-sticky ul li a{color:#000000!important;}

#navArea.is-sticky {
background: #fff;
}

#navArea.is-sticky a {
color:#000;
}

#navArea.is-sticky .logo img {
width: 100%;
height:65px;
}
.blacks-bg{background-color:#000000!important; padding:20px 0px;}
.bor-rgt{border-right: 2px solid #cda45e;}
.video-position{padding:0px 0px!important;}
.two-logo{position: absolute;
    width: 100%;
    top: 8%;}
    .dis-hide{display:none!important;}
    .hamburger{display:none;}
   .hamburger button { background: #00000000;
    color:#152349;
    border: 0px;
    font-size: 30px;
    position: absolute;
    right: 15px;
    top: 20px;}
    .close-menu{display: none!important;}
    .social-media{position: absolute; margin-top:71px;}
    /*----------------Service Box-------------------*/

      .box-location {padding: 20px 25px; box-shadow: 5px 5px 5px #dedede; border: 1px solid #eeeeee; margin: 30px 0px; background-color: #ffffff;}
      .box-center {text-align: center; border-right: 1px solid #dedede;}
      .box-image {width: 225px;}
      .f-28 {font-size: 28px; border-bottom: 1px solid #dedede; padding-bottom: 8px;}
     
      .icon-serve img {width: 80px;}
    /*----------------Service Box-------------------*/
@media screen and (min-width: 937px) and (max-width: 1000px){
     #navArea > ul{position: absolute; background: #152349;  width: 100%; display: block; padding-left: 0px; left:-100%; transition: all 0.5s; height: 900px;}
      #navArea > ul li ul{padding-left: 0px;}
     #navArea ul li{display: block; float: none!important;}
     #navArea ul li > ul{position: relative; width: 100% !important; margin-left:0px!important;}
     
     #navArea ul.subMenu li a {
          width: 100%;
          padding: 1rem 1rem;
          border-bottom: 1px solid #dedede;
          
          color: #000000!important;
      }
       #navArea.is-sticky > ul > li > a{color:#ffffff!important;}
       #navArea .logo img{ width: 7%; height: 42px; position: absolute; left: 20px;}
       .two-logo {position: relative; width: 100%; top: 0;}
       .section-title p{font-size: 1.8rem!important;}
       section {padding: 15px 0!important;}
       #navArea.is-sticky .logo img{width: 10%;height: 65px;}
       #navArea.is-sticky{height:90px;}
       .hamburger{display:block;}
       .foo-book {
            position: relative;
            width: 100%!important;
          
        }
        .flip-card{width:100%;}
         .social-media{position: relative; margin-top:15px;}
         .close-menu{display: block!important;}
         .close-menu button{position: relative; right: 0; width: 100%; text-align: right; background: #0000; border: 0px; color: #ffffff; padding: 10px 15px 0px; font-size: 20px;}
         .text-primarys{padding: 15px 0px!important;}
    }
    @media screen and (min-width: 481px) and (max-width: 936px){
      .border-left{border:0px;}
      .f-36{font-size:20px;}
      .tabcontent{height:320px}
     #navArea > ul{position: absolute; background: #152349;  width: 100%; display: block; padding-left: 0px; left:-100%; transition: all 0.5s; height: 900px;}
      #navArea > ul li ul{padding-left: 0px;}
     #navArea ul li{display: block; float: none!important;}
     #navArea ul li > ul{position: relative; width: 100% !important; margin-left:0px!important;}
     
     #navArea ul.subMenu li a {
          width: 100%;
          padding: 1rem 1rem;
          border-bottom: 1px solid #dedede;
          
          color: #000000!important;
      }
       #navArea.is-sticky > ul > li > a{color:#ffffff!important;}
       #navArea .logo img{ width: 7%; height: 42px; position: absolute; left: 20px;}
       .two-logo {position: relative; width: 100%; top: 0;}
       .section-title p{font-size: 1.8rem!important;}
       section {padding: 15px 0!important;}
       #navArea.is-sticky .logo img{width: 10%;height: 65px;}
       #navArea.is-sticky{height:90px;}
       .hamburger{display:block;}
       .foo-book {
            position: relative;
            width: 100%!important;
          
        }
        .flip-card{width:100%;}
         .social-media{position: relative; margin-top:15px;}
         .close-menu{display: block!important;}
         .close-menu button{position: relative; right: 0; width: 100%; text-align: right; background: #0000; border: 0px; color: #ffffff; padding: 10px 15px 0px; font-size: 20px;}
         .text-primarys{padding: 15px 0px!important;}
    }

    @media screen and (min-width: 320px) and (max-width: 480px){
        .blacks-box {
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
.icon-serve{padding-left:15px;}
        #navArea{height:90px;}
        .mr-top-136 {margin-top: 70px!important;}
      .f-36{font-size:20px;}
      .border-left{border:0px;}
      .tabcontent{height:320px}
     #navArea > ul{position: absolute; background: #152349;  width: 100%; display: block; padding-left: 0px; left:-100%; transition: all 0.5s; height: 900px;}
      #navArea > ul li ul{padding-left: 0px;}
     #navArea ul li{display: block; float: none!important;}
     #navArea ul li > ul{position: relative; width: 100% !important; margin-left:0px!important;}
     
     #navArea ul.subMenu li a {
          width: 100%;
          padding: 1rem 1rem;
          border-bottom: 1px solid #dedede;
          
          color: #000000!important;
      }
      #navArea > ul > li > a{color:#ffffff!important;}
       #navArea.is-sticky > ul > li > a{color:#ffffff!important;}
       #navArea .logo img{ width: 20%; height: 65px; position: absolute; left: 20px;}
       .two-logo {position: relative; width: 100%; top: 0;}
       .section-title p{font-size: 1.8rem!important;}
       section {padding: 15px 0!important;}
       #navArea.is-sticky .logo img{width: 20%;height: 65px;}
       #navArea.is-sticky{height:90px;}
       .hamburger{display:block;}
       .foo-book {
            position: relative;
            width: 100%!important;
            top: 0px;
            
            z-index: 9999;
        }
        .flip-card{width:350px;}
         .social-media{position: relative; margin-top:15px;}
         .close-menu{display: block!important;}
         .close-menu button{position: relative; right: 0; width: 100%; text-align: right; background: #0000; border: 0px; color: #ffffff; padding: 10px 15px 0px; font-size: 20px;}
         .text-primarys{padding: 15px 0px!important;}
    }
    .error {
        display: block;
    }
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src=https://www.googletagmanager.com/gtag/js?id=G-MLXLN4EQZ5></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

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
<!--<section class="video-position">-->
<!--   <img src="image/inter-header.jpg" alt="encalm" width="100%;"/>-->
<!--</section>-->
<!-----------------logo---------------------->
<section class="two-logo">
      <div class="container">
        <div class="row">
          <div class="col-lg-10">
                <!--    <div class="section-title text-center">            
			   <?php if(!empty($this->session->flashdata('success'))) {?>            
				<h3 class="btn btn-success"> <center><?=$this->session->flashdata('success')?></center></h3> 
			  <?php }?>
			   <?php if(!empty($this->session->flashdata('error'))) {?>            
				<h3 class="btn btn-danger"> <center><?=$this->session->flashdata('error')?></center></h3>         
			  <?php }?>		  
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
        <div class="col-lg-12  pt-lg-0 content">
          <div class="section-title text-center">
            <!--<h2>About</h2>
            <p class="mr-top-136"><img src="<?=base_url()?>assets/image/businesscentre.jpg" alt="Business Centre" title="Business Centre" style="max-width: 100%;"></p>-->
            <p class="mr-top-136"><img src="<?=base_url()?>assets/image/The-Business-Centre.png" style="max-width: 90%;"></p>
          </div>
    <!--           <div class="row">-->
    <!--  <div class="col-lg-12">-->
    <!--    <div class="section-title text-center">-->
            <!--<h2>About</h2>-->
    <!--        <p>About Encalm Lounge</p>-->
    <!--      </div>-->
    <!--  </div>-->
    <!--</div>-->
          <p class="text-center text-secondary mt-4">The Business Centre conveniently located near Terminal 3 IGI New Delhi, is designed to cater to the needs of busy professionals on the go. We provide a range of facilities, including boardrooms, workstations, high-speed Wi-Fi, tea and coffee, printing, photocopy, and scanning services. Our meeting rooms are equipped with the latest audio-visual equipment, making them perfect for meetings, presentations, and conferences. Our workstations provide a comfortable and professional environment to work in, with access to all the necessary amenities. Whether you need a place to work between flights or host a business meeting, our business centre is the perfect choice.</p>
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
             <h5 class="color-main text-center f-36">Center Services</h5> 
             <!-- <div class="section-title text-center">
              <h2>Our</h2> 
              <p>Center Services</p>
            </div> -->
            <br/>
            
          </div>
          
            <div class="icon-serve">
                          <div class="box-icon text-center"><img src="<?=base_url()?>assets/image/meeting_rooms.png" alt="Meeting Rooms"> <p class="color-main text-center">Meeting Rooms</p></div>
                          <div class="box-icon text-center"><img src="<?=base_url()?>assets/image/printing.png" alt="Printing"> <p class="color-main text-center">Printing</p></div>
                          <div class="box-icon text-center"><img src="<?=base_url()?>assets/image/scanning.png" alt="Scanning"> <p class="color-main text-center">Scanning</p></div>
                          <div class="box-icon text-center"><img src="<?=base_url()?>assets/image/teacoffee.png" alt="Tea and Coffee"> <p class="color-main text-center">Tea and Coffee</p></div>
                          <div class="box-icon text-center"><img src="<?=base_url()?>assets/image/wifI.png" alt="Wifi"> <p class="color-main text-center">Wifi</p></div>
                          <div class="box-icon text-center"><img src="<?=base_url()?>assets/image/workstations.png" alt="Workstations"> <p class="color-main text-center">Workstations</p></div>
                      
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
          <h5 class="color-main text-center f-36">Location</h5>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-6 m-auto">
            <div class="">
              
                  <h5 class="color-main text-center">Delhi</h5>
                  <p class="text-center color-black"><i class="fa fa-map-marker" aria-hidden="true"></i> Ground floor, Metro Building, Terminal 3, IGI, New Delhi- 110037</p>
                  <p class="text-center color-black"><i class="fa fa-envelope color-blue" aria-hidden="true"></i> thebusinesscentre@encalm.com </p>
                  <p class="text-center color-black"><i class="fa fa-phone color-blue" aria-hidden="true"></i> <a class="color-black" href="tel:+919289472139">+91 9289472139</a></p>
              </div>
          </div>
        </div>
    </div>
 </section>
  <!-------------------Booking Form-------------------------->
<section class="mt-1 mb-5">
    <div class="container">
      <div class="row mb-3">
        <div class="col-md-12">
          <h5 class="color-main text-center f-36">Book Now</h5>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-12 m-auto">
          <form id="bookform" name="" method="post" action="<?=base_url()?>services/businesscentre/booking">
              <input type="hidden" name="bookingform" value="Booking">
              <input type="hidden" name="category" value="The Business Centre">
              <input type="hidden" name="name" id="name" value="">
              <div class="row">
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">Contact Name</label>
                  <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="" data-gtm-form-interact-field-id="0" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">Email</label>
                  <input type="text" class="form-control" id="email_from" name="email_from" placeholder="" data-gtm-form-interact-field-id="0" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">Mobile</label>
                  <input type="text" class="form-control" id="mobile" name="mobile" placeholder="" data-gtm-form-interact-field-id="0" required>
                </div>
                <div class="form-group col-md-6 mt-2 dtpicker">
                  <label class="floating-label values mb-1">Booking Date & Time</label>
				  
                  <input type="text" class="form-control datepicker" id="date" name="booking_date" placeholder="" data-gtm-form-interact-field-id="0" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">Select Service</label>
                  <select name="product" id="product" class="form-control" required>
                    <option value="">Select Service</option>
                    <option value="Meeting Room - 4 Persons">Meeting Room - 4 Persons</option>
                    <option value="Meeting Room - 6 Persons">Meeting Room - 6 Persons</option>
                    <option value="Meeting Room - 8 Persons">Meeting Room - 8 Persons</option>
                    <option value="Meeting Room - 12 Persons">Meeting Room - 12 Persons</option>
                  </select>
                </div>
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">Select Hours</label>
                  <select name="no_of_hrs" id="no_of_hrs" class="form-control" required onchange="aloted_time(this.value)">
                    <option value="">Select Hours</option>
                    <option value="1">1 Hour</option>
                    <option value="2">2 Hours</option>
                    <option value="3">3 Hours</option>
                    <option value="4">4 Hours</option>
                    <option value="5">5 Hours</option>
                    <option value="6">6 Hours</option>
                    <option value="7">7 Hours</option>
                    <option value="8">8 Hours</option>
                    <option value="9">9 Hours</option>
                    <option value="10">10 Hours</option>
                  </select>
                </div>
                <div class="form-group col-md-12 slot" style="text-align: center; margin-top:30px; color:red;">
                </div>
                
                <div class="form-group col-md-12" style="text-align: center;">
                    <br/>
                  <button type="submit" id="submitbookform" name="submit" class="btn btn-primary mt-2"> Send Booking Request</button>
                </div>
                  
                <div class="clearfix"></div>
                <div class="form-group col-lg-12 text-center mt-3">
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
        $(window).scroll(function(){
      var sticky = $('#book_now'),
          scroll = $(window).scrollTop();
    
      if (scroll >= 900) {sticky.addClass('foo-book');}
      else {sticky.removeClass('foo-book');}
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
          loop:true,
          margin:10,
          autoplay:true,
          responsive:{
            0:{
              items:1
            },
            600:{
              items:3
            },
            1000:{
              items:4
            }
          }
        }) 

</script>
<script type="text/javascript">
    $('.brand-carousel-1').owlCarousel({
          loop:true,
          margin:10,
          autoplay:true,
          responsive:{
            0:{
              items:1
            },
            600:{
              items:1
            },
            1000:{
              items:1
            }
          }
        }) 
</script>
<script type="text/javascript">
jQuery("#submit").click(function(){    
    var name = jQuery.trim(jQuery("#name").val());  
    var email = jQuery.trim(jQuery("#email").val());    
    var subject = jQuery.trim(jQuery("#subject").val());    
    var message = jQuery.trim(jQuery("#message").val());
    var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    var error = false;
    if(name == "")
    {
        jQuery("#nameLabel").show();
        error = true;
    }   
    if(subject == "")
    {
        jQuery("#subjectLabel").show(); 
        error = true; 
    }
    if(email == "")
    { jQuery("#emailLabel").show();
        error = true;
    }
    else if(!regEmail.test(email))
    { jQuery("#emailLabel").show();
        jQuery("#emailLabel").html("Email must be valid.");
        error = true;
        return false;
    }
    
    if( error == true)return false;
    
    var Data = "&frmname="+name+"&frmemail="+email+"&frmsubject="+subject+"&frmmessage="+message;   
    
    jQuery.ajax({
        type: "POST",
        url: "mail.php",
        data: Data,
        dataType: 'json',
        cache:false,
        success: function(msg){
            if(msg == "Invalid verification code.")
            {
                jQuery("#msgSuccessNew").show();
                jQuery("#msgSuccessNew").html("Sorry Mail server is busy. Please send after some time.");
            }
            else
            {       
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
function checkValue(th,id)
{
  if(th != "")
  {
    jQuery("#"+id).hide();
  }
}
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#menu').click(function(){
          $('#navArea ul').css("left","0");
        });
        $('#close-nav > i').click(function(){
          $('#navArea ul').css("left","-100%");
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

      window.fbAsyncInit = function() {

        FB.init({

          xfbml            : true,

          version          : 'v13.0'

        });

      };

 

      (function(d, s, id) {

        var js, fjs = d.getElementsByTagName(s)[0];

        if (d.getElementById(id)) return;

        js = d.createElement(s); js.id = id;

        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';

        fjs.parentNode.insertBefore(js, fjs);

      }(document, 'script', 'facebook-jssdk'));

    </script>
    
    <script>
      $(document).ready(function() {
        $('#book_now').click(function() {
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
            mobile: {required: "Please Enter Your Mobile Number",number:"Please enter valid mobile number"}
          }
        });
        $('#contact_name, #product, #no_of_hrs').change(function() {
          console.log('hello');
          $('#name').val($('#product').val()+' ('+$('#no_of_hrs').val()+' Hrs) '+$('#contact_name').val());
        });
        $('.datepicker').datetimepicker({
          controlType: 'select',
          dateFormat: 'dd-mm-yy',
          oneLine: true,
          timeFormat: 'HH:mm'
        });
      });
    </script>
    
    <script>
    function aloted_time(m){
        var dt = $('#date').val();
        $.ajax({
			type: 'POST',
			url: "<?=base_url('services/change_time')?>",
			data: {'dt':dt,'hrs':m},
			success: function(data) { 
			 	  $('.slot').html(data);  
			 	}
        });
     
    }
    </script>
    
    
    