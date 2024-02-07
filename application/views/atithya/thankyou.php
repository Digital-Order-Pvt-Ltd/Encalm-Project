 
<?php include 'head.php';?>
<!-- ======= Header ======= --> 
    
 <?php include 'top-menu.php';?>
 
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
  
<!-- End Header -->
<?php 

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
	//p($allsearchdata);exit;
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
// 	p($allsearchdata);
		  }
	  ?>
<main id="hero" class="bg-white">
  <?php //p(json_decode($datalist));?>
  <section class="mamber-card-checkout">
    <div class="container search-box">
      <div class="row">
	  <div class="section-title" style="text-align:center">
	       <p><a onclick="sendAvaanData()"><img src="<?=base_url()?>atithya_assets/assets/img/Avaan-Booking.jpeg" alt="Avaan Excess Bagage Booking" /></a>  </p>			  
            <p>&nbsp;</p>
            
            <p>
<?php 
if(!empty($this->session->flashdata('success'))) {
	$dbrow = CustomQuery("select payment_status,razorpay_payment_id from tbl_booking where id=$dbid");
	if(!empty($dbrow[0]->payment_status)) $payment_status = $dbrow[0]->payment_status;
	?>
				 Your Booking has been confirmed, Booking No: <?php echo !empty($mainData->datalist[0]->itinerary_no)?$mainData->datalist[0]->itinerary_no:$mainData->datalist[0]->name; ?><br> 
				 Payment Status : <?=$payment_status?>
				 <br>Payment Id : <?=!empty($dbrow[0]->payment_status)?$dbrow[0]->razorpay_payment_id:'NA'?>
				 <br>Thank you!
<?php }
else{?>
 Your Booking has been Failed. <br> 
				 Payment Status : Failed
				 <br>Thank you!
<?php
}
?>
</p>
			  
          </div>
          <div class="col-lg-7">
          
		  
         <ul class="list-group nbadge">
	<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Service Date &amp; Time</span>
    <p class="badge badge-primary badge-pill text-dark"><?php echo !empty($mainData->datalist[0]->commitment_date )?date('D, d-M-Y H:i',strtotime($mainData->datalist[0]->commitment_date)) :'0'; ?> Hrs (IST)</p>
  </li>
<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Service Category</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($mainData->datalist[0]->service_category)?ucfirst(str_replace('_',' ',$mainData->datalist[0]->service_category)):'';?> </p>
  </li>
<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Service Type</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($service_type[1])?$service_type[1]:'';?> </p>
  </li>	  
  <li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Service Airport</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($airport_location[1])?$airport_location[1]:'';?> </p>
  </li>	

 <li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Travel Sector</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($airport_terminal[1])?$airport_terminal[1]:'';?>  </p>
  </li>	

<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Travel Date</span>
    <p class="badge badge-primary badge-pill text-dark"><?php echo !empty($mainData->datalist[0]->date )?date('D, d-M-Y',strtotime($mainData->datalist[0]->date)) :'NA'; ?> </p>
  </li>
  <?php if($service_type[0]==1 || $service_type[0]==3){?> 
  <li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Arrival Airline</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($arrival_airline[1])?$arrival_airline[1]:'NA';?>  </p>
  </li>	
  <?php }?>
  <?php if($service_type[0]==2 || $service_type[0]==3){?> 
<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Departure Airline</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($departure_airline[1])?$departure_airline[1]:'NA';?>  </p>
  </li>	 
<?php }?>  
<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;From Airport</span>
    <p class="badge badge-primary badge-pill text-dark">  <?php echo !empty($from_airport[1])?$from_airport[1]:'';?> </p>
  </li>  
<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;To Airport</span>
    <p class="badge badge-primary badge-pill text-dark">  <?php echo !empty($to_airport[1])?$to_airport[1]:'';?> </p>
  </li> 

<?php if($service_type[0]==1 || $service_type[0]==3){?> 
<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Arrival Flight No</span>
    <p class="badge badge-primary badge-pill text-dark">   <?php echo !empty($arrival_flight[1])?$arrival_flight[1]:'NA';?> </p>
</li>    
<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Arrival Time</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($mainData->datalist[0]->arrival_time)?$mainData->datalist[0]->arrival_time:'NA';?></p>
  </li> 
 <?php }?> 
  
 <?php if($service_type[0]==2 || $service_type[0]==3){?>  
<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Departure Flight No</span>
    <p class="badge badge-primary badge-pill text-dark">    <?php echo !empty($departure_flight[1])?$departure_flight[1]:'NA';?> </p>
</li>  
<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Departure Time</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($mainData->datalist[0]->departure_time)?$mainData->datalist[0]->departure_time:'NA';?> </p>
  </li>   
<?php }?>     
<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-users"></i>&nbsp;Number of Guests</span>
    <p class="badge badge-primary badge-pill text-dark"><?php echo !empty($mainData->datalist[0]->no_of_adult)?$mainData->datalist[0]->no_of_adult:'0'; ?> Adult | <?php echo !empty($mainData->datalist[0]->no_of_children)?$mainData->datalist[0]->no_of_children:'0'; ?> Child | <?php echo !empty($mainData->datalist[0]->no_of_infants)?$mainData->datalist[0]->no_of_infants:'0'; ?> Infant</p>
  </li>  
<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Customer</span>
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

<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Mobile</span>
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
          <div class="card mb-3">
            <div class="card-header"> Booking Summary </div> 
            <div class="charges table-responsive">
			<?php if(!empty($mainData)){
			if(!empty($mainData->message) and $mainData->message=='data found.'){?>
              <table width="100%" border="0" cellspacing="0" cellpadding="10" class="table table-hover m-0">
                <tbody>
                  <tr>
                    <td>Booking No:</td>
                    <td align="right"><?php echo !empty($mainData->datalist[0]->itinerary_no)?$mainData->datalist[0]->itinerary_no:$mainData->datalist[0]->name; ?></td>
                  </tr>
                  <tr>
                    <td>Booking Date:</td>
                    <td align="right"><?php echo !empty($mainData->datalist[0]->date_order)?date('D, d-M-Y',strtotime($mainData->datalist[0]->date_order)):'NA'; ?></td>
                  </tr>
                  <tr>
                    <td>Booking Time:</td>
                    <td align="right"><?php echo !empty($mainData->datalist[0]->date_order)?date('H:i',strtotime($mainData->datalist[0]->date_order)):'NA'; ?></td>
                  </tr>
				<?php $sgst=0;$cgst=0;$NetAmount=0;if(!empty($itemData) and !empty($itemData->datalist)){ 
				 $NetAmount = array_sum(array_column($itemData->datalist,'price_subtotal'));
				foreach($itemData->datalist as $item){
					
					 
				?>  
                  <tr>
                    <td><?php $product = $item->product_id;
						echo !empty($product[1])?$product[1]:'NA'; 
						echo "&nbsp;".$item->product_uom_qty.' Qty';
					?></td>
                    <td align="right">&#8377; <?=$item->price_subtotal?></td>
                  </tr>
				<?php }}?> 
                  <tr>
					<td class="bg-light">SGST (9%)</td>
					<td align="right" class="bg-light">&#8377; <?=$sgst=sprintf ("%.2f",(($NetAmount*9)/100),2)?> </td>
					 </tr>
					 
					 <tr>
							<td class="bg-light">CGST (9%)</td> 
							<td align="right" class="bg-light">&#8377; <?=$cgst=sprintf ("%.2f",(($NetAmount*9)/100),2)?> </td>
					 </tr>
				  <tr>
                  <tr>
                    <td class="bg-light">Final Amount</td>
                    <td align="right" class="bg-light">&#8377;<?php echo $sgst+$cgst+$NetAmount; ?></td>
                  </tr>
                  
                  <!--tr>
                    <td class="bg-light">Total Price</td>
                    <td align="right" class="bg-light">&#8377;<?= $NetAmount;?></td>
                  </tr-->
                </tbody>
              </table>
			  <?php }}?>
			 </div>
          </div>
		   <?PHP if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")!='Lounge'){?>
		  <div class="card-header"> Placard Details</div>
            <div class="charges table-responsive">
			  <table width="100%" border="0" cellspacing="0" cellpadding="10" class="table table-hover m-0">
			  <tbody>
                    <tr>
                    <td>First Name:</td>
                    <td align="right"><?php 
					$p_title = !empty($mainData->datalist[0]->title)?$mainData->datalist[0]->title:array();
					 
					 
					echo !empty($p_title[1])?$p_title[1]:'' ;echo '&nbsp';
					echo !empty($mainData->datalist[0]->first_name)?$mainData->datalist[0]->first_name:'NA'; ?></td>
                  </tr>
				  <tr>
                    <td>Last Name:</td>
                    <td align="right"><?php echo !empty($mainData->datalist[0]->last_name)?$mainData->datalist[0]->last_name:'NA'; ?></td>
                  </tr>
				  <tr>
                    <td>Mobile No:</td>
                    <td align="right"><?php echo !empty($mainData->datalist[0]->country_code)?$mainData->datalist[0]->country_code:'';echo '-';echo !empty($mainData->datalist[0]->contact_number)?$mainData->datalist[0]->contact_number:'NA'; ?></td>
                  </tr>
				  
				  
				   
				  
				 </tbody> 
			  </table>
			  </div>
			  <?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script>
    function sendAvaanData() {
      var data = {
        "sale_id": "<?=$allsearchdata->mainData->datalist[0]->id;?>",
        "booking_no": "<?=$allsearchdata->mainData->datalist[0]->itinerary_no;?>",
        "cust_name": "<?=$custData->datalist[0]->name;?>",
        "cust_mobile": "<?=$custData->datalist[0]->mobile;?>",
        "cust_email": "<?=$custData->datalist[0]->email;?>"
      };
      console.log("data ", data);

//   $.ajax({
//     type: "POST",
//     url: "<?=base_url("atithya/home/avaan_booking")?>",
//     data: data,
//     success: function(response) {
//       console.log(response);
//       var win = window.open(response, "_blank");
//     },
//     error: function(jqXHR, textStatus, errorThrown) {
//       console.error(textStatus, errorThrown);
//     }
//   });
}
</script>
<!-- ======= Footer ======= -->
<?php include 'footer.php';?>

</body>
</html>