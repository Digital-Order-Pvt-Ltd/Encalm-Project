<div><table class="table-light table-responsive table-bordered">
    <tr><td><h5>Reschedule of Service</h5></td> <td id="service_slot"><h5>Between <?=$charges['service_slot'];?> to 12 hours prior to service time</h5></td></tr>
    <tr><td><h5>Charges</h5></td> <td id="charges_percentage"><h5><?php echo $charges['charges_percentage']; ?>% of the Booking Amount</h5></td></tr>
</table>
<br />
<center><h5>Rescheduling Charges : ₹ &nbsp;&nbsp;<?php 
$_SESSION['sess_charges'] = $charges['charges'];
echo round(($charges['charges']),2);?></h5></center>
</div>

