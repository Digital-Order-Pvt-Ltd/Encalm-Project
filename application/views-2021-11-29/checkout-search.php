<?php 
/*  $allcoupon =  json_decode($coupondata);
 $allguest =  json_decode($gusetdata);
$allorder =  json_decode($orderdata);
p($allcoupon);
p($allguest);
p($allorder); 
exit;  */
?> 
 <?php include 'head.php';?>
<!-- ======= Header ======= -->
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
   
<!-- End Header --> 

<!-- ======= Hero Section ======= -->
<?php include 'purchase-history.php';?>
<!-- End Hero -->

<main id="main"> 
  <!-- ======= number Section ======= -->
  <?php include 'number.php';?>
  <section class="mamber-card-checkout">
    <div class="container search-box">
	<form id="userentry" name="userentry" method="post" action="<?=base_url('home/placeorder');?>" class="custom-search-from custom-add-item" enctype="application/x-www-form-urlencoded">
	<input type="hidden" name="o_booking_id" value="<?=$o_booking_id?>"/>
	<input type="hidden" name="booking_id" value="<?=$booking_id?>"/>
      <div class="row">
	 
        <div class="col-md-8 search-box">
          <div class="section-title">
            <p>Guest Details<!--a href="javascript:void(0)" class="small float-end" id="guestlist"><span class="small"><span class="small"><u>My Guest List</u></span></span></a--></p>
          </div>
          <div class="table-responsive overflow-hidden">
            <?php include 'userentry.php';?>
          </div>
          <hr>
          <div class="section-title">
            <p>Placard Details</p>
          </div>
          <div class="table-responsive overflow-hidden">
            <?php include 'placard.php';?>
          </div>
        </div>
        <div class="col-md-4">
          <?php include 'confirm_order.php';?>
        </div>
      </div>
	  </form>
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
		
		<?php 
		if(!empty($allcoupon->datalist[0]->id))
		{
			foreach($allcoupon->datalist as $val){ ?>
          <h5 id="promo_code_<?=!empty($val->id)?$val->id:0;?>"><?=!empty($val->promo_code)?$val->promo_code:0;?><a onclick="SelectCoupon(<?=!empty($val->id)?$val->id:0;?>,'<?=!empty($val->discount_type)?$val->discount_type:0;?>','<?=!empty($val->discount_percentage)?$val->discount_percentage:0;?>','<?=!empty($val->rule_minimum_amount)?$val->rule_minimum_amount:0;?>','<?=!empty($val->promo_code)?$val->promo_code:'';?>');" class="btn btn-primary float-end small close couponclass" id="coupon_id_<?=!empty($val->id)?$val->id:0;?>"><i class="fas fa-ticket-alt"></i> Select</a></h5>
          <p><strong><?=!empty($val->name)?$val->name:0;?></strong></p>
          <p class="small">Valid on orders with items worth ₹<?=!empty($val->rule_minimum_amount)?$val->rule_minimum_amount:0;?></p>
		  
		  <p class="small">Validity Till : <?=!empty($val->rule_date_to)?date('D, d-M-Y',strtotime($val->rule_date_to)):0;?></p>
          <div class="clearfix"></div>
          <hr>
		<?php }}?> 
           
            <div class="row">
              <div class="form-group col-md-9">
                <label class="d-none">First Name</label>
                <input type="text" class="form-control" id="apply_coupon_text" name="" placeholder="Discount Coupon">
              </div>
              <div class="form-group col-lg-3 text-center">
                <button type="button" name="submit" class="btn btn-primary btn-sm px-3 applyccbtn"  role="button" aria-disabled="false" onclick="ValidateCouponCode('<?=base_url('ajaxcall/getApiData')?>')">Apply</button>
              </div>
			  
			  <div class="form-group col-lg-12 text-center" style="color:red" id="errorcouponmsg">
              </div>
              <div class=clearfix></div>
            </div>
          
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body search-box px-4">
        <h3 class="modal-title" id="exampleModalLabel">Guest List</h3>
		<div id="setGuestDataList">
        <form id="g_addguestform" name="" method="post" action="<?=base_url('user/addguest')?>" class="custom-search-from pt-3" enctype="application/x-www-form-urlencoded">
          <div class="row">
		  
            <div class="form-group col-md-2">
              <label for="" class="d-none">Title*</label>
              <span class="caret"></span>
              <select id="g_title" name="g_title" class="form-control d-inline-block w-75 float-end">
                <option value="" selected="selected">Title*</option>
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Ms.">Ms.</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">First Name</label>
              <input type="text" class="form-control" id="g_first_name" name="g_first_name" placeholder="First Name" />
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Last Name</label>
              <input type="text" class="form-control" id="g_last_name" name="g_last_name" placeholder="Last Name">
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Date Of Birth</label>
              <input type="text" class="form-control datepicker" id="g_dob" name="g_dob" placeholder="Date Of Birth">
            </div>
            <div class="form-group col-md-3">
              <label for="" class="d-none">Passport/Govt</label>
              <input type="text" class="form-control" id="g_passport_no" name="g_passport_no" placeholder="Passport/Govt ID">
            </div>
            <div class="form-group col-lg-1 text-center">
              <button type="button"  name="submit" class="btn btn-primary btn-sm small closeBTN float-end px-3" id="add_guests" onclick="save_guest_details('<?=base_url('user/addguest');?>')">+ ADD</button>
            </div>
		</form>
		<div class="clearfix mb-3"></div>
			 
					<?php if(!empty($allguest))
					{ 
						if(!empty($allguest->datalist[0]->id))
						{
						foreach($allguest->datalist as $val){ ?>
            
            <div class="form-group col-md-2">
              <div class="form-check d-inline-block p-0">
                <input type="checkbox" class="form-check-input mx-auto mt-2" id="exampleCheck1">
                <label class="form-check-label d-none" for="exampleCheck1">I am Guest</label>
              </div>
              <label for="" class="d-none">Title*</label>
              <span class="caret"></span>
              <select id="" name="" class="form-control d-inline-block w-75 float-end" disabled>
                <option value="">Title*</option>
                <option value="mr" selected="selected">Mr.</option>
                <option value="mrs">Mrs.</option>
                <option value="ms">Ms.</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">First Name</label>
              <input type="text" class="form-control" id="" name="" placeholder="First Name"  value="<?=!empty($val->name)?$val->name:'';?>" readonly>
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Last Name</label>
              <input type="text" class="form-control" id="" name="" placeholder="Last Name"  value="<?=!empty($val->last_name)?$val->last_name:'';?>" readonly>
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Age</label>
              <input type="text" class="form-control" id="" name="" placeholder="Age"  value="<?=!empty($val->dob)?getAge($val->dob):'';?>" readonly>
            </div>
            <div class="form-group col-md-3">
              <label for="" class="d-none">Passport/Govt</label>
              <input type="text" class="form-control" id="" name="" placeholder="Passport/Govt ID" value="<?=!empty($val->passport)? $val->passport:$val->gov_id;?>" readonly>
            </div>
            <div class="form-group col-lg-1 text-center">
              <button type="submit" id="submit" name="submit" class="btn btn-primary btn-sm small closeBTN float-end px-3"  role="button" aria-disabled="false">+ EDIT</button>
            </div>
			<div class="clearfix mb-3"></div>
					<?php } }}?>
			
			 
			
            <div class="form-group col-lg-12 text-center mt-3">
              <button type="submit" id="submit" name="submit" class="btn btn-primary small closeBTN float-end"  role="button" aria-disabled="false">Select</button>
            </div>
          </div>
       </div>
      </div>
    </div>
  </div>
</div> 

<!-- End Modal --> 
<?php include 'footer.php';?>
<script type="text/javascript">
$("form#userentry").submit(function(event) 
{
	var error = false;
	var inf  = "<?=$this->session->userdata('s_infant')?>";
	var chi = "<?=$this->session->userdata('s_child')?>";
	var adu  = "<?=$this->session->userdata('s_adult')?>";
	
	
	let child = parseInt(chi);
	let infant = parseInt(inf);
	let adult = parseInt(adu);
	//alert(infant+child+adult);
	for (let i = 1; i <= child; i++) 
	{
		$("#child_title_"+i).removeClass("focus");
		$("#child_first_name_"+i).removeClass("focus");
		$("#child_last_name_"+i).removeClass("focus");
		$("#child_gender_"+i).removeClass("focus");
		$("#child_age_"+i).removeClass("focus");
		$("#child_pnr_"+i).removeClass("focus");
		$("#child_passport_"+i).removeClass("focus");
		$("#child_class_"+i).removeClass("focus");
		//if($("#child_title_"+i).val() == "")
		if($("#child_title_"+i+" option:selected").val() == "")
		{
			$("#child_title_"+i).addClass("focus");
			$("#child_title_"+i).focus();
			error = true; 
		}
		if($("#child_class_"+i+" option:selected").val() == "")
		{
			$("#child_class_"+i).addClass("focus");
			$("#child_class_"+i).focus();
			error = true; 
		}
		if($("#child_gender_"+i+" option:selected").val() == "")
		{
			$("#child_gender_"+i).addClass("focus");
			$("#child_gender_"+i).focus();
			error = true; 
		}
		if($("#child_first_name_"+i).val() == "")
		{
			$("#child_first_name_"+i).addClass("focus");
			$("#child_first_name_"+i).focus();
			error = true; 
		}
		if($("#child_last_name_"+i).val() == "")
		{
			$("#child_last_name_"+i).addClass("focus");
			$("#child_last_name_"+i).focus();
			error = true; 
		}
		if($("#child_age_"+i).val() == "")
		{
			$("#child_age_"+i).addClass("focus");
			$("#child_age_"+i).focus();
			error = true; 
		}
		if($("#child_pnr_"+i).val() == "")
		{
			$("#child_pnr_"+i).addClass("focus");
			$("#child_pnr_"+i).focus();
			error = true; 
		}
		if($("#child_passport_"+i).val() == "")
		{
			$("#child_passport_"+i).addClass("focus");
			$("#child_passport_"+i).focus();
			error = true; 
		}
		
	}
	for (let i = 1; i <= adult; i++) 
	{
 		$("#adult_title_"+i).removeClass("focus");
		$("#adult_first_name_"+i).removeClass("focus");
		$("#adult_last_name_"+i).removeClass("focus");
		$("#adult_gender_"+i).removeClass("focus");
		$("#adult_age_"+i).removeClass("focus");
		$("#adult_pnr_"+i).removeClass("focus");
		$("#adult_passport_"+i).removeClass("focus");
		$("#adult_class_"+i).removeClass("focus");
		
		if($("#adult_title_"+i+" option:selected").val() == "")
		{
			$("#adult_title_"+i).addClass("focus");
			$("#adult_title_"+i).focus();
			error = true; 
		}
		if($("#adult_class_"+i+" option:selected").val() == "")
		{
			$("#adult_class_"+i).addClass("focus");
			$("#adult_class_"+i).focus();
			error = true; 
		}
		if($("#adult_gender_"+i+" option:selected").val() == "")
		{
			$("#adult_gender_"+i).addClass("focus");
			$("#adult_gender_"+i).focus();
			error = true; 
		}
		if($("#adult_first_name_"+i).val() == "")
		{
			$("#adult_first_name_"+i).addClass("focus");
			$("#adult_first_name_"+i).focus();
			error = true; 
		}
		if($("#adult_last_name_"+i).val() == "")
		{
			$("#adult_last_name_"+i).addClass("focus");
			$("#adult_last_name_"+i).focus();
			error = true; 
		}
		if($("#adult_age_"+i).val() == "")
		{
			$("#adult_age_"+i).addClass("focus");
			$("#adult_age_"+i).focus();
			error = true; 
		}
		if($("#adult_pnr_"+i).val() == "")
		{
			$("#adult_pnr_"+i).addClass("focus");
			$("#adult_pnr_"+i).focus();
			error = true; 
		}
		if($("#adult_passport_"+i).val() == "")
		{
			$("#adult_passport_"+i).addClass("focus");
			$("#adult_passport_"+i).focus();
			error = true; 
		}
		
	}
	for (let i = 1; i <= infant; i++) 
	{
 		$("#infant_title_"+i).removeClass("focus");
		$("#infant_first_name_"+i).removeClass("focus");
		$("#infant_last_name_"+i).removeClass("focus");
		$("#infant_gender_"+i).removeClass("focus");
		$("#infant_age_"+i).removeClass("focus");
		$("#infant_pnr_"+i).removeClass("focus");
		$("#infant_passport_"+i).removeClass("focus");
		$("#infant_class_"+i).removeClass("focus");
		
		if($("#infant_title_"+i+" option:selected").val() == "")
		{
			$("#infant_title_"+i).addClass("focus");
			$("#infant_title_"+i).focus();
			error = true; 
		}
		if($("#infant_class_"+i+" option:selected").val() == "")
		{
			$("#infant_class_"+i).addClass("focus");
			$("#infant_class_"+i).focus();
			error = true; 
		}
		if($("#infant_gender_"+i+" option:selected").val() == "")
		{
			$("#infant_gender_"+i).addClass("focus");
			$("#infant_gender_"+i).focus();
			error = true; 
		}
		if($("#infant_first_name_"+i).val() == "")
		{
			$("#infant_first_name_"+i).addClass("focus");
			$("#infant_first_name_"+i).focus();
			error = true; 
		}
		if($("#infant_last_name_"+i).val() == "")
		{
			$("#infant_last_name_"+i).addClass("focus");
			$("#infant_last_name_"+i).focus();
			error = true; 
		}
		if($("#infant_age_"+i).val() == "")
		{
			$("#infant_age_"+i).addClass("focus");
			$("#infant_age_"+i).focus();
			error = true; 
		}
		if($("#infant_pnr_"+i).val() == "")
		{
			$("#infant_pnr_"+i).addClass("focus");
			$("#infant_pnr_"+i).focus();
			error = true; 
		}
		if($("#infant_passport_"+i).val() == "")
		{
			$("#infant_passport_"+i).addClass("focus");
			$("#infant_passport_"+i).focus();
			error = true; 
		}
	}
if(error==false)
 {
	 return true;
 }
 else
 {
	return false;
 }
 //return false;
});
function get_your_guest_list()
{
	$.ajax({
			type: 'POST',
			 
			url: "<?=base_url('user/get_your_guest_list');?>",
			data: {'coupon_code':apply_coupon,"RequestType":'ValidateCouponCode','MethodName':'get_discount_coupon_by_code'},
			dataType: "json",
			 	success: function(data) { 
				 $("#setYourGuestList").html('');
				 $("#setYourGuestList").html(data);
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
jQuery('#couponBtn').on('click', function (e) {
    $('#exampleModalCenter').modal('show');
});
jQuery('.close').on('click', function (e) {
    //$('#exampleModalCenter').modal('hide');
    //$('#exampleModal').modal('hide');
});
jQuery('#guestlist').on('click', function (e) {
 $('#exampleModal').modal('show');
	$.ajax({
			type: 'POST',
			url: "<?=base_url('user/get_your_guest_list')?>",
			data: {},
			dataType: "html",
			 	success: function(data) { 
				  
				  $("#setGuestDataList").html('');
				  $("#setGuestDataList").html(data);
				/* //var item=JSON.parse(data);
				const item=data;
			//	 alert(item.message);
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					// var html='<ul class="hidedata">';
					 	 var html='<option value="" selected="selected">Starting From</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'">'+ItemArray[i].name+'</option>';
							  
						 }
						 html+='</ul>';
						 $("#AStartFromAirport").html('');
						 $("#AStartFromAirport").html(html);
					 

				 }
				 //console.log(item);
                 // console.log(item.datalist);
                //console.log(item.datalist[0]);
				//console.log(item.datalist[0].id); */
				
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
	
    
});
jQuery(".closeBTN").on('click', function (e) {
   // $('#exampleModal').modal('hide');
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
if ($('input.checkbox_check').attr('checked')) {
    
    jQuery(".gstsection").removeClass("gstsection");
}
    function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("gstsection");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "flex";
  } else {
    text.style.display = "none";
  }
} 
</script>
</body>
</html>