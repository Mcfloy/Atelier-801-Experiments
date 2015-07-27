<ul class="breadcrumb">
	<li><i class="fa fa-home"></i> <a href="/Atelier%20801%20Experiments/">Atelier 801 Experiments</a></li>
	<li class="active">Soundboard</li>
</ul>

<div class="row">
	<div class="col-lg-12">
		<ul class="nav nav-tabs">
			<li class="dropdown active">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrateurs <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="active"><a href="#tigrounette" data-toggle="tab">Tigrounette</a></li>
					<li><a href="#melibellule" data-toggle="tab">Melibellule</a></li>
					<li><a href="#sydoline" data-toggle="tab">Sydoline</a></li>
					<li><a href="#narayan" data-toggle="tab">Narayan</a></li>
					<li><a href="#pikashu" data-toggle="tab">Pikashu</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Modérateurs <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#modopops" data-toggle="tab">Modopops</a></li>
					<li><a href="#cryquinette" data-toggle="tab">Cryquinette</a></li>
					<li><a href="#aewing" data-toggle="tab">Aewing</a></li>
					<li><a href="#killerlux" data-toggle="tab">Killerlux</a></li>
				</ul>
			</li>
		</ul>
		<div class="tab-content">
		<?php
			$bool = true;
			foreach ($liste as $name => $array)
			{
				if ($bool == true)
				{
					echo '<div class="tab-pane fade active in" id=' . $name . '>';
					$bool = false;
				}
				else
				{
					echo '<div class="tab-pane fade" id=' . $name . '>';
				}
					echo "<center><h4>" . ucfirst($name) . "</h4></center>";
				?>
					<ul class="list-inline text-center">
						<?php
							$i = 0;
							foreach ($array as $id => $node)
							{
								echo "<li><a role='button' class='btn btn-sm btn-primary btn-block' onclick='" . $name , $id . ".play()'>" . $node . "</a></li>";
								if (++$i % 3 == 0)
								{
									echo "</ul><ul class='list-inline text-center'>";
								}
							}
						?>
					</ul>
				</div>
				<?php
			}
		?>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="ressources/css/soundboard.css" />
<script type="text/javascript" src="ressources/js/soundmanager2.js"></script>
<script type="text/javascript" src="ressources/js/soundboard.js"></script>