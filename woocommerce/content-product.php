<?php
defined( 'ABSPATH' ) || exit;

include(TEMPLATEPATH . '/template-parts/header-default.php');
?>

<div class="container c-div-padding shop">
    <div class="row">
        <div class="col-12">

            <?php
            /**
             * Hook: woocommerce_before_main_content.
             */
            do_action( 'woocommerce_before_main_content' );

            if ( woocommerce_product_loop() ) {

                do_action( 'woocommerce_before_shop_loop' );

                woocommerce_product_loop_start();

                if ( wc_get_loop_prop( 'total' ) ) {
                    while ( have_posts() ) {
                        the_post();
                        do_action( 'woocommerce_shop_loop' );
                        wc_get_template_part( 'content', 'product' );
                    }
                }

                woocommerce_product_loop_end();

                do_action( 'woocommerce_after_shop_loop' );

            } else {
                do_action( 'woocommerce_no_products_found' );
            }

            /**
             * Hook: woocommerce_after_main_content.
             */
            do_action( 'woocommerce_after_main_content' );
            ?>

        </div>
    </div>
</div>

<?php
include(TEMPLATEPATH . '/template-parts/footer-default.php');
