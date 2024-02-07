<?php 
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
				<td align="right"><?=!empty($allorder->datalist[0]->name)?$allorder->datalist[0]->name:'';?>
				<input type="hidden" name="order_no" value="<?=!empty($allorder->datalist[0]->name)?$allorder->datalist[0]->name:'itinerary_no';?>"/>
				
				</td>
			  </tr>
			  <tr>
				<td>Booking Date:</td>
				<td align="right"><?=!empty($allorder->datalist[0]->date_order)?date('D, d-M-Y',strtotime($allorder->datalist[0]->date_order)):0;?>
				<input type="hidden" id="" name="booking_date" value="<?=!empty($allorder->datalist[0]->date_order)?date('D, d-M-Y',strtotime($allorder->datalist[0]->date_order)):null;?>"/>
				</td>
			  </tr>
			  <tr>
				<td>Booking Time:</td>
				<td align="right"><?=!empty($allorder->datalist[0]->date_order)?date('h:i:s',strtotime($allorder->datalist[0]->date_order)):0;?>
				<input type="hidden" id="" name="booking_time" value="<?=!empty($allorder->datalist[0]->date_order)?date('h:i:s',strtotime($allorder->datalist[0]->date_order)):null;?>"/>
				</td>
			  </tr>
			  
			  <?php 
				  $NetAmount=0;;
				  $select_product_details = !empty($this->session->userdata("s_select_product_details"))?$this->session->userdata("s_select_product_details"):array();
				//  p($select_product_details);
				 $NetAmount = array_sum(array_column($select_product_details,'pprice'));
				  
				  if(!empty($select_product_details)){
					  for($i=0;$i<count($select_product_details);$i++)
					  { ?>
                  <tr>
                    <td><?php echo $select_product_details[$i]['pname']; ?> (<?php echo $select_product_details[$i]['pqty']; ?>&nbsp;<?php echo $select_product_details[$i]['ptype']; ?>)</td>
                    <td align="right">&#8377;<?php echo $select_product_details[$i]['pprice']; ?></td>
                  </tr>
				  <?php } ?>
			   
				   <tr>
					<td class="bg-light">Net Amount</td>
					<td align="right" class="bg-light">&#8377;<span id="netAmount"><?php echo $NetAmount; ?></span>
					<input type="hidden" id="" name="net_amount" value="<?php echo $NetAmount; ?>"/>
				
					</td>
				  </tr>
			  
			  <!--tr>
				<td>Discount<br>
				<input type="hidden" id="c_discount_code" name="c_discount_code" value=""/>
				<input  type="hidden" id="c_discount_amt" name="c_discount_amt" value="0"/>
				<input type="hidden" id="c_discount_id" name="c_discount_id" value="0"/>
				  <span class="small"><span class="small" id="discountCouponCode">  </span></span> <a href="javascript:void(0)" type="button" id="couponBtn" data-toggle="modal" data-target="#exampleModalCenter" class="">Apply Coupon</a> <a type="button" class="RemoveCouponClass d-none" onclick="RemoveCoupon(<?php echo $NetAmount; ?>);">Remove</a> </td>
				<td align="right">&#8377;<span id="discountAmt">0</span></td>
			  </tr-->
			  <tr>
				<td class="bg-light">Final Amount</td>
				<td align="right" class="bg-light">&#8377;<span id="finalTotal"><?php echo $NetAmount; ?></span>
				<input type="hidden" id="c_final_amount" name="final_amount" value="0"/>
				 
				
				</td>
			  </tr>
			  <?php } ?> 
			  
			</tbody>
		  </table>
		</div>
</div>
<button type="submit" id="submit" name="submit" class="btn btn-primary w-100"  role="button" aria-disabled="false">Pay Now</button>
	<?php }} } ?>