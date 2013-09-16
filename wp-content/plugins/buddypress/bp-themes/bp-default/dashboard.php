<?php
/*
Template Name: Dashboard
*/
?>

<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
				<?php if ( is_user_logged_in() ) : ?>
				    <?php echo do_shortcode('[wpuf_dashboard]'); ?>

				<?php else : ?>
					<div class="dash-post-mssg">
				    	<div class="not-logged-in">
				    		You must be logged in to post stories.</br></br>
				    		Please visit our <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home Page</a> to sign up and begin posting your history today.
				    	</div>
				    	</br></br>
				    	
				    </div>
				
				<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
