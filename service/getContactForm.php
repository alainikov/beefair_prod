<?php
/******************************************************************************\
* Project:     Bee Fair
* Description: Fair Trade Market
* Author:      Arch A. Germann
* Document:    Service: get contactForm
\******************************************************************************/

//headers
header("Content:application/json");

//includes
require_once (dirname(__FILE__)."/../config/init.php");
require_once (dirname(__FILE__)."/init.php");

$contactForm = 	'<h1>Kontakt</h1>';
$contactForm .= '<p class="textBig">Haben Sie Fragen, Anregungen oder andere Informationen f&uuml;r uns?</p>';
$contactForm .= '<div id="contactMessage"></div>';
$contactForm .= '<hr />';
$contactForm .= '<form name="frmContactForm" class="form-horizontal">';
$contactForm .= 	'<div class="form-group">';
$contactForm .= 		'<label class="control-label col-xs-4 col-md-5 col-lg-5" for="name">Name/Firma *</label>';
$contactForm .= 		'<div class="col-xs-6 col-md-5 col-lg-4">';
$contactForm .= 			'<input class="inputBig form-control" type="text" id="txtContactName" maxlength="180" size="30">';
$contactForm .= 		'</div>';
$contactForm .= 	'</div>';
$contactForm .= 	'<div class="form-group">';
$contactForm .= 		'<label class="control-label col-xs-4 col-md-5 col-lg-5" for="email">E-Mail *</label>';
$contactForm .= 		'<div class="col-xs-6 col-md-5 col-lg-4">';
$contactForm .= 			'<input class="inputBig form-control" type="email" id="txtContactEmail" maxlength="255" size="30">';
$contactForm .= 		'</div>';
$contactForm .= 	'</div>';
$contactForm .= 	'<div class="form-group">';
$contactForm .= 		'<label class="control-label col-xs-4 col-md-5 col-lg-5" for="telephone">Telefon</label>';
$contactForm .= 		'<div class="col-xs-6 col-md-5 col-lg-4">';
$contactForm .= 			'<input class="inputBig form-control" type="text" id="txtContactPhone" maxlength="40" size="30">';
$contactForm .= 		'</div>';
$contactForm .= 	'</div>';
$contactForm .= 	'<div class="form-group">';
$contactForm .= 		'<label class="control-label col-xs-4 col-md-5 col-lg-5" for="comments">Mitteilung *</label>';
$contactForm .= 		'<div class="col-xs-6 col-md-5 col-lg-4">';
$contactForm .= 			'<textarea class="textareaBig form-control" id="txtContactComments" maxlength="1000" cols="25" rows="6"></textarea>';
$contactForm .= 		'</div>';
$contactForm .= 	'</div>';
$contactForm .= 	'<div class="form-group">';
$contactForm .= 		'<div class="col-lg-12 col-md-12 col-xs-9">';
$contactForm .= 			'<input type="button" class="buttonBigGreen form-control" id="btnContactSendMail" value="Senden">';
$contactForm .= 			'<input type="reset" class="buttonBigRed" id="btnContactReset" value="Leeren">';
$contactForm .= 		'</div>';
$contactForm .= 	'</div>';
$contactForm .= '</form>';

$data = array("ContactForm" => $contactForm);

echo json_encode($data);
?>