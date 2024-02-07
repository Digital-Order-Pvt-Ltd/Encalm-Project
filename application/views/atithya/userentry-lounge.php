


<?php 
$increment = 0;
if(!empty($this->session->userdata('s_adult'))){ ?>

<div class="row pad-15 d-flex align-items-center mb-3">
    <div class="form-group col-md-12">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="iamguest">
        <label class="form-check-label" for="iamguest">I am Guest</label> <a class="text-decoration-none" href="javascript:void(0)" class="small" id="guestlist"><span class="small text-primary"><u>My Guest List</u></span></a>
      </div>
    </div>
</div>
<?php for($i=1;$i<=$this->session->userdata('s_adult');$i++){  $increment = $increment+1; ?>
  <div class="row d-flex align-items-center mb-3 justify-content-end my_data_<?=$increment?>" id="s_adult_<?php echo $i; ?>">
     
	  <input type="hidden" class="form-control parent_id my_parent_id_<?=$increment?>"  name="adult_id[]" value="0" id="adult_id_<?=$i?>" />
    <div class="form-group col-md-2 pe-0"><span class="btn-secondary text-center w-100  d-inline-block small" style="line-height: 44px">Adult <?=$i?></span></div>
    <div class="form-group col-md-2 pd-10">
      <label for="" class="d-none">Title*</label>
      <span class="caret"></span>
	  
	  
      <select id="adult_title_<?=$i?>" name="adult_title[]" class="form-control title my_title_<?=$increment?>">
        <option value="">Title*</option>
	   <?php if(!empty($salutation)){ $salutation_data =json_decode($salutation); 
	   if(!empty($salutation_data->datalist)){
		foreach($salutation_data->datalist as $val){
	   ?>
	   <option value="<?=$val->id?>"><?=$val->name?></option>
       <?php }}}?>
	   
	    
	   
      </select>
    </div>
    <div class="col-md-5">
        <div class="row">
            <div class="form-group col-md-6 pd-10">
              <input type="text" class="form-control first_name my_first_name_<?=$increment?>" id="adult_first_name_<?=$i?>" name="adult_first_name[]" placeholder="">
              <label for="" class="floating-label">First Name*</label>
            </div>
            <div class="form-group col-md-6 pd-10">
              <input type="text" class="form-control last_name my_last_name_<?=$increment?>" id="adult_last_name_<?=$i?>" name="adult_last_name[]" placeholder="">
              <label for="" class="floating-label">Last Name*</label>
            </div>
        </div>
  </div>
	<div class="form-group col-md-1 pd-10 d-none">
      <label for="" class="d-none">Gender*</label>
	  <span class="caret"></span>
	  <select name="adult_gender[]" class="form-control gender my_gender_<?=$increment?>">
        <option value="">Gender*</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
		<option value="other">Other</option>
      </select>
	</div>
	<div class="form-group col-md-1 pd-10 d-none">
      <input type="text" class="form-control age my_age_<?=$increment?>" name="adult_age[]" placeholder="">
      <label for="" class="floating-label">Age*</label>
    </div>
    <div class="form-group col-md-3 pd-10">
      <input type="text" class="form-control passport my_passport_<?=$increment?>" id="adult_passport_<?=$i?>" name="adult_passport[]" placeholder="">
      <label for="" class="floating-label">Mobile No</label>
    </div>
	<div class="form-group col-md-2 pd-10 d-none">
      <label for="" class="d-none">Therapist Preference*</label>
	  <span class="caret"></span>
	  <select name="adult_th_pref[]" class="form-control">
         <option value="">Therapist Preference*</option>
		 <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="any">Any</option>
      </select>
	</div>
	<?php /*<div class="form-group col-md-1 pd-10">
      <label for="" class="d-none">Travel Class*</label>
	  <span class="caret"></span>
	  <select id="adult_class_<?=$i?>" name="adult_class[]" class="form-control">
         <option value="">Travel Class*</option>
		 <option value="first">First</option>
        <option value="business">Business</option>
        <option value="economy">Economy</option>
      </select>
	</div>*/ ?>
    <div class="form-group col-md-1 pd-10 d-none">
      <input type="text" class="form-control pnr" name="adult_pnr[]" placeholder="">
      <label for="" class="floating-label">PNR No.</label>
    </div>
    <div class=clearfix></div>
  </div>
<?php   }}?>
<?php if(!empty($this->session->userdata('s_child'))){ for($i=1;$i<=$this->session->userdata('s_child');$i++){  $increment = $increment+1;?>
  <div class="row d-flex align-items-center mb-3 justify-content-end my_data_<?=$increment?>" id="s_child_<?php echo $i; ?>">
    <div class="form-group col-md-2 pe-0"><span class="btn-secondary text-center w-100 d-inline-block small" style="line-height: 44px">Child <?=$i?></span></div>
	
	<input type="hidden" class="form-control parent_id my_parent_id_<?=$increment?>"  name="child_id[]" value="0" id="child_id_<?=$i?>" />
    <div class="form-group col-md-2 pd-10">
      <label for="" class="d-none">Title*</label>
      <span class="caret"></span>
      <select id="child_title_<?=$i?>" name="child_title[]" class="form-control title my_title_<?=$increment?>">
        <option value="">Title*</option>
         <?php if(!empty($salutation)){ $salutation_data =json_decode($salutation); 
	   if(!empty($salutation_data->datalist)){
		foreach($salutation_data->datalist as $val){
	   ?>
	   <option value="<?=$val->id?>"><?=$val->name?></option>
       <?php }}}?>
      </select>
    </div>
      <div class="col-md-5">
        <div class="row">
            <div class="form-group col-md-6 pd-10">
              <input type="text" class="form-control first_name my_first_name_<?=$increment?>" id="child_first_name_<?=$i?>" name="child_first_name[]" placeholder="">
              <label for="" class="floating-label">First Name*</label>
            </div>
            <div class="form-group col-md-6 pd-10">
              <input type="text" class="form-control last_name my_last_name_<?=$increment?>" id="child_last_name_<?=$i?>" name="child_last_name[]" placeholder="">
              <label for="" class="floating-label">Last Name*</label>
            </div>
      </div>
</div>
	<div class="form-group col-md-1 pd-10 d-none">
      <label for="" class="d-none">Gender*</label>
	  <span class="caret"></span>
	  <select name="child_gender[]" class="form-control gender my_gender_<?=$increment?>">
        <option value="">Gender*</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
		<option value="other">Other</option>
       
      </select>
	</div>
	
    <div class="form-group col-md-1 pd-10 d-none">
      <input type="text" class="form-control age my_age_<?=$increment?>" name="child_age[]" placeholder="">
      <label for="" class="floating-label">Age*</label>
    </div>
    <div class="form-group col-md-3 pd-10">
      <input type="text" class="form-control passport my_passport_<?=$increment?>" id="child_passport_<?=$i?>" name="child_passport[]" placeholder="">
      <label for="" class="floating-label">Mobile No</label>
    </div>
	<div class="form-group col-md-2 pd-10 d-none">
      <label for="" class="d-none">Travel Class*</label>
	  <span class="caret"></span>
	  <select name="child_class[]" class="form-control">
         <option value="">Travel Class*</option>
		 <option value="first">First</option>
        <option value="business">Business</option>
        <option value="economy">Economy</option>
      </select>
	</div>
    <div class="form-group col-md-1 pd-10 d-none">
      <input type="text" class="form-control pnr" name="child_pnr[]" placeholder="">
      <label for="" class="floating-label">PNR No.*</label>
    </div>
    <div class=clearfix></div>
  </div>
  <?php }}?>
  
  
  
  <?php if(!empty($this->session->userdata('s_infant'))){ for($i=1;$i<=$this->session->userdata('s_infant');$i++){ $increment = $increment+1;?>
  <div class="row d-flex align-items-center mb-3 justify-content-end my_data_<?=$increment?>" id="s_infant_<?php echo $i; ?>">
    <div class="form-group col-md-2 pe-0"><span class="btn-secondary text-center w-100 d-inline-block small" style="line-height: 44px">Infant <?=$i?></span></div>
	<input type="hidden" class="form-control parent_id my_parent_id_<?=$increment?>"  name="infant_id[]" value="0" id="infant_id_<?=$i?>" />
    <div class="form-group col-md-2 pd-10">
      <label for="" class="d-none">Title*</label>
      <span class="caret"></span>
      <select id="infant_title_<?=$i?>" name="infant_title[]" class="form-control title my_title_<?=$increment?>">
        <option value="">Title*</option>
         <?php if(!empty($salutation)){ $salutation_data =json_decode($salutation); 
	   if(!empty($salutation_data->datalist)){
		foreach($salutation_data->datalist as $val){
	   ?>
	   <option value="<?=$val->id?>"><?=$val->name?></option>
       <?php }}}?>
      </select>
    </div>
     <div class="col-md-5">    
          <div class="row">
              <div class="form-group col-md-6 pd-10">
                <input type="text" class="form-control first_name my_first_name_<?=$increment?>" id="infant_first_name_<?=$i?>" name="infant_first_name[]" placeholder="">
                <label for="" class="floating-label">First Name*</label>
              </div>
              <div class="form-group col-md-6 pd-10">
                <input type="text" class="form-control last_name my_last_name_<?=$increment?>" id="infant_last_name_<?=$i?>" name="infant_last_name[]" placeholder="">
                <label for="" class="floating-label">Last Name*</label>
              </div>
            </div>
          </div>
	<div class="form-group col-md-1 pd-10 d-none">
      <label for="" class="d-none">Gender</label>
	  <span class="caret"></span>
	  <select name="infant_gender[]" class="form-control gender my_gender_<?=$increment?>">
        <option value="">Gender*</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
		<option value="other">Other</option>
       </select>
	  </div>
	
    <div class="form-group col-md-1 pd-10 d-none">
      <input type="text" class="form-control age my_age_<?=$increment?>" name="infant_age[]" placeholder="">
      <label for="" class="floating-label">Age</label>
    </div>
    <div class="form-group col-md-3 pd-10">
      <input type="text" class="form-control passport my_passport_<?=$increment?>" id="infant_passport_<?=$i?>" name="infant_passport[]" placeholder="">
      <label for="" class="floating-label">Mobile No</label>
    </div>
	<div class="form-group col-md-2 pd-10 d-none">
      <label for="" class="d-none">Travel Class*</label>
	  <span class="caret"></span>
	  <select name="infant_class[]" class="form-control">
	     <option value="">Travel Class*</option>
		 <option value="first">First</option>
        <option value="business">Business</option>
        <option value="economy">Economy</option>
      </select>
	</div>
    <div class="form-group col-md-1 pd-10 d-none">
      <input type="text" class="form-control pnr" name="infant_pnr[]" placeholder="">
      <label for="" class="floating-label">PNR No.*</label>
    </div>
    <div class=clearfix></div>
  </div>
  <?php  }}?>
 
<script>
 
$('#iamguest').click(function(){
	var gender = "<?=$this->session->userdata('s_customer_data')['gender']?>";
	var title = "<?=$this->session->userdata('s_customer_data')['title']?>";
	 $("#adult_title_1 option:selected").removeAttr("selected");
				 $("#placard_title option:selected").removeAttr("selected");
            if($(this).prop("checked") == true){
                //alert("Checkbox is checked.");
				$('#adult_title_1 option[value="'+title+'"]').attr("selected", "selected");
				
				$('#adult_gender_1 option[value="'+gender+'"]').attr("selected", "selected");

				$("#adult_first_name_1").val("<?=$this->session->userdata('s_customer_data')['first_name']?>");
				
				$("#adult_last_name_1").val("<?=$this->session->userdata('s_customer_data')['last_name']?>");
				
				 
				$("#adult_age_1").val("<?=$this->session->userdata('s_customer_data')['current_age']?>");
				
				$("#adult_id_1").val("<?=$this->session->userdata('s_customer_data')['o_id']?>");
				
				$('#placard_title option[value="'+title+'"]').attr("selected", "selected");
				$('#placard_title').change();
				$("#placard_first_name").val("<?=$this->session->userdata('s_customer_data')['first_name']?>");
				$("#placard_mobile").val("<?=$this->session->userdata('s_customer_data')['mobile']?>");
				$("#placard_last_name").val("<?=$this->session->userdata('s_customer_data')['last_name']?>");
				 
            }
            else if($(this).prop("checked") == false){
//                alert("Checkbox is unchecked.");
				$("#adult_title_1").prop("selectedIndex", 0).val();
				 
				$('#adult_title_1 option[value=""]').attr("selected", "selected");
				$('#adult_gender_1 option[value=""]').attr("selected", "selected");
				$("#adult_title_name_1").val('').change();
				$("#adult_first_name_1").val('');
				$("#adult_last_name_1").val('');
				//$("#adult_pnr_1").val('');
				$("#adult_age_1").val('');
				//$("#adult_passport_1").val('');
				$("#placard_title").prop("selectedIndex", 0).val();
				$('#placard_title').change();
				$('#placard_title option[value=""]').attr("selected", "selected");
				$("#placard_first_name").val('');
				$("#placard_last_name").val('');
				$("#placard_mobile").val('');
				$("#adult_id_1").val(0);
            }
  $('#s_adult_1 > div').each(function() {
    var i = $(this).find('input, select');
    if(i.val()=='')
      i.addClass('focus');
    else
      i.removeClass('focus');
  });
  $('#prow > div').each(function() {
    var i = $(this).find('input, select');
    if(i.val()=='')
      i.addClass('focus');
    else
      i.removeClass('focus');
  });
  $("#adult_passport_1").removeClass('focus');
 });
 
</script>
