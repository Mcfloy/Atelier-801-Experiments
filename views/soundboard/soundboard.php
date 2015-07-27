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
						$i = 0;
						foreach ($tigrounette as $node)
						{
							echo "<li><a role='button' class='btn btn-xs btn-primary btn-block' data-sound='" . $node[0] . "'>" . $node[1] . "</a></li>";
							if (++$i % 3 == 0)
							{
								echo "</ul><ul class='list-inline text-center'>";
							}
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
	.list-inline {
		display: flex;
		display: -webkit-flex;
		margin-top: 10px;
	}

	.list-inline li {
		-webkit-flex: 1;
		-ms-flex: 1;
		flex: 1;
	}

	.list-inline li a {
		overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
	}
</style>