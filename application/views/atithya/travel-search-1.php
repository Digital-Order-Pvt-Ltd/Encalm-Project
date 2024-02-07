

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
  <section class="mamber-card mamber-card-checkout">
    <div class="container">
      <div class="row">
	  <div class="col-md-8 mb-4">
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
		
		<div class="col-md-12 mb-4">
          <div class="card">
            <div class="row">
              <div class="col-md-4"><img class="card-img-top" src="data:image/png;base64,<?=$val->image_1920?>" alt="Card image cap"></div>
              <div class="col-md-8 ps-0">
                <div class="card-body ps-0">
                  <div class="row">
                    <div class="col-md-8">
                      <h5 class="card-title fw-bold m-0" id="pro_<?=$val->id?>"><?=$val->name?></h5>
                    </div>
                    <div class="col-md-4"><span class="float-end text-white small text-end color-bg">&#8377;<span class="fw-bold"><?=$val->tax_price?></span><br>
                      @ 1 Adult</span></div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <div class="small">   </div>
					  <p class="hght"><?=!empty($val->categ_id[1])?$val->categ_id[1]:''?> </p>
                      <!--ul class="list-group list-group-flush ps-3 pe-3 pt-2 pb-1 small">
                        <li>First lane access/VIP carparking</li>
                        <li>Assistance from Arrival Gate</li>
                        <li>Buggy (battery operated car)</li>
                        <li>Assistance through Immigration</li>
                      </ul-->
                      <div class="card-text">
					  
					  <!--a href="<?=base_url("home/addons/".$val->id)?>" class="btn btn-primary float-end btn-sm small">Select</a> <a href="javascript:void(0)" class="morebtn small">More...</a-->
					  <a onclick='redirecturl("<?=base_url("home/addons/".$val->id)?>",<?=$val->id?>,"<?=$val->name?>","<?=!empty($val->list_price)?$val->list_price:0?>","<?=!empty($val->service_delivery_time_hrs)?$val->service_delivery_time_hrs:0?>","<?=!empty($val->tax_price)?$val->tax_price:0?>")' class="btn btn-primary float-end serachselectclass" id="selected_id_<?=$val->id?>">Select</a> <a onclick="showDesciption(<?=$val->id?>)" class="small details" style="cursor:pointer">Details</a>
                        <div class="hover-info">
                          <div class="card">
                            <div class="card-header" > Included </div>
							<div id="more_desc_<?=$val->id?>">
								<p><?=$val->description?></p>
									
								</div>
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
				//p($select_product_details);
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
				  
				  <tr>
					<td class="bg-light">SGST (9%)</td>
					<td align="right" class="bg-light">&#8377;<?=$sgst=sprintf ("%.2f",(($NetAmount*9)/100),2)?> </td>
					 </tr>
					 
					 <tr>
							<td class="bg-light">CGST (9%)</td> 
							<td align="right" class="bg-light">&#8377;<?=$cgst=sprintf ("%.2f",(($NetAmount*9)/100),2)?> </td>
					 </tr>
				  <tr>
				<td class="bg-light">Final Amount</td>
				<td align="right" class="bg-light">&#8377;<?php echo $sgst+$cgst+$NetAmount; ?> 
				 </td>
			  </tr>
				  <?php } else {?>
				  <tr>
                    <td class="bg-light">No Selected Product</td>
				  </tr>
				  <?php }?>
                </tbody>
              </table>
            </div>
			
			
          </div>
			
			<?PHP if(!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category")=='Lounge'){?>
			 
			<div class="clearfix"></div>
			<h4 class="text-primary">Additional Info</h4>
			<div class="row">

			<div class="form-group col-md-12 pb-3">
			  <input type="text" id="lounge_service_time"  class="form-control datepicker1"  placeholder="Check in Date & Time" />
			</div>
			
			<div class="form-group col-md-12  ">
				<span class="caret"></span>
				<select id="lengthofstay" class="form-control d-none">
					<option value="">Select Length of Stay*</option>
					
					<?php if(!empty($LENGTHOFSTAY)){ $LENGTHOFSTAY =json_decode($LENGTHOFSTAY); 
					   if(!empty($LENGTHOFSTAY->datalist)){
						foreach($LENGTHOFSTAY->datalist as $val){
					   ?>
					   <option value="<?=$val->id?>" data-code="<?=$val->name?>" ><?=$val->name?></option>
					   <?php }}}?>
				</select>
			</div>
			</div>
			
			<?PHP }?>
			<br>
		  
          <!--a href="" id="idHref" class="btn btn-primary w-100" onclick="alert('Please select one product.'); return false; ">Proceed to Add-ons</a-->
		<input type="hidden" id="addonurl" value=""/>			
          <a  class="btn btn-primary w-100" onclick="SendToAddons();">Proceed to Add-ons</a>
		  </div>
		
      </div>
    </div>
  </section>
</main>
<div class="modal fade" id="FlightDescp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
	<div class="modal-header">
        <h5 class="modal-title" id="setProductname">Flight Description</h5>
         
      </div>
      <div class="modal-body search-box">
        <div class="p-3" id="setDescription">
           
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
function SendToAddons()
{
	var addonurl = $('#addonurl').val();
	
	var category = "<?=$this->session->userdata('s_category')?>";
	//alert(addonurl.length);
	if(addonurl.length < 10 || addonurl == '')
	{
		alert("Please select one product");
		return false;
	}
	else
	{
		PleaseWaitShow();
		if(category=='Lounge')
		{
			var lounge_service_time = $('#lounge_service_time').val();
			var lengthofstay_id = $('#lengthofstay  option:selected').val();
			var lengthofstay = $('#lengthofstay  option:selected').text();
			/* if(lengthofstay_id=="" || lengthofstay_id==0)
			{
				alert("please select length of stay");
				return false;
			}
			else */ if(lounge_service_time=="" || lounge_service_time.length < 5)
			{
				alert("please enter Add Check In Date and Time");
				return false;
			}
			else
			{
				$.ajax({
			type: 'POST',
			url: "<?=base_url('home/updatesessionlounge')?>",
			data: {'lounge_service_time':lounge_service_time,'lengthofstay_id':lengthofstay_id,'lengthofstay':lengthofstay},
			dataType: "json",
			 	success: function(data) { 
					window.location.href=addonurl;
					//PleaseWaitHide();
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
		}
		else
		{
			window.location.href=addonurl;
			//PleaseWaitHide();
		}
	}
}
function showDesciption(textId)
{
	var html = $('#more_desc_'+textId).html();
	var p_name = $('#pro_'+textId).html();
	$("#setProductname").html('');
	$("#setDescription").html('');
	$("#setProductname").html(p_name);
	$("#setDescription").html(html);
	$('#FlightDescp').modal('show');
}
/* jQuery('.morebtn').on('click', function (e) {
    $('#FlightDescp').modal('show');
}); */
jQuery('.close').on('click', function (e) {
    $('#FlightDescp').modal('hide');
});
function redirecturl(url,product_id,product_name,product_price,service_duration,tax_price)
{
	 
 $('#addonurl').val('');	 
 $('#selected_id_'+product_id).text('Please wait..');	 
 //$('#selected_id_'+product_id).removeAttr('onclick');	 
 $('#selected_id_'+product_id).click(false);

	$.ajax({
			type: 'POST',
			url: "<?=base_url('home/updatesession')?>",
			data: {'page':'Search','redirecturl':url,'product_name':product_name,"product_id":product_id,"product_price":product_price,"service_duration":service_duration,"tax_price":tax_price},
			dataType: "json",
			 	success: function(data) { 
				$('.serachselectclass').text('Select');	

				
				 
				// $('.serachselectclass').removeClass('btn-primary_1, btn-primary');
				// $('.serachselectclass').addClass('btn-primary');
				//$('#selected_id_'+product_id).addClass('btn-primary_1').removeClass('btn-primary');
				
				
				$('#selected_id_'+product_id).text('Selected');	 
				 const item=data; 
				//alert(item.url);
				//$("#idHref").removeAttr("onclick");
				//$("#idHref").removeAttr("href");
				//$("#idHref").attr("href", item.url);
				$('#addonurl').val(item.url);	 
				$("#addTableData").html('');
				$("#addTableData").html(item.html);
				//window.location.href=url;
 
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
  	// jQuery('.datepicker1').datetimepicker({
   //     format: 'DD-MMM-YYYY',
   //     autoclose: true,
   //     minView: 2
   //  });


                jQuery('.datepicker1').datetimepicker({
					timeZone:'',
                	
                });
            

     // Init Select2 - Basic Single
    jQuery(".select2-single").select2();
});
</script>



</body>

</html>