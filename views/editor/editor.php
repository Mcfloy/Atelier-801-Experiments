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
<?php
$code = "system.disableChatCommandDisplay('load_music', yes)
system.disableChatCommandDisplay('load_video', yes)

function eventChatCommand(player, message)
	if message:sub(0, 10) == 'load_music' and message:len() >= 12 then
		tfm.exec.loadMusic(message:sub(12))
	elseif message:sub(0, 10) == 'load_video' and message:len() >= 12 then
	   	tfm.exec.loadVideo(message:sub(12))
	end
end

--[[
    function tfm.exec.loadMusic(String url)
    • Must be a .mp3 direct link. Returns false if the link doesn't exist or is corrupted.
    --------------------------------------------------------------------------------
    function tfm.exec.loadVideo(String url)
    • Must a Youtube Url. Returns false if there no player on the map.
--]];";

echo json_encode($code);
?>
<script type="text/javascript" src="/resources/js/ace.js"></script>
<script type="text/javascript" src="/resources/js/theme-solarized_dark.js"></script>
<script type="text/javascript" src="/resources/js/mode-lua.js"></script>
<script type="text/javascript">
	var editor = ace.edit("editor");
	editor.setTheme("ace/theme/solarized_dark");
	var LuaMode = ace.require("ace/mode/lua").Mode;
	editor.getSession().setMode(new LuaMode());
	editor.setShowPrintMargin(false);
	editor.setFontSize(13);
</script>