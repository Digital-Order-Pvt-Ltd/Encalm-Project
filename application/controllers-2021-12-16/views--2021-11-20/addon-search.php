 <?php include 'head.php';?>
<!-- ======= Header ======= --> 
    
    <?php include 'top-menu.php';?>
    <!-- .navbar --> 
  
<!-- End Header --> 

<!-- ======= Hero Section ======= -->
<?php include 'purchase-history.php';?>
<!-- End Hero -->

<main id="main"> 
  <!-- ======= number Section ======= -->
  <?php include 'number.php';?>
  <section class="mamber-card">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mb-4">
          <div class="row">
		  
		  
		  <?php  //$allsearchdata =  json_decode($addondata);p($allsearchdata);exit;
			if(!empty($addondata)){
				$allsearchdata =  json_decode($addondata);
				//p($allsearchdata);
				if(!empty($allsearchdata->message) and $allsearchdata->message=='data found.'){
					if(!empty($allsearchdata->datalist)){
						foreach($allsearchdata->datalist as $val){
		?>
            <div class="col-md-6 mb-4">
              <div class="card">
                <div class="row">
                  <div class="col-md-5"><img class="card-img-top" src="data:image/png;base64,<?=$val->image_1920?>" alt="Card image cap"></div>
                  <div class="col-md-7 ps-0">
                    <div class="card-body ps-0 pe-1">
                      <div class="row">
                        <div class="col-md-8">
                          <h5 class="card-title fw-bold m-0"><?=$val->name?></h5>
                        </div>
                        <div class="col-md-4"><span class="float-end text-white small text-end color-bg">&#8377;<span class="fw-bold"><?=$val->list_price?></span><br>
                          Per Unit</span></div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-12 mb-2">
                          <div class="small"> <?=!empty($val->categ_id[1])?$val->categ_id[1]:''?><br>
                            &nbsp; </div>
                          <form class=""h3>
                            <div class="form-group">
                              <label for="number" class="d-inline">Qty</label>
                              <input type="number" class="form-control d-inline w-45 numberval" id="numberQty_<?=$val->id?>" name="number" min="0" max="100" placeholder="0" value="1">
							  
                              <a onclick='UpdateValue(<?=$val->id?>,"<?=$val->name?>","<?=!empty($val->list_price)?$val->list_price:0?>")'  class="btn btn-primary float-end small addButton" data-name="<?=$val->name?>" data-id="<?=$val->id?>" id="addButton_<?=$val->id?>">ADD</a> 
							  
							  <a href="javascript:void(0)" class="btn btn-success float-end small addedButton" data-name="Flower Bouquet" id="addedButton_<?=$val->id?>" >ADDED</a>
							  
							  </div>
                          </form>
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
        <div class="col-md-4 mb-4">
          <div class="card mb-3">
            <div class="card-header text-center"> Order Summary </div>
            <div class="charges table-responsive" id="addTableData">
              <table width="100%" border="0" cellspacing="0" cellpadding="10" class="table table-hover m-0">
                <tbody>
                  <!--tr>
                    <td>Booking Date:</td>
                    <td align="right">22/10/2021</td>
                  </tr>
                  <tr>
                    <td>Booking Time:</td>
                    <td align="right">05:26:08</td>
                  </tr-->
				  
				  <?php 
				  $NetAmount=0;;
				  $select_product_details = !empty($this->session->userdata("s_select_product_details"))?$this->session->userdata("s_select_product_details"):array();
				//  p($select_product_details);
				 $NetAmount = array_sum(array_column($select_product_details,'pprice'));
				  
				  if(!empty($select_product_details)){
					  for($i=0;$i<count($select_product_details);$i++)
					  { ?>
                  <tr>
                    <td><?php echo $select_product_details[$i]['pname']; ?> (<?php echo $select_product_details[$i]['pqty']; ?>&nbsp;<?php echo $select_product_details[$i]['ptype']; ?>)</td>
                    <td align="right">&#8377;<?php echo $select_product_details[$i]['pprice']; ?></td>
                  </tr>
					  <?php } ?>
				  
				  
                  <!--tr style="display:none">
                    <td><span id="addOnsName"></span></td>
                    <td align="right">&#8377;<span id="addOnsAmount"></span></td>
                  </tr-->
                  <tr>
                    <td class="bg-light">Net Amount</td>
                    <td align="right" class="bg-light">&#8377;<span id="netAmount"><?php echo $NetAmount; ?></span></td>
                  </tr>
				  <?php }?>
                </tbody>
              </table>
            </div>
          </div>
          <a href="<?=base_url('home/confirm')?>"  class="btn btn-primary w-100">Continue >></a> </div>
      </div>
    </div>
  </section>
</main>

<!-- ======= Footer ======= --> 
<?php include 'footer.php';?>

<script type="text/javascript">
function UpdateValue(product_id,product_name,product_price)
{
	var qty = $('#numberQty_'+product_id).val();
	if(qty != "" && qty > 0)
	{
	$.ajax({
			type: 'POST',
			url: "<?=base_url('home/updatesession')?>",
			data: {'page':'Addon', 'product_name':product_name,"product_id":product_id,"product_price":product_price,"noqty":qty},
			dataType: "html",
			 	success: function(data) { 
				setTimeout(function(){
				$('#addButton_'+product_id).hide();	
				$('#addedButton_'+product_id).show();
						
				 $('#addTableData').html('');
				$('#addTableData').html(data);
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
	else
	{
		alert("please enter qty first");
		return false;
	}
	
	 
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