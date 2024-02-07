<?php 
$allsearchdata = $_SESSION['allsearchdata'];
$airport_location_id = !empty($mainData->datalist[0]->airport_location_id)?$mainData->datalist[0]->airport_location_id:array(); 
$airport_terminal_id = !empty($mainData->datalist[0]->airport_terminal_id)?$mainData->datalist[0]->airport_terminal_id:array(); 
?>
<!--footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 m-auto text-center">
          <div class="footer-info">
            <p class="mb-2"><big>Atithya Welcome & Assist</big></p>
            <p class="mb-1"><small>A Unit of</small></p>
            <h3>ENCALM HOSPITALITY PVT. LTD.</h3>
            <div class="row">
              <div class="col-md-12">
                <p><strong>Regd. Address </strong></p>
                <p>Plot No 89 LGF, Sector 44, Gurgaon 122003, Haryana, India</p>
              </div>
              <div class="col-md-12 mt-2">
                <p><strong>Corporate Office </strong></p>
                <p>7th Floor, TAG Tower, Plot No. 17-18, Phase 4, Udyog Vihar, Gurugram – 122015, Haryana, India
                </p>
              </div>
              <div class="col-md-12 mt-2">
                <p><strong>For Reservations </strong></p>
                <p><span class="me-2"><i class="bi bi-envelope"></i></span> <a href="mailto:guest.services@encalm.com">guest.services@encalm.com</a> &nbsp; | &nbsp; <span class="me-2"><i class="bi bi-phone"></i></span> <a href="tel:+919289366950">+91-92893 66950</a></p>
                <p><strong>Careers: </strong><a href="mailto:careers@encalm.com">careers@encalm.com</a> &nbsp; | &nbsp; <strong>For any other query: </strong><a href="mailto:info@encalm.com">info@encalm.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="container">
    <p class="text-center mb-0 mt-4"><a href="#" class="text-white">Terms & Conditions</a> &nbsp; | &nbsp; <a href="#" class="text-white">Privacy Policy</a></p>
    <div class="text-center copyright"> &copy; Copyright <strong><span>Encalm Hospitality Pvt. Ltd.</span></strong> All Rights Reserved </div>
  </div>
</footer>
<!-- End Footer -->
<div id="preloader"></div>
<div class="pageloaderdiv" style=""></div>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 
<!-- Vendor JS Files --> 
<!-----------------------Please Wait Open---------------------------> 

 <script language="javascript" type="text/javascript">
   /*  $(document).ready(function ()
    {
        $(document).ajaxStart(function ()
        {
            PleaseWaitShow()
        });

        $(document).ajaxComplete(function ()
        {
            PleaseWaitHide();
        });
        
    }); */
  

    function  PleaseWaitHide()
    {
        
        document.getElementById("divWait").style.display = 'none';
        document.getElementById("divWaitInner").style.display = 'none';
	   //$('.pageloaderdiv').html("");
    }

    function PleaseWaitShow()
    {
        document.getElementById("divWait").style.display = 'block';
        document.getElementById("divWaitInner").style.display = 'block';
		//$('.pageloaderdiv').html("<div id='preloader'></div>");
    }

  

</script>

<div id="divWait" style="background-color: rgba(0, 0, 0, 0.4); filter: alpha(opacity=50);
 opacity: 0.8; width: 100%; top: 0px; left: 0px; 
 z-index: 1040;
  position: fixed; display: none; height: 100%;"> </div>
<div id="divWaitInner" 
     
     style="margin: auto; font-family: Trebuchet MS; filter: alpha(opacity=90);
    opacity: 1; font-size: small; vertical-align: middle; 
    top: 39%; z-index: 2000;
    position: fixed; 
    right: 40%;
     color: #275721;
     display: none; 
     width:20%;
     text-align: center;
    background-color: White; height:120px;">
  <table style="background-color: White; 
        font-family: Sans-Serif; text-align: center;
        border: solid 1px #787878; color: #000000; 
        padding-bottom:5px;
        width: 100%; 
        
        height: inherit; padding: 15px;">
    <tr>
      <td style="text-align: inherit; padding:10px"><i class="fa fa-refresh  fa-spin fa-5x fa-fw" style="margin-top:10px; color:black"></i> <br />
        <br />
        <b style="font-family:Arial, Verdana; font-size:15px;"> Please wait..</b></td>
    </tr>
  </table>
</div>
<!-----------------------Please Wait Close---------------------------> 
 

<script src="<?=base_url('atithya_assets/')?>assets/vendor/jquery-ui/jquery-ui.min.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/aos/aos.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/bootstrap/js/bootstrap.min.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/glightbox/js/glightbox.min.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/swiper/swiper-bundle.min.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/bootstrap-datetimepicker/moment.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/bootstrap-datetimepicker/daterangepicker.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/vendor/select2/select2.min.js"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/js/wickedpicker.min.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>  
<!-- Template Main JS File --> 
<script src="<?=base_url('atithya_assets/assets/js/myscript.js')?>"></script> 
<script src="<?=base_url('atithya_assets/')?>assets/js/main.js"></script> 
<script type="text/javascript" rel="nofollow">
function selectUser(name){
	$('#AStartFromAirport').val(name);
	 
	$(".hidedata").css("display", "none");
}
// function ArrivingStartFromAirport(){

// 	$.ajax({
// 			type: 'POST',
// 			url: "<?=base_url('atithya/ajaxcall/getApiData')?>",
// 			data: {'MethodName':'get_all_airport','RequestType':"ArrivalAllAirport"},
// 			dataType: "json",
// 			 	success: function(data) { 
// 				 console.log(data); 
// 				//var item=JSON.parse(data);
// 				const item=data;
// 			//	 alert(item.message);
// 				 if(item.message=='data found.' && item.status==true)
// 				 {
// 					 const ItemArray=item.datalist;
					  
// 					// var html='<ul class="hidedata">';
// 					 	 var html='<option value="" data-id="0">Departure Airport</option>';
					 
// 						 for (let i = 0; i < ItemArray.length; i++) 
// 						 {
// 							  //console.log(ItemArray[i]) + "<br>";
							  
							  
							   
// 							  html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'">'+ItemArray[i].display_name+'</option>';
// 							  //html += "<li onClick=selectUser('Indira Gandhi International Airport')><a href='javascript:void(0)'><i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i>"+ItemArray[i].name+"</a></li>";
							  
// 						 }
// 						 html+='</ul>';
// 						 $("#AStartFromAirport").html('');
// 						 $("#AStartFromAirport").html(html);
// 					//$("#ArrivalFromAirport").show();
// 					//$("#ArrivalFromAirport").html(html);
// 					//$("#ArrivalFromAirport").css("background","#FFF");

// 				 }
// 				 //console.log(item);
//                  // console.log(item.datalist);
//                 //console.log(item.datalist[0]);
// 				//console.log(item.datalist[0].id);
				
// 				return true;
// 				 },
// 				error:function(data)
// 				 {
// 					if(data.status==0){
// 						alert("There is no internet connection found. Please reconnect and try again!");
// 						return false;
// 					}
// 					if(data.status>0){
// 						alert(data.responseText);
// 						var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
// 						OpenWindow.document.write(data.responseText);
// 						return false;
						
// 					}
// 				}
// 		});  
	
// } 
function ArrivingStartFromAirport(){

	$.ajax({
			type: 'POST',
			url: "<?=base_url('atithya/ajaxcall/getApiData')?>",
			data: {'MethodName':'get_all_airport','RequestType':"ArrivalAllAirport"},
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				//var item=JSON.parse(data);
				const item=data;
			//	 alert(item.message);
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					// var html='<ul class="hidedata">';
					 	 var html='<option value="" data-id="0">Departure Airport</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							  
							  
							   
							  html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'">'+ItemArray[i].display_name+'</option>';
							  //html += "<li onClick=selectUser('Indira Gandhi International Airport')><a href='javascript:void(0)'><i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i>"+ItemArray[i].name+"</a></li>";
							  
						 }
						 html+='</ul>';
						 $("#AStartFromAirport").html('');
						 $("#AStartFromAirport").html(html);
					//$("#ArrivalFromAirport").show();
					//$("#ArrivalFromAirport").html(html);
					//$("#ArrivalFromAirport").css("background","#FFF");

				 }
				 //console.log(item);
                 // console.log(item.datalist);
                //console.log(item.datalist[0]);
				//console.log(item.datalist[0].id);
				
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


function getArrivalFlightList()
{
	//var from_airport = $('#AStartFromAirport').val();
	var from_airport = $('#AStartFromAirport option:selected').val();
	var flight_id = $('#AStartFromAirport').find(':selected').attr('data-id');
	var to_airport = $('#ArrivingAirportAt option:selected').val();
	var to_airport_id = $('#ArrivingAirportAt option:selected').attr('data-id');
	var travel_date = $('#Arrivaldof').val();
	 $('#ArrivalTimeId').val('');
	 $('#ArrivalServiceTimeId').val('');
	 $('#a_service_date_time').val(''); 
	//alert("to_airport:"+to_airport+" from_airport"+from_airport+" travel_date"+travel_date);
	if(from_airport=='')
	{
		alert("select starting from  airport");
		$('#AStartFromAirport').focus();
		return false;
	}
	else if(to_airport=='')
	{
		alert("select to  airport");
		$('#ArrivingAirportAt').focus();
		return false;
	}
	else if(travel_date=='')
	{
		alert("select date");
		$('#Arrivaldof').focus();
		return false;
	}
	else
	{
			$.ajax({
			type: 'POST',
			url: "<?=base_url('atithya/ajaxcall/getApiData')?>",
			//data: {'MethodName':'get_flight_list','RequestType':"ArrivalFlightList","category":"Arrival","from_airport":"Indira Gandhi International Airport","to_airport":"Indira Gandhi International Airport","travel_date":"2021-11-15"},
			//data: {'MethodName':'get_flight_list_for_booking','RequestType':"ArrivalFlightList","category":"Arrival","from_airport":from_airport,"to_airport":to_airport,"travel_date":travel_date,"service_airport":flight_id},
			data: {'MethodName':'get_flight_list_for_booking','RequestType':"ArrivalFlightList","category":"Arrival","from_airport":flight_id,"to_airport":to_airport_id,"travel_date":travel_date,"service_airport":to_airport},
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				//var item=JSON.parse(data);
				const item=data;
			//	 alert(item.message);
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					 var html='<option value="" data-id="0" data-value="" data-code="" data-airline="0" data-name="" data-departure="" data-arrival="">Flight No.*</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							  
							  
							   var airline_id= ItemArray[i].airline_id[0];
							   var airline_name= ItemArray[i].airline_id[1];
							  let  departure_time = String((ItemArray[i].departure_time/100).toFixed(2)); 
							  var  departure_time_1 = departure_time.replace(".",":");
							  let  arrival_time = String((ItemArray[i].arrival_time/100).toFixed(2)); 
							   var  arrival_time_1 = arrival_time.replace(".",":");
							  
							  html += '<option value="'+ItemArray[i].flight_name+'" data-id="'+ItemArray[i].id+'"  data-code="'+arrival_time_1+'" data-value="'+departure_time_1+'" data-airline="'+airline_id+'" data-name="'+airline_name+'" data-arrival="'+ItemArray[i].arrival_term+'" data-departure="'+ItemArray[i].departure_term+'">'+ItemArray[i].flight_name+'</option>';
						 }
					 $('#ArrivalFlight').html('');		
					 $('#ArrivalFlight').html(html);

				 }
				 //console.log(item);
                 // console.log(item.datalist);
                //console.log(item.datalist[0]);
				//console.log(item.datalist[0].id);
				
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

// function SectorList()
// {
// 	$.ajax({
// 			type: 'POST',
// 			url: "<?=base_url('atithya/ajaxcall/getApiData')?>",
// 			data: {'MethodName':'get_general_value','RequestType':"SectorList","type":"TRAVEL SECTOR"},
// 			//data: {'MethodName':'get_product_list_meet_greet','RequestType':"SectorList","type":"TRAVEL SECTOR"},
// 			dataType: "json",
// 			 	success: function(data) { 
// 				 console.log(data); 
// 				//var item=JSON.parse(data);
// 				const item=data;
// 			//	 alert(item.message);
// 				 if(item.message=='data found.' && item.status==true)
// 				 {
// 					 const ItemArray=item.datalist;
					  
// 					 var html='<option value=""  data-id="0" data-value="" data-code="">Select Sector</option>';
					 
// 						 for (let i = 0; i < ItemArray.length; i++) 
// 						 {
// 							  //console.log(ItemArray[i]) + "<br>";
							   
// 							  html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'" data-value="'+ItemArray[i].value+'"  data-code="'+ItemArray[i].code+'" >'+ItemArray[i].name+'</option>';
// 						 }
// 					/*  $('#ArrivingSector').html('');		
// 					 $('#ArrivingSector').html(html); */ 
// 					 $('.BindSector').html('');		
// 					 $('.BindSector').html(html); 
// 				 }
// 				 //console.log(item);
//                  // console.log(item.datalist);
//                 //console.log(item.datalist[0]);
// 				//console.log(item.datalist[0].id);
				
// 				return true;
// 				 },
// 				error:function(data)
// 				 {
// 					if(data.status==0){
// 						alert("There is no internet connection found. Please reconnect and try again!");
// 						return false;
// 					}
// 					if(data.status>0){
// 						alert(data.responseText);
// 						var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
// 						OpenWindow.document.write(data.responseText);
// 						return false;
						
// 					}
// 				}
// 		});  
// }
// function ArrivingAirport()
// {
	 
// 		 $.ajax({
// 			type: 'POST',
// 			url: "<?=base_url('atithya/ajaxcall/getApiData')?>",
// 			data: {"category":'Arrival','MethodName':'get_service_airport','RequestType':"ArrivalAt"},
// 			dataType: "json",
// 			 	success: function(data) { 
// 				 //console.log(data); 
// 				//var item=JSON.parse(data);
// 				const item=data;
// 			//	 alert(item.message);
// 				 if(item.message=='data found.' && item.status==true)
// 				 {
// 					 const ItemArray=item.datalist;
					  
// 					 var html='<option value="" data-id="0" data-location-id="" data-location-name="">Arriving Airport</option>';
					 
// 						 for (let i = 0; i < ItemArray.length; i++) 
// 						 {
// 							  //console.log(ItemArray[i]) + "<br>";
							  
// 							   var airline_location_id= ItemArray[i].airport_location_code_id[0];
// 							   var airline_location_code= ItemArray[i].airport_location_code_id[1];
							   
// 							  html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'" data-location-id="'+airline_location_id+'" data-location-code="'+airline_location_code+'">'+ItemArray[i].display_name+'</option>';
// 						 }
// 					 $('#ArrivingAirportAt').html('');		
// 					 $('#ArrivingAirportAt').html(html);

// 				 }
// 				 //console.log(item);
//                  // console.log(item.datalist);
//                 //console.log(item.datalist[0]);
// 				//console.log(item.datalist[0].id);
				
// 				return true;
// 				 },
// 				error:function(data)
// 				 {
// 					if(data.status==0){
// 						alert("There is no internet connection found. Please reconnect and try again!");
// 						return false;
// 					}
// 					if(data.status>0){
// 						alert(data.responseText);
// 						var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
// 						OpenWindow.document.write(data.responseText);
// 						return false;
						
// 					}
// 				}
// 		});  
	 	 
// } 
 function SectorList()
{
	$.ajax({
			type: 'POST',
			url: "<?=base_url('atithya/ajaxcall/getApiData')?>",
			data: {'MethodName':'get_general_value','RequestType':"SectorList","type":"TRAVEL SECTOR"},
			//data: {'MethodName':'get_product_list_meet_greet','RequestType':"SectorList","type":"TRAVEL SECTOR"},
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				//var item=JSON.parse(data);
				const item=data;
			//	 alert(item.message);
				$('.BindSector').html('');	
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					 var html='<option value=""  data-id="0" data-value="" data-code="">Select Sector</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							   
							//   html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'" data-value="'+ItemArray[i].value+'"  data-code="'+ItemArray[i].code+'" >'+ItemArray[i].name+'</option>';
							html += '<option value="' + ItemArray[i].name + '" data-id="' + ItemArray[i].id + '" data-value="' + ItemArray[i].value + '" data-code="' + ItemArray[i].code + '"';

							// Check if the current item's id matches $airport_terminal_id[1]
							if ('<?=$airport_terminal_id[1]; ?>' == ItemArray[i].name) {
								html += ' selected="true"';
							}

							html += '>' + ItemArray[i].name + '</option>';

						 }
					/*  $('#ArrivingSector').html('');		
					 $('#ArrivingSector').html(html); */ 
					 	
					 $('.BindSector').html(html); 
				 }
				 //console.log(item);
                 // console.log(item.datalist);
                //console.log(item.datalist[0]);
				//console.log(item.datalist[0].id);
				
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
function ArrivingAirport()
{
	 
		 $.ajax({
			type: 'POST',
			url: "<?=base_url('atithya/ajaxcall/getApiData')?>",
			data: {"category":'Arrival','MethodName':'get_service_airport','RequestType':"ArrivalAt"},
			dataType: "json",
			 	success: function(data) { 
				 //console.log(data); 
				//var item=JSON.parse(data);
				const item=data;
			//	 alert(item.message);
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					 var html='<option value="" data-id="0" data-location-id="" data-location-name="">Arriving Airport</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							  
							   var airline_location_id= ItemArray[i].airport_location_code_id[0];
							   var airline_location_code= ItemArray[i].airport_location_code_id[1];
							   
							  //html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'" data-location-id="'+airline_location_id+'" data-location-code="'+airline_location_code+'">'+ItemArray[i].display_name+'</option>';
							  html += '<option value="' + ItemArray[i].name + '" data-id="' + ItemArray[i].id + '"';
							  
							  if (ItemArray[i].name === '<?=$airport_location_id[1]; ?>') {
								
									html += ' selected="true"';
									var defaultAirportId = "<?=$airport_location_id[1];?>";
        							getAirportData(defaultAirportId);
							}
							
							html += ' data-location-id="' + airline_location_id + '" data-location-code="' + airline_location_code + '">' + ItemArray[i].display_name + '</option>';

						 }
						 var defaultAirportId = "<?=$airport_location_id[1];?>";
        				getAirportData(defaultAirportId);
					 $('#ArrivingAirportAt').html('');		
					 $('#ArrivingAirportAt').html(html);

				 }
				 //console.log(item);
                 // console.log(item.datalist);
                //console.log(item.datalist[0]);
				//console.log(item.datalist[0].id);
				
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

jQuery('#myTab a').on('click', function (e) {
  e.preventDefault()
  jQuery(this).tab('show')
});
/*
jQuery("#submit").click(function(){    
    var name = jQuery.trim(jQuery("#name").val());	
    var email = jQuery.trim(jQuery("#email").val());		
    var subject = jQuery.trim(jQuery("#subject").val());		
    var message = jQuery.trim(jQuery("#message").val());
    var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    var error = false;
    if(name == "")
    {
        jQuery("#nameLabel").show();
        error = true;
    }		
    if(subject == "")
    {
        jQuery("#subjectLabel").show();	
        error = true; 
    }
    if(email == "")
    {	jQuery("#emailLabel").show();
        error = true;
    }
    else if(!regEmail.test(email))
    {	jQuery("#emailLabel").show();
        jQuery("#emailLabel").html("Email must be valid.");
        error = true;
        return false;
    }
    
    if( error == true)return false;
		
    var Data = "&frmname="+name+"&frmemail="+email+"&frmsubject="+subject+"&frmmessage="+message;		
		
    jQuery.ajax({
        type: "POST",
        url: "mail.php",
        data: Data,
        dataType: 'json',
        cache:false,
        success: function(msg){
            if(msg == "Invalid verification code.")
            {
                jQuery("#msgSuccessNew").show();
                jQuery("#msgSuccessNew").html("Sorry Mail server is busy. Please send after some time.");
            }
            else
            {				
                jQuery("#name").val("");
                jQuery("#email").val("");
                jQuery("#subject").val("");
                jQuery("#message").val(""); 
                jQuery("#msgSuccessNew").show();
                jQuery("#msgSuccessNew").html(msg.masge);
            }
        }
    });
    return false;
});*/
function checkValue(th,id)
{
	if(th != "")
	{
		jQuery("#"+id).hide();
	}
}
jQuery(function () {
   jQuery('.datepicker').datepicker({
       format: 'DD-MMM-YYYY',
	   dateFormat: 'dd-mm-yy',
       autoclose: true,
       minView: 2,
       minDate:new Date()
    }).on('dp.change', function(e){
           jQuery(this).data('DateTimePicker').hide();
    });
	jQuery('.fa-calendar-alt').click(function() {
		jQuery(".datepicker").focus();
	});
	jQuery('.datepicker').blur(function() {
		jQuery(".datepicker").focusout();
	});
    //jQuery('.datepicker').data("DateTimePicker").hide();
     // Init Select2 - Basic Single
    jQuery(".select2-single").select2();
	
	
	 
	
	ArrivingAirport();
	SectorList();
	//getArrivalFlightList();
	//ArrivingStartFromAirport();
	
	 
    

});
function getFlightArrivalTime_1(val)
{
	var Arrivaldof = $('#Arrivaldof').val();
//alert(Arrivaldof);	
	var SectorValue = $('#ArrivingSector').find(':selected').attr('data-value');
	var flight_id = $('#ArrivalFlight').find(':selected').attr('data-id');
	var date = $('#ArrivalFlight').find(':selected').attr('data-code');
	 
	var d_time = $('#ArrivalFlight').find(':selected').attr('data-value');
	var airline_id = $('#ArrivalFlight').find(':selected').attr('data-airline');
	var airline_name = $('#ArrivalFlight').find(':selected').attr('data-name');
	var arrival_term = $('#ArrivalFlight').find(':selected').attr('data-arrival');
	var departure_term = $('#ArrivalFlight').find(':selected').attr('data-departure');
	
	$('#A_flight_id').val(flight_id);	
	$('#A_arrival_time').val(date);	
	$('#a_airline_id').val(airline_id);	
	$('#a_airline_name').val(airline_name);	
	$('#a_arrival_term').val(arrival_term);	
	$('#a_departure_term').val(departure_term);	
	
	//alert(flight_id);
	/* 
var hrs = date.split(' ')[1];
var hrs = date.split(' ')[1].split(':')[0];
  */

/* var d1 =  new Date (date),

	d2 = new Date ( d1 );
	d2.setMinutes ( d1.getMinutes() + 120 ); */
	
	  
	         
/* var seconds1 = d1.getSeconds();
var minutes1 = d1.getMinutes();
var hour1 = d1.getHours(); */

/* var seconds1 = (d1.getSeconds()<10?'0':'') + d1.getSeconds();
var minutes1 = (d1.getMinutes()<10?'0':'') + d1.getMinutes();
var hour1 = (d1.getHours()<10?'0':'') + d1.getHours();
//	alert ( d2 );
//	alert ( d1 );
var seconds2 = (d2.getSeconds()<10?'0':'') + d2.getSeconds();
var minutes2 = (d2.getMinutes()<10?'0':'') + d2.getMinutes();
var hour2 = (d2.getHours()<10?'0':'') + d2.getHours();
 

  var  v1 = hour1 +":"+minutes1+" "+seconds1;
  var  v2 = hour2 +":"+minutes2+" "+seconds2; */
  if(val=="")
  {
	  $('#ArrivalTimeId').val('');
	$('#ArrivalServiceTimeId').val('');
	$('#a_service_date_time').val('');
  }
  else
  {
	  if(date==0)
	  {
		   var v1 = '00:00';
		  var v2 = '00:00';
		   var v3 = Arrivaldof+' 00:00';
	  }  
	  else
	  {
	 var v1 = addMinutes (date,0);
	 var v2 = addMinutes (date,0);
	 var v3 = addMinutesInDate(Arrivaldof+' '+date,0);
	  }
	  $('#ArrivalTimeId').val('');
	$('#ArrivalServiceTimeId').val(''); 
	$('#a_service_date_time').val(''); 
	 $('#ArrivalTimeId').val(v1);
	 $('#ArrivalServiceTimeId').val(v2);
	 $('#a_service_date_time').val(v3);
  }

}
function getArrivalTime(value)
{
	var Arrivaldof = $('#Arrivaldof').val();
	//console.log(value);
	if(value !='')
	{
		var s_time=	addMinutes (value,0);
		if(s_time=='' || s_time !='NaN' || s_time != '00:NaN')
		{
			$('#ArrivalServiceTimeId').val(s_time);
			$('#a_service_date_time').val(Arrivaldof+' '+s_time);
		}
	}
 	 
}
function addMinutes(time, minsToAdd) {
  function D(J){ return (J<10? '0':'') + J;};
  var piece = time.split(':');
  var mins = piece[0]*60 + +piece[1] + +minsToAdd;

  return D(mins%(24*60)/60 | 0) + ':' + D(mins%60);  
}  


function addMinutesInDate(datetime, minsToAdd) 
{
	 
	
	    var dt1 = datetime.split(" ");
		var dt2 = dt1[0].split("-").reverse().join("-")+' '+dt1[1];
		 
		const dt = new Date(dt2);	
		dt.setMinutes( dt.getMinutes()  +minsToAdd);
		
		var mydate =  dt.toLocaleDateString('en-GB');
		
		var seconds = (dt.getSeconds()<10?'0':'') + dt.getSeconds();
		var minutes = (dt.getMinutes()<10?'0':'') + dt.getMinutes();
		var hour = (dt.getHours()<10?'0':'') + dt.getHours();
		
		
        var today = ((dt.getDate()<10?'0':'') + dt.getDate());
        var month = ((dt.getMonth()<10?'0':'') + dt.getMonth());
        var year = ((dt.getFullYear()<10?'0':'') + dt.getFullYear());
		//year+'-'+month+'-'+today+' '+hour+':'+minutes+' '+seconds;
		//return year+'-'+month+'-'+today+' '+hour+':'+minutes;
		//return today+'-'+month+'-'+year+' '+hour+':'+minutes;
		//console.log(mydate);
		//console.log("Deepak");
		console.log(mydate);
        var  mydate_1 = mydate.replace("/","-");
        var  mydate_2 = mydate_1.replace("/","-");
		console.log(mydate_2);
		 
		return mydate_2+' '+hour+':'+minutes;
		//return mydate+' '+hour+':'+minutes;
		//return dt1[0]+' '+hour+':'+minutes;
}  
</script>
<script type="text/javascript">
  
  $(document).ready( function () {
    $('.myTable').DataTable({
         rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    });
} );
</script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Booking",
      "name": "Encalm Hospitality",
      //"startDate": "2022-07-21T19:00-05:00",
      //"endDate": "2025-07-21T23:00-05:00",
      "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
      "eventStatus": "https://schema.org/EventScheduled",
      "location": {
        "@type": "Booking",
        "name": "Hospitality Service",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "7th Floor, TAG Tower, Plot No. 17-18, Phase 4, Udyog Vihar, Gurugram – 122015, Haryana, India",
          "addressLocality": "Snickertown",
          "postalCode": "122015",
          "addressRegion": "GG",
          "addressCountry": "IND"
        }
      },
      "image": [
        "<?=base_url()?>atithya_assets/assets/img/planlogo_elite.png",
        "<?=base_url()?>atithya_assets/assets/img/planlogo_gold.png",
        "<?=base_url()?>atithya_assets/assets/img/planlogo_silver.png"
       ],
      "description": "Encalm Hospitality Pvt. Ltd. (Encalm) specialises in curating and delivering special experiences in the arena of Airport Hospitality.",
      "organizer": {
        "@type": "Organization",
        "name": "Encalm Hospitality",
        "url": "https://www.encalm.com"
      }
    }
    </script>


<script>
window.addEventListener('load', function() {

 	if(window.location.href.indexOf("/thankyou/") != -1)
{
	var price = document.querySelector("#hero > section > div > div > div.col-md-5.ordersummary > div.card.mb-3 > div.charges.table-responsive > table > tbody > tr:nth-child(8) > td:nth-child(2)").innerText.replace(/[^0-9.]/g,'');

  gtag('event', 'conversion', {
        'send_to': 'AW-10876206096/1UN1CLb1_s8DEJD4lsIo',
      'value': price,
      'currency': 'INR',
      'transaction_id': ''
  });
}

  
});

  $(document).ready(function() {
    setTimeout(function() {
        // Ensure that the function exists before calling it
        if (typeof getAirportData === 'function') {
            // Call the function with the specified value
            var defaultAirportId = "<?php echo !empty($mainData->datalist[0]->airport_location_id[1]) ? $mainData->datalist[0]->airport_location_id[1] : 'null'; ?>";
            getAirportData(defaultAirportId);
			SectorList();
        }
    }, 2000); // 2000 milliseconds = 2 seconds
});
  $(document).ready(function() {
    setTimeout(function() {
        // Ensure that the function exists before calling it
        if (typeof getAirportData === 'function') {
            // Call the function with the specified value
            // var defaultAirportId = "<?php echo !empty($mainData->datalist[0]->airport_location_id[1]) ? $mainData->datalist[0]->airport_location_id[1] : 'null'; ?>";
            // getAirportData(defaultAirportId);
			SectorList();
        }
    }, 4000); // 2000 milliseconds = 2 seconds
});


</script>


<script>
  window.addEventListener('load',function(){
    jQuery('body').on('mousedown','[href*="tel:"]',function(){
      gtag('event', 'conversion', {'send_to': 'AW-10876206096/XXPECPCOsdADEJD4lsIo'});
    })
  })
</script>