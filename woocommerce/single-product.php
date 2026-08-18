
<?php
defined( 'ABSPATH' ) || exit;
get_header();
include get_template_directory() . '/template-parts/header-default.php';
?>


<?php
//get_footer( 'shop' );

include get_template_directory() . '/template-parts/footer-default.php';
get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
