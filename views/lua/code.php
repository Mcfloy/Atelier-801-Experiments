<ul class="breadcrumb">
	<li><i class="material-icons md-18">home</i> <a href="/">Atelier 801 Experiments</a></li>
	<li><a href="/modules-lua">Liste des modules Lua</a></li>
	<li class="active"><?php echo $luaCode->getName(); ?></li>
</ul>

<div id="display-alert"></div>

<div class="row">
	<div class="col-lg-9 col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading clearfix"><?php echo $luaCode->getName(); ?>
			<span class="text-muted">développé par</span> 
			<a href="/modules-lua/author/<?php echo $luaCode->getAuthor(); ?>"><?php echo $luaCode->getAuthor(); ?></a>
				<div class="pull-right">
					<span class="label label-info">V<?php echo $luaCode->getVersion(); ?></span>
					<?php echo $luaCode->getStatus(); ?>
					<button type="button" class="btn btn-xs btn-primary btn-copy padding-1-5" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Copier dans le presse-papier"><i class="material-icons md-12">content_paste</i></button>
					<?php
						if (isset($_SESSION['member']))
						{
							echo '<button type="button" class="btn btn-xs btn-danger padding-1-5" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="J\'aime ce module"><i class="material-icons md-12">favorite</i></button>
							<button type="button" class="btn btn-xs btn-warning padding-1-5" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Signaler un problème"><i class="material-icons md-12">report_problem</i></button>';
							if ($_SESSION['member']->getLogin() == $luaCode->getAuthor() || $_SESSION['member']->getGrade() >= 5)
								echo '<button type="button" class="btn btn-xs btn-default padding-1-5" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Administration"><i class="material-icons md-12">settings</i></button>';
						}
					?>
				</div>
			</div>
			<div class="panel-body">
				<i><?php echo $luaCode->getDescription(); ?></i>
				<hr>
				<a class="btn btn-primary btn-block" role="button" data-toggle="collapse" href="#code" aria-expanded="false" aria-controls="code">Voir le code source</a><br>
				<div class="collapse" id="code">
					<pre>
						<code class="lua"><?php echo $luaCode->getScript(); ?></code>
					</pre>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3">
		<div class="clearfix">
			<h4 class="pull-left" style="margin:0;height:26px;line-height:26px">Avis pertinants</h4>
			<button class="pull-right btn btn-primary btn-xs">Voir les avis</button>
		</div>
		<?php
			if (($topComments = $luaCode->getTopComments()) != false)
			{
				foreach ($topComments as $comment)
				{
					echo
					"<blockquote>
						<p>" . $comment['comment'] . "</p>
						<small>" . ucfirst($comment['pseudo']) . "</small>
					</blockquote>";
				}
			}
			else
			{
				echo "<p>Pas d'avis</p>";
			}
		?>
	</div>
</div>
<div class="row" id="avis">
</div>
<style>
	pre
	{
		padding: 0 !important;
		margin: 0 !important;
		background-color: transparent; !important;
		border: none !important;
		border-radius: 0;
	}

	#display-alert
	{
		display: none;
	}
</style>
<link rel="stylesheet" type="text/css" href="/resources/css/solarized_dark.css">
<script type="text/javascript" src="/resources/js/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>


<script type="text/javascript">
	$(function () {
		$("[data-toggle='tooltip']").tooltip();
		$(".btn-copy").click(function() {
			var textArea = document.createElement("textarea");
			textArea.value = $(".lua").text();
			document.body.appendChild(textArea);
			textArea.select();
			document.execCommand('copy');				
			document.body.removeChild(textArea);
			$("#display-alert").html('<div class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Succès</strong> : Code source copié dans votre presse-papier !</div>');
			$("#display-alert").toggle("slow", function() {
				setTimeout(function(){
					$("#display-alert").toggle("slow");
					$("#display-alert").html("");
				}, 3000);
			});
		});
	});
</script>