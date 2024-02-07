$(function() {
  $('.onlydigit').on('keydown', '.digitvalidate', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
});
//Developed By Deepak Srivastav
//common function for calling ajax request and feed the html at selected ID of an element.
function setHiddenData(ntype,from_id,to_id,to_id_1,to_id_2)
{
	
	if(ntype=='Arrival')
	{
		 
		
		 
		if(to_id !="")
		{
		var setVal = $('#'+from_id).find(':selected').attr("data-id");	
		$('#'+to_id).val(setVal);
		}
		 if(to_id_1 !="")
		{
			var setVal = $('#'+from_id).find(':selected').attr("data-value");
			 
		$('#'+to_id_1).val(setVal);
		}
		if(to_id_2 !="")
		{
		 
		var setVal = $('#'+from_id).find(':selected').attr("data-code");		
		$('#'+to_id_2).val(setVal);
		} 
	}
}

function save_guest_details(requestURL,rUrl)
{
    var error = false;
	
	$('#g_passport_no').removeClass("focus");
	$('#g_dob').removeClass("focus");
	$('#g_last_name').removeClass("focus");
	$('#g_first_name').removeClass("focus");
	$('#g_title').removeClass("focus");
	$('#g_gender').removeClass("focus");
	
	var formset = $('#g_addguestform').serialize();
	var g_passport_no = $('#g_passport_no').val(); 
    var g_dob = $("#g_dob").val();
    var g_last_name = $("#g_last_name").val();
    var g_first_name = $("#g_first_name").val();
    var g_title = $("#g_title option:selected").val();
    var g_gender = $("#g_gender option:selected").val();
	
	if(g_title == ""){
            $('#g_title').addClass("focus");
            $('#g_title').focus();
            error = true; 
        } 
		
if(g_passport_no == "")
{
            $('#g_passport_no').addClass("focus");
            $('#g_passport_no').focus();
            error = true; 
        }

if(g_first_name == ""){
            $('#g_first_name').addClass("focus");
            $('#g_first_name').focus();
            error = true; 
        } 
if(g_last_name == ""){
            $('#g_last_name').addClass("focus");
            $('#g_last_name').focus();
            error = true; 
        } 
if(g_dob == ""){
            $('#g_dob').addClass("focus");
            $('#g_dob').focus();
            error = true; 
        } 		
 if(g_gender == ""){
            $('#g_gender').addClass("focus");
            $('#g_gender').focus();
            error = true; 
        }   
    if( error == true)return false;
	$.ajax({
			type: 'POST',
			url: requestURL,
			data: formset,
			dataType: "json",
			beforeSend : function(data){                
				$("#add_guests").text("Please Wait...");
			},
			success: function(data) 
			{
				 $("#add_guests").text("+ ADD");
				 const item=data;
				// alert(item.message);
				 if(item.message=='data added.' && item.status==true)
				 {
					 if(item.id > 0)
					 {
						// alert(rUrl);
						 window.location.href=rUrl;
						 //get_your_guest_list();
					 }
					 else
					 {
						 alert("Save time Error");
					 }
				 }
				 else
				 {
					 alert(item.message);
				 }
			},
			error:function(data)
			 {
				if(data.status==0){
					alert("There is no internet connection found.Please reconnect and try again!");
					return false;
				}
				if(data.status>0){
					var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
					OpenWindow.document.write(data.responseText);
					return false;					
				}
			}
		});
	return false;	
}

function RemoveCoupon(val)
{
	$("#finalTotal").text(val);
	$("#c_final_amount").text(val);
	$("#discountCouponCode").text('');
	$("#discountAmt").text('0');
	$('#couponBtn').removeClass('d-none');
	$('.RemoveCouponClass').addClass('d-none');
	
	$("#c_discount_code").val('');
	$("#c_discount_amt").val(0);
	$("#c_discount_id").val(0);
	
	
	$('.couponclass, applyccbtn').removeClass('btn-danger');
	$('.couponclass').text('Select');
	$('.applyccbtn').text('Apply');
	$('.couponclass, applyccbtn').addClass('btn-primary');
}
function ValidateCouponCode(requestURL)
{
	var apply_coupon  =  $('#apply_coupon_text').val();
	var netAmount = parseFloat($("#netAmount").text()) || 0;
	if (apply_coupon !="")
	{
	$.ajax({
			type: 'POST',
			 
			url: requestURL,
			data: {'coupon_code':apply_coupon,"RequestType":'ValidateCouponCode','MethodName':'get_discount_coupon_by_code'},
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				//var item=JSON.parse(data);
				const item=data;
			//	 alert(item.message);
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					var  discount_percentage = item.datalist[0].discount_percentage;
					var  discount_type = item.datalist[0].discount_type;
					var  promo_code = item.datalist[0].promo_code;
					 
					 var percentage = parseFloat(discount_percentage) || 0;
						if(discount_type=='percentage')
						{
							
							var discountAmt =  ((netAmount*percentage)/100); 
							var setAmount = (netAmount - discountAmt).toFixed(2); 
						}
						else
						{
							var setAmount = netAmount-percentage; 
							var discountAmt =  percentage; 
						}
						$("#finalTotal").text(setAmount);
						$("#c_final_amount").text(setAmount);
						$("#discountCouponCode").text(promo_code);
						$("#discountAmt").text(discountAmt);
						 
						 $("#c_discount_code").val(promo_code);
							$("#c_discount_amt").val(discountAmt);
							$("#c_discount_id").val(0);
						 
						$('.RemoveCouponClass').removeClass('d-none');
						$('#couponBtn').addClass('d-none');
						 
						$('#exampleModalCenter').modal('hide');
					 
					  

				 }
				 else
				 {
					 $('#errorcouponmsg').text('Coupon not valid');
				 }
				 //console.log(item);
               /*   console.log(item.datalist);
                console.log(item.datalist[0]);
				console.log(item.datalist[0].id); */
				
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
	else
	{
		alert('Please Enter Coupon Code First');
		 $('#apply_coupon_text').focus();
		 $('#errorcouponmsg').text('Please Enter Coupon Code First');
	}
}
function ValidateCouponCode_1(requestURL,sale_id)
{
	var apply_coupon  =  $('#apply_coupon_text').val();
	var netAmount = parseFloat($("#netAmount").text()) || 0;
	if (apply_coupon !="")
	{
	$.ajax({
			type: 'POST',
			url: requestURL,
			data: {'coupon_code':apply_coupon,"sale_id":sale_id},
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				const item=data;
				if(item.id.faultCode==1)
				 {
			
					 $('.RemoveCouponClass').removeClass('d-none');
						$('#couponBtn').addClass('d-none');
						 
						$('#exampleModalCenter').modal('hide');
						location.reload();
						//get_booking_data(sale_id);
				 }
				 else
				 {
					 $('#errorcouponmsg').text(item.id.faultString);
				 }
				
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
	else
	{
		alert('Please Enter Coupon Code First');
		 $('#apply_coupon_text').focus();
		 $('#errorcouponmsg').text('Please Enter Coupon Code First');
	}
}

function SelectCoupon(coupon_id,discount_type,discount_percentage,rule_minimum_amount,promo_code,BaseUrl,sale_id=0)
{
	if(sale_id >0)
	{
			$.ajax({
			type: 'POST',
			 
			url: BaseUrl,
			data: {'coupon_code':promo_code,"sale_id":sale_id},
			dataType: "json",
			 	success: function(data) { 
				 console.log(data); 
				 //var item=JSON.parse(data);
				const item=data;
				 if(item.id.faultCode==1)
				 {
					  var netAmount = parseFloat($("#netAmount").text()) || 0;
	var percentage = parseFloat(discount_percentage) || 0;
	if(discount_type=='percentage')
	{
		
		var discountAmt =  ((netAmount*percentage)/100); 
		var setAmount = (netAmount - discountAmt).toFixed(2); 
	}
	else
	{
		var setAmount = netAmount-percentage; 
		var discountAmt =  percentage; 
	}
	
	$("#c_final_amount").text(setAmount);
	//$("#finalTotal").text(setAmount);
	//$("#discountCouponCode").text(promo_code);
	//$("#discountAmt").text(discountAmt);
	
	$("#c_discount_code").val(promo_code);
	$("#c_discount_amt").val(discountAmt);
	$("#c_discount_id").val(0);
	
	$(".couponclass").text('Select');
	//$('#coupon_id_'+coupon_id).text('Selected');
	//$('#coupon_id_'+coupon_id).removeClass('btn-primary');
	//$('#coupon_id_'+coupon_id).addClass('btn-danger');
	$('.RemoveCouponClass').removeClass('d-none');
	$('#couponBtn').addClass('d-none');
	$('#exampleModalCenter').modal('hide');
	//alert(netAmount+'='+percentage);
				location.reload();
				//get_booking_data(sale_id);
				 }
				 else
				 {
					 $('#errorcouponmsg').text(item.id.faultString);
				 }
				
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

function ajaxCallDropDownAPIData(htmlID,requestType,requestURL,dataRequestArr,selectType='Select')
{
	var requestData = JSON.stringify(dataRequestArr); 
	 $.ajax({
		 
			type  	: requestType,
			url   	: requestURL,
			data  	: {requestData},
			dataType: "json",
			/* type: 'POST',
			url: "<?=base_url('ajaxcall/get_common')?>",
			data: {"category":'Arrival','MethodName':'get_service_airport','RequestType':"ArrivalAt"}, */
			
			 	success: function(data) { 
				 //console.log(data); 
				//var item=JSON.parse(data);
				const item=data;
				 alert(item.message);
				 if(item.message=='data found.' && item.status==true)
				 {
					 const ItemArray=item.datalist;
					  
					 var html='<option value="" selected="selected">'+selectType+'</option>';
					 
						 for (let i = 0; i < ItemArray.length; i++) 
						 {
							  //console.log(ItemArray[i]) + "<br>";
							   
							  html += '<option value="'+ItemArray[i].id+'" data-id="'+ItemArray[i].id+'">'+ItemArray[i].name+'</option>';
						 }
					 $('#'+htmlID).html('');		
					 $('#'+htmlID).html(html);

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

function ajaxCallJson(requestType,requestURL,dataRequestArr){
	
	var requestData = JSON.stringify(dataRequestArr); 		
	if(requestData.length>0 ){
		$.ajax({
					type  	: requestType,
					url   	: requestURL,
					data  	: {requestData},
					dataType: "html",
					async: false,
					success : function(responseData) {  
							//alert(responseData);
							return  responseData;
							},
					error:function(responseData)
					 {
						 if(responseData.status==0){
							alert("There is no internet connection found.Please reconnect and try again!");
							return false;
						} 
						if(responseData.status>0){
							//alert(data.responseText);
							var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
							OpenWindow.document.write(responseData.responseText);
							return false;
							
						}
					}	
			});
	}	
	 
}


function ajaxCall(htmlID,requestType,requestURL,dataRequestArr){
	
	var requestData = JSON.stringify(dataRequestArr); 		
	if(requestData.length>0 && htmlID.length>0){
		$.ajax({
					type  	: requestType,
					url   	: requestURL,
					data  	: {requestData},
					dataType: "html",
					success : function(responseData) { 
							 $('#'+htmlID).html(responseData);
							},
					error:function(responseData)
					 {
						 if(responseData.status==0){
							alert("There is no internet connection found.Please reconnect and try again!");
							return false;
						} 
						if(responseData.status>0){
							//alert(data.responseText);
							var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
							OpenWindow.document.write(responseData.responseText);
							return false;
							
						}
					}	
			});
	}	
	 
}

// common function for calling ajax on document ready function for feeding drop options at selected
// ID of that element in view
function ajaxCallOnDocumentReady(htmlID,requestType,requestURL,dataRequestArr,setValue){
	
	var requestData = JSON.stringify(dataRequestArr); 		
	if(requestData.length>0 && htmlID.length>0 && setValue.length>0){
		$.ajax({
					type  	: requestType,
					global 	: false,
					url   	: requestURL,
					data  	: {requestData},
					dataType: "html",
					success : function(responseData){ 
							 $('#'+htmlID).html(responseData);
							// $('#'+htmlID).val(setValue).change();
							 $('#'+htmlID+' option[value='+setValue+']').prop('selected', true);
							 
							},
					error:function(responseData)
					 {
						if(responseData.status==0){
							alert("There is no internet connection found.Please reconnect and try again!");
							return false;
						}
						if(responseData.status>0){
							//alert(data.responseText);
							var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
							OpenWindow.document.write(responseData.responseText);
							return false;
							
						}
					}		
			});
	}	
	
}



function searchDataFromDB(inputArr,htmlID,requestType,requestURL){
	
	var requestData = JSON.stringify(inputArr); 
	//alert(requestData+requestData.length);
	if(requestData.length>0 && htmlID.length>0){ 
		$.ajax({
					type  	: requestType,
					url   	: requestURL,
					data  	: {requestData},
					dataType: "html",
					
					/* beforeSend : function(data){
							
							$('#search_id').text('Please Wait....');
							
							//$('#search_id').attr('disabled', 'disabled');
					}, */
					success : function(responseData){ 
							//$("#search_id").text("Search");
							$('#'+htmlID).empty();
							$('#'+htmlID).html(responseData);
							},
					error:function(responseData)
					 {
						if(responseData.status==0){
							alert("There is no internet connection found.Please reconnect and try again!");
							return false;
						}
						if(responseData.status>0){
							//alert(data.responseText);
							var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
							OpenWindow.document.write(responseData.responseText);
							return false;
							
						}
					}
					/* error	: function(response){
							 alert('Msg:(Error in server level) '+response);							 
							} */		
			});
	}
	
	
}

//ajax call with return arguments

function ajaxCallReturn(htmlID,requestType,requestURL,dataRequestArr){
	
	var requestData = JSON.stringify(dataRequestArr); 		
	if(requestData.length>0 && htmlID.length>0){
		$.ajax({
					type  	: requestType,
					url   	: requestURL,
					data  	: {requestData},
					dataType: "html/text",
					success : function(responseData){ 
							 alert(responseData);
							 
							},
					error:function(responseData)
					 {
						if(responseData.status==0){
							alert("There is no internet connection found.Please reconnect and try again!");
							return false;
						}
						if(responseData.status>0){
							//alert(data.responseText);
							var OpenWindow = window.open('','_blank','width=600,height=530,resizable=1');
							OpenWindow.document.write(responseData.responseText);
							return false;
							
						}
					}		
			});
	}
	
}


