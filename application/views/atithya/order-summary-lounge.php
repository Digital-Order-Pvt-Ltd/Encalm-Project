 
<?php include 'head.php';?>
<!-- ======= Header ======= --> 
    
 <?php include 'top-menu.php';?>
 
    
<?php include 'top-menu.php';?>
<!-- .navbar --> 
<style>
   /* Popup Open button */ 
        .open-button{
            color:#000;
            background:#0000;
            text-decoration:none;
            border:0px solid #0157ad;
           

        }
         
        .open-button:hover{
            color:#cda45e;
        }
         
        .popup {
            position:fixed;
            top:0px;
            left:0px;
            background:rgba(0,0,0,0.75);
            width:100%;
            height:100%;
            display:none;
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
            box-shadow: 0px 2px 6px rgba(0,0,0,1);
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
            background: rgba(0,0,0,0.8);
            font-size: 20px;
            text-align: center;
            color: #fff;
            text-decoration:none;
            line-height: 35px;
        }
         
        .close-button:hover {
            background: rgba(0,0,0,1);
        }
        .color-main{color:#cda45e!important;}
         
        @media screen and (max-width: 720px) {
        .popup-content {
            width:90%;
            } 
            .close-button{right: 4%;}
        }
        }

 </style>
  
<!-- End Header -->
<main id="hero" class="bg-white">
  <?php //p(json_decode($datalist));exit;?>
  <section class="mamber-card-checkout">
    <div class="container search-box">
      <div class="row">
	  <div class="section-title" style="text-align:center">
            <p>Order Summary  </p>			  
      </div>

    <div class="col-lg-7">
          
<?php 
$total_num_of_guset = 0;
$total_a_c_d = 0;
$mainData  = array();
$itemData  = array();
$guestData  = array();
$custData  = array();
$gsoData  = array();
$mainData  = array();
$porterData  = array();
$buggyData  = array();
		
if(!empty($datalist))
{
	$allsearchdata =  json_decode($datalist);
	//p($allsearchdata);
	$mainData = !empty($allsearchdata->mainData)?$allsearchdata->mainData:array();
	$itemData = !empty($allsearchdata->itemData)?$allsearchdata->itemData:array();
	$guestData = !empty($allsearchdata->guestData)?$allsearchdata->guestData:array();
	$custData = !empty($allsearchdata->custData)?$allsearchdata->custData:array();
	$gsoData = !empty($allsearchdata->gsoData)?$allsearchdata->gsoData:array();
	$porterData = !empty($allsearchdata->porterData)?$allsearchdata->porterData:array();
	$buggyData = !empty($allsearchdata->buggyData)?$allsearchdata->buggyData:array();
	$service_type = !empty($mainData->datalist[0]->service_type_id)?$mainData->datalist[0]->service_type_id:array(); 
	$arrival_airline = !empty($mainData->datalist[0]->arrival_airline_id)?$mainData->datalist[0]->arrival_airline_id:array(); 
	$departure_airline = !empty($mainData->datalist[0]->departure_airline_id)?$mainData->datalist[0]->departure_airline_id:array(); 
	$arrival_flight = !empty($mainData->datalist[0]->arrival_flight_id)?$mainData->datalist[0]->arrival_flight_id:array(); 
	$departure_flight = !empty($mainData->datalist[0]->departure_flight_id)?$mainData->datalist[0]->departure_flight_id:array(); 
	$airport_terminal = !empty($mainData->datalist[0]->airport_terminal_id)?$mainData->datalist[0]->airport_terminal_id:array(); 
	$airport_location = !empty($mainData->datalist[0]->airport_location_id)?$mainData->datalist[0]->airport_location_id:array(); 
	$from_airport = !empty($mainData->datalist[0]->from_airport_id)?$mainData->datalist[0]->from_airport_id:array(); 
	$to_airport = !empty($mainData->datalist[0]->to_airport_id)?$mainData->datalist[0]->to_airport_id:array(); 
	//p($allsearchdata);
}
?>
<ul class="list-group nbadge">
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Service Date &amp; Time</span>
    <p class="badge badge-primary badge-pill text-dark"><?php echo !empty($mainData->datalist[0]->commitment_date )?date('D, d-M-Y H:i',strtotime($mainData->datalist[0]->commitment_date)) :'0'; ?> Hrs (IST)</p>
  </li>
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Service Category</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($mainData->datalist[0]->service_category)?ucfirst(str_replace('_',' ',$mainData->datalist[0]->service_category)):'';?> </p>
  </li>
<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Booking Lounge</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($mainData->datalist[0]->service_duration_id[1])?$mainData->datalist[0]->departure_term:'';?> </p>
  </li>	  
<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Service Duration</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($mainData->datalist[0]->service_duration_id[1])?$mainData->datalist[0]->service_duration_id[1]:'';?> </p>
  </li>	  
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Service Type</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($service_type[1])?$service_type[1]:'';?> </p>
  </li>	  
  <li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Service Airport</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($airport_location[1])?$airport_location[1]:'';?> </p>
  </li>	

 	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Travel Sector</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($airport_terminal[1])?$airport_terminal[1]:'';?>  </p>
  </li>	

	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Travel Date </span>
    <p class="badge badge-primary badge-pill text-dark"><?php echo !empty($mainData->datalist[0]->date )?date('D, d-M-Y',strtotime($mainData->datalist[0]->date)) :'NA'; ?>  </p>
  </li>
<?php 
if($service_type[0]==1 || $service_type[0]==3)
{
?> 
  <li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Arrival Airline</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($arrival_airline[1])?$arrival_airline[1]:'NA';?>  </p>
  </li>	
  <?php }?>
<?php 
if($service_type[0]==2 || $service_type[0]==3)
{
?> 
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Departure Airline</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($departure_airline[1])?$departure_airline[1]:'NA';?>  </p>
  </li>	 
<?php }?>

	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;From Airport</span>
    <p class="badge badge-primary badge-pill text-dark">  <?php echo !empty($from_airport[1])?$from_airport[1]:'';?> </p>
  </li>  
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;To Airport</span>
    <p class="badge badge-primary badge-pill text-dark">  <?php echo !empty($to_airport[1])?$to_airport[1]:'';?> </p>
  </li> 
  
<?php if($service_type[0]==1 || $service_type[0]==3){?> 
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Arrival Flight No</span>
    <p class="badge badge-primary badge-pill text-dark">   <?php echo !empty($arrival_flight[1])?$arrival_flight[1]:'NA';?> </p>
	</li>    
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Arrival Time</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($mainData->datalist[0]->atime)?$mainData->datalist[0]->atime:'NA';?></p>
  </li> 
<?php }?> 
  
<?php if($service_type[0]==2 || $service_type[0]==3){?>  
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Departure Flight No</span>
    <p class="badge badge-primary badge-pill text-dark">    <?php echo !empty($departure_flight[1])?$departure_flight[1]:'NA';?> </p>
	</li>  
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Departure Time</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($mainData->datalist[0]->dtime)?$mainData->datalist[0]->dtime:'NA';?> </p>
  </li>   
<?php }?>   
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-users"></i>&nbsp;Number of Guests</span>
    <p class="badge badge-primary badge-pill text-dark"><?php echo $a1 =  !empty($mainData->datalist[0]->no_of_adult)?$mainData->datalist[0]->no_of_adult:'0'; ?> Adult | <?php echo $c1 = !empty($mainData->datalist[0]->no_of_children)?$mainData->datalist[0]->no_of_children:'0'; ?> Child | <?php echo  $f1 =  !empty($mainData->datalist[0]->no_of_infants)?$mainData->datalist[0]->no_of_infants:'0';   $total_a_c_d = $a1+$c1+$f1; ?> Infant</p>
  </li>  
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Customer</span>
    <p class="badge badge-primary badge-pill text-dark">

<?php $cust_title =!empty($custData->datalist[0]->title)?$custData->datalist[0]->title:array(); 
$ctitle =!empty($cust_title[1])?$cust_title[1]:'';
$cname = !empty($custData->datalist[0]->name)?$custData->datalist[0]->name:'';
$cfirst_name=!empty($custData->datalist[0]->first_name)?$custData->datalist[0]->first_name:'';
$clast_name = !empty($custData->datalist[0]->last_name)?$custData->datalist[0]->last_name:'';
//echo $ctitle.' '.$cname.' '.$cfirst_name.' '.$clast_name;
echo $ctitle.' '.$cname;
?>
	</p>
  	</li> 
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Mobile</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($custData->datalist[0]->mobile)?$custData->datalist[0]->mobile:'';?> </p>
  </li>   
</ul>
<div class="clearfix"></div>

<hr>

<table class="table table-striped table-bordered" cellpadding="0" cellspacing="0" width="100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
     
      <th scope="col">Name</th>
	  <th scope="col">Mobile</th>
      
    </tr>
  </thead>
  <tbody>
	<?php if(!empty($guestData) and !empty($guestData->datalist)){
		$g = 1;
			$total_num_of_guset = count($guestData->datalist);
		foreach($guestData->datalist as $guest){
		?>
    <tr>
      <td><?=$g?></td> 
      <td><?=!empty($guest->first_name)?$guest->first_name.' '.$guest->last_name:''?></td>
      <td><?=!empty($guest->passport)?$guest->passport:$guest->mobile?></td>
      
    </tr>
  		<?php $g++;}}?>
  </tbody>
</table>
<div class="clearfix"></div> 
<div class="clearfix"></div>
</div>
		 
        <div class="col-md-5 ordersummary">
          <?PHP if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")!='Lounge'){?>
			<div class="card">
		  <div class="card-header"> Placard Details</div>
            <div class="charges table-responsive">
			  <table width="100%" border="0" cellspacing="0" cellpadding="10" class="table table-hover m-0">
			  <tbody>
                  <tr>
                    <td>Placard Name:</td>
                    <td align="right"><?php 
					echo !empty($mainData->datalist[0]->placard_name)?$mainData->datalist[0]->placard_name:'NA'; ?></td>
                  </tr>				 
				  <tr>
                    <td>Mobile No:</td>
                    <td align="right"><?php echo !empty($mainData->datalist[0]->country_code)?$mainData->datalist[0]->country_code:'';echo '-';echo !empty($mainData->datalist[0]->contact_number)?$mainData->datalist[0]->contact_number:'NA'; ?></td>
                  </tr>
				  
				  
				   
				  
				 </tbody> 
			  </table>
			  </div>
		  </div>
			  <?php } ?>
			  
			  
			  <div class="card mb-3">
            <div class="card-header"> Booking Summary </div> 
            <div class="charges table-responsive" id="setOrderSummaryData">
			<?php if(!empty($mainData)){
			if(!empty($mainData->message) and $mainData->message=='data found.'){?>
              <table width="100%" border="0" cellspacing="0" cellpadding="10" class="table table-hover m-0">
			<tbody>
			  <tr>
				<td>Booking No:</td>
				<td align="right"><?php echo !empty($mainData->datalist[0]->itinerary_no)?$mainData->datalist[0]->itinerary_no:$mainData->datalist[0]->name; ?>
				<input type="hidden" name="order_no" value="<?php echo !empty($mainData->datalist[0]->itinerary_no)?$mainData->datalist[0]->itinerary_no:$mainData->datalist[0]->name; ?>"/>
				
				</td>
			  </tr>
			  <tr>
				<td>Booking Date:</td>
				<td align="right"><?php echo !empty($mainData->datalist[0]->date_order)?date('D, d-M-Y',strtotime($mainData->datalist[0]->date_order)):'NA'; ?>
				<input type="hidden" id="" name="booking_date" value="<?php echo !empty($mainData->datalist[0]->date_order)?date('D, d-M-Y',strtotime($mainData->datalist[0]->date_order)):null; ?>"/>
				</td>
			  </tr>
			  <tr>
				<td>Booking Time:</td>
				<td align="right"><?php echo !empty($mainData->datalist[0]->date_order)?date('H:i:s',strtotime($mainData->datalist[0]->date_order)):'NA'; ?>
				<input type="hidden" id="" name="booking_time" value="<?php echo !empty($mainData->datalist[0]->date_order)?date('H:i:s',strtotime($mainData->datalist[0]->date_order)):null; ?>"/>
				</td>
			  </tr>
			  
			  
				<?php  $sgst=0;$cgst=0;$NetAmount=0;if(!empty($itemData) and !empty($itemData->datalist)){ 
				 $NetAmount = array_sum(array_column($itemData->datalist,'price_subtotal'));
				 $BtnDiscount = 0;
				foreach($itemData->datalist as $item){
					
					if($item->price_subtotal < 0)
					{ $BtnDiscount = 1;?>
					<tr>
                    <td><?php $product = $item->product_id;
						echo !empty($product[1])?$product[1]:'NA'; 
						echo "&nbsp;".$item->product_uom_qty.' Qty';
					?> <br/><a class=" RemoveCouponClass" onclick="RemoveApplyCoupon(<?php echo !empty($item->id)?$item->id:0?>,<?php echo !empty($mainData->datalist[0]->id)?$mainData->datalist[0]->id:0?>);">Remove Coupon</a></td>
                    <td align="right">&#8377; <?=$item->price_subtotal?></td>
                  </tr>
				
				<?php  } else { ?>  
                  <tr>
                    <td><?php $product = $item->product_id;
						echo !empty($product[1])?$product[1]:'NA'; 
						echo "&nbsp;".$item->product_uom_qty.' Qty';
					?></td>
                    <td align="right">&#8377; <?=$item->price_subtotal?></td>
                  </tr>
					<?php } }}?> 
                 
				   
			  <?php if($BtnDiscount == 0) {?>
			  <tr>
				<td>Discount
				<input type="hidden" id="c_discount_code" name="c_discount_code" value=""/>
				<input  type="hidden" id="c_discount_amt" name="c_discount_amt" value="0"/>
				<input type="hidden" id="c_discount_id" name="c_discount_id" value="0"/>
				  <span class="small"><span class="small" id="discountCouponCode">  </span></span> <a href="javascript:void(0)" class="" id="couponBtn" data-toggle="modal" onclick="openApplyCoupon()" >Apply Coupon</a> <a  class=" RemoveCouponClass d-none" onclick="RemoveCoupon(<?php echo $NetAmount; ?>);">Remove</a> </td>
				<td align="right">&#8377;<span id="discountAmt">0</span></td>
			  </tr>
			  <?php }?>
			  <tr>
					<td class="bg-light">Net Amount</td>
					<td align="right" class="bg-light">&#8377;<span id="netAmount"><?php echo $NetAmount; ?></span>
					<input type="hidden" id="" name="net_amount" value="<?php echo $NetAmount; ?>"/>
				
					</td>
				  </tr>
			  <tr>
					<td class="bg-light">SGST (9%)</td>
					<td align="right" class="bg-light">&#8377;<?=$sgst=sprintf ("%.2f",(($NetAmount*9)/100),2)?> </td>
			 </tr>
			 
			 <tr>
					<td class="bg-light">CGST (9%)</td> 
					<td align="right" class="bg-light">&#8377;<?=$cgst=sprintf ("%.2f",(($NetAmount*9)/100),2)?> </td>
			 </tr>
			  
			  <tr>
				<td class="bg-light">Final Amount</td>
				<td align="right" class="bg-light">&#8377;<span id="finalTotal"><?php echo round(($sgst+$cgst+$NetAmount),0); ?></span>
				<input type="hidden" id="c_final_amount" name="final_amount" value="0"/>
				 
				
				</td>
			  </tr>
			 
			  
			</tbody>
		  </table>
			  <?php }}?>
			 </div>
          </div>
		  <?php 
		  if (CCAVENUE_STATUS==True){
			?>
		  <span class ="bg-light" align="left" style="font-size:12px; font-weight:bold">Payment Method: &nbsp;&nbsp;&nbsp;</span>
		  <span class="bg-light" align="right"><input type="radio" value="hdfc" name="paymentgateway" id="hdfc" checked>HDFC Payment Gateway</span>&nbsp;  &nbsp;&nbsp;
		  <!--span><input type="radio" value="razorpay" name="paymentgateway" id="razorpay">Razorpay </span>-->
		  
		  
		  <div class="my-2"></div>
		  <?php 
		  }
		  else{
		?>
		<input type="radio" value="razorpay" name="paymentgateway" id="razorpay" checked>	
		  <?php 
		  }
		  ?>
		  <!--a href = "<?=base_url("home/thankyou/".$o_booking_id);?>"  name="submit" class="btn btn-primary w-100"  role="button" aria-disabled="false">Pay Now</a-->
                  	<div class="form-group col-md-12">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck11" name="terms_conditions" value="yes">
                            <label class="form-check-label" for="exampleCheck11"><span class="f-12">I accept to the  <a class="open-button" popup-open="popup-1" href="javascript:void(0)">Terms & Conditions*</a></span></label>
                          </div>
                      </div>
                      <!------------------------------Popup------------------------------------->
                      <div class="popup" popup-name="popup-1">
                              <div class="popup-content">
                                  <h2>Terms & Conditions</h2>
                                  <hr/>
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
                                            <td>3. Between 48 to 24 hours prior to the scheduled meeting time    </td>
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
                                  <hr/>
                                  <div class="text-right">
                                    <a class="btn btn-primary" popup-close="popup-1" href="javascript:void(0)">Close</a>
                                  </div>
                              </div>
                              <a class="close-button" popup-close="popup-1" href="javascript:void(0)">x</a>
                          </div>
		  <a onclick="PayNow(<?=$o_booking_id?>)" class="btn btn-primary w-100 disabled btnterms"  role="button" aria-disabled="false" id="pay_btn_<?=$o_booking_id?>">Pay Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body search-box">
        <div class="p-3">
		
		<?php 
		$allcoupon =  json_decode($coupondata);
		if(!empty($allcoupon->datalist[0]->id))
		{
			foreach($allcoupon->datalist as $val){ ?>
          <h5 id="promo_code_<?=!empty($val->id)?$val->id:0;?>"><?=!empty($val->promo_code)?$val->promo_code:0;?><a onclick="SelectCoupon(<?=!empty($val->id)?$val->id:0;?>,'<?=!empty($val->discount_type)?$val->discount_type:0;?>','<?=!empty($val->discount_percentage)?$val->discount_percentage:0;?>','<?=!empty($val->rule_minimum_amount)?$val->rule_minimum_amount:0;?>','<?=!empty($val->promo_code)?$val->promo_code:'';?>','<?=base_url('atithya/user/apply_coupon')?>',<?=htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(4)));?>);" class="btn btn-primary float-end small close couponclass" id="coupon_id_<?=!empty($val->id)?$val->id:0;?>"><i class="fas fa-ticket-alt"></i> Select</a></h5>
          <p><strong><?=!empty($val->name)?$val->name:'';?></strong></p>
          <p class="small">Valid on orders with items worth ₹<?=!empty($val->rule_minimum_amount)?$val->rule_minimum_amount:0;?></p>
		  
		  <p class="small">Validity Till : <?=!empty($val->rule_date_to)?date('D, d-M-Y',strtotime($val->rule_date_to)):0;?></p>
          <div class="clearfix"></div>
          <hr>
		<?php }}?> 
           
            <div class="row">
              <div class="form-group col-md-9">
                <label class="d-none">First Name</label>
                <input type="text" class="form-control" id="apply_coupon_text" name="" placeholder="Discount Coupon">
              </div>
              <div class="form-group col-lg-3 text-center">
                <button type="button" name="submit" class="btn btn-primary btn-sm px-3 applyccbtn"  role="button" aria-disabled="false" onclick="ValidateCouponCode_1('<?=base_url('atithya/user/apply_coupon')?>',<?=htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(4)));?>)">Apply</button>
				
				<!--button type="button" name="submit" class="btn btn-primary btn-sm px-3 applyccbtn"  role="button" aria-disabled="false" onclick="ValidateCouponCode('<?=base_url('atithya/ajaxcall/getApiData')?>')">Apply</button-->
              </div>
			  
			  <div class="form-group col-lg-12 text-center" style="color:red" id="errorcouponmsg">
              </div>
              <div class=clearfix></div>
            </div>
          
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
 
 
function openApplyCoupon()
{
	//alert();
	$('#exampleModalCenter').modal('show');
}
jQuery(document).ready(function($) 
{
	//alert("<?=htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(3)));?>");
	var id="<?=htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(4)));?>";
	get_booking_data(id);
});
function get_booking_data(id=0,b_id=0)
{
	//$("#setOrderSummaryData").html('');
	$.ajax({
			type: 'POST',
			 
			url: "<?=base_url('atithya/home/get_booking_data');?>",
			data: {'id':id},
			dataType: "html",
			 	success: function(data) { //alert(data);
				 $("#setOrderSummaryData").html('');
				 $("#setOrderSummaryData").html(data);
					return true;
				 },
				error:function(data)
				 {
					if(data.status==0){
						alert("There is no internet connection found. Please reconnect and try again!");
						return false;
					}
					if(data.status>0){
						alert(data.responseText);
						var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
						OpenWindow.document.write(data.responseText);
						return false;
						
					}
				}
		}); 
}
 

//setTimeout(function(){$(".razorpay-payment-button").trigger("click"); }, 1000);
$(function() {
    $.fn.size = function() {
        return this.length;
		
    }
});
$(document).ready(function() {
	$('#ccavenue_form').hide();
});


function atLeastOneRadio() {
    return ($('input[type=radio]:checked').size() > 0);
}

function PayNow(id)
{ 
var total_guest_from_guest_list = "<?=$total_num_of_guset;?>";
var total_guest_count = "<?=$total_a_c_d;?>";
var radio = atLeastOneRadio();
if(radio) {

var paymethod = $('input[type=radio]:checked').val();
if (paymethod==='hdfc')
{
	$('#ccavenue_form').show();
	$(".hdfc_checkout").trigger("click"); 
}
else{

	
	$('#ccavenue_form').hide();
if(parseInt(total_guest_from_guest_list) != parseInt(total_guest_count))
{
	alert("There is a mismatch in total no of guests & no of guests profile information saved in the booking, kindly begin again!");
	return false;
} 
$.ajax({
			type: 'POST',
			 
			url: "<?=base_url('atithya/home/save_sale_order_payment_pending');?>",
			data: {'id':id},
			dataType: "json",
			 	success: function(data) {
					if(data.status==true)
					{
					//PleaseWaitShow();
					//$("#pay_btn_"+id).html("Please wait...");
					$(".razorpay-payment-button").trigger("click"); 
					//$("#pay_btn_"+id).attr("onclick", "").unbind("click");
					
					}
					else
					{
						alert("Order payment not updated");
					}
					return true;
				 },
				error:function(data)
				 {
					if(data.status==0){
						alert("There is no internet connection found. Please reconnect and try again!");
						return false;
					}
					if(data.status>0){
						alert(data.responseText);
						var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
						OpenWindow.document.write(data.responseText);
						return false;
						
					}
				}
		}); 
		//Ajax ends
	}
	}
	else{
		alert("Please select payment method!");
		$('#paymentmethod').addClass('focus');
	}
}
</script>

<?php 
$order_Id = 'ORD_'.$mainData->datalist[0]->name.'_'.rand(1000,9999).'_END';

//$order_Id = 'ORD_'.time().'_'.rand(1000,9999).'_END'?>
<?php 
$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(4))); 
if ($id=='30094s')
{
    $keyId = 'rzp_test_WEQMD6ZP6Ih63X';
}
else
{
    $keyId = 'rzp_live_7ITKNkW7Smds30';
}

//
?>

<?php $amount = !empty($NetAmount)?round(($sgst+$cgst+$NetAmount),0):0;?>
<form action="<?=base_url("atithya/home/thankyou/".$o_booking_id.'/'.$booking_id);?>" method="POST" id="autoclick" class="d-none">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?=$keyId?>"  
    data-amount="<?=$amount*100?>"  
    data-currency="INR"  
    data-id="<?=$order_Id?>" 
    data-buttontext="Pay Now"
    data-name="EnCalm Hospitality Pvt. Ltd."
    data-description="Booking Amount"
    data-image=""
    data-prefill.name="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['full_name']:''?>"
    data-prefill.email="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['emailid']:''?>"
    data-prefill.contact="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['mobile']:''?>"
    data-prefill.address="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['address']:''?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
<input type="hidden" name="razorpay_order_id" value="<?=$order_Id?>" />
<input type="hidden" name="o_booking_id"  value="<?=$o_booking_id?>"/>
<input type="hidden" name="booking_id" value="<?=$booking_id?>" />
<input type="hidden" name="payment_mode" value="Razorpay" />
<input type="hidden" name="razorpay_signature"  />
<input type="hidden" name="came_from" value="sitebooking"  />
<input type="hidden" name="razorpay_payment_amount" value="<?=$amount?>"  />
<input type="submit" name="" value="" class="razorpay-payment-button" />
</form>
<form method="post" name="customerData" action="<?=base_url("atithya/home/postpayment/".$o_booking_id.'/'.$booking_id);?>" id="ccavenue_form">				
<input type="hidden" name="tid" id="tid" readonly />
<input type="hidden" name="came_from" value="sitebooking"  />
<input type="hidden" name="order_id" value="<?=$order_Id?>"/>
<input type="hidden" name="merchant_id" value="<?=CCAVENUE_MERCHANT_DATA?>"/>
<input type="hidden" name="o_booking_id"  value="<?=$o_booking_id?>"/>
<input type="hidden" name="booking_id" value="<?=$booking_id?>" />
<input type="hidden" name="payment_mode" value="HDFC" />
<?php 
$this->session->set_userdata('orderamount', $amount);
?>

<input type="hidden" name="amount" value="<?=$amount?>"/>
<input type="hidden" name="currency" value="INR"/>
<input type="hidden" name="redirect_url" value="<?=base_url("atithya/home/thank_you/".$o_booking_id.'/'.$booking_id);?>"/>
<input type="hidden" name="cancel_url" value="<?=base_url("atithya/home/thank_you/".$o_booking_id.'/'.$booking_id);?>"/>
<input type="hidden" name="language" value="EN"/>
<input type="hidden" name="delivery_name" value="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['full_name']:''?>"/>
<input type="hidden" name="delivery_address" value="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['address']:''?>"/>
<input type="hidden" name="delivery_city" value="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['city']:''?>"/>
<input type="hidden" name="delivery_state" value="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['state']:''?>"/>
<input type="hidden" name="delivery_zip" value="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['pincode']:''?>"/>
<input type="hidden" name="delivery_country" value="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['country_name']:''?>"/>
<input type="hidden" name="delivery_tel" value="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['contact']:''?>"/>
<INPUT TYPE="submit" value="Pay" class="hdfc_checkout" style="display:none;">
		        
</form>

<!-- ======= Footer ======= -->
<?php include 'footer.php';?>
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
        
    $('#exampleCheck11').click(function() {
        if($(this).is(':checked')) {
            $('.btnterms').removeClass('disabled');
        }
        else {
            $('.btnterms').addClass('disabled');
        }
    });
     
    });
</script>
<script>
	// Disable inspect element
// $(document).bind("contextmenu",function(e) {
//  e.preventDefault();
// });

// document.onkeydown = function(e) {
// if(event.keyCode == 123) {
// return false;
// }
// if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
// return false;
// }
// if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
// return false;
// }
// if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
// return false;
// }
// }
jQuery('#couponBtn').on('click', function (e) {
    $('#exampleModalCenter').modal('show');
});
</script>
<style>
body {
	overflow: visible !important;
}
</style>
</body>
</html>