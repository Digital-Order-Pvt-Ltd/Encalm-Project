   
  <div class="row d-flex align-items-center mb-1">
    <!--div class="form-group col-md-2">
      <label for="" class="d-none">Title*</label>
      <span class="caret"></span>
      <select id="" name="placard_title" class="form-control">
        <option value="">Title*</option>
         <?php /* if(!empty($salutation)){ $salutation_data =json_decode($salutation); 
	   if(!empty($salutation_data->datalist)){
		foreach($salutation_data->datalist as $val){
	   ?>
	   <option value="<?=$val->id?>"><?=$val->name?></option>
       <?php }}} */ ?>
      </select>
    </div-->
    <div class="form-group col-md-3">
      <label for="" class="d-none">Name</label>
      <input type="text" class="form-control" id="" name="placard_first_name" placeholder="Name..">
    </div>
	
	<div class="form-group col-md-3">
      <label for="" class="d-none">Mobile</label>
      <input type="text" class="form-control" id="" name="placard_mobile" placeholder="Mobile*">
    </div>
	
    <div class="form-group col-md-6">
      <label for="" class="d-none">Instruction</label>
      <input type="text" class="form-control" id="" name="placard_last_name" placeholder="Instruction...">
    </div>
    <!--div class="form-group col-md-2">
      <label for="" class="d-none">Country</label>
      <span class="caret"></span>
      <select id="" name="placard_country" class="form-control">
        <option value="">Select Country of Origin*</option>
       
	    <?php /* if(!empty($country)){ $countrys =json_decode($country); 
	   if(!empty($countrys->datalist)){
		foreach($countrys->datalist as $val){
			$c_select='';
			if($val->name=='India'){$c_select='selected';}
	   ?>
	   <option value="<?=$val->id?>" <?=$c_select?>><?=$val->name?></option>
       <?php }}} */ ?>
	   
      </select>
    </div-->
    
    <div class="form-group col-md-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="yes" id="myCheck"  onclick="myFunction()" name='placard_use_GSTIN'>
        <label class="form-check-label" for="defaultCheck1">Use GSTIN For This Booking (Optional) </label>
        <p class="small"><span class="small">For Taking GST benefit, Kindly provide GST details at the time of booking as the same cannot be altered once the booking in Invoiced.</span></p>
      </div>
    </div>
  </div>
  <div class="row mb-3 gstsection" id="gstsection">
    <div class="form-group col-md-6">
      <label for="" class="d-none">GST Number</label>
      <input type="text" class="form-control" id="" name="placard_gst_no" placeholder="GST Number">
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">Name</label>
      <input type="text" class="form-control" id="" name="placard_name" placeholder="Name">
    </div>
    <div class="form-group col-md-3">
      <label for="" class="d-none">Address</label>
      <input type="text" class="form-control" id="" name="placard_address" placeholder="Address">
    </div>
    <div class="form-group col-md-3">
      <label for="" class="d-none">City</label>
      <input type="text" class="form-control" id="" name="placard_city" placeholder="City">
    </div>
    <div class="form-group col-md-3">
      <label for="" class="d-none">State</label>
      <input type="text" class="form-control" id="" name="placard_state" placeholder="State">
    </div>
    <div class="form-group col-md-3">
      <label for="" class="d-none">Pincode</label>
      <input type="text" class="form-control" id="" name="placard_pincode" placeholder="Pincode">
    </div>
    <div class="form-group col-md-3">
      <label for="" class="d-none">Country</label>
      <span class="caret"></span>
      <select id="" name="placard_country_code" class="form-control">
       <option value="">Select Country of Origin*</option>
       
	    <?php if(!empty($country)){ $countrys =json_decode($country); 
	   if(!empty($countrys->datalist)){
		foreach($countrys->datalist as $val){
			$c_select='';
			if($val->name=='India'){$c_select='selected';}
	   ?>
	   <option value="<?=$val->id?>" <?=$c_select?>><?=$val->name?></option>
       <?php }}}?>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="" class="d-none">Mobile</label>
      <input type="text" class="form-control" id="" name="placard_mobile_1" placeholder="Mobile">
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">Email Id</label>
      <input type="text" class="form-control" id="" name="placard_email_id" placeholder="Email Id">
    </div>
    <div class=clearfix></div>
  </div>
 
