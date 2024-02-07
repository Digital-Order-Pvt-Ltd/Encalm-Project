<?php //p(json_decode($datalist)); exit;?>
<?php include 'head.php';?>
<!-- ======= Header ======= --> 
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
   
<!-- End Header -->
<main id="hero" class="bg-white">
  
  <section class="mamber-card">
    <div class="container search-box">
      <div class="row">
         <div class="col-lg-12">
          <div class="section-title">
            <p>My Guest List</p>
			<?php if(!empty($this->session->flashdata('success'))) {?>
				
				<h3> <center><?=$this->session->flashdata('success')?></center></h3>
				
			<?php }?>
          </div>
        <table class="table table-striped table-bordered" cellpadding="0" cellspacing="0" width="100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
     
      <th scope="col">Name</th>
      <th scope="col">DOB</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
	 <th scope="col">Passport/Govt ID</th>
	 <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
     <?php 
	$guestData =  json_decode($datalist);
	//p($guestData);
	 if(!empty($guestData) and !empty($guestData->datalist)){
	  $g = 1;
	  foreach($guestData->datalist as $guest){
		  
		  $cust_title =!empty($guestData->datalist[0]->title)?$guestData->datalist[0]->title:array(); 
		  $ctitle =!empty($cust_title[1])?$cust_title[1]:'';
	  ?>
    <tr>
      <td><?=$g?></td> 
      <td><?=!empty($guest->name)?$ctitle.' '.$guest->name.' '.$guest->last_name:''?></td>
	  <td><?=!empty($guest->dob)?date('D, d-M-Y',strtotime($guest->dob)):''?></td>
	  <td><?=!empty($guest->age)?$guest->age:''?></td>
       <td><?=!empty($guest->gender)?ucfirst($guest->gender):''?></td>
       <td><?=!empty($guest->passport)?$guest->passport:''?></td>
       <td>
	   <a href="<?=base_url('#');?>" class="btn btn-primary  btn-sm small">Edit</a>
	   
	   <a href="<?=base_url('user/removeguest/'.$guest->id);?>" class="btn btn-danger  btn-sm small">Delete</a>
	   
	   </td>
      
    </tr>
  <?php $g++;}}?>
  </tbody>
</table>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- ======= Footer ======= -->
<?php include 'footer.php';?>
 
</body>
</html>