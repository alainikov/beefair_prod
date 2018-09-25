/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    locationData js
\******************************************************************************/

//create table
$(document).ready(function()
{	
	$.getJSON(configServiceUrl + "getLocationData.php", function (data)
	{
		$('#locationDataMain').html(data.LocationData);
		
		//set location table
		$('#locationDataTable').DataTable();
		
		$('.locationDataLine').click(function()
		{
			var addressId = $(this).attr('id').replace('locationDataLineId','');
			var parameter = { "addressId":addressId };
			var zoom = 12;

			$.getJSON(configServiceUrl + "getWantedPoster.php", parameter, function (data)
			{
				$('#wantedPosterMain').html(data.WantedPoster);
				$('#wantedPosterMain').show();
				$(document).scrollTop($("#wantedPosterMain").offset().top);
				
				$.getJSON(configServiceUrl + "getAddressMarker.php", parameter, function (data)
				{
					var parser = new DOMParser();
					var xmlAddressMarker = parser.parseFromString(data.AddressMarker,"text/xml");
					
					showWantedPosterMap(xmlAddressMarker, zoom)
				});
			}).error(function()
			{ 
				error(); 
			});
		});
	}).error(function()
	{ 
		error(); 
	});
});
