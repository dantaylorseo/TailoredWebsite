<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php wp_title(''); ?></title>
<link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700|Open+Sans:400,300,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
<?php wp_head(); ?>
<script>
jQuery(function($) {
    $('.banner').unslider({
		speed: 1500,               //  The speed to animate each slide (in milliseconds)
		delay: 8000,              //  The delay between slide animations (in milliseconds)
		keys: true,               //  Enable keyboard (left, right) arrow shortcuts
		dots: true,               //  Display dot navigation
		fluid: false              //  Support responsive design. May break non-responsive designs
	});
	
	$('.testibanner').unslider({
		speed: 1500,               //  The speed to animate each slide (in milliseconds)
		delay: 16000,              //  The delay between slide animations (in milliseconds)
		keys: true,               //  Enable keyboard (left, right) arrow shortcuts
		dots: true,               //  Display dot navigation
		fluid: false              //  Support responsive design. May break non-responsive designs
	});
	
	$("#home-scroller-inner").fadeIn();
	function matchHeight(classname,padding) {
			var maxh = 0;
			var height = 0;
			$(classname).each(function () {
				$(this).height('auto');
				height = $(this).height();
				if(maxh < height) {
					maxh = height;	
				}
			});
			
				$(classname).each(function () {
					$(this).height(maxh+padding);
				});
				
			
		}
	
		matchHeight('.home-box',50);
		
		
});

</script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
 
<script type="text/javascript">
 
// The latitude and longitude of your business / place
var position = [53.355091,-3.008613];
var center = [53.355051,-3.008617];
function showGoogleMaps() {
 
    var latLng = new google.maps.LatLng(position[0], position[1]);
	var latLng2 = new google.maps.LatLng(center[0], center[1]);
 	
    var mapOptions = {
        zoom: 10, // initialize zoom level - the max value is 21
        streetViewControl: false, // hide the yellow Street View pegman
        scaleControl: true, // allow users to zoom the Google Map
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng2
    };
 
    map = new google.maps.Map(document.getElementById('contact-header'),
        mapOptions);
 
    // Show the default red marker at the location
    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP
    });
}
 
google.maps.event.addDomListener(window, 'load', showGoogleMaps);
</script>
</head>

<body>
<div id="container">
<header id="header">
	<div id="header-inner" class="wrapper">
        <div id="logo"><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt=""/></a></div>
        <nav id="main-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'sf-menu' ) ); ?>
        </nav>
        <div class="clear"></div>
    </div>
</header>