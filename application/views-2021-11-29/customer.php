
<?php //p($this->session->all_userdata());exit;?>
<ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-sync-alt"></i>&nbsp;My Details</a></li>
           
          </ul>
          <div class="tab-content py-5" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
<form id="" name="" method="post" action="<?=base_url('home/confirm')?>" class="custom-search-from" enctype="application/x-www-form-urlencoded">
			  <input type="hidden"  name="customer_id" value="<?=$s_customer_data['customer_id']?>" />
			  <input type="hidden"  name="o_customer_id" value="<?=$s_customer_data['o_id']?>" />
			  
  <div class="row">
  <div class="form-group col-md-4">
      <select id="title" name="title" class="form-control" style="background:lightgray" >
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
    </div>
    <div class="form-group col-md-4">
      <label class="d-none">First Name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" value="<?=$s_customer_data['first_name']?>" readonly style="background:lightgray" />
    </div>
    <div class="form-group col-md-4">
      <label class="d-none">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="<?=$s_customer_data['last_name']?>" readonly style="background:lightgray" />
    </div>
    <div class="form-group col-md-6">
      <label class="d-none">Email</label>
      <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email" value="<?=$s_customer_data['emailid']?>" readonly style="background:lightgray"  />
    </div>
    <div class="form-group col-md-6">
      <label class="d-none">Country</label>
      <span class="caret" ></span>
	 
      <select id="country" name="country" class="form-control" readonly style="background:lightgray" >
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
    </div>
    <div class="form-group col-md-6">
      <label class="d-none">Mobile</label>
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?=$s_customer_data['mobile']?>" readonly style="background:lightgray"  />
    </div>
    <div class="form-group col-md-3 pt-2">
	 
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?=($s_customer_data['gender'])=='male' ? 'checked' :''?> >
        <label class="form-check-label" for="male"> Male </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?=($s_customer_data['gender'])=='female' ? 'checked' :''?>>
        <label class="form-check-label" for="female"> Female </label>
      </div>
    </div>
    <div class="form-group col-md-3">
      <label class="d-none">Date of Birth</label>
      <i class="fas fa-calendar-alt"></i>
      <input type="text" id="dob" name="dob" class="form-control datepicker" placeholder="Date of Birth"value="<?=$s_customer_data['dob']?>" readonly style="background:lightgray"  />
    </div>
     
    <div class=clearfix></div>
    <div class="form-group col-lg-12 text-center">
      <button type="submit" id="submit" name="submit" class="btn btn-red btn-sm"  role="button" aria-disabled="false">Submit &amp; Proceed</button>
    </div>
    <div class=clearfix></div>
  </div>
</form>

            </div>
			</div>