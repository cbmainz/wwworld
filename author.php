<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>
<div class="row">
  <div class="column grid_8" id="content">
		<section id="primary">

				<?php the_post(); ?>

				<header class="page-header">
					<h1 class="page-title author"><?php printf( __( 'Author: <span class="vcard">%s</span>', 'themename' ), "<a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?></h1>
				</header>

				<?php rewind_posts(); ?>

				<?php get_template_part( 'loop', 'author' ); ?>

			</div><!-- #content -->
		</section><!-- #primary -->
    <div class="column grid_3">
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>