<?php
//print_r($mainData);
$amoutt = $sgst + $cgst + $NetAmount; 
$_SESSION['amount_for_reschedule'] = $amoutt;

?>
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
        <a href="#" class="btn btn-warning" onclick="ConfirmReschedule()">Reschedule Now</a>
        <button type="button" class="btn btn-secondary closeCharges" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
$_SESSION['serviceTime'] = strtotime($mainData->datalist[0]->commitment_date); 
?>
  
<script>
    //INT-ARR
    //DOM-DEP
    //DOM-ARR
function openCharges() {
  var productType = "<?php echo $_SESSION['prd'];?>";
  //alert(productType);
  showRescheduleCharges(productType);
}

function showRescheduleCharges(productType) {
  var splitValues = productType.split(' ');
  var productName = splitValues[0].toLowerCase();

  $('#prod_name_pop').html('Product: ' + splitValues[0] + ' ' + splitValues[1]);

  var serviceTime = "<?php echo $_SESSION['serviceTime'] ?>";
  var hours = (serviceTime - Math.floor(Date.now() / 1000)) / 3600;

  $('#rescheduleModal').modal('show');
  if (splitValues[1] === '(DOM-ARR)') {
  $.ajax({
    url: '<?=base_url('atithya/home/getRescheduleCharges/')?>' + productName,
    type: 'POST',
    data: {
      'sale_id': <?php echo $obid; ?>,
      'service_time': serviceTime,
      'hours': hours,
      'amount': <?php echo $sgst + $cgst + $NetAmount; ?>
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
   // var sess_path = "<?php //echo isset($_SESSION['path_url']) ? $_SESSION['path_url'] : ''; ?>";
    
    // if (sess_path) {
    //   var encodedPath = encodeURIComponent(sess_path);
    //   var final_url = '';
    //   final_url = sess_path.replace("index", "index1");
      var rescheduleUrl = "<?=base_url('atithya/home/reschedule/'.$obid)?>";
      
      window.location.href = rescheduleUrl;
  } else {
    alert('Reschedule canceled by the user.');
  }
}



</script>
