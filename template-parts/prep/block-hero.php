<?php
$is_act_page   = is_page( 'act-prep-courses' );
$hero_badge    = mp_prep_text( $block['hero_tag'] ?? '', $is_act_page ? 'Train & Lead' : 'Own the SAT' );
$hero_title    = mp_prep_text( $block['hero_title'] ?? '', $is_act_page ? 'ACT Prep' : 'SAT Prep Courses' );
$hero_highlight_raw = $block['hero_highlight'] ?? '';
$hero_highlight = is_string( $hero_highlight_raw ) ? trim( $hero_highlight_raw ) : '';
if ( ! $is_act_page && '' === $hero_highlight ) {
    $hero_highlight = 'Math + Reading & Writing';
}
$hero_text     = mp_prep_text( $block['hero_text'] ?? '', $is_act_page ? 'Personalized practice to boost confidence and ace your school exams.' : 'Build the skills and confidence your teen needs to score higher' );
$hero_btn_text = mp_prep_text( $block['hero_btn_text'] ?? '', 'Start training' );
$hero_btn_url  = mp_prep_text( $block['hero_btn_url'] ?? '', '#block_precios' );
$hero_image = mp_prep_image_url( $block['hero_image'] ?? '', 'assets/img/girl.png' );
?>
<section class="mp-prep-hero<?php echo $is_act_page ? ' mp-prep-hero--act' : ''; ?>">
    <span class="mp-prep-hero__deco mp-prep-hero__deco--circle" aria-hidden="true"></span>
    <span class="mp-prep-hero__deco mp-prep-hero__deco--plus" aria-hidden="true"></span>
    <span class="mp-prep-hero__deco mp-prep-hero__deco--dot" aria-hidden="true"></span>
    <span class="mp-prep-hero__deco mp-prep-hero__deco--stroke-purple" aria-hidden="true"></span>
    <span class="mp-prep-hero__deco mp-prep-hero__deco--stroke-green" aria-hidden="true"></span>
    <span class="mp-prep-hero__deco mp-prep-hero__deco--ring" aria-hidden="true"></span>

    <div class="container">
        <div class="mp-prep-hero__grid">
            <div class="mp-prep-hero__media fade-in">
                <img src="<?php echo esc_url( $hero_image ); ?>" alt="" class="mp-prep-hero__image">
            </div>

            <div class="mp-prep-hero__content fade-in-right">
                <?php if ( $hero_badge ) : ?>
                    <span class="mp-prep-hero__badge"><?php echo esc_html( $hero_badge ); ?></span>
                <?php endif; ?>

                <h1 class="mp-prep-hero__title">
                    <?php echo esc_html( $hero_title ); ?>
                    <?php if ( $is_act_page && $hero_highlight ) : ?>
                        <span class="mp-prep-hero__title-line"><?php echo esc_html( $hero_highlight ); ?></span>
                    <?php endif; ?>
                </h1>

                <?php if ( ! $is_act_page && $hero_highlight ) : ?>
                    <p class="mp-prep-hero__highlight"><?php echo esc_html( $hero_highlight ); ?></p>
                <?php endif; ?>

                <?php if ( $hero_text ) : ?>
                    <p class="mp-prep-hero__text"><?php echo esc_html( $hero_text ); ?></p>
                <?php endif; ?>

                <a href="<?php echo esc_url( $hero_btn_url ); ?>" class="mp-prep-hero__btn btn-1 c-hover-2">
                    <?php echo esc_html( $hero_btn_text ); ?>
                    <i class="fa-solid fa-circle-arrow-right ani_fa_balanceo" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</section>
