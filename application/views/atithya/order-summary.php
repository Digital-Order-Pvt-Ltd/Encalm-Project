 
<?php include 'head.php';?>
<!-- ======= Header ======= --> 
    
 <?php include 'top-menu.php';?>
 
    
<?php include 'top-menu.php';?>
<!-- .navbar --> 
  
<!-- End Header -->
<main id="hero" class="bg-white">
  <?php //p(json_decode($datalist));exit;?>
  <section class="mamber-card-checkout">
    <div class="container search-box">
      <div class="row">
	  <div class="section-title" style="text-align:center">
            <p><a onclick="sendAvaanData()"><img src="<?=base_url()?>atithya_assets/assets/img/Avaan-Booking.jpeg" alt="Avaan Excess Bagage Booking" /></a>  </p>			  
            <p>&nbsp;</p>			              
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
	  $_SESSION['allsearchdata'] = $allsearchdata;
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
	
	$obid = !empty($mainData->datalist[0]->id)?$mainData->datalist[0]->id:0;

	$reschedule_posted = $_SESSION['reschedule_posted'];
	$_SESSION['reschedule_posted'] = '';
	//p($reschedule_data);
	//$reschedule_data->service_date_time
	//p($allsearchdata);
	//p($_SESSION['rescheduling_charges_total']);
}
?>
<ul class="list-group nbadge">
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Service Date &amp; Time</span>
    <p class="badge badge-primary badge-pill text-dark"><?php 
	if(!empty($reschedule_data)){
		echo date('D, d-M-Y H:i',strtotime($reschedule_data->service_date_time));
	}
	else{
		echo !empty($mainData->datalist[0]->commitment_date )?date('D, d-M-Y H:i',strtotime($mainData->datalist[0]->commitment_date)) :'0'; 
	}
	?>
	Hrs (IST)
	
	</p>
  </li>
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Service Category</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($mainData->datalist[0]->service_category)?ucfirst(str_replace('_',' ',$mainData->datalist[0]->service_category)):'';?> </p>
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
    <p class="badge badge-primary badge-pill text-dark"><?php 
	if(!empty($reschedule_data)){
		echo date('D, d-M-Y H:i',strtotime($reschedule_data->doa));
	}
	else{
	echo !empty($mainData->datalist[0]->date )?date('D, d-M-Y',strtotime($mainData->datalist[0]->date)) :'NA'; 
	}
	?>  </p>
  </li>
<?php 
if($service_type[0]==1 || $service_type[0]==3)
{
?> 
  <li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Arrival Airline</span>
    <p class="badge badge-primary badge-pill text-dark"><?php 
	if(!empty($reschedule_data)){
		echo $reschedule_data->airline_name;
	}
	else{
		echo !empty($arrival_airline[1])?$arrival_airline[1]:'NA';
	}
	
	?>  </p>
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
    <p class="badge badge-primary badge-pill text-dark">  
		<?php echo !empty($from_airport[1])?$from_airport[1]:'';?> 
		</p>
  </li>  
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;To Airport</span>
    <p class="badge badge-primary badge-pill text-dark">  <?php echo !empty($to_airport[1])?$to_airport[1]:'';?> </p>
  </li> 
  
<?php if($service_type[0]==1 || $service_type[0]==3){?> 
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Arrival Flight No</span>
    <p class="badge badge-primary badge-pill text-dark">   <?php 
	if(!empty($reschedule_data)){
		echo $reschedule_data->flight_name;
	}
	else{
		echo !empty($arrival_flight[1])?$arrival_flight[1]:'NA';
	}
	?>
	</p>
	</li>    
	<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Arrival Time</span>
    <p class="badge badge-primary badge-pill text-dark"><?php 
	if(!empty($reschedule_data)){
		echo $reschedule_data->arrival_time;
	}
	else{
		!empty($mainData->datalist[0]->atime)?$mainData->datalist[0]->atime:'NA';
	}
	?>
	</p>

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
      <th scope="col">Age</th>
	  <th scope="col">Travel Class</th>
      <th scope="col">PNR No</th>
	  <th scope="col">Passport/Govt ID</th>
      
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
	  <td><?=!empty($guest->age)?$guest->age:''?></td>
       <td><?=!empty($guest->class_type)?ucfirst($guest->class_type):''?></td>
      <td><?=!empty($guest->pnr_no)?$guest->pnr_no:''?></td>
      <td><?=!empty($guest->passport)?$guest->passport:''?></td>
      
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
				 $_SESSION['prd'] = $itemData->datalist[0]->product_id[1];
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
		  if(empty($reschedule_data)){
			?>
            <a href="javascript:void(0)" class="reschargesBtn btn-primary" id="reschargesBtn" onclick="openCharges()" data-toggle="modal">Reschedule Service</a>
			  <?php include 'reschedule_charges.php';
			  }
			  ?>
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
		   
		   <a href="<?=base_url("atithya/home/thankyou/".$o_booking_id.'/'.$booking_id);?>"  name="submit" class="btn btn-primary w-100"  role="button" aria-disabled="false">Confirm Test</a><br/>
		  <!--a href = "<?=base_url("home/thankyou/".$o_booking_id);?>"  name="submit" class="btn btn-primary w-100"  role="button" aria-disabled="false">Pay Now</a-->
		  <a onclick="PayNow(<?=$o_booking_id?>)" class="btn btn-primary w-100"  role="button" aria-disabled="false" id="pay_btn_<?=$o_booking_id?>">Pay Now</a><br/>
		  <button class="btn btn-danger w-100 mt-5" onclick="sendAvaanData()">Redirect to Avaan Booking</button>
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
const currentUrl = window.location.href;
// addURLToLocalStorage(currentUrl);
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

}
else{
	alert("Please select payment method!");
	$('#paymentmethod').addClass('focus');
}
}
</script>

<?php 
$order_Id = 'ORD_'.$mainData->datalist[0]->name.'_'.rand(1000,9999).'_END';

//$order_Id = 'ORD_'.time().'_'.rand(1000,9999).'_END'
?>
<?php $amount = $_SESSION['final_amount_resheduling'];
//!empty($NetAmount)?round(($sgst+$cgst+$NetAmount),0):0;?>

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
<input type="hidden" name="redirect_url" value="<?=base_url("atithya/home/thankyou/".$o_booking_id.'/'.$booking_id);?>"/>
<input type="hidden" name="cancel_url" value="<?=base_url("atithya/home/cancelled_payment/".$o_booking_id.'/'.$booking_id);?>"/>
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

function sendAvaanData() {
  var data = {
    "sale_id": "<?=$booking_id;?>",
    "booking_no": "<?=$allsearchdata->mainData->datalist[0]->itinerary_no;?>",
    "cust_name": "<?=$custData->datalist[0]->name;?>",
    "cust_mobile": "<?=$custData->datalist[0]->mobile;?>",
    "cust_email": "<?=$custData->datalist[0]->email;?>"
  };
  console.log("data ", data);

  $.ajax({
    type: "POST",
    url: "<?=base_url("atithya/home/avaan_booking")?>",
    data: data,
    success: function(response) {
      console.log(response);
      var win = window.open(response, "_blank");
    },
    error: function(jqXHR, textStatus, errorThrown) {
      console.error(textStatus, errorThrown);
    }
  });
}

// Define a function to check whether the URL is already open
function isURLAlreadyOpen(url) {
  // Get the value of the 'url' key from localStorage
  var openURLs = localStorage.getItem('openURLs');
  if (openURLs) {
    // If 'openURLs' exists in localStorage, split it into an array
    openURLs = openURLs.split(',');
    // Loop through the array to check whether the given URL exists
    for (var i = 0; i < openURLs.length; i++) {
      if (openURLs[i] === url) {
        return true; // The URL is already open
      }
    }
  }
  // If the URL is not found, return false
  return false;
}

// // Define a function to add the URL to the 'openURLs' key in localStorage
// function addURLToLocalStorage(url) {
//   // Get the value of the 'openURLs' key from localStorage
//   var openURLs = localStorage.getItem('openURLs');
//   if (openURLs) {
//     // If 'openURLs' exists in localStorage, split it into an array
//     openURLs = openURLs.split(',');
//   } else {
//     // If 'openURLs' does not exist in localStorage, create an empty array
//     openURLs = [];
//   }
//   // Add the URL to the array and store it back in localStorage
//   openURLs.push(url);
//   localStorage.setItem('openURLs', openURLs.join(','));
// }

// // Check whether the current URL is already open
// if (isURLAlreadyOpen(window.location.href)) {
//   // If the URL is already open, display a message and close the current tab
//   alert('This URL is already open in another tab!');
// //   window.close();
// //window.close();
//   //window.top.close();
//   var win = window.open("about:blank", "_self");
// win.close();
// } else {
//   // If the URL is not already open, add it to the 'openURLs' key in localStorage
//   addURLToLocalStorage(window.location.href);
// }
// Define a function to add the URL to the 'openURLs' key in localStorage

</script>
<style>
body {
	overflow: visible !important;
}
</style>
</body>
</html>