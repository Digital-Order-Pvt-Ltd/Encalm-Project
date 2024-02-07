<?php
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
  .custom-form{
    border:none;

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
    .submit-button{
      width:25%;
      border-radius:20px;
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
        <div class="col-lg-12  pt-lg-0 content color-black">
          <div class="section-title text-center">
            <!--<h2>About</h2>
            <p class="mr-top-136"><img src="<?=base_url()?>assets/image/businesscentre.jpg" alt="Business Centre" title="Business Centre" style="max-width: 100%;"></p>-->
            <p class="mr-top-136"><img src="<?=base_url()?>assets/image/encalm_transit.png" style="max-width: 90%; width: 200px;"></p><br/><br/>
            <!--p class="my-5"><img src="<?=base_url()?>assets/image/transit_header.jpg" style="max-width: 90%;"></p-->
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
          <p class="text-center text-secondary mt-4">Welcome to Transit by Encalm where we redefine airport stays, offering a fusion of style,<br>

            convenience, and hospitality in every moment of your journey.</p>
            <p class="color-black">Located at Hyderabad&#39;s Rajiv Gandhi International Airport (RGIA) in Shamshabad, Transit by Encalm
promises not just a place to rest but and experience to cherish. Our latest venture into airport
hospitality offers unparalleled accessibility and comfort for travellers seeking a relaxing stay during their
transit.</p>
            <p class="mt-3 mb-0">At Transit by Encalm, we offer:</p>
            <p class="color-black"><strong>Premier Accommodation:</strong> Choose from our curated selection of 70 rooms across various categories,
each crafted to cater to the diverse needs of our guests. From Deluxe and Premier King Rooms to
Executive Suites and specially abled accommodations, your comfort is our priority.</p>
            <p class="color-black"><strong>Encalm Spa:</strong> Our Encalm Spa awaits, featuring three therapy rooms dedicated to providing relaxation
through tailored treatments, including Back, Neck &amp; Shoulder Massages and Foot Massages.</p>
            <p class="color-black"><strong>Enroute Café:</strong> With a capacity for 72 covers and operating 24 hours, our café tantalises your taste buds
with a blend of Western, Indian, and Oriental cuisines, ensuring a delightful culinary journey throughout
your stay, no matter the time of the day.</p>
            <p class="color-black"><strong>Impeccable In-Room Facilities:</strong> Whether it&#39;s the convenience of guest laundry, fitness centre access, or
the comfort of walk-in showers, every amenity has been thoughtfully included in our rooms to make
your stay effortless.</p>
            <p class="mt-3 mb-0 color-black">Here is the list of in-room facilities: (to be showcased as icons)</p>
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
            </ol>
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
            <br/>
            
          </div>
          
            <div class="icon-serve">
                          <div class="box-icon text-center"><img src="<?=base_url()?>assets/image/emergency-call.png" alt="Emergency Call"> <p class="color-main text-center">Emergency Call</p></div>
                          <div class="box-icon text-center"><img src="<?=base_url()?>assets/image/coffee-maker.png" alt="Coffee Maker"> <p class="color-main text-center">Coffee Maker</p></div>
                          <div class="box-icon text-center"><img src="<?=base_url()?>assets/image/laundry.png" alt="Laundry"> <p class="color-main text-center">Laundry</p></div>
                          <div class="box-icon text-center"><img src="<?=base_url()?>assets/image/ironing.png" alt="Ironing"> <p class="color-main text-center">Ironing</p></div>
                          <div class="box-icon text-center"><img src="<?=base_url()?>assets/image/Wi-Fi.png" alt="Wi-fi"> <p class="color-main text-center">Wi-fi</p></div>
                          <div class="box-icon text-center"><img src="<?=base_url()?>assets/image/Concierge-Services.png" alt="Concierge Services"> <p class="color-main text-center">Concierge Services</p></div>
                      
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
                  <p class="text-center color-black mb-1"><i class="fa fa-map-marker" aria-hidden="true"></i> Level D Arrivals beside Café Nilofer, RGIA, Shamshabad</p>
                  <p class="text-center color-black mt-1 mb-0">Distance from key locations:</p>
                  <p class="text-center color-black mb-1"><strong>Charminar:</strong> 15 km (approx. 40 minutes)</p>
                  <p class="text-center color-black mb-1"><strong>Secunderabad Railway Station:</strong> 35 km (approx. 1 hour)</p>
                  <p class="text-center color-black mb-1"><strong>Mahatma Gandhi Bus Stand:</strong> 25 km (approx. 45 minutes)</p>
                  <p class="text-center color-black mb-1"><i class="fa fa-envelope color-blue" aria-hidden="true"></i> reservations@transitbyencalm.com </p>
                  <p class="text-center color-black mb-1"><i class="fa fa-phone color-blue" aria-hidden="true"></i> <a class="color-black" href="tel:+919289472139">+91 9289366950</a></p>
              </div>
          </div>
        </div>
        <p class="text-center">Whether you are in transit or seeking a comfortable stay at the airport, Transit by Encalm offers a range
of amenities and services to make your stay seamless and relaxing.</p>
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
          <form id="bookform" name="" method="post" action="<?=base_url()?>services/businesscentre/booking">
              <input type="hidden" name="bookingform" value="Booking">
              <input type="hidden" name="category" value="The Business Centre">
              <input type="hidden" name="name" id="name" value="">
              <div class="row">
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">Room Category</label>
                  <select name="contact_name" id="contact_name" class="form-control form-select custom-form shadow" required>
                    <option value="">Select</option>
                    <option value="3">Category 1</option>
                    <option value="6">Category 2</option>
                    <option value="9">Category 3</option>
                  </select>
                </div>
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">No. of Hours</label>
                  <select name="no_of_hrs" id="no_of_hrs" class="form-control form-select custom-form shadow" required>
                    <option value="">Select</option>
                    <option value="3">3 Hour</option>
                    <option value="6">6 Hours</option>
                    <option value="9">9 Hours</option>
                    <option value="24">One Night</option>
                  </select>
                </div>
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">Date of Visit</label>
                 
                 <div class="row w-150">
                <div class="form-group col-md-6 mt-2 dtpicker">
                  <label class="floating-label values mb-1">From</label>
				  
                  <input type="text" class="form-control  custom-form shadow datepicker" id="from_date" name="booking_from_date" placeholder="" data-gtm-form-interact-field-id="0" required>
                </div>
               <div class="form-group col-md-6 mt-2 dtpicker">
      <label class="floating-label values mb-1">To</label>
      <input type="text" class="form-control custom-form shadow datepicker" id="to_date" name="booking_to_date" placeholder="" data-gtm-form-interact-field-id="0" required>
    </div>
                </div>
                </div>
                
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">No. of Guests</label>
                  <div class="row w-150">
               
                <div class="form-group col-md-4 mt-2">
                  <label class="floating-label values mb-1">Adult</label>
                  <select name="adult" id="adult" class="form-control form-select shadow custom-form" required>
                    <option value="">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                </div>
                <div class="form-group col-md-4 mt-2">
                  <label class="floating-label values mb-1">Child</label>
                  <select name="child" id="child" class="form-control form-select shadow custom-form">
                    <option value="">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                </div>
      
                <div class="form-group col-md-4 mt-2">
                  <label class="floating-label values mb-1">Infant</label>
                  <select name="infant" id="infant" class="form-control form-select shadow custom-form">
                    <option value="">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                </div>
                </div>
                </div>
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">First Name (Guest)</label>
                  <input type="text" class="form-control shadow custom-form" id="contact_first_name" name="contact_first_name" placeholder="" data-gtm-form-interact-field-id="0" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">Last Name (Guest)</label>
                  <input type="text" class="form-control shadow custom-form" id="contact_last_name" name="contact_last_name" placeholder="" data-gtm-form-interact-field-id="0" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">Passport No</label>
                  <input type="text" class="form-control shadow custom-form" id="passport" name="passport" placeholder="" data-gtm-form-interact-field-id="0" required>
                </div>
                <div class="form-group col-md-2 mt-2">
                  <label class="floating-label values mb-1">Country Code</label>
                  <select name="infant" id="infant" class="form-control form-select shadow custom-form">
                    <option value="">Select</option>
                    <option value="1">+1</option>
                    <option value="2">+91</option>
                  </select>
                </div>
                <div class="form-group col-md-4 mt-2">
                  <label class="floating-label values mb-1">Contact Number</label>
                  <input type="text" class="form-control shadow custom-form" id="mobile" name="mobile" placeholder="" data-gtm-form-interact-field-id="0" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">Email ID</label>
                  <input type="text" class="form-control shadow custom-form" id="email_from" name="email_from" placeholder="" data-gtm-form-interact-field-id="0" required>
                </div>
                
               
                
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">Country</label>
                  <select name="infant" id="country" class="form-control shadow form-select custom-form">
                    <option value="">Select</option>
                    <option value="1">India</option>
                    <option value="2">USA</option>
                  </select>
                </div>
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">State</label>
                  <select name="state" id="state" class="form-control form-select shadow custom-form">
                    <option value="">Select</option>
                  </select>
                </div>
               
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">City</label>
                  <select name="city" id="city" class="form-control form-select shadow custom-form">
                    <option value="">Select</option>
                  </select>
                </div>
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">Pincode</label>
                  <input type="text" class="form-control shadow custom-form" id="email_from" name="email_from" placeholder="" data-gtm-form-interact-field-id="0" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                  <label class="floating-label values mb-1">Billing Address</label>
                  <textarea rows="2" class="form-control shadow custom-form" id="address" name="address" placeholder="" data-gtm-form-interact-field-id="0" required></textarea>
                </div>
                <div class="form-group col-md-12">
                    <br/>
                  <button type="submit" id="submitbookform" name="submit" class="submit-button btn btn-primary mt-2"> Book Now</button>
                </div>

                <div class="form-group col-md-12">
                <p class="mt-3 mb-0 color-black"><b>Note:</b></p>
                <p class="mt-1 mb-0 color-black">*** The age group would be as follows:</p>
                <ul>
                    <li>Infant: Under 6 years: Comp</li>
                    <li>Child: 6-11 years: Child Rate at 30% of Adult Rate</li>
                    <li>Adult: 12 years and above</li>
                </ul>
                <p class="mt-3 mb-0 color-black">*** The maximum number of individuals in a room can be 2</p>
                <p class="mt-3 mb-0 color-black">*** Breakfast is included only in 1 night plan</p>
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
    
      if (scroll >= 50) {sticky.addClass('foo-book');}
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






 

