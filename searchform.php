<?php
/**
 * The template for displaying search forms in Shape
 *
 * @package Danilo Risati
 * @since  Danilo Risati 1.0
 */
?>

<div class="form-search">
    <form role="search" method="get" id="searchform" action="<?php echo get_option('home'); ?>">
        <div>
            <input type="text" value="<?php echo esc_attr( apply_filters( 'the_search_query' , get_search_query() ) ); ?>" name="s" id="s" />
            <input type="submit" id="searchsubmit" value="Buscar" />
        </div>
    </form>
</div>
