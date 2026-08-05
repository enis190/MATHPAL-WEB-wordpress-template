<?php
/*
 * Template Name: Suscription
 */
?>
<?php
get_header();
include(TEMPLATEPATH . '/template-parts/header-default.php');
?>

<?php
//get_header();
include(TEMPLATEPATH . '/template-parts/submenu-programas.php');
?>

<div class="container-fluid header-title-img bg-23">
    <div class="container">
        <div class="row">
            <div class="col-md-5 img fade-in">
                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/img-title-4.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 offset-md-1 txt pt-md-4 pt-lg-5 fade-in-right">
                <span class="tag-1-lg mb-4">Your plan, your pace</span>
                <h2 class="titulo-h2 mt-4">Monthly Math Tutoring Subscription Plans</h2>
                <p>Flexible tutoring hours that adapt to your schedule and goals.</p>
                <a href="#block_precios" class="btn-1 c-hover-2">Start training &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i></a>
            </div>
        </div>
    </div>
</div>






<div class="container-fluid suscripcion-1 g-0 " id="block_precios">
    <div class=" c-slider-3">
        <div class="row bloques-title bloques-title-1">
            <div class="col-12 text-center ">
                <h4 class="titulo-h4 fade-in">Monthly Subscriptions</h4>
            </div>
        </div>

        <?php
        //get_header();
        include(TEMPLATEPATH . '/template-parts/programan-monthly-subscriptions.php');
        ?>

    </div>
</div>







<div class="container-fluid c-footer resultados bg-10">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="titulo-h4 mt-4 mb-4 fade-in">Crush your math homework:
                </h4>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 txt">

                <div class="item fade-in" data-delay="100" data-duration="500">
                    <div class="det">
                        <span class="nro">
                            1
                        </span>
                        <h4>Set a routine:</h4>
                        <p>Regular study time keeps you on track.</p>
                    </div>
                </div>
                <div class="item fade-in" data-delay="300" data-duration="500">
                    <div class="det">
                        <span class="nro">
                            2
                        </span>
                        <h4>Stay ready:</h4>
                        <p>Keep your formulas and notes within reach.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-6 txt">
                <div class="item fade-in" data-delay="500" data-duration="500">
                    <div class="det">
                        <span class="nro">
                            3
                        </span>
                        <h4>Break it down:</h4>
                        <p>Solve big problems in smaller parts.</p>
                    </div>
                </div>
                <div class="item fade-in" data-delay="700" data-duration="500">
                    <div class="det">
                        <span class="nro">
                            4
                        </span>
                        <h4>Ask for help:</h4>
                        <p>Your MathPal tutor is here to support you.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <p>Prepare smarter, not harder — with <strong>MathPal by your side</strong>.</p>
            </div>
        </div>
    </div>
</div>




<?php
//get_header();
include(TEMPLATEPATH . '/template-parts/topics.php');
?>



<?php
//get_header();
include(TEMPLATEPATH . '/template-parts/ixl.php');
?>




<div class="container-fluid banner-2 bg-24">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center fade-in">
                <h4 class="titulo-h4">Ready to succeed?</h4>
                <h3 class="titulo-h3 mb-4">Start your 1-on-1 online Math tutoring today</h3>
                <a href="#block_precios" class="btn-1 mt-4 c-hover-1" tabindex="0">Explore monthly suscription plans &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i></a>
            </div>
        </div>
    </div>
</div>


<?php
include(TEMPLATEPATH . '/template-parts/footer-default.php');
get_footer();
?>