<section id="hero" class="d-flex align-items-top">
  <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="row d-flex align-items-top">
      <div class="col col1 text-center">
	  <?php if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Transit')
		{ 
		//echo '<i class="fas fa-sync-alt fa-2x text-white mb-2"></i><br>
		echo '<span class="iconsearch"><img src="'.base_url('atithya/assets/img/transit-02.png').'"></span><br>
        <span class="text-uppercase">SERVICE AT AIRPORT</span><br>';
        echo !empty($this->session->userdata("s_arrival_term"))?"Arrival - ".$this->session->userdata("s_arrival_term").'<br>':'<br>';
		echo !empty($this->session->userdata("s_d_arrival_term"))?"Departure - ".$this->session->userdata("s_d_arrival_term"):'';
		
		 echo "<br>";
		 echo !empty($this->session->userdata("s_arrival_sector"))?$this->session->userdata("s_arrival_sector"):'NA'?> - <?=!empty($this->session->userdata("s_category"))?$this->session->userdata("s_category"):'NA';
		}
		 
		if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Arrival')
		{

		echo '<span class="iconsearch"><i class="fas fa-plane-arrival fa-2x text-white mb-2"></i></span><br>
        <span class="text-uppercase">SERVICE AT AIRPORT</span><br>';		
		 echo !empty($this->session->userdata("s_airport_location_code"))?$this->session->userdata("s_airport_location_code"):'NA'?> - <?=!empty($this->session->userdata("s_arrival_term"))?$this->session->userdata("s_arrival_term"):'NA';
 		 echo "<br>";
		 echo !empty($this->session->userdata("s_arrival_sector"))?$this->session->userdata("s_arrival_sector"):'NA'?> - <?=!empty($this->session->userdata("s_category"))?$this->session->userdata("s_category"):'NA';
		}
		
		if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Departure')
		{ 
		echo '<span class="iconsearch"><i class="fas fa-plane-departure fa-2x text-white mb-2"></i></span><br>
        <span class="text-uppercase">SERVICE AT AIRPORT</span><br>';	
		 echo !empty($this->session->userdata("s_airport_location_code"))?$this->session->userdata("s_airport_location_code"):'NA'?> - <?=!empty($this->session->userdata("s_departure_term"))?$this->session->userdata("s_departure_term"):'NA';
 		 echo "<br>";
		 echo !empty($this->session->userdata("s_arrival_sector"))?$this->session->userdata("s_arrival_sector"):'NA'?> - <?=!empty($this->session->userdata("s_category"))?$this->session->userdata("s_category"):'NA';
		}
		
		
		if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Lounge')
		{ 
		echo '<span class="iconsearch"><i class="fas fa-plane-arrival fa-2x text-white mb-2"></i></span><br>
        <span class="text-uppercase">SERVICE AT AIRPORT</span><br>';		
		 echo !empty($this->session->userdata("s_airport_location_code"))?$this->session->userdata("s_airport_location_code"):'NA'?> - <?=!empty($this->session->userdata("s_arrival_term"))?$this->session->userdata("s_arrival_term"):'NA';
 		 echo "<br>";
		 echo !empty($this->session->userdata("s_arrival_sector"))?$this->session->userdata("s_arrival_sector"):'NA'?> - <?=!empty($this->session->userdata("s_category"))?$this->session->userdata("s_category"):'NA';
		}
		?>
		 
		   
	</div>
      <div class="col col2 text-center"><span class="iconsearch"><img class="mr-b-9" src="<?=base_url('atithya/assets/')?>img/flight-number.png" width="29px"/></span><br>
        <span class="text-uppercase">AIRLINE & FLIGHT NO</span><br>
		<?php if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Transit'){ ?>
        Arr - <?=!empty($this->session->userdata("s_airline_name"))?$this->session->userdata("s_airline_name"):''?> / 
        <?=!empty($this->session->userdata("s_arrival_flight"))?$this->session->userdata("s_arrival_flight"):''?><br> 
		Dep - <?=!empty($this->session->userdata("s_d_airline_name"))?$this->session->userdata("s_d_airline_name"):''?> / 
        <?=!empty($this->session->userdata("s_d_FlightName"))?$this->session->userdata("s_d_FlightName"):''?> 
		<?php } else {?> 
		 <?=!empty($this->session->userdata("s_airline_name"))?$this->session->userdata("s_airline_name"):$this->session->userdata("s_d_airline_name")?><br>
        <?=!empty($this->session->userdata("s_arrival_flight"))?$this->session->userdata("s_arrival_flight"):''?> 
		<?php }?> 
		</div>
      <div class="col col3 text-center"><span class="iconsearch"><img class="mr-b-9" src="<?=base_url('atithya/assets/')?>img/flight-date.png" width="29px"/></span><br>
        <span class="text-uppercase">Flight Date &amp; Time</span><br>
		<?php if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Transit'){ ?>
       <?=!empty($this->session->userdata("s_doa"))?$this->session->userdata("s_doa"):''?>&nbsp; <br><?=!empty($this->session->userdata("s_arrivalTime"))?$this->session->userdata("s_arrivalTime"):''?>  hrs (IST)<br>
	   
	    <?=!empty($this->session->userdata("s_dod"))?$this->session->userdata("s_dod"):''?>&nbsp; <br> <?=!empty($this->session->userdata("s_DepartureTime"))?$this->session->userdata("s_DepartureTime"):''?>  hrs (IST)
		<?php } else {?> 
		  <?=!empty($this->session->userdata("s_doa"))?$this->session->userdata("s_doa"):''?>&nbsp; <br><?=!empty($this->session->userdata("s_arrival_time"))?$this->session->userdata("s_arrival_time"):''?> hrs (IST)
		<?php }?> 
		
		</div>
		
		 <div class="col col5 text-center pos-relative"><span class="iconsearch"><i class="fas fa-couch fa-2x text-white mb-2"></i></span><br>
        <span class="text-uppercase">Service Date &amp; Time</span><br>
		<?php if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Transit'){ ?>
        <?=!empty($this->session->userdata("s_doa"))?$this->session->userdata("s_doa"):''?>&nbsp;<br><?=!empty($this->session->userdata("s_arrival_service_time"))?$this->session->userdata("s_arrival_service_time"):''?>  hrs (IST)<br>
		<?php !empty($this->session->userdata("s_dod"))?$this->session->userdata("s_dod"):''?> <br>
		
		<?php }elseif(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Departure'){ ?>
        <?=!empty($this->session->userdata("s_service_date_time"))?date('D, d-M-Y',strtotime($this->session->userdata("s_service_date_time"))):''?>  <br> <?=!empty($this->session->userdata("s_service_date_time"))?date('H:i',strtotime($this->session->userdata("s_service_date_time"))):''?>   hrs (IST)
		<?php } else {?> 
		  <?=!empty($this->session->userdata("s_doa"))?$this->session->userdata("s_doa"):''?>&nbsp;<br><?=!empty($this->session->userdata("s_arrival_service_time"))?$this->session->userdata("s_arrival_service_time"):''?>  hrs (IST)<br>
		<?php }?> 
		
       </div>
      <div class="col col4 text-center"><span class="iconsearch"><i class="fas fa-users fa-2x text-white mb-2"></i></span><br>
        <span class="text-uppercase">Number of guests</span><br>
         Adult - <?=!empty($this->session->userdata("s_adult"))?$this->session->userdata("s_adult"):'1'?> <br>Child - <?=!empty($this->session->userdata("s_child"))?$this->session->userdata("s_child"):'0'?>&nbsp;/&nbsp;Infant&nbsp; - <?=!empty($this->session->userdata("s_infant"))?$this->session->userdata("s_infant"):'0'?> 
		
		 <a href="<?=base_url('atithya/home/index');?>" class="text-white small resetbooking"><i class="fas fa-pencil-alt"></i>&nbsp;Begin Again</a>
	   </div>
     
    </div>
  </div>
</section>
