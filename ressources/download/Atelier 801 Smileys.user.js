// ==UserScript==
// @name         Atelier 801 Smileys
// @namespace    https://github.com/Mcfloy/Atelier-801-Experiments
// @version      0.1
// @description  Great Smileys in Atelier 801 (Credits to Melibellule)
// @author       Mcfloy
// @match        http://atelier801.com/*
// @grant        none
// ==/UserScript==

(function() {
		if (document.querySelector("#outils_message_reponse") !== null) {
			var parent = document.querySelector("#outils_message_reponse > .btn-group:nth-last-child(2)");
		}
		else if (document.querySelector("#outils_message_sujet") !== null) {
			var parent = document.querySelector("#outils_message_sujet > .btn-group:nth-last-child(2)");
		}
		else if (document.querySelector("#outils_message_conversation") !== null) {
			var parent = document.querySelector("#outils_message_conversation > .btn-group:nth-last-child(2)");
		}
		else if (document.querySelector("#outils_presentation") !== null) {
			var parent = document.querySelector("#outils_message_conversation > .btn-group:nth-last-child(2)");
		}
		if (parent !== undefined && parent !== null) {
			var node = document.createElement("div");
			node.className = "btn-group groupe-boutons-barre-outils";
			node.innerHTML = "<button type='button' class='btn btn-reduit' title='Smiley'><img src='http://i.imgur.com/EQaZwCU.png'/></button><button class='btn btn-reduit dropdown-toggle' data-toggle='dropdown'> <span class='caret'></span> </button><ul class='dropdown-menu pull-right label-message'><table style='min-width:300px'><tbody><tr><td class='cellule-dropdown'><li><a class='element-menu-outils' onclick='ajouterBBCode(\"message_reponse\", \"[img]http://i.imgur.com/47l48.png[/img]\", \"\", 39);'><img src='http://i.imgur.com/47l48.png'/></a></li></td>\<td class='cellule-dropdown'><li><a class='element-menu-outils' onclick='ajouterBBCode(\"message_reponse\", \"[img]http://i.imgur.com/51Mta.png[/img]\", \"\", 39);'><img src='http://i.imgur.com/51Mta.png'/></a></li></td><td class='cellule-dropdown'><li><a class='element-menu-outils' onclick='ajouterBBCode(\"message_reponse\", \"[img]http://i.imgur.com/Wbts1.png[/img]\", \"\", 39);'><img src='http://i.imgur.com/Wbts1.png'/></a></li></td><td class='cellule-dropdown'><li><a class='element-menu-outils' onclick='ajouterBBCode(\"message_reponse\", \"[img]http://i.imgur.com/oDd6Y.png[/img]\", \"\", 39);'><img src='http://i.imgur.com/oDd6Y.png'/></a></li></td><td class='cellule-dropdown'><li><a class='element-menu-outils' onclick='ajouterBBCode(\"message_reponse\", \"[img]http://i.imgur.com/so4ja.png[/img]\", \"\", 39);'><img src='http://i.imgur.com/so4ja.png'/></a></li></td></tr><tr><td class='cellule-dropdown'><a class='element-menu-outils' onclick='ajouterBBCode(\"message_reponse\", \"[img]http://i.imgur.com/20DUU.png[/img]\", \"\", 39);'><img src='http://i.imgur.com/20DUU.png'/></a></td><td class='cellule-dropdown'><a class='element-menu-outils' onclick='ajouterBBCode(\"message_reponse\", \"[img]http://i.imgur.com/lliSm.png[/img]\", \"\", 39);'><img src='http://i.imgur.com/lliSm.png'/></a></td><td class='cellule-dropdown'><a class='element-menu-outils' onclick='ajouterBBCode(\"message_reponse\", \"[img]http://i.imgur.com/6z7vx.png[/img]\", \"\", 39);'><img src='http://i.imgur.com/6z7vx.png'/></a></td><td class='cellule-dropdown'><a class='element-menu-outils' onclick='ajouterBBCode(\"message_reponse\", \"[img]http://i.imgur.com/dUgHq.png[/img]\", \"\", 39);'><img src='http://i.imgur.com/dUgHq.png'/></a></td><td class='cellule-dropdown'><a class='element-menu-outils' onclick='ajouterBBCode(\"message_reponse\", \"[img]http://i.imgur.com/7TTSk.png[/img]\", \"\", 39);'><img src='http://i.imgur.com/7TTSk.png'/></a></td>\</tr></tbody></table></ul>";
	    	parent.parentNode.insertBefore(node, parent.nextSibling);
	    }
})();