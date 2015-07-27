<ul class="breadcrumb">
	<li><i class="fa fa-home"></i> <a href="/Atelier%20801%20Experiments/">Atelier 801 Experiments</a></li>
	<li>Leaderboard</li>
	<li class="active"><?php echo $game; ?></li>
</ul>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Classement de <?php echo $game; ?></div>
			<div class="panel-body">
				<?php
					if ($game == "Transformice")
					{
						?>
							<table class="table table-striped table-hover hidden-xs">
								<thead>
									<tr>
										<th>#</th><th>Pseudo</th><th>Firsts</th><th>Fromages récupérés</th><th>Parties Jouées</th><th colspan="3">Souris sauvées (Normal / Difficile / Divin)</th><th>Bootcamp</th><th>Win rate Racing</th>
									</tr>
								</thead>
								<tbody>
									<tr><td>1</td><td>Papyjo</td><td>124 642</td><td>233 941</td><td>395 802</td><td>656 559</td><td>433 478</td><td>119 437</td><td>3 319</td></tr>
									<tr><td>2</td><td>Fajardos</td><td>111 764</td><td>227 399</td><td>383 385</td><td>554 610</td><td>393 140</td><td>72 773</td><td>1 718</td></tr>
									<tr><td>3</td><td>Eddiesti</td><td>88 929</td><td>235 772</td><td>407 841</td><td>580 125</td><td>380 181</td><td>88 514</td><td>10 375</td></tr>
									<tr><td>4</td><td>Raqped</td><td>106 821</td><td>181 503</td><td>380 255</td><td>545 591</td><td>266 866</td><td>174 929</td><td>3 386</td></tr>
									<tr><td>5</td><td>Almocara</td><td>108 277</td><td>192 625</td><td>360 087</td><td>547 887</td><td>312 236</td><td>103 851</td><td>1 839</td></tr>
								</tbody>
							</table>

							<table class="table table-striped table-hover visible-xs">
								<thead>
									<tr>
										<th>#</th><th>Pseudo</th>
									</tr>
								</thead>
								<tbody>
									<tr><td>1</td><td>Papyjo</td></tr>
									<tr><td>2</td><td>Fajardos</td></tr>
									<tr><td>3</td><td>Eddiesti</td></tr>
									<tr><td>4</td><td>Raqped</td></tr>
									<tr><td>5</td><td>Almocara</td></tr>
								</tbody>
							</table>
						<?php
					}
					else if ($game == "Bouboum")
					{
						?>
							<table class="table table-striped table-hover hidden-xs">
								<thead>
									<tr>
										<th>#</th><th>Pseudo</th><th>Niveau classé</th><th>Parties gagnées</th><th>Tours gagnés</th><th>Parties jouées</th><th>Ratio J/M</th>
									</tr>
								</thead>
								<tbody>
									<tr><td>1</td><td>Sfull</td><td>2119</td><td>1302</td><td>1029</td><td>2453</td><td>2.98</td></tr>
									<tr><td>2</td><td>Cyndakil</td><td>1838</td><td>1199</td><td>991</td><td>2948</td><td>2.23</td></tr>
									<tr><td>3</td><td>Welkeen</td><td>2017</td><td>1083</td><td>813</td><td>2381</td><td>1.83</td></tr>
									<tr><td>4</td><td>Hoykey</td><td>1791</td><td>1032</td><td>635</td><td>1290</td><td>1.32</td></tr>
									<tr><td>5</td><td>Welklen</td><td>1768</td><td>1026</td><td>487</td><td>3203</td><td>1.02</td></tr>
								</tbody>
							</table>

							<table class="table table-striped table-hover visible-xs">
								<thead>
									<tr>
										<th>#</th><th>Pseudo</th>
									</tr>
								</thead>
								<tbody>
									<tr><td>1</td><td>Sfull</td></tr>
									<tr><td>2</td><td>Cyndakil</td></tr>
									<tr><td>3</td><td>Welkeen</td></tr>
									<tr><td>4</td><td>Hoykoy</td></tr>
									<tr><td>5</td><td>Welklen</td></tr>
								</tbody>
							</table>
						<?php
					}
					else if ($game == "Fortoresse")
					{
						?>
							<table class="table table-striped table-hover hidden-xs">
								<thead>
									<tr>
										<th>#</th><th>Pseudo</th><th>Parties gagnées</th><th>Parties jouées</th><th>Ratio J/M</th><th>Zones capturées</th><th>VIP assassinés</th><th>PV soignés</th><th>Dégâts infligés</th>
									</tr>
								</thead>
								<tbody>
									<tr><td>1</td><td>Sfull</td><td>1302</td><td>1029</td><td>2.98</td><td>30</td><td>123</td><td>30 932</td><td>76 192</td></tr>
									<tr><td>2</td><td>Cyndakil</td><td>1199</td><td>991</td><td>2.23</td><td>30</td><td>123</td><td>30 932</td><td>76 192</td></tr>
									<tr><td>3</td><td>Welkeen</td><td>1083</td><td>813</td><td>1.83</td><td>30</td><td>123</td><td>30 932</td><td>76 192</td></tr>
									<tr><td>4</td><td>Hoykey</td><td>1032</td><td>635</td><td>1.32</td><td>30</td><td>123</td><td>30 932</td><td>76 192</td></tr>
									<tr><td>5</td><td>Welklen</td><td>1026</td><td>487</td><td>1.02</td><td>30</td><td>123</td><td>30 932</td><td>76 192</td></tr>
								</tbody>
							</table>

							<table class="table table-striped table-hover visible-xs">
								<thead>
									<tr>
										<th>#</th><th>Pseudo</th>
									</tr>
								</thead>
								<tbody>
									<tr><td>1</td><td>Sfull</td></tr>
									<tr><td>2</td><td>Cyndakil</td></tr>
									<tr><td>3</td><td>Welkeen</td></tr>
									<tr><td>4</td><td>Hoykoy</td></tr>
									<tr><td>5</td><td>Welklen</td></tr>
								</tbody>
							</table>
						<?php
					}
					else if ($game == "Nekodancer")
					{
						?>
							<table class="table table-striped table-hover hidden-xs">
								<thead>
									<tr>
										<th>#</th><th>Pseudo</th><th>Parties finies (+98%)</th><th>Parties finies</th><th>Parties jouées</th><th>Podium</th>
									</tr>
								</thead>
								<tbody>
									<tr><td>1</td><td>Sfull</td><td>1302</td><td>1029</td><td>30 932</td><td>76 192</td></tr>
									<tr><td>2</td><td>Cyndakil</td><td>1199</td><td>991</td><td>30 932</td><td>76 192</td></tr>
									<tr><td>3</td><td>Welkeen</td><td>1083</td><td>813</td><td>30 932</td><td>76 192</td></tr>
									<tr><td>4</td><td>Hoykey</td><td>1032</td><td>635</td><td>30 932</td><td>76 192</td></tr>
									<tr><td>5</td><td>Welklen</td><td>1026</td><td>487</td><td>30 932</td><td>76 192</td></tr>
								</tbody>
							</table>

							<table class="table table-striped table-hover visible-xs">
								<thead>
									<tr>
										<th>#</th><th>Pseudo</th>
									</tr>
								</thead>
								<tbody>
									<tr><td>1</td><td>Sfull</td></tr>
									<tr><td>2</td><td>Cyndakil</td></tr>
									<tr><td>3</td><td>Welkeen</td></tr>
									<tr><td>4</td><td>Hoykoy</td></tr>
									<tr><td>5</td><td>Welklen</td></tr>
								</tbody>
							</table>
						<?php
					}
					else
					{
						echo "Nom de jeu incorrect.";
					}
				?>
				<div class="text-center">
					<ul class="pagination" style="margin: 0;">
						<li class="disabled"><a href="#">«</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">»</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>