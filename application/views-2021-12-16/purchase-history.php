<section id="hero" class="d-flex align-items-top">
  <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="row d-flex align-items-top">
      <div class="col col1 text-center"><i class="fas fa-plane-arrival fa-2x text-white mb-2"></i><br>
        <span class="text-uppercase">Selected Service</span><br>
        <?=!empty($this->session->userdata("s_category"))?$this->session->userdata("s_category"):''?> (<?=!empty($this->session->userdata("s_arrival_sector"))?$this->session->userdata("s_arrival_sector"):''?>)<br>
		<?php if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Transit'){ 
        echo !empty($this->session->userdata("s_arrival_term"))?"Arrival - ".$this->session->userdata("s_arrival_term").'<br>':'<br>';
		echo !empty($this->session->userdata("s_d_arrival_term"))?"Departure - ".$this->session->userdata("s_d_arrival_term"):'';
		}
		else
		{
			echo !empty($this->session->userdata("s_arrival_term"))?$this->session->userdata("s_arrival_term"):'';
		}			
		?>
		
	</div>
      <div class="col col2 text-center"><i class="fas fa-ticket-alt fa-2x text-white mb-2"></i><br>
        <span class="text-uppercase">Flight Details</span><br>
		<?php if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Transit'){ ?>
        <?=!empty($this->session->userdata("s_airline_name"))?$this->session->userdata("s_airline_name"):''?><br>
        <?=!empty($this->session->userdata("s_arrival_flight"))?$this->session->userdata("s_arrival_flight"):''?><br> 
		 <?=!empty($this->session->userdata("s_d_airline_name"))?$this->session->userdata("s_d_airline_name"):''?><br>
        <?=!empty($this->session->userdata("s_d_FlightName"))?$this->session->userdata("s_d_FlightName"):''?> 
		<?php } else {?> 
		 <?=!empty($this->session->userdata("s_airline_name"))?$this->session->userdata("s_airline_name"):$this->session->userdata("s_d_airline_name")?><br>
        <?=!empty($this->session->userdata("s_arrival_flight"))?$this->session->userdata("s_arrival_flight"):''?> 
		<?php }?> 
		</div>
      <div class="col col3 text-center"><i class="fas fa-calendar-day fa-2x text-white mb-2"></i><br>
        <span class="text-uppercase">Flight Date &amp; Time</span><br>
		<?php if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Transit'){ ?>
       <?=!empty($this->session->userdata("s_doa"))?$this->session->userdata("s_doa"):''?>&nbsp; <br><?=!empty($this->session->userdata("s_arrivalTime"))?$this->session->userdata("s_arrivalTime"):''?>  hrs (IST)<br>
	   
	    <?=!empty($this->session->userdata("s_dod"))?$this->session->userdata("s_dod"):''?>&nbsp; <br> <?=!empty($this->session->userdata("s_DepartureTime"))?$this->session->userdata("s_DepartureTime"):''?>  hrs (IST)
		<?php } else {?> 
		  <?=!empty($this->session->userdata("s_doa"))?$this->session->userdata("s_doa"):''?>&nbsp; <br><?=!empty($this->session->userdata("s_arrival_time"))?$this->session->userdata("s_arrival_time"):''?> hrs (IST)
		<?php }?> 
		
		</div>
      <div class="col col4 text-center"><i class="fas fa-users fa-2x text-white mb-2"></i><br>
        <span class="text-uppercase">Number of guests</span><br>
        <?=!empty($this->session->userdata("s_adult"))?$this->session->userdata("s_adult"):'1'?> Adult <br><?=!empty($this->session->userdata("s_child"))?$this->session->userdata("s_child"):'0'?>  Child&nbsp; /&nbsp;  <?=!empty($this->session->userdata("s_infant"))?$this->session->userdata("s_infant"):'0'?>   Infant&nbsp;
	   </div>
      <div class="col col5 text-center pos-relative"><i class="fas fa-couch fa-2x text-white mb-2"></i><br>
        <span class="text-uppercase">Service Date &amp; Time</span><br>
		<?php if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Transit'){ ?>
        <?=!empty($this->session->userdata("s_doa"))?$this->session->userdata("s_doa"):''?>&nbsp;<br><?=!empty($this->session->userdata("s_arrival_service_time"))?$this->session->userdata("s_arrival_service_time"):''?>  hrs (IST)<br>
		<?php !empty($this->session->userdata("s_dod"))?$this->session->userdata("s_dod"):''?> <br>
		
		<?php } else {?> 
		  <?=!empty($this->session->userdata("s_doa"))?$this->session->userdata("s_doa"):''?>&nbsp;<br><?=!empty($this->session->userdata("s_arrival_service_time"))?$this->session->userdata("s_arrival_service_time"):''?>  hrs (IST)<br>
		<?php }?> 
		
        <a href="<?=base_url('home/index');?>" class="text-white small resetbooking"><i class="fas fa-pencil-alt"></i>&nbsp;Reset Booking Details</a></div>
    </div>
  </div>
</section>
