<?php

// Registrar Scripts JS e o CSS
function origamid_scripts() {
	// Registrar Anime, Slide e Form
	wp_register_script( 'simple-anime', get_template_directory_uri() . '/js/simple-anime.js', array(), false, true );
	wp_register_script( 'simple-slide', get_template_directory_uri() . '/js/simple-slide.js', array(), false, true );
	wp_register_script( 'simple-form', get_template_directory_uri() . '/js/simple-form.js', array(), false, true );
	
	// Registrar Script
	wp_register_script( 'main-script', get_template_directory_uri() . '/js/script.js', array( 'simple-anime', 'simple-slide', 'simple-form' ), false, true );
	
	wp_enqueue_script( 'main-script' );
}
add_action( 'wp_enqueue_scripts', 'origamid_scripts' );

function CSS_for_current_wpSite() {
	wp_register_style(
		'main-style',
		get_template_directory_uri() . '/style.css',
		[],
		false,
		false
	);

	wp_enqueue_style('main-style');	

}
add_action('wp_enqueue_scripts', 'CSS_for_current_wpSite');


// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

// Registrar Menu
function register_header_menu() {
	register_nav_menu('menu-principal', __('Menu Principal'));
}


// Funções Adicionais
// Tamanhos de Imagens personalizados
function custom_sizes_bikcraft() {
  add_image_size('large', 1400, 380, true);
  add_image_size('medium', 768, 380, true);
}

// Tipos de Posts persnalizados (Custom Post Types)
function custom_post_type_produtos() {
	register_post_type('produtos', [
		'label' => 'Produtos',
		'description' => 'Produtos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => ['slug' => 'produtos', 'with_front' => true],
		'query_var' => true,
		'supports' => ['title', 'editor', 'page-attributes','post-formats'],

		'labels' => [
			'name' => 'Produtos',
			'singular_name' => 'Produto',
			'menu_name' => 'Produtos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Produto',
			'edit' => 'Editar',
			'edit_item' => 'Editar Produto',
			'new_item' => 'Novo Produto',
			'view' => 'Ver Produto',
			'view_item' => 'Ver Produto',
			'search_items' => 'Procurar Produtos',
			'not_found' => 'Nenhum Produto Encontrado',
			'not_found_in_trash' => 'Nenhum Produto Encontrado no Lixo',
    ]
	]);
}

add_action('init', 'register_header_menu');
add_action('after_setup_theme', 'custom_sizes_bikcraft');
add_action('init', 'custom_post_type_produtos');

?>
