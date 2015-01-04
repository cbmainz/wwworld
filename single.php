<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

<div class="row">
  <div class="column grid_8" id="content">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
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
                  sprintf( esc_attr__( ' %s', 'themename' ), get_the_author() ),
                  get_the_author(),
                  get_the_modified_date( $d )
                );
              ?>
            </div><!-- .entry-meta -->
          </header><!-- .entry-header -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
          </div><!-- .entry-content -->

          <footer class="entry-meta">
            <?php
              $tag_list = get_the_tag_list( '', ', ' );
              if ( '' != $tag_list ) {
                $utility_text = __( 'Kategorie: %1$s | Schlagwort: %2$s. &#x25BA; <a href="%3$s" title="Permalink zu %4$s" rel="bookmark">Permalink</a>.', 'themename' );
              } else {
                $utility_text = __( 'Kategorie: %1$s | &#x25BA; <a href="%3$s" title="Permalink zu %4$s" rel="bookmark">Permalink</a>.', 'themename' );
              }
              printf(
                $utility_text,
                get_the_category_list( ', ' ),
                $tag_list,
                get_permalink(),
                the_title_attribute( 'echo=0' )
              );
            ?>

            <?php edit_post_link( __( 'Bearbeiten', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
          </footer><!-- .entry-meta -->
        </article><!-- #post-<?php the_ID(); ?> -->

        <?php comments_template( '', true ); ?>

 

      <?php endwhile; // end of the loop. ?>

    </div><!-- #primary -->
    <div class="column grid_3">
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>