<?php //p(json_decode($datalist)); exit;?>
<?php include 'head.php';?>
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
            <p>My Guest List &nbsp; &nbsp;<a style="float:right;" id="addnewguest" class="btn btn-primary">Add New Guest</a></p>
			<?php if(!empty($this->session->flashdata('success'))) {?>
				
				<h3> <center><?=$this->session->flashdata('success')?></center></h3>
				
			<?php }?>
          </div>
        <table class="table table-striped table-bordered" cellpadding="0" cellspacing="0" width="100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
     
      <th scope="col">Name</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
	 <th scope="col">Passport/Govt ID</th>
	 <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
     <?php 
	$guestData =  json_decode($datalist);
	//p($guestData);
	 if(!empty($guestData) and !empty($guestData->datalist)){
	  $g = 1;
	  foreach($guestData->datalist as $guest){
		  
		  $cust_title =!empty($guest->title)?$guest->title:array(); 
		  $ctitle =!empty($cust_title[1])?$cust_title[1]:'';
		  $ctitleid =!empty($cust_title[0])?$cust_title[0]:'0';
	  ?>
    <tr>
      <td><?=$g?></td> 
      <td><?=!empty($guest->name)?$ctitle.' '.$guest->name.' '.$guest->last_name:''?>
	  <input type="hidden" id="e_name_<?=$guest->id?>" value="<?=$guest->name?>"/>
	  <input type="hidden" id="e_lname_<?=$guest->id?>" value="<?=$guest->last_name?>"/>
	  <input type="hidden" id="e_title_<?=$guest->id?>" value="<?=$ctitleid?>"/>
	  <input type="hidden" id="e_age_<?=$guest->id?>" value="<?=$guest->age?>"/>
	  <input type="hidden" id="e_gender_<?=$guest->id?>" value="<?=strtolower($guest->gender)?>"/>
	  <input type="hidden" id="e_passport_<?=$guest->id?>" value="<?=$guest->passport?>"/>
	  </td>
	  <td><?=!empty($guest->dob)?date('D, d-M-Y',strtotime($guest->dob)):''?></td>
	  <td><?=!empty($guest->age)?$guest->age:''?></td>
       <td><?=!empty($guest->gender)?ucfirst($guest->gender):''?></td>
       <td><?=!empty($guest->passport)?$guest->passport:''?></td>
       <td>
	   <a onclick="EditGuest(<?=$guest->id?>)" class="btn btn-primary  btn-sm small">+Edit</a>
	   
	   <!--a href="<?=base_url('user/removeguest/'.$guest->id);?>" class="btn btn-danger  btn-sm small">Removed</a-->
	   
	   </td>
      
    </tr>
  <?php $g++;}}?>
  </tbody>
</table>
        </div>
      </div>
    </div>
  </section>
</main>
<div class="modal fade" id="AddGuestModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body search-box px-4">
        <h3 class="modal-title" id="exampleModalLabel">Add New Guest</h3>
		<div id="setGuestDataList">
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
              <button type="button"  name="submit" class="btn btn-primary btn-sm small  float-end px-3" id="add_guests" onclick="save_guest_details('<?=base_url('user/addguest');?>','<?=base_url('user/myguest');?>')">+ ADD</button>
            </div>
</form>

		<div class="clearfix mb-3"></div>
	        <div class="form-group col-lg-12 text-center mt-3">
              <a class="btn btn-primary small closeBTN float-end">Close</a>
            </div>
          </div>
       </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="EditGuestModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body search-box px-4">
        <h3 class="modal-title" id="exampleModalLabel">Edit Guest</h3>
		<div id="setGuestDataList">
          <div class="row">
		  
            <div class="form-group col-md-2">
              <label for="" class="d-none">Title*</label>
              <span class="caret"></span>
              <select id="e_guest_title_1" name="" class="form-control d-inline-block w-75 float-end">
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
              <input type="text" class="form-control" id="e_guest_fname_1" name="" placeholder="First Name" />
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Last Name</label>
              <input type="text" class="form-control" id="e_guest_lname_1" name="" placeholder="Last Name">
            </div>
			
			<div class="form-group col-md-1">
				  <label for="" class="d-none">Gender</label>
				  
				  <select id="e_guest_gender_1" name="" class="form-control">
					<option value="male">Male</option>
					<option value="female">Female</option>
				   
				  </select>
				  
				  
				</div>
			
            <div class="form-group col-md-2">
              <label for="" class="d-none">Age</label>
              <input type="text" class="form-control " id="e_guest_age_1" name="" placeholder="Age">
            </div>
            <div class="form-group col-md-2">
              <label for="" class="d-none">Passport/Govt</label>
              <input type="text" class="form-control" id="e_guest_passport_1" name="" placeholder="Passport/Govt ID">
            </div>
            <div class="form-group col-lg-1 text-center">
<a class="btn btn-primary btn-sm small  px-3 EditGuest_1" id="EditGuest_1">Update</a>&nbsp;        </div>

		<div class="clearfix mb-3"></div>
		 <div class="col-md-12" Style="color:red;text-align:center" id="setEditMsg"> </div>
		<div class="clearfix mb-3"></div>
	        <div class="form-group col-lg-12 text-center mt-3">
              <a class="btn btn-primary small closeBTN float-end">Close</a>
            </div>
          </div>
       </div>
      </div>
    </div>
  </div>
</div>
<!-- ======= Footer ======= -->
<?php include 'footer.php';?>
 <script>
 jQuery('#addnewguest').on('click', function (e) {
  $('#g_addguestform').trigger("reset");
 $('#AddGuestModel').modal('show');
});
function EditGuest(id)
{ 
var ti = $('#e_title_'+id).val();
var fn =$('#e_name_'+id).val();
var ln =$('#e_lname_'+id).val();
var ag = $('#e_age_'+id).val();
var ge = $('#e_gender_'+id).val();
var pa = $('#e_passport_'+id).val();

	$('#EditGuest_1').attr('onclick', '');
	$('#EditGuest_1').attr('onclick', 'EditGuestData('+id+')');
	
	$('#e_guest_title_1 option:selected').removeAttr('selected');
	$('#e_guest_gender_1 option:selected').removeAttr('selected');

	
	$('#e_guest_title_1 option[value='+ti+']').attr('selected','selected');
	$('#e_guest_gender_1 option[value='+ge+']').attr('selected','selected');

	//$("#e_guest_title_1").val();
	
	
	$("#e_guest_fname_1").val(fn);
	$("#e_guest_lname_1").val(ln);
	$("#e_guest_passport_1").val(pa);
	
	$("#e_guest_age_1").val(ag);
	$('#EditGuestModel').modal('show');
}
function EditGuestData(id)
{
	var error = false;
	$("#e_guest_title_1").removeClass("focus");
	$("#e_guest_fname_1").removeClass("focus");
	$("#e_guest_lname_1").removeClass("focus");
	$("#e_guest_passport_1").removeClass("focus");
	$("#e_guest_gender_1").removeClass("focus");
	$("#e_guest_age_1").removeClass("focus");
	var guest_title = $("#e_guest_title_1  option:selected").val();
	var guest_fname =$("#e_guest_fname_1").val();
	var guest_lname=$("#e_guest_lname_1").val();
	var guest_passport = $("#e_guest_passport_1").val();
	var guest_gender = $("#e_guest_gender_1 option:selected").val();
	var guest_age = $("#e_guest_age_1").val();
	
	if(guest_title == "")
		{
			$("#e_guest_title_1").addClass("focus");
			$("#e_guest_title_1").focus();
			error = true; 
		}
	if(guest_fname == "")
		{
			$("#e_guest_fname_1").addClass("focus");
			$("#e_guest_fname_1").focus();
			error = true; 
		}
	if(guest_lname == "")
		{
			$("#e_guest_lname_1").addClass("focus");
			$("#e_guest_lname_1").focus();
			error = true; 
		}
	if(guest_passport == "")
		{
			$("#e_guest_passport_1").addClass("focus");
			$("#e_guest_passport_1").focus();
			error = true; 
		}
	if(guest_gender == "")
		{
			$("#e_guest_gender_1").addClass("focus");
			$("#e_guest_gender_1").focus();
			error = true; 
		}
	if(guest_age == "" || guest_age == 0)
		{
			$("#e_guest_age_1").addClass("focus");
			$("#e_guest_age_1").focus();
			error = true; 
		}
	if(error==false)
	 {
		 $.ajax({
			type: 'POST',
			url: "<?=base_url('user/editguest')?>",
			data: {"id":id,"guest_title":guest_title,"guest_fname":guest_fname,"guest_lname":guest_lname,"guest_passport":guest_passport,"guest_gender":guest_gender,"guest_age":guest_age},
			dataType: "json",
			beforeSend : function(data){                
				$("#EditGuest_1").text("Wait..");
			},
			success: function(data) 
			{
				const item=data;
				 $("#EditGuest_1").text("Update");
				  $("#setEditMsg").html('');
				  $("#setEditMsg").html(item.message);
			 
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
 jQuery(".closeBTN").on('click', function (e) {
	 $('#EditGuestModel').modal('hide');
	 $('#AddGuestModel').modal('hide');
 });
 </script>
</body>
</html>