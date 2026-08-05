<?php
$defaults       = mp_prep_default_announce();
$badge_title    = mp_prep_text( $block['announce_badge_title'] ?? '', $defaults['announce_badge_title'] );
$badge_sub      = mp_prep_text( $block['announce_badge_sub'] ?? '', $defaults['announce_badge_sub'] );
$badge_highlight = mp_prep_text( $block['announce_badge_highlight'] ?? '', $defaults['announce_badge_highlight'] );
$text_1         = mp_prep_text( $block['announce_text_1'] ?? '', $defaults['announce_text_1'] );
$text_1_bold    = mp_prep_text( $block['announce_text_1_bold'] ?? '', $defaults['announce_text_1_bold'] );
$text_2         = mp_prep_text( $block['announce_text_2'] ?? '', $defaults['announce_text_2'] );
$person_image   = mp_prep_image_url( $block['announce_image'] ?? '', $defaults['announce_image'] );
$icon_image     = mp_prep_image_url( $block['announce_icon'] ?? '', $defaults['announce_icon'] );
$card_bg_image  = mp_prep_image_url( $block['announce_card_bg'] ?? '', $defaults['announce_card_bg'] );
$check_icon     = mp_prep_image_url( $block['announce_check_icon'] ?? '', $defaults['announce_check_icon'] );
$checklist      = ! empty( $block['announce_checklist'] ) ? $block['announce_checklist'] : $defaults['announce_checklist'];
?>
<section
    class="mp-prep-announce"
    style="--announce-check-icon: url('<?php echo esc_url( $check_icon ); ?>');"
>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--check" aria-hidden="true"></span>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--plus" aria-hidden="true"></span>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--square" aria-hidden="true"></span>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--arc" aria-hidden="true"></span>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--circle" aria-hidden="true"></span>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--ring" aria-hidden="true"></span>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--x" aria-hidden="true"></span>
    <span class="mp-prep-cta__deco mp-prep-cta__deco--dot" aria-hidden="true"></span>

    <div class="container">
        <div class="mp-prep-announce__stage">
            <div class="mp-prep-announce__panel fade-in-top">
                <?php if ( $card_bg_image ) : ?>
                    <img
                        src="<?php echo esc_url( $card_bg_image ); ?>"
                        alt=""
                        class="mp-prep-announce__panel-deco"
                        aria-hidden="true"
                    >
                <?php endif; ?>

                <div class="mp-prep-announce__badge">
                    <span class="mp-prep-announce__badge-icon">
                        <img src="<?php echo esc_url( $icon_image ); ?>" alt="">
                    </span>
                    <div class="mp-prep-announce__badge-copy">
                        <strong><?php echo esc_html( $badge_title ); ?></strong>
                        <span>
                            <?php echo esc_html( $badge_sub ); ?>
                            <em><?php echo esc_html( $badge_highlight ); ?></em>
                            too
                        </span>
                    </div>
                </div>

                <div class="mp-prep-announce__content">
                    <?php if ( $text_1 || $text_1_bold ) : ?>
                        <p class="mp-prep-announce__lead">
                            <?php echo esc_html( $text_1 ); ?>
                            <?php if ( $text_1_bold ) : ?>
                                <strong><?php echo esc_html( $text_1_bold ); ?></strong>
                            <?php endif; ?>
                        </p>
                    <?php endif; ?>

                    <?php if ( $text_2 ) : ?>
                        <p class="mp-prep-announce__text"><?php echo esc_html( $text_2 ); ?></p>
                    <?php endif; ?>

                    <?php if ( ! empty( $checklist ) ) : ?>
                        <ul class="mp-prep-announce__checks">
                            <?php foreach ( $checklist as $item ) : ?>
                                <li><?php echo esc_html( mp_prep_text( $item['check_text'] ?? '', '' ) ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>

            <div class="mp-prep-announce__person fade-in">
                <img
                    src="<?php echo esc_url( $person_image ); ?>"
                    alt="Student preparing for SAT"
                    class="mp-prep-announce__person-img"
                >
            </div>
        </div>
    </div>
</section>
