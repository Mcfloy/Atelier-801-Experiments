<ul class="breadcrumb">
	<li><i class="fa fa-home"></i> <a href="/Atelier%20801%20Experiments/">Atelier 801 Experiments</a></li>
	<li><a href="/Atelier%20801%20Experiments/modules-lua">Liste des modules Lua</a></li>
	<li class="active">Erreur</li>
</ul>

<div class="row">
	<div class="col-lg-12">
		<div class="alert alert-danger">
			<?php
				switch ($error_id) {
					case 404:
						echo "<strong>Erreur</strong> : Ce module n'existe pas ou plus.";
						break;
					
					default:
						echo "<strong>Erreur</strong> : Erreur inconnue.";
						break;
				}
			?>
		</div>
		<button style="float:right" class="btn btn-sm" href="#" onclick="history.back();">Retourner à la page précédente</button>
	</div>
</div>