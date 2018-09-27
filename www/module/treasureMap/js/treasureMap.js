/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    treasureMap js
\******************************************************************************/

function treasureMapMainSetHeight(newMainHeight)
{
	document.getElementById('treasureMapMain').style.height = newMainHeight + "px";
}

function treasureMapShowNewEntry()
{
	var newTopHeight = document.getElementById('treasureMapTop').offsetHeight;
	var newOptionsHeight = treasureMapOptionsHeight;
	
	if (document.getElementById('treasureMapNewEntry').style.display == "block")
	{
		document.getElementById('treasureMapNewEntry').style.display = "none";
	}
	else
	{
		newOptionsHeight += treasureMapNewEntryHeight;
		document.getElementById('treasureMapNewEntry').style.display = "block";
	}
	
	var newMainHeight = treasureMapMainHeight + newTopHeight + newOptionsHeight;
	
	document.getElementById('treasureMapOptions').style.height = newOptionsHeight + "px";
	treasureMapMainSetHeight(newMainHeight);
}

function treasureMapMessageSetHeight(newMessageHeight)
{
	var newTopHeight = treasureMapTopHeight + newMessageHeight;
	var newOptionsHeight = document.getElementById('treasureMapOptions').offsetHeight;
	var newMainHeight = treasureMapMainHeight + newTopHeight + newOptionsHeight;
	
	document.getElementById('treasureMapMessage').style.height = newMessageHeight + "px";
	document.getElementById('treasureMapTop').style.height = newTopHeight + "px";
	treasureMapMainSetHeight(newMainHeight);
}

function initMap()
{
	//do init
}

function error(msg)
{
    var s = document.querySelector('#treasureMapStatus');
    s.innerHTML = typeof msg == 'string' ? msg : "fehlgeschlagen";
    s.className = 'fail';
}

function showTreasureMap(addressMarkers, position, zoom)
{
    var s = document.querySelector('#treasureMapStatus');

    if (s.className == 'treasureMapSuccess')
    {
		// not sure why we're hitting this twice in FF, I think it's to do with a cached result coming back    
		return;
    }

    s.innerHTML = "gefunden!";
    s.className = 'treasureMapSuccess';
    var mapcanvas = document.createElement('div');
    mapcanvas.id = 'treasureMapCanvas';
    mapcanvas.style.height = '100%';
    mapcanvas.style.width = '100%';
    document.getElementById('treasureMap').appendChild(mapcanvas);
	var markers = addressMarkers.documentElement.getElementsByTagName('marker');
    var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    var myOptions =
    {
		zoom: zoom,
		center: latlng,
		mapTypeControl: false,
		navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("treasureMapCanvas"), myOptions);
    var marker = new google.maps.Marker(
    {
        position: latlng, 
        animation: google.maps.Animation.DROP,
        map: map, 
        title: 'Du bist hier! (' + position.coords.accuracy + ' Meter Radius)'
    });

    marker.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');
    
	var infoWindow = new google.maps.InfoWindow;

	Array.prototype.forEach.call(markers, function(markerElem)
	{
		var name = markerElem.getAttribute('name');
		var address = markerElem.getAttribute('address');
		var type = markerElem.getAttribute('type');
		var point = new google.maps.LatLng(
			parseFloat(markerElem.getAttribute('lat')),
			parseFloat(markerElem.getAttribute('lng')));
		var infowincontent = document.createElement('div');
		var strong = document.createElement('strong');
		strong.textContent = name
		infowincontent.appendChild(strong);
		infowincontent.appendChild(document.createElement('br'));
		var text = document.createElement('text');
		text.textContent = address
		infowincontent.appendChild(text);
		var icon = customLabel[type] || {};
		var marker = new google.maps.Marker({
			map: map,
			position: point,
			label: icon.label
		});
		marker.addListener('click', function() {
			infoWindow.setContent(infowincontent);
			infoWindow.open(map, marker);
		});
	});
}

function showMaps(position)
{
	$.getJSON(configServiceUrl + "getAddressMarkers.php", function (data)
	{
		var parser = new DOMParser();
		var xmlAddressMarkers = parser.parseFromString(data.AddressMarkers,"text/xml");
		
		//show treasure map
		showTreasureMap(xmlAddressMarkers, position, 9);
	});
}

$(document).ready(function()
{
	$.getJSON(configServiceUrl + "getTreasureMap.php", function (data)
	{
		$('#treasureMapMain').html(data.TreasureMap);
		
		treasureMapMessageSetHeight(treasureMapMessageHeight);
	
		$("#btnShowNewEntry").click(function()
		{
			treasureMapShowNewEntry();
		});

		if (navigator.geolocation)
		{
			navigator.geolocation.getCurrentPosition(showMaps, error);
		} 
		else 
		{
			error('nicht unterstützt');
		}

		/*var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

		try 
		{
			var pageTracker = _gat._getTracker("UA-1656750-18");
			pageTracker._trackPageview();
		} 
		catch(err)
		{
			
		}*/
		
		$("#btnAddNewEntry").click(function()
		{
			var newTreasureMapMessageHeight = treasureMapMessageHeight;
			var treasureMapMessage = "";
			var treasureMapShopType = $("#selTreasureMapShopType").val();
			var treasureMapCategory = $("#selTreasureMapCategory").val();
			var treasureMapName = $("#txtTreasureMapName").val();
			var treasureMapDescription = $("#txtaTreasureMapDescription").val();
			var treasureMapStreet = $("#txtTreasureMapStreet").val();
			var treasureMapZipCode = $("#txtTreasureMapZipCode").val();
			var treasureMapCity = $("#txtTreasureMapCity").val();
			var treasureMapCountry = $("#selTreasureMapCountry").val();
			var treasureMapPhone = $("#txtTreasureMapPhone").val();
			var treasureMapMobile = $("#txtTreasureMapMobile").val();
			var treasureMapFax = $("#txtTreasureMapFax").val();
			var treasureMapEmail = $("#txtTreasureMapEmail").val();
			var treasureMapWebsite = $("#txtTreasureMapWebsite").val();
			var treasureMapLatitude = $("#txtTreasureMapLatitude").val();
			var treasureMapLongitude = $("#txtTreasureMapLongitude").val();
			
			if (treasureMapShopType == null || treasureMapShopType === "" || treasureMapShopType == 0 || !$.isNumeric(treasureMapShopType))
			{
				treasureMapMessage = "<font color='#bc1414'><b>Das Feld 'Shop-Typ' ist ung&uuml;ltig.</b></font><br />";
				newTreasureMapMessageHeight += 20;
			}
			
			if (treasureMapCategory == null || treasureMapCategory === "" || treasureMapCategory == 0 || !$.isNumeric(treasureMapCategory))
			{
				treasureMapMessage += "<font color='#bc1414'><b>Das Feld 'Kategorie' ist ung&uuml;ltig.</b></font><br />";
				newTreasureMapMessageHeight += 20;
			}
			
			if (treasureMapName == null || treasureMapName === "" || treasureMapName.match(/^[a-zA-Z0-9 .'-]+$/) == null)
			{
				treasureMapMessage += "<font color='#bc1414'><b>Das Feld 'Name' ist ung&uuml;ltig.</b></font><br />";
				newTreasureMapMessageHeight += 20;
			}
			
			/*if (treasureMapEmail == null || treasureMapEmail === "" || treasureMapEmail.match(/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/) == null)
			{
				treasureMapMessage += "<font color='#bc1414'><b>Das Feld 'Email' ist ung&uuml;ltig.</b></font><br />";
				newTreasureMapMessageHeight += 20;
			}*/
			
			if (treasureMapCountry == null || treasureMapCountry === "" || treasureMapCountry == 0 || !$.isNumeric(treasureMapCountry))
			{
				treasureMapMessage += "<font color='#bc1414'><b>Das Feld 'Land' ist ung&uuml;ltig.</b></font><br />";
				newTreasureMapMessageHeight += 20;
			}
			
			if (treasureMapLatitude != null && !$.isNumeric(treasureMapLatitude))
			{
				treasureMapMessage += "<font color='#bc1414'><b>Das Feld 'Breitengrad' ist ung&uuml;ltig.</b></font><br />";
				newTreasureMapMessageHeight += 20;
			}
			
			if (treasureMapLongitude != null && !$.isNumeric(treasureMapLongitude))
			{
				treasureMapMessage += "<font color='#bc1414'><b>Das Feld 'Längengrad' ist ung&uuml;ltig.</b></font><br />";
				newTreasureMapMessageHeight += 20;
			}
			
			if (treasureMapMessage == null || treasureMapMessage === "")
			{
				treasureMapMessage = "<font color='green'><b>Neuer Shop eingetragen - Vielen Dank f&uuml;r deine Hilfe</b></font><br />";
				
				var parameter = 
				{ 
					"treasureMapShopType":treasureMapShopType,
					"treasureMapCategory":treasureMapCategory,
					"treasureMapName":treasureMapName,
					"treasureMapDescription":treasureMapDescription,
					"treasureMapStreet":treasureMapStreet,
					"treasureMapZipCode":treasureMapZipCode,
					"treasureMapCity":treasureMapCity,
					"treasureMapCountry":treasureMapCountry,
					"treasureMapPhone":treasureMapPhone,
					"treasureMapMobile":treasureMapMobile,
					"treasureMapFax":treasureMapFax,
					"treasureMapEmail":treasureMapEmail,
					"treasureMapWebsite":treasureMapWebsite,
					"treasureMapLatitude":treasureMapLatitude,
					"treasureMapLongitude":treasureMapLongitude
				};
				
				$.getJSON(configServiceUrl + "createAddress.php", parameter, function (data)
				{
					if (data.CreateAddress !== "")
					{			
						treasureMapMessage = data.CreateAddress;
						newTreasureMapMessageHeight += 40;
					}
					
					treasureMapMessage += "<br />";			
					$("#treasureMapMessage").html(treasureMapMessage);					
					treasureMapMessageSetHeight(newTreasureMapMessageHeight);
					treasureMapShowNewEntry();
				}).error(function()
				{ 
					error(); 
				});
			}
			else
			{
				treasureMapMessage += "<br />";			
				$("#treasureMapMessage").html(treasureMapMessage);
				treasureMapMessageSetHeight(newTreasureMapMessageHeight);
			}
		});
	}).error(function()
	{ 
		error(); 
	});
});
