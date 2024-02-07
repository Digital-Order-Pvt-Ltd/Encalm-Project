<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 text-center">
          <div class="footer-info">
            <h3>Encalm Hospitality Private Limited</h3>
            <p>Plot No 89 LGF, Sector 44, Gurgaon 122003, Haryana, India<br>
              <span class="me-2"><i class="bi bi-envelope"></i></span> info@encalmhospitality.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="container">
    <div class="copyright"> &copy; Copyright <strong><span>Encalm Hospitality Pvt. Ltd.</span></strong> All Rights Reserved </div>
  </div>
</footer>
<!-- End Footer -->
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 
<!-- Vendor JS Files --> 
<script src="<?=base_url()?>assets/js/jquery-2.2.4.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/aos/aos.js"></script> 
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script> 
<script src="<?=base_url()?>assets/vendor/bootstrap-datetimepicker/moment.js"></script> 
<script src="<?=base_url()?>assets/vendor/bootstrap-datetimepicker/daterangepicker.js"></script> 
<script src="<?=base_url()?>assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 
<script src="<?=base_url()?>assets/vendor/select2/select2.min.js"></script> 
    
<!-- Template Main JS File --> 
<script src="<?=base_url('assets/js/myscript.js')?>"></script> 
<script src="<?=base_url()?>assets/js/main.js"></script> 
<script type="text/javascript">
function selectUser(name){
	$('#AStartFromAirport').val(name);
	 
	$(".hidedata").css("display", "none");
}
function ArrivingStartFromAirport(vals){

	$.ajax({
			type: 'POST',
			url: "<?=base_url('ajaxcall/getApiData')?>",
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
					  
					 var html='<ul class="hidedata">';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							  
							  
							   
							 // html += '<option value="'+ItemArray[i].id+'" data-id="'+ItemArray[i].id+'">'+ItemArray[i].name+'</option>';
							  html += "<li onClick=selectUser('Indira Gandhi International Airport')><a href='javascript:void(0)'><i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i>"+ItemArray[i].name+"</a></li>";
							  //html += '<li onClick="selectUser("'+ItemArray[i].name+'")><a href="javascript:void(0)"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>'+ItemArray[i].name+'</a></li>';
						 }
						 html+='</ul>';
					$("#ArrivalFromAirport").show();
					$("#ArrivalFromAirport").html(html);
					$("#ArrivalFromAirport").css("background","#FFF");

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
/* function SectorList()
{
	var dataRequestArr={};
	var url='<?=base_url('ajaxcall/getApiDataList')?>';		
	dataRequestArr['MethodName']='get_product_list_meet_greet';		
	dataRequestArr['RequestType']='SectorList';		
	 	
	ajaxCallDropDownAPIData('ArrivingSector','POST',url,dataRequestArr,'Select Sector');
}

function ArrivingAirport()
{
	var dataRequestArr={};
	var url='<?=base_url('ajaxcall/getApiDataList')?>';		
	dataRequestArr['MethodName']='get_service_airport';		
	dataRequestArr['RequestType']='ArrivalAt';		
	dataRequestArr['category']='Arrival';		
	ajaxCallDropDownAPIData('ArrivingAirportAt','POST',url,dataRequestArr,'Arriving At');
}		 */	

 function getArrivalFlightList()
{
	var from_airport = $('#AStartFromAirport').val();
	var to_airport = $('#ArrivingAirportAt option:selected').text();
	var travel_date = $('#Arrivaldof').val();
	alert("to_airport:"+to_airport+" from_airport"+from_airport+" travel_date"+travel_date);
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
			url: "<?=base_url('ajaxcall/getApiData')?>",
			//data: {'MethodName':'get_flight_list','RequestType':"ArrivalFlightList","category":"Arrival","from_airport":"Indira Gandhi International Airport","to_airport":"Indira Gandhi International Airport","travel_date":"2021-11-15"},
			data: {'MethodName':'get_flight_list','RequestType':"ArrivalFlightList","category":"Arrival","from_airport":from_airport,"to_airport":to_airport,"travel_date":travel_date},
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				//var item=JSON.parse(data);
				const item=data;
			//	 alert(item.message);
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					 var html='<option value="" selected="selected">Flight No.*</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							   
							  html += '<option value="'+ItemArray[i].id+'" data-id="'+ItemArray[i].id+'">'+ItemArray[i].flight_name+'</option>';
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

 function SectorList()
{
	$.ajax({
			type: 'POST',
			url: "<?=base_url('ajaxcall/getApiData')?>",
			data: {'MethodName':'get_general_value','RequestType':"SectorList","type":"TRAVEL SECTOR"},
			//data: {'MethodName':'get_product_list_meet_greet','RequestType':"SectorList","type":"TRAVEL SECTOR"},
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				//var item=JSON.parse(data);
				const item=data;
			//	 alert(item.message);
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					 var html='<option value="" selected="selected">Select Sector</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							   
							  html += '<option value="'+ItemArray[i].id+'" data-id="'+ItemArray[i].id+'">'+ItemArray[i].name+'</option>';
						 }
					 $('#ArrivingSector').html('');		
					 $('#ArrivingSector').html(html);

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
			url: "<?=base_url('ajaxcall/getApiData')?>",
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
					  
					 var html='<option value="" selected="selected">Arriving At</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							   
							  html += '<option value="'+ItemArray[i].name+'" data-id="'+ItemArray[i].id+'">'+ItemArray[i].name+'</option>';
						 }
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
});
function checkValue(th,id)
{
	if(th != "")
	{
		jQuery("#"+id).hide();
	}
}
jQuery(function () {

   jQuery('.datepicker').datetimepicker({
       format: 'DD-MMM-YYYY',
       autoclose: true,
       minView: 2,
       minDate:new Date()
    }).on('dp.change', function(e){
           jQuery(this).data('DateTimePicker').hide();
    });
    jQuery('.datepicker').data("DateTimePicker").hide();
     // Init Select2 - Basic Single
    jQuery(".select2-single").select2();
	
	ArrivingAirport();
	SectorList();
	ArrivalFlightList();
});
</script>