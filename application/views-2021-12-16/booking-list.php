<?php //p(json_decode($datalist));?>
<?php include 'head.php';?>
<!-- ======= Header ======= --> 
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
   
<!-- End Header -->
<main id="hero" class="bg-white">
  
  <section class="mamber-card">
    <div class="container search-box">
      <div class="row">
          <div class="col-lg-12">
          <div class="section-title">
            <p>My Booking List</p>
          </div>
          <table class="table table-striped table-bordered" cellpadding="0" cellspacing="0" width="100%">
  <thead class="thead-dark">
   <tr>
      <th scope="col">#</th>
	  <th scope="col">Booking No</th>
	  <th scope="col">Booking Date</th>
	  <th scope="col">Service Date & Time</th>
	  
	  <th scope="col">Service Category</th>
	  <th scope="col">Service Type</th>
	  <th scope="col">Service Airport</th>
	  <th scope="col">Travel Sector</th>
	   <th scope="col">Arrival Flight</th>
	   <th scope="col">Departure Flight</th>
      <th scope="col">From Airport</th>
      <th scope="col">To Airport</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 <?php if(!empty($datalist)){
	$allsearchdata =  json_decode($datalist);
	//p($allsearchdata); exit;
	if(!empty($allsearchdata->message) and $allsearchdata->message=='data found.'){
		//echo count($allsearchdata->datalist);
		if(!empty($allsearchdata->datalist)){
			$i=1;
			foreach($allsearchdata->datalist as $val){ ?>
     <tr>
      <td><?=$i?></td>
	  <td><?=$val->itinerary_no; ?></td>
	   <td><?=$val->date_order; ?></td>
	   <td><?=$val->date; ?></td>
	   <td><?=ucfirst(str_replace('_',' ',$val->service_category)); ?></td>
	  <td><?php $service_type = $val->service_type_id;
	  echo !empty($service_type[1])?$service_type[1]:'NA';
	  ?>
	  </td>
	  <td><?php $airport_location = $val->airport_location_id;
	  echo !empty($airport_location[1])?$airport_location[1]:'NA';
	  ?>
	  </td>
	  <td><?php $airport_terminal = $val->airport_terminal_id;
	  echo !empty($airport_terminal[1])?$airport_terminal[1]:'NA';
	  ?>
	  </td>
       
      <td> <?php $arrival_flight = $val->arrival_flight_id;
	  echo !empty($arrival_flight[1])?$arrival_flight[1]:'NA';
	  ?></td>
	  <td> <?php $departure_flight = $val->departure_flight_id;
	  echo !empty($departure_flight[1])?$departure_flight[1]:'NA';
	  ?></td>
      <td><?php $from_airport = $val->from_airport_id;
	  echo !empty($from_airport[1])?$from_airport[1]:'NA';
	  ?></td>
      <td><?php $to_airport = $val->to_airport_id;
	  echo !empty($to_airport[1])?$to_airport[1]:'NA';
	  ?></td>
      
	  <td> <a  href="<?=base_url('user/bookingdetail/'.$val->id);?>" class="btn btn-primary float-end btn-sm small">Details</a></td>
    </tr> 
			<?php  $i++;  }}}}  ?>
  </tbody>
</table>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- ======= Footer ======= -->
<?php include 'footer.php';?>
</body>
</html>