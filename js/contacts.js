
jQuery(document).ready(function($) {
  //map
function initialize() {
  var myCenter = new google.maps.LatLng(59.946247, 30.264337);
  var mapProp = {
    center: myCenter,
    zoom:16,
    zoomControl: true,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var myIcon = new google.maps.MarkerImage("/wp-content/themes/sculptart/images/marker.png", null, null, null,
    new google.maps.Size(37,52),
    new google.maps.Point(0,0),
    new google.maps.Point(17, 52),
    new google.maps.Size(37,52)
    );

  var marker=new google.maps.Marker({
    position: myCenter,
    icon: myIcon
  });

  
  marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
});