// ==UserScript==
// @name         Atelier 801 Smileys
// @namespace    https://github.com/Mcfloy/Atelier-801-Experiments
// @version      1.0
// @description  Great Smileys in Atelier 801 (Credits to Fxie & Melibellule)
// @author       Mcfloy
// @match        http://atelier801.com/*
// @grant GM_setValue
// @grant GM_getValue
// ==/UserScript==
// jshint esnext: true

(function() {
    'use strict';
    function catAlreadyExist(array, value) {
        for (let node of array) {
            if (node.title === value) {
                return true;
            }
        }
        return false;
    }

    if (GM_getValue("smileys") === undefined || JSON.parse(GM_getValue("smileys")).length === 0) {
        let tmpSmileys = [{
            title: "Transformice",
            liste: ["37a4f143.png", "3724f143.png", "36a4f143.png", "3624f143.png", "35a4f143.png", "3524f143.png", "34a4f143.png", "3424f143.png", "cba4f143.png", "cb24f143.png"]
        },{
            title: "Melibellule",
            liste: ["0224f17c.png", "b9a4f17d.png", "01a4f17c.png", "0124f17c.png", "00a4f17c.png", "0024f17c.png", "07a4f17c.png", "0724f17c.png", "06a4f17c.png", "0524f17c.png", "04a4f17c.png"]
        }, {
            title: "Fxie",
            liste: ["9e24f17d.png", "9da4f17d.png", "9d24f17d.png", "9ca4f17d.png", "9c24f17d.png", "93a4f17d.png", "9324f17d.png", "92a4f17d.png", "9224f17d.png", "91a4f17d.png",
                    "9124f17d.png", "9024f17d.png", "97a4f17d.png", "9724f17d.png", "96a4f17d.png", "95a4f17d.png", "9524f17d.png", "9424f17d.png", "ab24f17d.png", "aaa4f17d.png",
                    "aa24f17d.png", "a924f17d.png", "a8a4f17d.png", "a824f17d.png", "afa4f17d.png", "af24f17d.png", "ada4f17d.png", "ad24f17d.png", "ac24f17d.png", "a324f17d.png",
                    "a224f17d.png", "a1a4f17d.png", "a124f17d.png", "baa4f17d.png"]
        }];
        GM_setValue("smileys", JSON.stringify(tmpSmileys));
    }

    var indexSmileys = 0;

    var smileys = JSON.parse(GM_getValue("smileys"));
    var addModuleSmileys = function (referenceNode, messageBloc) {
        indexSmileys++;
        let tempNode = document.createElement("div");
        tempNode.classList.add("control-group");
        tempNode.style.margin = "0px 0px 10px 0px";
        tempNode.style.overflowY = "auto";
        tempNode.style.maxHeight = "150px";

        let smileysNode = document.createElement("div");
        smileysNode.classList.add("Smileys", "controls", "ltr");
        smileysNode.setAttribute("data-index", indexSmileys);
        smileysNode.style.display = "none";
        smileysNode.style.padding = "0 10px 0 10px";

        let labelNode = document.createElement("label");
        labelNode.classList.add("control-label");
        let buttonNode1 = document.createElement("button"),
            buttonNode2 = document.createElement("button");
        buttonNode1.classList.add("btn", "btn-info");
        buttonNode1.setAttribute('id', 'addCategorie');
        buttonNode1.style.display = "none";
        buttonNode1.setAttribute('data-index', indexSmileys);
        buttonNode1.style.margin = "0 5px 0 0";
        buttonNode1.innerText = "+";
        buttonNode1.type = "button";
        buttonNode1.addEventListener('click', function () {
            let canAdd = true;
            for (let cat of smileys) {
                if (cat.title === "Catégorie")
                    canAdd = false;
            }
            if (canAdd)
            {
                smileys.push({title: "Catégorie", liste: []});
                afficherSmileys(smileysNode, messageBloc, this.dataset.index);
                GM_setValue("smileys", JSON.stringify(smileys));
            }
        }, false);
        buttonNode2.classList.add("btn", "btn-info");
        buttonNode2.innerText = "Smileys";
        buttonNode2.type = "button";
        buttonNode2.setAttribute('data-index', indexSmileys);
        buttonNode2.addEventListener('click', function () {
            $(`.Smileys[data-index="${this.dataset.index}"`).slideToggle();
            $(this).prev().fadeToggle();
        }, false);

        labelNode.appendChild(buttonNode1);
        labelNode.appendChild(buttonNode2);


        tempNode.appendChild(labelNode);
        tempNode.appendChild(smileysNode);
        referenceNode.parentNode.insertBefore(tempNode, referenceNode.nextSibling);
        return smileysNode;
    };
    var afficherSmileys = function (smileysNode, messageBloc, index) {
        smileysNode.innerText = "";
        for (let categorie of smileys) {
            let divTitle = document.createElement("div"),
                title = document.createElement("h5"),
                remove = document.createElement("a");
            remove.innerText = "✘";
            remove.setAttribute('data-categorie', categorie.title);
            remove.setAttribute('data-index', index);
            remove.style.cursor = "pointer";
            remove.style.margin = "0 5px 0 0";
            remove.addEventListener('click', function () {
                removeCategorieSmileys(this.getAttribute('data-categorie'), this.dataset.index);
            });
            title.innerText = categorie.title;
            title.style.margin = "10px 0 0 0";
            title.setAttribute('contentEditable', true);
            title.addEventListener("keyup", function () {
                if (this.innerText.length > 0 && !catAlreadyExist(smileys, this.innerText)) {
                    for (let i in smileys) {
                        if (smileys[i].title === categorie.title) {
                            smileys[i].title = this.innerText;
                        }
                    }
                    GM_setValue("smileys", JSON.stringify(smileys));
                }
            }, false);
            title.style.display = "inline-block";
            divTitle.appendChild(remove);
            divTitle.appendChild(title);
            smileysNode.appendChild(divTitle);
            for (let i of categorie.liste) {
                let divImage = document.createElement("div"),
                    crossImage = document.createElement("a");
                divImage.style.position = "relative";
                divImage.style.display = "inline-block";
                divImage.style.verticalAlign = "top";
                divImage.style.margin = "0 8px 0 0";
                crossImage.innerHTML = "✘";
                crossImage.setAttribute('id', `${categorie.title}-${i}`);
                crossImage.setAttribute('data-categorie', categorie.title);
                crossImage.setAttribute('data-image', i);
                crossImage.style.fontSize = "9px";
                crossImage.style.position = "absolute";
                crossImage.style.zIndex = "42";
                crossImage.style.color = "#fff";
                crossImage.style.right = "0";
                crossImage.style.backgroundColor = "#212121";
                crossImage.style.top = "0";
                crossImage.addEventListener('click', function () {
                    let cat = this.getAttribute('data-categorie'),
                        imageToDelete = this.getAttribute('data-image');
                    for (let key in smileys) {
                        if (smileys[key].title === cat) {
                            this.parentNode.parentNode.removeChild(this.parentNode);
                            (smileys[key].liste).splice($.inArray(imageToDelete, smileys[key].liste), 1);
                        }
                    }
                    GM_setValue("smileys", JSON.stringify(smileys));
                }, false);
                divImage.appendChild(crossImage);
                let image = document.createElement("img");
                image.src = `http://img.atelier801.com/${i}`;
                image.style.maxHeight = "40px";
                image.style.cursor = "pointer";
                let str = `[img]http://img.atelier801.com/${i}[/img]`;
                image.addEventListener('click', function () {
                    ajouterBBCode(messageBloc, str, '', str.length);
                }, false);
                divImage.appendChild(image);
                smileysNode.appendChild(divImage);
            }
            let addButton = document.createElement("button");
            addButton.classList.add("btn", "btn-success");
            addButton.type = "button";
            addButton.setAttribute('data-categorie', categorie.title);
            addButton.innerText = "+";
            addButton.addEventListener('click', function () {
                let smileyToAdd = window.prompt("Paste the file name and the extension of the image from Micepix\nLike: http://img.atelier801.com/2aa4f11f.gif", "2aa4f11f.gif");
                if (smileyToAdd.length > 0) {
                    for (let i in smileys) {
                        if (smileys[i].title === this.dataset.categorie) {
                            smileys[i].liste.push(smileyToAdd);
                        }
                    }
                    GM_setValue("smileys", JSON.stringify(smileys));
                    afficherSmileys(smileysNode, messageBloc, index);
                }
            }, false);
            smileysNode.appendChild(addButton);
        }
    };
    if (document.querySelector("[id^=cadre_editer_message_]") !== null) {
        let nodes = document.querySelectorAll("[id^=cadre_editer_message_]");
        for (let bloc of nodes) {
            let id = bloc.querySelector('input[name="m"]').value,
                node = addModuleSmileys(bloc.querySelector('fieldset legend'));
            afficherSmileys(node, `edit_message_${id}`, indexSmileys);
        }
    }
    if (document.querySelector('#cadre_nouveau_message fieldset legend') !== null) {
        let node = addModuleSmileys(document.querySelector('#cadre_nouveau_message fieldset legend'), 'message_reponse');
        afficherSmileys(node, 'message_reponse', indexSmileys);
    }
    if (document.querySelector('#formulaire[action="create-topic"] fieldset legend') !== null) {
        let node = addModuleSmileys(document.querySelector('#formulaire[action="create-topic"] fieldset legend'), 'message_sujet');
        afficherSmileys(node, 'message_sujet', indexSmileys);
    }
    if (document.querySelector('#formulaire[action="create-discussion"] fieldset legend') !== null) {
        let node = addModuleSmileys(document.querySelector('#formulaire[action="create-discussion"] fieldset legend'), 'message_conversation');
        afficherSmileys(node, 'message_conversation', indexSmileys);
    }
    if (document.querySelector('#create_dialog fieldset legend') !== null) {
        let node = addModuleSmileys(document.querySelector('#create_dialog fieldset legend'), 'message_conversation');
        afficherSmileys(node, 'message_conversation', indexSmileys);
    }
    var removeCategorieSmileys = function (a, index) {
        for (let i in smileys) {
            if (smileys[i].title === a) {
                for (let image of smileys[i].liste) {
                    let node = document.querySelector(`a[data-image="${image}"][data-categorie="${smileys[i].title}"]`);
                    node.parentNode.parentNode.removeChild(node.parentNode);
                }
                let node = document.querySelectorAll(`.Smileys[data-index="${index}"] a[data-categorie="${smileys[i].title}"]`);
                for (let x of node)
                    x.parentNode.parentNode.removeChild(x.parentNode);
                node = document.querySelectorAll(`.Smileys[data-index="${index}"] button[data-categorie="${smileys[i].title}"]`);
                for (let x of node)
                    x.parentNode.removeChild(x);
                smileys.splice(i, 1);
                GM_setValue("smileys", JSON.stringify(smileys));
            }
        }
    };
})();