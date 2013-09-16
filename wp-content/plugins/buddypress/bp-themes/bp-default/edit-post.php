<?php
/*
Template Name: Edit Post
*/
?>

<?php get_header(); ?>


		<div id="primary">
			<div id="content" role="main">
				<div id="edit-post-title">Edit Story</div>
				<div id="add-post-form">

					<?php if ( is_user_logged_in() ) : ?>
						<?php echo do_shortcode('[wpuf_edit]'); ?>
					<?php else: ?>
						<div class="not-logged-in">You must be logged in to Edit your stories.</br></br>
							Please visit <a href="/">Book of Relations Homepage</a> to register.</div>
					<?php endif; ?>
				</div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>