<form id="departureForm" name="departureForm" method="post"  action="<?=base_url('home/search');?>" class="custom-search-from" enctype="application/x-www-form-urlencoded" style="min-height: 395px;">


<input type="hidden" name="to_airport_id" id="d_to_airport_id" value="0" />
<input type="hidden" name="from_airport_id" id="d_from_airport_id" value="0" />
<input type="hidden" name="terminal_id" id="d_terminal_id" value="0" />
<input type="hidden" name="terminal_code" id="d_terminal_code" value="" />
<input type="hidden" name="terminal_value" id="d_terminal_value" value="" />
<input type="hidden" name="airline_id" id="d_airline_id" value="0" />
<input type="hidden" name="airline_name" id="d_airline_name" value="" />
<input type="hidden" name="arrival_term" id="d_arrival_term" value="" />
<input type="hidden" name="departure_term" id="d_departure_term" value="" />
	  
	 <input type="hidden" name="flight_id" id="D_flight_id" value="0"/>
		<input type="hidden" name="arrival_time" id="D_arrival_time" value=""/>
		 
 
		<input type="hidden" name="category" value="Departure"/>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="" class="d-none">From Airport</label>
      <span class="caret"></span>
      <select id="DepartureFromAirport" name="DepartureFromAirport" class="form-control" size="1" onchange="getAirportData_1(this.value)">
        <option value=""  data-id="0">Select Departing From</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">To Airport</label>
      <span class="caret"></span>
      <select id="DepartureToAirtport" name="DepartureToAirtport" class="form-control" size="1" Onchange="getDeparting_1(this.value)">
        <option value=""  data-id="0">Select Departing At11</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">Select Sector</label>
      <span class="caret"></span>
      <select id="DepartureSector" name="DepartureSector" class="form-control BindSector" Onchange="changeSector_1(this.value)">
        <option value=""  data-id="0"  data-code=""  data-value="">Select Sector</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">Date of Departure</label>
      <i class="fas fa-calendar-alt"></i> 
	  
	  <input type="text" id="Departuredod" name="Departuredod" class="form-control datepicker" placeholder="Date of Departure" onchange="getDepartureFlightList(this.value)" value="" />
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Flight No.*</label>
      <span class="caret"></span>
      <select id="DepartureFlight" name="DepartureFlight" class="form-control" onchange="getFlightDepartureTime_1(this.value)">
        <option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name=""  data-departure="" data-arrival="">Flight No.*</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Departure Time*</label>
      <i class="far fa-clock"></i>
      <input type="text" id="DepartureTimeId"  name="DepartureTime" class="form-control time" maxlength="10" autocomplete="off" placeholder="Arrival Time*" onfocus="this.type='time'"  value="" onchange="getDepartureTime(this.value)">
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Service Time*</label>
      <i class="far fa-clock"></i>
        <input type="text" id="DepartureServiceTimeId" name="DepartureServiceTime" class="form-control time" maxlength="10" autocomplete="off" placeholder="Service Time*"   readonly style="background:lightgray" />
    </div>
    <div class=clearfix></div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Adult</label>
      <span class="caret"></span>
      <select id="DAdult" name="Adult" class="form-control">
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
      <select id="DChild" name="Child" class="form-select">
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
       <select id="DInfant" name="Infant" class="form-select">
        <option value="">Infant</option>
        <?php  for($i=1;$i<=10;$i++){?>
		<option value="<?=$i?>"><?=$i?></option>
		<?php  } ?>
      </select>
      <p class="small-text">Below 2 years</p>
    </div>
    <div class="form-group col-lg-12 text-center">
      <button type="submit" id="departureFormSubmit" name="departureFormSubmit" class="btn btn-red btn-sm"  role="button" aria-disabled="false">Search</button>
    </div>
    <div class=clearfix></div>
    <p class="small text-center m-0"><span class="small"> For Reservations queries, call: +91 12345 67890</span></p>
  </div>
</form>
<script>

function DepartureFromAirport()
{
	$.ajax({
			type: 'POST',
			url: "<?=base_url('ajaxcall/getApiData')?>",
			data: {"category":'Departure','MethodName':'get_service_airport','RequestType':"DepartureFrom"},
			 
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				 
				const item=data;
			 	 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					  
					  var html='<option value="" data-id="0">Select Departing From</option>';
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							   
							  html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'">'+ItemArray[i].name+'</option>';
						 }
					 $("#DepartureFromAirport").html('');
					$("#DepartureFromAirport").html(html);

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

function DepartureToAirport()
{
	 
		 $.ajax({
			type: 'POST',
			url: "<?=base_url('ajaxcall/getApiData')?>",
			data: {"category":'Departure','MethodName':'get_all_airport','RequestType':"DepartureTo"},
			dataType: "json",
			 	success: function(data) { 
				 
				const item=data;
			 
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					 var html='<option value="" selected="selected">To Airport</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							   html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'">'+ItemArray[i].name+'</option>';
						 }
					 $('#DepartureToAirtport').html('');		
					 $('#DepartureToAirtport').html(html);

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

 function getDepartureFlightList()
{
	var from_airport = $('#DepartureFromAirport option:selected').text();
	var to_airport = $('#DepartureToAirtport option:selected').text();
	var travel_date = $('#Departuredod').val();
	 $('#DepartureTimeId').val('');
	 $('#DepartureServiceTimeId').val('');
	if(from_airport=='')
	{
		alert("select starting from  airport");
		$('#DepartureFromAirport').focus();
		return false;
	}
	else if(to_airport=='')
	{
		alert("select to  airport");
		$('#DepartureToAirtport').focus();
		return false;
	}
	else if(travel_date=='')
	{
		alert("select date");
		$('#Departuredod').focus();
		return false;
	}
	else
	{
			$.ajax({
			type: 'POST',
			url: "<?=base_url('ajaxcall/getApiData')?>",
			 
			data: {'MethodName':'get_flight_list','RequestType':"DepartureFlightList","category":'Departure',"from_airport":from_airport,"to_airport":to_airport,"travel_date":travel_date},
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
							  let  departure_time = String((ItemArray[i].departure_time/100)); 
							  var  departure_time_1 = departure_time.replace(".",":");
							  let  arrival_time = String((ItemArray[i].arrival_time/100)); 
							   var  arrival_time_1 = arrival_time.replace(".",":");
							  
							  html += '<option value="'+ItemArray[i].flight_name+'" data-id="'+ItemArray[i].id+'"  data-code="'+arrival_time_1+'" data-value="'+departure_time_1+'" data-airline="'+airline_id+'" data-name="'+airline_name+'" data-arrival="'+ItemArray[i].arrival_term+'" data-departure="'+ItemArray[i].departure_term+'">'+ItemArray[i].flight_name+'</option>';
						 }
					 $('#DepartureFlight').html('');		
					 $('#DepartureFlight').html(html);

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

$("form#departureForm").submit(function(event) 
{
var error = false;
   $("#DepartureFromAirport").removeClass("focus");
   $("#DepartureToAirtport").removeClass("focus");
   $("#DepartureSector").removeClass("focus");
   $("#Departuredod").removeClass("focus");
   $("#DepartureFlight").removeClass("focus");
   $("#DepartureTimeId").removeClass("focus");
   $("#DepartureServiceTimeId").removeClass("focus");
   $("#DAdult").removeClass("focus");
   var DepartureFromAirport =  $("#DepartureFromAirport option:selected").val();
 var DepartureToAirtport =   $("#DepartureToAirtport option:selected").val();
 var DepartureSector =   $("#DepartureSector option:selected").val();
 var Departuredod =   $("#Departuredod").val();
 var DepartureFlight =   $("#DepartureFlight option:selected").val();
  var DepartureTimeId =  $("#DepartureTimeId").val();
 var DepartureServiceTimeId =   $("#DepartureServiceTimeId").val();
 var DAdult =   $("#DAdult option:selected").val();
   
   if(DepartureFromAirport == ""){
            $('#DepartureFromAirport').addClass("focus");
            $('#DepartureFromAirport').focus();
            error = true; 
        }
		if(DepartureToAirtport == ""){
            $('#DepartureToAirtport').addClass("focus");
            $('#DepartureToAirtport').focus();
            error = true; 
        }
		if(DepartureSector == ""){
            $('#DepartureSector').addClass("focus");
            $('#DepartureSector').focus();
            error = true; 
        }
		if(Departuredod == ""){
            $('#Departuredod').addClass("focus");
            //$('#Arrivaldof').focus();
            error = true; 
        }
		if(DepartureFlight == ""){
            $('#DepartureFlight').addClass("focus");
            $('#DepartureFlight').focus();
            error = true; 
        }
		if(DepartureTimeId == ""){
            $('#DepartureTimeId').addClass("focus");
            $('#DepartureTimeId').focus();
            error = true; 
        }
		if(DepartureServiceTimeId == ""){
            $('#DepartureServiceTimeId').addClass("focus");
            $('#DepartureServiceTimeId').focus();
            error = true; 
        }
		if(DAdult == "" || DAdult == 0){
            $('#DAdult').addClass("focus");
            $('#DAdult').focus();
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
  
function getAirportData_1(val)
{
	$('#DepartureFlight').html('');		
	$('#DepartureFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
	$("#DepartureToAirtport").html('');
	$("#DepartureToAirtport").html('<option value="" data-id="0">Select Departing  At</option>');
	
	$("#DepartureSector").prop("selectedIndex", 0);
   $('#Departuredod').val('');
	
	$('#d_terminal_id').val(0);	
	$('#d_from_airport_id').val(0);	
	$('#D_flight_id').val(0);	
	$('#D_arrival_time').val('');	
	$('#d_airline_id').val(0);	
	$('#d_airline_name').val('');	
	$('#d_arrival_term').val('');	
	$('#d_departure_term').val('');	
	$('#d_terminal_code').val('');	
	$('#d_terminal_value').val('');	
	$('#DepartureServiceTimeId').val('');	
	$('#DepartureTimeId').val('');	
	
	var airport_id = $('#DepartureFromAirport').find(':selected').attr('data-id');
	if(airport_id > 0)
	{
		$('#d_to_airport_id').val(airport_id);
	$.ajax({
			type: 'POST',
			url: "<?=base_url('ajaxcall/getApiData')?>",
			data: {'MethodName':'get_all_airport','RequestType':"ArrivalAllAirport","airport_id":airport_id},
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				//var item=JSON.parse(data);
				const item=data;
			//	 alert(item.message);
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					   var html='<option value="" data-id="0">Select Departing At</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {     
							  html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'">'+ItemArray[i].name+'</option>';
							 
							  
						 }
						 
						 $("#DepartureToAirtport").html('');
						 $("#DepartureToAirtport").html(html);
					 

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
	else
	{
		$('#d_to_airport_id').val(0);
	}		
}

function getDeparting_1(val)
{
	var id = $('#DepartureToAirtport').find(':selected').attr("data-id");
	$('#d_from_airport_id').val(id);	
	$('#d_terminal_id').val(0);	
	$('#d_terminal_code').val('');	
	$('#d_terminal_value').val('');	
	$('#DepartureFlight').html('');		
	$('#DepartureFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
	$("#DepartureSector").prop("selectedIndex", 0);
	$('#D_flight_id').val(0);	
	$('#D_arrival_time').val('');	
	$('#d_airline_id').val(0);	
	$('#d_airline_name').val('');	
	$('#d_arrival_term').val('');	
	$('#d_departure_term').val('');	
	$('#DepartureServiceTimeId').val('');	
	$('#DepartureTimeId').val('');
	$('#Departuredod').val('');
}
function changeSector_1(val)
{
	$('#d_terminal_id').val(0);	
	$('#d_terminal_code').val('');	
	$('#d_terminal_value').val('');	

	$('#DepartureFlight').html('');		
	$('#DepartureFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
	
	$('#D_flight_id').val(0);	
	$('#D_arrival_time').val('');	
	$('#d_airline_id').val(0);	
	$('#d_airline_name').val('');	
	$('#d_arrival_term').val('');	
	$('#d_departure_term').val('');	
	$('#DepartureServiceTimeId').val('');	
	$('#DepartureTimeId').val('');
	$('#Departuredod').val('');
	
	
	if(val.length > 2)
	{
		var value = $('#DepartureSector').find(':selected').attr("data-value");
		var id = $('#DepartureSector').find(':selected').attr("data-id");
		var code = $('#DepartureSector').find(':selected').attr("data-code");
			 
		$('#d_terminal_id').val(id);
		$('#d_terminal_value').val(value);
		$('#d_terminal_code').val(code);
	}
	 
	if($('#Departuredod').val() !="")
	{
		
		
		getDepartureFlightList();
	}
}
function getFlightDepartureTime_1(val)
{
	var flight_id = $('#DepartureFlight').find(':selected').attr('data-id');
	var date = $('#DepartureFlight').find(':selected').attr('data-code');
	var d_time = $('#DepartureFlight').find(':selected').attr('data-value');
	var airline_id = $('#DepartureFlight').find(':selected').attr('data-airline');
	var airline_name = $('#DepartureFlight').find(':selected').attr('data-name');
	var arrival_term = $('#DepartureFlight').find(':selected').attr('data-arrival');
	var departure_term = $('#DepartureFlight').find(':selected').attr('data-departure');
	$('#D_flight_id').val(flight_id);	
	$('#D_arrival_time').val(date);	
	$('#d_airline_id').val(airline_id);	
	$('#d_airline_name').val(airline_name);	
	$('#d_arrival_term').val(arrival_term);	
	$('#d_departure_term').val(departure_term);	
	
	 
  if(val=="")
  {
	  $('#DepartureTimeId').val('');
	$('#DepartureServiceTimeId').val('');
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
 var v2 = addMinutes (date,120);
	  }
 $('#DepartureTimeId').val(v1);
 $('#DepartureServiceTimeId').val(v2);
  }

}
  </script>
