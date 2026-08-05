<?php

function mp_home_cintillo_image_url( $image ) {
    if ( is_array( $image ) && ! empty( $image['url'] ) ) {
        return esc_url( $image['url'] );
    }

    if ( is_numeric( $image ) ) {
        $url = wp_get_attachment_image_url( (int) $image, 'full' );
        if ( $url ) {
            return esc_url( $url );
        }
    }

    return '';
}

function mp_home_get_cintillo_field_group_definition() {
    return array(
        'key'                   => 'group_mp_home_cintillo',
        'title'                 => 'Home — Cintillo (post banner)',
        'fields'                => array(
            array(
                'key'           => 'field_mp_home_cintillo_desktop',
                'label'         => 'Imagen desktop',
                'name'          => 'home_cintillo_imagen_desktop',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'instructions'  => 'Imagen ancha para pantallas medianas y grandes.',
            ),
            array(
                'key'           => 'field_mp_home_cintillo_mobile',
                'label'         => 'Imagen mobile',
                'name'          => 'home_cintillo_imagen_mobile',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'instructions'  => 'Imagen optimizada para celular. Si está vacía, se usa la de desktop.',
            ),
            array(
                'key'           => 'field_mp_home_cintillo_link',
                'label'         => 'Link del cintillo',
                'name'          => 'home_cintillo_link',
                'type'          => 'url',
                'required'      => 0,
                'placeholder'   => 'https://www.mathpal.us/sat-prep-courses/',
                'instructions'  => 'URL al hacer clic en todo el cintillo (imagen + fondo verde).',
            ),
        ),
        'location'              => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'template-home.php',
                ),
            ),
            array(
                array(
                    'param'    => 'page_type',
                    'operator' => '==',
                    'value'    => 'front_page',
                ),
            ),
        ),
        'menu_order'            => 5,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    );
}

function mp_home_delete_cintillo_acf_field_group() {
    if ( ! function_exists( 'acf_delete_field_group' ) ) {
        return;
    }

    $posts = get_posts(
        array(
            'post_type'      => 'acf-field-group',
            'posts_per_page' => -1,
            'post_status'    => 'any',
            'name'           => 'group_mp_home_cintillo',
        )
    );

    foreach ( $posts as $post ) {
        acf_delete_field_group( $post->ID );
    }
}

function mp_home_install_cintillo_acf_field_group() {
    if ( ! function_exists( 'acf_import_field_group' ) ) {
        return;
    }

    $version       = '1.1.0';
    $saved_version = get_option( 'mp_home_cintillo_acf_version', '' );

    if ( $saved_version === $version ) {
        return;
    }

    mp_home_delete_cintillo_acf_field_group();
    acf_import_field_group( mp_home_get_cintillo_field_group_definition() );
    update_option( 'mp_home_cintillo_acf_version', $version );
}
add_action( 'init', 'mp_home_install_cintillo_acf_field_group', 20 );

function mp_home_maybe_migrate_cintillo_link_field() {
    if ( get_option( 'mp_home_cintillo_link_migrate_v1_1' ) || ! function_exists( 'get_field' ) ) {
        return;
    }

    $home_id = (int) get_option( 'page_on_front' );
    if ( ! $home_id ) {
        return;
    }

    $old_link = get_field( 'home_cintillo_url', $home_id );
    $new_link = get_field( 'home_cintillo_link', $home_id );

    if ( $old_link && ! $new_link && function_exists( 'update_field' ) ) {
        update_field( 'home_cintillo_link', $old_link, $home_id );
    }

    update_option( 'mp_home_cintillo_link_migrate_v1_1', 1 );
}
add_action( 'init', 'mp_home_maybe_migrate_cintillo_link_field', 21 );

function mp_home_enqueue_cintillo_assets() {
    if ( ! is_front_page() ) {
        return;
    }

    wp_enqueue_style(
        'mp-home-cintillo',
        get_template_directory_uri() . '/assets/css/home-cintillo.css',
        array(),
        '1.0.3'
    );
}
add_action( 'wp_enqueue_scripts', 'mp_home_enqueue_cintillo_assets' );
