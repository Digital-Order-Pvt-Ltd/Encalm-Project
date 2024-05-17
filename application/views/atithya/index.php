<?php include 'home-head.php'; ?>
<!-- ======= Header ======= -->
<!-- Uncomment below if you prefer to use an image logo -->
<!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?= base_url('atithya_assets/') ?>assets/img/logo.png" alt="" class="img-fluid"></a>-->
<?php
// Get the current URI
$currentUri = $this->uri->uri_string();

// Check if the URI contains "spa"
if (strpos($currentUri, 'spa') !== false) {
  // The URI contains "spa"
  $spa = true;
  include 'top-menu-spa.php';
} else {
  // The URI does not contain "spa"
  $spa = false;
  include 'top-menu.php';
}

$obid = !empty($_SESSION['reschedule_booking_id']) ? $_SESSION['reschedule_booking_id'] : null;

?>
<!-- .navbar -->

<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="row d-flex align-items-center">
      <div class="col-lg-5 pe-lg-5 d-md-block d-none">
        <div id="scontent" class="htexts">
          <div class="row">
            <div class="col-md-12 mb-4"><img src="<?= base_url('atithya_assets/') ?>assets/img/atithyalogo.png" alt=""></div>
          </div>
        </div>
        <div id="lcontent" class="htexts d-none">
          <div class="row">
            <div class="col-md-12 mb-4"><img src="<?= base_url('atithya_assets/') ?>assets/img/servicelogo.png" alt=""></div>
          </div>
        </div>
        <div id="pcontent" class="htexts d-none">
          <div class="row">
            <div class="col-md-12 mb-4"><img src="<?= base_url() ?>assets/image/atithya/gold-spa.png" alt=""></div>
          </div>
        </div>
      </div>
      <style>
        .homesearch li {
          width: 33%;
          padding: 0px 0px;
        }
      </style>
      <div class="col-lg-7 bg-white rounded-3 p-0 search-box">
        <ul class="nav nav-tabs homesearch" id="myTab" role="tablist">
          <?php if (!$spa) { ?>

            <li class="nav-item"> <a class="nav-link check-class-2 active" id="arrival-tab" data-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="true"><i class="fas fa-plane-arrival"></i>&nbsp;Arrival</a> </li>
            <li class="nav-item" style="width: 20%;"> <a class="nav-link check-class-2" id="departure-tab" data-toggle="tab" href="#departure" role="tab" aria-controls="departure" aria-selected="false" onclick="HomeActiveTab('Departure')"><i class="fas fa-plane-departure"></i>&nbsp;Departure</a> </li>
            <li class="nav-item"> <a class="nav-link check-class" id="transit-tab" data-toggle="tab" href="#transit" role="tab" aria-controls="transit" aria-selected="false" onclick="HomeActiveTab('Transit')"><img src="<?= base_url('atithya_assets/assets/') ?>img/transit-01.png">&nbsp;Transit</a> </li>
            <!-- <li class="nav-item"> <a class="nav-link check-class-2" id="lounge-tab" data-toggle="tab" href="#lounge" role="tab" aria-controls="lounge" aria-selected="false"  onclick="HomeActiveTab('Lounge')"><i class="fas fa-couch"></i>&nbsp;Lounge</a> </li> -->
          <?php
          } else { ?>
            <li class="nav-item"> <a class="nav-link check-class2" id="spa-tab" data-toggle="tab" href="#spa" role="tab" aria-controls="spa" aria-selected="false" onclick="HomeActiveTab('Spa')"><i class="fas fa-spa"></i>&nbsp;Spa</a> </li>
          <?php
          }
          ?>

        </ul>
        <div class="tab-content py-4 px-5" id="myTabContent">
          <?php if (!$spa) { ?>
            <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
              <?php include 'arrival.php'; ?>
            </div>
            <div class="tab-pane fade" id="departure" role="tabpanel" aria-labelledby="departure-tab">
              <?php include 'departure.php'; ?>
            </div>
            <div class="tab-pane fade" id="transit" role="tabpanel" aria-labelledby="transit-tab">
              <?php include 'transit.php'; ?>
            </div>
            <div class="tab-pane fade" id="lounge" role="tabpanel" aria-labelledby="lounge-tab">
              <?php include 'lounge.php'; ?>
            </div>
          <?php
          } else {
          ?>
            <div class="tab-pane fade active" id="spa" role="tabpanel" aria-labelledby="spa-tab">
              <?php include 'spa.php'; ?>
            </div>
          <?php
          }
          ?>
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
      <?php if (!$spa) {
      ?>
        <div class="row d-flex align-items-top">
          <div class="col-md-4">
            <p class="mb-4"><img src="<?= base_url('atithya_assets/') ?>assets/img/imgarrival.png" alt="" class="img-fluid"></p>
            <h4 class="mb-2">Arrival</h4>
            <p class="mb-2 mh-140">Make your arrival count with Atithya Arrival services! Our team of trained cohorts go the extra mile to ensure a pleasant and smooth arrival experience for you and your loved ones. </p>
            <p class="mb-4 text-center"><a href="<?= base_url('atithya/services/arrival') ?>" class="btn btn-primary rounded-pill btn-lg px-4">Know More</a></p>
          </div>
          <div class="col-md-4">
            <p class="mb-4"><img src="<?= base_url('atithya_assets/') ?>assets/img/imgdepart.png" alt="" class="img-fluid"></p>
            <h4 class="mb-2">Departure</h4>
            <p class="mb-2 mh-140">Have a great start to your Journey with Atithya. We will make sure that you and your loved ones have great beginning to your journey with our personalised help, warmth and care. </p>
            <p class="mb-4 text-center"><a href="<?= base_url('atithya/services/departure') ?>" class="btn btn-primary rounded-pill btn-lg px-4">Know More</a></p>
          </div>
          <div class="col-md-4">
            <p class="mb-4"><img src="<?= base_url('atithya_assets/') ?>assets/img/imgtransit.png" alt="" class="img-fluid"></p>
            <h4 class="mb-2">Transit</h4>
            <p class="mb-2 mh-140">Transit is no more a hassle with Atithya. We will make sure that you board your next flight safely and efficiently. </p>
            <p class="mb-4 text-center"><a href="<?= base_url('atithya/services/transit') ?>" class="btn btn-primary rounded-pill btn-lg px-4">Know More</a></p>
          </div>
        </div>
      <?php
      } else {
      ?>
        <div class="row">
          <div class="row d-flex align-items-top">
            <div class="col-lg-12 pt-4 pt-lg-0 content color-black text-justify">
              <h4>INTRODUCING ENCALM SPA</h4>
              <p class="text-justify color-black">In our continued efforts to create delightful experiences at the airport for our guests, we have designed the ultimate treat for senses - a place to unwind and indulge in opulence - the Encalm Spa.</p>
              <p class="text-justify color-black">As exhilarating as travelling is, the airport journey can get tedious. Travellers have to deal with delayed flights, long transit all the while making their way through the hordes of other people at the airport.</p>
              <p class="text-justify color-black">With all the aforementioned challenges of travelling, our guests deserve a break to relax during their journey.</p>
              <p class="text-justify color-black">&nbsp;</p>
              <h4>WHAT DOES THE SPA OFFER?</h4>
              <p class="text-justify color-black">In our day-to-day business, we forego just how essential a moment to yourself can be and what it can mean to step back from the world, disconnect and simply relax.</p>
              <p class="text-justify color-black">Other than simply pampering yourself, here are some of the benefits of spa therapy at Encalm Spa:</p>
              <ol class="color-black">
                <li><strong>The chance to disconnect – </strong>Our daily lives are always filled with tension and stress.
                  Detachment, even on a holiday, can be quite a task. A spa therapy session facilitates this process
                  to disconnect from the external world for a few hours of calm.</li>
                <li><strong>Improvement in blood circulation – </strong>An effective spa treatment will improve blood circulation in
                  the body thereby improving the overall well-being.</li>
                <li><strong>Stimulation of the lymphatic system – </strong>Along with boosting blood flow, spa therapy also
                  stimulates the lymphatic system, eliminating toxins from the body, encouraging healthy
                  circulation thereby reducing tiredness.</li>
                <li><strong>Pain relief – </strong>Spa treatments offer great methods for pain relief associated with a variety of
                  conditions such as arthritis and muscle spasms, among others. Some massage therapies are
                  ideal in relaxing tense and painful muscles.</li>
                <li><strong>Physical and mental relaxation – </strong>Spa treatments offer a chance to relax, both physically and
                  mentally. Certain therapies can alleviate tension in the body and boost your mood.</li>
              </ol>
              <p class="text-justify color-black">&nbsp;</p>
              <h4>WHY SHOULD ONE STOP BY AT THE ENCALM SPA?</h4>
              <p class="text-justify color-black"><em>“Relax the body. Heal the mind. Calm the spirit.”</em></p>
              <p class="text-justify color-black">One of the greatest gifts to yourself can be just the right amount of attention. At Encalm Spa, we
                provide an environment of tranquility and numerous massage therapies that help you unwind after a
                long day at the airport!</p>
              <p class="text-justify color-black">Our in-house experts understand the exceptional benefits of massage therapy and utilize time-honored
                techniques during each session. Our treatments include only the finest natural ingredients, known for
                their calming and healing properties, such as lavender and cedarwood among others.</p>
              <p class="text-justify color-black">A good spa session is known to enhance moods and promote emotional and physical well-being. If
                peace of mind is what you’re after, come visit us at the Encalm Spa.</p>
              <p class="text-justify color-black"><strong>Location</strong></p>
              T3 International Departures, IGI Airport, New Delhi
              <p class="text-justify color-black"><i class="fa fa-phone color-blue" aria-hidden="true"></i> <a class="color-black" href="tel:+911149632241">+91 1149632241</a></p>

              T3 Domestic Departures, IGI Airport, New Delhi
              <p class="text-justify color-black"><i class="fa fa-phone color-blue" aria-hidden="true"></i> <a class="color-black" href="tel:+911149630620">+91 1149630620</a></p>

              <p class="text-justify color-black"><i class="fa fa-envelope color-blue" aria-hidden="true"></i> <a href="mailto:spa@encalm.com">spa@encalm.com</a> </p>

              <!--<p class="text-justify color-black"><strong>For Enquires:</strong><br>
                <p class="text-justify color-black"><i class="fa fa-envelope color-blue" aria-hidden="true"></i> <a href="mailto:spa@encalm.com">spa@encalm.com</a> </p>
                  <p class="text-justify color-black"><i class="fa fa-phone color-blue" aria-hidden="true"></i> <a class="color-black" href="tel:+911149632241">+91 1149632241</a></p>
            </p>-->

              <p class="text-justify color-black">&nbsp;</p>
              <div class="section-title text-center padd-top-10"> <!--<h2>About</h2>-->
                <p>Open Now</p>
              </div>
            </div>
          </div>
        </div>
      <?php }
      ?>
    </div>
  </section>


</main>
<!-- End #main -->
<!-- ======= Footer ======= -->

<?php

include('home-footer.php');
?>

<script> 
  function HomeActiveTab(tabName) {

    if (tabName == 'Departure') {
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
    if (tabName == 'Transit') {
      TransitServiceAirport();
      TransitArrivingSector();
    }
    if (tabName == 'Lounge') {
      LoungeServiceAirport();
      //LoungeCategory();
      getLoungeHours();
    }
  }
  $(document).ready(function() {
    $('.check-class').click(function() {
      if ($(this).hasClass('active') == true) {
        $(this).html('<img src="<?= base_url('atithya_assets/assets/') ?>img/transit-02.png" width="24px"/>&nbsp;Transit');
      } else {
        $(this).html('<img src="<?= base_url('atithya_assets/assets/') ?>img/transit-01.png" width="24px"/>&nbsp;Transit');
      }
    });
    $(".check-class-2").click(function() {
      $(".check-class").html('<img src="<?= base_url('atithya_assets/assets/') ?>img/transit-01.png" width="24px"/>&nbsp;Transit');
    });
    $("#myTab a").click(function() {
      $('.htexts').addClass('d-none');
      if ($(this).attr('id') == 'lounge-tab')
        $('#lcontent').removeClass('d-none');
      else if ($(this).attr('id') == 'spa-tab')
        $('#pcontent').removeClass('d-none');
      else
        $('#scontent').removeClass('d-none');
    });
    <?php if (isset($_POST['loungetab'])) { ?>
      $("#lounge-tab").click();
    <?php } ?>
    $('#arrivalFormSubmit').click(function(event) {
      event.preventDefault();
      console.log($('#Arrivaldof').val() + 'T' + $('#ArrivalTimeId').val() + ':00');
      var fdate = convertFromStringToDate($('#Arrivaldof').val() + 'T' + $('#ArrivalTimeId').val() + ':00');
      var cdate = new Date();
      var hours = Math.abs(cdate - fdate) / 36e5;
      //   if((fdate > cdate)&&(hours > 8)) {
      var sector = $('#ArrivingSector').val();
      if (sector === 'Domestic') {
        if ((fdate > cdate) && (hours > 4)) {
          $('#arrivalForm').submit();
        } else {
          alert('Website bookings are accepted only for services beyond 4 hours of service time. For all service requests within 4 hours request you to kindly connect with us on +91 9289366950');
        }
      }
      if (sector === 'International') {
        if ((fdate > cdate) && (hours > 8)) {
          $('#arrivalForm').submit();
        } else {
          alert('Website bookings are accepted only for services beyond 8 hours of service time. For all service requests within 8 hours request you to kindly connect with us on +91 9289366950');
        }
      }
    });
    $('#departureFormSubmit').click(function(event) {
      event.preventDefault();
      console.log($('#Departuredod').val() + 'T' + $('#DepartureTimeId').val() + ':00');
      //console.log($('#d_service_date_time').val().replace(/ /g,'T')+':00');
      var fdate = convertFromStringToDate($('#d_service_date_time').val().replace(/ /g, 'T') + ':00');
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
      if (sector === 'Domestic') {
        if ((fdate > cdate) && (hours > 4)) {
          $('#departureForm').submit();
        } else {
          alert('Website bookings are accepted only for services beyond 4 hours of service time. For all service requests within 4 hours request you to kindly connect with us on +91 9289366950');
        }
      }
      if (sector === 'International') {
        if ((fdate > cdate) && (hours > 8)) {
          $('#departureForm').submit();
        } else {
          alert('Website bookings are accepted only for services beyond 8 hours of service time. For all service requests within 8 hours request you to kindly connect with us on +91 9289366950');
        }
      }
    });
    $('#transitFormSubmit').click(function(event) {
      event.preventDefault();
      console.log($('#Transitdoa').val() + 'T' + $('#TransitArrivalServiceTimeId').val() + ':00');
      var fdate = convertFromStringToDate($('#Transitdoa').val() + 'T' + $('#TransitArrivalServiceTimeId').val() + ':00');
      var cdate = new Date();
      var hours = Math.abs(cdate - fdate) / 36e5;
      if ((fdate > cdate) && (hours > 8)) {
        $('#transitForm').submit();
      } else {
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
    <?php if ($spa) {
      //   echo "alert('ff');";
      // echo "HomeActiveTab(spa);";
      echo "$('#spa-tab').trigger('click');";
    }
    ?>
  });
  // $('#arrivalFormReschedule').click(function(event) {
  //       'use strict';

  //       event.preventDefault();
  //       console.log($('#Arrivaldof').val() + 'T' + $('#ArrivalTimeId').val()+':00');
  //       var fdate = convertFromStringToDate($('#Arrivaldof').val() + 'T' + $('#ArrivalTimeId').val()+':00');
  //       var fgdate = $('#Arrivaldof').val() + 'T' + $('#ArrivalTimeId').val()+':00';
  //       console.log("fdate"+fgdate);
  //       debugger;
  //       var cdate = new Date();
  //       var hours = Math.abs(cdate - fdate) / 36e5;
  //       if((fdate > cdate)&&(hours > 1)) {
  //           // $('#arrivalForm').submit();
  //           // openCharges();
  //           var productType = "<?php echo $_SESSION['prd'] ? $_SESSION['prd'] : '0'; ?>";
  //           var serviceTime = fgdate;
  //           var amount = 2800;
  //           console.log(productType,serviceTime,amount);
  //           showRescheduleCharges(productType,serviceTime,amount);
  //       }
  //       else {
  //         alert('Sorry, Booking can be done atleast 1 hour prior to flight time.');
  //       }
  //   });
</script>
</body>

</html>