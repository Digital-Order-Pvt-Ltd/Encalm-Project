
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
#arrivalForm .form-group.adult_field{
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
#arrivalForm .form-group.adult_field label{
 
}
#arrivalForm .form-group.adult_field .quantity{
    display: flex;
    justify-content: end;
    align-items: center;
    height: 100%;
}
#arrivalForm .form-group.adult_field .quantity input{
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
#arrivalForm .form-group.adult_field {
    width: 91%;
    margin: 11px auto;
}

}
</style>


<form id="arrivalForm" name="arrivalForm" method="post" action="<?=base_url('atithya/home/search');?>"
    class="custom-search-from formfloats" enctype="application/x-www-form-urlencoded" style="min-height: 395px;">
    <input type="hidden" name="to_airport_id" id="a_to_airport_id" value="0" />
    <input type="hidden" name="from_airport_id" id="a_from_airport_id" value="0" />
    <input type="hidden" name="terminal_id" id="a_terminal_id" value="0" />
    <input type="hidden" name="terminal_code" id="a_terminal_code" value="" />
    <input type="hidden" name="terminal_value" id="a_terminal_value" value="" />
    <input type="hidden" name="airline_id" id="a_airline_id" value="0" />
    <input type="hidden" name="airline_name" id="a_airline_name" value="" />
    <input type="hidden" name="arrival_term" id="a_arrival_term" value="" />
    <input type="hidden" name="departure_term" id="a_departure_term" value="" />


    <input type="hidden" name="airport_location_code_id" id="a_airport_location_code_id" value="0" />
    <input type="hidden" name="airport_location_code" id="a_airport_location_code" value="" />

    <input type="hidden" name="flight_id" id="A_flight_id" value="0" />
    <input type="hidden" name="arrival_time" id="A_arrival_time" value="" />
    <input type="hidden" name="category" value="Arrival" />


    <input type="hidden" id="a_service_date_time" name="service_date_time" value="" />
    <div class="row">
        <div class="form-group col-md-6">
            <label for="" class="d-none">Arriving At</label>
            <span class="caret"></span>


            <select id="ArrivingAirportAt" name="ToAirport" class="form-control txt-legth" size="1"
                Onchange="getAirportData(this.value)">
                <option value="" data-id="0" data-country-id="" data-location-id="" data-location-name="">Arriving Airport</option>

            </select>


            <!--select id="ArrivingAirportAt" name="ToAirport" class="form-control" size="1" Onchange="setHiddenData('Arrival','ArrivingAirportAt','a_to_airport_id','','')">
        <option value=""  data-id="0">Arriving At</option>
 
      </select-->
        </div>
        <div class="form-group col-md-6 AStartFromAirport">
            <label for="" class="d-none">Starting From</label>
            <!--span class="caret"></span-->

            <select id="AStartFromAirport" name="FromAirport" class="form-control select2-single" size="1"
                Onchange="getDeparting(this.value)">
                <option value="" data-id="0" data-country="0">Departure Airport</option>
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

            <select id="ArrivingSector" name="SectorName" class="form-control BindSector"
                readonly>
                <option value="" data-id="0" data-code="" data-value="">Select Sector</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <i class="fas fa-calendar-alt"></i>
            <input type="text" id="Arrivaldof" name="doa" class="form-control datepicker" placeholder=""
                onchange="getArrivalFlightList(this.value)" value="" />
            <label for="" class="floating-label">Date of Arrival</label>
        </div>
        <div class="form-group col-md-4">
            <label for="" class="d-none">Flight No.*</label>
            <span class="caret"></span>
            <select id="ArrivalFlight" name="FlightName" class="form-control"
                onchange="getFlightArrivalTime_1(this.value)">
                <option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure=""
                    data-arrival="">Flight No.*</option>

            </select>
        </div>
        <div class="form-group col-md-4">
            <i class="far fa-clock"></i>
            <input type="text" id="ArrivalTimeId" name="ArrivalTime" class="form-control time mytimepicker"
                maxlength="10" autocomplete="off" placeholder="" value="" onchange="getArrivalTime(this.value)">
            <label for="" class="floating-label">STA*</label>
        </div>
        <div class="form-group col-md-4">
            <i class="far fa-clock"></i>
            <input type="text" id="ArrivalServiceTimeId" name="ServiceTime" class="form-control time" maxlength="10"
                autocomplete="off" placeholder="" readonly style="background-color: #dedede" />
            <label for="" class="floating-label">Service Time*</label>
        </div>
        <div class=clearfix></div>
        <div class="form-group adult_field col-md-4">
        <label for="" class="floating-label">Adult</label>
            <div class="quantity">
                <a href="#" class="quantity__minus" onclick="decrement_adult()"><span>-</span></a>
                <input name="Adult" type="text" class="quantity__input" id="adult_quantity" value="1">
                <a href="#" class="quantity__plus" onclick="increment_adult()"><span>+</span></a>
           </div>
           
            <p class="small-text">12 years &amp; above</p>
        </div>
     
        <div class="form-group adult_field col-md-4">
            <label for="" class="floating-label">Child </label>
       
            <div class="quantity">
                <a href="#" class=" quantity__minus_child" onclick="decrement_child()"><span>-</span></a>
                <input name="Child" type="text" class=" quantity__input_child" id="child_quantity" value="0">
                <a href="#" class=" quantity__plus_child" onclick="increment_child()"><span>+</span></a>
           </div>
            <p class="small-text">2-11 years</p>
        </div>
        <div class="form-group adult_field col-md-4">
            <label for="" class="floating-label">Infant </label>
            <div class="quantity">
                <a href="#" class="quantity__minus_infant" onclick="decrement_infant()"><span>-</span></a>
                <input name="Infant" type="text" class="quantity__input_infant" id="infant_quantity" value="0">
                <a href="#" class="quantity__plus_infant" onclick="increment_infant()"><span>+</span></a>
           </div>
            <p class="small-text">Below 2 years</p>
        </div>
        <div class="form-group col-lg-12 text-center mt-4">
            <button type="submit" id="arrivalFormSubmit" name="arrivalFormSubmit" class="btn btn-red">Book Now</button>
        </div>
        <div class=clearfix></div>
        <p class="small text-center m-0"><span class="small"> For Reservations queries, Call: <a
                    href="tel:+919289366950">+91 92893 66950</a><br>Email us: <a
                    href="mailto:guest.services@encalm.com">guest.services@encalm.com</a></span></p>
        <p class="small text-center mt-2"><img src="<?=base_url('atithya_assets/')?>assets/img/cards.png"></p>
    </div>
</form>
<script>
var a = 1;
var c = 0;
var i = 0;

document.getElementById('adult_quantity').value = a;
document.getElementById('child_quantity').value = c;
document.getElementById('infant_quantity').value = i;

function increment_adult() {
document.getElementById('adult_quantity').value = ++a;
}  
function decrement_adult() {
if (a > 1) { 
    document.getElementById('adult_quantity').value = --a;
}
}
function increment_child() {
document.getElementById('child_quantity').value = ++c;
}  
function decrement_child() {
if (c > 0) { 
    document.getElementById('child_quantity').value = --c;
}
}
function increment_infant() {
document.getElementById('infant_quantity').value = ++i;
}  
function decrement_infant() {
if (i > 0) { 
    document.getElementById('infant_quantity').value = --i;
}
}
function getDeparting(val) {
    var ArrivingAirportAt = $('#ArrivingAirportAt').find(':selected').attr('data-country-id');
		var AStartFromAirport = $('#AStartFromAirport').find(':selected').attr('data-country');
		console.log("hello", ArrivingAirportAt);
		console.log("hello2", AStartFromAirport);
		if (ArrivingAirportAt == "India" && AStartFromAirport == "India") {
			let select = document.getElementById('ArrivingSector');
			select.childNodes.forEach((option) => {
				if (option.value === "Domestic") {
					option.selected = 'selected'
					var value = $(option).data('value');
					var id = $(option).data('id');
					var code = $(option).data('code');
					$('#a_terminal_id').val(id);
					$('#a_terminal_value').val(value);
					$('#a_terminal_code').val(code);
					console.log("foreach option", value, id, code)
				}
			})
		} else {
			let select = document.getElementById('ArrivingSector');
			select.childNodes.forEach((option) => {
				if (option.value === "International") {
					option.selected = 'selected'
					var value = $(option).data('value');
					var id = $(option).data('id');
					var code = $(option).data('code');
					$('#a_terminal_id').val(id);
					$('#a_terminal_value').val(value);
					$('#a_terminal_code').val(code);
					console.log("foreach option", value, id, code)
				}
			})
		}
    var id = $('#AStartFromAirport').find(':selected').attr("data-id");
    // var country_id = $('#AStartFromAirport').find(':selected').attr("data-country");
    // // alert(country_id);
    // if (country_id) {
    //     selectAndChangeSector(country_id);
    //     alert(country_id);
    // }
    $('#a_from_airport_id').val(id);
    // $('#a_terminal_id').val(0);
    // $('#a_terminal_code').val('');
    // $('#a_terminal_value').val('');
    $('#ArrivalFlight').html('');
    $('#ArrivalFlight').html(
        '<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>'
        );
    // $("#ArrivingSector").prop("selectedIndex", 0);
    $('#A_flight_id').val(0);
    $('#A_arrival_time').val('');
    $('#a_airline_id').val(0);
    $('#a_airline_name').val('');
    $('#a_arrival_term').val('');
    $('#a_departure_term').val('');
    $('#ArrivalServiceTimeId').val('');
    $('#a_service_date_time').val('');
    $('#ArrivalTimeId').val('');
    $('#Arrivaldof').val('');
}

function changeSector(val) {
    // alert("val "+val);
    $('#a_terminal_id').val(0);
    $('#a_terminal_code').val('');
    $('#a_terminal_value').val('');

    $('#ArrivalFlight').html('');
    $('#ArrivalFlight').html(
        '<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>'
        );

    $('#A_flight_id').val(0);
    $('#A_arrival_time').val('');
    $('#a_airline_id').val(0);
    $('#a_airline_name').val('');
    $('#a_arrival_term').val('');
    $('#a_departure_term').val('');
    $('#ArrivalServiceTimeId').val('');
    $('#a_service_date_time').val('');
    $('#ArrivalTimeId').val('');
    $('#Arrivaldof').val('');


    if (val.length > 2) {
        var value = $('#ArrivingSector').find(':selected').attr("data-value");
        var id = $('#ArrivingSector').find(':selected').attr("data-id");
        var code = $('#ArrivingSector').find(':selected').attr("data-code");

        $('#a_terminal_id').val(id);
        $('#a_terminal_value').val(value);
        $('#a_terminal_code').val(code);
    }

    if ($('#Arrivaldof').val() != "") {


        getArrivalFlightList();
    }
}

$("form#arrivalForm").submit(function(event) {
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
    var ArrivingAirportAt = $("#ArrivingAirportAt option:selected").val();
    var AStartFromAirport = $("#AStartFromAirport option:selected").val();
    var ArrivingSector = $("#ArrivingSector option:selected").val();
    var Arrivaldof = $("#Arrivaldof").val();
    var ArrivalFlight = $("#ArrivalFlight option:selected").val();
    var ArrivalTimeId = $("#ArrivalTimeId").val();
    var ArrivalServiceTimeId = $("#ArrivalServiceTimeId").val();
    var Adult = $("#Adult option:selected").val();

    if (ArrivingAirportAt == "") {
        $('#ArrivingAirportAt').addClass("focus");
        $('#ArrivingAirportAt').focus();
        error = true;
    }
    if (AStartFromAirport == "") {
        $('.AStartFromAirport .select2-selection').addClass("focus");
        $('#AStartFromAirport').addClass("focus");
        $('#AStartFromAirport').focus();
        error = true;
    }
    if (ArrivingSector == "") {
        $('#ArrivingSector').addClass("focus");
        $('#ArrivingSector').focus();
        error = true;
    }
    if (Arrivaldof == "") {
        $('#Arrivaldof').addClass("focus");
        //$('#Arrivaldof').focus();
        error = true;
    }
    if (ArrivalFlight == "") {
        $('#ArrivalFlight').addClass("focus");
        $('#ArrivalFlight').focus();
        error = true;
    }
    if (ArrivalTimeId == "") {
        $('#ArrivalTimeId').addClass("focus");
        $('#ArrivalTimeId').focus();
        error = true;
    }
    if (ArrivalServiceTimeId == "") {
        $('#ArrivalServiceTimeId').addClass("focus");
        $('#ArrivalServiceTimeId').focus();
        error = true;
    }
    if (Adult == "" || Adult == 0) {
        $('#Adult').addClass("focus");
        $('#Adult').focus();
        error = true;
    }
    if (error == false) {
        PleaseWaitShow();
        return true;
    } else {
        return false;
    }

});

function getAirportData(val) {


    $('#ArrivalFlight').html('');
    $('#ArrivalFlight').html(
        '<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>'
        );
    $("#AStartFromAirport").html('');
    $("#AStartFromAirport").html('<option value="" data-id="0">Departure Airport</option>');

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
    var location_code_id = $('#ArrivingAirportAt').find(':selected').attr('data-location-id');
    var location_code = $('#ArrivingAirportAt').find(':selected').attr('data-location-code');
    //var country_id = $('#ArrivingAirportAt').find(':selected').attr('data-country');
    if (airport_id > 0) {
        $('#a_to_airport_id').val(airport_id);
        $('#a_airport_location_code_id').val(location_code_id);
        $('#a_airport_location_code').val(location_code);
        $.ajax({
            type: 'POST',
            url: "<?=base_url('atithya/ajaxcall/getApiData')?>",
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

                    // var html='<ul class="hidedata">';
                    var html = '<option value="" data-id="0">Select Departing From</option>';

                    for (let i = 0; i < ItemArray.length; i++) {
                        //console.log(ItemArray[i]) + "<br>";


                        //console.log("Count ", ItemArray[i].country_id[0]);
                        html += '<option value="' + ItemArray[i].name + '" data-id="' + ItemArray[i].id +
                            '" data-country="' + ItemArray[i].country_id[1] + '">' + ItemArray[i]
                            .display_name + '</option>';


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
        $('#a_to_airport_id').val(0);
        $('#a_airport_location_code_id').val(0);
        $('#a_airport_location_code').val('');
    }
}

function selectAndChangeSector(country) {
    // Get the select element by its ID
    var selectElement = document.getElementById("ArrivingSector");

    if (selectElement) {
        // Find the option with the value "Domestic"
        var domesticOption = selectElement.querySelector('option[value="Domestic"]');

        if (domesticOption) {
            // Determine the index to select based on the country code
            var selectedIndex = (country === 104) ? domesticOption.index : domesticOption.index + 1;

            // Set the selected option and trigger the change event
            selectElement.options[selectedIndex].selected = true;
            $(selectElement).prop('selectedIndex', selectedIndex).change();

            // Optionally, trigger another function based on the selected option
            changeSector(selectElement.options[selectedIndex].selected);
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
</script>

