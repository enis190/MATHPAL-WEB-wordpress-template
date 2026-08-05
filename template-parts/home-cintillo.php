<?php
$post_id     = get_queried_object_id();
$desktop     = function_exists( 'get_field' ) ? get_field( 'home_cintillo_imagen_desktop', $post_id ) : null;
$mobile      = function_exists( 'get_field' ) ? get_field( 'home_cintillo_imagen_mobile', $post_id ) : null;
$link        = function_exists( 'get_field' ) ? get_field( 'home_cintillo_link', $post_id ) : '';
$desktop_url = mp_home_cintillo_image_url( $desktop );
$mobile_url  = mp_home_cintillo_image_url( $mobile );

if ( ! $link && function_exists( 'get_field' ) ) {
    $link = get_field( 'home_cintillo_url', $post_id );
}

if ( ! $mobile_url ) {
    $mobile_url = $desktop_url;
}

if ( ! $desktop_url && ! $mobile_url ) {
    return;
}

$link = is_string( $link ) ? trim( $link ) : '';
$tag  = $link ? 'a' : 'div';
$attrs = $link
    ? ' href="' . esc_url( $link ) . '" class="mp-home-cintillo__frame mp-home-cintillo__link"'
    : ' class="mp-home-cintillo__frame"';
?>
<section class="mp-home-cintillo" aria-label="Promoción">
    <<?php echo $tag . $attrs; ?>>
        <div class="mp-home-cintillo__inner">
            <?php if ( $desktop_url ) : ?>
                <img
                    src="<?php echo esc_url( $desktop_url ); ?>"
                    alt=""
                    class="mp-home-cintillo__img mp-home-cintillo__img--desktop"
                    loading="lazy"
                    decoding="async"
                >
            <?php endif; ?>

            <?php if ( $mobile_url ) : ?>
                <img
                    src="<?php echo esc_url( $mobile_url ); ?>"
                    alt=""
                    class="mp-home-cintillo__img mp-home-cintillo__img--mobile"
                    loading="lazy"
                    decoding="async"
                >
            <?php endif; ?>
        </div>
    </<?php echo esc_html( $tag ); ?>>
</section>
