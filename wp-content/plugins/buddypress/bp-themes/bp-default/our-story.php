<?php
/*
Template Name: Our Story
*/
?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<?php if ( current_theme_supports( 'bp-default-responsive' ) ) : ?><meta name="viewport" content="width=device-width, initial-scale=1.0" /><?php endif; ?>
		<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?> | Preserving Your Family History for Future Generations</title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
		<?php do_action( 'bp_head' ); ?>
		<?php wp_head(); ?>

		<script>
  			var $ = jQuery.noConflict();    
		</script>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/plugins/buddypress/bp-themes/bp-default/bor.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/plugins/buddypress/bp-themes/bp-default/iphone.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/plugins/buddypress/bp-themes/bp-default/parallax.css" />
		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
		

		<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/plugins/buddypress/bp-themes/bp-default/bor.js"></script>
		<script src="/wp-content/js/parallax.js"></script>

		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-36827559-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>

		<script type="text/javascript">
  			(function() {
    			var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    			po.src = 'https://apis.google.com/js/plusone.js';
    			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  			})();
		</script>

		<meta property="og:image" og:title="Book of Relations | Preserving Your Family History for Future Generations" 
			og:url="http://bookofrelations.com/" content="http://bookofrelations.com/wp-content/images/book-logo-h150.png"/>
		<link rel="image_src" href="http://bookofrelations.com/wp-content/images/book-logo-h150.png"/>

		<script>
			(function() {
			  var cx = '014338141873828747484:czygx5qv2xw';
			  var gcse = document.createElement('script'); gcse.type = 'text/javascript';
			  gcse.async = true;
			  gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
			      '//www.google.com/cse/cse.js?cx=' + cx;
			  var s = document.getElementsByTagName('script')[0];
			  s.parentNode.insertBefore(gcse, s);
			})();
		</script>



		
	</head>

	<body id="body">

		<div id="night-bg"><img class="stars" src="/wp-content/images/parallax/stars.png" /></div>

		<img id="moon" src="/wp-content/images/parallax/moon.png" />

		<img class="cloud" src="/wp-content/images/parallax/cloud-solid-lg.png" />
		<img class="cloud" src="/wp-content/images/parallax/cloud-opac-med.png" />
		<img class="cloud" src="/wp-content/images/parallax/cloud-solid-med.png" />
		<img class="cloud" src="/wp-content/images/parallax/cloud-solid-sm.png" />
		<img class="cloud" src="/wp-content/images/parallax/cloud-opac-sm.png" />

		<div id="parallax-container">

			<div id="sun"><img class="sun" src="/wp-content/images/parallax/sun.png" /></div>

			<img class="hills day-hills" src="/wp-content/images/parallax/hills.png" />
			<img class="hills night-hills" src="/wp-content/images/parallax/night-hills.png" />

		</div>

		<div id="scroll-instr">Scroll Down to View Our Story</div>

		<div id="dialogue-container">
			<div id="young-dialogue" class="dialogue-bubble dialogue-bubble-right">
				<div class="dialogue-text">
					I love your stories!
				</div>
				<div class="dialogue-text">
					We should create a place for us to put those stories so we can share to our friends and family.
				</div>
				<div class="dialogue-text">
					And you don't have to worry about losing these memories to time anymore.
				</div>
				<div class="dialogue-text">
					Just like I admire and appreciate your stories now, my children and theirs will be able to enjoy them just as much.
				</div>
			</div>
			<div id="old-dialogue" class="dialogue-bubble dialogue-bubble-left">
				<div class="dialogue-text">
					I have so many stories I wish I could tell and have you and your children be able to look back on them.
				</div>
				<div class="dialogue-text">
					A website to create archives of these events is the perfect place to keep these stories, pictures and videos. 
				</div>
				<div class="dialogue-text">
					It makes me feel at ease my stories, my family history, and the people I met will be passed on to future generations.
				</div>
				<div class="dialogue-text">
					Here is Book of Relations!
				</div>
			</div>
		</div>

		<div id="silh-container">
			<div id="old-man">
				<img src="/wp-content/images/parallax/man.png" />
			</div>
			<div id="young-man">
				<img src="/wp-content/images/parallax/boy.png" />
			</div>
		</div>

	</body>

</html>




