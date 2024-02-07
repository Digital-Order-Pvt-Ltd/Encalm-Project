
  <?php include 'head.php'?>
<!-- ======= Header ======= -->
 
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
  
<!-- End Header -->
<main id="hero" class="bg-white">
  <div class="pt-5 bg-light">
        <div class="section-title text-center">
            <p>My Profile</p>
           <?php /*if(!empty($this->session->flashdata('success'))) {?>
            
            <h3> <center><?=$this->session->flashdata('success')?></center></h3>
            
          <?php }*/ ?>
        </div>
    </div>
  <section class="mamber-card">
    <div class="container search-box">
      <div class="row">
        <div class="col-lg-12">
          
          <form id="" name="" method="post" action="" class="custom-search-from" enctype="application/x-www-form-urlencoded">
  <div class="row">
     
    <div class="form-group col-md-3 pd-10">
      <label for="" class="d-none">Title*</label>
      <span class="caret"></span>
       
	  <select id="title" name="title" class="form-control">
        <option value="">Title*</option>
	   <?php if(!empty($salutation)){ $salutation_data =json_decode($salutation); 
	   if(!empty($salutation_data->datalist)){
		foreach($salutation_data->datalist as $val){
			
			$s_tit = '';
			if($val->id==$serveruserdata->title[0])
			{$s_tit = 'selected';}
	   ?>
	   <option value="<?=$val->id?>" <?=$s_tit?>><?=$val->name?></option>
       <?php }}}?>
	   </select>
    </div>
    <div class="form-group col-md-3 pd-10">
      <label class="d-none">First Name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?=$serveruserdata->first_name?>" >
    </div>
    <div class="form-group col-md-3 pd-10">
      <label class="d-none">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"  value="<?=$serveruserdata->last_name?>"/>
    </div>
	
    <div class="form-group col-md-3 pd-10">
      <label class="d-none">Email</label>
      <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email"  value="<?=$serveruserdata->email?>" />
    </div>
	
	<div class="form-group col-md-6 pd-10">
      <label class="d-none">Address</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="Address"  value="<?=$serveruserdata->street?>" />
    </div>
	
	<div class="form-group col-md-2 pd-10">
      <label class="d-none">City</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="City"  value="<?=$serveruserdata->city?>" />
    </div>
	<div class="form-group col-md-2 pd-10">
      <label class="d-none">Country</label>
      <span class="caret"></span>
       <select id="country" name="country" class="form-control"   onchange="getState(this.value);">
        <option value="">Select Country of Origin*</option>
       
	    <?php if(!empty($country)){ $countrys =json_decode($country); 
	   if(!empty($countrys->datalist)){
		foreach($countrys->datalist as $val){
			$c_select='';
			if($val->id==$serveruserdata->country[0])
			{$c_select = 'selected';}
			if(empty($serveruserdata->country[0]) and $val->name=='India'){$c_select='selected';}
	   ?>
	   <option value="<?=$val->id?>" <?=$c_select?>><?=$val->name?></option>
       <?php }}}?>
      </select>
    </div>
	
		<div class="form-group col-md-2 pd-10">
      <label class="d-none">State</label>
      <span class="caret"></span>
       <select id="state" name="state" class="form-control">
        <option value="">Select State*</option>
       
	    
      </select>
    </div>
	
	<div class="form-group col-md-2 pd-10 pd-10 onlydigit">
      <label class="d-none">Pincode</label>
      <input type="text" class="form-control digitvalidate" id="pincode" name="pincode" placeholder="Pincode"  value="<?=$serveruserdata->zip?>" />
    </div>
    <div class="col-md-5">
    <div class="row">
	<div class="form-group col-md-3 col-xs-3 pd-10">
      <label class="d-none">Country code</label>
      <span class="caret"></span>
       <select id="country_code" name="country_code" class="form-control">
        <option value="">Select Country code*</option>
        <?php if(!empty($country)){ $countrys =json_decode($country); 
	   if(!empty($countrys->datalist)){
		foreach($countrys->datalist as $val){
			$c_select='';
			if($val->id==$serveruserdata->country)
			{$c_select = 'selected';}
			if(empty($serveruserdata->country) and $val->name=='India'){$c_select='selected';}
	   ?>
	   <option value="<?=$val->phone_code?>" <?=$c_select?>><?=$val->phone_code?></option>
       <?php }}}?>
    
      </select>
    </div>
	
    <div class="form-group col-md-9 col-xs-9 pd-10 onlydigit">
      <label class="d-none">Mobile No.*</label>
      <input type="text" class="form-control digitvalidate" id="mobile" name="mobile" placeholder="Mobile"  value="<?=$serveruserdata->mobile?>" / >
    </div>
  </div>
</div>
    <div class="form-group col-md-3 pd-10">
      <label class="d-none">Date of Birth</label>
      <i class="fas fa-calendar-alt"></i>
      <input type="text" name="dob" class="form-control datepicker" placeholder="Date of Birth" value="<?=!empty($serveruserdata->dob)?date('d-M-Y',strtotime($serveruserdata->dob)):''?>"/>
    </div>
    <div class="form-group col-md-2 pd-10">
	 <label for="" class="d-none">Gender*</label>
      <span class="caret"></span>
       
	  <select id="gender" name="gender" class="form-control">
        <option value="">Select Gender*</option>
        <option value="male" <?php if($serveruserdata->gender=='male') echo "selected" ?>>Male</option>
        <option value="female" <?php if($serveruserdata->gender=='female') echo "selected" ?>>Female</option>
		<option value="female" <?php if($serveruserdata->gender=='other') echo "selected" ?>>Other</option>
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
 <script> 
function getState(val)
{ 
var placard_country = $('#country option:selected').text();
var placard_state = "<?=!empty($this->session->userdata('s_customer_data'))?$this->session->userdata('s_customer_data')['state']:''?>";
if(placard_country != "")
{
 $.ajax({
			type: 'POST',
			url: "<?=base_url('atithya/home/getState')?>",
			data: {'placard_country':placard_country,"placard_state":placard_state },
			dataType: "html",
				beforeSend : function(data){
					},
			 	success: function(data) { 
				$('#state').html('');
				$('#state').html(data);
        <?php $states = $serveruserdata->state_id[0];
        if($states) {
          echo 'setStates('.$states.');';
        }
        ?>
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
	getState(0);
	 
});
function setStates(id) {
  console.log(id);
jQuery('#state').val(id);
}
 </script> 
<!-- ======= Footer ======= -->
 <?php include('footer.php'); ?>
</body>
</html>