<html>
<head>
<title>Encalm Invoice</title>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
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
	$arrival_airline = !empty($mainData->datalist[0]->arrival_airline_id)?(array)$mainData->datalist[0]->arrival_airline_id:array(); 
	$departure_airline = !empty($mainData->datalist[0]->departure_airline_id)?(array)$mainData->datalist[0]->departure_airline_id:array(); 
	$arrival_flight = !empty($mainData->datalist[0]->arrival_flight_id)?(array)$mainData->datalist[0]->arrival_flight_id:array(); 
	$departure_flight = !empty($mainData->datalist[0]->departure_flight_id)?(array)$mainData->datalist[0]->departure_flight_id:array(); 
	$airport_terminal = !empty($mainData->datalist[0]->airport_terminal_id)?$mainData->datalist[0]->airport_terminal_id:array(); 
	$airport_location = !empty($mainData->datalist[0]->airport_location_id)?$mainData->datalist[0]->airport_location_id:array(); 
	$from_airport = !empty($mainData->datalist[0]->from_airport_id)?$mainData->datalist[0]->from_airport_id:array(); 
	$to_airport = !empty($mainData->datalist[0]->to_airport_id)?$mainData->datalist[0]->to_airport_id:array();
	$obid = !empty($mainData->datalist[0]->id)?$mainData->datalist[0]->id:0;

	$service_category = !empty($mainData->datalist[0]->service_category)?$mainData->datalist[0]->service_category:array(); 

	$inv_status = !empty($mainData->datalist[0]->invoice_status)?$mainData->datalist[0]->invoice_status:'';

	//p($allsearchdata);
		  }
	  ?> 
<body style="font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 11px; padding: 0px 0px; margin: 0px 0px; line-height: 110%; color: #464646;">
<div style="width: 700px; margin: 10px auto; font-size: 11px;">
<? //p(json_decode($datalist));?>
    <div style="background: #152248; color: #ffffff;">
	 
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td style="padding: 8px 8px;"><img src="<?=base_url('atithya_assets/invoice/')?>assets/images/logowhite.png" width="" height="100"></td>
                <td style="padding: 8px 8px; text-align: right;"><img src="<?=base_url('atithya_assets/invoice/')?>assets/images/atithyalogo.png" width="" height="100"></td>
            </tr>
        </table>
    </div>
    <div style="content">
        <table style="font-size: 11px;" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td style="padding: 0px 0px;">
                        <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px; text-align: center;" width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <th style="padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">ENCALM HOSPITALITY PVT. LTD.   </th>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px 0px;">
                        <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                               <tr>
									<th style="padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
									<?php //if($param==2){?>
									<?php if($inv_status=='invoiced'){?>
									Invoice No: <?php echo !empty($mainData->datalist[0]->invoice_no)?$mainData->datalist[0]->invoice_no:'NA'; ?>
									<?php } else {?>
									Confirmation No: <?php echo !empty($mainData->datalist[0]->itinerary_no)?$mainData->datalist[0]->itinerary_no:'NA'; ?>
									<?php }  ?>
									</th>
                                    <th style="padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
									
									<?php //if($param==2){?>
									<?php if($inv_status=='invoiced'){?>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tax Invoice&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
									<?php } else {?>
									SERVICE CONFIRMATION VOUCHER FOR : <?php echo strtoupper($service_category); ?>
									<?php }  ?>
									
									</th>
                                    <th style="padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
									<?php //if($param==2){?>
									<?php if($inv_status=='invoiced'){?>
									Invoice Date: <?php echo !empty($mainData->datalist[0]->invoice_date)?date('D, d-M-Y',strtotime($mainData->datalist[0]->invoice_date)):'NA'; ?>
									<?php } else {?>
									Date:<?php echo !empty($mainData->datalist[0]->date_order)?date('D, d-M-Y',strtotime($mainData->datalist[0]->date_order)):'NA'; ?>
									<?php }  ?>
									
									
									</th>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px 0px;">
                        <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td width="50%" style="padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse; vertical-align: top;">
                                        <!--<p style="margin: 3px 0px;">
                                            <strong>To: <?php 
											//$cust_title =!empty($custData->datalist[0]->title)?$custData->datalist[0]->title:array(); 
											//$cust_country =!empty($custData->datalist[0]->country_id)?$custData->datalist[0]->country_id:array(); 

//$ctitle =!empty($cust_title[1])?$cust_title[1]:'';
//$cname = !empty($custData->datalist[0]->name)?$custData->datalist[0]->name:'';
//$cfirst_name=!empty($custData->datalist[0]->first_name)?$custData->datalist[0]->first_name:'';
//$clast_name = !empty($custData->datalist[0]->last_name)?$custData->datalist[0]->last_name:'';
//echo $ctitle.' '.$cname.' '.$cfirst_name.' '.$clast_name;
//echo $ctitle.' '.$cfirst_name.' '.$clast_name;
?></strong>


                                        </p>-->
                                        <p style="margin: 3px 0px;">
                                            To: <?=!empty($custData->datalist[0]->name)?$custData->datalist[0]->name:'NA';?>
                                        </p>
                                        <p style="margin: 3px 0px;">
                                            GST NO: <?=!empty($custData->datalist[0]->vat)?$custData->datalist[0]->vat:'NA';?>
                                        </p>
                                        <p style="margin: 3px 0px;">
                                            Contact: <?=!empty($custData->datalist[0]->mobile)?$custData->datalist[0]->mobile:'';?>
                                        </p>
                                        <p style="margin: 3px 0px;">
                                            Email: <?=!empty($custData->datalist[0]->email)?$custData->datalist[0]->email:'';?>
                                        </p>
                                    </td>
                                    <td width="50%" style="padding: 3px 3px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                    <td width="20%" style="padding: 6px 6px; border: border-collapse: collapse; vertical-align: top;">Address:</td>
                                                    <td width="80%" style="padding: 6px 6px; border: border-collapse: collapse; vertical-align: top;">
                                                        <?=!empty($custData->datalist[0]->street)?$custData->datalist[0]->street:'';?><br>
                                                        <?=!empty($custData->datalist[0]->street2)?$custData->datalist[0]->street2:'';?><br>
                                                        <?=!empty($custData->datalist[0]->city)?$custData->datalist[0]->city:'';?><br>
                                                        <?=!empty($custData->datalist[0]->state_id[1])?$custData->datalist[0]->state_id[1]:'NA';?> &nbsp; <?=!empty($custData->datalist[0]->zip)?$custData->datalist[0]->zip:'NA';?><br>
                                                        <?=!empty($cust_country[1])?$cust_country[1]:''?>
                                                    </td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px 0px;">
                        <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td style="text-align: center; padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">Confirmation No</strong><br>
                                        <small><?php echo !empty($mainData->datalist[0]->itinerary_no)?$mainData->datalist[0]->itinerary_no:'NA'; ?></small>
                                    </td>
                                    <td style="text-align: center; padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">From Airport</strong><br>
                                        <small> <?php echo !empty($from_airport[1])?$from_airport[1]:'';?> </small>
                                    </td>
                                    <td style="text-align: center; padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">To Airport</strong><br>
                                        <small><?php echo !empty($to_airport[1])?$to_airport[1]:'';?></small>
                                    </td>
                                    <td style="text-align: center; padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">Arrival/Departure Airline</strong><br>
                                        <small><?=!empty($arrival_airline[1])?$arrival_airline[1]:'NA';?> /<?=!empty($departure_airline[1])?$departure_airline[1]:'NA';?> </small>
                                    </td>
                                    <td style="text-align: center; padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">Arrival/Departure Flight No.</strong><br>
                                        <small> <?php echo !empty($arrival_flight[1])?$arrival_flight[1]:'NA';?>/<?php echo !empty($departure_flight[1])?$departure_flight[1]:'NA';?> </small>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">Sector of Travel</strong><br>
                                        <small><?=!empty($airport_terminal[1])?$airport_terminal[1]:'';?></small>
                                    </td>
                                    <td style="text-align: center; padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">Service Detail & Terminal</strong><br>
                                        <small><?php echo !empty($mainData->datalist[0]->date)?date('D, d-M-Y',strtotime($mainData->datalist[0]->date)) :''; ?> / <?=!empty($mainData->datalist[0]->service_category)?ucfirst(str_replace('_',' ',$mainData->datalist[0]->service_category)):'';?> / <?=!empty($service_type[1])?$service_type[1]:'';?> </small>
                                    </td>
                                    <td style="text-align: center; padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">Booking Date & Time(IST)</strong><br>
                                        <small><?php echo !empty($mainData->datalist[0]->date_order)?date('D, d-M-Y H:i',strtotime($mainData->datalist[0]->date_order)):'NA'; ?></small>
                                    </td>
                                    <td style="text-align: center; padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="40%" colspan="2">
                                        <strong style="text_primary">Flight Date & Time(Local Time)</strong><br>
                                        <small><?php echo !empty($mainData->datalist[0]->date )?date('D, d-M-Y',strtotime($mainData->datalist[0]->date)) :'NA'; ?> <?php if($service_type[1] == 'Departure') echo !empty($mainData->datalist[0]->dtime)?$mainData->datalist[0]->dtime:''; else echo !empty($mainData->datalist[0]->atime)?$mainData->datalist[0]->atime:''; ?>  Hrs (IST)</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="60%" colspan="3" style="padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <strong style="text_primary">PAYMENT REFERENCE: <?php echo strtoupper(!empty($mainData->datalist[0]->payment_method)?$mainData->datalist[0]->payment_method:'NA'); ?></strong>
                                    </td>
                                    <td style="text-align: center; padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="40%" colspan="2">
                                        <strong style="text_primary">Service Date & Time(Local Time)</strong><br>
                                        <small><?php echo !empty($mainData->datalist[0]->commitment_date )?date('D, d-M-Y H:i',strtotime($mainData->datalist[0]->commitment_date)) :'NA'; ?>  Hrs (IST)</small>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px 0px;">
                        <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <th width="8%" style="padding: 3px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">Guests</th>
                                    <th width="24%" style="padding: 3px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">Name</th>
                                    
                                    <th width="16%" style="padding: 3px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">Class</th>
                                    <th width="16%" style="padding: 3px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">Age (yrs.)</th>
									<th width="16%" style="padding: 3px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">PNR No.</th>
                                    <th width="16%" style="padding: 3px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">Identity Proof</th>
                                </tr>
								<?php if(!empty($guestData) and !empty($guestData->datalist)){
								  $g = 1;
								  foreach($guestData->datalist as $guest){
								  ?>
                                <tr>
                                    <td style="text-align: center; padding: 3px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;"><small><?=$g?></small></td>
                                    <td style="text-align: center; padding: 3px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;"><small><?=!empty($guest->first_name)?$guest->first_name.' '.$guest->last_name:''?></small></td>
                                    
                                    <td style="text-align: center; padding: 3px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;"><small><?=!empty($guest->class_type)?ucfirst($guest->class_type):''?></small></td>
                                    <td style="text-align: center; padding: 3px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;"><small><?=!empty($guest->age)?$guest->age:''?></small></td>
									<td style="text-align: center; padding: 3px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;"><small><?=!empty($guest->pnr_no)?$guest->pnr_no:''?></small></td>
                                    <td style="text-align: center; padding: 3px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;"><small><?=!empty($guest->passport)?$guest->passport:''?></small></td>
                                </tr>
								<?php $g++;}}?>
                                
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td style="padding: 3px 6px; border: solid 1px #cda45e; border-top: solid 0px #cda45e; border-collapse: collapse; background: #cda45e; color: #ffffff;">Name to be displayed on Placard : <?php echo !empty($mainData->datalist[0]->placard_name)?$mainData->datalist[0]->placard_name:'NA'; ?></td>
                                    <td style="padding: 3px 6px; border: solid 1px #cda45e; border-top: solid 0px #cda45e; border-collapse: collapse; background: #cda45e; color: #ffffff;">Placard Guest No : <?php echo !empty($mainData->datalist[0]->country_code)?$mainData->datalist[0]->country_code:'NA'; ?>-<?php echo !empty($mainData->datalist[0]->contact_number)?$mainData->datalist[0]->contact_number:'NA'; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <th style="font-size: 11px; background: #152248; color: #ffffff; padding: 3px 8px; text-align: left;">Details of Atithya Services:</th>
                </tr>
                </tbody>
            </table>
                         <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px; text-align: center;" width="100%" cellspacing="0" cellpadding="0">
                             <tbody>
                                 <tr>
                                     <th width="80%" style="text-align: left; padding: 3px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        Description
                                     </th>
                                     <th width="20%" style="text-align: right; padding: 3px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        Amount (Rs.)
                                     </th>
                                 </tr>
                                    </tbody>
                                </table>
								 <?php $NetAmount=0;if(!empty($itemData) and !empty($itemData->datalist)){ 
								$NetAmount = array_sum(array_column($itemData->datalist,'price_subtotal'));
								foreach($itemData->datalist as $item){?>  
                                <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px; text-align: center;" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                 <tr>
                                     <td width="80%" style="text-align: left; padding: 3px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <?php $product = $item->product_id;
						echo !empty($product[1])?$product[1]:'NA'; 
						echo "&nbsp;".$item->product_uom_qty.' Qty';
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[HSN/SAC: 996331]";
					?>
                                     </td>
                                     <td width="20%" style="text-align: right; padding: 3px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        &#8377;<?=$item->price_subtotal?>
                                     </td>
                                 </tr>
                                    </tbody>
                                </table>
                                 <?php } }?> 
                                <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px; text-align: center;" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                 <tr>
                                     <td width="80%" style="text-align: right; padding: 3px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <strong>Net Amount</strong>
                                     </td>
                                     <td width="20%" style="text-align: right; padding: 3px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        &#8377;<?php echo $NetAmount; ?>
                                     </td>
                                 </tr>
                                    </tbody>
                                </table>
                                <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px; text-align: center;" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
								 <tr>
                                     <td width="80%" style="text-align: right; padding: 3px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <strong>SGST (9%)</strong>
                                     </td>
                                     <td width="20%" style="text-align: right; padding: 3px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        &#8377;<?=$sgst=sprintf ("%.2f",(($NetAmount*9)/100),2)?> 
                                     </td>
                                 </tr>
                                    </tbody>
                                </table>
                                <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px; text-align: center;" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
								 <tr>
                                     <td width="80%" style="text-align: right; padding: 3px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <strong>CGST (9%)</strong>
                                     </td>
                                     <td width="20%" style="text-align: right; padding: 3px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        &#8377;<?=$cgst=sprintf ("%.2f",(($NetAmount*9)/100),2)?>
                                     </td>
                                 </tr>
                                    </tbody>
                                </table>
                                <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px; text-align: center;" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                 <tr>
                                     <td width="80%" style="text-align: right; padding: 3px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <strong>Total</strong>
                                     </td>
                                     <td width="20%" style="text-align: right; padding: 3px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                       &#8377;<?php echo $sgst+$cgst+$NetAmount; ?>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
            <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                <!--<tr>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                         <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellspacing="0" cellpadding="0">
                             <tbody>
                                 <tr>
                                    <th style="text-align: left padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <big>Government Taxes:</big>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                         <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellspacing="0" cellpadding="0">
                             <tbody>
                                 <tr>
                                     <th width="14%" style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">CGST Rate</th>
                                     <th width="14%" style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">CGST Amt.</th>
                                     <th width="14%" style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">SGST Rate</th>
                                     <th width="14%" style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">SGST Amt.</th>
                                     <th width="14%" style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">IGST Rate</th>
                                     <th width="14%" style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">IGST Amt.</th>
                                     <th width="14%" style="text-align: right; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">Total taxes</th>
                                 </tr>
                                 <tr>
                                     <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">9.0 %</td>
                                     <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;"><?=$sgst=sprintf ("%.2f",(($NetAmount*9)/100),2)?> </td>
                                     <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">9.0 %</td>
                                     <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;"><?=$cgst=sprintf ("%.2f",(($NetAmount*9)/100),2)?> </td>
                                     <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">0.00</td>
                                     <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">0.00</td>
                                     <td style="text-align: right; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">&#8377;<?=$sgst+$cgst?> </td>
                                 </tr>
                                 <tr>
                                     <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" colspan="6"><strong>Grand Total</strong></td>
                                     <td style="text-align: right; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">&#8377;<?php echo $sgst+$cgst+$NetAmount; ?></td>
                                 </tr>
                             </tbody>
                         </table>
                    </td>
                </tr>-->
                <tr>
                    <td>
                        <table style="font-size: 11px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td style="text-align: center; padding: 6px 6px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <p style="margin: 2px 0px;"><strong>ENCALM HOSPITALITY PVT. LTD.</strong></p>
                                        <p style="margin: 2px 0px;">GST: 07AAGCE6783M1ZZ</p>
                                        <p style="margin: 2px 0px;"><strong>Place of Supply: New Delhi</strong></p>
                                        <p style="margin: 2px 0px;"><b>Registered Address:</b> Plot No 89 LGF, Sector 44, Gurgaon 122003, Haryana, India</p>
                                        <p style="margin: 2px 0px;">Terms and Conditons of services as provided on <a target="_blank" href="https://www.encalm.com">www.encalm.com</a> shall apply</p>
                                        <p style="margin: 2px 0px;">For all booking queries please feel to write to us on <a href="mailto:guest.services@encalm.com">guest.services@encalm.com</a></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>