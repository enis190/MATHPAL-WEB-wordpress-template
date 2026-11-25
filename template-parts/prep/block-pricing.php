<?php
$exam          = is_page( 'act-prep-courses' ) ? 'act' : 'sat';
$pricing_title = mp_prep_text( $block['pricing_title'] ?? '', ( 'act' === $exam ) ? 'ACT Prep:' : 'SAT Prep:' );
$plans         = ! empty( $block['pricing_plans'] ) ? $block['pricing_plans'] : mp_prep_default_plans( $exam );

// Black Friday (ACT y SAT): una imagen por tarjeta, en el mismo orden en que aparecen en la página.
// Cambia cada link por la imagen que corresponda.
// Para quitar la promo de ambas páginas, cambia $show_bf_promo a false.
$show_bf_promo = true;
$bf_promo_imgs = array(
    'https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/bf-promo50.png', // Tarjeta 1
    'https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/bf-promo200.png', // Tarjeta 2
    'https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/bf_promo150.png', // Tarjeta 3
);
$bf_card_index = 0;
?>
<?php if ( $show_bf_promo ) : ?>
<style>
    /* Black Friday: imagen arriba de cada tarjeta (ACT y SAT) */
    .mp-prep-pricing .mp-prep-pricing__grid { padding-top: 110px; }
    .mp-prep-pricing .mp-prep-pricing__card .mp-prep-pricing__card-inner { padding-top: 70px; }
    .mp-bf-promo {
        position: absolute;
        top: -80px;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 5;
        pointer-events: none;
    }
    .mp-bf-promo img { width: 55%; height: auto; display: inline-block; }
    @media (max-width: 991px) {
        .mp-prep-pricing .mp-prep-pricing__grid { gap: 110px; }
    }
</style>
<?php endif; ?>
<section class="mp-prep-pricing<?php echo ( 'act' === $exam ) ? ' mp-prep-pricing--act' : ''; ?>" id="block_precios">
    <span class="mp-prep-pricing__deco mp-prep-pricing__deco--ring" aria-hidden="true"></span>
    <span class="mp-prep-pricing__deco mp-prep-pricing__deco--triangle" aria-hidden="true"></span>
    <span class="mp-prep-pricing__deco mp-prep-pricing__deco--stroke" aria-hidden="true"></span>
    <span class="mp-prep-pricing__deco mp-prep-pricing__deco--dot" aria-hidden="true"></span>

    <div class="container">
        <h2 class="mp-prep-pricing__title fade-in"><?php echo esc_html( $pricing_title ); ?></h2>

        <div class="mp-prep-pricing__grid fade-in-top">
            <?php foreach ( $plans as $plan ) :
                $plan_title     = mp_prep_text( $plan['plan_title'] ?? '', '' );
                $is_premium     = ! empty( $plan['plan_is_premium'] );
                $card_class     = 'mp-prep-pricing__card' . ( $is_premium ? ' mp-prep-pricing__card--premium' : '' );
                $is_sat_plan    = false !== stripos( $plan_title, 'SAT' );
                $new_label      = mp_prep_text( $plan['plan_new_label'] ?? '', 'NEW' );
                $new_sub        = mp_prep_text( $plan['plan_new_sub'] ?? '', 'Now includes' );
                $new_highlight  = mp_prep_text( $plan['plan_new_highlight'] ?? '', $is_sat_plan ? 'Reading & Writing Prep' : '' );
                $show_new_badge = $is_premium && (
                    ! empty( $plan['plan_show_new_badge'] )
                    || ( $is_sat_plan && '0' !== (string) ( $plan['plan_show_new_badge'] ?? '' ) )
                );
                $checkout_url   = mp_prep_checkout_url( $plan['plan_checkout'] ?? 0 );
                $price          = mp_prep_text( $plan['plan_price'] ?? '', '' );
                ?>
                <article class="<?php echo esc_attr( $card_class ); ?>">
                    <?php if ( $show_new_badge ) : ?>
                        <!-- <div class="mp-prep-pricing__new-badge">
                            <span class="mp-prep-pricing__new-badge-head">
                                <i class="fa-solid fa-bullhorn" aria-hidden="true"></i>
                                <strong><?php echo esc_html( $new_label ); ?></strong>
                            </span>
                            <span class="mp-prep-pricing__new-badge-sub"><?php echo esc_html( $new_sub ); ?></span>
                            <?php if ( $new_highlight ) : ?>
                                <span class="mp-prep-pricing__new-badge-tag"><?php echo esc_html( $new_highlight ); ?></span>
                            <?php endif; ?>
                        </div> -->
                    <?php endif; ?>

                    <?php if ( $show_bf_promo ) :
                        $bf_img = $bf_promo_imgs[ $bf_card_index ] ?? $bf_promo_imgs[0];
                        ?>
                        <div class="mp-bf-promo">
                            <img src="<?php echo esc_url( $bf_img ); ?>" alt="Black Friday promo">
                        </div>
                    <?php endif; ?>
                    <?php $bf_card_index++; ?>

                    <div class="mp-prep-pricing__card-inner">
                        <h3 class="mp-prep-pricing__plan-title"><?php echo esc_html( mp_prep_text( $plan['plan_title'] ?? '', '' ) ); ?></h3>

                        <?php if ( $price ) : ?>
                            <div class="mp-prep-pricing__price">
                                <span class="currency">$</span><span class="amount"><?php echo esc_html( $price ); ?></span>
                            </div>
                        <?php endif; ?>

                        <?php if ( ! empty( $plan['plan_description'] ) ) : ?>
                            <p class="mp-prep-pricing__desc"><?php echo esc_html( $plan['plan_description'] ); ?></p>
                        <?php endif; ?>

                        <?php if ( ! empty( $plan['plan_validity'] ) ) : ?>
                            <p class="mp-prep-pricing__validity"><?php echo esc_html( $plan['plan_validity'] ); ?></p>
                        <?php endif; ?>

                        

                        <?php if ( ! empty( $plan['plan_features'] ) ) : ?>
                            <ul class="mp-prep-pricing__features fa-bullets">
                                <?php foreach ( $plan['plan_features'] as $feature ) : ?>
                                    <li><?php echo esc_html( mp_prep_text( $feature['feature_text'] ?? '', '' ) ); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        
                        <div class="d-block" style="    margin-top: auto;">
                            <!-- boton Woocommerce Add to cart -->
                            <?php if ( $is_premium && ! empty( $plan['plan_premium_exp'] ) ) : ?>
                                <?php echo wp_kses_post( $plan['plan_premium_exp'] ); ?>
                            <?php endif; ?>

                            <a href="<?php echo esc_url( $checkout_url ); ?>" class="mp-prep-pricing__btn btn-1">
                                <?php echo esc_html( 'Buy now' ); ?>
                                <i class="fa-solid fa-circle-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
