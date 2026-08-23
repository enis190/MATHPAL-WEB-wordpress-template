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











<div class="container home-ruta">
    <div class="">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="titulo-h2 fade-in">Choose your learning path:</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <section class="slider responsive3_shop">
                    <div class="row">
                        <div class="item col-md-3">
                            <div class="c-block fade-in-top" data-delay="100" data-duration="500">
                                <div class="tag"><span>Knowledge is Powerspan</span></div>
                                <div class="img"><img class="img-fluid" src="https://www.mathpal.us/wp-content/themes/mathpal/assets/img/img_DiagnosticClass.png" alt="" /></div>
                                <div class="edad">
                                    <div class="row">
                                        <div class="col-9">Ages 8 to 18 | 4th grade - 12th grade.</div>
                                        <div class="col-3">
                                            <div class="icon"><i class="fa-solid fa-brain"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="body">
                                    <h3>Diagnostic Class</h3>
                                    <p>Discover strengths and areas to improve with a personalized assessment.</p>

                                    <a class="btn-1" href="https://www.mathpal.us/diagnostic-class/">Book now <i class="fa-solid fa-circle-arrow-right"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3">
                            <div class="c-block fade-in-top" data-delay="300" data-duration="500">
                                <div class="tag">

                                    <span>Your Plan, Your Pace</span>

                                </div>
                                <div class="img"><img class="img-fluid" src="https://www.mathpal.us/wp-content/themes/mathpal/assets/img/img_DiagnosticClass_2.png" alt="" /></div>
                                <div class="edad">
                                    <div class="row">
                                        <div class="col-9">Ages 8 to 18 | 3th grade - 12th grade.</div>
                                        <div class="col-3">
                                            <div class="icon"><i class="fa-solid fa-calendar-check"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <img class="img-fluid" style="background: #8b00ff;padding: 0 40px;" src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/back_to_scholl.png" alt="" />
                                <div class="body">
                                    <h3>Monthly Subscriptions (2, 4, 6, 8 hrs/month)</h3>
                                    <p>Flexible tutoring hours that adapt to your schedule and goals.</p>

                                    <a class="btn-1" href="https://www.mathpal.us/subscriptions/">See plans <i class="fa-solid fa-circle-arrow-right"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3">
                            <div class="c-block fade-in-top" data-delay="500" data-duration="500">
                                <div class="tag"><span>Own the SAT</span></div>
                                <div class="img img--has-badge">
                                    <span class="c-block__badge-new" aria-hidden="true">NEW</span>
                                    <img class="img-fluid" src="https://www.mathpal.us/wp-content/themes/mathpal/assets/img/img_SAT-PREP.png" alt="SAT Prep for high school students" />
                                </div>
                                <div class="edad">
                                    <div class="row">
                                        <div class="col-9">Ages 15 to 18 | 10th–12th grade</div>
                                        <div class="col-3">
                                            <div class="icon"><i class="fa-solid fa-book-bookmark"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="body">
                                    <h3>SAT PREP</h3>
                                    <p class="c-block__subtitle">Math + Reading &amp; Writing</p>
                                    <p>Math, Reading &amp; Writing prep to build the skills your teen needs to score higher.</p>
                                    <a class="btn-1" href="https://www.mathpal.us/sat-prep-courses/">Start training <i class="fa-solid fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="item col-md-3">
                            <div class="c-block fade-in-top" data-delay="600" data-duration="500">
                                <div class="tag"><span>Train &amp; Lead</span></div>
                                <div class="img"><img class="img-fluid" src="https://www.mathpal.us/wp-content/themes/mathpal/assets/img/img-SAT-GIRL-11.png" alt="ACT Prep for high school students" /></div>
                                <div class="edad">
                                    <div class="row">
                                        <div class="col-9">Ages 15 to 18 | 10th–12th grade</div>
                                        <div class="col-3">
                                            <div class="icon"><i class="fa-solid fa-book-bookmark"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="body">
                                    <h3>ACT PREP</h3>
                                    <p>Personalized strategies to hit your target score and stand out in college admissions.</p>
                                    <a class="btn-1" href="https://www.mathpal.us/act-prep-courses/">Start training <i class="fa-solid fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3">
                            <div class="c-block fade-in-top" data-delay="700" data-duration="500">
                                <div class="tag"><span>Reach your full potential</span></div>
                                <div class="img"><img class="img-fluid" src="https://www.mathpal.us/wp-content/themes/mathpal/assets/img/img_DiagnosticClass_4.png" alt="" /></div>
                                <div class="edad">
                                    <div class="row">
                                        <div class="col-9">Ages 8 to 18 | 4th grade - 12th grade.</div>
                                        <div class="col-3">
                                            <div class="icon"><i class="fa-solid fa-file"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="body">
                                    <h3>State Exam Prep</h3>
                                    <p>Train your skills, organize your studies, and gain the confidence to excel.</p>

                                    <a class="btn-1" href="https://www.mathpal.us/state-exam-prep/">Go for it! <i class="fa-solid fa-circle-arrow-right"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
</div>







<style>
    /* NEW badge arriba */
    .new-badge {
        position: absolute;
        top: -14px;
        left: 50%;
        transform: translateX(-50%);
        background: #a4ff48;
        color: #000;
        font-weight: 900;
        font-size: 12px;
        letter-spacing: .6px;
        padding: 6px 14px;
        border-radius: 12px;
        text-transform: uppercase;
        z-index: 30;
    }

    .new-badge {
        border-radius: 7px;
        min-width: 150px;
    }

    .pr

    /* Contenedor del precio + launch special */
    .precio1 {
        display: flex;
        align-items: center;
        /* centra Launch Special con el bloque del precio */
        justify-content: center;
        /* centra todo el conjunto */
        gap: 14px;
        /* separación entre Launch Special y el precio */
    }

    /* Tu CSS (igual) */
    .launch-special {
        color: #777a72;
        font-weight: 700;
        font-size: 12px;
        line-height: 1.05;
        text-align: left;
        opacity: .95;
        flex: 0 0 auto;
        /* evita que se estire */
        text-align: right;
        font-size: 1.2rem;
        margin-top: 15px;
    }

    /* Contenedor del $536 + $670 */
    .price-stack {
        display: flex;
        flex-direction: column;
        align-items: center;
        line-height: 1;
        gap: 10px;
        flex: 0 0 auto;
    }


    .precio-anterior {
        position: relative;
        color: #000;
        font-size: 26px;
        font-weight: 800;
        text-decoration: none;
        /* usamos línea custom */
    }

    /* línea morada inclinada sobre el 670 */
    .precio-anterior::after {
        content: "";
        position: absolute;
        left: -10px;
        right: -10px;
        top: 55%;
        height: 3px;
        background: #7a2cff;
        transform: rotate(-8deg);
    }

    .video2.ventajas {

        /* background-image: url('https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/01-2.png'); */
        min-height: 450px;
        width: 320px;
        margin-left: 100px;

    }

    .ventajas {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;

        /*  background-color: #ffffff; */
        /* background-image: url('https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/img_MYBERLITZ_TUTOR.png'); */
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-position: center center;
        border-radius: 10px;
    }

    .ventajas .c-play {
        display: flex;
        justify-content: center;
        align-items: center;


    }

    .precio span {
        font-size: 24px;
        font-weight: 400;
        margin-left: -30px;
    }


    .ventajas .c-pulse-1,
    .ventajas .c-pulse-2,
    .ventajas .c-pulse-3 {
        background-color: #FFF;
        content: "";
        position: absolute;
        display: flex;
        width: 70px;
        height: 70px;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        border-radius: 50%;
        -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.6);
        -moz-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.6);
        -ms-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.6);
        -o-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.6);
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.6);
        -webkit-animation: ripple 3s infinite;
        -moz-animation: ripple 3s infinite;
        -ms-animation: ripple 3s infinite;
        -o-animation: ripple 3s infinite;
        animation: ripple 3s infinite;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .ventajas .c-pulse-1 .c-fa,
    .ventajas .c-pulse-2 .c-fa,
    .ventajas .c-pulse-3 .c-fa {
        font-size: 1.3rem;
    }

    .ventajas .c-pulse-2 {
        -webkit-animation-delay: .9s;
        -moz-animation-delay: .9s;
        -ms-animation-delay: .9s;
        -o-animation-delay: .9s;
        animation-delay: .9s;
    }

    .ventajas .c-pulse-3 {
        -webkit-animation-delay: .6s;
        -moz-animation-delay: .6s;
        -ms-animation-delay: .6s;
        -o-animation-delay: .6s;
        animation-delay: .6s;
    }


    @-webkit-keyframes ripple {
        70% {
            box-shadow: 0 0 0 50px rgba(253, 167, 0, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(253, 167, 0, 0);
        }
    }

    @keyframes ripple {
        70% {
            box-shadow: 0 0 0 50px rgba(253, 167, 0, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(253, 167, 0, 0);
        }
    }


    @media only screen and (max-width: 600px) {

        .video2.ventajas {
            margin-left: 0 !important;
            margin-right: 0 !important;
            width: 100% !important;
        }
    }

    .header-title {
        padding-top: 80px;
        padding-bottom: 80px;

    }

    .tag-1 {
        font-size: 11px;
    }
</style>




<?php
include get_template_directory() . '/template-parts/footer-default.php';
get_footer();
