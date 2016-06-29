function initialize() {
	var styles = [
		{
		    stylers: [
		 		{ "hue": "#000000" },
				{ "saturation": -100 },
				{ "lightness": 3 },
				{ "weight": 1.9 }
			]
		},{
			featureType: "road",
		    elementType: "geometry",
		    stylers: [
		        { visibility: "simplified" }
		    ]
		},{
			featureType: "road",
			elementType: "labels",
		    stylers: [
		    	{ visibility: "on" },
		    	{ saturation: 0 }
		    ]
		},{
			featureType: "poi",
		    elementType: "labels",
		    stylers: [
				{ visibility: "off" }
		    ]
		}
		
	];

		  var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});
		  

		  var myCenter = new google.maps.LatLng(38.1398109,13.3426548);

		  var mapOptions = {
		    zoom: 18,
		    center: myCenter,
		    scrollwheel: false,
        	draggable: !("ontouchend" in document),
		    disableDefaultUI: true,
		   
		    mapTypeControlOptions: {
		      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style'] 
		    }
		
		  };
		  
		  var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
		

		  map.mapTypes.set('map_style', styledMap);
		  map.setMapTypeId('map_style');
		  
		  

		  var contentString1 = '';
		      
		  var infowindow1 = new google.maps.InfoWindow({
		      content: contentString1,
		      maxWidth: 230,
		      maxHeight: 300,
		
		  });
		
		  var image1 = '/images/navigatore.png';
		  var myLatLng1 = new google.maps.LatLng(38.1397561, 13.3427569);
		  var marker1 = new google.maps.Marker({
		      position: myLatLng1,
		      map: map,
		      icon: image1
		  });
		  
		  		  	
	}
	google.maps.event.addDomListener(window, 'load', initialize);