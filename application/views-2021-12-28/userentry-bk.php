


<?php if(!empty($this->session->userdata('s_adult'))){ ?>

<div class="row d-flex align-items-center mb-3">
    <div class="form-group col-md-12">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="iamguest">
        <label class="form-check-label" for="iamguest">I am Guest</label>
      </div>
    </div>
</div>
<?php for($i=1;$i<=$this->session->userdata('s_adult');$i++){ ?>
  <div class="row d-flex align-items-center mb-3 s_adult" id="s_adult_<?php echo $i; ?>">
     
    <div class="form-group col-md-1 pe-0"><span class="btn-primary text-center w-100  d-inline-block small" style="line-height: 44px">Adult <?=$i?></span></div>
    <div class="form-group col-md-2">
      <label for="" class="d-none">Title*</label>
      <span class="caret"></span>
	  
	  
      <select id="adult_title_<?=$i?>" name="adult_title[]" class="form-control title">
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
      <input type="text" class="form-control first_name" id="adult_first_name_<?=$i?>" name="adult_first_name[]" placeholder="First Name">
    </div>
    <div class="form-group col-md-2">
      <label for="" class="d-none">Last Name</label>
      <input type="text" class="form-control last_name" id="adult_last_name_<?=$i?>" name="adult_last_name[]" placeholder="Last Name">
    </div>
	<div class="form-group col-md-1">
      <label for="" class="d-none">Gender</label>
	  
	  <select id="adult_gender_<?=$i?>" name="adult_gender[]" class="form-control">
        <option value="male">Male</option>
        <option value="female">Female</option>
       
      </select>
	  
      
    </div>
	
    <div class="form-group col-md-1">
      <label for="" class="d-none">Age</label>
      <input type="text" class="form-control age" id="adult_age_<?=$i?>" name="adult_age[]" placeholder="Age">
    </div>
    <div class="form-group col-md-2">
      <label for="" class="d-none">PNR No.</label>
      <input type="text" class="form-control pnr" id="adult_pnr_<?=$i?>" name="adult_pnr[]" placeholder="PNR No.">
    </div>
    <div class="form-group col-md-2">
      <label for="" class="d-none">Passport/Govt</label>
      <input type="text" class="form-control passport" id="adult_passport_<?=$i?>" name="adult_passport[]" placeholder="Passport/Govt ID">
    </div>
    <div class=clearfix></div>
  </div>
<?php  }}?>
<?php if(!empty($this->session->userdata('s_child'))){ for($i=1;$i<=$this->session->userdata('s_child');$i++){ ?>
  <div class="row d-flex align-items-center mb-3 s_child" id="s_child_<?php echo $i; ?>">
    <div class="form-group col-md-1 pe-0"><span class="btn-primary text-center w-100 d-inline-block small" style="line-height: 44px">Child <?=$i?></span></div>
    <div class="form-group col-md-2">
      <label for="" class="d-none">Title*</label>
      <span class="caret"></span>
      <select id="child_title_<?=$i?>" name="child_title[]" class="form-control title">
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
      <input type="text" class="form-control first_name" id="child_first_name_<?=$i?>" name="child_first_name[]" placeholder="First Name">
    </div>
    <div class="form-group col-md-2">
      <label for="" class="d-none">Last Name</label>
      <input type="text" class="form-control last_name" id="child_last_name_<?=$i?>" name="child_last_name[]" placeholder="Last Name">
    </div>
	<div class="form-group col-md-1">
      <label for="" class="d-none">Gender</label>
	  
	  <select id="child_gender_<?=$i?>" name="child_gender[]" class="form-control gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
       
      </select>
	  
      
    </div>
	
    <div class="form-group col-md-1">
      <label for="" class="d-none">Age</label>
      <input type="text" class="form-control age" id="child_age_<?=$i?>" name="child_age[]" placeholder="Age">
    </div>
    <div class="form-group col-md-2">
      <label for="" class="d-none">PNR No.</label>
      <input type="text" class="form-control pnr" id="child_pnr_<?=$i?>" name="child_pnr[]" placeholder="PNR No.">
    </div>
    <div class="form-group col-md-2">
      <label for="" class="d-none">Passport/Govt</label>
      <input type="text" class="form-control passport" id="child_passport_<?=$i?>" name="child_passport[]" placeholder="Passport/Govt ID">
    </div>
    <div class=clearfix></div>
  </div>
  <?php  }}?>
  
  
  
  <?php if(!empty($this->session->userdata('s_infant'))){ for($i=1;$i<=$this->session->userdata('s_infant');$i++){ ?>
  <div class="row d-flex align-items-center mb-3 s_infant" id="s_infant_<?php echo $i; ?>">
    <div class="form-group col-md-1 pe-0"><span class="btn-primary text-center w-100 d-inline-block small" style="line-height: 44px">Infant <?=$i?></span></div>
    <div class="form-group col-md-2">
      <label for="" class="d-none">Title*</label>
      <span class="caret"></span>
      <select id="infant_title_<?=$i?>" name="infant_title[]" class="form-control title">
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
      <input type="text" class="form-control first_name" id="infant_first_name_<?=$i?>" name="infant_first_name[]" placeholder="First Name">
    </div>
    <div class="form-group col-md-2">
      <label for="" class="d-none">Last Name</label>
      <input type="text" class="form-control last_name" id="infant_last_name_<?=$i?>" name="infant_last_name[]" placeholder="Last Name">
    </div>
	<div class="form-group col-md-1">
      <label for="" class="d-none">Gender</label>
	  
	  <select id="infant_gender_<?=$i?>" name="infant_gender[]" class="form-control gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
       
      </select>
	  
      
    </div>
	
    <div class="form-group col-md-1">
      <label for="" class="d-none">Age</label>
      <input type="text" class="form-control age" id="infant_age_<?=$i?>" name="infant_age[]" placeholder="Age">
    </div>
    <div class="form-group col-md-2">
      <label for="" class="d-none">PNR No.</label>
      <input type="text" class="form-control pnr" id="infant_pnr_<?=$i?>" name="infant_pnr[]" placeholder="PNR No.">
    </div>
    <div class="form-group col-md-2">
      <label for="" class="d-none">Passport/Govt</label>
      <input type="text" class="form-control passport" id="infant_passport_<?=$i?>" name="infant_passport[]" placeholder="Passport/Govt ID">
    </div>
    <div class=clearfix></div>
  </div>
  <?php  }}?>

<script>
 
$('#iamguest').click(function(){
	var gender = "<?=$this->session->userdata('s_customer_data')['gender']?>";
	var title = "<?=$this->session->userdata('s_customer_data')['title']?>";
            if($(this).prop("checked") == true){
                alert("Checkbox is checked.");
				
				$('#adult_title_1 option[value="'+title+'"]').attr("selected", "selected");
				$('#adult_gender_1 option[value="'+gender+'"]').attr("selected", "selected");

				$("#adult_first_name_1").val("<?=$this->session->userdata('s_customer_data')['first_name']?>");
				$("#adult_last_name_1").val("<?=$this->session->userdata('s_customer_data')['last_name']?>");
				 
				$("#adult_age_1").val("<?=$this->session->userdata('s_customer_data')['current_age']?>");
				 
            }
            else if($(this).prop("checked") == false){
                alert("Checkbox is unchecked.");
				$("#adult_title_1").prop("selectedIndex", 0).val();
				$("#adult_title_1").prop("selectedIndex", 0).val();
				//$('#adult_title_1').find('option:selected').remove(); 
				//$('#adult_gender_1').find('option:selected').remove(); 
				$('#adult_title_1 option[value=""]').attr("selected", "selected");
				$('#adult_gender_1 option[value=""]').attr("selected", "selected");
				$("#adult_title_name_1").val('').change();
				$("#adult_first_name_1").val('');
				$("#adult_last_name_1").val('');
				//$("#adult_pnr_1").val('');
				$("#adult_age_1").val('');
				//$("#adult_passport_1").val('');
            }
 });
 
</script>
