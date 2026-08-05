<?php
$exam          = ( is_page( 'act-prep-courses' ) ) ? 'act' : 'sat';
$defaults      = mp_prep_default_ixl( $exam );
$ixl_tag       = mp_prep_text( $block['ixl_tag'] ?? '', $defaults['ixl_tag'] );
$ixl_title     = mp_prep_text( $block['ixl_title'] ?? '', $defaults['ixl_title'] );
$ixl_text      = mp_prep_text( $block['ixl_text'] ?? '', $defaults['ixl_text'] );
$ixl_highlight = mp_prep_text( $block['ixl_highlight'] ?? '', $defaults['ixl_highlight'] );
$ixl_footnote  = mp_prep_text( $block['ixl_footnote'] ?? '', $defaults['ixl_footnote'] );
$ixl_image     = mp_prep_image_url( $block['ixl_image'] ?? '', 'assets/img/img-5.png' );
$show_footnote = ( 'sat' === $exam ) && $ixl_footnote;
$show_asterisk = ( 'sat' === $exam );
?>
<section class="mp-prep-ixl<?php echo ( 'act' === $exam ) ? ' mp-prep-ixl--act' : ''; ?>">
    <?php if ( 'sat' === $exam ) : ?>
        <span class="mp-prep-ixl__deco mp-prep-ixl__deco--dot" aria-hidden="true"></span>
        <span class="mp-prep-ixl__deco mp-prep-ixl__deco--stroke" aria-hidden="true"></span>
        <span class="mp-prep-ixl__deco mp-prep-ixl__deco--x" aria-hidden="true"></span>
        <span class="mp-prep-ixl__deco mp-prep-ixl__deco--green-stroke" aria-hidden="true"></span>
        <span class="mp-prep-ixl__deco mp-prep-ixl__deco--ring" aria-hidden="true"></span>
    <?php endif; ?>

    <div class="container">
        <div class="mp-prep-ixl__grid fade-in-top">
            <div class="mp-prep-ixl__media fade-in">
                <img
                    src="<?php echo esc_url( $ixl_image ); ?>"
                    alt="<?php echo esc_attr( $ixl_title ); ?>"
                    class="mp-prep-ixl__image"
                    loading="lazy"
                >
            </div>

            <div class="mp-prep-ixl__content fade-in-right">
                <?php if ( $ixl_tag ) : ?>
                    <span class="mp-prep-ixl__badge"><?php echo esc_html( $ixl_tag ); ?></span>
                <?php endif; ?>

                <h2 class="mp-prep-ixl__title">
                    <?php echo esc_html( $ixl_title ); ?>
                    <?php if ( $show_asterisk ) : ?>
                        <span class="mp-prep-ixl__asterisk">*</span>
                    <?php endif; ?>
                </h2>

                <?php if ( $ixl_text ) : ?>
                    <p class="mp-prep-ixl__text"><?php echo esc_html( $ixl_text ); ?></p>
                <?php endif; ?>

                <?php if ( $ixl_highlight ) : ?>
                    <p class="mp-prep-ixl__highlight">
                        <strong>
                            <?php echo esc_html( $ixl_highlight ); ?>
                            <?php if ( $show_asterisk ) : ?>
                                <span class="mp-prep-ixl__asterisk">*</span>
                            <?php endif; ?>
                        </strong>
                    </p>
                <?php endif; ?>

                <?php if ( $show_footnote ) : ?>
                    <p class="mp-prep-ixl__footnote"><span class="mp-prep-ixl__asterisk">*</span><?php echo esc_html( $ixl_footnote ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if ( 'sat' === $exam ) : ?>
        <span class="mp-prep-ixl__bottom-line" aria-hidden="true"></span>
    <?php endif; ?>
</section>
