
<?php
defined( 'ABSPATH' ) || exit;
get_header();
include get_template_directory() . '/template-parts/header-default.php';
?>

<div class="container single-product c-woocommerce c-single-product">
    <div class="row">
        <div class="col-12">

            <?php
            //do_action( 'woocommerce_before_main_content' );

            while ( have_posts() ) :
                the_post();
                wc_get_template_part( 'content', 'single-product' );
            endwhile;
            ?>

        </div>
    </div>
</div>

<?php
//get_footer( 'shop' );

include get_template_directory() . '/template-parts/footer-default.php';
get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
