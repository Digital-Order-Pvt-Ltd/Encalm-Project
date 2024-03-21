<?php include('header.php'); ?>
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
body{font-family:Brandon!important; font-size: 18px;}
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
    right: 16%;
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
 .padd-top-125{padding-top:125px!important;}
  /*--------------------logo------------------------------*/
    .header-heading-title{position: absolute;
    width: 100%;
    top: 150px;
    background: #0000008c;}
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
      .blacks-box{width: 100%;
    background: #000000de;}
    .blacks-box img{width: 100%;}
    p.rate{background: #000000!important; padding: 8px; color:#ffffff!important; text-align: center;}
    .ful{padding:15px;}
    .ful .wid-50{width: 50%;
    text-align: center;
    float: left;
    padding: 18px;
    
    }
    .foots li{padding:3px 0px!important;}
    .books{background-color:#cda45e; width: 100%; border:0px; padding:8px 25px; text-align: center; color:#ffffff; font-size:20px;}
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
    .team p{text-align: justify; text-align-last: center; padding:0px 15px; color:#000000; margin-bottom:0px!important;}
    #counter{text-align: center;
   font-size: 2.5rem;
    color: #000000;}
    .owl-item{background-color: #ffffff!important;}
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
        .hide-s{display:none!important;}
    /*------------------------------End Tabs----------------------------*/
    .f-36{font-size: 2.5rem;
    font-weight: 700;}
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
.teams{padding: 15px 15px 15px; border-left:1px solid #dedede!important;}
.teams h6{font-size: 26px!important;}
.teams p{text-align: left!important;}
.teams .team-social{text-align: left!important;}
.blacks-bg{background-color:#000000!important; padding:20px 0px;}
.bor-rgt{border-right: 2px solid #cda45e;}
.video-position{padding:0px 0px!important;}
.two-logo{position: absolute;
    width: 100%;
    top: 20%;}
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
    .menu .menu-item {
    margin-top: 20px;
}
    .menu-item img {
    width: 70px;
    border-radius: 50%;
    float: left;
    border: 5px solid rgba(255, 255, 255, 0.2);
}
.txt-location{font-size:28px; padding:15px;}
.txt-location span{color:#cda45e;}
    /*--------------------Slide tabs-------------------------*/
      .slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: #000000;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;

}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.fade:not(.show){opacity: 1;}
/* The dots/bullets/indicators */
.dot {
  padding:8px 15px;
  color:#000000;
  font-size: 2.5rem;
    font-weight: 700;
}

.active, .dot:hover {
 color: #cda45e;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.f-20{font-size:20px;}
.f-20 > span{color:#cda45e!important;font-size: 60px; vertical-align: middle;}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

    /*--------------------Slide tabs-------------------------*/
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
        .f-20 > span {
    color: #cda45e!important;
    font-size: 30px;
    vertical-align: middle;
}
        #navArea > ul > li > a{color:#ffffff!important;}
        .video-position{margin-top:80px;}
        #navArea{height:90px;}
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
            width: 40%!important;
            top: 21px;
            right: 29%;
            z-index: 9999;
        }
        .flip-card{width:350px;}
         .social-media{position: relative; margin-top:15px;}
         .close-menu{display: block!important;}
         .close-menu button{position: relative; right: 0; width: 100%; text-align: right; background: #0000; border: 0px; color: #ffffff; padding: 10px 15px 0px; font-size: 20px;}
         .text-primarys{padding: 15px 0px!important;}
    }

    .section-title{}
    .section-title .spa_logo{
      padding-top: 128px;
    }

    .location{
      display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap:wrap;
    gap:20px;
}
.location .location_para{
  border: 2px solid #d9ac5e;
         padding: 13px 30px;
         height: 250px;
         min-height: 250px;
         width:300px;
         overflow: auto;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
}

.location .location_para p{
margin: 0;
color: #000 !important;
padding: 4px 0;
}
.location .location_para p i{
  color: #c9a477;
    padding-right: 6px;
}

.location .location_para p a{
  color: #fff;
}
.spa_order_list{
  padding: 0;
}
.spa_order_list li{
  padding: 10px;
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

<!------------------About Us----------------->
<section>
    <div class="container">
         <div class="row">
      <div class="col-lg-12">
      <div class="section-title text-center">
            <!--<h2>About</h2>-->
            <div class="spa_logo"><img src="<?= base_url() ?>assets/image/spa_images/spa_logo.png" alt="spa Service" title="spa_service" style="width: 150px;"></div>
          </div>
      </div>
    </div>
      <div class="row">
        <div class="col-lg-12 pt-4 pt-lg-0 content color-black text-justify">
        <h4>INTRODUCING ENCALM SPA</h4>
         <p class="text-justify color-black">At Encalm Spa, we understand that every traveller is unique, and our diverse selection of services reflects our commitment to provide a tailored escape, leaving you refreshed and rejuvenated before your next journey.</p>
          <p class="text-justify color-black">Travel comes with its challenges, and at Encalm Spa, we understand the importance of providing a sanctuary amid the demands of your journey. Step into our haven, where you can unwind, recharge, and immerse yourself in tranquillity, right in the heart of your travel experience. </p>
         <!-- <p class="text-justify color-black">With all the aforementioned challenges of travelling, our guests deserve a break to relax during their journey.</p>
       <p class="text-justify color-black">&nbsp;</p> -->
      <h4>WHAT DOES THE ENCALM SPA OFFER?</h4>
     <p class="text-justify color-black">Step into the world of Encalm Spa, where we believe in not just pampering, but in the art of transforming your well-being. Explore the enriching benefits that our spa therapy brings to your mind, body, and spirit:</p>
    <!-- <p class="text-justify color-black">Other than simply pampering yourself, here are some of the benefits of spa therapy at Encalm Spa:</p>-->
<ol class="spa_order_list"> 
    <li><strong>Expert massage therapists – </strong>: Entrust your relaxation journey to our team of skilled and experienced massage therapists. Trained in the art of massage, they are well-versed in addressing the unique needs of travellers and possess the expertise to customise each session, ensuring you receive the utmost care and attention for a truly indulgent experience. Relieve tension from long flights, soothe travel-weary muscles, and experience rejuvenation tailored to the demands of airport life!</li>
    <li><strong>Efficient stress relief – </strong>Airport travel can be stressful. Encalm Spa provides effective stress relief through targeted therapies, allowing you to let go of travel-related tensions and embrace a serene state of mind before continuing your journey.</li>
    <li><strong>Revitalise with quick therapies – </strong>Short on time? Our airport spa caters to travellers with therapies designed to provide instant relaxation. From quick massages to relaxing pedicures, indulge in a brief escape that recharges your energy.</li>
    <li><strong>Travel-friendly pampering – </strong>: Our spa understands the needs of travellers, offering treatments that cater to on-the-go lifestyles. Enjoy treatments designed for easy post-spa transition, ensuring you're airport-ready and relaxed.</li>
    <li><strong>Convenient location-</strong>Located within the Domestic and International Departures of Delhi Airport, Encalm Spa offers a convenient way to make the most of your layovers or waiting time. Experience a mini vacation without leaving the terminal, ensuring you board your next flight feeling refreshed. </li>
    <li><strong>A serene environment - </strong>Immerse yourself in a tranquil oasis carefully designed to enhance your overall spa experience. From soothing music to calming decor, every element is curated to transport you to a state of serenity from the moment you step through our doors. </li>
</ol>
<!-- <p class="text-justify color-black">&nbsp;</p>
<h4>WHY SHOULD ONE STOP BY AT THE ENCALM SPA?</h4>
<p class="text-justify color-black"><em>“Relax the body. Heal the mind. Calm the spirit.”</em></p>
<p class="text-justify color-black">One of the greatest gifts to yourself can be just the right amount of attention. At Encalm Spa, we
    provide an environment of tranquility and numerous massage therapies that help you unwind after a
    long day at the airport!</p>
    <p class="text-justify color-black">Our in-house experts understand the exceptional benefits of massage therapy and utilize time-honored
        techniques during each session. Our treatments include only the finest natural ingredients, known for
        their calming and healing properties, such as lavender and cedarwood among others.</p>
        <p class="text-justify color-black">A good spa session is known to enhance moods and promote emotional and physical well-being. If
            peace of mind is what you’re after, come visit us at the Encalm Spa.</p> -->
            
            <!-- <p class="text-justify color-black"><strong>Location</strong></p>
                T3 International Departures, IGI Airport, New Delhi
                <p class="text-justify color-black"><i class="fa fa-phone color-blue" aria-hidden="true"></i> <a class="color-black" href="tel:+911149632241">+91 1149632241</a></p>
                
                T3 Domestic Departures, IGI Airport, New Delhi
                <p class="text-justify color-black"><i class="fa fa-phone color-blue" aria-hidden="true"></i> <a class="color-black" href="tel:+911149630620">+91 1149630620</a></p>
             -->
                
			<!-- <p class="text-justify color-black"><i class="fa fa-envelope color-blue" aria-hidden="true"></i> <a href="mailto:spa@encalm.com">spa@encalm.com</a> </p>	 -->
				
          <!--<p class="text-justify color-black"><strong>For Enquires:</strong><br>
                <p class="text-justify color-black"><i class="fa fa-envelope color-blue" aria-hidden="true"></i> <a href="mailto:spa@encalm.com">spa@encalm.com</a> </p>
                  <p class="text-justify color-black"><i class="fa fa-phone color-blue" aria-hidden="true"></i> <a class="color-black" href="tel:+911149632241">+91 1149632241</a></p>
            </p>-->

                <p class="text-justify color-black">&nbsp;</p>   
                     <!-- <div class="section-title text-center padd-top-10">               <p>Open Now</p>          </div> -->
         </div>		 
      </div>
    </div>
</section>

<section class="mb-5 p-0">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">              
                  <h5 class="color-main text-center f-36 mb-3 pb-4">Locations</h5>
                  <div class="location">
                    <div class="location_para">
                    <p class="text-justify"><i class="fa fa-map-marker" aria-hidden="true"></i>T3 International Departures,IGI Airport, New Delhi</p>
                    <p class="text-justify"><i class="fa fa-envelope" aria-hidden="true"></i>  <a href="mailto:spa@encalm.com" class="color-black">spa@encalm.com</a></p>
                    <p class="text-justify"> <a href="tel:+911149632241" class="color-black"><i class="fa fa-phone" aria-hidden="true"></i>+91 1149632241</a></p>
                    </div>
                    <div class="location_para">
                  <p class="text-justify"><i class="fa fa-map-marker" aria-hidden="true"></i>T3 Domestic Departures, IGI Airport, New Delhi</p>
                  <p class="text-justify"><i class="fa fa-envelope" aria-hidden="true"></i>  <a href="mailto:spa@encalm.com" class="color-black">spa@encalm.com</a></p>
                   
                  <p class="text-justify"><a href="tel:+911149630620" class="color-black"><i class="fa fa-phone " aria-hidden="true"></i> +91 1149630620</a></p>
                  </div>
                  </div>
       
              </div>
          </div>
        </div>
    </div>
 </section>
<section class="bg-white">
    <div class="container pt-4">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center">
          <h5 class="color-main text-center f-36 mb-3 pb-4">Our Gallery</h5>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="spa-carousel section-padding owl-carousel">
            <div class="testi">
               <div class="lounge_img">
               <img src="<?= base_url() ?>assets/image/spa_images/spa_img1.jpg" alt="spa_services">
                       </div>
            </div>
            <div class="testi">
              <div class="lounge_img">
                 <img src="<?= base_url() ?>assets/image/spa_images/spa_img2.jpg" alt="spa_services">
                       </div>
            </div>
            <div class="testi">
              <div class="lounge_img">
                <img src="<?= base_url() ?>assets/image/spa_images/spa_img3.jpg" alt="spa_services">
                       </div>
              </div>
     
            <div class="testi">
              <div class="lounge_img">
                <img src="<?= base_url() ?>assets/image/spa_images/spa_img4.jpg" alt="spa_services">
                       </div>
            </div>
       
            
          </div>
        </div>
      </div>  
    </div>
  </section>
<!------------------------Services--------------------------->>
<?php include('footer.php'); ?>
<script>
        let counts=setInterval(updated);
        let upto=0;
        function updated(){
            var count= document.getElementById("counter");
            count.innerHTML=++upto;
            if(upto===1000)
            {
                clearInterval(counts);
            }
        }
    </script>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

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
        $('.spa-carousel').owlCarousel({
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
          items: 3
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
$(document).ready(function(){
    $(".dot").click(function(){
       var val = $(this).text();
       if(val == "Vision")
       {
           $(".vision-text").show();
           $(".mission-text").hide();
           
       }
       else
       {
            $(".vision-text").hide();
           $(".mission-text").show();
       }
    });
});
    
</script>


</body>
</html>