<footer class="bg-blue">
    <div class="container">
      <div class="row">
          <div class="col-lg-2">
            <h6 class="text-primarys">BACK TO TOP</h6>
            <hr/>
           <a href="#top" class="back-to-top d-flex align-items-center justify-content-center active">
              <img src="<?=base_url()?>assets/image/plane.png" alt="encalm" width="74px" />
            </a>
            <div class="social-media">
            <span class="text-white">Follow Us :</span>
            <br/>
            <a class="social-icon facebook" target="blank" href="https://www.facebook.com/encalmindia"><i class="fa fa-facebook-square" aria-hidden="true"></i></a><a class="social-icon twitter" target="blank" href="https://twitter.com/EncalmIndia"><i class="fa fa-twitter-square" aria-hidden="true"></i></a><a class="social-icon instagram" target="blank" href="https://www.instagram.com/encalmindia/"><i class="fa fa-instagram" aria-hidden="true"></i></a><a class="social-icon pinterest" target="blank" href="https://www.linkedin.com/company/encalmindia/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a><a class="social-icon pinterest" target="blank" href="https://in.pinterest.com/encalmindia/"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
            </div>
         </div>
          <div class="col-lg-2">
             <h6 class="text-primarys">QUICK LINK</h6>
            <hr/>
            <ul class="foots text-white">
              <li><a class="text-white" href="<?=base_url()?>contact"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact Us</a></li>
              <li><a class="text-white"href="<?=base_url()?>privacy"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Privacy Policy</a></li>
              <li><a class="text-white"href="<?=base_url()?>termsandconditions"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Terms And Conditions</a></li>
              <li><a class="text-white" href="<?=base_url()?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Press Room</a></li>
              <li><a class="text-white" href="<?=base_url()?>careers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Careers</a></li>
              <!--li><a class="text-white" href="<?=base_url()?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> CSR</a></li-->
              <li><a class="text-white" href="<?=base_url()?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Blogs</a></li>
            </ul>
          </div>
          
          <div class="col-lg-3">
              <h6 class="text-primarys">SUBSCRIBE TO OUR NEWSLETTER</h6>
              <hr/>
              
              <small class="text-white">Signup for our weekly newsletter to get the latest news, updates and amazing offers delivered directly in your inbox</small>
              <form class="bg-main-news">
                
                <input type="email" name="" class="form-control mt-3" placeholder="Enter Your Email" />
                <button class="mt-3 btn-main" type="button" id="subscribe">Subscribe Now</button>
              </form>
          </div>
          <div class="col-lg-5">
            <h6 class="text-primarys">ADDRESS</h6>
              <hr/>
              <div class="footer-info">
                  <h6 class="text-white">ENCALM HOSPITALITY PVT. LTD.</h6>
                  <div class="row">
                    <div class="col-md-12">
                      
                    </div>
                    <div class="col-md-12 mt-2">
                      <p class="text-white"><strong><span class="color-main"><i class="fa fa-map-marker" aria-hidden="true"></i></span> </strong> 7th Floor, TAG Tower, Plot No. 17-18, Phase 4, Udyog Vihar, Gurugram – 122015, Haryana, India</p>
                      
                    </div>
                    
                  </div>
                </div>
               <p><span class="me-2 color-main"><i class="fa fa-envelope" aria-hidden="true"></i></span> <a class="text-white" href="mailto:guest.services@encalm.com">guest.services@encalm.com</a><span class="mob-hidden"> &nbsp; | &nbsp; </span><small class="mob-foot-phone"><span class="me-2 color-main"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></span> <a class="text-white" href="tel:+919289366950">+91-92893 66950</a><small></p>
               
         
          </div>
      </div>
    </div>
</footer>
<div class="blacks-bg">
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
        <div class="copyright text-white"> © Copyright <strong><span>Encalm Hospitality Pvt. Ltd.</span></strong> All Rights Reserved </div>
    </div>
    
  </div>
</div>
</div>
<!-- End Footer -->
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 

<!-----------------------Please Wait Open---------------------------> 

 <script language="javascript" type="text/javascript">
    $(document).ready(function ()
    {
        $(document).ajaxStart(function ()
        {
            PleaseWaitShow()
        });

        $(document).ajaxComplete(function ()
        {
            PleaseWaitHide();
        });
        
    });
  
  
	
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
      <td style="text-align: inherit; padding:10px"><i class="fas fa-refresh  fa-spin fa-5x fa-fw" style="margin-top:10px; color:black"></i> <br />
        <br />
        <b style="font-family:Arial, Verdana; font-size:15px;"> Please wait..</b></td>
    </tr>
  </table>
</div>
<!-----------------------Please Wait Close---------------------------> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.bg-blue{background-image:url("<?=base_url()?>assets/image/footer.jpg"); background-repeat: no-repeat; background-size: cover; background-position: center; padding:60px 0px;}
footer hr{color:#ffffff!important;}
  .back-to-top:hover {
    background: #ffffff00!important;}
  footer .text-primarys{color:#cda45e!important; font-family:Brandon!important; font-weight:400!important;}
  footer h6{font-family:Brandon!important;}
  footer{font-family:Brandon!important;}
  footer ul {list-style:none;margin:0px 0px;padding:0px 0px;}
  footer .foots li{padding:3px 0px!important;}
  footer .btn-main {
    width: 100%;
    background-color: #cda45e;
    border: solid 1px #cda45e;
    border-radius: 5px;
    padding: 7px 25px;
}
footer .social-media {
    margin-top: 40px;
}
@media screen and (min-width: 768px) {
footer .social-media {
    position: absolute;
    margin-top: 71px;
}
}
footer .social-icon {
    font-size: 32px;
    padding: 0px 5px;
}
footer .back-to-top:hover {
    background: #ffffff00!important;}
	.footer-info h6{font-family:Brandon!important; font-weight:400!important;}
  footer .back-to-top{position: relative!important; right: 0!important; bottom:0!important; border:0px!important;}
  footer .color-main {
    color: #cda45e;
}
</style>
<!-- Vendor JS Files --> 
<!--script src="<?=base_url('atithya_assets/')?>assets/js/jquery-2.2.4.min.js"></script--> 
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>


<!-- Template Main JS File --> 
<script src="<?=base_url('atithya_assets/')?>assets/js/main.js"></script> 
<script src="<?=base_url('atithya_assets/assets/js/myscript.js')?>"></script> 
<script type="text/javascript">    

function RemoveQty(key)
{
	if(key != "" && key > 0)
	{
	 
	$.ajax({
			type: 'POST',
			url: "<?=base_url('atithya/home/removeaddons')?>",
			data: {'arrkey':key},
			dataType: "html",
				beforeSend : function(data){
						//$("#search").text("Please Wait...");
						//$('#search').attr('disabled', 'disabled');
					},
			 	success: function(data) { 
				 $('#addTableData').html('');
				 $('#addTableData').html(data);
 
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
   /*jQuery('.datepicker').datetimepicker({
       format: 'DD-MMM-YYYY',
       autoclose: true,
       minView: 2
    });*/
     // Init Select2 - Basic Single
    jQuery(".select2-single").select2();
});
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
</script>

<script>
  window.addEventListener('load',function(){
    jQuery('body').on('mousedown','[href*="tel:"]',function(){
      gtag('event', 'conversion', {'send_to': 'AW-10876206096/XXPECPCOsdADEJD4lsIo'});
    })
  })
</script>