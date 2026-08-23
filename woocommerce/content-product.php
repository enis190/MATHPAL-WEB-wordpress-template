<?php

global $product;

// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding.
if (! is_a($product, WC_Product::class) || ! $product->is_visible()) {
	return;
}


$tag_categoria = wc_get_product_category_list($product->get_id(), ', '); // o cualquier taxonomía tuya
$edad = get_post_meta($product->get_id(), 'woo_edad', true);
$etiqueta = get_post_meta($product->get_id(), 'woo_etiqueta', true);
$titulo = $product->get_name();
$descripcion = $product->get_description();
$imagen = get_the_post_thumbnail_url($product->get_id(), 'medium') ?: 'https://www.mathpal.us/wp-content/themes/mathpal/assets/img/img_DiagnosticClass.png';
$link = get_permalink($product->get_id());

?>

<div <?php wc_product_class('item col-md-12', $product); ?>>
	<div class="c-block fade-in-top" data-delay="100" data-duration="500">
		<div class="tag"><span><?php echo $etiqueta;?></span></div>
		<div class="img">
			<img class="img-fluid" src="<?php echo esc_url($imagen); ?>" alt="<?php echo esc_attr($titulo); ?>" />
		</div>
		<div class="edad">
			<div class="row">
				<div class="col-9"><?php echo $edad; ?></div>
				<div class="col-3">
					<div class="icon"><i class="fa-solid fa-brain"></i></div>
				</div>
			</div>
		</div>
		<div class="body">
			<h3><?php echo esc_html($titulo); ?></h3>
			<div class="woo-description">
				<?php echo wp_kses_post($descripcion); ?>
			</div>

			<!-- <a class="btn-1" href="<?php echo esc_url($link); ?>">
                Book now <i class="fa-solid fa-circle-arrow-right"></i>
            </a> -->

			<?php
			woocommerce_template_loop_add_to_cart(array(
				'class' => 'btn-1 add_to_cart_button ajax_add_to_cart',
			));
			?>
		</div>
	</div>
</div>