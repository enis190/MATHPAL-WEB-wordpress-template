<?php
/*
 * Template Name: Home cintillo jhon
 */
?>
<?php
get_header();
include(TEMPLATEPATH . '/template-parts/header-default.php');
?>


<div id="slider_page" class="container-fluid c-slider ">
    <div class="row">
        <div class="col-12">
            <div class="d-block">
                <section id="main-banner-area" class="position-relative">
                    <div id="rev_slider_4_1_wrapper"
                        class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark"
                        data-alias="classic4export" data-source="gallery">
                        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
                        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner white" data-version="5.4.1">
                            <ul>


                                <li data-index="rs-02" class="slide1" data-transition="fade"
                                    data-slotamount="default" data-easein="Power100.easeIn"
                                    data-easeout="Power100.easeOut" data-masterspeed="2000"
                                    data-fsmasterspeed="1500" data-param1="01" class="item item1">
                                    <!-- MAIN IMAGE -->
                                    <?php
                                    //$img_id = get_field('banner_principal_fondo', get_the_ID());
                                    //$imagen_url = wp_get_attachment_image_url(get_field('banner_principal_fondo', get_the_ID()), 'full');
                                    //echo $imagen_url;
                                    ?>
                                    <img src="<?php echo wp_get_attachment_image_url(get_field('banner_principal_fondo', get_the_ID()), 'full') ?>" alt=""
                                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                        data-bgparallax="10" class="rev-slidebg" data-no-retina>

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-resizeme caption-1 "
                                        data-x="['left','left','left','center']"
                                        data-hoffset="['120','0','15','0']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-voffset="['-130','-100','-150','-210']"
                                        data-width="['500', '450', '400', '400']" data-height="none"
                                        data-type="text" data-textAlign="['left','left','left','center']"
                                        data-responsive_offset="on" data-start="800"
                                        data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                        <!-- <img src="assets/img/slider/txt-banner-1.png" alt="" class="img-fluid"> -->

                                        <h1><?php echo the_field('banner_principal_titulo_1', get_the_ID()) ?></h1>

                                    </div>


                                    <div class="tp-caption tp-resizeme caption-1 "
                                        data-x="['left','left','left','center']"
                                        data-hoffset="['120','0','15','0']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-voffset="['-80','-100','-90','-160']"
                                        data-width="['500', '450', '400', '400']" data-height="none"
                                        data-type="text" data-textAlign="['left','left','left','center']"
                                        data-responsive_offset="on" data-start="800"
                                        data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>


                                        <h2>

                                            <?php echo the_field('banner_principal_titulo_2', get_the_ID()) ?>


                                        </h2>

                                    </div>


                                    <div class="tp-caption tp-resizeme caption-2"
                                        data-x="['left','left','left','center']"
                                        data-hoffset="['120','0','15','0']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-voffset="['20','-20','-20','-100']"
                                        data-width="['500', '450', '400', '400']" data-height="none"
                                        data-type="text" data-textAlign="['left','left','left','center']"
                                        data-responsive_offset="on" data-start="800"
                                        data-frames='[{"delay":1800,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                        <h3>

                                            <?php echo the_field('banner_principal_texto_1', get_the_ID()) ?>
                                        </h3>
                                    </div>

                                    <div class="tp-caption tp-resizeme caption-2"
                                        data-x="['left','left','left','center']"
                                        data-hoffset="['120','0','15','0']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-voffset="['70','-20','-20','-60']"
                                        data-width="['500', '450', '400', '400']" data-height="none"
                                        data-type="text" data-textAlign="['left','left','left','center']"
                                        data-responsive_offset="on" data-start="800"
                                        data-frames='[{"delay":1800,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                        <h3>
                                            <?php echo the_field('banner_principal_texto_2', get_the_ID()) ?>
                                        </h3>
                                    </div>


                                    <div class="tp-caption tp-resizeme caption-2"
                                        data-x="['left','left','left','center']"
                                        data-hoffset="['120','0','25','0']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-voffset="['190','90','220','10']"
                                        data-width="['500', '450', '400', '350']" data-height="none"
                                        data-type="text" data-textAlign="['left','left','left','center']"
                                        data-responsive_offset="on" data-start="800"
                                        data-frames='[{"delay":2300,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                        <a href="<?php echo the_field('banner_principal_boton_1_url', get_the_ID()) ?>" class=" btn c-btn
                                            btn_formulario c-hover-1"><?php echo the_field('banner_principal_boton_1_texto', get_the_ID()) ?></a>
                                    </div>

                                    <!-- 
                                    <div class="tp-caption tp-resizeme caption-2"
                                        data-x="['right','right','right','center']"
                                        data-hoffset="['120','0','-30','10']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-voffset="['85','30','50','350']"
                                        data-width="['500', '450', '450', '430']" data-height="none"
                                        data-type="text" data-textAlign="['left','left','left','center']"
                                        data-responsive_offset="on" data-start="800"
                                        data-frames='[{"delay":2300,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                        <h3 class="modalidad">
                                            <span class="img">
                                                <img src="assets/img/icon-online.png" alt="" class="img-fluid">
                                            </span>
                                            <span class="txt">
                                                <subt>Modalidad</subt> Online
                                            </span>
                                        </h3>
                                        <h3 class="modalidad modalidad2">
                                            <span class="img">
                                                <img src="assets/img/icon-presencial.png" alt="" class="img-fluid">
                                            </span>
                                            <span class="txt">
                                                <subt>Presencial en</subt> Caracas y Maracaibo
                                            </span>
                                        </h3>
                                    </div>

                                    <div class="tp-caption tp-resizeme caption-2"
                                        data-x="['right','right','right','center']"
                                        data-hoffset="['120','0','15','0']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-voffset="['175','30','130','430']"
                                        data-width="['500', '450', '400', '300']" data-height="none"
                                        data-type="text" data-textAlign="['left','left','left','center']"
                                        data-responsive_offset="on" data-start="800"
                                        data-frames='[{"delay":2300,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                        <h3 class="efecto"><span>#BerlitzEsCool</span></h3>
                                    </div>

                                    <div class="tp-caption tp-resizeme caption-2"
                                        data-x="['right','right','right','center']"
                                        data-hoffset="['120','0','25','0']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-voffset="['250','90','220','530']"
                                        data-width="['500', '450', '400', '350']" data-height="none"
                                        data-type="text" data-textAlign="['left','left','left','center']"
                                        data-responsive_offset="on" data-start="800"
                                        data-frames='[{"delay":2300,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                        <a href="javascript:click_section('formulario')"" class=" btn c-btn
                                            btn_formulario">Quiero <span>inscribir a mi hij@</span> <i
                                                class="fa-solid fa-arrow-right fa-c"></i></a>
                                    </div> -->

                                    <div class="tp-caption tp-resizeme caption-3 c-caption-img"
                                        data-x="['right','right','right','center']" data-hoffset="['50','0','0','-25']"
                                        data-y="['bottom','bottom','bottom','bottom']"
                                        data-voffset="['0','-60','70','-90']"
                                        data-width="['580', '450', '350', '490']" data-height="none"
                                        data-type="text"
                                        data-textAlign="['left','left','left','left']"
                                        data-responsive_offset="on" data-start="500"
                                        data-frames='[{"delay":700,"speed":300,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                        <img src="<?php echo wp_get_attachment_image_url(get_field('banner_principal_img_1', get_the_ID()), 'full') ?>" alt="Online Math Tutoring" title="Online Math Tutoring | Mathpal" class="img-fluid">

                                    </div>

                                    <!-- <div class="tp-caption tp-resizeme caption-3 "
                                            data-x="['left','left','left','center']"
                                            data-hoffset="['110','0','50','-50']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['-35','-60','50','320']"
                                            data-width="['460', '450', '400', '300']" data-height="none"
                                            data-type="text" data-textAlign="['left','left','left','left']"
                                            data-responsive_offset="on" data-start="500"
                                            data-frames='[{"delay":900,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>

                                            <h3>Modalidad <span>Online</span> y <br>
                                                Presencial en <span>sede</span> Camacho</h3>
                                        </div> -->


                                    <!-- <div class="tp-caption tp-resizeme caption-2"
                                            data-x="['right','right','right','center']"
                                            data-hoffset="['40','0','0','0']"
                                            data-y="['middle','middle','middle','middle']"
                                            data-voffset="['270','200','110','390']"
                                            data-width="['500', '450', '400', '300']" data-height="none"
                                            data-type="text" data-textAlign="['left','left','left','center']"
                                            data-responsive_offset="on" data-start="800"
                                            data-frames='[{"delay":2300,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'>
                                            <p>Independently owned and operated</p>
                                        </div> -->


                                </li>





                            </ul>
                        </div>
                    </div>
                </section>
                <!--Main Slider ends -->
            </div>
        </div>
    </div>
</div>

<div class="container-fluid cintillo-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center fade-in">
                <h3><i class="fa-solid fa-tag"></i> Enjoy 35%* OFF on your first order! <span> | Apply our monthly coupon code at checkout:</span> <span class="code" id="btn_code_copy"><a><i class="fa-solid fa-copy"></i></a> CODE: BLACKFRIDAY35</span></h3>
            </div>
        </div>
    </div>
</div>


<!-- <div class="container-fluid c-slider caracteristicas">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <section class="slider responsive ">
                    <div class="item ">
                        <div class="d-block0 c-block fade-in-top" data-delay="0" data-duration="500">
                            <div class="img"><img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/vector-persona.png" alt=""></div>
                            <p>Expert bilingual tutors</p>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="d-block0 c-block fade-in-top" data-delay="100" data-duration="500">
                            <div class="img"><img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/vector-libro.png" alt=""></div>
                            <p>Personalized <br>plans</p>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="d-block0 c-block fade-in-top" data-delay="200" data-duration="500">
                            <div class="img"><img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/vector-foco.png" alt=""></div>
                            <p>Exam preparation ACT/SAT/States</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div> -->

<?php echo the_field('bloque_html_1', get_the_ID(), false) ?>




<!-- <div class="container-fluid como-funciona">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="titulo-h2 fade-in">How It works:</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <section class="slider responsive2">
                    <div class="item ">
                        <div class="c-wrapper fade-in" data-delay="100" data-duration="500">
                            <div class="d-block c-block">
                                <div class="nro">
                                    <span>1</span>
                                </div>
                                <div class="img">
                                    <center>
                                        <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/icon-monitor.png" alt="">
                                    </center>
                                </div>
                                <p>Book your diagnostic class and answer a quick survey!</p>
                            </div>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="c-wrapper fade-in" data-delay="300" data-duration="500">
                            <div class="d-block c-block">
                                <div class="nro">
                                    <span>2</span>
                                </div>
                                <div class="img">
                                    <center>
                                        <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/icon-mensaje.png" alt="">
                                    </center>
                                </div>
                                <p>Get matched with your perfect tutor and receive a personalized learning plan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="c-wrapper fade-in" data-delay="500" data-duration="500">
                            <div class="d-block c-block">
                                <div class="nro">
                                    <span>3</span>
                                </div>
                                <div class="img">
                                    <center>
                                        <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/icon-calendar.png" alt="">
                                    </center>
                                </div>
                                <p>Decide between a subscription or hourly rates, either way we are here to help!</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-4">
                <a href="<?php echo get_permalink(24) ?>" class="btn-1 c-hover-1">Start your journey now &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i></a>
            </div>
        </div>
    </div>
</div> -->


<?php echo get_field('bloque_html_2', get_the_ID(), false); ?>


<!-- <div class="container-fluid home-ruta">
    <div class="">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="titulo-h2 fade-in">Choose your learning path:</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <section class="slider responsive3">
                    <div class="item">
                        <div class="c-block fade-in-top" data-delay="100" data-duration="500">
                            <div class="tag">
                                <span>Knowledge is Power</span>
                            </div>
                            <div class="img">
                                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/img_DiagnosticClass.png" alt="" class="img-fluid">
                            </div>
                            <div class="edad">
                                <div class="row">
                                    <div class="col-9">
                                        Ages 8 to 18 | 4th grade - 12th grade.
                                    </div>
                                    <div class="col-3">
                                        <div class="icon">
                                            <i class="fa-solid fa-brain"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="body">
                                <h3>Diagnostic Class</h3>
                                <p>Discover strengths and areas to improve with a personalized assessment.</p>
                                <a href="<?php echo get_permalink(24) ?>" class="btn-1">Book now <i class="fa-solid fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-block fade-in-top" data-delay="300" data-duration="500">
                            <div class="tag">
                                <span>Your Plan, Your Pace</span>
                            </div>
                            <div class="img">
                                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/img_DiagnosticClass_2.png" alt="" class="img-fluid">
                            </div>
                            <div class="edad">
                                <div class="row">
                                    <div class="col-9">
                                        Ages 8 to 18 | 4th grade - 12th grade.
                                    </div>
                                    <div class="col-3">
                                        <div class="icon">
                                            <i class="fa-solid fa-calendar-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="body">
                                <h3>Monthly Subscriptions (2, 4, 8 hrs/month)</h3>
                                <p>Flexible tutoring hours that adapt to your schedule and goals.</p>
                                <a href="<?php echo get_permalink(26) ?>" class="btn-1">See plans <i class="fa-solid fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-block fade-in-top" data-delay="500" data-duration="500">
                            <div class="tag">
                                <span>Train & Lead</span>
                            </div>
                            <div class="img">
                                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/img_DiagnosticClass_3.png" alt="" class="img-fluid">
                            </div>
                            <div class="edad">
                                <div class="row">
                                    <div class="col-9">
                                        Ages 15 to 18 | 10th–12th grade
                                    </div>
                                    <div class="col-3">
                                        <div class="icon">
                                            <i class="fa-solid fa-book-bookmark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="body">
                                <h3>ACT/SAT PREP</h3>
                                <p>Personalized practice to boost confidence and ace your school exams.</p>
                                <a href="<?php echo get_permalink(28) ?>" class="btn-1">Start training <i class="fa-solid fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-block fade-in-top" data-delay="700" data-duration="500">
                            <div class="tag">
                                <span>Reach your full potential</span>
                            </div>
                            <div class="img">
                                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/img_DiagnosticClass_4.png" alt="" class="img-fluid">
                            </div>
                            <div class="edad">
                                <div class="row">
                                    <div class="col-9">
                                        Ages 8 to 18 | 4th grade - 12th grade.
                                    </div>
                                    <div class="col-3">
                                        <div class="icon">
                                            <i class="fa-solid fa-file"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="body">
                                <h3>State Exam Prep</h3>
                                <p>Train your skills, organize your studies, and gain the confidence to excel.</p>
                                <a href="<?php echo get_permalink(30) ?>" class="btn-1">Go for it! <i class="fa-solid fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div> -->


<?php echo get_field('bloque_html_3', get_the_ID(), false); ?>



<!-- <div class="container-fluid home_porque fade-in" data-delay="300" data-duration="500">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="titulo-h2 fade-in">Why choose MathPal<font>?</font>
            </h2>
        </div>
    </div>
    <div class="row">

        <div class="col-md-10 offset-md-1">
            <section class="slider responsive10 c-responsive_center0">


                <div class="item">
                    <div class="c-block fade-in-top" data-delay="100" data-duration="500">
                        <h4>100% Personalized learning</h4>
                        <p>Every class adapts to the student’s pace, style, and needs.</p>
                        <div class="img">
                            <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/porque1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="c-block fade-in-top" data-delay="300" data-duration="500">
                        <h4>Expert bilingual tutors</h4>
                        <p>Certified tutors fluent in English and Spanish.</p>
                        <div class="img">
                            <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/porque2.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="c-block fade-in-top" data-delay="500" data-duration="500">
                        <h4>Real results</h4>
                        <p>Focus on boosting grades, confidence, and exam success (ACT/SAT).</p>
                        <div class="img">
                            <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/porque3.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div> -->


<?php echo get_field('bloque_html_4', get_the_ID(), false); ?>

<?php
//include(TEMPLATEPATH . '/template-parts/testimonio.php');
?>

<?php echo get_field('bloque_html_5', get_the_ID(), false); ?>
<!-- 
<div class="container-fluid precios">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="titulo-h2 fade-in">Prices starting as low as <font>$</font>35/hour</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <section class="slider responsive4 fade-in-top">
                    <div class="item ">
                        <div class="c-block ">
                            <h4>Strengthen Skills Subscription</h4>
                            <h4 class="precio">130</h4>
                            <h4 class="det">Every month</h4>
                            <p class="mt-4 mb-4">Enhance your child's abilities with 4 monthly tutoring hours tailored to their unique learning needs</p>

                            <ul class="fa-ul mb-4">
                                <li><span class="fa-li"><i class="fa-solid fa-circle-check color-verde"></i></span>4 hours of personalized 1-on-1 expert math tutoring</li>
                                <li><span class="fa-li"><i class="fa-solid fa-circle-check color-verde"></i></span>Dive deeper into core concepts and problem-solving skills</li>
                                <li><span class="fa-li"><i class="fa-solid fa-circle-check color-verde"></i></span>Custom study plans to target specific challenges</li>
                                <li><span class="fa-li"><i class="fa-solid fa-circle-check color-verde"></i></span>IXL: Unlimited access to a premium educational platform</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="c-block ">
                            <h4>Emergency ACT/SAT Course</h4>
                            <h4 class="precio">250</h4>
                            <p class="mt-4 mb-4">Need a last-minute boost? Our certified tutors deliver expert tips, tricks, focused lessons, and practice to maximize your score fast.</p>
                            <p class="mb-4 c-small">Valid for one month</p>

                            <ul class="fa-ul mb-4">
                                <li><span class="fa-li"><i class="fa-solid fa-circle-check color-verde"></i></span>6 one-on-one tutoring hours</li>
                                <li><span class="fa-li"><i class="fa-solid fa-circle-check color-verde"></i></span>ACT and SAT Expert Tutors</li>
                                <li><span class="fa-li"><i class="fa-solid fa-circle-check color-verde"></i></span>Personalized Approach</li>
                                <li><span class="fa-li"><i class="fa-solid fa-circle-check color-verde"></i></span>Comprehensive Curriculum</li>
                                <li><span class="fa-li"><i class="fa-solid fa-circle-check color-verde"></i></span>10 Full Length Practice Exams</li>
                                <li><span class="fa-li"><i class="fa-solid fa-circle-check color-verde"></i></span>Strategic Test- Taking Techniques</li>
                            </ul>

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-4">
                <a href="<?php echo get_permalink(9) ?>" class="btn-1 c-hover-1">Compare all prices <font>&</font> plans &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i></a>
            </div>
        </div>
    </div>
</div> -->

<?php echo get_field('bloque_html_6', get_the_ID(), false); ?>


<!-- <div class="container-fluid home_form">
    <div class="row">
        <div class="col-md-5 img"></div>
        <div class="col-md-7 form fade-in">
            <h2 class="titulo-h2">Register here for more information</h2>
            <p><strong>Tell us a little about your child we’ll take care of the rest.</strong> </p>
            <div class="content-form">
                <div id="hs_form_target_widget_1614708359277"></div>

                <script src="https://peru.berlitzuavp.live/hs/hsstatic/cos-i18n/static-1.53/bundles/project.js"></script>

                <script data-hs-allowed="true" src="https://peru.berlitzuavp.live/_hcms/forms/v2.js"></script>

                <script data-hs-allowed="true">
                    var options = {
                        portalId: '9068661',
                        formId: 'f93cdcbd-cdc7-4b1e-a563-f0030b620d78',
                        formInstanceId: '8899',
                        pageId: '113138659853',
                        region: 'na1',
                        pageName: "Mathpal - Home",
                        redirectUrl: "https:\/\/www.mathpal.us\/thank-you",
                        css: '',
                        target: '#hs_form_target_widget_1614708359277',
                        contentType: "landing-page",
                        formsBaseUrl: '/_hcms/forms/',
                        formData: {
                            cssClass: 'hs-form stacked hs-custom-form'
                        },
                        onFormReady: function($form) {
                            $('.hs-form-radio').on('click', function() {
                                console.log('Se hizo clic en:', $(this));
                                let divs = document.querySelectorAll(".hs-form-radio");

                                divs.forEach(div => {
                                    div.classList.remove("active");
                                });

                                $(this).addClass('active');

                            });
                        }

                    };

                    options.getExtraMetaDataBeforeSubmit = function() {
                        var metadata = {};
                        if (hbspt.targetedContentMetadata) {
                            var count = hbspt.targetedContentMetadata.length;
                            var targetedContentData = [];
                            for (var i = 0; i < count; i++) {
                                var tc = hbspt.targetedContentMetadata[i];
                                if (tc.length !== 3) {
                                    continue;
                                }
                                targetedContentData.push({
                                    definitionId: tc[0],
                                    criterionId: tc[1],
                                    smartTypeId: tc[2]
                                });
                            }
                            metadata["targetedContentMetadata"] = JSON.stringify(targetedContentData);
                        }
                        return metadata;
                    };
                    hbspt.forms.create(options);
                </script>
            </div>
        </div>
    </div>
</div> -->
<?php echo get_field('bloque_html_7', get_the_ID(), false); ?>




<!-- <div class="container-fluid home_faqs">
    <div class="container">
        <div class="row fade-in">
            <div class="col-md-6">
                <h2 class="titulo-h2"><span>FREQUENTLY ASKED QUESTIONS</span> Get your questions answered instantly</h2>
            </div>
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is online math tutoring?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>A personalized and adaptable learning solution, accommodating a variety of student’s needs and schedules.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Do you offer math tutoring for middle and high school students?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Yes. Our tutoring service are set up for students from 4th to 12th grade.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do you provide SAT math tutoring?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes. We prepare students on all the mathematic topics that are tested on the SAT, train them timing, and testing skills
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                                How much is math tutoring per hour?
                            </button>
                        </h2>
                        <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Our prices start as low as $35 per hour
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree">
                                Do you provide ACT math tutoring?
                            </button>
                        </h2>
                        <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes. We prepare students on all the mathematic topics that are tested on the ACT, train them timing, and testing skills
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<?php echo get_field('bloque_html_8', get_the_ID(), false); ?>


<?php
include(TEMPLATEPATH . '/template-parts/footer-default.php');
get_footer();
?>