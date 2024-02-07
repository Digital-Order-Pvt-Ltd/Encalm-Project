

<?php // $allsearchdata =  json_decode(escapeJsonString($flightdata));
		//p($allsearchdata); 
//p($flightdata);		 
//$data = json_decode($flightdata, JSON_UNESCAPED_SLASHES);
//p($data); exit;
		//p(json_decode($this->db->escape_like_str($flightdata)));
	//p($flightdata);
	//	exit;
		
		?>
    <?php include 'head.php';?>
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
 
<!-- End Header --> 

<!-- ======= Hero Section ======= -->
<?php include 'purchase-history.php';?>
<!-- End Hero -->

<main id="main"> 
  <!-- ======= number Section ======= -->
  <?php include 'number.php';?>
  <section class="mamber-card travel-search">
    <div class="container">
      <div class="row">
        <?php  //$allsearchdata =  json_decode($flightdata);
		//p($allsearchdata);exit;
		/* $allsearchdata =  json_decode($flightdata, JSON_UNESCAPED_SLASHES);
		p($allsearchdata); */
			if(!empty($flightdata)){
				$allsearchdata =  json_decode($flightdata);
				/* $allsearchdata =  json_decode($flightdata, JSON_UNESCAPED_SLASHES);
				echo $allsearchdata['message'];
				p($allsearchdata); */
				if(!empty($allsearchdata->message) and $allsearchdata->message=='data found.'){
					//p($allsearchdata->datalist);
					if(!empty($allsearchdata->datalist)){
						foreach($allsearchdata->datalist as $val){
		?>
		
		<div class="col-md-6 mb-4">
          <div class="card">
            <div class="row">
              <div class="col-md-5"><img class="card-img-top" src="data:image/png;base64,<?=$val->image_1920?>" alt="Card image cap"></div>
              <div class="col-md-7 ps-0">
                <div class="card-body ps-0">
                  <div class="row">
                    <div class="col-md-8">
                      <h5 class="card-title fw-bold m-0"><?=$val->name?></h5>
                    </div>
                    <div class="col-md-4"><span class="float-end text-white small text-end color-bg">&#8377;<span class="fw-bold"><?=$val->list_price?></span><br>
                      @ 1 Adult</span></div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <div class="small"> Included </div>
					  <?=!empty($val->categ_id[1])?$val->categ_id[1]:''?>
                      <!--ul class="list-group list-group-flush ps-3 pe-3 pt-2 pb-1 small">
                        <li>First lane access/VIP carparking</li>
                        <li>Assistance from Arrival Gate</li>
                        <li>Buggy (battery operated car)</li>
                        <li>Assistance through Immigration</li>
                      </ul-->
                      <div class="card-text">
					  
					  <!--a href="<?=base_url("home/addons/".$val->id)?>" class="btn btn-primary float-end btn-sm small">Select</a> <a href="javascript:void(0)" class="morebtn small">More...</a-->
					  <a onclick='redirecturl("<?=base_url("home/addons/".$val->id)?>",<?=$val->id?>,"<?=$val->name?>","<?=!empty($val->list_price)?$val->list_price:0?>")' class="btn btn-primary float-end btn-sm small" id="selected_id_<?=$val->id?>">Select</a> <a href="javascript:void(0)" class="morebtn small">More...</a>
                        <div class="hover-info">
                          <div class="card">
                            <div class="card-header"> Included </div>
							<?=$val->description?>
                            <!--ul class="list-group list-group-flush ps-5 pe-3 py-3">
                              <li>First lane access/VIP carparking</li>
                              <li>Assistance from Arrival Gate</li>
                              <li>Buggy (battery operated car)</li>
                              <li>Assistance through Immigration</li>
                              <li>Option for personal Shopper at Duty Free</li>
                              <li>Porter assistance at baggage belt</li>
                            </ul-->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
				<?php }}}} ?>
		
      </div>
    </div>
  </section>
</main>

<!-- ======= Footer ======= -->
<?php include 'footer.php';?>


<script type="text/javascript">
function redirecturl(url,product_id,product_name,product_price)
{
	 
 $('#selected_id_'+product_id).text('Please wait..');	 
 $('#selected_id_'+product_id).removeAttr('onclick');	 
 $('#selected_id_'+product_id).click(false);

	$.ajax({
			type: 'POST',
			url: "<?=base_url('home/updatesession')?>",
			data: {'page':'Search','redirecturl':url,'product_name':product_name,"product_id":product_id,"product_price":product_price},
			dataType: "html",
			 	success: function(data) { 
				setTimeout(function(){ 
				window.location.href=url;
				  return true;
				}, 3000);
 
				 },
				error:function(data)
				 {
					if(data.status==0){
						alert("There is no internet connection found. Please reconnect and try again!");
						return false;
					}
					if(data.status>0){
						alert(data.responseText);
						var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
						OpenWindow.document.write(data.responseText);
						return false;
						
					}
				}
		});
	
	 
}

jQuery('#myTab a').on('click', function (e) {
  e.preventDefault()
  jQuery(this).tab('show')
});
jQuery(function () {   
   jQuery('.datepicker').datetimepicker({
       format: 'DD-MMM-YYYY',
       autoclose: true,
       minView: 2,
       minDate:new Date()
    });
     // Init Select2 - Basic Single
    jQuery(".select2-single").select2();
});
</script>
</body>
</html>