<?php get_header(); ?>

	<div id="page" class="container">
		<div class="row">
			<div id="single-author" class="col-md-1">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<small><?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?><br />by <?php the_author_posts_link(); ?></small>
				<?php endwhile; endif; ?>
			</div>
			<div id="main" class="col-md-8">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="single">

						<h2 class="single-title"><?php the_title(); ?></h2>

						<small><p class="single-detail">
								<?php the_time('F jS, Y'); ?> in <?php the_category( ', ' ); ?> by <?php the_author_posts_link(); ?>
							</p></small>

						<div class="content"><?php the_content(); ?></div>

						<small><p class="post-tags">
								<?php the_tags(null, ', ', null); ?>
							</p></small>
					</div>
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
			<div id="sidebar" class="col-md-3"><?php get_sidebar(); ?></div>
		</div>
	</div>

<?php get_footer(); ?>