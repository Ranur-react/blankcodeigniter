@section(content)
<div class="box box-default">
	<div class="box-header with-border">
		<h3 class="box-title"><?= $header ?></h3>
	</div>
	<div class="box-body">
		<div class="content">
			<?php include($conntent) ?>
		</div>
	</div>
</div>
<div id="views-modal"></div>
@endsection
