<?php
$exam          = ( is_page( 'act-prep-courses' ) ) ? 'act' : 'sat';
$defaults      = mp_prep_default_info( $exam );
$info_title    = mp_prep_text( $block['info_title'] ?? '', $defaults['info_title'] );
$info_lead     = mp_prep_text( $block['info_lead'] ?? '', $defaults['info_lead'] );
$info_text     = mp_prep_text( $block['info_text'] ?? '', $defaults['info_text'] );
$info_highlight = mp_prep_text( $block['info_highlight'] ?? '', $defaults['info_highlight'] );
$info_image    = mp_prep_image_url( $block['info_image'] ?? '', $defaults['info_image'] ?: 'assets/img/joven-laptop.png' );
$info_items    = array();
if ( 'act' === $exam ) {
    $info_items = ! empty( $block['info_items'] ) ? $block['info_items'] : ( $defaults['info_items'] ?? array() );
}
$has_items     = ( 'act' === $exam ) && ! empty( $info_items );
?>
<section class="mp-prep-info<?php echo ( 'act' === $exam && $has_items ) ? ' mp-prep-info--act' : ''; ?>">
    <span class="mp-prep-info__deco mp-prep-info__deco--nums" aria-hidden="true">
        <?php if ( 'act' === $exam ) : ?>
            <span>7</span><span>8</span><span>6</span>
        <?php else : ?>
            <span>7</span><span>1</span><span>8</span><span>6</span>
        <?php endif; ?>
    </span>
    <span class="mp-prep-info__deco mp-prep-info__deco--dot" aria-hidden="true"></span>
    <span class="mp-prep-info__deco mp-prep-info__deco--ring mp-prep-info__deco--ring-top" aria-hidden="true"></span>
    <span class="mp-prep-info__deco mp-prep-info__deco--ring mp-prep-info__deco--ring-bottom" aria-hidden="true"></span>

    <div class="container">
        <div class="mp-prep-info__grid fade-in-top">
            <div class="mp-prep-info__content">
                <h2 class="mp-prep-info__title"><?php echo esc_html( $info_title ); ?></h2>

                <?php if ( $info_lead ) : ?>
                    <p class="mp-prep-info__lead"><?php echo esc_html( $info_lead ); ?></p>
                <?php endif; ?>

                <?php if ( $has_items ) : ?>
                    <ul class="mp-prep-info__items">
                        <?php foreach ( $info_items as $item ) :
                            $item_text = mp_prep_text( $item['item_text'] ?? $item['info_text'] ?? '', '' );
                            $item_icon = mp_prep_image_url( $item['item_icon'] ?? $item['info_icon'] ?? '', '' );
                            if ( $item_icon && false !== strpos( $item_icon, 'fa-solid' ) ) {
                                $item_icon = '';
                            }
                            if ( ! $item_text ) {
                                continue;
                            }
                            ?>
                            <li class="mp-prep-info__item">
                                <span class="mp-prep-info__item-icon-wrap" aria-hidden="true">
                                    <?php if ( $item_icon ) : ?>
                                        <img
                                            src="<?php echo esc_url( $item_icon ); ?>"
                                            alt=""
                                            class="mp-prep-info__item-icon"
                                            loading="lazy"
                                        >
                                    <?php endif; ?>
                                </span>
                                <p class="mp-prep-info__item-text"><?php echo esc_html( $item_text ); ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php elseif ( $info_text || $info_highlight ) : ?>
                    <p class="mp-prep-info__text">
                        <?php echo esc_html( $info_text ); ?>
                        <?php if ( $info_highlight ) : ?>
                            <strong><?php echo esc_html( $info_highlight ); ?></strong>
                        <?php endif; ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="mp-prep-info__media">
                <img
                    src="<?php echo esc_url( $info_image ); ?>"
                    alt="<?php echo esc_attr( $info_title ); ?>"
                    class="mp-prep-info__image"
                    loading="lazy"
                >
            </div>
        </div>
    </div>
</section>
