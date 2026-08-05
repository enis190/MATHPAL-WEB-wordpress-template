<?php
/*
 * Template Name: About
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
                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/joven-laptop.png" alt="" class="img-fluid" style="margin-bottom:-70px">
            </div>
            <div class="col-md-6 offset-md-1 txt pt-4 fade-in-right">
                
                <h1 class="titulo-h2 h1about mt-4" style="color:#9300ff">Bilingual Math Tutoring Experts</h1>
                <span class="tag-1-lg mb-4">Meet Our Bilingual Math Tutor Team</span> 
                <p style="margin-top:10px">Personalized online tutoring designed to strengthen core skills, build confidence, and help every student succeed.</p>
                <!-- <a href="#block_precios" class="btn-1 c-hover-2">Start training &nbsp;<i class="fa-solid fa-circle-arrow-right ani_fa_balanceo"></i></a> -->
            </div>
        </div>
    </div>
</div>


<!-- <div class="container-fluid c-footer resultados pt-0 pb-0">
    <div class="">
        <div class="row">
            <div class="col-md-6 txt c-div-padding-l pt-5 pb-5 bg-blanco bg-18 fade-in">
                <h2 class="titulo-h2 mb-3">Why Choose MathPal<font>?</font></h2>
                <div class="item">
                    <div class="det">
                        <span class="nro bg-verde">
                            
                        </span>
                        <p><strong>Bilingual Support:</strong> Tutoring in both Spanish and English.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="det">
                        <span class="Learn bg-verde">
                            
                        </span>
                        <p><strong>Qualified Tutors:</strong> Experienced and knowledgeable tutors</p>
                    </div>
                </div>
                <div class="item">
                    <div class="det">
                        <span class="nro bg-verde">
                            
                        </span>
                        <p><strong>Wide Range of Subjects:</strong> From elementary math to SAT/ACT tutoring and homeschooling support.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="det">
                        <span class="nro bg-verde">
                            
                        </span>
                        <p><strong>Personalized Learning:</strong> Tailored tutoring to fit each student's needs.</p>
                    </div>
                </div>

                
            </div>

            <div class="col-md-6 txt c-div-padding-r bg-negro pt-5 pb-5 bg-19 fade-in">
                <h2 class="titulo-h2 mb-3 color-blanco">Our values</h2>
                <div class="item">
                    <div class="det">
                        <span class="nro bg-verde">
                            
                        </span>
                        <p class="color-blanco"><strong>Inclusivity:</strong> We believe in providing education that transcends language barriers.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="det">
                        <span class="Learn bg-verde">
                            
                        </span>
                        <p class="color-blanco"><strong>Quality Education:</strong> We are committed to offering top-notch tutoring services.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="det">
                        <span class="nro bg-verde">
                            
                        </span>
                        <p class="color-blanco"><strong>Personalized Support:</strong> Each student's learning journey is unique, and we tailor our tutoring to meet individual needs.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="det">
                        <span class="nro bg-verde">
                            
                        </span>
                        <p class="color-blanco"><strong>Student Success:</strong> Our primary goal is to help students achieve their full academic potential.</p>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div> -->

<div class="container-fluid c-footer c-footer2  resultados bg-1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 txt fade-in-right">
                <!-- <h2 class="titulo-h2 mt-4 mb-4">What are ACT/SAT<font>?</font>
                </h2> -->
                <div class="item">
                    <div class="det">
                        <!-- <span class="nro">
                            <i class="fa-solid fa-chart-line"></i>
                        </span> -->
                        <p>Our math tutors aren't just experts in numbers — they're bilingual educators who understand what it means to learn in two languages and navigate a new school system.</p> <br>
                        <p>Every MathPal tutor is carefully selected for their subject knowledge, their ability to connect with students, and their passion for making math tutoring finally work for your child.</p> <br>
                        <p>Whether your kid needs a confidence boost or a serious challenge, there's a tutor here ready to meet them exactly where they are.</p>
                    </div>
                </div>
                <!-- <div class="item">
                    <div class="det">
                        <span class="Learn">
                            <i class="fa-solid fa-arrows-to-eye"></i>
                        </span>
                        <p>Higher scores = more opportunities + scholarships.</p>
                    </div>
                </div> -->



            </div>
            <div class="col-md-6 fade-in-left">
                <div class="img">
                    <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/mujer-laptop.png" alt="" class="img-fluid c-img-fluid">
                </div>

            </div>
        </div>
        <!-- <div class="row mt-4">
            <div class="col-md-12 text-center">
                <a href="#block_precios" class="btn-1 mt-4" tabindex="0">Get starterd today! <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div> -->
    </div>
</div>

<section class="teachers-section">

<h2 class="tutores fade-in">Our Math Tutors: </h2>

    <div class="teachers-section__slider-wrap">
    <div class="slider-profes responsive-profes">

        <div class="col-md-5 img fade-in">
                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/DAKAIRI.png" alt="" class="img-fluid">
            </div>

        <div class="col-md-5 img fade-in">
                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/TOMAS VIDAL.png" alt="" class="img-fluid">
            </div>

        <div class="col-md-5 img fade-in">
                <img src="<?php echo esc_url( content_url( 'uploads/2026/06/LUCIANA-1.png' ) ); ?>" alt="Luciana Manes" class="img-fluid">
            </div>

        <div class="col-md-5 img fade-in">
                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/TOMAS.png" alt="" class="img-fluid">
            </div>

        <div class="col-md-5 img fade-in">
                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/ALDANA.png" alt="" class="img-fluid">
            </div>

    </div>
    </div>

</section>


 <div class="container-fluid header-title mt-0 bg-13 pt-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-4 fade-in-right">
                <center>
                    <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/img-1.png" alt="" class="img-fluid">
                </center>
            </div>
            <div class="col-md-7 offset-md-1 mt-4 fade-in-left">
                <div><br><br></div>
                <h2 class="titulo-h2 color-negro mt-4">Our vision</h2>
                <p class="color-negro">At MathPal, we envision a world where every student has the opportunity to succeed academically, regardless of language barriers. We aim to expand our offerings to more subjects and reach more families, continually  improving the quality and effectiveness of our tutoring services.</p>
            </div>
        </div>
    </div>
</div> 


 <div class="container-fluid c-div-padding bg-14">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="titulo-h2 color-blanco fade-in">How it works</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <section class="responsive2 c-slider-2 fade-in-top">
                    <div class="item">
                        <div class="d-block">
                            <p class="mb-0 nro">
                                <span class=" ">1</span>
                            </p>
                            <p class="color-blanco mb-0 title"><strong>Sign up</strong></p>
                            <p class="color-blanco mb-4">for a Diagnostic Class</p>
                            <center>
                                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/img-2.png" alt="" class="img-fluid">
                            </center>
                        </div>
                    </div>
                    <div class="item">
                        <div class="d-block">
                            <p class="mb-0 nro">
                                <span class=" ">2</span>
                            </p>
                            <p class="color-blanco mb-0 title"><strong>Get paired</strong></p>
                            <p class="color-blanco mb-4">with your perfect tutor thanks to our personalized survey</p>
                            <center>
                                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/img-3.png" alt="" class="img-fluid">
                            </center>
                        </div>
                    </div>
                    <div class="item">
                        <div class="d-block">
                            <p class="mb-0 nro">
                                <span class=" ">3</span>
                            </p>
                            <p class="color-blanco mb-0 title"><strong>Schedule Sessions:</strong></p>
                            <p class="color-blanco mb-4">Set up tutoring sessions that fit your schedule.</p>
                            <center>
                                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/img-4.png" alt="" class="img-fluid">
                            </center>
                        </div>
                    </div>
                    <div class="item">
                        <div class="d-block">
                            <p class="mb-0 nro">
                                <span class=" ">4</span>
                            </p>
                            <p class="color-blanco mb-0 title"><strong>Track Progress:</strong></p>
                            <p class="color-blanco mb-4">Monitor your academic progress and adjust tutoring as needed.</p>
                            <center>
                                <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/img-6.png" alt="" class="img-fluid">
                            </center>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>



 

<!--

<div class="container-fluid c-div-padding bg-15">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="titulo-h3 color-blanco fade-in">We are here to help! Reach out to us via email, phone, or through our social media channels for more information or support.</h3>
            </div>
        </div>
    </div>
</div>
 -->



<?php
include(TEMPLATEPATH . '/template-parts/footer-default.php');
get_footer();
?>


<style>
    .teachers-section{
    padding:60px 30px;
    background-image: url('../img/PLANS.png');
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
    overflow:hidden;
}

.teachers-section__slider-wrap {
    position: relative;
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 56px;
}

.teachers-section .slider-profes {
    position: relative;
}

.teachers-section .slider-profes .slick-prev,
.teachers-section .slider-profes .slick-next {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background-color: #9300ff;
    border: none;
    z-index: 3;
    display: flex !important;
    align-items: center;
    justify-content: center;
    top: 50%;
    transform: translateY(-50%);
    transition: background-color 0.2s ease, transform 0.2s ease;
}

.teachers-section .slider-profes .slick-prev:hover,
.teachers-section .slider-profes .slick-next:hover,
.teachers-section .slider-profes .slick-prev:focus,
.teachers-section .slider-profes .slick-next:focus {
    background-color: #7a00d4;
    outline: none;
}

.teachers-section .slider-profes .slick-prev:before,
.teachers-section .slider-profes .slick-next:before {
    display: none;
    content: none;
}

.teachers-section .slider-profes .slick-prev i,
.teachers-section .slider-profes .slick-next i {
    color: #fff;
    font-size: 1rem;
    line-height: 1;
}

.teachers-section .slider-profes .slick-prev {
    left: 0;
}

.teachers-section .slider-profes .slick-next {
    right: 0;
}

.teachers-section .slider-profes .slick-prev.slick-disabled,
.teachers-section .slider-profes .slick-next.slick-disabled {
    opacity: 0.35;
    cursor: not-allowed;
}

.slider-profes .slick-slide {
    padding: 0 10px;
}

.slider-profes .slick-slide .img {
    width: 100%;
    display: block;
    padding: 0;
}

.slider-profes .slick-slide .img img {
    width: 100%;
    max-width: 100%;
    height: auto;
    margin: 0 auto;
    display: block;
}

/* DOTS */
.teachers-section .slick-dots {
    bottom:-40px;
}

.teachers-section .slick-dots li button:before{
    font-size:14px;
    color:#fff;
}

.teachers-section .slick-dots li.slick-active button:before{
    color:#fff;
}

@media (max-width: 1023px) {
    .teachers-section__slider-wrap {
        max-width: 640px;
    }

    .slider-profes .slick-slide {
        padding: 0 6px;
    }
}

@media (max-width: 767px) {
    .teachers-section {
        padding: 48px 10px 56px;
    }

    .teachers-section__slider-wrap {
        padding: 0 28px;
        max-width: 100%;
    }

    .slider-profes .slick-slide {
        padding: 0;
    }

    .slider-profes .slick-slide .img img {
        width: 100%;
        max-width: none;
    }

    .teachers-section .slider-profes .slick-prev,
    .teachers-section .slider-profes .slick-next {
        width: 32px;
        height: 32px;
        top: 24%;
    }

    .teachers-section .slider-profes .slick-prev i,
    .teachers-section .slider-profes .slick-next i {
        font-size: 0.85rem;
    }
}
</style>

<script>
    $('.responsive-profes').slick({
    dots:true,
    arrows:true,
    prevArrow:'<button type="button" class="slick-prev" aria-label="Previous tutor"><i class="fa-solid fa-chevron-left" aria-hidden="true"></i></button>',
    nextArrow:'<button type="button" class="slick-next" aria-label="Next tutor"><i class="fa-solid fa-chevron-right" aria-hidden="true"></i></button>',
    infinite:true,
    autoplay:true,
    autoplaySpeed:3000,
    speed:500,
    slidesToShow:2,
    slidesToScroll:1,

    responsive:[
        {
            breakpoint:1200,
            settings:{
                slidesToShow:2
            }
        },
        {
            breakpoint:768,
            settings:{
                slidesToShow:1,
                slidesToScroll:1
            }
        }
    ]
});
</script>