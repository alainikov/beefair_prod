/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    wantedPoster js
\******************************************************************************/

function showWantedPosterMap(addressMarkers, zoom)
{
	var s = document.querySelector('#wantedPosterStatus');

    if (s.className == 'wantedPosterSuccess')
    {
		// not sure why we're hitting this twice in FF, I think it's to do with a cached result coming back    
		return;
    }

    s.innerHTML = "gefunden!";
    s.className = 'wantedPosterSuccess';
    var mapcanvas = document.createElement('div');
    mapcanvas.id = 'wantedPosterMapCanvas';
    mapcanvas.style.height = '100%';
    mapcanvas.style.width = '100%';
    document.getElementById('wantedPosterMap').appendChild(mapcanvas);
	var markers = addressMarkers.documentElement.getElementsByTagName('marker');

	Array.prototype.forEach.call(markers, function(markerElem)
	{
		var name = markerElem.getAttribute('name');
		var address = markerElem.getAttribute('address');
		var type = markerElem.getAttribute('type');
		var point = new google.maps.LatLng
		(
			parseFloat(markerElem.getAttribute('lat')),
			parseFloat(markerElem.getAttribute('lng'))
		);
		var infowincontent = document.createElement('div');
		var strong = document.createElement('strong');
		var myOptions =
		{
			zoom: zoom,
			center: point,
			mapTypeControl: false,
			navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("wantedPosterMapCanvas"), myOptions);    
		var infoWindow = new google.maps.InfoWindow;			
		
		strong.textContent = name;
		infowincontent.appendChild(strong);
		infowincontent.appendChild(document.createElement('br'));
		var text = document.createElement('text');
		text.textContent = address;
		infowincontent.appendChild(text);
		var icon = customLabel[type] || {};
		var marker = new google.maps.Marker
		({
			map: map,
			position: point,
			label: icon.label
		});
		marker.addListener('click', function() 
		{
			infoWindow.setContent(infowincontent);
			infoWindow.open(map, marker);
		});
	});
}

$(document).ready(function()
{
	$('#wantedPosterMain').hide();
});
