function init()
{
	var mapa,mapOptions,place,markers,image;
	
	image = new google.maps.MarkerImage("http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/map-marker-icon.png", new google.maps.Size(32,32));
    
    //Mapa a ser mostrado en espacio izquierdo
    mapOptions = 
    {
      	center: new google.maps.LatLng(-0.21420527874270313,-78.51257892713852),
       	zoom: 15,
       	mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    mapa = new google.maps.Map(document.getElementById("map"),mapOptions);


	markers=localizaciones.map(function(location, elem) 
	{
		var lugar={"lat":location["Latitud"],"lng":location["Longitud"]};
		var nombre=location["Nombre"];
		var marker = new google.maps.Marker(
		{
			position : lugar,
			title : nombre,
			map: mapa
		});
		return marker;
	});

	google.maps.event.addListener(markers,"click",indicarInformacion);

	function indicarInformacion()
	{
		mapa.setZoom(16);
		mapa.setCenter(marker.getPosition());
		$('#myModal').modal('show');
	}

	


 }


google.maps.event.addDomListener(window, 'load', init);
var localizaciones=[{"Nombre": "La Concepcion","Latitud":-0.2193354,"Longitud":-78.51223329999999},{"Nombre": "La Catedral","Latitud":-0.2204725,"Longitud":-78.51257249999998},{"Nombre": "La Concepcion","Latitud":-0.2193354,"Longitud":-78.51223329999999},{"Nombre": "La Merced","Latitud":-0.2179875,"Longitud":-78.51356099999998},{"Nombre": "La Compania","Latitud":-0.2207706,"Longitud":-78.51389840000002},{"Nombre": "La Basilica","Latitud":-0.222846,"Longitud":-78.51709950000003},	{"Nombre": "El Sagrario","Latitud":-0.220642,"Longitud":-78.5127761},{"Nombre": "San Agustin","Latitud":-0.220476,"Longitud":-78.5102463},{"Nombre": "Carmen Bajo","Latitud":-0.22269520717021932,"Longitud":-78.51491779088974},{"Nombre": "Carmen Alto","Latitud":-0.22265497433884063,"Longitud":-78.51515650749207}];