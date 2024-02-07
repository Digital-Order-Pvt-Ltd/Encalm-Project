<form id="transitForm" name="transitForm" method="post" action="travel-search.php" class="custom-search-from" enctype="application/x-www-form-urlencoded" style="min-height: 395px;">
  <div class="row">
    <div class="form-group col-md-6">
      <label for="" class="d-none">Transit Via</label>
      <span class="caret"></span>
      <select id="" name="" class="form-control" size="1">
        <option value="" selected="selected">Transit Via</option>
        <option value="IGA" data-id="IGA">Indira Gandhi Airport</option>
        <option value="BOM" data-id="BOM">Chatrapati Shivaji Airport</option>
        <option value="HYD" data-id="HYD">Rajiv Gandhi International</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">Select Sector</label>
      <span class="caret"></span>
      <select id="" name="" class="form-control">
        <option value="" selected="selected">Select Sector</option>
        <option value="0">Domestic</option>
        <option value="1">International</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">Airport Terminal</label>
      <span class="caret"></span>
      <select id="" name="" class="form-control" size="1">
        <option value="" selected="selected">From Airport</option>
        <option value="IGA" data-id="IGA">Indira Gandhi Airport</option>
        <option value="BOM" data-id="BOM">Chatrapati Shivaji Airport</option>
        <option value="HYD" data-id="HYD">Rajiv Gandhi International</option>
        <option value="AMS" data-id="AMS">Amsterdam Schiphol International Airport</option>
        <option value="TLV" data-id="TLV">Ben Gurion International Airport</option>
        <option value="BUD" data-id="BUD">Budapest Ferihegy International Airport</option>
        <option value="DFW" data-id="DFW">Dallas-Fort Worth International Airport</option>
        <option value="FRA" data-id="FRA">Frankfurt Main International Airport</option>
        <option value="GVA" data-id="GVA">Geneva Cointrin International Airport</option>
        <option value="DEL" data-id="DEL">Indira Gandhi International Airport</option>
        <option value="MEL" data-id="MEL">Melbourne Tullamarine International Airport</option>
        <option value="SIN" data-id="SIN">Singapore Changi International Airport</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">To Airport Terminal</label>
      <span class="caret"></span>
      <select id="" name="" class="form-control" size="1">
        <option value="" selected="selected">To Airport</option>
        <option value="IGA" data-id="IGA">Indira Gandhi Airport</option>
        <option value="BOM" data-id="BOM">Chatrapati Shivaji Airport</option>
        <option value="HYD" data-id="HYD">Rajiv Gandhi International</option>
        <option value="AMS" data-id="AMS">Amsterdam Schiphol International Airport</option>
        <option value="TLV" data-id="TLV">Ben Gurion International Airport</option>
        <option value="BUD" data-id="BUD">Budapest Ferihegy International Airport</option>
        <option value="DFW" data-id="DFW">Dallas-Fort Worth International Airport</option>
        <option value="FRA" data-id="FRA">Frankfurt Main International Airport</option>
        <option value="GVA" data-id="GVA">Geneva Cointrin International Airport</option>
        <option value="DEL" data-id="DEL">Indira Gandhi International Airport</option>
        <option value="MEL" data-id="MEL">Melbourne Tullamarine International Airport</option>
        <option value="SIN" data-id="SIN">Singapore Changi International Airport</option>
      </select>
    </div>
    
    <div class="form-group col-md-3">
      <label for="" class="d-none">Date of Arrival</label>
      <i class="fas fa-calendar-alt"></i>
      <input type="text" class="form-control datepicker" placeholder="Date of Arrival" />
    </div>
    <div class="form-group col-md-3">
      <label for="" class="d-none">Flight No.*</label>
      <span class="caret"></span>
      <select id="" name="" class="form-control">
        <option value="" selected="selected">Flight No.*</option>
        <option value="6E-154-02:50-29/10/2021-01:20-29/10/2021-90-Y-0-360-180-90">6E-154</option>
        <option value="6E-818-07:45-29/10/2021-06:15-29/10/2021-90-Y-0-360-180-90">6E-818</option>
        <option value="6E-5047-06:05-29/10/2021-04:35-29/10/2021-90-Y-0-360-180-90">6E-5047</option>
        <option value="6E-6126-09:15-29/10/2021-07:45-29/10/2021-90-Y-0-360-180-90">6E-6126</option>
        <option value="6E-6201-08:30-29/10/2021-07:00-29/10/2021-90-Y-0-360-180-90">6E-6201</option>
        <option value="6E-746-20:35-29/10/2021-19:05-29/10/2021-90-Y-0-360-180-90">6E-746</option>
        <option value="6E-439-18:45-29/10/2021-17:15-29/10/2021-90-Y-0-360-180-90">6E-439</option>
        <option value="6E-5049-07:05-29/10/2021-05:35-29/10/2021-90-Y-0-360-180-90">6E-5049</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="" class="d-none">Flight Time*</label>
      <i class="far fa-clock"></i>
      <input type="text" id="" class="form-control time" maxlength="10" autocomplete="off" placeholder="Flight Time*" onfocus="this.type='time'">
    </div>
    <div class="form-group col-md-3">
      <label for="" class="d-none">Service Time*</label>
      <i class="far fa-clock"></i>
      <input type="text" id="" class="form-control time" maxlength="10" autocomplete="off" placeholder="Service Time*" onfocus="this.type='time'">
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Date of Departure</label>
      <i class="fas fa-calendar-alt"></i>
      <input type="text" class="form-control datepicker" placeholder="Date of Departure" />
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Flight No.*</label>
      <span class="caret"></span>
      <select id="" name="" class="form-control">
        <option value="" selected="selected">Flight No.*</option>
        <option value="6E-154-02:50-29/10/2021-01:20-29/10/2021-90-Y-0-360-180-90">6E-154</option>
        <option value="6E-818-07:45-29/10/2021-06:15-29/10/2021-90-Y-0-360-180-90">6E-818</option>
        <option value="6E-5047-06:05-29/10/2021-04:35-29/10/2021-90-Y-0-360-180-90">6E-5047</option>
        <option value="6E-6126-09:15-29/10/2021-07:45-29/10/2021-90-Y-0-360-180-90">6E-6126</option>
        <option value="6E-6201-08:30-29/10/2021-07:00-29/10/2021-90-Y-0-360-180-90">6E-6201</option>
        <option value="6E-746-20:35-29/10/2021-19:05-29/10/2021-90-Y-0-360-180-90">6E-746</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Departure Time*</label>
      <i class="far fa-clock"></i>
      <input type="text" id="" class="form-control time" maxlength="10" autocomplete="off" placeholder="Departure Time*" onfocus="this.type='time'">
    </div>
    <div class=clearfix></div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Adult</label>
      <span class="caret"></span>
      <select id="" name="" class="form-control">
        <option value="">Adults*</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      <p class="small-text">12 years &amp; above</p>
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Child (2-3 Years)</label>
      <span class="caret"></span>
      <select id="" name="" class="form-select">
        <option value="">Child</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      <p class="small-text">2-11 years</p>
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Infant (Below 2 Years)</label>
      <span class="caret"></span>
      <select id="" name="" class="form-select">
        <option value="">Infant</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      <p class="small-text">Below 2 years</p>
    </div>
    <div class="form-group col-lg-12 text-center">
      <button type="submit" id="transitFormSubmit" name="transitFormSubmit" class="btn btn-red btn-sm"  role="button" aria-disabled="false">Search</button>
    </div>
    <div class=clearfix></div>
    <p class="small text-center m-0"><span class="small"> For Reservations queries, call: +91 12345 67890</span></p>
  </div>
</form>
