function init()
{
	var localizaciones=$.getJSON('../json/infoIglesias.json', {param1: 'value1'}, function(json, textStatus) {
			/*optional stuff to do after success */
	});
	//("../json/infoIglesias.json");
	console.log(localizaciones);
	var mapa,mapOptions,place,markers,image;
	image = new google.maps.MarkerImage("http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/map-marker-icon.png", new google.maps.Size(32,32));
    //Mapa a ser mostrado en espacio izquierdo
    mapOptions = 
    {
      	center: new google.maps.LatLng(-0.22420527874270313,-78.51257892713852),
       	zoom: 10,
       	mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    mapa = new google.maps.Map(document.getElementById("map"),mapOptions);

	//place = new google.maps.LatLng(-0.22420527874270313,-78.51257892713852);
	
	console.log("Gato"+localizaciones);
	//localizaciones
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


	//marker= new google.maps.Marker(
	//{
	//	position:place,
	//	title:"Iglesia de San Francisco",
	//	map:map
	//}
	//);
	google.maps.event.addListener(markers,"click",indicarInformacion);

	function indicarInformacion()
	{
		mapa.setZoom(16);
		mapa.setCenter(marker.getPosition());
		$('#myModal').modal('show');
	}

	


 }


google.maps.event.addDomListener(window, 'load', init);
