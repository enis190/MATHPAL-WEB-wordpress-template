<?php
defined('ABSPATH') || exit;
get_header();
include get_template_directory() . '/template-parts/header-default.php';
?>

<div class="container c-div-padding shop c-woocommerce">
    <div class="row">
        <div class="col-12">

            <?php
            // //do_action( 'woocommerce_before_main_content' );
            // do_action( 'woocommerce_shop_loop_header' );

            // if ( woocommerce_product_loop() ) {

            //     do_action( 'woocommerce_before_shop_loop' );

            //     woocommerce_product_loop_start();

            //     if ( wc_get_loop_prop( 'total' ) ) {
            //         while ( have_posts() ) {
            //             the_post();
            //             do_action( 'woocommerce_shop_loop' );
            //             wc_get_template_part( 'content', 'product' );
            //         }
            //     }

            //     woocommerce_product_loop_end();

            //     do_action( 'woocommerce_after_shop_loop' );
            // } else {
            //     do_action( 'woocommerce_no_products_found' );
            // }

            // //do_action( 'woocommerce_after_main_content' );
            // //do_action( 'woocommerce_sidebar' );
            ?>


            <?php
            $bloque1 = new WP_Query(array(
                'post_type'      => 'product',
                'post_status'    => 'publish',
                'posts_per_page' => -1, // trae todos los de esa categoría; pon un número si quieres limitar
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field'    => 'slug',
                        'terms'    => array('diagnostic-class'),
                    ),
                ),
            ));

            if ($bloque1->have_posts()) :
            ?>

                    <?php
                    while ($bloque1->have_posts()) :
                        $bloque1->the_post();
                        global $product;
                        wc_get_template_part('content', 'product');
                    endwhile;
                    wp_reset_postdata();
                    ?>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php
include get_template_directory() . '/template-parts/footer-default.php';
get_footer();
