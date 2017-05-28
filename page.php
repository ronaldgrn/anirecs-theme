<?php get_header(); ?>

	<div id="page" class="container">
		<div class="row">
			<div id="main" class="col-md-9">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="single">

						<h2 class="single-title"><?php the_title(); ?></h2>

						<div class="content"><?php the_content(); ?></div>

						<small><p class="post-tags">
								<?php the_tags(null, ', ', null); ?>
							</p></small>
					</div>
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

                <hr>
				<?php comments_template(); ?>
			</div>
			<div id="sidebar" class="col-md-3"><?php get_sidebar(); ?></div>
		</div>
	</div>

<?php get_footer(); ?>