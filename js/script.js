$('.js-switcher-cube').click(function() {
  $('.js-switcher-line').removeClass('m-active');
  $(this).addClass('m-active');
  $(this).closest('.news').removeClass('m-line').addClass('m-cube');
});

$('.js-switcher-line').click(function() {
 $('.js-switcher-cube').removeClass('m-active');
 $(this).addClass('m-active');
 $(this).closest('.news').removeClass('m-cube').addClass('m-line');
});

$('.js-menuOpen').click(function() {
  $('.header_menu').addClass('m-open');
  $('body').addClass('m-open');
});

$('.js-menuClose').click(function() {
  $('.header_menu').removeClass('m-open');
  $('body').removeClass('m-open');
});

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
