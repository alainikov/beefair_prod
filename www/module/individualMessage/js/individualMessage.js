/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    individualMessage js
\******************************************************************************/

$(document).ready(function()
{
	$.getJSON(configServiceUrl + "getIndividualMessage.php", function (data)
	{
		$('#individualMessageMain').html(data.IndividualMessage);
	}).error(function()
	{ 
		error(); 
	});
});
