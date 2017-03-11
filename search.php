<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Danilo Risati 1.0
 * @since Danilo Risati 1.0
 */

get_header();
global $wp_query;
?>
<div class="page-title">
  <h1><?php printf( __( 'Resultados de busca para: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</div>

<?php get_footer(); ?>
