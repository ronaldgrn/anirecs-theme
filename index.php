<?php get_header(); ?>

<div id="page" class="container">
    <div class="row">
        <div id="main" class="col-md-9">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="post">

                    <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                    <small><p class="post-detail">
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