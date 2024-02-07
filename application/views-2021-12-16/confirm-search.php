 <?php include 'head.php';?>
<!-- ======= Header ======= -->
 
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
   
<!-- End Header --> 

<!-- ======= Hero Section ======= -->
<?php include 'purchase-history.php';?>
<!-- End Hero -->
<?php  
$navactive = ''; 
$errormsg = ''; 
if(!empty($this->session->flashdata('success'))) 
{
	$navactive = 'active';
	$errormsg = $this->session->flashdata('success');
}?>
<main id="main"> 
  <!-- ======= number Section ======= -->
  <?php include 'number.php';?>
  <section class="mamber-card mamber-card-checkout">
    <div class="container search-box position-relative">
      <div class="row">
        <div class="col-lg-7">
		<?php 
		$s_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
		if(empty($s_customer_data)){
		?>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
		  
		  <li class="nav-item"> <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-sync-alt"></i>&nbsp;Sign In</a></li>
		  
            <li class="nav-item"> <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-sync-alt"></i>&nbsp;Sign up/Book AS Guest</a></li>
            
          </ul>
          <div class="tab-content h-100" id="v-pills-tabContent">
            <div class="tab-pane fade   " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <form id="add_user_form" name="" method="post" action="<?=base_url('user/adduser')?>" class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded">
  <div class="row">
	 <div class="form-group col-md-4">
       <label for="" class="d-none">Title*</label>
      <span class="caret"></span>
	  <select id="title" name="title" class="form-control">
        <option value="">Title*</option>
	   <?php if(!empty($salutation)){ $salutation_data =json_decode($salutation); 
	   if(!empty($salutation_data->datalist)){
		foreach($salutation_data->datalist as $val){
	   ?>
	   <option value="<?=$val->id?>"><?=$val->name?></option>
       <?php }}}?>
	  </select>
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="">
      <label class="floating-label">First Name*</label>
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="">
      <label class="floating-label">Last Name*</label>
    </div>
    <div class="form-group col-md-4 ">
	
	<span class="caret" ></span>
	  <select id="gender" name="gender" class="form-control"  >
         <option value="">Gender*</option>
        
	   <option value="male"  >Male</option>
	   <option value="female"  >Female</option>
        
      </select> 
    </div>
    <div class="form-group col-md-4 dtpicker">
      <i class="fas fa-calendar-alt"></i>
      <input type="text" id="dob" name="dob" class="form-control datepicker"  placeholder="Date of Birth" />
      <label class="floating-label">Date of Birth*</label>
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
      <label class="floating-label">Mobile*</label>
    </div>
    <div class="form-group col-md-6">
      <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email Id">
      <label class="floating-label">Email Id*</label>
    </div>
    <div class="form-group col-md-6">
      <label class="d-none">Country*</label>
      <span class="caret"></span>
      <select id="country" name="country" class="form-control">
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
	 
	
     
    <div class="form-group col-md-12">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status" value="Active">
          <label class="form-check-label" for="exampleCheck1">Create My Account</label>
        </div>
    </div>
    <div class=clearfix></div>
	<div class="form-group col-md-6 passwordconfirm d-none">
      <input type="password" class="form-control" id="c_pwd" name="password" placeholder="">
      <label class="floating-label">Password*</label>
    </div>
	<div class="form-group col-md-6 passwordconfirm d-none">
      <input type="password" class="form-control" id="pwd" name="confirm_password" placeholder="">
      <label class="floating-label">Confirm Password*</label>
    </div>
    <div class=clearfix></div>
    <div class="text-center rightproceedbutton" >
      <div class="row">
        <div class="col-lg-7"></div>
        <div class="col-lg-5">
          <button type="submit" id="submit" name="submit" class="btn btn-red"  role="button" aria-disabled="false" style="float:right;">Submit &amp; Proceed</button>
        </div>
      </div>
    </div>
    <div class=clearfix></div>
  </div>
</form>

            </div>
            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
			 <?php if(!empty($errormsg)){?>
				<h3> <?=$errormsg?></h3>
				<?php }?>
			  <?php include 'existing.php';?>
            </div>
          </div>
		  <?php } else  {?>
		   <?php include 'customer.php';?>
		  <?php }  ?>
        </div>
        <div class="col-lg-5 pb-5 search-box ordersummary">
          <div class="card mb-3">
            <div class="card-header text-center "> Order Summary </div>
            <div class="charges table-responsive" id="addTableData">
               <?php include "ajax_table.php";?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- ======= Footer ======= -->
 

<!-- ======= Modal ======= -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body search-box">
        <div class="p-3">
          <h5>DIWALI<a href="javascript:void(0)" class="btn btn-primary float-end small close"><i class="fas fa-ticket-alt"></i> Select</a></h5>
          <p><strong>Get 40% OFF up to ₹100</strong></p>
          <p class="small">Valid on orders with items worth ₹5000</p>
          <div class="clearfix"></div>
          <hr>
          <h5>NEW YEAR<a href="javascript:void(0)" class="btn btn-primary float-end small close"><i class="fas fa-ticket-alt"></i> Select</a></h5>
          <p><strong>Get 40% OFF up to ₹100</strong></p>
          <p class="small">Valid on orders with items worth ₹5000</p>
          <div class="clearfix"></div>
          <hr>
          <form id="" name="" method="post" action="checkout-search.php" class="custom-search-from" enctype="application/x-www-form-urlencoded">
            <div class="row">
              <div class="form-group col-md-9">
                <label class="d-none">First Name</label>
                <input type="text" class="form-control" id="" name="" placeholder="Discount Coupon">
              </div>
              <div class="form-group col-lg-3 text-center">
                <button type="submit" id="submit" name="submit" class="btn btn-red btn-sm px-3"  role="button" aria-disabled="false">Apply</button>
              </div>
              <div class=clearfix></div>
            </div>
          </form>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Modal --> 
 <?php include 'footer.php';?>
<script type="text/javascript">  
function ValidateDOB(dateString) 
{
        if(dateString.length > 4)
		{			
        var parts = dateString.split("-");
        var dtDOB = new Date(parts[0] + "/" + parts[1] + "/" + parts[2]);
        var dtCurrent = new Date();
       
	   alert(dtDOB.getFullYear());
        if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 18) 
		{
			return false;
        }
 
        if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {
			if (dtCurrent.getMonth() < dtDOB.getMonth()) {
				return false;
            }
            if (dtCurrent.getMonth() == dtDOB.getMonth()) {
                if (dtCurrent.getDate() < dtDOB.getDate()) {
					return false;
                }
            }
        }
         
        return true;
		}
		else
		{
			false;
		}
}
$(function()
{
      $("#exampleCheck1").click(function(){
            if ($("#exampleCheck1").is(":checked"))
                  $('.passwordconfirm').removeClass('d-none');
				else {
                   $('.passwordconfirm').addClass('d-none');
            }
      })
});
jQuery('#couponBtn').on('click', function (e) {
    $('#exampleModalCenter').modal('show');
});
jQuery('.close').on('click', function (e) {
    $('#exampleModalCenter').modal('hide');
});
jQuery('#myTab a').on('click', function (e) {
  e.preventDefault()
  jQuery(this).tab('show')
});
jQuery(function () {   
   jQuery('.datepicker').datetimepicker({
       format: 'DD-MMM-YYYY',
       autoclose: true,
       minView: 2
    });
     // Init Select2 - Basic Single
    jQuery(".select2-single").select2();
});
</script>
<script>
$("form#add_user_form").submit(function(event) 
{
	
var error = false;
   $("#title").removeClass("focus");
   $("#country").removeClass("focus");
   $("#first_name").removeClass("focus");
   $("#last_name").removeClass("focus");
   $("#emailid").removeClass("focus");
   $("#mobile").removeClass("focus");
   $("#dob").removeClass("focus");
   $("#gender").removeClass("focus");
   $("#pwd").removeClass("focus");
   $("#c_pwd").removeClass("focus");
    
   var title =  $("#title option:selected").val();
   var gender =  $("#gender option:selected").val();
 var country =   $("#country option:selected").val(); 
 var first_name =   $("#first_name").val();
 var last_name =   $("#first_name").val();
 var emailid =   $("#emailid").val();
 var mobile =   $("#mobile").val();
 var dob =   $("#dob").val();
 var c_pwd =   $("#c_pwd").val();
 var pwd =   $("#pwd").val();
  
 
 if ($("#exampleCheck1").is(":checked"))
 {
     if(pwd == "")
	 {
		$('#pwd').addClass("focus");
		$('#pwd').focus();
		error = true; 
	 }
	 if(c_pwd == "")
	 {
		$('#c_pwd').addClass("focus");
		$('#c_pwd').focus();
		error = true; 
	 }  
	if(c_pwd != pwd )
	 {
		$('#pwd').addClass("focus");
		$('#c_pwd').addClass("focus");
		$('#c_pwd').focus();
		$('#pwd').focus();
		alert('Password & confirm password not  match');
		error = true; 
	 }  	
 }
				
   
if(country == "" || country == 0){
		$('#country').addClass("focus");
		$('#country').focus();
		error = true; 
	}	  
if(title == "" || title == 0){
	$('#title').addClass("focus");
	$('#title').focus();
	error = true; 
}
if(gender == "" || gender == 0){
	$('#gender').addClass("focus");
	$('#gender').focus();
	error = true; 
}
if(title == "" || title == 0){
	$('#title').addClass("focus");
	$('#title').focus();
	error = true; 
}
if(first_name == "" || first_name.length == 2){
	$('#first_name').addClass("focus");
	$('#first_name').focus();
	error = true; 
}
if(last_name == "" ){
	$('#last_name').addClass("focus");
	$('#last_name').focus();
	error = true; 
}
if(mobile == "" ){
	$('#mobile').addClass("focus");
	$('#mobile').focus();
	error = true; 
}
if(emailid == "" ){
	$('#emailid').addClass("focus");
	$('#emailid').focus();
	error = true; 
}
if(dob == "" ){
	$('#dob').addClass("focus");
	$('#dob').focus();
	error = true; 
}
if(dob != "" && ValidateDOB(dob)==false)
 {
	alert("Date of birth not allow for adult registration.");
	$('#dob').val("");
	$('#dob').addClass("focus");
	error = true; 
	 
 }
 if(error==false)
 {
	 return true;
 }
 else
 {
	return false;
 }
  
});
</script>
</body>
</html>