F<?php // $allsearchdata =  json_decode(escapeJsonString($flightdata));
	//p($allsearchdata); 
	//p($flightdata);		 
	//$data = json_decode($flightdata, JSON_UNESCAPED_SLASHES);
	//p($data); exit;
	//p(json_decode($this->db->escape_like_str($flightdata)));
	//p($flightdata);
	//	exit;

	?>
<?php include 'head.php'; ?>
<?php include 'top-menu.php'; ?>
<!-- .navbar -->

<!-- End Header -->

<!-- ======= Hero Section ======= -->
<?php include 'purchase-history.php'; ?>
<!-- End Hero -->
<style>
	.terms_con {
		padding: 0;
	}

	.custom-table {
		border-collapse: separate;
		border-spacing: 0;
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
		border-bottom-left-radius: 30px;
		border-bottom-right-radius: 30px;
		overflow: hidden;
		background-color: #cda45e;
		;
	}

	.custom-table th,
	.custom-table td {
		text-align: left;
		border-bottom: 1px solid #cda45e;
	}

	.custom-table td {
		padding: 8px;
	}

	.custom-table th {
		padding: 15px;
		text-align: center;
	}

	.custom-table th:first-child,
	.custom-table td:first-child {
		border-left: 1px solid #cda45e;
	}

	.custom-table th:first-child {
		border-top-left-radius: 10px;
		background-color: #cda45e;
		;
		padding: 15px;
	}

	.custom-table th {
		padding: 0px;
	}

	.terms-notes ul li {
		color: black !important;
		font-weight: 400;
		font-size: 12px;
	}


	.img-international:hover {
		transform: scale(1.15);
		transition: transform 0.5s, opacity 0.5s;
	}

	.custom-table th:last-child,
	.custom-table td:last-child {
		border-right: 1px solid #cda45e;
	}

	.custom-table th,
	.custom-table td {
		border-right: 1px solid #cda45e;
	}

	.custom-table td {
		font-size: 12px;
		background: #fff;
	}

	.custom-table th:last-child {
		border-right: 1px solid #cda45e;
	}

	.custom-table tbody tr:first-child td {
		font-weight: bold;
		font-size: 14px;
		padding: 8px;
		text-align: center;
	}

	.custom-table tbody tr:first-child td:first-child {
		border-top-left-radius: 30px;
		font-size: 18px;
		padding-left: 25px;
		text-align: left;
	}

	.custom-table tbody tr:first-child td:first-child::before {
		content: '';
	}

	.custom-table tbody td:first-child {
		position: relative;
		padding-left: 40px;

	}

	.custom-table tbody td:first-child::before {
		content: '\2022';
		color: darkblue;
		font-size: 20px;
		position: absolute;
		left: 15px;
		top: 40%;
		transform: translateY(-50%);
	}

	.custom-table tbody td:not(:first-child) {
		position: relative;
	}

	.red-circle::before {
		content: '';
		background-color: #c9a477;
		width: 10px;
		height: 10px;
		border-radius: 50%;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	.terms-notes ul li {
		color: black !important;
		font-weight: 400;
		font-size: 12px;
	}

	.transit-box {
		background: #111a37;
		border-radius: 8px;
		width: 500px;
		/* height: 300px; */
		padding: 10px;
	}

	.product_box:hover {
		transform: scale(1.1);
	}

	.transit-box ul li {
		font-size: 16px;
		font-weight: 300 !important;
	}

	li {
		color: #fff;
		padding: 2px;
		font-weight: 600;
	}

	.section-title-services p {
		margin: 10px 0px !important;
		letter-spacing: 1.2;
		text-align: center;
		line-height: 1.6;
		font-size: 24px;
		font-weight: 700;
		font-family: Brandon !important;
	}

	.section-title {
		padding-bottom: 40px;
	}

	.section-title.padding-top {
		padding-bottom: 28px;
	}

	.section-title h2 {
		font-size: 14px;
		font-weight: 500;
		padding: 0;
		line-height: 1px;
		margin: 0 0 5px 0;
		letter-spacing: 2px;
		text-transform: uppercase;
		color: #3d3d3d;
		font-family: "Poppins", sans-serif;
	}

	.section-title h2::after {
		content: "";
		width: 120px;
		height: 1px;
		display: inline-block;
		background: rgba(255, 255, 255, 0.2);
		margin: 4px 10px;
	}

	.section-title p {
		margin: 0;
		font-size: 36px;
		font-weight: 700;
		font-family: 'Poppins', sans-serif;
		color: #cda45e;
	}

	.section-title-services p {
		margin: 0;
		font-size: 24px;
		font-weight: 700;
		font-family: 'Poppins', sans-serif;
		color: #cda45e;
	}

	.product_description p {
		color: white;
		padding: 2px;
		font-size: 16px;
		font-weight: 300 !important;
	}


	a {
		text-decoration: none
	}

	over-flow {
		overflow: scroll;
	}
</style>
<main id="main">
	<!-- ======= number Section ======= -->
	<?php include 'number.php'; ?>
	<section class="mamber-card mamber-card-checkout">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mb-4">
					<div class="row">
						<?php
						if ($this->session->userdata("s_airport_location_code") == "DEL") {
							include 'delhi.php';
						} elseif ($this->session->userdata("s_airport_location_code") == "GOX") {
							include 'goa.php';
						} elseif ($this->session->userdata("s_airport_location_code") == "HYD") {
							include 'hyderabad.php';
						}
						?>
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
									$NetAmount = 0;;
									$NetAmountTax = 0;;
									$select_product_details = !empty($this->session->userdata("s_select_product_details")) ? $this->session->userdata("s_select_product_details") : array();
									//p($select_product_details);
									$NetAmount = array_sum(array_column($select_product_details, 'pprice'));
									$NetAmountTax = array_sum(array_column($select_product_details, 'ptaxprice'));
									if (!empty($select_product_details)) {
										for ($i = 0; $i < count($select_product_details); $i++) {  ?>
											<tr>
												<td><?php echo $select_product_details[$i]['pname']; ?> (<?php echo $select_product_details[$i]['pqty']; ?>&nbsp;<?php echo $select_product_details[$i]['ptype']; ?>)
													<?php if ($select_product_details[$i]['ptype'] == 'Qty') { ?>
														&nbsp;<a class="" onclick="RemoveQty(<?php echo $i; ?>);">Remove</a>
													<?php } ?>
												</td>
												<td align="right">&#8377;<?php //echo $select_product_details[$i]['pprice']; 
																			?><?php echo $select_product_details[$i]['ptaxprice']; ?></td>
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
											<td align="right" class="bg-light">&#8377;<?= $sgst = sprintf("%.2f", (($NetAmount * 9) / 100), 2) ?> </td>
										</tr>

										<tr>
											<td class="bg-light">CGST (9%)</td>
											<td align="right" class="bg-light">&#8377;<?= $cgst = sprintf("%.2f", (($NetAmount * 9) / 100), 2) ?> </td>
										</tr>
										<tr>
											<td class="bg-light">Final Amount</td>
											<td align="right" class="bg-light">&#8377;<?php echo $sgst + $cgst + $NetAmount; ?>
											</td>
										</tr>
									<?php } else { ?>
										<tr>
											<td class="bg-light">No Selected Product</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>


					</div>

					<?PHP if (!empty($this->session->userdata("s_category")) and $this->session->userdata("s_category") == 'Lounge') { ?>

						<div class="clearfix"></div>
						<h4 class="text-primary">Additional Info</h4>
						<div class="row">

							<div class="form-group col-md-12 pb-3">
								<input type="text" id="lounge_service_time" class="form-control datepicker1" placeholder="Check in Date & Time" />
							</div>

							<div class="form-group col-md-12  ">
								<span class="caret"></span>
								<select id="lengthofstay" class="form-control d-none">
									<option value="">Select Length of Stay*</option>

									<?php if (!empty($LENGTHOFSTAY)) {
										$LENGTHOFSTAY = json_decode($LENGTHOFSTAY);
										if (!empty($LENGTHOFSTAY->datalist)) {
											foreach ($LENGTHOFSTAY->datalist as $val) {
									?>
												<option value="<?= $val->id ?>" data-code="<?= $val->name ?>"><?= $val->name ?></option>
									<?php }
										}
									} ?>
								</select>
							</div>
						</div>

					<?PHP } ?>
					<br>

					<!--a href="" id="idHref" class="btn btn-primary w-100" onclick="alert('Please select one product.'); return false; ">Proceed to Add-ons</a-->
					<input type="hidden" id="addonurl" value="" />
					<?php if (strtolower($this->session->userdata('s_category')) == 'spa') { ?>

						<?php if (!empty($this->session->userdata("s_customer_data"))) { ?>
							<form method="post" action="<?= base_url('atithya/home/checkout') ?>" onsubmit="PleaseWaitShow();" id="addonform">
								<button type="submit" id="submit" name="submit" class="btn btn-primary w-100" role="button" aria-disabled="false" id="addoncontinue">Continue >>></button>
							</form>
						<?php } else { ?>
							<a href="<?= base_url('atithya/home/confirm') ?>" class="btn btn-primary w-100" onclick="PleaseWaitShow();" id="addoncontinue">Continue >></a>
						<?php } ?>




					<?php } else { ?>
						<a class="btn btn-primary w-100" onclick="SendToAddons();">Proceed to Add-ons</a>
					<?php } ?>
				</div>

			</div>
		</div>
	</section>
	<section class="terms_con">
		<div class="container">
			<div class="section-title text-center padding-top">
				<p>Terms And Conditions</p>
			</div>
			<?php
			if ($this->session->userdata("s_category") == "Departure") { ?>
				<div class="row terms-notes pt-2">
					<p>Delhi Departure</p>
					<ul>
						<li>Buggy service is only available at Terminal 3 (subject to availability and location of the gate)</li>
						<li>Surcharge of INR 590 (AI) shall be applicable for any booking requests received within 12 hours of service time. The above shared rates are per pax and inclusive of GST @ 18%. </li>
						<li>Service charges applicable for Child (2-12 years) would be 30% discount on the price applicable for Adult Guests. Infant (0-2 years) will not be charged.
						</li>
						<li>Lounge access for 2 hours is applicable for all places where lounge is mentioned. Additional access beyond this duration will incur additional charges.</li>
						<li>The services are subject to government regulations prevailing at the time of delivery of service.</li>
						<li>The services are subject to availability.</li>
						<li>Please contact your relationship manager or reservations for any request you may have for 5 pax and above.</li>
						<li>Porter assistance upto 3 bags/guest. </li>
					</ul>
				</div>
				<div class="row terms-notes pt-2">
					<p>Hyderabad Departure</p>
					<ul>
						<li>Surcharge of INR 590 (AI) shall be applicable for any booking requests received within 12 hours of service time.</li>
						<li>The above shared rates are per pax and inclusive of GST @ 18%. </li>
						<li>All international arrival services would commence only post passengers clear custom.
						</li>
						<li>Service charges applicable for Child (2-12 years) would be 30% discount on the price applicable for Adult Guests. Infant (0-2 years) will not be charged.</li>
						<li>Lounge access for 2 hours is applicable for all places where lounge is mentioned. Additional access beyond this duration will incur additional charges.</li>
						<li>The services are subject to government regulations. Prevailing at the time of delivery of service.</li>
						<li>The services are subject to availability.</li>
						<li>Please contact your relationship manager or reservations for any request you may have for 5 pax and above. </li>
						<li>Porter assistance upto 3 bags/guest.</li>
						<li>Lounge facilities are only available at departure terminals. </li>
					</ul>
				</div>
				<div class="row terms-notes pt-2">
					<p>Goa Departure</p>
					<ul>
						<li>Surcharge of INR 590 (AI) shall be applicable for any booking requests received within 12 hours of service time..</li>
						<li>The above shared rates are per pax and inclusive of GST @ 18%. </li>
						<li>Service charges applicable for Child (2-12 years) would be 30% discount on the price applicable for Adult Guests. Infant (0-2 years) will not be charged.
						</li>
						<li>Lounge access for 2 hours is applicable for all places where lounge is mentioned. Additional access beyond this duration will incur additional charges.</li>
						<li>The services are subject to government regulations. Prevailing at the time of delivery of service..</li>
						<li>The services are subject to availability.</li>
						<li>Please contact your relationship manager or reservations for any request you may have for 5 pax and above.</li>
						<li>Porter assistance upto 3 bags/guest.</li>
						<li>Lounge facilities are only available at departure terminals.</li>
						<li>Please do not hesitate to contact me with any queries or assistance.</li>
					</ul>
				</div>
			<?php } elseif($this->session->userdata("s_category") == "Arrival") { ?>
				<div class="row terms-notes pt-2">
					<p>Delhi Arrival</p>
					<ul>
						<li>Buggy service is only available at Terminal 3 (subject to availability and location of the gate)</li>
						<li>Surcharge of INR 590 (AI) shall be applicable for any booking requests received within 12 hours of service time. The above shared rates are per pax and inclusive of GST @ 18%.</li>
						<li>Service charges applicable for Child (2-12 years) would be 30% discount on the price applicable for Adult Guests. Infant (0-2 years) will not be charged.
						</li>
						<li>Lounge access for 2 hours is applicable for all places where lounge is mentioned. Additional access beyond this duration will incur additional charges.</li>
						<li>The services are subject to government regulations prevailing at the time of delivery of service.</li>
						<li>The services are subject to availability.</li>
						<li>Please contact your relationship manager or reservations for any request you may have for 5 pax and above.</li>
						<li>Porter assistance upto 3 bags/guest. </li>
					</ul>
				</div>
				<div class="row terms-notes pt-2">
					<p>Hyderabad Arrival</p>
					<ul>
						<li>Surcharge of INR 590 (AI) shall be applicable for any booking requests received within 12 hours of service time.</li>
						<li>The above shared rates are per pax and inclusive of GST @ 18%. </li>
						<li>All international arrival services would commence only post passengers clear custom.
						</li>
						<li>Service charges applicable for Child (2-12 years) would be 30% discount on the price applicable for Adult Guests. Infant (0-2 years) will not be charged.</li>
						<li>Lounge access for 2 hours is applicable for all places where lounge is mentioned. Additional access beyond this duration will incur additional charges.</li>
						<li>The services are subject to government regulations. Prevailing at the time of delivery of service.</li>
						<li>The services are subject to availability.</li>
						<li>Please contact your relationship manager or reservations for any request you may have for 5 pax and above. </li>
						<li>Porter assistance upto 3 bags/guest.</li>
						<li>Lounge facilities are only available at departure terminals. </li>
					</ul>
				</div>
				<div class="row terms-notes pt-2">
					<p>Goa Arrival</p>
					<ul>
						<li>Surcharge of INR 590 (AI) shall be applicable for any booking requests received within 12 hours of service time.</li>
						<li>The above shared rates are per pax and inclusive of GST @ 18%. </li>
						<li>Service charges applicable for Child (2-12 years) would be 30% discount on the price applicable for Adult Guests. Infant (0-2 years) will not be charged.
						</li>
						<li>Lounge facilities are only available at departure terminals.</li>
						<li>Lounge access for 2 hours is applicable for all places where lounge is mentioned. Additional access beyond this duration will incur additional charges.</li>
						<li>The services are subject to government regulations. Prevailing at the time of delivery of service.</li>
						<li>The services are subject to availability.</li>
						<li>Please contact your relationship manager or reservations for any request you may have for 5 pax and above.</li>
						<li>Porter assistance upto 3 bags/guest.</li>
						<li>Lounge facilities are only available at departure terminals.</li>
					</ul>
				</div>
			<?php } elseif($this->session->userdata("s_category") == "Transit") { ?>
				<div class="row terms-notes pt-2">
					<p>Delhi Transit</p>
					<ul>
						<li>Buggy service is only available at Terminal 3 (subject to availability and location of the gate)</li>
						<li>Surcharge of INR 590 (AI) shall be applicable for any booking requests received within 12 hours of service time. The above shared rates are per pax and inclusive of GST @ 18% </li>
						<li>Service charges applicable for Child (2-12 years) would be 30% discount on the price applicable for Adult Guests. Infant (0-2 years) will not be charged.
						</li>
						<li>Lounge access for 2 hours is applicable for all places where lounge is mentioned. Additional access beyond this duration will incur additional charges.</li>
						<li>The services are subject to government regulations prevailing at the time of delivery of service.</li>
						<li>The services are subject to availability.</li>
						<li>Lounge on arrivals is only avaiable at Terminal 3.</li>
						<li>Please contact your relationship manager or reservations for any request you may have for 5 pax and above. </li>
						<li>Porter assistance upto 3 bags/guest. </li>
					</ul>
				</div>
				<div class="row terms-notes pt-2">
					<p>Hyderabad Transit</p>
					<ul>
						<li>Surcharge of INR 590 (AI) shall be applicable for any booking requests received within 12 hours of service time.</li>
						<li>The above shared rates are per pax and inclusive of GST @ 18%. </li>
						<li>All international arrival services would commence only post passengers clear custom.
						</li>
						<li>Service charges applicable for Child (2-12 years) would be 30% discount on the price applicable for Adult Guests. Infant (0-2 years) will not be charged.</li>
						<li>Lounge access for 2 hours is applicable for all places where lounge is mentioned. Additional access beyond this duration will incur additional charges.</li>
						<li>The services are subject to government regulations. Prevailing at the time of delivery of service.</li>
						<li>The services are subject to availability.</li>
						<li>Please contact your relationship manager or reservations for any request you may have for 5 pax and above. </li>
						<li>Porter assistance upto 3 bags/guest.</li>
						<li>Lounge facilities are only available at departure terminals. </li>
					</ul>
				</div>
				<div class="row terms-notes pt-2">
					<p>Goa Transit</p>
					<ul>
						<li>Surcharge of INR 590 (AI) shall be applicable for any booking requests received within 12 hours of service time.</li>
						<li>The above shared rates are per pax and inclusive of GST @ 18%.</li>
						<li>Service charges applicable for Child (2-12 years) would be 30% discount on the price applicable for Adult Guests. Infant (0-2 years) will not be charged.
						</li>
						<li>Lounge access for 2 hours is applicable for all places where lounge is mentioned. Additional access beyond this duration will incur additional charges.</li>
						<li>The services are subject to government regulations. Prevailing at the time of delivery of service.</li>
						<li>The services are subject to availability.</li>
						<li>Please contact your relationship manager or reservations for any request you may have for 5 pax and above.</li>
						<li>Porter assistance upto 3 bags/guest.</li>
						<li>Lounge facilities are only available at departure terminals.</li> 
					</ul>
				</div>
			<?php } ?>



		</div>
		<!--<h2>About</h2>-->

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
<?php include 'footer.php'; ?>


<script type="text/javascript">
	function SendToAddons() {
		var addonurl = $('#addonurl').val();

		var category = "<?= $this->session->userdata('s_category') ?>";
		//alert(addonurl.length);
		if (addonurl.length < 10 || addonurl == '') {
			alert("Please select one product");
			return false;
		} else {
			PleaseWaitShow();
			if (category == 'Lounge') {
				var lounge_service_time = $('#lounge_service_time').val();
				var lengthofstay_id = $('#lengthofstay  option:selected').val();
				var lengthofstay = $('#lengthofstay  option:selected').text();
				/* if(lengthofstay_id=="" || lengthofstay_id==0)
				{
					alert("please select length of stay");
					return false;
				}
				else */
				if (lounge_service_time == "" || lounge_service_time.length < 5) {
					alert("please enter Add Check In Date and Time");
					return false;
				} else {
					$.ajax({
						type: 'POST',
						url: "<?= base_url('atithya/home/updatesessionlounge') ?>",
						data: {
							'lounge_service_time': lounge_service_time,
							'lengthofstay_id': lengthofstay_id,
							'lengthofstay': lengthofstay
						},
						dataType: "json",
						success: function(data) {
							window.location.href = addonurl;
							//PleaseWaitHide();
						},
						error: function(data) {
							if (data.status == 0) {
								alert("There is no internet connection found. Please reconnect and try again!");
								return false;
							}
							if (data.status > 0) {
								alert(data.responseText);
								var OpenWindow = window.open('', '_blank', 'width=600,height=530,resizable=1');
								OpenWindow.document.write(data.responseText);
								return false;

							}
						}
					});
				}
			} else {
				window.location.href = addonurl;
				//PleaseWaitHide();
			}
		}
	}

	function showDesciption(textId) {
		var html = $('#more_desc_' + textId).html();
		var p_name = $('#pro_' + textId).html();
		$("#setProductname").html('');
		$("#setDescription").html('');
		$("#setProductname").html(p_name);
		$("#setDescription").html(html);
		$('#FlightDescp').modal('show');
	}
	/* jQuery('.morebtn').on('click', function (e) {
	    $('#FlightDescp').modal('show');
	}); */
	jQuery('.close').on('click', function(e) {
		$('#FlightDescp').modal('hide');
	});

	function redirecturl(url, product_id, product_name, product_price, service_duration, tax_price, surcharge) {

		$('#addonurl').val('');
		$('#selected_id_' + product_id).text('Please wait..');
		//$('#selected_id_'+product_id).removeAttr('onclick');	 
		$('#selected_id_' + product_id).click(false);

		$.ajax({
			type: 'POST',
			url: "<?= base_url('atithya/home/updatesession') ?>",
			data: {
				'page': 'Search',
				'redirecturl': url,
				'product_name': product_name,
				"product_id": product_id,
				"product_price": product_price,
				"service_duration": service_duration,
				"tax_price": tax_price,
				"surcharge": surcharge
			},
			dataType: "json",
			success: function(data) {
				$('.serachselectclass').text('Select');



				// $('.serachselectclass').removeClass('btn-primary_1, btn-primary');
				// $('.serachselectclass').addClass('btn-primary');
				//$('#selected_id_'+product_id).addClass('btn-primary_1').removeClass('btn-primary');


				$('#selected_id_' + product_id).text('Selected');
				const item = data;
				//alert(item.url);
				//$("#idHref").removeAttr("onclick");
				//$("#idHref").removeAttr("href");
				//$("#idHref").attr("href", item.url);
				$('#addonurl').val(item.url);
				$("#addTableData").html('');
				$("#addTableData").html(item.html);
				//window.location.href=url;

			},
			error: function(data) {
				if (data.status == 0) {
					alert("There is no internet connection found. Please reconnect and try again!");
					return false;
				}
				if (data.status > 0) {
					alert(data.responseText);
					var OpenWindow = window.open('', '_blank', 'width=600,height=530,resizable=1');
					OpenWindow.document.write(data.responseText);
					return false;

				}
			}
		});


	}

	jQuery('#myTab a').on('click', function(e) {
		e.preventDefault()
		jQuery(this).tab('show')
	});
	jQuery(function() {
		// jQuery('.datepicker1').datetimepicker({
		//     format: 'DD-MMM-YYYY',
		//     autoclose: true,
		//     minView: 2
		//  });


		jQuery('.datepicker1').datetimepicker({
			timeZone: '',

		});


		// Init Select2 - Basic Single
		jQuery(".select2-single").select2();
	});
</script>



</body>

</html>