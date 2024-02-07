<div class="col-md-6">
	<div class="section-title">
	<p>Billing Details</p>
	</div>
  <div class="table-responsive overflow-hidden">  
	  <div class="row pad-15 d-flex align-items-center mb-1 pt-2">
	   
     
    <div class="form-group col-md-6 pd-10">
      
      <input type="text" class="form-control" id="billing_name" name="billing_name" placeholder="" value="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['full_name']:''?>">
      <label for="" class="floating-label">Name</label>
    </div>
	 <div class="form-group col-md-6 pd-10">
      
      <input type="text" class="form-control" id="billing_email_id" name="billing_email_id" placeholder="" value="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['emailid']:''?>">
      <label for="" class="floating-label">Email Id</label>
    </div>
    <div class="form-group col-md-12 pd-10">
      
      <input type="text" class="form-control" id="billing_address" name="billing_address" placeholder="" value="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['address']:''?>">
      <label for="" class="floating-label">Address</label>
    </div>
    <div class="form-group col-md-4 pd-10">
      
      <input type="text" class="form-control" id="billing_city" name="billing_city" placeholder="" value="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['city']:''?>">
      <label for="" class="floating-label">City</label>
    </div>
	<div class="form-group col-md-4 pd-10">
      <label for="" class="d-none">Country</label>
      <span class="caret"></span>
      <select id="billing_country" name="billing_country" class="form-control" onchange="getState(this.value);">
       <option value="">Select Country of Origin*</option>
       
	    <?php if(!empty($country)){ $countrys =json_decode($country); 
	   if(!empty($countrys->datalist)){
		foreach($countrys->datalist as $val){
			$c_select='';
			if(!empty($this->session->userdata("s_customer_data")['country'])  and $val->id==$this->session->userdata("s_customer_data")['country']){$c_select='selected';}
			if(empty($this->session->userdata("s_customer_data")['country'])  and $val->name=='India'){$c_select='selected';}
	   ?>
	   <option value="<?=$val->id?>" <?=$c_select?>><?=$val->name?></option>
       <?php }}}?>
      </select>
    </div>
    <div class="form-group col-md-4 pd-10">
      <label for="" class="d-none">State</label>
	  
	  <span class="caret"></span>
	  <select id="billing_state" name="billing_state" class="form-control">
	   <option value="">Select State</option>
	  <?php /* if(!empty($statedata)){ $statelist =json_decode($statedata); 
	   if(!empty($statelist->datalist)){
		foreach($statelist->datalist as $val){
			$state_select='';
			if($val->id==$this->session->userdata("s_customer_data")['state']){$state_select='selected';}
	   ?>
	   <option value="<?=$val->id?>" <?=$state_select?>><?=$val->name?></option>
       <?php }}} */ ?>
      </select>
    </div>
    <div class="form-group col-md-4 pd-10 onlydigit">
      
      <input type="text" class="form-control digitvalidate" id="billing_pincode" name="billing_pincode" placeholder="" value="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['pincode']:''?>">
      <label for="" class="floating-label">Pincode</label>
    </div>

    <div class="col-md-8">
    <div class="row">
    	<div class="form-group col-md-3 col-xs-3 pd-10">
    <label for="" class="d-none">Country code*</label>
    <span class="caret"></span>
    <select id="billing_country_code" name="billing_country_code" class="form-control">
      <option value="">Select Country code*</option>
     
    <?php  /* if(!empty($countrycode)){ $countrys =json_decode($countrycode); 
 
   if(!empty($countrys->datalist)){
  foreach($countrys->datalist as $val){
    $c_select='';
   // if($val->value=='+91'){$c_select='selected';}
	
	if(!empty($this->session->userdata("s_customer_data")['country_code'])  and $val->value==$this->session->userdata("s_customer_data")['country_code']){$c_select='selected';}
			if(empty($this->session->userdata("s_customer_data")['country_code'])  and $val->value=='+91'){$c_select='selected';}
   ?>
   <option value="<?=$val->value?>" <?=$c_select?>><?=$val->name?></option>
     <?php }}} */  ?>
	 
	 <?php if(!empty($country)){ $countrys =json_decode($country); 
	   if(!empty($countrys->datalist)){
		foreach($countrys->datalist as $val){
			$c_select='';
			if(!empty($this->session->userdata("s_customer_data")['country'])  and $val->id==$this->session->userdata("s_customer_data")['country']){$c_select='selected';}
			if(empty($this->session->userdata("s_customer_data")['country'])  and $val->name=='India'){$c_select='selected';}
	   ?>
	   <option value="<?=$val->phone_code?>" <?=$c_select?>><?=$val->phone_code?></option>
       <?php }}}?>
   
    </select>
  </div>
    <div class="form-group col-md-9 col-xs-9 pd-10 onlydigit">
      
      <input type="text" class="form-control digitvalidate" id="billing_mobile" name="billing_mobile" placeholder="" value="<?=!empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data")['mobile']:''?>">
      <label for="" class="floating-label">Mobile</label>
    </div>
   </div>
	</div>
	
	<div class="form-group col-md-6 pd-10">
      
      <input type="text" class="form-control" id="billing_entity_name" name="billing_entity_name" placeholder="">
      <label for="" class="floating-label">Entity Name (Optional)</label>
    </div>
	
	<div class="form-group col-md-6 pd-10">
      
      <input type="text" class="form-control" id="billing_gst_no" name="billing_gst_no" placeholder="">
      <label for="" class="floating-label">GSTIN (Optional)</label>
    </div>
    <div class=clearfix></div>
   
	  </div>
  </div>
</div>
<div class="col-md-6">
<?PHP if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")!='Lounge'){?>

<div class="section-title">
	<p>Placard Details</p>
  </div>
  <div class="table-responsive overflow-hidden">  
  <div class="row pad-15 d-flex align-items-center mb-1 pt-2">
    <div class="form-group col-md-4 pd-10">
      <label for="" class="d-none">Title*</label>
      <span class="caret"></span>
      <select id="placard_title" name="placard_title" class="form-control">
        <option value="">Title*</option>
         <?php  if(!empty($salutation)){ $salutation_data =json_decode($salutation); 
	   if(!empty($salutation_data->datalist)){
		foreach($salutation_data->datalist as $val){
	   ?>
	   <option value="<?=$val->id?>"><?=$val->name?></option>
       <?php }}}  ?>
      </select>
    </div>
    <div class="form-group col-md-4 pd-10">
      <input type="text" class="form-control" id="placard_first_name" name="placard_first_name" placeholder="">
      <label for="" class="floating-label">First Name*</label>
    </div>
	
	<div class="form-group col-md-4 pd-10">
      <input type="text" class="form-control" id="placard_last_name" name="placard_last_name" placeholder="">
      <label for="" class="floating-label">Last Name*</label>
    </div>
	
    
  <div class="form-group col-md-3 col-xs-3 pd-10">
    <label for="" class="d-none">Country</label>
    <span class="caret"></span>
    <select id="placard_country_code" name="placard_country_code" class="form-control">
      <option value="">Select Country code*</option>
     
    <?php  /* if(!empty($countrycode)){ $countrys =json_decode($countrycode); 
 
   if(!empty($countrys->datalist)){
  foreach($countrys->datalist as $val){
    $c_select='';
    if($val->value=='+91'){$c_select='selected';}
   ?>
   <option value="<?=$val->value?>" <?=$c_select?>><?=$val->name?></option>
     <?php }}} */  ?>
	 
	 <?php if(!empty($country)){ $countrys =json_decode($country); 
	   if(!empty($countrys->datalist)){
		foreach($countrys->datalist as $val){
			$c_select='';
			if(!empty($this->session->userdata("s_customer_data")['country'])  and $val->id==$this->session->userdata("s_customer_data")['country']){$c_select='selected';}
			if(empty($this->session->userdata("s_customer_data")['country'])  and $val->name=='India'){$c_select='selected';}
	   ?>
	   <option value="<?=$val->phone_code?>" <?=$c_select?>><?=$val->phone_code?></option>
       <?php }}}?>
   
    </select>
  </div>
	
	<div class="form-group col-md-9 col-xs-9 pd-10 onlydigit">
      <input type="text" class="form-control digitvalidate" id="placard_mobile" name="placard_mobile" placeholder="">
      <label for="" class="floating-label">Mobile*</label>
    </div>
    
    
  </div>
  
  </div>
  <?php } ?>	
  <button type="submit" id="submit" name="submit" class="btn btn-primary w-100"  role="button" aria-disabled="false">Proceed to Checkout</button>
        </div>
		
	
 <script> 
function getState(val)
{ 
var placard_country = $('#billing_country option:selected').text();
var placard_state = "<?=!empty($this->session->userdata('s_customer_data'))?$this->session->userdata('s_customer_data')['state']:''?>";
if(placard_country != "")
{
 $.ajax({
			type: 'POST',
			url: "<?=base_url('home/getState')?>",
			data: {'placard_country':placard_country,"placard_state":placard_state },
			dataType: "html",
				beforeSend : function(data){
					},
			 	success: function(data) { 
				$('#billing_state').html('');
				$('#billing_state').html(data);
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
}
jQuery(function () {
	getState(0)
});
 </script> 
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
				<input type="hidden" name="order_no" value="<?php echo !empty($mainData->datalist[0]->itinerary_no)?$mainData->datalist[0]->itinerary_no:$mainData->datalist[0]->name; ?>"/>
				
 				<input type="hidden" id="" name="booking_date" value="<?php echo !empty($mainData->datalist[0]->date_order)?date('D, d-M-Y',strtotime($mainData->datalist[0]->date_order)):null; ?>"/>
				
				<input type="hidden" id="" name="booking_time" value="<?php echo !empty($mainData->datalist[0]->date_order)?date('h:i:s',strtotime($mainData->datalist[0]->date_order)):null; ?>"/>
				 <?php $NetAmount=0;if(!empty($itemData) and !empty($itemData->datalist)){ 
				 $NetAmount = array_sum(array_column($itemData->datalist,'price_subtotal'));
				 $BtnDiscount = 0;
				foreach($itemData->datalist as $item){
					
					if($item->price_subtotal < 0)
					{
						$BtnDiscount = 1;
					}
					?> 
				<?php }}?> 
                 
					<input type="hidden" id="" name="net_amount" value="<?php echo $NetAmount; ?>"/>
				
			  <?php if($BtnDiscount == 0) {?>
			  <input type="hidden" id="c_discount_code" name="c_discount_code" value=""/>
				<input  type="hidden" id="c_discount_amt" name="c_discount_amt" value="0"/>
				<input type="hidden" id="c_discount_id" name="c_discount_id" value="0"/>
				<?php }?>
			  <input type="hidden" id="c_final_amount" name="final_amount" value="0"/>
				 
<?php }} } ?>
				  
