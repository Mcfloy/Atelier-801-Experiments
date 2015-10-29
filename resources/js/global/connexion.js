$(document).ready(function() {
	$("#button-connexion").prop("disabled", true);
	$("#button-connexion, #button-inscription").css("transition", "0.5s all");
	var login = $("#input-login");
	var password = $("#input-password");

	$("#button-connexion").click(function() {
		if ($("#input-email").length >= 1) {
			$("#modal-formulaire .modal-title").text("Formulaire de connexion");
			$("#div-inscription").remove();
			$("#button-inscription").prop("disabled", false);
			checkSubmit();
		}
		else if (login.val().length > 0) {
			if (password.val().length > 0) {
				$("#button-connexion").removeClass("btn-primary").addClass("btn-warning");
				$.ajax({
					type: "POST",
					url: "/Atelier%20801%20Experiments/connexion",
					data: {
						login: login.val(),
						password: password.val()
					},
					dataType: "json",
					success: function (msg) {
						console.log(msg);
						if (msg.Error !== undefined) {
							$("#button-connexion").removeClass("btn-warning").addClass("btn-primary");
							$("#display-error").addClass("alert alert-danger").html(msg.Error);
						} else if (msg.Success !== undefined) {
							location.reload();
						}
					},
					error: function (err) {
						console.log(err.responseText);
					}
				});
			}
			else {
				password.parent().addClass("has-error");
				password.focus();
			}
		}
		else {
			login.parent().addClass("has-error");
			login.focus();
		}
	});

	$("#button-inscription").click(function() {
		if ($("#input-email").length <= 0) {
			$("#modal-formulaire .modal-title").text("Formulaire d'inscription");
			$("#form-connexion").append('<div class="row" id="div-inscription">'
										+'<div class="col-lg-6 col-lg-offset-3">'
										+'	<div class="form-group">'
										+'		<input type="email" id="input-email" class="form-control" placeholder="Email" required/>'
										+'	</div>'
										+'	<div class="form-group">'
										+'		<label for="rules"><input type="checkbox" name="rules" required/> Ce même mot de passe est <strong class="text-danger">différent</strong> de mon compte Atelier 801.</label>'
										+'	</div>'
										+'</div>'
										+'</div>');
			$("#button-connexion").prop("disabled", false);
			$("#input-email").keyup(function() {
				if ($(this).val().length > 0) {
					$(this).parent().removeClass("has-error");
				}
				checkSubmit();
			});
			checkSubmit();
		}
		else if (login.val().length > 0) {
			if (password.val().length > 0) {
				if ($("#input-email").val().length > 0) {
					$("#button-inscription").removeClass("btn-primary").addClass("btn-warning");
					$.ajax({
						type: "POST",
						url: "controllers/global/inscription.php",
						data: {
							login: login.val(),
							password: password.val(),
							email: $("#input-email").val()
						},
						dataType: "json",
						success: function (msg) {
							console.log(msg);
							if (msg.Error !== undefined) {
								$("#button-inscription").removeClass("btn-warning").addClass("btn-primary");
								$("#display-error").addClass("alert alert-danger").html(msg.Error);
							} else if (msg.Success !== undefined) {
								location.reload();
							}
						},
						error: function (err) {
							console.log(err.responseText);
						}
					});
				}
				else {
					$("#input-email").parent().addClass("has-error");
					$("#input-email").focus();
				}
			}
			else {
				password.parent().addClass("has-error");
				password.focus();
			}
		}
		else {
			login.parent().addClass("has-error");
			login.focus();
		}
	});

	login.keyup(function() {
		if ($(this).val().length > 0) {
			$(this).parent().removeClass("has-error");
		}
		checkSubmit();
	});

	password.keyup(function() {
		if ($(this).val().length > 0) {
			$(this).parent().removeClass("has-error");
		}
		checkSubmit();
	});

	function checkSubmit() {
		if ($("#input-email").length <= 0) {
			if (login.val().length > 0 && password.val().length > 0) {
				$("#button-connexion").prop("disabled", false);
			}
			else {
				$("#button-connexion").prop("disabled", true);
			}
		}
		else {
			if (login.val().length > 0 && password.val().length > 0 && $("#input-email").val().length > 0) {
				$("#button-inscription").prop("disabled", false);
			}
			else {
				$("#button-inscription").prop("disabled", true);
			}
		}
	}
});