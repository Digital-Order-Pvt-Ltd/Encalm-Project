
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
        <h1 style="color: #cda45e;">Encalm Hospitality to invest in premium airport lounges in Delhi; to expand airpprt services to Hyderabad from May</h1>
        <div id="elite">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="splan mt-4">
                <p><em>Vikas Sharma, CEO of Encalm Hospitality Pvt Ltd, informs that the company is expected to invest nearly INR 200 crore in the next one year to set up exclusive traveller lounges to cater to Business travellers and HNIs in Delhi. Enclam Hospitality offers airport meet and assist services under the brand ‘Atithya’ and Lounge services under the brand ‘Encalm’. Currently, the airport meet and assist services are offered for guests at all the terminals of the Delhi International Airport. Since this February, the company also started its own airport lounge in Terminal 1 of the Delhi Airport.</em></p>
                <p><img height="450" width="600" class="float-md-start me-md-5 mb-4" style=";margin-bottom:5px;" src="https://etimg.etb2bimg.com/photo/90815207.cms" data-src="https://etimg.etb2bimg.com/photo/90815207.cms" captionrendered="1" alt="Encalm Hospitality to invest in premium airport lounges in Delhi; to expand airport services to Hyderabad from May" data-init-src="https://st.etb2bimg.com/Themes/Release/images/site-logos/et-travel-default.jpg"></p>
                <p>A relatively new entrant into the airport hospitality services, Encalm Hospitality is on an expansion spree already. The company is all set to expand its operations to Hyderabad Airport after establishing its airport services base in Delhi.</p>
                <p>Enclam Hospitality offers airport meet and assist services under the brand ‘Atithya’ and Lounge services under the brand ‘Encalm’. Currently, the airport meet and assist services are offered for guests at all the terminals of the Delhi International Airport. Since this February, the company also started its own airport lounge in Terminal 1 of the Delhi Airport.</p>
                <p>“The idea is to develop our own brand of meet and assist services under ‘Atithya’ and airport lounges under the brand ‘Encalm’,” says Sharma. After Hyderabad, Encalm has plans to expand into Goa when the new Mopa International airport gets operational.</p>
                <p>While the Atithya meet and assist services at airports is something that the company is looking to establish, the bulk of the capital investments is expected in setting up exclusive airport lounges. Sharma said that the company will be investing close to INR 200 crore in setting up premium lounges this year.</p>
                <p>After Terminal 1 Delhi, the company will be launching their second branded lounge in Terminal 2 of Delhi International by the end of June this year. Sharma said that the company is working on two premium lounges in Terminal 3 of the Delhi airport by year end as well. While one will be a unified lounge for business class passengers, the other will be an exclusive VIP lounge meant to service HNIs and premium customers.</p>
                <p>“The unified business class lounge will have around 670-seat capacity,” Sharma said. The exclusive VIP lounge will be outside the terminal building and there will be facilities for VIP travellers to complete all formalities including the security check, etc., at the lounge itself, he said. The access to this exclusive lounge will be based on exclusive membership.</p>
                <p>In the lounge services, Encalm Hospitality has global tie up with TAV İşletme Hizmetleri, a leading operator of airport lounges in the world, which gives Encalm customers access to airport services and lounges of TAV in over 65 airports in the world and 500 airport lounges.</p>
                <p>Under the Atithya, the company ensures that the travellers are received at the curbside of the airports and escorted smoothly through the different checkpoints of the terminal, before being seen off at the departure gate or in the flight itself.</p>
                <p>The company has also introduced a special ‘buddy service’ for needy customers who want special assistance. Under this special service, a buddy is assigned to escort a traveller from their home and accompanies him through the journey and drops off safety at the designated destination.</p>
                <p>Sharma said that the company also works closely with the leading travel and tourism companies to promote their airport services. The company is also in the process of partnering with OTAs like MMT to mutually promote the products and services.</p>
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