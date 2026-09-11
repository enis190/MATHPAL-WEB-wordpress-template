jQuery(function($) {
    console.log('-> init Add to cart');

    $(document.body).on('added_to_cart', function(event, fragments, cart_hash, $button) {
        console.log('-> Add to cart');
        const $cartCount = $('.cart-count');
        const $cartWrapper = $('.cart-icon-wrapper');

        $cartCount.add($cartWrapper).removeClass('pulse');
        void $cartCount[0].offsetWidth;
        $cartCount.add($cartWrapper).addClass('pulse');
    });

    $(document).on('animationend', '.pulse', function() {
        $(this).removeClass('pulse');
    });
});