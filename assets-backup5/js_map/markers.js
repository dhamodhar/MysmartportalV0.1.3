var geocoder;
var result
var  map;
var lat1;
var lng1;
$(document).ready(function() {
  $("#map").css({
		height: 600,
		width: 1280
	});
	var myLatLng = new google.maps.LatLng(44.3148,-85.6024);
  MYMAP.init('#map', myLatLng, 11);
  
  $("#showmarkers").click(function(e){
		
		 map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5,
        center: new google.maps.LatLng('37.8393332','-84.2700178999997'),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
	  
	  
		 $.ajax({
            type: "GET",
            url: "http://lowrysmartportal.com/index.php/welcome/all_assets/%20/50",
            dataType: "text",
            success: function(xml){
			
			 $(xml).find('assetspage').each(function(){
				geocoder = new google.maps.Geocoder();
			 var assetaddress= $(this).find('assetaddress').text();
			 var assetdesc= $(this).find('part_description').text();
			//alert(assetaddress);

		
		 geocoder.geocode( { 'address': assetaddress}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
	  var lng_final = results[0].geometry.location.lng();
	  var lat_final = results[0].geometry.location.lat();
	  //alert(lng_final+","+lat_final);
	  loadmarkers(lat_final,lng_final,assetaddress,assetdesc);
	   } else {
        //alert('Geocode was not successful for the following reason: ' + status);
      }
    });
			
			 });
			 },
            error: function() {
            //alert("No Response - Cannot process the data.");
            }
        });
		
		
		
		
		
		

		
		
		
  });
});

var MYMAP = {
  map: null,
	bounds: null
}

MYMAP.init = function(selector, latLng, zoom) {
  var myOptions = {
    zoom:zoom,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  this.map = new google.maps.Map($(selector)[0], myOptions);
	this.bounds = new google.maps.LatLngBounds();
}

MYMAP.placeMarkers = function(filename) {
  

}


function loadmarkers(lat,lng,address,partdesc)
{

 
 
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(lat,lng),
		  icon:'http://liva.co/busybug/images/icon.png',
          map: map,
		  draggable:true,
          title: address,
		
        });	
		 var contentString = $('<div class="marker-info-win">'+
        '<div class="marker-inner-win"><span class="info-content">'+
        '<h1 class="marker-heading">'+partdesc+'</h1>'+
        ''+
        '</span>'+
        '</div></div>');
		 var infowindow = new google.maps.InfoWindow();
       
        //set the content of infoWindow
        infowindow.setContent(contentString[0]);
       
        //add click event listener to marker which will open infoWindow          
        google.maps.event.addListener(marker, 'click', function() {
	
            infowindow.open(map,marker); // click on marker opens info window
        });
		
		
		
		//marker1.setMap(map);
		
		
}