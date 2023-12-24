<table class="table table-bordered shadow">
			<thead>
				<tr>
					<th>#</th>
					<th>Author's Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$j = 0;
				foreach ($authors as $author ) {
				$j++;	
				?>
				<tr>
					<td><?=$j?></td>
					<td><?=$author['name']?></td>
					<td>
						<a href="edit-category.php?id=<?=$author['id']?>" 
						   class="btn btn-warning">
						   Edit</a>

						<a href="php/delete-category.php?id=<?=$author['id']?>" 
						   class="btn btn-danger">
					       Delete</a>
					</td>
				</tr>
			    <?php } ?>
			</tbody>
		</table>