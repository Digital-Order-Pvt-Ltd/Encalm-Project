<? //p($gusetdata);?>
<form id="g_addguestform" name="" method="post" action="<?=base_url('user/addguest')?>" class="custom-search-from pt-3" enctype="application/x-www-form-urlencoded">
          <div class="row">
		  
            <div class="form-group col-md-2">
              <label for="" class="d-none">Title*</label>
              <span class="caret"></span>
              <select id="g_title" name="g_title" class="form-control d-inline-block w-75 float-end">
                <option value="">Title*</option>
                 <?php if(!empty($salutation)){ $salutation_data =json_decode($salutation); 
			   if(!empty($salutation_data->datalist)){
				foreach($salutation_data->datalist as $val){
				 ?>
			   <option value="<?=$val->id?>"><?=$val->name?></option>
       <?php }}}?>
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
			
			<div class="form-group col-md-1">
				  <label for="" class="d-none">Gender</label>
				  
				  <select id="" name="g_gender" class="form-control">
					<option value="male">Male</option>
					<option value="female">Female</option>
				   
				  </select>
				  
				  
				</div>
			
            <div class="form-group col-md-2">
              <label for="" class="d-none">Date Of Birth</label>
              <input type="text" class="form-control datepicker" id="g_dob" name="g_dob" placeholder="Date Of Birth">
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Passport/Govt</label>
              <input type="text" class="form-control" id="g_passport_no" name="g_passport_no" placeholder="Passport/Govt ID">
            </div>
            <div class="form-group col-lg-1 text-center">
              <button type="button"  name="submit" class="btn btn-primary btn-sm small closeBTN float-end px-3" id="add_guests" onclick="save_guest_details('<?=base_url('user/addguest');?>')">+ ADD</button>
            </div>
</form>

<?php 
$allguest =  json_decode($gusetdata);
//p($allguest);
if(!empty($allguest))
					{ 
						if(!empty($allguest->datalist[0]->id))
						{
							$i=1;
						foreach($allguest->datalist as $val){ ?>
            <div class="clearfix mb-3"></div>
			 
            <div class="form-group col-md-2">
              <div class="form-check d-inline-block p-0">
                <input type="checkbox" class="form-check-input mx-auto mt-2 noofcheckbox" id="checked_id_<?=$i?>" onclick="AddGuestCheck(<?=$i?>)" data-id="<?=$i?>">
                <label class="form-check-label d-none" for="exampleCheck1">I am Guest</label>
              </div>
              <label for="" class="d-none">Title*</label>
              <span class="caret"></span>
              <select id="e_guest_title_<?=$val->id?>" name="" class="form-control d-inline-block w-75 float-end"  >
			  <option value="">Title*</option>
                <?php if(!empty($salutation)){ $salutation_data =json_decode($salutation); 
			   if(!empty($salutation_data->datalist)){
				foreach($salutation_data->datalist as $val1){
					$g_select = "";
					if(!empty($val->title))
					{
						$g_select = "";
						if(!empty($val->title[0])  and $val->title[0]==$val1->id)
						{
							$g_select = "selected";
						}
					}
				 ?>
			   <option value="<?=$val1->id?>" <?=$g_select;?>><?=$val1->name?></option>
       <?php }}}?>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">First Name</label>
              <input type="text" class="form-control" id="e_guest_fname_<?=$val->id?>" name="" placeholder="First Name"  value="<?=!empty($val->name)?$val->name:'';?>" readonly>
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Last Name</label>
              <input type="text" class="form-control" id="e_guest_lname_<?=$val->id?>" name="" placeholder="Last Name"  value="<?=!empty($val->last_name)?$val->last_name:'';?>" readonly>
            </div>
			
			<div class="form-group col-md-1">
				  <label for="" class="d-none">Gender</label>
				  
				  <select id="e_guest_gender_<?=$val->id?>" name="g_gender" class="form-control">
					<option value="male" <?= (!empty($val->gender) and $val->gender == 'male') ? 'selected':''; ?> >Male</option>
					<option value="female" <?= (!empty($val->gender) and $val->gender == 'female') ? 'selected':''; ?> >Female</option>
				   
				  </select>
			</div>
			
            <div class="form-group col-md-1">
              <label for="" class="d-none">Age</label>
              <input type="text" class="form-control" id="e_guest_age_<?=$val->id?>" name="" placeholder="Age"  value="<?=!empty($val->dob)?getAge($val->dob):'';?>" readonly>
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Passport/Govt</label>
              <input type="text" class="form-control" id="e_guest_passport_<?=$val->id?>" name="" placeholder="Passport/Govt ID" value="<?=!empty($val->passport)? $val->passport:'';?>" readonly>
            </div>
            <div class="form-group col-lg-2 text-center">
              <a class="btn btn-primary btn-sm small  px-3 EditGuest_<?=$val->id?>" id="EditGuest_<?=$val->id?>" onclick="EditGuestRecord(<?=$val->id?>)">+ EDIT</a>&nbsp;
              <a class="btn btn-danger btn-sm small float-end   px-3 DeleteGuest_<?=$val->id?>" onclick="deleteGuest(<?=$val->id?>);" id="DeleteGuest_<?=$val->id?>">Delete</a>
            </div>
             
			<div class="clearfix mb-3"></div>
<?php $i++;} }}?>
 
<div class="clearfix mb-3"></div>
<div class="form-group col-lg-12 text-center mt-3">
  <a class="btn btn-primary small closeBTN11 float-end"   onclick="SelectSetValue();">Select</a>
</div>

<script>
function EditGuestData(id)
{
	var error = false;
	$("#e_guest_title_"+id).removeClass("focus");
	$("#e_guest_fname_"+id).removeClass("focus");
	$("#e_guest_lname_"+id).removeClass("focus");
	$("#e_guest_passport_"+id).removeClass("focus");
	$("#e_guest_gender_"+id).removeClass("focus");
	$("#e_guest_age_"+id).removeClass("focus");
	
	var guest_title = $("#e_guest_title_"+id+" option:selected").val();
	var guest_fname =$("#e_guest_fname_"+id).val();
	var guest_lname=$("#e_guest_lname_"+id).val();
	var guest_passport = $("#e_guest_passport_"+id).val();
	var guest_gender = $("#e_guest_gender_"+id+" option:selected").val();
	var guest_age = $("#e_guest_age_"+id).val();
	
	if(guest_title == "")
		{
			$("#e_guest_title_"+id).addClass("focus");
			$("#e_guest_title_"+id).focus();
			error = true; 
		}
	if(guest_fname == "")
		{
			$("#e_guest_fname_"+id).addClass("focus");
			$("#e_guest_fname_"+id).focus();
			error = true; 
		}
	if(guest_lname == "")
		{
			$("#e_guest_lname_"+id).addClass("focus");
			$("#e_guest_lname_"+id).focus();
			error = true; 
		}
	if(guest_passport == "")
		{
			$("#e_guest_passport_"+id).addClass("focus");
			$("#e_guest_passport_"+id).focus();
			error = true; 
		}
	if(guest_gender == "")
		{
			$("#e_guest_gender_"+id).addClass("focus");
			$("#e_guest_gender_"+id).focus();
			error = true; 
		}
	if(guest_age == "" || guest_age == 0)
		{
			$("#e_guest_age_"+id).addClass("focus");
			$("#e_guest_age_"+id).focus();
			error = true; 
		}
	if(error==false)
	 {
		 $.ajax({
			type: 'POST',
			url: "<?=base_url('user/editguest')?>",
			data: {"id":id,"guest_title":guest_title,"guest_fname":guest_fname,"guest_lname":guest_lname,"guest_passport":guest_passport,"guest_gender":guest_gender,"guest_age":guest_age},
			dataType: "html",
			beforeSend : function(data){                
				$("#EditGuest_"+id).text("Wait..");
			},
			success: function(data) 
			{
				 $("#EditGuest_"+id).text("+ EDIT");
				  //$("#setGuestDataList").html('');
				  //$("#setGuestDataList").html(data);
			 
			},
			error:function(data)
			 {
				if(data.status==0){
					alert("There is no internet connection found.Please reconnect and try again!");
					return false;
				}
				if(data.status>0){
					var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
					OpenWindow.document.write(data.responseText);
					return false;					
				}
			}
		});
	 }
	 else
	 {
		return false;
	 }
}
function EditGuestRecord(id=0)
{
	$("#e_guest_title_"+id).attr("readonly", false); 
	$("#e_guest_lname_"+id).attr("readonly", false); 
	$("#e_guest_fname_"+id).attr("readonly", false); 
	$("#e_guest_passport_"+id).attr("readonly", false); 
	$("#e_guest_gender_"+id).attr("readonly", false); 
	$("#e_guest_age_"+id).attr("readonly", false); 
	$('#EditGuest_'+id).attr('onclick', '');
	$('#EditGuest_'+id).attr('onclick', 'EditGuestData('+id+')');
}

function SelectSetValue()
{
	 let len = $('.noofcheckbox').filter(':checked').length;
	if (len > 0)
	{
		alert(1);
		 
	}
	else
	{
		alert(2);
	}
}
function AddGuestCheck(id)
{
	var adult = "<?=!empty($this->session->userdata('s_adult'))?$this->session->userdata('s_adult'):0?>";
	var child = "<?=!empty($this->session->userdata('s_child'))?$this->session->userdata('s_child'):0?>";
	var infant = "<?=!empty($this->session->userdata('s_infant'))?$this->session->userdata('s_infant'):0?>";
 let x = parseInt(adult)+parseInt(child)+parseInt(infant);
 
 
 
 if($("#iamguest").prop("checked") == true){
	   x = x-1;
 }
  
 let len = $('.noofcheckbox').filter(':checked').length;
if (len > x)
	{
		alert("sorry only select "+ x +" guest.");
		$('#checked_id_'+id).prop('checked', false); 
		 
	}
	else
	{
	}		
}

function deleteGuest(id=0)
{
	$.ajax({
			type: 'POST',
			url: "<?=base_url('user/deleteguest')?>",
			data: {"id":id},
			dataType: "html",
			beforeSend : function(data){                
				$("#DeleteGuest_"+id).text("Wait..");
			},
			success: function(data) 
			{
				 $("#DeleteGuest_"+id).text("Delete");
				$("#setGuestDataList").html('');
				  $("#setGuestDataList").html(data);
			 
			},
			error:function(data)
			 {
				if(data.status==0){
					alert("There is no internet connection found.Please reconnect and try again!");
					return false;
				}
				if(data.status>0){
					var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
					OpenWindow.document.write(data.responseText);
					return false;					
				}
			}
		});
}
</script>