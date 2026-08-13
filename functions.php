<?php
function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu-1' => __('Menú Principal'),
            'header-menu-2' => __('Menú Programas'),
            'footer-menu-1' => __('Menú Footer')
        )
    );
}
add_action('init', 'register_my_menus');



function mi_tema_customizer($wp_customize) {

    // Sección donde irán los campos
    $wp_customize->add_section('contacto_section', array(
        'title'       => __('Datos de Contacto', 'theme-wp-mathpal'),
        'priority'    => 30,
        'description' => __('Datos de contacto visibles en el sitio.', 'theme-wp-mathpal'),
    ));

    // Campo: Teléfono
    $wp_customize->add_setting('telefono_opcion', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('telefono_opcion', array(
        'label'   => __('Teléfono', 'theme-wp-mathpal'),
        'section' => 'contacto_section',
        'type'    => 'text',
    ));

    // Campo: WhatsApp
    $wp_customize->add_setting('whatsapp_opcion', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('whatsapp_opcion', array(
        'label'   => __('WhatsApp', 'theme-wp-mathpal'),
        'section' => 'contacto_section',
        'type'    => 'text',
    ));

    // --- WhatsApp Link Personalizado ---
    $wp_customize->add_setting('whatsapp_link_opcion', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('whatsapp_link_opcion', array(
        'label'   => __('WhatsApp Link', 'theme-wp-mathpal'),
        'section' => 'contacto_section',
        'type'    => 'url',
        'description' => __('Ej: https://wa.me/1234567890?text=Hola', 'theme-wp-mathpal'),
    ));
}
add_action('customize_register', 'mi_tema_customizer');

add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );


function mp_enqueue_contador_assets() {
    // No hacer nada en el admin ni si no existe ACF
    if ( is_admin() || ! function_exists( 'get_field' ) ) {
        return;
    }

    // Página actual
    $post_id = get_queried_object_id();
    if ( ! $post_id ) {
        return;
    }

    // Leer campos ACF DE ESA PÁGINA
    $activo    = get_field( 'contador_activo', $post_id );
    $fecha_fin = get_field( 'contador_fecha_fin', $post_id );

    // Si el contador no está activo o no hay fecha, no cargamos nada
    if ( ! $activo || ! $fecha_fin ) {
        return;
    }

    // CSS del contador
    wp_enqueue_style(
        'mp-contador',
        get_template_directory_uri() . '/assets/css/contador.css',
        array(),
        '1.0'
    );

    
}
add_action( 'wp_enqueue_scripts', 'mp_enqueue_contador_assets' );



add_action('wp_enqueue_scripts', function () {

  // Página Learning Hub (slug exacto)
  if (is_page('learning-hub')) {
    wp_enqueue_style(
      'learning-hub-blog',
      get_stylesheet_directory_uri() . '/assets/css/blog.css',
      array(),
      '1.0.0'
    );
  }

  // Detalle de cada entrada del blog
  if (is_single() && get_post_type() === 'post') {
    wp_enqueue_style(
      'learning-hub-blog',
      get_stylesheet_directory_uri() . '/assets/css/blog.css',
      array(),
      '1.0.0'
    );
  }

}, 20);

require_once get_template_directory() . '/inc/mp-prep-courses.php';
require_once get_template_directory() . '/inc/mp-home-cintillo.php';


function mathpal_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'mathpal_woocommerce_support' );