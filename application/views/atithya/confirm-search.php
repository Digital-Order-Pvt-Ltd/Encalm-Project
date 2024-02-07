 <?php include 'head.php'; ?>
 <!-- ======= Header ======= -->
 <style>
   /* Popup Open button */
   .open-button {
     color: #000;
     background: #0000;
     text-decoration: none;
     border: 0px solid #0157ad;


   }

   .open-button:hover {
     color: #cda45e;
   }

   .popup {
     position: fixed;
     top: 0px;
     left: 0px;
     background: rgba(0, 0, 0, 0.75);
     width: 100%;
     height: 100%;
     display: none;
     z-index: 99999;
     font-size: 13px;
   }

   /* Popup inner div */
   .popup-content {
     width: 700px;
     margin: 0 auto;
     box-sizing: border-box;
     padding: 40px;
     margin-top: 100px;
     box-shadow: 0px 2px 6px rgba(0, 0, 0, 1);
     border-radius: 3px;
     background: #fff;
     position: relative;
     height: 600px;
     overflow-x: hidden;
   }

   /* Popup close button */
   .close-button {
     width: 40px;
     height: 40px;
     position: absolute;
     top: 85px;
     right: 31%;
     border-radius: 20px;
     background: rgba(0, 0, 0, 0.8);
     font-size: 20px;
     text-align: center;
     color: #fff;
     text-decoration: none;
     line-height: 35px;
   }

   .close-button:hover {
     background: rgba(0, 0, 0, 1);
   }

   .color-main {
     color: #cda45e !important;
   }

   @media screen and (max-width: 720px) {
     .popup-content {
       width: 90%;
     }

     .close-button {
       right: 4%;
     }
   }
   }
 </style>

 <?php include 'top-menu.php'; ?>
 <!-- .navbar -->

 <!-- End Header -->

 <!-- ======= Hero Section ======= -->
 <?php include 'purchase-history.php'; ?>
 <!-- End Hero -->
 <?php
  $navactive = '';
  $errormsg = '';
  if (!empty($this->session->flashdata('success'))) {
    $navactive = 'active';
    $errormsg = $this->session->flashdata('success');
  } ?>
 <main id="main">
   <!-- ======= number Section ======= -->
   <?php include 'number.php'; ?>
   <section class="mamber-card mamber-card-checkout">
     <div class="container search-box position-relative">
       <div class="row">
         <div class="col-lg-8">
           <?php
            $s_customer_data = !empty($this->session->userdata("s_customer_data")) ? $this->session->userdata("s_customer_data") : array();
            if (empty($s_customer_data)) {
            ?>
             <style>
               .btns-pos {
                 position: relative;
                 top: auto;
                 right: auto;
               }
             </style>
             <?php
              // Get the current URI
              $currentUri = $this->uri->uri_string();

              // Check if the URI contains "spa"
              if (strpos($currentUri, 'spa') !== false) {
                // The URI contains "spa"
                $spa = true;
              } else {
                // The URI does not contain "spa"
                $spa = false;
              }


              ?>
             <ul class="nav nav-tabs" id="myTab" role="tablist">

               <li class="nav-item"> <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-id-card"></i>&nbsp;I have an account</a></li>

               <li class="nav-item"> <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-user"></i>&nbsp;I am a new user </a></li>

             </ul>
             <div class="tab-content h-100" id="v-pills-tabContent">
               <div class="tab-pane fade pt-3 pb-3" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                 <!-- <form id="add_user_form" name="" method="post" action="<?= base_url('atithya/user/adduser') ?>" class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded"> -->
                 <?php
                  if (!$spa) {
                  ?>
                   <form id="add_user_form" name="" method="post" action="<?= base_url('atithya/user/adduser') ?>" class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded">
                   <?php
                  } else {
                    ?>
                     <form id="add_user_form" name="" method="post" action="<?= base_url('spa/user/adduser') ?>" class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded">
                     <?php
                    }
                      ?>
                     <input type="hidden" name="create_order" value="yes" />
                     <div class="row">
                       <div class="form-group col-md-4">
                         <label for="" class="d-none">Title*</label>
                         <span class="caret"></span>
                         <select id="title" name="title" class="form-control">
                           <option value="">Title*</option>
                           <?php if (!empty($salutation)) {
                              $salutation_data = json_decode($salutation);
                              if (!empty($salutation_data->datalist)) {
                                foreach ($salutation_data->datalist as $val) {
                            ?>
                                 <option value="<?= $val->id ?>"><?= $val->name ?></option>
                           <?php }
                              }
                            } ?>
                         </select>
                         <span style="font-weight: 700;font-size: small;color: red;display: none;" id="title_alert">Title is required</span>
                       </div>
                       <div class="form-group col-md-4">
                         <input type="text" class="form-control" id="first_name" name="first_name" placeholder="">
                         <label class="floating-label">First Name*</label>
                         <span style="font-weight: 700;font-size: small;color: red;display: none;" id="first_name_alert">First name is required</span>
                       </div>
                       <div class="form-group col-md-4">
                         <input type="text" class="form-control" id="last_name" name="last_name" placeholder="">
                         <label class="floating-label">Last Name*</label>
                         <span style="font-weight: 700;font-size: small;color: red;display: none;" id="last_name_alert">Last name is required</span>
                       </div>
                       <div class="form-group col-md-3 ">

                         <span class="caret"></span>
                         <select id="gender" name="gender" class="form-control">
                           <option value="">Gender*</option>

                           <option value="male">Male</option>
                           <option value="female">Female</option>
                           <option value="other">Other</option>

                         </select>
                         <span style="font-weight: 700;font-size: small;color: red;display: none;" id="gender_alert">Gender is required</span>
                       </div>
                       <div class="form-group col-md-3 dtpicker">
                         <i class="fas fa-calendar-alt"></i>
                         <input type="text" id="dob" name="dob" class="form-control datepicker" placeholder="" />
                         <label class="floating-label">Date Of Birth*</label>
                         <span style="font-weight: 700;font-size: small;color: red;display: none;" id="dob_alert">Date Of Birth is required</span>
                       </div>
                       <div class="col-md-6">
                         <div class="row">
                           <div class="form-group col-md-3 col-xs-3 pr-0">

                             <span class="caret"></span>
                             <select id="country_code" name="country_code" class="form-control">
                               <option value="">Select Country code*</option>

                               <?php  /* if(!empty($countrycode)){ $countrys =json_decode($countrycode); 
                       
                         if(!empty($countrys->datalist)){
                        foreach($countrys->datalist as $val){
                          $c_select='';
                          if($val->value=='+91'){$c_select='selected';}
                         ?>
                         <option value="<?=$val->value?>" <?=$c_select?>><?=$val->name?></option>
                           <?php }}} */  ?>



                               <?php if (!empty($country)) {
                                  $countrys = json_decode($country);
                                  if (!empty($countrys->datalist)) {
                                    foreach ($countrys->datalist as $val) {
                                      $c_select = '';
                                      if ($val->name == 'India') {
                                        $c_select = 'selected';
                                      }
                                ?>
                                     <option value="<?= $val->phone_code ?>" data-code="<?= $val->id ?>" <?= $c_select ?>><?= $val->phone_code ?></option>
                               <?php }
                                  }
                                } ?>

                             </select>
                             <label class="floating-label"></label>
                           </div>

                           <div class="form-group col-md-9 col-xs-9 pl-0 onlydigit">
                             <input type="text" class="form-control digitvalidate" id="mobile" name="mobile" placeholder="">
                             <label class="floating-label">Mobile*</label>
                             <span style="font-weight: 700;font-size: small;color: red;display: none;" id="mobile_alert">Mobile is required</span>
                           </div>
                         </div>
                       </div>

                       <div class="form-group col-md-12">

                         <input type="text" class="form-control" id="address" name="address" placeholder="" value="<?= !empty($this->session->userdata("s_customer_data")) ? $this->session->userdata("s_customer_data")['address'] : '' ?>">

                         <label for="" class="floating-label">Address</label>
                         <span style="font-weight: 700;font-size: small;color: red;display: none;" id="address_alert">Address is required</span>
                       </div>

                       <div class="form-group col-md-4">
                         <input type="text" class="form-control" id="city" name="city" placeholder="">
                         <label class="floating-label">City*</label>
                         <span style="font-weight: 700;font-size: small;color: red;display: none;" id="city_alert">City is required</span>
                       </div>
                       <div class="form-group col-md-4">
                         <label class="d-none">Country*</label>
                         <span class="caret"></span>
                         <select id="country" name="country" class="form-control" onchange="getState(this.value);">
                           <option value="">Select Country of Origin*</option>

                           <?php if (!empty($country)) {
                              $countrys = json_decode($country);
                              if (!empty($countrys->datalist)) {
                                foreach ($countrys->datalist as $val) {
                                  $c_select = '';
                                  if ($val->name == 'India') {
                                    $c_select = 'selected';
                                  }
                            ?>
                                 <option value="<?= $val->id ?>" data-code="<?= $val->phone_code ?>" <?= $c_select ?>><?= $val->name ?></option>
                           <?php }
                              }
                            } ?>
                         </select>
                       </div>

                       <div class="form-group col-md-4">
                         <span class="caret"></span>
                         <select id="state" name="state" class="form-control">

                           <option value="">Select State*</option>
                           <?php if (!empty($statedata)) {
                              $statelist = json_decode($statedata);
                              if (!empty($statelist->datalist)) {
                                foreach ($statelist->datalist as $val) {

                            ?>
                                 <option value="<?= $val->id ?>"><?= $val->name ?></option>
                           <?php }
                              }
                            }  ?>
                         </select>
                         <label class="floating-label"></label>
                         <span style="font-weight: 700;font-size: small;color: red;display: none;" id="state_alert">Please Select State</span>
                       </div>






                       <div class="form-group col-md-6 onlydigit">
                         <input type="text" class="form-control digitvalidate" id="pincode" name="pincode" placeholder="">
                         <label class="floating-label">Pincode*</label>
                         <span style="font-weight: 700;font-size: small;color: red;display: none;" id="pincode_alert">Pincode is required</span>
                       </div>

                       <div class="form-group col-md-6">
                         <input type="email" class="form-control" id="emailid" name="emailid" placeholder="">
                         <label class="floating-label">Email Id*</label>
                         <span style="font-weight: 700;font-size: small;color: red;display: none;" id="emailid_alert">Email is required</span>
                       </div>



                       <div class=clearfix></div>
                       <div class="form-group col-md-6 passwordconfirm">
                         <input type="password" class="form-control" id="c_pwd" name="password" placeholder="">
                         <label class="floating-label">Password*</label>
                         <span style="font-weight: 700;font-size: small;color: red;display: none;" id="password_alert">Password is required</span>
                       </div>
                       <div class="form-group col-md-6 passwordconfirm">
                         <input type="password" class="form-control" id="pwd" name="confirm_password" placeholder="">
                         <label class="floating-label">Confirm Password*</label>
                         <span style="font-weight: 700;font-size: small;color: red;display: none;" id="confirm_password_alert">Confirm Password is required</span>
                       </div>
                       <div class=clearfix></div>
                       <div class="form-group col-md-12">
                         <div class="form-check">
                           <input type="checkbox" class="form-check-input" id="exampleCheck11" name="terms_conditions" value="yes">
                           <label class="form-check-label" for="exampleCheck11"><span class="f-12">I Agree to the <a class="open-button openmodal" data-toggle="modal" data-target="#termsmodal" href="javascript:void(0)">Terms & Conditions*</a> and <a class="open-button openmodal" data-toggle="modal" data-target="#privacypolicymodal" href="javascript:void(0)">Privacy Policy*</a></span></label>
                         </div>
                         <span style="font-weight: 700;font-size: small;color: red;display: none;" id="terms_conditions_alert">Please Check Terms And Conditions</span>
                       </div>
                       <!------------------------------Popup------------------------------------->
                       <div class="popup" popup-name="popup-1">
                         <div class="popup-content">
                           <h2>Terms & Conditions</h2>
                           <hr />
                           <h5 class="text-center text-primary">TERMS AND CONDITIONS OF SERVICES</h5>
                           <p class="text-justify">Encalm Hospitality Pvt. Ltd. <strong>(“Encalm”)</strong> is the company incorporated under Companies Act 2013 with its registered office at Plot 89, LGF, Sector 44, Gurugram, Haryana, India, 122003 and Corporate Identity Number as U55101HR2021PTC098119. By continuing to booking of Encalm Services, you accept the terms and conditions of services provided by Encalm for its Services. These terms and conditions are applicable for all services provided by Encalm including Atithya Welcome and Assist services and Encalm Lounge Services.</p>
                           <p class="text-justify">Encalm reserves the right to change these Terms and Conditions of Services at any time. The new version of the Terms and Conditions will be posted on this website and will take effect and govern all use of the website upon posting. Your use of this website indicates your agreement to be bounded by these Terms and Conditions of Services.</p>
                           <ol>
                             <li><strong>Definitions</strong>
                               <ol class="text-justify" type="a">
                                 <li><strong class="color-main">Ancillary Services”</strong> means services other than Atithya Service at Airport and are not provided by Encalm directly; and may include travel concierge related service such as baggage pick-up and drop, hotel booking, travel insurance purchase, lounge booking, airport transfer etc.</li>
                                 <li><strong class="color-main">“Atithya Guest Services” or “Service(s)”</strong> means paid meet and assist services provided by Encalm at the Airport and as detailed in Clause 2 below and as may amended from time to time by Encalm and made available on the website.</li>
                                 <li><strong class="color-main">“Booking Process”</strong> means actions steps by Agent for undertaking the Service booking(s) through online reservations system or through an offline mode as may be acceptable to Encalm</li>
                                 <li><strong class="color-main">“Airport”</strong> means an airport within or outside India where Encalm is providing Services by itself.</li>
                                 <li><strong class="color-main">“Agent”</strong> means any entity including any individual, corporate or a Sales Agent, who facilitates in providing the Services by undertaking booking and reservations of Services for the Guest. Individual transacting on Encalm Website must have completed 18 (eighteen) years of age at the time of requesting of Services.</li>
                                 <li><strong class="color-main">“Guest(s)”</strong> means the person(s) to whom the Service is being booked / intended to be booked by the Agent. It may be noted that some individual Agents may also be Guests.</li>
                                 <li><strong class="color-main">“Guest Service Associate”</strong> or “GSA” means an officer, designated by Encalm to provide Service to the Guest(s) at Airport.</li>
                                 <li><strong class="color-main">“No Show”</strong> means the failure by Guest to reach the meeting point and identify himself/herself to GSA as per the meeting time communicated in the Service confirmation by Encalm.</li>
                                 <li><strong class="color-main">“Online Reservation Engine”</strong> means online facility provided by Encalm on its Website and is available to Agent(s) for undertaking booking/cancellation of Services subject to the applicable terms and conditions as provided on the website or as may be agreed by Encalm with the Agent separately in writing.</li>
                                 <li><strong class="color-main">“Encalm Website or Atithya Website or Website”</strong> means encalm.com or its subdomain including atithya.encalm.com or such website(s) maintained by Encalm or, as may be applicable for facilitating booking of Services.</li>
                                 <li><strong class="color-main">“Sales Agent”</strong> any entity authorised by Encalm in writing on mutually agreed terms and conditions for undertaking bookings and reservations of Services on behalf of their client(s) in India and/or abroad.</li>
                                 <li><strong class="color-main">“Service Add-on”</strong> means any service such as additional porter, bouquet, wheelchair, baby stroller, service upgrade, etc. that is offered by Encalm for booking online on Website post the selection of base service by the Agent. Further, Service add-ons do not include Ancillary Services.</li>
                               </ol>
                             </li>
                             <li><strong>Scope of Services:</strong>
                               <p class="text-justify">The scope of Services includes various services and packages broadly defined under following categories:</p>
                               <ol class="text-justify" type="a">
                                 <li><strong class="color-main">Departure Services:</strong> Assistance to Guests departing on International or Domestic flight from airport.</li>
                                 <li><strong class="color-main">Arrival Services:</strong> Assistance to Guests arriving on International or Domestic flight at airport.</li>
                                 <li><strong class="color-main">Transit Services:</strong> Assistance to Guests transiting through airport.</li>
                                 <li><strong class="color-main">Lounge Services:</strong> Lounge access to Guests Travelling through the airport. For more information on Services please refer to Website.</li>

                               </ol>
                             </li>
                             <li><strong>Online Booking</strong>
                               <ol class="text-justify" type="a">
                                 <li>Agent must complete the Booking Process on the Website in advance for availing Services and confirmation of Services pursuant to all online and offline request by Agent(s) shall be subject to availability.</li>
                                 <li>Agent(s) shall use Online Reservations Engine to make booking for the Services.</li>
                                 <li>The bookings can be made by the Agent(s) for Service and packages made available online by Encalm from time to time subject to Clause 4.7 below.</li>
                                 <li>Agent can book online for up to 10 Guests per booking. For group bookings (more than 10 guests) Agent(s) may contact Encalm on contact details provided on the website.</li>
                                 <li>Agent is responsible for providing Encalm with correct and legitimate detail(s) about itself and its Guest(s) during the Booking Process. Encalm at all times shall reserve the right for taking any additional information in relation to the Agent(s) and/or Guest(s) during the process of online/offline booking or anytime during the performance of Services or any clarification thereafter.</li>
                                 <li>Any and/or all request(s) as may be received and acknowledged by Encalm does not guarantee the Service by Encalm and shall be subject to written confirmation by Encalm.</li>
                                 <li>Encalm reserves the right to accept or decline or cancel Agents request for Service without assigning any reasons.</li>
                                 <li>During the Booking Process the Agent(s) are requested to take extra care while providing information about guest(s), date and time of travel, contact numbers etc. Encalm assumes no responsibility whatsoever on account of any problem that may arise on account of false/ erroneous information provided by Agent(s) to Encalm or any delay or cancellation of flight or for any reason whatsoever including any major event, change in flight schedule, failure of Guest(s) to report at Airport on time.</li>
                                 <li>Once the Booking Process is completed, Agent can request for cancellation of Services in case of any change in plans and Encalm shall initiate the refund process in line with the Cancellations and Refund Policy provided in Clause 5 below. However, the cancellation and refund to Client(s) of any Agent must be processed through the Agent only subject to the cancellation and refund policy.</li>
                                 <li>It is hereby clarified that during the process of booking by Online Reservation Engine on our website, if there is any “transaction fee” which is charged by the bank issuing the credit/debit card, such charges shall be paid by the Agent and </li>
                                 <li>Encalm shall have no liability to pay such transaction fee.</li>
                                 <li>All Sales Agents shall deal with their clientele by themselves and Encalm assume no responsibility of transaction between Sales Agent and its client. For all confirmed and legitimate Service(s) bookings by Sales Agent(s), Encalm shall only be responsible for providing Service(s) to Guest(s), subject to the terms and conditions of Service at Airport.</li>
                                 <li><strong class="color-main">Credit/Debit Card:</strong> Payment of online booking is accepted by all major credit/debit card (“Card”). In case the card used to transact online is issued in a country other than India there may be bank charges applicable and Encalm shall not responsible for any charges that may be levied by the Card Issuing Bank. The Card payment is subject to authorization from the bank issuing the Card.</li>
                                 <li><strong class="color-main">Net Banking:</strong> If the Agent has an account with any of the mentioned banks under the heading net banking on our website, then Agent can pay for the booking(s) securely through the respective bank's Internet banking option and the amount will be automatically debited from your account. Encalm is not liable for any payment authorization, as the payment gateway is responsible only to hand over the information in an encrypted / secure format to the respective bank for authorizing the transaction. Any issue with payment authorization will need to be taken up with your respective bank. This facility is valid for all bookings made in Indian Rupees (INR) currency only.</li>


                               </ol>
                             </li>
                             <li><strong>Condition of Service at the Airport:</strong>
                               <p>Performance of Services to Guest(s) by Encalm at the Airport shall be subject to following conditions:</p>
                               <ol class="text-justify" type="a">
                                 <li>Guest shall identify himself/herself to the GSA or call on the number provided on Service confirmation voucher on arrival at Airport.</li>
                                 <li>Guest(s) shall be solely responsible for compliance with all governmental regulations upon entry into and exit from Indira Gandhi International Airport, New Delhi and ensuring that all required documents are in order and comply with all conditions/requirements stipulated by Government of India and other relevant authorities and agencies in relation to such travel.</li>
                                 <li>Service by Encalm to Guest(s) shall be subject to written confirmation of Service and satisfactory completion of necessary checks by relevant authorities including Security, Immigration, and Customs or such other authorities from whom the clearance is required by the Guest for travel through airport.</li>
                                 <li>Duration of Service: The performance of Service will commence at the scheduled meeting time or the time of service as per the Service confirmation voucher. However, Encalm at its sole discretion, may permit Guest(s) a window of 20 (twenty) minutes from the scheduled meeting time to avail the Service(s).</li>
                                 <li>In case of any failure of Guest(s) to report on time at the meeting point or the time of service as per the Service confirmation Voucher, she/he shall be deemed as a No Show and the Service will not be assured.</li>
                                 <li>For each unit of porter service, Baggage assistance will be provided to Guest(s) for upto 3 (three) units of check-in baggage. For the purpose of check-in baggage, the sum of the 3 (three) dimensions (length + breadth + height) must not exceed 62 (sixty two) inches or 158 (one hundred fifty eight) centimetres for each piece. Agents shall provide the requirement of porter service during the Booking Process. Encalm may accept the additional requirement of porter services on payment of additional charges on the spot, subject to the availability.</li>
                                 <li>Encalm shall at its sole discretion, be entitled to cancel, alter or omit any part of the Service with or without notification to Agent/Guest(s) at its sole discretion. In such cases, Encalm’s liability shall be limited to re-performance of the cancelled Service. In cases where Encalm is unable to re-perform the service, partial/full refund may be provided by Encalm to the Agent/Guest(s) at its sole discretion.</li>
                                 <li>Delays and cancellations of Service by Encalm may result from factors beyond its control such as the accidents, governmental restrictions, and other events of force majeure, Encalm’s liability shall be limited to re-performance of the cancelled Service.</li>
                                 <li>Encalm at all times shall reserve the right to withdraw the Service without assigning any reason and without further reference, in case the Agent/Guest(s) is / are in breach of any Terms & Conditions of the Service.</li>
                                 <li>Agent/Guest shall not use the Service or its reference for any unlawful or prohibited purposes.</li>
                                 <li>Encalm at its sole discretion may decline to provide Service in case of any misconduct or any unlawful or prohibited activity by the Agent/Guest(s).</li>
                                 <li>For all products and services provided by third parties (for example, limousine transfers, floral deliveries, hotels reservation or mobile sim card services etc.), the terms and conditions, cancellation and refund policies of such third party shall be applicable. Encalm shall not be liable to Agent/Guest(s) regarding any product and service provided by any third party.</li>
                                 <li>Encalm’s liability, if any, shall in no event exceed the total charges paid by the Agent/Guest(s) for the Services. Under no circumstances, Encalm shall be liable for any consequential, exemplary, special, indirect, incidental or punitive damages.</li>
                                 <li>Agent/Guest(s) agrees to indemnify Encalm in respect to all claims, damages, losses, costs, and expenses (including legal expenses) which are awarded against or incurred by Encalm as a direct result of acts or omissions by Agent/Guest(s) either during the course of booking and/or using the Service.</li>
                                 <li>Encalm shall not be liable for the consequences of any delay or for any loss, cost or expense incurred by Agent/Guest(s) as a result of the actions of any other party including without limitation the Airline, Customs and Immigration Authorities etc.</li>
                                 <li>In relation to the Service, Encalm accepts no liability for any items left or disclaimed by the Guest(s) during the course and after providing the Service. Further, in relation to Ancillary Services, Encalm accepts no liability for any transaction executed by Agent and/or Guest with APBS and Encalm shall be liable for any shortfalls including gap in actual service delivery and guests expectations, amount paid to APBS for availing services or performance of services by the final service provider.</li>
                                 <li>By offering Services, Encalm does not accept any liability for damages, losses, or delays that may result on account of dealing with APBS or/and improper documents including without limitation possession of valid ticket, visa, passport or any other requirement in relation to entry, exist, length of stay, special permissions etc. as may be required for traveling through airport.</li>
                                 <li>Agent(s) acknowledge and agree to inform Guest(s) of these Terms and Conditions including with Conditions of Service at Airport provided above.</li>
                               </ol>
                             </li>
                             <li><strong>Cancellations and Refund policy applicable for Atithya Services</strong>
                               <p class="text-justify">Agent(s)/Guest(s) if they wish to cancel their booking must (1). request for the cancellation of booked service using ‘Manage Booking’ tab provided on Home Page of website; or (2) must notify in writing to Encalm with the booking details and a reason for cancellation. Encalm shall review such cancellation request(s) for its authenticity and once approved by Encalm, the service booking will be cancelled, and refund process will be initiated and necessary credit will be provided to the Agent subject to the deduction of applicable cancellation charges. Unless otherwise provided under specific service offerings from time to time, following charges (Cancellation charges) shall be applicable on cancellation of services</p>
                               <table class="table">
                                 <thead>
                                   <tr>
                                     <th>S. no. Cancellation of Services</th>
                                     <th>Cancellation Charges</th>
                                   </tr>

                                 </thead>
                                 <tbody>
                                   <tr>
                                     <td>1. 72 hours prior to the scheduled meeting time</td>
                                     <td>3% of the Booking Amount</td>
                                   </tr>
                                   <tr>
                                     <td>2. Between 72 to 48 hours prior to scheduled meeting time </td>
                                     <td>10% of the Booking Amount</td>
                                   </tr>
                                   <tr>
                                     <td>3. Between 48 to 24 hours prior to the scheduled meeting time </td>
                                     <td>50% of the Booking Amount</td>
                                   </tr>
                                   <tr>
                                     <td>4. Less than 24 hours</td>
                                     <td>100% of the Booking Amount</td>
                                   </tr>
                                 </tbody>
                               </table>
                             </li>
                             <li>
                               <strong>Note</strong>
                               <ol class="text-justify" type="a">
                                 <li>For the purpose of calculating cancellation charges, Booking Amount shall mean the total amount (Including taxes) paid by the Agent.</li>
                                 <li>Encalm shall endeavour to process refund if applicable, within 15 days from the date of cancellation and receipt of bank/credit card details.</li>
                                 <li>In case of re-scheduling of services, the guest shall share the revised itinerary maximum within 48 hours from the time of rescheduling request. All rescheduling requests shall be subject to availability.</li>
                                 <li>Cancellation charges for Ancillary Services, if booked by the Agent through APBS, shall be subject to APBS T&Cs and Agent/guest shall be required to deal with APBS directly and Encalm shall not be liable for providing any refunds, claims, credits to Agent for any transaction executed by it with APBS.</li>
                                 <li>No refund will be made in case of the following:
                                   <ol class="text-justify" type="i">
                                     <li>Wrong information about travel details of Guest(s) during the Booking Process;</li>
                                     <li>No Shows;</li>
                                     <li>Booking amount paid for Service Add-ons;</li>
                                     <li>Delayed/missed/cancelled flights;</li>
                                     <li>Late arrival at the airport which results in denied check-in or boarding by the airlines;</li>
                                     <li>In case of any misconduct or any unlawful or prohibited activity by the Agent/Guest(s);</li>
                                     <li>In case Agent has availed promotions offer or discounts or cash back etc. during booking.</li>
                                   </ol>
                                 </li>
                               </ol>
                             </li>
                             <li>
                               <strong>General</strong>
                               <p class="text-justify">The scope of Services includes various services and packages broadly defined under following categories:</p>
                               <ol class="text-justify" type="a">
                                 <li>Encalm reserves the right to amend, add to, change or remove any part of these Terms and Conditions at any time, without notice. Any changes to these Terms and Conditions or any terms posted on the website apply as soon as they are posted. By continuing to use the website after any changes are posted, you are indicating your acceptance of those changes.</li>
                                 <li>Encalm shall not be liable for and shall be excluded from any liability, loss or damage of any kind incurred as a result of the use of the website or reliance on any information provided on the website or arising from the use of Encalm services unless it is caused by the wilful misconduct or gross negligence of the Encalm</li>.
                                 <li>Encalm may add, change, discontinue, remove or suspend any other content posted on the website, including features and specifications of products described or depicted on the website, temporarily or permanently, at any time, without notice and without liability.</li>
                                 <li>Encalm reserves the right to undertake all necessary steps to ensure that the security, safety, and integrity of Encalm systems as well as its client’s interests are and remain, well-protected.</li>
                                 <li>Encalm may take various steps to verify and confirm the authenticity, enforceability and validity of reservations placed by Agent(s).</li>
                                 <li>Encalm in its sole and exclusive discretion, concludes that any reservation(s) is not or do not reasonably appear to be, authentic, enforceable, or valid, then Encalm may cancel the said reservation any time before or during the Service.</li>
                                 <li>Any communications or materials to the website by electronic mail or otherwise, including any comments, data, questions, suggestions, or the like, all such communications are, as may be received by Encalm will be treated by Encalm as non-confidential.</li>
                                 <li>Agent(s)/Guest(s) hereby give up any and all claim that any use of such material violates any of Agent(s)/Guest(s) rights including moral rights, privacy rights, proprietary or other property rights, publicity rights, rights to credit for material or ideas, or any other right, including the right to approve the way Encalm uses such material.</li>
                                 <li>Any material submitted to our website may be adapted, broadcast, changed, copied, disclosed, licensed, performed, posted, published, transmitted or used by Encalm anywhere in the world, in any medium, forever. Agent(s) agrees that it has read our Privacy Policy as provided on our website.</li>
                                 <li>Agent(s) acknowledges that Internet transmissions are never completely private or secure. Agent(s) further understands that any message or information as may be sent to our website may be read or intercepted by others unless there is a special notice that a particular message (for example, credit card information) is encrypted (send in code). Sending a message or email or any communication written or verbal to Encalm does not cause Encalm to have any special responsibility to Agent/Guest(s).</li>
                                 <li>Copying of part or all the contents of this website without permission of Encalm is prohibited except to the extent that such copying/printing is necessary for the purposes of availing of the Services.</li>
                                 <li> Disputes, if any, shall be subject to Indian laws and shall be exclusively subject to the jurisdiction of the courts at New Delhi.</li>
                                 <li>The booking for Services displayed on this website may not be available for purchase in any country or locality. The reference to such Services on the website does not imply or warrant that the booking of Services will be available at any time in such geographical location(s). Person or entity interested in booking the Services may check with their local Sales Agent for information on the availability of Services.</li>
                                 <li>Unless otherwise agreed in writing, these Terms and Conditions along with the Privacy Policy shall be entire agreement and understanding between Encalm and the Agent(s)/Guest(s), as the case may be.</li>

                               </ol>
                             </li>

                           </ol>
                           <hr />
                           <div class="text-right">
                             <a class="btn btn-primary" popup-close="popup-1" href="javascript:void(0)">Close</a>
                           </div>
                         </div>
                         <a class="close-button" popup-close="popup-1" href="javascript:void(0)">x</a>
                       </div>

                       <!---------------------------------Second Popup----------------------------->

                       <div class="popup" popup-name="popup-2">
                         <div class="popup-content">
                           <h2>PRIVACY POLICY</h2>
                           <hr />
                           <p class="text-justify">This Privacy Policy by Encalm Hospitality private limited (Encalm) sets out the policies and practices of which any information including personal data collected, processed, used, and retained by Encalm for the purposes of its operation of provision of services and offering other services or products of Encalm that may be of interest to our customers. Privacy of your information is of utmost importance to us. Encalm takes the privacy of customers/guest information seriously. This privacy notice applies to information we collect about you in the different sections of the website. This privacy policy applies to the main website www.encalmhospitality.com, as well as in the other domains and sub-domains owned and operated by the Encalm.</p>
                           <p class="text-justify">Encalm can receive and store any information you enter on encalm.com or atithya.encalm.com ("Website") or give us in any other way. This includes information that can identify you ("personal information"), including your first and last name, telephone number, postal and e-mail addresses, contact details and, in some cases, billing information (such as credit card number, cardholder name, and expiration date). We also may request information about your traveller preferences, including meal requests, seat selection, frequent flyer/hotel/car rental program information, and ticketing options. You can choose not to provide information to us, but in general some information about you is required in order for you to register as a member; purchase products or services; complete a traveller profile; participate in a survey or contest; ask us a question; or initiate other transactions on our Website.</p>
                           <ol type="a">
                             <li><strong>Customer/Guest Information:</strong>
                               <p class="text-justify">Encalm may only collect Personal Data about an individual which it reasonably considers necessary for the relevant purposes underlying such processing. The following can form part of the Personal Data:</p>
                               <ol type="i">
                                 <li class="color-main">Demographic
                                   <ol class="text-dark" type="a">
                                     <li>Name;</li>
                                     <li>Telephone number;</li>
                                     <li>E-mail address;</li>
                                     <li>Identity proof, if any as provided during booking stage;</li>
                                     <li>Class of travel as provided during booking stage;</li>
                                   </ol>
                                 </li>
                                 <li class="color-main">Transaction related
                                   <ol class="text-dark" type="a">
                                     <li>Transaction details and any other information which you have provided to us;</li>
                                     <li>Data usage and platforms including traffic data;</li>
                                     <li>Location data;</li>
                                     <li>The originating domain name of your internet service provider;</li>
                                     <li>Statistics on page;</li>
                                     <li>Views cookies and IP addresses.</li>
                                   </ol>
                                 </li>
                               </ol>
                             </li>
                             <li><strong>Information from Other Sources:</strong>
                               <p class="text-justify">We also may periodically obtain information about you from our business partners and other independent third-party sources and add it to our account information. Examples of information we may receive include: updated delivery and address information, which we use to correct our records and to facilitate proper delivery of services; and demographic information, which we use to better understand your potential purchasing preferences.</p>
                             </li>
                             <li><strong>Automatic Information:</strong>
                               <p class="text-justify">We automatically collect some information about your computer when you visit the Website. For example, we will collect your IP address, Web browser software (such as Netscape Navigator or Internet Explorer or Safari or Google Chrome etc.), and referring Website. We also may collect information about your online activity, such as Services package viewed and purchases made. One of our goals in collecting this automatic information is to help customize your user experience.</p>
                             </li>
                             <li><strong>Cookies and Other Web Technologies:</strong>
                               <p class="text-justify">When you visit the Website we may assign your computer a "cookie" (a small, unique identifier text file). For example, whenever you sign in as a member, we record your member ID and the name on your member account in the cookie file on your computer. We also may record your password in this cookie file, if you checked the box entitled "Save this password for automatic sign-in." Note that member IDs, passwords, and any other account-related data included in such cookies are encrypted for security purposes. You can always choose not to receive a cookie file by enabling your Web browser to refuse cookies or to prompt you before accepting a cookie. Please note that if you refuse to accept cookies from the Website, you may not be able to access many of the existing or future services as may be offered by the Website.</p>
                             </li>
                             <li><strong>Information Collected by Third-Parties:</strong>
                               <p class="text-justify">We may provide links to third-party websites on the Platforms. Your use of such third-party websites will be subject to their privacy policies and is not covered by this Policy. We encourage you to read the privacy policies on the other websites you visit. As we cannot control or be responsible for the policies of other sites we may link to, or the use of any data you may share with them, you access these third-party websites at your own risk. The following can form part of the following third-party:</p>
                               <ol type="i">
                                 <li>Partners who use our analytics services.</li>
                                 <li>Advertisers.</li>
                                 <li>Partners offering services as part of Encalm Service offerings.</li>
                                 <li>Vendors and service providers.</li>
                                 <li>Researchers and academics.</li>
                                 <li>Law enforcement or legal requests.</li>
                               </ol>
                             </li>
                             <li><strong>How we use your information:</strong>
                               <p class="text-justify"></p>
                               <ol type="i">
                                 <li>improvement of our products or services;</li>
                                 <li>transmission by email or any other form of communication of marketing materials to you;</li>
                                 <li>contact for survey or feedback which may be done using email or mail;></li>
                                 <li>to enable our group entities to reach out to you in relation to their programmes managed by them / products or services offered by them;</li>
                                 <li>to process your requests (such as replying to your queries); and</li>
                                 <li>to execute other activities such as marketing campaign, promotional communications for which consent is taken appropriately.</li>
                                 <li>Provision of Services, development and improvement;</li>
                                 <li>Verification of identity for the purposes of processing and administering any membership application or registration;</li>
                                 <li>Marketing messages and activities;</li>
                                 <li>Conducting programmes and events;</li>
                                 <li>To carry out profiling and statistical analysis;</li>
                                 <li>Update on info about changes to programmes, policies, terms and conditions, Platform updates and other administrative information;</li>
                                 <li>to prevention and detection of crime, fraud, risks, address security or technical issues;</li>
                                 <li>To customise the Platforms and their content to particular preferences;</li>
                                 <li>To conduct surveys, questionnaires and requests for feedback;</li>
                                 <li>To respond to queries, requests, feedback and complaints;</li>
                                 <li>To meet the requirements of any applicable laws/regulations, enforceable governmental request or court order;</li>
                                 <li>To fulfil such other purpose as may be specified in a data protection and privacy notice given to you at the time your Personal Data is collected; and/or</li>
                                 <li>For the operations of Website and Newsletter</li>
                               </ol>
                             </li>
                             <li><strong>With whom we share your information:</strong>
                               <p>In carrying out one or more of the purposes set out in above points of this Policy, we may need to disclose your Personal Data to one or more of the following third parties:</p>
                               <ol type="i">
                                 <li>Agents;</li>
                                 <li>Authorised service providers such as marketing partners and web analysis companies, and their business partners;</li>
                                 <li>Auditors and professional advisors;</li>
                                 <li>Business partners;</li>
                                 <li>Entities authorised by ENCALM for booking of travel concierge or ancillary services;</li>
                                 <li>Underwriters and insurers;</li>
                                 <li>Law enforcement agencies;</li>
                                 <li>Any person to whom disclosure is permitted or required by any applicable laws/regulations, enforceable governmental request or court order; and/or</li>
                                 <li>Any companies comprised in the group.</li>

                               </ol>
                             </li>
                             <li><strong>How you can access your information:</strong>
                               <p class="text-justify">You can access your information at various points on the Website. These include:</p>
                               <ol type="i">
                                 <li>The My Account pages (only for registered users) on the Website, where you can view, update, or change your personal information online subject to provision of such facility by ENCALM. On this page, you also can change your password; elect to have an automatic password sign-in when logging on to the Website; add new travellers and delete existing travellers from your member profile; update or correct names, phone numbers, and emergency contacts for travellers associated with your profile; and update your travel preferences.</li>
                                 <li>The Manage My Bookings page, where you can view, and update your booking details.</li>
                                 <li>You can close your Website account by selecting the Account Closure option. We will send you an e-mail confirming your request to close your account to the e-mail address contained in your member profile. Please note that after you close an account, you will not be able to sign in or access any of your personal information. However, you can open a new account at any time. Please also note that we may retain certain information associated with your account for analytical purposes as well as for record keeping integrity.</li>
                                 <li>Your choices with respect to collection and use of your information:</li>
                                 <li>You can choose not to provide us with any information, although it may be needed to take advantage of certain features offered on the Website.</li>
                                 <li>You also can add or update information on the My Account and close your account as described above.</li>
                                 <li>The Help portion of the toolbar on most browsers will tell you how to prevent your browser from accepting new cookies, how to have the browser notify you when you receive a new cookie, or how to disable cookies altogether. Please note that if you refuse to accept cookies from the Website, you will not be able to access portions of our Website.</li>

                               </ol>
                             </li>
                             <li><strong>How we protect your information:</strong>
                               <p class="text-justify">We want you to feel confident about using the Website to undertake the booking of Services, so we are committed to protecting the information we collect. While no Website can guarantee cent percent security, we have implemented appropriate administrative, technical, and physical security procedures to help protect the personal information you provide to us. For example, only authorized employees are permitted to access personal information, and they only may do so for permitted business functions. In addition, we use encryption when transmitting your sensitive personal information between your system and ours, and we employ firewalls and intrusion detection systems to help prevent unauthorized persons from gaining access to your information. Our systems are configured with data encryption, or scrambling, technologies, and industry-standard firewalls. When you send personal information to the Website over the Internet, your data is protected by Secure Socket Layer (SSL) technology to ensure safe transmission.</p>
                             </li>
                             <li><strong>Data Retention:</strong>
                               <p class="text-justify">We will cease to retain your Personal Data when the purposes for which we collected your Personal Data have ceased and/or when we are no longer required to continue retaining your Personal Data for any legal or business purposes.</p>
                             </li>
                             <li><strong>Changes to this Privacy Policy:</strong>
                               <p class="text-justify">ENCALM may update this Privacy Policy in the future. We will notify you about material changes to this Privacy Policy by sending a notice to the e-mail address you provided to us or by placing a prominent notice on our website.</p>
                             </li>

                           </ol>
                           <hr />
                           <div class="text-right">
                             <a class="btn btn-primary" popup-close="popup-2" href="javascript:void(0)">Close</a>
                           </div>
                         </div>
                         <a class="close-button" popup-close="popup-2" href="javascript:void(0)">x</a>
                       </div>

                       <!------------------------------------End Popup--------------------------------------------->

                       <div class="form-group col-md-12">
                         <div class="form-check">
                           <input type="checkbox" class="form-check-input" id="exampleCheck111" name="marketing_communication" value="yes">
                           <label class="form-check-label f-12" for="exampleCheck111"> Marketing Communication</label>
                         </div>
                       </div>
                       <div class=clearfix></div>
                       <div class="text-center rightproceedbutton">
                         <div class="row">
                           <div class="col-lg-8"></div>
                           <div class="col-lg-4">
                             <button type="submit" id="submit" name="submit" class="btn btn-red btns-pos w-100" role="button" aria-disabled="false" style="float:right;">Submit &amp; Proceed</button>
                           </div>
                         </div>
                       </div>
                       <div class=clearfix></div>
                     </div>
                     </form>


               </div>
               <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                 <?php if (!empty($errormsg)) { ?>
                   <h3> <?= $errormsg ?></h3>
                 <?php } ?>
                 <?php include 'existing.php'; ?>
               </div>
             </div>
           <?php } else { ?>
             <?php include 'customer.php'; ?>
           <?php }  ?>
         </div>
         <div class="col-lg-4 pb-5 search-box ordersummary">
           <div class="card mb-3">
             <div class="card-header text-center "> Order Summary </div>
             <div class="charges table-responsive" id="addTableData">
               <?php include "ajax_table.php"; ?>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
 </main>

 <!-- ======= Footer ======= -->


 <!-- ======= Modal ======= -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-body search-box">
         <div class="p-3">
           <h5>DIWALI<a href="javascript:void(0)" class="btn btn-primary float-end small close"><i class="fas fa-ticket-alt"></i> Select</a></h5>
           <p><strong>Get 40% OFF up to ₹100</strong></p>
           <p class="small">Valid on orders with items worth ₹5000</p>
           <div class="clearfix"></div>
           <hr>
           <h5>NEW YEAR<a href="javascript:void(0)" class="btn btn-primary float-end small close"><i class="fas fa-ticket-alt"></i> Select</a></h5>
           <p><strong>Get 40% OFF up to ₹100</strong></p>
           <p class="small">Valid on orders with items worth ₹5000</p>
           <div class="clearfix"></div>
           <hr>
           <form id="" name="" method="post" action="checkout-search.php" class="custom-search-from" enctype="application/x-www-form-urlencoded">
             <div class="row">
               <div class="form-group col-md-9">
                 <label class="d-none">First Name</label>
                 <input type="text" class="form-control" id="" name="" placeholder="Discount Coupon">
               </div>
               <div class="form-group col-lg-3 text-center">
                 <button type="submit" id="submit" name="submit" class="btn btn-red btn-sm px-3" role="button" aria-disabled="false">Apply</button>
               </div>
               <div class=clearfix></div>
             </div>
           </form>
           <div class="clearfix"></div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- End Modal -->
 <?php include 'footer.php'; ?>
 <script type="text/javascript">
   function getState(val) {
     var placard_country = $('#country option:selected').text();

     if (placard_country != "") {
       $.ajax({
         type: 'POST',
         url: "<?= base_url('atithya/home/getState') ?>",
         data: {
           'placard_country': placard_country
         },
         dataType: "html",
         beforeSend: function(data) {},
         success: function(data) {
           $('#state').html('');
           $('#state').html(data);
           return true;
         },
         error: function(data) {
           if (data.status == 0) {
             alert("There is no internet connection found. Please reconnect and try again!");
             return false;
           }
           if (data.status > 0) {
             alert(data.responseText);
             var OpenWindow = window.open('', '_blank', 'width=600,height=530,resizable=1');
             OpenWindow.document.write(data.responseText);
             return false;

           }
         }
       });
     } else {
       $('#state').html("<option value=''>Select State</option>");
     }
   }

   function ValidateDOB(dateString) {
     if (dateString.length > 4) {
       var parts = dateString.split("-");
       var dtDOB = new Date(parts[0] + "/" + parts[1] + "/" + parts[2]);
       var dtCurrent = new Date();

       //alert(dtDOB.getFullYear());
       if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 18) {
         return false;
       }

       if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {
         if (dtCurrent.getMonth() < dtDOB.getMonth()) {
           return false;
         }
         if (dtCurrent.getMonth() == dtDOB.getMonth()) {
           if (dtCurrent.getDate() < dtDOB.getDate()) {
             return false;
           }
         }
       }

       return true;
     } else {
       false;
     }
   }
   $(function() {
     $("#exampleCheck1").click(function() {
       if ($("#exampleCheck1").is(":checked"))
         $('.passwordconfirm').removeClass('d-none');
       else {
         $('.passwordconfirm').addClass('d-none');
       }
     })
   });
   jQuery('#couponBtn').on('click', function(e) {
     $('#exampleModalCenter').modal('show');
   });
   jQuery('.close').on('click', function(e) {
     $('#exampleModalCenter').modal('hide');
   });
   jQuery('#myTab a').on('click', function(e) {
     e.preventDefault()
     jQuery(this).tab('show')
   });
   jQuery(function() {
     /*jQuery('.datepicker').datetimepicker({
         format: 'DD-MMM-YYYY',
         autoclose: true,
         minView: 2
      });*/
     // Init Select2 - Basic Single
     jQuery(".select2-single").select2();
   });
   jQuery(function() {
     jQuery('.datepicker').datepicker({
       format: 'DD-MMM-YYYY',
       dateFormat: 'dd-mm-yy',
       autoclose: true,
       minView: 2,
       changeMonth: true,
       yearRange: '1900:<?php echo date('Y'); ?>',
       changeYear: true
     }).on('dp.change', function(e) {
       jQuery(this).data('DateTimePicker').hide();
     });



   });
 </script>
 <script>
   $("form#add_user_form").submit(function(event) {

     var error = false;
     $("#exampleCheck11").removeClass("focus");
     $("#title").removeClass("focus");
     $("#country").removeClass("focus");
     $("#first_name").removeClass("focus");
     $("#last_name").removeClass("focus");
     $("#emailid").removeClass("focus");
     $("#mobile").removeClass("focus");
     $("#dob").removeClass("focus");
     $("#gender").removeClass("focus");
     $("#pwd").removeClass("focus");
     $("#c_pwd").removeClass("focus");

     $("#address").removeClass("focus");
     $("#city").removeClass("focus");
     $("#state").removeClass("focus");
     $("#country_code").removeClass("focus");
     $("#pincode").removeClass("focus");

     var title = $("#title option:selected").val();
     var gender = $("#gender option:selected").val();
     var country = $("#country option:selected").val();
     var first_name = $("#first_name").val();
     var last_name = $("#first_name").val();
     var emailid = $("#emailid").val();
     var mobile = $("#mobile").val();
     var dob = $("#dob").val();
     var c_pwd = $("#c_pwd").val();
     var pwd = $("#pwd").val();

     var address = $("#address").val();
     var country_code = $("#country_code option:selected").val();
     var state = $("#state option:selected").val();
     var pincode = $("#pincode").val();
     var city = $("#city").val();


     if ($("#exampleCheck11").prop('checked') == false) {
       $('#exampleCheck11').addClass("focus");
       $('#exampleCheck11').focus();
       const terms_conditions_alert = document.getElementById("terms_conditions_alert");
       terms_conditions_alert.style.display = "block";
       //alert("please select T&C");
       error = true;
     }

     if (pincode == "") {
       $('#pincode').addClass("focus");
       $('#pincode').focus();
       const pincode_alert = document.getElementById("pincode_alert");
       pincode_alert.style.display = "block";
       error = true;
     }
     if (address == "") {
       $('#address').addClass("focus");
       $('#address').focus();
       const address_alert = document.getElementById("address_alert");
       address_alert.style.display = "block";
       error = true;
     }
     if (city == "") {
       $('#city').addClass("focus");
       $('#city').focus();
       const city_alert = document.getElementById("city_alert");
       city_alert.style.display = "block";
       error = true;
     }
     if (state == "") {
       $('#state').addClass("focus");
       $('#state').focus();
       const state_alert = document.getElementById("state_alert");
       state_alert.style.display = "block";
       error = true;
     }
     if (country_code == "") {
       $('#country_code').addClass("focus");
       $('#country_code').focus();
       error = true;
     }
     if (pwd == "") {
       $('#pwd').addClass("focus");
       $('#pwd').focus();
       const confirm_password_alert = document.getElementById("confirm_password_alert");
       confirm_password_alert.style.display = "block"; 
       error = true;
     }
     if (pwd.length < 5) {
       alert("Password length should be min 5 chars");
       $('#pwd').addClass("focus");
       $('#pwd').focus();
       error = true;
     }
     if (c_pwd == "") {
       $('#c_pwd').addClass("focus");
       $('#c_pwd').focus();
       const password_alert = document.getElementById("password_alert");
       password_alert.style.display = "block";
       error = true;
     }
     if (c_pwd != pwd) {
       $('#pwd').addClass("focus");
       $('#c_pwd').addClass("focus");
       $('#c_pwd').focus();
       $('#pwd').focus();
       alert('Password & confirm password not  match');
       error = true;
     }



     if (country == "" || country == 0) {
       $('#country').addClass("focus");
       $('#country').focus();

       error = true;
     }
     if (title == "" || title == 0) {
       $('#title').addClass("focus");
       $('#title').focus();
       const title_alert = document.getElementById("title_alert");
       title_alert.style.display = "block";
       error = true;
     }
     if (gender == "" || gender == 0) {
       $('#gender').addClass("focus");
       $('#gender').focus();
       const gender_alert = document.getElementById("gender_alert");
       gender_alert.style.display = "block";
       error = true;
     }
     if (title == "" || title == 0) {
       $('#title').addClass("focus");
       $('#title').focus();
       const title_alert = document.getElementById("title_alert");
       title_alert.style.display = "block";
       error = true;
     }
     if (first_name == "" || first_name.length == 2) {
       $('#first_name').addClass("focus");
       $('#first_name').focus();
       const first_name_alert = document.getElementById("first_name_alert");
       first_name_alert.style.display = "block";
       error = true;
     }
     if (last_name == "") {
       $('#last_name').addClass("focus");
       $('#last_name').focus();
       const last_name_alert = document.getElementById("last_name_alert");
       last_name_alert.style.display = "block";
       error = true;
     }
     if (mobile == "") {
       $('#mobile').addClass("focus");
       $('#mobile').focus();
       const mobile_alert = document.getElementById("mobile_alert");
       mobile_alert.style.display = "block";
       error = true;
     }
     if (emailid == "") {
       $('#emailid').addClass("focus");
       $('#emailid').focus();
       const emailid_alert = document.getElementById("emailid_alert");
       emailid_alert.style.display = "block";
       error = true;
     }
     if (dob == "") {
       $('#dob').addClass("focus");
       $('#dob').focus();
       const dob_alert = document.getElementById("dob_alert");
       dob_alert.style.display = "block";
       error = true;
     }
     if (dob != "" && ValidateDOB(dob) == false) {
       alert("Minimum age for registration is 12 yrs, kindly check your date of birth.");
       $('#dob').val("");
       $('#dob').addClass("focus");
       error = true;

     }
     if (error == false) {
       PleaseWaitShow();
       return true;
     } else {
       return false;
     }

   });
 </script>
 <!--------------------------------Popup--------------------------------------->
 <script type="text/javascript">
   $(function() {
     // Open Popup
     $('[popup-open]').on('click', function() {
       var popup_name = $(this).attr('popup-open');
       $('[popup-name="' + popup_name + '"]').fadeIn(300);
     });

     // Close Popup
     $('[popup-close]').on('click', function() {
       var popup_name = $(this).attr('popup-close');
       $('[popup-name="' + popup_name + '"]').fadeOut(300);
     });

     // Close Popup When Click Outside
     $('.popup').on('click', function() {
       var popup_name = $(this).find('[popup-close]').attr('popup-close');
       $('[popup-name="' + popup_name + '"]').fadeOut(300);
     }).children().click(function() {
       return false;
     });

     $('.rightproceedbutton').css('top', $('.ordersummary > .card').height() + 40);

   });
 </script>
 </body>

 </html>