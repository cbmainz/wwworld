<?php
/**
 * The template used to display Tag Archive pages
 *
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>
<div class="row">
  <div class="column grid_8" id="content">
		<section id="primary">
			

				<?php the_post(); ?>

				<header class="page-header">
					<h1 class="page-title"><?php
						printf( __( 'Schlagwort: %s', 'themename' ), '<span>' . single_tag_title( '', false ) . '</span>' );
					?></h1>
				</header>

				<?php rewind_posts(); ?>

				<?php get_template_part( 'loop', 'tag' ); ?>

			<!-- #content -->
		</section>
    </div><!-- #primary -->
    <div class="column grid_3">
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>