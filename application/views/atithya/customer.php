
<?php //p($this->session->all_userdata());exit;?>
<?php 
    // Get the current URI
      $currentUri = $this->uri->uri_string();

      // Check if the URI contains "spa"
      if (strpos($currentUri, 'spa') !== false) {
          // The URI contains "spa"
          $spa =true;
          
      } else {
          // The URI does not contain "spa"
          $spa =false;
          
      }    
    
    
    ?>
<ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-user-circle"></i>&nbsp;My Profile</a></li>
           
          </ul>
          <div class="tab-content py-5" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

<!-- <form id="" name="" method="post" action="<?=base_url('atithya/home/confirm')?>" class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded" onsubmit="PleaseWaitShow();"> -->
          <?php
              if(!$spa){
                ?>
                <form id="" name="" method="post" action="<?=base_url('atithya/home/confirm')?>" class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded" onsubmit="PleaseWaitShow();">
              <?php 
              }
              else{
                ?>
                <form id="" name="" method="post" action="<?=base_url('spa/home/confirm')?>" class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded" onsubmit="PleaseWaitShow();">
                <?php
              }
              ?>
			  <input type="hidden"  name="customer_id" value="<?=$s_customer_data['customer_id']?>" />
			  <input type="hidden"  name="o_customer_id" value="<?=$s_customer_data['o_id']?>" />
			  
  <div class="row">
  <div class="form-group col-md-4">
  <span class="caret"></span>
      <select class="form-control" style="background:lightgray" disabled>
        <option value="">Title*</option>
	   <?php if(!empty($salutation)){ $salutation_data =json_decode($salutation); 
	   if(!empty($salutation_data->datalist)){
		foreach($salutation_data->datalist as $val){
			$s_tit = '';
			if($val->id==$s_customer_data['title'])
			{$s_tit = 'selected';}
	   ?>
	   <option value="<?=$val->id?>" <?=$s_tit?>><?=$val->name?></option>
       <?php }}}?>
	  </select>
	  <input type="hidden" id="title" name="title"  value="<?=$s_customer_data['title']?>"/>
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" id="first_name" name="first_name" value="<?=$s_customer_data['first_name']?>" readonly style="background:lightgray" />
      <label class="floating-label">First Name</label>
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="<?=$s_customer_data['last_name']?>" readonly style="background:lightgray" />
      <label class="floating-label">Last Name</label>
    </div>
    <div class="form-group col-md-3">
	 
       <span class="caret" ></span>
	  <select   class="form-control" readonly style="background:lightgray" disabled >
         <option value="">Gender*</option>
        
	   <option value="male" <?=($s_customer_data['gender'])=='male' ? 'selected' :''?>>Male</option>
	   <option value="female" <?=($s_customer_data['gender'])=='female' ? 'selected' :''?>>Female</option>
	   <option value="other" <?=($s_customer_data['gender'])=='other' ? 'selected' :''?>>Other</option>
        
      </select>
	  <input type="hidden" id="gender" name="gender" value="<?=$s_customer_data['gender']?>"/>
    </div>
    <div class="form-group col-md-3">
      <i class="fas fa-calendar-alt"></i>
      <input type="text" id="dob" name="dob" class="form-control datepicker" placeholder="Date of Birth"value="<?=$s_customer_data['dob']?>" readonly style="background:lightgray"  />
      <label class="floating-label">Date of Birth</label>
    </div>
	<div class="form-group col-md-3">
      <select   class="form-control" disabled style="background:lightgray">
      <option value="">Select Country code*</option>
     
    <?php  /* if(!empty($countrycode)){ $countrys =json_decode($countrycode); 
 
   if(!empty($countrys->datalist)){
  foreach($countrys->datalist as $val){
    $c_select='';
    if(empty($s_customer_data['country_code']) and $val->value=='+91'){$c_select='selected';}
	if($val->value==$s_customer_data['country_code'])
			{$c_select = 'selected';}
   ?>
   <option value="<?=$val->value?>" <?=$c_select?>><?=$val->name?></option>
     <?php }}} */  ?>
	  <?php if(!empty($country)){ $countrys =json_decode($country); 
	   if(!empty($countrys->datalist)){
		foreach($countrys->datalist as $val){
			$c_select='';
			if(empty($s_customer_data['country']) and $val->phone_code=='91'){$c_select='selected';}
			if($val->id==$s_customer_data['country'])
			{$c_select = 'selected';}
	   ?>
	   <option value="<?=$val->phone_code?>" <?=$c_select?>><?=$val->phone_code?></option>
       <?php }}}?>
    
    </select>
	<input type="hidden" id="country_code" name="country_code" value="<?=$s_customer_data['country_code']?>"/>
      <label class="floating-label"></label>
    </div>
	
	
	
	
	
    <div class="form-group col-md-3">
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?=$s_customer_data['mobile']?>" readonly style="background:lightgray"  />
      <label class="floating-label">Mobile</label>
    </div>
	<div class="form-group col-md-12">
     
      <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?=!empty($s_customer_data['address'])?$s_customer_data['address']:''?>" readonly style="background:lightgray" />
	  
	   <label for="" class="floating-label"></label>
    </div>
	
	<div class="form-group col-md-4">
      <input type="text" class="form-control" id="city" name="city" placeholder="" value="<?=!empty($s_customer_data['city'])?$s_customer_data['city']:''?>"  readonly style="background:lightgray" />
      <label class="floating-label">City*</label>
    </div>
	<div class="form-group col-md-4">
      <label class="d-none">Country*</label>
      <span class="caret"></span>
      <select  name="" class="form-control" disabled style="background:lightgray" >
         <option value="">Select Country of Origin*</option>
       
	    <?php if(!empty($country)){ $countrys =json_decode($country); 
	   if(!empty($countrys->datalist)){
		foreach($countrys->datalist as $val){
			$c_select='';
			if(empty($s_customer_data['country']) and $val->name=='India'){$c_select='selected';}
			if($val->id==$s_customer_data['country'])
			{$c_select = 'selected';}
	   ?>
	   <option value="<?=$val->id?>" <?=$c_select?>><?=$val->name?></option>
       <?php }}}?>
      </select>
	  <input type="hidden" id="country" name="country" value="<?=$s_customer_data['country']?>"/>
    </div>
	
	<div class="form-group col-md-4">
	<span class="caret"></span>
      <select   class="form-control" disabled style="background:lightgray">
	  
	   <option value="">Select State*</option>
	   <?php  if(!empty($statedata)){ $statelist =json_decode($statedata); 
	   if(!empty($statelist->datalist)){
		foreach($statelist->datalist as $val){
			 $c_select='';
			 
			if($val->id==$s_customer_data['state'])
			{$c_select = 'selected';}
	   ?>
	   <option value="<?=$val->id?>" <?=$c_select?>><?=$val->name?></option>
       <?php }}}  ?>
	  </select>
	  <input type="hidden" id="state" name="state" value="<?=$s_customer_data['state']?>"/>
      <label class="floating-label"></label>
    </div>
	<div class="form-group col-md-6">
      <input type="text" class="form-control" id="pincode" name="pincode" placeholder="" value="<?=$s_customer_data['pincode']?>" readonly style="background:lightgray" />
      <label class="floating-label">Pincode*</label>
    </div>
	
	
    <div class="form-group col-md-6">
      <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email" value="<?=$s_customer_data['emailid']?>" readonly style="background:lightgray"  />
      <label class="floating-label">Email</label>
    </div>
     
     
    <div class=clearfix></div>
    <div class="text-center rightproceedbutton">
      <div class="row">
        <div class="col-lg-8"></div>
        <div class="col-lg-4">
          <button type="submit" id="submit" name="submit" class="btn btn-red w-100"  role="button" aria-disabled="false">Submit &amp; Proceed</button>
        </div>
      </div>
    </div>
    <div class=clearfix></div>
  </div>
</form>

            </div>
			</div>