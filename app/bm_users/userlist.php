		<h1 class="h3 mb-3">User List</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
						<!--			<h5 class="card-title mb-0">Empty card</h5>  -->
									
									
									
									
									
<table class="table table-striped table-hover">
<thead> <tr> <th>Name</th>  <th>Phone Number</th> 
        </tr>
      </thead>
<tbody>
<?php
foreach ($userid_ as $id) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($fullname[$id]) . '</td>';
    echo '<td>' . htmlspecialchars($mobile[$id]) . '</td>';
///    echo '<td>' . htmlspecialchars($fullname[$id]) . '</td>'; // Use 'N/A' if DOB is missing
  
	?>
	
	<td>
		<a href="?app=users&page=select&id=<?php echo $id; ?>">Select</a>
		
	</td>
	
	</tr>
	<?php
	
}

?>


</tbody>
</table>
									
									
									
									
									
									
									
									
									
								</div>
								<div class="card-body">
								</div>
							</div>
						</div>
					</div>
