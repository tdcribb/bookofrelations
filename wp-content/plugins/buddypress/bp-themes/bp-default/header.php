<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<?php if ( current_theme_supports( 'bp-default-responsive' ) ) : ?><meta name="viewport" content="width=device-width, initial-scale=1.0" /><?php endif; ?>
		<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?> | Preserving Your Family History for Future Generations</title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
		<?php do_action( 'bp_head' ); ?>
		<?php wp_head(); ?>
		<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/js/jquery.easing.1.3.js"></script>
		<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/js/jquery.columnizer.min.js"></script>
		<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/js/jquery.fullscreenr.js"></script>
		<script>
  			var $ = jQuery.noConflict();    
		</script>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/plugins/buddypress/bp-themes/bp-default/bor.css" />
	
		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
		<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/plugins/buddypress/bp-themes/bp-default/bor.js"></script>

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

	<body <?php body_class(); ?> id="bp-default">

		<img id="bgimg" src="/wp-content/images/content/background.jpg" />

		<?php do_action( 'bp_before_header' ); ?>

		<div id="header">

			<div id="logo">
				<a href="/"><img src="/wp-content/images/header/bor_logo.png" /></a>
			</div>

			<div id="cloud">
				<img src="/wp-content/images/header/cloud.png" />
			</div> 

			<?php do_action( 'bp_search_login_bar' ); ?>

			<?php do_action( 'bp_header' ); ?>

		</div><!-- #header -->

		<?php do_action( 'bp_after_header'     ); ?>
		<?php do_action( 'bp_before_container' ); ?>

		<div id="hp-login-container">
			<?php if ( is_user_logged_in() ) : ?>

				<?php do_action( 'bp_before_sidebar_me' ); ?>

				<div id="sidebar-me">
					<div class="hp-avatar">
						<a href="<?php echo bp_loggedin_user_domain(); ?>">
							<?php bp_loggedin_user_avatar( 'type=thumb&width=50&height=50' ); ?>
						</a>
					</div>
					<div class="hp-name"><?php echo bp_core_get_userlink( bp_loggedin_user_id() ); ?></div>
					<div class="hp-login-btn">
						<a class="button logout" href="<?php echo wp_logout_url( wp_guess_url() ); ?>"> <?php _e( 'Log Out', 'buddypress' ); ?></a>
					</div>

					<?php do_action( 'bp_sidebar_me' ); ?></br>
					<div class="user-sidebar-mssgs">Unread Messages: <a href="<?php echo bp_loggedin_user_domain();?>messages/"><?php echo messages_get_unread_count(); ?></a></div>
				</div>

				<?php do_action( 'bp_after_sidebar_me' ); ?>

				<?php if ( bp_is_active( 'messages' ) ) : ?>
					<?php bp_message_get_notices(); /* Site wide notices to all users */ ?>
				<?php endif; ?>

				<?php else : ?>

				<?php do_action( 'bp_before_sidebar_login_form' ); ?>

				<form name="login-form" id="sidebar-login-form" class="standard-form" action="<?php echo site_url( 'wp-login.php', 'login_post' ); ?>" method="post">
					<div class="hp-login-username hp-login">
						<label><span><?php _e( 'Username', 'buddypress' ); ?></span><br />
						<input type="text" name="log" id="sidebar-user-login" class="input" value="<?php if ( isset( $user_login) ) echo esc_attr(stripslashes($user_login)); ?>" tabindex="97" /></label>
					</div>
					<div class="hp-login-pass hp-login">
						<label><span><?php _e( 'Password', 'buddypress' ); ?></span><br />
						<input type="password" name="pwd" id="sidebar-user-pass" class="input" value="" tabindex="98" /></label>
					</div>
					<div class="hp-forget">
						<span class="forgetmenot"><input name="rememberme" type="checkbox" id="sidebar-rememberme" value="forever" tabindex="99" /> <?php _e( 'Remember Me', 'buddypress' ); ?></span>
					</div>
					<?php do_action( 'bp_sidebar_login_form' ); ?>
					<div class="hp-login-btn">
						<input type="submit" name="wp-submit" id="sidebar-wp-submit" value="<?php _e( 'Log In', 'buddypress' ); ?>" tabindex="100" />
						<input type="hidden" name="testcookie" value="1" />
					</div>
				</form>

				<?php do_action( 'bp_after_sidebar_login_form' ); ?>

			<?php endif; ?>
		</div>



		<div id="side-nav">
			<a href="/">Home</a>
			<a class="welcome-link" href="#">Welcome Video</a>
			<a href="/add-your-history/">Add Your History</a>
			<a href="/activity/">Browse Stories</a>
			<a href="/members/">Members</a>
			<a href="/e-books/">E-Books</a>
			<a class="faq faq-link" href="#">FAQ</a>
		</div>

		<div id="container">
			





