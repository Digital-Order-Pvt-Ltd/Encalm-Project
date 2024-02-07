<form id="arrivalForm" name="arrivalForm" method="post" action="<?=base_url('home/search');?>" class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded" style="min-height: 395px;">
	 <input type="hidden" name="to_airport_id" id="a_to_airport_id" value="0" />
	  <input type="hidden" name="from_airport_id" id="a_from_airport_id" value="0" />
	  <input type="hidden" name="terminal_id" id="a_terminal_id" value="0" />
	  <input type="hidden" name="terminal_code" id="a_terminal_code" value="" />
	  <input type="hidden" name="terminal_value" id="a_terminal_value" value="" />
	  <input type="hidden" name="airline_id" id="a_airline_id" value="0" />
	  <input type="hidden" name="airline_name" id="a_airline_name" value="" />
	  <input type="hidden" name="arrival_term" id="a_arrival_term" value="" />
	  <input type="hidden" name="departure_term" id="a_departure_term" value="" />
	  
	 <input type="hidden" name="flight_id" id="A_flight_id" value="0"/>
		<input type="hidden" name="arrival_time" id="A_arrival_time" value=""/>
		<input type="hidden" name="category" value="Arrival"/>		
  <div class="row">
      <div class="form-group col-md-6">
      <label for="" class="d-none">Arriving At</label>
      <span class="caret"></span>
	  

      <select id="ArrivingAirportAt" name="ToAirport" class="form-control" size="1" Onchange="getAirportData(this.value)">
        <option value="" data-id="0">Select Arriving At</option>
 
      </select>
	  
	  
	  <!--select id="ArrivingAirportAt" name="ToAirport" class="form-control" size="1" Onchange="setHiddenData('Arrival','ArrivingAirportAt','a_to_airport_id','','')">
        <option value=""  data-id="0">Arriving At</option>
 
      </select-->
    </div>
    <div class="form-group col-md-6 AStartFromAirport">
      <label for="" class="d-none">Starting From</label>
	  <!--span class="caret"></span-->
	  
	  <select id="AStartFromAirport" name="FromAirport" class="form-control select2-single" size="1"  Onchange="getDeparting(this.value)">
        <option value="" data-id="0">Select Arriving From</option>
		</select>
	  
	  <!--select id="AStartFromAirport" name="FromAirport" class="form-control" size="1"  Onchange="setHiddenData('Arrival','AStartFromAirport','a_from_airport_id','','')">
        <option value=""   data-id="0">Select Departing From</option>
		</select-->
		
      <!--input type="text" class="form-control" placeholder="Starting From" onkeyup="ArrivingStartFromAirport(this.value)"  autocomplete="off" id="AStartFromAirport" value=""/>
	  <div id="ArrivalFromAirport" class="setcustomercss"></div-->
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">Select Sector</label>
      <span class="caret"></span>
	  
	  <!--select id="ArrivingSector" name="SectorName" class="form-control BindSector"  Onchange="setHiddenData('Arrival','ArrivingSector','a_terminal_id','a_terminal_value','a_terminal_code')">
        <option value=""  data-id="0"  data-code=""  data-value="">Select Sector</option>
        
      </select-->
	  
      <select id="ArrivingSector" name="SectorName" class="form-control BindSector"  Onchange="changeSector(this.value)">
        <option value=""  data-id="0"  data-code=""  data-value="">Select Sector</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <i class="fas fa-calendar-alt"></i>
      <input type="text" id="Arrivaldof" name="doa" class="form-control datepicker" placeholder="" onchange="getArrivalFlightList(this.value)" value="" />
      <label for="" class="floating-label">Date of Arrival</label>
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Flight No.*</label>
      <span class="caret"></span>
      <select id="ArrivalFlight" name="FlightName" class="form-control" onchange="getFlightArrivalTime_1(this.value)">
        <option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name=""  data-departure="" data-arrival="">Flight No.*</option>
        
      </select>
    </div>
    <div class="form-group col-md-4">
      <i class="far fa-clock"></i>
      <input type="text" id="ArrivalTimeId"  name="ArrivalTime" class="form-control time mytimepicker" maxlength="10" autocomplete="off" placeholder=""  value="" onchange="getArrivalTime(this.value)">
      <label for="" class="floating-label">Arrival Time*</label>
    </div>
    <div class="form-group col-md-4">
      <i class="far fa-clock"></i>
      <input type="text" id="ArrivalServiceTimeId" name="ServiceTime" class="form-control time" maxlength="10" autocomplete="off" placeholder="" readonly style="background:lightgray" />
      <label for="" class="floating-label">Service Time*</label>
    </div>
    <div class=clearfix></div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Adult</label>
      <span class="caret"></span>
      <select id="Adult" name="Adult" class="form-control">
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
      <select id="Child" name="Child" class="form-select">
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
      <select id="Infant" name="Infant" class="form-select">
        <option value="">Infant</option>
        <?php  for($i=1;$i<=10;$i++){?>
		<option value="<?=$i?>"><?=$i?></option>
		<?php  } ?>
      </select>
      <p class="small-text">Below 2 years</p>
    </div>
    <div class="form-group col-lg-12 text-center">
      <button type="submit" id="arrivalFormSubmit" name="arrivalFormSubmit" class="btn btn-red">Search</button>
    </div>
    <div class=clearfix></div>
    <p class="small text-center m-0"><span class="small"> For Reservations queries, call: +91 12345 67890</span></p>
  </div>
</form>  
<script>
function getDeparting(val)
{
	var id = $('#AStartFromAirport').find(':selected').attr("data-id");
	$('#a_from_airport_id').val(id);	
	$('#a_terminal_id').val(0);	
	$('#a_terminal_code').val('');	
	$('#a_terminal_value').val('');	
	$('#ArrivalFlight').html('');		
	$('#ArrivalFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
	$("#ArrivingSector").prop("selectedIndex", 0);
	$('#A_flight_id').val(0);	
	$('#A_arrival_time').val('');	
	$('#a_airline_id').val(0);	
	$('#a_airline_name').val('');	
	$('#a_arrival_term').val('');	
	$('#a_departure_term').val('');	
	$('#ArrivalServiceTimeId').val('');	
	$('#ArrivalTimeId').val('');
	$('#Arrivaldof').val('');
}
function changeSector(val)
{
	$('#a_terminal_id').val(0);	
	$('#a_terminal_code').val('');	
	$('#a_terminal_value').val('');	

	$('#ArrivalFlight').html('');		
	$('#ArrivalFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
	
	$('#A_flight_id').val(0);	
	$('#A_arrival_time').val('');	
	$('#a_airline_id').val(0);	
	$('#a_airline_name').val('');	
	$('#a_arrival_term').val('');	
	$('#a_departure_term').val('');	
	$('#ArrivalServiceTimeId').val('');	
	$('#ArrivalTimeId').val('');
	$('#Arrivaldof').val('');
	
	
	if(val.length > 2)
	{
		var value = $('#ArrivingSector').find(':selected').attr("data-value");
		var id = $('#ArrivingSector').find(':selected').attr("data-id");
		var code = $('#ArrivingSector').find(':selected').attr("data-code");
			 
		$('#a_terminal_id').val(id);
		$('#a_terminal_value').val(value);
		$('#a_terminal_code').val(code);
	}
	 
	if($('#Arrivaldof').val() !="")
	{
		
		
		getArrivalFlightList();
	}
}

$("form#arrivalForm").submit(function(event) 
{
var error = false;
   $("#ArrivingAirportAt").removeClass("focus");
   $(".AStartFromAirport .select2-selection").removeClass("focus");
   $("#AStartFromAirport").removeClass("focus");
   $("#ArrivingSector").removeClass("focus");
   $("#Arrivaldof").removeClass("focus");
   $("#ArrivalFlight").removeClass("focus");
   $("#ArrivalTimeId").removeClass("focus");
   $("#ArrivalServiceTimeId").removeClass("focus");
   $("#Adult").removeClass("focus");
   var ArrivingAirportAt =  $("#ArrivingAirportAt option:selected").val();
 var AStartFromAirport =   $("#AStartFromAirport option:selected").val();
 var ArrivingSector =   $("#ArrivingSector option:selected").val();
 var Arrivaldof =   $("#Arrivaldof").val();
 var ArrivalFlight =   $("#ArrivalFlight option:selected").val();
  var ArrivalTimeId =  $("#ArrivalTimeId").val();
 var ArrivalServiceTimeId =   $("#ArrivalServiceTimeId").val();
 var Adult =   $("#Adult option:selected").val();
   
   if(ArrivingAirportAt == ""){
            $('#ArrivingAirportAt').addClass("focus");
            $('#ArrivingAirportAt').focus();
            error = true; 
        }
		if(AStartFromAirport == ""){
            $('.AStartFromAirport .select2-selection').addClass("focus");
            $('#AStartFromAirport').addClass("focus");
            $('#AStartFromAirport').focus();
            error = true; 
        }
		if(ArrivingSector == ""){
            $('#ArrivingSector').addClass("focus");
            $('#ArrivingSector').focus();
            error = true; 
        }
		if(Arrivaldof == ""){
            $('#Arrivaldof').addClass("focus");
            //$('#Arrivaldof').focus();
            error = true; 
        }
		if(ArrivalFlight == ""){
            $('#ArrivalFlight').addClass("focus");
            $('#ArrivalFlight').focus();
            error = true; 
        }
		if(ArrivalTimeId == ""){
            $('#ArrivalTimeId').addClass("focus");
            $('#ArrivalTimeId').focus();
            error = true; 
        }
		if(ArrivalServiceTimeId == ""){
            $('#ArrivalServiceTimeId').addClass("focus");
            $('#ArrivalServiceTimeId').focus();
            error = true; 
        }
		if(Adult == "" || Adult == 0){
            $('#Adult').addClass("focus");
            $('#Adult').focus();
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

function getAirportData(val)
{
	
	
	$('#ArrivalFlight').html('');		
	$('#ArrivalFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
	$("#AStartFromAirport").html('');
	$("#AStartFromAirport").html('<option value="" data-id="0">Select Arriving From</option>');
	
	$("#ArrivingSector").prop("selectedIndex", 0);
   $('#Arrivaldof').val('');
	
	$('#a_terminal_id').val(0);	
	$('#a_from_airport_id').val(0);	
	$('#A_flight_id').val(0);	
	$('#A_arrival_time').val('');	
	$('#a_airline_id').val(0);	
	$('#a_airline_name').val('');	
	$('#a_arrival_term').val('');	
	$('#a_departure_term').val('');	
	$('#a_terminal_code').val('');	
	$('#a_terminal_value').val('');	
	$('#ArrivalServiceTimeId').val('');	
	$('#ArrivalTimeId').val('');	
	
	var airport_id = $('#ArrivingAirportAt').find(':selected').attr('data-id');
	if(airport_id > 0)
	{
		$('#a_to_airport_id').val(airport_id);
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
					  
					// var html='<ul class="hidedata">';
					 	 var html='<option value="" data-id="0">Select Departing From</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							  
							  
							   
							  html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'">'+ItemArray[i].name+'</option>';
							 
							  
						 }
						  
						 $("#AStartFromAirport").html('');
						 $("#AStartFromAirport").html(html);
					//$("#ArrivalFromAirport").show();
					//$("#ArrivalFromAirport").html(html);
					//$("#ArrivalFromAirport").css("background","#FFF");

				 }
				 //console.log(item);
                 // console.log(item.datalist);
                //console.log(item.datalist[0]);
				//console.log(item.datalist[0].id);
				
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
		$('#a_to_airport_id').val(0);
	}		
}
</script>
