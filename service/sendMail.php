<?php
/******************************************************************************\
* Project:     Bee Fair
* Description: Fair Trade Market
* Author:      Arch A. Germann
* Document:    Service: send mail
\******************************************************************************/

//headers
header("Access-Control-Allow-Origin: *");
header("Content:application/json");

//includes
require_once (dirname(__FILE__)."/../config/init.php");
require_once (dirname(__FILE__)."/init.php");

function clean_string($string)
{
	$bad = array("content-type","bcc:","to:","cc:","href");
	return str_replace($bad, "", $string);
}
    
$sendMail = "";
$emailTo = $config["emailTo"];
$emailSubject = $config["emailSubject"];

// validation expected data exists 
if (!isset($_GET['contactEmail']) ||
	!isset($_GET['contactName']) ||
	!isset($_GET['contactPhone']) ||
	!isset($_GET['contactComments']))
{
	$sendMail = '<font color="#bc1414"><b>Ein interner Fehler beim Senden des Mail ist entstanden. <br />Schreib uns doch bitte auf <a href="mailto:'.$emailTo.'">'.$emailTo.'</a></b></font><br /><br />';
}
else
{
	$name = $_GET['contactName']; 				// required 
	$email_from = $_GET['contactEmail']; 		// required 
	$telephone = $_GET['contactPhone']; 		// not required 
	$comments = $_GET['contactComments']; 		// required
	
	$emailMessageSend = "Kontaktformular Informationen:\n\n";
	$emailMessageSend .= "Name/Firma: ".clean_string($name)."\n";
	$emailMessageSend .= "Email: ".clean_string($email_from)."\n";
	$emailMessageSend .= "Telefon: ".clean_string($telephone)."\n";
	$emailMessageSend .= "Kommentare: ".clean_string($comments)."\n";

	// create email headers
	$headers = "From: " . $email_from . "\r\n" . "Reply-To: " . $email_from . "\r\n" . "X-Mailer: PHP/" . phpversion();
	
	if (!@mail($emailTo, $emailSubject, $emailMessageSend, $headers))
	{
		$sendMail = '<font color="#bc1414"><b>Ein interner Fehler beim Senden des Mail ist entstanden. <br />Schreib uns doch bitte auf <a href="mailto:'.$emailTo.'">'.$emailTo.'</a></b></font><br /><br />';
	}
}

$data = array("SendMail" => $sendMail);

echo json_encode($data);
?>
