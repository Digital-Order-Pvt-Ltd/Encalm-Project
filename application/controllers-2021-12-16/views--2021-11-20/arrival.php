<form id="arrivalForm" name="arrivalForm" method="post" action="<?=base_url('home/search');?>" class="custom-search-from" enctype="application/x-www-form-urlencoded" style="min-height: 395px;">
  <div class="row">
      <div class="form-group col-md-6">
      <label for="" class="d-none">Arriving At</label>
      <span class="caret"></span>
	  

      <select id="ArrivingAirportAt" name="ArrivingAirportAt" class="form-control" size="1">
        <option value="" selected="selected">Arriving At</option>
 
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">Starting From</label>
	  <span class="caret"></span>
	  <select id="AStartFromAirport" name="AStartFromAirport" class="form-control" size="1">
        <option value="" selected="selected">Start From</option>
		</select>
		<input type="hidden" name="A_flight_id" id="A_flight_id" value="0"/>
		<input type="hidden" name="A_arrival_time" id="A_arrival_time" value=""/>
		<input type="hidden" name="category" value="Arrival"/>
      <!--input type="text" class="form-control" placeholder="Starting From" onkeyup="ArrivingStartFromAirport(this.value)"  autocomplete="off" id="AStartFromAirport" value=""/>
	  <div id="ArrivalFromAirport" class="setcustomercss"></div-->
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">Select Sector</label>
      <span class="caret"></span>
      <select id="ArrivingSector" name="ArrivingSector" class="form-control">
        <option value="" selected="selected">Select Sector</option>
        
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">Date of Arrival</label>
      <i class="fas fa-calendar-alt"></i>
      <input type="text" id="Arrivaldof" name="Arrivaldof" class="form-control datepicker" placeholder="Date of Arrival" onchange="getArrivalFlightList(this.value)" value="" />
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Flight No.*</label>
      <span class="caret"></span>
      <select id="ArrivalFlight" name="ArrivalFlight" class="form-control" onchange="getFlightArrivalTime(this.value)">
        <option value="" selected="selected">Flight No.*</option>
        
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Arrival Time*</label>
      <i class="far fa-clock"></i>
      <input type="text" id="ArrivalTimeId"  name="ArrivalTime" class="form-control time" maxlength="10" autocomplete="off" placeholder="Arrival Time*" onfocus="this.type='time'" value="">
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Service Time*</label>
      <i class="far fa-clock"></i>
      <input type="text" id="ArrivalServiceTimeId" name="ArrivalServiceTime" class="form-control time" maxlength="10" autocomplete="off" placeholder="Service Time*" onfocus="this.type='time'">
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
      <button type="submit" id="arrivalFormSubmit" name="arrivalFormSubmit" class="btn btn-red btn-sm">Search</button>
    </div>
    <div class=clearfix></div>
    <p class="small text-center m-0"><span class="small"> For Reservations queries, call: +91 12345 67890</span></p>
  </div>
</form>
