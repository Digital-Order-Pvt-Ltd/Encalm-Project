
 <?php include 'home-head.php';?>
<!-- ======= Header ======= --> 
    <!-- Uncomment below if you prefer to use an image logo --> 
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?=base_url('atithya/')?>assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
   
<!-- End Header --> 

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6 pe-lg-5 d-md-block d-none">
        <div id="scontent" class="htexts">
          <div class="row">
            <div class="col-md-12 mb-4"><img src="<?=base_url('atithya/')?>assets/img/atithyalogo.png" alt=""></div>
          </div>
        </div>
        <div id="lcontent" class="htexts d-none">
          <div class="row">
            <div class="col-md-12 mb-4"><img src="<?=base_url('atithya/')?>assets/img/servicelogo.png" alt=""></div>
          </div>
        </div>
      </div>
      <style>
        .homesearch li {
            width: 33%;
            padding: 0px 0px;
        }
      </style>
      <div class="col-lg-6 bg-white rounded-3 p-0 search-box">
        <ul class="nav nav-tabs homesearch" id="myTab" role="tablist">
          <li class="nav-item"> <span class="nav-link check-class-2" href="#"><img src="<?=base_url('atithya/')?>assets/img/atithyatext.png" class="w-75"></span> </li>
          <li class="nav-item"> <a class="nav-link check-class-2 active" id="arrival-tab" data-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="true"><i class="fas fa-plane-arrival"></i>&nbsp;Arrival</a> </li>
          <li class="nav-item"> <a class="nav-link check-class-2" id="departure-tab" data-toggle="tab" href="#departure" role="tab" aria-controls="departure" aria-selected="false" onclick="HomeActiveTab('Departure')"><i class="fas fa-plane-departure"></i>&nbsp;Departure</a> </li>
          <li class="nav-item"> <a class="nav-link check-class" id="transit-tab" data-toggle="tab" href="#transit" role="tab" aria-controls="transit" aria-selected="false"  onclick="HomeActiveTab('Transit')" ><img src="<?=base_url('atithya/assets/')?>img/transit-01.png">&nbsp;Transit</a> </li>
          <?php /*<li class="nav-item"> <a class="nav-link check-class-2" id="lounge-tab" data-toggle="tab" href="#lounge" role="tab" aria-controls="lounge" aria-selected="false"  onclick="HomeActiveTab('Lounge')"><i class="fas fa-couch"></i>&nbsp;Lounge</a> </li>*/ ?>
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
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="row d-flex align-items-top">
        <div class="col-md-4">
          <p class="mb-4"><img src="<?=base_url('atithya/')?>assets/img/imgarrival.png" alt="" class="img-fluid"></p>
          <h4 class="mb-2">Arrival</h4>
          <p class="mb-2 mh-140">Make your arrival count with Atithya Arrival services! Our team of trained cohorts go the extra mile to ensure a  pleasant and smooth arrival experience for you and your loved ones.  </p>
          <p class="mb-4 text-center"><a href="<?=base_url('atithya/services/arrival')?>" class="btn btn-primary rounded-pill btn-lg px-4">Know More</a></p>
        </div>
        <div class="col-md-4">
          <p class="mb-4"><img src="<?=base_url('atithya/')?>assets/img/imgdepart.png" alt="" class="img-fluid"></p>
          <h4 class="mb-2">Departure</h4>
          <p class="mb-2 mh-140">Have a great start to your Journey with Atithya. We will make sure that you and your loved ones have great beginning to your journey with our personalised help, warmth and care.   </p>
          <p class="mb-4 text-center"><a href="<?=base_url('atithya/services/departure')?>" class="btn btn-primary rounded-pill btn-lg px-4">Know More</a></p>
        </div>
        <div class="col-md-4">
          <p class="mb-4"><img src="<?=base_url('atithya/')?>assets/img/imgtransit.png" alt="" class="img-fluid"></p>
          <h4 class="mb-2">Transit</h4>
          <p class="mb-2 mh-140">Transit is no more a hassle with Atithya. We will make sure that you board your next flight safely and efficiently. </p>
          <p class="mb-4 text-center"><a href="<?=base_url('atithya/services/transit')?>" class="btn btn-primary rounded-pill btn-lg px-4">Know More</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Section --> 
  <?php /*<!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img"> <img src="<?=base_url('atithya/')?>assets/img/about.jpg" alt=""> </div>
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
          <div class="vision-img"> <img src="<?=base_url('atithya/')?>assets/img/vision.jpg" alt=""> </div>
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
            <div class="col-lg-12 menu-item filter-starters"> <img src="<?=base_url('atithya/')?>assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
              <div class="menu-content"> <a href="#">Swift</a></div>
              <div class="menu-ingredients"> We are agile, adaptable and lead the change </div>
            </div>
            <div class="col-lg-12 menu-item filter-specialty"> <img src="<?=base_url('atithya/')?>assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
              <div class="menu-content"> <a href="#">Trust</a> </div>
              <div class="menu-ingredients"> We work with integrity and honesty </div>
            </div>
            <div class="col-lg-12 menu-item filter-starters"> <img src="<?=base_url('atithya/')?>assets/img/menu/cake.jpg" class="menu-img" alt="">
              <div class="menu-content"> <a href="#">Excellence</a> </div>
              <div class="menu-ingredients"> We strive for excellence in our thoughts, words and deeds </div>
            </div>
            <div class="col-lg-12 menu-item filter-salads"> <img src="<?=base_url('atithya/')?>assets/img/menu/caesar.jpg" class="menu-img" alt="">
              <div class="menu-content"> <a href="#">Poeple First</a></div>
              <div class="menu-ingredients"> We nurture talent and treat everyone the way we would like to be treated. </div>
            </div>
            <div class="col-lg-12 menu-item filter-specialty"> <img src="<?=base_url('atithya/')?>assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
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
            <img src="<?=base_url('atithya/')?>assets/img/icons_01.png">
            </span>
            <h5>Lounge Service</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <img src="<?=base_url('atithya/')?>assets/img/icons_02.png">
            </span>
            <h5>F&amp;B</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <img src="<?=base_url('atithya/')?>assets/img/icons_03.png">
            </span>
            <h5>Flight Information</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <img src="<?=base_url('atithya/')?>assets/img/icons_04.png">
            </span>
            <h5>Spa</h5>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><img src="<?=base_url('atithya/')?>assets/img/icons_05.png"></span>
            <h5>Newspaper &amp; Magazine </h5>
          </div> 
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><img src="<?=base_url('atithya/')?>assets/img/icons_06.png"></span>
            <h5>Wi-Fi</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><img src="<?=base_url('atithya/')?>assets/img/icons_07.png"></span>
            <h5>* Greeting Services</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><img src="<?=base_url('atithya/')?>assets/img/icons_08.png"></span>
            <h5>Baggage Handling</h5>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><img src="<?=base_url('atithya/')?>assets/img/icons_09.png"></span>
            <h5>Airport Lounge</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><img src="<?=base_url('atithya/')?>assets/img/icons_10.png"></span>
            <h5>Fast Track</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><img src="<?=base_url('atithya/')?>assets/img/icons_11.png"></span>
            <h5>Buggy</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><img src="<?=base_url('atithya/')?>assets/img/icons_12.png"></span>
            <h5>Concierge Services</h5>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><img src="<?=base_url('atithya/')?>assets/img/icons_13.png"></span>
            <h5>Porter</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span><img src="<?=base_url('atithya/')?>assets/img/icons_14.png"></span>
            <h5>Immigration Assitance</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <img src="<?=base_url('atithya/')?>assets/img/icons_15.png">
            </span>
            <h5>Bar</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <img src="<?=base_url('atithya/')?>assets/img/icons_16.png">
            </span>
            <h5>Business Centre</h5>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <img src="<?=base_url('atithya/')?>assets/img/icons_17.png">
            </span>
            <h5>Shower</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <img src="<?=base_url('atithya/')?>assets/img/icons_18.png">
            </span>
            <h5>Kids Zone</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <img src="<?=base_url('atithya/')?>assets/img/icons_19.png">
            </span>
            <h5>Hotel</h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100"> <span>
            <img src="<?=base_url('atithya/')?>assets/img/icons_20.png">
            </span>
            <h5>Nap Room</h5>
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
  <!-- End Contact Section --> */ ?>
  
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
			$("#DepartureToAirtport").html('<option value="" data-id="0">Destination Airport</option>');
			
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
  $(document).ready(function(){
    $('.check-class').click(function(){
        if($(this).hasClass('active') == true)
        {
            $(this).html('<img src="<?=base_url('atithya/assets/')?>img/transit-02.png" width="24px"/>&nbsp;Transit');
        }
        else
        {
          $(this).html('<img src="<?=base_url('atithya/assets/')?>img/transit-01.png" width="24px"/>&nbsp;Transit');
        }
    });
    $(".check-class-2").click(function(){
        $(".check-class").html('<img src="<?=base_url('atithya/assets/')?>img/transit-01.png" width="24px"/>&nbsp;Transit');
    });
    $("#myTab a").click(function(){
      $('.htexts').addClass('d-none');
      if($(this).attr('id')=='lounge-tab')
        $('#lcontent').removeClass('d-none');
      else
        $('#scontent').removeClass('d-none');
    });
    <?php if(isset($_POST['loungetab'])) { ?>
      $("#lounge-tab").click();
    <?php } ?>
    $('#arrivalFormSubmit').click(function(event) {
      event.preventDefault();
      console.log($('#Arrivaldof').val() + 'T' + $('#ArrivalTimeId').val()+':00');
      var fdate = convertFromStringToDate($('#Arrivaldof').val() + 'T' + $('#ArrivalTimeId').val()+':00');
      var cdate = new Date();
      var hours = Math.abs(cdate - fdate) / 36e5;
      if((fdate > cdate)&&(hours > 12)) {
          $('#arrivalForm').submit();
      }
      else {
        alert('Sorry, Booking can be done atleast 12 hours prior to flight time.');
      }
    });
    $('#departureFormSubmit').click(function(event) {
      event.preventDefault();
      console.log($('#Departuredod').val() + 'T' + $('#DepartureTimeId').val()+':00');
      var fdate = convertFromStringToDate($('#Departuredod').val() + 'T' + $('#DepartureTimeId').val()+':00');
      var cdate = new Date();
      var hours = Math.abs(cdate - fdate) / 36e5;
      if((fdate > cdate)&&(hours > 12)) {
          $('#departureForm').submit();
      }
      else {
        alert('Sorry, Booking can be done atleast 12 hours prior to flight time.');
      }
    });
  });
</script>
</body>
</html>