<html>
<head>
<title>Encalm Invoice</title>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       .hyderabad-section h3,.delhi-section h3,.goa-section h3{
            color:#cda45e;
            font-weight: 600;
            font-size: 16px;
            padding:5px 0px;
       }
        .custom-table {
            border-collapse: separate;
            border-spacing: 0;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            overflow: hidden;
            background-color: #152248;
            height: 300px;
        }

        .custom-table th,
        .custom-table td {
            text-align: left;
            border-bottom: 1px solid #152248;
            ;
        }

        .custom-table td {
            padding: 0px;
        }

        .custom-table th {
            padding: 15px;
            text-align: center;
        }

        .custom-table th:first-child,
        .custom-table td:first-child {
            border-left: 1px solid #152248;
            ;
        }

        .custom-table th:first-child {
            border-top-left-radius: 10px;
            background-color: #152248;
            padding: 0px;
            border: none
        }

        .custom-table th {
            padding: 0px;
        }

        .img-international {
            border-radius: 50%;
        }

        .custom-table th:last-child,
        .custom-table td:last-child {
            border-right: 1px solid #152248;
            ;
        }

        .custom-table th,
        .custom-table td {
            border-right: 1px solid #152248;
            ;
        }

        .custom-table td {
            font-size: 10px;
        }

        .custom-table th:last-child {
            border-right: 1px solid #152248;
            ;
        }

        .custom-table tbody tr:first-child td {
            font-weight: bold;
            font-size: 12px;
            padding: 0px;
            text-align: center;
        }

        .custom-table tbody tr:first-child td:first-child {
            border-top-left-radius: 30px;
            font-size: 14px;
            padding-left: 25px;
            text-align: left;
        }

        .custom-table tbody tr:first-child td:first-child::before {
            content: '';
        }

        .custom-table tbody td:first-child {
            position: relative;
            padding-left: 28px;

        }

        .custom-table tbody td:first-child::before {
            content: '\2022';
            color: darkblue;
            font-size: 16px;
            position: absolute;
            left: 15px;
            top: 40%;
            transform: translateY(-50%);
        }
        .term-condition li{
            font-size:11px;
        }

        .custom-table tbody td:not(:first-child) {
            position: relative;
        }

        .red-circle::before {
            content: '';
            background-color: #ff8c00;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .transit-services {
            background-color: #152248;
            color: #fff;
            border-radius: 25px;
            height: 280px;
        }

        .transit-services p {
            text-align: center;
        }
        .transit-services ul li{
            padding: 0px 0px 2px 0px;
            font-size: 11px;

        }
    </style>
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
<body style="font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 13px; padding: 0px 0px; margin: 0px 0px; line-height: 130%; color: #464646;">
<div style="width: 800px; margin: 60px auto; font-size: 13px;">
<? //p(json_decode($datalist));?>
    <div style="background: #152248; color: #ffffff;">
	<form action="<?=base_url('atithya/user/invoice/'.$mainData->datalist[0]->itinerary_no.'/'.$param);?>"  method="post"><input type="submit" name="pdf" value="Generate Pdf"> </form>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td style="padding: 10px 10px;"><img src="<?=base_url('atithya_assets/invoice/')?>assets/images/logowhite.png" width="" height="100"></td>
                <td style="padding: 10px 10px; text-align: right;"><img src="<?=base_url('atithya_assets/invoice/')?>assets/images/atithyalogo.png" width="" height="100"></td>
            </tr>
        </table>
    </div>
    <div style="content">
        <table style="font-size: 13px;" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td style="padding: 0px 0px;">
                        <table style="font-size: 13px; width: 100%; border-collapse: collapse; margin: 0px 0px; text-align: center;" width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <th style="padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">ENCALM HOSPITALITY PVT. LTD.   </th>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px 0px;">
                        <table style="font-size: 13px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
									<th style="padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
									<?php //if($param==2){?>
									<?php if($inv_status=='invoiced'){?>
									Invoice No: <?php echo !empty($mainData->datalist[0]->invoice_no)?$mainData->datalist[0]->invoice_no:'NA'; ?>
									<?php } else {?>
									Confirmation No: <?php echo !empty($mainData->datalist[0]->itinerary_no)?$mainData->datalist[0]->itinerary_no:'NA'; ?>
									<?php }  ?>
									</th>
                                    <th style="padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
									
									<?php //if($param==2){?>
									<?php if($inv_status=='invoiced'){?>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tax Invoice&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
									<?php } else {?>
									SERVICE CONFIRMATION VOUCHER FOR : <?php echo strtoupper($service_category); ?>
									<?php }  ?>
									
									</th>
                                    <th style="padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
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
                        <table style="font-size: 13px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td width="50%" style="padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse; vertical-align: top;">
                                        <p style="margin: 3px 0px;">
                                            <strong>To: <?php 
											$cust_title =!empty($custData->datalist[0]->title)?$custData->datalist[0]->title:array(); 
											$cust_country =!empty($custData->datalist[0]->country_id)?$custData->datalist[0]->country_id:array(); 

$ctitle =!empty($cust_title[1])?$cust_title[1]:'';
$cname = !empty($custData->datalist[0]->name)?$custData->datalist[0]->name:'';
$cfirst_name=!empty($custData->datalist[0]->first_name)?$custData->datalist[0]->first_name:'';
$clast_name = !empty($custData->datalist[0]->last_name)?$custData->datalist[0]->last_name:'';
//echo $ctitle.' '.$cname.' '.$cfirst_name.' '.$clast_name;
echo $ctitle.' '.$cfirst_name.' '.$clast_name;
?></strong>


                                        </p>
                                        <p style="margin: 3px 0px;">
                                            Company Name: <?=!empty($custData->datalist[0]->name)?$custData->datalist[0]->name:'NA';?>
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
                                        <table style="font-size: 13px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                    <td width="20%" style="padding: 8px 8px; border: border-collapse: collapse; vertical-align: top;">Address:</td>
                                                    <td width="80%" style="padding: 8px 8px; border: border-collapse: collapse; vertical-align: top;">
                                        <?php 
                                         if(!empty($custData->datalist[0]->state_id[1]) and $custData->datalist[0]->state_id[0]=="586"){
                                         $delhi = 1;}
                                         else{
                                             $delhi=0;
                                             $ap = 1;
                                         }
                                         ?>
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
                        <table style="font-size: 13px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">ETID</strong><br>
                                        <small><?php echo !empty($mainData->datalist[0]->itinerary_no)?$mainData->datalist[0]->itinerary_no:'NA'; ?></small>
                                    </td>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">From Airport</strong><br>
                                        <small> <?php echo !empty($from_airport[1])?$from_airport[1]:'';?> </small>
                                    </td>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">To Airport</strong><br>
                                        <small><?php echo !empty($to_airport[1])?$to_airport[1]:'';?></small>
                                    </td>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">Arrival/Departure Airline</strong><br>
                                        <small><?=!empty($arrival_airline[1])?$arrival_airline[1]:'NA';?> /<?=!empty($departure_airline[1])?$departure_airline[1]:'NA';?> </small>
                                    </td>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">Arrival/Departure Flight No.</strong><br>
                                        <small> <?php echo !empty($arrival_flight[1])?$arrival_flight[1]:'NA';?>/<?php echo !empty($departure_flight[1])?$departure_flight[1]:'NA';?> </small>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">Sector of Travel</strong><br>
                                        <small><?=!empty($airport_terminal[1])?$airport_terminal[1]:'';?></small>
                                    </td>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">Service Detail & Terminal</strong><br>
                                        <small><?php echo !empty($mainData->datalist[0]->date)?date('D, d-M-Y',strtotime($mainData->datalist[0]->date)) :''; ?> / <?=!empty($mainData->datalist[0]->service_category)?ucfirst(str_replace('_',' ',$mainData->datalist[0]->service_category)):'';?> / <?=!empty($service_type[1])?$service_type[1]:'';?> </small>
                                    </td>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="20%">
                                        <strong style="text_primary">Booking Date & Time(IST)</strong><br>
                                        <small><?php echo !empty($mainData->datalist[0]->date_order)?date('D, d-M-Y H:i',strtotime($mainData->datalist[0]->date_order)):'NA'; ?></small>
                                    </td>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="40%" colspan="2">
                                        <strong style="text_primary">Flight Date & Time(Local Time)</strong><br>
                                        <small><?php echo !empty($mainData->datalist[0]->date )?date('D, d-M-Y',strtotime($mainData->datalist[0]->date)) :'NA'; ?> <?php if($service_type[1] == 'Departure') echo !empty($mainData->datalist[0]->dtime)?$mainData->datalist[0]->dtime:''; else echo !empty($mainData->datalist[0]->atime)?$mainData->datalist[0]->atime:''; ?> Hrs (IST)</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="60%" colspan="3" style="padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <strong style="text_primary">ONLINE PAYMENT REFERENCE: <?php echo strtoupper(!empty($mainData->datalist[0]->payment_method)?$mainData->datalist[0]->payment_method:''); ?></strong>
                                    </td>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" width="40%" colspan="2">
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
                        <table style="font-size: 13px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <th width="16%" style="padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">Guest Details</th>
                                    <th width="16%" style="padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">Name</th>
                                    
                                    <th width="16%" style="padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">Class</th>
                                    <th width="16%" style="padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">Age (yrs.)</th>
									<th width="16%" style="padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">PNR No.</th>
                                    <th width="16%" style="padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">Identity Proof</th>
                                </tr>
								<?php if(!empty($guestData) and !empty($guestData->datalist)){
								  $g = 1;
								  foreach($guestData->datalist as $guest){
								  ?>
                                <tr>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;"><small><?=$g?></small></td>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;"><small><?=!empty($guest->first_name)?($guest->first_name.' '.$guest->last_name):''?></small></td>
                                    
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;"><small><?=!empty($guest->class_type)?ucfirst($guest->class_type):''?></small></td>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;"><small><?=!empty($guest->age)?$guest->age:''?></small></td>
									<td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;"><small><?=!empty($guest->pnr_no)?$guest->pnr_no:''?></small></td>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;"><small><?=!empty($guest->passport)?$guest->passport:''?></small></td>
                                </tr>
								<?php $g++;}}?>
                                
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="font-size: 13px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td style="padding: 8px 8px; border: solid 1px #cda45e; border-top: solid 0px #cda45e; border-collapse: collapse; background: #cda45e; color: #ffffff;">Name to be displayed on Placard : <?php echo !empty($mainData->datalist[0]->placard_name)?$mainData->datalist[0]->placard_name:'NA'; ?></td>
                                    <td style="padding: 8px 8px; border: solid 1px #cda45e; border-top: solid 0px #cda45e; border-collapse: collapse; background: #cda45e; color: #ffffff;">Placard Guest No : <?php echo !empty($mainData->datalist[0]->country_code)?$mainData->datalist[0]->country_code:'NA'; ?>-<?php echo !empty($mainData->datalist[0]->contact_number)?$mainData->datalist[0]->contact_number:'NA'; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <th style="font-size: 13px; background: #152248; color: #ffffff; padding: 10px 10px; text-align: left;">Details of Atithya Services:</th>
                </tr>
                <tr>
                    <td>
                         <table style="font-size: 13px; width: 100%; border-collapse: collapse; margin: 0px 0px; text-align: center;" width="100%" cellspacing="0" cellpadding="0">
                             <tbody>
                                 <tr>
                                     <th width="80%" style="text-align: left; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        Description
                                     </th>
                                     <th width="20%" style="text-align: right; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        Amount (Rs.)
                                     </th>
                                 </tr>
								 <?php $NetAmount=0;if(!empty($itemData) and !empty($itemData->datalist)){ 
								$NetAmount = array_sum(array_column($itemData->datalist,'price_subtotal'));
								foreach($itemData->datalist as $item){?>  
                                 <tr>
                                     <td style="text-align: left; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <?php $product = $item->product_id;
						echo !empty($product[1])?$product[1]:'NA'; 
						echo "&nbsp;".$item->product_uom_qty.' Qty';
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[HSN/SAC: 996331]";
					?>
                                     </td>
                                     <td style="text-align: right; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        &#8377;<?=$item->price_subtotal?>
                                     </td>
                                 </tr>
                                 <?php } }?> 
                                 <tr>
                                     <td style="text-align: right; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <strong>Net Amount</strong>
                                     </td>
                                     <td style="text-align: right; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        &#8377;<?php echo $NetAmount; ?>
                                     </td>
                                 </tr>
                                 
                                 
								 <tr>
                                     <td style="text-align: right; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <strong>
                                        <?php 
                                        if (($delhi==1) and ($airport_location=='8008')){
                                            echo "SGST (9%)";
                                        }
                                        else if (($delhi!=1) and ($airport_location=='8008')){
                                            echo "SGST (9%)";
                                        }
                                        else if (($delhi==1) and ($airport_location!='8008')){
                                        echo "SGST (9%)";
                                        }
                                        else if (($ap==1) and ($airport_location!='8008')){
                                        echo "IGST (18%)";
                                        }
                                        else if (($ap!=1) and ($airport_location!='8008')){
                                        echo "IGST (18%)";
                                        }
                                        else{
                                            echo "IGST (18%)";
                                        }
                                           
                                           ?> 
                                            </strong>
                                     </td>
                                     <td style="text-align: right; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                         <?php
                                             if ($delhi==1){
                                                 ?>
                                             
                                        &#8377;<?=$sgst=sprintf ("%.2f",(($NetAmount*9)/100),2)?> 
                                        
                                        <?php 
                                             }
                                             else{
                                             ?>
                                             
                                              &#8377;<?=$igst=sprintf ("%.2f",(($NetAmount*18)/100),2)?> 
                                              <?php
                                             }?>
                                     </td>
                                 </tr>
								 <tr>
                                     <td style="text-align: right; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <strong>
                                            <?php
                                             if (($delhi==1) and ($airport_location=='8008')){
                                            echo "CGST (9%)";
                                        }
                                        else if (($delhi!=1) and ($airport_location=='8008')){
                                            echo "CGST (9%)";
                                        }
                                        else if (($delhi==1) and ($airport_location!='8008')){
                                        echo "CGST (9%)";
                                        }
                                        else if (($ap==1) and ($airport_location!='8008')){
                                        //echo "IGST (18%)";
                                        }
                                        else if (($ap!=1) and ($airport_location!='8008')){
                                       // echo "IGST (18%)";
                                        }
                                        else{
                                           // echo "IGST (18%)";
                                        }
                                           
                                           ?> 
                                           </strong>
                                     </td>
                                     <td style="text-align: right; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                         <?php 
                                         if($delhi==1){
                                             ?>
                                         
                                        &#8377;<?=$cgst=sprintf ("%.2f",(($NetAmount*9)/100),2)?>
                                        <?php 
                                         }
                                         ?>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td style="text-align: right; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <strong>Total</strong>
                                     </td>
                                     <td style="text-align: right; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        
                                         
                                       &#8377;<?php echo $sgst+$cgst+$igst+$NetAmount; ?>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                    </td>
                </tr>
                <tr>
                    <td>
                         <table style="font-size: 13px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellspacing="0" cellpadding="0">
                             <tbody>
                                 <tr>
                                    <th style="text-align: left padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <big>Government Taxes:</big>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                         <table style="font-size: 13px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellspacing="0" cellpadding="0">
                             <tbody>
                                 <tr>
                                     <th width="14%" style="text-align: center; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">CGST Rate</th>
                                     <th width="14%" style="text-align: center; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">CGST Amt.</th>
                                     <th width="14%" style="text-align: center; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">SGST Rate</th>
                                     <th width="14%" style="text-align: center; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">SGST Amt.</th>
                                     <th width="14%" style="text-align: center; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">IGST Rate</th>
                                     <th width="14%" style="text-align: center; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">IGST Amt.</th>
                                     <th width="14%" style="text-align: right; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">Total taxes</th>
                                 </tr>
                                 <tr>
                                     <td style="text-align: center; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                         <?php
                                         if (($delhi==1) and ($airport_location=='8008')){
                                           // echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                           echo "9%";
                                        }
                                        else if (($delhi!=1) and ($airport_location=='8008')){
                                          //  echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                          echo "9%";
                                        }
                                        else if (($delhi==1) and ($airport_location!='8008')){
                                       // echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                       echo "9%";
                                        }
                                        else if (($ap==1) and ($airport_location!='8008')){
                                        //echo "18%";
                                        }
                                        else if (($ap!=1) and ($airport_location!='8008')){
                                      // echo "18%";
                                        }
                                        else{
                                           // echo "IGST (18%)";
                                           //echo "18%";
                                        }
                                        ?>
                                     </td>
                                     <td style="text-align: center; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                         <?php
                                         if (($delhi==1) and ($airport_location=='8008')){
                                            echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                        }
                                        else if (($delhi!=1) and ($airport_location=='8008')){
                                            echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                        }
                                        else if (($delhi==1) and ($airport_location!='8008')){
                                        echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                        }
                                        else if (($ap==1) and ($airport_location!='8008')){
                                        //echo "IGST (18%)";
                                        }
                                        else if (($ap!=1) and ($airport_location!='8008')){
                                       // echo "IGST (18%)";
                                        }
                                        else{
                                           // echo "IGST (18%)";
                                        }
                                         
                                         ?>
                                         </td>
                                     <td style="text-align: center; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                         <?php
                                         if (($delhi==1) and ($airport_location=='8008')){
                                           // echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                           echo "9%";
                                        }
                                        else if (($delhi!=1) and ($airport_location=='8008')){
                                          //  echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                          echo "9%";
                                        }
                                        else if (($delhi==1) and ($airport_location!='8008')){
                                       // echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                       echo "9%";
                                        }
                                        else if (($ap==1) and ($airport_location!='8008')){
                                        //echo "18%";
                                        }
                                        else if (($ap!=1) and ($airport_location!='8008')){
                                      // echo "18%";
                                        }
                                        else{
                                           // echo "IGST (18%)";
                                           //echo "18%";
                                        }
                                        ?>
                                     </td>
                                     <td style="text-align: center; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                         <?php
                                         if (($delhi==1) and ($airport_location=='8008')){
                                            echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                        }
                                        else if (($delhi!=1) and ($airport_location=='8008')){
                                            echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                        }
                                        else if (($delhi==1) and ($airport_location!='8008')){
                                        echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                        }
                                        else if (($ap==1) and ($airport_location!='8008')){
                                        //echo "IGST (18%)";
                                        }
                                        else if (($ap!=1) and ($airport_location!='8008')){
                                       // echo "IGST (18%)";
                                        }
                                        else{
                                           // echo "IGST (18%)";
                                        }
                                        ?>
                                         
                                         </td>
                                     <td style="text-align: center; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                     <?php
                                         if (($delhi==1) and ($airport_location=='8008')){
                                           // echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                           echo "0.0";
                                        }
                                        else if (($delhi!=1) and ($airport_location=='8008')){
                                          //  echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                          echo "0.0";
                                        }
                                        else if (($delhi==1) and ($airport_location!='8008')){
                                       // echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                       echo "0.0";
                                        }
                                        else if (($ap==1) and ($airport_location!='8008')){
                                        echo "18%";
                                        }
                                        else if (($ap!=1) and ($airport_location!='8008')){
                                       echo "18%";
                                        }
                                        else{
                                           // echo "IGST (18%)";
                                           echo "18%";
                                        }
                                        ?>
                                          </td>
                                     <td style="text-align: center; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                         <?php
                                         if (($delhi==1) and ($airport_location=='8008')){
                                           // echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                           echo "0.0";
                                        }
                                        else if (($delhi!=1) and ($airport_location=='8008')){
                                          //  echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                          echo "0.0";
                                        }
                                        else if (($delhi==1) and ($airport_location!='8008')){
                                       // echo $sgst=sprintf ("%.2f",(($NetAmount*9)/100),2);
                                       echo "0.0";
                                        }
                                        else if (($ap==1) and ($airport_location!='8008')){
                                        echo $igst;
                                        }
                                        else if (($ap!=1) and ($airport_location!='8008')){
                                       echo $igst;
                                        }
                                        else{
                                           // echo "IGST (18%)";
                                           echo $igst;
                                        }
                                        ?>
                                     </td>
                                     <td style="text-align: right; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">&#8377;<?=$igst+$cgst+$sgst?> </td>
                                 </tr>
                                 <tr>
                                     <td style="text-align: center; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;" colspan="6"><strong>Grand Total</strong></td>
                                     <td style="text-align: right; padding: 5px 5px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">&#8377;<?php echo $sgst+$cgst+$igst+$NetAmount; ?></td>
                                 </tr>
                             </tbody>
                         </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="font-size: 13px; width: 100%; border-collapse: collapse; margin: 0px 0px;" width="100%" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td style="text-align: center; padding: 8px 8px; border: solid 1px #dedede; border-top: solid 0px #dedede; border-collapse: collapse;">
                                        <p style="margin: 2px 0px;"><strong>ENCALM HOSPITALITY PVT. LTD.</strong></p>
                                        <p style="margin: 2px 0px;">GST: 07AAGCE6783M1ZZ</p>
                                        <p style="margin: 2px 0px;"><strong>Place of Supply: <?php 
                                        if ($airport_location[0] == 8008){ echo "New Delhi";} else { echo "Telangana";}?></strong></p>
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
    <?php
    if($ap==1){?>
    <section class="hyderabad-section border" style="width: 800px; margin: 60px auto; font-size: 13px; ">

       
            <div class="content p-3">
                <h2 class="my-2">Service Inclusions</h2>
                <h3>Rajiv Gandhi International Airport, Hyderabad</h3>
                <div class="row px-3">
                    <h3>International Services</h3>
                    <div class="col-md-6">
                        <table class="table shadow custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                            width="60" height="60"></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>

                                    <td>DEPARTURE</th>
                                    <td>INR 5525</th>
                                    <td>INR 4250 </th>
                                    <td>INR 2550</th>
                                </tr>
                                <tr>
                                    <td>Welcome from Curbside (Drop off point)</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>

                                </tr>
                                <tr>
                                    <td>Porter assistance at baggage belt*</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Assistance at CKIN counters</td>
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
                                    <td>Lounge Access</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Unlimited Rescheduling</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cancellation benefits upto 12 hours of
                                        service time</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>


                    </div>
                    <div class="col-md-6">
                        <table class="table shadow custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                            width="60" height="60"></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>

                                    <td>ARRIVAL</th>
                                    <td>INR 3400</th>
                                    <td>INR 2750</th>
                                    <td>INR 1700</th>
                                </tr>
                                <tr>
                                    <td>Assistance from hand baggage area
                                        of customs</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>

                                </tr>
                                <tr>
                                    <td>Porter assistance at baggage belt*</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Co-ordination with receiving party</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Assistance up till car parking</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Unlimited Rescheduling</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cancellation benefits upto 12 hours of
                                        service time</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ramp access for Vehicles</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                </tr>



                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="row px-3">
                    <h3>Domestic Services</h3>
                    <div class="col">
                        <table class="table shadow custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                            width="60" height="60"></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>

                                    <td>DEPARTURE</th>
                                    <td>INR 3400 </th>
                                    <td>INR 2550 </th>
                                    <td>INR 1700</th>
                                </tr>
                                <tr>
                                    <td>Welcome from Curbside (Drop off point)</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>

                                </tr>
                                <tr>
                                    <td>Porter assistance at baggage belt*</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Assistance at CKIN counters</td>
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
                                    <td>Lounge Access</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Unlimited Rescheduling</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cancellation benefits upto 12 hours of
                                        service time</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>


                    </div>
                    <div class="col">
                        <table class="table shadow custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                            width="60" height="60"></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>

                                    <td>ARRIVAL</th>
                                    <td>INR 3400</th>
                                    <td>INR 2550 </th>
                                    <td>INR 1700 </th>
                                </tr>
                                <tr>
                                    <td>Assistance from the aerobridge or bus
                                        gate as per arrival</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>

                                </tr>
                                <tr>
                                    <td>Porter assistance at baggage belt*</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Co-ordination with receiving party</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Assistance up till car parking</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>

                                <tr>
                                    <td>Unlimited Rescheduling</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cancellation benefits upto 12 hours of
                                        service time</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="row px-3">
                    <h3>Transit Service</h3>
                    <div class="col">
                        <p class="text-center">INTERNATIONAL-DOMESTIC</p>
                        <div class="border  transit-services p-4 ">
                            <p>INR 5100</p>
                            <ul>
                                <li>Assistance from hand baggage area of customs</li>
                                <li>Porter assistance throughout the journey*</li>
                                <li>Assistance at airline CKIN counters</li>
                                <li>Lounge Access (at Dep only)</li>
                                <li>Guidance to designated Boarding gate</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <p class="text-center">DOMESTIC-INTERNATIONAL</p>
                        <div class="border  transit-services p-4">
                            <p>INR 5100</p>
                            <ul>
                                <li>Assistance from the aerobridge or bus gate as per arrival</li>
                                <li>Porter assistance throughout the journey*</li>
                                <li>Assistance at airline CKIN counters</li>
                                <li> Lounge Access (at Dep only)</li>
                                <li> Guidance to designated Boarding gate</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <p class="text-center">DOMESTIC-DOMESTIC</p>
                        <div class="border  transit-services p-4 ">
                            <p>INR 3400
                            </p>
                            <ul>
                                <li>Assistance from the aerobridge or bus gate as per arrival</li>
                                <li>Porter assistance throughout the journey*</li>
                                <li>Assistance at airline CKIN counters</li>
                                <li> Lounge Access (at Dep only)</li>
                                <li> Guidance to designated Boarding gate</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="term-condition my-3">
                    <ul>
                        <li> Surcharge of INR 590 (AI) shall be applicable for any booking requests received within 12
                            hours of service time.</li>
                        <li>The above shared rates are per pax and inclusive of GST @ 18%.</li>
                        <li> All international arrival services would commence only post passengers clear custom.</li>
                        <li> Lounge access for 2 hours is applicable for all places where lounge is written. Additional
                            access beyond this duration will incur charges for direct walk-ins.</li>
                        <li> Service Charges applicable for Child (2-12 years) would be 30% discount on the price
                            applicable for Adult Guests. Infant (0-2 years) will not be charged.</li>
                        <li> The services are subject to government regulations. Prevailing at the time of delivery of
                            service.</li>
                        <li> The services are subject to availability.</li>
                        <li> Buggy services are subject to availability.</li>
                        <li> Please contact your Relationship Manager or Reservations for any request you may have for 5
                            pax and above.</li>
                        <li> Assistance upto 3 bags/ porter only.</li>
                        <li> The lounge facilities are only available at Departure terminals. </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php
    }
    else if($delhi==1){?>
    <section class="delhi-section border" style="width: 800px; margin: 60px auto; font-size: 13px;">
    
            <div class="content p-3">
                <h2 class="my-2">Service Inclusions</h2>
                <h3>INDIRA GANDHI INTERNATIONAL AIRPORT, DELHI</h3>
                <div class="row px-3">
                    <h3>International Services</h3>
                    <div class="col-md-6">
                        <table class="table shadow custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                            width="60" height="60"></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>

                                    <td>DEPARTURE</th>
                                    <td>INR 5525</th>
                                    <td>INR 4250 </th>
                                    <td>INR 2550</th>
                                </tr>
                                <tr>
                                    <td>Welcome from Curbside (Drop off point)</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>

                                </tr>
                                <tr>
                                    <td>Porter assistance at baggage belt*</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Assistance at CKIN counters</td>
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
                                    <td>Gate Transfer on Buggy
                                        (Battery Operated Car*)</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Lounge Access</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Option for personal shopper at Duty Free</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                </tr>
                                <tr>

                                    <td>Unlimited Rescheduling</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cancellation benefits upto 12 hours of
                                        service time</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>


                    </div>
                    <div class="col-md-6">
                        <table class="table shadow custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                            width="60" height="60"></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>

                                    <td>ARRIVAL</th>
                                    <td>INR 6500</th>
                                    <td>INR 5500</th>
                                    <td>INR 4500</th>
                                </tr>
                                <tr>
                                    <td>Assistance from the aerobridge or bus
                                        gate as per arrival
                                    </td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>

                                <tr>
                                    <td>Assistance from hand baggage area
                                        of customs</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>

                                </tr>
                                <tr>
                                    <td>Porter assistance at baggage belt*</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Co-ordination with the receiving party</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Assistance up till car parking</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Gate Transfer on Buggy
                                        (Battery Operated Car*)</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Lounge Access* (Lounge for arrivals
                                        available only at Terminal 3)</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Unlimited Rescheduling</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cancellation benefits upto 12 hours of
                                        service time</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="row px-3">
                    <h3>Domestic Services</h3>
                    <div class="col">
                        <table class="table shadow custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                            width="60" height="60"></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>

                                    <td>DEPARTURE</th>
                                    <td>INR 5525</th>
                                    <td>INR 4250 </th>
                                    <td>INR 2550</th>
                                </tr>
                                <tr>
                                    <td>Welcome from Curbside (Drop off point)</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>

                                </tr>
                                <tr>
                                    <td>Porter assistance at baggage belt*</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Assistance at CKIN counters</td>
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
                                    <td>Lounge Access</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Unlimited Rescheduling</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cancellation benefits upto 12 hours of
                                        service time</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Gate Transfer on Buggy
                                        (Battery Operated Car*)</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>


                    </div>
                    <div class="col">
                        <table class="table shadow custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                            width="60" height="60"></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>

                                    <td>ARRIVAL</th>
                                    <td>INR 4500</th>
                                    <td>INR 3500</th>
                                    <td>INR 2600</th>
                                </tr>
                                <tr>
                                    <td>Assistance from the aerobridge or bus
                                        gate as per arrival</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>

                                </tr>
                                <tr>
                                    <td>Porter assistance at baggage belt*</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Co-ordination with receiving party</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Assistance up till car parking</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Unlimited Rescheduling</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Cancellation benefits upto 12 hours of
                                        service time</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Gate Transfer on Buggy
                                        (Battery Operated Car*)</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Lounge Access* (Lounge for arrivals
                                        available only at Terminal 3)</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="row px-3">
                    <h3>Transit Service</h3>
                    <div class="col ">
                        <p class="text-center">INTERNATIONAL-DOMESTIC</p>
                        <div class="border  transit-services p-4 ">
                            <p>INR 6500</p>
                            <ul>
                                <li>Welcome from aerobridge/bus boarding (bridge connecting aircraft & terminal)</li>
                                <li>Porter assistance throughout the journey*</li>
                                <li>Assistance at airline CKIN counters</li>
                                <li> Lounge Access for 2 hours (at Dep only)</li>
                                <li> Guidance to designated Boarding gate</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <p class="text-center">DOMESTIC-INTERNATIONAL</p>
                        <div class="border  transit-services p-4">
                            <p>INR 6500</p>
                            <ul>
                                <li>Welcome from aerobridge/bus boarding (bridge
                                    connecting aircraft & terminal)</li>
                                <li>Porter assistance throughout the journey*</li>
                                <li>Assistance at airline CKIN counters</li>
                                <li> Lounge Access (at Dep only)</li>
                                <li> Guidance to designated Boarding gate</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <p class="text-center">DOMESTIC-DOMESTIC</p>
                        <div class="border  transit-services p-4 ">
                            <p>INR 4500</p>
                            <ul>
                                <li>Welcome from aerobridge/bus boarding (bridge connecting aircraft & terminal )</li>
                                <li>Porter assistance throughout the journey*</li>
                                <li>Assistance at airline CKIN counters</li>
                                <li> Lounge Access (at Dep only)</li>
                                <li> Guidance to designated Boarding gate</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="term-condition my-3">
                    <ul>
                        <li> Surcharge of INR 590 (AI) shall be applicable for any booking requests received within 12
                            hours of service time.
                            The above shared rates are per pax and inclusive of GST @ 18%.</li>
                        <li> Service Charges applicable for Child (2-12 years) would be 30% discount on the price
                            applicable for Adult Guests. Infant (0-2 years) will not be charged.</li>
                        <li> Lounge access for 2 hours is applicable for all places where lounge is written. Additional
                            access beyond this duration will incur charges for direct walk-ins.</li>
                        <li> The services are subject to government regulations. Prevailing at the time of delivery of
                            service.</li>
                        <li> The services are subject to availability.</li>
                        <li> Buggy services are subject to availability.</li>
                        <li> Please contact your Relationship Manager or Reservations for any request you may have for 5
                            pax and above.</li>
                        <li> Assistance upto 3 bags/ porter only.</li>

                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php
    }
    else{?>
    <section class="goa-section border" style="width: 800px; margin: 60px auto; font-size: 13px;">
   
            <div class="content p-3">
                <h2 class="my-2">Service Inclusions</h2>
                <h3>MANOHAR INTERNATIONAL AIRPORT, GOA</h3>
                <div class="row px-3">
                    <h3>International Services</h3>
                    <div class="col-md-6">
                        <table class="table shadow custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                            width="60" height="60"></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>

                                    <td>DEPARTURE</th>
                                    <td>INR 6500</th>
                                    <td>INR 5000 </th>
                                    <td>INR 3000</th>
                                </tr>
                                <tr>
                                    <td>Welcome from Curbside (Drop off point)</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>

                                </tr>
                                <tr>
                                    <td>Porter assistance at baggage belt*</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Assistance at CKIN counters</td>
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
                                    <td>Lounge Access</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Unlimited Rescheduling</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cancellation benefits upto 12 hours of
                                        service time</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>


                    </div>
                    <div class="col-md-6">
                        <table class="table shadow custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                            width="60" height="60"></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>

                                    <td>ARRIVAL</th>
                                    <td>INR 6500</th>
                                    <td>INR 5500 </th>
                                    <td>INR 4000</th>
                                </tr>
                                <tr>
                                    <td>Assistance from hand baggage area
                                        of customs</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>

                                </tr>
                                <tr>
                                    <td>Porter assistance at baggage belt*</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Co-ordination with receiving party</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Assistance up till car parking</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>

                                <tr>
                                    <td>Unlimited Rescheduling</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cancellation benefits upto 12 hours of
                                        service time</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="row px-3">
                    <h3>Domestic Services</h3>
                    <div class="col">
                        <table class="table shadow custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                            width="60" height="60"></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>

                                    <td>DEPARTURE</th>
                                    <td>INR 4000</th>
                                    <td>INR 3000 </th>
                                    <td>INR 2000</th>
                                </tr>
                                <tr>
                                    <td>Welcome from Curbside (Drop off point)</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>

                                </tr>
                                <tr>
                                    <td>Porter assistance at baggage belt*</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Assistance at CKIN counters</td>
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
                                    <td>Lounge Access</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Assistance up till Boarding gate</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Unlimited Rescheduling</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cancellation benefits upto 12 hours of
                                        service time</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>


                    </div>
                    <div class="col">
                        <table class="table shadow custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_elite.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_gold.png"
                                            width="60" height="60"></th>
                                    <th><img src="<?=base_url('atithya_assets/')?>assets/img/planlogo_silver.png"
                                            width="60" height="60"></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>

                                    <td>ARRIVAL</th>
                                    <td>INR 4000</th>
                                    <td>INR 3200 </th>
                                    <td>INR 2000</th>
                                </tr>
                                <tr>
                                    <td>Assistance from the aerobridge or bus
                                        gate as per arrival</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>

                                </tr>
                                <tr>
                                    <td>Porter assistance at baggage belt*</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Co-ordination with receiving party</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Assistance up till car parking</td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                    <td><span class="red-circle"></span></td>
                                </tr>
                                <tr>
                                    <td>Unlimited Rescheduling</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Cancellation benefits upto 12 hours of
                                        service time</td>
                                    <td><span class="red-circle"></span></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="row px-3">
                    <h3>Transit Service</h3>
                    <div class="col ">
                        <p class="text-center">INTERNATIONAL-DOMESTIC/
                            DOMESTIC-INTERNATIONAL</p>
                        <div class="border  transit-services p-4 ">
                            <p>INR 5100</p>
                            <ul>
                                <li>Assistance from hand baggage area of customs</li>
                                <li>Porter assistance throughout the journey*</li>
                                <li>Assistance at airline CKIN counters</li>
                                <li> Lounge Access (at Dep only)</li>
                                <li> Guidance to designated Boarding gate</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col py-4 ">
                        <p class="text-center">DOMESTIC-INTERNATIONAL</p>
                        <div class="border  transit-services p-4">
                            <p>INR 5100</p>
                            <ul>
                                <li>Assistance from the aerobridge or bus gate
                                    as per arrival</li>
                                <li>Porter assistance throughout the journey*</li>
                                <li>Assistance at airline CKIN counters</li>
                                <li> Lounge Access (at Dep only)</li>
                                <li> Guidance to designated Boarding gate</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col py-4 ">
                        <p class="text-center">DOMESTIC-DOMESTIC</p>
                        <div class="border  transit-services p-4 ">
                            <p>INR 3400</p>
                            <ul>
                                <li>Assistance from the aerobridge or bus gate
                                    as per arrival</li>
                                <li>Porter assistance throughout the journey*</li>
                                <li>Assistance at airline CKIN counters</li>
                                <li> Lounge Access (at Dep only)</li>
                                <li> Guidance to designated Boarding gate</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="term-condition my-3">
                    <ul>
                        <li> Surcharge of INR 590 (AI) shall be applicable for any booking requests received within 12
                            hours of service time.</li>
                        <li>The above shared rates are per pax and inclusive of GST @ 18%.</li>

                        <li> Lounge access for 2 hours is applicable for all places where lounge is written. Additional
                            access beyond this duration will incur charges for direct walk-ins.</li>
                        <li> Service Charges applicable for Child (2-12 years) would be 30% discount on the price
                            applicable for Adult Guests. Infant (0-2 years) will not be charged.</li>
                        <li> The services are subject to government regulations. Prevailing at the time of delivery of
                            service.</li>
                        <li> The services are subject to availability.</li>
                        <li> Buggy services are subject to availability.</li>
                        <li> Please contact your Relationship Manager or Reservations for any request you may have for 5
                            pax and above.</li>
                        <li>Porter assistance upto 3 bags/guest. </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php 
    }
    ?>
</body>
</html>