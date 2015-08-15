<ul class="breadcrumb">
	<li><i class="fa fa-home"></i> <a href="/Atelier%20801%20Experiments/">Atelier 801 Experiments</a></li>
	<li><a href="/Atelier%20801%20Experiments/modules-lua">Liste des modules Lua</a></li>
	<li class="active">Titre du module</li>
</ul>

<div id="display-alert"></div>

<div class="row">
	<div class="col-lg-9 col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">Titre du module <span class="text-muted">développé par</span> <a href="#" class="">Mcfloy</a>
				<div class="pull-right">
					<span class="label label-info">V0.4</span>
					<span class="label label-success">Fonctionnel</span>
					<button type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="J'aime ce module."><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-xs btn-primary btn-copy" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Copier le code dans le presse-papier."><i class="fa fa-clipboard"></i></button>
					<button type="button" class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Administration"><i class="fa fa-gear"></i></button>
				</div>
			</div>
			<div class="panel-body">
				<i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</i>
				<hr>
				<a class="btn btn-primary btn-block" role="button" data-toggle="collapse" href="#code" aria-expanded="false" aria-controls="code">Voir le code source</a><br>
				<div class="collapse" id="code">
				<pre>
<code class="lua">for nom, joueur in pairs(tfm.get.room.playerList) do
  print(nom)
end

function eventChatCommand(name, message)
  print(message)
end
</code>
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
		<blockquote>
			<p>Une perle dans le codage parmi un océan de modules, ce module est un régal.</p>
			<small>Aewing</small>
		</blockquote>
		<blockquote>
			<p>Excellenticime !</p>
			<small>Pikashu</small>
		</blockquote>
		<blockquote>
			<p>C'nul ce module !</p>
			<small>Tigrounette</small>
		</blockquote>
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
</style>
<link rel="stylesheet" type="text/css" href="/Atelier%20801%20Experiments/resources/css/solarized_dark.css">
<script type="text/javascript" src="/Atelier%20801%20Experiments/resources/js/highlight.pack.js"></script>
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
			
		});
	});
</script>