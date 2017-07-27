function init()
{
	var map,mapOptions,place,marker,image;
	image = new google.maps.MarkerImage("http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/map-marker-icon.png", new google.maps.Size(32,32));
    mapOptions = 
    {
      	center: new google.maps.LatLng(-0.22420527874270313,-78.51257892713852),
       	zoom: 10,
       	mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    map = new google.maps.Map(document.getElementById("map"),mapOptions);

	place = new google.maps.LatLng(-0.22420527874270313,-78.51257892713852);
	marker= new google.maps.Marker(
	{
		position:place,
		title:"Iglesia de San Francisco",
		map:map
	}
	);
	google.maps.event.addListener(marker,"click",indicarInformacion);

	function indicarInformacion()
	{
		map.setZoom(16);
		map.setCenter(marker.getPosition());
		$('#myModal').modal('show');
	}
 }


google.maps.event.addDomListener(window, 'load', init);
