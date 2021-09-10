<div class="row">
	<div class="col-6">
		<p class="lead" align="center">FORM</p>

		<div class="col-12 table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Qty</th>
						<th>Product</th>
						<th>Serial #</th>
						<th>Description</th>
						<th>Subtotal</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($data as $key => $value) :
					?>
						<tr key="<?= $key ?>">
							<td><?= $value['id_pegawai']; ?></td>
							<td><?= $value['nama']; ?></td>
							<td><?= $value['email']; ?></td>
							<td>El snort testosterone trophy driving gloves handsome</td>
							<td>$64.50</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
