<form id="loungeFormupdated" name="loungeFormupdated" method="post" action="<?=base_url('atithya/home/search');?>" class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded" style="min-height: 395px;">


<input type="hidden" name="to_airport_id" id="l_to_airport_id" value="0" />
<input type="hidden" name="from_airport_id" id="l_from_airport_id" value="0" />
<input type="hidden" name="terminal_id" id="l_terminal_id" value="0" />
<input type="hidden" name="terminal_code" id="l_terminal_code" value="" />
<input type="hidden" name="terminal_value" id="l_terminal_value" value="" />
<input type="hidden" name="airline_id" id="l_airline_id" value="0" />
<input type="hidden" name="airline_name" id="l_airline_name" value="" />
<input type="hidden" name="arrival_term" id="l_arrival_term" value="" />
<input type="hidden" name="departure_term" id="l_departure_term" value="" />
<input type="hidden" name="d_departure_term" id="lounge_departure_term" value="" />
<input type="hidden" name="lounge_term" id="lounge_category" value="4" />
	  
	 <input type="hidden" name="flight_id" id="L_flight_id" value="0"/>
		<input type="hidden" name="arrival_time" id="L_arrival_time" value=""/>
		<input type="hidden" name="category" value="Lounge"/>
		
		
 <input type="hidden" name="airport_location_code_id" id="l_airport_location_code_id" value="0" />
	  <input type="hidden" name="airport_location_code" id="l_airport_location_code" value="" />
	  
	  <input type="hidden" name="TerminalId" id="LoungeTerminalId" value="0" />
	  <input type="hidden" name="TerminalCode" id="LoungeTerminalCode" value="" />
	  <input type="hidden" name="TerminalValue" id="LoungeTerminalValue" value="" />

  <div class="row">
  
  
    <div class="form-group col-md-6 LoungeServiceAirport">
      <label for="" class="d-none">Select Airport</label>
	  <span class="caret"></span>
      <select id="LoungeServiceAirport" name="LoungeServiceAirport" class="form-control txt-legth" Onchange="getLoungeData_1(this.value)">
       <option value="" data-id="0" data-location-id="" data-location-name="">Airport</option>
      </select>
    </div>
	
	
	
	<div class="form-group col-md-6">
      <label for="" class="d-none">Select Sector</label>
	  <span class="caret"></span>
      <select id="LoungeSector" name="SectorName" class="form-control BindSector"  Onchange="changeSector_5(this.value)">
        <option value=""  data-id="0"  data-code=""  data-value="">Select Sector</option>
      </select>
    </div>
	
	
	<div class="form-group col-md-6">
      <label for="" class="d-none">Select Lounge</label>
	  <span class="caret"></span>
      <select id="LoungeTerminal" name="TerminalName" class="form-control"  Onchange="changeTerminalLounge(this.value)">
        <option value=""  data-id="0"  data-code=""  data-value="">Select Lounge</option>
      </select>
    </div>
	
	
    <div class="form-group col-md-6">
      <label for="" class="d-none">Access Hours</label>
      <span class="caret"></span>
      <input type="hidden" id="LoungeCategory" name="LoungeCategory" class="form-control" size="1" value="4" data-id="Departure Lounge">
      <select id="LoungeHours" name="LoungeHours" class="form-control" Onchange="getLounge_1(this.value)">
        <option value="" data-id="0">Lounge Access Hours</option>
        <option value="2 HRS">2 HRS</option>
         
      </select>
    </div>
    
    <div class="form-group col-md-6">
      <i class="fas fa-calendar-alt"></i>
      <input type="text" id="LoungeDate" name="LoungeDate" class="form-control datepicker" placeholder=""  onchange="getLoungeFlightList(this.value)"  />
      <label for="" class="floating-label">Date of Travel</label>
    </div>
    <?php /*<div class="form-group col-md-4 LoungeFlight">
      <label for="" class="d-none">Flight No.*</label>
	  <span class="caret"></span>
      <select id="LoungeFlight" name="LoungeFlight" class="form-control select2-single"  onchange="getFlightLoungeTime_1(this.value)">
        <option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name=""  data-departure="" data-arrival="">Flight No.*</option>
      </select>
       
    </div>
    <div class="form-group col-md-4">
      <i class="far fa-clock"></i>
      <input type="text" id="LoungeTimeId" name="ArrivalTime" class="form-control time mytimepicker" maxlength="10" autocomplete="off" placeholder="">
      <label for="" class="floating-label">Flight Time*</label>
    </div>*/ ?>
    <div class="form-group col-md-6">
      <i class="far fa-clock"></i>
      <input type="text" id="l_reaching_date_time" name="ServiceTime" class="form-control mytimepicker" maxlength="10" autocomplete="off" placeholder="" />
      <input type="hidden" id="LoungeServiceTimeId" name="DepartureServiceTime" value="">
      <label for="" class="floating-label">Lounge Reaching Time*</label>
    </div>
    <div class=clearfix></div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Adult</label>
	   <span class="caret"></span>
      <select id="LAdult" name="Adult" class="form-control">
        <option value="">Adults*</option>
		<?php  for($i=1;$i<=10;$i++){?>
		<option value="<?=$i?>"><?=$i?></option>
		<?php  } ?>
         
      </select>
      <p class="small-text">12 years &amp; above</p>
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Child (2-3 Years)</label>
	   <span class="caret"></span>
      <select id="LChild" name="Child" class="form-select">
        <option value="">Child</option>
        <?php  for($i=1;$i<=10;$i++){?>
		<option value="<?=$i?>"><?=$i?></option>
		<?php  } ?>
      </select>
      <p class="small-text">2-11 years</p>
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Infant (Below 2 Years)</label>
	   <span class="caret"></span>
       <select id="LInfant" name="Infant" class="form-select">
        <option value="">Infant</option>
        <?php  for($i=1;$i<=10;$i++){?>
		<option value="<?=$i?>"><?=$i?></option>
		<?php  } ?>
      </select>
      <p class="small-text">Below 2 years</p>
    </div>
    <div class="form-group col-lg-12 text-center">
      <button type="submit" id="loungeFormSubmit" name="loungeFormSubmit" class="btn btn-red btn-sm"  role="button" aria-disabled="false">Book Now</button>
    </div>
    <div class=clearfix></div>
    <p class="small text-center m-0"><span class="small"> For Reservations queries, Call: <a href="tel:+919289366950">+91 92893 66950</a><br>Email us: <a href="mailto:guest.services@encalm.com">guest.services@encalm.com</a></span></p>
    <p class="small text-center mt-2"><img src="<?=base_url('atithya_assets/')?>assets/img/cards.png"></p>
  </div>
</form>
<script>
function changeTerminalLounge(val)
{
	var value = $('#LoungeTerminal').find(':selected').attr("data-value");
	$('#lounge_departure_term').val(value);
}
function getLoungeData_1(val)
{
	//var id = $('#LoungeServiceAirport').find(':selected').attr("data-id");
	$('#LoungeFlight').html('');		
	$('#LoungeFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
	
	$('#LoungeTerminal').html('');		
	$('#LoungeTerminal').html('<option value="" data-id="0" data-value="" data-code="">Select Lounge</option>');
	//$("#LoungeCategory").prop("selectedIndex", 0);
	$("#LoungeSector").prop("selectedIndex", 0);
    $('#LoungeDate').val('');
	$('#l_terminal_id').val(0);	
	$('#l_from_airport_id').val(0);	
	$('#L_flight_id').val(0);	
	$('#L_arrival_time').val('');	
	$('#l_airline_id').val(0);	
	$('#l_airline_name').val('');	
	$('#l_arrival_term').val('');	
	$('#l_departure_term').val('');	
	$('#l_terminal_code').val('');	
	$('#l_terminal_value').val('');	
	$('#LoungeServiceTimeId').val('');	
	$('#LoungeTimeId').val('');	
	

	$('#l_from_airport_id').val(0);
	$('#l_to_airport_id').val(0);
	$('#l_airport_location_code_id').val(0);
	$('#l_airport_location_code').val('');
	$('#TerminalId').val(0);	
	$('#TerminalCode').val('');	
	$('#TerminalValue').val('');	
	
	var airport_id = $('#LoungeServiceAirport').find(':selected').attr('data-id');
	var location_code_id = $('#LoungeServiceAirport').find(':selected').attr('data-location-id');
	var location_code = $('#LoungeServiceAirport').find(':selected').attr('data-location-code');

	if(val !="")
	{
		$('#l_from_airport_id').val(airport_id);
		$('#l_to_airport_id').val(airport_id);
		$('#l_airport_location_code_id').val(location_code_id);
		$('#l_airport_location_code').val(location_code);
		
		$.ajax({
			type: 'POST',
			url: "<?=base_url('atithya/ajaxcall/getApiData')?>",
			data: {'MethodName':'get_terminal_by_airport','RequestType':"TerminalList","airport_code":val},
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				//var item=JSON.parse(data);
				const item=data;
			//	 alert(item.message);
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					   var html='<option value="" data-id="0" data-value="" data-code="">Select Lounge</option>';
					  
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							   
							  html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'" data-value="'+ItemArray[i].value+'" data-code="'+ItemArray[i].code+'">'+ItemArray[i].name+'</option>';
						 }
						 
						 $("#LoungeTerminal").html('');
						 $("#LoungeTerminal").html(html);
					 

				 }
				 
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
function getLounge_1(val)
{
	var id = $('#LoungeCategory').find(':selected').attr("data-id");
	$('#lounge_category').val(id);	
	//$('#l_terminal_id').val(0);	
	//$('#l_terminal_code').val('');	
	//$('#l_terminal_value').val('');	
	$('#LoungeFlight').html('');		
	$('#LoungeFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
	//$("#LoungeSector").prop("selectedIndex", 0);
	$('#L_flight_id').val(0);	
	$('#L_arrival_time').val('');	
	$('#l_airline_id').val(0);	
	$('#l_airline_name').val('');	
	$('#l_arrival_term').val('');	
	$('#l_departure_term').val('');	
	$('#LoungeServiceTimeId').val('');	
	$('#LoungeTimeId').val('');
	$('#LoungeDate').val('');
	var value = $('#LoungeHours').find(':selected').attr("data-value");
	var code = $('#LoungeHours').find(':selected').attr("data-code");
	var id = $('#LoungeHours').find(':selected').attr("data-id");
	$('#LoungeTerminalId').val(id);	
	$('#LoungeTerminalCode').val(code);	
	$('#LoungeTerminalValue').val(value);	
}
function LoungeServiceAirport()
{
	$.ajax({
			type: 'POST',
			url: "<?=base_url('atithya/ajaxcall/getApiData')?>",
			data: {"category":'Lounge','MethodName':'get_service_airport','RequestType':"LoungeForm"},
			 
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				 
				const item=data;
			 	 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					  
					  var html='<option value="" data-id="0" data-location-id="" data-location-name="">Airport</option>';
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							   
							   var airline_location_id= ItemArray[i].airport_location_code_id[0];
							   var airline_location_code= ItemArray[i].airport_location_code_id[1];
							  html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'" data-location-id="'+airline_location_id+'" data-location-code="'+airline_location_code+'">'+ItemArray[i].display_name+'</option>';
						 }
					 $("#LoungeServiceAirport").html('');
					$("#LoungeServiceAirport").html(html);

				 }
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
function changeSector_5(val)
{
	$('#l_terminal_id').val(0);	
	$('#l_terminal_code').val('');	
	$('#l_terminal_value').val('');	

	$('#LoungeFlight').html('');		
	$('#LoungeFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
	
	$('#L_flight_id').val(0);	
	$('#L_arrival_time').val('');	
	$('#l_airline_id').val(0);	
	$('#l_airline_name').val('');	
	$('#l_arrival_term').val('');	
	$('#l_departure_term').val('');	
	$('#LoungeServiceTimeId').val('');	
	$('#LoungeTimeId').val('');
	$('#LoungeDate').val('');
	var lsector = $('#LoungeSector').val()+" Lounge";
	
	$.ajax({
		type: 'POST',
		url: "<?=base_url('atithya/ajaxcall/getApiData')?>",
		data: {'MethodName':'get_general_value','RequestType':"SectorList","type":lsector},
		dataType: "json",
			success: function(data) { 
				console.log(data); 
			//var item=JSON.parse(data);
			const item=data;
		//	 alert(item.message);
				if(item.message=='data found.' && item.status==true)
				{
					const ItemArray=item.datalist;
					var html='<option value="" data-id="0" data-value="" data-code="">Select Lounge</option>';
					
						for (let i = 0; i < ItemArray.length; i++) 
						{
							//console.log(ItemArray[i]) + "<br>";
							
							html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'" data-value="'+ItemArray[i].value+'" data-code="'+ItemArray[i].code+'">'+ItemArray[i].name+'</option>';
						}
						
						$("#LoungeTerminal").html('');
						$("#LoungeTerminal").html(html);
					

				}
				
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
	
	
	if(val.length > 2)
	{
		var value = $('#LoungeSector').find(':selected').attr("data-value");
		var id = $('#LoungeSector').find(':selected').attr("data-id");
		var code = $('#LoungeSector').find(':selected').attr("data-code");
			 
		$('#l_terminal_id').val(id);
		$('#l_terminal_value').val(value);
		$('#l_terminal_code').val(code);
	}
	 
	/* if($('#LoungeDate').val() !="")
	{
		getLoungeFlightList();
	} */
}


function LoungeCategory()
{
	/*$.ajax({
			type: 'POST',
			url: "<?=base_url('atithya/ajaxcall/getApiData')?>",
			data: {'MethodName':'get_lounge_category','RequestType':"LoungeCategory"},
			 
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				 
				const item=data;
			 
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					 var html='<option value=""  data-id="0">Select Category</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							    html += '<option value="'+ItemArray[i].id+'" data-id="'+ItemArray[i].name+'">'+ItemArray[i].name+'</option>';
						 }
					 
					 $('#LoungeCategory').html('');		
					 $('#LoungeCategory').html(html); 
				 }
				 
				
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
		});  */
}
function getLoungeHours(val)
{
	$.ajax({
		type: 'POST',
		url: "<?=base_url('atithya/ajaxcall/getApiData')?>",
		data: {'MethodName':'get_general_value','RequestType':"LoungeDuration","type":"ACCESS HRS"},
		dataType: "json",
			success: function(data) { 
				console.log(data); 
			//var item=JSON.parse(data);
			const item=data;
		//	 alert(item.message);
				if(item.message=='data found.' && item.status==true)
				{
					const ItemArray=item.datalist;
					var html='<option value="" data-id="0" data-value="" data-code="">Select Access Hours</option>';
					
						for (let i = 0; i < ItemArray.length; i++) 
						{
							//console.log(ItemArray[i]) + "<br>";
							
							html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'" data-value="'+ItemArray[i].value+'" data-code="'+ItemArray[i].code+'">'+ItemArray[i].name+'</option>';
						}
						
						$("#LoungeHours").html('');
						$("#LoungeHours").html(html);
					

				}
				
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
function getLoungeFlightList()
{
	var from_airport = $('#LoungeServiceAirport option:selected').val();
	 
	var to_airport = 0;
	var flight_id = $('#LoungeServiceAirport').find(':selected').attr('data-id');
	var travel_date = $('#LoungeDate').val();
	 $('#LoungeTimeId').val('');
	 $('#LoungeServiceTimeId').val('');
	if(from_airport=='')
	{
		alert("select starting from  airport");
		$('#DepartureFromAirport').focus();
		return false;
	}
	 
	else if(travel_date=='')
	{
		alert("select date");
		$('#LoungeDate').focus();
		return false;
	}
	else
	{
			$.ajax({
			type: 'POST',
			url: "<?=base_url('atithya/ajaxcall/getApiData')?>",
			 
			//data: {'MethodName':'get_flight_list','RequestType':"ArrivalFlightList","category":'Arrival',"from_airport":from_airport,"to_airport":from_airport,"travel_date":travel_date,"service_airport":from_airport},
			data: {'MethodName':'get_flight_list_for_booking','RequestType':"ArrivalFlightList","category":'Lounge',"from_airport":flight_id,"to_airport":flight_id,"travel_date":travel_date,"service_airport":from_airport},
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				 
				const item=data;
			 
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					 var html='<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>';
					 
						  for (let i = 0; i < ItemArray.length; i++) 
						 {
							     var airline_id= ItemArray[i].airline_id[0];
							   var airline_name= ItemArray[i].airline_id[1];
							  let  departure_time = String((ItemArray[i].departure_time/100).toFixed(2)); 
							  var  departure_time_1 = departure_time.replace(".",":");
							  let  arrival_time = String((ItemArray[i].arrival_time/100).toFixed(2)); 
							   var  arrival_time_1 = arrival_time.replace(".",":");
							  
							  html += '<option value="'+ItemArray[i].flight_name+'" data-id="'+ItemArray[i].id+'"  data-code="'+arrival_time_1+'" data-value="'+departure_time_1+'" data-airline="'+airline_id+'" data-name="'+airline_name+'" data-arrival="'+ItemArray[i].arrival_term+'" data-departure="'+ItemArray[i].departure_term+'">'+ItemArray[i].flight_name+'</option>';
						 }
					 $('#LoungeFlight').html('');		
					 $('#LoungeFlight').html(html);

				 }
				 
				
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

function getLoungeTime(value)
{
	var Arrivaldof = $('#Arrivaldof').val();
	//console.log(value);
	if(value !='')
	{
		var s_time=	addMinutes (value,0);
		if(s_time=='' || s_time !='NaN' || s_time != '00:NaN')
		{
			$('#ArrivalServiceTimeId').val(s_time);
			$('#a_service_date_time').val(Arrivaldof+' '+s_time);
		}
	}
	
	
	if($('#LoungeCategory').attr('data-id')=='Arrival') {
	var date = $('#LoungeFlight').find(':selected').attr('data-value');
	  if(val=="") {
    	$('#LoungeTimeId').val('');
    	$('#LoungeServiceTimeId').val('');
    	$('#l_reaching_date_time').val('');
      }
      else {
    	  if(date==0) {
    		 var v1 = '00:00';
    		 var v2 = '00:00';
    		 var v3 = LoungeDate+' 00:00';
    	  } else {
        	 var v1 = addMinutes (date,0);
        	 var v2 = addMinutes (date,0);
        	 var v3 = addMinutesInDate(LoungeDate+' '+date,0);
    	  }
    	  $('#LoungeTimeId').val('');
    	  $('#LoungeServiceTimeId').val(''); 
    	  $('#l_reaching_date_time').val(''); 
    	  $('#LoungeTimeId').val(v1);
    	  $('#LoungeServiceTimeId').val(v2);
    	  $('#l_reaching_date_time').val(v3);
      }
	}
	else {
	var date = $('#LoungeFlight').find(':selected').attr('data-code');
	  if(val=="") {
    	$('#LoungeTimeId').val('');
    	$('#LoungeServiceTimeId').val('');
    	$('#l_reaching_date_time').val('');
      }
      else {
    	  if(date==0) {
    		 var v1 = '00:00';
    		 var v2 = '00:00';
    		 var v3 = LoungeDate+' 00:00';
    	  } else {
        	 var v1 = addMinutes (date,0);
        	 var v2 = addMinutes (date,0);
        	 var v3 = addMinutesInDate(LoungeDate+' '+date,-SectorValue);
    	  }
    	  $('#LoungeTimeId').val('');
    	  $('#LoungeServiceTimeId').val(''); 
    	  $('#l_reaching_date_time').val(''); 
    	  $('#LoungeTimeId').val(v1);
    	  $('#LoungeServiceTimeId').val(v2);
    	  $('#l_reaching_date_time').val(v3.replace(/\//g, '-'));
      }
	}
 	 
}
function getFlightLoungeTime_1(val)
{
	var flight_id = $('#LoungeFlight').find(':selected').attr('data-id');
	var d_time = $('#LoungeFlight').find(':selected').attr('data-value');
	var airline_id = $('#LoungeFlight').find(':selected').attr('data-airline');
	var airline_name = $('#LoungeFlight').find(':selected').attr('data-name');
	var arrival_term = $('#LoungeFlight').find(':selected').attr('data-arrival');
	var departure_term = $('#LoungeFlight').find(':selected').attr('data-departure');
	var SectorValue = $('#LoungeSector').find(':selected').attr('data-value');
	var LoungeDate = $('#LoungeDate').val();
	$('#L_flight_id').val(flight_id);	
	$('#L_arrival_time').val(date);	
	$('#l_airline_id').val(airline_id);	
	$('#l_airline_name').val(airline_name);	
	$('#l_arrival_term').val(arrival_term);	
	$('#l_departure_term').val(departure_term);	
	
	if($('#LoungeCategory').attr('data-id')=='Arrival') {
	var date = $('#LoungeFlight').find(':selected').attr('data-value');
	  if(val=="") {
    	$('#LoungeTimeId').val('');
    	$('#LoungeServiceTimeId').val('');
    	$('#l_reaching_date_time').val('');
      }
      else {
		console.log(date);
    	  if(date==0) {
    		 var v1 = '00:00';
    		 var v2 = '00:00';
    		 var v3 = LoungeDate+' 00:00';
    	  } else {
        	 var v1 = addMinutes (date,0);
        	 var v2 = addMinutes (date,0);
        	 var v3 = addMinutesInDate(LoungeDate+' '+date,0);
    	  }
    	  $('#LoungeTimeId').val('');
    	  $('#LoungeServiceTimeId').val(''); 
    	  $('#l_reaching_date_time').val(''); 
    	  $('#LoungeTimeId').val(v1);
    	  $('#LoungeServiceTimeId').val(v2);
    	  $('#l_reaching_date_time').val(v3);
      }
	}
	else {
	var date = $('#LoungeFlight').find(':selected').attr('data-value');
	  if(val=="") {
    	$('#LoungeTimeId').val('');
    	$('#LoungeServiceTimeId').val('');
    	$('#l_reaching_date_time').val('');
      }
      else {
    	  if(date==0) {
    		 var v1 = '00:00';
    		 var v2 = '00:00';
    		 var v3 = LoungeDate+' 00:00';
    	  } else {
        	 var v1 = addMinutes (date,0);
        	 var v2 = addMinutes (date,0);
        	 var v3 = addMinutesInDate(LoungeDate+' '+date,-SectorValue);
    	  }
    	  $('#LoungeTimeId').val('');
    	  $('#LoungeServiceTimeId').val(''); 
    	  $('#l_reaching_date_time').val(''); 
    	  $('#LoungeTimeId').val(v1);
    	  $('#LoungeServiceTimeId').val(v2);
    	  $('#l_reaching_date_time').val(v3.replace(/\//g, '-'));
      }
	}
	
	 
  if(val=="")
  {
	  $('#LoungeTimeId').val('');
	$('#LoungeServiceTimeId').val('');
  }
  else
  {
	   if(date==0)
	  {
		   var v1 = '00:00';
		  var v2 = '00:00';
	  }
	  else
	  {
 var v1 = addMinutes (date,0);
 var v2 = addMinutes (date,0);
	  }
 $('#LoungeTimeId').val(v1);
 $('#LoungeServiceTimeId').val(v2);
  }

}
$("form#loungeFormupdated").submit(function(event) 
{
var error = false;
   $("#LoungeTerminal").removeClass("focus");
   $("#LoungeServiceAirport").removeClass("focus");
   $(".LoungeServiceAirport .select2-selection").removeClass("focus");
   $("#LoungeCategory").removeClass("focus");
   $("#LoungeSector").removeClass("focus");
   $("#LoungeDate").removeClass("focus");
   //$("#LoungeFlight").removeClass("focus");
   //$(".LoungeFlight .select2-selection").removeClass("focus");
   //$("#LoungeTimeId").removeClass("focus");
   //$("#LoungeServiceTimeId").removeClass("focus");
   $("#LAdult").removeClass("focus");
   var LoungeServiceAirport =  $("#LoungeServiceAirport option:selected").val();
 var LoungeCategory =   $("#LoungeCategory").val();
 var LoungeSector =   $("#LoungeSector option:selected").val();
 var LoungeDate =   $("#LoungeDate").val();
 //var LoungeFlight =   $("#LoungeFlight option:selected").val();
  //var LoungeTimeId =  $("#LoungeTimeId").val();
 //var LoungeServiceTimeId =   $("#LoungeServiceTimeId").val();
 var LAdult =   $("#LAdult option:selected").val();
 var LoungeTerminal =   $("#LoungeTerminal option:selected").val();
   
   if(LoungeServiceAirport == ""){
			$('.LoungeServiceAirport .select2-selection').addClass("focus");
            $('#LoungeServiceAirport').addClass("focus");
            $('#LoungeServiceAirport').focus();
            error = true; 
        }
		if(LoungeTerminal == ""){
			 
            $('#LoungeTerminal').addClass("focus");
            $('#LoungeTerminal').focus();
            error = true; 
        }
		if(LoungeCategory == ""){
            $('#LoungeCategory').addClass("focus");
            $('#LoungeCategory').focus();
            error = true; 
        }
		if(LoungeSector == ""){
            $('#LoungeSector').addClass("focus");
            $('#LoungeSector').focus();
            error = true; 
        }
		if(LoungeDate == ""){
            $('#LoungeDate').addClass("focus");
            //$('#Arrivaldof').focus();
            error = true; 
        }
		/*if(LoungeFlight == ""){
			$('.LoungeFlight .select2-selection').addClass("focus");
            $('#LoungeFlight').addClass("focus");
            $('#LoungeFlight').focus();
            error = true; 
        }
		if(LoungeTimeId == ""){
            $('#LoungeTimeId').addClass("focus");
            $('#LoungeTimeId').focus();
            error = true; 
        }
		if(LoungeServiceTimeId == ""){
            $('#LoungeServiceTimeId').addClass("focus");
            $('#LoungeServiceTimeId').focus();
            error = true; 
        }*/
		if(LAdult == "" || LAdult == 0){
            $('#LAdult').addClass("focus");
            $('#LAdult').focus();
            error = true; 
        }
        var fdate = convertFromStringToDate($('#LoungeDate').val() + 'T' + $('#LoungeServiceTimeId').val()+':00');
    
    var cdate = new Date();
    cdate.setMinutes(cdate.getMinutes() + 30); // timestamp
    cdate = new Date(cdate); // Date object
    console.log(cdate);
    var timeDiffInMinutes = Math.floor((cdate - fdate) / (1000 * 60));
    
    if (timeDiffInMinutes <=30 && timeDiffInMinutes >= 0) {
        error = true;
        alert("Website bookings are accepted only for services beyond 30 minutes of lounge reaching time. For all service requests after 30 minutes request you to kindly connect with us on +91 9289366950'");
    }
    else{
        error = false;
        
    }
 if(error==false)
 {
	 PleaseWaitShow();
	 console.log('working'+error);
	 //$("form#loungeForm").submit();
	 return true;
 }
 else
 {
	return false;
 }
  
});
</script>

<script type="text/javascript">
  $('.txt-legth').change(function(){
    if(this.value.length >= 35){ 
        console.log('long title');
        //trimming
        var trim = $.trim(this.value).substring(0, 35) + "...";
        $(this).find("option:selected").text(trim);
    }
});

</script>