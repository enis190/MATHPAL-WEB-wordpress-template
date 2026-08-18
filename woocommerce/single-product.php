
<?php
defined( 'ABSPATH' ) || exit;
get_header();
include get_template_directory() . '/template-parts/header-default.php';
?>

<div class="container single-product c-woocommerce c-single-product">
    <div class="row">
        <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

            <div class="row">
                <div class="col-6 c-product-gallery">
                    <?php do_action( 'woocommerce_before_single_product_summary' ); ?>
                </div>

                <div class="col-6 summary entry-summary">
                    <?php do_action( 'woocommerce_single_product_summary' ); ?>
                </div>
            </div>

            <?php do_action( 'woocommerce_after_single_product_summary' ); ?>

        </div>
    </div>
</div>

<?php
//get_footer( 'shop' );

include get_template_directory() . '/template-parts/footer-default.php';
get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
