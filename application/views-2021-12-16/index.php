
 <?php include 'home-head.php';?>
<!-- ======= Header ======= --> 
    <!-- Uncomment below if you prefer to use an image logo --> 
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?=base_url()?>assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
   
<!-- End Header --> 

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6">
        <h1>Welcome to <span>Encalm</span></h1>
        <h2>Delivering special experiences in the arena of Airport Hospitality!</h2>
      </div>
      <div class="col-lg-6 bg-white rounded-3 p-0 search-box">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link active" id="arrival-tab" data-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="true"><i class="fas fa-plane-arrival"></i>&nbsp;Arrival</a> </li>
          <li class="nav-item"> <a class="nav-link" id="departure-tab" data-toggle="tab" href="#departure" role="tab" aria-controls="departure" aria-selected="false" onclick="HomeActiveTab('Departure')"><i class="fas fa-plane-departure"></i>&nbsp;Departure</a> </li>
          <li class="nav-item"> <a class="nav-link" id="transit-tab" data-toggle="tab" href="#transit" role="tab" aria-controls="transit" aria-selected="false"  onclick="HomeActiveTab('Transit')" ><i class="fas fa-sync-alt"></i>&nbsp;Transit</a> </li>
          <li class="nav-item"> <a class="nav-link" id="lounge-tab" data-toggle="tab" href="#lounge" role="tab" aria-controls="lounge" aria-selected="false"  onclick="HomeActiveTab('Lounge')"><i class="fas fa-couch"></i>&nbsp;Lounge</a> </li>
        </ul>
        <div class="tab-content py-4 px-5" id="myTabContent">
		 
          <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
            <?php include 'arrival.php';?>
          </div>
          <div class="tab-pane fade" id="departure" role="tabpanel" aria-labelledby="departure-tab">
            <?php include 'departure.php';?>
          </div>
          <div class="tab-pane fade" id="transit" role="tabpanel" aria-labelledby="transit-tab">
            <?php include 'transit.php';?>
          </div>
          <div class="tab-pane fade" id="lounge" role="tabpanel" aria-labelledby="lounge-tab">
            <?php include 'lounge.php';?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Hero -->

<main id="main"> 
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img"> <img src="<?=base_url()?>assets/img/about.jpg" alt=""> </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <div class="section-title">
            <h2>About</h2>
            <p>Encalm Hospitality Pvt. Ltd.</p>
          </div>
          <p class="fst-italic mt-3">Encalm Hospitality Pvt. Ltd. (Encalm) specialises in curating and delivering special experiences in the arena of Airport Hospitality. Encalm offers the  products and services that supports various non-aviation revenues including VIP Lounges, Concierge Services and Airport Hotel etc.</p>
          <p>Encalm strategic partnerships would enable it to leverage global lounge and hospitality network that provide access to over 500 Lounge worldwide. Encalm is redefining and developing new benchmarks of airport hospitality focused at delivering memorable lounge and airport concierge experience to travellers at airports in India. </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Section --> 
  
  <!-- ======= Our Vision Section ======= -->
  <section id="our-vision" class="vision">
    <div class="container" data-aos="fade-up">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="vision-img"> <img src="<?=base_url()?>assets/img/vision.jpg" alt=""> </div>
        </div>
        <div class="col-lg-6 " data-aos="zoom-in" data-aos-delay="100">
          <div class="section-title">
            <h2>Our</h2>
            <p>Vision</p>
          </div>
          <div class="box">
            <h4>To Be World’s most admired hospitality organization that creates value for its stakeholders</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Vision Section --> 
  
  <!-- ======= Our Values Section ======= -->
  <section id="values" class="menu section-bg">
    <div class="container" data-aos="fade-up">
      <div class="row d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-5">
          <div class="section-title">
            <h2>Our</h2>
            <p>Values</p>
          </div>
          <p class="fst-italic mt-1">Our Values ‘<strong>STEPS</strong>’ guide us at every step day-to-day, reminding how we act, the decisions we make,<br>
            and how we work with each other, our clients, our stakeholders, and the entire community that<br>
            supports us. Our values are </p>
          <p class="mt-4">..Great Things are not done by impulse, but by series of small things brought together’ – <br>
            <strong>Vincent Van Gogh</strong> </p>
        </div>
        <div class="col-lg-7">
          <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-12 menu-item filter-starters"> <img src="<?=base_url()?>assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
              <div class="menu-content"> <a href="#">Swift</a></div>
              <div class="menu-ingredients"> We are agile, adaptable and lead the change </div>
            </div>
            <div class="col-lg-12 menu-item filter-specialty"> <img src="<?=base_url()?>assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
              <div class="menu-content"> <a href="#">Trust</a> </div>
              <div class="menu-ingredients"> We work with integrity and honesty </div>
            </div>
            <div class="col-lg-12 menu-item filter-starters"> <img src="<?=base_url()?>assets/img/menu/cake.jpg" class="menu-img" alt="">
              <div class="menu-content"> <a href="#">Excellence</a> </div>
              <div class="menu-ingredients"> We strive for excellence in our thoughts, words and deeds </div>
            </div>
            <div class="col-lg-12 menu-item filter-salads"> <img src="<?=base_url()?>assets/img/menu/caesar.jpg" class="menu-img" alt="">
              <div class="menu-content"> <a href="#">Poeple First</a></div>
              <div class="menu-ingredients"> We nurture talent and treat everyone the way we would like to be treated. </div>
            </div>
            <div class="col-lg-12 menu-item filter-specialty"> <img src="<?=base_url()?>assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
              <div class="menu-content"> <a href="#">Sustanailiy</a></div>
              <div class="menu-ingredients"> We are sensitive and responsible towards the community and the environment </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Our Values Section --> 
  
  <!-- ======= Projects Section ======= -->
  <section id="projects" class="projects d-none">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Special</h2>
        <p>Customers and Projects</p>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12">
          <p>Delhi International Airport Limited at Indira Gandhi International Airport, Delhi, India </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section --> 
  
  <!-- ======= Gallery Section ======= -->
  <section id="services" class="why-us">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Our</h2>
        <p>Services</p>
      </div>
    </div>
    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
      <div class="row mb-4">
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <svg fill="#cda45e" width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
              <path  id="i-467" d="M33.5,45L32,43h1.41l13.311-13.29c1.309-1.31,1.309-3.13,0-4.439C45.45,24,43.58,24,42.29,25.29L36.58,31h-7.16l3.26-13.04 l13.93,3.851l0.271-0.96c1.14-4.12,0.7-8.28-1.229-11.71c-1.66-2.95-4.34-5.21-7.66-6.521C37.99,2.58,38,2.54,38,2.5 C38,1.67,37.33,1,36.5,1c-0.57,0-1.05,0.32-1.311,0.78c-1.229-0.271-2.489-0.4-3.76-0.4c-7.4,0-13.58,4.391-15.39,10.94l-0.271,0.96 l14.99,4.15L27.359,31H23.63l-7,6H3c-1.66,0-3,1.34-3,3c0,1.34,0.89,2.47,2.11,2.851L0.5,45H0v2h48v-2H33.5z M39.971,7.92 c-0.091-0.899-0.25-1.66-0.451-2.319c1.851,1.14,3.351,2.68,4.391,4.52c1.52,2.7,1.96,5.94,1.279,9.22l-6.26-1.729 C39.87,13.891,40.24,10.561,39.971,7.92z M18.27,11.9c1.84-5.03,6.83-8.37,12.78-8.51C28.42,5.34,25.98,9.04,24.529,13.63 L18.27,11.9z M26.46,14.16c2.16-6.77,6.56-10.95,9.271-10.2c1.56,0.431,2.09,2.5,2.25,4.16c0.24,2.36-0.11,5.521-0.98,8.96 L26.46,14.16z M28.92,33h5.66l-4,4h-2.66L28.92,33z M24.37,33h2.489l-1,4H19.7L24.37,33z M2,40c0-0.55,0.45-1,1-1h28.41l12.3-12.29 c0.181-0.189,0.47-0.41,0.81-0.41c0.33,0,0.61,0.21,0.791,0.391c0.529,0.529,0.529,1.069,0,1.6L32.58,41H3C2.45,41,2,40.55,2,40z M23.859,45H3l1.5-2h19.859L23.859,45z M25.92,45l0.5-2h3.08l1.5,2H25.92z"/>
            </svg>
            </span>
            <h5>Lounge Service</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 61 61" width="48" height="48" fill="#cda45e" xml:space="preserve">
              <g>
                <rect x="6.4" y="2.5" width="7.4" height="1.7"/>
                <rect x="20.3" y="5.2" width="3.7" height="1.7"/>
                <rect x="19.4" y="2.5" width="5.6" height="1.7"/>
                <path d="M57.4,23.8v-6.2c0-1.2-0.8-2.1-1.9-2.5v-3.7h1.9V9.6h-5.6v1.7h1.9v3.7c-1.1,0.4-1.9,1.3-1.9,2.5v6.2H49v-6.2
		c0-1.2-0.8-2.1-1.9-2.5v-3.7h1.9V9.6h-5.6v1.7h1.9v3.7c-1.1,0.4-1.9,1.3-1.9,2.5v6.2h-2.8v-6.2c0-1.2-0.8-2.1-1.9-2.5v-3.7h1.9V9.6
		h-5.6v1.7H37v3.7c-1.1,0.4-1.9,1.3-1.9,2.5v6.2h-7.5V9.6h-0.9c-0.5,0-0.9-0.4-0.9-0.9V7.8h-7.4v0.9c0,0.5-0.4,0.9-0.9,0.9h-0.9
		v14.2h-1.9V13l-2.1-7.9H7.5L5.5,13v10.8H0.8V30h59.4v-6.2L57.4,23.8L57.4,23.8z M53.7,17.6c0-0.5,0.4-0.9,0.9-0.9s0.9,0.4,0.9,0.9
		v6.2h-1.9L53.7,17.6L53.7,17.6z M45.3,17.6c0-0.5,0.4-0.9,0.9-0.9c0.5,0,0.9,0.4,0.9,0.9v6.2h-1.9L45.3,17.6L45.3,17.6z M37,17.6
		c0-0.5,0.4-0.9,0.9-0.9s0.9,0.4,0.9,0.9v6.2H37L37,17.6L37,17.6z M18.4,11.2c0.8-0.3,1.4-0.9,1.7-1.6h4.1c0.3,0.8,0.9,1.4,1.7,1.6
		v4.6h-7.5L18.4,11.2L18.4,11.2z M18.4,17.6h7.5v2.7h-7.5V17.6z M18.4,22h7.5v1.8h-7.5V22z M7.3,13.3l1.7-6.4h2.3l1.7,6.4v2.6H7.3
		V13.3z M7.3,17.6h5.6v1.8H7.3V17.6z M7.3,21.1h5.6v2.7H7.3V21.1z M58.4,28.3H2.6v-2.7h32.5h5.5h2.8H49h2.8h5.5h1L58.4,28.3
		L58.4,28.3z"/>
                <rect x="36.1" y="31" width="7.4" height="1.7"/>
                <rect x="47.2" y="31" width="7.4" height="1.7"/>
                <path d="M55.5,38.1h-1.9v-4.4h-5.5v4.4h-1.9v14.2h-1.9V38.1h-1.9v-4.4H37v4.4h-1.9v14.2h-9.3v-6.2
		c0-1.2-0.8-2.1-1.9-2.5v-3.7h1.9v-1.7h-5.6v1.7h1.9v3.7c-1.1,0.4-1.9,1.3-1.9,2.5v6.2h-2.8v-6.2c0-1.2-0.8-2.1-1.9-2.5v-3.7h1.9
		v-1.7h-5.6v1.7h1.9v3.7c-1.1,0.4-1.9,1.3-1.9,2.5v6.2H9.1v-6.2c0-1.2-0.8-2.1-1.9-2.5v-3.7h1.9v-1.7H3.6v1.7h1.9v3.7
		c-1.1,0.4-1.9,1.3-1.9,2.5v6.2H0.8v6.2h59.4v-6.2h-4.6V38.1z M48.1,39.8H50v-4.4h1.9v4.4h1.9v1.8h-5.6L48.1,39.8L48.1,39.8z
		 M48.1,43.4h5.6v8.9h-5.6L48.1,43.4L48.1,43.4z M37,39.8h1.9v-4.4h1.9v4.4h1.9v5.7c-0.7-0.8-1.7-1.2-2.8-1.2
		c-1.1,0-2.1,0.5-2.8,1.2L37,39.8L37,39.8z M41.7,47.8c0,1-0.8,1.8-1.9,1.8c-1,0-1.9-0.8-1.9-1.8c0-1,0.8-1.8,1.9-1.8
		C40.8,46,41.7,46.9,41.7,47.8z M37,50.1c0.7,0.8,1.7,1.2,2.8,1.2c1.1,0,2.1-0.5,2.8-1.2v2.2H37L37,50.1L37,50.1z M22.1,46.1
		c0-0.5,0.4-0.9,0.9-0.9c0.5,0,0.9,0.4,0.9,0.9v6.2h-1.9V46.1z M13.8,46.1c0-0.5,0.4-0.9,0.9-0.9s0.9,0.4,0.9,0.9v6.2h-1.9V46.1z
		 M5.4,46.1c0-0.5,0.4-0.9,0.9-0.9c0.5,0,0.9,0.4,0.9,0.9v6.2H5.4V46.1z M58.4,54.1v2.7H2.6v-2.7H58.4z"/>
              </g>
            </svg>
            </span>
            <h5>F&amp;B</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" fill="#cda45e" viewBox="0 0 119.25 119.25" xml:space="preserve">
              <g>
                <g>
                  <path d="M117.25,23.75H2c-1.104,0-2,0.896-2,2V93.5c0,1.104,0.896,2,2,2h115.25c1.104,0,2-0.896,2-2V25.75
			C119.25,24.646,118.354,23.75,117.25,23.75z M48.139,82.893H6.852v-4.478h41.287V82.893z M48.139,71.893H6.852v-4.478h41.287
			V71.893z M112.398,82.893H54.465v-4.478h57.934V82.893L112.398,82.893z M112.398,71.893H54.465v-4.478h57.934V71.893
			L112.398,71.893z M114.625,57.625h-110V28.304h110V57.625z"/>
                  <polygon points="39.944,44.433 42.64,44.433 42.64,42.483 39.944,42.483 39.944,40.767 42.867,40.767 42.867,38.815 
			37.551,38.815 37.551,47.812 39.944,47.812 		"/>
                  <polygon points="49.734,45.849 46.27,45.849 46.27,38.815 43.84,38.815 43.84,47.812 49.734,47.812 		"/>
                  <rect x="50.671" y="38.815" width="2.442" height="8.996"/>
                  <path d="M58.571,47.935c1.264,0,2.423-0.181,3.477-0.541v-4.85h-3.883v1.877h1.606v1.409c-0.304,0.069-0.636,0.104-0.997,0.104
			c-0.66,0-1.166-0.221-1.517-0.661c-0.351-0.441-0.526-1.082-0.526-1.923c0-0.857,0.194-1.518,0.581-1.979
			c0.388-0.461,0.937-0.692,1.646-0.692c0.775,0,1.487,0.16,2.135,0.479l0.771-1.906c-0.373-0.165-0.812-0.301-1.313-0.406
			c-0.503-0.107-1.037-0.16-1.604-0.16c-1.493,0-2.653,0.404-3.482,1.212s-1.243,1.938-1.243,3.39c0,1.49,0.379,2.637,1.136,3.44
			S57.185,47.935,58.571,47.935z"/>
                  <polygon points="65.82,44.144 68.646,44.144 68.646,47.812 71.088,47.812 71.088,38.815 68.646,38.815 68.646,42.15 65.82,42.15 
			65.82,38.815 63.378,38.815 63.378,47.812 65.82,47.812 		"/>
                  <polygon points="74.066,47.812 76.497,47.812 76.497,40.803 78.688,40.803 78.688,38.815 71.869,38.815 71.869,40.803 
			74.066,40.803 		"/>
                  <rect x="82.238" y="38.815" width="2.443" height="8.996"/>
                  <path d="M88.275,43.757c0-0.525-0.039-1.287-0.116-2.283h0.056l3.285,6.338h3.188v-8.997h-2.166v4.067
			c0,0.55,0.029,1.278,0.088,2.185h-0.037l-3.273-6.252h-3.176v8.996h2.154v-4.054H88.275z"/>
                  <polygon points="98.521,44.433 101.217,44.433 101.217,42.483 98.521,42.483 98.521,40.767 101.443,40.767 101.443,38.815 
			96.128,38.815 96.128,47.812 98.521,47.812 		"/>
                  <path d="M106.46,47.935c1.433,0,2.519-0.395,3.261-1.182c0.743-0.787,1.114-1.938,1.114-3.451c0-1.519-0.369-2.669-1.106-3.453
			c-0.738-0.783-1.824-1.175-3.256-1.175c-1.428,0-2.516,0.396-3.265,1.185s-1.123,1.934-1.123,3.43
			c0,1.514,0.376,2.667,1.129,3.459C103.967,47.538,105.049,47.935,106.46,47.935z M106.473,40.667c0.6,0,1.049,0.215,1.352,0.644
			c0.301,0.429,0.451,1.093,0.451,1.991c0,0.894-0.147,1.552-0.445,1.975c-0.298,0.422-0.754,0.634-1.369,0.634
			c-1.21,0-1.814-0.87-1.814-2.608C104.645,41.546,105.254,40.667,106.473,40.667z"/>
                  <path d="M14.024,45.622l5.843-1.49l0.139,4.416c0.012,0.072,0.008,0.33,0.008,0.33s-0.082,0.075-0.152,0.13l-0.916,0.708
			l-0.179,1.395c0.019-0.002,0.039-0.005,0.059-0.012l1.356-0.408c0.171-0.059,0.201-0.183,0.198-0.265
			c0.026,0.075,0.081,0.211,0.194,0.438c0,0,0.317,0.747,0.589,0.747h0.006c0.275,0,0.589-0.747,0.589-0.747
			c0.113-0.226,0.168-0.362,0.194-0.438c-0.004,0.082,0.027,0.206,0.198,0.265l1.356,0.408c0.02,0.007,0.04,0.01,0.059,0.012
			l-0.179-1.395l-0.916-0.708c-0.07-0.055-0.152-0.13-0.152-0.13s-0.004-0.258,0.008-0.33l0.139-4.416l5.843,1.49
			c0.158,0.04,0.269-0.058,0.248-0.219l-0.17-1.35c-0.021-0.162-0.158-0.344-0.306-0.41l-5.629-2.48l-0.125-4.397
			c-0.024-0.812-0.332-1.647-0.688-1.868c-0.135-0.084-0.3-0.127-0.469-0.137h-0.006c-0.169,0.01-0.334,0.053-0.469,0.137
			c-0.356,0.221-0.664,1.057-0.688,1.868l-0.125,4.397l-5.629,2.48c-0.147,0.066-0.285,0.248-0.306,0.41l-0.17,1.35
			C13.756,45.564,13.866,45.662,14.024,45.622z"/>
                  <path d="M12.631,54.721H29.7c1.654,0,3-1.346,3-3v-17.07c0-1.654-1.346-3-3-3H12.631c-1.654,0-3,1.346-3,3V51.72
			C9.631,53.375,10.977,54.721,12.631,54.721z M11.631,34.651c0-0.551,0.448-1,1-1H29.7c0.552,0,1,0.449,1,1V51.72
			c0,0.552-0.448,1-1,1H12.631c-0.552,0-1-0.448-1-1V34.651z"/>
                </g>
              </g>
            </svg>
            </span>
            <h5>Flight Information</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 64 64"  width="48" height="48" fill="#cda45e" xml:space="preserve">
              <g>
                <g>
                  <path d="M58.1,45.4v-1.6c0-3.3-2.7-5.9-5.9-5.9H48c0-0.1,0.1-0.2,0.1-0.3l1.9-8.4c0.2-0.9-0.1-1.7-0.7-2.4l-2.6-2.6
			c-0.3-0.3-0.9-0.3-1.2,0c-0.3,0.3-0.3,0.9,0,1.2l2.6,2.6c0.2,0.2,0.3,0.5,0.2,0.8l-1.9,8.4c-0.1,0.5-0.6,0.8-1,0.7
			c-0.5-0.1-0.8-0.6-0.7-1l1.7-7.3c0.1-0.4,0-0.8-0.3-1L41.7,24c-0.2-0.2-0.6-0.3-0.9-0.2c-0.3,0.1-0.5,0.4-0.5,0.8l-0.1,13.3h-1.7
			l0-11.9c0,0,0,0,0,0l0-5.5c0-0.3,0.2-0.6,0.4-0.8c0.3-0.2,0.8-0.1,1,0.1l2.4,2.5c0.3,0.3,0.9,0.3,1.2,0c0.3-0.3,0.3-0.9,0-1.2
			l-2.4-2.5c-0.8-0.8-2.1-1-3.1-0.4c-0.3,0.2-0.6,0.4-0.8,0.7c0,0,0,0.1-0.1,0.1l-6.2,9l-7.6,6.6c-1.1,0.9-1.2,2.5-0.3,3.6
			c0.5,0.6,1.2,0.9,2,0.9c0.6,0,1.2-0.2,1.7-0.6l7.9-6.8c0.2-0.1,0.3-0.3,0.4-0.5l1.6-2.4l0,9.1h-5.2c-0.5,0-0.9,0.4-0.9,0.9v0.8
			l-9.3,0c-1.4,0-2.6,1.2-2.6,2.6c0,0,0,0,0,0c0,0.4,0.1,0.9,0.3,1.2c0.3,0.6,0.9,1,1.5,1.2l1.2,0.4h-4.7c0.7-0.7,1.1-1.7,1.1-2.8
			c0-2.3-1.9-4.2-4.2-4.2s-4.2,1.9-4.2,4.2c0,1.1,0.4,2.1,1.1,2.8H7.7c-1,0-1.9,0.4-2.6,1.1C4.4,46.7,4,47.7,4,48.6
			c0,1.6,1,3,2.4,3.5v2.1c0,0.5,0.4,0.9,0.9,0.9h8.8c0.5,0,0.9-0.4,0.9-0.9s-0.4-0.9-0.9-0.9h-8v-1h24.7l0.7,1H21.3
			c-0.5,0-0.9,0.4-0.9,0.9s0.4,0.9,0.9,0.9h35.4c0.5,0,0.9-0.4,0.9-0.9v-2.1c0.5-0.2,0.9-0.5,1.3-0.9c0.7-0.7,1.1-1.6,1.1-2.6
			C60,47.3,59.3,46.1,58.1,45.4z M42,26.7l2.7,2.8l-1.6,7c-0.1,0.5-0.1,1,0.1,1.4h-1.2L42,26.7z M33.8,30.2c0,0.1-0.1,0.1-0.1,0.2
			l-7.9,6.8c-0.2,0.2-0.4,0.2-0.6,0.2c-0.3,0-0.5-0.1-0.7-0.3c-0.3-0.4-0.2-0.9,0.1-1.2l7.6-6.6c0,0,0,0,0,0
			c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0,0,0,0l4.4-6.3l0,3L33.8,30.2z M30.8,41.2v1l-3.3-1L30.8,41.2z M14.1,39.6c1.4,0,2.5,1.1,2.5,2.5
			c0,1.4-1.1,2.5-2.5,2.5s-2.5-1.1-2.5-2.5C11.6,40.7,12.8,39.6,14.1,39.6z M7.7,50.6c-1.1,0-2-0.9-2-2c0-0.5,0.2-1,0.6-1.4
			c0.4-0.4,0.9-0.6,1.4-0.6h19.9l1.6,0.5l2.5,3.5H7.7z M36.6,53.2c-0.4,0.3-0.9,0.2-1.2-0.2L34,51c0,0,0,0,0,0l-3.6-5.1
			c-0.1-0.2-0.3-0.3-0.5-0.3L28,45c0,0,0,0,0,0l-6.7-2c-0.2-0.1-0.4-0.2-0.5-0.4c-0.1-0.2-0.1-0.4-0.1-0.7c0.1-0.4,0.5-0.6,0.8-0.6
			c0.1,0,0.2,0,0.2,0l9.3,2.8c0.2,0.1,0.3,0.2,0.5,0.3l5.3,7.6c0.1,0.1,0.1,0.2,0.1,0.2C37,52.6,36.9,53,36.6,53.2z M55.9,53.4H38.5
			c0.1-0.3,0.2-0.7,0.1-1h17.2L55.9,53.4L55.9,53.4z M57.7,50.1c-0.4,0.4-0.9,0.6-1.4,0.6H37.9l-0.8-1.1h6.5c0.5,0,0.9-0.4,0.9-0.9
			c0-0.5-0.4-0.9-0.9-0.9h-7.7l-3-4.3c-0.1-0.2-0.2-0.3-0.4-0.4v-3.4h5.2c0,0,0,0,0,0h3.4c0,0,0,0,0,0h11.1c2.3,0,4.2,1.9,4.2,4.2v4
			h-7.8c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9h8.7c0.5,0,0.9-0.4,0.9-0.9v-0.8c0.1,0.2,0.2,0.5,0.2,0.8
			C58.3,49.2,58.1,49.7,57.7,50.1z"/>
                </g>
              </g>
              <g>
                <g>
                  <path d="M39.3,8.9c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2c2.3,0,4.2-1.9,4.2-4.2S41.6,8.9,39.3,8.9z M39.3,15.6
			c-1.4,0-2.5-1.1-2.5-2.5s1.1-2.5,2.5-2.5c1.4,0,2.5,1.1,2.5,2.5S40.7,15.6,39.3,15.6z"/>
                </g>
              </g>
            </svg>
            </span>
            <h5>Spa</h5>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><i class="bx bx-food-menu"></i></span>
            <h5>A-La-Cart Menu / Buffet</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><i class="bx bxs-news"></i></span>
            <h5>Newspaper &amp; Magazine</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><i class="bx bx-wifi"></i></span>
            <h5>Wi-Fi</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><i class="fas fa-hotel"></i></span>
            <h5>Hotel</h5>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><i class="far fa-handshake"></i></span>
            <h5>*M&amp;G</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><i class="bx bx-hotel"></i></span>
            <h5>Nap Room</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><i class="fas fa-cocktail"></i></span>
            <h5>Bar</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><i class="fas fa-caravan"></i></span>
            <h5>Buggy Service</h5>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><i class="fas fa-bath"></i></span>
            <h5>Shower Room</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><i class="fas fa-luggage-cart"></i></span>
            <h5>Porter</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 56.787 56.787" width="48" height="48" fill="#cda45e" xml:space="preserve">
              <g>
                <path d="M20.875,23.107c-0.178,0.011-0.756,0.508-0.756,0.508C20.43,23.749,21.054,23.096,20.875,23.107z
		 M20.953,23.005l-0.046,0.028c0.016-0.006,0.031-0.012,0.045-0.018C20.952,23.011,20.953,23.009,20.953,23.005z M42.363,0.76
		c3.207,0,5.807,2.6,5.807,5.807s-2.6,5.807-5.807,5.807s-5.807-2.6-5.807-5.807S39.156,0.76,42.363,0.76z M7.503,25.657h1.556
		v-0.748H7.503c-0.424,0-0.73-0.084-0.842-0.23c-0.085-0.112-0.048-0.258-0.048-0.258l0.019-4.516H5.884v4.357
		c-0.033,0.152-0.075,0.517,0.171,0.853C6.317,25.474,6.806,25.657,7.503,25.657z M56.688,36.269l-0.211-1.712
		c-0.834-6.688-0.867-6.943-0.545-18.729c0.01-0.413-0.312-0.756-0.728-0.768c-0.392-0.026-0.756,0.314-0.769,0.727
		c-0.324,11.896-0.289,12.161,0.557,18.952l0.212,1.715c0.217,1.643,0.026,2.781-0.533,3.219c-0.651,0.502-1.79,0.056-1.868,0.024
		c-5.501-1.692-12.354,1.804-12.644,1.949c-0.367,0.188-0.511,0.641-0.321,1.008c0.133,0.257,0.395,0.401,0.665,0.401
		c0.115,0,0.231-0.024,0.343-0.084c0.045-0.021,3.104-1.576,6.576-2.096V52.52h-3.107c-0.633,0-1.146,0.512-1.146,1.145
		c0,0.631,0.513,1.145,1.146,1.145h8.826c0.633,0,1.146-0.514,1.146-1.145c0-0.633-0.514-1.145-1.146-1.145h-2.863V40.749
		c0.689,0.047,1.369,0.154,2.021,0.354c0.08,0.032,1.935,0.794,3.281-0.24C56.611,40.071,56.986,38.522,56.688,36.269z
		 M53.132,32.874c-0.129-4.919-1.741-9.636-1.868-14.534c-0.187-7.134-11.119-7.296-11.207-0.337
		c-4.184,0.712-8.363,1.09-12.617,0.89c-3.861-0.181-3.873,5.8-0.039,5.979c4.468,0.209,8.9-0.215,13.301-0.937
		c0.452,2.618,0.987,5.223,1.157,7.871c-9.104,3.18-14.15,10.885-15.438,20.677c-0.009,0.067-0.011,0.139-0.017,0.209v-21.68h5.741
		v-5.125h-20.59c0.012-0.065,0.017-0.141,0.021-0.235c0.002-0.056,0.005-0.118,0.009-0.188c0.026-0.433,0.102-0.581,0.526-0.663
		c0.107-0.02,0.242-0.026,0.378-0.024v0.36h5.526c0.161,0.03,0.321,0.053,0.47,0.053c0.232,0,0.432-0.053,0.55-0.212
		c0.062-0.083,0.062-0.198,0.061-0.309c0-0.107-0.001-0.217,0.051-0.282c0.08-0.097,0.234-0.162,0.343-0.172
		c-0.115,0.222-0.187,0.458-0.187,0.708h6.259c0-1.204-1.402-2.18-3.129-2.18c-0.54,0-1.037,0.103-1.479,0.27
		c0.103,1.031-0.867,0.931-1.242,0.855c-0.044,0.055-0.082,0.113-0.12,0.171c-0.017-0.004-0.031-0.014-0.05-0.015
		c-0.167-0.008-0.408,0.093-0.535,0.247c-0.095,0.116-0.093,0.266-0.093,0.398c0.001,0.081,0.001,0.165-0.024,0.198
		c-0.066,0.089-0.196,0.118-0.345,0.126v-0.862H12.49v0.457c-0.161-0.001-0.311,0.013-0.413,0.033
		c-0.537,0.103-0.645,0.35-0.674,0.83c-0.004,0.072-0.006,0.136-0.009,0.192c-0.004,0.109-0.008,0.185-0.023,0.243H0v5.125h3.125
		v24.858h23.278V53.38c0.379,3.83,6.916,3.48,7.492-0.904c0.996-7.575,5.414-12.633,12.842-14.307
		C49.825,38.639,53.236,36.884,53.132,32.874z M8.444,9.014l0.941,13.417L6.9,22.605L5.959,9.189L8.444,9.014z"/>
              </g>
            </svg>
            </span>
            <h5>Business Centre</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 64 64" width="48" height="48" fill="#cda45e"  xml:space="preserve">
              <g>
                <g>
                  <rect x="11.6" y="49.1" width="40.7" height="1.8"/>
                </g>
              </g>
              <g>
                <g>
                  <polygon points="5,25.1 5,41.7 6.9,41.7 6.9,26.9 57,26.8 57,41.7 58.8,41.7 58.8,25 		"/>
                </g>
              </g>
              <g>
                <g>
                  <path d="M55.1,42.6L55.1,42.6c-0.3-1.7-1.3-3.1-2.7-3.9v-5.4c0-1.5-1.2-2.8-2.8-2.8H34.8c-1.5,0-2.8,1.2-2.8,2.8V38h-1v-4.6
			c0-1.5-1.2-2.8-2.8-2.8H14.4c-1.5,0-2.8,1.2-2.8,2.8v5.4c-1.4,0.8-2.4,2.2-2.7,3.9H2.4v12h3.8v3.7H8v-3.7h45.3v3.7h1.8v-3.7h6.5
			v-12H55.1z M33.8,33.3c0-0.5,0.4-0.9,0.9-0.9h14.8c0.5,0,0.9,0.4,0.9,0.9V38C50.2,38,49.9,38,49.6,38H33.8V33.3z M13.5,33.3
			c0-0.5,0.4-0.9,0.9-0.9h13.9c0.5,0,0.9,0.4,0.9,0.9V38H14.4c-0.3,0-0.6,0-0.9,0.1V33.3z M14.4,39.8h35.2c1.7,0,3.2,1.2,3.6,2.8
			H10.8C11.2,41,12.7,39.8,14.4,39.8z M59.8,49.1h-5.6v1.8h5.6v1.9H4.2v-1.9h5.6v-1.8H4.2v-4.7h55.6L59.8,49.1L59.8,49.1z"/>
                </g>
              </g>
              <g>
                <g>
                  <path d="M8,5.7v16.5h48.1V5.7H8z M54.3,20.4H9.8v-5.6h0.9v4.6h42.6v-4.6h1L54.3,20.4L54.3,20.4z M12.5,17.6v-7.4h38.9v7.4
			L12.5,17.6L12.5,17.6z M54.3,13h-1V8.3H10.7V13H9.8V7.5h44.5V13z"/>
                </g>
              </g>
              <g>
                <g>
                  <rect x="17.7" y="13" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -4.2343 17.5236)" width="2.6" height="1.8"/>
                </g>
              </g>
              <g>
                <g>
                  <rect x="21" y="13" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.8777 20.7977)" width="5.2" height="1.8"/>
                </g>
              </g>
              <g>
                <g>
                  <rect x="27.9" y="13" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.2512 24.7259)" width="2.6" height="1.8"/>
                </g>
              </g>
              <g>
                <g>
                  <rect x="31.2" y="13" transform="matrix(0.7071 -0.7071 0.7071 0.7071 0.105 28.0008)" width="5.2" height="1.8"/>
                </g>
              </g>
              <g>
                <g>
                  <rect x="38.1" y="13" transform="matrix(0.7071 -0.7071 0.7071 0.7071 1.7323 31.9288)" width="2.6" height="1.8"/>
                </g>
              </g>
              <g>
                <g>
                  <rect x="41.4" y="13" transform="matrix(0.7071 -0.7071 0.7071 0.7071 3.0882 35.2028)" width="5.2" height="1.8"/>
                </g>
              </g>
            </svg>
            </span>
            <h5>Dormitory</h5>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 text-center">
          <p>*As Per Civil Aviation Security Norms</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery Section --> 
  
  <!-- ======= Chefs Section ======= -->
  <section id="responsibility" class="chefs d-none">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Our</h2>
        <p>Corporate Social Responsibility</p>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <p>Encalm Hospitality firmly believes in returning to the community which has helped it grow. To nourish the overall social culture, we are working to outsource our goodies and  company giveaways from NGOs who are working for orphans, specially challenged kids and under privileged. Goodies will be handmade by the organisation and the same will be provided to the guests spreading more awareness about the process and encouraging them to help the further. In addition to this, we will be provided the extra lounge food to the Feeding India which will provide the food to the nearby NGO instead of dumping them in the airport. </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chefs Section --> 
  
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Get In Touch</h2>
        <p>Contact Us</p>
      </div>
    </div>
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-12 mt-5 mt-lg-0">
          <form action="" name="frmContact" method="post" enctype="multipart/form-data" role="form" class="php-email-form" onsubmit="return validateContactForm()">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name *" required  onkeyup="checkValue(this.value,'nameLabel');">
                <label for="name" id="nameLabel" class="error">This field is required.</label>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email *" required  onkeyup="checkValue(this.value,'emailLabel');">
                <label for="email" id="emailLabel" class="error">This field is required.</label>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject *" required  onkeyup="checkValue(this.value,'subjectLabel');">
              <label for="subject" id="subjectLabel" class="error">This field is required.</label>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" id="message" name="message" rows="8" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div id="msgSuccessNew" class="sent-message"></div>
            </div>
            <div class="text-center">
              <button type="submit" id="submit" name="send">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section --> 
  
</main>
<!-- End #main --> 
<!-- ======= Footer ======= -->

  <?php include('home-footer.php'); ?>
  
<script>
  function HomeActiveTab(tabName)
  {
	   
	  if(tabName=='Departure')
	  {
			$('#DepartureFlight').html('');		
			$('#DepartureFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
			$("#DepartureToAirtport").html('');
			$("#DepartureToAirtport").html('<option value="" data-id="0">Select Departing At</option>');
			
			$("#DepartureSector").prop("selectedIndex", 0);
		   $('#Departuredod').val('');
			
			$('#d_terminal_id').val(0);	
			$('#d_from_airport_id').val(0);	
			$('#D_flight_id').val(0);	
			$('#D_arrival_time').val('');	
			$('#d_airline_id').val(0);	
			$('#d_airline_name').val('');	
			$('#d_arrival_term').val('');	
			$('#d_departure_term').val('');	
			$('#d_terminal_code').val('');	
			$('#d_terminal_value').val('');	
			$('#DepartureServiceTimeId').val('');	
			$('#DepartureTimeId').val('');	
		  
		  DepartureFromAirport();
		  //SectorList();
	  }
	  if(tabName=='Transit')
	  {
		  TransitServiceAirport();
		  TransitArrivingSector();
	  }
	  if(tabName=='Lounge')
	  {
		  LoungeServiceAirport();
		  LoungeCategory();
	  }
  }
</script>
</body>
</html>