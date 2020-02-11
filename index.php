<?php
date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

//Log::logWrite('Bonjour Michel');

$trucEudRequete = array();
array_push($trucEudRequete, ['NULL', '', '']);
array_push($trucEudRequete, [':title', 'Je suis un message', 2]);
array_push($trucEudRequete, [':content', 'Je suis un contenu', 2]);

$query = new Bdd();
$query->inserer('contact', $trucEudRequete);


/*$formulaire = new Form('index.php?page=validation', 'frmContact');

$html = $formulaire->beginHtml('Je fais des formulaires en objet');
$html .= $formulaire->displayForm();
$html .= $formulaire->endHtml();
echo $html;
*/