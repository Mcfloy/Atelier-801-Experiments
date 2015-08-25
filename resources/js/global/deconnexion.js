$(document).ready(function() {
	$("#deconnexion").click(function() {
		$.ajax({
			type: "GET",
			url: "/Atelier%20801%20Experiments/controllers/global/deconnexion.php"
		}).done(function() {
			location.reload();
		});
	});
});