<?php
/*
 * Template Name: Prep Courses
 */
?>
<?php
get_header();
include TEMPLATEPATH . '/template-parts/header-default.php';
include TEMPLATEPATH . '/template-parts/submenu-programas.php';

$blocks = function_exists( 'get_field' ) ? get_field( 'prep_blocks' ) : array();

if ( empty( $blocks ) ) {
    $exam = ( is_page( 'act-prep-courses' ) ) ? 'act' : 'sat';
    $blocks = mp_prep_default_blocks( $exam );
}

if ( ! empty( $blocks ) ) {
    foreach ( $blocks as $block ) {
        $layout = isset( $block['acf_fc_layout'] ) ? $block['acf_fc_layout'] : '';

        switch ( $layout ) {
            case 'hero':
                include locate_template( 'template-parts/prep/block-hero.php' );
                break;
            case 'announcement_new':
                include locate_template( 'template-parts/prep/block-announcement-new.php' );
                break;
            case 'pricing':
                include locate_template( 'template-parts/prep/block-pricing.php' );
                break;
            case 'info':
                include locate_template( 'template-parts/prep/block-info.php' );
                break;
            case 'steps':
                include locate_template( 'template-parts/prep/block-steps.php' );
                break;
            case 'ixl':
                include locate_template( 'template-parts/prep/block-ixl.php' );
                break;
            case 'cta':
                include locate_template( 'template-parts/prep/block-cta.php' );
                break;
        }
    }
}

get_footer();
