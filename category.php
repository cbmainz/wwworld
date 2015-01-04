<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>
<div class="row">
  <div class="column grid_8" id="content">
		<section id="primary">

				<header class="page-header">
					<h1 class="page-title"><?php
						printf( __( 'Kategorie: %s', 'themename' ), '<span>' . single_cat_title( '', false ) . '</span>' );
					?></h1>

					<?php $categorydesc = category_description(); if ( ! empty( $categorydesc ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>
				</header>

				<?php get_template_part( 'loop', 'category' ); ?>

			</div><!-- #content -->
		</section>

    <!-- #primary -->
    <div class="column grid_3">
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>