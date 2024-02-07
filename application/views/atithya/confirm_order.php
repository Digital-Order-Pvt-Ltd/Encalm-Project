<?php
		  $mainData  = array();
		  $itemData  = array();

	$salesdetails =  json_decode($salesdetails);
	$mainData = !empty($salesdetails->mainData)?$salesdetails->mainData:array();
	$itemData = !empty($salesdetails->itemData)?$salesdetails->itemData:array();

 
$allorder =  json_decode($orderdata);
//p($allorder);
$allcoupon =  json_decode($coupondata);
$allguest =  json_decode($gusetdata);
if(!empty($allorder))
	{ 
	if(!empty($allorder->message) and $allorder->status==1){
	$sales_id = !empty($allorder->datalist[0]->id)?$allorder->datalist[0]->id:0;
	if(!empty($sales_id)){
?>
<div class="card mb-3">
	<div class="card-header"> Order Summary </div>
		<div class="charges table-responsive">
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
				<td align="right"><?php echo !empty($mainData->datalist[0]->date_order)?date('h:i:s',strtotime($mainData->datalist[0]->date_order)):'NA'; ?>
				<input type="hidden" id="" name="booking_time" value="<?php echo !empty($mainData->datalist[0]->date_order)?date('h:i:s',strtotime($mainData->datalist[0]->date_order)):null; ?>"/>
				</td>
			  </tr>
			  
			  
				<?php $NetAmount=0;if(!empty($itemData) and !empty($itemData->datalist)){ 
				 $NetAmount = array_sum(array_column($itemData->datalist,'price_subtotal'));
				 $BtnDiscount = 0;
				foreach($itemData->datalist as $item){
					
					if($item->price_subtotal < 0)
					{
						$BtnDiscount = 1;
					}
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
					<td class="bg-light">Net Amount</td>
					<td align="right" class="bg-light">&#8377;<span id="netAmount"><?php echo $NetAmount; ?></span>
					<input type="hidden" id="" name="net_amount" value="<?php echo $NetAmount; ?>"/>
				
					</td>
				  </tr>
			  <?php if($BtnDiscount == 0) {?>
			  <tr>
				<td>Discount
				<input type="hidden" id="c_discount_code" name="c_discount_code" value=""/>
				<input  type="hidden" id="c_discount_amt" name="c_discount_amt" value="0"/>
				<input type="hidden" id="c_discount_id" name="c_discount_id" value="0"/>
				  <span class="small"><span class="small" id="discountCouponCode">  </span></span> <a href="javascript:void(0)" class="" id="couponBtn" data-toggle="modal" data-target="#exampleModalCenter"  >Apply Coupon</a> <a  class=" RemoveCouponClass d-none" onclick="RemoveCoupon(<?php echo $NetAmount; ?>);">Remove</a> </td>
				<td align="right">&#8377;<span id="discountAmt">0</span></td>
			  </tr>
			  <?php }?>
			  <tr>
				<td class="bg-light">Final Amount</td>
				<td align="right" class="bg-light">&#8377;<span id="finalTotal"><?php echo $NetAmount; ?></span>
				<input type="hidden" id="c_final_amount" name="final_amount" value="0"/>
				 
				
				</td>
			  </tr>
			  
			  
			</tbody>
		  </table>
		</div>
</div>
<button type="submit" id="submit" name="submit" class="btn btn-primary w-100"  role="button" aria-disabled="false">Pay Now</button>
	<?php }} } ?>