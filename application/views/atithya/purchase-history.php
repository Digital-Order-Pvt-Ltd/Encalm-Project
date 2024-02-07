<?php 
    // Get the current URI
      $currentUri = $this->uri->uri_string();

      // Check if the URI contains "spa"
      if (strpos($currentUri, 'spa') !== false) {
          // The URI contains "spa"
          $spa =true;
         
      } else {
          // The URI does not contain "spa"
		  $spa =false;
      }
  ?>

<section id="hero" class="d-flex align-items-top">
  <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
	<h5 class="purchasehistory d-md-none m-0 text-white"><i class="fa fa-bars me-3" aria-hidden="true"></i> Purchase History</h5>
    <div class="row d-flex align-items-top d-md-flex d-none pt-md-0 pt-5">
      <div class="col col1 text-center">
	  <?php if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Transit')
		{ 
		//echo '<i class="fas fa-sync-alt fa-2x text-white mb-2"></i><br>
		echo '<span class="iconsearch"><img src="'.base_url('atithya_assets/assets/img/transit-02.png').'"></span><br>
        <span class="text-uppercase">SERVICE AT AIRPORT</span><br>';
        echo !empty($this->session->userdata("s_arrival_term"))?"Arrival - ".$this->session->userdata("s_arrival_term").'<br>':'<br>';
		echo !empty($this->session->userdata("s_d_departure_term"))?"Departure - ".$this->session->userdata("s_d_departure_term"):'';
		
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
		 echo !empty($this->session->userdata("s_airport_location_code"))?$this->session->userdata("s_airport_location_code"):'NA'?> - <?=!empty($this->session->userdata("s_arrival_sector"))?$this->session->userdata("s_arrival_sector"):'NA';
		}
		
		if(!empty($this->session->userdata("s_category")) and strtolower($this->session->userdata("s_category"))=='spa')
		{ 
		echo '<span class="iconsearch"><i class="fas fa-plane-arrival fa-2x text-white mb-2"></i></span><br>
        <span class="text-uppercase">SERVICE AT AIRPORT</span><br>';		
		 echo !empty($this->session->userdata("s_airport_location_code"))?$this->session->userdata("s_airport_location_code"):'NA';
 		 echo "-";
		 echo !empty($this->session->userdata("s_arrival_sector"))?$this->session->userdata("s_arrival_sector"):'NA'?> - <?=!empty($this->session->userdata("s_category"))?$this->session->userdata("s_category"):'NA';
		 echo "<br />";
		 echo !empty($this->session->userdata("spa_service_at"))?$this->session->userdata("spa_service_at"):'NA';
		 
		}
		?>
		 
		   
	</div>
      <div class="col col2 text-center"><span class="iconsearch"><img class="mr-b-9" src="<?=base_url('atithya_assets/assets/')?>img/flight-number.png" width="29px"/></span><br>
        <?php if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Transit'){ ?>
        <span class="text-uppercase">AIRLINE & FLIGHT NO</span><br>
        Arr - <?=!empty($this->session->userdata("s_airline_name"))?$this->session->userdata("s_airline_name"):''?> / 
        <?=!empty($this->session->userdata("s_arrival_flight"))?$this->session->userdata("s_arrival_flight"):''?><br> 
		Dep - <?=!empty($this->session->userdata("s_d_airline_name"))?$this->session->userdata("s_d_airline_name"):''?> / 
        <?=!empty($this->session->userdata("s_d_FlightName"))?$this->session->userdata("s_d_FlightName"):''?>
        <?php }
		elseif(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Lounge'){ ?>
        <span class="text-uppercase">BOOKING FOR</span><br>
        <?=!empty($this->session->userdata("s_category"))?$this->session->userdata("s_category"):'NA';?><br/>        
        <?=!empty($this->session->userdata("order_departure_term"))?$this->session->userdata("order_departure_term"):'NA'?>
		<?php } else {?> 
        <span class="text-uppercase">AIRLINE & FLIGHT NO</span><br>
		<?=!empty($this->session->userdata("s_airline_name"))?$this->session->userdata("s_airline_name"):$this->session->userdata("s_d_airline_name")?><br>
        <?=!empty($this->session->userdata("s_arrival_flight"))?$this->session->userdata("s_arrival_flight"):''?> 
		<?php }?> 
		</div>
      <div class="col col3 text-center <?php echo (!empty($this->session->userdata("s_category")) and strtolower($this->session->userdata("s_category"))=='spa')?'d-none':''; ?>"><span class="iconsearch"><img class="mr-b-9" src="<?=base_url('atithya_assets/assets/')?>img/flight-date.png" width="29px"/></span><br>
																	  
		<?php if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Transit'){ ?>
        <span class="text-uppercase">Flight Date &amp; Time</span><br>
       <?=!empty($this->session->userdata("s_doa"))?$this->session->userdata("s_doa"):''?>&nbsp; <br><?=!empty($this->session->userdata("s_arrivalTime"))?$this->session->userdata("s_arrivalTime"):''?>  hrs (IST)<br>
	   
	    <?=!empty($this->session->userdata("s_dod"))?$this->session->userdata("s_dod"):''?>&nbsp; <br> <?=!empty($this->session->userdata("s_DepartureTime"))?$this->session->userdata("s_DepartureTime"):''?>  hrs (IST)
		<?php } else {
			if(!empty($this->session->userdata("s_category")) and strtolower($this->session->userdata("s_category"))=='spa'){?> 
        <span class="text-uppercase">Service Duration</span><br>
		
		<?php } else {
			if(!empty($this->session->userdata("s_category")) and strtolower($this->session->userdata("s_category"))=='lounge') {?> 
			<span class="text-uppercase">Service Duration</span><br>
				Access Hours - <?=!empty($this->session->userdata("service_duration"))?$this->session->userdata("service_duration"):'0 HRS' ?>
			<?php
			} else {?> 
        <span class="text-uppercase">Flight Date &amp; Time</span><br>
		  <?=!empty($this->session->userdata("s_doa"))?$this->session->userdata("s_doa"):''?>&nbsp; <br><?=!empty($this->session->userdata("s_arrival_time"))?$this->session->userdata("s_arrival_time"):''?> hrs (IST)
		<?php }}}?> 
		
		</div>
		
		 <div class="col col5 text-center pos-relative"><span class="iconsearch"><i class="fas fa-couch fa-2x text-white mb-2"></i></span><br>
        <span class="text-uppercase">Service Date &amp; Time</span><br>
		<?php if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Transit'){ ?>
        <?=!empty($this->session->userdata("s_doa"))?$this->session->userdata("s_doa"):''?>&nbsp;<br><?=!empty($this->session->userdata("s_arrival_service_time"))?$this->session->userdata("s_arrival_service_time"):''?>  hrs (IST)<br>
		<?php !empty($this->session->userdata("s_dod"))?$this->session->userdata("s_dod"):''?> <br>
		
		<?php }elseif(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Departure'){ ?>
        <?=!empty($this->session->userdata("s_service_date_time"))?date('D, d-M-Y',strtotime($this->session->userdata("s_service_date_time"))):''?>  <br> <?=!empty($this->session->userdata("s_service_date_time"))?date('H:i',strtotime($this->session->userdata("s_service_date_time"))):''?>   hrs (IST)
		<?php } elseif(strtolower($this->session->userdata("s_category"))=='spa') { ?>
		  <?=!empty($this->session->userdata("s_doa"))?$this->session->userdata("s_doa"):''?>&nbsp;<br><?=!empty($this->session->userdata("s_arrival_service_time"))?$this->session->userdata("s_arrival_service_time"):''?>  hrs (IST)<br>
		<?php } elseif(strtolower($this->session->userdata("s_category"))=='lounge') { ?>
		  <?=!empty($this->session->userdata("s_service_date_time"))?$this->session->userdata("s_service_date_time"):''?>  hrs (IST)<br>
		<?php } else { ?>
		  <?=!empty($this->session->userdata("s_doa"))?$this->session->userdata("s_doa"):''?>&nbsp;<br><?=!empty($this->session->userdata("s_arrival_service_time"))?$this->session->userdata("s_arrival_service_time"):''?>  hrs (IST)<br>
		<?php }?> 
		
       </div>
      <div class="col col4 text-center"><span class="iconsearch"><i class="fas fa-users fa-2x text-white mb-2"></i></span><br>
        <span class="text-uppercase">Number of guests</span><br>
         Adult - <?=!empty($this->session->userdata("s_adult"))?$this->session->userdata("s_adult"):'1'?>
		<?php if(strtolower($this->session->userdata("s_category"))!='spa') { ?>
		 <br>Child - <?=!empty($this->session->userdata("s_child"))?$this->session->userdata("s_child"):'0'?>&nbsp;/&nbsp;Infant&nbsp; - <?=!empty($this->session->userdata("s_infant"))?$this->session->userdata("s_infant"):'0'?> 
		<?php } else { ?>
		<br>Service Duration - <?=!empty($this->session->userdata("service_duration"))?$this->session->userdata("service_duration"):'0'?> mins
		<?php } ?>
		
		<?php
		if($spa){
			?>
		<a href="<?=base_url('spa/home/index');?>" class="text-white small resetbooking"><i class="fas fa-pencil-alt"></i>&nbsp;Begin Again</a>
		<?php
		}else{?>
			<a href="<?=base_url('atithya/home/index');?>" class="text-white small resetbooking"><i class="fas fa-pencil-alt"></i>&nbsp;Begin Again</a>
		<?php
		}
		?>
	   </div>
     
    </div>
  </div>
</section>
