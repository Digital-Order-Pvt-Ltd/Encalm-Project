 
<?php include 'head.php';?>
<!-- ======= Header ======= --> 
    
 
 <?php 
    // Get the current URI
      $currentUri = $this->uri->uri_string();

      // Check if the URI contains "spa"
      if (strpos($currentUri, 'spa') !== false) {
          // The URI contains "spa"
          $spa =true;
          include 'top-menu-spa.php';
      } else {
          // The URI does not contain "spa"
          $spa =false;
          include 'top-menu.php';
      }
  ?>
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
		  
		  if(!empty($datalist)){
	$allsearchdata =  json_decode($datalist);
//p($allsearchdata);
//exit();
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
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($mainData->datalist[0]->collection_remarks)?$mainData->datalist[0]->collection_remarks:'';?> </p>
  </li>
<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Service Duration</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($mainData->datalist[0]->service_duration_id[1])?$mainData->datalist[0]->service_duration_id[1]:'';?> </p>
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
<li class="list-group-item d-md-flex justify-content-between align-items-center"> <span><i class="fas fa-users"></i>&nbsp;Number of Guests</span>
    <p class="badge badge-primary badge-pill text-dark"><?php echo $a1 =  !empty($mainData->datalist[0]->no_of_adult)?$mainData->datalist[0]->no_of_adult:'0'; ?> Adult</p>
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
	  <th scope="col">Gender</th>
      <th scope="col">Therapist Preference</th>
      <th scope="col">Seat/PNR No.</th>
	  <th scope="col">Passport/Govt ID</th>
      
    </tr>
  </thead>
  <tbody>
  <?php $therapist = array('first'=>'Male','business'=>'Female');
  if(!empty($guestData) and !empty($guestData->datalist)){
	  $g = 1;
	    $total_num_of_guset = count($guestData->datalist);
	  foreach($guestData->datalist as $guest){
	  ?>
    <tr>
      <td><?=$g?></td> 
      <td><?=!empty($guest->first_name)?$guest->first_name.' '.$guest->last_name:''?></td>
	  <td><?=!empty($guest->age)?$guest->age:''?></td>
       <td><?=!empty($guest->gender)?ucfirst($guest->gender):''?></td>
      <td><?=!empty($guest->therapist_preference)?ucfirst($guest->therapist_preference):''?></td>
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
			  
			  
			  
			  
			</tbody>
		  </table>
			  <?php }}?>
			 </div>
          </div>
		  <!-- onclick="PayNow(<?=$o_booking_id?>)" a href = "<?=base_url("home/thankyou/".$o_booking_id);?>"  name="submit" class="btn btn-primary w-100"  role="button" aria-disabled="false">Pay Now</a-->
		  <a onclick="PayNow(<?=$o_booking_id?>)" class="btn btn-primary w-100"  role="button" aria-disabled="false" id="pay_btn_<?=$o_booking_id?>">Send Appointment Request</a>
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
          <h5 id="promo_code_<?=!empty($val->id)?$val->id:0;?>"><?=!empty($val->promo_code)?$val->promo_code:0;?><a onclick="SelectCoupon(<?=!empty($val->id)?$val->id:0;?>,'<?=!empty($val->discount_type)?$val->discount_type:0;?>','<?=!empty($val->discount_percentage)?$val->discount_percentage:0;?>','<?=!empty($val->rule_minimum_amount)?$val->rule_minimum_amount:0;?>','<?=!empty($val->promo_code)?$val->promo_code:'';?>','<?=base_url('atithya/user/apply_coupon')?>',<?=htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(3)));?>);" class="btn btn-primary float-end small close couponclass" id="coupon_id_<?=!empty($val->id)?$val->id:0;?>"><i class="fas fa-ticket-alt"></i> Select</a></h5>
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
                <button type="button" name="submit" class="btn btn-primary btn-sm px-3 applyccbtn"  role="button" aria-disabled="false" onclick="ValidateCouponCode_1('<?=base_url('atithya/user/apply_coupon')?>',<?=htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(3)));?>)">Apply</button>
				
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
function PayNow(id)
{ 
    if(confirm('Do you really want to submit the appointment request of this booking?')) {
        
$.ajax({
			type: 'POST',
			 
			url: "<?=base_url('spa/home/save_sale_order_payment_pending_spa');?>",
			data: {'id':id},
			dataType: "json",
			 	success: function(data) {
					if(data.status==true)
					{
					//PleaseWaitShow();
					//$("#pay_btn_"+id).html("Please wait...");
					//$(".razorpay-payment-button").trigger("click"); 
					//$("#pay_btn_"+id).attr("onclick", "").unbind("click");
					window.location = '<?=base_url("spa/home/thankyou/".$o_booking_id.'/'.$booking_id);?>';
					
					}
					else
					{
						//alert("Order payment not updated");
						alert("Order information not updated");
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
    }



}
</script>

<?php $order_Id = 'ORD_'.time().'_'.rand(1000,9999).'_END'?>
<?php //$keyId = 'rzp_test_WEQMD6ZP6Ih63X';?>
<?php $keyId = 'rzp_live_7ITKNkW7Smds30';?>
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
<input type="hidden" name="razorpay_signature"  />
<input type="hidden" name="razorpay_payment_amount" value="<?=$amount?>"  />
<input type="submit" name="" value="" class="razorpay-payment-button" />
</form>

<!-- ======= Footer ======= -->
<?php include 'footer.php';?>
<script>
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