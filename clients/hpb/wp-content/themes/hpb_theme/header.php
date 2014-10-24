<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title(''); ?></title>
<link href='http://fonts.googleapis.com/css?family=Londrina+Sketch|Vast+Shadow|Special+Elite|Ribeye+Marrow|Miltonian|Londrina+Shadow|Rye' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/jquery.labelify.js"></script>
<script>
function matchHeight(classname,padding) {
			var max = 0;
			var height = 0;
			jQuery(classname).each(function () {
				jQuery(this).height('auto');
				height = jQuery(this).height();
				//alert('max: '+max+' height: '+height);
				if(max < height) {
					max = height;	
				}
			});
			
				jQuery(classname).each(function () {
					jQuery(this).height(max+padding);
				});
			
		}
jQuery(document).ready(function($) {
	
	$("#mce-EMAIL").labelify({
  		
	});
	$(".gemform").labelify();
	
	
	
	
	
		matchHeight('.homebox',0);

	
	var delay = 15;
	var bdelay = delay*1000;
	var banners = $('#scroller .scroll').size(); 	
	var i = 1;

	function rotateBanner() {
		if(i < banners) {
				bannerScroll(i); //Trigger the paging and slider function
				n=i+1;
				i ++;
			} else {
				bannerScroll(0)
				i = 1;
			}
	}

	function bannerScroll(n) {
		var margin = n*681;
		$(".scrolltext").fadeOut(400);
		$("#scrollin").delay(500).animate({ 
				marginLeft: "-"+margin+"px"
			}, 2000 );
		$(".scrolltext").delay(2100).fadeIn(400);	
	}

	rotateSwitch = function(){
		play = setInterval(function(){ //Set timer - this will repeat itself every 3 seconds
			rotateBanner();
			}, bdelay);
	}
	rotateSwitch();

});
jQuery(document).on('submit', '.hiddengemform', function($)
	{
			var fields = jQuery(this).serialize();
			jQuery.ajax({
					  type: 'POST',
					  url: '<?php bloginfo('stylesheet_directory'); ?>/ajax/gem-submit.php',
					  data: fields,
					  success: function(data) 	
					  { 	
					  	jQuery(".hiddengemform").html(data);
						jQuery(".gemform").labelify();
						matchHeight('.homebox',0);
					  }
				});
		return false;
	});
</script>

</head>

<body <?php body_class(); ?>>
<div id="headerwrap">
    	<div id="header" class="padding">
       	  <div id="logo">
            	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" width="282" height="126" alt="Hand Picked Beers" />
            </div>
            
            <div id="social">
            	<form action="http://handpickedbeers.us6.list-manage.com/subscribe/post?u=334295db5c45ec3f0f500812f&amp;id=8da574149a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                   <h2>Newsletter Sign Up</h2>
                    <p>Sign up to our newsletter to make sure you stay up to date with all of the new beers we bring in.</p>
                	<input type="text" title="Email Address..." id="mce-EMAIL" name="EMAIL" /><input id="mc-embedded-subscribe" type="submit" class="nlbutton" value="Sign Up"/>
                </form>
            	<a href="http://twitter.com/HandpickedBeers"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" width="26" height="26" alt="Twitter" /></a> <a href="http://www.facebook.com/HandpickedBeers/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" width="26" height="26" alt="Facebook" /></a> <a href="/feed/rss2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" width="26" height="26" alt="RSS" /></a> <!--<img src="<?php bloginfo('stylesheet_directory'); ?>/images/email.png" width="26" height="26" alt="Email" />-->
                
            </div>
            <div class="clear"></div>
  </div>
    </div>
    <div id="mainwrap" class="padding">
    <?php get_sidebar(); ?>