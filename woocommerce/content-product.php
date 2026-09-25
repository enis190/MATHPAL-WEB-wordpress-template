<?php

global $product;

// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding.
if (! is_a($product, WC_Product::class) || ! $product->is_visible()) {
	return;
}


$tag_categoria = wc_get_product_category_list($product->get_id(), ', '); // o cualquier taxonomía tuya
$edad = get_post_meta($product->get_id(), 'woo_edad', true);
$etiqueta = get_post_meta($product->get_id(), 'woo_etiqueta', true);
$resumen = get_post_meta($product->get_id(), 'woo_resumen', true);
$duracion = get_post_meta($product->get_id(), 'woo_duracion', true);
$titulo = $product->get_name();
$descripcion = $product->get_description();
$imagen = get_the_post_thumbnail_url($product->get_id(), 'medium') ?: 'https://www.mathpal.us/wp-content/themes/mathpal/assets/img/img_DiagnosticClass.png';
$link = get_permalink($product->get_id());
$sku = $product->get_sku();
$buy_now_url   = esc_url(wc_get_cart_url() . '?add-to-cart=' . $product->get_id());

?>

<div <?php wc_product_class('item col-md-4', $product); ?>>
	<div class="c-block fade-in-top" data-delay="100" data-duration="500">
		<div class="tag"><span><?php echo $etiqueta; ?></span></div>
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
			<h4 class="w-precio"><?php echo $product->get_price_html(); ?></h4>
			<?php if ($sku) : ?>
				<p class="sku">SKU: <?php echo esc_html($sku); ?></p>
			<?php endif; ?>
			<h3><?php echo esc_html($titulo); ?></h3>
			<?php if ($duracion) : ?>
				<p class="duracion"><span><?php echo esc_html($duracion); ?></span></p>
			<?php endif; ?>


			<div class="woo-description">
				<?php echo wp_kses_post($resumen); ?>
			</div>

			<?php
			// ** btn agregar a carrito + ajax ver carrito **
			// woocommerce_template_loop_add_to_cart(array(
			// 	'class' => 'btn-1 add_to_cart_button ajax_add_to_cart',
			// ));
			?>

			<?php
			$product_id = $product->get_id();
			$product_price = (float) wc_get_price_to_display($product);
			$product_currency = get_woocommerce_currency();
			?>

			<a
				href="<?php echo esc_url($product->add_to_cart_url()); ?>"
				class="button btn-1 add_to_cart_button ajax_add_to_cart product_type_simple mathpal-custom-add-to-cart"
				data-product_id="<?php echo esc_attr($product_id); ?>"
				data-product_sku="<?php echo esc_attr($product->get_sku()); ?>"
				data-product_name="<?php echo esc_attr($product->get_name()); ?>"
				data-product_price="<?php echo esc_attr(wc_format_decimal($product_price, 2)); ?>"
				data-currency="<?php echo esc_attr($product_currency); ?>"
				data-quantity="1"
				aria-label="<?php echo esc_attr($product->add_to_cart_description()); ?>"
				rel="nofollow"
			>
				<?php echo esc_html($product->add_to_cart_text()); ?>
			</a>

			<!-- btn directo agregar y ver carrito -->
			<a href="<?php echo $buy_now_url; ?>" class="btn-1">
				Buy now <i class="fa-solid fa-circle-arrow-right"></i>
			</a>
		</div>
	</div>
</div>





<script>
jQuery(function ($) {
  $(document.body).on(
    'added_to_cart',
    function (event, fragments, cartHash, $button) {
      if (
        !$button ||
        !$button.hasClass('mathpal-custom-add-to-cart')
      ) {
        return;
      }

      var productId = String(
        $button.attr('data-product_id') || ''
      );

      var productName = String(
        $button.attr('data-product_name') || ''
      );

      var productPrice = Number(
        $button.attr('data-product_price') || 0
      );

      var quantity = Number(
        $button.attr('data-quantity') || 1
      );

      var currency = String(
        $button.attr('data-currency') || 'PEN'
      );

      window.dataLayer = window.dataLayer || [];

      window.dataLayer.push({
        ecommerce: null
      });

      window.dataLayer.push({
        event: 'add_to_cart',
        ecommerce: {
          currency: currency,
          value: Number(
            (productPrice * quantity).toFixed(2)
          ),
          items: [
            {
              item_id: productId,
              item_name: productName,
              price: productPrice,
              quantity: quantity
            }
          ]
        }
      });
    }
  );
});
</script>