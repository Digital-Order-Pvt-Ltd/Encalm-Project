
<?php //p($this->session->all_userdata());exit;?>
<ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-sync-alt"></i>&nbsp;My Details</a></li>
           
          </ul>
          <div class="tab-content py-5" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
<form id="" name="" method="post" action="<?=base_url('home/confirm')?>" class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded">
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
    <div class="form-group col-md-4 ">
	 
       <span class="caret" ></span>
	  <select   class="form-control" readonly style="background:lightgray" disabled >
         <option value="">Gender*</option>
        
	   <option value="male" <?=($s_customer_data['gender'])=='male' ? 'selected' :''?>>Male</option>
	   <option value="female" <?=($s_customer_data['gender'])=='female' ? 'selected' :''?>>Female</option>
        
      </select>
	  <input type="hidden" id="gender" name="gender" value="<?=$s_customer_data['gender']?>"/>
    </div>
    <div class="form-group col-md-4">
      <i class="fas fa-calendar-alt"></i>
      <input type="text" id="dob" name="dob" class="form-control datepicker" placeholder="Date of Birth"value="<?=$s_customer_data['dob']?>" readonly style="background:lightgray"  />
      <label class="floating-label">Date of Birth</label>
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?=$s_customer_data['mobile']?>" readonly style="background:lightgray"  />
      <label class="floating-label">Mobile</label>
    </div>
    <div class="form-group col-md-6">
      <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email" value="<?=$s_customer_data['emailid']?>" readonly style="background:lightgray"  />
      <label class="floating-label">Email</label>
    </div>
    <div class="form-group col-md-6">
      <label class="d-none">Country</label>
      <span class="caret" ></span>
	 
      <select  name="" class="form-control" disabled style="background:lightgray" >
         <option value="">Select Country of Origin*</option>
       
	    <?php if(!empty($country)){ $countrys =json_decode($country); 
	   if(!empty($countrys->datalist)){
		foreach($countrys->datalist as $val){
			$c_select='';
			if($val->id==$s_customer_data['country']){$c_select='selected';}
	   ?>
	   <option value="<?=$val->id?>" <?=$c_select?>><?=$val->name?></option>
       <?php }}}?>
      </select>
	  <input type="hidden" id="country" name="country" value="<?=$s_customer_data['country']?>"/>
    </div>
     
    <div class=clearfix></div>
    <div class="text-center rightproceedbutton">
      <div class="row">
        <div class="col-lg-7"></div>
        <div class="col-lg-5">
          <button type="submit" id="submit" name="submit" class="btn btn-red"  role="button" aria-disabled="false">Submit &amp; Proceed</button>
        </div>
      </div>
    </div>
    <div class=clearfix></div>
  </div>
</form>

            </div>
			</div>