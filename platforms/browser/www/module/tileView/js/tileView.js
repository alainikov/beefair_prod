/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    tileView js
\******************************************************************************/

$(document).ready(function()
{
	$.getJSON(configServiceUrl + "getTileView.php", function (data)
	{
		$('#tileViewMain').html(data.TileView);
	});
});
