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
    #hero{background-image: url('<?=base_url()?>assets/image/header.jpg')!important;}
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
<section class="video-position">
   <img src="<?=base_url()?>assets/image/logo/inter-header.jpg" alt="encalm" width="100%;"/>
</section>

<!------------------About Us----------------->
<section>
    <div class="container">
         <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
            <!--<h2>About</h2>-->
            <p>About Encalm Hospitality Pvt. Ltd.</p>
          </div>
      </div>
    </div>
      <div class="row">
        <div class="col-lg-12 pt-4 pt-lg-0 content">
          <p class="text-center text-secondary">Encalm Hospitality Pvt. Ltd. (Encalm) specialises in curating and delivering special experiences in the arena of Airport Hospitality. </p>
          <p class="text-center text-secondary">Encalm offers products and services that support various non-aviation revenues including VIP Lounges, Concierge Services and Airport Hotel etc. </p>         
          <p class="text-center text-secondary">Encalm’s strategic partnership with TAV enables it to leverage their network of prime class services and over 500 Lounge worldwide.</p>
          <p class="text-center text-secondary">With this, Encalm is redefining and developing new benchmarks of airport hospitality focused at delivering memorable lounge and airport concierge experience to travelers at airports in India.</p>

        </div>
      </div>
    </div>
</section>
<!----------------------About Us---------------------->
<section class="pt-0  container">
   
      <div style="text-align:center">
              <span class="dot">Vision</span> 
              <span class="dot">Mission</span> 
             
        </div>
   
      
      
      <div class="slideshow-container">

            <div class="mySlides fade text-center vision-text">
        
                  <p class="color-black f-20"> <span>&#8220;</span> To be the world’s most admired hospitality organization that creates value for its stakeholders. <span>&#8221;</span></p>
          </div>
    
          <div class="mySlides fade text-center mission-text">
          
                <p class="color-black f-20"><span> &#8220; </span>We are in the business of creating delightful experiences every time.<span> &#8221;</span></p> 
          </div>
            
     </div>
</section>


<!----------------------Services----------------------------->
  <section class="mt-0 pt-0">
      <div class="container">
        <!--<div class="row">-->
        <!--  <div class="col-lg-6">-->
        <!--     <div class="section-title text-center">-->
             <!--  <h2>Our</h2> -->
        <!--      <p>Values</p>-->
        <!--    </div> -->
        <!--    <p class="fst-italic mt-1 color-black text-center">Our Values ‘<strong>STEPS</strong>’ guide us at every step day-to-day, reminding how we act, the decisions we make,<br>-->
        <!--    and how we work with each other, our clients, our stakeholders, and the entire community that<br>-->
        <!--    supports us. Our values are </p>-->
        <!--    <p class="mt-4 color-black text-center">..Great Things are not done by impulse, but by series of small things brought together’ – <br>-->
        <!--    <strong>Vincent Van Gogh</strong> </p>-->
        <!--  </div>-->
        <!--  <div class="col-lg-6">-->
        <!--     <div class="row menu-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" style="position: relative; height: 450px;">-->
        <!--    <div class="col-lg-12 menu-item filter-starters" style="position: absolute; left: 0px; top: 0px;"> <img src="image/lobster-bisque.jpg" class="menu-img" alt="">-->
        <!--      <div class="menu-content"> <a href="#">Swift</a></div>-->
        <!--      <div class="menu-ingredients"> We are agile, adaptable and lead the change </div>-->
        <!--    </div>-->
        <!--    <div class="col-lg-12 menu-item filter-specialty" style="position: absolute; left: 0px; top: 90px;"> <img src="image/bread-barrel.jpg" class="menu-img" alt="">-->
        <!--      <div class="menu-content"> <a href="#">Trust</a> </div>-->
        <!--      <div class="menu-ingredients"> We work with integrity and honesty </div>-->
        <!--    </div>-->
        <!--    <div class="col-lg-12 menu-item filter-starters" style="position: absolute; left: 0px; top: 180px;"> <img src="image/cake.jpg" class="menu-img" alt="">-->
        <!--      <div class="menu-content"> <a href="#">Excellence</a> </div>-->
        <!--      <div class="menu-ingredients"> We strive for excellence in our thoughts, words and deeds </div>-->
        <!--    </div>-->
        <!--    <div class="col-lg-12 menu-item filter-salads" style="position: absolute; left: 0px; top: 270px;"> <img src="image/caesar.jpg" class="menu-img" alt="">-->
        <!--      <div class="menu-content"> <a href="#">People First</a></div>-->
        <!--      <div class="menu-ingredients"> We nurture talent and treat everyone the way we would like to be treated </div>-->
        <!--    </div>-->
        <!--    <div class="col-lg-12 menu-item filter-specialty" style="position: absolute; left: 0px; top: 360px;"> <img src="image/tuscan-grilled.jpg" class="menu-img" alt="">-->
        <!--      <div class="menu-content"> <a href="#">Sustainability</a></div>-->
        <!--      <div class="menu-ingredients"> We are sensitive and responsible towards the community and the environment </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  </div>-->
        <!--</div>-->
        
        <div class="row text-center d-none">
            <div class="col-md-12">
                      <div class="section-title text-center">
                        
                        <p>Values</p>
            </div>
            <img src="<?=base_url()?>assets/image/logo/values.jpg" alt="encalm" width="80%"/>
            </div>
        </div>
        <!--------------------Tabs---------------------------->
      <!--  <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Vision')" id="defaultOpen">Vision</button>
            <button class="tablinks" onclick="openCity(event, 'Mission')">Mission</button>
            <button class="tablinks" onclick="openCity(event, 'Values')">Values</button>
          </div>

          <div id="Vision" class="tabcontent">
            <h3 class="color-main">Vision</h3>
            <p class="text-justify">To Be World’s most admired hospitality organization that creates value for its stakeholders</p>
          </div>

          <div id="Mission" class="tabcontent">
            <h3 class="color-main">Mission</h3>
            <p class="text-justify">We are in the Business of creating delightful experience everytime.</p> 
          </div>

          <div id="Values" class="tabcontent">
            <h3 class="color-main">Values</h3>
            <p class="text-justify">Our Values ‘STEPS’ guide us at every step day-to-day, reminding how we act, the decisions we make, and how we work with each other, our clients, our stakeholders, and the entire community that supports us. Our values are</p>
            <p class="text-justify">..Great Things are not done by impulse, but by series of small things brought together’ <strong>–Vincent Van Gogh</strong></p>
          </div> -->
          <!-------------------------------eND tABS------------------------------>
      </div>
  </section>
  <!-------------------Location-------------------------->

  <!-----------------------------Our Team------------------------------------------>
  <section style="display:none;" class="bg-greyer">
    <div class="container pt-4">
      <div class="row">
          <div class="col-lg-12">
             <div class="section-title text-center">
             <!--  <h2>Our</h2> -->
              <p>Quote of the CEO</p>
            </div> 
          </div>
        </div>
      <div class="row">
          <div class="col-lg-12">
              <div class="brand-carousel-1 section-padding owl-carousel">
                <div class="single-logo teams">
                  <div class="row">
                    <div class="col-md-2">
                  <img src="<?=base_url()?>assets/image/ceo-img.jpg" alt="">
                </div>
                <div class="col-md-10">
                  <h6 class="color-blue">Walter White</h6>
                  <p class="color-black mb-2">CEO</p>
                  <p class="color-black">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>

                 </div>
                  </div>
                </div>
              
               
              
              </div>

          </div>
      </div>
    </div>
  </section>




<!------------------------Services--------------------------->

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