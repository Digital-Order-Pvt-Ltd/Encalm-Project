<?php
include('header.php'); ?>

<style>{
<blade font|-face%20%7B%0D>font-family: Brandon;
src: url(<?= base_url() ?>assets/fonts/Brandon_reg.otf);

}
{
<blade font|-face%20%7B%0D>font-family: Brandon-bld;
src: url(<?= base_url() ?>assets/fonts/Brandon_bld.otf);

}
    .location .location_para {
    border: 2px solid #d9ac5e;
    padding: 13px 30px;
    /* height: 250px; */
    min-height: 250px;
    /* width: 300px; */
    /* overflow: auto; */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.location_para h5{
    padding:10px 0px;

}
.location .location_para p i {
    color: #c9a477;
    padding-right: 6px;
}
/*@font-face{font-family:Gill-Sans-Nova-Medium;*/
/*    src:url(/fonts/Monotype_-_Gill_Sans_Nova_Medium.woff);*/
/*}*/
body {
    font-family: Brandon !important;
    font-size: 18px;
    height: auto !important;
}

.datepicker {
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
.term-cond ul li{
  font-size:14px;
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
    display:block;
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
    flex-wrap:wrap;
    gap:24px;
}

/* .icon-serve2 img {
    width: 100%;
} */

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

@media screen and (min-width:481px)and (max-width:936px) {
    .border-left {
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

@media screen and (min-width:320px) and (max-width:480px) {
  

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
                        <a href="https://encalm-ibe.oasispms.com/ibe_hourly/" target="_blank">
                            <button class="books" id="book_now">Book Now</button>
                        </a>
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
                    <p class="text-center text-secondary mt-4">Welcome to Transit by Encalm where we redefine airport
                        stays,
                        offering a fusion of style,<br>

                        convenience, and hospitality in every moment of your journey.</p>
                    <p class="color-black">Located at Hyderabad&#39;s Rajiv Gandhi International Airport (RGIA) in
                        Shamshabad,
                        Transit by Encalm
                        promises not just a place to rest but and experience to cherish. Our latest venture into airport
                        hospitality offers unparalleled accessibility and comfort for travellers seeking a relaxing stay
                        during
                        their
                        transit.</p>
                    <p class="mt-3 mb-0">At Transit by Encalm, we offer:</p>
                    <p class="color-black"><strong>Premier Accommodation:</strong> Choose from our curated selection of
                        70 rooms
                        across various categories,
                        each crafted to cater to the diverse needs of our guests. From Deluxe and Premier King Rooms to
                        Executive Suites and specially abled accommodations, your comfort is our priority.</p>
                    <p class="color-black"><strong>Encalm Spa:</strong> Our Encalm Spa awaits, featuring three therapy
                        rooms
                        dedicated to providing relaxation
                        through tailored treatments, including Back, Neck &amp; Shoulder Massages and Foot Massages.</p>
                    <p class="color-black"><strong>Enroute Café:</strong> With a capacity for 72 covers and operating 24
                        hours,
                        our café tantalises your taste buds
                        with a blend of Western, Indian, and Oriental cuisines, ensuring a delightful culinary journey
                        throughout
                        your stay, no matter the time of the day.</p>
                    <p class="color-black"><strong>Impeccable In-Room Facilities:</strong> Whether it&#39;s the
                        convenience of
                        guest laundry, fitness centre access, or
                        the comfort of walk-in showers, every amenity has been thoughtfully included in our rooms to
                        make
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
                            alt="Doctor on Call">
                        <p class="color-main text-center">Doctor on Call</p>
                    </div>
                    <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/coffee-maker.png"
                            alt="Coffee Maker" >
                        <p class="color-main text-center">Coffee Maker</p>
                    </div>
                   
                    <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/laundry.png"
                            alt="Laundry Service" >
                        <p class="color-main text-center">Laundry Service</p>
                    </div>
                    <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/ironing.png"
                            alt="Iron and Ironing Board" >
                        <p class="color-main text-center">Iron and Ironing Board</p>
                    </div>
                    <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/Wi-Fi.png" alt="Wi-fi" >
                        <p class="color-main text-center">Wi-fi</p>
                    </div>
                    <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/dining_area.png"
                            alt="In Room Dining" >
                        <p class="color-main text-center">In Room Dining</p>
                    </div>
                    <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/Spa.png" alt="spa" >
                        <p class="color-main text-center">SPA</p>
                    </div>
                    <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/dumbbell.png" alt="GYM" >
                        <p class="color-main text-center">GYM</p>
                    </div>
                    <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/Concierge-Services.png"
                            alt="Concierge Services" >
                        <p class="color-main text-center">Concierge Services</p>
                    </div>
                    <div class="box-icon text-center"><img src="<?= base_url() ?>assets/image/Bar.png" 
                            alt="Bar">
                        <p class="color-main text-center">Bar</p>
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
                <div class="col-lg-6 m-auto location">
                    <div class="location_para">

                        <h5 class="color-main text-center">Shamshabad</h5>
                        <p class="text-center color-black mb-1"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Level D Arrivals
                            beside Café Nilofer, RGIA, Shamshabad</p>
                        <p class="text-center color-black mt-1 mb-0">Distance from key locations:</p>
                        <p class="text-center color-black mb-1"><strong>Charminar:</strong> 15 km (approx. 40 minutes)
                        </p>
                        <p class="text-center color-black mb-1"><strong>Secunderabad Railway Station:</strong> 35 km
                            (approx. 1
                            hour)</p>
                        <p class="text-center color-black mb-1"><strong>Mahatma Gandhi Bus Stand:</strong> 25 km
                            (approx. 45
                            minutes)</p>
                        <p class="text-center color-black mb-1"><i class="fa fa-envelope"
                                aria-hidden="true"></i>
                            reservations@transitbyencalm.com </p>
                        <p class="text-center color-black mb-1"><i class="fa fa-phone"
                                aria-hidden="true"></i> <a class="color-black" href="tel:+919289472139">+91
                                9289366950</a></p>
                    </div>
                </div>
            </div>
            <!-- <p class="text-center">Whether you are in transit or seeking a comfortable stay at the airport, Transit by Encalm offers a range
of amenities and services to make your stay seamless and relaxing.</p> -->
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
                <img src="<?= base_url() ?>assets/image/Transit_lounge/5.jpg" alt="spa_services" >
                       </div>
              </div>
     
            <div class="testi">
              <div class="lounge_img">
                <img src="<?= base_url() ?>assets/image/Transit_lounge/6.jpg" alt="spa_services" >
                       </div>
            </div>
            
            <div class="testi">
              <div class="lounge_img">
                <img src="<?= base_url() ?>assets/image/Transit_lounge/7.jpg" alt="spa_services" >
                       </div>
            </div>
            
          <div class="testi">
              <div class="lounge_img">
                <img src="<?= base_url() ?>assets/image/Transit_lounge/2.jpg" alt="spa_services" >
                       </div>
            </div>
            <div class="testi">
              <div class="lounge_img">
                <img src="<?= base_url() ?>assets/image/Transit_lounge/3.jpg" alt="spa_services" >
                       </div>
            </div>
            <div class="testi">
              <div class="lounge_img">
                 <img src="<?= base_url() ?>assets/image/Transit_lounge/4.jpg" alt="spa_services" >
                       </div>
            </div>
            
         
            
            <div class="testi">
              <div class="lounge_img">
                <img src="<?= base_url() ?>assets/image/Transit_lounge/8.jpg" alt="spa_services" >
                       </div>
            </div>
            
            <div class="testi">
              <div class="lounge_img">
                <img src="<?= base_url() ?>assets/image/Transit_lounge/9.jpg" alt="spa_services" >
                       </div>
            </div>
            
            <div class="testi">
              <div class="lounge_img">
                <img src="<?= base_url() ?>assets/image/Transit_lounge/10.jpg" alt="spa_services" >
                       </div>
            </div>
            
            <div class="testi">
              <div class="lounge_img">
                <img src="<?= base_url() ?>assets/image/Transit_lounge/Artboard 1.jpg" alt="spa_services" >
                       </div>
            </div>
          
       
            
          </div>
        </div>
      </div>  
    </div>
  </section>
    <!-------------------Booking Form-------------------------->
    <section class="mt-1 mb-5">
        <div class="container term-cond shadow bg-white p-5">
            <div class="form-group col-md-12">
                <div class="col-md-12 mb-4">
                    <h5 class="color-main text-center f-36 ">Terms and Conditions</h5>
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
                        violation occurs in the room and premises, the guest will be charged INR 5000/- per violation as
                        a
                        sanitization fee.</li>
                    <li>All the guests checking-in are requested to produce a valid Govt. approved photo ID at check-in.
                        For Resident Indians: Driver’s License, Voters ID, Aadhaar Card or Passport (As per Govt.
                        regulations we do not accept PAN card as an ID proof) For Foreigners and Non-Resident Indians:
                        Passport & Visa/PIO Card/ OCI Card (Mandatory).</li>
                    <li>Pets are not allowed</li>
                    <li>Special requests, flight information, amendments, cancellation in reservations shall be directed
                        to our Reservations Office.</li>
                    <li>You can contact us on +91 9289366950, E-mail: reservations@transitbyencalm.com</li>
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
                    <li>Bank charges would be applicable for all cancellation requests received 48 hours prior to
                        service
                        time.</li>
                    <li>Encalm shall endeavor to process a refund if applicable, within 15 days from the date of
                        cancellation and receipt of bank/credit card details</li>
                    <li>All rescheduling requests need to be received at least 12 hours prior to service time for it to
                        be
                        considered as a valid request. All rescheduling requests shall be subject to availability.</li>
                    <li>No refund will be made in case of the following</li>
                </ul>

                <p class="mt-3 mb-0 color-black">*Wrong information about travel details of Guest(s) during the Booking
                    Process.</p>
                <p class="mt-3 mb-0 color-black">*No Shows- If the passenger does not arrive at the meeting point within
                    30 minutes from the agreed arrival time.</p>
                <p class="mt-3 mb-0 color-black">*In case of any misconduct or any unlawful or prohibited activity by
                    the Agent/Guest(s);</p>
                <p class="mt-3 mb-0 color-black">*In case Agent has availed promotions offer or discounts or cash back
                    etc. during booking.</p>
            </div>


            <div class="clearfix"></div>
            <div class="col-md-12">
                <p class="mt-3 mb-0 color-black"><b>*Kindly incorporate the below age group under Adult, Child,
                        Infant</b></p>
                <p class="mt-3 mb-0 color-black">*The age group would be as follows:</p>
                <p class="mt-3 mb-0 color-black">*Infant: Under 6 years : <span>Comp</span></p>
                <p class="mt-3 mb-0 color-black">*Child: 6-11 years : <span>Child Rate at 30% of Adult Rate</span></p>
                <p class="mt-3 mb-0 color-black">*Adult: <span> 11 years and above</span> </p>
            </div>
            <div class="clearfix"></div>
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
    $(window).scroll(function() {
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

        var Data = "&frmname=" + name + "&frmemail=" + email + "&frmsubject=" + subject + "&frmmessage=" +
            message;

        jQuery.ajax({
            type: "POST",
            url: "mail.php",
            data: Data,
            dataType: 'json',
            cache: false,
            success: function(msg) {
                if (msg == "Invalid verification code.") {
                    jQuery("#msgSuccessNew").show();
                    jQuery("#msgSuccessNew").html(
                        "Sorry Mail server is busy. Please send after some time.");
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
    <script>
    var chatbox = document.getElementById('fb-customer-chat');

    chatbox.setAttribute("page_id", "112085217948507");

    chatbox.setAttribute("attribution", "biz_inbox");
    </script>



    <!-- Your SDK code -->

    <script>
    window.fbAsyncInit = function() {

        FB.init({

            xfbml: true,

            version: 'v13.0'

        });

    };



    (function(d, s, id) {

        var js, fjs = d.getElementsByTagName(s)[0];

        if (d.getElementById(id)) return;

        js = d.createElement(s);
        js.id = id;

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
                mobile: {
                    required: "Please Enter Your Mobile Number",
                    number: "Please enter valid mobile number"
                }
            }
        });
        $('#contact_name, #product, #no_of_hrs').change(function() {
            console.log('hello');
            $('#name').val($('#product').val() + ' (' + $('#no_of_hrs').val() + ' Hrs) ' + $(
                    '#contact_name')
                .val());
        });
        $('#contact_name').change(function() {
            console.log('hello');
            var value = $('#contact_name').val();
            var child_option = document.getElementById("child_option");
            var infant_option = document.getElementById("infant_option");
            if (value == 12) {
                child_option.style.display = "block";
                infant_option.style.display = "block";
            } else {
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
    $(document).ready(function() {
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

            $.each(states, function(index, state) {
                stateDropdown.append('<option value="' + state + '">' + state + '</option>');
            });
        }

        function updateCities(countryId, state) {
            var cities = countryData[countryId].cities[state];
            var cityDropdown = $("#city");

            cityDropdown.empty().append('<option value="">Select</option>');

            $.each(cities, function(index, city) {
                cityDropdown.append('<option value="' + city + '">' + city + '</option>');
            });
        }

        $("#country").on("change", function() {
            var selectedCountry = $(this).val();
            updateStates(selectedCountry);
        });

        $("#state").on("change", function() {
            var selectedCountry = $("#country").val();
            var selectedState = $(this).val();
            updateCities(selectedCountry, selectedState);
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        $(".datepicker").datetimepicker({
            dateFormat: 'yy-mm-dd',
            oneLine: true,
            timeFormat: 'hh:mm tt',
            onSelect: function(dateText) {
                updateToTime();
            }
        });

        $("#from_date").change(function() {
            updateToTime();
        });
        $("#no_of_hrs").change(function() {
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
          items: 1,
       
        
        },
        600: {
          items: 1,
        
        
        },
        1000: {
          items: 3,
        }
      }
    })



</script>
