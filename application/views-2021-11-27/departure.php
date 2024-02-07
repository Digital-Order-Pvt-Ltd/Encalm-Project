<form id="departureForm" name="departureForm" method="post"  action="<?=base_url('home/search');?>" class="custom-search-from" enctype="application/x-www-form-urlencoded" style="min-height: 395px;">


<input type="hidden" name="D_flight_id" id="D_flight_id" value="0"/>
		<input type="hidden" name="D_arrival_time" id="D_arrival_time" value=""/>
		<input type="hidden" name="category" value="Departure"/>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="" class="d-none">From Airport</label>
      <span class="caret"></span>
      <select id="DepartureFromAirport" name="DepartureFromAirport" class="form-control" size="1">
        <option value=""  data-id="0" selected="selected">From Airport</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">To Airport</label>
      <span class="caret"></span>
      <select id="DepartureToAirtport" name="DepartureToAirtport" class="form-control" size="1">
        <option value=""  data-id="0" selected="selected">To Airport</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">Select Sector</label>
      <span class="caret"></span>
      <select id="DepartureSector" name="DepartureSector" class="form-control BindSector">
       <option value="" selected="selected">Select Sector</option>
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
      <select id="DepartureFlight" name="DepartureFlight" class="form-control" onchange="getFlightDepartureTime(this.value)">
        <option value="" selected="selected">Flight No.*</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Departure Time*</label>
      <i class="far fa-clock"></i>
      <input type="text" id="DepartureId"  name="DepartureTime" class="form-control time" maxlength="10" autocomplete="off" placeholder="Arrival Time*" onfocus="this.type='time'"  value="" onchange="getDepartureTime(this.value)">
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Service Time*</label>
      <i class="far fa-clock"></i>
        <input type="text" id="DepartureServiceTimeId" name="DepartureServiceTime" class="form-control time" maxlength="10" autocomplete="off" placeholder="Service Time*" onfocus="this.type='time'" readonly />
    </div>
    <div class=clearfix></div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Adult</label>
      <span class="caret"></span>
      <select id="DAdult" name="DAdult" class="form-control">
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
