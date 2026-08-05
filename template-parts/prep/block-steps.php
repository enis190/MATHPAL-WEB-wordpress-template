<?php
$exam        = ( is_page( 'act-prep-courses' ) ) ? 'act' : 'sat';
$steps_title = mp_prep_text(
    $block['steps_title'] ?? '',
    ( 'sat' === $exam ) ? 'Get your teen prepared today!' : 'Get Prepared Today!'
);
$steps_items = ! empty( $block['steps_items'] ) ? $block['steps_items'] : mp_prep_default_steps( $exam );
?>
<section class="mp-prep-steps<?php echo ( 'act' === $exam ) ? ' mp-prep-steps--act' : ''; ?>">
    <?php if ( 'act' === $exam ) : ?>
        <span class="mp-prep-steps__deco mp-prep-steps__deco--num mp-prep-steps__deco--num-1" aria-hidden="true">1</span>
        <span class="mp-prep-steps__deco mp-prep-steps__deco--num mp-prep-steps__deco--num-3" aria-hidden="true">3</span>
        <span class="mp-prep-steps__deco mp-prep-steps__deco--num mp-prep-steps__deco--num-9" aria-hidden="true">9</span>
        <span class="mp-prep-steps__deco mp-prep-steps__deco--dot" aria-hidden="true"></span>
        <span class="mp-prep-steps__deco mp-prep-steps__deco--ring" aria-hidden="true"></span>
    <?php else : ?>
        <span class="mp-prep-steps__deco mp-prep-steps__deco--nums" aria-hidden="true">
            <span>7</span><span>1</span><span>8</span><span>3</span><span>6</span>
        </span>
        <span class="mp-prep-steps__deco mp-prep-steps__deco--ring" aria-hidden="true"></span>
    <?php endif; ?>

    <div class="container">
        <h2 class="mp-prep-steps__title fade-in">
            <?php if ( 'sat' === $exam ) : ?>
                <span class="mp-prep-steps__title-dot" aria-hidden="true"></span>
            <?php endif; ?>
            <?php echo esc_html( $steps_title ); ?>
        </h2>

        <div class="mp-prep-steps__grid fade-in-top">
            <?php foreach ( $steps_items as $step ) : ?>
                <article class="mp-prep-steps__card">
                    <span class="mp-prep-steps__number">
                        <?php echo esc_html( mp_prep_text( $step['step_number'] ?? '', '1' ) ); ?>
                    </span>
                    <div class="mp-prep-steps__card-body">
                        <h3 class="mp-prep-steps__card-title">
                            <?php echo esc_html( mp_prep_text( $step['step_title'] ?? '', '' ) ); ?>
                        </h3>

                        <?php if ( ! empty( $step['step_text'] ) ) : ?>
                            <p class="mp-prep-steps__card-text"><?php echo esc_html( $step['step_text'] ); ?></p>
                        <?php endif; ?>

                        <?php if ( ! empty( $step['step_items'] ) ) : ?>
                            <ul class="mp-prep-steps__list">
                                <?php foreach ( $step['step_items'] as $item ) : ?>
                                    <li><?php echo esc_html( mp_prep_text( $item['item_text'] ?? '', '' ) ); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <?php if ( ! empty( $step['step_footer'] ) ) : ?>
                            <p class="mp-prep-steps__footer"><?php echo esc_html( $step['step_footer'] ); ?></p>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
