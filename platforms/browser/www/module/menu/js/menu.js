/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    menu js
\******************************************************************************/

$(document).ready(function()
{
	$.getJSON(configServiceUrl + "getMenu.php", function (data)
	{
		$('#navMain').html(data.Menu);
	});
});
