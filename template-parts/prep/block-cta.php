<?php
$exam         = ( is_page( 'act-prep-courses' ) ) ? 'act' : 'sat';
$defaults     = mp_prep_default_cta( $exam );
$cta_subtitle = mp_prep_text( $block['cta_subtitle'] ?? '', $defaults['cta_subtitle'] );
$cta_title    = mp_prep_text( $block['cta_title'] ?? '', $defaults['cta_title'] );
$cta_btn_text = mp_prep_text( $block['cta_btn_text'] ?? '', $defaults['cta_btn_text'] );
$cta_btn_url  = mp_prep_text( $block['cta_btn_url'] ?? '', $defaults['cta_btn_url'] );
?>
<section class="mp-prep-cta">
    <span class="mp-prep-cta__deco mp-prep-cta__deco--check" aria-hidden="true"></span>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--plus" aria-hidden="true"></span>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--square" aria-hidden="true"></span>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--arc" aria-hidden="true"></span>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--circle" aria-hidden="true"></span>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--ring" aria-hidden="true"></span>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--x" aria-hidden="true"></span>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--dot" aria-hidden="true"></span>

    <div class="container">
        <div class="mp-prep-cta__inner fade-in">
            <?php if ( $cta_subtitle ) : ?>
                <p class="mp-prep-cta__subtitle"><?php echo esc_html( $cta_subtitle ); ?></p>
            <?php endif; ?>

            <?php if ( $cta_title ) : ?>
                <h2 class="mp-prep-cta__title"><?php echo esc_html( $cta_title ); ?></h2>
            <?php endif; ?>

            <a href="<?php echo esc_url( $cta_btn_url ); ?>" class="mp-prep-cta__btn btn-1">
                <?php echo esc_html( $cta_btn_text ); ?>
                <i class="fa-solid fa-circle-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>
