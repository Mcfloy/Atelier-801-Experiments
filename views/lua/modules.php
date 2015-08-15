<ul class="breadcrumb">
	<li><i class="fa fa-home"></i> <a href="/Atelier%20801%20Experiments/">Atelier 801 Experiments</a></li>
	<li class="active">Liste des modules Lua</li>
</ul>

<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				Lorem ipsum
				<button class="pull-right btn btn-primary btn-xs btn-code" data-id="1">Voir le code</button>
			</div>
			<div class="panel-body">
				Basic panel
			</div>
			<div class="panel-footer text-right">
				<strong>Mcfloy</strong>, 2823 <span class="text-danger"><i class="fa fa-heart"></i></span>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				Lorem ipsum
				<button class="pull-right btn btn-primary btn-xs btn-code" data-id="2">Voir le code</button>
			</div>
			<div class="panel-body">
				Basic panel
			</div>
			<div class="panel-footer text-right">
				<strong>Tigrounette</strong>, 5 <span class="text-danger"><i class="fa fa-heart"></i></span>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				Lorem ipsum
				<button class="pull-right btn btn-primary btn-xs btn-code" data-id="3">Voir le code</button>
			</div>
			<div class="panel-body">
				Basic panel
			</div>
			<div class="panel-footer text-right">
				<strong>Pikashu</strong>, 32 <span class="text-danger"><i class="fa fa-heart"></i></span>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 text-center">
		<ul class="pagination">
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

<div class="row">
	<div class="col-lg-12">
		<div class="well">
			<form class="form-horizontal" id="form-module">
				<fieldset>
					<legend>Ajouter un module Lua</legend>
					<div class="form-group">
						<label for="form-module-name" class="col-lg-2 control-label">Nom du module</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="form-module-name" name="form-module-name" placeholder="Nom du module" required/>
						</div>
					</div>
					<div class="form-group">
						<label for="form-module-description" class="col-lg-2 control-label">Description</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="form-module-description" name="form-module-description" placeholder="Description" required/>
						</div>
					</div>
					<div class="form-group">
						<label for="form-module-code" class="col-lg-2 control-label">Code</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="3" id="form-module-code" name="form-module-code"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-3 col-lg-offset-9">
							<button type="submit" class="btn btn-block btn-success" disabled>Enregistrer le module</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(".btn-code").click(function() {
		window.location.href = "/Atelier%20801%20Experiments/code-lua/" + $(this).data('id');
	});
</script>