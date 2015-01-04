<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

<div class="row">
  <div class="column grid_8" id="content">
  <article>
    <?php get_template_part( 'loop', 'index' ); ?>
  </div>
  </article>
  <div class="column grid_3">
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>

