<?php
/*
Template Name: Family Tree (rootsPersona)
*/
?>
<?php get_header(); ?>		
		
		<div id="primary">
			<div id="content" role="main">

				<div class="homepage-info">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<h2 class="pagetitle"><?php the_title(); ?></h2>

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry">

						<?php the_content( __( '<p class="serif">Read the rest of this page &rarr;</p>', 'buddypress' ) ); ?>

						<?php wp_link_pages( array( 'before' => '<div class="page-link"><p>' . __( 'Pages: ', 'buddypress' ), 'after' => '</p></div>', 'next_or_number' => 'number' ) ); ?>
						<?php edit_post_link( __( 'Edit this page.', 'buddypress' ), '<p class="edit-link">', '</p>'); ?>

					</div>

				</div>

			<?php comments_template(); ?>

			<?php endwhile; endif; ?>
				</div>

			</div><!-- #content -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

<?php get_footer(); ?>