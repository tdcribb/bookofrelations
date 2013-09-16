<?php
/*
Template Name: E-Books
*/
?>
<?php get_header(); ?>
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<!-- <//?php comments_template( '', true ); ?> -->

		<?php endwhile; // end of the loop. ?>

		<div id="ebooks-page-title">E-Books</div>

		<div id="ebooks-cont">

				<?php $loop = new WP_Query( array( 'post_type' => 'ebooks', 'posts_per_page' => 10, 'order' => 'ASC' ) ); ?>

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				    	<div class="entry-content">

				    		<div class="ebook-img">
				    			<a href="<?php the_field('link'); ?>" target="blank"><?php the_post_thumbnail('full'); ?></a>
				    		</div>
				    		
				        	<div class="ebook-title">
				        		<a href="<?php the_field('link'); ?>" target="blank"><?php the_title(); ?></a>
				        	</div>
				        	<div class="ebook-description"><?php the_content(); ?></div>

				    	</div>

				<?php endwhile; ?>
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>