<?php include 'head.php';?>
<?php include 'top-menu.php';?>
<?php include 'purchase-history.php';?>
<main id="main"> 
  <!-- ======= number Section ======= -->
  <?php include 'number.php';?>
  <section class="mamber-card-checkout">
    <div class="container search-box">
	<form id="userentry" name="userentry" method="post" action="<?=base_url('atithya/home/placeorderlounge');?>" class="custom-search-from custom-add-item formfloats" enctype="application/x-www-form-urlencoded">
	<input type="hidden" name="o_booking_id" value="<?=$o_booking_id?>"/>
	<input type="hidden" name="booking_id" value="<?=$booking_id?>"/>
      <div class="row">
        	 
        <div class="col-md-6 search-box">
          <div class="section-title">
            <p>Guest Details</p>
          </div>
          <div class="table-responsive overflow-hidden" style="padding-right: 15px; padding-left:15px;">
            <?php include 'userentry-lounge.php';?>
          </div>
           
      </div>
	  
        <div class="col-md-6 search-box">
        
          
            <?php include 'placard-lounge.php';?>
         
      </div>
	  
	  </form>
    </div>
  </section>
</main>
 
<?php include 'footer.php';?>
<script type="text/javascript">
function getGuestType(val)
{
	var gender = "<?=$this->session->userdata('s_customer_data')['gender']?>";
	var title = "<?=$this->session->userdata('s_customer_data')['title']?>";
	var country_code = "<?=$this->session->userdata('s_customer_data')['country_code']?>";
	$("#lounge_title option:selected").removeAttr("selected");
	$("#lounge_gender option:selected").removeAttr("selected");
	$("#lounge_country_code option:selected").removeAttr("selected");
	$("#lounge_first_name").val("");
	$("#lounge_last_name").val("");
	$("#lounge_age").val("");
	$("#lounge_mobile").val("");
	if(val==1)
	{
		if(country_code=='') { country_code = '91'}
		$('#lounge_title option[value="'+title+'"]').attr("selected", "selected");
		
		$('#lounge_gender option[value="'+gender+'"]').attr("selected", "selected");
		$('#lounge_country_code option[value="'+country_code+'"]').attr("selected", "selected");

		$("#lounge_first_name").val("<?=$this->session->userdata('s_customer_data')['first_name']?>");
		
		$("#lounge_last_name").val("<?=$this->session->userdata('s_customer_data')['last_name']?>");
		$("#lounge_age").val("<?=$this->session->userdata('s_customer_data')['current_age']?>");
		$("#lounge_mobile").val("<?=$this->session->userdata('s_customer_data')['mobile']?>");
	}
	else
	{
		$('#lounge_country_code option[value="91"]').attr("selected", "selected");
	}
}
$("form#userentry").submit(function(event) 
{
	var error = false;
	$("#lounge_country_code").removeClass("focus");
	$("#lounge_age").removeClass("focus");
	$("#lounge_gender").removeClass("focus");
	$("#lounge_last_name").removeClass("focus");
	$("#lounge_first_name").removeClass("focus");
	$("#lounge_title").removeClass("focus");
	$("#lounge_mobile").removeClass("focus");
 
 
 
	if($("#lounge_country_code option:selected").val() == "")
		{
			$("#lounge_country_code").addClass("focus");
			$("#lounge_country_code").focus();
			error = true; 
		}
	if($("#lounge_age").val() == "" ||  $("#lounge_age").val() == 0)
		{
			$("#lounge_age").addClass("focus");
			$("#lounge_age").focus();
			error = true; 
		}
		if($("#lounge_first_name").val() == "")
		{
			$("#lounge_first_name").addClass("focus");
			$("#lounge_first_name").focus();
			error = true; 
		}
	if($("#lounge_last_name").val() == "")
		{
			$("#lounge_last_name").addClass("focus");
			$("#lounge_last_name").focus();
			error = true; 
		}
    if($("#lounge_mobile").val() == "")
		{
			$("#lounge_mobile").addClass("focus");
			$("#lounge_mobile").focus();
			error = true; 
		}
if($("#lounge_gender option:selected").val() == "")
		{
			$("#lounge_gender").addClass("focus");
			$("#lounge_gender").focus();
			error = true; 
		}
if($("#lounge_title option:selected").val() == "")
		{
			$("#lounge_title").addClass("focus");
			$("#lounge_title").focus();
			error = true; 
		}
	
if(error==false)
 {
	 PleaseWaitShow();
	 return true;
 }
 else
 {
	return false;
 }
});
function getState(val)
{ 
var placard_country = $('#billing_country option:selected').text();
var placard_state = "<?=!empty($this->session->userdata('s_customer_data'))?$this->session->userdata('s_customer_data')['state']:''?>";
if(placard_country != "")
{
 $.ajax({
			type: 'POST',
			url: "<?=base_url('atithya/home/getState')?>",
			data: {'placard_country':placard_country,"placard_state":placard_state },
			dataType: "html",
				beforeSend : function(data){
					},
			 	success: function(data) { 
				$('#billing_state').html('');
				$('#billing_state').html(data);
				  return true;
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
jQuery(function () {
	getState(0)
});
 </script> 
</body>
</html>