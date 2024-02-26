<?php include 'home-head.php';?>
<!-- ======= Header ======= -->
<!-- Uncomment below if you prefer to use an image logo -->
<!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?=base_url('atithya/')?>assets/img/logo.png" alt="" class="img-fluid"></a>-->

<?php include 'top-menu.php';?>
<!-- .navbar -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.active {
    color: darkblue !important;
    font-weight: 700;
    font-size: 18px !important;

}

.hyd,
.goa,
.del {
    position: relative;
    color: #cda45e;
    font-weight: 700;
    font-size: 26px !important;
    text-align: center;
    padding: 20px 40px !important;


}

.ctabs {
    width: 100%;
}

.hyd span,
.del span,
.goa span {
    position: absolute;
    top: 50%;
    left: 40%;
    text-align: center;
}
.font-20{
  font-size:20px !important;
  text-align:center
}

/* .tab-section .nav-tabs{
          border-bottom:2px solid #cda45e;
        } */


.terms-notes ul li {
    color: black !important;
    font-weight: 400;
    font-size: 12px;
}

.transit-box {
    background: #111a37;
    border-radius: 8px;
    width:400px;
    height:270px;
    padding: 10px;
}
.transit-box:hover {
  transform: scale(1.2); 
}

.transit-box ul li {
    font-size: 14px;
    font-weight: 400 !important;
}

.section-title-services p {
    margin: 10px 0px !important;
    letter-spacing: 1.2;
    line-height: 1.6;
    font-size: 24px;
    font-weight: 700;
    font-family: Brandon !important;
}

a {
    text-decoration: none
}
@media only screen and (max-width:768px){
    .mobile-flex{
        flex-direction:column;
        align-items: center;
    }
    .hyd, .goa, .del{
        padding: 10px 10px !important;
    }
    
}
</style>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex  align-items-end services_header">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-md-7 order-md-2 m-auto text-right text-white">
                <h1>Atithya Transit Services</h1>
                <h2 class="mb-4">Indira Gandhi International Airport, Delhi<br>
                    Rajiv Gandhi International Airport, Hyderabad<br>
                    Manohar International Airport, Goa</h2>
                <p class="mb-3 text-white">Transit is no more a hassle with Atithya. We will make sure that you board
                    your next flight safely and efficiently.</p>
            </div>
            <div class="col-md-5 order-md-1 m-auto text-left">
                <div class="ctabs">

                    <a href="#gold" class="active del">DEL</a>
                    <a href="#elite" class=" hyd">HYD</a>
                    <a href="#silver" class="goa">GOX</a>
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
            <div class="row mb-4">
                <div class="col-md-8 m-auto">
                </div>
            </div>
            <div class="ccontent">
                <div id="gold">
                    <div class="mb-5">

                        <div class="section-title-services">
                            <p>ATITHYA PRICE MAP</p>
                            <p>INDIRA GANDHI INTERNATIONAL AIRPORT, DELHI</p>

                            <div class="d-flex  align-items-center w-100 gap-5 mobile-flex">
                                <div>
                                    <p class="font-20 pb-4">DOMESTIC - DOMESTIC</p>
                                    <div class="pt-2 mt-4 transit-box shadow">
                                        <p class="text-center">INR 4500</p>
                                        <ul>
                                            <li>Assistance from the aerobridge or bus gate as per arrival (bridge
                                                connecting aircraft & terminal)</li>
                                            <li> Guidance at CKIN counters</li>
                                             <li> Gate Transfer on Buggy (battery operated
                                                car)* </li>
                                            <li> Porter assistance from baggage belt to check-in of departures* </li>
                                            <li> Lounge Access for 2 hours* (at departure only)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <p class="pb-4 font-20">INTERNATIONAL - INTERNATIONAL</p>
                                    <div class="pt-2 mt-4 transit-box shadow">
                                        <p class="text-center">INR 6500</p>
                                        <ul>
                                            <li>Assistance from the aerobridge or bus gate as per arrival (bridge
                                                connecting aircraft & terminal)</li>
                                            <li> Guidance at CKIN counters </li><li> Gate Transfer on Buggy (battery operated
                                                car)* </li>
                                            <li> Porter assistance from baggage belt to check-in of departures* </li>
                                            <li> Lounge Access for 2 hours* (at departure only)</li>
                                        </ul>
                                    </div>
                                </div>

                                <div>
                                    <p class="font-20">INTERNATIONAL - DOMESTIC / DOMESTIC - INTERNATIONAL</p>
                                    <div class="pt-2 transit-box shadow mx-auto">
                                        <p class="text-center">INR 6500</p>
                                        <ul>
                                            <li>Assistance from the aerobridge or bus gate as per arrival (bridge
                                                connecting aircraft & terminal)</li>
                                            <li> Guidance at CKIN counters </li><li> Gate Transfer on Buggy (battery operated
                                                car)* </li>
                                            <li> Porter assistance from baggage belt to check-in of departures* </li>
                                            <li> Lounge Access for 2 hours* (at departure only)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="terms-notes pt-5">
                            <ul>
                                <li> Buggy service is only available at Terminal 3 (subject to availability and location
                                    of the gate) </li>
                                <li> Surcharge of INR 590 (AI) shall be applicable for any booking requests received
                                    within 12 hours of service time. The above shared rates are per pax and inclusive of
                                    GST @ 18%. </li>
                                <li> Service charges applicable for Child (2-12 years) would be 30% discount on the
                                    price applicable for Adult Guests. Infant (0-2 years) will not be charged. </li>
                                <li> Lounge access for 2 hours is applicable for all places where lounge is mentioned.
                                    Additional access beyond this duration will incur additional charges. </li>
                                <li> The services are subject to government regulations prevailing at the time of
                                    delivery of service.</li>
                                <li> The services are subject to availability. </li>
                                <li> Please contact your relationship
                                    manager or reservations for any request you may have for 5 pax and above. </li>
                                <li> Porter assistance upto 3 bags/guest. </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="elite" style="display: none;">
                    <div class="mb-5">

                        <div class="section-title-services">
                            <p>ATITHYA PRICE MAP</p>
                            <p>RAJIV GANDHI INTERNATIONAL AIRPORT, HYDERABAD</p>

                            <div class="d-flex mobile-flex align-items-center  w-100 gap-5">
                                <div>
                                    <p class="pb-4 font-20">DOMESTIC - DOMESTIC</p>
                                    <div class="pt-2 mt-4 transit-box shadow">
                                        <p class="text-center">INR 4500</p>
                                        <ul>
                                            <li>Assistance from the aerobridge or bus gate as per arrival</li>
                                            <li> Porter assistance from baggage belt to check-in of departures*</li>
                                            <li>Guidance at airline CKIN counters </li>
                                            <li> Lounge access for 2 hours (at departure only)*</li>
                                            <li>Guidance to designated boarding gate</li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <p class="pb-4 font-20">DOMESTIC - INTERNATIONAL</p>
                                    <div class="pt-2 mt-4 transit-box shadow">
                                        <p class="text-center">INR 6500</p>
                                        <ul>
                                            <li>Assistance from the aerobridge or bus gate as per arrival</li>
                                            <li> Porter assistance from baggage belt to check-in of departures*</li>
                                            <li>Guidance at airline CKIN counters </li>
                                            <li> Lounge access for 2 hours (at departure only)*</li>
                                            <li>Guidance to designated boarding gate</li>
                                        </ul>
                                    </div>
                                </div>

                                <div>
                                    <p class="font-20">INTERNATIONAL - DOMESTIC / DOMESTIC - INTERNATIONAL</p>
                                    <div class="pt-2 transit-box shadow mx-auto">
                                        <p class="text-center">INR 6500</p>
                                        <ul>
                                            <li>Assistance post-hand baggage area of customs</li>
                                            <li> Porter assistance from baggage belt to check-in of departures*</li>
                                            <li>Guidance at airline CKIN counters </li>
                                            <li> Lounge access for 2 hours (at departure only)</li>
                                            <li>Guidance to designated boarding gate</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row terms-notes pt-5">
                            <ul>
                                <li> Surcharge of INR 590 (AI) shall be applicable for any booking requests received
                                    within 12 hours of service time.</li>
                                <li> The above shared rates are per pax and inclusive of GST @ 18%. </li>
                                <li> All international arrival services would commence only post passengers clear
                                    custom.</li>
                                <li> Service charges applicable for Child (2-12 years) would be 30% discount on the
                                    price applicable for Adult Guests. Infant (0-2 years) will not be charged. </li>
                                <li> Lounge access for 2 hours is applicable for all places where lounge is mentioned.
                                    Additional access beyond this duration will incur additional charges.</li>
                                <li> The services are subject to government regulations. Prevailing at the time of
                                    delivery of service. </li><li> The services are subject to availability.</li>
                                <li> Please contact your relationship manager or reservations for any request you may
                                    have for 5 pax and above. </li>
                                <li>Porter assistance upto 3 bags/guest.</li>
                                <li> Lounge facilities are only available at departure terminals.</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div id="silver" style="display: none;">
                    <div class="mb-5">
                        <div class="section-title-services">
                            <p>ATITHYA PRICE MAP</p>
                            <p>MANOHAR INTERNATIONAL AIRPORT, GOA</p>

                            <div class="d-flex w-100 align-items-center mobile-flex gap-5">
                                <div>
                                    <p class="pb-4 font-20">DOMESTIC - DOMESTIC</p>
                                    <div class="pt-2 mt-4 transit-box shadow">
                                        <p class="text-center">INR 4000</p>
                                        <ul>
                                            <li>Assistance from the aerobridge or bus gate as per arrival</li>
                                            <li> Porter assistance from baggage belt to check-in of departures*</li>
                                            <li>Guidance at airline CKIN counters </li>
                                            <li> Lounge access for 2 hours (at departure only)*</li>
                                            <li>Guidance to designated boarding gate</li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <p class="pb-4 font-20">DOMESTIC - INTERNATIONAL</p>
                                    <div class="pt-2 mt-4 transit-box shadow">
                                        <p class="text-center">INR 6000</p>
                                        <ul>
                                            <li>Assistance from the aerobridge or bus gate as per arrival</li>
                                            <li> Porter assistance from baggage belt to check-in of departures*</li>
                                            <li>Guidance at airline CKIN counters </li>
                                            <li> Lounge access for 2 hours (at departure only)*</li>
                                            <li>Guidance to designated boarding gate</li>
                                        </ul>
                                    </div>
                                </div>

                                <div>
                                    <p class="font-20">INTERNATIONAL- DOMESTIC / DOMESTIC - INTERNATIONAL</p>
                                    <div class="pt-2 transit-box shadow mx-auto">
                                        <p class="text-center">INR 6000</p>
                                        <ul>
                                            <li>Assistance post-hand baggage area of customs</li>
                                            <li> Porter assistance from baggage belt to check-in of departures*</li>
                                            <li>Guidance at airline CKIN counters </li>
                                            <li> Lounge access for 2 hours (at departure only)*</li>
                                            <li>Guidance to designated boarding gate</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row terms-notes pt-5">
                            <ul>
                                <li>Surcharge of INR 590 (AI) shall be applicable for any booking requests received
                                    within 12 hours of service time.</li>
                                <li> The above shared rates are per pax and inclusive of GST @ 18%.</li>
                                <li> Service charges applicable for Child (2-12 years) would be 30% discount on the
                                    price applicable for Adult Guests. Infant (0-2 years) will not be charged.</li>
                                <li> Lounge access for 2 hours is applicable for all places where lounge is mentioned.
                                    Additional access beyond this duration will incur additional charges.</li>
                                <li> The services are subject to government regulations. Prevailing at the time of
                                    delivery of service.</li>
                                <li> The services are subject to availability.</li>
                                <li> Please contact your relationship manager or reservations for any request you may
                                    have for 5 pax and above.</li>
                                <li> Porter assistance upto 3 bags/guest.</li>
                                <li> Lounge facilities are only available at departure terminals. </li>

                            </ul>
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
function HomeActiveTab(tabName) {

    if (tabName == 'Departure') {
        $('#DepartureFlight').html('');
        $('#DepartureFlight').html(
            '<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>'
        );
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
        LoungeCategory();
    }
}
$(document).ready(function() {
    $('.check-class').click(function() {
        if ($(this).hasClass('active') == true) {
            $(this).html(
                '<img src="<?=base_url('atithya_assets/assets/')?>img/transit-02.png" width="24px"/>&nbsp;Transit'
            );
        } else {
            $(this).html(
                '<img src="<?=base_url('atithya_assets/assets/')?>img/transit-01.png" width="24px"/>&nbsp;Transit'
            );
        }
    });
    $(".check-class-2").click(function() {
        $(".check-class").html(
            '<img src="<?=base_url('atithya_assets/assets/')?>img/transit-01.png" width="24px"/>&nbsp;Transit'
        );
    });
    $("#myTab a").click(function() {
        $('.htexts').addClass('d-none');
        if ($(this).attr('id') == 'lounge-tab')
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