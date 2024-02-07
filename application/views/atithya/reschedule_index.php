<?php include 'home-head.php';?>
<!-- ======= Header ======= --> 
    <!-- Uncomment below if you prefer to use an image logo --> 
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?=base_url('atithya_assets/')?>assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
    <?php include 'top-menu.php';

    $obid = !empty($_SESSION['reschedule_booking_id'])?$_SESSION['reschedule_booking_id'] :null;
    
    ?>
    <!-- .navbar --> 
   
<!-- End Header --> 

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="row d-flex align-items-center">
      <div class="col-lg-5 pe-lg-5 d-md-block d-none">        
        <div id="pcontent" class="htexts d-none">
          <div class="row">
            <div class="col-md-12 mb-4"><img src="<?=base_url()?>assets/image/atithya/gold-spa.png" alt=""></div>
          </div>
        </div>
      </div>
      <style>
        .homesearch li {
            width: 33%;
            padding: 0px 0px;
        }
      </style>
      <center>
        <div class="col-lg-8 bg-white search-box">
          <!-- <h3 style="color:black"> Use below form to reschedule the service.</h3> -->
          <ul class="nav nav-tabs homesearch" id="myTab" role="tablist">
            <li class="nav-item"> <span class="nav-link check-class-2" href="#"><img src="<?=base_url('atithya_assets/')?>assets/img/atithyatext.png" class="w-75"></span> </li>
            <li class="nav-item"> <a class="nav-link check-class-2 active" id="arrival-tab" data-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="true"><i class="fas fa-plane-arrival"></i>&nbsp;Arrival</a> </li>
            <li class="nav-item"> <a class="nav-link check-class-2" id="departure-tab" data-toggle="tab" href="#departure" role="tab" aria-controls="departure" aria-selected="false" onclick="HomeActiveTab('Departure')"><i class="fas fa-plane-departure"></i>&nbsp;Departure</a> </li>
            <li class="nav-item"> <a class="nav-link check-class" id="transit-tab" data-toggle="tab" href="#transit" role="tab" aria-controls="transit" aria-selected="false"  onclick="HomeActiveTab('Transit')" ><img src="<?=base_url('atithya_assets/assets/')?>img/transit-01.png">&nbsp;Transit</a> </li>
            <!-- <li class="nav-item"> <a class="nav-link check-class-2" id="lounge-tab" data-toggle="tab" href="#lounge" role="tab" aria-controls="lounge" aria-selected="false"  onclick="HomeActiveTab('Lounge')"><i class="fas fa-couch"></i>&nbsp;Lounge</a> </li> -->
            <?php /*<li class="nav-item"> <a class="nav-link check-class-2" id="spa-tab" data-toggle="tab" href="#spa" role="tab" aria-controls="spa" aria-selected="false"  onclick="HomeActiveTab('Spa')"><i class="fas fa-spa"></i>&nbsp;Spa</a> </li>*/ ?>
          </ul>
          <div class="tab-content py-4 px-5" id="myTabContent">
      
            <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
              <?php 
              if ($obid) {
                include 'arrival_reschedule.php';
              }
              else{
                include 'arrival.php';
              }
              ?>
            </div>
            <div class="tab-pane fade" id="departure" role="tabpanel" aria-labelledby="departure-tab">
              <?php include 'departure.php';?>
            </div>
            <div class="tab-pane fade" id="transit" role="tabpanel" aria-labelledby="transit-tab">
              <?php include 'transit.php';?>
            </div>
            <!-- <div class="tab-pane fade" id="lounge" role="tabpanel" aria-labelledby="lounge-tab">
              <?php 
              //include 'lounge.php';?>
            </div> -->
            <!-- <div class="tab-pane fade" id="spa" role="tabpanel" aria-labelledby="spa-tab">
              <?php //include 'spa.php';?>
            </div>           -->
          </div>
        </div>
      </center>
    </div>
  </div>
</section>
<!-- End Hero -->

<main id="main"> 
  <!-- ======= About Section ======= -->
  

</main>
<!-- End #main --> 
<!-- ======= Footer ======= -->

    <?php 
            if ($obid) {
              include 'home-footer_reschedule.php';
            }
   ?>
  
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
		  //LoungeCategory();
      getLoungeHours();
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
      else if($(this).attr('id')=='spa-tab')
        $('#pcontent').removeClass('d-none');
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
    //   if((fdate > cdate)&&(hours > 8)) {
    var sector = $('#ArrivingSector').val();
    if (sector ==='Domestic'){
      if((fdate > cdate)&&(hours > 4)) {
          $('#arrivalForm').submit();
      }
      
      else {
        alert('Website bookings are accepted only for services beyond 4 hours of service time. For all service requests within 4 hours request you to kindly connect with us on +91 9289366950');
      }
    }
    if (sector ==='International'){
      if((fdate > cdate)&&(hours > 8)) {
          $('#arrivalForm').submit();
      }
      
      else {
        alert('Website bookings are accepted only for services beyond 8 hours of service time. For all service requests within 8 hours request you to kindly connect with us on +91 9289366950');
      }
    }
    });
    $('#departureFormSubmit').click(function(event) {
      event.preventDefault();
      console.log($('#Departuredod').val() + 'T' + $('#DepartureTimeId').val()+':00');
      //console.log($('#d_service_date_time').val().replace(/ /g,'T')+':00');
      var fdate = convertFromStringToDate($('#d_service_date_time').val().replace(/ /g,'T')+':00');
      //var fdate = convertFromStringToDate($('#Departuredod').val() + 'T' + $('#DepartureTimeId').val()+':00');
      var cdate = new Date();
      var hours = Math.abs(cdate - fdate) / 36e5;
    //   if((fdate > cdate)&&(hours > 8)) {
    //       $('#departureForm').submit();
    //   }
    //   else {
    //     alert('Website bookings are accepted only for services beyond 8 hours of service time. For all service requests within 8 hours request you to kindly connect with us on +91 9289366950');
    //   }
    var sector = $('#DepartureSector').val();
    if (sector ==='Domestic')
    {
      if((fdate > cdate)&&(hours > 4)) {
          $('#arrivalForm').submit();
      }
      
      else {
        alert('Website bookings are accepted only for services beyond 4 hours of service time. For all service requests within 4 hours request you to kindly connect with us on +91 9289366950');
      }
    }
    if (sector ==='International')
    {
      if((fdate > cdate)&&(hours > 8)) 
      {
          $('#arrivalForm').submit();
      }
      
      else 
      {
        alert('Website bookings are accepted only for services beyond 8 hours of service time. For all service requests within 8 hours request you to kindly connect with us on +91 9289366950');
      }
    }
    });
    $('#transitFormSubmit').click(function(event) {
      event.preventDefault();
      console.log($('#Transitdoa').val() + 'T' + $('#TransitArrivalServiceTimeId').val()+':00');
      var fdate = convertFromStringToDate($('#Transitdoa').val() + 'T' + $('#TransitArrivalServiceTimeId').val()+':00');
      var cdate = new Date();
      var hours = Math.abs(cdate - fdate) / 36e5;
      if((fdate > cdate)&&(hours > 8)) {
          $('#transitForm').submit();
      }
      else {
        alert('Website bookings are accepted only for services beyond 8 hours of service time. For all service requests within 8 hours request you to kindly connect with us on +91 9289366950');
      }
    });
    
  });
  
  $(document).ready(function() {
  $("form#loungeForm").submit(function(event) {
    event.preventDefault();
    var error = false;
    $(".input-field").removeClass("focus");
    $(".select2-selection").removeClass("focus");

    var LoungeServiceAirport = $("#LoungeServiceAirport").val();
    var LoungeTerminal = $("#LoungeTerminal").val();
    var LoungeCategory = $("#LoungeCategory").val();
    var LoungeSector = $("#LoungeSector").val();
    var LoungeDate = $("#LoungeDate").val();
    var LoungeFlight = $("#LoungeFlight").val();
    var LoungeTimeId = $("#LoungeTimeId").val();
    var LoungeServiceTimeId = $("#LoungeServiceTimeId").val();
    var LAdult = $("#LAdult").val();

    $(".input-field").each(function() {
      if ($(this).val() === "") {
        $(this).addClass("focus");
        $(this).focus();
        error = true;
      }
    });

    if (LoungeServiceAirport === "") {
      $(".select2-selection").addClass("focus");
      $("#LoungeServiceAirport").addClass("focus");
      $("#LoungeServiceAirport").focus();
      error = true;
    }

    if (LoungeTerminal === "") {
      $("#LoungeTerminal").addClass("focus");
      $("#LoungeTerminal").focus();
      error = true;
    }

    if (LoungeCategory === "") {
      $("#LoungeCategory").addClass("focus");
      $("#LoungeCategory").focus();
      error = true;
    }

    if (LoungeSector === "") {
      $("#LoungeSector").addClass("focus");
      $("#LoungeSector").focus();
      error = true;
    }

    if (LoungeDate === "") {
      $("#LoungeDate").addClass("focus");
      $("#LoungeDate").focus();
      error = true;
    }

    if (LoungeFlight === "") {
      $(".select2-selection").addClass("focus");
      $("#LoungeFlight").addClass("focus");
      $("#LoungeFlight").focus();
      error = true;
    }

    if (LoungeTimeId === "") {
      $("#LoungeTimeId").addClass("focus");
      $("#LoungeTimeId").focus();
      error = true;
    }

    if (LoungeServiceTimeId === "") {
      $("#LoungeServiceTimeId").addClass("focus");
      $("#LoungeServiceTimeId").focus();
      error = true;
    }

    if (LAdult === "" || LAdult === 0) {
      $("#LAdult").addClass("focus");
      $("#LAdult").focus();
      error = true;
    }

    if (error === false) {
      PleaseWaitShow();
      $(this).unbind('submit').submit();
    }

    return false;
  });
});

    
</script>
</body>
</html>