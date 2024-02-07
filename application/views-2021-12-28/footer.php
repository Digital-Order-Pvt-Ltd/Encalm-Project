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
    <div class="row">
      <div class="col-md-6">
        <div class="copyright"> &copy; Copyright <strong><span>Encalm Hospitality Pvt. Ltd.</span></strong> All Rights Reserved </div>
      </div>
      <div class="col-md-6 text-white txt-rgt">
          
            Follow Us : <a class="text-white" href="https://www.linkedin.com/company/encalm/" class="linkedin" style="font-size:20px;" target="_blank"><i class="fab fa-linkedin-in"></i></a> | <a class="text-white" href="#" class="linkedin" style="font-size:20px;" target="_blank"><i class="fab fa-facebook-f"></i></a> | <a class="text-white" href="#" class="linkedin" style="font-size:20px;" target="_blank"><i class="fab fa-twitter"></i></a> 
          
      </div>
    </div>
  </div>
</footer>
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
      <td style="text-align: inherit; padding:10px"><i class="fa fa-refresh  fa-spin fa-5x fa-fw" style="margin-top:10px; color:black"></i> <br />
        <br />
        <b style="font-family:Arial, Verdana; font-size:15px;"> Please wait..</b></td>
    </tr>
  </table>
</div>
<!-----------------------Please Wait Close---------------------------> 

<!-- Vendor JS Files --> 
<!--script src="<?=base_url()?>assets/js/jquery-2.2.4.min.js"></script--> 
<script src="<?=base_url()?>assets/vendor/jquery-ui/jquery-ui.min.js"></script> 
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>


<!-- Template Main JS File --> 
<script src="<?=base_url()?>assets/js/main.js"></script> 
<script src="<?=base_url('assets/js/myscript.js')?>"></script> 
<script type="text/javascript">    

function RemoveQty(key)
{
	if(key != "" && key > 0)
	{
	 
	$.ajax({
			type: 'POST',
			url: "<?=base_url('home/removeaddons')?>",
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
   jQuery('.datepicker').datetimepicker({
       format: 'DD-MMM-YYYY',
       autoclose: true,
       minView: 2
    });
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

