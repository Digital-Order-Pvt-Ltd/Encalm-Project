<form id="loungeForm" name="loungeForm" method="post" action="<?=base_url('home/search');?>" class="custom-search-from" enctype="application/x-www-form-urlencoded" style="min-height: 395px;">
  <div class="row">
    <div class="form-group col-md-6">
      <label for="" class="d-none">Select Airport</label>
      <select id="" name="" class="form-control select2-single">
        <option value="" selected="selected">Select Airport</option>
        <option value="IGA" data-id="IGA">Indira Gandhi Airport</option>
        <option value="BOM" data-id="BOM">Chatrapati Shivaji Airport</option>
        <option value="HYD" data-id="HYD">Rajiv Gandhi International</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">Select Terminal</label>
      <span class="caret"></span>
      <select id="" name="" class="form-control" size="1">
        <option value="" selected="selected">Select Terminal</option>
        <option value="T1" data-id="T1">Terminal 1 (T1)</option>
        <option value="T2" data-id="T2">Terminal 2 (T2)</option>
        <option value="T3" data-id="T3">Terminal 3 (T3)</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">Select Sector</label>
      <select id="" name="" class="form-control select2-single">
        <option value="" selected="selected">Select Sector</option>
        <option value="0">Domestic</option>
        <option value="1">International</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="" class="d-none">Date of Travel</label>
      <i class="fas fa-calendar-alt"></i>
      <input type="text" class="form-control datepicker" placeholder="Date of Travel" />
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Flight No.*</label>
      <select id="" name="" class="form-control select2-single">
        <option value="" selected="selected">Flight No.*</option>
        <option value="6E-154-02:50-29/10/2021-01:20-29/10/2021-90-Y-0-360-180-90">6E-154</option>
        <option value="6E-818-07:45-29/10/2021-06:15-29/10/2021-90-Y-0-360-180-90">6E-818</option>
        <option value="6E-5047-06:05-29/10/2021-04:35-29/10/2021-90-Y-0-360-180-90">6E-5047</option>
        <option value="6E-6126-09:15-29/10/2021-07:45-29/10/2021-90-Y-0-360-180-90">6E-6126</option>
        <option value="6E-6201-08:30-29/10/2021-07:00-29/10/2021-90-Y-0-360-180-90">6E-6201</option>
        <option value="6E-746-20:35-29/10/2021-19:05-29/10/2021-90-Y-0-360-180-90">6E-746</option>
        <option value="6E-439-18:45-29/10/2021-17:15-29/10/2021-90-Y-0-360-180-90">6E-439</option>
        <option value="6E-5049-07:05-29/10/2021-05:35-29/10/2021-90-Y-0-360-180-90">6E-5049</option>
        <option value="6E-5026-17:00-29/10/2021-15:30-29/10/2021-90-Y-0-360-180-90">6E-5026</option>
        <option value="6E-615-19:30-29/10/2021-18:00-29/10/2021-90-Y-0-360-180-90">6E-615</option>
        <option value="6E-5052-23:05-29/10/2021-21:35-29/10/2021-90-Y-0-360-180-90">6E-5052</option>
        <option value="6E-5334-13:35-29/10/2021-12:05-29/10/2021-90-Y-0-360-180-90">6E-5334</option>
        <option value="6E-5341-18:00-29/10/2021-16:30-29/10/2021-90-Y-0-360-180-90">6E-5341</option>
        <option value="6E-248-21:30-29/10/2021-20:00-29/10/2021-90-Y-0-360-180-90">6E-248</option>
        <option value="6E-168-11:50-29/10/2021-10:20-29/10/2021-90-Y-0-360-180-90">6E-168</option>
        <option value="SG-8179-20:30-29/10/2021-19:00-29/10/2021-90-Y-0-360-180-90">SG-8179</option>
        <option value="SG-8158-19:30-29/10/2021-18:00-29/10/2021-90-Y-0-360-180-90">SG-8158</option>
        <option value="SG-8152-07:20-29/10/2021-05:50-29/10/2021-90-Y-0-360-180-90">SG-8152</option>
        <option value="SG-4003-13:20-29/10/2021-11:50-29/10/2021-90-Y-0-360-180-90">SG-4003</option>
        <option value="SG-4005-18:20-29/10/2021-16:50-29/10/2021-90-Y-0-360-180-90">SG-4005</option>
        <option value="SG-4009-10:50-29/10/2021-09:20-29/10/2021-90-Y-0-360-180-90">SG-4009</option>
        <option value="SG-4011-15:25-29/10/2021-13:55-29/10/2021-90-Y-0-360-180-90">SG-4011</option>
        <option value="SG-8702-10:15-29/10/2021-08:45-29/10/2021-90-Y-0-360-180-90">SG-8702</option>
        <option value="UK-910-17:30-29/10/2021-16:00-29/10/2021-90-Y-0-360-180-90">UK-910</option>
        <option value="UK-954-06:00-29/10/2021-04:30-29/10/2021-90-Y-0-360-180-90">UK-954</option>
        <option value="UK-970-08:45-29/10/2021-07:15-29/10/2021-90-Y-0-360-180-90">UK-970</option>
        <option value="UK-996-18:30-29/10/2021-17:00-29/10/2021-90-Y-0-360-180-90">UK-996</option>
        <option value="UK-940-19:45-29/10/2021-18:15-29/10/2021-90-Y-0-360-180-90">UK-940</option>
        <option value="UK-994-10:25-29/10/2021-08:55-29/10/2021-90-Y-0-360-180-90">UK-994</option>
        <option value="UK-944-14:40-29/10/2021-13:10-29/10/2021-90-Y-0-360-180-90">UK-944</option>
        <option value="UK-928-06:30-29/10/2021-05:00-29/10/2021-90-Y-0-360-180-90">UK-928</option>
        <option value="UK-988-20:55-29/10/2021-19:25-29/10/2021-90-Y-0-360-180-90">UK-988</option>
        <option value="UK-960-11:55-29/10/2021-10:25-29/10/2021-90-Y-0-360-180-90">UK-960</option>
        <option value="UK-950-21:55-29/10/2021-20:25-29/10/2021-90-Y-0-360-180-90">UK-950</option>
        <option value="UK-986-22:45-29/10/2021-21:15-29/10/2021-90-Y-0-360-180-90">UK-986</option>
        <option value="UK-902-15:45-29/10/2021-14:15-29/10/2021-90-Y-0-360-180-90">UK-902</option>
        <option value="AI-314-19:45-29/10/2021-18:15-29/10/2021-90-Y-0-360-180-90">AI-314</option>
        <option value="AI-348-07:55-29/10/2021-06:25-29/10/2021-90-Y-0-360-180-90">AI-348</option>
        <option value="AI-660-18:00-29/10/2021-16:30-29/10/2021-90-Y-0-360-180-90">AI-660</option>
        <option value="AI-677-13:00-29/10/2021-11:30-29/10/2021-90-Y-0-360-180-90">AI-677</option>
        <option value="AI-687-16:00-29/10/2021-14:30-29/10/2021-90-Y-0-360-180-90">AI-687</option>
        <option value="AI-806-08:00-29/10/2021-06:30-29/10/2021-90-Y-0-360-180-90">AI-806</option>
        <option value="AI-864-07:00-29/10/2021-05:30-29/10/2021-90-Y-0-360-180-90">AI-864</option>
        <option value="AI-866-09:00-29/10/2021-07:30-29/10/2021-90-Y-0-360-180-90">AI-866</option>
        <option value="AI-888-19:00-29/10/2021-17:30-29/10/2021-90-Y-0-360-180-90">AI-888</option>
        <option value="AI-809-10:00-29/10/2021-08:30-29/10/2021-90-Y-0-360-180-90">AI-809</option>
        <option value="G8-339-19:05-29/10/2021-17:35-29/10/2021-90-Y-0-360-180-90">G8-339</option>
        <option value="G8-322-21:15-29/10/2021-19:45-29/10/2021-90-Y-0-360-180-90">G8-322</option>
        <option value="G8-391-13:50-29/10/2021-12:20-29/10/2021-90-Y-0-360-180-90">G8-391</option>
        <option value="G8-345-23:00-29/10/2021-21:30-29/10/2021-90-Y-0-360-180-90">G8-345</option>
        <option value="G8-341-20:40-29/10/2021-19:10-29/10/2021-90-Y-0-360-180-90">G8-341</option>
        <option value="G8-339-19:05-29/10/2021-17:35-29/10/2021-90-Y-0-360-180-90">G8-339</option>
        <option value="G8-322-21:15-29/10/2021-19:45-29/10/2021-90-Y-0-360-180-90">G8-322</option>
        <option value="G8-391-13:50-29/10/2021-12:20-29/10/2021-90-Y-0-360-180-90">G8-391</option>
        <option value="G8-345-23:00-29/10/2021-21:30-29/10/2021-90-Y-0-360-180-90">G8-345</option>
        <option value="G8-341-20:40-29/10/2021-19:10-29/10/2021-90-Y-0-360-180-90">G8-341</option>
        <option value="G8-319-09:55-29/10/2021-08:25-29/10/2021-90-Y-0-360-180-90">G8-319</option>
        <option value="I5-315-08:35-29/10/2021-07:05-29/10/2021-90-Y-0-360-180-90">I5-315</option>
        <option value="I5-829-18:35-29/10/2021-17:05-29/10/2021-90-Y-0-360-180-90">I5-829</option>
        <option value="UK-930-07:30-29/10/2021-06:00-29/10/2021-90-Y-0-360-180-90">UK-930</option>
        <option value="UK-970-08:45-29/10/2021-07:15-29/10/2021-90-Y-0-360-180-90">UK-970</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Flight Time*</label>
      <i class="far fa-clock"></i>
      <input type="text" id="" class="form-control time" maxlength="10" autocomplete="off" placeholder="Flight Time*" onfocus="this.type='time'">
    </div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Check In Time*</label>
      <select id="" name="" class="form-control select2-single">
        <option value="" selected="selected">Check In Time*</option>
        <option value="08:00">08:00</option>
        <option value="08:15">08:15</option>
        <option value="08:30">08:30</option>
        <option value="08:45">08:45</option>
        <option value="09:00">09:00</option>
        <option value="09:15">09:15</option>
        <option value="09:30">09:30</option>
        <option value="09:45">09:45</option>
        <option value="10:00">10:00</option>
      </select>
    </div>
    <div class=clearfix></div>
    <div class="form-group col-md-4">
      <label for="" class="d-none">Adult</label>
      <select id="" name="" class="form-control select2-single">
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
      <select id="" name="" class="form-select select2-single">
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
      <select id="" name="" class="form-select select2-single">
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
      <button type="submit" id="loungeFormSubmit" name="loungeFormSubmit" class="btn btn-red btn-sm"  role="button" aria-disabled="false">Search</button>
    </div>
    <div class=clearfix></div>
    <p class="small text-center m-0"><span class="small"> For Reservations queries, call: +91 12345 67890</span></p>
  </div>
</form>
