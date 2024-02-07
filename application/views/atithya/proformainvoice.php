<html lang="en">
<head>
<title>Encalm Invoice</title>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
<style>
    body, table {
        font-family: 'Open Sans', Arial, Helvetica, sans-serif;
        font-size: 11px;
        padding: 0px 0px;
        margin: 0px 0px;
        line-height: 110%;
        color: #464646;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    table.bordered th, table.bordered td {
        border: solid 1px #dedede;
    }
    .border-top {
        border-top: solid 1px #dedede;
    }
    table th, table td {
        padding: 6px 8px;
        vertical-align: top;
    }
    table th {
        text-align: left;
    }
    table td {
        text-align: left;
    }
    .text-right {
        text-align: right;
    }
    .text-left {
        text-align: left;
    }
    .text-center {
        text-align: center;
    }
    .container {
        width: 700px;
        margin: 0px auto;
        height: 1000px;
    }
    .header {
        height: 166px;
    }
    .content {
        height: 710px;
    }
    .footer {
        height: 100px;
    }
</style>
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
    //exit;
	$mainData = !empty($allsearchdata->mainData)?$allsearchdata->mainData:array();
	$itemData = !empty($allsearchdata->itemData)?$allsearchdata->itemData:array();
    $invData = !empty($allsearchdata->invData)?$allsearchdata->invData:array();
    $taxData = !empty($allsearchdata->taxData)?$allsearchdata->taxData:array();
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
    $cgst = 0;
    $sgst =0;
    $igst =0;
	$service_category = !empty($mainData->datalist[0]->service_category)?$mainData->datalist[0]->service_category:array(); 
	
	$inv_status = !empty($mainData->datalist[0]->invoice_status)?$mainData->datalist[0]->invoice_status:'';
	//p($allsearchdata);
		  }
?> 

<main id="main" class="bg-white"> 
    <?php if(!isset($_POST['createpdf'])) { ?><div class="text-center mt-4"><form method="post"><input type="submit" value="Create Pdf" name="createpdf"></form></div><?php } ?>
    <div class="container">
        <div class="header">
            <table style="margin-bottom: 0px;">
                <tr>
                    <td width="30%"><img src="<?=base_url()?>assets/image/atithya/Atithya-Logo-Golden.jpg" alt="" width="100"></td>
                    <td width="30%"><img src="<?=base_url()?>atithya_assets/assets/img/logo.png" alt="" width="140"></td>
                    <td width="40%"><h4 style="font-size: 140%; margin: 6px 0px;">Proforma Invoice</h4>
                        <p style="margin: 6px 0px;"><?php echo !empty($mainData->datalist[0]->company_id)? strtoupper($mainData->datalist[0]->company_id[1]):'NA'; ?><br>
                        <?php echo !empty($mainData->datalist[0]->company_address)? strtoupper($mainData->datalist[0]->company_address):''; ?>
                        
                        <!-- B1/H3, MATHURA ROAD, MOHAN CO-OPERATIVE<br>
                        INDUSTRIAL AREA, NEW DELHI-110044, INDIA<br>
                        GST - 07AAGCE6783M1ZZ -->
                    </p>
                    </td>
                </tr>
            </table>
            <hr style="margin: 0px 0px 15px 0px; height: 1px; background: #464646; border: solid 0px;">
        </div>
        <div class="content">
            <table>
                <tr>
                    <td width="33%"><strong>BILLED TO:</strong><br>
                    <?php 
                    $cust_country =!empty($custData->datalist[0]->country_id)?$custData->datalist[0]->country_id:array(); 
                    echo !empty($mainData->datalist[0]->partner_id)? strtoupper($mainData->datalist[0]->partner_id[1]):'NA'; ?><br>
                    <?=!empty($custData->datalist[0]->street)? strtoupper($custData->datalist[0]->street):'';?><br>
                    <?=!empty($custData->datalist[0]->street2)? strtoupper($custData->datalist[0]->street2):'';?><br>
                    <?=!empty($custData->datalist[0]->city)? strtoupper($custData->datalist[0]->city):'';?><br>
                    <?=!empty($custData->datalist[0]->state_id[1])? strtoupper($custData->datalist[0]->state_id[1]):'NA';?> &nbsp; <?=!empty($custData->datalist[0]->zip)?$custData->datalist[0]->zip:'NA';?><br>
                    <?=!empty($cust_country[1])? strtoupper($cust_country[1]):''?>
                    <br><br>
                <strong>State Code:</strong> <?=!empty($custData->datalist[0]->state_id[0])? strtoupper($custData->datalist[0]->state_id[0]):'NA';?><br>
                <strong>Place Of Supply:</strong> <?=!empty($custData->datalist[0]->state_id[1])? strtoupper($custData->datalist[0]->state_id[1]):'NA';?><br>
                <strong>GSTIN:</strong> <?php echo !empty($custData->datalist[0]->vat) ? strtoupper($custData->datalist[0]->vat):''; ?></td>
                <?php 
                    if(!empty($custData->datalist[0]->state_id[1]) and $custData->datalist[0]->state_id[0]=="586"){
                    $delhi = 1;}
                    else{
                        $delhi=0;
                        $ap = 1;
                    }
                    ?>
                    <td width="33%"></td>
                    
                    <td width="33%"><strong>PI No:</strong> <?php echo !empty($mainData->datalist[0]->name)?$mainData->datalist[0]->name:'NA'; ?><br>
                <strong>PI Date:</strong> <?=date('d-M-Y',strtotime($mainData->datalist[0]->date_order));?><br><br>
                <strong>Whether the tax is payable on Reverse</strong><br>
                <strong>Charge Basis ?:</strong> NO</td>
                </tr>
            </table>
            <div class="row mt-2">
                <table class="table">
                    <thead>
                        <tr class="border-top">
                            <th class="text-left">Source</th>
                            <th class="text-left">Sr.No</th>
                            <th class="text-left">Description</th>
                            <th class="text-left">HSN/HAC</th>
                            <th class="text-right">Quantity</th>
                            <th class="text-right">Unit Price</th>
                            <th class="text-left">Taxes</th>
                            <th class="text-right">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                            $NetAmount=0;
                            if(!empty($itemData) and !empty($itemData->datalist)){ 
                             $NetAmount = array_sum(array_column($itemData->datalist,'price_subtotal'));
                             $i = 1;
                            foreach($itemData->datalist as $item){
                                
                    ?> 
                        <tr class="border-top">
                            <td><?php echo !empty($mainData->datalist[0]->name)?$mainData->datalist[0]->name:'NA'; ?></td>
                            <td><?php echo $i;?></td>
                            <td><?php echo $item->name;?></td>
                            <td><?php echo !empty($mainData->datalist[0]->hsn)? $mainData->datalist[0]->hsn:''; ?></td>
                            <td class="text-right"><?php echo $item->product_uom_qty;?> &nbsp;<?php echo $item->product_uom[1];?></td>
                            <td class="text-right">₹<?php echo number_format($item->price_unit,2);?></td>
                            <td><?php echo !empty($taxData->datalist[0]->name)?$taxData->datalist[0]->name:'NA'; ?></td>
                            <td class="text-right">₹<?php echo number_format($item->price_unit,2);?></td>
                        </tr>
                        <?php
                         $i++;
                            }
                        }
                            ?>
                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2" class="border-top">Taxable Amount</td>
                            <td class="border-top"></td>
                            <td class="border-top text-right">₹<?= number_format($NetAmount);?></td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2" class="border-top"><?php 
                                        if (($delhi==1) and ($airport_location=='8008')){
                                            echo "SGST (9%) on ".number_format($NetAmount,2);
                                        }
                                        else if (($delhi!=1) and ($airport_location=='8008')){
                                            echo "SGST (9%) on ".number_format($NetAmount,2);
                                        }
                                        else if (($delhi==1) and ($airport_location!='8008')){
                                        echo "SGST (9%) on ".number_format($NetAmount,2);
                                        }
                                        else if (($ap==1) and ($airport_location!='8008')){
                                        echo "IGST (18%) on ".number_format($NetAmount,2);
                                        }
                                        else if (($ap!=1) and ($airport_location!='8008')){
                                        echo "IGST (18%) on ".number_format($NetAmount,2);
                                        }
                                        else{
                                            echo "IGST (18%) on ".number_format($NetAmount,2);
                                        }?></td>
                            <td class="border-top"></td>
                            <td class="border-top text-right">₹<?php
                                             if ($delhi==1){
                                                 ?>
                                             
                                        &#8377;<?=$sgst=sprintf ("%.2f",(($NetAmount*9)/100),2)?> 
                                        
                                        <?php 
                                             }
                                             else{
                                             ?>
                                             
                                              &#8377;<?=$igst=sprintf ("%.2f",(($NetAmount*18)/100),2)?> 
                                              <?php
                                             }?></td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2" class="border-top"> <?php
                                             if (($delhi==1) and ($airport_location=='8008')){
                                            echo "CGST (9%) on ".number_format($NetAmount,2);
                                        }
                                        else if (($delhi!=1) and ($airport_location=='8008')){
                                            echo "CGST (9%) on ".number_format($NetAmount,2);
                                        }
                                        else if (($delhi==1) and ($airport_location!='8008')){
                                        echo "CGST (9%) on ".number_format($NetAmount,2);
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
                                           
                                           ?> </td>
                            <td class="border-top"></td>
                            <td class="border-top text-right">₹<?=$cgst=sprintf ("%.2f",(($NetAmount*9)/100),2);?></td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2" class="border-top">Total</td>
                            <td class="border-top"></td>
                            <td class="border-top text-right">₹<?=number_format($NetAmount+$cgst+$igst+$sgst,2);?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row mt-2">
            <strong>Total (In Words):</strong> <?= ucwords(getIndianCurrency($NetAmount+$cgst+$igst+$sgst));?>
            </div>
            <div class="row mt-2">
            <strong>Terms & Conditions:</strong>
            1. Payment under this PI Should be made through Electronic Fund Transfer (NEFT/RTGS):-<br>
            Account No.: - 57500000786110 &nbsp; IFSC: HDFC0000572
            2. For All Payments Effected, kindly forward the following details to : accounts@encalm.com
            a) PI No: &nbsp; b) TDS Deduction &nbsp; c) Any Other Deduction (with reasons) &nbsp; d) Net Amount Paid
            </div>
        </div>
        <div class="footer">
            <hr style="margin: 15px 0px 0px 0px; height: 1px; background: #464646; border: solid 0px;">
            <div class="row">
                <div class="col-12 text-center">
                Registered Address: Tag Tower, Plot No. 17-18, Phase IV, Udyog Vihar, Sector 18, Gurugram, Haryana 122015<br>
                Terms and Condition of Services as provided on <a href="https://www.encalm.com">www.encalm.com</a> shall apply<br>
                For all booking query please feel free to write us on <a href="mailto:guest.services@encalm.com">guest.services@encalm.com</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header">
            <table style="margin-bottom: 0px;">
                <tr>
                    <td width="30%"><img src="<?=base_url()?>assets/image/atithya/Atithya-Logo-Golden.jpg" alt="" width="100"></td>
                    <td width="30%"><img src="<?=base_url()?>atithya_assets/assets/img/logo.png" alt="" width="140"></td>
                    <td width="40%"><h4 style="font-size: 140%; margin: 6px 0px;">Proforma Invoice</h4>
                        <p style="margin: 6px 0px;"><?php echo !empty($mainData->datalist[0]->company_id)? strtoupper($mainData->datalist[0]->company_id[1]):'NA'; ?><br>
                        <!-- B1/H3, MATHURA ROAD, MOHAN CO-OPERATIVE<br>
                        INDUSTRIAL AREA, NEW DELHI-110044, INDIA<br>
                        GST - 07AAGCE6783M1ZZ -->
                        <?php echo !empty($mainData->datalist[0]->company_address)? strtoupper($mainData->datalist[0]->company_address):''; ?>
                    </p>
                    </td>
                </tr>
            </table>
            <hr style="margin: 0px 0px 15px 0px; height: 1px; background: #464646; border: solid 0px;">
        </div>
        <div class="content">
            <table class="table bordered">
                <thead>
                    <tr>
                        <th colspan="8" class="text-center">Annexure 1: Service Details (<?=!empty($mainData->datalist[0]->itinerary_no)? strtoupper($mainData->datalist[0]->itinerary_no):'';?> )</th>
                    </tr>
                    <tr>
                        <th>Source</th>
                        <th>Confirmation No:</th>
                        <th>Service Date & Time</th>
                        <th>Booking Date & Time</th>
                        <th>Service Airport</th>
                        <th>Sector of Travel</th>
                        <th>From Airport</th>
                        <th>To Airport</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo !empty($mainData->datalist[0]->name)? strtoupper($mainData->datalist[0]->name):''; ?></td>
                        <td><?php echo !empty($mainData->datalist[0]->itinerary_no)? strtoupper($mainData->datalist[0]->itinerary_no):''; ?></td>
                        <td><?php echo !empty($mainData->datalist[0]->commitment_date)? $mainData->datalist[0]->commitment_date:''; ?></td>
                        <td><?php echo !empty($mainData->datalist[0]->date_order)? $mainData->datalist[0]->date_order:''; ?></td>
                        <td><?=!empty($to_airport[1])?$to_airport[1]:'';?></td>
                        <td><?=!empty($airport_terminal[1])?$airport_terminal[1]:'';?></td>
                        <td><?php echo !empty($from_airport[1])?$from_airport[1]:'';?></td>
                        <td><?php echo !empty($to_airport[1])?$to_airport[1]:'';?></td>
                    </tr>
                </tbody>
            </table>

            <table class="table bordered">
                <thead>
                    <tr>
                        <th colspan="8" class="text-center">Annexure 3: Guest Details (<?=!empty($mainData->datalist[0]->itinerary_no)? strtoupper($mainData->datalist[0]->itinerary_no):'';?>)</th>
                    </tr>
                    <tr>
                        <th>Source</th>
                        <th>Sr. No</th>
                        <th>Guest Name</th>
                        <th>Travel Class</th>
                        <th>Age</th>
                        <th>PNR No.</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(!empty($guestData) and !empty($guestData->datalist)){
                    $g = 1;
                    foreach($guestData->datalist as $guest){
                    ?>
                    <tr>
                        <td><?php echo !empty($mainData->datalist[0]->name)? strtoupper($mainData->datalist[0]->name):''; ?></td>
                        <td><?=$g;?></td>
                        <td><?=!empty($guest->first_name)?($guest->first_name.' '.$guest->last_name):''?></td>
                        <td><?=!empty($guest->class_type)?ucfirst($guest->class_type):''?></td>
                        <td><?=!empty($guest->age)?$guest->age:''?></td>
                        <td><?=!empty($guest->pnr_no)?$guest->pnr_no:''?></td>
                    </tr>
                    <?php $g++;}}?>
                    <!-- <tr>
                        <td><?php //echo !empty($mainData->datalist[0]->name)? strtoupper($mainData->datalist[0]->name):''; ?></td>
                        <td>2</td>
                        <td>Abhishek Somany</td>
                        <td>Business</td>
                        <td>1</td>
                        <td></td>
                    </tr> -->
                </tbody>
            </table>
            
            <table class="table bordered">
                <thead>
                    <tr>
                        <th colspan="8" class="text-center">Annexure 2: Flight Details (<?=!empty($mainData->datalist[0]->itinerary_no)? strtoupper($mainData->datalist[0]->itinerary_no):'';?>)</th>
                    </tr>
                    <tr>
                        <th>Source</th>
                        <th>Flight Info</th>
                        <th>Airlines</th>
                        <th>Flight No</th>
                        <th>Flight Date & Time</th>
                        <th>Terminal</th>
                        <th>Payment Method</th>
                        <th>Payment Info</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo !empty($mainData->datalist[0]->name)? strtoupper($mainData->datalist[0]->name):''; ?></td>
                        <td><?php echo !empty($arrival_flight[1])?$arrival_flight[1]:'NA';?>/<?php echo !empty($departure_flight[1])?$departure_flight[1]:'NA';?> /</td>
                        <td><?=!empty($arrival_airline[1])?$arrival_airline[1]:'NA';?></td>
                        <td><?php echo !empty($arrival_flight[1])?$arrival_flight[1]:'NA';?>/<?php echo !empty($departure_flight[1])?$departure_flight[1]:'NA';?> /</td>
                        <td><?php echo !empty($mainData->datalist[0]->date )?date('D, d-M-Y',strtotime($mainData->datalist[0]->date)) :'NA'; ?> <?php if($service_type[1] == 'Departure') echo !empty($mainData->datalist[0]->dtime)?$mainData->datalist[0]->dtime:''; else echo !empty($mainData->datalist[0]->atime)?$mainData->datalist[0]->atime:''; ?> Hrs (IST)</td>
                        <td><?=!empty($airport_terminal[1])?$airport_terminal[1]:'';?></td>
                        <td><?=!empty($mainData->datalist[0]->payment_method)?$mainData->datalist[0]->payment_method:'';?></td>
                        <td><?=!empty($mainData->datalist[0]->payment_info)?$mainData->datalist[0]->payment_info:'';?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="footer">
            <hr style="margin: 15px 0px 0px 0px; height: 1px; background: #464646; border: solid 0px;">
            <div class="row">
                <div class="col-12 text-center">
                Registered Address: Tag Tower, Plot No. 17-18, Phase IV, Udyog Vihar, Sector 18, Gurugram, Haryana 122015<br>
                Terms and Condition of Services as provided on <a href="https://www.encalm.com">www.encalm.com</a> shall apply<br>
                For all booking query please feel free to write us on <a href="mailto:guest.services@encalm.com">guest.services@encalm.com</a>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>