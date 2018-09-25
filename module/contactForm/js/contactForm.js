/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    contactForm js
\******************************************************************************/

$(document).ready(function()
{
	$.getJSON(configServiceUrl + "getContactForm.php", function (data)
	{
		$('#contactFormMain').html(data.ContactForm);
		
		$("#btnContactSendMail").click(function()
		{
			var contactMessage = "";
			var contactName = $("#txtContactName").val();
			var contactEmail = $("#txtContactEmail").val();
			var contactPhone = $("#txtContactPhone").val();
			var contactComments = $("#txtContactComments").val();
			
			if (contactName == null || contactName === "" || contactName.match(/^[a-zA-Z0-9 .'-]+$/) == null)
			{
				contactMessage = "<font color='#bc1414'><b>Das Feld 'Name/Firma' ist ung&uuml;ltig.</b></font><br />";
			}
			
			if (contactEmail == null || contactEmail === "" || contactEmail.match(/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/) == null)
			{
				contactMessage += "<font color='#bc1414'><b>Das Feld 'Email' ist ung&uuml;ltig.</b></font><br />";
			}
			
			if (contactComments.length < 3)
			{
				contactMessage += "<font color='#bc1414'><b>Das Feld 'Mitteilung' muss mindestens 3 Zeichen enthalten.</b></font><br />";
			}
			
			if (contactMessage == null || contactMessage === "")
			{
				contactMessage = "<font color='green'><b>Danke f&uuml;r Deine Unterst&uuml;tzung! Wir melden uns so schnell wie m&ouml;glich...</b></font><br />";
				
				var parameter = 
				{ 
					"contactName":contactName, 
					"contactEmail":contactEmail,
					"contactPhone":contactPhone, 
					"contactComments":contactComments 
				};
				
				$.getJSON(configServiceUrl + "sendMail.php", parameter, function (data)
				{
					if (data.SendMail !== "")
					{			
						contactMessage = data.SendMail;
					}
					
					contactMessage += "<br />";		
					$("#contactMessage").html(contactMessage);
				}).error(function()
				{ 
					error(); 
				});
			}
			else
			{
				contactMessage += "<br />";		
				$("#contactMessage").html(contactMessage);
			}
		});
	}).error(function()
	{ 
		error(); 
	});
});
