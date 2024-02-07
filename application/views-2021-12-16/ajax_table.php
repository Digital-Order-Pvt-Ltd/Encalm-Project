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
				  $NetAmount=0;;
				  $select_product_details = !empty($this->session->userdata("s_select_product_details"))?$this->session->userdata("s_select_product_details"):array();
				//  p($select_product_details);
				 $NetAmount = array_sum(array_column($select_product_details,'pprice'));
				  
				  if(!empty($select_product_details)){
					  for($i=0;$i<count($select_product_details);$i++)
					  { ?>
                  <tr>
                    <td><?php echo $select_product_details[$i]['pname']; ?> (<?php echo $select_product_details[$i]['pqty']; ?>&nbsp;<?php echo $select_product_details[$i]['ptype']; ?>)
					<?php if($select_product_details[$i]['ptype']=='Qty'){?>
					&nbsp;
					<?php if(!empty($page) and $page=='Addon'){?>
					<a onclick="RemoveQty(<?php echo $i; ?>);" style="color:#cda45e;">Remove</a>
					<?php }?>
					<?php } ?>
					</td>
                    <td align="right">&#8377;<?php echo $select_product_details[$i]['pprice']; ?></td>
                  </tr>
					  <?php } ?>
				  
				  <span id="addTableData"></span>
                  <!--tr style="display:none">
                    <td><span id="addOnsName"></span></td>
                    <td align="right">&#8377;<span id="addOnsAmount"></span></td>
                  </tr-->
                  <tr>
                    <td class="bg-light">Net Amount</td>
                    <td align="right" class="bg-light">&#8377;<span id="netAmount"><?php echo $NetAmount; ?></span></td>
                  </tr>
				  <?php }?>
                </tbody>
</table>