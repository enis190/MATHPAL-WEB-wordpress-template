<?php
/*
 * Template Name: Checkout
 */
?>
<?php
get_header();
include(TEMPLATEPATH . '/template-parts/header-default.php');
?>

<div class="container-fluid c-div-padding checkout">
    <div class="">
        <div class="row">
            <div class="col-12 contenedor_iframe">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content(); // Muestra el contenido procesado
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include(TEMPLATEPATH . '/template-parts/footer-default.php');
get_footer();
?>