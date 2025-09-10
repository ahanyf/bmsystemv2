

<table class="table table-striped">
									<thead>
										<tr>
											<th style="width:9%;">Qty</th>
											<th style="width:80%">Item Name / Code</th>
											
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
									
									<?php
									
									if(!empty($di_id_[$id])){
									foreach ($di_id_[$id] as $key => $d_item_id) {
										
									
									?>	
										
										
										
										<tr>
											<td><?php echo $di_item_qty[$d_item_id ]; ?></td>
											<td><?php echo $di_item_name[$d_item_id ]; ?></td>
											
											<td class="table-action">
												<i class="align-middle" data-feather="edit-2" data-bs-toggle="modal" data-bs-target="#m-did-id<?php echo $d_item_id; ?>"  ></i>
												<i class="align-middle" data-feather="trash"  data-feather="edit-2" data-bs-toggle="modal" data-bs-target="#m-did_delete-id<?php echo $d_item_id; ?>"  ></i>
											</td>
										</tr>
										
									<?php
									}
									}
									?>


							</tbody>
							

</table>