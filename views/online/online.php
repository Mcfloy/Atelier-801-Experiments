<ul class="breadcrumb">
	<li><i class="material-icons md-18">home</i> <a href="/Atelier%20801%20Experiments/">Atelier 801 Experiments</a></li>
	<?php
		if (isset($name))
		{
			echo '	<li class="disabled">Qui est en ligne ?</li>
					<li class="active">' . $name . '</li>';
		}
		else
		{
			echo '	<li class="active">Qui est en ligne ?</li>';
		}
	?>
	
</ul>

<div class="row">
	<div class="col-lg-5 col-lg-offset-4">
		<form id="online-form">
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="material-icons md-18">face</i></span>
					<input type="text" class="form-control" placeholder="Entrez un compte Atelier 801" id="online-input"/>
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit" id="online-button">Rechercher</button>
					</span>
				</div>
			</div>
		</form>
	</div>
</div>

<?php
if (isset($name))
{
	?>
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6">
			<div class="alert alert-success">
				<i class="material-icons md-18">done</i><strong>Transformice</strong> : connecté (<img src="http://atelier801.com/img/pays/fr.png" />).
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<div class="alert alert-danger">
				<strong>Bouboum</strong> : déconnecté.
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<div class="alert alert-danger">
				<strong>Fortoresse</strong> : déconnecté.
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<div class="alert alert-danger">
				<strong>Nekodancer</strong> : déconnecté.
			</div>
		</div>
	</div>
	<?php
}
?>
<script type="text/javascript">
	$('#online-form').submit(function(e){
		e.preventDefault();
		var onlineInput = $('#online-input').val();
		if (onlineInput.length > 0)
		{
			window.location.href = "/Atelier%20801%20Experiments/online/" + onlineInput;
		}
	});
</script>