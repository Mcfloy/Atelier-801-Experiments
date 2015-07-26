<div class="row">
	<div class="col-lg-12">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tigrounette" data-toggle="tab" aria-expanded="true">Tigrounette</a></li>
			<li><a href="#melibellule" data-toggle="tab" aria-expanded="false">Melibellule</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane fade active in" id="tigrounette">
				<ul class="list-inline text-center">
					<?php
						foreach ($tigrounette as $node)
						{
							echo "<li><button class='btn btn-primary btn-block' onclick='tigrounette" . $node[0] . "'>" . $node[1] . "</button></li>";
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>