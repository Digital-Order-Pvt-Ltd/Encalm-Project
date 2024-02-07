<?php 

$mainData  = array();
$itemData  = array();
//echo "Deepak";
if(!empty($datalist))
{
	$allsearchdata =  json_decode($datalist);
	//p($allsearchdata);
	$mainData = !empty($allsearchdata->mainData)?$allsearchdata->mainData:array();
	$itemData = !empty($allsearchdata->itemData)?$allsearchdata->itemData:array();
	//p($itemData);
}
if(!empty($mainData)){
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
				<td align="right" class="bg-light">&#8377;<span id="finalTotal"><?php echo round(($sgst+$cgst+$NetAmount),0);?></span>
				<input type="hidden" id="c_final_amount" name="final_amount" value="0"/>
				 
				
				</td>
			  </tr>
			  
			  
			</tbody>
		  </table>
<?php }}?>

<script>
function RemoveApplyCoupon(id=0, sale_id=0)
{
	$.ajax({
			type: 'POST',
			 
			url: "<?=base_url('atithya/home/remove_apply_coupon');?>",
			data: {'id':id,"sale_id":sale_id},
			dataType: "html",
			 	success: function(data) { //alert(data);
				// get_booking_data(sale_id);
				location.reload();
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

</script>
