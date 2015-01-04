<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

<div class="row">
  <div class="column grid_8" id="content">
        <?php the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <div class="entry-meta">
              <?php
                printf( __( '<span class="meta-prep meta-prep-author">Ver&ouml;ffentlicht am </span><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s" pubdate>%3$s</time></a> <span class="meta-sep"> von </span> <span class="author vcard"><a class="url fn n" href="%4$s" title="%5$s">%6$s</a></span>, <span class="meta-prep meta-prep-author">ge&auml;ndert am </span><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s" pubdate>%7$s</time></a>', 'themename' ),
                  get_permalink(),
                  get_the_date( 'c' ),
                  get_the_date(),
                  get_author_posts_url( get_the_author_meta( 'ID' ) ),
                  sprintf( esc_attr__( 'View all posts by %s', 'themename' ), get_the_author() ),
                  get_the_author(),
                  get_the_modified_date( $d )

                );
              ?>
            </div><!-- .entry-meta -->
          </header><!-- .entry-header -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
            <?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

  </div>
  <div class="column grid_3">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
