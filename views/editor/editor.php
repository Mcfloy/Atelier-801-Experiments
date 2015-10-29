<ul class="breadcrumb">
	<li><i class="material-icons md-18">home</i> <a href="/Atelier%20801%20Experiments/">Atelier 801 Experiments</a></li>
	<li class="active">Editeur de code Lua</li>	
</ul>

<div class="row">
	<div class="col-lg-12">
		<div id="editor"></div>
	</div>
</div>

<style type="text/css">
	#editor
	{
		min-width: 100px;
		height: 400px;
	}
</style>
<script type="text/javascript" src="/Atelier%20801%20Experiments/resources/js/ace.js"></script>
<script type="text/javascript" src="/Atelier%20801%20Experiments/resources/js/theme-solarized_dark.js"></script>
<script type="text/javascript" src="/Atelier%20801%20Experiments/resources/js/mode-lua.js"></script>
<script type="text/javascript" src="/Atelier%20801%20Experiments/resources/js/ext-language_tools.js"></script>
<script type="text/javascript">
	var editor = ace.edit("editor");
	editor.setTheme("ace/theme/solarized_dark");
	var LuaMode = ace.require("ace/mode/lua").Mode;
	editor.getSession().setMode(new LuaMode());
	editor.setShowPrintMargin(false);
	editor.$blockScrolling = Infinity;
	editor.setFontSize(14);
	editor.setOptions({
		enableBasicAutocompletion: true,
		enableSnippets: true,
		enableLiveAutocompletion: true
	});
	editor.setValue(<?php echo $code; ?>);
	window.onbeforeunload = saveChange;
	function saveChange()
	{
		$.ajax({
			type: 'POST',
			async: false,
			url: '/Atelier%20801%20Experiments/editor',
			data: {
				code: editor.getValue()
			},
			success: function (msg) {
				console.log(msg);
				if (msg.Error !== undefined) {
					alert("erreur");
				} else if (msg.Success !== undefined) {
					alert("ça marche");
				}
			},
			error: function (err) {
				console.log(err.responseText);
			}
		});
	}
</script>