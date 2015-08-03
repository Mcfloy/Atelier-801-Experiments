$(document).ready(function() {
	$("#deconnexion").click(function() {
		$.ajax({
			type: "GET",
			url: "controllers/global/deconnexion.php"
		}).done(function() {
			location.reload();
		});
	});
});