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


/* .tab-section .nav-tabs{
          border-bottom:2px solid #cda45e;
        } */

.custom-table {
    border-collapse: separate;
    border-spacing: 0;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    overflow: hidden;
    background-color: #cda45e;
    width: 100%;
}

.custom-table th,
.custom-table td {
    text-align: left;
    border-bottom: 1px solid #cda45e;
}

.custom-table td {
    padding: 8px;
}

.custom-table th {
    padding: 15px;
    text-align: center;
}

.custom-table th:first-child,
.custom-table td:first-child {
    border-left: 1px solid #cda45e;
}

.custom-table th:first-child {
    border-top-left-radius: 10px;
    background-color: #cda45e;
    ;
    padding: 15px;
}

.custom-table th {
    padding: 0px;
}

.terms-notes ul li {
    color: black !important;
    font-weight: 400;
    font-size: 12px;
}

.marginLeft-25 {
    margin-left: 50px;
    margin-right: 50px;
}

.img-international {
    width: 80%;
}

.img-international:hover {
    transform: scale(1.15);
    transition: transform 0.5s, opacity 0.5s;
}

.custom-table th:last-child,
.custom-table td:last-child {
    border-right: 1px solid #cda45e;
}

.custom-table th,
.custom-table td {
    border-right: 1px solid #cda45e;
}

.custom-table td {
    font-size: 12px;
}

.custom-table th:last-child {
    border-right: 1px solid #cda45e;
}

.custom-table tbody tr:first-child td {
    font-weight: bold;
    font-size: 14px;
    padding: 8px;
    text-align: center;
}

.custom-table tbody tr:first-child td:first-child {
    border-top-left-radius: 30px;
    font-size: 18px;
    padding-left: 25px;
    text-align: left;
}

.custom-table tbody tr:first-child td:first-child::before {
    content: '';
}

.custom-table tbody td:first-child {
    position: relative;
    padding-left: 40px;

}

.custom-table tbody td:first-child::before {
    content: '\2022';
    color: darkblue;
    font-size: 20px;
    position: absolute;
    left: 15px;
    top: 40%;
    transform: translateY(-50%);
}

.custom-table tbody td:not(:first-child) {
    position: relative;
}

.red-circle::before {
    content: '';
    background-color: #c9a477;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
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


@media only screen and (max-width:768px) {
    .mobile-flex {
        flex-direction: column;
        align-items: center;
    }

    .hyd,
    .goa,
    .del {
        padding: 10px 10px !important;
    }

}
@media only screen and (max-width:459px){
  .over-flow{
  overflow-x:auto;
  width:300px;
}
}
@media only screen and (max-width:1024px){
    .mobile-flex{
        flex-direction:column;
        align-items: center;
    }
    
}
</style>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex  align-items-end services_header">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-md-7 order-md-2 m-auto text-right text-white">
                <h1>Atithya Departure Services</h1>
                <h2 class="mb-4">Indira Gandhi International Airport, Delhi<br>
                    Rajiv Gandhi International Airport, Hyderabad<br>
                    Manohar International Airport, Goa</h2>
                <p class="mb-3 text-white">Have a great start to your Journey with Atithya. We will make sure that you
                    and your loved ones have great beginning to your journey with our personalised help, warmth and car.
                </p>
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
                    <div class="section-title-services">
                        <p>ATITHYA PRICE MAP</p>
                        <p>INDIRA GANDHI INTERNATIONAL AIRPORT, DELHI</p>

                    </div>
                    <div class="d-flex mobile-flex align-items-center gap-4 mb-5">
                        <div class="col-md-6 over-flow">
                            <div class="section-title-services">

                                <p>DOMESTIC SERVICES</p>
                            </div>
                            <table class="table shadow custom-table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                                width="100" height="90"></th>
                                        <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                                width="100" height="90"></th>
                                        <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                                width="100" height="90"></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>

                                        <td>DEPARTURE</th>
                                        <td>INR 2600</th>
                                        <td>INR 3500 </th>
                                        <td>INR 4500</th>
                                    </tr>
                                    <tr>
                                        <td>Welcome from Curbside (Drop off point)</td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>

                                    </tr>
                                    <tr>
                                        <td>Porter assistance*</td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Guidance at CKIN counters</td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Assistance up till boarding gate</td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Gate Transfer on Buggy (battery operated car)*</td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Lounge Access for 2 hours</td>
                                        <td></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Cancellation benefits upto 12 hours of
                                            service time</td>

                                        <td></td>
                                        <td></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Unlimited rescheduling</td>
                                        <td></td>
                                        <td></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>


                                </tbody>
                            </table>

                        </div>
                        <div class="col-md-6">
                            <p class="pt-3 mt-md-5"><img src="<?=base_url('atithya_assets/assets/')?>img/services_7.jpg"
                                    class=" img-international marginLeft-25" /></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mobile-flex gap-4">
                        <div class="col-md-6 ">
                            <p class="pt-3 mt-md-5 mt-2"><img
                                    src="<?=base_url('atithya_assets/assets/')?>img/services_8.jpg"
                                    class=" img-international marginLeft-25"
                                    alt="Encalm Lounge, Atithya services, Hyderabad Airport" /></p>
                        </div>
                        <div class="col-md-6 over-flow">
                            <div class="section-title-services">
                                <p>INTERNATIONAL SERVICES</p>
                                <table class="table shadow custom-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                                    width="100" height="90"></th>
                                            <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                                    width="100" height="90"></th>
                                            <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                                    width="100" height="90"></th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>DEPARTURE</th>
                                            <td>INR 4000 </th>
                                            <td>INR 5500</th>
                                            <td>INR 6500</th>
                                        </tr>
                                        <tr>
                                            <td>Welcome from Curbside (Drop off point)</td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>

                                        </tr>
                                        <tr>
                                            <td>Porter assistance*</td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Guidance at CKIN counters</td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Assistance up till Boarding gate</td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Gate Transfer on Buggy (battery operated car)*</td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Option for personal shopper at Duty Free</td>

                                            <td></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Lounge access for 2 hours</td>

                                            <td></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Cancellation benefits upto 12 hours of
                                                service time</td>

                                            <td></td>
                                            <td></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Unlimited rescheduling</td>
                                            <td></td>
                                            <td></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row terms-notes pt-5">
                        <ul>
                            <li> Buggy service is only available at Terminal 3 (subject to availability and location of
                                the gate) </li>
                            <li> Surcharge of INR 590 (AI) shall be applicable for any booking requests received within
                                12 hours of service time. The above shared rates are per pax and inclusive of GST @ 18%.
                            </li>
                            <li> Service charges applicable for Child (2-12 years) would be 30% discount on the price
                                applicable for Adult Guests. Infant (0-2 years) will not be charged. </li>
                            <li> Lounge access for 2 hours is applicable for all places where lounge is mentioned.
                                Additional access beyond this duration will incur additional charges. </li>
                            <li> The services are subject to government regulations prevailing at the time of delivery
                                of service.</li>
                            <li> The services are subject to availability. 
</li><li> Please contact your relationship manager or
                                reservations for any request you may have for 5 pax and above. </li>
                            <li> Porter assistance upto 3 bags/guest. </li>
                    </div>
                </div>
                <div id="elite" style="display: none;">
                    <div class="section-title-services">
                        <p>ATITHYA PRICE MAP</p>
                        <p>RAJIV GANDHI INTERNATIONAL AIRPORT, HYDERABAD</p>

                    </div>
                    <div class="d-flex align-items-center mobile-flex gap-4 mb-5">
                        <div class="col-md-6  over-flow">
                            <div class="section-title-services">
                                <p>DOMESTIC SERVICES</p>
                            </div>
                            <table class="table shadow custom-table">
                                <thead>
                                    <tr>
                                        <th></th>

                                        <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                                width="100" height="90"></th>
                                        <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                                width="100" height="90"></th>
                                        <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                                width="100" height="90"></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>

                                        <td>DEPARTURE</th>
                                        <td>INR 2200</th>
                                        <td>INR 3300</th>
                                        <td>INR 4400</th>
                                    </tr>
                                    <tr>
                                        <td>Welcome from Curbside (Drop off point)</td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>

                                    </tr>
                                    <tr>
                                        <td>Porter assistance*</td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Guidance at CKIN counters</td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Assistance up till boarding gate</td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>

                                    <tr>
                                        <td>Lounge access for 2 hours</td>
                                        <td></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>

                                    </tr>

                                    <tr>
                                        <td>Unlimited Rescheduling</td>

                                        <td></td>
                                        <td></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Cancellation benefits upto 12 hours of
                                            service time</td>
                                        <td></td>
                                        <td></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <p class="pt-3 mt-md-5"><img src="<?=base_url('atithya_assets/assets/')?>img/services_4.jpg"
                                    class=" img-international marginLeft-25" /></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mobile-flex gap-4">
                        <div class="col-md-6">
                            <p class="pt-3 mt-md-5 mt-2"><img
                                    src="<?=base_url('atithya_assets/assets/')?>img/services_3.jpg"
                                    class=" img-international marginLeft-25" /></p>

                        </div>
                        <div class="col-md-6 over-flow">
                            <div class="section-title-services">
                                <p>INTERNATIONAL SERVICES</p>
                                <table class="table shadow custom-table">
                                    <thead>
                                        <tr>
                                            <th></th>

                                            <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                                    width="100" height="90"></th>
                                            <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                                    width="100" height="90"></th>
                                            <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                                    width="100" height="90"></th>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>DEPARTURE</th>
                                            <td>INR 3300</th>
                                            <td>INR 5500</th>
                                            <td>INR 6500</th>
                                        </tr>
                                        <tr>
                                            <td>Welcome from curbside (drop o point)</td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>

                                        </tr>
                                        <tr>
                                            <td>Porter assistance*</td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Guidance at CKIN counters</td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Assistance up till boarding gate</td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Lounge access for 2 hours*</td>

                                            <td></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Unlimited rescheduling</td>

                                            <td></td>
                                            <td></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Cancellation benefits upto 12 hours of
                                                service time</td>

                                            <td></td>
                                            <td></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row terms-notes pt-5">
                        <ul>
                            <li> Surcharge of INR 590 (AI) shall be applicable for any booking requests received within
                                12 hours of service time.</li>
                            <li> The above shared rates are per pax and inclusive of GST @ 18%. </li>
                            <li> All international arrival services would commence only post passengers clear custom.
                            </li>
                            <li> Service charges applicable for Child (2-12 years) would be 30% discount on the price
                                applicable for Adult Guests. Infant (0-2 years) will not be charged. </li>
                            <li> Lounge access for 2 hours is applicable for all places where lounge is mentioned.
                                Additional access beyond this duration will incur additional charges.</li>
                            <li> The services are subject to government regulations. Prevailing at the time of delivery
                                of service. </li><li> The services are subject to availability.</li>
                            <li> Please contact your relationship manager or reservations for any request you may have
                                for 5 pax and above. </li>
                            <li>Porter assistance upto 3 bags/guest. </li><li> Lounge facilities are only available at departure
                                terminals.</li>
                        </ul>
                    </div>
                </div>
                <div id="silver" style="display: none;">
                    <div class="section-title-services">
                        <p>ATITHYA PRICE MAP</p>
                        <p>MANOHAR INTERNATIONAL AIRPORT, GOA</p>

                    </div>
                    <div class="d-flex align-items-center mobile-flex gap-4 mb-5">
                        <div class="col-md-6 over-flow">
                            <div class="section-title-services">

                                <p>DOMESTIC SERVICES</p>
                            </div>
                            <table class="table shadow custom-table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                                width="100" height="90"></th>
                                        <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                                width="100" height="90"></th>
                                        <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                                width="100" height="90"></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>

                                        <td>DEPARTURE</th>
                                        <td>INR 2400</th>
                                        <td>INR 3000</th>
                                        <td>INR 4000</th>
                                    </tr>
                                    <tr>
                                        <td>Welcome from Curbside (Drop off point)</td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>

                                    </tr>
                                    <tr>
                                        <td>Porter assistance*</td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Guidance at CKIN counters</td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Assistance up till boarding gate</td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Lounge access for 2 hours</td>

                                        <td></td>
                                        <td><span class="red-circle"></span></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Unlimited Rescheduling</td>

                                        <td></td>
                                        <td></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Cancellation benefits upto 12 hours of
                                            service time</td>

                                        <td></td>
                                        <td></td>
                                        <td><span class="red-circle"></span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <p class="pt-3 mt-md-5"><img src="<?=base_url('atithya_assets/assets/')?>img/services_5.jpg"
                                    class=" img-international marginLeft-25" /></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mobile-flex gap-4">
                        <div class="col-md-6">
                            <p class="pt-3 mt-md-5 mt-2"><img
                                    src="<?=base_url('atithya_assets/assets/')?>img/services_6.jpg"
                                    class=" img-international marginLeft-25" /></p>
                        </div>
                        <div class="col-md-6 over-flow">
                            <div class="section-title-services">
                                <p>INTERNATIONAL SERVICES</p>
                                <table class="table shadow custom-table">
                                    <thead>
                                        <tr>
                                            <th></th>


                                            <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                                    width="100" height="90"></th>
                                            <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                                    width="100" height="90"></th>
                                            <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                                    width="100" height="90"></th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>DEPARTURE</th>
                                            <td>INR 3600</th>
                                            <td>INR 5000</th>
                                            <td>INR 6500</th>
                                        </tr>
                                        <tr>
                                            <td>Welcome from curbside (Drop off point)</td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>

                                        </tr>
                                        <tr>
                                            <td>Porter assistance*</td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Guidance at CKIN counters</td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>

                                        <tr>
                                            <td>Assistance up till boarding gate</td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Lounge access for 2 hours</td>

                                            <td></td>
                                            <td><span class="red-circle"></span></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Unlimited Rescheduling</td>

                                            <td></td>
                                            <td></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Cancellation benefits upto 12 hours of
                                                service time</td>

                                            <td></td>
                                            <td></td>
                                            <td><span class="red-circle"></span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row terms-notes pt-5">
                        <ul>
                            <li>
                                Surcharge of INR 590 (AI) shall be applicable for any booking requests received within
                                12 hours of service time.</li>
                            <li> The above shared rates are per pax and inclusive of GST @ 18%.</li>
                            <li> Service charges applicable for Child (2-12 years) would be 30% discount on the price
                                applicable for Adult Guests. </li>
                            <li>Infant (0-2 years) will not be charged. </li><li>  Lounge access for 2 hours is applicable for
                                all places where lounge is mentioned. Additional access beyond this duration will incur
                                additional charges.</li>
                            <li> The services are subject to government regulations. Prevailing at the time of delivery
                                of service. </li>
                            <li> The services are subject to availability. </li><li>  Please contact your relationship manager or
                                reservations for any request you may have for 5 pax and above.</li>
                            <li> Porter assistance upto 3 bags/guest. </li><li> Lounge facilities are only available at
                                departure terminals.
                            </li>
                        </ul>
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