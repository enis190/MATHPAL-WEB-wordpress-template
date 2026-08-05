<?php
$exam          = is_page( 'act-prep-courses' ) ? 'act' : 'sat';
$pricing_title = mp_prep_text( $block['pricing_title'] ?? '', ( 'act' === $exam ) ? 'ACT Prep:' : 'SAT Prep:' );
$plans         = ! empty( $block['pricing_plans'] ) ? $block['pricing_plans'] : mp_prep_default_plans( $exam );
?>
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
                        <div class="mp-prep-pricing__new-badge">
                            <span class="mp-prep-pricing__new-badge-head">
                                <i class="fa-solid fa-bullhorn" aria-hidden="true"></i>
                                <strong><?php echo esc_html( $new_label ); ?></strong>
                            </span>
                            <span class="mp-prep-pricing__new-badge-sub"><?php echo esc_html( $new_sub ); ?></span>
                            <?php if ( $new_highlight ) : ?>
                                <span class="mp-prep-pricing__new-badge-tag"><?php echo esc_html( $new_highlight ); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

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

                        <?php if ( $is_premium && ! empty( $plan['plan_premium_exp'] ) ) : ?>
                            <p class="mp-prep-pricing__validity mp-prep-pricing__validity--accent"><?php echo esc_html( $plan['plan_premium_exp'] ); ?></p>
                        <?php endif; ?>

                        <?php if ( ! empty( $plan['plan_features'] ) ) : ?>
                            <ul class="mp-prep-pricing__features fa-bullets">
                                <?php foreach ( $plan['plan_features'] as $feature ) : ?>
                                    <li><?php echo esc_html( mp_prep_text( $feature['feature_text'] ?? '', '' ) ); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <a href="<?php echo esc_url( $checkout_url ); ?>" class="mp-prep-pricing__btn btn-1">
                            <?php echo esc_html( 'Buy now' ); ?>
                            <i class="fa-solid fa-circle-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
