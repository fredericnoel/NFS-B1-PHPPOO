<?php
date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

Log::logWrite('Bonjour Michel');

$formulaire = new Form('index.php?page=validation', 'frmContact');

$html = $formulaire->beginHtml('Je fais des formulaires en objet');
$html .= $formulaire->displayForm();
$html .= $formulaire->endHtml();
echo $html;
