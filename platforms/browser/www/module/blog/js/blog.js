/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    blog js
\******************************************************************************/

$(document).ready(function()
{
	$.getJSON(configServiceUrl + "getBlog.php", function (data)
	{
		$('#honeyBlogMain').html(data.Blog);
	});
});
