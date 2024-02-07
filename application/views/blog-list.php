
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
        <h1>Blogs</h1>
        <div id="elite">
        <div class="row mb-5">
          <div class="col-md-4">
            <div class="splan mt-4 shadow p-3 mb-5 bg-white rounded">
			
                <p><img class="w-100" style="margin-bottom:5px;" alt="Atithya meet and greet, Meet and greet Delhi, Delhi airport assistance" src="<?=base_url('')?>/assets/image/logo/atithya-location.jpg"></p>
                <!--p><img class="w-100" style="margin-bottom:5px;" src="<?=base_url('')?>/assets/image/blog-header.jpg"></p-->
                <h4 class="mt-3"><a href="<?=base_url('')?>atithya/blogs/detail">Making Your Journey Through Airport Seamless with Atithya1</a></h4>
                <p class="text-right"><a href="<?=base_url('')?>atithya/blogs/detail" class="btn btn-primary my-2 px-3 py-1 btn-sm">Read More</a></p>
            </div>
          </div>
        <hr>
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