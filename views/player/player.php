<ul class="breadcrumb">
	<li><i class="material-icons md-18">home</i> <a href="/Atelier%20801%20Experiments/">Atelier 801 Experiments</a></li>
	<li class="active">Profil de <?php echo $player->getPseudo(); ?></li>
</ul>

<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-6">
		<div class="row-fluid">
			<div class="panel panel-primary">
				<div class="panel-heading">Données du forum</div>
				<div class="panel-body">
					<table class="table table-striped text-center">
						<tbody>
							<tr>
								<td colspan="2">
									<img src="<?php echo $player->getAvatarURL(); ?>"/>
								</td>
							</tr>
							<tr>
								<td>Id</td><td><?php echo $player->getIdA801(); ?></td>
							</tr>
							<tr>
								<td>Joueur</td><td><?php echo $player->getPseudo(); ?></td>
							</tr>
							<tr>
								<td>Messages</td><td><?php echo $player->getMessages(); ?></td>
							</tr>
							<tr>
								<td>Genre</td><td>Masculin</td>
							</tr>
							<tr>
								<td>Date d'inscription</td><td><?php echo $player->getRegisterDate(); ?></td>
							</tr>
							<tr>
								<td>Date de naissance</td><td><?php echo $player->getBirthdayDate(); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">Données du fansite</div>
				<div class="panel-body">
					<table class="table table-striped text-center">
						<tbody>
							<tr>
								<td>Script Lua proposé(s)</td><td><a href="/Atelier%20801%20Experiments/modules-lua/author/Mcfloy" class="btn btn-xs btn-link">1</a></td>
							</tr>
							<tr>
								<td>Questions résolues</td><td><a href="#" class="btn btn-xs btn-link">160</a></td>
							</tr>
							<tr>
								<td>Commentaires</td><td><a href="#" class="btn btn-xs btn-link">321</a></td>
							</tr>
							<tr>
								<td>Date d'inscription</td><td>29/05/2011</td>
							</tr>
							<tr>
								<td>Dernière connexion</td><td>08/08/2015</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-9 col-md-9 col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading clearfix">Données de Transformice <button class="pull-right btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="Prochainement">Version Graphique</button></div>
			<div class="panel-body">
				<div class="col-lg-6 col-md-6">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td colspan="2"><strong>Informations</strong></td>
							</tr>
							<tr>
								<td>Niveau</td>
								<td>
									<span class="tooltip-span text-info" data-toggle="tooltip" data-placement="left" title=""
									data-original-title="<?php echo 'Pour atteindre le niveau ' . ($player->getLevel() + 1) . ', vous devez récolter ' . $player->getRequiredExp() . ' points d\'expérience.'; ?>">
									<?php echo $player->getLevel() . " (" . $player->getExp() . " EXP)" ;?>
									</span>
								</td>
							</tr>
							<tr>
								<td>Titre en cours</td><td><?php echo $player->getCurrentTitle(); ?></td>
							</tr>
							<tr>
								<td colspan="2"><strong>Chamane</strong></td>
							</tr>
							<tr>
								<td>Souris sauvées (normal)</td><td><?php echo $player->getTFMNormalSaves(); ?></td>
							</tr>
							<tr>
								<td>Souris sauvées (difficile)</td><td><?php echo $player->getTFMHardSaves(); ?></td>
							</tr>
							<tr>
								<td>Souris sauvées (divin)</td><td><?php echo $player->getTFMDivineSaves(); ?></td>
							</tr>
							<tr>
								<td>Fromages récupérés</td><td><?php echo $player->getTFMShamanCheeses(); ?></td>
							</tr>
							<tr>
								<td colspan="2"><strong>Souris</strong></td>
							</tr>
							<tr>
								<td>Firsts</td><td><?php echo $player->getTFMFirsts(); ?></td>
							</tr>
							<tr>
								<td>Fromages récupérés</td><td><?php echo $player->getTFMCHeeses(); ?></td>
							</tr>
							<tr>
								<td>Bootcamp</td><td><?php echo $player->getTFMBootcamp(); ?></td>
							</tr>
							<tr>
								<td>Parties jouées</td><td><?php echo $player->getTFMRounds(); ?></td>
							</tr>
							<tr>
								<td colspan="2"><strong>Titres débloqués (123 au total)</strong></td>
							</tr>
							<tr>
								<td colspan="2">
									<a class="btn btn-primary btn-block btn-large" data-toggle="collapse" href="#titles" aria-expanded="false" aria-controls="titles">Voir les titres</a>
									<div class="collapse" id="titles">
										<ul>
											<li>&laquo;Souris Grise&raquo;</li>
											<li>&laquo;Disciple Chamane&raquo;</li>
											<li>&laquo;Chamane Accomplie&raquo;</li>
											<li>&laquo;Chamane&raquo;</li>
											<li>&laquo;Maîtresse Chamane&raquo;</li>
											<li>&laquo;Souris Gourmande&raquo;</li>
											<li>&laquo;Là ! Fromage !&raquo;</li>
											<li>&laquo;Owi Fromage ^^&raquo;</li>
											<li>&laquo;Fromaaaage *-*&raquo;</li>
											<li>&laquo;Souris Rapide&raquo;</li>
											<li>&laquo;Souris Agile&raquo;</li>
											<li>&laquo;Souris Pirate&raquo;</li>
											<li>&laquo;Souris Ninja&raquo;</li>
											<li>&laquo;Chamane Inspirée&raquo;</li>
											<li>&laquo;Championne Chamane&raquo;</li>
											<li>&laquo;Chamane Glorieuse&raquo;</li>
											<li>&laquo;Duchesse Chamane&raquo;</li>
											<li>&laquo;Princesse Chamane&raquo;</li>
											<li>&laquo;Impératrice Chamane&raquo;</li>
											<li>&laquo;Chamane Légendaire&raquo;</li>
											<li>&laquo;Chamane Immortelle&raquo;</li>
											<li>&laquo;Chamane Elue&raquo;</li>
											<li>&laquo;Chamane Sacrée&raquo;</li>
											<li>&laquo;Oracle Chamane&raquo;</li>
											<li>&laquo;Prophète Chamane&raquo;</li>
											<li>&laquo;Chamanifique&raquo;</li>
											<li>&laquo;Souris Gloutonne&raquo;</li>
											<li>&laquo;Grapilleuse&raquo;</li>
											<li>&laquo;Souris Dodue&raquo;</li>
											<li>&laquo;Souris Ventrue&raquo;</li>
											<li>&laquo;Souris Joufflue&raquo;</li>
											<li>&laquo;Bouboule&raquo;</li>
											<li>&laquo;Patapouffe&raquo;</li>
											<li>&laquo;La Rondouillarde&raquo;</li>
											<li>&laquo;La Boursoufflée&raquo;</li>
											<li>&laquo;Souris Militante&raquo;</li>
											<li>&laquo;Souris Syndiquée&raquo;</li>
											<li>&laquo;Souris en Grève&raquo;</li>
											<li>&laquo;Initiée du Fromage&raquo;</li>
											<li>&laquo;Ecumeuse&raquo;</li>
											<li>&laquo;La Silencieuse&raquo;</li>
											<li>&laquo;Souris Faucon&raquo;</li>
											<li>&laquo;Souris Cobra&raquo;</li>
											<li>&laquo;Spidersouris&raquo;</li>
											<li>&laquo;Vif Argent&raquo;</li>
											<li>&laquo;Souris Athlétique&raquo;</li>
											<li>&laquo;Souris Hâtive&raquo;</li>
											<li>&laquo;Le Missile&raquo;</li>
											<li>&laquo;Sonic La Souris&raquo;</li>
											<li>&laquo;Meilleur Ping&raquo;</li>
											<li>&laquo;Chercheuse De Fromage&raquo;</li>
											<li>&laquo;Chevalier Fromage&raquo;</li>
											<li>&laquo;Cheesegrubber&raquo;</li>
											<li>&laquo;Grassouillette&raquo;</li>
											<li>&laquo;Souris Robuste&raquo;</li>
											<li>&laquo;Amoureuse Du Fromage&raquo;</li>
											<li>&laquo;Camembert&raquo;</li>
											<li>&laquo;Pont-L'Evêque&raquo;</li>
											<li>&laquo;L'Attrape Fromage&raquo;</li>
											<li>&laquo;It's Over 9000&raquo;</li>
											<li>&laquo;Collectionneuse&raquo;</li>
										</ul>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-lg-6 col-md-6">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td colspan="2"><strong>Badges débloqués</strong></td>
							</tr>
							<tr>
								<td colspan="2">
									<ul class="list-inline">
										<?php
											foreach ($player->getTFMBadges() as $badge) {
												echo "<li><img src='http://transformice.com/images/x_transformice/x_badges/x_" . $badge . ".png'/></li>";
											}
										?>
									</ul>
								</td>
							</tr>
							<tr>
								<td colspan="2"><strong>Inventaire</strong></td>
							</tr>
							<tr>
								<td colspan="2">
									<ul class="list-inline" id="inventory">
										<?php
											foreach ($player->getTFMInventory() as $item) {
												echo "<li><img src='http://transformice.com/images/x_transformice/x_inventaire/" . $item[0] . ".jpg'/><span>" . $item[1] . "</span></li>";
											}
										?>
									</ul>
								</td>
							</tr>
							<tr>
								<td colspan="2"><strong>Racing</strong></td>
							</tr>
							<tr>
								<td>Firsts</td>
								<td>
									<span class="tooltip-span text-info" data-toggle="tooltip" data-placement="left" title=""
									data-original-title="<?php echo ($player->getTFMRacingFirsts() >= 10000) ? ('Vous avez obtenu le badge !') : ('Il en reste ' . (10000 - $player->getTFMRacingFirsts()) . ' pour débloquer le badge.');?>">
										<?php echo $player->getTFMRacingFirsts(); ?>
									</span>
								</td>
							</tr>
							<tr>
								<td>Podiums</td>
								<td>
									<span class="tooltip-span text-info" data-toggle="tooltip" data-placement="left" title=""
									data-original-title="<?php echo ($player->getTFMRacingPodiums() >= 10000) ? ('Vous avez obtenu le badge !') : ('Il en reste ' . (10000 - $player->getTFMRacingPodiums()) . ' pour débloquer le badge.');?>">
										<?php echo $player->getTFMRacingPodiums();?>
									</span>
								</td>
							</tr>
							<tr>
								<td>Parties finies</td>
								<td>
									<span class="tooltip-span text-info" data-toggle="tooltip" data-placement="left" title=""
									data-original-title="<?php echo ($player->getTFMRacingFinished() >= 10000) ? ('Vous avez obtenu le badge !') : ('Il en reste ' . (10000 - $player->getTFMRacingFinished()) . ' pour débloquer le badge.');?>">
										<?php echo $player->getTFMRacingFinished();?>
									</span>
								</td>
							</tr>
							<tr>
								<td>Parties jouées</td>
								<td>
									<span class="tooltip-span text-info" data-toggle="tooltip" data-placement="left" title=""
									data-original-title="<?php echo ($player->getTFMRacingPlayed() >= 1500) ? ('Vous avez obtenu le badge !') : ('Il en reste ' . (1500 - $player->getTFMRacingPlayed()) . ' pour débloquer le badge.');?>">
										<?php echo $player->getTFMRacingPlayed();?>
									</span>
								</td>
							</tr>						
							<tr>
								<td colspan="2"><strong>Survivor</strong></td>
							</tr>
							<tr>
								<td>Parties survécues</td>
								<td>
									<span class="tooltip-span text-info" data-toggle="tooltip" data-placement="left" title=""
									data-original-title="<?php echo ($player->getTFMSurvivorSurvived() >= 10000) ? ('Vous avez obtenu le badge !') : ('Il en reste ' . (10000 - $player->getTFMSurvivorSurvived()) . ' pour débloquer le badge.');?>">
										<?php echo $player->getTFMSurvivorSurvived(); ?>
									</span>
								</td>
							</tr>
							<tr>
								<td>Parties jouées</td>
								<td>
									<span class="tooltip-span text-info" data-toggle="tooltip" data-placement="left" title=""
									data-original-title="<?php echo ($player->getTFMSurvivorPlayed() >= 1000) ? ('Vous avez obtenu le badge !') : ('Il en reste ' . (1000 - $player->getTFMSurvivorPlayed()) . ' pour débloquer le badge.');?>">
										<?php echo $player->getTFMSurvivorPlayed(); ?>
									</span>
								</td>
							</tr>
							<tr>
								<td>Souris tuées</td>
								<td>
									<span class="tooltip-span text-info" data-toggle="tooltip" data-placement="left" title=""
									data-original-title="<?php echo ($player->getTFMSurvivorKilled() >= 20000) ? ('Vous avez obtenu le badge !') : ('Il en reste ' . (20000 - $player->getTFMSurvivorKilled()) . ' pour débloquer le badge.');?>">
										<?php echo $player->getTFMSurvivorKilled(); ?>
									</span>
								</td>
							</tr>
							<tr>
								<td>Nombre de fois chamane</td>
								<td>
									<span class="tooltip-span text-info" data-toggle="tooltip" data-placement="left" title=""
									data-original-title="<?php echo ($player->getTFMSurvivorShaman() >= 800) ? ('Vous avez obtenu le badge !') : ('Il en reste ' . (800 - $player->getTFMSurvivorShaman()) . ' pour débloquer le badge.');?>">
										<?php echo $player->getTFMSurvivorShaman(); ?>
									</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4">
		<div class="panel panel-primary">
			<div class="panel-heading clearfix">Données de Bouboum <button class="pull-right btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="Prochainement">Version Graphique</button></div>
			<div class="panel-body">
				<table class="table table-striped">
					<tbody>
						<tr>
							<td>Niveau partie classée</td><td><?php echo $player->getBouboumRank(); ?></td>
						</tr>
						<tr>
							<td>Nombre de parties jouées</td><td><?php echo $player->getBouboumPlayed(); ?></td>
						</tr>
						<tr>
							<td>Joueurs tués / morts</td><td><?php echo $player->getBouboumKilled() . " / " . $player->getBouboumDead() . " - " . number_format($player->getBouboumKilled() / $player->getBouboumDead(), 2, ".", " "); ?></td>
						</tr>
						<tr>
							<td>Parties gagnées</td><td><?php echo $player->getBouboumRoundsWon(); ?></td>
						</tr>
						<tr>
							<td>Tours gagnés</td><td><?php echo $player->getBouboumLapsWon(); ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4">
		<div class="panel panel-primary">
			<div class="panel-heading clearfix">Données de Fortoresse <button class="pull-right btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="Prochainement">Version Graphique</button></div>
			<div class="panel-body">
				<table class="table table-striped">
					<tbody>
						<tr>
							<td>Parties jouées</td><td><?php echo $player->getFortoPlayed();?></td>
						</tr>
						<tr>
							<td>Parties gagnées</td><td><?php echo $player->getFortoWon();?></td>
						</tr>
						<tr>
							<td>Joueurs tués</td><td><?php echo $player->getFortoKilled();?></td>
						</tr>
						<tr>
							<td>Morts</td><td><?php echo $player->getFortoDead();?></td>
						</tr>
						<tr>
							<td>Zones capturées</td><td><?php echo $player->getFortoCaptured();?></td>
						</tr>
						<tr>
							<td>VIP assassinés</td><td><?php echo $player->getFortoAssassinated();?></td>
						</tr>
						<tr>
							<td>Points de vie soignés</td><td><?php echo $player->getFortoHealed();?></td>
						</tr>
						<tr>
							<td>Dégâts explosifs infligés</td><td><?php echo $player->getFortoDamages();?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4">
		<div class="panel panel-primary">
			<div class="panel-heading clearfix">Données de Nekodancer <button class="pull-right btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="Prochainement">Version Graphique</button></div>
			<div class="panel-body">
				<table class="table table-striped">
					<tbody>
						<tr>
							<td>Parties jouées</td><td><?php echo $player->getNekoPlayed(); ?></td>
						</tr>
						<tr>
							<td>Parties finies</td><td><?php echo $player->getNekoFinished(); ?></td>
						</tr>
						<tr>
							<td>Parties finies (+98%)</td><td><?php echo $player->getNekoFinished98(); ?></td>
						</tr>
						<tr>
							<td>Podium</td><td><?php echo $player->getNekoPodiums(); ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="/Atelier%20801%20Experiments/resources/css/player.css" />
<script type="text/javascript">
	$(function () {
		$("[data-toggle='tooltip']").tooltip();
	});
</script>