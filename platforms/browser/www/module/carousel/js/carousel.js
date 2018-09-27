/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    carousel js
\******************************************************************************/

$(document).ready(function()
{
	$.getJSON(configServiceUrl + "getCarousel.php", function (data)
	{
		$('#carouselMain').html(data.Carousel);
	});
});
