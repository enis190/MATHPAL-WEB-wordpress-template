<?php
$telefono = get_theme_mod('telefono_opcion');
$whatsapp = get_theme_mod('whatsapp_opcion');
$whatsapp_link  = get_theme_mod('whatsapp_link_opcion');
?>

<div class="cintillo_2026" role="region" aria-label="Promoción">
    <a href="https://www.mathpal.us/subscriptions/" class="cintillo_2026__link">
        <div class="cintillo_2026__inner">
            <img
                class="cintillo_2026__img cintillo_2026__img--desktop"
                src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/BACK-TO-SCHOOL_CINTILLO_DESK.png"
                alt="Back to school"
                width="1924"
                height="70"
                decoding="async">
            <!-- <img
                class="cintillo_2026__img cintillo_2026__img--mobile"
                src="<?php //echo esc_url( content_url( 'uploads/2026/06/CINTILLO-WEB-MOB.png' ) ); 
                        ?>"
                alt="Summer at MathPal"
                width="430"
                height="202"
                decoding="async"
            > -->
        </div>
    </a>
</div>
<div class="container-fluid c-head ">
    <div class="container0">
        <div class="row align-items-center">
            <div class="col-8 col-md-2 logo">

                <a href="<?php echo  get_site_url(); ?>"><img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/logo.png" alt="" class="img-fluid"></a>
            </div>
            <div class="col-md-5 menu d-none d-md-block">

                <?php
                //get_header();
                include(TEMPLATEPATH . '/template-parts/menu.php');
                ?>
                <!--  -->
            </div>
            <div class="col-md-4 ctas d-none d-md-block">
                <div class="row">
                    <div class="col-md-4 cta-tel d-none d-sm-block">
                        <div class="d-block">
                            <?php
                            if ($telefono) {
                            ?>
                                <a href="tel:<?php echo preg_replace('/\D+/', '', $telefono) ?>" target="_blank">
                                    <span>
                                        <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/mobile-screen.png" alt="" class="img-fluid">
                                        <!--<?php echo esc_html($telefono); ?>-->
                                        Call us
                                    </span>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 cta-wa d-none d-sm-block">
                        <div class="d-block">

                            <?php
                            if ($whatsapp && $whatsapp_link) {
                            ?>
                                <a href="<?php echo esc_url($whatsapp_link) ?>" target="_blank">
                                    <span>
                                        <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/whatsapp.png" alt="" class="img-fluid">
                                        <!-- +51 980 248 962 -->
                                        <!--<?php echo esc_html($whatsapp); ?>-->
                                        Let’s chat
                                    </span>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-1 img-age">
                        <center>
                            <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/cta-ages.png" alt="" class="img-fluid">
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-4 icon-wc">
                <?php if (function_exists('WC')) : ?>
                    <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="cart-icon-wrapper">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    </a>
                <?php endif; ?>
            </div>
            <div class="col-4 col-md-auto d-flex d-md-none align-items-center justify-content-end">
                <a id="btn-menu-xs-abrir" class="btn-menu d-block d-lg-none" href="#" aria-label="Open menu"><i class="fa-solid fa-bars"></i></a>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid btns-contact-xs">
    <div class="container c-content">
        <div class="row">
            <div class="col-6 c-btn btn-tel">

                <?php
                if ($telefono) {
                ?>
                    <a href="tel:<?php echo preg_replace('/\D+/', '', $telefono) ?>" target="_blank">
                        <span><i class="fa-solid fa-phone"></i></span>
                    </a>
                <?php
                }
                ?>
            </div>
            <div class="col-6 c-btn btn-wsp">

                <?php
                if ($whatsapp && $whatsapp_link) {
                ?>
                    <a href="<?php echo esc_url($whatsapp_link) ?>" target="_blank">
                        <span><i class="fa-brands fa-whatsapp"></i></span>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>


<?php
//get_header();
include(TEMPLATEPATH . '/template-parts/menu-xs.php');
?>

<script>
    (function() {
        function mpSyncSiteHeader() {
            var cintillo = document.querySelector('.cintillo_2026');
            var head = document.querySelector('.c-head');

            if (!cintillo) {
                document.documentElement.style.setProperty('--mp-cintillo-height', '0px');
            } else {
                document.documentElement.style.setProperty('--mp-cintillo-height', cintillo.offsetHeight + 'px');
                cintillo.querySelectorAll('.cintillo_2026__img').forEach(function(img) {
                    if (!img.complete) {
                        img.addEventListener('load', mpSyncSiteHeader);
                    }
                });
            }

            if (head) {
                document.documentElement.style.setProperty('--mp-header-height', head.offsetHeight + 'px');
            }

            var adminBar = document.getElementById('wpadminbar');
            document.documentElement.style.setProperty(
                '--mp-admin-bar-height',
                adminBar ? adminBar.offsetHeight + 'px' : '0px'
            );
        }

        mpSyncSiteHeader();
        window.addEventListener('load', mpSyncSiteHeader);
        window.addEventListener('resize', mpSyncSiteHeader);

        if (document.fonts && document.fonts.ready) {
            document.fonts.ready.then(mpSyncSiteHeader);
        }
    })();
</script>