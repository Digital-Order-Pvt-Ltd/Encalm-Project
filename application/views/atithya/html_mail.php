<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Summary</title>
  <style>
        /* Add your styles here */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
  <section class="mamber-card-checkout">
    <div class="container search-box">
      <div class="row">
        
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
          }
          ?>
          <table class="table table-striped table-bordered">
            <tbody>
                <tr>
                    <td><i class="fas fa-couch"></i>&nbsp;Service Date &amp; Time</td>
                    <td><span class="badge badge-primary badge-pill text-dark"><?= !empty($mainData->datalist[0]->commitment_date) ? date('D, d-M-Y H:i', strtotime($mainData->datalist[0]->commitment_date)) : '0'; ?> Hrs (IST)</span></td>
                </tr>
                <tr>
                    <td><i class="fas fa-couch"></i>&nbsp;Service Category</td>
                    <td><span class="badge badge-primary badge-pill text-dark"><?= !empty($mainData->datalist[0]->$collection_remarks) ? ucfirst(str_replace('_', ' ', $mainData->datalist[0]->service_category)) : ''; ?></span></td>
                </tr>
                <tr>
                    <td><i class="fas fa-couch"></i>&nbsp;Service Duration</td>
                    <td><span class="badge badge-primary badge-pill text-dark"><?= !empty($mainData->datalist[0]->service_duration_id[1]) ? $mainData->datalist[0]->service_duration_id[1] : ''; ?></span></td>
                </tr>
                <tr>
                    <td><i class="fas fa-couch"></i>&nbsp;Service Airport</td>
                    <td><span class="badge badge-primary badge-pill text-dark"><?= !empty($airport_location[1]) ? $airport_location[1] : ''; ?></span></td>
                </tr>
                <tr>
                    <td><i class="fas fa-couch"></i>&nbsp;Travel Sector</td>
                    <td><span class="badge badge-primary badge-pill text-dark"><?= !empty($airport_terminal[1]) ? $airport_terminal[1] : ''; ?></span></td>
                </tr>
                <tr>
                    <td><i class="fas fa-couch"></i>&nbsp;Travel Date</td>
                    <td><span class="badge badge-primary badge-pill text-dark"><?= !empty($mainData->datalist[0]->date) ? date('D, d-M-Y', strtotime($mainData->datalist[0]->date)) : 'NA'; ?></span></td>
                </tr>
                <tr>
                    <td><i class="fas fa-users"></i>&nbsp;Number of Guests</td>
                    <td><span class="badge badge-primary badge-pill text-dark"><?php echo $a1 = !empty($mainData->datalist[0]->no_of_adult) ? $mainData->datalist[0]->no_of_adult : '0'; ?> Adult</span></td>
                </tr>
                <tr>
                    <td><i class="fas fa-couch"></i>&nbsp;Customer</td>
                    <td>
                        <span class="badge badge-primary badge-pill text-dark">
                            <?php
                            $cust_title = !empty($custData->datalist[0]->title) ? $custData->datalist[0]->title : array();
                            $ctitle = !empty($cust_title[1]) ? $ctitle[1] : '';
                            $cname = !empty($custData->datalist[0]->name) ? $custData->datalist[0]->name : '';
                            $cfirst_name = !empty($custData->datalist[0]->first_name) ? $custData->datalist[0]->first_name : '';
                            $clast_name = !empty($custData->datalist[0]->last_name) ? $custData->datalist[0]->last_name : '';
                            echo $ctitle . ' ' . $cname;
                            ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td><i class="fas fa-couch"></i>&nbsp;Mobile</td>
                    <td><span class="badge badge-primary badge-pill text-dark"><?= !empty($custData->datalist[0]->mobile) ? $custData->datalist[0]->mobile : ''; ?></span></td>
                </tr>
                <!-- ... (Other rows you provided) -->
            </tbody>
        </table>

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
              <?php 
                $therapist = array('first'=>'Male','business'=>'Female');
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
            <div class="card-header">Booking Summary</div> 
            <div class="charges table-responsive" id="setOrderSummaryData">
              <?php if(!empty($mainData)){
                if(!empty($mainData->message) and $mainData->message=='data found.'){?>
                  <table width="100%" border="0" cellspacing="0" cellpadding="10" class="table table-hover m-0">
                    <tbody>
                      <!-- ... (Booking summary rows you provided) -->
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
          
        </div>
      </div>
    </div>
  </section>
</body>
</html>
