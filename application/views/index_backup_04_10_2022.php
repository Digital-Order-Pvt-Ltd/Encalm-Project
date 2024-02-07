<?php
$meta_title = 'Airport Hospitality and Premium Services |  Airport Assistance by Encalm';
$meta_description = 'Encalm provides premium airport hospitality services such as concierge service & airport assistance in New Delhi\'s IGI (DEL) Airport. With Encalm, you can have a luxury travel experience as they make arrival, departure & transit seamless for guests.';
$meta_website_description = 'Encalm specializes in curating comfortable and luxurious experiences at the airport. Encalm aims to make the airport experience special for their guests and provides premium services, setting new benchmarks in airport hospitality. With their offerings such as concierge service and airport assistance, Encalm focuses on creating delightful experiences for their guests.';
include('header.php'); ?>
 <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
 <style>
 .delightful {
	 font-family: 'Great Vibes', cursive !important;
   font-size: 24px;
 }
 @media only screen and (max-width: 768px) {
    .delightful {
      color: #262626;
    }
  }
 #homebook {
	 -webkit-appearance: auto;
    -moz-appearance: auto;
    appearance: auto;
 }
 .service_desc.enwrap p {
	color: #540708;
}
.service_desc.enwrap {
	background: #f4f5f0;
}
 </style>
<style>
/*@font-face{font-family:Gill-Sans-Nova-Medium;*/
/*    src:url(/fonts/Monotype_-_Gill_Sans_Nova_Medium.woff);*/
/*}*/
@font-face {
         font-family:Brandon;
         src: url(<?=base_url()?>assets/fonts/Brandon_reg.otf); 
         
       }
         @font-face {
         font-family:Brandon-bld;
         src: url(<?=base_url()?>assets/fonts/Brandon_bld.otf); 
         
       }
       body{font-family:Brandon!important; font-size: 18px;}
        #homebook, #homebook option {
           font-family:Brandon !important;
           font: -moz-pull-down-menu;
        }
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
         /* .foo-book{position: fixed;
           width: 12%!important;
           top: 96px;
           right: 16%;
           z-index: 9999;} */
         .footer-info h6{font-family:Brandon!important; font-weight:400!important;}
         .back-to-top{position: relative!important; right: 0!important; bottom:0!important; border:0px!important;}
         .flip-card {
         background-color: transparent;
         width: 400px;
         height: 425px;
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
           background-color: #152349;
           color: #ffffff;
           transform: rotateY(180deg);
          padding:30px 20px;
         }
         .text-justify{text-align: justify;}
         section{padding: 30px 0!important;}
         .section-title{padding-bottom: 10px!important;}
         .btn-main{width: 100%; background-color:#cda45e; border: solid 1px #cda45e; border-radius: 5px; padding: 7px 25px;}
         .cus-btn{background-color: #cda45e; padding:8px 15px; color:#ffffff!important; border-radius:5px; position: relative; top: 15px;}
         .bg-img-icon{width:100px!important;}
         #hero .container {
           padding-top: 650px!important;
       }
       .single-logo img{padding:0px 15px!important;}
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
           .mar-bt-15{margin-bottom:15px;}
             .bg-greyer{background-color: #eeeeee;}
             .blacks-box{width: 100%;
           background: #303030;
           border-radius: 4px;
            overflow: hidden;}
           .blacks-box img{width: 100%;}
           p.rate{background: #000000!important; padding: 2px 15px; color:#ffffff!important; text-align: center;}
           .ful{padding:8px 15px;}
           .ful .wid-50{width: 50%;
           text-align: center;
           float: left;
           padding: 18px;
           
           }
           .foots li{padding:3px 0px!important;}
           .books {
    background-color: #cda45e;
    width: 100%;
    border: 0px;
    padding: 6px 25px;
    text-align: center;
    color: #ffffff;
    font-size: 20px;
    margin-top: 0px;
    border-radius: 5px;
    height: 40px;
    max-width: 150px;
    margin-left: 15px;
}
           #hero{background-image: url('<?=base_url()?>assets/image/logo/header.jpg')!important;}
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
       background: #0000;
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
         color: #FFF;
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
       .blacks-bg{background-color:#000000!important; padding:20px 0px;}
       .bor-rgt{border-right: 2px solid #cda45e;}
       .video-position{padding:0px 0px!important;}
       .two-logo{position: absolute;
           width: 100%;
           top: 15%;}
           .dis-hide{display:none!important;}
           .hamburger{display:none;}
          .hamburger button { background: #00000000;
           color:#ffffff;
           border: 0px;
           font-size: 30px;
           position: absolute;
           right: 15px;
           top: 20px;}
           .close-menu{display: none!important;}
           .social-media{position: absolute; margin-top:71px;}
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
               #hero .container {
           padding-top: 170px!important;
       }
               #hero{height:auto;}
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
              #navArea .logo img{ width: 14%; height: 42px; position: absolute; left: 20px;}
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
               .flip-card{width:100%;}
                .social-media{position: relative; margin-top:15px;}
                .close-menu{display: block!important;}
                .close-menu button{position: relative; right: 0; width: 100%; text-align: right; background: #0000; border: 0px; color: #ffffff; padding: 10px 15px 0px; font-size: 20px;}
                .text-primarys{padding: 15px 0px!important;}
                .bg-blue{padding: 15px 0px;}
                .mob-hidden{display:none;}
                .mob-foot-phone{display:block;}
           }
           .our_services{
               margin-top:40px;
           }
           .service_list{
               display: flex;
               align-items: center;
               margin-bottom: 50px;;
           }
           .service_desc {
               padding: 30px;
               background: #152349;
               max-width: 48%;
               height: 356px;
               text-align: center;
               margin-left: -200px;
               z-index: 99;
               position: relative;
               border-radius: 4px;
           }
           .our_services .service_list:nth-child(odd) .img_area{
               order:2;
           }
           .our_services .service_list:nth-child(odd) .service_desc{
               margin-right: -200px;
               margin-left: auto;
           }
           .img_area {
               width: 69%;
               float: right;
               position: relative;
               min-height: 473px;background: #c5ac84;
           }
           .img_area img{
               float: right;
               max-width: 100%;
           }
           #advBanner .btn-close{
             position: absolute;
             right: -10px;
             border-radius: 50%;
             height: 40px;
             width: 40px;
             font-size: 20px;
             line-height: 0;
             border: 0;
             top: -13px;
             background-color: #ddd;
             opacity: 1;
           }
           #advBanner{
             z-index: 99999;
           }
           #advBanner img{
             max-width: 100%;
           }
           .service_desc:before {
                   width: 163px;
                   height: 164px;
                   background: url('<?=base_url()?>assets/image/service_border.png') no-repeat;
                   top: -25px;
                   content: "";
                   position: absolute;
                   right: auto;
                   left: -15px;
                   z-index: 999;
                   transform: rotate(180deg);
               }
               .service_desc:after {
                   width: 163px;
                   height: 164px;
                   background: url('<?=base_url()?>assets/image/service_border.png') no-repeat;
                   bottom: -25px;
                   content: "";
                   position: absolute;
                   right: auto;
                   right: -15px;
                   z-index: 999;
               }       
               .book_now_cta {
                    width: 400px;
                    margin-left: 0;
                    max-width: 500px;
                    margin-top:5px;
                    text-align: center;
                    display: block !important;
                    position: fixed;
                    top: 5px;
                    left: 24%;
                    border-radius: 3px;
                    z-index: 99999;
                }
                @media screen and (min-width: 1600px) {
                .book_now_cta {
                    width: 100%;
                    margin-left: 0;
                    max-width: 500px;
                    margin-top:5px;
                    text-align: center;
                    display: block !important;
                    position: fixed;
                    top: 5px;
                    left: 24%;
                    border-radius: 3px;
                    z-index: 99999;
                }
                }
                .is-sticky .post-bottom.delightful{color:#000 !important}

                .modal-lg, .modal-xl {
                    max-width: 600px;
                }
                .service_desc p {
    color: #e5e5e5;
}
/* .our_services .service_list:nth-child(4) .service_desc{
  background: #641a1b;
}
 */
#advBanner .modal-body{
  padding:8px;
}
@media screen and (max-width: 767px) {
  .book_now_cta{position: static;display: none !important;}
  .book_now_cta.isMobile{display: block !important;}
  .book_now_cta .delightful {color: #262626 !important;}
  .service_list {flex-direction: column;}
  .our_services .service_list:nth-child(odd) .img_area {
    order: 0;
  }
  .service_desc {
    margin-left: 0 !important;
    max-width: 100%;
    margin-right: 0 !important;
    height: auto;
      padding-bottom: 50px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
  }
  .img_area {
      width: 100%;
      min-height: auto;
  }
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
<!--<video width="320" height="240" controls autoplay>
  <source src="<?=base_url()?>assets/Encalm_Main.mp4" type="video/mp4">
  
</video>-->
<div class="container" style="position: relative;" id='booknow_sec'>
      <div class="book_now_cta">
        <form id="homeform" action="" method="post">
              <div class="blacks-box">
                  <p class="rate mb-0">Book your Airport Experience</p>
                  <div class="ful d-flex">
                    <!--<div class="wid-50 bor-rgt">-->
                    <!--  <img src="<?=base_url()?>assets/img/logolounge.png" alt="encalm">-->
                    <!--</div>-->
                    <!--<div class="wid-50">-->
                    <!--  <img src="<?=base_url()?>assets/img/logoatithya.png" alt="atithya">-->
                    <!--</div>-->
                    
                    <select name="site" id ="homebook" class="form-control">
                        <option>Select Service</option>
                        <option value="<?=base_url()?>services/encalmlounge"><img src="<?=base_url()?>assets/image/logolounge.png" alt="Lounge Service" title="Lounge Service" style="width: 30px;"> Encalm Lounge</option>
                        <option value="<?=base_url()?>atithya"><img src="<?=base_url()?>assets/image/Atithya-Logo-Golden.png" alt="Atithya" title="Atithya" style="width: 30px;"> Atithya - Welcome & Assist Service</option>
                        <option value="<?=base_url()?>spa"><img src="<?=base_url()?>assets/image/logolounge.png" alt="Encalm Spa" title="Encalm Spa" style="width: 30px;"> Encalm Spa</option>
                        <option value="<?=base_url()?>services/enwrap"><img src="<?=base_url()?>assets/image/logolounge.png" alt="Enwrap" title="Enwrap" style="width: 30px;"> Enwrap</option>
                    </select>
                    
                    <div class="clear"></div>
                    <button class="books" id="book_now" onclick="">Book Now</button>
                  </div>
                  
              </div>
              <h1 class="text-white post-bottom delightful mt-1 mb-0">Creating Delightful Experiences </h1>
          </form>
      </div>
</div>
<section class="video-position">
<video autoplay="autoplay" muted="true" playsinline="" id="bgvid" preload="yes" loop="" width="100%">
    <source src="<?=base_url()?>assets/img/Encalm_Main.mp4" type="video/mp4">
    <source src="<?=base_url()?>assets/img/Encalm_Main.webm" type="video/webm">
    <source src="<?=base_url()?>assets/img/Encalm_Main.aac" type="video/aac">
  </video>
</section>
<!--section id="hero" class="d-flex align-items-center">
  <div class="container position-relative text-center text-lg-start aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
  </div>
  <div class="scrolldown">
	<a href="#" onclick="scrolldown()">Scroll</a>
  </div>
</section-->
<section class="two-logo d-none">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">

          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-md-10 m-auto">
              <form id="homeform" action="" method="post">
                  <div class="blacks-box">
                      <p class="rate mb-0">Book your Airport Experience</p>
                      <div class="ful">
                        <!--<div class="wid-50 bor-rgt">-->
                        <!--  <img src="<?=base_url()?>assets/img/logolounge.png" alt="encalm">-->
                        <!--</div>-->
                        <!--<div class="wid-50">-->
                        <!--  <img src="<?=base_url()?>assets/img/logoatithya.png" alt="atithya">-->
                        <!--</div>-->
                        
                        <select name="site" id ="homebook" class="form-control mar-bt-15">
                            <option>Select Sevice</option>
                           <option value="<?=base_url()?>services/encalmlounge"><img src="<?=base_url()?>assets/image/logolounge.png" alt="Lounge Service" title="Lounge Service" style="width: 30px;"> Encalm Lounge</option>
                           <option value="<?=base_url()?>atithya"><img src="<?=base_url()?>assets/image/Atithya-Logo-Golden.png" alt="Atithya" title="Atithya" style="width: 30px;"> Atithya - Welcome & Assist Service</option>
                           <option value="<?=base_url()?>spa"><img src="<?=base_url()?>assets/image/logolounge.png" alt="Lounge Service" title="Lounge Service" style="width: 30px;"> Encalm Spa</option>
                           <option value="<?=base_url()?>services/enwrap"><img src="<?=base_url()?>assets/image/logolounge.png" alt="Lounge Service" title="Lounge Service" style="width: 30px;"> Enwrap</option>                           
                        </select>
                        
                        <div class="clear"></div>
                        <button class="books" id="book_now" onclick="">Book Now</button>
                      </div>
                      
                  </div>
              </form>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 m-auto text-center text-white pt-4">
                <h1 class="post-bottom delightful mb-0">Creating Delightful Experiences </h1>
                
              </div>
            </div>
          </div>
        </div>
  </div>
</section>
<!------------------About Us----------------->
<section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 pt-4 pt-lg-0 content">
          <div class="section-title text-center">
            <!--<h2>About</h2>-->
            <p> About Encalm Hospitality Pvt. Ltd.</p>
          </div>
          <p class="text-center text-secondary">Encalm Hospitality Pvt. Ltd. (Encalm) specialises in curating and delivering special experiences in the arena of Airport Hospitality. </p>
          <p class="text-center text-secondary">Encalm offers products and services that support various non-aviation revenues including VIP Lounges, Concierge Services and Airport Hotel etc. </p>
          <p class="text-center text-secondary">Encalm’s strategic partnership with TAV enables it to leverage their network of prime class services and over 500 Lounge worldwide.</p>
          <p class="text-center text-secondary">With this, Encalm is redefining and developing new benchmarks of airport hospitality focused at delivering memorable lounge and airport concierge experience to travelers at airports in India.</p>
		  
		  


        </div>
      </div>
    </div>
</section>
<!----------------------About Us---------------------->
<!----------------------Services----------------------------->
  <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
             <div class="section-title text-center mb-3">
              <!-- <h2>Our</h2> -->
              <p>Our Services</p>
            </div> 
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="our_services">
                <div class="service_list">
                        <div class="img_area">
                          <img class="wow fadeIn" data-wow-duration=".5s" data-wow-delay="1.5s" src="<?=base_url()?>assets/image/atithya.jpg" alt="" />
                        </div>
                        <div class="service_desc wow fadeInLeft" data-wow-delay="0.5s">
                          <h2 class="text-center"><img class="bg-img-icon" src="<?=base_url()?>assets/image/white-at.png" alt="Atithya"></h2> 
                          <p class="text-justify">Atithya, with a concept of Atithi Devo Bhava (Guest is of supreme importance and is treated as God) is a bespoke Welcome & Assist service presented by Encalm Hospitality Pvt. Ltd. With a mission to make airport travel a unique experience in itself.</p> 
                          <a href="<?=base_url()?>services/atithyameetandgreet" class="cus-btn">Read More <i class="bi bi-arrow-right-circle"></i></a>
                        </div>
                    </div>

                    <div class="service_list">
                        <div class="img_area">
                            <img class="wow fadeIn" data-wow-duration=".5s" data-wow-delay="1.5s" src="<?=base_url()?>assets/image/lounge.jpg" alt="Encalm" />
                        </div>
                        <div class="service_desc wow fadeInRight" data-wow-delay="0.5s">
                          <h2 class="text-center"><img class="bg-img-icon" src="<?=base_url()?>assets/image/gold-louage.png" alt="Louage"></h2> 
                          <p class="text-justify">Building up a space for the airport travelers wherein they can step aside from the airport hustle and walk into the calmness of the “Encalm Lounge”. Designed by the experts of the industry, every element is finely defined to provide our guest with utmost comfort.</p> 
                          <a href="<?=base_url()?>services/encalmlounge" class="cus-btn">Read  More <i class="bi bi-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    

                    <div class="service_list">
                        <div class="img_area">
                          <img class="wow fadeIn" data-wow-duration=".5s" data-wow-delay="1.5s" src="<?=base_url()?>assets/image/spa.jpg" alt="" />
                        </div>
                        <div class="service_desc wow fadeInLeft" data-wow-delay="0.5s">
                          <h2 class="text-center"><img class="bg-img-icon" src="<?=base_url()?>assets/image/gold-spa.png" alt="SPA"></h2> 
                          <p class="text-justify">Whether a long flight, transit journey or just wanting to feel special, treat yourself to a relaxing experience at the Encalm Spa at the airport. Our talented therapist would ensure you are rejuvenated, relaxed and refreshed before commencing your journey.</p> 
                          <a href="<?=base_url()?>spa" class="cus-btn">Read More <i class="bi bi-arrow-right-circle"></i></a>
                        </div>
                    </div>

                    <div class="service_list">
                        <div class="img_area">
                          <img class="wow fadeIn" data-wow-duration=".5s" data-wow-delay="1.5s" src="<?=base_url()?>assets/image/enwrap.png" alt="" />
                        </div>
                        <div class="service_desc wow fadeInRight enwrap" data-wow-delay="0.5s">
                          <h2 class="text-center"><img class="bg-img-icon" src="<?=base_url()?>assets/image/enwrap_red.png" alt="Encalm"></h2> 
                          <p class="text-justify">Premium luggage wrapping service, “EnWrap” from Encalm Hospitality at Delhi and Hyderabad airport. This allows travellers to ensure that their luggage receives extra care during their journey. 

A well-trained professional makes sure that the luggage is wrapped as per the global standards and the usage of biodegradable material makes this a must have for all your luggage.  The service can be availed at the EnWrap kiosk located in the check in halls</p> 
                          <a href="<?=base_url()?>services/enwrap" class="cus-btn">Read More <i class="bi bi-arrow-right-circle"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row d-none">
          <div class="col-lg-4">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front pl-5 pr-5 pt-5 pb-5">
                  <img src="<?=base_url()?>assets/image/logolounge.png" alt="Lounge Service" title="Lounge Service" style="width: 310px;"/>
                  <!-- <h3 class="text-title">Encalm Lounge</h3> -->
                </div>
                <div class="flip-card-back">
                  <h2 class="text-center"><img class="bg-img-icon" src="<?=base_url()?>assets/image/white-image/white-louage.png" alt="Encalm"></h2> 
                  <p class="text-justify">Building up a space for the airport travelers wherein they can step aside from the airport hustle and walk into the calmness of the “Encalm Lounge”. Designed by the experts of the industry, every element is finely defined to provide our guest with utmost comfort.</p> 
                  <a href="<?=base_url()?>services/encalmlounge" class="cus-btn">Read  More <i class="bi bi-arrow-right-circle"></i></a><br>&nbsp;
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front pl-5 pr-5 pt-5 pb-5">
                  <img src="<?=base_url()?>assets/image/Atithya-Logo-Golden.png" alt="Atithya" title="Atithya" style="width: 310px;">
                  <!-- <h3 class="text-title">Atithya</h3> -->
                </div>
                <div class="flip-card-back">
                  <h2 class="text-center"><img class="bg-img-icon" src="<?=base_url()?>assets/image/white-at.png" alt="Encalm"></h2> 
                  <p class="text-justify">Atithya, with a concept of Atithi Devo Bhava (Guest is of supreme importance and is treated as God) is a bespoke Welcome & Assist service presented by Encalm Hospitality Pvt. Ltd. With a mission to make airport travel a unique experience in itself.</p> 
                  <a href="<?=base_url()?>services/atithyameetandgreet" class="cus-btn">Read More <i class="bi bi-arrow-right-circle"></i></a><br>&nbsp;
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front pl-5 pr-5 pt-5 pb-5">
                  <img src="<?=base_url()?>assets/image/SPA/Asset-3@2x-8.png" alt="Baggage Assistance" title="Baggage Assistance" style="width: 310px;"/>
                  <!-- <h3 class="text-title">Encalm SPA</h3> -->
                </div>
                <div class="flip-card-back">
                  <h2 class="text-center"><img class="bg-img-icon" src="<?=base_url()?>assets/image/white-image/white-spa.png" alt="Encalm"></h2> 
                  <p class="text-justify">Whether a long flight, transit journey or just wanting to feel special, treat yourself to a relaxing experience at the Encalm Spa at the airport. Our talented therapist would ensure you are rejuvenated, relaxed and refreshed before commencing your journey.</p> 
                  <a href="<?=base_url()?>spa" class="cus-btn">Read More <i class="bi bi-arrow-right-circle"></i></a><br>&nbsp;
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-----------------------------Brand Logo Partner------------------------------------------>
  <section class="bg-greyer d-none">
    <div class="container pt-4">
      <div class="row">
          <div class="col-lg-12">
             <div class="section-title text-center">
             <!--  <h2>Our</h2> -->
              <p>Our Partners</p>
            </div> 
          </div>
        </div>
      <div class="row">
          <div class="col-lg-12">
              <div class="brand-carousel section-padding owl-carousel">
                <div class="single-logo">
                  <img src="<?=base_url()?>assets/image/logo/air-asia.png" alt="">
                </div>
              <div class="single-logo">
                  <img src="<?=base_url()?>assets/image/logo/air-india.png" alt="">
                </div>
              <div class="single-logo">
                  <img src="<?=base_url()?>assets/image/logo/fly-smart-go.png" alt="">
                </div>
              <div class="single-logo">
                  <img src="<?=base_url()?>assets/image/logo/indogo.png" alt="">
                </div>
              <div class="single-logo">
                  <img src="<?=base_url()?>assets/image/logo/vistra.png" alt="">
                </div>
              
              </div>

          </div>
      </div>
    </div>
  </section>

<!------------------------Services--------------------------->
    <div id="fb-customer-chat" class="fb-customerchat">

</div>
    <div id="fb-root"></div>

    <div class="modal fade" id="advBanner" tabindex="-1" role="dialog" aria-labelledby="advBannerTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <a href="<?=base_url()?>spa"><img src="<?=base_url()?>assets/image/popup_banner.png" alt="">
                </div>
            </div>
        </div>
    </div>


<?php include('footer.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript">
  new WOW().init();
function scrolldown() {
	$('html, body').animate({
		scrollTop: $('#hero').height()
	});
}
  window.addEventListener("scroll", function() {
    let navArea = document.getElementById("navArea");
    
    if(window.pageYOffset > 50) {
        $('.delightful').addClass('d-none');
    }
    else {
        $('.delightful').removeClass('d-none');
    }

    if (window.pageYOffset > 550) {
    navArea.classList.add("is-sticky");
    document.getElementById("white_logo").classList.add("dis-hide");
    document.getElementById("blue_logo").classList.remove("dis-hide");
    document.getElementById("book_now").classList.add("foo-book");
    document.getElementById("menu").style.color = "#152349";
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
  $(window).on("load resize scroll",function(e){
    var width = $(document).width();
    if(width <= 767){
      $('.book_now_cta').addClass('isMobile');
      var booknow = $('#booknow_sec').clone();
      $('#booknow_sec').remove();
      $('.video-position').after(booknow);
    }
  });
    $(document).ready(function(){
      $('#advBanner').modal('show');

        $('#menu').click(function(){
          $('#navArea ul').css("left","0");
        });
        $('#close-nav > i').click(function(){
          $('#navArea ul').css("left","-100%");
        });
        $('#homebook').change(function() {
          $(this).closest('form').attr('action', $(this).val());
        });
    });

</script>
<script>
    function redirect() {
          var value = $("#site").val();
          window.location.href = "<?=base_url()?>"+value;
          return ;
        }
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