 
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
#departureForm .form-group.adult_field{
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
#departureForm .form-group.adult_field label{
 
}
#departureForm .form-group.adult_field .quantity{
    display: flex;
    justify-content: end;
    align-items: center;
    height: 100%;
}
#departureForm .form-group.adult_field .quantity input{
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
#departureForm .form-group.adult_field {
    width: 91%;
    margin: 11px auto;
}

}
</style> 
 
 <form id="departureForm" name="departureForm" method="post" action="<?= base_url('atithya/home/search'); ?>" class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded" style="min-height: 395px;">

	<input type="hidden" name="to_airport_id" id="d_to_airport_id" value="0" />
	<input type="hidden" name="from_airport_id" id="d_from_airport_id" value="0" />
	<input type="hidden" name="terminal_id" id="d_terminal_id" value="0" />
	<input type="hidden" name="terminal_code" id="d_terminal_code" value="" />
	<input type="hidden" name="terminal_value" id="d_terminal_value" value="" />
	<input type="hidden" name="airline_id" id="d_airline_id" value="0" />
	<input type="hidden" name="airline_name" id="d_airline_name" value="" />
	<input type="hidden" name="arrival_term" id="d_arrival_term" value="" />
	<input type="hidden" name="departure_term" id="d_departure_term" value="" />


	<input type="hidden" name="airport_location_code_id" id="d_airport_location_code_id" value="0" />
	<input type="hidden" name="airport_location_code" id="d_airport_location_code" value="" />

	<input type="hidden" name="flight_id" id="D_flight_id" value="0" />
	<input type="hidden" name="arrival_time" id="D_arrival_time" value="" />

	<input type="hidden" name="category" value="Departure" />
	<div class="row">
		<div class="form-group col-md-6">
			<label for="" class="d-none">From Airport</label>
			<span class="caret"></span>
			<select id="DepartureFromAirport" name="DepartureFromAirport" class="form-control txt-legth" size="1" onchange="getAirportData_1(this.value)">
				<option value="" data-id="0" data-location-id="" data-location-name="">Departure Airport</option>
			</select>
		</div>
		<div class="form-group col-md-6 DepartureToAirtport">
			<label for="" class="d-none">To Airport</label>
			<!--span class="caret"></span-->
			<select id="DepartureToAirtport" name="DepartureToAirtport" class="form-control select2-single" size="1" Onchange="getDeparting_1(this.value)">
				<option value="" data-id="0">Destination Airport</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label for="" class="d-none">Select Sector</label>
			<span class="caret"></span>
			<select id="DepartureSector" name="DepartureSector" class="form-control BindSector" readonly>
				<option value="" data-id="0" data-code="" data-value="">Select Sector</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<i class="fas fa-calendar-alt"></i>

			<input type="text" id="Departuredod" name="Departuredod" class="form-control datepicker" placeholder="" onchange="getDepartureFlightList(this.value)" value="" />
			<label for="" class="floating-label">Date of Departure</label>
		</div>
		<div class="form-group col-md-4">
			<label for="" class="d-none">Flight No.*</label>
			<span class="caret"></span>
			<select id="DepartureFlight" name="DepartureFlight" class="form-control" onchange="getFlightDepartureTime_1(this.value)">
				<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>
			</select>
		</div>
		<div class="form-group col-md-4">
			<i class="far fa-clock"></i>
			<input type="text" id="DepartureTimeId" name="DepartureTime" class="form-control time mytimepicker" maxlength="10" autocomplete="off" placeholder="" value="" onchange="getDepartureTime(this.value)">
			<label for="" class="floating-label">STD*</label>
		</div>
		<div class="form-group col-md-4">
			<i class="far fa-clock"></i>
			<input type="text" id="d_service_date_time" name="service_date_time" class="form-control time" maxlength="10" autocomplete="off" placeholder="" readonly style="background-color:#dedede;" />
			<input type="hidden" id="DepartureServiceTimeId" name="DepartureServiceTime" value="" />
			<label for="" class="floating-label">Service Date-Time*</label>
		</div>
		<div class=clearfix></div>
		<div class="form-group adult_field col-md-4">
        <label for="" class="floating-label">Adult</label>
            <div class="quantity">
                <a href="#" class="quantity__minus" onclick="departure_decrement_adult()"><span>-</span></a>
                <input name="Adult" type="text" class="quantity__input" id="departure_adult_quantity" value="1">
                <a href="#" class="quantity__plus" onclick="departure_increment_adult()"><span>+</span></a>
           </div>
           
            <p class="small-text">12 years &amp; above</p>
        </div>
		<div class="form-group adult_field col-md-4">
            <label for="" class="floating-label">Child </label>
       
            <div class="quantity">
                <a href="#" class=" quantity__minus_child" onclick="departure_decrement_child()"><span>-</span></a>
                <input name="Child" type="text" class=" quantity__input_child" id="departure_child_quantity" value="0">
                <a href="#" class=" quantity__plus_child" onclick="departure_increment_child()"><span>+</span></a>
           </div>
            <p class="small-text">2-11 years</p>
        </div>
		<div class="form-group adult_field col-md-4">
            <label for="" class="floating-label">Infant </label>
            <div class="quantity">
                <a href="#" class="quantity__minus_infant" onclick="departure_decrement_infant()"><span>-</span></a>
                <input name="Infant" type="text" class="quantity__input_infant" id="departure_infant_quantity" value="0">
                <a href="#" class="quantity__plus_infant" onclick="departure_increment_infant()"><span>+</span></a>
           </div>
            <p class="small-text">Below 2 years</p>
        </div>
		<div class="form-group col-lg-12 text-center">
			<button type="submit" id="departureFormSubmit" name="departureFormSubmit" class="btn btn-red" role="button" aria-disabled="false">Book Now</button>
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

document.getElementById('departure_adult_quantity').value = a;
document.getElementById('departure_child_quantity').value = c;
document.getElementById('departure_infant_quantity').value = i;

function departure_increment_adult() {
document.getElementById('departure_adult_quantity').value = ++a;
}  
function departure_decrement_adult() {
if (a > 1) { 
    document.getElementById('departure_adult_quantity').value = --a;
}
}
function departure_increment_child() {
document.getElementById('departure_child_quantity').value = ++c;
}  
function departure_decrement_child() {
if (c > 0) { 
    document.getElementById('departure_child_quantity').value = --c;
}
}
function departure_increment_infant() {
document.getElementById('departure_infant_quantity').value = ++i;
}  
function departure_decrement_infant() {
if (i > 0) { 
    document.getElementById('departure_infant_quantity').value = --i;
}
}
	function DepartureFromAirport() {
		$.ajax({
			type: 'POST',
			url: "<?= base_url('atithya/ajaxcall/getApiData') ?>",
			data: {
				"category": 'Departure',
				'MethodName': 'get_service_airport',
				'RequestType': "DepartureFrom"
			},

			dataType: "json",
			success: function(data) {
				console.log(data);

				const item = data;
				if (item.message == 'data found.' && item.status == true) {
					const ItemArray = item.datalist;


					var html = '<option value="" data-id="0" data-location-id="" data-location-name="">Departure Airport</option>';
					for (let i = 0; i < ItemArray.length; i++) {
						//console.log(ItemArray[i]) + "<br>";
						var airline_location_id = ItemArray[i].airport_location_code_id[0];
						var airline_location_code = ItemArray[i].airport_location_code_id[1];
						var airline_country_code = ItemArray[i].country_id[1];

						html += '<option value="' + ItemArray[i].name + '" data-id="' + ItemArray[i].id + '" data-location-id="' + airline_location_id + '"data-country-id="' +
							airline_country_code + '" data-location-code="' + airline_location_code + '">' + ItemArray[i].display_name + '</option>';
					}
					$("#DepartureFromAirport").html('');
					$("#DepartureFromAirport").html(html);

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

	function DepartureToAirport() {

		$.ajax({
			type: 'POST',
			url: "<?= base_url('atithya/ajaxcall/getApiData') ?>",
			data: {
				"category": 'Departure',
				'MethodName': 'get_all_airport',
				'RequestType': "DepartureTo"
			},
			dataType: "json",
			success: function(data) {

				const item = data;

				if (item.message == 'data found.' && item.status == true) {
					const ItemArray = item.datalist;

					var html = '<option value="" selected="selected">To Airport</option>';

					for (let i = 0; i < ItemArray.length; i++) {
						html += '<option value="' + ItemArray[i].name + '" data-id="' + ItemArray[i].id + '">' + ItemArray[i].display_name + '</option>';
					}
					$('#DepartureToAirtport').html('');
					$('#DepartureToAirtport').html(html);

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

	function getDepartureFlightList() {
		var from_airport = $('#DepartureFromAirport option:selected').val();
		var to_airport = $('#DepartureToAirtport option:selected').val();
		var to_airport_id = $('#DepartureToAirtport option:selected').attr('data-id');
		var flight_id = $('#DepartureFromAirport').find(':selected').attr('data-id');
		var travel_date = $('#Departuredod').val();
		$('#DepartureTimeId').val('');
		$('#DepartureServiceTimeId').val('');
		$('#d_service_date_time').val('');
		if (from_airport == '') {
			alert("select starting from  airport");
			$('#DepartureFromAirport').focus();
			return false;
		} else if (to_airport == '') {
			alert("select to  airport");
			$('#DepartureToAirtport').focus();
			return false;
		} else if (travel_date == '') {
			alert("select date");
			$('#Departuredod').focus();
			return false;
		} else {
			$.ajax({
				type: 'POST',
				url: "<?= base_url('atithya/ajaxcall/getApiData') ?>",
				//get_flight_list
				//data: {'MethodName':'get_flight_list_for_booking','RequestType':"DepartureFlightList","category":'Departure',"from_airport":from_airport,"to_airport":to_airport,"travel_date":travel_date,"service_airport":flight_id},
				data: {
					'MethodName': 'get_flight_list_for_booking',
					'RequestType': "DepartureFlightList",
					"category": 'Departure',
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

							html += '<option value="' + ItemArray[i].flight_name + '" data-id="' + ItemArray[i].id + '"  data-code="' + departure_time_1 + '" data-value="' + departure_time_1 + '" data-airline="' + airline_id + '" data-name="' + airline_name + '" data-arrival="' + ItemArray[i].arrival_term + '" data-departure="' + ItemArray[i].departure_term + '">' + ItemArray[i].flight_name + '</option>';
						}
						$('#DepartureFlight').html('');
						$('#DepartureFlight').html(html);

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

	$("form#departureForm").submit(function(event) {
		var error = false;
		$("#DepartureFromAirport").removeClass("focus");
		$(".DepartureToAirtport .select2-selection").removeClass("focus");
		$("#DepartureToAirtport").removeClass("focus");
		$("#DepartureSector").removeClass("focus");
		$("#Departuredod").removeClass("focus");
		$("#DepartureFlight").removeClass("focus");
		$("#DepartureTimeId").removeClass("focus");
		$("#DepartureServiceTimeId").removeClass("focus");
		$("#DAdult").removeClass("focus");
		var DepartureFromAirport = $("#DepartureFromAirport option:selected").val();
		var DepartureToAirtport = $("#DepartureToAirtport option:selected").val();
		var DepartureSector = $("#DepartureSector option:selected").val();
		var Departuredod = $("#Departuredod").val();
		var DepartureFlight = $("#DepartureFlight option:selected").val();
		var DepartureTimeId = $("#DepartureTimeId").val();
		var DepartureServiceTimeId = $("#DepartureServiceTimeId").val();
		var DAdult = $("#DAdult option:selected").val();

		if (DepartureFromAirport == "") {
			$('#DepartureFromAirport').addClass("focus");
			$('#DepartureFromAirport').focus();
			error = true;
		}
		if (DepartureToAirtport == "") {
			$('.DepartureToAirtport .select2-selection').addClass("focus");
			$('#DepartureToAirtport').addClass("focus");
			$('#DepartureToAirtport').focus();
			error = true;
		}
		if (DepartureSector == "") {
			$('#DepartureSector').addClass("focus");
			$('#DepartureSector').focus();
			error = true;
		}
		if (Departuredod == "") {
			$('#Departuredod').addClass("focus");
			//$('#Arrivaldof').focus();
			error = true;
		}
		if (DepartureFlight == "") {
			$('#DepartureFlight').addClass("focus");
			$('#DepartureFlight').focus();
			error = true;
		}
		if (DepartureTimeId == "") {
			$('#DepartureTimeId').addClass("focus");
			$('#DepartureTimeId').focus();
			error = true;
		}
		if (DepartureServiceTimeId == "") {
			$('#DepartureServiceTimeId').addClass("focus");
			$('#DepartureServiceTimeId').focus();
			error = true;
		}
		if (DAdult == "" || DAdult == 0) {
			$('#DAdult').addClass("focus");
			$('#DAdult').focus();
			error = true;
		}
		if (error == false) {
			PleaseWaitShow();
			return true;
		} else {
			return false;
		}

	});

	function getAirportData_1(val) {
		$('#DepartureFlight').html('');
		$('#DepartureFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
		$("#DepartureToAirtport").html('');
		$("#DepartureToAirtport").html('<option value="" data-id="0">Destination Airport</option>');

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
		$('#d_service_date_time').val('');
		$('#DepartureTimeId').val('');

		var airport_id = $('#DepartureFromAirport').find(':selected').attr('data-id');
		var location_code_id = $('#DepartureFromAirport').find(':selected').attr('data-location-id');
		var location_code = $('#DepartureFromAirport').find(':selected').attr('data-location-code');
		if (airport_id > 0) {
			$('#d_to_airport_id').val(airport_id);
			$('#d_airport_location_code_id').val(location_code_id);
			$('#d_airport_location_code').val(location_code);
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
						var html = '<option value="" data-id="0" data-location-id="" data-location-name="">Destination Airport</option>';

						for (let i = 0; i < ItemArray.length; i++) {
							//console.log(ItemArray[i]) + "<br>";
							var airline_location_id = ItemArray[i].airport_location_code_id[0];
							var airline_location_code = ItemArray[i].airport_location_code_id[1];
							var cc_code = ItemArray[i].country_id ? ItemArray[i].country_id[0] : 104;
							var airline_country_code = ItemArray[i].country_id[1];

							html += '<option value="' + ItemArray[i].name + '" data-id="' + ItemArray[i].id + '" data-location-id="' + airline_location_id + '"data-country="' + airline_country_code + '" data-location-code="' + airline_location_code + '" data-country="' + ItemArray[i].country_id[0] + '">' + ItemArray[i].display_name + '</option>';
						}

						$("#DepartureToAirtport").html('');
						$("#DepartureToAirtport").html(html);


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
			$('#d_to_airport_id').val(0);
			$('#d_airport_location_code_id').val(0);
			$('#d_airport_location_code').val('');
		}
	}

	function getDeparting_1(val) {
		var ArrivingAirportAt = $('#DepartureFromAirport').find(':selected').attr('data-country-id');
		var AStartFromAirport = $('#DepartureToAirtport').find(':selected').attr('data-country');

		if (ArrivingAirportAt == "India" && AStartFromAirport == "India") {
			let select = document.getElementById('DepartureSector');
			select.childNodes.forEach((option) => {
				if (option.value === "Domestic") {
					option.selected = 'selected'
					var value = $(option).data('value');
					var id = $(option).data('id');
					var code = $(option).data('code');
					$('#d_terminal_id').val(id);
					$('#d_terminal_value').val(value);
					$('#d_terminal_code').val(code);
					console.log("foreach option", value, id, code)
				}

			})
		} else {
			let select = document.getElementById('DepartureSector');
			select.childNodes.forEach((option) => {
				if (option.value === "International") {
					option.selected = 'selected'
					var value = $(option).data('value');
					var id = $(option).data('id');
					var code = $(option).data('code');
					$('#d_terminal_id').val(id);
					$('#d_terminal_value').val(value);
					$('#d_terminal_code').val(code);
					console.log("foreach option", value, id, code)
				}

			})
		}
		var id = $('#DepartureToAirtport').find(':selected').attr("data-id");
		// var country_id = $('#AStartFromAirport').find(':selected').attr("data-country");
		// if (country_id) {
		// 	selectAndChangeSector_1(country_id);
		// 	// alert(country_id);
		// }
		$('#d_from_airport_id').val(id);
		// $('#d_terminal_id').val(0);
		// $('#d_terminal_code').val('');
		// $('#d_terminal_value').val('');
		$('#DepartureFlight').html('');
		$('#DepartureFlight').html('<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>');
		// $("#DepartureSector").prop("selectedIndex", 0);
		$('#D_flight_id').val(0);
		$('#D_arrival_time').val('');
		$('#d_airline_id').val(0);
		$('#d_airline_name').val('');
		$('#d_arrival_term').val('');
		$('#d_departure_term').val('');
		$('#DepartureServiceTimeId').val('');
		$('#d_service_date_time').val('');
		$('#DepartureTimeId').val('');
		$('#Departuredod').val('');
	}

	function changeSector_1(val) {
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
		$('#d_service_date_time').val('');
		$('#DepartureTimeId').val('');
		$('#Departuredod').val('');


		if (val.length > 2) {
			var value = $('#DepartureSector').find(':selected').attr("data-value");
			var id = $('#DepartureSector').find(':selected').attr("data-id");
			var code = $('#DepartureSector').find(':selected').attr("data-code");

			$('#d_terminal_id').val(id);
			$('#d_terminal_value').val(value);
			$('#d_terminal_code').val(code);
		}

		if ($('#Departuredod').val() != "") {


			getDepartureFlightList();
		}
	}

	function getFlightDepartureTime_1(val) {
		var Departuredod = $('#Departuredod').val();
		var SectorValue = $('#DepartureSector').find(':selected').attr('data-value');
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


		if (val == "") {
			$('#DepartureTimeId').val('');
			$('#DepartureServiceTimeId').val('');
		} else {
			if (date == 0) {
				var v1 = '00:00';
				var v2 = '00:00';
				var v3 = Departuredod + ' 00:00';
			} else {
				var v1 = addMinutes(date, 0);
				var v2 = addMinutes(date, -SectorValue);
				var v3 = addMinutesInDate(Departuredod + ' ' + date, -SectorValue);
			}
			$('#DepartureTimeId').val(v1);
			$('#DepartureServiceTimeId').val(v2);
			$('#d_service_date_time').val(v3.replace(/\//g, '-'));
		}

	}

	function getDepartureTime(value) {
		var Departuredod = $('#Departuredod').val();
		var SectorValue = $('#DepartureSector').find(':selected').attr('data-value');
		//console.log(value);
		//alert(value);
		if (value != '') {
			var s_time = addMinutes(value, -SectorValue);
			if (s_time == '' || s_time != 'NaN' || s_time != '00:NaN') {
				var v3 = addMinutesInDate(Departuredod + ' ' + value, -SectorValue);
				$('#DepartureServiceTimeId').val(s_time);
				$('#d_service_date_time').val(v3);
			}
		}

	}

	function selectAndChangeSector_1(country) {
		// Get the select element by its ID
		var selectElement = document.getElementById("ArrivingSector");

		// Loop through the options to find the one with the value 90
		for (var i = 0; i < selectElement.options.length; i++) {

			if (selectElement.options[i].value === "Domestic") {
				// Set the selected option and trigger the change event
				if (country == 104) {
					selectElement.options[i].selected = true;
					$('#DepartureSector').prop('selectedIndex', i).change();

				} else {
					selectElement.options[i].selected = false;
					$('#DepartureSector').prop('selectedIndex', i + 1).change();
				}
			}
		}

		// Call the changeSector function after updating the selected option
		changeSector_1(selectElement.options[i].selected);
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
</script>
