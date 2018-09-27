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

$contactForm = 	'<form name="frmContactForm">';
$contactForm .= '<table width="100%">';
$contactForm .= 	'<tr>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 		'<td class="textMedium" colspan="2">&nbsp;</td>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 	'</tr>';
$contactForm .= 	'<tr>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 		'<td class="textMedium" colspan="2">&nbsp;</td>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 	'</tr>';
$contactForm .= 	'<tr>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 		'<td colspan="2"><center><h1>Kontakt</h1></center></td>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 	'</tr>';
$contactForm .= 	'<tr>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 		'<td class="textMediumCenter" colspan="2">Haben Sie Fragen, Anregungen oder andere Informationen f&uuml;r uns?</td>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 	'</tr>';
$contactForm .= 	'<tr>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 		'<td class="textMediumCenter" colspan="2"><hr /><div id="contactMessage"></div></td>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 	'</tr>';
$contactForm .= 	'<tr>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 		'<td valign="top"><label class="inputBig" for="name">Name/Firma *</label></td>';
$contactForm .= 		'<td valign="top"><input class="inputBig" type="text" id="txtContactName" maxlength="180" size="30"></td>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 	'</tr>';
$contactForm .= 	'<tr>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 		'<td valign="top"><label class="inputBig" for="email">Email *</label></td>';
$contactForm .= 		'<td valign="top"><input class="inputBig" type="text" id="txtContactEmail" maxlength="255" size="30"></td>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 	'</tr>';
$contactForm .= 	'<tr>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 		'<td valign="top"><label class="inputBig" for="telephone">Telefon</label></td>';
$contactForm .= 		'<td valign="top"><input class="inputBig" type="text" id="txtContactPhone" maxlength="40" size="30"></td>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 	'</tr>';
$contactForm .= 	'<tr>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 		'<td valign="top"><label class="inputBig" for="comments">Mitteilung *</label></td>';
$contactForm .= 		'<td valign="top"><textarea class="textareaBig" id="txtContactComments" maxlength="1000" cols="25" rows="6"></textarea></td>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 	'</tr>';
$contactForm .= 	'<tr>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 		'<td colspan="2" style="text-align:center"><input type="button" class="buttonBigGreen" id="btnContactSendMail" value="Senden">&nbsp;&nbsp;&nbsp;';
$contactForm .= 		'<input type="reset" class="buttonBigRed" id="btnContactReset" value="Leeren"></td>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 	'</tr>';
$contactForm .= 	'<tr>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 		'<td class="textMedium" colspan="2">&nbsp;</td>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 	'</tr>';
$contactForm .= 	'<tr>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 		'<td class="textMedium" colspan="2">&nbsp;</td>';
$contactForm .= 		'<td width="30%">&nbsp;</td>';
$contactForm .= 	'</tr>';
$contactForm .= '</table>';
$contactForm .= '</form>';

$data = array("ContactForm" => $contactForm);

echo json_encode($data);
?>