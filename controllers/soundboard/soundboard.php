<?php
require_once 'views/global/header.php';

$tigrounette =
  [
    "01" => "Ah mais y fait chier l'nom du jeu aussi",
    "02" => "Ah non ça on l'a abandonné en fait",
    "03" => "Bah ça travaille pas très sérieusement tout ça",
    "04" => "Bah c'est cool",
    "05" => "Bah elle est pas là, j'en profite",
    "06" => "Bah en même temps c'est son boulot hein ?",
    "07" => "Bah nan... Si ? Ch'ais pas.",
    "08" => "Bah on travaille dessus, 'fin JE travaille dessus",
    "09" => "Bon peut être hein, mais pour l'instant c'est pas prévu",
    "10" => "Ça avance... Pas vite, mais ça avance.",
    "11" => "Ça marche",
    "12" => "C'est la vie.",
    "13" => "C'est pas bien d'faire des bots !",
    "14" => "C'est pas possible parce que... C'est pas possible.",
    "15" => "C'est secret",
    "16" => "C'est top secret",
    "17" => "Désolé.",
    "18" => "Et après j'ai laissé tomber",
    "19" => "Et le PHP c'est d'la merde",
    "20" => "Euh.. bah faut changer d'PC",
    "21" => "Euh bah oui mais c'est fait exprès",
    "22" => "Euh... Ch'ais pas.",
    "23" => "Euh... nan.",
    "24" => "Euh... où ça ?",
    "25" => "Euh... ouais.",
    "26" => "'Fin on a quand même prévu, mais c'est dans un avenir assez lointain",
    "27" => "J'ai spoilé quoi ?",
    "28" => "Jamais...",
    "29" => "J'crois qu'y passe le week-end dehors là,Pikashu.",
    "30" => "J'me suis même pas habillé aujourd'hui.",
    "31" => "J'trouve ça pas bête comme idée",
    "32" => "Kikoo Pwet",
    "33" => "La voix des chats ninjas ?",
    "34" => "L'AJAX c'est d'la merde...",
    "35" => "Le quoi ?",
    "36" => "Les options c'est mal !",
    "37" => "Loukno c'est une marketeuse",
    "38" => "Mais c'est pas dit méchamment hein...",
    "39" => "Mais euh...",
    "40" => "Mais Linux c'est tout pourri t'façon",
    "41" => "Moi aussi ch'ui un pyjama",
    "42" => "Moi j'aimerais bien... Mais Méli elle veut pas.",
    "43" => "Nan !",
    "44" => "Nan c'est pas nul, c'est bien !",
    "45" => "Nan j'déconne, oupas.",
    "46" => "Nan j'déconne",
    "47" => "Nan j'lance pu d'peluches sur les gens",
    "48" => "Non nous on l'fait après la St-Valentin, t'façon.",
    "49" => "Nan parce que Méli elle aimait pas",
    "50" => "Non",
    "51" => "On ban ceux qui sont pas content",
    "52" => "Ouais ça c'est un truc que j'voulais faire aussi",
    "53" => "Ouais il a un super poulet...",
    "54" => "Ouais justement c'est Xavier qui va s'en occuper...",
    "55" => "Ouais le mariage gay aussi ça s'ra possible.",
    "56" => "Oui",
    "57" => "Pas l'fight, j'aime pas ça...",
    "58" => "J'ai fait 5 PREMIERES années de fac.",
    "59" => "Pour ceux qui connaissent pas...",
    "60" => "Pour l'instant j'ai touché Méli et Azrou",
    "61" => "Présentation",
    "62" => "Quand j'aurais du temps",
    "63" => "Quel jeu ?",
    "64" => "Quoi ?",
    "65" => "Si c'est possible !",
    "66" => "Sophie, ticket !",
    "67" => "*Troll 1*",
    "68" => "*Troll 2*",
    "69" => "*Une journée chez Atelier 801*",
    "70" => "Y'a beaucoup d'bordel",
    "71" => "Y'a pas d'bug sur Transformice !",
    "72" => "Bah c'est un peu des kikoos et des pyjamas...",
    "73" => "Allo ?",
    "74" => "Est-ce qu'on m'entend ?",
    "75" => "BONJOUR !",
    "76" => "Non je ne suis pas une fille",
    "77" => "Bah j'vais déjà répondre à ceux qui floodent le chat",
    "78" => "On a pas eu l'temps de le faire",
    "79" => "Ça coûtera des fraises... Beaucoup de fraises",
    "80" => "Le prochain event, y va être cool !",
    "81" => "Ça va être cool",
    "82" => "On a trouvé une idée originale",
    "83" => "Euh... C'est quoi l'mulodrome ?",
    "84" => "Moi au début j'prononçais Transformiss aussi..."
  ];

$melibellule =
  [
    "01" => "*Poulet*",
    "02" => "Jusque là Jean-Baptiste est venu me chercher",
    "03" => "Mais les graphismes étaient pas au top",
    "04" => "Ouaaaaaaiiiiiis !",
    "05" => "Alors déjà c'est Transformice, c'est pas Transformiss"
  ];

$sydoline =
  [
    "01" => "Bien joué Tigrou",
    "02" => "Ça va être la foire",
    "03" => "C'est toi qui est pas très grand",
    "04" => "Du coup voilà",
    "05" => "J'vais l'écrire sur le tchat",
    "06" => "Moi j'trouve que ce sont quand même des gros trolls",
    "07" => "Nan c'est pas c'qu'on a dit",
    "08" => "Non c'est pas possible",
    "09" => "Ok",
    "10" => "On s'est bien fait avoir, sur c'coup là quand même.",
    "11" => "Oui mais ça bug",
    "12" => "Oui.",
    "13" => "Pourquoi.",
    "14" => "Présentation",
    "15" => "Putain c'est dégueulasse",
    "16" => "T'es sérieux ?",
    "17" => "Y sont méchants"
  ];

$narayan =
  [
    "01" => "ça arrive",
    "02" => "Donc après je sais pas... quand est-ce que... 'fin si vous voulez qu'on...",
    "03" => "On aurait du le dire depuis longtemps on aurait été tranquille",
  ];

$pikashu =
  [
    "01" => "Hé",
    "02" => "Pikapi !",
    "03" => "*rire*",
    "04" => "Tartiflette, alors c'est parfait"
  ];

$modopops =
  [
    "01" => "D'accord",
    "02" => "En fait t'as donné une information que on était pas censé savoir",
    "03" => "J'imagine déjà tous les modos qui s'prendront des claques",
    "04" => "À vous la parole",
    "05" => "Alors Mcfloy a une très bonne question...",
    "06" => "Bah j'attaque ?",
    "07" => "Et je suis une abeille",
    "08" => "Euh voilà j'ai donc coupé le tchat",
    "09" => "Merci",
    "10" => "On l'applaudit hein",
    "11" => "On vous réserve plusieurs petites surprises",
    "12" => "Tout ce temps pour écrire ça !"
  ];

$cryquinette =
  [
    "01" => "Amusez-vous bien !",
    "02" => "C'est génial...",
    "03" => "C'est tout c'que j'ai à dire",
    "04" => "De toute la soirée",
    "05" => "Et ma vie est super",
    "06" => "J'ai pas écouté ce qui vient de s'passer",
    "07" => "Voilà"
  ];

$aewing =
  [
    "01" => "*Présentation*",
    "02" => "Ça marche pas bien",
    "03" => "Celui qui dit pas Modopops, y prend un ban",
    "04" => "Chut faut pas l'dire",
    "05" => "Euh sans spammer si possible",
    "06" => "Fin ça dépend d'eux en fait",
    "07" => "*Générique de Transfo*",
    "08" => "J'attends",
    "09" => "Juste pour te prouver que t'as tord",
    "10" => "Nan c'est pas un club d'alcoolique anonyme",
    "11" => "On s'en s'rait passé d'ça tu vois ?",
    "12" => "Ouais on les a kidnappé mais on leur fera pas d'mal",
    "13" => "'Pops est virée",
    "14" => "*Rire de modérateur*"
  ];

$killerlux =
  [
    "01" => "C'est quoi ça ? Jamais entendu parler...",
    "02" => "Mais ça on l'savait déjà",
    "03" => "Moi c'est Killerlux",
    "04" => "Pardon ?!",
    "05" => "Si ça c'est pas la classe."
  ];

$liste =
  [
    "tigrounette" => $tigrounette,
    "melibellule" => $melibellule,
    "sydoline" => $sydoline,
    "narayan" => $narayan,
    "pikashu" => $pikashu,
    "modopops" => $modopops,
    "cryquinette" => $cryquinette,
    "aewing" => $aewing,
    "killerlux" => $killerlux
  ];

require_once 'views/soundboard/soundboard.php';

require_once 'views/global/footer.php';
?>