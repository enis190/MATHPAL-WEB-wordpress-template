<?php
defined('ABSPATH') || exit;
get_header();
include get_template_directory() . '/template-parts/header-default.php';
?>



<div class="container-fluid banner-precio margin-menu-principal">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center fade-in">
                <h2 class="titulo-h2">MathPal’s Monthly Promos <font>&</font> Programs</h2>
                <p><b>New! Back to School at MathPal: </b>August is your window to give your child a head start in math — <b>with free bonus hours on every monthly plan*</b>, before the school year gets harder.</p>
            </div>
        </div>
        <div class="row mt-4 fade-in">
            <div class="col-md-6 img">
                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/joven.png" alt="" class="img-fluid" style="margin-top:-50px">
            </div>
            <div class="col-md-5 txt">
                <div class="c-block">


                    <div class="new-badge">NEW!</div>

                    <h3>
                        <span>Choose your child’s plan:</span>
                        <span class="small"></span>
                    </h3>

                    <h3>4,6, or 8 tutoring <br>hours per month</h3>

                    <h3 style="background: #8b00ff; color: #ffff">*Free hours worth up to:</h3>

                    <div class="precio1">
                        <div class="row justify-content-center">
                        </div>
                        <div class="col-12 text-center px-0">
                            <div class="price-stack text-center">
                                <img class="img-fluid" src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/Layer_1.png" alt="">

                            </div>
                        </div>
                    </div>
                    <ul class="fa-ul mb-4">
                        <li><span class="fa-li"><i class="fa-solid fa-clock color-verde"></i></span>Live sessions with an expert bilingual tutor </li>
                        <li><span class="fa-li"><i class="fa-solid fa-chart-line color-verde"></i></span>Custom study plans to target specific challenges</li>
                        <li><span class="fa-li"><i class="fa-regular fa-chalkboard-user color-verde"></i></span>Free IXL access</li>

                    </ul>
                    <a href="https://www.mathpal.us/subscriptions/" class="btn-1 bg-verde color-negro c-hover-2">
                        Buy now &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid header-title header-title-shop">
    <div class="container">
        <div class="row align-items-center">
            <div class="container-fluid banner-precio banner-precio2">
                <div class="container">
                    <div class="row">

                    </div>
                    <div class="row mt-4 fade-in">
                        <div class="col-md-6 img">
                            <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/group-1039.png" alt="" class="img-fluid">
                            <p>Pinpoint your child's math strengths and gaps with a personalized diagnostic session.</p>

                        </div>
                        <div class="col-md-5 txt">
                            <div class="c-block">


                                <div class="new-badge">NEW!</div>

                                <h3>
                                    <span>Diagnostic test</span>
                                    <span class="small"></span>
                                </h3>


                                <div class="precio1">
                                    <div class="row justify-content-center">

                                    </div>
                                    <div class="col-12 text-center px-0">
                                        <div class="price-stack text-center">
                                            <h4 class="precio" style="color:black">15 <span>/class</span> </h4>

                                        </div>
                                    </div>

                                    <ul class="fa-ul mb-4">
                                        <li><span class="fa-li"><i class="fa-solid fa-clock color-verde"></i></span>45 minutes of 1-on-1 Expert Math Tutoring </li>
                                        <li><span class="fa-li"><i class="fa-solid fa-chart-line color-verde"></i></span>Diagnostic Assessment Efficiently Assessing Math Knowledge</li>
                                        <li><span class="fa-li"><i class="fa-regular fa-chalkboard-user color-verde"></i></span>Get Paired with an Expert Tutor Personally Chosen for you!</li>
                                        <li><span class="fa-li"><i class="fa-solid fa-calendar color-verde"></i></span>Valid for 1 month </li>
                                    </ul>



                                    <a href="<?php echo get_permalink(69) ?>" class="btn-1 bg-verde color-negro c-hover-2">
                                        Buy now &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="container c-div-padding shop c-woocommerce c-archive-product">
    <div class="row">
        <div class="col-12">

            <?php
            //do_action( 'woocommerce_before_main_content' );
            do_action('woocommerce_shop_loop_header');

            if (woocommerce_product_loop()) {

                do_action('woocommerce_before_shop_loop');

                woocommerce_product_loop_start();

                if (wc_get_loop_prop('total')) {
                    while (have_posts()) {
                        the_post();
                        do_action('woocommerce_shop_loop');
                        wc_get_template_part('content', 'product');
                    }
                }

                woocommerce_product_loop_end();

                do_action('woocommerce_after_shop_loop');
            } else {
                do_action('woocommerce_no_products_found');
            }

            //do_action( 'woocommerce_after_main_content' );
            //do_action( 'woocommerce_sidebar' );
            ?>

        </div>
    </div>
</div>





<?php
include get_template_directory() . '/template-parts/footer-default.php';
get_footer();
