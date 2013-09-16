<?php
/*
Template Name: Add History
*/
?>

<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
				<div class="form-descr">
					Write your own chapter in the Book of Relations...
				</div>
				<?php while ( have_posts() ) : the_post(); ?>
					<div id="add-post-form" class="form-descr-container">
						<?php echo do_shortcode('[wpuf_addpost redirect_after="/add-your-history/dashboard/"]'); ?>
					</div>
				<?php endwhile; // end of the loop. ?>

				<div id="edit-post-link">
					<a href="/add-your-history/dashboard/">Edit/Review Previous Posts</a>
				</div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>