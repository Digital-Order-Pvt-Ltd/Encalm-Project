<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="row d-flex align-items-center">
      <div class="col col1 text-center"><i class="fas fa-plane-arrival fa-2x text-white mb-2"></i><br>
        <span class="text-uppercase">Selected Service</span><br>
        <?=!empty($this->session->userdata("s_category"))?$this->session->userdata("s_category"):''?> (<?=!empty($this->session->userdata("s_arrival_sector"))?$this->session->userdata("s_arrival_sector"):''?>)<br>
        Terminal (T2)</div>
      <div class="col col2 text-center"><i class="fas fa-ticket-alt fa-2x text-white mb-2"></i><br>
        <span class="text-uppercase">Flight Details</span><br>
        IndiGo Airlines<br>
        <?=!empty($this->session->userdata("s_arrival_flight"))?$this->session->userdata("s_arrival_flight"):''?> </div>
      <div class="col col3 text-center"><i class="fas fa-calendar-day fa-2x text-white mb-2"></i><br>
        <span class="text-uppercase">Flight Date &amp; Time</span><br>
        <?=!empty($this->session->userdata("s_arrival_time"))?$this->session->userdata("s_arrival_time"):''?> <br>
        hrs (IST)</div>
      <div class="col col4 text-center"><i class="fas fa-users fa-2x text-white mb-2"></i><br>
        <span class="text-uppercase">Number of guests</span><br>
        <?=!empty($this->session->userdata("s_adult"))?$this->session->userdata("s_adult"):'1'?> Adults <br>
       <?=!empty($this->session->userdata("s_child"))?$this->session->userdata("s_child"):'0'?> Childs  &nbsp;</div>
      <div class="col col5 text-center"><i class="fas fa-couch fa-2x text-white mb-2"></i><br>
        <span class="text-uppercase">Service Date &amp; Time</span><br>
        <?=!empty($this->session->userdata("s_service_date_time"))?$this->session->userdata("s_service_date_time"):''?>  <br>
        hrs (IST)<br>
        <a href="<?=base_url('home/index');?>" class="text-white small"><i class="fas fa-pencil-alt"></i>&nbsp;Modified Details</a></div>
    </div>
  </div>
</section>
