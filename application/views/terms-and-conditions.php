<?php
$meta_title = 'Terms And Conditions  | Encalm Hospitality';
$meta_description = 'Read the terms and conditions carefully. These terms and conditions govern your viewing and use of this website';
$meta_website_description = 'Read the terms and conditions carefully. These terms and conditions govern your viewing and use of this website';

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
        <div class="section-title text-center padd-top-125">
            <!--<h2>About</h2>-->
            <p>Terms And Conditions</p>
          </div>
      </div>
    </div>
      <div class="row">
        <div class="col-lg-12 pt-4 pt-lg-0 content color-black text-justify">
          <p class="text-justify color-black">Encalm Hospitality Pvt. Ltd. (“Encalm”) is the company incorporated under Companies Act 2013 with its registered office at Plot 89, LGF, Sector 44, Gurugram, Haryana, India, 122003 and Corporate Identity Number as U55101HR2021PTC098119. By continuing to booking of Encalm Services, you accept the terms and conditions of services provided by Encalm for its Services. These terms and conditions are applicable for all services provided by Encalm including Atithya Welcome and Assist services and Encalm Lounge Services.</p>

            <p class="text-justify color-black">Encalm reserves the right to change these Terms and Conditions of Services at any time. The new version of the Terms and Conditions will be posted on this website and will take effect and govern all use of the website upon posting. Your use of this website indicates your agreement to be bounded by these Terms and Conditions of Services.</p>
            
            <ol>
    <li><strong>Definitions</strong>
        <ol class="text-justify" type="a">
          <li><strong class="color-main">Ancillary Services”</strong> means services other than Atithya Service at Airport and are not provided by Encalm directly; and may include travel concierge related service such as baggage pick-up and drop, hotel booking, travel insurance purchase, lounge booking, airport transfer etc.</li>
          <li><strong class="color-main">“Atithya Guest Services” or “Service(s)”</strong> means paid meet and assist services provided by Encalm at the Airport and as detailed in Clause 2 below and as may amended from time to time by Encalm and made available on the website.</li>
          <li><strong class="color-main">“Booking Process”</strong> means actions steps by Agent for undertaking the Service booking(s) through online reservations system or through an offline mode as may be acceptable to Encalm</li>
          <li><strong class="color-main">“Airport”</strong> means an airport within or outside India where Encalm is providing Services by itself.</li>
          <li><strong class="color-main">“Agent”</strong> means any entity including any individual, corporate or a Sales Agent, who facilitates in providing the Services by undertaking booking and reservations of Services for the Guest. Individual transacting on Encalm Website must have completed 18 (eighteen) years of age at the time of requesting of Services.</li>
          <li><strong class="color-main">“Guest(s)”</strong> means the person(s) to whom the Service is being booked / intended to be booked by the Agent. It may be noted that some individual Agents may also be Guests.</li>
          <li><strong class="color-main">“Guest Service Associate”</strong> or “GSA” means an officer, designated by Encalm to provide Service to the Guest(s) at Airport.</li>
          <li><strong class="color-main">“No Show”</strong> means the failure by Guest to reach the meeting point and identify himself/herself to GSA as per the meeting time communicated in the Service confirmation by Encalm.</li>
          <li><strong class="color-main">“Online Reservation Engine”</strong> means online facility provided by Encalm on its Website and is available to Agent(s) for undertaking booking/cancellation of Services subject to the applicable terms and conditions as provided on the website or as may be agreed by Encalm with the Agent separately in writing.</li>
          <li><strong class="color-main">“Encalm Website or Atithya Website or Website”</strong> means encalm.com or its subdomain including atithya.encalm.com or such website(s) maintained by Encalm or, as may be applicable for facilitating booking of Services.</li>
          <li><strong class="color-main">“Sales Agent”</strong> any entity authorised by Encalm in writing on mutually agreed terms and conditions for undertaking bookings and reservations of Services on behalf of their client(s) in India and/or abroad.</li>
          <li><strong class="color-main">“Service Add-on”</strong> means any service such as additional porter, bouquet, wheelchair, baby stroller, service upgrade, etc. that is offered by Encalm for booking online on Website post the selection of base service by the Agent. Further, Service add-ons do not include Ancillary Services.</li>
        </ol>
    </li>
    <li><strong>Scope of Services:</strong>
      <p class="text-justify color-black">The scope of Services includes various services and packages broadly defined under following categories:</p>
        <ol class="text-justify" type="a">
          <li><strong class="color-main">Departure Services:</strong> Assistance to Guests departing on International or Domestic flight from airport.</li>
          <li><strong class="color-main">Arrival Services:</strong> Assistance to Guests arriving on International or Domestic flight at airport.</li>
          <li><strong class="color-main">Transit Services:</strong> Assistance to Guests transiting through airport.</li>
          <li><strong class="color-main">Lounge Services:</strong> Lounge access to Guests Travelling through the airport. For more information on Services please refer to Website.</li>
          
        </ol>
    </li>
    <li><strong>Online Booking</strong>
        <ol class="text-justify" type="a">
          <li>Agent must complete the Booking Process on the Website in advance for availing Services and confirmation of Services pursuant to all online and offline request by Agent(s) shall be subject to availability.</li>
          <li>Agent(s) shall use Online Reservations Engine to make booking for the Services.</li>
          <li>The bookings can be made by the Agent(s) for Service and packages made available online by Encalm from time to time subject to Clause 4.7 below.</li>
          <li>Agent can book online for up to 10 Guests per booking. For group bookings (more than 10 guests) Agent(s) may contact Encalm on contact details provided on the website.</li>
          <li>Agent is responsible for providing Encalm with correct and legitimate detail(s) about itself and its Guest(s) during the Booking Process. Encalm at all times shall reserve the right for taking any additional information in relation to the Agent(s) and/or Guest(s) during the process of online/offline booking or anytime during the performance of Services or any clarification thereafter.</li>
          <li>Any and/or all request(s) as may be received and acknowledged by Encalm does not guarantee the Service by Encalm and shall be subject to written confirmation by Encalm.</li>
          <li>Encalm reserves the right to accept or decline or cancel Agents request for Service without assigning any reasons.</li>
          <li>During the Booking Process the Agent(s) are requested to take extra care while providing information about guest(s), date and time of travel, contact numbers etc. Encalm assumes no responsibility whatsoever on account of any problem that may arise on account of false/ erroneous information provided by Agent(s) to Encalm or any delay or cancellation of flight or for any reason whatsoever including any major event, change in flight schedule, failure of Guest(s) to report at Airport on time.</li>
          <li>Once the Booking Process is completed, Agent can request for cancellation of Services in case of any change in plans and Encalm shall initiate the refund process in line with the Cancellations and Refund Policy provided in Clause 5 below. However, the cancellation and refund to Client(s) of any Agent must be processed through the Agent only subject to the cancellation and refund policy.</li>
          <li>It is hereby clarified that during the process of booking by Online Reservation Engine on our website, if there is any “transaction fee” which is charged by the bank issuing the credit/debit card, such charges shall be paid by the Agent and </li>
          <li>Encalm shall have no liability to pay such transaction fee.</li>
          <li>All Sales Agents shall deal with their clientele by themselves and Encalm assume no responsibility of transaction between Sales Agent and its client. For all confirmed and legitimate Service(s) bookings by Sales Agent(s), Encalm shall only be responsible for providing Service(s) to Guest(s), subject to the terms and conditions of Service at Airport.</li>
          <li><strong class="color-main">Credit/Debit Card:</strong> Payment of online booking is accepted by all major credit/debit card (“Card”). In case the card used to transact online is issued in a country other than India there may be bank charges applicable and Encalm shall not responsible for any charges that may be levied by the Card Issuing Bank. The Card payment is subject to authorization from the bank issuing the Card.</li>
          <li><strong class="color-main">Net Banking:</strong> If the Agent has an account with any of the mentioned banks under the heading net banking on our website, then Agent can pay for the booking(s) securely through the respective bank's Internet banking option and the amount will be automatically debited from your account. Encalm is not liable for any payment authorization, as the payment gateway is responsible only to hand over the information in an encrypted / secure format to the respective bank for authorizing the transaction. Any issue with payment authorization will need to be taken up with your respective bank. This facility is valid for all bookings made in Indian Rupees (INR) currency only.</li>


        </ol>
    </li>
    <li><strong>Condition of Service at the Airport:</strong>
      <p class="color-black">Performance of Services to Guest(s) by Encalm at the Airport shall be subject to following conditions:</p>
      <ol class="text-justify" type="a">
        <li>Guest shall identify himself/herself to the GSA or call on the number provided on Service confirmation voucher on arrival at Airport.</li>
        <li>Guest(s) shall be solely responsible for compliance with all governmental regulations upon entry into and exit from Indira Gandhi International Airport, New Delhi and ensuring that all required documents are in order and comply with all conditions/requirements stipulated by Government of India and other relevant authorities and agencies in relation to such travel.</li>
        <li>Service by Encalm to Guest(s) shall be subject to written confirmation of Service and satisfactory completion of necessary checks by relevant authorities including Security, Immigration, and Customs or such other authorities from whom the clearance is required by the Guest for travel through airport.</li>
        <li>Duration of Service: The performance of Service will commence at the scheduled meeting time or the time of service as per the Service confirmation voucher. However, Encalm at its sole discretion, may permit Guest(s) a window of 20 (twenty) minutes from the scheduled meeting time to avail the Service(s).</li>
        <li>In case of any failure of Guest(s) to report on time at the meeting point or the time of service as per the Service confirmation Voucher, she/he shall be deemed as a No Show and the Service will not be assured.</li>
        <li>For each unit of porter service, Baggage assistance will be provided to Guest(s) for upto 3 (three) units of check-in baggage. For the purpose of check-in baggage, the sum of the 3 (three) dimensions (length + breadth + height) must not exceed 62 (sixty two) inches or 158 (one hundred fifty eight) centimetres for each piece. Agents shall provide the requirement of porter service during the Booking Process. Encalm may accept the additional requirement of porter services on payment of additional charges on the spot, subject to the availability.</li>
        <li>Encalm shall at its sole discretion, be entitled to cancel, alter or omit any part of the Service with or without notification to Agent/Guest(s) at its sole discretion. In such cases, Encalm’s liability shall be limited to re-performance of the cancelled Service. In cases where Encalm is unable to re-perform the service, partial/full refund may be provided by Encalm to the Agent/Guest(s) at its sole discretion.</li>
        <li>Delays and cancellations of Service by Encalm may result from factors beyond its control such as the accidents, governmental restrictions, and other events of force majeure, Encalm’s liability shall be limited to re-performance of the cancelled Service.</li>
        <li>Encalm at all times shall reserve the right to withdraw the Service without assigning any reason and without further reference, in case the Agent/Guest(s) is / are in breach of any Terms &amp; Conditions of the Service.</li>
        <li>Agent/Guest shall not use the Service or its reference for any unlawful or prohibited purposes.</li>
        <li>Encalm at its sole discretion may decline to provide Service in case of any misconduct or any unlawful or prohibited activity by the Agent/Guest(s).</li>
        <li>For all products and services provided by third parties (for example, limousine transfers, floral deliveries, hotels reservation or mobile sim card services etc.), the terms and conditions, cancellation and refund policies of such third party shall be applicable. Encalm shall not be liable to Agent/Guest(s) regarding any product and service provided by any third party.</li>
        <li>Encalm’s liability, if any, shall in no event exceed the total charges paid by the Agent/Guest(s) for the Services. Under no circumstances, Encalm shall be liable for any consequential, exemplary, special, indirect, incidental or punitive damages.</li>
        <li>Agent/Guest(s) agrees to indemnify Encalm in respect to all claims, damages, losses, costs, and expenses (including legal expenses) which are awarded against or incurred by Encalm as a direct result of acts or omissions by Agent/Guest(s) either during the course of booking and/or using the Service.</li>
        <li>Encalm shall not be liable for the consequences of any delay or for any loss, cost or expense incurred by Agent/Guest(s) as a result of the actions of any other party including without limitation the Airline, Customs and Immigration Authorities etc.</li>
        <li>In relation to the Service, Encalm accepts no liability for any items left or disclaimed by the Guest(s) during the course and after providing the Service. Further, in relation to Ancillary Services, Encalm accepts no liability for any transaction executed by Agent and/or Guest with APBS and Encalm shall be liable for any shortfalls including gap in actual service delivery and guests expectations, amount paid to APBS for availing services or performance of services by the final service provider.</li>
        <li>By offering Services, Encalm does not accept any liability for damages, losses, or delays that may result on account of dealing with APBS or/and improper documents including without limitation possession of valid ticket, visa, passport or any other requirement in relation to entry, exist, length of stay, special permissions etc. as may be required for traveling through airport.</li>
        <li>Agent(s) acknowledge and agree to inform Guest(s) of these Terms and Conditions including with Conditions of Service at Airport provided above.</li>
      </ol>
    </li>
    <li><strong>Cancellations & Amendments</strong>
      <p class="text-justify color-black">Cancellations/amendments may be made up to 72 hours before commencement of service and subject to any applicable payment surcharge, local fees and/ or taxes, and the following timelines:</p>
      <table class="table table-bordered text-center">
        <tbody>
            <tr>
                <th colspan="2"><u>Silver & Gold Service</u></th>
            </tr>
            <tr>
                <th width="50%">S. No. Cancellation of Services</th>
                <th width="50%">Cancellation Charges</th>
            </tr>
            <tr>
                <td>Up to 72 hours prior to the scheduled meeting time</td>
                <td>3% of the Booking Amount</td>
            </tr>
            <tr>
                <td>Between 72 to 48 hours prior to scheduled meeting time</td>
                <td>10% of the Booking Amount</td>
            </tr>
            <tr>
                <td>Between 48 to 24 hours prior to the scheduled meeting time </td>
                <td>30% of the Booking Amount</td>
            </tr>
            <tr>
                <td>Less than 24 hours</td>
                <td>100% of the Booking Amount</td>
            </tr>
            <tr>
                <td>Failure to arrive at the appointment time will be considered as No Show</td>
                <td>100% of the Booking Amount</td>
            </tr>
        </tbody>
    </table>
    <p>&nbsp;</p>
    <table class="table table-bordered text-center">
        <tbody>
            <tr>
                <th width="50%">Reschedule of Service</th>
                <th width="50%">Cancellation Charges</th>
            </tr>
            <tr>
                <td>Between 48 to 24 hours prior to the scheduled meeting time</td>
                <td>0% of the Booking Amount, if the reschedule is within 48 hours of travel</td>
            </tr>
            <tr>
                <td>Between 48 to 24 hours prior to the scheduled meeting time</td>
                <td>10% of the Booking Amount, if the reschedule is beyond 48 hours of travel</td>
            </tr>
            <tr>
                <td>Less than 24 hours</td>
                <td>10% of the Booking Amount</td>
            </tr>
        </tbody>
    </table>
    <p>&nbsp;</p>
    <h4>For Elite</h4>
    <table class="table table-bordered text-center">
        <tbody>
            <tr>
                <th width="50%">S. No. Cancellation of Services</th>
                <th width="50%">Cancellation Charges</th>
            </tr>
            <tr>
                <td>Up to 72 hours prior to the scheduled meeting time</td>
                <td>0% of the Booking Amount</td>
            </tr>
            <tr>
                <td>Between 72 to 48 hours prior to scheduled meeting time </td>
                <td>0% of the Booking Amount</td>
            </tr>
            <tr>
                <td>Between 48 to 24 hours prior to the scheduled meeting time</td>
                <td>0% of the Booking Amount</td>
            </tr>
            <tr>
                <td>Up to 12 hours prior to the scheduled meeting time</td>
                <td>50% of the Booking Amount</td>
            </tr>
            <tr>
                <td>Within 12 hours prior to the scheduled meeting time</td>
                <td>100% of the Booking Amount</td>
            </tr>
            <tr>
                <td>Failure to arrive at the appointment time will be considered as No Show</td>
                <td>100% of the Booking Amount</td>
            </tr>
        </tbody>
    </table>
    <p>&nbsp;</p>
    <h4>Terms & Conditions</h4>
    <ul>
        <li>ATITHYA reserves the right to collect additional fees in the event there are more guests than originally booked.</li>
        <li>For ALL Welcome & Assist Services, no show will be declared if the passenger is absent at the meeting point after 30 minutes from the agreed arrival time. No show is subject to full payment of the total amount.</li>
        <li>ATITHYA reserves the right to charge additional 50% of the full services price in case the flight delays over 2 hours from the STA/STD and every 2 hours thereafter.</li>
        <li>Service order shall be submitted and confirmed at least forty eight (48) hours in advance prior to Arrival or departure. Any service order submitted with less than 48 hours' notice will be subject to availability.</li>
    </ul>
    </li>
    <li>
      <strong>Note</strong>
      <ol class="text-justify" type="a">
        <li>For the purpose of calculating cancellation charges, Booking Amount shall mean the total amount (Including taxes) paid by the Agent.</li>
        <li>Encalm shall endeavour to process refund if applicable, within 15 days from the date of cancellation and receipt of bank/credit card details.</li>
        <li>In case of re-scheduling of services, the guest shall share the revised itinerary maximum within 48 hours from the time of rescheduling request. All rescheduling requests shall be subject to availability.</li>
        <li>Cancellation charges for Ancillary Services, if booked by the Agent through APBS, shall be subject to APBS T&amp;Cs and Agent/guest shall be required to deal with APBS directly and Encalm shall not be liable for providing any refunds, claims, credits to Agent for any transaction executed by it with APBS.</li>
        <li>No refund will be made in case of the following:
          <ol class="text-justify" type="i">
            <li>Wrong information about travel details of Guest(s) during the Booking Process;</li>
            <li>No Shows;</li>
            <li>Booking amount paid for Service Add-ons;</li>
            <li>Delayed/missed/cancelled flights;</li>
            <li>Late arrival at the airport which results in denied check-in or boarding by the airlines;</li>
            <li>In case of any misconduct or any unlawful or prohibited activity by the Agent/Guest(s);</li>
            <li>In case Agent has availed promotions offer or discounts or cash back etc. during booking.</li>
          </ol>
        </li>
      </ol>
    </li>
    <li>
      <strong>General</strong>
      <p class="text-justify color-black">The scope of Services includes various services and packages broadly defined under following categories:</p>
      <ol class="text-justify" type="a">
        <li>Encalm reserves the right to amend, add to, change or remove any part of these Terms and Conditions at any time, without notice. Any changes to these Terms and Conditions or any terms posted on the website apply as soon as they are posted. By continuing to use the website after any changes are posted, you are indicating your acceptance of those changes.</li>
        <li>Encalm shall not be liable for and shall be excluded from any liability, loss or damage of any kind incurred as a result of the use of the website or reliance on any information provided on the website or arising from the use of Encalm services unless it is caused by the wilful misconduct or gross negligence of the Encalm</li>.
        <li>Encalm may add, change, discontinue, remove or suspend any other content posted on the website, including features and specifications of products described or depicted on the website, temporarily or permanently, at any time, without notice and without liability.</li>
        <li>Encalm reserves the right to undertake all necessary steps to ensure that the security, safety, and integrity of Encalm systems as well as its client’s interests are and remain, well-protected.</li>
        <li>Encalm may take various steps to verify and confirm the authenticity, enforceability and validity of reservations placed by Agent(s).</li>
        <li>Encalm in its sole and exclusive discretion, concludes that any reservation(s) is not or do not reasonably appear to be, authentic, enforceable, or valid, then Encalm may cancel the said reservation any time before or during the Service.</li>
        <li>Any communications or materials to the website by electronic mail or otherwise, including any comments, data, questions, suggestions, or the like, all such communications are, as may be received by Encalm will be treated by Encalm as non-confidential.</li>
        <li>Agent(s)/Guest(s) hereby give up any and all claim that any use of such material violates any of Agent(s)/Guest(s) rights including moral rights, privacy rights, proprietary or other property rights, publicity rights, rights to credit for material or ideas, or any other right, including the right to approve the way Encalm uses such material.</li>
        <li>Any material submitted to our website may be adapted, broadcast, changed, copied, disclosed, licensed, performed, posted, published, transmitted or used by Encalm anywhere in the world, in any medium, forever. Agent(s) agrees that it has read our Privacy Policy as provided on our website.</li>
        <li>Agent(s) acknowledges that Internet transmissions are never completely private or secure. Agent(s) further understands that any message or information as may be sent to our website may be read or intercepted by others unless there is a special notice that a particular message (for example, credit card information) is encrypted (send in code). Sending a message or email or any communication written or verbal to Encalm does not cause Encalm to have any special responsibility to Agent/Guest(s).</li>
        <li>Copying of part or all the contents of this website without permission of Encalm is prohibited except to the extent that such copying/printing is necessary for the purposes of availing of the Services.</li>
        <li> Disputes, if any, shall be subject to Indian laws and shall be exclusively subject to the jurisdiction of the courts at New Delhi.</li>
        <li>The booking for Services displayed on this website may not be available for purchase in any country or locality. The reference to such Services on the website does not imply or warrant that the booking of Services will be available at any time in such geographical location(s). Person or entity interested in booking the Services may check with their local Sales Agent for information on the availability of Services.</li>
        <li>Unless otherwise agreed in writing, these Terms and Conditions along with the Privacy Policy shall be entire agreement and understanding between Encalm and the Agent(s)/Guest(s), as the case may be.</li> 

      </ol>
    </li>
    
  </ol>
              <li>Customer/Guest Information:
              Encalm may only collect Personal Data about an individual which it reasonably considers necessary for the relevant purposes underlying such processing. The following can form part of the Personal Data:
              <ol type="i">
                <li>Demographic
                  <ol type="a">
                    <li>Name;</li>
                    <li>Telephone number;</li>
                    <li>E-mail address;</li>
                    <li>Identity proof, if any as provided during booking stage;</li>
                    <li>Class of travel as provided during booking stage;</li>
                  </ol>
                </li>
 	              <li>Transaction related
                  <ol type="a">
                    <li>Transaction details and any other information which you have provided to us;</li>
                    <li>Data usage and platforms including traffic data;</li>
                    <li>Location data;</li>
                    <li>The originating domain name of your internet service provider;</li>
                    <li>Statistics on page;</li>
                    <li>Views cookies and IP addresses.</li>
                  </ol>
                </li>
              </ol>
              </li>
 	            <li>Information from Other Sources:<br>
              We also may periodically obtain information about you from our business partners and other independent third-party sources and add it to our account information. Examples of information we may receive include: updated delivery and address information, which we use to correct our records and to facilitate proper delivery of services; and demographic information, which we use to better understand your potential purchasing preferences.</li>
 	            <li>Automatic Information:<br>
              We automatically collect some information about your computer when you visit the Website. For example, we will collect your IP address, Web browser software (such as Netscape Navigator or Internet Explorer or Safari or Google Chrome etc.), and referring Website. We also may collect information about your online activity, such as Services package viewed and purchases made. One of our goals in collecting this automatic information is to help customize your user experience.</li>
              <li>Cookies and Other Web Technologies:<br>
              When you visit the Website we may assign your computer a "cookie" (a small, unique identifier text file). For example, whenever you sign in as a member, we record your member ID and the name on your member account in the cookie file on your computer. We also may record your password in this cookie file, if you checked the box entitled "Save this password for automatic sign-in." Note that member IDs, passwords, and any other account-related data included in such cookies are encrypted for security purposes. You can always choose not to receive a cookie file by enabling your Web browser to refuse cookies or to prompt you before accepting a cookie. Please note that if you refuse to accept cookies from the Website, you may not be able to access many of the existing or future services as may be offered by the Website.</li>
              <li>Information Collected by Third-Parties:<br>
              We may provide links to third-party websites on the Platforms. Your use of such third-party websites will be subject to their privacy policies and is not covered by this Policy. We encourage you to read the privacy policies on the other websites you visit. As we cannot control or be responsible for the policies of other sites we may link to, or the use of any data you may share with them, you access these third-party websites at your own risk. The following can form part of the following third-party:
              <ol type="i">
                <li>Partners who use our analytics services.</li>
                <li>Advertisers.</li>
                <li>Partners offering services as part of Encalm Service offerings.</li>
                <li>Vendors and service providers.</li>
                <li>Researchers and academics.</li>
                <li>Law enforcement or legal requests.</li>
              </ol>
              </li>
 	            <li>How we use your information:<br>
              If you are giving us your personal information in the course of registering or subscribing to a service or product at our website, then we will only use your information in order to provide you with that service or for closely related purposes. Your personal data is generally processed by us as necessary for purposes directly related to our functions and activities. Specifically, Data may be used by us for the following reasons:
              <ol type="i">
                <li>improvement of our products or services;</li>
                <li>transmission by email or any other form of communication of marketing materials to you;</li>
                <li>contact for survey or feedback which may be done using email or mail;</li>
                <li>to enable our group entities to reach out to you in relation to their programmes managed by them / products or services offered by them;</li>
                <li>to process your requests (such as replying to your queries); and</li>
                <li>to execute other activities such as marketing campaign, promotional communications for which consent is taken appropriately.</li>
                <li>Provision of Services, development and improvement;</li>
                <li>Verification of identity for the purposes of processing and administering any membership application or registration;</li>
                <li>Marketing messages and activities;</li>
                <li>Conducting programmes and events;</li>
                <li>To carry out profiling and statistical analysis;</li>
                <li>Update on info about changes to programmes, policies, terms and conditions, Platform updates and other administrative information;</li>
                <li>to prevention and detection of crime, fraud, risks, address security or technical issues;</li>
                <li>To customise the Platforms and their content to particular preferences;</li>
                <li>To conduct surveys, questionnaires and requests for feedback;</li>
                <li>To respond to queries, requests, feedback and complaints;</li>
                <li>To meet the requirements of any applicable laws/regulations, enforceable governmental request or court order;</li>
                <li>To fulfil such other purpose as may be specified in a data protection and privacy notice given to you at the time your Personal Data is collected; and/or</li>
                <li>For the operations of Website and Newsletter</li>
              </ol>
              </li>
 	            <li>With whom we share your information:<br>
              In carrying out one or more of the purposes set out in above points of this Policy, we may need to disclose your Personal Data to one or more of the following third parties:
              <ol type="i">
                <li>Agents;</li>
                <li>Authorised service providers such as marketing partners and web analysis companies, and their business partners;</li>
                <li>Auditors and professional advisors;</li>
                <li>Business partners;</li>
                <li>Entities authorised by ENCALM for booking of travel concierge or ancillary services;</li>
                <li>Underwriters and insurers;</li>
                <li>Law enforcement agencies;</li>
                <li>Any person to whom disclosure is permitted or required by any applicable laws/regulations, enforceable governmental request or court order; and/or</li>
                <li>Any companies comprised in the group.</li>
              </ol>
              </li>
 	            <li>How you can access your information:<br>
              You can access your information at various points on the Website. These include:
              <ol type="i">
                <li>The My Account pages (only for registered users) on the Website, where you can view, update, or change your personal information online subject to provision of such facility by ENCALM. On this page, you also can change your password; elect to have an automatic password sign-in when logging on to the Website; add new travellers and delete existing travellers from your member profile; update or correct names, phone numbers, and emergency contacts for travellers associated with your profile; and update your travel preferences.</li>
                <li>The Manage My Bookings page, where you can view, and update your booking details.</li>
                <li>You can close your Website account by selecting the Account Closure option. We will send you an e-mail confirming your request to close your account to the e-mail address contained in your member profile. Please note that after you close an account, you will not be able to sign in or access any of your personal information. However, you can open a new account at any time. Please also note that we may retain certain information associated with your account for analytical purposes as well as for record keeping integrity.</li>
                <li>Your choices with respect to collection and use of your information:</li>
                <li>You can choose not to provide us with any information, although it may be needed to take advantage of certain features offered on the Website.</li>
                <li>You also can add or update information on the My Account and close your account as described above.</li>
                <li>The Help portion of the toolbar on most browsers will tell you how to prevent your browser from accepting new cookies, how to have the browser notify you when you receive a new cookie, or how to disable cookies altogether. Please note that if you refuse to accept cookies from the Website, you will not be able to access portions of our Website.</li>
              </ol>
              </li>
 	            <li>How we protect your information:<br>
              We want you to feel confident about using the Website to undertake the booking of Services, so we are committed to protecting the information we collect. While no Website can guarantee cent percent security, we have implemented appropriate administrative, technical, and physical security procedures to help protect the personal information you provide to us. For example, only authorized employees are permitted to access personal information, and they only may do so for permitted business functions. In addition, we use encryption when transmitting your sensitive personal information between your system and ours, and we employ firewalls and intrusion detection systems to help prevent unauthorized persons from gaining access to your information. Our systems are configured with data encryption, or scrambling, technologies, and industry-standard firewalls. When you send personal information to the Website over the Internet, your data is protected by Secure Socket Layer (SSL) technology to ensure safe transmission.</li>
 	            <li>Data Retention:<br>
              We will cease to retain your Personal Data when the purposes for which we collected your Personal Data have ceased and/or when we are no longer required to continue retaining your Personal Data for any legal or business purposes.
              </li>
 	            <li>Changes to this Privacy Policy:<br>
              ENCALM may update this Privacy Policy in the future. We will notify you about material changes to this Privacy Policy by sending a notice to the e-mail address you provided to us or by placing a prominent notice on our website.
              </li>
            </ol>
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