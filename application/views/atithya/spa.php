<form id="spaForm" name="spaForm" method="post" action="<?=base_url('spa/home/search');?>" class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded" style="min-height: 395px;">


<input type="hidden" name="to_airport_id" id="s_to_airport_id" value="0" />
<input type="hidden" name="from_airport_id" id="s_from_airport_id" value="0" />
<input type="hidden" name="terminal_id" id="s_terminal_id" value="0" />
<input type="hidden" name="terminal_code" id="s_terminal_code" value="" />
<input type="hidden" name="terminal_value" id="s_terminal_value" value="" />
<input type="hidden" name="airline_id" id="s_airline_id" value="0" />
<input type="hidden" name="airline_name" id="s_airline_name" value="" />
<input type="hidden" name="arrival_term" id="s_arrival_term" value="" />
<input type="hidden" name="departure_term" id="s_departure_term" value="" />
<input type="hidden" name="service_type_id" id="service_type_id" value="" />
	  
	 <input type="hidden" name="flight_id" id="S_flight_id" value="0"/>
		<input type="hidden" name="arrival_time" id="S_arrival_time" value=""/>
		<input type="hidden" name="category" value="Spa"/>
		
		
 <input type="hidden" name="airport_location_code_id" id="s_airport_location_code_id" value="0" />
	  <input type="hidden" name="airport_location_code" id="s_airport_location_code" value="" />
	  
	  <input type="hidden" name="TerminalId" id="spa_TerminalId" value="0" />
	  <input type="hidden" name="TerminalCode" id="TerminalCode" value="" />
	  <input type="hidden" name="TerminalValue" id="TerminalValue" value="" />
	  <input type="hidden" name="arrival_flight_name" id="arrival_flight_name" value="" />

  <div class="row">
  
  
    <div class="form-group col-md-6 SpaServiceAirport">
      <label for="" class="d-none">Select Airport</label>
	  <span class="caret"></span>
      <select id="SpaServiceAirport" name="SpaServiceAirport" class="form-control txt-legth" Onchange="getSpaData_1(this.value)">
       <option value="" data-id="0" data-location-id="" data-location-name="">Airport</option>
      </select>
    </div>
	
	
	
	<!-- <div class="form-group col-md-6">
      <label for="" class="d-none">Select Sector</label>
	  <span class="caret"></span>
      <select id="SpaSector" name="SectorName" class="form-control"  Onchange="changeSector_4(this.value)">
        <option value=""  data-id="0"  data-code=""  data-value="">Select Sector</option>
            <option value="International" data-id="2" data-value="180" data-code="180">International</option>
      </select>
    </div> -->
	<div class="form-group col-md-6 SpaServiceAt">
      <label for="" class="d-none">Select Service At</label>
	  <span class="caret"></span>
      <select id="SpaServiceAt" name="SpaServiceAt" class="form-control txt-legth" Onchange="setSector(this.value)">
       <option value="" data-id="0" data-location-id="" data-location-name="">Select Service At</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <i class="fas fa-calendar-alt"></i>
      <input type="text" id="SpaDate" name="SpaDate" class="form-control datepicker" placeholder="" />
      <label for="" class="floating-label">Date of Travel</label>
    </div>

    <div class="form-group col-md-6">
      <i class="far fa-clock"></i>
      <input type="text" id="SpaServiceTimeId" name="ServiceTime" class="form-control time mytimepicker" maxlength="10" autocomplete="off" placeholder="" onkeyup="getSpaFlightData('ddd')" onchange="getSpaFlightData('ddd')" />
      <label for="" class="floating-label">Service Time*</label>
    </div>
	
    
	<div class="form-group col-md-6" class="d-none" style="display:none">
      <label for="" class="d-none">Select Sector</label>
      <span class="caret"></span>
	  
	  <!--select id="ArrivingSector" name="SectorName" class="form-control BindSector"  Onchange="setHiddenData('Arrival','ArrivingSector','a_terminal_id','a_terminal_value','a_terminal_code')">
        <option value=""  data-id="0"  data-code=""  data-value="">Select Sector</option>
        
      </select-->
	  
      <select id="SpaSector" name="SectorNames" class="form-control BindSector"  Onchange="changeSector_4(this.value)">
        <option value=""  data-id="0"  data-code=""  data-value="">Select Sector</option>
      </select>
	  <input type="hidden" id="SectorNames" name="SectorName">
    </div>
	
	
	
	<div class="form-group col-md-6">
      <label for="" class="d-none">Flight No.*</label>
	  <span class="caret"></span>
      <select id="SpaFlightNo" name="SpaFlightNo" class="form-control" Onchange="setFlightId(this.value)">
        <option value=""  data-id="0"  data-code=""  data-value="">Flight No.*</option>
      </select>
    </div>

	<div class="form-group col-md-6">
      <label for="" class="d-none">Treatment Duration</label>
	  <span class="caret"></span>
      <select id="SpaTerminal" name="TerminalName" class="form-control" onChange="changeTerminal(this.value)">
        <option value=""  data-id="0"  data-code=""  data-value="">Select Treatment Duration</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="" class="d-none">Adult</label>
	   <span class="caret"></span>
      <select id="SAdult" name="Adult" class="form-control">
        <option value="">Adults*</option>
		<?php  for($i=1;$i<=10;$i++){?>
		<option value="<?=$i?>"><?=$i?></option>
		<?php  } ?>
         
      </select>
      <p class="small-text">16 years &amp; above</p>
    </div>
    <div class=clearfix></div>
    <div class="form-group col-md-6 d-none">
      <label for="" class="d-none">Therapist Preference</label>
      <span class="caret"></span>
      <select id="SpaTherapist" name="TherapistName" class="form-control" size="1">
        <option value="" data-id="0">Select Therapist Preference</option>
         
      </select>
    </div>
	
	<div class="form-group col-md-6 d-none">
      <label for="" class="d-none">Treatment/Facility</label>
	  <span class="caret"></span>
      <select id="SpaCategory" name="SpaCategory" class="form-control" >
        <option value=""  data-id="0"  data-code=""  data-value="">Select Treatment/Facility</option>
      </select>
    </div>
	
    <div class="form-group col-md-4 d-none">
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
    <div class="form-group col-md-4 d-none">
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
      <button type="submit" id="SpaFormSubmit" name="SpaFormSubmit" class="btn btn-red btn-sm"  role="button" aria-disabled="false">Search</button>
    </div>
    <div class=clearfix></div>
    <p class="small text-center m-0"><span class="small"> For Reservations queries, Call: <a href="tel:+911149632241">+91 11 4963 2241</a><br>Email us: <a href="mailto:spa@encalm.com">spa@encalm.com</a></span></p>
    <p class="small text-center mt-2"><img src="<?=base_url('atithya_assets/')?>assets/img/cards.png"></p>
  </div>
</form>
<script>
function changeTerminal(val)
{
	var value = $('#SpaTerminal').find(':selected').attr("data-value");
	var code = $('#SpaTerminal').find(':selected').attr("data-code");
	var id = $('#SpaTerminal').find(':selected').attr("data-id");
	$('#spa_TerminalId').val(id);	
	$('#TerminalCode').val(code);	
	$('#TerminalValue').val(value);	
}
function setFlightId(val)
{
	var value = $('#SpaFlightNo').find(':selected').attr("data-id");
	$('#S_flight_id').val(value);	
	var airline_id = $('#SpaFlightNo').find(':selected').attr('data-airline');
	var airline_name = $('#SpaFlightNo').find(':selected').attr('data-name');
	var arrival_time = $('#SpaFlightNo').find(':selected').attr('data-value');
	var arrival_flight_name = $('#SpaFlightNo').find(':selected').text();
	$('#s_airline_id').val(airline_id);	
	$('#s_airline_id').val(airline_id);	
	$('#s_airline_name').val(airline_name);	
	$('#S_arrival_time').val(arrival_time);	
	$('#arrival_flight_name').val(arrival_flight_name);
}
function getSpaData_1(val)
{
	//var id = $('#SpaServiceAirport').find(':selected').attr("data-id");
	//$('#SpaFlight').html('');		
	//$('#SpaFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
	SpaServiceType();
	$('#SpaTerminal').html('');		
	$('#SpaTerminal').html('<option value="" data-id="0" data-value="" data-code="">Select Treatment Duration</option>');
	$("#SpaCategory").prop("selectedIndex", 0);
	$("#SpaSector").prop("selectedIndex", 0);
    $('#SpaDate').val('');
// 	$('#s_terminal_id').val(0);	
// 	$('#s_from_airport_id').val(0);	
	//$('#s_flight_id').val(0);	
	$('#s_arrival_time').val('');	
	$('#s_airline_id').val(0);	
	$('#s_airline_name').val('');	
	$('#s_arrival_term').val('');	
	$('#s_departure_term').val('');	
	$('#s_terminal_code').val('');	
	$('#s_terminal_value').val('');	
	$('#SpaServiceTimeId').val('');	
	//$('#SpaTimeId').val('');	
	

	$('#s_from_airport_id').val(0);
	$('#s_to_airport_id').val(0);
	$('#s_airport_location_code_id').val(0);
	$('#s_airport_location_code').val('');
	//$('#TerminalId').val(0);	
	$('#TerminalCode').val('');	
	$('#TerminalValue').val('');	
	
	var airport_id = $('#SpaServiceAirport').find(':selected').attr('data-id');
	var location_code_id = $('#SpaServiceAirport').find(':selected').attr('data-location-id');
	var location_code = $('#SpaServiceAirport').find(':selected').attr('data-location-code');

	if(val !="")
	{
		$('#s_from_airport_id').val(airport_id);
		$('#s_to_airport_id').val(airport_id);
		$('#s_airport_location_code_id').val(location_code_id);
		$('#s_airport_location_code').val(location_code);
		
		$.ajax({
			type: 'POST',
			url: "<?=base_url('spa/ajaxcall/getApiData')?>",
			data: {'MethodName':'get_general_value','RequestType':"SpaDuration","type":"TREATMENT DURATION"},
			//data: {'MethodName':'get_terminal_by_airport','RequestType':"TerminalList","airport_code":val},
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				//var item=JSON.parse(data);
				const item=data;
			//	 alert(item.message);
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					   var html='<option value="" data-id="0" data-value="" data-code="">Select Treatment Duration</option>';
					  
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							   
							  html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'" data-value="'+ItemArray[i].value+'" data-code="'+ItemArray[i].code+'">'+ItemArray[i].name+'</option>';
						 }
						 
						 $("#SpaTerminal").html('');
						 $("#SpaTerminal").html(html);
					 

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
function getSpaFlightData(val)
{

	if(val !="")
	{		
		var tempDate = $('#SpaDate').val().split("-");
		var formattedDate = tempDate[2]+'-'+tempDate[1]+'-'+tempDate[0];
		$('#service_type_id').val($('#SpaServiceAt').find(':selected').attr('data-id'));
		
		$.ajax({
			type: 'POST',
			url: "<?=base_url('spa/ajaxcall/getApiData')?>",
			data: {'MethodName':'get_flight_list_for_spa_for_booking','RequestType':'SpaFlightList','category':$('#SpaServiceAt').val(),'service_airport':$('#SpaServiceAirport').val(),'service_airport_id':$('#SpaServiceAirport').find(':selected').attr('data-id'),'travel_date':formattedDate},
			//data: {'MethodName':'get_terminal_by_airport','RequestType':"TerminalList","airport_code":val},
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				//var item=JSON.parse(data);
				const item=data;
			//	 alert(item.message);
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					 var html='<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>';							  
					  
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							  
							var airline_id= ItemArray[i].airline_id[0];
							var airline_name= ItemArray[i].airline_id[1];
							let  departure_time = String((ItemArray[i].departure_time/100).toFixed(2)); 
							var  departure_time_1 = departure_time.replace(".",":");
							let  arrival_time = String((ItemArray[i].arrival_time/100).toFixed(2)); 
							var  arrival_time_1 = arrival_time.replace(".",":");
							   
							  html += '<option value="'+ItemArray[i].flight_name+'" data-id="'+ItemArray[i].code+'"  data-code="'+arrival_time_1+'" data-value="'+departure_time_1+'" data-airline="'+airline_id+'" data-name="'+airline_name+'" data-arrival="'+ItemArray[i].arrival_term+'" data-departure="'+ItemArray[i].departure_term+'">'+ItemArray[i].flight_name+'</option>';
						 }
						 
						 $("#SpaFlightNo").html('');
						 $("#SpaFlightNo").html(html);
					 

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
function getSpa_1(val)
{
	var id = $('#SpaServiceAirport').find(':selected').attr("data-id");
	//$('#s_from_airport_id').val(id);	
	//$('#s_terminal_id').val(0);	
	//$('#s_terminal_code').val('');	
	//$('#s_terminal_value').val('');	
	$('#SpaFlight').html('');		
	$('#SpaFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
	//$("#SpaSector").prop("selectedIndex", 0);
	$('#s_flight_id').val(0);	
	$('#s_arrival_time').val('');	
	$('#s_airline_id').val(0);	
	$('#s_airline_name').val('');	
	$('#s_arrival_term').val('');	
	$('#s_departure_term').val('');	
	$('#SpaServiceTimeId').val('');	
	$('#SpaTimeId').val('');
	$('#SpaDate').val('');
}
function SpaServiceAirport()
{
	$.ajax({
			type: 'POST',
			url: "<?=base_url('spa/ajaxcall/getApiData')?>",
			data: {"category":'Spa','MethodName':'get_service_airport','RequestType':"SpaForm"},
			 
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
					 $("#SpaServiceAirport").html('');
					$("#SpaServiceAirport").html(html);

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
function SpaServiceType()
{
	$.ajax({
			type: 'POST',
			url: "<?=base_url('spa/ajaxcall/getApiData')?>",
			data: {"type":'Spa Location','MethodName':'get_general_value','RequestType':"SpaCategory"},
			 
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				 
				const item=data;
			 	 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					  
					  var html='<option value="" data-id="0" data-location-id="" data-location-name="">Select Service At</option>';
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							   
							  html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].code+'">'+ItemArray[i].name+'</option>';
						 }
					 $("#SpaServiceAt").html('');
					$("#SpaServiceAt").html(html);

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
function changeSector_4(val)
{
	//alert("HI");
	/*$('#s_terminal_id').val(0);	
	$('#s_terminal_code').val('');	
	$('#s_terminal_value').val('');	

	$('#SpaFlight').html('');		
	$('#SpaFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
	
	$('#s_flight_id').val(0);	
	$('#s_arrival_time').val('');	
	$('#s_airline_id').val(0);	
	$('#s_airline_name').val('');	
	$('#s_arrival_term').val('');	
	$('#s_departure_term').val('');	
	$('#SpaServiceTimeId').val('');	
	$('#SpaTimeId').val('');
	$('#SpaDate').val('');*/
	getSpaFlightData();
	
// 	if(val.length > 2)
// 	{
		var value = $('#SpaSector').find(':selected').attr("data-value");
		var id = $('#SpaSector').find(':selected').attr("data-id");
		var code = $('#SpaSector').find(':selected').attr("data-code");
		$('#SpaSector').prop('disabled', true);
		$('#s_terminal_id').val(id);
		$('#s_terminal_value').val(value);
		$('#s_terminal_code').val(code);
		
// 	}
	 
	/* if($('#SpaDate').val() !="")
	{
		getSpaFlightList();
	} */
}


function SpaCategory()
{
	$.ajax({
			type: 'POST',
			url: "<?=base_url('spa/ajaxcall/getApiData')?>",
			data: {'MethodName':'get_spa_category','RequestType':"SpaCategory"},
			 
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				 
				const item=data;
			 
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					 var html='<option value=""  data-id="0">Select Treatment Facility</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							    html += '<option value="'+ItemArray[i].id+'" data-id="'+ItemArray[i].name+'">'+ItemArray[i].name+'</option>';
						 }
					 
					 $('#SpaCategory').html('');		
					 $('#SpaCategory').html(html); 
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
function getSpaFlightList()
{
	var from_airport = $('#SpaServiceAirport option:selected').val();
	 
	var to_airport = 0;
	var flight_id = $('#SpaServiceAirport').find(':selected').attr('data-id');
	var travel_date = $('#SpaDate').val();
	 $('#SpaTimeId').val('');
	 $('#SpaServiceTimeId').val('');
	if(from_airport=='')
	{
		alert("select starting from  airport");
		$('#DepartureFromAirport').focus();
		return false;
	}
	 
	else if(travel_date=='')
	{
		alert("select date");
		$('#SpaDate').focus();
		return false;
	}
	else
	{
			$.ajax({
			type: 'POST',
			url: "<?=base_url('spa/ajaxcall/getApiData')?>",
			 
			//data: {'MethodName':'get_flight_list','RequestType':"ArrivalFlightList","category":'Arrival',"from_airport":from_airport,"to_airport":from_airport,"travel_date":travel_date,"service_airport":from_airport},
			data: {'MethodName':'get_flight_list_for_booking','RequestType':"ArrivalFlightList","category":'Spa',"from_airport":flight_id,"to_airport":flight_id,"travel_date":travel_date,"service_airport":from_airport},
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
					 $('#SpaFlight').html('');		
					 $('#SpaFlight').html(html);

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
function getFlightSpaTime_1(val)
{
	var flight_id = $('#SpaFlight').find(':selected').attr('data-id');
	var date = $('#SpaFlight').find(':selected').attr('data-code');
	var d_time = $('#SpaFlight').find(':selected').attr('data-value');
	var airline_id = $('#SpaFlight').find(':selected').attr('data-airline');
	var airline_name = $('#SpaFlight').find(':selected').attr('data-name');
	var arrival_term = $('#SpaFlight').find(':selected').attr('data-arrival');
	var departure_term = $('#SpaFlight').find(':selected').attr('data-departure');
	//$('#s_flight_id').val(flight_id);	
	$('#s_arrival_time').val(date);	
	$('#s_airline_id').val(airline_id);	
	$('#s_airline_name').val(airline_name);	
	$('#s_arrival_term').val(arrival_term);	
	$('#s_departure_term').val(departure_term);	
	
	 
  if(val=="")
  {
	  $('#SpaTimeId').val('');
	$('#SpaServiceTimeId').val('');
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
 $('#SpaTimeId').val(v1);
 $('#SpaServiceTimeId').val(v2);
  }

}
function TreatmentDurationData()
{
	$.ajax({
			type: 'POST',
			url: "<?=base_url('spa/ajaxcall/getApiData')?>",
			data: {'MethodName':'get_general_value','RequestType':"SpaDuration","type":"TREATMENT DURATION"},
			 
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				 
				const item=data;
			 	 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					 var html='<option value=""  data-id="0">Select Treatment Duration</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							    html += '<option value="'+ItemArray[i].id+'" data-id="'+ItemArray[i].name+'">'+ItemArray[i].name+'</option>';
						 }
					 
					 $('#SpaTerminal').html('');		
					 $('#SpaTerminal').html(html); 

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
function SpaMenuData()
{
	$.ajax({
			type: 'POST',
			url: "<?=base_url('spa/ajaxcall/getApiData')?>",
			data: {'MethodName':'get_general_value','RequestType':"SpaCategory","type":"SPA MENU"},
			 
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				 
				const item=data;
			 	 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					 var html='<option value=""  data-id="0">Select Treatment Facility</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							    html += '<option value="'+ItemArray[i].id+'" data-id="'+ItemArray[i].name+'">'+ItemArray[i].name+'</option>';
						 }
					 
					 $('#SpaCategory').html('');		
					 $('#SpaCategory').html(html); 


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
function TherapistData()
{
	$.ajax({
			type: 'POST',
			url: "<?=base_url('spa/ajaxcall/getApiData')?>",
			data: {'MethodName':'get_general_value','RequestType':"SpaPreference","type":"THERAPIST"},
			 
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				 
				const item=data;
			 	 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					  
					 var html='<option value=""  data-id="0">Select Therapist Preference</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							    html += '<option value="'+ItemArray[i].id+'" data-id="'+ItemArray[i].name+'">'+ItemArray[i].name+'</option>';
						 }
					 
					 $('#SpaTherapist').html('');		
					 $('#SpaTherapist').html(html); 

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
$("form#spaForm").submit(function(event) 
{
var error = false;
   $("#SpaTerminal").removeClass("focus");
   $("#SpaServiceAirport").removeClass("focus");
   $(".SpaServiceAirport .select2-selection").removeClass("focus");
   $("#SpaCategory").removeClass("focus");
   $("#SpaSector").removeClass("focus");
   $("#SpaDate").removeClass("focus");
   $("#SpaServiceTimeId").removeClass("focus");
   $("#SAdult").removeClass("focus");
   var SpaServiceAirport =  $("#SpaServiceAirport option:selected").val();
 var SpaCategory =   $("#SpaCategory option:selected").val();
 var SpaSector =   $("#SpaSector option:selected").val();
 var SpaDate =   $("#SpaDate").val();
 var SpaServiceTimeId =   $("#SpaServiceTimeId").val();
 var SAdult =   $("#SAdult option:selected").val();
 var SpaTerminal =   $("#SpaTerminal option:selected").val();
   
   if(SpaServiceAirport == ""){
			$('.SpaServiceAirport .select2-selection').addClass("focus");
            $('#SpaServiceAirport').addClass("focus");
            $('#SpaServiceAirport').focus();
            error = true; 
        }
		if(SpaTerminal == ""){
			 
            $('#SpaTerminal').addClass("focus");
            $('#SpaTerminal').focus();
            error = true; 
        }
		if(SpaSector == ""){
            $('#SpaSector').addClass("focus");
            $('#SpaSector').focus();
            error = true; 
        }
		if(SpaDate == ""){
            $('#SpaDate').addClass("focus");
            //$('#Arrivaldof').focus();
            error = true; 
        }
		if(SpaServiceTimeId == ""){
            $('#SpaServiceTimeId').addClass("focus");
            $('#SpaServiceTimeId').focus();
            error = true; 
        }
		if(SAdult == "" || SAdult == 0){
            $('#SAdult').addClass("focus");
            $('#SAdult').focus();
            error = true; 
        }

 if(error==false)
 {
	 PleaseWaitShow();
	 return true;
 }
 else
 {
	return false;
 }
  
});
SpaServiceAirport();
TreatmentDurationData();
SpaCategory();
//SpaMenuData();
TherapistData();
SpaServiceType();
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
function setSector(x)
{
	//var x = $('#SpaServiceAt').find(':selected').val();

	var lowerX = x.toLowerCase();

	if (lowerX.includes("domestic")) {
		var desiredValue = "Domestic";
	} else if (lowerX.includes("international")) {
		var desiredValue = "International";
	} else {
		//alert("Neither Domestic nor International");
	}
	var selectBox = document.getElementById("SpaSector");
	//var desiredValue = "Domestic"; // or "International"

	for (var i = 0; i < selectBox.options.length; i++) {
		if (selectBox.options[i].value === desiredValue) {
			selectBox.selectedIndex = i;
			changeSector_4(i);
			$('#SectorNames').val(i);
			
			break;
		}
	}

}
$(document).ready(function() {
    console.log(window.location.hash);
    if(window.location.hash=='#spa') {
        $('#spa-tab').click();
        $('.htexts').addClass('d-none');
        $('#pcontent').removeClass('d-none');
    }
});
</script>