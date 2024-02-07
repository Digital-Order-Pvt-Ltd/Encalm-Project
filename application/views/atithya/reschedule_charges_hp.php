<!-- <a href="javascript:void(0)" class="reschargesBtn btn-primary" id="reschargesBtn" onclick="openCharges()" data-toggle="modal">Reschedule Service</a> -->
<!-- The Modal -->
<div class="modal fade" id="rescheduleModal" tabindex="-1" role="dialog" aria-labelledby="rescheduleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="rescheduleModalLabel">Rescheduling Charges </h4>
        <button type="button" class="closeCharges" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>    
      <center><h4 id="prod_name_pop" ></h4>  </center>
      <div class="modal-body">

      </div>
      
      <div class="modal-footer">
        <a href="#" class="btn btn-warning" onclick="ProceedReschedule()">Proceed</a>
        <button type="button" class="btn btn-secondary closeCharges" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>

    //INT-ARR
    //DOM-DEP
    //DOM-ARR
function openCharges() {
  debugger;
  var productType = "<?php echo $_SESSION['prd'];?>";
  alert(productType);
  var serviceTime = "<?php echo $_SESSION['serviceTime'] ?>";
  var serviceTime = "<?php echo $_SESSION['final_amount_resheduling'];?>";
  showRescheduleCharges(productType,serviceTime);
}

function showRescheduleCharges(productType,serviceTime,amount) {
  console.log("serviceTime", serviceTime);

  var splitValues = productType.split(' ');
  var productName = splitValues[0].toLowerCase();
  $('#prod_name_pop').html('Product: ' + splitValues[0] + ' ' + splitValues[1]);

  // var dateParts = serviceTime.split('T')[0].split('-');
  // var timeParts = serviceTime.split('T')[1].split(':');
  // var serviceTimed = new Date(dateParts[2], dateParts[1] - 1, dateParts[0], timeParts[0], timeParts[1], timeParts[2]);

  // console.log("serviceTimed", serviceTimed);

  // Convert Date object to timestamp (milliseconds since January 1, 1970)
 // var timestamp = serviceTimed.getTime() / 1000; // convert to seconds
  //var hours = (timestamp - Math.floor(Date.now() / 1000)) / 3600;

  //Session and Booking based time
  var timestamp = "<?php echo $_SESSION['serviceTime'] ?>";
  var hours = (timestamp - Math.floor(Date.now() / 1000)) / 3600;
  
  $('#rescheduleModal').modal('show');
  if (splitValues[1] === '(DOM-ARR)') {
  $.ajax({
    url: '<?=base_url('atithya/home/getRescheduleCharges/')?>' + productName,
    type: 'POST',
    data: {
      'sale_id': "<?=$_SESSION['reschedule_booking_id'];?>",
      'service_time': timestamp,
      'hours': hours,
      'amount': "<?=$_SESSION['amount_for_reschedule'];?>"
    },
    dataType: "html",
    success: function (response) {
      // Update modal body with rescheduling charges
      $('#rescheduleModal .modal-body').html(response);
    },
    error: function () {
      alert('Error fetching rescheduling charges.');
    }
  });
}
else{
    $('#rescheduleModal .modal-body').html("<h5>Under Development, currently supports: DOM-ARR</h5>");
}
}
$(document).ready(function () {
  // Use jQuery to close the modal when the button is clicked
  $(".closeCharges").on("click", function () {
    $("#rescheduleModal").modal("hide");
  });
});
function ConfirmReschedule() {
  var userConfirmed = window.confirm("Are you sure you want to reschedule?");
  
  // Log the confirmation status for debugging
  console.log("User Confirmed: ", userConfirmed);

  if (userConfirmed) {
    var sess_path = "<?php echo isset($_SESSION['path_url']) ? $_SESSION['path_url'] : ''; ?>";
    
    if (sess_path) {
    //   var encodedPath = encodeURIComponent(sess_path);
      var final_url = '';
      final_url = sess_path.replace("/index/", "/index1/");
      var rescheduleUrl = "https://testwd.encalm.com"+final_url+'/'+"<?php echo $obid; ?>";
      window.location.href = rescheduleUrl;
    } else {
      alert("You are not logged in");
      return false;
    }
  } else {
    alert('Reschedule canceled by the user.');
  }
}

function ProceedReschedule() {
  var userConfirmed = window.confirm("Are you sure you want to reschedule with the charges?");
  
  // Log the confirmation status for debugging
  console.log("User Confirmed: ", userConfirmed);

  if (userConfirmed) {
    $("#rescheduleModal").modal("hide");
    alert("Provision is in Process!");
    PleaseWaitShow();
    $("form#arrivalForm").submit(); 
	 return true;
    

  } else {
    alert('Reschedule canceled by the user.');
  }
}





</script>
