<?php include 'head.php';?>
<?php include 'top-menu.php';?>
<?php include 'purchase-history.php';?>
<main id="main"> 
  <!-- ======= number Section ======= -->
  <?php include 'number.php';?>
  <section class="mamber-card-checkout">
    <div class="container search-box">
	<form id="userentry" name="userentry" method="post" action="<?=base_url('home/placeorderlounge');?>" class="custom-search-from custom-add-item formfloats" enctype="application/x-www-form-urlencoded">
	<input type="hidden" name="o_booking_id" value="<?=$o_booking_id?>"/>
	<input type="hidden" name="booking_id" value="<?=$booking_id?>"/>
      <div class="row">
	 
        <div class="col-md-7 search-box">
          <div class="section-title">
            <p>Guest Details  </p>
          </div>
          <div class="table-responsive overflow-hidden" style="padding-right: 15px; padding-left:15px;">
            <div class="row pad-15 d-flex align-items-center mb-3">
				<div class="form-group col-md-6">
				  <div class="form-check">
					<input type="radio" name="guest_type" class="form-check-input" value="<?=$this->session->userdata("s_customer_data")['o_id']?>" checked onclick="getGuestType(1);" />
					<label class="form-check-label" for="iamguest">I am Guest</label>  
				  </div>
				</div>
				
				<div class="form-group col-md-6">
				  <div class="form-check">
					<input type="radio" name="guest_type" class="form-check-input" value="2"  onclick="getGuestType(2);">
					<label class="form-check-label" for="iamguest">Kindly Provide details of Lead Guest</label>  
				  </div>
				</div>
			</div>
			 <div class="row d-flex align-items-center mb-3 justify-content-end">
				<div class="form-group col-md-4 pd-10">
				  <label for="" class="d-none">Title*</label>
				  <span class="caret"></span>
					<select id="lounge_title" name="lounge_title" class="form-control ">
						<option value="">Title*</option>
					   <?php if(!empty($salutation)){ $salutation_data =json_decode($salutation); 
					   if(!empty($salutation_data->datalist)){
						foreach($salutation_data->datalist as $val){
							$c_select='';
							if(!empty($this->session->userdata("s_customer_data")['title'])  and $val->id==$this->session->userdata("s_customer_data")['title']){$c_select='selected';}
			 
					   ?>
					   <option value="<?=$val->id?>" <?=$c_select?>><?=$val->name?></option>
					   <?php }}}?>
					</select>
				</div>
				<div class="form-group col-md-4 pd-10">
         			  <input type="text" class="form-control" id="lounge_first_name" name="lounge_first_name" placeholder="" value="<?=$this->session->userdata('s_customer_data')['first_name']?>">
					  <label for="" class="floating-label">First Name*</label>
				</div>
				<div class="form-group col-md-4 pd-10">
         			  <input type="text" class="form-control" id="lounge_last_name" name="lounge_last_name" placeholder="" value="<?=$this->session->userdata('s_customer_data')['last_name']?>">
					  <label for="" class="floating-label">Last Name*</label>
				</div>
				<div class="form-group col-md-3 pd-10">
				  <span class="caret"></span>
				  <select id="lounge_gender" name="lounge_gender" class="form-control">
					<option value="">Gender* </option>
					<option value="male" <?php if(!empty($this->session->userdata("s_customer_data")['gender']) and ($this->session->userdata("s_customer_data")['gender']=='male')) echo 'selected'; ?>>Male</option>
					<option value="female" <?php if(!empty($this->session->userdata("s_customer_data")['gender']) and ($this->session->userdata("s_customer_data")['gender']=='female')) echo 'selected'; ?>>Female</option>
				  </select>
				</div>
				<div class="form-group col-md-3 pd-10">
				  <input type="text" class="form-control" id="lounge_age" name="lounge_age" placeholder="" value="<?=$this->session->userdata('s_customer_data')['current_age']?>">
				  <label for="" class="floating-label">Age*</label>
				</div>
				<div class="form-group col-md-2 pd-10">
				  <span class="caret"></span>
				  <select id="lounge_country_code" name="lounge_country_code" class="form-control">
				  <option value="">Select Country code*</option>
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
				<div class="form-group col-md-4 pd-10 onlydigit">
				  <input type="text" class="form-control digitvalidate" id="lounge_mobile" name="lounge_mobile" placeholder="" value="<?=$this->session->userdata('s_customer_data')['mobile']?>">
				  <label for="" class="floating-label">Mobile No.</label>
				</div>
				<div class="form-group col-md-4"></div>
				<div class="form-group col-md-4"></div>
				<div class=clearfix></div>
			 </div>
          </div>
           
        </div>
		<div class="col-md-5 search-box">
            
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
					<span class="caret"></span>
					<select id="billing_state" name="billing_state" class="form-control">
					<option value="">Select State</option>
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
<button type="submit" id="submit" name="submit" class="btn btn-primary w-100"  role="button" aria-disabled="false">Proceed to Checkout</button>
           
        </div>
	  
	  </form>
    </div>
  </section>
</main>
 
<?php include 'footer.php';?>
<script type="text/javascript">
function getGuestType(val)
{
	var gender = "<?=$this->session->userdata('s_customer_data')['gender']?>";
	var title = "<?=$this->session->userdata('s_customer_data')['title']?>";
	var country_code = "<?=$this->session->userdata('s_customer_data')['country_code']?>";
	$("#lounge_title option:selected").removeAttr("selected");
	$("#lounge_gender option:selected").removeAttr("selected");
	$("#lounge_country_code option:selected").removeAttr("selected");
	$("#lounge_first_name").val("");
	$("#lounge_last_name").val("");
	$("#lounge_age").val("");
	$("#lounge_mobile").val("");
	if(val==1)
	{
		if(country_code=='') { country_code = '91'}
		$('#lounge_title option[value="'+title+'"]').attr("selected", "selected");
		
		$('#lounge_gender option[value="'+gender+'"]').attr("selected", "selected");
		$('#lounge_country_code option[value="'+country_code+'"]').attr("selected", "selected");

		$("#lounge_first_name").val("<?=$this->session->userdata('s_customer_data')['first_name']?>");
		
		$("#lounge_last_name").val("<?=$this->session->userdata('s_customer_data')['last_name']?>");
		$("#lounge_age").val("<?=$this->session->userdata('s_customer_data')['current_age']?>");
		$("#lounge_mobile").val("<?=$this->session->userdata('s_customer_data')['mobile']?>");
	}
	else
	{
		$('#lounge_country_code option[value="91"]').attr("selected", "selected");
	}
}
$("form#userentry").submit(function(event) 
{
	var error = false;
	$("#lounge_country_code").removeClass("focus");
	$("#lounge_age").removeClass("focus");
	$("#lounge_gender").removeClass("focus");
	$("#lounge_last_name").removeClass("focus");
	$("#lounge_first_name").removeClass("focus");
	$("#lounge_title").removeClass("focus");
	$("#lounge_mobile").removeClass("focus");
 
 
 
	if($("#lounge_country_code option:selected").val() == "")
		{
			$("#lounge_country_code").addClass("focus");
			$("#lounge_country_code").focus();
			error = true; 
		}
	if($("#lounge_age").val() == "" ||  $("#lounge_age").val() == 0)
		{
			$("#lounge_age").addClass("focus");
			$("#lounge_age").focus();
			error = true; 
		}
		if($("#lounge_first_name").val() == "")
		{
			$("#lounge_first_name").addClass("focus");
			$("#lounge_first_name").focus();
			error = true; 
		}
	if($("#lounge_last_name").val() == "")
		{
			$("#lounge_last_name").addClass("focus");
			$("#lounge_last_name").focus();
			error = true; 
		}
    if($("#lounge_mobile").val() == "")
		{
			$("#lounge_mobile").addClass("focus");
			$("#lounge_mobile").focus();
			error = true; 
		}
if($("#lounge_gender option:selected").val() == "")
		{
			$("#lounge_gender").addClass("focus");
			$("#lounge_gender").focus();
			error = true; 
		}
if($("#lounge_title option:selected").val() == "")
		{
			$("#lounge_title").addClass("focus");
			$("#lounge_title").focus();
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
</body>
</html>