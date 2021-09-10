<div class="row">
	<div class="col-6">
		<p class="lead">LOOPING ALGHORITHM OUTPUT</p>

		<div class="table-responsive">
			<table class="table">
				<tbody>

					<?php
					for ($i = 9; $i > 0; $i--) {
					?>
						<tr>
							<td style="width:50%">
								<?php
								for ($j = $i; $j > 0; $j--) {
									echo $j;
									if($j==1){
										
										for ($k=$j+1; $k <= $i ; $k++) {
											echo $k;
										}
									}
									
								}
								?>
							</td>
						</tr>
					<?php
					}
					?>

				</tbody>
			</table>
		</div>
	</div>
</div>
