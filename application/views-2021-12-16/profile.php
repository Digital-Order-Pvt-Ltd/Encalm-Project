
  <?php include 'head.php'?>
<!-- ======= Header ======= -->
 
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
  
<!-- End Header -->
<main id="hero" class="bg-white">
  <section class="mamber-card">
    <div class="container search-box">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <p>My Profile</p>
			 <?php if(!empty($this->session->flashdata('success'))) {?>
				
				<h3> <center><?=$this->session->flashdata('success')?></center></h3>
				
			<?php }?>
          </div>
          <form id="" name="" method="post" action="" class="custom-search-from" enctype="application/x-www-form-urlencoded">
  <div class="row">
     
    <div class="form-group col-md-3">
      <label for="" class="d-none">Title*</label>
      <span class="caret"></span>
       
	  <select id="title" name="title" class="form-control">
        <option value="">Title*</option>
	   <?php if(!empty($salutation)){ $salutation_data =json_decode($salutation); 
	   if(!empty($salutation_data->datalist)){
		foreach($salutation_data->datalist as $val){
			
			$s_tit = '';
			if($val->id==$localuserdata->title)
			{$s_tit = 'selected';}
	   ?>
	   <option value="<?=$val->id?>" <?=$s_tit?>><?=$val->name?></option>
       <?php }}}?>
	   </select>
    </div>
    <div class="form-group col-md-3">
      <label class="d-none">First Name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?=$localuserdata->first_name?>" >
    </div>
    <div class="form-group col-md-3">
      <label class="d-none">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"  value="<?=$localuserdata->last_name?>"/>
    </div>
    <div class="form-group col-md-3">
      <label class="d-none">Email</label>
      <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email"  value="<?=$localuserdata->emailid?>" />
    </div>
	<div class="form-group col-md-2">
      <label class="d-none">Country</label>
      <span class="caret"></span>
       <select id="country" name="country" class="form-control">
        <option value="">Select Country of Origin*</option>
       
	    <?php if(!empty($country)){ $countrys =json_decode($country); 
	   if(!empty($countrys->datalist)){
		foreach($countrys->datalist as $val){
			$c_select='';
			if($val->id==$localuserdata->country)
			{$c_select = 'selected';}
			if(empty($localuserdata->country) and $val->name=='India'){$c_select='selected';}
	   ?>
	   <option value="<?=$val->id?>" <?=$c_select?>><?=$val->name?></option>
       <?php }}}?>
      </select>
    </div>
	<div class="form-group col-md-2">
      <label class="d-none">Country code</label>
      <span class="caret"></span>
       <select id="country_code" name="country_code" class="form-control">
        <option value="">Select Country code*</option>
        
     
    <?php  if(!empty($countrycode)){ $countrys =json_decode($countrycode); 
 
   if(!empty($countrys->datalist)){
  foreach($countrys->datalist as $val){
			$c_select='';
			if($val->value==$localuserdata->country_code)
			{$c_select = 'selected';}
			if(empty($localuserdata->country_code) and $val->value=='+91'){$c_select='selected';}
   ?>
   <option value="<?=$val->value?>" <?=$c_select?>><?=$val->name?></option>
     <?php }}}  ?>
	    
      </select>
    </div>
	
    <div class="form-group col-md-3">
      <label class="d-none">Mobile No.*</label>
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile"  value="<?=$localuserdata->mobile?>" / >
    </div>
    <div class="form-group col-md-3">
      <label class="d-none">Date of Birth</label>
      <i class="fas fa-calendar-alt"></i>
      <input type="text" name="dob" class="form-control datepicker" placeholder="Date of Birth" value="<?=!empty($localuserdata->dob)?date('d-M-Y',strtotime($localuserdata->dob)):''?>"/>
    </div>
    <div class="form-group col-md-2">
	 <label for="" class="d-none">Gender*</label>
      <span class="caret"></span>
       
	  <select id="gender" name="gender" class="form-control">
        <option value="">Select Gender*</option>
        <option value="male" <?php if($localuserdata->gender=='male') echo "selected" ?>>Male</option>
        <option value="female" <?php if($localuserdata->gender=='female') echo "selected" ?>>Female</option>
	   </select>
	</div>
	 
    <div class=clearfix></div>
    <div class="form-group col-md-12">
      <hr>
    </div>
    <div class=clearfix></div>
    
    
     
    <div class=clearfix></div>
    <div class="form-group col-lg-12 text-center">
      <button type="submit" id="submit" name="submit" class="btn btn-red btn-sm"  role="button" aria-disabled="false">Submit</button>
    </div>
    <div class=clearfix></div>
  </div>
</form>

        </div>
      </div>
    </div>
  </section>
</main>

<!-- ======= Footer ======= -->
 <?php include('footer.php'); ?>
</body>
</html>