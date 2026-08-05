<?php
/*
 * Template Name: Aditional hours
 */
?>
<?php
get_header();
include(TEMPLATEPATH . '/template-parts/header-default.php');
?>


<div class="container-fluid header-title-img mt-0 mt-md-5 bg-25">
    <div class="container">
        <div class="row">
            <div class="col-md-5 img fade-in">
                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/img-title-5.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 offset-md-1 txt pt-4 fade-in-right">
                <span class="tag-1-lg mb-4">Practice when you need it</span>
                <h1 class="titulo-h2 mt-4" style="color:#9300ff">Additional Math Tutoring Hours</h1>
                <p>Add 1, 5, or 10 extra hours to your subscription at a special discounted rate - perfect for exam season or extra practice.</p>
                <a href="#block_precios" class="btn-1 c-hover-2">Start training &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i></a>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid precios bg-11" id="block_precios">
    <div class="container0">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="titulo-h3 color-blanco fade-in">Additional tutoring hours for subscribers</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1 fade-in">
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
            <div class="col-12 text-center fade-in">
                <h3 class="titulo-h3">Pay-as-you-go math tutoring</h3>
                <p><span class="tag-1">Flexible 1-hour sessions — no subscription required.</span></p>
            </div>
        </div>
        <div class="row block justify-content-center">
            <div class="col-md-6 col-lg-5 item fade-in">
                <div class="c-block">
                    <!-- <div class="img">
                        <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/foto-precio.png" alt="">
                    </div> -->
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




<div class="container-fluid c-footer resultados">
    <div class="container fade-in">
        <div class="row">
            <div class="col-md-6">
                <div class="img">
                    <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/no_risk_2.png" alt="" class="img-fluid">
                </div>
                <p class="mt-4">Subscribers can purchase additional 1-on-1 sessions at special discounted rates — perfect for extra practice before exams or when you need extra support.</p>
            </div>
            <div class="col-md-6 txt">
                <div class="item">
                    <div class="det">
                        <span class="nro">
                            <i class="fa-solid fa-calendar"></i>
                        </span>
                        <h4>Stay on track before exams</h4>
                        <p>add extra hours during busy test seasons.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="det">
                        <span class="Learn">
                            <i class="fa-solid fa-arrows-to-circle"></i>
                        </span>
                        <h4>Focus on specific topics</h4>
                        <p>more time on weak areas with your tutor.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="det">
                        <span class="nro">
                            <i class="fa-solid fa-clock"></i>
                        </span>
                        <h4>Flexible scheduling</h4>
                        <p>book extra sessions when you need them.</p>
                    </div>
                </div>

                
            </div>
        </div>
        <!-- <div class="row mt-4">
            <div class="col-md-12 text-center">
                <a href="#block_precios" class="btn-1 mt-4" tabindex="0">Choose extra hours <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div> -->
    </div>
</div>



<div class="container-fluid banner-2 bg-15">
    <div class="container fade-in">
        <div class="row">
            <div class="col-md-12 text-center">
                <!-- <h4 class="titulo-h4">Ready to succeed?</h4> -->
                <h3 class="titulo-h3 mb-4">Get the extra hours you need to succeed, add them to your plan today.</h3>
                <a href="#block_precios" class="btn-1 mt-4" tabindex="0">Add extra hours now <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<?php
include(TEMPLATEPATH . '/template-parts/footer-default.php');
get_footer();
?>


