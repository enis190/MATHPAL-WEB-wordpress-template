<?php
/*
 * Template Name: Programs & Pricing 2
 */
?>
<?php
get_header();
include(TEMPLATEPATH . '/template-parts/header-default.php');
?>


<?php
include(TEMPLATEPATH . '/template-parts/submenu-programas.php');
?>


<div class="container-fluid header-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center ">
                <h2 class="titulo-h2 fade-in">Flexible tutoring plans that fit your goals</h2>
                <p class="fade-in-top">Choose the best match—Flexible hours per month, cancel or upgrade anytime.</p>
            </div>
        </div>
    </div>
</div>

<!--<div class="container-fluid cintillo-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center fade-in">
                <h3><i class="fa-solid fa-tag"></i> Enjoy 10%* OFF on your first order! <span> | Apply our monthly coupon code at checkout:</span> <span class="code" id="btn_code_copy"><a><i class="fa-solid fa-copy"></i></a> CODE: MATHPAL30</span></h3>
            </div>
        </div>
    </div>
</div>-->

<!--DSCTO BLACK FRIDAY-->
<div class="container-fluid cintillo-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center fade-in">
                <h3><i class="fa-solid fa-tag"></i> Enjoy 35% OFF for Black Friday! <span> |  Apply our coupon code at checkout:*</span> <span class="code" id="btn_code_copy"><a><i class="fa-solid fa-copy"></i></a> CODE: BLACKFRIDAY35</span></h3>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid banner-precio" >
    <div class="container">
        <div class="row">
            <div class="col-12 text-center fade-in">
                <h2 class="titulo-h2">MathPal’s Monthly Promos <font>&</font> Programs</h2>
                <p class="subtile_white">Explore our special promotions and programs, designed to boost every student’s progress.</p>
            </div>
        </div>
        <div class="row mt-4 fade-in">
            <div class="col-md-6 img">
                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/blackfriday-interna.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-5 txt">
                <div class="c-block">
                    <h3><span>Are you ready for our amazing Black Friday discount? </span> Only from November 24 to 30!</h3>
                    <div class="precio">35</div>

                    <div class="p_small">
                        Enjoy this amazing saving on these tutoring plans:
                    </div>

                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span> ACT/SAT Prep Courses</li>
                        <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span> State Exam Prep Courses</li>
                        <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span> Monthly Subscription Plans: 2, 4, 6, or 8 hours</li>
                        
                        
                    </ul>

                    <a href="#block_precios" class="btn-1 bg-verde color-negro c-hover-2">Get offer &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i></a>

                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid suscripcion-1 g-0 " id="block_precios">
    <div class=" c-slider-3">
        <div class="row bloques-title bloques-title-1">
            <div class="col-12 text-center ">
                <h2 class="titulo-h2 fade-in">Monthly Subscriptions:</h2>
            </div>
        </div>
        <?php
        include(TEMPLATEPATH . '/template-parts/programan-monthly-subscriptions.php');
        ?>


    </div>
</div>




<div class="container-fluid suscripcion-1 g-0 bg-2" id="">
    <div class="container c-slider-3">
        <div class="row bloques-title bloques-title-2">
            <div class="col-12 text-center ">
                <h2 class="titulo-h2 before_1 fade-in">State Exam Prep:</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <?php
                include(TEMPLATEPATH . '/template-parts/programan-state-exam.php');
                ?>
            </div>
        </div>
    </div>
</div>






<div class="container-fluid suscripcion-1 g-0 bg-3" id="block_emergency_act">
    <div class="container c-slider-3">
        <div class="row bloques-title bloques-title-3">
            <div class="col-12 text-center ">
                <h2 class="titulo-h2 fade-in">ACT/SAT Prep:</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                include(TEMPLATEPATH . '/template-parts/programan-state-exam-2.php');
                ?>
            </div>
        </div>

    </div>
</div>








<div class="container-fluid precios">
    <div class="container0">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="titulo-h3 fade-in">Additional tutoring hours for subscribers</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1 fade-in-top">

                <?php
                include(TEMPLATEPATH . '/template-parts/additional_hour.php');
                ?>

            </div>
        </div>

    </div>
</div>


<div class="container-fluid precios-2">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="titulo-h3 fade-in">Pay-as-you-go math tutoring</h3>
                <p><span class="tag-1 fade-in-top">Flexible 1-hour sessions — no subscription required.</span></p>
            </div>
        </div>
        <div class="row block fade-in">
            <div class="col-md-5 offset-md-4 item">
                <div class="d-block c-block">
                    <div class="img">
                        <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/foto-precio.png" alt="">
                    </div>
                    <h4 class="precio">45</h4>

                    <ul class="fa-ul mb-4">
                        <li><span class="fa-li"><i class="fa-solid fa-clock color-verde"></i></span>60 minute session with a Math tutoring expert </li>
                        <li><span class="fa-li"><i class="fa-solid fa-circle-check color-verde"></i></span>No subscription required</li>
                        <li><span class="fa-li"><i class="fa-solid fa-calendar color-verde"></i></span>Valid for 2 months</li>
                    </ul>
                    <a href="<?php echo get_permalink(102) ?>" class="btn-1 mt-4" tabindex="0">Book 1 hour now <i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
//include(TEMPLATEPATH . '/template-parts/footer-no-risk.php');
?>
<div class="container-fluid c-footer resultados">
    <div class="container">
        <div class="row fade-in">
            <div class="col-md-6">
                <div class="img">
                    <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/no_risk.png" alt="" class="img-fluid">
                </div>
                <p class="mt-4">Try MathPal for 8 weeks. If you don’t see progress, get a new tutor or a full refund — no questions asked.</p>
            </div>
            <div class="col-md-6 txt">
                <div class="item">
                    <div class="det">
                        <span class="nro">
                            1
                        </span>
                        <h4>Sign up</h4>
                        <p>Choose a subscription or hourly class</p>
                    </div>
                </div>
                <div class="item">
                    <div class="det">
                        <span class="Learn">
                            2
                        </span>
                        <h4>Sign up</h4>
                        <p>Work with your personal math tutor</p>
                    </div>
                </div>
                <div class="item">
                    <div class="det">
                        <span class="nro">
                            3
                        </span>
                        <h4>Guaranteed</h4>
                        <p>Not happy? Switch tutor or get a full refund</p>
                    </div>
                </div>

                
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-12 text-center">
                <p class="fade-in-bottom"><strong>Your satisfaction is our priority. No hidden fees, just effective tutoring.</strong></p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 text-center fade-in-top">
                <a href="#block_precios" class="btn-1 mt-4 bg-morado c-hover-1" tabindex="0">Get starterd today! &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i></a>
            </div>
        </div>
    </div>
</div>


<?php
include(TEMPLATEPATH . '/template-parts/footer-default.php');
get_footer();
?>