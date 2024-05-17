 
<style>
 .quantity {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
}
 .quantity a{
color: #fff;
}
.quantity__minus,
.quantity__plus {
  display: block;
  width: 22px;
  height: 23px;
  margin: 0;
  background: #aeaeae;
  text-decoration: none;
  text-align: center;
  line-height: 23px;
}

.quantity__plus {
  border-radius: 0 3px 3px 0;
}
.quantity__minus:hover,
.quantity__plus:hover {
  background: #575b71;
  color: #fff;
} 
.quantity__minus {
  border-radius: 3px 0 0 3px;
}
.quantity__input {
  width: 32px;
  height: 19px;
  margin: 0;
  padding: 0;
  text-align: center;
  border-top: 2px solid #dee0ee;
  border-bottom: 2px solid #dee0ee;
  border-left: 1px solid #dee0ee;
  border-right: 2px solid #dee0ee;
  background: #fff;
  color: #8184a1;
}


.quantity__minus:link,
.quantity__plus:link {
  color: #8184a1;
} 

.quantity__minus:visited,
.quantity__plus:visited {
  color: #fff;
}
.quantity__minus_child,
.quantity__plus_child {
  display: block;
  width: 22px;
  height: 23px;
  margin: 0;
  background: #aeaeae;
  text-decoration: none;
  text-align: center;
  line-height: 23px;
}
.quantity__minus_child:hover,
.quantity__plus_child:hover {
  background: #575b71;
  color: #fff;
} 
.quantity__minus_child {
  border-radius: 3px 0 0 3px;
}

.quantity__plus_child {
  border-radius: 0 3px 3px 0;
}
.quantity__minus_child:link,
.quantity__plus_child:link {
  color: #8184a1;
} 
.quantity__input_child {
  width: 32px;
  height: 19px;
  margin: 0;
  padding: 0;
  text-align: center;
  border-top: 2px solid #dee0ee;
  border-bottom: 2px solid #dee0ee;
  border-left: 1px solid #dee0ee;
  border-right: 2px solid #dee0ee;
  background: #fff;
  color: #8184a1;
}
.quantity__minus_infant,
.quantity__plus_infant {
  display: block;
  width: 22px;
  height: 23px;
  margin: 0;
  background: #aeaeae;
  text-decoration: none;
  text-align: center;
  line-height: 23px;
}
.quantity__minus_infant:hover,
.quantity__plus_infant:hover {
  background: #575b71;
  color: #fff;
} 
.quantity__minus_infant {
  border-radius: 3px 0 0 3px;
}

.quantity__plus_infant {
  border-radius: 0 3px 3px 0;
}
.quantity__minus_infant:link,
.quantity__plus_infant:link {
  color: #8184a1;
} 
.quantity__input_infant {
  width: 32px;
  height: 19px;
  margin: 0;
  padding: 0;
  text-align: center;
  border-top: 2px solid #dee0ee;
  border-bottom: 2px solid #dee0ee;
  border-left: 1px solid #dee0ee;
  border-right: 2px solid #dee0ee;
  background: #fff;
  color: #8184a1;
}
#transitForm .form-group.adult_field{
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
    /* background: #ffffff; */
    border-color: #625b4b;
    color: #3d3d3d;
    height: 44px;
    padding: 10px 12px 10px 5px;
    border: 1px solid #625b4b;
    min-width: 130px;
    width: 29%;
    margin: 7px auto;
}
#transitForm .form-group.adult_field label{
 
}
#transitForm .form-group.adult_field .quantity{
    display: flex;
    justify-content: end;
    align-items: center;
    height: 100%;
}
#transitForm .form-group.adult_field .quantity input{
    height: 28px;
    padding: 0;
    border: none;
}

.small-text {
    width: 100%;
    text-align: right;
    font-size: 11px;
    margin: 13px 0;
}

@media only screen and (max-width: 778px){
  .quantity input {
    width: 19px !important;
}
.quantity a {
    display: block;
    width: 20px;
    height: 20px;
}
#transitForm .form-group.adult_field {
    width: 91%;
    margin: 11px auto;
}

}
</style> 
 
 <form id="transitForm" name="transitForm" method="post" action="<?= base_url('atithya/home/search'); ?>" class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded" style="min-height: 395px;">

	<input type="hidden" name="d_from_airport_id" id="td_from_airport_id" value="0" />
	<input type="hidden" name="d_airline_id" id="td_airline_id" value="0" />
	<input type="hidden" name="d_airline_name" id="td_airline_name" value="" />
	<input type="hidden" name="d_arrival_term" id="td_arrival_term" value="" />
	<input type="hidden" name="d_departure_term" id="td_departure_term" value="" />
	<input type="hidden" name="d_flight_id" id="TD_flight_id" value="0" />
	<input type="hidden" name="d_arrival_time" id="TD_arrival_time" value="" />



	<input type="hidden" name="a_from_airport_id" id="ta_from_airport_id" value="0" />

	<input type="hidden" name="a_airline_id" id="ta_airline_id" value="0" />
	<input type="hidden" name="a_airline_name" id="ta_airline_name" value="" />
	<input type="hidden" name="a_arrival_term" id="ta_arrival_term" value="" />
	<input type="hidden" name="a_departure_term" id="ta_departure_term" value="" />
	<input type="hidden" name="a_flight_id" id="TA_flight_id" value="0" />
	<input type="hidden" name="a_arrival_time" id="TA_arrival_time" value="" />

	<input type="hidden" name="to_airport_id" id="tad_to_airport_id" value="0" />
	<input type="hidden" name="terminal_id" id="tad_terminal_id" value="0" />
	<input type="hidden" name="terminal_code" id="tad_terminal_code" value="" />
	<input type="hidden" name="terminal_value" id="tad_terminal_value" value="" />
	<input type="hidden" name="category" value="Transit" />

	<input type="hidden" name="airport_location_code_id" id="tad_airport_location_code_id" value="0" />
	<input type="hidden" name="airport_location_code" id="tad_airport_location_code" value="" />
	<input type="hidden" id="tda_service_date_time" name="service_date_time" value="" />
	<div class="row">
		<div class="form-group col-md-6">
			<label for="" class="d-none">Transit Via</label>
			<span class="caret"></span>

			<select id="TransitAirportService" name="TransitAirportService" class="form-control txt-legth" size="1" Onchange="getAirportData_2(this.value)">
				<option value="" data-id="0" data-location-id="" data-location-name="">Select Transit Via</option>
			</select>
		</div>

		<div class="form-group col-md-6 TransitFromAirtport">
			<label for="" class="d-none">Airport Terminal</label>
			<!--span class="caret"></span-->
			<select id="TransitFromAirtport" name="TransitFromAirtport" class="form-control select2-single" size="1" Onchange="getDeparting_2(this.value)">
				<option value="" data-id="0">Arriving From</option>
			</select>
		</div>
		<div class="form-group col-md-6 TransitToAirtport">
			<label for="" class="d-none">To Airport Terminal</label>
			<!--span class="caret"></span-->
			<select id="TransitToAirtport" name="TransitToAirtport" class="form-control select2-single" size="1" Onchange="getDeparting_3(this.value)">
				<option value="" data-id="0">Departing To</option>
			</select>

		</div>
		<div class="form-group col-md-6">
			<label for="" class="d-none">Select Sector</label>
			<span class="caret"></span>

			<select id="TransitArrivalSector" name="SectorName" class="form-control BindSector" readonly>
				<option value="" data-id="0" data-code="" data-value="">Select Sector</option>
			</select>

		</div>

		<div class="form-group col-md-4">
			<i class="fas fa-calendar-alt"></i>
			<input type="text" id="Transitdoa" name="Transitdoa" class="form-control datepicker" placeholder="" onchange="getTransitArrivalFlightList(this.value)" value="" />
			<label for="" class="floating-label">Date of Arrival</label>
		</div>
		<div class="form-group col-md-4">
			<label for="" class="d-none">Flight No.*</label>
			<span class="caret"></span>
			<select id="TransitArrivalFlight" name="TransitArrivalFlight" class="form-control" onchange="getTransitFlightArrivalTime_1(this.value)">
				<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>

			</select>
		</div>
		<div class="form-group col-md-4">
			<i class="far fa-clock"></i>


			<input type="text" id="TransitArrivalTimeId" name="TransitArrivalTime" class="form-control time mytimepicker" maxlength="10" autocomplete="off" placeholder="" value="" onchange="getTransitArrivalTime(this.value)" />


			<input type="hidden" id="TransitArrivalServiceTimeId" name="TransitArrivalServiceTime" class="form-control time" maxlength="10" autocomplete="off" placeholder="" style="background:lightgray" readonly value="" />
			<label for="" class="floating-label">STA/Service Time*</label>
		</div>
		<!--div class="form-group col-md-8">&nbsp;</div>
    <div class="form-group col-md-4">
      <i class="far fa-clock"></i>
      
	 
	  
      <label for="" class="floating-label">Service Time*</label>
	  
    </div-->
		<div class="form-group col-md-4">
			<i class="fas fa-calendar-alt"></i>
			<input type="text" id="Transitdod" name="Transitdod" class="form-control datepicker" placeholder="" onchange="getTransitDepartureFlightList(this.value)" value="" />
			<label for="" class="floating-label">Date of Departure</label>
		</div>
		<div class="form-group col-md-4">
			<label for="" class="d-none">Flight No.*</label>
			<span class="caret"></span>
			<select id="TransitDepartureFlight" name="TransitDepartureFlight" class="form-control" onchange="getTransitFlightDepartureTime_1(this.value)">
				<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>
			</select>
		</div>
		<div class="form-group col-md-4">
			<i class="far fa-clock"></i>
			<input type="text" id="TransitDepartureTimeId" name="TransitDepartureTime" class="form-control time mytimepicker" maxlength="10" autocomplete="off" placeholder="" value="" />
			<label for="" class="floating-label">STD*</label>
		</div>
		<div class=clearfix></div>
		<div class="form-group adult_field col-md-4">
        <label for="" class="floating-label">Adult</label>
            <div class="quantity">
                <a href="#" class="quantity__minus" onclick="transit_decrement_adult()"><span>-</span></a>
                <input name="Adult" type="text" class="quantity__input" id="transit_adult_quantity" value="1">
                <a href="#" class="quantity__plus" onclick="transit_increment_adult()"><span>+</span></a>
           </div>
           
            <p class="small-text">12 years &amp; above</p>
        </div>
		<div class="form-group adult_field col-md-4">
            <label for="" class="floating-label">Child </label>
       
            <div class="quantity">
                <a href="#" class=" quantity__minus_child" onclick="transit_decrement_child()"><span>-</span></a>
                <input name="Child" type="text" class=" quantity__input_child" id="transit_child_quantity" value="0">
                <a href="#" class=" quantity__plus_child" onclick="transit_increment_child()"><span>+</span></a>
           </div>
            <p class="small-text">2-11 years</p>
        </div>
		<div class="form-group adult_field col-md-4">
            <label for="" class="floating-label">Infant </label>
            <div class="quantity">
                <a href="#" class="quantity__minus_infant" onclick="transit_decrement_infant()"><span>-</span></a>
                <input name="Infant" type="text" class="quantity__input_infant" id="transit_infant_quantity" value="0">
                <a href="#" class="quantity__plus_infant" onclick="transit_increment_infant()"><span>+</span></a>
           </div>
            <p class="small-text">Below 2 years</p>
        </div>
		<div class="form-group col-lg-12 text-center">
			<button type="submit" id="transitFormSubmit" name="transitFormSubmit" class="btn btn-red btn-sm" role="button" aria-disabled="false">Book Now</button>
		</div>
		<div class=clearfix></div>
		<p class="small text-center m-0"><span class="small"> For Reservations queries, Call: <a href="tel:+919289366950">+91 92893 66950</a><br>Email us: <a href="mailto:guest.services@encalm.com">guest.services@encalm.com</a></span></p>
		<p class="small text-center mt-2"><img src="<?= base_url('atithya_assets/') ?>assets/img/cards.png"></p>
	</div>
</form>
<script>
var a = 1;
var c = 0;
var i = 0;

document.getElementById('transit_adult_quantity').value = a;
document.getElementById('transit_child_quantity').value = c;
document.getElementById('transit_infant_quantity').value = i;

function transit_increment_adult() {
document.getElementById('transit_adult_quantity').value = ++a;
}  
function transit_decrement_adult() {
if (a > 1) { 
    document.getElementById('transit_adult_quantity').value = --a;
}
}
function transit_increment_child() {
document.getElementById('transit_child_quantity').value = ++c;
}  
function transit_decrement_child() {
if (c > 0) { 
    document.getElementById('transit_child_quantity').value = --c;
}
}
function transit_increment_infant() {
document.getElementById('transit_infant_quantity').value = ++i;
}  
function transit_decrement_infant() {
if (i > 0) { 
    document.getElementById('transit_infant_quantity').value = --i;
}
}
	function alertingUser() {
		error = '';
		console.log($('#Transitdoa').val() + 'T' + $('#TransitArrivalTimeId').val() + ':00');
		var fdate = convertFromStringToDate($('#Transitdoa').val() + 'T' + $('#TransitArrivalTimeId').val() + ':00');

		var ddate = convertFromStringToDate($('#Transitdod').val() + 'T' + $('#TransitDepartureTimeId').val() + ':00');
		var cdate = new Date();
		var hours = Math.abs(ddate - fdate) / 36e5;
		if ((ddate > fdate) && (hours < 8)) {
			//   $('#arrivalForm').submit();
			error = false;
		} else {
			error = true;
			alert('Website bookings are accepted only for transit services upto 8 hours of service time. For all service requests more than 8 hours request you to kindly connect with us on +91 9289366950.');

		}
		return error;
	}

	$("form#transitForm").submit(function(event) {

		var error = false;
		$("#TransitAirportService").removeClass("focus");
		$("#TransitArrivalSector").removeClass("focus");
		$("#TransitFromAirtport").removeClass("focus");
		$("#TransitToAirtport").removeClass("focus");
		$(".TransitFromAirtport .select2-selection").removeClass("focus");
		$(".TransitToAirtport .select2-selection").removeClass("focus");
		$("#Transitdoa").removeClass("focus");
		$("#TransitArrivalFlight").removeClass("focus");
		$("#TransitArrivalTimeId").removeClass("focus");
		$("#TransitArrivalServiceTimeId").removeClass("focus");
		$("#Transitdod").removeClass("focus");
		$("#TransitDepartureFlight").removeClass("focus");
		$("#TransitDepartureTimeId").removeClass("focus");
		$("#TAdult").removeClass("focus");


		var TransitAirportService = $("#TransitAirportService option:selected").val();
		var TransitArrivalSector = $("#TransitArrivalSector option:selected").val();
		var s_code = $('#TransitArrivalSector').find(':selected').attr('data-code');
		var s_value = $('#TransitArrivalSector').find(':selected').attr('data-value');
		var TransitFromAirtport = $("#TransitFromAirtport option:selected").val();
		var TransitToAirtport = $("#TransitToAirtport option:selected").val();
		var Transitdoa = $("#Transitdoa").val();
		var TransitArrivalFlight = $("#TransitArrivalFlight option:selected").val();
		var TransitArrivalTimeId = $("#TransitArrivalTimeId").val();
		var TransitArrivalServiceTimeId = $("#TransitArrivalServiceTimeId").val();
		var Transitdod = $("#Transitdod").val();
		var TransitDepartureFlight = $("#TransitDepartureFlight option:selected").val();
		var TransitDepartureTimeId = $("#TransitDepartureTimeId").val();
		var TAdult = $("#TAdult option:selected").val();


		var datetime_2 = Transitdoa.split("-").reverse().join("-") + ' ' + TransitArrivalTimeId;
		var datetime_1 = Transitdod.split("-").reverse().join("-") + ' ' + TransitDepartureTimeId;

		let get_min_diff = diff_minutes(datetime_1, datetime_2);

		if (TransitAirportService == "") {
			$('#TransitAirportService').addClass("focus");
			$('#TransitAirportService').focus();
			error = true;
		}
		if (TransitArrivalSector == "") {
			$('#TransitArrivalSector').addClass("focus");
			$('#TransitArrivalSector').focus();
			error = true;
		}
		if (TransitFromAirtport == "") {
			$('.TransitFromAirtport .select2-selection').addClass("focus");
			$('#TransitFromAirtport').addClass("focus");
			$('#TransitFromAirtport').focus();
			error = true;
		}
		if (TransitToAirtport == "") {
			$('.TransitToAirtport .select2-selection').addClass("focus");
			$('#TransitToAirtport').addClass("focus");
			$('#TransitToAirtport').focus();
			error = true;
		}
		if (Transitdoa == "") {
			$('#Transitdoa').addClass("focus");
			//$('#Transitdoa').focus();
			error = true;
		}
		if (TransitArrivalFlight == "") {
			$('#TransitArrivalFlight').addClass("focus");
			$('#TransitArrivalFlight').focus();
			error = true;
		}
		if (TransitArrivalTimeId == "") {
			$('#TransitArrivalTimeId').addClass("focus");
			$('#TransitArrivalTimeId').focus();
			error = true;
		}
		if (TransitArrivalServiceTimeId == "") {
			$('#TransitArrivalServiceTimeId').addClass("focus");
			$('#TransitArrivalServiceTimeId').focus();
			error = true;
		}
		if (Transitdod == "") {
			$('#Transitdod').addClass("focus");
			$('#Transitdod').focus();
			error = true;
		}
		if (TransitDepartureFlight == "") {
			$('#TransitDepartureFlight').addClass("focus");
			$('#TransitDepartureFlight').focus();
			error = true;
		}
		if (TransitDepartureTimeId == "") {
			$('#TransitDepartureTimeId').addClass("focus");
			$('#TransitDepartureTimeId').focus();
			error = true;
		}
		if (TAdult == "" || TAdult == 0) {
			$('#TAdult').addClass("focus");
			$('#TAdult').focus();
			error = true;
		}
		if (parseInt(get_min_diff) >= parseInt(s_value)) {
			//alert("(A-B)min_diff:= "+get_min_diff);
			//alert(" s_value:= "+s_value);
			//error = true; 
		}
		if (parseInt(get_min_diff) <= (s_code)) {
			//alert("(A-B)min_diff:= "+get_min_diff);
			//alert("s_code:= "+s_code);
			//error = true; 
		}
		//alert("min_diff | s_value | s_code:= "+parseInt(get_min_diff)+' | '+parseInt(s_value)+' | '+parseInt(s_code));
		error = alertingUser();
		console.log('error', error);
		if (error == false) {
			PleaseWaitShow();
			return true;
		} else {
			return false;
		}

	});


	function getTransitArrivalFlightList() {
		var from_airport = $('#TransitAirportService option:selected').val();

		var flight_id = $('#TransitAirportService').find(':selected').attr('data-id');
		var to_airport = $('#TransitFromAirtport option:selected').val();
		var to_airport_id = $('#TransitFromAirtport option:selected').attr('data-id');
		var travel_date = $('#Transitdoa').val();
		if (from_airport == '') {
			alert("select starting from  airport");
			$('#TransitFromAirtport').focus();

			return false;
		} else if (to_airport == '') {
			alert("select departing from  airport");
			$('#TransitFromAirtport').focus();
			return false;
		} else if (travel_date == '') {
			alert("select date");
			$('#Transitdoa').focus();
			return false;
		} else {
			$.ajax({
				type: 'POST',
				url: "<?= base_url('atithya/ajaxcall/getApiData') ?>",

				//data: {'MethodName':'get_flight_list','RequestType':"TransitArrivalFlightList","category":'Departure',"from_airport":from_airport,"to_airport":to_airport,"travel_date":travel_date,"service_airport":flight_id},
				data: {
					'MethodName': 'get_flight_list_for_booking',
					'RequestType': "TransitArrivalFlightList",
					"category": 'Arrival',
					"from_airport": to_airport_id,
					"to_airport": flight_id,
					"travel_date": travel_date,
					"service_airport": from_airport
				},
				dataType: "json",
				success: function(data) {
					console.log(data);
					const item = data;

					if (item.message == 'data found.' && item.status == true) {
						const ItemArray = item.datalist;

						var html = '<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>';

						for (let i = 0; i < ItemArray.length; i++) {
							var airline_id = ItemArray[i].airline_id[0];
							var airline_name = ItemArray[i].airline_id[1];
							let departure_time = String((ItemArray[i].departure_time / 100).toFixed(2));
							var departure_time_1 = departure_time.replace(".", ":");
							let arrival_time = String((ItemArray[i].arrival_time / 100).toFixed(2));
							var arrival_time_1 = arrival_time.replace(".", ":");

							html += '<option value="' + ItemArray[i].flight_name + '" data-id="' + ItemArray[i].id + '"  data-code="' + arrival_time_1 + '" data-value="' + departure_time_1 + '" data-airline="' + airline_id + '" data-name="' + airline_name + '" data-arrival="' + ItemArray[i].arrival_term + '" data-departure="' + ItemArray[i].departure_term + '">' + ItemArray[i].flight_name + '</option>';
						}
						$('#TransitArrivalFlight').html('');
						$('#TransitArrivalFlight').html(html);

					}
					return true;
				},
				error: function(data) {
					if (data.status == 0) {
						alert("There is no internet connection found. Please reconnect and try again!");
						return false;
					}
					if (data.status > 0) {
						alert(data.responseText);
						var OpenWindow = window.open('', '_blank', 'width=600,height=530,resizable=1');
						OpenWindow.document.write(data.responseText);
						return false;

					}
				}
			});


		}
	}

	function getTransitDepartureFlightList() {
		var from_airport = $('#TransitAirportService option:selected').val();
		var to_airport = $('#TransitToAirtport option:selected').val();
		var to_airport_id = $('#TransitToAirtport option:selected').attr('data-id');
		var flight_id = $('#TransitAirportService').find(':selected').attr('data-id');
		var travel_date = $('#Transitdod').val();
		if (from_airport == '') {
			alert("select starting from  airport");
			$('#TransitToAirtport').focus();
			return false;
		} else if (to_airport == '') {
			alert("select departing from  airport");
			$('#TransitToAirtport').focus();
			return false;
		} else if (travel_date == '') {
			alert("select date");
			$('#Transitdod').focus();
			return false;
		} else {


			$.ajax({
				type: 'POST',
				url: "<?= base_url('atithya/ajaxcall/getApiData') ?>",

				//data: {'MethodName':'get_flight_list','RequestType':"TransitDepartureFlightList","category":'Departure',"from_airport":from_airport,"to_airport":to_airport,"travel_date":travel_date,"service_airport":flight_id},
				data: {
					'MethodName': 'get_flight_list_for_booking',
					'RequestType': "TransitDepartureFlightList",
					"category": 'Departure',
					"from_airport": flight_id,
					"to_airport": to_airport_id,
					"travel_date": travel_date,
					"service_airport": from_airport
				},
				dataType: "json",
				success: function(data) {
					console.log(data);
					const item = data;

					if (item.message == 'data found.' && item.status == true) {
						const ItemArray = item.datalist;

						var html = '<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>';

						for (let i = 0; i < ItemArray.length; i++) {
							var airline_id = ItemArray[i].airline_id[0];
							var airline_name = ItemArray[i].airline_id[1];
							let departure_time = String((ItemArray[i].departure_time / 100).toFixed(2));
							var departure_time_1 = departure_time.replace(".", ":");
							let arrival_time = String((ItemArray[i].arrival_time / 100).toFixed(2));
							var arrival_time_1 = arrival_time.replace(".", ":");

							html += '<option value="' + ItemArray[i].flight_name + '" data-id="' + ItemArray[i].id + '"  data-code="' + arrival_time_1 + '" data-value="' + departure_time_1 + '" data-airline="' + airline_id + '" data-name="' + airline_name + '" data-arrival="' + ItemArray[i].arrival_term + '" data-departure="' + ItemArray[i].departure_term + '">' + ItemArray[i].flight_name + '</option>';
						}
						$('#TransitDepartureFlight').html('');
						$('#TransitDepartureFlight').html(html);

					}
					return true;
				},
				error: function(data) {
					if (data.status == 0) {
						alert("There is no internet connection found. Please reconnect and try again!");
						return false;
					}
					if (data.status > 0) {
						alert(data.responseText);
						var OpenWindow = window.open('', '_blank', 'width=600,height=530,resizable=1');
						OpenWindow.document.write(data.responseText);
						return false;

					}
				}
			});
		}
	}

	function TransitServiceAirport() {
		$.ajax({
			type: 'POST',
			url: "<?= base_url('atithya/ajaxcall/getApiData') ?>",
			data: {
				"category": 'Departure',
				'MethodName': 'get_service_airport',
				'RequestType': "TransitService"
			},
			dataType: "json",
			success: function(data) {
				console.log(data);

				const item = data;
				if (item.message == 'data found.' && item.status == true) {
					const ItemArray = item.datalist;


					var html = '<option value="" data-id="0" data-location-id="" data-location-name="">Select Transit Via</option>';
					for (let i = 0; i < ItemArray.length; i++) {
						//console.log(ItemArray[i]) + "<br>";
						var airline_location_id = ItemArray[i].airport_location_code_id[0];
						var airline_location_code = ItemArray[i].airport_location_code_id[1];
						html += '<option value="' + ItemArray[i].name + '" data-id="' + ItemArray[i].id + '" data-country="' + ItemArray[i].country_id[0] + '" data-location-id="' + airline_location_id + '" data-location-code="' + airline_location_code + '">' + ItemArray[i].display_name + '</option>';
					}
					$("#TransitAirportService").html('');
					$("#TransitAirportService").html(html);

				}
				return true;
			},
			error: function(data) {
				if (data.status == 0) {
					alert("There is no internet connection found. Please reconnect and try again!");
					return false;
				}
				if (data.status > 0) {
					alert(data.responseText);
					var OpenWindow = window.open('', '_blank', 'width=600,height=530,resizable=1');
					OpenWindow.document.write(data.responseText);
					return false;

				}
			}
		});

	}

	function TransitArrivingSector() {
		$.ajax({
			type: 'POST',
			url: "<?= base_url('atithya/ajaxcall/getApiData') ?>",
			data: {
				'MethodName': 'get_general_value',
				'RequestType': "SectorList",
				"type": "TRANSIT SECTOR"
			},
			dataType: "json",
			success: function(data) {
				console.log(data);
				const item = data;
				if (item.message == 'data found.' && item.status == true) {
					const ItemArray = item.datalist;

					var html = '<option value=""  data-id="0" data-value="" data-code="">Select Sector</option>';

					for (let i = 0; i < ItemArray.length; i++) {
						html += '<option value="' + ItemArray[i].name + '" data-id="' + ItemArray[i].id + '" data-value="' + ItemArray[i].value + '"  data-code="' + ItemArray[i].code + '" >' + ItemArray[i].name + '</option>';
					}

					$('#TransitArrivalSector').html('');
					$('#TransitArrivalSector').html(html);
				}

				return true;
			},
			error: function(data) {
				if (data.status == 0) {
					alert("There is no internet connection found. Please reconnect and try again!");
					return false;
				}
				if (data.status > 0) {
					alert(data.responseText);
					var OpenWindow = window.open('', '_blank', 'width=600,height=530,resizable=1');
					OpenWindow.document.write(data.responseText);
					return false;

				}
			}
		});
	}

	function selectAndChangeSector_3(country_id_TransitAirportService, country_id_TransitFromAirtport, country_id_TransitToAirtport) {
		// Get the select element by its ID
		var selectElement = document.getElementById("TransitArrivalSector");
		var i;

		for (i = 0; i < selectElement.options.length; i++) {
			if (selectElement.options[i].value === "Domestic to Domestic") {
				// Set the selected option and trigger the change event
				if (country_id_TransitAirportService == 104) {
					// FromAirport - TransitAirportService - ToAirport - Sector
					if (country_id_TransitFromAirtport == 104 && country_id_TransitToAirtport == 104 && selectElement.options[i].value === "Domestic to International") {
						selectElement.options[i].selected = true;
						$('#TransitArrivalSector').prop('selectedIndex', i).change();
						changeSector_2(selectElement.options[i].selected);
						$('#TransitArrivalSector')
							.prop('selectedIndex', i + 1)
							.prop('disabled', true)
							.change();
					}
					// Non India - TransitAirportService - ToAirport - Sector
					else if (country_id_TransitFromAirtport != 104 && country_id_TransitToAirtport == 104 && selectElement.options[i].value === "International to Domestic") {
						selectElement.options[i].selected = false;
						$('#TransitArrivalSector').prop('selectedIndex', i).change();
						changeSector_2(selectElement.options[i].selected);
						$('#TransitArrivalSector')
							.prop('selectedIndex', i + 1)
							.prop('disabled', true)
							.change();
					}
					// Non India - TransitAirportService - Non India - Sector
					else if (country_id_TransitFromAirtport != 104 && country_id_TransitToAirtport != 104 && selectElement.options[i].value === "International to International") {
						selectElement.options[i].selected = false;
						$('#TransitArrivalSector').prop('selectedIndex', i + 1).change();
						changeSector_2(selectElement.options[i].selected);
						$('#TransitArrivalSector')
							.prop('selectedIndex', i + 1)
							.prop('disabled', true)
							.change();
					}
					// India - TransitAirportService - Non India - Sector
					else if (country_id_TransitFromAirtport == 104 && country_id_TransitToAirtport != 104) {
						selectElement.options[i].selected = true;
						$('#TransitArrivalSector').prop('selectedIndex', i + 1).change();
						changeSector_2(selectElement.options[i].selected);
						$('#TransitArrivalSector')
							.prop('selectedIndex', i + 1)
							.prop('disabled', true)
							.change();
					}
				} else {
					selectElement.options[i].selected = false;
					$('#TransitArrivalSector').prop('selectedIndex', i + 1).change();
					changeSector_2(selectElement.options[i].selected);
					$('#TransitArrivalSector')
						.prop('selectedIndex', i + 1)
						.prop('disabled', true)
						.change();
				}
			}
		}

	}

	function getAirportData_2(val) {


		$('#TransitArrivalFlight').html('');
		$('#TransitArrivalFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');

		$('#TransitArrivalFlight').html('');
		$('#TransitArrivalFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');

		$("#TransitFromAirtport").html('');
		$("#TransitFromAirtport").html('<option value="" data-id="0">Arriving From</option>');

		$("#TransitToAirtport").html('');
		$("#TransitToAirtport").html('<option value="" data-id="0">Departing To</option>');

		$("#TransitArrivalSector").prop("selectedIndex", 0);

		$('#Transitdod').val('');
		$('#Transitdoa').val('');

		$('#tad_terminal_id').val(0);
		$('#tad_terminal_code').val('');
		$('#tad_terminal_value').val('');

		$('#td_from_airport_id').val(0);
		$('#TD_flight_id').val(0);
		$('#TD_arrival_time').val('');
		$('#td_airline_id').val(0);
		$('#td_airline_name').val('');
		$('#td_arrival_term').val('');
		$('#td_departure_term').val('');
		$('#TransitDepartureTimeId').val('');

		$('#ta_from_airport_id').val(0);
		$('#TA_flight_id').val(0);
		$('#TA_arrival_time').val('');
		$('#ta_airline_id').val(0);
		$('#ta_airline_name').val('');
		$('#ta_arrival_term').val('');
		$('#ta_departure_term').val('');
		$('#TransitArrivalTimeId').val('');
		$('#TransitArrivalServiceTimeId').val('');
		$('#tda_service_date_time').val('');

		var airport_id = $('#TransitAirportService').find(':selected').attr('data-id');

		var location_code_id = $('#TransitAirportService').find(':selected').attr('data-location-id');
		var location_code = $('#TransitAirportService').find(':selected').attr('data-location-code');
		if (airport_id > 0) {
			$('#tad_to_airport_id').val(airport_id);
			$('#tad_airport_location_code_id').val(location_code_id);
			$('#tad_airport_location_code').val(location_code);
			$.ajax({
				type: 'POST',
				url: "<?= base_url('atithya/ajaxcall/getApiData') ?>",
				data: {
					'MethodName': 'get_all_airport',
					'RequestType': "ArrivalAllAirport",
					"airport_id": airport_id
				},
				dataType: "json",
				success: function(data) {
					console.log(data);
					//var item=JSON.parse(data);
					const item = data;
					//	 alert(item.message);
					if (item.message == 'data found.' && item.status == true) {
						const ItemArray = item.datalist;
						var html = '<option value="" data-id="0">Arriving From</option>';
						var html_1 = '<option value="" data-id="0">Departing To</option>';

						for (let i = 0; i < ItemArray.length; i++) {
							html += '<option value="' + ItemArray[i].name + '" data-id="' + ItemArray[i].id + '" data-country="' + ItemArray[i].country_id[1] + '">' + ItemArray[i].display_name + '</option>';
							html_1 += '<option value="' + ItemArray[i].name + '" data-id="' + ItemArray[i].id + '" data-country="' + ItemArray[i].country_id[1] + '">' + ItemArray[i].display_name + '</option>';


						}

						$("#TransitFromAirtport").html('');
						$("#TransitFromAirtport").html(html);

						$("#TransitToAirtport").html('');
						$("#TransitToAirtport").html(html_1);


					}

					return true;
				},
				error: function(data) {
					if (data.status == 0) {
						alert("There is no internet connection found. Please reconnect and try again!");
						return false;
					}
					if (data.status > 0) {
						alert(data.responseText);
						var OpenWindow = window.open('', '_blank', 'width=600,height=530,resizable=1');
						OpenWindow.document.write(data.responseText);
						return false;

					}
				}
			});
		} else {
			$('#tad_to_airport_id').val(0);
			$('#tad_airport_location_code_id').val(0);
			$('#tad_airport_location_code').val('');
		}
	}

	function getTransitFlightArrivalTime_1(val) {
		var Transitdoa = $('#Transitdoa').val();
		var flight_id = $('#TransitArrivalFlight').find(':selected').attr('data-id');
		var date = $('#TransitArrivalFlight').find(':selected').attr('data-code');
		var d_time = $('#TransitArrivalFlight').find(':selected').attr('data-value');
		var airline_id = $('#TransitArrivalFlight').find(':selected').attr('data-airline');
		var airline_name = $('#TransitArrivalFlight').find(':selected').attr('data-name');
		var arrival_term = $('#TransitArrivalFlight').find(':selected').attr('data-arrival');
		var departure_term = $('#TransitArrivalFlight').find(':selected').attr('data-departure');
		$('#TA_flight_id').val(flight_id);
		$('#TA_arrival_time').val(date);
		$('#ta_airline_id').val(airline_id);
		$('#ta_airline_name').val(airline_name);
		$('#ta_arrival_term').val(arrival_term);
		$('#ta_departure_term').val(departure_term);


		if (val == "") {
			$('#TransitArrivalTimeId').val('');
			$('#TransitArrivalServiceTimeId').val('');
			$('#tda_service_date_time').val('');
		} else {
			if (date == 0) {
				var v1 = '00:00';
				var v2 = '00:00';
				var v3 = Transitdoa + ' 00:00';
			} else {
				var v1 = addMinutes(date, 0);
				var v2 = addMinutes(date, 0);
				var v3 = addMinutesInDate(Transitdoa + ' ' + date, 0);
			}
			$('#TransitArrivalTimeId').val(v1);
			$('#TransitArrivalServiceTimeId').val(v2);
			$('#tda_service_date_time').val(v3);
		}

	}

	function getTransitFlightDepartureTime_1(val) {
		var flight_id = $('#TransitDepartureFlight').find(':selected').attr('data-id');
		var date = $('#TransitDepartureFlight').find(':selected').attr('data-value');
		var d_time = $('#TransitDepartureFlight').find(':selected').attr('data-code');
		var airline_id = $('#TransitDepartureFlight').find(':selected').attr('data-airline');
		var airline_name = $('#TransitDepartureFlight').find(':selected').attr('data-name');
		var arrival_term = $('#TransitDepartureFlight').find(':selected').attr('data-arrival');
		var departure_term = $('#TransitDepartureFlight').find(':selected').attr('data-departure');
		$('#TD_flight_id').val(flight_id);
		$('#TD_arrival_time').val(date);
		$('#td_airline_id').val(airline_id);
		$('#td_airline_name').val(airline_name);
		$('#td_arrival_term').val(arrival_term);
		$('#td_departure_term').val(departure_term);


		if (val == "") {
			$('#TransitDepartureTimeId').val('');
			//$('#TransitDepartureServiceTimeId').val('');
		} else {
			if (date == 0) {
				var v1 = '00:00';
				var v2 = '00:00';
			} else {
				var v1 = addMinutes(date, 0);
				var v2 = addMinutes(date, 120);
			}
			$('#TransitDepartureTimeId').val(v1);
			// $('#TransitDepartureServiceTimeId').val(v2);
		}

	}

	function changeSector_2(val) {
		alert(val);
		$('#tad_terminal_id').val(0);
		$('#tad_terminal_code').val('');
		$('#tad_terminal_value').val('');

		$('#TransitDepartureFlight').html('');
		$('#TransitDepartureFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
		$('#TD_flight_id').val(0);
		$('#TD_arrival_time').val('');
		$('#td_airline_id').val(0);
		$('#td_airline_name').val('');
		$('#td_arrival_term').val('');
		$('#td_departure_term').val('');
		$('#TransitDepartureTimeId').val('');
		$('#Transitdod').val('');

		$('#TransitArrivalFlight').html('');
		$('#TransitArrivalFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
		$('#TA_flight_id').val(0);
		$('#TA_arrival_time').val('');
		$('#ta_airline_id').val(0);
		$('#ta_airline_name').val('');
		$('#ta_arrival_term').val('');
		$('#ta_departure_term').val('');
		$('#TransitArrivalTimeId').val('');
		$('#TransitArrivalServiceTimeId').val('');
		$('#tda_service_date_time').val('');
		$('#Transitdoa').val('');


		if (val.length > 2) {
			var value = $('#TransitArrivalSector').find(':selected').attr("data-value");
			var id = $('#TransitArrivalSector').find(':selected').attr("data-id");
			var code = $('#TransitArrivalSector').find(':selected').attr("data-code");

			$('#tad_terminal_id').val(id);
			$('#tad_terminal_value').val(value);
			$('#tad_terminal_code').val(code);
		}

		if ($('#Transitdoa').val() != "") {
			getTransitArrivalFlightList();
		}
		if ($('#Transitdod').val() != "") {
			getTransitDepartureFlightList();
		}
	}

	function getDeparting_2(val) {
		var id = $('#TransitFromAirtport').find(':selected').attr("data-id");
		var TransitFromAirtport = $('#TransitFromAirtport').find(':selected').attr('data-country');
		var TransitToAirtport = $('#TransitToAirtport').find(':selected').attr('data-country');

		if (TransitFromAirtport == "India" && TransitToAirtport == "India") {
			let select = document.getElementById('TransitArrivalSector');
			select.childNodes.forEach((option) => {
				if (option.value === "Domestic to Domestic") {
					option.selected = 'selected'
					var value = $(option).data('value');
					var id = $(option).data('id');
					var code = $(option).data('code');
					$('#tad_terminal_id').val(id);
					$('#tad_terminal_value').val(value);
					$('#tad_terminal_code').val(code);
					console.log("foreach option", value, id, code)
				}

			})
			// element.value = 'Domestic to Domestic';
		} else if (TransitFromAirtport == "India" && TransitToAirtport !== "India") {
			let select = document.getElementById('TransitArrivalSector');
			select.childNodes.forEach((option) => {
				if (option.value === "Domestic to International") {
					option.selected = 'selected'
					var value = $(option).data('value');
					var id = $(option).data('id');
					var code = $(option).data('code');
					$('#tad_terminal_id').val(id);
					$('#tad_terminal_value').val(value);
					$('#tad_terminal_code').val(code);
					console.log("foreach option", value, id, code)
				}

			})
			// element.value = 'Domestic to International';
		} else if (TransitFromAirtport !== "India" && TransitToAirtport !== "India") {
			let select = document.getElementById('TransitArrivalSector');
			select.childNodes.forEach((option) => {
				if (option.value === "International to International") {
					option.selected = 'selected'
					var value = $(option).data('value');
					var id = $(option).data('id');
					var code = $(option).data('code');
					$('#tad_terminal_id').val(id);
					$('#tad_terminal_value').val(value);
					$('#tad_terminal_code').val(code);
					console.log("foreach option", value, id, code)
				}

			})
			// element.value = 'International to International';
		} else if (TransitFromAirtport !== "India" && TransitToAirtport == "India") {
			let select = document.getElementById('TransitArrivalSector');
			select.childNodes.forEach((option) => {
				if (option.value === "International to Domestic") {
					option.selected = 'selected'
					var value = $(option).data('value');
					var id = $(option).data('id');
					var code = $(option).data('code');
					$('#tad_terminal_id').val(id);
					$('#tad_terminal_value').val(value);
					$('#tad_terminal_code').val(code);
					console.log("foreach option", value, id, code)
				}

			})
			// element.value = 'International to Domestic';
		}
		$('#ta_from_airport_id').val(id);

		$('#TransitArrivalFlight').html('');
		$('#TransitArrivalFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');

		$('#TA_flight_id').val(0);
		$('#TA_arrival_time').val('');
		$('#ta_airline_id').val(0);
		$('#ta_airline_name').val('');
		$('#ta_arrival_term').val('');
		$('#ta_departure_term').val('');
		$('#TransitArrivalTimeId').val('');
		$('#TransitArrivalServiceTimeId').val('');
		$('#tda_service_date_time').val('');
		$('#Transitdoa').val('');
	}

	function getDeparting_3(val) {
		var id = $('#TransitToAirtport').find(':selected').attr("data-id");
		var TransitFromAirtport = $('#TransitFromAirtport').find(':selected').attr('data-country');
		var TransitToAirtport = $('#TransitToAirtport').find(':selected').attr('data-country');

		if (TransitFromAirtport == "India" && TransitToAirtport == "India") {
			let select = document.getElementById('TransitArrivalSector');
			select.childNodes.forEach((option) => {
				if (option.value === "Domestic to Domestic") {
					option.selected = 'selected'
					var value = $(option).data('value');
					var id = $(option).data('id');
					var code = $(option).data('code');
					$('#tad_terminal_id').val(id);
					$('#tad_terminal_value').val(value);
					$('#tad_terminal_code').val(code);
					console.log("foreach option", value, id, code)
				}

			})
			// element.value = 'Domestic to Domestic';
		} else if (TransitFromAirtport == "India" && TransitToAirtport !== "India") {
			let select = document.getElementById('TransitArrivalSector');
			select.childNodes.forEach((option) => {
				if (option.value === "Domestic to International") {
					option.selected = 'selected'
					var value = $(option).data('value');
					var id = $(option).data('id');
					var code = $(option).data('code');
					$('#tad_terminal_id').val(id);
					$('#tad_terminal_value').val(value);
					$('#tad_terminal_code').val(code);
					console.log("foreach option", value, id, code)
				}

			})
			// element.value = 'Domestic to International';
		} else if (TransitFromAirtport !== "India" && TransitToAirtport !== "India") {
			let select = document.getElementById('TransitArrivalSector');
			select.childNodes.forEach((option) => {
				if (option.value === "International to International") {
					option.selected = 'selected'
					var value = $(option).data('value');
					var id = $(option).data('id');
					var code = $(option).data('code');
					$('#tad_terminal_id').val(id);
					$('#tad_terminal_value').val(value);
					$('#tad_terminal_code').val(code);
					console.log("foreach option", value, id, code)
				}

			})
			// element.value = 'International to International';
		} else if (TransitFromAirtport !== "India" && TransitToAirtport == "India") {
			let select = document.getElementById('TransitArrivalSector');
			select.childNodes.forEach((option) => {
				if (option.value === "International to Domestic") {
					option.selected = 'selected'
					var value = $(option).data('value');
					var id = $(option).data('id');
					var code = $(option).data('code');
					$('#tad_terminal_id').val(id);
					$('#tad_terminal_value').val(value);
					$('#tad_terminal_code').val(code);
					console.log("foreach option", value, id, code)
				}

			})
			// element.value = 'International to Domestic';
		}
		$('#td_from_airport_id').val(id);
		var country_id_TransitAirportService = $('#TransitAirportService').find(':selected').attr("data-country");
		var country_id_TransitFromAirtport = $('#TransitFromAirtport').find(':selected').attr("data-country");
		var country_id_TransitToAirtport = $('#TransitToAirtport').find(':selected').attr("data-country");
		console.log(country_id_TransitAirportService, country_id_TransitFromAirtport, country_id_TransitToAirtport);
		if (country_id_TransitAirportService && country_id_TransitFromAirtport && country_id_TransitToAirtport) {
			selectAndChangeSector_3(country_id_TransitAirportService, country_id_TransitFromAirtport, country_id_TransitToAirtport)
		}

		$('#TransitDepartureFlight').html('');
		$('#TransitDepartureFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
		$('#TD_flight_id').val(0);
		$('#TD_arrival_time').val('');
		$('#td_airline_id').val(0);
		$('#td_airline_name').val('');
		$('#td_arrival_term').val('');
		$('#td_departure_term').val('');
		$('#TransitDepartureTimeId').val('');
		$('#Transitdod').val('');
	}

	function getTransitArrivalTime(value) {
		var Transitdoa = $('#Transitdoa').val();
		if (value != '') {
			var s_time = addMinutes(value, 0);
			if (s_time == '' || s_time != 'NaN' || s_time != '00:NaN') {
				$('#TransitArrivalServiceTimeId').val(s_time);
				$('#tda_service_date_time').val(Transitdoa + ' ' + s_time);
			}
		}

	}
</script>
<script type="text/javascript">
	$('.txt-legth').change(function() {
		if (this.value.length >= 35) {
			console.log('long title');
			//trimming
			var trim = $.trim(this.value).substring(0, 35) + "...";
			$(this).find("option:selected").text(trim);
		}
	});

	function diff_minutes(datetime_1, datetime_2) {
		const dt1 = new Date(datetime_1);
		const dt2 = new Date(datetime_2);
		let diff = (dt1.getTime() - dt2.getTime()) / 1000;
		diff /= 60;

		return Math.abs(Math.round(diff));
	}
</script>
