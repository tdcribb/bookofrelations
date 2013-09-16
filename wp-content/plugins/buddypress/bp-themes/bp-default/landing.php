<?php
/*
Template Name: Landing Page
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/plugins/buddypress/bp-themes/bp-default/iphone.css" />
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
					<!-- <span class="sidebar-login-title">LOGIN</span> -->
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

		<?php if ( is_user_logged_in() ) : ?>
			<div id="side-nav" ref="landingphp_here_only">
				<a href="/">Home</a>
				<a class="welcome-link" href="#">Welcome Video</a>
				<a href="/add-your-history/">Add Your History</a>
				<a href="/activity/">Browse Stories</a>
				<a href="/members/">Members</a>
				<a href="/e-books/">E-Book Store</a>
				<a class="faq faq-link" href="#">FAQ</a>
			</div>
		<?php endif; ?>

		<div id="landing-container" class="test">
			<?php if ( is_user_logged_in() ) : ?>
				<div id="landing-title">
					<span class="landing-welcome">Welcome to Book of Relations!</span></br>
					Begin your search below </br>
					or start browsing and adding your own stories.
				</div>
					
				<div id="landing-search-form">
					<div id="landing-search-bor">
						Search Book of Relations
						<div id="bor-search"><?php get_search_form(); ?></div>
					</div>
					<div id="landing-search-google">
						Search the Internet
						<div id="google-search"><gcse:search></gcse:search></div>
					</div>
				</div>

				<div id="landing-page-links">
					<div class="landing-browse-link landing-link">
						<div class="landing-link-each"><a href="/activity">Browse Archive of Stories</a></div>
					</div>
					<div class="landing-add-link landing-link">
						<div class="landing-link-each"><a href="/add-your-history">Add Your Own Story</a></div>
					</div>
				</div>

				<div id="our-story-link"><a href="/our-story" target="_blank">View Our Story</a></div>

			<?php else : ?>
				<div id="landing-title">
					Join for <em><b>FREE</b></em> and Begin Exploring our Archive of Stories and Relations and Add Your Own Stories
				</div>

				<?php global $bp; ?>
						<?php if(empty($bp->signup->step)) :
							$bp->signup->step='request-details';?>

							<form action="<?php echo bp_get_root_domain().'/'.BP_REGISTER_SLUG;?>" name="signup_form" id="signup_form" class="standard-form hp-register-form" method="post" enctype="multipart/form-data">
					
								<?php if ( 'request-details' == bp_get_current_signup_step() ) : ?>
					
									<?php do_action( 'template_notices' ); ?>
					
									<?php do_action( 'bp_before_account_details_fields' ); ?>
					
									<div id="basic-details-section" class="register-section">
					
										<?php /***** Basic Account Details ******/ ?>
					
										<!-- <h4><//?php _e( 'Account Details', 'buddypress' ); ?></h4> -->
										<div class="reg-form-input">
											<label for="signup_username"><?php _e( 'Username', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?>NO spaces</label>
											<?php do_action( 'bp_signup_username_errors' ); ?>
											<input type="text" name="signup_username" id="signup_username" value="<?php bp_signup_username_value(); ?>" />
										</div>
										<div id="email-input" class="reg-form-input">
											<label for="signup_email"><?php _e( 'Email Address', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label>
											<?php do_action( 'bp_signup_email_errors' ); ?>
											<input type="text" name="signup_email" id="signup_email" value="<?php bp_signup_email_value(); ?>" />
										</div>
										<div class="reg-form-input">
											<label for="signup_password"><?php _e( 'Choose a Password', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label>
											<?php do_action( 'bp_signup_password_errors' ); ?>
											<input type="password" name="signup_password" id="signup_password" value="" />
										</div>
										<div id="password-input" class="reg-form-input">
											<label for="signup_password_confirm"><?php _e( 'Confirm Password', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label>
											<?php do_action( 'bp_signup_password_confirm_errors' ); ?>
											<input type="password" name="signup_password_confirm" id="signup_password_confirm" value="" />
										</div>
									</div><!-- #basic-details-section -->
					
									<?php do_action( 'bp_after_account_details_fields' ); ?>
					
									<?php /***** Extra Profile Details ******/ ?>
					
									<?php if ( bp_is_active( 'xprofile' ) ) : ?>
					
										<?php do_action( 'bp_before_signup_profile_fields' ); ?>
					
										<div id="profile-details-section" class="register-section">
					
											<!-- <h4><//?php _e( 'Profile Details', 'buddypress' ); ?></h4> -->
					
											<?php /* Use the profile field loop to render input fields for the 'base' profile field group */ ?>
											<?php if ( bp_is_active( 'xprofile' ) ) : if ( bp_has_profile( 'profile_group_id=1' ) ) : while ( bp_profile_groups() ) : bp_the_profile_group(); ?>
					
											<?php while ( bp_profile_fields() ) : bp_the_profile_field(); ?>
												
												<div class="editfield" rel="<?php echo bp_the_profile_field_name(); ?>">
					
													<?php if ( 'textbox' == bp_get_the_profile_field_type() ) : ?>
					
														<label for="<?php bp_the_profile_field_input_name(); ?>"><?php bp_the_profile_field_name(); ?> <?php if ( bp_get_the_profile_field_is_required() ) : ?><?php _e( '(required)', 'buddypress' ); ?><?php endif; ?></label>
														<?php do_action( 'bp_' . bp_get_the_profile_field_input_name() . '_errors' ); ?>
														<input type="text" name="<?php bp_the_profile_field_input_name(); ?>" id="<?php bp_the_profile_field_input_name(); ?>" value="<?php bp_the_profile_field_edit_value(); ?>" />
					
													<?php endif; ?>
					
													<?php if ( 'textarea' == bp_get_the_profile_field_type() ) : ?>
					
														<label for="<?php bp_the_profile_field_input_name(); ?>"><?php bp_the_profile_field_name(); ?> <?php if ( bp_get_the_profile_field_is_required() ) : ?><?php _e( '(required)', 'buddypress' ); ?><?php endif; ?></label>
														<?php do_action( 'bp_' . bp_get_the_profile_field_input_name() . '_errors' ); ?>
														<textarea rows="5" cols="40" name="<?php bp_the_profile_field_input_name(); ?>" id="<?php bp_the_profile_field_input_name(); ?>"><?php bp_the_profile_field_edit_value(); ?></textarea>
					
													<?php endif; ?>
					
													<?php if ( 'selectbox' == bp_get_the_profile_field_type() ) : ?>
					
														<label for="<?php bp_the_profile_field_input_name(); ?>"><?php bp_the_profile_field_name(); ?> <?php if ( bp_get_the_profile_field_is_required() ) : ?><?php _e( '(required)', 'buddypress' ); ?><?php endif; ?></label>
														<?php do_action( 'bp_' . bp_get_the_profile_field_input_name() . '_errors' ); ?>
														<select name="<?php bp_the_profile_field_input_name(); ?>" id="<?php bp_the_profile_field_input_name(); ?>">
															<?php bp_the_profile_field_options(); ?>
														</select>
					
													<?php endif; ?>
					
													<?php if ( 'multiselectbox' == bp_get_the_profile_field_type() ) : ?>
					
														<label for="<?php bp_the_profile_field_input_name(); ?>"><?php bp_the_profile_field_name(); ?> <?php if ( bp_get_the_profile_field_is_required() ) : ?><?php _e( '(required)', 'buddypress' ); ?><?php endif; ?></label>
														<?php do_action( 'bp_' . bp_get_the_profile_field_input_name() . '_errors' ); ?>
														<select name="<?php bp_the_profile_field_input_name(); ?>" id="<?php bp_the_profile_field_input_name(); ?>" multiple="multiple">
															<?php bp_the_profile_field_options(); ?>
														</select>
					
													<?php endif; ?>
					
													<?php if ( 'radio' == bp_get_the_profile_field_type() ) : ?>
					
														<div class="radio">
															<span class="label"><?php bp_the_profile_field_name(); ?> <?php if ( bp_get_the_profile_field_is_required() ) : ?><?php _e( '(required)', 'buddypress' ); ?><?php endif; ?></span>
					
															<?php do_action( 'bp_' . bp_get_the_profile_field_input_name() . '_errors' ); ?>
															<?php bp_the_profile_field_options(); ?>
					
															<?php if ( !bp_get_the_profile_field_is_required() ) : ?>
																<a class="clear-value" href="javascript:clear( '<?php bp_the_profile_field_input_name(); ?>' );"><?php _e( 'Clear', 'buddypress' ); ?></a>
															<?php endif; ?>
														</div>
					
													<?php endif; ?>
					
													<?php if ( 'checkbox' == bp_get_the_profile_field_type() ) : ?>
					
														<div class="checkbox">
															<span class="label"><?php bp_the_profile_field_name(); ?> <?php if ( bp_get_the_profile_field_is_required() ) : ?><?php _e( '(required)', 'buddypress' ); ?><?php endif; ?></span>
					
															<?php do_action( 'bp_' . bp_get_the_profile_field_input_name() . '_errors' ); ?>
															<?php bp_the_profile_field_options(); ?>
														</div>
					
													<?php endif; ?>
					
													<?php if ( 'datebox' == bp_get_the_profile_field_type() ) : ?>
					
														<div class="datebox">
															<label for="<?php bp_the_profile_field_input_name(); ?>_day"><?php bp_the_profile_field_name(); ?> <?php if ( bp_get_the_profile_field_is_required() ) : ?><?php _e( '(required)', 'buddypress' ); ?><?php endif; ?></label>
															<?php do_action( 'bp_' . bp_get_the_profile_field_input_name() . '_errors' ); ?>
					
															<select name="<?php bp_the_profile_field_input_name(); ?>_day" id="<?php bp_the_profile_field_input_name(); ?>_day">
																<?php bp_the_profile_field_options( 'type=day' ); ?>
															</select>
					
															<select name="<?php bp_the_profile_field_input_name(); ?>_month" id="<?php bp_the_profile_field_input_name(); ?>_month">
																<?php bp_the_profile_field_options( 'type=month' ); ?>
															</select>
					
															<select name="<?php bp_the_profile_field_input_name(); ?>_year" id="<?php bp_the_profile_field_input_name(); ?>_year">
																<?php bp_the_profile_field_options( 'type=year' ); ?>
															</select>
														</div>
					
													<?php endif; ?>
													
													<?php if ( bp_current_user_can( 'bp_xprofile_change_field_visibility' ) ) : ?>
														<p class="field-visibility-settings-toggle" id="field-visibility-settings-toggle-<?php bp_the_profile_field_id() ?>">
															<?php printf( __( 'This field can be seen by: <span class="current-visibility-level">%s</span>', 'buddypress' ), bp_get_the_profile_field_visibility_level_label() ) ?> <a href="#" class="visibility-toggle-link">Change</a>
														</p>
														
														<div class="field-visibility-settings" id="field-visibility-settings-<?php bp_the_profile_field_id() ?>">
															<fieldset>
																<legend><?php _e( 'Who can see this field?', 'buddypress' ) ?></legend>
															
																<?php bp_profile_visibility_radio_buttons() ?>
															
															</fieldset>
															<a class="field-visibility-settings-close" href="#"><?php _e( 'Close', 'buddypress' ) ?></a>
															
														</div>
													<?php else : ?>
														<p class="field-visibility-settings-notoggle" id="field-visibility-settings-toggle-<?php bp_the_profile_field_id() ?>">
															<?php printf( __( 'This field can be seen by: <span class="current-visibility-level">%s</span>', 'buddypress' ), bp_get_the_profile_field_visibility_level_label() ) ?>
														</p>			
													<?php endif ?>
					
					
													<?php do_action( 'bp_custom_profile_edit_fields' ); ?>
					
													<p class="description"><?php bp_the_profile_field_description(); ?></p>
					
												</div>
												
											<?php endwhile; ?>
					
											<input type="hidden" name="signup_profile_field_ids" id="signup_profile_field_ids" value="<?php bp_the_profile_group_field_ids(); ?>" />
					
											<?php endwhile; endif; endif; ?>
					
										</div><!-- #profile-details-section -->
					
										<!-- <//?php do_action( 'bp_after_signup_profile_fields' ); ?> -->
					
									<?php endif; ?>
					
									<div id="agree-terms"><input type="checkbox" class="agree-checkbox" />
										I agree to the <span class="reg-accept-terms policy-link">Terms of Use and Privacy Policy</span> for Book of Relations.
									</div>
					
									<?php do_action( 'bp_before_registration_submit_buttons' ); ?>
					

									<div class="submit">
										<div id="cover-submit"></div>
										<input type="submit" name="signup_submit" id="signup_submit" value="REGISTER" />
									</div>
					
									<?php do_action( 'bp_after_registration_submit_buttons' ); ?>
					
									<?php wp_nonce_field( 'bp_new_signup' ); ?>
					
								<?php endif; // request-details signup step ?>
					
								<?php if ( 'completed-confirmation' == bp_get_current_signup_step() ) : ?>
					
									<h2><?php _e( 'Sign Up Complete!', 'buddypress' ); ?></h2>
					
									<?php do_action( 'template_notices' ); ?>
									<?php do_action( 'bp_before_registration_confirmed' ); ?>
					
									<?php if ( bp_registration_needs_activation() ) : ?>
										<p><?php _e( 'You have successfully created your account!</br> To begin using this site you will need to activate your account via the email we have just sent to your address.', 'buddypress' ); ?></p>
									<?php else : ?>
										<p><?php _e( 'You have successfully created your account!</br> Please log in using the username and password you have just created.', 'buddypress' ); ?></p>
									<?php endif; ?>
					
									<?php do_action( 'bp_after_registration_confirmed' ); ?>
					
								<?php endif; // completed-confirmation signup step ?>
					
								<?php do_action( 'bp_custom_signup_steps' ); ?>
					
							</form>
						<?php endif; ?>

						<div id="our-story-link"><a href="/our-story" target="_blank">View Our Story</a></div>
		
			<?php endif; ?>

			
		</div>


		<div id="false-container">

<?php get_footer(); ?>
