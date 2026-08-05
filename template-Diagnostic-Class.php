<?php
/*
 * Template Name: Diagnostic Class
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
            

<div class="container-fluid header-title-img">
    <div class="container">
        <div class="row ">
            <div class="col-md-5 img fade-in">
                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/img-title-1.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 offset-md-1 txt pt-4 fade-in-right">
                <span class="tag-1-lg mb-4 ">Knowledge is Power</span>
                <h1 class="titulo-h2 mt-4 " style="color:#9300ff">Online Math <br>Diagnostic Test</h1>
                <p class="">Discover strengths and areas to improve with a personalized assessment.</p>
                <a href="<?php echo get_permalink( 69 )?>" class="btn-1 c-hover-2">Book now &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i></a>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid precios-2" id="block_precios">
    <div class="container fade-in">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="titulo-h3 ">Uncover your (child's) math potential with MathPal's diagnostic class. An IXL assesment will spot strenghts and areas of growth.</h3>

            </div>
        </div>
        <div class="row block">
            <div class="col-md-5 offset-md-4 item">
                <div class="d-block c-block">
                    <!-- <div class="img">
                        <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/foto-precio-2.png" alt="">
                    </div> -->
                    <h4 class="precio">15</h4>
                    

                    <ul class="fa-ul mb-4">
                        <li><span class="fa-li"><i class="fa-solid fa-clock color-verde"></i></span>45 minutes of 1-on-1 Expert Math Tutoring</li>
                        <li><span class="fa-li"><i class="fa-solid fa-chart-line color-verde"></i></span>Diagnostic Assessment Efficiently Assessing Math Knowledge</li>
                        <li><span class="fa-li"><i class="fa-regular fa-chalkboard-user color-verde"></i></span>Get Paired with an Expert Tutor Personally Chosen for you!</li>
                        <li><span class="fa-li"><i class="fa-solid fa-calendar color-verde"></i></span>Valid for 1 month</li>
                    </ul>

                    <a href="<?php echo get_permalink( 69 )?>" class="btn-1 mt-4" tabindex="0">Buy now &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>




<?php
//get_header();
include(TEMPLATEPATH . '/template-parts/topics.php');
?>



<div class="container-fluid banner-1">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/girl.png" alt="" class="img-fluid fade-in">
            </div>
            <div class="col-md-10">
                <h2 class="titulo-h3 fade-in-top">With tailored sessions, students prepare not just to pass exams, but to excel and lead academically.</h2>
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
//get_header();
include(TEMPLATEPATH . '/template-parts/ixl.php');
?>

<div class="container-fluid banner-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center ">
                <h4 class="titulo-h4 fade-in">Ready to start?</h4>
                <h3 class="titulo-h3 mb-4 fade-in">Book your diagnostic class today</h3>
                <a href="<?php echo get_permalink( 69 )?>" class="btn-1 mt-4 fade-in c-hover-1" tabindex="0">Book now &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i></a>
            </div>
        </div>
    </div>
</div>


<?php
include(TEMPLATEPATH . '/template-parts/footer-default.php');
get_footer();
?>