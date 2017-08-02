<?php
/**
* Proper way to enqueue scripts and styles
*/

/**
* Agência danilo functions and definitions
*
* @package Danilo Risati
* @since Danilo Risati 1.0
*/

function danilo_scripts() {

   //Styles
   wp_enqueue_style( 'danilo-styles',  get_stylesheet_uri(), '', null, 'all' );
   wp_enqueue_style( 'danilo-plugins',  get_template_directory_uri() .'/assets/css/plugins.min.css', array(), null, 'all' );
   wp_enqueue_style( 'danilo-style',  get_template_directory_uri() .'/assets/css/style.min.css', array(), null, 'all' );
   wp_enqueue_style( 'danilo-responsive',  get_template_directory_uri() .'/assets/css/responsive.min.css', array(), null, 'all' );


   //Scripts
   wp_enqueue_script( 'danilo-jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array(), '', true );
   wp_enqueue_script( 'danilo-js', get_template_directory_uri() . '/assets/js/script.min.js', array(), '', true );

}

add_action('wp_enqueue_scripts', 'danilo_scripts');

require_once('wp_bootstrap_navwalker.php');



register_nav_menus( array(
   'primary' => __( 'Primary menu', 'danilo' ),
	 'secondary' => __( 'Secondary Menu', 'danilo' ),
	 'mobile' => __( 'Mobile Menu', 'danilo' )
) );


function arphabet_widgets_init() {

   register_sidebar( array(
       'name'          => 'Sidebar single',
       'id'            => 'single_sidebar',
       'before_widget' => '<div class="sub-items widget-area">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3 class="title">',
       'after_title'   => '</h3>',
   ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

add_theme_support( 'post-thumbnails' );
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
  if( in_array('current-menu-item', $classes) ){
      $classes[] = 'active ';
  }
  return $classes;
}

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


//projetos
add_action('init', 'type_post_projetos');

function type_post_projetos() {
	$labels = array(
		'name' => _x('Portfolio', 'post type general name'),
		'singular_name' => _x('Portfolio', 'post type singular name'),
		'add_new' => _x('Adicionar Novo', 'Novo item'),
		'add_new_item' => __('Novo Item'),
		'edit_item' => __('Editar Item'),
		'new_item' => __('Novo Item'),
		'view_item' => __('Ver Item'),
		'search_items' => __('Procurar Itens'),
		'not_found' =>  __('Nenhum registro encontrado'),
		'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
		'parent_item_colon' => '',
		'menu_name' => 'Portfolio'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,

		'supports' => array('title','editor','thumbnail','page-attribute')
		);

register_post_type( 'projetos' , $args );
flush_rewrite_rules();
}


register_taxonomy(
"categoria",
		"projetos",
		array(
			"label" => "Categoria",
					"singular_label" => "categoria",
					"rewrite" => true,
					"hierarchical" => true
)
);
add_filter('pre_get_posts', 'postsfeed');

function postsfeed($query){
	if( is_feed() ){
			$query->set('post_type', array('post', 'projetos'));
	}
	return $query;
}
