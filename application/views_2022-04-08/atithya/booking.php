 
<?php include 'head.php';?>
<!-- ======= Header ======= --> 
    
 <?php include 'top-menu.php';?>
 
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
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
	//p($allsearchdata);
	$mainData = !empty($allsearchdata->mainData)?$allsearchdata->mainData:array();
	$itemData = !empty($allsearchdata->itemData)?$allsearchdata->itemData:array();
	$guestData = !empty($allsearchdata->guestData)?$allsearchdata->guestData:array();
	$custData = !empty($allsearchdata->custData)?$allsearchdata->custData:array();
	$gsoData = !empty($allsearchdata->gsoData)?$allsearchdata->gsoData:array();
	$porterData = !empty($allsearchdata->porterData)?$allsearchdata->porterData:array();
	$buggyData = !empty($allsearchdata->buggyData)?$allsearchdata->buggyData:array();
	$booking_stage = !empty($mainData->datalist[0]->booking_stage )?$mainData->datalist[0]->booking_stage :''; 
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
	//p($allsearchdata);
		  }
	  ?> 
<!-- End Header -->
<main id="hero" class="bg-white">
  <div class="bg-light pt-5">
     <div class="section-title text-center">
	 
            <p>My Booking Details  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<!--a style="float:right;" href="" class="btn btn-primary">Download Invoice</a-->&nbsp;  &nbsp; &nbsp; </p>
        <?php if(!empty($this->session->flashdata('success'))) {?>
            
           <br><h3 class="btn btn-danger"> <center><?=$this->session->flashdata('success')?></center></h3>
            
          <?php }?>
          </div>
  </div>
  <?php //p(json_decode($datalist));?>
  <section class="mamber-card-checkout">
    <div class="container search-box">
      <div class="row">
	 
          <div class="col-lg-8">
          
		 
<ul class="list-group">
	<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Service Date &amp; Time</span>
    <p class="badge badge-primary badge-pill text-dark"><?php echo !empty($mainData->datalist[0]->commitment_date )?date('D, d-M-Y H:i',strtotime($mainData->datalist[0]->commitment_date)) :''; ?> Hrs (IST)</p>
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
  <li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Travel Date </span>
    <p class="badge badge-primary badge-pill text-dark"><?php echo !empty($mainData->datalist[0]->date )?date('D, d-M-Y',strtotime($mainData->datalist[0]->date)) :'NA'; ?>  Hrs (IST)</p>
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
    <p class="badge badge-primary badge-pill text-dark">   <?php echo !empty($to_airport[1])?$to_airport[1]:'';?> </p>
  </li>
<?php if($service_type[0]==1 || $service_type[0]==3){?>   
<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Arrival Flight No</span>
    <p class="badge badge-primary badge-pill text-dark">   <?php echo !empty($arrival_flight[1])?$arrival_flight[1]:'NA';?> </p>
</li>  
<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Arrival Time</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($mainData->datalist[0]->atime)?$mainData->datalist[0]->atime:'NA';?></p>
  </li> 

 <?php }?> 
<?php if($service_type[0]==2 || $service_type[0]==3){?>  
  <li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Departure Flight No</span>
    <p class="badge badge-primary badge-pill text-dark">    <?php echo !empty($departure_flight[1])?$departure_flight[1]:'NA';?> </p>
</li> 
<li class="list-group-item d-flex justify-content-between align-items-center"> <span><i class="fas fa-couch"></i>&nbsp;Departure Time</span>
    <p class="badge badge-primary badge-pill text-dark"><?=!empty($mainData->datalist[0]->dtime)?$mainData->datalist[0]->dtime:'NA';?> </p>
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
<table class="table table-striped table-bordered" id="myTbls" cellpadding="0" cellspacing="0" width="100%">
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
		 
        <div class="col-md-4 ordersummary">
          <div class="card mb-3">
            <div class="card-header">Booking Summary </div>
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
		  <div class="card"><div class="card-header"> Placard Details</div>
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
        </div>
		<?php if(!empty($booking_stage) and ($booking_stage=='cancelled' || $booking_stage=='cancellation_received' || $booking_stage=='refund_request' || $booking_stage=='refunded' )){
			
			$btn_name = '';
			if($booking_stage=='cancelled') $btn_name = 'Cancelled';
			if($booking_stage=='cancellation_received') $btn_name = 'Cancellation Request Received';
			if($booking_stage=='refund_request') $btn_name = 'Refund Request Initiated';
			if($booking_stage=='refunded') $btn_name = 'Refund Processed';
				
			?>
        
		<p class="my-4 text-center"><a style="float:none;"  class="btn btn-primary w-100" ><?=$btn_name?></a></p>
		<?php } else {?>
		<p class="my-4 text-center"><a style="float:none;" href="<?=base_url("atithya/user/booking_cancel/".$obid);?>" class="btn btn-danger w-100" onclick="return confirm('Do you really want to raise cancellation request for this booking?')">Cancel Booking</a></p>
		<?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- ======= Footer ======= -->
<?php include 'footer.php';?>
<script type="text/javascript">    
 
 function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("gstsection");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "flex";
  } else {
    text.style.display = "none";
  }
} 
</script>
<script type="text/javascript">
  
  $(document).ready( function () {
    /*$('#myTbls').DataTable({
         rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    });*/
} );
</script>
</body>
</html>