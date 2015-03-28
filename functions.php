<?php

add_theme_support( 'post-thumbnails' );

function autoCompileLess() {

    // include lessc.inc
    require_once( get_template_directory().'/less/lessc.inc.php' );

    // input and output location
    $inputFile = get_template_directory().'/less/main.less';
    $outputFile = get_template_directory().'/css/main.css';

    // load the cache
    $cacheFile = $inputFile.".cache";

    if (file_exists($cacheFile)) {
        $cache = unserialize(file_get_contents($cacheFile));
    } else {
        $cache = $inputFile;
    }

    $less = new lessc;
    // create a new cache object, and compile
    $newCache = $less->cachedCompile($cache);

    // output a LESS file, and cache file only if it has been modified since last compile
    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
        file_put_contents($cacheFile, serialize($newCache));
        file_put_contents($outputFile, $newCache['compiled']);
    }
}


// if(is_admin()) {
    add_action('init', 'autoCompileLess');
// }

    function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'branze-menu' => __( 'Branze Menu' ),
      'sklepy-menu' => __( 'Sklepy Menu')
    )
  );
}
add_action( 'init', 'register_my_menus' );


function my_register_sidebars() {

	register_sidebar(
		array(
			'id' => 'sidebar-left',
			'name' => __( 'Sidebar Left' ),
			'description' => __( 'Left sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	register_sidebar(
		array(
			'id' => 'sidebar-right',
			'name' => __( 'Sidebar Right' ),
			'description' => __( 'Right sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

    register_sidebar(
        array(
            'id' => 'sidebar-menu',
            'name' => __( 'Sidebar Menu' ),
            'description' => __( 'Menu sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );

}

add_action( 'widgets_init', 'my_register_sidebars' );

add_filter('widget_text', 'do_shortcode');

function add_my_theme_support () {
add_theme_support( 'post-thumbnails' ); }

add_action ( 'init', 'add_my_theme_support' );


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', create_function(
    '$the_template',
    'foreach( (array) get_the_category() as $cat ) {
        if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
        return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
    return $the_template;' )
);
?>