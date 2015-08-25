<ul class="breadcrumb">
	<li><i class="material-icons md-18">home</i> <a href="/">Atelier 801 Experiments</a></li>
	<?php
		if ($type == "player")
		{
			echo "<li class='disabled'>Rechercher un joueur</li>";
		}
		else if ($type == "tribe")
		{
			echo "<li class='disabled'>Rechercher une tribu</li>";
		}
	?>
	<li class="active"><?php echo $search->getRequest(); ?></li>
</ul>

<div class="row">
	<div class="col-lg-12">
		<div class="alert alert-danger">
			<i class="fa fa-warning"></i> <strong>Erreur :</strong> Pas de correspondance trouvée.
		</div>
	</div>
</div>