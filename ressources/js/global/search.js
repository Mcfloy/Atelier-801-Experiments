$(document).ready(function() {
	$("#formSearch button").prop("disabled", true);
	$("#formSearch button").css("transition", "0.5s all");

	$("#player").keyup(function() {
		if ($("#player").val().length <= 0) {
			$("#tribe").prop("disabled", false);
		}
		else {
			$("#tribe").prop("disabled", true);
		}
		checkSubmit();
	});

	$("#tribe").keyup(function() {
		if ($("#tribe").val().length <= 0) {
			$("#player").prop("disabled", false);
		}
		else {
			$("#player").prop("disabled", true);
		}
		checkSubmit();
	});

	function checkSubmit()
	{
		if ($("#player").val().length > 0 || $("#tribe").val().length > 0) {
			$("#formSearch button").prop("disabled", false);
		}
		else {
			$("#formSearch button").prop("disabled", true);
		}
	}

	$("#formSearch").submit(function( e ) {
		e.preventDefault();
		var player = $("#player").val(),
			tribe = $("#tribe").val();
		$("#formSearch button").removeClass("btn-primary").addClass("btn-warning");
		$("#formSearch button").prop("disabled", true);
		if (player.length > 0 && tribe.length > 0)
		{
			$("#player").val("");
			$("#tribe").val("");
		}
		else if (player.length > 0)
		{
			location.href = "/Atelier%20801%20Experiments/player/" + encodeURIComponent(player) + "/";
		}
		else if (tribe.length > 0)
		{
			location.href = "/Atelier%20801%20Experiments/tribe/" + 5536 + "/"; 
		}
		$("#formConnexion button").removeClass("btn-warning").addClass("btn-primary");
	});
});