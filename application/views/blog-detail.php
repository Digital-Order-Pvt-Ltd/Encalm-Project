
 <?php include 'home-head.php';?>
<!-- ======= Header ======= --> 
    <!-- Uncomment below if you prefer to use an image logo --> 
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?=base_url('atithya/')?>assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
   
<!-- End Header --> 

<main id="main"> 
  <!-- ======= About Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="row mb-4">
        <div class="col-md-8 m-auto">
        </div>
      </div>
      <div class="ccontent mt-5 pt-5">
        <h1 style="color: #cda45e;">Making Your Journey Through Airport Seamless with Atithya</h1>
        <div id="elite">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="splan mt-4">
                <p class="text-center"><img class="w-100" style="margin-bottom:5px;" alt="Atithya meet and greet, Meet and greet Delhi, Delhi airport assistance" src="<?=base_url('')?>/assets/image/gallery/poster.jpg"></p>
                <p>Someone said, travelling makes you a storyteller and enriches you with new perspective and experiences. Encalm Hospitality Pvt Ltd specializes in curating and delivering extraordinary experiences at the airport so that your story is special and speaks of comfort and luxury.</p>
                <p>Atithya, the welcome and assist service, is guided by the philosophy of अतिथि देवो भव: (Guests are equivalent to God). The spirit of hospitality is imbibed in everything they do and everything they offer to enrich the experience of their guests.</p>
                <p>Be it arrivals or departures, their executives take care of transfers and baggage and ensure a swift, smooth, and safe passage through the airport. Senior citizens, those needing special care, expectant mothers, or single parents are often worried about handling airport formalities, luggage, long walking distance at the airport, and finally reaching home safely. That’s where Atithya comes in! </p>
                <p>With a wide array of services at the airport, including Porter Service, Wheelchair Assistance, Lounge and Buggy service, Atithya team will ensure comfortable, relaxed transit for you with their commitment to delivering quality service.</p>
                <p>The world is nonstop! Atithya services are available 24/7 to sail you through the airport. The buggies are always operational to give you a ride. With the porter service, travelers need not worry about carrying heavy baggage and can just let them take the load. The assistance also comes in handy when you are getting late to the airport or just want to enjoy your time without worrying about the transit formalities. </p>
                <p>Atithya is committed to delight you consistently. The services are available to all, traveling through any airline or ticket class. The team is there to assist you at every step of the way and make sure that you and your loved ones are taken care of in the most special way. So next time when you are traveling through the airport, give them a chance to make your experience memorable. </p>
                <p>To make reservations, kindly call at <a href="tel:919289366950">+91 9289366950</a> or visit <a target="_blank" href="https://www.encalm.com/atithya">encalm.com/atithya</a>. </p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Section --> 
  
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
            $(this).html('<img src="<?=base_url('atithya_assets/assets/')?>img/transit-02.png" width="24px"/>&nbsp;Transit');
        }
        else
        {
          $(this).html('<img src="<?=base_url('atithya_assets/assets/')?>img/transit-01.png" width="24px"/>&nbsp;Transit');
        }
    });
    $(".check-class-2").click(function(){
        $(".check-class").html('<img src="<?=base_url('atithya_assets/assets/')?>img/transit-01.png" width="24px"/>&nbsp;Transit');
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
  });
</script>
</body>
</html>