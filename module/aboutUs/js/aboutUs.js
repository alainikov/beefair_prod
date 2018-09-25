/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    aboutUs js
\******************************************************************************/

$(document).ready(function()
{
	$.getJSON(configServiceUrl + "getAboutUs.php", function (data)
	{
		$('#aboutUsMain').html(data.AboutUs);
	}).error(function()
	{ 
		error(); 
	}).complete(function() 
	{
		$("#splashscreen").hide();
		$("#main").show();
	});
});
