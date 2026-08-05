<div class="container-fluid c-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5 legal ">
                <p>*Discount offered as part of our new brand and website update, available until 11/30/2025. Cannot be combined with other discounts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <center>
                    <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/logo_footer.gif" alt="" class="img-fluid logo">
                </center>
            </div>
            <div class="col-md-9 offset-md-1">
                <div class="row">
                    <div class="col-md-3 c-group-1 mt-5 mt-sm-0">
                       
                        <?php
                        //get_header();
                        include(TEMPLATEPATH . '/template-parts/menu-footer.php');
                        ?>

                    </div>
                    <div class="col-md-3 c-group-2 mt-4 mt-sm-0">
                        <p class="title">Contact</p>
                        <p><a href="mailto:info@mathpal.us"><i class="fa-regular fa-envelope"></i> info@mathpal.us</a></p>
                        <p><a href="tel:15618473516"><i class="fa-solid fa-mobile-screen"></i> +1 (561) 847 3516</a></p>
                        <p><a href="https://wa.link/6cogzw" target="_blank"><i class="fa-brands fa-whatsapp"></i> +51 980 248 962</a></p>

                    </div>
                    <div class="col-md-3 c-group-3 mt-4 mt-sm-0">
                        <p class="title">Follow us</p>
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/profile.php?id=61551106735359"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/mathpal_us/?fbclid=IwAR3wHcyZvwshcPaJrl78N2mZUj5E9tQ3JzeiHo2a_qSKV9ctcyKTKVdqZb4"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/@mathpal_us"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>

                    </div>
                    <div class="col-md-3 c-group-2">
                        <p class="title">&nbsp;</p>
                        <p><a href="<?php echo get_permalink(88) ?>">Terms and conditions</a></p>
                        <p><a href="<?php echo get_permalink(90) ?>">Privacy Policy</a></p>

                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

<!-- Slick-->
<!-- <script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script> -->
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>


<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/propper.min.js"></script>
<!-- <script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/bootstrap.min.js"></script> -->
<!--to view items on reach-->
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/jquery.appear.min.js"></script>
<!--Owl Slider-->
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/owl.carousel.min.js"></script>
<!--number counters-->
<!-- <script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/jquery-countTo.min.js"></script> -->
<!--Parallax Background-->
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/parallaxie.min.js"></script>
<!--Cubefolio Gallery-->
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/jquery.cubeportfolio.min.js"></script>
<!--Fancybox js-->
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/jquery.fancybox.min.js"></script>
<!--tooltip js-->
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/tooltipster.min.js"></script>
<!--wow js-->
<!-- <script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/wow.min.js"></script> -->

<!--Revolution SLider-->
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/revolution/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<!-- <script src="js/revolution/extensions/revolution.extension.migration.min.js"></script> -->
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<!-- <script src="js/revolution/extensions/revolution.extension.video.min.js"></script> -->
<!--custom functions and script-->
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/functions.js"></script>
<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/cmln.js"></script>






<script src="<?php echo bloginfo('template_url') . '/' ?>assets/js/cmln_2.js"></script>

<?php
wp_footer();
?>


</body>

</html>