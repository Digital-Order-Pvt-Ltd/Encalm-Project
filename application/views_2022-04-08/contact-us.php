<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/floating.css"/>
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
body{font-family:Brandon!important; font-size: 18px; height:100%!important;}
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
  .pr-0{padding-right:0px!important;}
  .pl-0{padding-left:0px!important;}
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
    .team p{text-align: justify; text-align-last: center; padding:8px 15px; color:#000000; margin-bottom:0px!important;}
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
    color:#152248;
    border: 0px;
    font-size: 30px;
    position: absolute;
    right: 15px;
    top: 20px;}
    .close-menu{display: none!important;}
    .social-media{position: absolute; margin-top:71px;}
    /*----------------Contact Box-------------------*/
    .pos-contact {
    margin-top: 170px;
    margin-bottom: 50px;
}
        .box-contact{border:1px solid #dedede; background-color: #ffffff; width: 100%; margin:0 auto; padding: 20px; box-shadow: 5px 5px 5px #dedede;}
        .form-control:focus{border-color:#dedede!important; box-shadow:0px 0px 0px #dedede!important;}
        .form-group.floating>label{color:#747d84!important; font-size: 0.85em!important;}
        .btn-contact{background: #152248;
    border: 0;
    padding: 8px 35px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
    width: 200px;
    margin-top:20px;}
    .bor-left-contact{border-right:1px solid #dedede;}
    /*----------------Contact Box-------------------*/
@media screen and (min-width: 937px) and (max-width: 1000px){
     #navArea > ul{position: absolute; background: #152248;  width: 100%; display: block; padding-left: 0px; left:-100%; transition: all 0.5s; height: 900px;}
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
     #navArea > ul{position: absolute; background: #152248;  width: 100%; display: block; padding-left: 0px; left:-100%; transition: all 0.5s; height: 900px;}
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
        .pos-contact {margin-top: 115px;}
        .mob-15{margin-top:30px;}
        .col-md-2{width:30%!important;}
        .col-md-4{width:70%!important;}
        #navArea{height:90px!important;}
        #navArea > ul > li > a{color:#ffffff!important;} 
      .f-36{font-size:20px;}
      .border-left{border:0px;}
      .tabcontent{height:320px}
     #navArea > ul{position: absolute; background: #152248;  width: 100%; display: block; padding-left: 0px; left:-100%; transition: all 0.5s; height: 900px;}
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
<!-----------------logo---------------------->

  <!-----------------------------Contact Us------------------------------------------>
    <section class="pos-contact">
        <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="box-contact">
                      <div class="section-title text-center">
                        <!--<h2>About</h2>-->
                        <p>Contact Us</p>
                      </div>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="bor-left-contact">
                            <h5 class="color-main"><strong>ENCALM HOSPITALITY PVT. LTD.</strong></h5>
                            
                             <p class="color-black"><strong><span class="color-main"><i class="fa fa-map-marker" aria-hidden="true"></i></span> </strong> 7th Floor, TAG Tower, Plot No. 17-18, Phase 4, Udyog Vihar, Gurugram – 122015, Haryana, India</p>
                             <p class="color-black"><strong style="font-weight:700;">For Reservation Inquiry</strong></p>
                             <p class="color-black"><span class="color-main"><i class="fa fa-envelope" aria-hidden="true"></i></span><a class="color-black" href="mailto:guest.services@encalm.com">  guest.services@encalm.com</a> </p>
                             <p class="color-black"><span class="color-main"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></span><a class="color-black" href="tel:+919289366950"> +91-92893 66950</a></p>
                             <p class="color-black"><strong style="font-weight:700;">For Marketing Inquiry</strong></p>
                             <p class="color-black"><span class="color-main"><i class="fa fa-envelope" aria-hidden="true"></i></span><a class="color-black" href="mailto:marketing@encalm.com"> marketing@encalm.com</a> </p>
                             <p class="color-black"><strong style="font-weight:700;">For Careers Inquiry</strong></p>
                             <p class="color-black"><span class="color-main"><i class="fa fa-envelope" aria-hidden="true"></i></span><a class="color-black" href="mailto:careers@encalm.com"> careers@encalm.com</a> </p>
                             
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form>
                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group floating">
                                        <input type="text" class="form-control floating" id="first" required value="">
                                        <label for="first">Name</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group floating">
                                        <input type="email" class="form-control floating" id="y_email"  pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" required value="">
                                        <label for="y_email">Your Email</label>
                                      </div>
                                  </div>
                                  <div class="col-md-2 pr-0">
                                      <select class="form-control" name="countryCode" id="countryCode">
                                          <option data-countryCode="IN" value="91">(+91)</option>
                                            <option data-countryCode="FO" value="298">(+298)</option>
                                    		<option data-countryCode="FJ" value="679">(+679)</option>
                                    		<option data-countryCode="FI" value="358">(+358)</option>
                                    		<option data-countryCode="FR" value="33">(+33)</option>
                                    		<option data-countryCode="GF" value="594">(+594)</option>
                                    		<option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                    		
                                    		
                                    		<option data-countryCode="ID" value="62">(+62)</option>
                                      </select>
                                  </div>
                                  <div class="col-md-4 pl-0">
                                      <div class="form-group floating">
                                        <input type="tel" class="form-control floating phone" id="phone_number" name="" maxlength="10" required value="">
                                        <label for="phone_number">Phone Number</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <select class="form-control" id="department">
                                          <option>Choose Department</option>
                                          <option value="Reservation">Reservation</option>
                                          <option Value="Marketing">Marketing</option>
                                          <option Value="Careers">Careers</option>
                                          <!--option value="Sales">Sales</option-->
                                      </select>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group floating">
                                        <textarea class="form-control floating mob-15" id="message" placeholder="Message" required value="" rows="10"></textarea>
                                        
                                      </div>
                                  </div>
                                  <div class="form-group col-lg-12 text-center">
                                    <button type="button"  name="contactFormSubmit" class="btn-contact" id="contactFormSubmit">Contact Us!</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </section>
  <!-----------------------------Contact Us End------------------------------------------>

<!------------------------Services--------------------------->

<?php include('footer.php'); ?>
<script type="text/javascript">
jQuery(document).ready(function () {
      jQuery("#phone_number").keypress(function (e) {
         var length = jQuery(this).val().length;
       if(length > 9) {
            return false;
       } else if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
       } else if((length == 0) && (e.which == 48)) {
            return false;
       }
      });
    });
</script>
<script type="text/javascript">
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
</script>
<script type="text/javascript">
  window.addEventListener("scroll", function() {
    let navArea = document.getElementById("navArea");

    if (window.pageYOffset > 250) {
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
jQuery("#contactFormSubmit").click(function(){    
    var name = jQuery.trim(jQuery("#first").val());  
    var email = jQuery.trim(jQuery("#y_email").val());    
    var phone = jQuery("#countryCode").val()+''+jQuery("#phone_number").val();    
    var department = jQuery.trim(jQuery("#department").val());
    var message = jQuery.trim(jQuery("#message").val());
    var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    var error = false;
    if(name == "")
    {
        jQuery("#nameLabel").show();
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
    
    var Data = "&frmname="+name+"&frmemail="+email+"&frmphone="+phone+"&frmdepartment="+department+"&frmmessage="+message;   
	
	setTimeout(function() {
		alert('Thank you for contacting us. Our executive will contact you soon!');
		jQuery("#first").val("");
		jQuery("#y_email").val("");
		jQuery("#phone_number").val("");
		jQuery("#department").val(""); 
		jQuery("#message").val(""); 
	}, 3000);
    
    jQuery.ajax({
        type: "POST",
        url: "<?=base_url()?>contact/sendmail",
        data: Data,
        dataType: 'json',
        cache:false,
        success: function(msg){
            jQuery("#first").val("");
            jQuery("#y_email").val("");
            jQuery("#phone_number").val("");
            jQuery("#department").val(""); 
            jQuery("#message").val(""); 
            if(msg == "Invalid verification code.")
            {
                jQuery("#msgSuccessNew").show();
                jQuery("#msgSuccessNew").html("Sorry Mail server is busy. Please send after some time.");
            }
            else
            {       
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