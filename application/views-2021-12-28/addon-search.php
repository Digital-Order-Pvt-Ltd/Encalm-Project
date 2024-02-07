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
  <section class="mamber-card mamber-card-checkout">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mb-4">
          <div class="row">
		  
		  
		  <?php  //$allsearchdata =  json_decode($addondata);p($allsearchdata);exit;
			if(!empty($addondata)){
				$allsearchdata =  json_decode($addondata);
			//	p($allsearchdata);
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
                          <h5 class="card-title fw-bold m-0" id="a_pro_<?=$val->id?>"><?=$val->name?></h5>
                        </div>
                        <div class="col-md-4"><span class="float-end text-white small text-end color-bg">&#8377;<span class="fw-bold"><?=$val->tax_price?></span><br>
                          Per Unit</span></div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-12 mb-2">
                          <div class="small mb-2"> <?=!empty($val->categ_id[1])?$val->categ_id[1]:''?><br>
						  
						  <a onclick="showDesciption_1(<?=$val->id?>)" class="small" style="cursor:pointer">Details</a>
						  <div class="d-none" id="a_more_desc_<?=$val->id?>"><?=$val->description?></div>
                            &nbsp; </div>
                          <form class=""h3>
                            <div class="form-group">
                            	<div class="row">
                            		<div class="col-md-8">
		                              <label for="number" class="d-inline">Qty</label>
		                              <input type="number" class="form-control d-inline w-45 numberval" id="numberQty_<?=$val->id?>" name="number" min="0" max="100" placeholder="0" value="1">
									  </div>
									  <div class="col-md-4">		                              
									  <a onclick='UpdateValue(<?=$val->id?>,"<?=$val->name?>","<?=!empty($val->list_price)?$val->list_price:0?>","<?=!empty($val->list_price)?$val->tax_price:0?>")'  class="btn btn-primary float-end small addButton wid-100"  data-name="<?=$val->name?>" data-id="<?=$val->id?>" id="addButton_<?=$val->id?>"><i class="fas fa-plus"></i> ADD</a> 
									  
									  <!--a  onclick='UpdateValue(<?=$val->id?>,"<?=$val->name?>","<?=!empty($val->list_price)?$val->list_price:0?>")'  class="btn btn-primary float-end small addedButton" data-name="Flower Bouquet" id="addedButton_<?=$val->id?>" >ADD</a-->
									  
									  <!--a href="javascript:void(0)" class="btn btn-primary float-end small addedButton" data-name="Flower Bouquet" id="addedButton_<?=$val->id?>" >ADD</a-->
									</div>
							  	</div>
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
        <div class="col-md-4 mb-4 ordersummary">
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
				  $NetAmountTax=0;;
				  $select_product_details = !empty($this->session->userdata("s_select_product_details"))?$this->session->userdata("s_select_product_details"):array();
				//  p($select_product_details);
				 $NetAmount = array_sum(array_column($select_product_details,'pprice'));
				 $NetAmountTax = array_sum(array_column($select_product_details,'ptaxprice'));
				  
				  if(!empty($select_product_details)){
					  for($i=0;$i<count($select_product_details);$i++)
					  {  ?>
                  <tr>
                    <td><?php echo $select_product_details[$i]['pname']; ?> (<?php echo $select_product_details[$i]['pqty']; ?>&nbsp;<?php echo $select_product_details[$i]['ptype']; ?>)
					<?php if($select_product_details[$i]['ptype']=='Qty'){?>
					&nbsp;<a class="" onclick="RemoveQty(<?php echo $i; ?>);">Remove</a>
					<?php } ?>
					</td>
                    <td align="right">&#8377;<?php //echo $select_product_details[$i]['pprice']; ?><?php echo $select_product_details[$i]['ptaxprice']; ?></td>
                  </tr>
					  <?php } ?>
				  
				  
                  <!--tr style="display:none">
                    <td><span id="addOnsName"></span></td>
                    <td align="right">&#8377;<span id="addOnsAmount"></span></td>
                  </tr-->
                  <tr>
                    <td class="bg-light">Net Amount</td>
                    <td align="right" class="bg-light">&#8377;<span id="netAmount" style="display:none;"><?php echo $NetAmount; ?></span><?php echo $NetAmountTax; ?></td>
                  </tr>
				  <?php }?>
                </tbody>
              </table>
            </div>
          </div>
		  <?php if(!empty($this->session->userdata("s_customer_data"))){ ?>
		  <form method="post" action="<?=base_url('home/checkout')?>">
          <button type="submit" id="submit" name="submit" class="btn btn-primary w-100"  role="button" aria-disabled="false">Continue >>></button>
		  </form>
		  <?php } else { ?>
          <a href="<?=base_url('home/confirm')?>"  class="btn btn-primary w-100">Continue >></a> 
		  <?php } ?>
		  
		  
		  </div>
      </div>
    </div>
  </section>
</main>
<div class="modal fade" id="FlightDescp_a" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
	<div class="modal-header">
        <h5 class="modal-title" id="setProductname_a">Flight Description</h5>
         
      </div>
      <div class="modal-body search-box">
        <div class="p-3" id="setDescription_a">
           
        </div>
      </div>
	  <div class="modal-footer">
        <button type="button" class="btn btn-primary close" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- ======= Footer ======= --> 
<?php include 'footer.php';?>

<script type="text/javascript">
function showDesciption_1(textId)
{
	var html = $('#a_more_desc_'+textId).html();
	var p_name = $('#a_pro_'+textId).html();
	$("#setProductname_a").html('');
	$("#setDescription_a").html('');
	$("#setProductname_a").html(p_name);
	$("#setDescription_a").html(html);
	$('#FlightDescp_a').modal('show');
} 
jQuery('.close').on('click', function (e) {
    $('#FlightDescp_a').modal('hide');
});
function UpdateValue(product_id,product_name,product_price,tax_price)
{
	var qty = $('#numberQty_'+product_id).val();
	
	if(qty != "" && qty > 0)
	{
	//$('#addButton_'+product_id).hide();	
	//$('#addedButton_'+product_id).show();	
	$.ajax({
			type: 'POST',
			url: "<?=base_url('home/updatesession')?>",
			data: {'page':'Addon', 'product_name':product_name,"product_id":product_id,"product_price":product_price,"noqty":qty,"tax_price":tax_price},
			dataType: "html",
				beforeSend : function(data){
						$('#addButton_'+product_id).text("Wait...");
						//$('#search').attr('disabled', 'disabled');
					},
			 	success: function(data) { 
				//setTimeout(function(){
				
				$('#addButton_'+product_id).text("Add");		
				 $('#addTableData').html('');
				$('#addTableData').html(data);
				  return true;
				//}, 3000);
 
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